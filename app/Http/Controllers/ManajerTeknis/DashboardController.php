<?php

namespace App\Http\Controllers\ManajerTeknis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Manajer Teknis dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // TODO: Add statistics queries when data is available
        // $needsAssignment = Submission::where('status', 'ready_for_assignment')->count();
        // $auditsInProgress = Assignment::where('status', 'in_progress')->count();
        // $pendingReports = Report::where('status', 'submitted')->count();
        // $activeAuditors = User::role('auditor_halal')->where('is_active', true)->count();

        return view('manajer-teknis.dashboard');
    }
}
