<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\InvoicePayment;
use App\Models\Audit;
use App\Models\Finding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * Certification reports
     */
    public function certification(Request $request)
    {
        // Date range filter
        $startDate = $request->input('start_date', now()->startOfYear());
        $endDate = $request->input('end_date', now());

        // Submission statistics
        $submissionStats = [
            'total' => Submission::whereBetween('created_at', [$startDate, $endDate])->count(),
            'new' => Submission::where('certification_type', 'new')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'renewal' => Submission::where('certification_type', 'renewal')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'extension' => Submission::where('certification_type', 'extension')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
        ];

        // Status statistics
        $statusStats = [
            'draft' => Submission::where('status', 'draft')->count(),
            'in_progress' => Submission::whereIn('status', [
                'submitted', 'screening', 'verification', 'assigned', 'audit_in_progress'
            ])->count(),
            'approved' => Submission::where('status', 'approved')->count(),
            'completed' => Submission::where('status', 'completed')->count(),
            'rejected' => Submission::where('status', 'rejected')->count(),
        ];

        // Certificate statistics
        $certificateStats = [
            'active' => Product::where('halal_status', 'halal')
                ->where('certificate_expiry_date', '>', now())
                ->count(),
            'expiring_soon' => Product::where('halal_status', 'halal')
                ->whereBetween('certificate_expiry_date', [now(), now()->addMonths(3)])
                ->count(),
            'expired' => Product::where('halal_status', 'halal')
                ->where('certificate_expiry_date', '<', now())
                ->count(),
        ];

        // Monthly trend data
        $monthlyTrend = Submission::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
            DB::raw('COUNT(*) as total')
        )
        ->whereBetween('created_at', [$startDate, $endDate])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Business type distribution
        $businessDistribution = Submission::select('business_types.name', DB::raw('COUNT(*) as total'))
            ->join('business_types', 'submissions.business_type_id', '=', 'business_types.id')
            ->whereBetween('submissions.created_at', [$startDate, $endDate])
            ->groupBy('business_types.name')
            ->get();

        return view('admin.reports.certification', compact(
            'submissionStats',
            'statusStats',
            'certificateStats',
            'monthlyTrend',
            'businessDistribution',
            'startDate',
            'endDate'
        ));
    }

    /**
     * Financial reports
     */
    public function financial(Request $request)
    {
        // Date range filter
        $startDate = $request->input('start_date', now()->startOfYear());
        $endDate = $request->input('end_date', now());

        // Revenue statistics
        $revenueStats = [
            'total_invoiced' => Invoice::whereBetween('invoice_date', [$startDate, $endDate])
                ->sum('total_amount'),
            'total_paid' => Invoice::where('status', 'paid')
                ->whereBetween('fully_paid_at', [$startDate, $endDate])
                ->sum('total_amount'),
            'total_pending' => Invoice::where('status', 'pending')
                ->whereBetween('invoice_date', [$startDate, $endDate])
                ->sum('total_amount'),
            'total_overdue' => Invoice::where('status', 'overdue')
                ->whereBetween('invoice_date', [$startDate, $endDate])
                ->sum('total_amount'),
        ];

        // Monthly revenue trend
        $monthlyRevenue = Invoice::select(
            DB::raw('DATE_FORMAT(invoice_date, "%Y-%m") as month'),
            DB::raw('SUM(total_amount) as total'),
            DB::raw('SUM(paid_amount) as paid')
        )
        ->whereBetween('invoice_date', [$startDate, $endDate])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Payment method distribution
        $paymentMethods = InvoicePayment::select('payment_method', DB::raw('COUNT(*) as count'))
            ->where('status', 'verified')
            ->whereBetween('payment_date', [$startDate, $endDate])
            ->groupBy('payment_method')
            ->get();

        // Top paying clients
        $topClients = Invoice::select('submissions.company_name', DB::raw('SUM(invoices.total_amount) as total'))
            ->join('submissions', 'invoices.submission_id', '=', 'submissions.id')
            ->where('invoices.status', 'paid')
            ->whereBetween('invoices.fully_paid_at', [$startDate, $endDate])
            ->groupBy('submissions.company_name')
            ->orderByDesc('total')
            ->limit(10)
            ->get();

        return view('admin.reports.financial', compact(
            'revenueStats',
            'monthlyRevenue',
            'paymentMethods',
            'topClients',
            'startDate',
            'endDate'
        ));
    }

    /**
     * Audit reports
     */
    public function audits(Request $request)
    {
        // Date range filter
        $startDate = $request->input('start_date', now()->startOfYear());
        $endDate = $request->input('end_date', now());

        // Audit statistics
        $auditStats = [
            'total' => Audit::whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'passed' => Audit::where('overall_result', 'passed')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'conditional' => Audit::where('overall_result', 'passed_with_conditions')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'failed' => Audit::where('overall_result', 'failed')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
        ];

        // Finding statistics
        $findingStats = [
            'critical' => Finding::where('severity', 'critical')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'major' => Finding::where('severity', 'major')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'minor' => Finding::where('severity', 'minor')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'observation' => Finding::where('severity', 'observation')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
        ];

        // Average compliance score
        $avgCompliance = Audit::whereBetween('planned_start_date', [$startDate, $endDate])
            ->avg('compliance_score');

        // Monthly audit trend
        $monthlyAudits = Audit::select(
            DB::raw('DATE_FORMAT(planned_start_date, "%Y-%m") as month'),
            DB::raw('COUNT(*) as total'),
            DB::raw('AVG(compliance_score) as avg_score')
        )
        ->whereBetween('planned_start_date', [$startDate, $endDate])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Auditor performance
        $auditorPerformance = Audit::select(
            'users.name',
            DB::raw('COUNT(*) as total_audits'),
            DB::raw('AVG(audits.compliance_score) as avg_score')
        )
        ->join('users', 'audits.lead_auditor_id', '=', 'users.id')
        ->whereBetween('audits.planned_start_date', [$startDate, $endDate])
        ->groupBy('users.name')
        ->orderByDesc('total_audits')
        ->get();

        // Finding resolution rate
        $findingResolution = [
            'open' => Finding::where('status', 'open')->count(),
            'in_progress' => Finding::where('status', 'in_progress')->count(),
            'resolved' => Finding::where('status', 'resolved')->count(),
            'verified' => Finding::where('status', 'verified')->count(),
            'closed' => Finding::where('status', 'closed')->count(),
        ];

        return view('admin.reports.audits', compact(
            'auditStats',
            'findingStats',
            'avgCompliance',
            'monthlyAudits',
            'auditorPerformance',
            'findingResolution',
            'startDate',
            'endDate'
        ));
    }
}
