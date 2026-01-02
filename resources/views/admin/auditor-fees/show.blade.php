@extends('layouts.admin')

@section('title', 'Detail Fee Auditor')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    <a href="{{ route('admin.auditor-fees.index') }}" class="text-reset">Fee Auditor</a>
                </div>
                <h2 class="page-title">Detail Fee #{{ $fee->id }}</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                @if($fee->status === 'pending')
                    <form method="POST" action="{{ route('admin.auditor-fees.approve', $fee) }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success" onclick="return confirm('Setujui fee ini?')">
                            <i class="ti ti-check icon me-2"></i>Setujui
                        </button>
                    </form>
                @elseif($fee->status === 'approved')
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#payModal">
                        <i class="ti ti-cash icon me-2"></i>Bayar
                    </button>
                @endif
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

        <div class="row row-cards">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Fee</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Total Invoice</div>
                                <div class="datagrid-content">Rp {{ number_format($fee->invoice_amount, 0, ',', '.') }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Persentase Fee</div>
                                <div class="datagrid-content">{{ $fee->fee_percentage }}%</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Jumlah Fee</div>
                                <div class="datagrid-content font-weight-medium">Rp {{ number_format($fee->fee_amount, 0, ',', '.') }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Status</div>
                                <div class="datagrid-content">
                                    @if($fee->status === 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif($fee->status === 'approved')
                                        <span class="badge bg-info">Disetujui</span>
                                    @elseif($fee->status === 'paid')
                                        <span class="badge bg-success">Dibayar</span>
                                    @elseif($fee->status === 'cancelled')
                                        <span class="badge bg-danger">Dibatalkan</span>
                                    @endif
                                </div>
                            </div>
                            @if($fee->paid_amount)
                            <div class="datagrid-item">
                                <div class="datagrid-title">Jumlah Dibayar</div>
                                <div class="datagrid-content text-success">Rp {{ number_format($fee->paid_amount, 0, ',', '.') }}</div>
                            </div>
                            @endif
                            @if($fee->payment_reference)
                            <div class="datagrid-item">
                                <div class="datagrid-title">Referensi Pembayaran</div>
                                <div class="datagrid-content">{{ $fee->payment_reference }}</div>
                            </div>
                            @endif
                        </div>
                        @if($fee->notes)
                        <div class="alert alert-info mt-3">
                            <strong>Catatan:</strong><br>{{ $fee->notes }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Auditor</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-lg me-3" style="background-image: url({{ $fee->auditor->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($fee->auditor->name) }})"></span>
                            <div>
                                <div class="font-weight-medium">{{ $fee->auditor->name }}</div>
                                <div class="text-secondary small">{{ $fee->auditor->email }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                @if($fee->invoice)
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Invoice</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">No. Invoice</div>
                                <div class="datagrid-content">
                                    <a href="{{ route('admin.invoices.show', $fee->invoice) }}">
                                        {{ $fee->invoice->invoice_number }}
                                    </a>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Tanggal</div>
                                <div class="datagrid-content">{{ $fee->invoice->invoice_date->format('d M Y') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Pay Modal -->
<div class="modal modal-blur fade" id="payModal" tabindex="-1">
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
@endsection
