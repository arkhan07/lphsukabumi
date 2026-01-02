@extends('layouts.admin')

@section('title', 'Detail Invoice - ' . $invoice->invoice_number)

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    <a href="{{ route('admin.invoices.index') }}" class="text-reset">Invoice</a>
                </div>
                <h2 class="page-title">{{ $invoice->invoice_number }}</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('admin.invoices.preview', $invoice) }}" class="btn btn-info" target="_blank">
                        <i class="ti ti-file-text icon me-2"></i>
                        Preview PDF
                    </a>
                    @if($invoice->status === 'draft')
                        <form method="POST" action="{{ route('admin.invoices.send', $invoice) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Kirim invoice ke klien?')">
                                <i class="ti ti-send icon me-2"></i>
                                Kirim ke Klien
                            </button>
                        </form>
                    @endif
                    @if($invoice->status === 'sent' || $invoice->status === 'partially_paid')
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalMarkAsPaid">
                            <i class="ti ti-check icon me-2"></i>
                            Tandai Lunas
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row row-cards">
            <div class="col-md-8">
                <!-- Invoice Details Card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Invoice</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nomor Invoice</div>
                                <div class="datagrid-content">{{ $invoice->invoice_number }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Judul</div>
                                <div class="datagrid-content">{{ $invoice->invoice_title }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Tipe</div>
                                <div class="datagrid-content">
                                    @if($invoice->invoice_type === 'full_payment')
                                        Pembayaran Penuh
                                    @elseif($invoice->invoice_type === 'down_payment')
                                        Uang Muka
                                    @else
                                        Pembayaran Sisa
                                    @endif
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Tanggal Invoice</div>
                                <div class="datagrid-content">{{ $invoice->invoice_date->format('d F Y') }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Jatuh Tempo</div>
                                <div class="datagrid-content">
                                    {{ $invoice->due_date ? $invoice->due_date->format('d F Y') : '-' }}
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Status</div>
                                <div class="datagrid-content">
                                    @if($invoice->status === 'draft')
                                        <span class="badge bg-secondary">Draft</span>
                                    @elseif($invoice->status === 'sent')
                                        <span class="badge bg-info">Terkirim</span>
                                    @elseif($invoice->status === 'paid')
                                        <span class="badge bg-success">Lunas</span>
                                    @elseif($invoice->status === 'partially_paid')
                                        <span class="badge bg-warning">Sebagian</span>
                                    @elseif($invoice->status === 'overdue')
                                        <span class="badge bg-danger">Terlambat</span>
                                    @elseif($invoice->status === 'cancelled')
                                        <span class="badge bg-dark">Dibatalkan</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr>

                        <!-- Pricing Breakdown -->
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="text-end font-weight-medium">Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</td>
                                    </tr>
                                    @if($invoice->tax_percentage > 0)
                                    <tr>
                                        <td>Pajak ({{ $invoice->tax_percentage }}%)</td>
                                        <td class="text-end">Rp {{ number_format($invoice->tax_amount, 0, ',', '.') }}</td>
                                    </tr>
                                    @endif
                                    @if($invoice->discount_percentage > 0)
                                    <tr>
                                        <td>Diskon ({{ $invoice->discount_percentage }}%)</td>
                                        <td class="text-end text-success">- Rp {{ number_format($invoice->discount_amount, 0, ',', '.') }}</td>
                                    </tr>
                                    @endif
                                    <tr class="fw-bold">
                                        <td>Total</td>
                                        <td class="text-end">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</td>
                                    </tr>
                                    @if($invoice->outstanding_amount > 0 && $invoice->outstanding_amount < $invoice->total_amount)
                                    <tr class="text-warning">
                                        <td>Sisa Pembayaran</td>
                                        <td class="text-end fw-bold">Rp {{ number_format($invoice->outstanding_amount, 0, ',', '.') }}</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        @if($invoice->notes)
                        <div class="alert alert-info mt-3">
                            <strong>Catatan:</strong><br>
                            {{ $invoice->notes }}
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Payment History -->
                @if($invoice->payments && $invoice->payments->count() > 0)
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Pembayaran</h3>
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach($invoice->payments as $payment)
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="ti ti-currency-dollar icon bg-success text-white p-2 rounded-circle"></i>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Rp {{ number_format($payment->amount, 0, ',', '.') }}</div>
                                    <div class="text-secondary small">
                                        {{ $payment->payment_date->format('d M Y') }}
                                        @if($payment->payment_method)
                                            · {{ $payment->payment_method }}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-auto">
                                    @if($payment->status === 'verified')
                                        <span class="badge bg-success">Terverifikasi</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <div class="col-md-4">
                <!-- Client Info -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Klien</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-lg me-3" style="background-image: url({{ $invoice->user->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($invoice->user->name) }})"></span>
                            <div>
                                <div class="font-weight-medium">{{ $invoice->user->name }}</div>
                                <div class="text-secondary small">{{ $invoice->user->email }}</div>
                            </div>
                        </div>
                        @if($invoice->submission)
                        <div class="mt-3">
                            <div class="text-secondary small mb-1">Perusahaan</div>
                            <div>{{ $invoice->submission->company_name ?? '-' }}</div>
                        </div>
                        <div class="mt-2">
                            <div class="text-secondary small mb-1">Alamat</div>
                            <div>{{ $invoice->submission->company_address ?? '-' }}</div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Submission Info -->
                @if($invoice->submission)
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Permohonan</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">No. Permohonan</div>
                                <div class="datagrid-content">
                                    <a href="{{ route('admin.submissions.show', $invoice->submission) }}">
                                        {{ $invoice->submission->submission_number }}
                                    </a>
                                </div>
                            </div>
                            @if($invoice->submission->products && $invoice->submission->products->count() > 0)
                            <div class="datagrid-item">
                                <div class="datagrid-title">Produk</div>
                                <div class="datagrid-content">
                                    {{ $invoice->submission->products->count() }} produk
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif

                <!-- Bank Account Info -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Rekening Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Bank</div>
                                <div class="datagrid-content">{{ $invoice->bank_name ?? 'BCA' }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">No. Rekening</div>
                                <div class="datagrid-content">{{ $invoice->bank_account_number ?? '-' }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Atas Nama</div>
                                <div class="datagrid-content">{{ $invoice->bank_account_name ?? 'LPH Doa Bangsa' }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                @if($invoice->status !== 'cancelled' && $invoice->status !== 'paid')
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Aksi</h3>
                    </div>
                    <div class="list-group list-group-flush">
                        @if($invoice->status === 'draft')
                        <form method="POST" action="{{ route('admin.invoices.send', $invoice) }}" class="list-group-item">
                            @csrf
                            <button type="submit" class="btn btn-primary w-100" onclick="return confirm('Kirim invoice ke klien?')">
                                <i class="ti ti-send icon me-2"></i>
                                Kirim ke Klien
                            </button>
                        </form>
                        @endif
                        <div class="list-group-item">
                            <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#modalCancel">
                                <i class="ti ti-x icon me-2"></i>
                                Batalkan Invoice
                            </button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Mark as Paid Modal -->
<div class="modal modal-blur fade" id="modalMarkAsPaid" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.invoices.mark-as-paid', $invoice) }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tandai Invoice Lunas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label required">Jumlah Pembayaran</label>
                        <input type="number" name="payment_amount" class="form-control" value="{{ $invoice->outstanding_amount }}" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Tanggal Pembayaran</label>
                        <input type="date" name="payment_date" class="form-control" value="{{ date('Y-m-d') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Metode Pembayaran</label>
                        <select name="payment_method" class="form-select">
                            <option value="">Pilih metode...</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                            <option value="Cash">Tunai</option>
                            <option value="Kartu Kredit">Kartu Kredit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Referensi Pembayaran</label>
                        <input type="text" name="payment_reference" class="form-control" placeholder="Nomor transfer, dll...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Catatan</label>
                        <textarea name="notes" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Tandai Lunas</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Cancel Modal -->
<div class="modal modal-blur fade" id="modalCancel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.invoices.cancel', $invoice) }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Batalkan Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label required">Alasan Pembatalan</label>
                        <textarea name="cancellation_reason" class="form-control" rows="4" required placeholder="Jelaskan alasan pembatalan invoice..."></textarea>
                    </div>
                    <div class="alert alert-warning">
                        <strong>Peringatan!</strong> Invoice yang dibatalkan tidak dapat diaktifkan kembali.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Batalkan Invoice</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
