<x-layouts.admin.app>
    <x-slot name="title">Downline PHR</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Downline PHR</h2>
                    <div class="text-secondary mt-1">Jaringan PHR yang Anda rekrut</div>
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
                            <div class="subheader">Direct PHR</div>
                            <div class="h1 mb-0">{{ $stats['direct_phrs'] }}</div>
                            <div class="text-secondary small">
                                <span class="text-success">{{ $stats['active_direct_phrs'] }} Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total Jaringan</div>
                            <div class="h1 mb-0">{{ $stats['total_downlines'] }}</div>
                            <div class="text-secondary small">Semua level</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee dari Network</div>
                            <div class="h1 mb-0">Rp {{ number_format($stats['total_fees_from_network'] / 1000, 0) }}K</div>
                            <div class="text-secondary small">Total yang dibayar</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Downlines List -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Downline Direct</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Nama PHR</th>
                                <th>Level</th>
                                <th>Bergabung</th>
                                <th>PU Diref</th>
                                <th>Total Fee</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($directDownlines as $downline)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar me-2" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($downline->name) }}&background=random)"></span>
                                        <div>
                                            <div class="fw-bold">{{ $downline->name }}</div>
                                            <div class="text-secondary small">{{ $downline->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($downline->phr_level === 'regional_manager')
                                        <span class="badge bg-warning text-dark">
                                            <i class="ti ti-crown"></i> Regional Manager
                                        </span>
                                    @elseif($downline->phr_level === 'area_manager')
                                        <span class="badge bg-info">
                                            <i class="ti ti-star"></i> Area Manager
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">PHR</span>
                                    @endif
                                </td>
                                <td>{{ $downline->phr_joined_at ? $downline->phr_joined_at->format('d M Y') : '-' }}</td>
                                <td>
                                    <span class="badge bg-blue-lt">
                                        {{ $downline->referredPelakuUsaha()->count() }} PU
                                    </span>
                                </td>
                                <td>Rp {{ number_format($downline->phrFees()->sum('fee_amount'), 0, ',', '.') }}</td>
                                <td>
                                    @if($downline->is_phr_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-danger">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('phr.downlines.show', $downline) }}" class="btn btn-sm btn-primary">
                                        <i class="ti ti-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <i class="ti ti-users-off icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                    <div class="text-secondary">Belum ada downline PHR</div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
