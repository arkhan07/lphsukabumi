<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the main dashboard and redirect to role-specific dashboard
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $user = auth()->user();

        // Redirect based on user's primary role
        if ($user->hasRole('pelaku_usaha')) {
            return redirect()->route('pelaku_usaha.dashboard');
        } elseif ($user->hasRole('penyedia_halal')) {
            return redirect()->route('penyedia_halal.dashboard');
        } elseif ($user->hasRole('admin_lph')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('manajer_teknis')) {
            return redirect()->route('manajer_teknis.dashboard');
        } elseif ($user->hasRole('auditor_halal')) {
            return redirect()->route('auditor.dashboard');
        }

        // Fallback if no role assigned
        abort(403, 'Anda belum memiliki role yang valid. Silakan hubungi administrator.');
    }
}
