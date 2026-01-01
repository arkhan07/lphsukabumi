<?php

namespace App\Http\Controllers\Phr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display PHR dashboard
     */
    public function index()
    {
        $user = auth()->user();

        // Ensure user is Pendamping Halal Reguler
        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak. Anda bukan Pendamping Halal Reguler.');
        }

        // Ensure referral code exists
        $user->ensureReferralCode('PHR');

        // Update statistics
        if (method_exists($user, 'updatePhrStats')) {
            $user->updatePhrStats();
        }

        // Get recruitment statistics
        $stats = [
            'level' => $user->phr_level ?? 'phr',
            'level_name' => $user->phr_level_name ?? 'Pendamping Halal Reguler',
            'is_active' => $user->is_phr_active ?? true,

            // Pelaku Usaha stats
            'total_pu' => $user->referredPelakuUsaha()->count(),

            // Fee stats
            'total_fees' => $user->phrFees()->sum('fee_amount'),
            'paid_fees' => $user->phrFees()->where('status', 'paid')->sum('paid_amount'),
            'pending_fees' => $user->phrFees()->where('status', 'pending')->sum('fee_amount'),

            // Formatted fees
            'total_fees_formatted' => 'Rp ' . number_format($user->phrFees()->sum('fee_amount'), 0, ',', '.'),
            'paid_fees_formatted' => 'Rp ' . number_format($user->phrFees()->where('status', 'paid')->sum('paid_amount'), 0, ',', '.'),
            'pending_fees_formatted' => 'Rp ' . number_format($user->phrFees()->where('status', 'pending')->sum('fee_amount'), 0, ',', '.'),

            // MLM stats (if applicable)
            'total_phr_recruited' => $user->phr_recruited_count ?? 0,
            'area_managers_count' => $user->area_managers_count ?? 0,
        ];

        // Get recent pelaku usaha
        $recentPu = $user->referredPelakuUsaha()->orderBy('created_at', 'desc')->take(10)->get();

        // Get recent fees
        $recentFees = $user->phrFees()->with(['pelakuUsaha', 'invoice'])->orderBy('created_at', 'desc')->take(5)->get();

        return view('phr.dashboard', compact('stats', 'recentPu', 'recentFees'));
    }

    /**
     * Generate referral code for PHR
     */
    public function generateCode()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $user->ensureReferralCode('PHR');

        return response()->json(['code' => $user->referral_code]);
    }

    /**
     * Display recruitment page with referral link
     */
    public function recruitment()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak. Anda bukan Pendamping Halal Reguler.');
        }

        // Ensure referral code exists
        $user->ensureReferralCode('PHR');

        // Get recruitment statistics
        $stats = [
            'total_pu' => $user->referredPelakuUsaha()->count(),
            'active_pu' => $user->referredPelakuUsaha()->where('is_phr_active', true)->count(),
            'total_phr' => $user->recruitedPhrs()->count(),
            'active_phr' => $user->activeRecruitedPhrs()->count(),
        ];

        // Recent referrals
        $recentPu = $user->referredPelakuUsaha()->orderBy('created_at', 'desc')->take(10)->get();
        $recentPhr = $user->recruitedPhrs()->orderBy('phr_joined_at', 'desc')->take(10)->get();

        return view('phr.recruitment', compact('stats', 'recentPu', 'recentPhr'));
    }

    /**
     * Display downline structure
     */
    public function downlines()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak. Anda bukan Pendamping Halal Reguler.');
        }

        // Get direct downlines (PHRs recruited by this user)
        $directDownlines = $user->recruitedPhrs()->with(['recruitedPhrs', 'referredPelakuUsaha'])->get();

        // Calculate downline statistics
        $stats = [
            'direct_phrs' => $directDownlines->count(),
            'active_direct_phrs' => $directDownlines->where('is_phr_active', true)->count(),
            'total_downlines' => 0,
            'total_pu_network' => 0,
        ];

        // Count all downlines (recursive)
        foreach ($directDownlines as $downline) {
            $stats['total_downlines'] += 1;
            $stats['total_downlines'] += $downline->recruitedPhrs()->count();
            $stats['total_pu_network'] += $downline->referredPelakuUsaha()->count();
        }

        return view('phr.downlines', compact('directDownlines', 'stats'));
    }

    /**
     * Display PHR fees
     */
    public function fees(Request $request)
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak. Anda bukan Pendamping Halal Reguler.');
        }

        $query = $user->phrFees()->with(['pelakuUsaha', 'invoice', 'submission']);

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
            'total_fees' => $user->phrFees()->sum('fee_amount'),
            'paid_fees' => $user->phrFees()->where('status', 'paid')->sum('paid_amount'),
            'pending_fees' => $user->phrFees()->where('status', 'pending')->sum('fee_amount'),
            'approved_fees' => $user->phrFees()->where('status', 'approved')->sum('fee_amount'),

            // By fee type
            'direct_fees' => $user->phrFees()->where('fee_type', 'direct')->sum('fee_amount'),
            'downline_fees' => $user->phrFees()->where('fee_type', 'downline')->sum('fee_amount'),
            'regional_fees' => $user->phrFees()->where('fee_type', 'regional')->sum('fee_amount'),
        ];

        return view('phr.fees', compact('fees', 'stats'));
    }

    /**
     * Display promotion history
     */
    public function promotions()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak. Anda bukan Pendamping Halal Reguler.');
        }

        $promotions = $user->phrPromotions()->orderBy('created_at', 'desc')->get();

        return view('phr.promotions', compact('promotions'));
    }

    /**
     * Request manual promotion
     */
    public function requestPromotion(Request $request)
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak. Anda bukan Pendamping Halal Reguler.');
        }

        // Check if already at highest level
        if ($user->phr_level === 'regional_manager') {
            return back()->with('error', 'Anda sudah berada di level tertinggi');
        }

        // Check if there's already a pending promotion
        $pendingPromotion = $user->phrPromotions()
            ->where('status', 'pending')
            ->exists();

        if ($pendingPromotion) {
            return back()->with('error', 'Anda sudah memiliki permohonan promosi yang sedang diproses');
        }

        // Update stats first
        $user->updatePhrStats();

        // Determine target level
        $targetLevel = $user->phr_level === 'phr' ? 'area_manager' : 'regional_manager';

        // Create promotion request
        $promotion = \App\Models\PhrPromotion::create([
            'user_id' => $user->id,
            'from_level' => $user->phr_level,
            'to_level' => $targetLevel,
            'promotion_type' => 'manual',
            'pu_referred_count_at_promotion' => $user->pu_referred_count,
            'phr_recruited_count_at_promotion' => $user->phr_active_recruited_count,
            'area_managers_count_at_promotion' => $user->area_managers_count,
            'province_coverage_percentage' => $targetLevel === 'regional_manager' ? $user->calculateProvinceCoverage() : 0,
            'status' => 'pending',
            'notes' => $request->input('notes'),
        ]);

        return back()->with('success', 'Permohonan promosi berhasil diajukan dan menunggu persetujuan admin');
    }
}
