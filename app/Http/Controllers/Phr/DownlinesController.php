<?php

namespace App\Http\Controllers\Phr;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DownlinesController extends Controller
{
    /**
     * Display downline structure
     */
    public function index()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        // Get direct downlines (PHRs recruited by this user)
        $directDownlines = User::where('recruited_by_phr', $user->id)
            ->whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })
            ->with(['phrFees'])
            ->orderBy('phr_joined_at', 'desc')
            ->get();

        // Calculate downline statistics
        $stats = [
            'direct_phrs' => $directDownlines->count(),
            'active_direct_phrs' => $directDownlines->where('is_phr_active', true)->count(),
            'total_downlines' => 0,
            'total_fees_from_network' => 0,
        ];

        // Count all downlines recursively and their fees
        foreach ($directDownlines as $downline) {
            $stats['total_downlines']++;

            // Count second-level downlines
            $secondLevel = User::where('recruited_by_phr', $downline->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pendamping_halal_reguler');
                })
                ->count();

            $stats['total_downlines'] += $secondLevel;

            // Calculate fees from this downline
            $downlineFees = $downline->phrFees()
                ->where('status', 'paid')
                ->sum('fee_amount');

            $stats['total_fees_from_network'] += $downlineFees;
        }

        return view('phr.downlines.index', compact('directDownlines', 'stats'));
    }

    /**
     * Show individual downline detail
     */
    public function show(User $user)
    {
        $currentUser = auth()->user();

        if (!$currentUser->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        // Verify this is actually a downline of current user
        if ($user->recruited_by_phr !== $currentUser->id) {
            abort(403, 'Anda tidak memiliki akses ke PHR ini.');
        }

        // Get downline's statistics
        $stats = [
            'total_pu_referred' => User::where('referred_by', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pelaku_usaha');
                })->count(),
            'total_fees' => $user->phrFees()->sum('fee_amount'),
            'paid_fees' => $user->phrFees()->where('status', 'paid')->sum('paid_amount'),
            'total_recruited' => User::where('recruited_by_phr', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pendamping_halal_reguler');
                })->count(),
        ];

        // Get recent activities
        $recentFees = $user->phrFees()
            ->with(['pelakuUsaha', 'submission'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('phr.downlines.show', compact('user', 'stats', 'recentFees'));
    }
}
