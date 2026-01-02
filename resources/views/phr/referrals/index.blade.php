<x-layouts.admin.app>
    <x-slot name="title">Daftar Pelaku Usaha</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Daftar Pelaku Usaha</h2>
                    <div class="text-secondary mt-1">Pelaku Usaha yang Anda referensikan</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ $puReferralLink }}" target="_blank" class="btn btn-primary">
                        <i class="ti ti-link"></i> Link Referral PU
                    </a>
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
                            <div class="subheader">Total PU Direferensikan</div>
                            <div class="h1 mb-0">{{ $stats['total_pu'] }}</div>
                            <div class="text-secondary small">
                                <span class="text-success">{{ $stats['active_pu'] }} Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total Permohonan</div>
                            <div class="h1 mb-0">{{ $stats['total_submissions'] }}</div>
                            <div class="text-secondary small">
                                <span class="text-success">{{ $stats['approved_submissions'] }} Disetujui</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total Fee Earned</div>
                            <div class="h1 mb-0">Rp {{ number_format($stats['total_fees_earned'] / 1000000, 1) }}M</div>
                            <div class="text-secondary small">Dari PU yang direferensikan</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Fee Tertunda</div>
                            <div class="h1 mb-0">Rp {{ number_format($stats['pending_fees'] / 1000, 0) }}K</div>
                            <div class="text-secondary small">Menunggu pembayaran</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Form -->
            <div class="card mb-3">
                <div class="card-body">
                    <form method="GET" action="{{ route('phr.referrals.index') }}" class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="">Semua Status</option>
                                <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Aktif</option>
                                <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Bergabung</label>
                            <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Sampai Tanggal</label>
                            <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">&nbsp;</label>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-filter"></i> Filter
                                </button>
                                <a href="{{ route('phr.referrals.index') }}" class="btn btn-outline-secondary">
                                    <i class="ti ti-x"></i> Reset
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Pelaku Usaha List -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pelaku Usaha</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Pelaku Usaha</th>
                                <th>Kontak</th>
                                <th>Tanggal Bergabung</th>
                                <th>Total Permohonan</th>
                                <th>Total Fee</th>
                                <th>Status</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pelakuUsahas as $pu)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar me-2" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($pu->name) }}&background=random)"></span>
                                        <div>
                                            <div class="fw-bold">{{ $pu->name }}</div>
                                            @if($pu->business_name)
                                                <div class="text-secondary small">
                                                    <i class="ti ti-building-store"></i> {{ $pu->business_name }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small">
                                        <div><i class="ti ti-mail"></i> {{ $pu->email }}</div>
                                        @if($pu->phone)
                                            <div><i class="ti ti-phone"></i> {{ $pu->phone }}</div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="text-secondary">
                                        <i class="ti ti-calendar"></i> {{ $pu->created_at->format('d M Y') }}
                                    </div>
                                    <div class="text-secondary small">
                                        {{ $pu->created_at->diffForHumans() }}
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $pu->submissions_count ?? 0 }} Permohonan
                                    </span>
                                </td>
                                <td>
                                    @php
                                        $totalFees = $pu->phr_fees_sum_fee_amount ?? 0;
                                    @endphp
                                    <div class="fw-bold">Rp {{ number_format($totalFees, 0, ',', '.') }}</div>
                                    @if($totalFees > 0)
                                        <div class="text-secondary small">
                                            Fee 10% dari permohonan
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    @if($pu->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('phr.referrals.show', $pu->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="ti ti-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <i class="ti ti-building-store icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                    <div class="text-secondary">Belum ada Pelaku Usaha yang direferensikan</div>
                                    <div class="text-secondary small mt-2">
                                        <a href="{{ $puReferralLink }}" target="_blank">Bagikan link referral Anda</a>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if($pelakuUsahas->hasPages())
                <div class="card-footer">
                    {{ $pelakuUsahas->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layouts.admin.app>
