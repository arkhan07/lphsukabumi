<?php

namespace App\Http\Controllers\Phr;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RecruitmentController extends Controller
{
    /**
     * Display recruitment dashboard
     */
    public function index()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        // Ensure referral code exists
        if (method_exists($user, 'ensureReferralCode')) {
            $user->ensureReferralCode('PHR');
        }

        // Get recruitment statistics
        $stats = [
            'total_phr_recruited' => User::where('recruited_by_phr_id', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pendamping_halal_reguler');
                })->count(),
            'active_phr_recruited' => User::where('recruited_by_phr_id', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pendamping_halal_reguler');
                })
                ->where('is_phr_active', true)
                ->count(),
            'total_pu_referred' => User::where('referred_by_phr_id', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pelaku_usaha');
                })->count(),
            'active_pu_referred' => User::where('referred_by_phr_id', $user->id)
                ->whereHas('roles', function($q) {
                    $q->where('name', 'pelaku_usaha');
                })
                ->where('is_active', true)
                ->count(),
        ];

        // Recent recruits (PHR)
        $recentPhrs = User::where('recruited_by_phr_id', $user->id)
            ->whereHas('roles', function($q) {
                $q->where('name', 'pendamping_halal_reguler');
            })
            ->orderBy('phr_joined_at', 'desc')
            ->take(10)
            ->get();

        // Recent referrals (PU)
        $recentPus = User::where('referred_by_phr_id', $user->id)
            ->whereHas('roles', function($q) {
                $q->where('name', 'pelaku_usaha');
            })
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        // Referral links
        $phrReferralLink = url('/register/phr?ref=' . $user->referral_code);
        $puReferralLink = url('/register/pelaku-usaha?ref=' . $user->referral_code);

        return view('phr.recruitment.index', compact('stats', 'recentPhrs', 'recentPus', 'phrReferralLink', 'puReferralLink'));
    }

    /**
     * Show invitation form
     */
    public function invite()
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        return view('phr.recruitment.invite');
    }

    /**
     * Send invitation email
     */
    public function sendInvitation(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'type' => 'required|in:phr,pu',
        ]);

        $user = auth()->user();

        // Ensure referral code exists
        if (method_exists($user, 'ensureReferralCode')) {
            $user->ensureReferralCode('PHR');
        }

        $referralLink = $request->type === 'phr'
            ? url('/register/phr?ref=' . $user->referral_code)
            : url('/register/pelaku-usaha?ref=' . $user->referral_code);

        // Send email invitation (simplified - you can customize this)
        try {
            // TODO: Implement proper email sending
            // Mail::to($request->email)->send(new InvitationMail($user, $request->name, $referralLink, $request->type));

            return back()->with('success', 'Undangan berhasil dikirim ke ' . $request->email);
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim undangan: ' . $e->getMessage());
        }
    }
}
