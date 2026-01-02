@extends('layouts.admin')

@section('title', 'Daftar Invoice')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Keuangan</div>
                <h2 class="page-title">Daftar Invoice</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('admin.invoices.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <i class="ti ti-plus icon me-2"></i>
                        Buat Invoice Baru
                    </a>
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

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Semua Invoice</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>No. Invoice</th>
                            <th>Tanggal</th>
                            <th>Klien</th>
                            <th>Permohonan</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($invoices as $invoice)
                        <tr>
                            <td>
                                <div class="font-weight-medium">{{ $invoice->invoice_number }}</div>
                                <div class="text-secondary small">{{ $invoice->invoice_title }}</div>
                            </td>
                            <td>
                                <div>{{ $invoice->invoice_date->format('d M Y') }}</div>
                                @if($invoice->due_date)
                                    <div class="text-secondary small">
                                        Jatuh tempo: {{ $invoice->due_date->format('d M Y') }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm me-2" style="background-image: url({{ $invoice->user->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($invoice->user->name) }})"></span>
                                    <div>
                                        <div>{{ $invoice->user->name }}</div>
                                        <div class="text-secondary small">{{ $invoice->user->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($invoice->submission)
                                    <a href="{{ route('admin.submissions.show', $invoice->submission) }}" class="text-reset">
                                        {{ $invoice->submission->submission_number }}
                                    </a>
                                @else
                                    <span class="text-secondary">-</span>
                                @endif
                            </td>
                            <td>
                                <div class="font-weight-medium">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</div>
                                @if($invoice->outstanding_amount > 0)
                                    <div class="text-warning small">
                                        Sisa: Rp {{ number_format($invoice->outstanding_amount, 0, ',', '.') }}
                                    </div>
                                @endif
                            </td>
                            <td>
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
                            </td>
                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a href="{{ route('admin.invoices.show', $invoice) }}" class="btn btn-sm btn-icon btn-ghost-primary" title="Lihat Detail">
                                        <i class="ti ti-eye"></i>
                                    </a>
                                    @if($invoice->status !== 'cancelled')
                                        <a href="{{ route('admin.invoices.preview', $invoice) }}" class="btn btn-sm btn-icon btn-ghost-info" title="Preview PDF" target="_blank">
                                            <i class="ti ti-file-text"></i>
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-secondary py-5">
                                <i class="ti ti-inbox icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                <div>Belum ada invoice</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if($invoices->hasPages())
                <div class="card-footer">
                    {{ $invoices->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
