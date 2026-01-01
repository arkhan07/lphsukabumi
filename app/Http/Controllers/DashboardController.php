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

        // Redirect based on user's primary role (priority order)

        // 1. Admin - Highest priority
        if ($user->hasRole('admin_lph')) {
            return redirect()->route('admin.dashboard');
        }

        // 2. Manajer Teknis
        elseif ($user->hasRole('manajer_teknis')) {
            return redirect()->route('manajer_teknis.dashboard');
        }

        // 3. Auditor Halal
        elseif ($user->hasRole('auditor_halal')) {
            return redirect()->route('auditor.dashboard');
        }

        // 4. Pendamping Halal Reguler (PHR)
        elseif ($user->hasRole('pendamping_halal_reguler')) {
            return redirect()->route('phr.dashboard');
        }

        // 5. Pelaku Usaha
        elseif ($user->hasRole('pelaku_usaha')) {
            return redirect()->route('pelaku_usaha.dashboard');
        }

        // Fallback if no role assigned
        abort(403, 'Anda belum memiliki role yang valid. Silakan hubungi administrator.');
    }
}
