<x-layouts.admin.app>
    <x-slot name="title">Detail Pelaku Usaha - {{ $pelakuUsaha->name }}</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        <a href="{{ route('phr.referrals.index') }}" class="text-secondary">
                            <i class="ti ti-arrow-left"></i> Kembali ke Daftar
                        </a>
                    </div>
                    <h2 class="page-title">Detail Pelaku Usaha</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <!-- Profile Card -->
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Pelaku Usaha</h3>
                        </div>
                        <div class="card-body text-center">
                            <span class="avatar avatar-xl mb-3" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($pelakuUsaha->name) }}&background=random&size=128)"></span>
                            <h3 class="mb-1">{{ $pelakuUsaha->name }}</h3>
                            @if($pelakuUsaha->business_name)
                                <div class="text-secondary mb-2">
                                    <i class="ti ti-building-store"></i> {{ $pelakuUsaha->business_name }}
                                </div>
                            @endif
                            <div class="mt-3">
                                @if($pelakuUsaha->is_active)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-secondary">Tidak Aktif</span>
                                @endif
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">
                                        <i class="ti ti-mail"></i> Email
                                    </div>
                                    <div class="col-auto">{{ $pelakuUsaha->email }}</div>
                                </div>
                            </div>
                            @if($pelakuUsaha->phone)
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">
                                        <i class="ti ti-phone"></i> Telepon
                                    </div>
                                    <div class="col-auto">{{ $pelakuUsaha->phone }}</div>
                                </div>
                            </div>
                            @endif
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">
                                        <i class="ti ti-calendar"></i> Bergabung
                                    </div>
                                    <div class="col-auto">{{ $pelakuUsaha->created_at->format('d M Y') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Statistik</h3>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">Total Permohonan</div>
                                    <div class="col-auto">
                                        <span class="badge bg-primary">{{ $stats['total_submissions'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">Permohonan Disetujui</div>
                                    <div class="col-auto">
                                        <span class="badge bg-success">{{ $stats['approved_submissions'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">Total Fee Earned</div>
                                    <div class="col-auto fw-bold">
                                        Rp {{ number_format($stats['total_fees_earned'], 0, ',', '.') }}
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">Fee Dibayar</div>
                                    <div class="col-auto text-success fw-bold">
                                        Rp {{ number_format($stats['paid_fees'], 0, ',', '.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Submissions List -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Permohonan</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>No. Invoice</th>
                                        <th>Nama Produk</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($submissions as $submission)
                                    <tr>
                                        <td>
                                            @if($submission->invoice)
                                                <a href="{{ route('admin.invoices.show', $submission->invoice->id) }}">
                                                    {{ $submission->invoice->invoice_number }}
                                                </a>
                                            @else
                                                <span class="text-secondary">-</span>
                                            @endif
                                        </td>
                                        <td>{{ $submission->product_name }}</td>
                                        <td>
                                            <div class="text-secondary">{{ $submission->created_at->format('d M Y') }}</div>
                                        </td>
                                        <td>
                                            @if($submission->status === 'approved')
                                                <span class="badge bg-success">Disetujui</span>
                                            @elseif($submission->status === 'rejected')
                                                <span class="badge bg-danger">Ditolak</span>
                                            @elseif($submission->status === 'under_review')
                                                <span class="badge bg-info">Review</span>
                                            @else
                                                <span class="badge bg-warning">{{ ucfirst($submission->status) }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($submission->invoice && $submission->invoice->total_amount)
                                                Rp {{ number_format($submission->invoice->total_amount, 0, ',', '.') }}
                                            @else
                                                <span class="text-secondary">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">
                                            <div class="text-secondary">Belum ada permohonan</div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Fees List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Fee</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>Fee Type</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($fees as $fee)
                                    <tr>
                                        <td>{{ $fee->created_at->format('d M Y') }}</td>
                                        <td>
                                            <div>{{ $fee->description ?? 'Fee dari ' . $pelakuUsaha->name }}</div>
                                            @if($fee->invoice)
                                                <div class="text-secondary small">
                                                    Invoice: {{ $fee->invoice->invoice_number }}
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($fee->fee_type === 'direct')
                                                <span class="badge bg-blue-lt">Direct 10%</span>
                                            @elseif($fee->fee_type === 'downline')
                                                <span class="badge bg-green-lt">Downline 3%</span>
                                            @else
                                                <span class="badge bg-purple-lt">Regional 2%</span>
                                            @endif
                                        </td>
                                        <td class="fw-bold">Rp {{ number_format($fee->fee_amount, 0, ',', '.') }}</td>
                                        <td>
                                            @if($fee->status === 'paid')
                                                <span class="badge bg-success">Dibayar</span>
                                                @if($fee->paid_at)
                                                    <div class="text-secondary small">{{ $fee->paid_at->format('d M Y') }}</div>
                                                @endif
                                            @elseif($fee->status === 'approved')
                                                <span class="badge bg-info">Disetujui</span>
                                            @else
                                                <span class="badge bg-warning">Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">
                                            <div class="text-secondary">Belum ada fee</div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
