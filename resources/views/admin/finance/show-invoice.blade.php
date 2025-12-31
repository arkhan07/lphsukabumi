<x-layouts.admin.app>
    <x-slot name="title">Detail Invoice #{{ $invoice->invoice_number }}</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Detail Invoice</h2>
                    <p class="text-muted mt-1">{{ $invoice->invoice_number }}</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('admin.finance.invoices') }}" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                            Kembali
                        </a>
                        @if($invoice->status === 'draft')
                        <a href="{{ route('admin.finance.invoices.edit', $invoice) }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                            Edit
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row g-3">
                <!-- Invoice Details -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-status-top @php
                            echo match($invoice->status) {
                                'paid' => 'bg-green',
                                'overdue' => 'bg-red',
                                'partial_payment' => 'bg-yellow',
                                'sent' => 'bg-cyan',
                                'cancelled' => 'bg-secondary',
                                default => 'bg-secondary'
                            };
                        @endphp"></div>
                        <div class="card-header">
                            <h3 class="card-title">Informasi Invoice</h3>
                            <div class="card-actions">
                                @php
                                    $statusBadge = match($invoice->status) {
                                        'draft' => 'secondary',
                                        'sent' => 'cyan',
                                        'partial_payment' => 'yellow',
                                        'paid' => 'green',
                                        'overdue' => 'red',
                                        'cancelled' => 'secondary',
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
                                <span class="badge bg-{{ $statusBadge }}-lt">{{ $statusLabel }}</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Nomor Invoice</div>
                                    <div class="datagrid-content"><strong>{{ $invoice->invoice_number }}</strong></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Tanggal Invoice</div>
                                    <div class="datagrid-content">{{ $invoice->invoice_date->format('d/m/Y') }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Tanggal Jatuh Tempo</div>
                                    <div class="datagrid-content">{{ $invoice->due_date->format('d/m/Y') }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Permohonan</div>
                                    <div class="datagrid-content">{{ $invoice->submission->submission_number }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Perusahaan</div>
                                    <div class="datagrid-content">{{ $invoice->submission->company_name ?? $invoice->submission->user->name }}</div>
                                </div>
                                @if($invoice->notes)
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Catatan</div>
                                    <div class="datagrid-content">{{ $invoice->notes }}</div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Payment History -->
                    @if($invoice->payments && $invoice->payments->count() > 0)
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Pembayaran</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
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
                                                    'pending' => 'yellow',
                                                    'verified' => 'green',
                                                    'rejected' => 'red',
                                                    default => 'secondary'
                                                };
                                            @endphp
                                            <span class="badge bg-{{ $paymentStatusBadge }}-lt">{{ ucfirst($payment->status) }}</span>
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
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ringkasan</h3>
                        </div>
                        <div class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Subtotal</div>
                                    <div class="datagrid-content">Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</div>
                                </div>
                                @if($invoice->tax_amount > 0)
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Pajak (PPN)</div>
                                    <div class="datagrid-content">Rp {{ number_format($invoice->tax_amount, 0, ',', '.') }}</div>
                                </div>
                                @endif
                                @if($invoice->discount_amount > 0)
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Diskon</div>
                                    <div class="datagrid-content text-red">- Rp {{ number_format($invoice->discount_amount, 0, ',', '.') }}</div>
                                </div>
                                @endif
                                <div class="datagrid-item">
                                    <div class="datagrid-title"><strong>Total</strong></div>
                                    <div class="datagrid-content"><strong class="h3">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</strong></div>
                                </div>
                                @if($invoice->paid_amount > 0)
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Terbayar</div>
                                    <div class="datagrid-content text-green">Rp {{ number_format($invoice->paid_amount, 0, ',', '.') }}</div>
                                </div>
                                @endif
                                @if($invoice->outstanding_amount > 0)
                                <div class="datagrid-item">
                                    <div class="datagrid-title"><strong>Sisa Pembayaran</strong></div>
                                    <div class="datagrid-content"><strong class="text-red">Rp {{ number_format($invoice->outstanding_amount, 0, ',', '.') }}</strong></div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Aksi</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                @if($invoice->status === 'draft')
                                <form method="POST" action="{{ route('admin.finance.invoices.send', $invoice) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                                        Kirim Invoice
                                    </button>
                                </form>
                                @endif
                                <a href="{{ route('admin.finance.invoices.pdf', $invoice) }}" class="btn btn-outline-primary" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                    Download PDF
                                </a>
                                @if(in_array($invoice->status, ['sent', 'partial_payment', 'overdue']))
                                <form method="POST" action="{{ route('admin.finance.invoices.reminder', $invoice) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-warning w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                                        Kirim Pengingat
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
