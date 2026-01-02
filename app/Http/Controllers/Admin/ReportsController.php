<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\InvoicePayment;
use App\Models\Audit;
use App\Models\Finding;
use App\Models\Report;
use App\Models\User;
use App\Models\PhrFee;
use App\Models\PhrPromotion;
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

        // Handle export request
        if ($request->has('export')) {
            // TODO: Implement export functionality (PDF/Excel)
            // return $this->exportCertification($request, $startDate, $endDate);
        }

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

        // Status statistics (within date range)
        $statusStats = [
            'draft' => Submission::where('status', 'draft')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'in_progress' => Submission::whereIn('status', [
                'submitted', 'screening', 'verification', 'assigned', 'audit_in_progress'
            ])->whereBetween('created_at', [$startDate, $endDate])->count(),
            'approved' => Submission::where('status', 'approved')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'completed' => Submission::where('status', 'completed')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'rejected' => Submission::where('status', 'rejected')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
        ];

        // Certificate statistics (current state, not date-filtered)
        // Note: Certificate expiry tracking requires separate certificates table or column in submissions
        $certificateStats = [
            'certified' => Product::whereHas('submission', function($q) {
                    $q->where('status', 'completed');
                })
                ->where('halal_status', 'halal')
                ->count(),
            'pending_certification' => Product::whereHas('submission', function($q) {
                    $q->whereIn('status', ['submitted', 'screening', 'verification', 'assigned', 'audit_in_progress']);
                })
                ->where('halal_status', 'doubtful')
                ->count(),
            'rejected' => Product::whereHas('submission', function($q) {
                    $q->where('status', 'rejected');
                })
                ->where('halal_status', 'not_halal')
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
            ->orderByDesc('total')
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

        // Handle export request
        if ($request->has('export')) {
            // TODO: Implement export functionality (PDF/Excel)
            // return $this->exportFinancial($request, $startDate, $endDate);
        }

        // Revenue statistics
        $revenueStats = [
            'total_invoiced' => Invoice::whereBetween('invoice_date', [$startDate, $endDate])
                ->sum('total_amount'),
            'total_paid' => Invoice::where('status', 'paid')
                ->whereBetween('fully_paid_at', [$startDate, $endDate])
                ->sum('total_amount'),
            'total_pending' => Invoice::whereIn('status', ['draft', 'sent', 'viewed'])
                ->whereBetween('invoice_date', [$startDate, $endDate])
                ->sum('total_amount'),
            'total_partial' => Invoice::where('status', 'partial_payment')
                ->whereBetween('invoice_date', [$startDate, $endDate])
                ->sum('outstanding_amount'),
            'total_overdue' => Invoice::where('status', 'overdue')
                ->whereBetween('invoice_date', [$startDate, $endDate])
                ->sum('outstanding_amount'),
        ];

        // Monthly revenue trend
        $monthlyRevenue = Invoice::select(
            DB::raw('DATE_FORMAT(invoice_date, "%Y-%m") as month'),
            DB::raw('SUM(total_amount) as total_invoiced'),
            DB::raw('SUM(paid_amount) as total_paid'),
            DB::raw('SUM(outstanding_amount) as total_outstanding')
        )
        ->whereBetween('invoice_date', [$startDate, $endDate])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Payment method distribution
        $paymentMethods = InvoicePayment::select(
            'payment_method',
            DB::raw('COUNT(*) as count'),
            DB::raw('SUM(amount) as total_amount')
        )
        ->where('status', 'verified')
        ->whereBetween('payment_date', [$startDate, $endDate])
        ->groupBy('payment_method')
        ->orderByDesc('total_amount')
        ->get();

        // Invoice type distribution
        $invoiceTypes = Invoice::select(
            'invoice_type',
            DB::raw('COUNT(*) as count'),
            DB::raw('SUM(total_amount) as total')
        )
        ->whereBetween('invoice_date', [$startDate, $endDate])
        ->groupBy('invoice_type')
        ->orderByDesc('total')
        ->get();

        // Top paying clients
        $topClients = Invoice::select(
            'submissions.company_name',
            DB::raw('COUNT(invoices.id) as invoice_count'),
            DB::raw('SUM(invoices.total_amount) as total_invoiced'),
            DB::raw('SUM(invoices.paid_amount) as total_paid')
        )
        ->join('submissions', 'invoices.submission_id', '=', 'submissions.id')
        ->where('invoices.status', 'paid')
        ->whereBetween('invoices.fully_paid_at', [$startDate, $endDate])
        ->groupBy('submissions.company_name')
        ->orderByDesc('total_paid')
        ->limit(10)
        ->get();

        // Collection rate
        $collectionRate = [
            'total_invoiced' => $revenueStats['total_invoiced'],
            'total_collected' => $revenueStats['total_paid'],
            'rate_percentage' => $revenueStats['total_invoiced'] > 0
                ? round(($revenueStats['total_paid'] / $revenueStats['total_invoiced']) * 100, 2)
                : 0,
        ];

        return view('admin.reports.financial', compact(
            'revenueStats',
            'monthlyRevenue',
            'paymentMethods',
            'invoiceTypes',
            'topClients',
            'collectionRate',
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

        // Handle export request
        if ($request->has('export')) {
            // TODO: Implement export functionality (PDF/Excel)
            // return $this->exportAudits($request, $startDate, $endDate);
        }

        // Audit statistics
        $auditStats = [
            'total' => Audit::whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'completed' => Audit::where('status', 'completed')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'in_progress' => Audit::where('status', 'in_progress')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'planned' => Audit::where('status', 'planned')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'passed' => Audit::where('overall_result', 'passed')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'conditional' => Audit::where('overall_result', 'passed_with_conditions')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'failed' => Audit::where('overall_result', 'failed')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
            'pending_result' => Audit::where('overall_result', 'pending')
                ->whereBetween('planned_start_date', [$startDate, $endDate])->count(),
        ];

        // Finding statistics
        $findingStats = [
            'total' => Finding::whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'critical' => Finding::where('severity', 'critical')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'major' => Finding::where('severity', 'major')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'minor' => Finding::where('severity', 'minor')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'observation' => Finding::where('severity', 'observation')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
        ];

        // Average compliance score from Reports table (halal_compliance_score)
        $avgCompliance = Report::whereHas('audit', function($q) use ($startDate, $endDate) {
                $q->whereBetween('planned_start_date', [$startDate, $endDate]);
            })
            ->whereNotNull('halal_compliance_score')
            ->avg('halal_compliance_score');

        // Audit type distribution
        $auditTypes = Audit::select(
            'audit_type',
            DB::raw('COUNT(*) as total')
        )
        ->whereBetween('planned_start_date', [$startDate, $endDate])
        ->groupBy('audit_type')
        ->orderByDesc('total')
        ->get();

        // Monthly audit trend with compliance scores
        $monthlyAudits = Audit::select(
            DB::raw('DATE_FORMAT(audits.planned_start_date, "%Y-%m") as month'),
            DB::raw('COUNT(audits.id) as total'),
            DB::raw('AVG(reports.halal_compliance_score) as avg_score')
        )
        ->leftJoin('reports', 'audits.id', '=', 'reports.audit_id')
        ->whereBetween('audits.planned_start_date', [$startDate, $endDate])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Auditor performance with compliance scores
        $auditorPerformance = Audit::select(
            'users.name',
            DB::raw('COUNT(audits.id) as total_audits'),
            DB::raw('AVG(reports.halal_compliance_score) as avg_score'),
            DB::raw('SUM(CASE WHEN audits.overall_result = "passed" THEN 1 ELSE 0 END) as passed_count'),
            DB::raw('SUM(CASE WHEN audits.overall_result = "passed_with_conditions" THEN 1 ELSE 0 END) as conditional_count'),
            DB::raw('SUM(CASE WHEN audits.overall_result = "failed" THEN 1 ELSE 0 END) as failed_count')
        )
        ->join('users', 'audits.lead_auditor_id', '=', 'users.id')
        ->leftJoin('reports', 'audits.id', '=', 'reports.audit_id')
        ->whereBetween('audits.planned_start_date', [$startDate, $endDate])
        ->groupBy('users.name', 'users.id')
        ->orderByDesc('total_audits')
        ->get();

        // Finding resolution rate (within date range)
        $findingResolution = [
            'total' => Finding::whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'open' => Finding::where('status', 'open')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'in_progress' => Finding::where('status', 'in_progress')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'resolved' => Finding::where('status', 'resolved')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'verified' => Finding::where('status', 'verified')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
            'closed' => Finding::where('status', 'closed')
                ->whereHas('audit', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('planned_start_date', [$startDate, $endDate]);
                })->count(),
        ];

        // Resolution rate percentage
        $resolutionRate = $findingResolution['total'] > 0
            ? round((($findingResolution['resolved'] + $findingResolution['verified'] + $findingResolution['closed']) / $findingResolution['total']) * 100, 2)
            : 0;

        return view('admin.reports.audits', compact(
            'auditStats',
            'findingStats',
            'avgCompliance',
            'auditTypes',
            'monthlyAudits',
            'auditorPerformance',
            'findingResolution',
            'resolutionRate',
            'startDate',
            'endDate'
        ));
    }

    /**
     * Product reports with halal status analytics
     */
    public function product(Request $request)
    {
        // Date range filter (based on product creation/submission)
        $startDate = $request->input('start_date', now()->startOfYear());
        $endDate = $request->input('end_date', now());

        // Handle export request
        if ($request->has('export')) {
            // TODO: Implement export functionality (PDF/Excel)
            // return $this->exportProduct($request, $startDate, $endDate);
        }

        // Product statistics
        $productStats = [
            'total' => Product::whereHas('submission', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('created_at', [$startDate, $endDate]);
                })->count(),
            'halal' => Product::where('halal_status', 'halal')
                ->whereHas('submission', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('created_at', [$startDate, $endDate]);
                })->count(),
            'not_halal' => Product::where('halal_status', 'not_halal')
                ->whereHas('submission', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('created_at', [$startDate, $endDate]);
                })->count(),
            'doubtful' => Product::where('halal_status', 'doubtful')
                ->whereHas('submission', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('created_at', [$startDate, $endDate]);
                })->count(),
        ];

        // Halal status distribution (pie chart data)
        $halalDistribution = Product::select(
            'halal_status',
            DB::raw('COUNT(*) as total')
        )
        ->whereHas('submission', function($q) use ($startDate, $endDate) {
            $q->whereBetween('created_at', [$startDate, $endDate]);
        })
        ->groupBy('halal_status')
        ->orderByDesc('total')
        ->get();

        // Product type distribution
        $productTypeDistribution = Product::select(
            'product_types.name',
            DB::raw('COUNT(products.id) as total'),
            DB::raw('SUM(CASE WHEN products.halal_status = "halal" THEN 1 ELSE 0 END) as halal_count'),
            DB::raw('SUM(CASE WHEN products.halal_status = "not_halal" THEN 1 ELSE 0 END) as not_halal_count'),
            DB::raw('SUM(CASE WHEN products.halal_status = "doubtful" THEN 1 ELSE 0 END) as doubtful_count')
        )
        ->leftJoin('product_types', 'products.product_type_id', '=', 'product_types.id')
        ->whereHas('submission', function($q) use ($startDate, $endDate) {
            $q->whereBetween('created_at', [$startDate, $endDate]);
        })
        ->groupBy('product_types.name', 'product_types.id')
        ->orderByDesc('total')
        ->get();

        // Monthly product trend
        $monthlyProducts = Product::select(
            DB::raw('DATE_FORMAT(products.created_at, "%Y-%m") as month'),
            DB::raw('COUNT(products.id) as total'),
            DB::raw('SUM(CASE WHEN products.halal_status = "halal" THEN 1 ELSE 0 END) as halal_count')
        )
        ->whereHas('submission', function($q) use ($startDate, $endDate) {
            $q->whereBetween('created_at', [$startDate, $endDate]);
        })
        ->whereBetween('products.created_at', [$startDate, $endDate])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Top companies by halal products
        $topCompanies = Product::select(
            'submissions.company_name',
            DB::raw('COUNT(products.id) as total_products'),
            DB::raw('SUM(CASE WHEN products.halal_status = "halal" THEN 1 ELSE 0 END) as halal_products')
        )
        ->join('submissions', 'products.submission_id', '=', 'submissions.id')
        ->where('products.halal_status', 'halal')
        ->whereBetween('submissions.created_at', [$startDate, $endDate])
        ->groupBy('submissions.company_name')
        ->orderByDesc('halal_products')
        ->limit(10)
        ->get();

        // Active vs Inactive products
        $activityStats = [
            'active' => Product::where('is_active', true)
                ->whereHas('submission', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('created_at', [$startDate, $endDate]);
                })->count(),
            'inactive' => Product::where('is_active', false)
                ->whereHas('submission', function($q) use ($startDate, $endDate) {
                    $q->whereBetween('created_at', [$startDate, $endDate]);
                })->count(),
        ];

        // Halal certification rate
        $certificationRate = $productStats['total'] > 0
            ? round(($productStats['halal'] / $productStats['total']) * 100, 2)
            : 0;

        return view('admin.reports.product', compact(
            'productStats',
            'halalDistribution',
            'productTypeDistribution',
            'monthlyProducts',
            'topCompanies',
            'activityStats',
            'certificationRate',
            'startDate',
            'endDate'
        ));
    }

    /**
     * PHR (Pendamping Halal Reguler) reports
     */
    public function phr(Request $request)
    {
        // Date range filter
        $startDate = $request->input('start_date', now()->startOfYear());
        $endDate = $request->input('end_date', now());

        // Handle export request
        if ($request->has('export')) {
            // TODO: Implement export functionality (PDF/Excel)
            // return $this->exportPhr($request, $startDate, $endDate);
        }

        // PHR statistics
        $phrStats = [
            'total' => User::whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })->count(),
            'active' => User::whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })->where('is_phr_active', true)->count(),
            'inactive' => User::whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })->where('is_phr_active', false)->count(),
            'regular' => User::whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })->where('phr_level', 'regular')->orWhereNull('phr_level')->count(),
            'area_managers' => User::whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })->where('phr_level', 'area_manager')->count(),
            'regional_managers' => User::whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })->where('phr_level', 'regional_manager')->count(),
            'new_this_period' => User::whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })->whereBetween('phr_joined_at', [$startDate, $endDate])->count(),
        ];

        // Fee statistics
        $feeStats = [
            'total_fees' => PhrFee::whereBetween('created_at', [$startDate, $endDate])
                ->sum('fee_amount'),
            'pending' => PhrFee::where('status', 'pending')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->sum('fee_amount'),
            'approved' => PhrFee::where('status', 'approved')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->sum('fee_amount'),
            'paid' => PhrFee::where('status', 'paid')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->sum('fee_amount'),
            'direct_fees' => PhrFee::where('fee_type', 'direct')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->sum('fee_amount'),
            'downline_fees' => PhrFee::where('fee_type', 'downline')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->sum('fee_amount'),
            'regional_fees' => PhrFee::where('fee_type', 'regional')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->sum('fee_amount'),
        ];

        // Promotion statistics
        $promotionStats = [
            'total' => PhrPromotion::whereBetween('created_at', [$startDate, $endDate])->count(),
            'to_area_manager' => PhrPromotion::where('to_level', 'area_manager')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'to_regional_manager' => PhrPromotion::where('to_level', 'regional_manager')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'approved' => PhrPromotion::where('status', 'approved')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'pending' => PhrPromotion::where('status', 'pending')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
            'rejected' => PhrPromotion::where('status', 'rejected')
                ->whereBetween('created_at', [$startDate, $endDate])->count(),
        ];

        // Monthly PHR registration trend
        $monthlyRegistrations = User::select(
            DB::raw('DATE_FORMAT(phr_joined_at, "%Y-%m") as month'),
            DB::raw('COUNT(*) as total')
        )
        ->whereHas('roles', function($q) {
            $q->where('name', 'pendamping_halal_reguler');
        })
        ->whereNotNull('phr_joined_at')
        ->whereBetween('phr_joined_at', [$startDate, $endDate])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Monthly fee trend by type
        $monthlyFees = PhrFee::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
            DB::raw('SUM(CASE WHEN fee_type = "direct" THEN fee_amount ELSE 0 END) as direct_total'),
            DB::raw('SUM(CASE WHEN fee_type = "downline" THEN fee_amount ELSE 0 END) as downline_total'),
            DB::raw('SUM(CASE WHEN fee_type = "regional" THEN fee_amount ELSE 0 END) as regional_total'),
            DB::raw('SUM(fee_amount) as total')
        )
        ->whereBetween('created_at', [$startDate, $endDate])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Top performing PHRs by fees earned
        $topPhrs = PhrFee::select(
            'users.name',
            'users.email',
            'users.phr_level',
            DB::raw('COUNT(phr_fees.id) as fee_count'),
            DB::raw('SUM(phr_fees.fee_amount) as total_fees'),
            DB::raw('SUM(CASE WHEN phr_fees.status = "paid" THEN phr_fees.fee_amount ELSE 0 END) as paid_fees')
        )
        ->join('users', 'phr_fees.phr_id', '=', 'users.id')
        ->whereBetween('phr_fees.created_at', [$startDate, $endDate])
        ->groupBy('users.id', 'users.name', 'users.email', 'users.phr_level')
        ->orderByDesc('total_fees')
        ->limit(10)
        ->get();

        // PHR recruitment performance (who recruited the most PHRs)
        $topRecruiters = User::select(
            'users.name',
            'users.email',
            'users.phr_level',
            DB::raw('COUNT(recruited.id) as recruited_count')
        )
        ->join('users as recruited', 'users.id', '=', 'recruited.recruited_by_phr_id')
        ->whereHas('roles', function($q) {
            $q->where('name', 'pendamping_halal_reguler');
        })
        ->whereHas('roles', function($q) {
            $q->where('name', 'pendamping_halal_reguler');
        })
        ->whereBetween('recruited.phr_joined_at', [$startDate, $endDate])
        ->groupBy('users.id', 'users.name', 'users.email', 'users.phr_level')
        ->orderByDesc('recruited_count')
        ->limit(10)
        ->get();

        // PHR by province distribution
        $provinceDistribution = User::select(
            'province',
            DB::raw('COUNT(*) as total'),
            DB::raw('SUM(CASE WHEN is_phr_active = 1 THEN 1 ELSE 0 END) as active_count')
        )
        ->whereHas('roles', function($q) {
            $q->where('name', 'pendamping_halal_reguler');
        })
        ->whereNotNull('province')
        ->groupBy('province')
        ->orderByDesc('total')
        ->limit(10)
        ->get();

        // Fee payment rate
        $paymentRate = $feeStats['total_fees'] > 0
            ? round(($feeStats['paid'] / $feeStats['total_fees']) * 100, 2)
            : 0;

        // Average fee per PHR
        $avgFeePerPhr = $phrStats['total'] > 0
            ? round($feeStats['total_fees'] / $phrStats['total'], 0)
            : 0;

        return view('admin.reports.phr', compact(
            'phrStats',
            'feeStats',
            'promotionStats',
            'monthlyRegistrations',
            'monthlyFees',
            'topPhrs',
            'topRecruiters',
            'provinceDistribution',
            'paymentRate',
            'avgFeePerPhr',
            'startDate',
            'endDate'
        ));
    }
}
