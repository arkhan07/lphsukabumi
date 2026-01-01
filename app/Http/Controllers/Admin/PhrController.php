<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PhrPromotion;
use App\Models\PhrPromotionCriteria;
use App\Models\PhrFee;
use Illuminate\Http\Request;

class PhrController extends Controller
{
    /**
     * Display PHR management dashboard
     */
    public function index()
    {
        $stats = [
            'total_phrs' => User::whereHas('roles', function($q) {
                $q->where('slug', 'pendamping_halal_reguler');
            })->count(),
            'active_phrs' => User::whereHas('roles', function($q) {
                $q->where('slug', 'pendamping_halal_reguler');
            })->where('is_phr_active', true)->count(),
            'regular_phrs' => User::whereHas('roles', function($q) {
                $q->where('slug', 'pendamping_halal_reguler');
            })->where('phr_level', 'phr')->count(),
            'area_managers' => User::whereHas('roles', function($q) {
                $q->where('slug', 'pendamping_halal_reguler');
            })->where('phr_level', 'area_manager')->count(),
            'regional_managers' => User::whereHas('roles', function($q) {
                $q->where('slug', 'pendamping_halal_reguler');
            })->where('phr_level', 'regional_manager')->count(),
            'pending_promotions' => PhrPromotion::where('status', 'pending')->count(),
        ];

        $recentPhrs = User::whereHas('roles', function($q) {
                $q->where('slug', 'pendamping_halal_reguler');
            })
            ->orderBy('phr_joined_at', 'desc')
            ->take(10)
            ->get();

        return view('admin.phr.index', compact('stats', 'recentPhrs'));
    }

