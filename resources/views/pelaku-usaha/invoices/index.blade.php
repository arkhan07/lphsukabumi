<x-layouts.admin.app>
    <x-slot name="title">Invoice Saya</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Invoice Saya</h2>
                    <div class="text-muted mt-1">Daftar invoice untuk permohonan sertifikasi halal</div>
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

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Invoice</h3>
                </div>
                <div class="card-body">
                    @if($invoices->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Invoice</th>
                                        <th>Judul</th>
                                        <th>Permohonan</th>
                                        <th>Tanggal</th>
                                        <th>Jatuh Tempo</th>
                                        <th>Total</th>
                                        <th>Terbayar</th>
                                        <th>Sisa</th>
                                        <th>Status</th>
                                        <th class="w-1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invoices as $index => $invoice)
                                        <tr>
                                            <td>{{ $invoices->firstItem() + $index }}</td>
                                            <td>
                                                <div class="fw-bold">{{ $invoice->invoice_number }}</div>
                                                <div class="small text-muted">{{ ucwords(str_replace('_', ' ', $invoice->invoice_type)) }}</div>
                                            </td>
                                            <td>{{ $invoice->invoice_title }}</td>
                                            <td>
                                                <div class="small">{{ $invoice->submission->submission_number }}</div>
                                            </td>
                                            <td>{{ $invoice->invoice_date->format('d M Y') }}</td>
                                            <td>
                                                {{ $invoice->due_date->format('d M Y') }}
                                                @if($invoice->due_date->isPast() && $invoice->status != 'paid')
                                                    <span class="badge bg-danger ms-1">Lewat</span>
                                                @endif
                                            </td>
                                            <td>Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</td>
                                            <td>Rp {{ number_format($invoice->paid_amount, 0, ',', '.') }}</td>
                                            <td>Rp {{ number_format($invoice->outstanding_amount, 0, ',', '.') }}</td>
                                            <td>
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
                                            </td>
                                            <td>
                                                <a href="{{ route('pelaku_usaha.invoices.show', $invoice->id) }}" class="btn btn-sm btn-icon btn-primary" title="Lihat">
                                                    <i class="ti ti-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $invoices->links() }}
                        </div>
                    @else
                        <div class="empty">
                            <div class="empty-icon">
                                <i class="ti ti-receipt"></i>
                            </div>
                            <p class="empty-title">Belum ada invoice</p>
                            <p class="empty-subtitle text-muted">
                                Invoice akan dibuat oleh admin setelah permohonan Anda diproses
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
