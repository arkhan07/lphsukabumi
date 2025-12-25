<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Schedule;
use App\Models\Finding;
use App\Models\Report;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuditsController extends Controller
{
    /**
     * Display a listing of audits
     */
    public function index(Request $request)
    {
        $query = Audit::with(['submission', 'leadAuditor', 'assignment']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by audit type
        if ($request->filled('audit_type')) {
            $query->where('audit_type', $request->audit_type);
        }

        // Filter by overall result
        if ($request->filled('overall_result')) {
            $query->where('overall_result', $request->overall_result);
        }

        // Filter by date range
        if ($request->filled('start_date')) {
            $query->whereDate('planned_start_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('planned_start_date', '<=', $request->end_date);
        }

        // Search by audit number or company name
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('audit_number', 'like', "%{$search}%")
                  ->orWhereHas('submission', function($q2) use ($search) {
                      $q2->where('company_name', 'like', "%{$search}%");
                  });
            });
        }

        $audits = $query->latest('planned_start_date')->paginate(15);

        // Statistics
        $stats = [
            'total' => Audit::count(),
            'planned' => Audit::where('status', 'planned')->count(),
            'in_progress' => Audit::where('status', 'in_progress')->count(),
            'completed' => Audit::where('status', 'completed')->count(),
            'passed' => Audit::where('overall_result', 'passed')->count(),
            'failed' => Audit::where('overall_result', 'failed')->count(),
            'needs_correction' => Audit::where('overall_result', 'passed_with_conditions')->count(),
            'this_month' => Audit::whereMonth('planned_start_date', now()->month)->whereYear('planned_start_date', now()->year)->count(),
        ];

        return view('admin.audits.index', compact('audits', 'stats'));
    }

    /**
     * Show the form for creating a new audit
     */
    public function create()
    {
        $submissions = Submission::whereIn('status', ['scheduled', 'assigned'])->get();
        $auditors = User::whereHas('roles', function($q) {
            $q->where('name', 'auditor_halal');
        })->get();

        return view('admin.audits.create', compact('submissions', 'auditors'));
    }

    /**
     * Store a newly created audit
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'submission_id' => 'required|exists:submissions,id',
            'lead_auditor_id' => 'required|exists:users,id',
            'audit_type' => 'required|in:stage_1,stage_2,surveillance,re_certification,special',
            'audit_scope' => 'required|string',
            'audit_criteria' => 'nullable|array',
            'audit_team' => 'nullable|array',
            'planned_start_date' => 'required|date',
            'planned_end_date' => 'required|date|after_or_equal:planned_start_date',
            'audit_days' => 'nullable|integer|min:1',
            'areas_audited' => 'nullable|array',
            'processes_audited' => 'nullable|array',
        ]);

        DB::beginTransaction();
        try {
            // Generate audit number
            $lastAudit = Audit::latest('id')->first();
            $nextNumber = $lastAudit ? (intval(substr($lastAudit->audit_number, -5)) + 1) : 1;
            $validated['audit_number'] = 'AUD-' . date('Ym') . '-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);

            $validated['status'] = 'planned';
            $validated['overall_result'] = 'pending';
            $validated['progress_percentage'] = 0;

            $audit = Audit::create($validated);

            // Update submission status
            $submission = Submission::find($validated['submission_id']);
            $submission->update([
                'status' => 'audit_in_progress',
            ]);

            DB::commit();

            return redirect()->route('admin.audits.show', $audit->id)
                ->with('success', 'Audit berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal membuat audit: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified audit
     */
    public function show(Audit $audit)
    {
        $audit->load([
            'submission',
            'assignment',
            'leadAuditor',
            'findings' => function($query) {
                $query->latest();
            }
        ]);

        // Finding statistics
        $findingStats = [
            'total' => $audit->findings->count(),
            'critical' => $audit->findings->where('severity', 'critical')->count(),
            'major' => $audit->findings->where('severity', 'major')->count(),
            'minor' => $audit->findings->where('severity', 'minor')->count(),
            'observation' => $audit->findings->where('severity', 'observation')->count(),
            'open' => $audit->findings->where('status', 'open')->count(),
            'resolved' => $audit->findings->where('status', 'resolved')->count(),
        ];

        return view('admin.audits.show', compact('audit', 'findingStats'));
    }

    /**
     * Show the form for editing the specified audit
     */
    public function edit(Audit $audit)
    {
        // Only allow editing if audit is not completed
        if ($audit->status === 'completed') {
            return back()->with('error', 'Audit yang sudah selesai tidak dapat diedit');
        }

        $submissions = Submission::all();
        $auditors = User::whereHas('roles', function($q) {
            $q->where('name', 'auditor_halal');
        })->get();

        return view('admin.audits.edit', compact('audit', 'submissions', 'auditors'));
    }

    /**
     * Update the specified audit
     */
    public function update(Request $request, Audit $audit)
    {
        // Only allow updating if audit is not completed
        if ($audit->status === 'completed') {
            return back()->with('error', 'Audit yang sudah selesai tidak dapat diubah');
        }

        $validated = $request->validate([
            'lead_auditor_id' => 'required|exists:users,id',
            'audit_type' => 'required|in:stage_1,stage_2,surveillance,re_certification,special',
            'audit_scope' => 'required|string',
            'audit_criteria' => 'nullable|array',
            'audit_team' => 'nullable|array',
            'planned_start_date' => 'required|date',
            'planned_end_date' => 'required|date|after_or_equal:planned_start_date',
            'actual_start_date' => 'nullable|date',
            'actual_end_date' => 'nullable|date|after_or_equal:actual_start_date',
            'audit_days' => 'nullable|integer|min:1',
            'status' => 'required|in:planned,in_progress,completed,cancelled,on_hold',
            'progress_percentage' => 'nullable|integer|min:0|max:100',
            'areas_audited' => 'nullable|array',
            'processes_audited' => 'nullable|array',
            'personnel_interviewed' => 'nullable|array',
            'opening_meeting_time' => 'nullable|date',
            'opening_meeting_attendees' => 'nullable|array',
            'opening_meeting_notes' => 'nullable|string',
            'closing_meeting_time' => 'nullable|date',
            'closing_meeting_attendees' => 'nullable|array',
            'closing_meeting_notes' => 'nullable|string',
            'overall_result' => 'required|in:pending,passed,passed_with_conditions,failed,need_re_audit',
            'audit_conclusion' => 'nullable|string',
            'recommendations' => 'nullable|string',
            'audit_evidence' => 'nullable|array',
            'audit_notes' => 'nullable|string',
        ]);

        $audit->update($validated);

        return redirect()->route('admin.audits.show', $audit->id)
            ->with('success', 'Audit berhasil diperbarui');
    }

    /**
     * Remove the specified audit
     */
    public function destroy(Audit $audit)
    {
        // Only allow deletion if audit is planned or cancelled
        if (!in_array($audit->status, ['planned', 'cancelled'])) {
            return back()->with('error', 'Hanya audit dengan status planned atau cancelled yang dapat dihapus');
        }

        DB::beginTransaction();
        try {
            // Delete related findings
            $audit->findings()->delete();

            // Delete the audit
            $audit->delete();

            DB::commit();

            return redirect()->route('admin.audits.index')
                ->with('success', 'Audit berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menghapus audit: ' . $e->getMessage());
        }
    }

    /**
     * Display schedules
     */
    public function schedules(Request $request)
    {
        $query = Schedule::with(['submission', 'assignment']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by date range
        if ($request->filled('start_date')) {
            $query->whereDate('schedule_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('schedule_date', '<=', $request->end_date);
        }

        $schedules = $query->latest('schedule_date')->paginate(15);

        $auditors = User::whereHas('roles', function($q) {
            $q->where('name', 'auditor_halal');
        })->get();

        $submissions = Submission::whereIn('status', ['ready_for_assignment', 'assigned'])->get();

        // Statistics
        $stats = [
            'total' => Schedule::count(),
            'scheduled' => Schedule::where('status', 'scheduled')->count(),
            'in_progress' => Schedule::where('status', 'in_progress')->count(),
            'completed' => Schedule::where('status', 'completed')->count(),
            'cancelled' => Schedule::where('status', 'cancelled')->count(),
            'this_month' => Schedule::whereMonth('schedule_date', now()->month)
                ->whereYear('schedule_date', now()->year)
                ->count(),
        ];

        return view('admin.audits.schedules', compact('schedules', 'auditors', 'submissions', 'stats'));
    }

    /**
     * Store new schedule
     */
    public function storeSchedule(Request $request)
    {
        $validated = $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'submission_id' => 'required|exists:submissions,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'schedule_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'nullable|string',
            'location_address' => 'nullable|string',
            'activity_type' => 'required|in:opening_meeting,document_review,facility_tour,interview,observation,sampling,testing,closing_meeting,other',
            'auditor_ids' => 'nullable|array',
            'objectives' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $validated['status'] = 'scheduled';
            $validated['created_by'] = auth()->id();
            $schedule = Schedule::create($validated);

            // Update submission status
            $submission = Submission::find($validated['submission_id']);
            $submission->update([
                'status' => 'scheduled',
                'assigned_at' => now(),
            ]);

            DB::commit();

            return back()->with('success', 'Jadwal audit berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal membuat jadwal: ' . $e->getMessage());
        }
    }

    /**
     * Update schedule
     */
    public function updateSchedule(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'schedule_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'nullable|string',
            'location_address' => 'nullable|string',
            'activity_type' => 'required|in:opening_meeting,document_review,facility_tour,interview,observation,sampling,testing,closing_meeting,other',
            'auditor_ids' => 'nullable|array',
            'objectives' => 'nullable|string',
        ]);

        $schedule->update($validated);

        return back()->with('success', 'Jadwal audit berhasil diperbarui');
    }

    /**
     * Cancel schedule
     */
    public function cancelSchedule(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            'cancellation_reason' => 'required|string',
        ]);

        $schedule->update([
            'status' => 'cancelled',
            'cancellation_reason' => $validated['cancellation_reason'],
            'cancelled_by' => auth()->id(),
            'cancelled_at' => now(),
        ]);

        return back()->with('success', 'Jadwal audit berhasil dibatalkan');
    }

    /**
     * Display audit reports
     */
    public function reports(Request $request)
    {
        $query = Report::with(['audit', 'submission', 'preparedBy']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by report type
        if ($request->filled('report_type')) {
            $query->where('report_type', $request->report_type);
        }

        // Filter by overall result
        if ($request->filled('overall_result')) {
            $query->where('overall_result', $request->overall_result);
        }

        // Date range filter
        if ($request->filled('start_date')) {
            $query->whereDate('report_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('report_date', '<=', $request->end_date);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('report_number', 'like', "%{$search}%")
                  ->orWhere('report_title', 'like', "%{$search}%")
                  ->orWhereHas('submission', function($sq) use ($search) {
                      $sq->where('company_name', 'like', "%{$search}%");
                  });
            });
        }

        $reports = $query->latest('report_date')->paginate(15);

        // Statistics
        $stats = [
            'total' => Report::count(),
            'draft' => Report::where('status', 'draft')->count(),
            'submitted' => Report::where('status', 'submitted')->count(),
            'approved' => Report::where('status', 'approved')->count(),
            'recommend_certification' => Report::where('overall_result', 'recommend_certification')->count(),
            'recommend_with_conditions' => Report::where('overall_result', 'recommend_with_conditions')->count(),
            'not_recommend' => Report::where('overall_result', 'not_recommend')->count(),
            'this_month' => Report::whereMonth('report_date', now()->month)
                ->whereYear('report_date', now()->year)
                ->count(),
        ];

        return view('admin.audits.reports', compact('reports', 'stats'));
    }

    /**
     * Store audit report
     */
    public function storeReport(Request $request)
    {
        $validated = $request->validate([
            'audit_id' => 'required|exists:audits,id',
            'submission_id' => 'required|exists:submissions,id',
            'report_type' => 'required|in:audit_report,surveillance_report,re_certification_report,special_audit_report,corrective_action_verification_report',
            'report_title' => 'required|string|max:255',
            'executive_summary' => 'nullable|string',
            'audit_scope' => 'required|string',
            'audit_objectives' => 'nullable|array',
            'audit_criteria' => 'nullable|array',
            'audit_methodology' => 'nullable|array',
            'total_findings' => 'nullable|integer|min:0',
            'critical_findings' => 'nullable|integer|min:0',
            'major_findings' => 'nullable|integer|min:0',
            'minor_findings' => 'nullable|integer|min:0',
            'observations' => 'nullable|integer|min:0',
            'findings_summary' => 'nullable|string',
            'overall_result' => 'required|in:recommend_certification,recommend_with_conditions,not_recommend,need_re_audit',
            'audit_conclusion' => 'required|string',
            'strengths' => 'nullable|string',
            'weaknesses' => 'nullable|string',
            'recommendations' => 'nullable|string',
            'halal_compliance_score' => 'nullable|integer|min:0|max:100',
            'halal_compliance_level' => 'nullable|in:excellent,good,satisfactory,needs_improvement,not_compliant',
            'report_date' => 'required|date',
        ]);

        DB::beginTransaction();
        try {
            // Generate report number
            $lastReport = Report::latest('id')->first();
            $nextNumber = $lastReport ? (intval(substr($lastReport->report_number, -5)) + 1) : 1;
            $validated['report_number'] = 'REP-' . date('Ym') . '-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);

            $validated['status'] = 'draft';
            $validated['prepared_by'] = auth()->id();
            $report = Report::create($validated);

            // Update audit status
            $audit = Audit::find($validated['audit_id']);
            $audit->update([
                'status' => 'completed',
                'overall_result' => $validated['overall_result'],
            ]);

            DB::commit();

            return back()->with('success', 'Laporan audit berhasil disimpan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal menyimpan laporan: ' . $e->getMessage());
        }
    }

    /**
     * Display audit findings
     */
    public function findings(Request $request)
    {
        $query = Finding::with(['audit', 'submission', 'auditor']);

        // Filter by severity
        if ($request->filled('severity')) {
            $query->where('severity', $request->severity);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by action status
        if ($request->filled('action_status')) {
            $query->where('action_status', $request->action_status);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('finding_number', 'like', "%{$search}%");
            });
        }

        $findings = $query->latest()->paginate(15);

        // Statistics
        $stats = [
            'total' => Finding::count(),
            'critical' => Finding::where('severity', 'critical')->count(),
            'high' => Finding::where('severity', 'high')->count(),
            'medium' => Finding::where('severity', 'medium')->count(),
            'low' => Finding::where('severity', 'low')->count(),
            'open' => Finding::where('status', 'draft')->count(),
            'closed' => Finding::where('status', 'closed')->count(),
            'this_month' => Finding::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
        ];

        return view('admin.audits.findings', compact('findings', 'stats'));
    }

    /**
     * Store finding
     */
    public function storeFinding(Request $request)
    {
        $validated = $request->validate([
            'audit_id' => 'required|exists:audits,id',
            'submission_id' => 'required|exists:submissions,id',
            'auditor_id' => 'required|exists:users,id',
            'finding_type' => 'required|in:non_conformity_critical,non_conformity_major,non_conformity_minor,observation,opportunity_for_improvement,positive_finding',
            'severity' => 'required|in:critical,high,medium,low',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'evidence' => 'nullable|string',
            'location' => 'nullable|string',
            'area_department' => 'nullable|string',
            'requirement_reference' => 'nullable|string',
            'criteria_not_met' => 'nullable|string',
            'root_cause' => 'nullable|string',
            'requires_corrective_action' => 'nullable|boolean',
            'proposed_corrective_action' => 'nullable|string',
            'responsible_person_id' => 'nullable|exists:users,id',
            'target_completion_date' => 'nullable|date',
        ]);

        DB::beginTransaction();
        try {
            // Generate finding number
            $lastFinding = Finding::latest('id')->first();
            $nextNumber = $lastFinding ? (intval(substr($lastFinding->finding_number, -5)) + 1) : 1;
            $validated['finding_number'] = 'FND-' . date('Ym') . '-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);

            $validated['status'] = 'draft';
            $validated['action_status'] = 'open';
            Finding::create($validated);

            DB::commit();

            return back()->with('success', 'Temuan audit berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal menambahkan temuan: ' . $e->getMessage());
        }
    }

    /**
     * Update finding
     */
    public function updateFinding(Request $request, Finding $finding)
    {
        $validated = $request->validate([
            'finding_type' => 'required|in:non_conformity_critical,non_conformity_major,non_conformity_minor,observation,opportunity_for_improvement,positive_finding',
            'severity' => 'required|in:critical,high,medium,low',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'evidence' => 'nullable|string',
            'location' => 'nullable|string',
            'area_department' => 'nullable|string',
            'requirement_reference' => 'nullable|string',
            'criteria_not_met' => 'nullable|string',
            'root_cause' => 'nullable|string',
            'requires_corrective_action' => 'nullable|boolean',
            'proposed_corrective_action' => 'nullable|string',
            'responsible_person_id' => 'nullable|exists:users,id',
            'target_completion_date' => 'nullable|date',
            'status' => 'required|in:draft,submitted,acknowledged,resolved,closed',
            'action_status' => 'required|in:open,in_progress,pending_verification,verified,closed,overdue',
        ]);

        $finding->update($validated);

        return back()->with('success', 'Temuan audit berhasil diperbarui');
    }

    /**
     * Resolve finding
     */
    public function resolveFinding(Request $request, Finding $finding)
    {
        $validated = $request->validate([
            'resolution_notes' => 'required|string',
        ]);

        $finding->update([
            'status' => 'resolved',
            'resolution_notes' => $validated['resolution_notes'],
            'resolved_by' => auth()->id(),
            'resolved_at' => now(),
        ]);

        return back()->with('success', 'Temuan berhasil ditandai selesai');
    }

    /**
     * Verify finding resolution
     */
    public function verifyFinding(Request $request, Finding $finding)
    {
        $validated = $request->validate([
            'verification_notes' => 'nullable|string',
        ]);

        $finding->update([
            'status' => 'verified',
            'verification_notes' => $validated['verification_notes'] ?? null,
            'verified_by' => auth()->id(),
            'verified_at' => now(),
        ]);

        return back()->with('success', 'Temuan berhasil diverifikasi');
    }
}
