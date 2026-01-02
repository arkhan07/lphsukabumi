<x-layouts.admin.app>
    <x-slot name="title">Fee & Royalti PHR</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Fee & Royalti PHR</h2>
                    <div class="text-secondary mt-1">Kelola fee 10%, 3%, dan 2% untuk PHR</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('admin.phr.index') }}" class="btn btn-ghost-primary">
                        <i class="ti ti-arrow-left me-2"></i>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Statistics Cards -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total Fee</div>
                            <div class="h1 mb-0">Rp {{ number_format($stats['total_fees'], 0, ',', '.') }}</div>
                            <div class="text-secondary">Semua fee</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Dibayar</div>
                            <div class="h1 mb-0 text-success">Rp {{ number_format($stats['paid_fees'], 0, ',', '.') }}</div>
                            <div class="text-secondary">Status: Paid</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Disetujui</div>
                            <div class="h1 mb-0 text-info">Rp {{ number_format($stats['approved_fees'], 0, ',', '.') }}</div>
                            <div class="text-secondary">Status: Approved</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Pending</div>
                            <div class="h1 mb-0 text-warning">Rp {{ number_format($stats['pending_fees'], 0, ',', '.') }}</div>
                            <div class="text-secondary">Status: Pending</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="card mb-3">
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.phr.fees') }}">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Semua Status</option>
                                    <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ request('status') === 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="paid" {{ request('status') === 'paid' ? 'selected' : '' }}>Paid</option>
                                    <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Tipe Fee</label>
                                <select name="fee_type" class="form-select">
                                    <option value="">Semua Tipe</option>
                                    <option value="direct" {{ request('fee_type') === 'direct' ? 'selected' : '' }}>Direct (10%)</option>
                                    <option value="downline" {{ request('fee_type') === 'downline' ? 'selected' : '' }}>Downline (3%)</option>
                                    <option value="regional" {{ request('fee_type') === 'regional' ? 'selected' : '' }}>Regional (2%)</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">PHR</label>
                                <input type="number" name="phr_id" class="form-control" 
                                       placeholder="ID PHR..." 
                                       value="{{ request('phr_id') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">&nbsp;</label>
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti ti-filter me-2"></i>
                                        Filter
                                    </button>
                                    <a href="{{ route('admin.phr.fees') }}" class="btn btn-ghost-secondary">
                                        <i class="ti ti-x me-2"></i>
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Fees List -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $fees->total() }} Fee Ditemukan</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th>PHR</th>
                                <th>Tipe Fee</th>
                                <th>Invoice</th>
                                <th>Pelaku Usaha</th>
                                <th>Fee Amount</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fees as $fee)
                            <tr>
                                <td>
                                    <div class="d-flex py-1 align-items-center">
                                        <span class="avatar avatar-sm me-2">
                                            {{ strtoupper(substr($fee->phr->name, 0, 2)) }}
                                        </span>
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ $fee->phr->name }}</div>
                                            <div class="text-secondary small">{{ $fee->phr->referral_code }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($fee->fee_type === 'direct')
                                        <span class="badge bg-primary">
                                            <i class="ti ti-arrow-right me-1"></i>
                                            Direct 10%
                                        </span>
                                    @elseif($fee->fee_type === 'downline')
                                        <span class="badge bg-info">
                                            <i class="ti ti-users me-1"></i>
                                            Downline 3%
                                        </span>
                                    @else
                                        <span class="badge bg-warning">
                                            <i class="ti ti-crown me-1"></i>
                                            Regional 2%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="text-secondary">
                                        <div class="fw-bold">{{ $fee->invoice->invoice_number }}</div>
                                        <div class="small">Rp {{ number_format($fee->invoice_amount, 0, ',', '.') }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div>{{ $fee->pelakuUsaha->name }}</div>
                                    <div class="text-secondary small">{{ $fee->pelakuUsaha->email }}</div>
                                </td>
                                <td>
                                    <div class="fw-bold text-success">Rp {{ number_format($fee->fee_amount, 0, ',', '.') }}</div>
                                    <div class="text-secondary small">{{ $fee->fee_percentage }}%</div>
                                </td>
                                <td>
                                    @if($fee->status === 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif($fee->status === 'approved')
                                        <span class="badge bg-info">Approved</span>
                                    @elseif($fee->status === 'paid')
                                        <span class="badge bg-success">Paid</span>
                                    @else
                                        <span class="badge bg-danger">Cancelled</span>
                                    @endif
                                </td>
                                <td class="text-secondary">
                                    <div>{{ $fee->created_at->format('d M Y') }}</div>
                                    <div class="small">{{ $fee->created_at->format('H:i') }}</div>
                                </td>
                                <td>
                                    @if($fee->status === 'pending')
                                    <div class="btn-list flex-nowrap">
                                        <form method="POST" action="{{ route('admin.phr.fees.approve', $fee) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success" 
                                                    onclick="return confirm('Setujui fee ini?')">
                                                <i class="ti ti-check me-1"></i>
                                                Approve
                                            </button>
                                        </form>
                                    </div>
                                    @elseif($fee->status === 'approved')
                                    <div class="btn-list flex-nowrap">
                                        <button type="button" class="btn btn-sm btn-primary" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#payModal{{ $fee->id }}">
                                            <i class="ti ti-cash me-1"></i>
                                            Bayar
                                        </button>
                                    </div>

                                    <!-- Pay Modal -->
                                    <div class="modal modal-blur fade" id="payModal{{ $fee->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form method="POST" action="{{ route('admin.phr.fees.pay', $fee) }}">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Bayar Fee PHR</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Jumlah Fee</label>
                                                            <input type="text" class="form-control" 
                                                                   value="Rp {{ number_format($fee->fee_amount, 0, ',', '.') }}" 
                                                                   readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label required">Jumlah Dibayar</label>
                                                            <input type="number" name="paid_amount" class="form-control" 
                                                                   value="{{ $fee->fee_amount }}" 
                                                                   step="0.01" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Referensi Pembayaran</label>
                                                            <input type="text" name="payment_reference" class="form-control" 
                                                                   placeholder="Transfer ID, nomor rekening, dll...">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Catatan</label>
                                                            <textarea name="notes" class="form-control" rows="3" 
                                                                      placeholder="Catatan pembayaran (optional)"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-ghost-secondary" data-bs-dismiss="modal">
                                                            Batal
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">
                                                            Konfirmasi Pembayaran
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($fee->status === 'paid')
                                    <div class="text-success small">
                                        <div><i class="ti ti-check me-1"></i>Dibayar</div>
                                        <div>{{ $fee->paid_at ? $fee->paid_at->format('d M Y') : '-' }}</div>
                                    </div>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center text-secondary py-5">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <i class="ti ti-cash-off"></i>
                                        </div>
                                        <p class="empty-title">Tidak ada fee</p>
                                        <p class="empty-subtitle text-secondary">
                                            Tidak ada fee PHR yang ditemukan.
                                        </p>
                                    </div>
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
