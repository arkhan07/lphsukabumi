<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Admin LPH dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // TODO: Add statistics queries when data is available
        // $totalSubmissions = Submission::count();
        // $totalAuditors = User::role('auditor_halal')->count();
        // $pendingInvoices = Invoice::where('status', 'pending')->count();
        // $totalUsers = User::count();

        return view('admin.dashboard');
    }
}
