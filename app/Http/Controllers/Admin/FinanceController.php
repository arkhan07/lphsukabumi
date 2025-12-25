<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoicePayment;
use App\Models\FeeConfiguration;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FinanceController extends Controller
{
    /**
     * Display invoices
     */
    public function invoices(Request $request)
    {
        $query = Invoice::with(['submission']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Date range filter
        if ($request->filled('start_date')) {
            $query->whereDate('invoice_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('invoice_date', '<=', $request->end_date);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('invoice_number', 'like', "%{$search}%")
                  ->orWhereHas('submission', function($sq) use ($search) {
                      $sq->where('company_name', 'like', "%{$search}%");
                  });
            });
        }

        $invoices = $query->latest('invoice_date')->paginate(15);

        // Statistics
        $stats = [
            'total' => Invoice::count(),
            'pending' => Invoice::where('status', 'pending')->count(),
            'paid' => Invoice::where('status', 'paid')->count(),
            'overdue' => Invoice::where('status', 'overdue')->count(),
            'total_amount' => Invoice::where('status', 'paid')->sum('total_amount'),
        ];

        // Add financial summary
        $stats['total_amount'] = Invoice::sum('total_amount');
        $stats['paid_amount'] = Invoice::sum('paid_amount');
        $stats['outstanding_amount'] = Invoice::sum('outstanding_amount');
        $stats['payment_percentage'] = $stats['total_amount'] > 0 ? round(($stats['paid_amount'] / $stats['total_amount']) * 100, 1) : 0;
        $stats['draft'] = Invoice::where('status', 'draft')->count();
        $stats['sent'] = Invoice::where('status', 'sent')->count();

        return view('admin.finance.invoices', compact('invoices', 'stats'));
    }

    /**
     * Create invoice
     */
    public function createInvoice()
    {
        $submissions = Submission::whereIn('status', ['approved', 'completed'])
            ->whereDoesntHave('invoices')
            ->get();

        return view('admin.finance.create-invoice', compact('submissions'));
    }

    /**
     * Show invoice details
     */
    public function showInvoice(Invoice $invoice)
    {
        $invoice->load(['submission.user', 'payments', 'createdBy']);
        return view('admin.finance.show-invoice', compact('invoice'));
    }

    /**
     * Edit invoice
     */
    public function editInvoice(Invoice $invoice)
    {
        $submissions = Submission::whereIn('status', ['approved', 'completed'])->get();
        return view('admin.finance.edit-invoice', compact('invoice', 'submissions'));
    }

    /**
     * Update invoice
     */
    public function updateInvoice(Request $request, Invoice $invoice)
    {
        // Only allow editing draft invoices
        if ($invoice->status !== 'draft') {
            return back()->with('error', 'Hanya invoice draft yang dapat diedit');
        }

        $validated = $request->validate([
            'invoice_date' => 'required|date',
            'due_date' => 'required|date|after:invoice_date',
            'subtotal' => 'required|numeric|min:0',
            'tax_amount' => 'nullable|numeric|min:0',
            'discount_amount' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        $validated['tax_amount'] = $validated['tax_amount'] ?? 0;
        $validated['discount_amount'] = $validated['discount_amount'] ?? 0;
        $validated['total_amount'] = $validated['subtotal'] + $validated['tax_amount'] - $validated['discount_amount'];
        $validated['outstanding_amount'] = $validated['total_amount'] - $invoice->paid_amount;

        $invoice->update($validated);

        return redirect()->route('admin.finance.invoices')
                       ->with('success', 'Invoice berhasil diperbarui');
    }

    /**
     * Store invoice
     */
    public function storeInvoice(Request $request)
    {
        $validated = $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'invoice_date' => 'required|date',
            'due_date' => 'required|date|after:invoice_date',
            'subtotal' => 'required|numeric|min:0',
            'tax_amount' => 'nullable|numeric|min:0',
            'discount_amount' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            // Generate invoice number
            $lastInvoice = Invoice::latest('id')->first();
            $nextNumber = $lastInvoice ? (intval(substr($lastInvoice->invoice_number, -5)) + 1) : 1;
            $validated['invoice_number'] = 'INV-' . date('Ym') . '-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);

            $validated['tax_amount'] = $validated['tax_amount'] ?? 0;
            $validated['discount_amount'] = $validated['discount_amount'] ?? 0;
            $validated['total_amount'] = $validated['subtotal'] + $validated['tax_amount'] - $validated['discount_amount'];
            $validated['paid_amount'] = 0;
            $validated['outstanding_amount'] = $validated['total_amount'];
            $validated['status'] = 'draft';
            $validated['user_id'] = Submission::find($validated['submission_id'])->user_id;
            $validated['created_by'] = auth()->id();

            $invoice = Invoice::create($validated);

            DB::commit();

            return redirect()->route('admin.finance.invoices')
                           ->with('success', 'Invoice berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal membuat invoice: ' . $e->getMessage());
        }
    }

    /**
     * Display payments
     */
    public function payments(Request $request)
    {
        $query = InvoicePayment::with(['invoice.submission']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Date range filter
        if ($request->filled('start_date')) {
            $query->whereDate('payment_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('payment_date', '<=', $request->end_date);
        }

        $payments = $query->latest('payment_date')->paginate(15);

        // Statistics
        $stats = [
            'total' => InvoicePayment::count(),
            'pending' => InvoicePayment::where('status', 'pending')->count(),
            'verified' => InvoicePayment::where('status', 'verified')->count(),
            'rejected' => InvoicePayment::where('status', 'rejected')->count(),
        ];

        return view('admin.finance.payments', compact('payments', 'stats'));
    }

    /**
     * Store payment
     */
    public function storePayment(Request $request)
    {
        $validated = $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|in:bank_transfer,cash,check,credit_card,virtual_account,e_wallet,other',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'bank_name' => 'nullable|string',
            'account_number' => 'nullable|string',
            'account_holder_name' => 'nullable|string',
            'transfer_reference_number' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            // Upload payment proof
            if ($request->hasFile('payment_proof')) {
                $validated['payment_proof_path'] = $request->file('payment_proof')->store('payments', 'public');
                unset($validated['payment_proof']);
            }

            // Generate payment number
            $lastPayment = InvoicePayment::latest('id')->first();
            $nextNumber = $lastPayment ? (intval(substr($lastPayment->payment_number, -5)) + 1) : 1;
            $validated['payment_number'] = 'PAY-' . date('Ym') . '-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);

            $validated['status'] = 'pending';
            $validated['user_id'] = auth()->id();
            $payment = InvoicePayment::create($validated);

            DB::commit();

            return back()->with('success', 'Pembayaran berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal menambahkan pembayaran: ' . $e->getMessage());
        }
    }

    /**
     * Verify payment
     */
    public function verifyPayment(Request $request, InvoicePayment $payment)
    {
        $validated = $request->validate([
            'verification_notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $payment->update([
                'status' => 'verified',
                'verified_by' => auth()->id(),
                'verified_at' => now(),
                'verification_notes' => $validated['verification_notes'] ?? null,
            ]);

            // Update invoice
            $invoice = $payment->invoice;
            $invoice->paid_amount += $payment->amount;
            $invoice->outstanding_amount = $invoice->total_amount - $invoice->paid_amount;

            if ($invoice->outstanding_amount <= 0) {
                $invoice->status = 'paid';
                $invoice->fully_paid_at = now();
            } else {
                $invoice->status = 'partial_payment';
            }

            $invoice->save();

            DB::commit();

            return back()->with('success', 'Pembayaran berhasil diverifikasi');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal memverifikasi pembayaran: ' . $e->getMessage());
        }
    }

    /**
     * Reject payment
     */
    public function rejectPayment(Request $request, InvoicePayment $payment)
    {
        $validated = $request->validate([
            'verification_notes' => 'required|string',
        ]);

        $payment->update([
            'status' => 'rejected',
            'verified_by' => auth()->id(),
            'verified_at' => now(),
            'verification_notes' => $validated['verification_notes'],
        ]);

        return back()->with('success', 'Pembayaran ditolak');
    }

    /**
     * Display fee settings
     */
    public function feeSettings()
    {
        $fees = FeeConfiguration::with(['businessType', 'productType', 'region'])
            ->latest()
            ->paginate(15);

        // Statistics
        $stats = [
            'total_fees' => FeeConfiguration::count(),
            'active_fees' => FeeConfiguration::where('is_active', true)->count(),
            'certification_fees' => FeeConfiguration::whereIn('fee_type', ['base_fee', 're_certification_fee'])->count(),
            'audit_fees' => FeeConfiguration::where('fee_type', 'audit_fee')->count(),
        ];

        return view('admin.finance.fee-settings', compact('fees', 'stats'));
    }

    /**
     * Edit fee configuration (return JSON for AJAX)
     */
    public function editFee(FeeConfiguration $fee)
    {
        return response()->json($fee);
    }

    /**
     * Store fee configuration
     */
    public function storeFee(Request $request)
    {
        $validated = $request->validate([
            'config_name' => 'required|string|max:255',
            'config_code' => 'required|string|max:50|unique:fee_configurations,config_code',
            'description' => 'nullable|string',
            'fee_type' => 'required|in:base_fee,audit_fee,surveillance_fee,re_certification_fee,document_review_fee,product_fee,additional_service_fee',
            'calculation_method' => 'required|in:fixed_amount,per_product,per_process,per_day,percentage,formula',
            'base_amount' => 'required|numeric|min:0',
            'min_amount' => 'nullable|numeric|min:0',
            'max_amount' => 'nullable|numeric|min:0',
            'calculation_formula' => 'nullable|string',
            'business_type_id' => 'nullable|exists:business_types,id',
            'product_type_id' => 'nullable|exists:product_types,id',
            'region_id' => 'nullable|exists:regions,id',
            'effective_from' => 'required|date',
            'effective_until' => 'nullable|date|after:effective_from',
            'include_tax' => 'nullable|boolean',
            'tax_percentage' => 'nullable|numeric|min:0|max:100',
            'parameters' => 'nullable|array',
            'notes' => 'nullable|string',
        ]);

        $validated['is_active'] = true;
        $validated['include_tax'] = $validated['include_tax'] ?? false;
        $validated['created_by'] = auth()->id();

        FeeConfiguration::create($validated);

        return back()->with('success', 'Konfigurasi biaya berhasil ditambahkan');
    }

    /**
     * Update fee configuration
     */
    public function updateFee(Request $request, FeeConfiguration $fee)
    {
        $validated = $request->validate([
            'config_name' => 'required|string|max:255',
            'config_code' => 'required|string|max:50|unique:fee_configurations,config_code,' . $fee->id,
            'description' => 'nullable|string',
            'fee_type' => 'required|in:base_fee,audit_fee,surveillance_fee,re_certification_fee,document_review_fee,product_fee,additional_service_fee',
            'calculation_method' => 'required|in:fixed_amount,per_product,per_process,per_day,percentage,formula',
            'base_amount' => 'required|numeric|min:0',
            'min_amount' => 'nullable|numeric|min:0',
            'max_amount' => 'nullable|numeric|min:0',
            'calculation_formula' => 'nullable|string',
            'business_type_id' => 'nullable|exists:business_types,id',
            'product_type_id' => 'nullable|exists:product_types,id',
            'region_id' => 'nullable|exists:regions,id',
            'effective_from' => 'required|date',
            'effective_until' => 'nullable|date|after:effective_from',
            'include_tax' => 'nullable|boolean',
            'tax_percentage' => 'nullable|numeric|min:0|max:100',
            'parameters' => 'nullable|array',
            'notes' => 'nullable|string',
        ]);

        $validated['updated_by'] = auth()->id();
        $fee->update($validated);

        return back()->with('success', 'Konfigurasi biaya berhasil diperbarui');
    }

    /**
     * Toggle fee status
     */
    public function toggleFee(FeeConfiguration $fee)
    {
        $fee->update([
            'is_active' => !$fee->is_active,
            'updated_by' => auth()->id(),
        ]);

        return back()->with('success', 'Status biaya berhasil diperbarui');
    }

    /**
     * Download invoice as PDF
     */
    public function downloadPdf(Invoice $invoice)
    {
        // TODO: Implement PDF generation
        // For now, return a simple response
        return back()->with('info', 'Fitur download PDF sedang dalam pengembangan');
    }

    /**
     * Download invoice
     */
    public function downloadInvoice(Invoice $invoice)
    {
        // TODO: Implement invoice download
        return $this->downloadPdf($invoice);
    }

    /**
     * Send invoice to customer
     */
    public function sendInvoice(Invoice $invoice)
    {
        if ($invoice->status === 'draft') {
            $invoice->update([
                'status' => 'sent',
                'sent_at' => now(),
            ]);

            return back()->with('success', 'Invoice berhasil dikirim ke pelanggan');
        }

        return back()->with('error', 'Invoice sudah pernah dikirim');
    }

    /**
     * Send payment reminder
     */
    public function sendReminder(Invoice $invoice)
    {
        if (in_array($invoice->status, ['sent', 'partial_payment', 'overdue'])) {
            // TODO: Implement email reminder
            return back()->with('success', 'Reminder pembayaran berhasil dikirim');
        }

        return back()->with('error', 'Tidak dapat mengirim reminder untuk invoice ini');
    }

    /**
     * Delete invoice
     */
    public function destroyInvoice(Invoice $invoice)
    {
        // Only allow deleting draft invoices
        if ($invoice->status !== 'draft') {
            return back()->with('error', 'Hanya invoice draft yang dapat dihapus');
        }

        $invoice->delete();

        return redirect()->route('admin.finance.invoices')
                       ->with('success', 'Invoice berhasil dihapus');
    }

    /**
     * Show payment details
     */
    public function showPayment(InvoicePayment $payment)
    {
        $payment->load(['invoice.submission', 'user', 'verifiedBy']);
        return view('admin.finance.show-payment', compact('payment'));
    }
}
