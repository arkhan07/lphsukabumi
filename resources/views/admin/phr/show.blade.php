@extends('layouts.admin')

@section('title', 'Detail PHR - ' . $phr->name)

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    <a href="{{ route('admin.phr.list') }}" class="text-reset">Daftar PHR</a>
                </div>
                <h2 class="page-title">{{ $phr->name }}</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    @if($phr->is_phr_active)
                        <form method="POST" action="{{ route('admin.phr.deactivate', $phr) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin menonaktifkan PHR ini?')">
                                <i class="ti ti-x icon me-2"></i>
                                Nonaktifkan
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('admin.phr.activate', $phr) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success">
                                <i class="ti ti-check icon me-2"></i>
                                Aktifkan
                            </button>
                        </form>
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

        <div class="row row-cards">
            <div class="col-md-4">
                <!-- Profile Card -->
                <div class="card">
                    <div class="card-body text-center">
                        <span class="avatar avatar-xl mb-3" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($phr->name) }}&size=128&background=random)"></span>
                        <h3 class="m-0 mb-1">{{ $phr->name }}</h3>
                        <div class="text-secondary">{{ $phr->email }}</div>
                        <div class="mt-3">
                            @if($phr->phr_level === 'regional_manager')
                                <span class="badge badge-lg bg-warning text-dark">
                                    <i class="ti ti-crown me-1"></i>
                                    Regional Manager
                                </span>
                            @elseif($phr->phr_level === 'area_manager')
                                <span class="badge badge-lg bg-info">
                                    <i class="ti ti-star me-1"></i>
                                    Area Manager
                                </span>
                            @else
                                <span class="badge badge-lg bg-secondary">
                                    <i class="ti ti-user me-1"></i>
                                    PHR Regular
                                </span>
                            @endif
                        </div>
                        <div class="mt-2">
                            @if($phr->is_phr_active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-danger">Tidak Aktif</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Kode Referral</div>
                                <div class="datagrid-content">
                                    <code>{{ $phr->referral_code ?? '-' }}</code>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Bergabung</div>
                                <div class="datagrid-content">
                                    {{ $phr->phr_joined_at ? $phr->phr_joined_at->format('d M Y') : '-' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistics Card -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Statistik</h3>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="ti ti-users icon bg-primary text-white p-2 rounded-circle"></i>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">PHR yang Direkrut</div>
                                    <div class="text-secondary">{{ $phr->phr_recruited_count }} orang</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="ti ti-briefcase icon bg-success text-white p-2 rounded-circle"></i>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Pelaku Usaha Referensi</div>
                                    <div class="text-secondary">{{ $phr->pu_referred_count }} PU</div>
                                </div>
                            </div>
                        </div>
                        @if($phr->phr_level === 'area_manager' || $phr->phr_level === 'regional_manager')
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="ti ti-star icon bg-info text-white p-2 rounded-circle"></i>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Area Manager</div>
                                    <div class="text-secondary">{{ $phr->area_managers_count ?? 0 }} orang</div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="ti ti-cash icon bg-warning text-white p-2 rounded-circle"></i>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Total Fee</div>
                                    <div class="text-secondary">Rp {{ number_format($stats['total_fees'], 0, ',', '.') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <!-- Informasi Pribadi -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Pribadi</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nama Lengkap</div>
                                <div class="datagrid-content">{{ $phr->name }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Email</div>
                                <div class="datagrid-content">{{ $phr->email }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Telepon</div>
                                <div class="datagrid-content">{{ $phr->phone ?? '-' }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Provinsi</div>
                                <div class="datagrid-content">{{ $phr->province ?? '-' }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Kota</div>
                                <div class="datagrid-content">{{ $phr->city ?? '-' }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recruiter Info -->
                @if($phr->recruiter)
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Direkrut Oleh</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-md me-3" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($phr->recruiter->name) }}&background=random)"></span>
                            <div>
                                <div class="font-weight-medium">{{ $phr->recruiter->name }}</div>
                                <div class="text-secondary">{{ $phr->recruiter->email }}</div>
                                <div class="mt-1">
                                    @if($phr->recruiter->phr_level === 'regional_manager')
                                        <span class="badge bg-warning text-dark">Regional Manager</span>
                                    @elseif($phr->recruiter->phr_level === 'area_manager')
                                        <span class="badge bg-info">Area Manager</span>
                                    @else
                                        <span class="badge bg-secondary">PHR Regular</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Recruited PHRs -->
                @if($phr->recruitedPhrs && $phr->recruitedPhrs->count() > 0)
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">PHR yang Direkrut ({{ $phr->recruitedPhrs->count() }})</h3>
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach($phr->recruitedPhrs->take(5) as $recruited)
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-sm" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($recruited->name) }}&background=random)"></span>
                                </div>
                                <div class="col">
                                    <div>{{ $recruited->name }}</div>
                                    <div class="text-secondary small">{{ $recruited->email }}</div>
                                </div>
                                <div class="col-auto">
                                    @if($recruited->phr_level === 'area_manager')
                                        <span class="badge bg-info">Area Manager</span>
                                    @else
                                        <span class="badge bg-secondary">PHR</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if($phr->recruitedPhrs->count() > 5)
                    <div class="card-footer">
                        <div class="text-secondary small">Dan {{ $phr->recruitedPhrs->count() - 5 }} lainnya...</div>
                    </div>
                    @endif
                </div>
                @endif

                <!-- Referred PUs -->
                @if($phr->referredPelakuUsaha && $phr->referredPelakuUsaha->count() > 0)
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Pelaku Usaha yang Direferensikan ({{ $phr->referredPelakuUsaha->count() }})</h3>
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach($phr->referredPelakuUsaha->take(5) as $pu)
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-sm" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($pu->name) }}&background=random)"></span>
                                </div>
                                <div class="col">
                                    <div>{{ $pu->name }}</div>
                                    <div class="text-secondary small">{{ $pu->email }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if($phr->referredPelakuUsaha->count() > 5)
                    <div class="card-footer">
                        <div class="text-secondary small">Dan {{ $phr->referredPelakuUsaha->count() - 5 }} lainnya...</div>
                    </div>
                    @endif
                </div>
                @endif

                <!-- PHR Fees -->
                @if($phr->phrFees && $phr->phrFees->count() > 0)
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Fee</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Tipe</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($phr->phrFees->take(5) as $fee)
                                <tr>
                                    <td>{{ $fee->created_at->format('d M Y') }}</td>
                                    <td>
                                        @if($fee->fee_type === 'direct')
                                            <span class="badge bg-primary">Direct 10%</span>
                                        @elseif($fee->fee_type === 'downline')
                                            <span class="badge bg-info">Downline 3%</span>
                                        @else
                                            <span class="badge bg-warning">Regional 2%</span>
                                        @endif
                                    </td>
                                    <td>Rp {{ number_format($fee->fee_amount, 0, ',', '.') }}</td>
                                    <td>
                                        @if($fee->status === 'paid')
                                            <span class="badge bg-success">Dibayar</span>
                                        @elseif($fee->status === 'approved')
                                            <span class="badge bg-info">Disetujui</span>
                                        @else
                                            <span class="badge bg-warning">Pending</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if($phr->phrFees->count() > 5)
                    <div class="card-footer">
                        <a href="{{ route('admin.phr.fees', ['phr_id' => $phr->id]) }}" class="btn btn-link">
                            Lihat semua fee
                        </a>
                    </div>
                    @endif
                </div>
                @endif

                <!-- Promotions -->
                @if($phr->phrPromotions && $phr->phrPromotions->count() > 0)
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Promosi</h3>
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach($phr->phrPromotions as $promotion)
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{ ucfirst(str_replace('_', ' ', $promotion->from_level)) }}
                                        →
                                        {{ ucfirst(str_replace('_', ' ', $promotion->to_level)) }}
                                    </div>
                                    <div class="text-secondary small">
                                        {{ $promotion->created_at->format('d M Y') }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    @if($promotion->status === 'approved')
                                        <span class="badge bg-success">Disetujui</span>
                                    @elseif($promotion->status === 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @else
                                        <span class="badge bg-danger">Ditolak</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
