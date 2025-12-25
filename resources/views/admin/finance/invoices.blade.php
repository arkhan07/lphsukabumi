<x-layouts.admin.app>
    <x-slot name="title">Invoice</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Invoice</h2>
            <p class="text-secondary-light mb-0">Kelola invoice dan pembayaran sertifikasi</p>
        </div>
        <div>
            <a href="{{ route('admin.finance.invoices.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Buat Invoice
            </a>
        </div>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="ri-checkbox-circle-line me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="ri-error-warning-line me-2"></i>
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Invoice</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Belum Dibayar</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['pending'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Lunas</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['paid'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Jatuh Tempo</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['overdue'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-alert-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="card-custom mb-3">
        <form method="GET" action="{{ route('admin.finance.invoices') }}">
            <div class="row g-3">
                <div class="col-12 col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Cari invoice..." value="{{ request('search') }}">
                </div>
                <div class="col-12 col-md-2">
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
                <div class="col-12 col-md-2">
                    <input type="date" name="start_date" class="form-control" placeholder="Dari Tanggal" value="{{ request('start_date') }}">
                </div>
                <div class="col-12 col-md-2">
                    <input type="date" name="end_date" class="form-control" placeholder="Sampai Tanggal" value="{{ request('end_date') }}">
                </div>
                <div class="col-12 col-md-3">
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-grow-1">
                            <i class="ri-search-line me-1"></i> Filter
                        </button>
                        <a href="{{ route('admin.finance.invoices') }}" class="btn btn-outline-secondary">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Invoice Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Invoice</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">No. Invoice</th>
                        <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal</th>
                        <th style="padding: 1rem; font-weight: 600;">Jatuh Tempo</th>
                        <th style="padding: 1rem; font-weight: 600;">Total</th>
                        <th style="padding: 1rem; font-weight: 600;">Dibayar</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($invoices ?? [] as $invoice)
                    <tr>
                        <td style="padding: 1rem;"><strong>{{ $invoice->invoice_number }}</strong></td>
                        <td style="padding: 1rem;">{{ $invoice->submission->company_name ?? '-' }}</td>
                        <td style="padding: 1rem;">{{ $invoice->invoice_date ? $invoice->invoice_date->format('d M Y') : '-' }}</td>
                        <td style="padding: 1rem;">
                            @if($invoice->due_date)
                                {{ $invoice->due_date->format('d M Y') }}
                                @if($invoice->due_date->isPast() && $invoice->status !== 'paid')
                                    <span class="badge bg-danger ms-1">Lewat</span>
                                @endif
                            @else
                                -
                            @endif
                        </td>
                        <td style="padding: 1rem;"><strong>Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</strong></td>
                        <td style="padding: 1rem;">
                            <span class="text-success">Rp {{ number_format($invoice->paid_amount, 0, ',', '.') }}</span>
                            @if($invoice->outstanding_amount > 0)
                                <br><small class="text-muted">Sisa: Rp {{ number_format($invoice->outstanding_amount, 0, ',', '.') }}</small>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            @if($invoice->status === 'paid')
                                <span class="badge-custom badge-success">Lunas</span>
                            @elseif($invoice->status === 'overdue')
                                <span class="badge-custom badge-danger">Jatuh Tempo</span>
                            @elseif($invoice->status === 'partial_payment')
                                <span class="badge-custom badge-info">Bayar Sebagian</span>
                            @elseif($invoice->status === 'sent')
                                <span class="badge-custom badge-warning">Terkirim</span>
                            @elseif($invoice->status === 'cancelled')
                                <span class="badge-custom badge-secondary">Dibatalkan</span>
                            @else
                                <span class="badge-custom badge-secondary">Draft</span>
                            @endif
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.finance.invoices.show', $invoice->id) }}" class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-info" onclick="downloadInvoice({{ $invoice->id }})" title="Download">
                                    <i class="ri-download-line"></i>
                                </button>
                                @if($invoice->status !== 'paid' && $invoice->status !== 'cancelled')
                                <button class="btn btn-sm btn-outline-success" onclick="confirmPayment({{ $invoice->id }})" title="Konfirmasi Bayar">
                                    <i class="ri-check-line"></i>
                                </button>
                                @endif
                                @if($invoice->due_date && $invoice->due_date->isPast() && $invoice->status !== 'paid')
                                <button class="btn btn-sm btn-outline-danger" onclick="sendReminder({{ $invoice->id }})" title="Kirim Reminder">
                                    <i class="ri-mail-send-line"></i>
                                </button>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center" style="padding: 3rem;">
                            <i class="ri-file-list-3-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="text-secondary-light mt-2 mb-0">Tidak ada invoice</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if(isset($invoices) && $invoices->hasPages())
        <div class="card-footer-custom">
            {{ $invoices->links() }}
        </div>
        @endif
    </div>

    <!-- Summary Card -->
    <div class="row g-3 mt-3">
        <div class="col-12 col-md-6">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Ringkasan Keuangan Bulan Ini</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Total Invoice:</span>
                    <strong>Rp {{ number_format($stats['total_amount'] ?? 0, 0, ',', '.') }}</strong>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Terbayar:</span>
                    <strong class="text-success">Rp {{ number_format($stats['paid_amount'] ?? 0, 0, ',', '.') }}</strong>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Belum Terbayar:</span>
                    <strong class="text-warning">Rp {{ number_format($stats['outstanding_amount'] ?? 0, 0, ',', '.') }}</strong>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="text-secondary-light">Persentase Pembayaran:</span>
                    <strong class="text-primary">{{ $stats['payment_percentage'] ?? 0 }}%</strong>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Status Invoice</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Draft:</span>
                    <span class="badge bg-secondary">{{ $stats['draft'] ?? 0 }}</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Terkirim:</span>
                    <span class="badge bg-warning">{{ $stats['sent'] ?? 0 }}</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Lunas:</span>
                    <span class="badge bg-success">{{ $stats['paid'] ?? 0 }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-secondary-light">Jatuh Tempo:</span>
                    <span class="badge bg-danger">{{ $stats['overdue'] ?? 0 }}</span>
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
                // Redirect to payment page or open modal
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
