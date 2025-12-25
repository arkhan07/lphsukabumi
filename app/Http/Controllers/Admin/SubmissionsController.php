<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Region;
use App\Models\BusinessType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubmissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view_submissions')->only(['index', 'show']);
        $this->middleware('permission:create_submissions')->only(['create', 'store']);
        $this->middleware('permission:edit_submissions')->only(['edit', 'update']);
        $this->middleware('permission:delete_submissions')->only('destroy');
        $this->middleware('permission:manage_submissions')->only(['submit', 'approve', 'reject', 'updateStatus']);
    }

    /**
     * Display a listing of submissions
     */
    public function index(Request $request)
    {
        $query = Submission::with(['user', 'region', 'businessType']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by certification type
        if ($request->filled('certification_type')) {
            $query->where('certification_type', $request->certification_type);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('submission_number', 'like', "%{$search}%")
                  ->orWhere('company_name', 'like', "%{$search}%")
                  ->orWhere('company_email', 'like', "%{$search}%");
            });
        }

        // Date range filter
        if ($request->filled('start_date')) {
            $query->whereDate('submission_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('submission_date', '<=', $request->end_date);
        }

        $submissions = $query->latest()->paginate(15);

        // Statistics
        $stats = [
            'total' => Submission::count(),
            'draft' => Submission::where('status', 'draft')->count(),
            'submitted' => Submission::where('status', 'submitted')->count(),
            'screening' => Submission::where('status', 'screening')->count(),
            'verification' => Submission::where('status', 'verification')->count(),
            'approved' => Submission::where('status', 'approved')->count(),
            'rejected' => Submission::where('status', 'rejected')->count(),
            'in_progress' => Submission::whereIn('status', ['verification', 'assigned', 'audit_in_progress'])->count(),
            'completed' => Submission::where('status', 'completed')->count(),
            'this_month' => Submission::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count(),
        ];

        return view('admin.submissions.index', compact('submissions', 'stats'));
    }

    /**
     * Show the form for creating a new submission
     */
    public function create()
    {
        $regions = Region::all();
        $businessTypes = BusinessType::all();
        $users = User::whereHas('roles', function($q) {
            $q->where('name', 'pelaku_usaha');
        })->get();

        return view('admin.submissions.create', compact('regions', 'businessTypes', 'users'));
    }

    /**
     * Store a newly created submission
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'company_name' => 'required|string|max:255',
            'company_email' => 'nullable|email',
            'company_phone' => 'nullable|string|max:20',
            'company_address' => 'nullable|string',
            'region_id' => 'nullable|exists:regions,id',
            'business_type_id' => 'nullable|exists:business_types,id',
            'npwp' => 'nullable|string|max:50',
            'nib' => 'nullable|string|max:50',
            'halal_certificate_number' => 'nullable|string|max:100',
            'certification_type' => 'required|in:new,renewal,extension',
            'submission_date' => 'nullable|date',
            'target_completion_date' => 'nullable|date',
            'production_location' => 'nullable|string',
            'location_latitude' => 'nullable|numeric|between:-90,90',
            'location_longitude' => 'nullable|numeric|between:-180,180',
            'employee_count' => 'nullable|integer|min:0',
            'production_capacity' => 'nullable|numeric|min:0',
            'production_capacity_unit' => 'nullable|string|max:50',
            'notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            // Generate submission number
            $lastSubmission = Submission::latest('id')->first();
            $nextNumber = $lastSubmission ? (intval(substr($lastSubmission->submission_number, -5)) + 1) : 1;
            $validated['submission_number'] = 'SUB-' . date('Ym') . '-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);

            $validated['status'] = 'draft';
            $validated['submission_date'] = $validated['submission_date'] ?? now();

            $submission = Submission::create($validated);

            DB::commit();

            return redirect()->route('admin.submissions.show', $submission)
                           ->with('success', 'Permohonan berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal membuat permohonan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified submission
     */
    public function show(Submission $submission)
    {
        $submission->load(['user', 'region', 'businessType', 'products', 'documents']);

        return view('admin.submissions.show', compact('submission'));
    }

    /**
     * Show the form for editing the specified submission
     */
    public function edit(Submission $submission)
    {
        $regions = Region::all();
        $businessTypes = BusinessType::all();
        $users = User::whereHas('roles', function($q) {
            $q->where('name', 'pelaku_usaha');
        })->get();

        return view('admin.submissions.edit', compact('submission', 'regions', 'businessTypes', 'users'));
    }

    /**
     * Update the specified submission
     */
    public function update(Request $request, Submission $submission)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'nullable|email',
            'company_phone' => 'nullable|string|max:20',
            'company_address' => 'nullable|string',
            'region_id' => 'nullable|exists:regions,id',
            'business_type_id' => 'nullable|exists:business_types,id',
            'npwp' => 'nullable|string|max:50',
            'nib' => 'nullable|string|max:50',
            'halal_certificate_number' => 'nullable|string|max:100',
            'certification_type' => 'required|in:new,renewal,extension',
            'target_completion_date' => 'nullable|date',
            'production_location' => 'nullable|string',
            'location_latitude' => 'nullable|numeric|between:-90,90',
            'location_longitude' => 'nullable|numeric|between:-180,180',
            'employee_count' => 'nullable|integer|min:0',
            'production_capacity' => 'nullable|numeric|min:0',
            'production_capacity_unit' => 'nullable|string|max:50',
            'notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $submission->update($validated);

            DB::commit();

            return redirect()->route('admin.submissions.show', $submission)
                           ->with('success', 'Permohonan berhasil diperbarui');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal memperbarui permohonan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified submission
     */
    public function destroy(Submission $submission)
    {
        if ($submission->status !== 'draft') {
            return back()->with('error', 'Hanya permohonan draft yang dapat dihapus');
        }

        DB::beginTransaction();
        try {
            $submission->delete();

            DB::commit();

            return redirect()->route('admin.submissions.index')
                           ->with('success', 'Permohonan berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menghapus permohonan: ' . $e->getMessage());
        }
    }

    /**
     * Update submission status
     */
    public function updateStatus(Request $request, Submission $submission)
    {
        $validated = $request->validate([
            'status' => 'required|in:draft,submitted,screening,screening_approved,screening_rejected,verification,verification_approved,verification_revision,ready_for_assignment,assigned,scheduled,audit_in_progress,audit_completed,report_submitted,report_accepted,report_revision,submitted_to_fatwa,submitted_to_bpjph,approved,rejected,cancelled,completed',
            'rejection_reason' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $submission->status = $validated['status'];

            if (isset($validated['rejection_reason'])) {
                $submission->rejection_reason = $validated['rejection_reason'];
            }

            if (isset($validated['notes'])) {
                $submission->notes = $validated['notes'];
            }

            // Update timestamp based on status
            switch ($validated['status']) {
                case 'submitted':
                    $submission->submitted_at = now();
                    break;
                case 'screening_approved':
                    $submission->screening_completed_at = now();
                    break;
                case 'verification_approved':
                    $submission->verification_completed_at = now();
                    break;
                case 'assigned':
                    $submission->assigned_at = now();
                    break;
                case 'audit_completed':
                    $submission->audit_completed_at = now();
                    break;
                case 'report_submitted':
                    $submission->report_submitted_at = now();
                    break;
                case 'submitted_to_fatwa':
                    $submission->submitted_to_fatwa_at = now();
                    break;
                case 'submitted_to_bpjph':
                    $submission->submitted_to_bpjph_at = now();
                    break;
                case 'approved':
                    $submission->approved_at = now();
                    break;
                case 'completed':
                    $submission->completed_at = now();
                    break;
            }

            $submission->save();

            DB::commit();

            return back()->with('success', 'Status permohonan berhasil diperbarui');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal memperbarui status: ' . $e->getMessage());
        }
    }

    /**
     * Submit the submission (change from draft to submitted)
     */
    public function submit(Submission $submission)
    {
        if ($submission->status !== 'draft') {
            return back()->with('error', 'Hanya permohonan draft yang dapat diajukan');
        }

        DB::beginTransaction();
        try {
            $submission->update([
                'status' => 'submitted',
                'submitted_at' => now(),
            ]);

            DB::commit();

            return back()->with('success', 'Permohonan berhasil diajukan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal mengajukan permohonan: ' . $e->getMessage());
        }
    }

    /**
     * Approve submission
     */
    public function approve(Submission $submission)
    {
        DB::beginTransaction();
        try {
            $submission->update([
                'status' => 'approved',
                'approved_at' => now(),
            ]);

            DB::commit();

            return back()->with('success', 'Permohonan berhasil disetujui');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menyetujui permohonan: ' . $e->getMessage());
        }
    }

    /**
     * Reject submission
     */
    public function reject(Request $request, Submission $submission)
    {
        $validated = $request->validate([
            'rejection_reason' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $submission->update([
                'status' => 'rejected',
                'rejection_reason' => $validated['rejection_reason'],
            ]);

            DB::commit();

            return back()->with('success', 'Permohonan berhasil ditolak');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menolak permohonan: ' . $e->getMessage());
        }
    }
}
