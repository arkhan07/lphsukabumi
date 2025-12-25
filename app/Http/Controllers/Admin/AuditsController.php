<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Schedule;
use App\Models\Finding;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuditsController extends Controller
{
    /**
     * Display schedules
     */
    public function schedules(Request $request)
    {
        $query = Schedule::with(['submission', 'auditor']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by date range
        if ($request->filled('start_date')) {
            $query->whereDate('scheduled_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('scheduled_date', '<=', $request->end_date);
        }

        $schedules = $query->latest('scheduled_date')->paginate(15);

        $auditors = User::whereHas('roles', function($q) {
            $q->where('name', 'auditor_halal');
        })->get();

        $submissions = Submission::whereIn('status', ['ready_for_assignment', 'assigned'])->get();

        // Statistics
        $stats = [
            'total' => Schedule::count(),
            'scheduled' => Schedule::where('status', 'scheduled')->count(),
            'completed' => Schedule::where('status', 'completed')->count(),
            'cancelled' => Schedule::where('status', 'cancelled')->count(),
        ];

        return view('admin.audits.schedules', compact('schedules', 'auditors', 'submissions', 'stats'));
    }

    /**
     * Store new schedule
     */
    public function storeSchedule(Request $request)
    {
        $validated = $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'auditor_id' => 'required|exists:users,id',
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required',
            'duration_hours' => 'nullable|integer|min:1',
            'location' => 'nullable|string',
            'location_address' => 'nullable|string',
            'audit_type' => 'required|in:on_site,desk_review,hybrid',
            'notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $validated['status'] = 'scheduled';
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
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required',
            'duration_hours' => 'nullable|integer|min:1',
            'location' => 'nullable|string',
            'location_address' => 'nullable|string',
            'audit_type' => 'required|in:on_site,desk_review,hybrid',
            'notes' => 'nullable|string',
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
        $query = Audit::with(['submission', 'auditor', 'report']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by audit result
        if ($request->filled('audit_result')) {
            $query->where('audit_result', $request->audit_result);
        }

        // Date range filter
        if ($request->filled('start_date')) {
            $query->whereDate('audit_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('audit_date', '<=', $request->end_date);
        }

        $audits = $query->latest('audit_date')->paginate(15);

        // Statistics
        $stats = [
            'total' => Audit::count(),
            'passed' => Audit::where('audit_result', 'passed')->count(),
            'conditional' => Audit::where('audit_result', 'conditional')->count(),
            'failed' => Audit::where('audit_result', 'failed')->count(),
        ];

        return view('admin.audits.reports', compact('audits', 'stats'));
    }

    /**
     * Store audit report
     */
    public function storeReport(Request $request)
    {
        $validated = $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
            'submission_id' => 'required|exists:submissions,id',
            'auditor_id' => 'required|exists:users,id',
            'audit_date' => 'required|date',
            'audit_start_time' => 'nullable',
            'audit_end_time' => 'nullable',
            'location' => 'nullable|string',
            'audit_type' => 'required|in:on_site,desk_review,hybrid',
            'audit_scope' => 'nullable|string',
            'audit_result' => 'required|in:passed,conditional,failed',
            'compliance_score' => 'nullable|numeric|min:0|max:100',
            'recommendations' => 'nullable|string',
            'conclusion' => 'nullable|string',
            'next_steps' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $validated['status'] = 'submitted';
            $audit = Audit::create($validated);

            // Update submission status
            $submission = Submission::find($validated['submission_id']);
            $submission->update([
                'status' => 'audit_completed',
                'audit_completed_at' => now(),
            ]);

            // Update schedule status
            $schedule = Schedule::find($validated['schedule_id']);
            $schedule->update([
                'status' => 'completed',
                'completed_at' => now(),
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
        $query = Finding::with(['audit', 'submission']);

        // Filter by severity
        if ($request->filled('severity')) {
            $query->where('severity', $request->severity);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('finding_description', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }

        $findings = $query->latest()->paginate(15);

        // Statistics
        $stats = [
            'critical' => Finding::where('severity', 'critical')->count(),
            'major' => Finding::where('severity', 'major')->count(),
            'minor' => Finding::where('severity', 'minor')->count(),
            'observation' => Finding::where('severity', 'observation')->count(),
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
            'category' => 'required|string|max:255',
            'severity' => 'required|in:critical,major,minor,observation',
            'finding_description' => 'required|string',
            'evidence' => 'nullable|string',
            'recommendation' => 'nullable|string',
            'corrective_action' => 'nullable|string',
            'responsible_person' => 'nullable|string',
            'target_date' => 'nullable|date',
        ]);

        $validated['status'] = 'open';
        Finding::create($validated);

        return back()->with('success', 'Temuan audit berhasil ditambahkan');
    }

    /**
     * Update finding
     */
    public function updateFinding(Request $request, Finding $finding)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'severity' => 'required|in:critical,major,minor,observation',
            'finding_description' => 'required|string',
            'evidence' => 'nullable|string',
            'recommendation' => 'nullable|string',
            'corrective_action' => 'nullable|string',
            'responsible_person' => 'nullable|string',
            'target_date' => 'nullable|date',
            'status' => 'required|in:open,in_progress,resolved,verified,closed',
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
