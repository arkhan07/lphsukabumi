<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPhrRole
{
    /**
     * Handle an incoming request.
     * Check if user has 'pendamping_halal_reguler' role
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $level
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $level = null)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }

        $user = auth()->user();

        // Check if user has Pendamping Halal Reguler role
        if (!$user->hasRole('pendamping_halal_reguler')) {
            abort(403, 'Akses ditolak. Anda bukan Pendamping Halal Reguler.');
        }

        // Check if user is active PHR (if they have phr_level field)
        if (isset($user->is_phr_active) && !$user->is_phr_active) {
            abort(403, 'Akses ditolak. Status PHR Anda tidak aktif.');
        }

        // Check specific level if provided (for MLM hierarchy)
        if ($level && isset($user->phr_level)) {
            $allowedLevels = explode('|', $level);

            if (!in_array($user->phr_level, $allowedLevels)) {
                abort(403, 'Akses ditolak. Level PHR Anda tidak memenuhi persyaratan.');
            }
        }

        return $next($request);
    }
}
