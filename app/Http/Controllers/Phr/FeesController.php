<?php

namespace App\Http\Controllers\Phr;

use App\Http\Controllers\Controller;
use App\Models\PhrFee;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    /**
     * Display PHR fees listing
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        $query = PhrFee::where('phr_id', $user->id)
            ->with(['pelakuUsaha', 'invoice', 'submission']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by fee type
        if ($request->filled('fee_type')) {
            $query->where('fee_type', $request->fee_type);
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
            'total_fees' => PhrFee::where('phr_id', $user->id)->sum('fee_amount'),
            'paid_fees' => PhrFee::where('phr_id', $user->id)
                ->where('status', 'paid')
                ->sum('paid_amount'),
            'pending_fees' => PhrFee::where('phr_id', $user->id)
                ->where('status', 'pending')
                ->sum('fee_amount'),
            'approved_fees' => PhrFee::where('phr_id', $user->id)
                ->where('status', 'approved')
                ->sum('fee_amount'),

            // By fee type
            'direct_fees' => PhrFee::where('phr_id', $user->id)
                ->where('fee_type', 'direct')
                ->sum('fee_amount'),
            'downline_fees' => PhrFee::where('phr_id', $user->id)
                ->where('fee_type', 'downline')
                ->sum('fee_amount'),
            'regional_fees' => PhrFee::where('phr_id', $user->id)
                ->where('fee_type', 'regional')
                ->sum('fee_amount'),
        ];

        return view('phr.fees.index', compact('fees', 'stats'));
    }

    /**
     * Show individual fee detail
     */
    public function show(PhrFee $fee)
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        // Verify this fee belongs to current user
        if ($fee->phr_id !== $user->id) {
            abort(403, 'Anda tidak memiliki akses ke fee ini.');
        }

        $fee->load(['pelakuUsaha', 'invoice', 'submission', 'paidBy']);

        return view('phr.fees.show', compact('fee'));
    }
}
