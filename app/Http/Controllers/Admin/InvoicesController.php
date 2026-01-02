<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Submission;
use App\Models\AuditorFee;
use App\Models\PhrFee;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class InvoicesController extends Controller
{
    /**
     * Display a listing of invoices.
     */
    public function index()
    {
        $invoices = Invoice::with(['user', 'submission', 'createdBy'])
            ->orderBy('invoice_date', 'desc')
            ->paginate(20);

        return view('admin.invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new invoice.
     */
    public function create(Request $request)
    {
        $submissionId = $request->get('submission_id');
        $submission = null;

        if ($submissionId) {
            $submission = Submission::with(['user', 'products'])->findOrFail($submissionId);
        }

        $submissions = Submission::whereIn('status', ['approved', 'in_review'])
            ->whereDoesntHave('invoices', function($q) {
                $q->where('status', '!=', 'cancelled');
            })
            ->with('user')
            ->get();

        return view('admin.invoices.create', compact('submission', 'submissions'));
    }

    /**
     * Store a newly created invoice in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'invoice_type' => 'required|in:down_payment,full_payment,remaining_payment',
            'invoice_title' => 'required|string|max:255',
            'subtotal' => 'required|numeric|min:0',
            'tax_percentage' => 'nullable|numeric|min:0|max:100',
            'discount_percentage' => 'nullable|numeric|min:0|max:100',
            'payment_term' => 'required|in:immediate,net_7,net_14,net_30,custom',
            'payment_days' => 'required_if:payment_term,custom|nullable|integer|min:1',
            'invoice_date' => 'required|date',
            'line_items' => 'nullable|json',
            'notes' => 'nullable|string',
            'bank_name' => 'nullable|string',
            'bank_account_number' => 'nullable|string',
            'bank_account_name' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $submission = Submission::findOrFail($request->submission_id);

            // Calculate amounts
            $subtotal = $request->subtotal;
            $taxAmount = $subtotal * ($request->tax_percentage ?? 0) / 100;
            $discountAmount = $subtotal * ($request->discount_percentage ?? 0) / 100;
            $totalAmount = $subtotal + $taxAmount - $discountAmount;

            // Calculate due date
            $invoiceDate = \Carbon\Carbon::parse($request->invoice_date);
            $paymentDays = match($request->payment_term) {
                'immediate' => 0,
                'net_7' => 7,
                'net_14' => 14,
                'net_30' => 30,
                'custom' => $request->payment_days,
                default => 14,
            };
            $dueDate = $invoiceDate->copy()->addDays($paymentDays);

            // Generate invoice number
            $invoiceNumber = $this->generateInvoiceNumber($invoiceDate);

            // Create invoice
            $invoice = Invoice::create([
                'submission_id' => $submission->id,
                'user_id' => $submission->user_id,
                'created_by' => auth()->id(),
                'invoice_number' => $invoiceNumber,
                'invoice_type' => $request->invoice_type,
                'invoice_title' => $request->invoice_title,
                'description' => $request->description,
                'invoice_date' => $invoiceDate,
                'due_date' => $dueDate,
                'subtotal' => $subtotal,
                'tax_percentage' => $request->tax_percentage ?? 0,
                'tax_amount' => $taxAmount,
                'discount_percentage' => $request->discount_percentage ?? 0,
                'discount_amount' => $discountAmount,
                'total_amount' => $totalAmount,
                'outstanding_amount' => $totalAmount,
                'currency' => 'IDR',
                'line_items' => $request->line_items,
                'payment_term' => $request->payment_term,
                'payment_days' => $paymentDays,
                'status' => 'draft',
                'notes' => $request->notes,
                'bank_name' => $request->bank_name ?? 'BCA',
                'bank_account_number' => $request->bank_account_number,
                'bank_account_name' => $request->bank_account_name ?? 'LPH Doa Bangsa',
            ]);

            // Create auditor fee entries if there's an assigned auditor
            if ($submission->auditor_id) {
                $this->createAuditorFee($invoice, $submission);
            }

            DB::commit();

            return redirect()->route('admin.invoices.show', $invoice)
                ->with('success', 'Invoice berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal membuat invoice: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified invoice.
     */
    public function show(Invoice $invoice)
    {
        $invoice->load(['user', 'submission.products', 'createdBy', 'payments']);
        return view('admin.invoices.show', compact('invoice'));
    }

    /**
     * Preview invoice as PDF.
     */
    public function preview(Invoice $invoice)
    {
        // Check if DomPDF package is available
        if (!class_exists('\Barryvdh\DomPDF\Facade\Pdf')) {
            return redirect()->back()->with('error', 'Package DomPDF belum terinstall. Jalankan: composer require barryvdh/laravel-dompdf');
        }

        $invoice->load(['user', 'submission.products', 'createdBy']);

        // Prepare data for view
        $products = $invoice->submission->products;
        $products_list = $products ? $products->pluck('name')->join(', ') : '-';
        $bpjph_fee = 0; // Calculate BPJPH fee if needed

        $pdf = Pdf::loadView('invoices.quotation-template', compact('invoice', 'products_list', 'bpjph_fee'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Surat_Penawaran_' . $invoice->invoice_number . '.pdf');
    }

    /**
     * Generate PDF and save to storage.
     */
    public function generatePdf(Invoice $invoice)
    {
        // Check if DomPDF package is available
        if (!class_exists('\Barryvdh\DomPDF\Facade\Pdf')) {
            return redirect()->back()->with('error', 'Package DomPDF belum terinstall. Jalankan: composer require barryvdh/laravel-dompdf');
        }

        $invoice->load(['user', 'submission.products', 'createdBy']);

        // Prepare data for view
        $products = $invoice->submission->products;
        $products_list = $products ? $products->pluck('name')->join(', ') : '-';
        $bpjph_fee = 0;

        $pdf = Pdf::loadView('invoices.quotation-template', compact('invoice', 'products_list', 'bpjph_fee'));
        $pdf->setPaper('a4', 'portrait');

        // Save PDF
        $fileName = 'invoices/' . $invoice->invoice_number . '.pdf';
        $pdf->save(storage_path('app/public/' . $fileName));

        // Update invoice with file path
        $invoice->update(['invoice_file_path' => $fileName]);

        return redirect()->back()->with('success', 'PDF berhasil digenerate');
    }

    /**
     * Send invoice to client.
     */
    public function send(Invoice $invoice)
    {
        // Generate PDF if not exists
        if (!$invoice->invoice_file_path) {
            $this->generatePdf($invoice);
        }

        $invoice->update([
            'status' => 'sent',
            'sent_at' => now(),
        ]);

        // TODO: Send email notification to client

        return redirect()->back()->with('success', 'Invoice berhasil dikirim ke klien');
    }

    /**
     * Cancel invoice.
     */
    public function cancel(Request $request, Invoice $invoice)
    {
        $request->validate([
            'cancellation_reason' => 'required|string',
        ]);

        $invoice->update([
            'status' => 'cancelled',
            'cancelled_at' => now(),
            'cancellation_reason' => $request->cancellation_reason,
        ]);

        return redirect()->back()->with('success', 'Invoice berhasil dibatalkan');
    }

    /**
     * Generate unique invoice number.
     * Format: [sequence]/LPH.DB/P/[month]/[year]
     */
    protected function generateInvoiceNumber($invoiceDate)
    {
        $month = $invoiceDate->format('m');
        $year = $invoiceDate->format('Y');
        $monthName = $invoiceDate->format('F');

        // Get last invoice number for this month/year
        $lastInvoice = Invoice::where('invoice_number', 'like', "%/LPH.DB/P/$month/$year")
            ->orderBy('id', 'desc')
            ->first();

        $sequence = 1;
        if ($lastInvoice) {
            // Extract sequence number from last invoice
            preg_match('/^(\d+)\//', $lastInvoice->invoice_number, $matches);
            if (isset($matches[1])) {
                $sequence = intval($matches[1]) + 1;
            }
        }

        return sprintf('%03d/LPH.DB/P/%s/%s', $sequence, $month, $year);
    }

    /**
     * Create auditor fee entry for invoice.
     */
    protected function createAuditorFee(Invoice $invoice, Submission $submission)
    {
        $feePercentage = 30; // 30% of invoice amount
        $feeAmount = $invoice->total_amount * ($feePercentage / 100);

        AuditorFee::create([
            'auditor_id' => $submission->auditor_id,
            'invoice_id' => $invoice->id,
            'submission_id' => $submission->id,
            'invoice_amount' => $invoice->total_amount,
            'fee_percentage' => $feePercentage,
            'fee_amount' => $feeAmount,
            'status' => 'pending',
        ]);
    }

    /**
     * Mark invoice as paid and create PHR fees
     */
    public function markAsPaid(Request $request, Invoice $invoice)
    {
        $request->validate([
            'payment_amount' => 'required|numeric|min:0',
            'payment_date' => 'required|date',
            'payment_method' => 'nullable|string|max:100',
            'payment_reference' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            // Update invoice status
            $invoice->update([
                'status' => 'paid',
                'paid_at' => $request->payment_date,
                'outstanding_amount' => max(0, $invoice->outstanding_amount - $request->payment_amount),
            ]);

            // Create PHR fees if pelaku usaha was referred by PHR
            $pelakuUsaha = $invoice->user;
            if ($pelakuUsaha && $pelakuUsaha->referred_by) {
                $this->createPhrFees($invoice, $pelakuUsaha);
            }

            DB::commit();

            return redirect()->back()->with('success', 'Invoice berhasil ditandai sebagai dibayar dan fee PHR telah dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal memproses pembayaran: ' . $e->getMessage());
        }
    }

    /**
     * Create PHR fee entries for invoice based on referral chain
     */
    protected function createPhrFees(Invoice $invoice, User $pelakuUsaha)
    {
        // Get the PHR who referred this Pelaku Usaha
        $directPhr = User::find($pelakuUsaha->referred_by);

        // Check if referrer is a valid, active PHR
        if (!$directPhr || !$directPhr->hasRole('pendamping_halal_reguler') || !$directPhr->is_phr_active) {
            return; // No PHR or inactive PHR
        }

        // Calculate base fees
        $invoiceAmount = $invoice->total_amount;

        // 1. Direct PHR Fee (10% of invoice amount)
        $this->createPhrFee([
            'phr_id' => $directPhr->id,
            'invoice_id' => $invoice->id,
            'pelaku_usaha_id' => $pelakuUsaha->id,
            'submission_id' => $invoice->submission_id,
            'invoice_amount' => $invoiceAmount,
            'fee_type' => 'direct',
            'fee_percentage' => 10,
            'fee_amount' => $invoiceAmount * 0.10,
            'direct_phr_id' => $directPhr->id,
        ]);

        // 2. Area Manager Fee (3% if direct PHR was recruited by Area Manager)
        if ($directPhr->recruited_by_phr) {
            $areaManager = User::find($directPhr->recruited_by_phr);

            if ($areaManager &&
                $areaManager->hasRole('pendamping_halal_reguler') &&
                ($areaManager->phr_level === 'area_manager' || $areaManager->phr_level === 'regional_manager') &&
                $areaManager->is_phr_active) {

                $this->createPhrFee([
                    'phr_id' => $areaManager->id,
                    'invoice_id' => $invoice->id,
                    'pelaku_usaha_id' => $pelakuUsaha->id,
                    'submission_id' => $invoice->submission_id,
                    'invoice_amount' => $invoiceAmount,
                    'fee_type' => 'downline',
                    'fee_percentage' => 3,
                    'fee_amount' => $invoiceAmount * 0.03,
                    'direct_phr_id' => $directPhr->id,
                    'area_manager_id' => $areaManager->id,
                ]);

                // 3. Regional Manager Fee (2% if Area Manager was recruited by Regional Manager)
                if ($areaManager->recruited_by_phr) {
                    $regionalManager = User::find($areaManager->recruited_by_phr);

                    if ($regionalManager &&
                        $regionalManager->hasRole('pendamping_halal_reguler') &&
                        $regionalManager->phr_level === 'regional_manager' &&
                        $regionalManager->is_phr_active) {

                        $this->createPhrFee([
                            'phr_id' => $regionalManager->id,
                            'invoice_id' => $invoice->id,
                            'pelaku_usaha_id' => $pelakuUsaha->id,
                            'submission_id' => $invoice->submission_id,
                            'invoice_amount' => $invoiceAmount,
                            'fee_type' => 'regional',
                            'fee_percentage' => 2,
                            'fee_amount' => $invoiceAmount * 0.02,
                            'direct_phr_id' => $directPhr->id,
                            'area_manager_id' => $areaManager->id,
                            'regional_manager_id' => $regionalManager->id,
                        ]);
                    }
                }
            }
        }
    }

    /**
     * Helper to create a single PHR fee entry
     */
    protected function createPhrFee(array $data)
    {
        PhrFee::create(array_merge($data, [
            'status' => 'pending',
        ]));
    }
}
