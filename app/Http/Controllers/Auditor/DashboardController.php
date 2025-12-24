<?php

namespace App\Http\Controllers\Auditor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Auditor Halal dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // TODO: Add statistics queries when data is available
        // $newAssignments = Assignment::where('auditor_id', auth()->id())
        //     ->where('status', 'assigned')->count();
        // $auditsInProgress = Assignment::where('auditor_id', auth()->id())
        //     ->where('status', 'in_progress')->count();
        // $draftReports = Report::where('auditor_id', auth()->id())
        //     ->where('status', 'draft')->count();
        // $completedAudits = Assignment::where('auditor_id', auth()->id())
        //     ->where('status', 'completed')->count();

        return view('auditor.dashboard');
    }
}
