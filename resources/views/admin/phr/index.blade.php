<x-layouts.admin.app>
    <x-slot name="title">Dashboard PHR</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Dashboard Manajemen PHR</h2>
                    <div class="text-secondary mt-1">Monitoring Pendamping Halal Reguler</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('admin.phr.list') }}" class="btn btn-primary">
                        <i class="ti ti-list me-2"></i>
                        Lihat Semua PHR
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
                <!-- Total PHR -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total PHR</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ route('admin.phr.list') }}">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-3">{{ number_format($stats['total_phrs']) }}</div>
                            <div class="d-flex mb-2">
                                <div>Semua PHR terdaftar</div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 100%" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active PHR -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">PHR Aktif</div>
                            </div>
                            <div class="h1 mb-3">{{ number_format($stats['active_phrs']) }}</div>
                            <div class="d-flex mb-2">
                                <div>
                                    {{ $stats['total_phrs'] > 0 ? round(($stats['active_phrs'] / $stats['total_phrs']) * 100) : 0 }}% dari total
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" 
                                     style="width: {{ $stats['total_phrs'] > 0 ? ($stats['active_phrs'] / $stats['total_phrs']) * 100 : 0 }}%" 
                                     role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Area Managers -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Manajer Area</div>
                            </div>
                            <div class="h1 mb-3">{{ number_format($stats['area_managers']) }}</div>
                            <div class="d-flex mb-2">
                                <div>Level 2 PHR</div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" 
                                     style="width: {{ $stats['total_phrs'] > 0 ? ($stats['area_managers'] / $stats['total_phrs']) * 100 : 0 }}%" 
                                     role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Regional Managers -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Manajer Regional</div>
                            </div>
                            <div class="h1 mb-3">{{ number_format($stats['regional_managers']) }}</div>
                            <div class="d-flex mb-2">
                                <div>Level 3 PHR</div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" 
                                     style="width: {{ $stats['total_phrs'] > 0 ? ($stats['regional_managers'] / $stats['total_phrs']) * 100 : 0 }}%" 
                                     role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-deck row-cards">
                <!-- Pending Promotions Alert -->
                @if($stats['pending_promotions'] > 0)
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        <div class="d-flex">
                            <div>
                                <i class="ti ti-alert-triangle icon alert-icon"></i>
                            </div>
                            <div>
                                <h4 class="alert-title">Promosi Menunggu Persetujuan</h4>
                                <div class="text-secondary">
                                    Ada <strong>{{ $stats['pending_promotions'] }}</strong> promosi PHR yang menunggu persetujuan.
                                    <a href="{{ route('admin.phr.promotions') }}" class="alert-link">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Recent PHRs -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">PHR Terbaru</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kode Referral</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Bergabung</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($recentPhrs as $phr)
                                        <tr>
                                            <td>
                                                <div class="d-flex py-1 align-items-center">
                                                    <span class="avatar me-2">
                                                        {{ strtoupper(substr($phr->name, 0, 2)) }}
                                                    </span>
                                                    <div class="flex-fill">
                                                        <div class="font-weight-medium">{{ $phr->name }}</div>
                                                        <div class="text-secondary">
                                                            <a href="#" class="text-reset">{{ $phr->email }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-primary-lt">{{ $phr->referral_code }}</span>
                                            </td>
                                            <td>
                                                @if($phr->phr_level === 'regional_manager')
                                                    <span class="badge bg-warning">Regional Manager</span>
                                                @elseif($phr->phr_level === 'area_manager')
                                                    <span class="badge bg-info">Area Manager</span>
                                                @else
                                                    <span class="badge bg-secondary">PHR Regular</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($phr->is_phr_active)
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-danger">Tidak Aktif</span>
                                                @endif
                                            </td>
                                            <td class="text-secondary">
                                                {{ $phr->phr_joined_at ? $phr->phr_joined_at->format('d M Y') : '-' }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.phr.show', $phr) }}" class="btn btn-sm btn-ghost-primary">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-secondary py-4">
                                                Belum ada PHR terdaftar
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Statistik Level</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>PHR Regular</div>
                                    <div class="fw-bold">{{ $stats['regular_phrs'] }}</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-secondary" 
                                         style="width: {{ $stats['total_phrs'] > 0 ? ($stats['regular_phrs'] / $stats['total_phrs']) * 100 : 0 }}%" 
                                         role="progressbar"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>Manajer Area</div>
                                    <div class="fw-bold">{{ $stats['area_managers'] }}</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info" 
                                         style="width: {{ $stats['total_phrs'] > 0 ? ($stats['area_managers'] / $stats['total_phrs']) * 100 : 0 }}%" 
                                         role="progressbar"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>Manajer Regional</div>
                                    <div class="fw-bold">{{ $stats['regional_managers'] }}</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning" 
                                         style="width: {{ $stats['total_phrs'] > 0 ? ($stats['regional_managers'] / $stats['total_phrs']) * 100 : 0 }}%" 
                                         role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Menu Cepat</h3>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="{{ route('admin.phr.list') }}" class="list-group-item list-group-item-action">
                                <i class="ti ti-list me-2"></i>
                                Daftar Semua PHR
                            </a>
                            <a href="{{ route('admin.phr.promotions') }}" class="list-group-item list-group-item-action">
                                <i class="ti ti-trophy me-2"></i>
                                Persetujuan Promosi
                                @if($stats['pending_promotions'] > 0)
                                <span class="badge bg-warning ms-auto">{{ $stats['pending_promotions'] }}</span>
                                @endif
                            </a>
                            <a href="{{ route('admin.phr.fees') }}" class="list-group-item list-group-item-action">
                                <i class="ti ti-cash me-2"></i>
                                Fee & Royalti
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
