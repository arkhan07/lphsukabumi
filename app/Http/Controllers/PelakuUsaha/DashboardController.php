<?php

namespace App\Http\Controllers\PelakuUsaha;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Pelaku Usaha dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = auth()->user();

        // Get statistics
        $totalSubmissions = $user->submissions()->count();
        $inProgress = $user->submissions()->whereIn('status', [
            'draft', 'submitted', 'screening', 'screening_approved', 'verification',
            'verification_approved', 'ready_for_assignment', 'assigned', 'scheduled',
            'audit_in_progress', 'audit_completed', 'report_submitted'
        ])->count();
        $approved = $user->submissions()->where('status', 'approved')->count();
        $completed = $user->submissions()->where('status', 'completed')->count();

        // Get recent submissions
        $recentSubmissions = $user->submissions()
            ->with(['region', 'businessType', 'products'])
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // Invoice statistics
        $totalInvoices = Invoice::where('user_id', $user->id)->count();
        $totalInvoiceAmount = Invoice::where('user_id', $user->id)->sum('total_amount');
        $paidAmount = Invoice::where('user_id', $user->id)
            ->where('status', 'paid')
            ->sum('total_amount');
        $outstandingAmount = Invoice::where('user_id', $user->id)
            ->whereIn('status', ['draft', 'sent', 'overdue'])
            ->sum('outstanding_amount');

        // Recent invoices
        $recentInvoices = Invoice::with(['submission'])
            ->where('user_id', $user->id)
            ->orderBy('invoice_date', 'desc')
            ->take(5)
            ->get();

        // PHR referral info
        $referredByPhr = null;
        if ($user->referred_by) {
            $referredByPhr = User::find($user->referred_by);
            // Verify it's actually a PHR
            if ($referredByPhr && !$referredByPhr->hasRole('pendamping_halal_reguler')) {
                $referredByPhr = null;
            }
        }

        // Status distribution for chart
        $statusCounts = [
            'in_progress' => $inProgress,
            'approved' => $approved,
            'completed' => $completed,
        ];

        return view('pelaku-usaha.dashboard', compact(
            'totalSubmissions',
            'inProgress',
            'approved',
            'completed',
            'recentSubmissions',
            'statusCounts',
            'totalInvoices',
            'totalInvoiceAmount',
            'paidAmount',
            'outstandingAmount',
            'recentInvoices',
            'referredByPhr'
        ));
    }

    /**
     * Display invoices list
     */
    public function invoices()
    {
        $user = auth()->user();

        $invoices = Invoice::with(['submission'])
            ->where('user_id', $user->id)
            ->orderBy('invoice_date', 'desc')
            ->paginate(20);

        // Calculate totals
        $stats = [
            'total' => Invoice::where('user_id', $user->id)->count(),
            'total_amount' => Invoice::where('user_id', $user->id)->sum('total_amount'),
            'paid' => Invoice::where('user_id', $user->id)->where('status', 'paid')->sum('total_amount'),
            'outstanding' => Invoice::where('user_id', $user->id)
                ->whereIn('status', ['draft', 'sent', 'overdue'])
                ->sum('outstanding_amount'),
        ];

        return view('pelaku-usaha.invoices', compact('invoices', 'stats'));
    }

    /**
     * Show invoice detail
     */
    public function showInvoice(Invoice $invoice)
    {
        $user = auth()->user();

        // Ensure user owns this invoice
        if ($invoice->user_id !== $user->id) {
            abort(403, 'Akses ditolak. Invoice ini bukan milik Anda.');
        }

        $invoice->load(['submission.products', 'payments']);

        return view('pelaku-usaha.invoice-detail', compact('invoice'));
    }
}
