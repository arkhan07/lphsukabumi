<?php

namespace App\Http\Controllers\PenyediaHalal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Penyedia Halal dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // TODO: Add statistics queries when data is available
        // $needsVerification = Verification::where('status', 'pending')->count();
        // $verifiedToday = Verification::where('verified_by', auth()->id())
        //     ->whereDate('verified_at', today())->count();
        // $totalProducts = Product::count();
        // $totalMaterials = Material::count();

        return view('penyedia-halal.dashboard');
    }
}
