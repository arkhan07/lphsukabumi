<?php

namespace App\Http\Controllers\ManajerTeknis;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Assignment;
use App\Models\Audit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display Manajer Teknis dashboard
     */
    public function index()
    {
        $user = auth()->user();

        // Ensure user is Manajer Teknis
        if (!$user->hasRole('manajer_teknis')) {
            abort(403, 'Akses ditolak. Anda bukan Manajer Teknis.');
        }

        // Submission Statistics
        $submissionStats = [
            'total' => Submission::count(),
            'in_progress' => Submission::whereIn('status', [
                'submitted', 'screening', 'screening_approved', 'verification',
                'verification_approved', 'ready_for_assignment', 'assigned',
                'scheduled', 'audit_in_progress', 'audit_completed', 'report_submitted'
            ])->count(),
            'ready_for_assignment' => Submission::where('status', 'ready_for_assignment')->count(),
            'assigned' => Submission::where('status', 'assigned')->count(),
            'audit_in_progress' => Submission::where('status', 'audit_in_progress')->count(),
            'completed_this_month' => Submission::where('status', 'completed')
                ->whereYear('completed_at', now()->year)
                ->whereMonth('completed_at', now()->month)
                ->count(),
        ];

        // Auditor Workload Statistics
        $auditorWorkload = DB::table('assignments')
            ->select('auditor_id', DB::raw('count(*) as total_assignments'))
            ->whereIn('status', ['assigned', 'accepted', 'in_progress'])
            ->groupBy('auditor_id')
            ->get()
            ->map(function($item) {
                $auditor = User::find($item->auditor_id);
                return [
                    'auditor' => $auditor,
                    'total_assignments' => $item->total_assignments,
                    'in_progress' => Assignment::where('auditor_id', $item->auditor_id)
                        ->where('status', 'in_progress')
                        ->count(),
                    'pending_acceptance' => Assignment::where('auditor_id', $item->auditor_id)
                        ->where('status', 'assigned')
                        ->count(),
                ];
            });

        // Timeline Compliance
        $overdueSubmissions = Submission::where('target_completion_date', '<', now())
            ->whereIn('status', [
                'submitted', 'screening', 'screening_approved', 'verification',
                'verification_approved', 'ready_for_assignment', 'assigned',
                'scheduled', 'audit_in_progress', 'audit_completed', 'report_submitted'
            ])
            ->count();

        $dueSoonSubmissions = Submission::whereBetween('target_completion_date', [now(), now()->addDays(7)])
            ->whereIn('status', [
                'submitted', 'screening', 'screening_approved', 'verification',
                'verification_approved', 'ready_for_assignment', 'assigned',
                'scheduled', 'audit_in_progress', 'audit_completed', 'report_submitted'
            ])
            ->count();

        // Recent Submissions (in progress)
        $recentSubmissions = Submission::with(['user', 'region', 'businessType'])
            ->whereIn('status', [
                'submitted', 'screening', 'screening_approved', 'verification',
                'verification_approved', 'ready_for_assignment', 'assigned',
                'scheduled', 'audit_in_progress', 'audit_completed', 'report_submitted'
            ])
            ->orderBy('updated_at', 'desc')
            ->take(10)
            ->get();

        // Submissions needing assignment
        $needsAssignment = Submission::with(['user', 'region', 'businessType'])
            ->where('status', 'ready_for_assignment')
            ->orderBy('submission_date', 'asc')
            ->take(5)
            ->get();

        // Recent Assignments
        $recentAssignments = Assignment::with(['submission.user', 'auditor', 'assignedBy'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Active Audits
        $activeAudits = Audit::with(['submission.user', 'leadAuditor'])
            ->whereIn('status', ['planned', 'in_progress'])
            ->orderBy('planned_start_date', 'asc')
            ->take(5)
            ->get();

        return view('manajer-teknis.dashboard', compact(
            'submissionStats',
            'auditorWorkload',
            'overdueSubmissions',
            'dueSoonSubmissions',
            'recentSubmissions',
            'needsAssignment',
            'recentAssignments',
            'activeAudits'
        ));
    }

    /**
     * Get all auditors for assignment
     */
    public function getAuditors()
    {
        $auditors = User::whereHas('roles', function($q) {
            $q->where('slug', 'auditor_halal');
        })->get();

        return response()->json($auditors);
    }

    /**
     * Get auditor workload details
     */
    public function auditorWorkload()
    {
        $auditors = User::whereHas('roles', function($q) {
            $q->where('slug', 'auditor_halal');
        })->get()->map(function($auditor) {
            $assignments = Assignment::where('auditor_id', $auditor->id);

            return [
                'auditor' => $auditor,
                'total_assignments' => $assignments->count(),
                'assigned' => (clone $assignments)->where('status', 'assigned')->count(),
                'accepted' => (clone $assignments)->where('status', 'accepted')->count(),
                'in_progress' => (clone $assignments)->where('status', 'in_progress')->count(),
                'completed' => (clone $assignments)->where('status', 'completed')->count(),
                'this_month' => (clone $assignments)
                    ->whereYear('created_at', now()->year)
                    ->whereMonth('created_at', now()->month)
                    ->count(),
            ];
        });

        return view('manajer-teknis.auditor-workload', compact('auditors'));
    }

    /**
     * View submission timeline compliance
     */
    public function timeline()
    {
        // Overdue submissions
        $overdueSubmissions = Submission::with(['user', 'region'])
            ->where('target_completion_date', '<', now())
            ->whereIn('status', [
                'submitted', 'screening', 'screening_approved', 'verification',
                'verification_approved', 'ready_for_assignment', 'assigned',
                'scheduled', 'audit_in_progress', 'audit_completed', 'report_submitted'
            ])
            ->orderBy('target_completion_date', 'asc')
            ->paginate(20, ['*'], 'overdue');

        // Due soon (within 7 days)
        $dueSoonSubmissions = Submission::with(['user', 'region'])
            ->whereBetween('target_completion_date', [now(), now()->addDays(7)])
            ->whereIn('status', [
                'submitted', 'screening', 'screening_approved', 'verification',
                'verification_approved', 'ready_for_assignment', 'assigned',
                'scheduled', 'audit_in_progress', 'audit_completed', 'report_submitted'
            ])
            ->orderBy('target_completion_date', 'asc')
            ->paginate(20, ['*'], 'due_soon');

        // On track
        $onTrackSubmissions = Submission::with(['user', 'region'])
            ->where('target_completion_date', '>', now()->addDays(7))
            ->whereIn('status', [
                'submitted', 'screening', 'screening_approved', 'verification',
                'verification_approved', 'ready_for_assignment', 'assigned',
                'scheduled', 'audit_in_progress', 'audit_completed', 'report_submitted'
            ])
            ->orderBy('target_completion_date', 'asc')
            ->paginate(20, ['*'], 'on_track');

        return view('manajer-teknis.timeline', compact('overdueSubmissions', 'dueSoonSubmissions', 'onTrackSubmissions'));
    }

    /**
     * Certification status overview
     */
    public function certificationStatus()
    {
        $statusCounts = Submission::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->get()
            ->mapWithKeys(function($item) {
                return [$item->status => $item->count];
            });

        $submissions = Submission::with(['user', 'region'])
            ->orderBy('updated_at', 'desc')
            ->paginate(20);

        return view('manajer-teknis.certification-status', compact('statusCounts', 'submissions'));
    }
}
