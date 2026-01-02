<?php

namespace App\Http\Controllers\Phr;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Submission;
use Illuminate\Http\Request;

class ReferralsController extends Controller
{
    /**
     * Display list of referred Pelaku Usaha
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        $query = User::where('referred_by', $user->id)
            ->whereHas('roles', function($q) {
                $q->where('name', 'pelaku_usaha');
            });

        // Filter by status - removed is_active column filter as it doesn't exist
        // if ($request->filled('status')) {
        //     if ($request->status === 'active') {
        //         $query->where('is_active', true);
        //     } elseif ($request->status === 'inactive') {
        //         $query->where('is_active', false);
        //     }
        // }

        // Search by name or email
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('company_name', 'like', "%{$search}%");
            });
        }

        $pelakuUsahas = $query->orderBy('created_at', 'desc')->paginate(20);

        // Statistics
        $stats = [
            'total_pu' => User::where('referred_by', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pelaku_usaha');
                })->count(),
            'active_pu' => User::where('referred_by', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pelaku_usaha');
                })->count(), // No is_active column, count all PU
            'total_submissions' => Submission::whereIn('user_id', function($query) use ($user) {
                $query->select('id')
                    ->from('users')
                    ->where('referred_by', $user->id)
                    ->whereHas('roles', function($q) {
                        $q->where('name', 'pelaku_usaha');
                    });
            })->count(),
            'approved_submissions' => Submission::whereIn('user_id', function($query) use ($user) {
                $query->select('id')
                    ->from('users')
                    ->where('referred_by', $user->id);
            })->whereIn('status', ['approved', 'completed'])->count(),
            'total_fees_earned' => $user->phrFees()
                ->where('fee_type', 'direct')
                ->where('status', 'paid')
                ->sum('paid_amount'),
            'pending_fees' => $user->phrFees()
                ->where('fee_type', 'direct')
                ->whereIn('status', ['pending', 'approved'])
                ->sum('fee_amount'),
        ];

        // Ensure referral code exists
        if (method_exists($user, 'ensureReferralCode')) {
            $user->ensureReferralCode('PHR');
        }

        // Referral link for PU
        $puReferralLink = url('/register/pelaku-usaha?ref=' . $user->referral_code);

        return view('phr.referrals.index', compact('pelakuUsahas', 'stats', 'puReferralLink'));
    }

    /**
     * Show individual Pelaku Usaha detail
     */
    public function show(User $user)
    {
        $currentUser = auth()->user();

        if (!$currentUser->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        // Verify this PU was referred by current user
        if ($user->referred_by !== $currentUser->id) {
            abort(403, 'Anda tidak memiliki akses ke Pelaku Usaha ini.');
        }

        // Get PU's submissions
        $submissions = Submission::where('user_id', $user->id)
            ->with(['products', 'businessType'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        // Get fees earned from this PU
        $fees = $currentUser->phrFees()
            ->where('pelaku_usaha_id', $user->id)
            ->with(['invoice'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        // Rename variable to match view expectations
        $pelakuUsaha = $user;

        $stats = [
            'total_submissions' => Submission::where('user_id', $user->id)->count(),
            'approved_submissions' => Submission::where('user_id', $user->id)
                ->whereIn('status', ['approved', 'completed'])
                ->count(),
            'total_fees_earned' => $currentUser->phrFees()
                ->where('pelaku_usaha_id', $user->id)
                ->sum('fee_amount'),
            'paid_fees' => $currentUser->phrFees()
                ->where('pelaku_usaha_id', $user->id)
                ->where('status', 'paid')
                ->sum('paid_amount'),
        ];

        return view('phr.referrals.show', compact('pelakuUsaha', 'submissions', 'fees', 'stats'));
    }
}
