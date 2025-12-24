<?php

namespace App\Http\Controllers\PelakuUsaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Pelaku Usaha dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // TODO: Add statistics queries when submissions table is populated
        // $totalSubmissions = auth()->user()->submissions()->count();
        // $inProgress = auth()->user()->submissions()->whereIn('status', ['submitted', 'screening', 'verification'])->count();
        // $approved = auth()->user()->submissions()->where('status', 'approved')->count();
        // $rejected = auth()->user()->submissions()->where('status', 'rejected')->count();

        return view('pelaku-usaha.dashboard');
    }
}
