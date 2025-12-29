<x-layouts.admin.app>
    <x-slot name="title">Riwayat Pembayaran</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Riwayat Pembayaran</h2>
                    <div class="text-muted mt-1">Daftar pembayaran yang telah dilakukan</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pembayaran</h3>
                </div>
                <div class="card-body">
                    @if($payments->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Pembayaran</th>
                                        <th>Invoice</th>
                                        <th>Tanggal</th>
                                        <th>Metode</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th class="w-1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payments as $index => $payment)
                                        <tr>
                                            <td>{{ $payments->firstItem() + $index }}</td>
                                            <td>
                                                <div class="fw-bold">{{ $payment->payment_number }}</div>
                                            </td>
                                            <td>
                                                <div class="small">{{ $payment->invoice->invoice_number }}</div>
                                                <div class="small text-muted">{{ $payment->invoice->invoice_title }}</div>
                                            </td>
                                            <td>{{ $payment->payment_date->format('d M Y') }}</td>
                                            <td>{{ ucwords(str_replace('_', ' ', $payment->payment_method)) }}</td>
                                            <td>Rp {{ number_format($payment->amount, 0, ',', '.') }}</td>
                                            <td>
                                                @if($payment->status == 'pending')
                                                    <span class="badge bg-warning">Menunggu Verifikasi</span>
                                                @elseif($payment->status == 'verified')
                                                    <span class="badge bg-success">Terverifikasi</span>
                                                @elseif($payment->status == 'rejected')
                                                    <span class="badge bg-danger">Ditolak</span>
                                                @elseif($payment->status == 'cancelled')
                                                    <span class="badge bg-secondary">Dibatalkan</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('pelaku_usaha.payments.show', $payment->id) }}" class="btn btn-sm btn-icon btn-primary" title="Lihat">
                                                    <i class="ti ti-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $payments->links() }}
                        </div>
                    @else
                        <div class="empty">
                            <div class="empty-icon">
                                <i class="ti ti-credit-card"></i>
                            </div>
                            <p class="empty-title">Belum ada pembayaran</p>
                            <p class="empty-subtitle text-muted">
                                Riwayat pembayaran akan muncul setelah Anda melakukan pembayaran invoice
                            </p>
                            <div class="empty-action">
                                <a href="{{ route('pelaku_usaha.invoices.index') }}" class="btn btn-primary">
                                    <i class="ti ti-receipt me-2"></i>Lihat Invoice
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
