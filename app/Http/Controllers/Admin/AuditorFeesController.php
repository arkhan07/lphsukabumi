<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuditorFee;
use App\Models\User;
use Illuminate\Http\Request;

class AuditorFeesController extends Controller
{
    /**
     * Display auditor fees list
     */
    public function index(Request $request)
    {
        $query = AuditorFee::with(['auditor', 'invoice', 'submission']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by auditor
        if ($request->filled('auditor_id')) {
            $query->where('auditor_id', $request->auditor_id);
        }

        // Filter by date range
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }

        $fees = $query->orderBy('created_at', 'desc')->paginate(20);

        // Calculate statistics
        $stats = [
            'total_fees' => AuditorFee::sum('fee_amount'),
            'paid_fees' => AuditorFee::where('status', 'paid')->sum('paid_amount'),
            'pending_fees' => AuditorFee::where('status', 'pending')->sum('fee_amount'),
            'approved_fees' => AuditorFee::where('status', 'approved')->sum('fee_amount'),
            'cancelled_fees' => AuditorFee::where('status', 'cancelled')->sum('fee_amount'),
        ];

        // Get all auditors for filter dropdown
        $auditors = User::whereHas('roles', function($q) {
            $q->where('slug', 'auditor-halal');
        })->orderBy('name')->get();

        return view('admin.auditor-fees.index', compact('fees', 'stats', 'auditors'));
    }

    /**
     * Display auditor fee details
     */
    public function show(AuditorFee $fee)
    {
        $fee->load(['auditor', 'invoice.pelakuUsaha', 'submission', 'approvedBy', 'paidBy']);

        return view('admin.auditor-fees.show', compact('fee'));
    }

    /**
     * Approve auditor fee
     */
    public function approve(AuditorFee $fee)
    {
        if ($fee->status !== 'pending') {
            return back()->with('error', 'Fee ini sudah diproses');
        }

        $fee->update([
            'status' => 'approved',
            'approved_by' => auth()->id(),
            'approved_at' => now(),
        ]);

        return back()->with('success', 'Fee auditor berhasil disetujui');
    }

    /**
     * Mark auditor fee as paid
     */
    public function pay(Request $request, AuditorFee $fee)
    {
        $request->validate([
            'paid_amount' => 'required|numeric|min:0',
            'payment_reference' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:1000',
        ]);

        if ($fee->status !== 'approved') {
            return back()->with('error', 'Fee harus disetujui terlebih dahulu sebelum dibayar');
        }

        $fee->update([
            'status' => 'paid',
            'paid_amount' => $request->paid_amount,
            'paid_by' => auth()->id(),
            'paid_at' => now(),
            'payment_reference' => $request->payment_reference,
            'notes' => $request->notes,
        ]);

        return back()->with('success', 'Fee auditor berhasil ditandai sebagai dibayar');
    }

    /**
     * Cancel auditor fee
     */
    public function cancel(Request $request, AuditorFee $fee)
    {
        $request->validate([
            'notes' => 'required|string|max:1000',
        ]);

        if ($fee->status === 'paid') {
            return back()->with('error', 'Fee yang sudah dibayar tidak dapat dibatalkan');
        }

        $fee->update([
            'status' => 'cancelled',
            'notes' => $request->notes,
        ]);

        return back()->with('success', 'Fee auditor berhasil dibatalkan');
    }

    /**
     * Display auditor fee report
     */
    public function report(Request $request)
    {
        $startDate = $request->input('start_date', now()->startOfMonth());
        $endDate = $request->input('end_date', now()->endOfMonth());

        // Get fees grouped by auditor
        $feesByAuditor = AuditorFee::with('auditor')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy('auditor_id')
            ->map(function ($fees) {
                return [
                    'auditor' => $fees->first()->auditor,
                    'total_fees' => $fees->sum('fee_amount'),
                    'paid_fees' => $fees->where('status', 'paid')->sum('paid_amount'),
                    'pending_fees' => $fees->where('status', 'pending')->sum('fee_amount'),
                    'approved_fees' => $fees->where('status', 'approved')->sum('fee_amount'),
                    'count' => $fees->count(),
                ];
            });

        // Overall statistics
        $totalStats = [
            'total_fees' => $feesByAuditor->sum('total_fees'),
            'paid_fees' => $feesByAuditor->sum('paid_fees'),
            'pending_fees' => $feesByAuditor->sum('pending_fees'),
            'approved_fees' => $feesByAuditor->sum('approved_fees'),
            'total_count' => $feesByAuditor->sum('count'),
        ];

        return view('admin.auditor-fees.report', compact('feesByAuditor', 'totalStats', 'startDate', 'endDate'));
    }
}
