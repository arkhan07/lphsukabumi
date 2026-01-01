<?php

namespace App\Http\Controllers\Auditor;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Report;
use App\Models\Finding;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Auditor Halal dashboard
     */
    public function index()
    {
        $user = auth()->user();
        $currentMonth = now()->month;
        $currentYear = now()->year;

        // Get fee statistics
        // Calculate from auditor_fees table
        $monthlyFeeTotal = $user->auditorFees()
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->sum('fee_amount');

        $feePaid = $user->auditorFees()
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->where('status', 'paid')
            ->sum('paid_amount');

        $feePending = $user->auditorFees()
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->whereIn('status', ['pending', 'approved'])
            ->sum('fee_amount');

        // Format to millions with 1 decimal
        $monthlyFeeTotalFormatted = $monthlyFeeTotal > 0
            ? 'Rp ' . number_format($monthlyFeeTotal / 1000000, 1) . 'M'
            : 'Rp 0';

        $feePaidFormatted = $feePaid > 0
            ? 'Rp ' . number_format($feePaid / 1000000, 1) . 'M'
            : 'Rp 0';

        $feePendingFormatted = $feePending > 0
            ? 'Rp ' . number_format($feePending / 1000000, 1) . 'M'
            : 'Rp 0';

        return view('auditor.dashboard', compact(
            'monthlyFeeTotalFormatted',
            'feePaidFormatted',
            'feePendingFormatted'
        ));
    }

    /**
     * Display auditor's schedules
     */
    public function schedules()
    {
        // TODO: Filter by auditor assignment when auditor assignment system is implemented
        $schedules = Schedule::with(['audit.submission'])
            ->latest()
            ->paginate(15);

        return view('auditor.schedules', compact('schedules'));
    }

    /**
     * Show schedule details
     */
    public function showSchedule(Schedule $schedule)
    {
        $schedule->load(['audit.submission']);
        return view('auditor.show-schedule', compact('schedule'));
    }

    /**
     * Start an audit
     */
    public function startAudit(Schedule $schedule)
    {
        $schedule->update(['status' => 'in_progress']);
        return back()->with('success', 'Audit dimulai');
    }

    /**
     * Complete an audit
     */
    public function completeAudit(Schedule $schedule)
    {
        $schedule->update(['status' => 'completed']);
        return back()->with('success', 'Audit selesai');
    }

    /**
     * Display auditor's reports
     */
    public function reports()
    {
        // TODO: Filter by auditor when auditor assignment is implemented
        $reports = Report::with(['audit.submission'])
            ->latest()
            ->paginate(15);

        return view('auditor.reports', compact('reports'));
    }

    /**
     * Show create report form
     */
    public function createReport()
    {
        return view('auditor.create-report');
    }

    /**
     * Store new report
     */
    public function storeReport(Request $request)
    {
        // TODO: Implement report creation
        return redirect()->route('auditor.reports')->with('success', 'Laporan berhasil dibuat');
    }

    /**
     * Show report details
     */
    public function showReport(Report $report)
    {
        $report->load(['audit.submission', 'findings']);
        return view('auditor.show-report', compact('report'));
    }

    /**
     * Show edit report form
     */
    public function editReport(Report $report)
    {
        return view('auditor.edit-report', compact('report'));
    }

    /**
     * Update report
     */
    public function updateReport(Request $request, Report $report)
    {
        // TODO: Implement report update
        return redirect()->route('auditor.reports')->with('success', 'Laporan berhasil diperbarui');
    }

    /**
     * Submit report for review
     */
    public function submitReport(Report $report)
    {
        $report->update(['status' => 'submitted']);
        return back()->with('success', 'Laporan berhasil disubmit');
    }

    /**
     * Display auditor's findings
     */
    public function findings()
    {
        // TODO: Filter by auditor when implemented
        $findings = Finding::with(['audit.submission'])
            ->latest()
            ->paginate(15);

        return view('auditor.findings', compact('findings'));
    }

    /**
     * Show create finding form
     */
    public function createFinding()
    {
        return view('auditor.create-finding');
    }

    /**
     * Store new finding
     */
    public function storeFinding(Request $request)
    {
        // TODO: Implement finding creation
        return redirect()->route('auditor.findings')->with('success', 'Temuan berhasil ditambahkan');
    }

    /**
     * Show finding details
     */
    public function showFinding(Finding $finding)
    {
        $finding->load(['audit.submission']);
        return view('auditor.show-finding', compact('finding'));
    }

    /**
     * Update finding
     */
    public function updateFinding(Request $request, Finding $finding)
    {
        // TODO: Implement finding update
        return back()->with('success', 'Temuan berhasil diperbarui');
    }
}
