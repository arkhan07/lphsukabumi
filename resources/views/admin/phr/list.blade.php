<x-layouts.admin.app>
    <x-slot name="title">Daftar PHR</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Daftar Pendamping Halal Reguler</h2>
                    <div class="text-secondary mt-1">Kelola semua PHR yang terdaftar</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('admin.phr.index') }}" class="btn btn-ghost-primary">
                        <i class="ti ti-dashboard me-2"></i>
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Filters -->
            <div class="card mb-3">
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.phr.list') }}">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <label class="form-label">Cari</label>
                                <input type="text" name="search" class="form-control" 
                                       placeholder="Nama, email, kode referral..." 
                                       value="{{ request('search') }}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Level</label>
                                <select name="level" class="form-select">
                                    <option value="">Semua Level</option>
                                    <option value="phr" {{ request('level') === 'phr' ? 'selected' : '' }}>PHR Regular</option>
                                    <option value="area_manager" {{ request('level') === 'area_manager' ? 'selected' : '' }}>Manajer Area</option>
                                    <option value="regional_manager" {{ request('level') === 'regional_manager' ? 'selected' : '' }}>Manajer Regional</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Semua Status</option>
                                    <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Aktif</option>
                                    <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Provinsi</label>
                                <input type="text" name="province" class="form-control" 
                                       placeholder="Provinsi..." 
                                       value="{{ request('province') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">&nbsp;</label>
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti ti-filter me-2"></i>
                                        Filter
                                    </button>
                                    <a href="{{ route('admin.phr.list') }}" class="btn btn-ghost-secondary">
                                        <i class="ti ti-x me-2"></i>
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- PHR List -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $phrs->total() }} PHR Ditemukan</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th>PHR</th>
                                <th>Kode Referral</th>
                                <th>Level</th>
                                <th>Lokasi</th>
                                <th>Stats</th>
                                <th>Status</th>
                                <th>Bergabung</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($phrs as $phr)
                            <tr>
                                <td>
                                    <div class="d-flex py-1 align-items-center">
                                        <span class="avatar avatar-sm me-2" 
                                              style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($phr->name) }}&background=random)">
                                        </span>
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ $phr->name }}</div>
                                            <div class="text-secondary">
                                                <a href="mailto:{{ $phr->email }}" class="text-reset">{{ $phr->email }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <code>{{ $phr->referral_code ?? '-' }}</code>
                                        @if($phr->referral_code)
                                        <button class="btn btn-sm btn-ghost-primary ms-2" 
                                                onclick="navigator.clipboard.writeText('{{ $phr->referral_code }}'); this.innerHTML = '<i class=\'ti ti-check\'></i>'">
                                            <i class="ti ti-copy"></i>
                                        </button>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    @if($phr->phr_level === 'regional_manager')
                                        <span class="badge bg-warning text-dark">
                                            <i class="ti ti-crown me-1"></i>
                                            Regional Manager
                                        </span>
                                    @elseif($phr->phr_level === 'area_manager')
                                        <span class="badge bg-info">
                                            <i class="ti ti-star me-1"></i>
                                            Area Manager
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">
                                            <i class="ti ti-user me-1"></i>
                                            PHR Regular
                                        </span>
                                    @endif
                                </td>
                                <td class="text-secondary">
                                    <div>{{ $phr->province ?? '-' }}</div>
                                    <small>{{ $phr->city ?? '' }}</small>
                                </td>
                                <td>
                                    <div class="text-secondary small">
                                        <div><i class="ti ti-users me-1"></i> {{ $phr->phr_recruited_count }} PHR</div>
                                        <div><i class="ti ti-briefcase me-1"></i> {{ $phr->pu_referred_count }} PU</div>
                                    </div>
                                </td>
                                <td>
                                    @if($phr->is_phr_active)
                                        <span class="badge bg-success-lt">
                                            <i class="ti ti-circle-check me-1"></i>
                                            Aktif
                                        </span>
                                    @else
                                        <span class="badge bg-danger-lt">
                                            <i class="ti ti-circle-x me-1"></i>
                                            Tidak Aktif
                                        </span>
                                    @endif
                                </td>
                                <td class="text-secondary">
                                    {{ $phr->phr_joined_at ? $phr->phr_joined_at->format('d M Y') : '-' }}
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('admin.phr.show', $phr) }}" 
                                           class="btn btn-sm btn-primary">
                                            Detail
                                        </a>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-ghost-secondary dropdown-toggle" 
                                                    type="button" 
                                                    data-bs-toggle="dropdown">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('admin.phr.show', $phr) }}">
                                                    <i class="ti ti-eye me-2"></i>
                                                    Lihat Detail
                                                </a>
                                                @if($phr->is_phr_active)
                                                <form method="POST" action="{{ route('admin.phr.deactivate', $phr) }}" 
                                                      onsubmit="return confirm('Yakin menonaktifkan PHR ini?')">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ti ti-x me-2"></i>
                                                        Nonaktifkan
                                                    </button>
                                                </form>
                                                @else
                                                <form method="POST" action="{{ route('admin.phr.activate', $phr) }}">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-success">
                                                        <i class="ti ti-check me-2"></i>
                                                        Aktifkan
                                                    </button>
                                                </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center text-secondary py-5">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <i class="ti ti-database-off"></i>
                                        </div>
                                        <p class="empty-title">Tidak ada data</p>
                                        <p class="empty-subtitle text-secondary">
                                            Tidak ada PHR yang ditemukan dengan kriteria filter ini.
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if($phrs->hasPages())
                <div class="card-footer">
                    {{ $phrs->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layouts.admin.app>
