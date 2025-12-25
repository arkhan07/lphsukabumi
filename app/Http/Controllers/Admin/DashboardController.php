<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Product;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Audit;
use App\Models\Document;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Admin LPH dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Statistics
        $stats = [
            'total_submissions' => Submission::count(),
            'approved_submissions' => Submission::whereIn('status', ['approved', 'completed'])->count(),
            'pending_submissions' => Submission::whereIn('status', ['submitted', 'screening', 'verification'])->count(),
            'total_products' => Product::count(),
            'certified_products' => Product::where('halal_status', 'halal')->count(),
            'total_users' => User::count(),
            'total_auditors' => User::whereHas('roles', function($q) {
                $q->where('slug', 'auditor_halal');
            })->count(),
            'pending_invoices' => Invoice::where('status', 'sent')->count(),
            'total_revenue' => Invoice::where('status', 'paid')->sum('total_amount'),
            'revenue_this_month' => Invoice::where('status', 'paid')
                ->whereMonth('fully_paid_at', now()->month)
                ->whereYear('fully_paid_at', now()->year)
                ->sum('total_amount'),
            'pending_documents' => Document::where('status', 'pending_review')->count(),
            'total_audits' => Audit::count(),
            'audits_this_month' => Audit::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
            'audits_completed_this_month' => Audit::where('status', 'completed')
                ->whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
        ];

        // Monthly submissions data for chart
        $monthly_submissions = Submission::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        // Fill missing months with 0
        $submission_chart_data = [];
        for ($i = 1; $i <= 12; $i++) {
            $submission_chart_data[] = $monthly_submissions[$i] ?? 0;
        }

        // Status distribution for donut chart
        $status_distribution = [
            'in_progress' => Submission::whereIn('status', ['submitted', 'screening', 'verification', 'assigned'])->count(),
            'verification' => Submission::where('status', 'verification')->count(),
            'audit' => Submission::where('status', 'audit_in_progress')->count(),
            'approved' => Submission::whereIn('status', ['approved', 'completed'])->count(),
        ];

        // Recent submissions
        $recent_submissions = Submission::with(['user', 'businessType'])
            ->latest()
            ->limit(5)
            ->get();

        // Upcoming audits - scheduled for future dates
        $recent_audits = Audit::with(['submission.user', 'leadAuditor'])
            ->where('status', 'planned')
            ->where('planned_start_date', '>=', now())
            ->orderBy('planned_start_date')
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_submissions', 'recent_audits', 'submission_chart_data', 'status_distribution'));
    }
}
