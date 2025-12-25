<x-layouts.admin.app>
    <x-slot name="title">Detail Invoice #{{ $invoice->invoice_number }}</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Invoice</h2>
            <p class="text-secondary-light mb-0">{{ $invoice->invoice_number }}</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.finance.invoices') }}" class="btn btn-outline-primary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
            @if($invoice->status === 'draft')
            <a href="{{ route('admin.finance.invoices.edit', $invoice) }}" class="btn btn-primary">
                <i class="ri-edit-line me-2"></i>
                Edit
            </a>
            @endif
        </div>
    </div>

    <div class="row g-3">
        <!-- Invoice Details -->
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Informasi Invoice</h5>
                    <div>
                        @php
                            $statusBadge = match($invoice->status) {
                                'draft' => 'secondary',
                                'sent' => 'info',
                                'partial_payment' => 'warning',
                                'paid' => 'success',
                                'overdue' => 'danger',
                                'cancelled' => 'dark',
                                default => 'secondary'
                            };
                            $statusLabel = match($invoice->status) {
                                'draft' => 'Draft',
                                'sent' => 'Terkirim',
                                'partial_payment' => 'Bayar Sebagian',
                                'paid' => 'Lunas',
                                'overdue' => 'Jatuh Tempo',
                                'cancelled' => 'Dibatalkan',
                                default => ucfirst($invoice->status)
                            };
                        @endphp
                        <span class="badge-custom badge-{{ $statusBadge }}">{{ $statusLabel }}</span>
                    </div>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Nomor Invoice</label>
                            <div style="font-weight: 600;">{{ $invoice->invoice_number }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Tanggal Invoice</label>
                            <div style="font-weight: 600;">{{ $invoice->invoice_date->format('d/m/Y') }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Tanggal Jatuh Tempo</label>
                            <div style="font-weight: 600;">{{ $invoice->due_date->format('d/m/Y') }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Permohonan</label>
                            <div style="font-weight: 600;">{{ $invoice->submission->submission_number }}</div>
                        </div>
                        <div class="col-12">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Perusahaan</label>
                            <div style="font-weight: 600;">{{ $invoice->submission->company_name ?? $invoice->submission->user->name }}</div>
                        </div>
                        @if($invoice->notes)
                        <div class="col-12">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Catatan</label>
                            <div>{{ $invoice->notes }}</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Payment History -->
            @if($invoice->payments && $invoice->payments->count() > 0)
            <div class="card-custom mt-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Riwayat Pembayaran</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nomor Pembayaran</th>
                                <th>Jumlah</th>
                                <th>Metode</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoice->payments as $payment)
                            <tr>
                                <td>{{ $payment->payment_date->format('d/m/Y') }}</td>
                                <td>{{ $payment->payment_number }}</td>
                                <td>Rp {{ number_format($payment->amount, 0, ',', '.') }}</td>
                                <td>{{ ucfirst(str_replace('_', ' ', $payment->payment_method)) }}</td>
                                <td>
                                    @php
                                        $paymentStatusBadge = match($payment->status) {
                                            'pending' => 'warning',
                                            'verified' => 'success',
                                            'rejected' => 'danger',
                                            default => 'secondary'
                                        };
                                    @endphp
                                    <span class="badge-custom badge-{{ $paymentStatusBadge }}">{{ ucfirst($payment->status) }}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>

        <!-- Invoice Summary -->
        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Ringkasan</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-secondary-light">Subtotal</span>
                        <span style="font-weight: 600;">Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</span>
                    </div>
                    @if($invoice->tax_amount > 0)
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-secondary-light">Pajak (PPN)</span>
                        <span style="font-weight: 600;">Rp {{ number_format($invoice->tax_amount, 0, ',', '.') }}</span>
                    </div>
                    @endif
                    @if($invoice->discount_amount > 0)
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-secondary-light">Diskon</span>
                        <span style="font-weight: 600;" class="text-danger">- Rp {{ number_format($invoice->discount_amount, 0, ',', '.') }}</span>
                    </div>
                    @endif
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <span style="font-weight: 700; font-size: 1.1rem;">Total</span>
                        <span style="font-weight: 700; font-size: 1.1rem;">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</span>
                    </div>
                    @if($invoice->paid_amount > 0)
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-secondary-light">Terbayar</span>
                        <span style="font-weight: 600;" class="text-success">Rp {{ number_format($invoice->paid_amount, 0, ',', '.') }}</span>
                    </div>
                    @endif
                    @if($invoice->outstanding_amount > 0)
                    <div class="d-flex justify-content-between">
                        <span style="font-weight: 600;">Sisa Pembayaran</span>
                        <span style="font-weight: 700;" class="text-danger">Rp {{ number_format($invoice->outstanding_amount, 0, ',', '.') }}</span>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Actions -->
            <div class="card-custom mt-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Aksi</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="d-grid gap-2">
                        @if($invoice->status === 'draft')
                        <form method="POST" action="{{ route('admin.finance.invoices.send', $invoice) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="ri-send-plane-line me-2"></i>
                                Kirim Invoice
                            </button>
                        </form>
                        @endif
                        <a href="{{ route('admin.finance.invoices.pdf', $invoice) }}" class="btn btn-outline-primary" target="_blank">
                            <i class="ri-file-pdf-line me-2"></i>
                            Download PDF
                        </a>
                        @if(in_array($invoice->status, ['sent', 'partial_payment', 'overdue']))
                        <form method="POST" action="{{ route('admin.finance.invoices.reminder', $invoice) }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-warning w-100">
                                <i class="ri-notification-line me-2"></i>
                                Kirim Pengingat
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
