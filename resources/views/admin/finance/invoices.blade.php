<x-layouts.admin.app>
    <x-slot name="title">Invoice</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Manajemen Invoice</h2>
                    <p class="text-muted mt-1">Kelola invoice dan pembayaran sertifikasi</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.finance.invoices.create') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Buat Invoice
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Success/Error Messages -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    </div>
                    <div>{{ session('success') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                    </div>
                    <div>{{ session('error') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            <!-- Stats -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Invoice</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['total'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-primary-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-primary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 9l1 0" /><path d="M9 13l6 0" /><path d="M9 17l6 0" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Belum Dibayar</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['pending'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-warning-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-warning" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 7l0 5l3 3" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Lunas</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['paid'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-green-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Jatuh Tempo</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['overdue'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-red-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="card mb-3">
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.finance.invoices') }}">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                    </span>
                                    <input type="text" name="search" class="form-control" placeholder="Cari invoice..." value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <select name="status" class="form-select">
                                    <option value="">Semua Status</option>
                                    <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="sent" {{ request('status') == 'sent' ? 'selected' : '' }}>Terkirim</option>
                                    <option value="partial_payment" {{ request('status') == 'partial_payment' ? 'selected' : '' }}>Bayar Sebagian</option>
                                    <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Lunas</option>
                                    <option value="overdue" {{ request('status') == 'overdue' ? 'selected' : '' }}>Jatuh Tempo</option>
                                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="start_date" class="form-control" placeholder="Dari Tanggal" value="{{ request('start_date') }}">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="end_date" class="form-control" placeholder="Sampai Tanggal" value="{{ request('end_date') }}">
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary flex-grow-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                        Filter
                                    </button>
                                    <a href="{{ route('admin.finance.invoices') }}" class="btn btn-outline-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" /><path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Invoice Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Semua Invoice</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>No. Invoice</th>
                                <th>Pelaku Usaha</th>
                                <th>Tanggal</th>
                                <th>Jatuh Tempo</th>
                                <th>Total</th>
                                <th>Dibayar</th>
                                <th>Status</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($invoices ?? [] as $invoice)
                            <tr>
                                <td><strong>{{ $invoice->invoice_number }}</strong></td>
                                <td>{{ $invoice->submission->company_name ?? '-' }}</td>
                                <td>{{ $invoice->invoice_date ? $invoice->invoice_date->format('d M Y') : '-' }}</td>
                                <td>
                                    @if($invoice->due_date)
                                        {{ $invoice->due_date->format('d M Y') }}
                                        @if($invoice->due_date->isPast() && $invoice->status !== 'paid')
                                            <span class="badge bg-red ms-1">Lewat</span>
                                        @endif
                                    @else
                                        -
                                    @endif
                                </td>
                                <td><strong>Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</strong></td>
                                <td>
                                    <span class="text-green">Rp {{ number_format($invoice->paid_amount, 0, ',', '.') }}</span>
                                    @if($invoice->outstanding_amount > 0)
                                        <br><small class="text-muted">Sisa: Rp {{ number_format($invoice->outstanding_amount, 0, ',', '.') }}</small>
                                    @endif
                                </td>
                                <td>
                                    @if($invoice->status === 'paid')
                                        <span class="badge bg-green-lt">Lunas</span>
                                    @elseif($invoice->status === 'overdue')
                                        <span class="badge bg-red-lt">Jatuh Tempo</span>
                                    @elseif($invoice->status === 'partial_payment')
                                        <span class="badge bg-cyan-lt">Bayar Sebagian</span>
                                    @elseif($invoice->status === 'sent')
                                        <span class="badge bg-yellow-lt">Terkirim</span>
                                    @elseif($invoice->status === 'cancelled')
                                        <span class="badge bg-secondary-lt">Dibatalkan</span>
                                    @else
                                        <span class="badge bg-secondary-lt">Draft</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('admin.finance.invoices.show', $invoice->id) }}" class="btn btn-ghost-primary btn-icon" title="Detail">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                        </a>
                                        <button class="btn btn-ghost-cyan btn-icon" onclick="downloadInvoice({{ $invoice->id }})" title="Download">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                        </button>
                                        @if($invoice->status !== 'paid' && $invoice->status !== 'cancelled')
                                        <button class="btn btn-ghost-success btn-icon" onclick="confirmPayment({{ $invoice->id }})" title="Konfirmasi Bayar">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                        </button>
                                        @endif
                                        @if($invoice->due_date && $invoice->due_date->isPast() && $invoice->status !== 'paid')
                                        <button class="btn btn-ghost-danger btn-icon" onclick="sendReminder({{ $invoice->id }})" title="Kirim Reminder">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                        </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 9l1 0" /><path d="M9 13l6 0" /><path d="M9 17l6 0" /></svg>
                                        </div>
                                        <p class="empty-title">Tidak ada invoice</p>
                                        <p class="empty-subtitle text-muted">Mulai dengan membuat invoice baru</p>
                                        <div class="empty-action">
                                            <a href="{{ route('admin.finance.invoices.create') }}" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                                                Buat Invoice
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if(isset($invoices) && $invoices->hasPages())
                <div class="card-footer d-flex align-items-center">
                    {{ $invoices->links() }}
                </div>
                @endif
            </div>

            <!-- Summary Cards -->
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ringkasan Keuangan Bulan Ini</h3>
                        </div>
                        <div class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Total Invoice</div>
                                    <div class="datagrid-content"><strong>Rp {{ number_format($stats['total_amount'] ?? 0, 0, ',', '.') }}</strong></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Terbayar</div>
                                    <div class="datagrid-content"><strong class="text-green">Rp {{ number_format($stats['paid_amount'] ?? 0, 0, ',', '.') }}</strong></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Belum Terbayar</div>
                                    <div class="datagrid-content"><strong class="text-yellow">Rp {{ number_format($stats['outstanding_amount'] ?? 0, 0, ',', '.') }}</strong></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Persentase Pembayaran</div>
                                    <div class="datagrid-content"><strong class="text-primary">{{ $stats['payment_percentage'] ?? 0 }}%</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Invoice</h3>
                        </div>
                        <div class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Draft</div>
                                    <div class="datagrid-content"><span class="badge bg-secondary-lt">{{ $stats['draft'] ?? 0 }}</span></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Terkirim</div>
                                    <div class="datagrid-content"><span class="badge bg-yellow-lt">{{ $stats['sent'] ?? 0 }}</span></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Lunas</div>
                                    <div class="datagrid-content"><span class="badge bg-green-lt">{{ $stats['paid'] ?? 0 }}</span></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Jatuh Tempo</div>
                                    <div class="datagrid-content"><span class="badge bg-red-lt">{{ $stats['overdue'] ?? 0 }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function downloadInvoice(id) {
            window.location.href = `/admin/finance/invoices/${id}/download`;
        }

        function confirmPayment(id) {
            if (confirm('Konfirmasi pembayaran untuk invoice ini?')) {
                window.location.href = `/admin/finance/payments?invoice_id=${id}`;
            }
        }

        function sendReminder(id) {
            if (confirm('Kirim email reminder ke pelaku usaha?')) {
                fetch(`/admin/finance/invoices/${id}/reminder`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Reminder berhasil dikirim');
                    } else {
                        alert('Gagal mengirim reminder');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan');
                });
            }
        }
    </script>
    @endpush
</x-layouts.admin.app>
