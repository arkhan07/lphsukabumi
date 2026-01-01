<?php

namespace App\Http\Controllers\Auditor;

use App\Http\Controllers\Controller;
use App\Models\AuditorFee;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    /**
     * Display auditor's fees
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        // Ensure user is auditor
        if (!$user->hasRole('auditor-halal')) {
            abort(403, 'Akses ditolak. Anda bukan auditor halal.');
        }

        $query = $user->auditorFees()->with(['invoice', 'submission']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
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
            'total_fees' => $user->auditorFees()->sum('fee_amount'),
            'paid_fees' => $user->auditorFees()->where('status', 'paid')->sum('paid_amount'),
            'pending_fees' => $user->auditorFees()->where('status', 'pending')->sum('fee_amount'),
            'approved_fees' => $user->auditorFees()->where('status', 'approved')->sum('fee_amount'),

            // Monthly stats
            'monthly_total' => $user->auditorFees()
                ->whereYear('created_at', now()->year)
                ->whereMonth('created_at', now()->month)
                ->sum('fee_amount'),
            'monthly_paid' => $user->auditorFees()
                ->whereYear('created_at', now()->year)
                ->whereMonth('created_at', now()->month)
                ->where('status', 'paid')
                ->sum('paid_amount'),
        ];

        return view('auditor.fees.index', compact('fees', 'stats'));
    }

    /**
     * Display fee details
     */
    public function show(AuditorFee $fee)
    {
        $user = auth()->user();

        // Ensure this fee belongs to the auditor
        if ($fee->auditor_id !== $user->id) {
            abort(403, 'Akses ditolak. Fee ini bukan milik Anda.');
        }

        $fee->load(['invoice.pelakuUsaha', 'submission', 'approvedBy', 'paidBy']);

        return view('auditor.fees.show', compact('fee'));
    }
}
