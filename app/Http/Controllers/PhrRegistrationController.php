<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PhrRegistrationController extends Controller
{
    /**
     * Show PHR registration form
     */
    public function showRegistrationForm(Request $request)
    {
        $referralCode = $request->input('ref');
        $recruiter = null;

        if ($referralCode) {
            $recruiter = User::where('referral_code', $referralCode)
                ->whereHas('roles', function($q) {
                    $q->where('slug', 'pendamping_halal_reguler');
                })
                ->first();

            if (!$recruiter) {
                return redirect()->route('register.phr')
                    ->with('error', 'Kode referral tidak valid atau bukan dari Pendamping Halal Reguler aktif');
            }
        }

        return view('auth.register-phr', compact('recruiter', 'referralCode'));
    }

    /**
     * Handle PHR registration
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'province' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'district' => 'nullable|string|max:100',
            'recruiter_code' => 'nullable|string|exists:users,referral_code',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Check recruiter
        $recruiter = null;
        if ($request->filled('recruiter_code')) {
            $recruiter = User::where('referral_code', $request->recruiter_code)
                ->whereHas('roles', function($q) {
                    $q->where('slug', 'pendamping_halal_reguler');
                })
                ->where('is_phr_active', true)
                ->first();

            if (!$recruiter) {
                return back()->with('error', 'Kode recruiter tidak valid atau bukan dari PHR aktif')->withInput();
            }
        }

        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'whatsapp' => $request->whatsapp ?? $request->phone,
            'province' => $request->province,
            'city' => $request->city,
            'district' => $request->district,
            'phr_level' => 'phr',
            'is_phr_active' => true,
            'phr_joined_at' => now(),
            'recruited_by_phr' => $recruiter?->id,
        ]);

        // Generate unique referral code for PHR
        $user->ensureReferralCode('PHR');

        // Assign Pendamping Halal Reguler role
        $phrRole = Role::where('slug', 'pendamping_halal_reguler')->first();
        if ($phrRole) {
            $user->assignRole($phrRole);
        }

        // Update recruiter's statistics if exists
        if ($recruiter) {
            $recruiter->updatePhrStats();
            $recruiter->autoPromote(); // Check for auto-promotion
        }

        // Log the user in
        auth()->login($user);

        return redirect()->route('phr.dashboard')
            ->with('success', 'Registrasi PHR berhasil! Selamat datang di sistem PHR LPH Doa Bangsa.');
    }

    /**
     * Validate referral code via AJAX
     */
    public function validateReferralCode(Request $request)
    {
        $code = $request->input('code');

        if (!$code) {
            return response()->json([
                'valid' => false,
                'message' => 'Kode referral tidak boleh kosong',
            ]);
        }

        $recruiter = User::where('referral_code', $code)
            ->whereHas('roles', function($q) {
                $q->where('slug', 'pendamping_halal_reguler');
            })
            ->where('is_phr_active', true)
            ->first();

        if ($recruiter) {
            return response()->json([
                'valid' => true,
                'message' => 'Kode referral valid',
                'recruiter' => [
                    'name' => $recruiter->name,
                    'level' => $recruiter->phr_level_name ?? 'Pendamping Halal Reguler',
                    'province' => $recruiter->province,
                    'city' => $recruiter->city,
                ],
            ]);
        }

        return response()->json([
            'valid' => false,
            'message' => 'Kode referral tidak valid atau bukan dari Pendamping Halal Reguler aktif',
        ]);
    }
}
