<x-layouts.admin.app>
    <x-slot name="title">Detail Invoice</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Invoice {{ $invoice->invoice_number }}</h2>
                </div>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        @if($invoice->invoice_file_path)
                            <a href="{{ route('pelaku_usaha.invoices.download', $invoice->id) }}" class="btn btn-success">
                                <i class="ti ti-download me-2"></i>Download PDF
                            </a>
                        @endif
                        @if(!in_array($invoice->status, ['paid', 'cancelled', 'refunded']) && $invoice->outstanding_amount > 0)
                            <a href="{{ route('pelaku_usaha.invoices.payment.create', $invoice->id) }}" class="btn btn-primary">
                                <i class="ti ti-credit-card me-2"></i>Bayar Sekarang
                            </a>
                        @endif
                        <a href="{{ route('pelaku_usaha.invoices.index') }}" class="btn btn-outline-secondary">
                            <i class="ti ti-arrow-left me-2"></i>Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row row-cards">
                <!-- Invoice Details -->
                <div class="col-lg-8">
                    <!-- Status Alert -->
                    @if($invoice->status == 'overdue')
                        <div class="alert alert-danger">
                            <i class="ti ti-alert-circle me-2"></i>Invoice ini sudah jatuh tempo pada {{ $invoice->due_date->format('d F Y') }}
                        </div>
                    @elseif($invoice->status == 'paid')
                        <div class="alert alert-success">
                            <i class="ti ti-circle-check me-2"></i>Invoice ini telah lunas dibayar
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Invoice</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Nomor Invoice</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $invoice->invoice_number }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Judul</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $invoice->invoice_title }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Tipe Invoice</label>
                                </div>
                                <div class="col-md-8">
                                    <span class="badge bg-azure-lt">{{ ucwords(str_replace('_', ' ', $invoice->invoice_type)) }}</span>
                                </div>
                            </div>
                            @if($invoice->description)
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold">Deskripsi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div>{{ $invoice->description }}</div>
                                    </div>
                                </div>
                            @endif
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Tanggal Invoice</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $invoice->invoice_date->format('d F Y') }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Jatuh Tempo</label>
                                </div>
                                <div class="col-md-8">
                                    <div>
                                        {{ $invoice->due_date->format('d F Y') }}
                                        @if($invoice->due_date->isPast() && $invoice->status != 'paid')
                                            <span class="badge bg-danger ms-2">Lewat Jatuh Tempo</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Line Items -->
                    @if($invoice->line_items)
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Rincian Biaya</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-vcenter card-table">
                                        <thead>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <th class="text-end">Jumlah</th>
                                                <th class="text-end">Harga Satuan</th>
                                                <th class="text-end">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($invoice->line_items as $item)
                                                <tr>
                                                    <td>{{ $item['description'] ?? '-' }}</td>
                                                    <td class="text-end">{{ $item['quantity'] ?? 1 }}</td>
                                                    <td class="text-end">Rp {{ number_format($item['unit_price'] ?? 0, 0, ',', '.') }}</td>
                                                    <td class="text-end">Rp {{ number_format($item['amount'] ?? 0, 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Payment Summary -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Ringkasan Pembayaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">Subtotal</div>
                                <div class="col-auto fw-bold">Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</div>
                            </div>
                            @if($invoice->tax_amount > 0)
                                <div class="row mb-2">
                                    <div class="col">Pajak ({{ $invoice->tax_percentage }}%)</div>
                                    <div class="col-auto fw-bold">Rp {{ number_format($invoice->tax_amount, 0, ',', '.') }}</div>
                                </div>
                            @endif
                            @if($invoice->discount_amount > 0)
                                <div class="row mb-2 text-success">
                                    <div class="col">Diskon ({{ $invoice->discount_percentage }}%)</div>
                                    <div class="col-auto fw-bold">- Rp {{ number_format($invoice->discount_amount, 0, ',', '.') }}</div>
                                </div>
                            @endif
                            <hr>
                            <div class="row mb-2">
                                <div class="col h3 mb-0">Total</div>
                                <div class="col-auto h3 mb-0 text-primary">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">Terbayar</div>
                                <div class="col-auto fw-bold text-success">Rp {{ number_format($invoice->paid_amount, 0, ',', '.') }}</div>
                            </div>
                            <div class="row">
                                <div class="col h4 mb-0">Sisa</div>
                                <div class="col-auto h4 mb-0 text-danger">Rp {{ number_format($invoice->outstanding_amount, 0, ',', '.') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment History -->
                    @if($invoice->payments->count() > 0)
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Riwayat Pembayaran</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-vcenter card-table">
                                        <thead>
                                            <tr>
                                                <th>No. Pembayaran</th>
                                                <th>Tanggal</th>
                                                <th>Jumlah</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($invoice->payments as $payment)
                                                <tr>
                                                    <td>{{ $payment->payment_number }}</td>
                                                    <td>{{ $payment->payment_date->format('d M Y') }}</td>
                                                    <td>Rp {{ number_format($payment->amount, 0, ',', '.') }}</td>
                                                    <td>
                                                        @if($payment->status == 'pending')
                                                            <span class="badge bg-warning">Menunggu Verifikasi</span>
                                                        @elseif($payment->status == 'verified')
                                                            <span class="badge bg-success">Terverifikasi</span>
                                                        @elseif($payment->status == 'rejected')
                                                            <span class="badge bg-danger">Ditolak</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('pelaku_usaha.payments.show', $payment->id) }}" class="btn btn-sm btn-icon btn-primary">
                                                            <i class="ti ti-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Status -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Invoice</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    @if($invoice->status == 'draft')
                                        <span class="badge bg-secondary">Draft</span>
                                    @elseif($invoice->status == 'sent')
                                        <span class="badge bg-azure">Terkirim</span>
                                    @elseif($invoice->status == 'viewed')
                                        <span class="badge bg-info">Dilihat</span>
                                    @elseif($invoice->status == 'partial_payment')
                                        <span class="badge bg-warning">Dibayar Sebagian</span>
                                    @elseif($invoice->status == 'paid')
                                        <span class="badge bg-success">Lunas</span>
                                    @elseif($invoice->status == 'overdue')
                                        <span class="badge bg-danger">Jatuh Tempo</span>
                                    @elseif($invoice->status == 'cancelled')
                                        <span class="badge bg-dark">Dibatalkan</span>
                                    @endif
                                </div>
                            </div>
                            @if($invoice->sent_at)
                                <div class="mb-3">
                                    <label class="form-label">Dikirim Pada</label>
                                    <div>{{ $invoice->sent_at->format('d F Y H:i') }}</div>
                                </div>
                            @endif
                            @if($invoice->fully_paid_at)
                                <div class="mb-3">
                                    <label class="form-label">Lunas Pada</label>
                                    <div>{{ $invoice->fully_paid_at->format('d F Y H:i') }}</div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Submission Info -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Permohonan Terkait</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Nomor Permohonan</label>
                                <div class="fw-bold">{{ $invoice->submission->submission_number }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Perusahaan</label>
                                <div>{{ $invoice->submission->company_name }}</div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('pelaku_usaha.submissions.show', $invoice->submission->id) }}" class="btn btn-primary w-100">
                                    <i class="ti ti-eye me-2"></i>Lihat Permohonan
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Bank Info -->
                    @if($invoice->bank_name)
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Pembayaran</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <label class="form-label">Bank</label>
                                    <div class="fw-bold">{{ $invoice->bank_name }}</div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">No. Rekening</label>
                                    <div class="fw-bold">{{ $invoice->bank_account_number }}</div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Atas Nama</label>
                                    <div>{{ $invoice->bank_account_name }}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
