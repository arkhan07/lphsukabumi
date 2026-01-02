@extends('layouts.admin')

@section('title', 'Fee Auditor (30%)')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Keuangan</div>
                <h2 class="page-title">Fee Auditor (30%)</h2>
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

        <!-- Statistics Cards -->
        <div class="row row-cards mb-3">
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Total Fee</div>
                        <div class="h1 mb-0">Rp {{ number_format($stats['total_fees'], 0, ',', '.') }}</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Sudah Dibayar</div>
                        <div class="h1 mb-0 text-success">Rp {{ number_format($stats['paid_fees'], 0, ',', '.') }}</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Disetujui</div>
                        <div class="h1 mb-0 text-info">Rp {{ number_format($stats['approved_fees'], 0, ',', '.') }}</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Pending</div>
                        <div class="h1 mb-0 text-warning">Rp {{ number_format($stats['pending_fees'], 0, ',', '.') }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="card mb-3">
            <div class="card-body">
                <form method="GET" action="{{ route('admin.auditor-fees.index') }}">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <select name="status" class="form-select">
                                <option value="">Semua Status</option>
                                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Disetujui</option>
                                <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Dibayar</option>
                                <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="auditor_id" class="form-select">
                                <option value="">Semua Auditor</option>
                                @foreach($auditors as $auditor)
                                    <option value="{{ $auditor->id }}" {{ request('auditor_id') == $auditor->id ? 'selected' : '' }}>
                                        {{ $auditor->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}" placeholder="Dari tanggal">
                        </div>
                        <div class="col-md-2">
                            <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}" placeholder="Sampai tanggal">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="ti ti-filter icon me-2"></i>Filter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Fees List -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Fee Auditor</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Auditor</th>
                            <th>Invoice</th>
                            <th>Permohonan</th>
                            <th>Fee (30%)</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($fees as $fee)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm me-2" style="background-image: url({{ $fee->auditor->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($fee->auditor->name) }})"></span>
                                    <div>
                                        <div>{{ $fee->auditor->name }}</div>
                                        <div class="text-secondary small">{{ $fee->auditor->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($fee->invoice)
                                    <a href="{{ route('admin.invoices.show', $fee->invoice) }}">
                                        {{ $fee->invoice->invoice_number }}
                                    </a>
                                    <div class="text-secondary small">
                                        Rp {{ number_format($fee->invoice_amount, 0, ',', '.') }}
                                    </div>
                                @else
                                    <span class="text-secondary">-</span>
                                @endif
                            </td>
                            <td>
                                @if($fee->submission)
                                    <a href="{{ route('admin.submissions.show', $fee->submission) }}">
                                        {{ $fee->submission->submission_number }}
                                    </a>
                                @else
                                    <span class="text-secondary">-</span>
                                @endif
                            </td>
                            <td>
                                <div class="font-weight-medium">Rp {{ number_format($fee->fee_amount, 0, ',', '.') }}</div>
                                <div class="text-secondary small">{{ $fee->fee_percentage }}%</div>
                            </td>
                            <td>
                                @if($fee->status === 'pending')
                                    <span class="badge bg-warning">Pending</span>
                                @elseif($fee->status === 'approved')
                                    <span class="badge bg-info">Disetujui</span>
                                @elseif($fee->status === 'paid')
                                    <span class="badge bg-success">Dibayar</span>
                                @elseif($fee->status === 'cancelled')
                                    <span class="badge bg-danger">Dibatalkan</span>
                                @endif
                            </td>
                            <td>
                                <div>{{ $fee->created_at->format('d M Y') }}</div>
                                @if($fee->paid_at)
                                    <div class="text-success small">
                                        Dibayar: {{ $fee->paid_at->format('d M Y') }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a href="{{ route('admin.auditor-fees.show', $fee) }}" class="btn btn-sm btn-icon btn-ghost-primary" title="Detail">
                                        <i class="ti ti-eye"></i>
                                    </a>
                                    @if($fee->status === 'pending')
                                        <form method="POST" action="{{ route('admin.auditor-fees.approve', $fee) }}" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-icon btn-ghost-success" title="Setujui" onclick="return confirm('Setujui fee ini?')">
                                                <i class="ti ti-check"></i>
                                            </button>
                                        </form>
                                    @elseif($fee->status === 'approved')
                                        <button type="button" class="btn btn-sm btn-icon btn-ghost-success" title="Bayar" data-bs-toggle="modal" data-bs-target="#payModal{{ $fee->id }}">
                                            <i class="ti ti-cash"></i>
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>

                        <!-- Pay Modal -->
                        <div class="modal modal-blur fade" id="payModal{{ $fee->id }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('admin.auditor-fees.pay', $fee) }}">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Bayar Fee Auditor</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label required">Jumlah Dibayar</label>
                                                <input type="number" name="paid_amount" class="form-control" value="{{ $fee->fee_amount }}" step="0.01" required>
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
                                            <button type="submit" class="btn btn-success">Bayar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-secondary py-5">
                                <i class="ti ti-inbox icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                <div>Belum ada fee auditor</div>
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
@endsection
