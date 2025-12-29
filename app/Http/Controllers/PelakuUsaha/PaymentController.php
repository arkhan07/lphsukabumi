<?php

namespace App\Http\Controllers\PelakuUsaha;

use App\Http\Controllers\Controller;
use App\Models\InvoicePayment;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * Display a listing of the user's payments.
     */
    public function index()
    {
        $user = auth()->user();

        $payments = InvoicePayment::where('user_id', $user->id)
            ->with(['invoice.submission', 'verifiedBy'])
            ->orderBy('payment_date', 'desc')
            ->paginate(15);

        return view('pelaku-usaha.payments.index', compact('payments'));
    }

    /**
     * Display the specified payment.
     */
    public function show(InvoicePayment $payment)
    {
        // Ensure user owns this payment
        if ($payment->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $payment->load(['invoice.submission', 'verifiedBy']);

        return view('pelaku-usaha.payments.show', compact('payment'));
    }

    /**
     * Download payment proof.
     */
    public function downloadProof(InvoicePayment $payment)
    {
        // Ensure user owns this payment
        if ($payment->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        if (!$payment->payment_proof_path) {
            return redirect()->back()->with('error', 'Bukti pembayaran tidak tersedia');
        }

        return Storage::disk('public')->download($payment->payment_proof_path);
    }

    /**
     * Download payment receipt.
     */
    public function downloadReceipt(InvoicePayment $payment)
    {
        // Ensure user owns this payment
        if ($payment->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        if (!$payment->receipt_file_path) {
            return redirect()->back()->with('error', 'Kwitansi tidak tersedia');
        }

        return Storage::disk('public')->download($payment->receipt_file_path);
    }
}