    /**
     * Display all PHRs with filters
     */
    public function list(Request $request)
    {
        $query = User::whereHas('roles', function($q) {
            $q->where('slug', 'pendamping_halal_reguler');
        });

        // Filter by level
        if ($request->filled('level')) {
            $query->where('phr_level', $request->level);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_phr_active', $request->status === 'active');
        }

        // Filter by province
        if ($request->filled('province')) {
            $query->where('province', $request->province);
        }

        // Search by name or referral code
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('referral_code', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $phrs = $query->orderBy('phr_joined_at', 'desc')->paginate(20);

        return view('admin.phr.list', compact('phrs'));
    }

    /**
     * Display PHR details
     */
    public function show(User $phr)
    {
        if (!$phr->hasRole('pendamping_halal_reguler')) {
            abort(404, 'User is not a Pendamping Halal Reguler');
        }

        $phr->load([
            'recruiter',
            'recruitedPhrs',
            'referredPelakuUsaha',
            'phrFees',
            'phrPromotions'
        ]);

        $stats = [
            'total_fees' => $phr->phrFees()->sum('fee_amount'),
            'paid_fees' => $phr->phrFees()->where('status', 'paid')->sum('paid_amount'),
            'pending_fees' => $phr->phrFees()->where('status', 'pending')->sum('fee_amount'),
            'total_downlines' => $phr->recruitedPhrs()->count(),
            'active_downlines' => $phr->activeRecruitedPhrs()->count(),
            'referred_pu' => $phr->referredPelakuUsaha()->count(),
        ];

        return view('admin.phr.show', compact('phr', 'stats'));
    }

    /**
     * Display promotions list
     */
    public function promotions(Request $request)
    {
        $query = PhrPromotion::with(['user', 'approver']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by promotion type
        if ($request->filled('type')) {
            $query->where('promotion_type', $request->type);
        }

        $promotions = $query->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.phr.promotions', compact('promotions'));
    }

    /**
     * Approve promotion
     */
    public function approvePromotion(Request $request, PhrPromotion $promotion)
    {
        if ($promotion->status !== 'pending') {
            return back()->with('error', 'Promosi ini sudah diproses');
        }

        $promotion->update([
            'status' => 'approved',
            'approved_by' => auth()->id(),
            'approved_at' => now(),
        ]);

        // Update user level
        $user = $promotion->user;
        $user->update([
            'phr_level' => $promotion->to_level,
            'last_promotion_at' => now(),
        ]);

        return back()->with('success', 'Promosi berhasil disetujui');
    }

    /**
     * Reject promotion
     */
    public function rejectPromotion(Request $request, PhrPromotion $promotion)
    {
        $request->validate([
            'rejection_reason' => 'required|string|max:1000',
        ]);

        if ($promotion->status !== 'pending') {
            return back()->with('error', 'Promosi ini sudah diproses');
        }

        $promotion->update([
            'status' => 'rejected',
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'rejection_reason' => $request->rejection_reason,
        ]);

        return back()->with('success', 'Promosi berhasil ditolak');
    }

    /**
     * Display PHR fees
     */
    public function fees(Request $request)
    {
        $query = PhrFee::with(['phr', 'pelakuUsaha', 'invoice', 'directPhr', 'areaManager', 'regionalManager']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by fee type
        if ($request->filled('fee_type')) {
            $query->where('fee_type', $request->fee_type);
        }

        // Filter by PHR
        if ($request->filled('phr_id')) {
            $query->where('phr_id', $request->phr_id);
        }

        $fees = $query->orderBy('created_at', 'desc')->paginate(20);

        $stats = [
            'total_fees' => PhrFee::sum('fee_amount'),
            'paid_fees' => PhrFee::where('status', 'paid')->sum('paid_amount'),
            'pending_fees' => PhrFee::where('status', 'pending')->sum('fee_amount'),
            'approved_fees' => PhrFee::where('status', 'approved')->sum('fee_amount'),
        ];

        return view('admin.phr.fees', compact('fees', 'stats'));
    }

    /**
     * Approve PHR fee
     */
    public function approveFee(PhrFee $fee)
    {
        if ($fee->status !== 'pending') {
            return back()->with('error', 'Fee ini sudah diproses');
        }

        $fee->update([
            'status' => 'approved',
            'approved_by' => auth()->id(),
            'approved_at' => now(),
        ]);

        return back()->with('success', 'Fee berhasil disetujui');
    }

    /**
     * Mark PHR fee as paid
     */
    public function payFee(Request $request, PhrFee $fee)
    {
        $request->validate([
            'paid_amount' => 'required|numeric|min:0',
            'payment_reference' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:1000',
        ]);

        if ($fee->status !== 'approved') {
            return back()->with('error', 'Fee harus disetujui terlebih dahulu');
        }

        $fee->update([
            'status' => 'paid',
            'paid_amount' => $request->paid_amount,
            'paid_by' => auth()->id(),
            'paid_at' => now(),
            'payment_reference' => $request->payment_reference,
            'notes' => $request->notes,
        ]);

        return back()->with('success', 'Fee berhasil ditandai sebagai dibayar');
    }

    /**
     * Display promotion criteria
     */
    public function criteria()
    {
        $criteria = PhrPromotionCriteria::all();

        return view('admin.phr.criteria', compact('criteria'));
    }

    /**
     * Update promotion criteria
     */
    public function updateCriteria(Request $request, PhrPromotionCriteria $criteria)
    {
        $request->validate([
            'min_pu_referred' => 'required|integer|min:0',
            'min_phr_recruited' => 'nullable|integer|min:0',
            'min_area_managers' => 'nullable|integer|min:0',
            'min_province_coverage_percentage' => 'nullable|integer|min:0|max:100',
            'is_active' => 'boolean',
            'notes' => 'nullable|string',
        ]);

        $criteria->update($request->all());

        return back()->with('success', 'Kriteria promosi berhasil diperbarui');
    }

    /**
     * Toggle PHR active status
     */
    public function toggleActive(User $phr)
    {
        if (!$phr->hasRole('pendamping_halal_reguler')) {
            abort(404, 'User is not a Pendamping Halal Reguler');
        }

        $phr->update([
            'is_phr_active' => !$phr->is_phr_active,
        ]);

        $status = $phr->is_phr_active ? 'aktif' : 'non-aktif';
        return back()->with('success', "Status PHR berhasil diubah menjadi {$status}");
    }

    /**
     * Update PHR statistics manually
     */
    public function updateStats(User $phr)
    {
        if (!$phr->hasRole('pendamping_halal_reguler')) {
            abort(404, 'User is not a Pendamping Halal Reguler');
        }

        $phr->updatePhrStats();

        return back()->with('success', 'Statistik PHR berhasil diperbarui');
    }

    /**
     * Check and trigger auto-promotion
     */
    public function checkPromotion(User $phr)
    {
        if (!$phr->hasRole('pendamping_halal_reguler')) {
            abort(404, 'User is not a Pendamping Halal Reguler');
        }

        $promotion = $phr->autoPromote();

        if ($promotion) {
            return back()->with('success', "PHR berhasil dipromosikan ke level {$promotion->level_name}");
        }

        return back()->with('info', 'PHR belum memenuhi kriteria promosi');
    }
}
