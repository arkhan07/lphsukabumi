<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Product;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Audit;
use App\Models\Document;
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
        // Statistics
        $stats = [
            'total_submissions' => Submission::count(),
            'pending_submissions' => Submission::whereIn('status', ['submitted', 'screening', 'verification'])->count(),
            'total_products' => Product::count(),
            'certified_products' => Product::where('halal_status', 'halal')->count(),
            'total_users' => User::count(),
            'total_auditors' => User::whereHas('roles', function($q) {
                $q->where('slug', 'auditor_halal');
            })->count(),
            'pending_invoices' => Invoice::where('status', 'sent')->count(),
            'total_revenue' => Invoice::where('status', 'paid')->sum('total_amount'),
            'pending_documents' => Document::where('status', 'pending_review')->count(),
            'total_audits' => Audit::count(),
        ];

        // Recent submissions
        $recent_submissions = Submission::with(['user', 'businessType'])
            ->latest()
            ->limit(5)
            ->get();

        // Recent audits (check if any exist)
        $recent_audits = Audit::with(['submission', 'leadAuditor'])
            ->latest('created_at')
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_submissions', 'recent_audits'));
    }
}
