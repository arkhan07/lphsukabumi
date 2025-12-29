<?php

namespace App\Http\Controllers\PelakuUsaha;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoicePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the user's invoices.
     */
    public function index()
    {
        $user = auth()->user();

        $invoices = Invoice::where('user_id', $user->id)
            ->with(['submission', 'payments'])
            ->orderBy('invoice_date', 'desc')
            ->paginate(15);

        return view('pelaku-usaha.invoices.index', compact('invoices'));
    }

    /**
     * Display the specified invoice.
     */
    public function show(Invoice $invoice)
    {
        // Ensure user owns this invoice
        if ($invoice->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $invoice->load(['submission', 'payments.verifiedBy', 'createdBy']);

        // Mark as viewed if not already
        if (!$invoice->viewed_at) {
            $invoice->update([
                'viewed_at' => now(),
                'status' => $invoice->status === 'sent' ? 'viewed' : $invoice->status,
            ]);
        }

        return view('pelaku-usaha.invoices.show', compact('invoice'));
    }

    /**
     * Show form to create payment for an invoice.
     */
    public function createPayment(Invoice $invoice)
    {
        // Ensure user owns this invoice
        if ($invoice->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Check if invoice is payable
        if (in_array($invoice->status, ['paid', 'cancelled', 'refunded'])) {
            return redirect()->route('pelaku_usaha.invoices.show', $invoice)
                ->with('error', 'Invoice tidak dapat dibayar');
        }

        $invoice->load('submission');

        return view('pelaku-usaha.invoices.create-payment', compact('invoice'));
    }

    /**
     * Store payment for an invoice.
     */
    public function storePayment(Request $request, Invoice $invoice)
    {
        // Ensure user owns this invoice
        if ($invoice->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'amount' => 'required|numeric|min:0|max:' . $invoice->outstanding_amount,
            'payment_method' => 'required|string',
            'payment_date' => 'required|date',
            'bank_name' => 'nullable|string|max:255',
            'account_number' => 'nullable|string|max:255',
            'account_holder_name' => 'nullable|string|max:255',
            'transfer_reference_number' => 'nullable|string|max:255',
            'payment_proof' => 'required|file|max:5120', // 5MB max
            'notes' => 'nullable|string',
        ]);

        // Handle file upload
        $file = $request->file('payment_proof');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('payments', $fileName, 'public');

        // Generate payment number
        $paymentNumber = 'PAY-' . date('Ymd') . '-' . str_pad(InvoicePayment::count() + 1, 5, '0', STR_PAD_LEFT);

        // Create payment
        $payment = InvoicePayment::create([
            'invoice_id' => $invoice->id,
            'user_id' => auth()->id(),
            'payment_number' => $paymentNumber,
            'amount' => $request->amount,
            'currency' => $invoice->currency,
            'payment_method' => $request->payment_method,
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'account_holder_name' => $request->account_holder_name,
            'transfer_reference_number' => $request->transfer_reference_number,
            'payment_date' => $request->payment_date,
            'payment_time' => now(),
            'payment_proof_path' => $filePath,
            'notes' => $request->notes,
            'status' => 'pending',
        ]);

        return redirect()->route('pelaku_usaha.invoices.show', $invoice)
            ->with('success', 'Pembayaran berhasil disubmit. Menunggu verifikasi admin.');
    }

    /**
     * Download invoice PDF.
     */
    public function download(Invoice $invoice)
    {
        // Ensure user owns this invoice
        if ($invoice->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        if (!$invoice->invoice_file_path) {
            return redirect()->back()->with('error', 'File invoice tidak tersedia');
        }

        return Storage::disk('public')->download($invoice->invoice_file_path);
    }
}
