<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPhrRole
{
    /**
     * Handle an incoming request.
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

        // Check if user is PHR
        if ($user->phr_level === 'none') {
            abort(403, 'Akses ditolak. Anda bukan PHR.');
        }

        // Check if user is active PHR
        if (!$user->is_phr_active) {
            abort(403, 'Akses ditolak. Status PHR Anda tidak aktif.');
        }

        // Check specific level if provided
        if ($level) {
            $allowedLevels = explode('|', $level);

            if (!in_array($user->phr_level, $allowedLevels)) {
                abort(403, 'Akses ditolak. Level PHR Anda tidak memenuhi persyaratan.');
            }
        }

        return $next($request);
    }
}
