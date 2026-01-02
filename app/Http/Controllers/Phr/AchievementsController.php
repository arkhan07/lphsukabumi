<?php

namespace App\Http\Controllers\Phr;

use App\Http\Controllers\Controller;
use App\Models\PhrPromotion;
use App\Models\User;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    /**
     * Display achievements and progress
     */
    public function index()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        // Current level info
        $currentLevel = $user->phr_level ?? 'phr';
        $levelInfo = $this->getLevelInfo($currentLevel);

        // Get current statistics
        $currentStats = [
            'pu_referred' => User::where('referred_by_phr_id', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pelaku_usaha');
                })->count(),
            'phr_recruited' => User::where('recruited_by_phr_id', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pendamping_halal_reguler');
                })
                ->where('is_phr_active', true)
                ->count(),
            'area_managers' => User::where('recruited_by_phr_id', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pendamping_halal_reguler');
                })
                ->where('phr_level', 'area_manager')
                ->count(),
            'total_fees_earned' => $user->phrFees()->where('status', 'paid')->sum('paid_amount'),
        ];

        // Next level requirements
        $nextLevelRequirements = $this->getNextLevelRequirements($currentLevel);

        // Calculate progress percentage
        $progress = $this->calculateProgress($currentStats, $nextLevelRequirements);

        // Recent achievements/milestones
        $milestones = $this->getRecentMilestones($user);

        return view('phr.achievements.index', compact(
            'currentLevel',
            'levelInfo',
            'currentStats',
            'nextLevelRequirements',
            'progress',
            'milestones'
        ));
    }

    /**
     * Display promotion history
     */
    public function promotions()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        $promotions = PhrPromotion::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        // Check if can request promotion
        $canRequestPromotion = $this->canRequestPromotion($user);

        return view('phr.achievements.promotions', compact('promotions', 'canRequestPromotion'));
    }

    /**
     * Request a promotion
     */
    public function requestPromotion(Request $request)
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        // Check if already at highest level
        if ($user->phr_level === 'regional_manager') {
            return back()->with('error', 'Anda sudah berada di level tertinggi');
        }

        // Check if there's already a pending promotion
        $pendingPromotion = PhrPromotion::where('user_id', $user->id)
            ->where('status', 'pending')
            ->exists();

        if ($pendingPromotion) {
            return back()->with('error', 'Anda sudah memiliki permohonan promosi yang sedang diproses');
        }

        // Determine target level
        $targetLevel = ($user->phr_level ?? 'phr') === 'phr' ? 'area_manager' : 'regional_manager';

        // Get current stats
        $puReferred = User::where('referred_by_phr_id', $user->id)
            ->whereHas('roles', function($q) {
                $q->where('name', 'pelaku_usaha');
            })->count();

        $phrRecruited = User::where('recruited_by_phr_id', $user->id)
            ->whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })
            ->where('is_phr_active', true)
            ->count();

        $areaManagers = User::where('recruited_by_phr_id', $user->id)
            ->whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })
            ->where('phr_level', 'area_manager')
            ->count();

        // Create promotion request
        $promotion = PhrPromotion::create([
            'user_id' => $user->id,
            'from_level' => $user->phr_level ?? 'phr',
            'to_level' => $targetLevel,
            'promotion_type' => 'manual',
            'pu_referred_count_at_promotion' => $puReferred,
            'phr_recruited_count_at_promotion' => $phrRecruited,
            'area_managers_count_at_promotion' => $areaManagers,
            'status' => 'pending',
            'notes' => $request->input('notes'),
        ]);

        return back()->with('success', 'Permohonan promosi berhasil diajukan dan menunggu persetujuan admin');
    }

    // Helper methods

    private function getLevelInfo($level)
    {
        $levels = [
            'phr' => [
                'name' => 'PHR (Pendamping Halal Reguler)',
                'description' => 'Level dasar PHR',
                'benefits' => ['Fee 10% dari PU yang direferensikan', 'Akses dashboard dan tools']
            ],
            'area_manager' => [
                'name' => 'Area Manager',
                'description' => 'Manager tingkat area',
                'benefits' => ['Fee 10% + 3% dari downline', 'Bonus recruitment', 'Prioritas support']
            ],
            'regional_manager' => [
                'name' => 'Regional Manager',
                'description' => 'Manager tingkat regional',
                'benefits' => ['Fee 10% + 3% + 2% regional', 'Bonus leadership', 'Akses eksklusif']
            ],
        ];

        return $levels[$level] ?? $levels['phr'];
    }

    private function getNextLevelRequirements($currentLevel)
    {
        $requirements = [
            'phr' => [
                'pu_referred' => 10,
                'phr_recruited' => 5,
                'area_managers' => 0,
            ],
            'area_manager' => [
                'pu_referred' => 25,
                'phr_recruited' => 10,
                'area_managers' => 3,
            ],
        ];

        return $requirements[$currentLevel] ?? null;
    }

    private function calculateProgress($currentStats, $requirements)
    {
        if (!$requirements) {
            return 100; // Already at max level
        }

        $progress = [];
        foreach ($requirements as $key => $required) {
            $current = $currentStats[$key] ?? 0;
            $percentage = $required > 0 ? min(100, ($current / $required) * 100) : 100;
            $progress[$key] = [
                'current' => $current,
                'required' => $required,
                'percentage' => round($percentage, 1),
            ];
        }

        return $progress;
    }

    private function getRecentMilestones($user)
    {
        $milestones = [];

        // Add promotion milestones
        $promotions = PhrPromotion::where('user_id', $user->id)
            ->where('status', 'approved')
            ->orderBy('approved_at', 'desc')
            ->take(5)
            ->get();

        foreach ($promotions as $promotion) {
            $milestones[] = [
                'type' => 'promotion',
                'title' => 'Promosi ke ' . ucwords(str_replace('_', ' ', $promotion->to_level)),
                'date' => $promotion->approved_at,
                'icon' => 'trophy',
                'color' => 'success',
            ];
        }

        // Sort by date
        usort($milestones, function($a, $b) {
            return $b['date'] <=> $a['date'];
        });

        return array_slice($milestones, 0, 10);
    }

    private function canRequestPromotion($user)
    {
        // Check if at max level
        if ($user->phr_level === 'regional_manager') {
            return false;
        }

        // Check if has pending promotion
        $hasPending = PhrPromotion::where('user_id', $user->id)
            ->where('status', 'pending')
            ->exists();

        return !$hasPending;
    }
}
