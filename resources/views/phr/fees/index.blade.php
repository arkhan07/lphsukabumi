<x-layouts.admin.app>
    <x-slot name="title">Daftar Fee PHR</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Daftar Fee</h2>
                    <div class="text-secondary mt-1">Fee yang Anda peroleh dari referensi</div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Statistics Cards -->
            <div class="row row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total Fee</div>
                            <div class="h1 mb-0">Rp {{ number_format($stats['total_fees'] / 1000000, 1) }}M</div>
                            <div class="text-secondary small">Semua fee</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Dibayar</div>
                            <div class="h1 mb-0 text-success">Rp {{ number_format($stats['paid_fees'] / 1000000, 1) }}M</div>
                            <div class="text-secondary small">Sudah diterima</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Pending</div>
                            <div class="h1 mb-0 text-warning">Rp {{ number_format($stats['pending_fees'] / 1000000, 1) }}M</div>
                            <div class="text-secondary small">Menunggu proses</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Approved</div>
                            <div class="h1 mb-0 text-info">Rp {{ number_format($stats['approved_fees'] / 1000000, 1) }}M</div>
                            <div class="text-secondary small">Siap dibayar</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fee Breakdown by Type -->
            <div class="row row-cards mb-3">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Direct (10%)</div>
                            <div class="h2 mb-0">Rp {{ number_format($stats['direct_fees'] / 1000000, 1) }}M</div>
                            <div class="text-secondary small">Dari PU yang direferensikan</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Downline (3%)</div>
                            <div class="h2 mb-0">Rp {{ number_format($stats['downline_fees'] / 1000000, 1) }}M</div>
                            <div class="text-secondary small">Dari downline PHR</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Regional (2%)</div>
                            <div class="h2 mb-0">Rp {{ number_format($stats['regional_fees'] / 1000000, 1) }}M</div>
                            <div class="text-secondary small">Dari regional network</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Form -->
            <div class="card mb-3">
                <div class="card-body">
                    <form method="GET" action="{{ route('phr.fees.index') }}">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <select name="status" class="form-select">
                                    <option value="">Semua Status</option>
                                    <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ request('status') === 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="paid" {{ request('status') === 'paid' ? 'selected' : '' }}>Paid</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="fee_type" class="form-select">
                                    <option value="">Semua Tipe</option>
                                    <option value="direct" {{ request('fee_type') === 'direct' ? 'selected' : '' }}>Direct (10%)</option>
                                    <option value="downline" {{ request('fee_type') === 'downline' ? 'selected' : '' }}>Downline (3%)</option>
                                    <option value="regional" {{ request('fee_type') === 'regional' ? 'selected' : '' }}>Regional (2%)</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}" placeholder="Dari Tanggal">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}" placeholder="Sampai Tanggal">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary w-100">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Fees Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Riwayat Fee</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Pelaku Usaha</th>
                                <th>Invoice</th>
                                <th>Tipe Fee</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fees as $fee)
                            <tr>
                                <td>{{ $fee->created_at->format('d M Y') }}</td>
                                <td>
                                    @if($fee->pelakuUsaha)
                                        <div>{{ $fee->pelakuUsaha->name }}</div>
                                        <div class="text-secondary small">{{ $fee->pelakuUsaha->email }}</div>
                                    @else
                                        <span class="text-secondary">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if($fee->invoice)
                                        <span class="badge bg-blue-lt">{{ $fee->invoice->invoice_number }}</span>
                                    @else
                                        <span class="text-secondary">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if($fee->fee_type === 'direct')
                                        <span class="badge bg-primary">Direct 10%</span>
                                    @elseif($fee->fee_type === 'downline')
                                        <span class="badge bg-info">Downline 3%</span>
                                    @elseif($fee->fee_type === 'regional')
                                        <span class="badge bg-warning">Regional 2%</span>
                                    @endif
                                </td>
                                <td class="fw-bold">Rp {{ number_format($fee->fee_amount, 0, ',', '.') }}</td>
                                <td>
                                    @if($fee->status === 'paid')
                                        <span class="badge bg-success">Dibayar</span>
                                    @elseif($fee->status === 'approved')
                                        <span class="badge bg-info">Approved</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <i class="ti ti-cash-off icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                    <div class="text-secondary">Belum ada fee</div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if($fees->hasPages())
                <div class="card-footer">
                    {{ $fees->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layouts.admin.app>
