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

        // Update statistics
        $user->updatePhrStats();

        // Check for auto-promotion
        $eligibleForPromotion = $user->checkPromotionEligibility();

        // Get recruitment statistics
        $stats = [
            'level' => $user->phr_level,
            'level_name' => $user->phr_level_name,
            'is_active' => $user->is_phr_active,
            'joined_at' => $user->phr_joined_at,
            'last_promotion_at' => $user->last_promotion_at,

            // Recruitment stats
            'total_pu_referred' => $user->pu_referred_count,
            'total_phr_recruited' => $user->phr_recruited_count,
            'active_phr_recruited' => $user->phr_active_recruited_count,
            'area_managers_count' => $user->area_managers_count,

            // Fee stats
            'total_fees' => $user->phrFees()->sum('fee_amount'),
            'paid_fees' => $user->phrFees()->where('status', 'paid')->sum('paid_amount'),
            'pending_fees' => $user->phrFees()->where('status', 'pending')->sum('fee_amount'),
            'approved_fees' => $user->phrFees()->where('status', 'approved')->sum('fee_amount'),

            // Monthly stats
            'monthly_fees' => $user->phrFees()
                ->whereYear('created_at', now()->year)
                ->whereMonth('created_at', now()->month)
                ->sum('fee_amount'),
        ];

        // Get promotion criteria
        $nextLevel = null;
        $criteria = null;
        $progress = [];

        if ($user->phr_level === 'phr') {
            $nextLevel = 'area_manager';
            $criteria = \App\Models\PhrPromotionCriteria::getForLevel('area_manager');
        } elseif ($user->phr_level === 'area_manager') {
            $nextLevel = 'regional_manager';
            $criteria = \App\Models\PhrPromotionCriteria::getForLevel('regional_manager');
        }

        if ($criteria) {
            $progress = [
                'pu_referred' => [
                    'current' => $user->pu_referred_count,
                    'required' => $criteria->min_pu_referred,
                    'percentage' => min(100, ($user->pu_referred_count / $criteria->min_pu_referred) * 100),
                ],
            ];

            if ($nextLevel === 'area_manager') {
                $progress['phr_recruited'] = [
                    'current' => $user->phr_active_recruited_count,
                    'required' => $criteria->min_phr_recruited,
                    'percentage' => min(100, ($user->phr_active_recruited_count / $criteria->min_phr_recruited) * 100),
                ];
            }

            if ($nextLevel === 'regional_manager') {
                $progress['area_managers'] = [
                    'current' => $user->area_managers_count,
                    'required' => $criteria->min_area_managers,
                    'percentage' => min(100, ($user->area_managers_count / $criteria->min_area_managers) * 100),
                ];
                $progress['province_coverage'] = [
                    'current' => $user->calculateProvinceCoverage(),
                    'required' => $criteria->min_province_coverage_percentage,
                    'percentage' => min(100, ($user->calculateProvinceCoverage() / $criteria->min_province_coverage_percentage) * 100),
                ];
            }
        }

        // Recent activities
        $recentFees = $user->phrFees()->orderBy('created_at', 'desc')->take(5)->get();
        $recentPromotions = $user->phrPromotions()->orderBy('created_at', 'desc')->take(5)->get();

        return view('phr.dashboard', compact('stats', 'eligibleForPromotion', 'nextLevel', 'criteria', 'progress', 'recentFees', 'recentPromotions'));
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
