<?php

namespace App\Http\Controllers\Phr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    /**
     * Display PHR profile
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

        // Get PHR statistics
        $stats = [
            'level' => $user->phr_level ?? 'phr',
            'joined_date' => $user->phr_joined_at,
            'referral_code' => $user->referral_code,
            'pu_referred' => $user->referredPelakuUsaha()->count(),
            'phr_recruited' => $user->recruitedPhrs()->count(),
            'total_fees_earned' => $user->phrFees()->where('status', 'paid')->sum('paid_amount'),
        ];

        return view('phr.profile.index', compact('stats', 'user'));
    }

    /**
     * Update profile information
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:10',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            // Delete old photo if exists
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            $path = $request->file('profile_photo')->store('profile-photos', 'public');
            $validated['profile_photo'] = $path;
        }

        $user->update($validated);

        return back()->with('success', 'Profil berhasil diperbarui');
    }

    /**
     * Update password
     */
    public function updatePassword(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        // Verify current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai']);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Password berhasil diperbarui');
    }

    /**
     * Update bank account information
     */
    public function updateBankAccount(Request $request)
    {
        $user = auth()->user();

        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak.');
        }

        $validated = $request->validate([
            'bank_name' => 'nullable|string|max:100',
            'bank_account_number' => 'nullable|string|max:50',
            'bank_account_holder' => 'nullable|string|max:255',
        ]);

        $user->update($validated);

        return back()->with('success', 'Informasi rekening bank berhasil diperbarui');
    }

    /**
     * Delete profile photo
     */
    public function deletePhoto()
    {
        $user = auth()->user();

        if ($user->profile_photo) {
            Storage::disk('public')->delete($user->profile_photo);
            $user->update(['profile_photo' => null]);
        }

        return back()->with('success', 'Foto profil berhasil dihapus');
    }
}
