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
        $user = auth()->user();

        // Get statistics
        $totalSubmissions = $user->submissions()->count();
        $inProgress = $user->submissions()->whereIn('status', ['draft', 'submitted', 'screening', 'verification', 'in_review'])->count();
        $approved = $user->submissions()->where('status', 'approved')->count();
        $needsRevision = $user->submissions()->where('status', 'revision_required')->count();

        // Get recent submissions
        $recentSubmissions = $user->submissions()
            ->with(['region', 'businessType', 'products'])
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // Status distribution for chart
        $statusCounts = [
            'in_progress' => $inProgress,
            'approved' => $approved,
            'needs_revision' => $needsRevision,
        ];

        return view('pelaku-usaha.dashboard', compact(
            'totalSubmissions',
            'inProgress',
            'approved',
            'needsRevision',
            'recentSubmissions',
            'statusCounts'
        ));
    }
}
