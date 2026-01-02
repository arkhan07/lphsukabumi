<x-layouts.admin.app>
    <x-slot name="title">Rekrutmen PHR & PU</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Rekrutmen</h2>
                    <div class="text-secondary mt-1">Rekrut PHR baru dan referensikan Pelaku Usaha</div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Referral Code Card -->
            <div class="row row-cards mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary-lt">
                            <h3 class="card-title"><i class="ti ti-link"></i> Kode Referral Anda</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Link Referral PHR</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" value="{{ $phrReferralLink }}" id="phrLink" readonly>
                                        <button class="btn btn-primary" onclick="copyToClipboard('phrLink')">
                                            <i class="ti ti-copy"></i> Salin
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Link Referral Pelaku Usaha</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" value="{{ $puReferralLink }}" id="puLink" readonly>
                                        <button class="btn btn-primary" onclick="copyToClipboard('puLink')">
                                            <i class="ti ti-copy"></i> Salin
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <p class="text-muted">Bagikan link di atas untuk merekrut PHR baru atau mereferensikan Pelaku Usaha</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total PHR Direkrut</div>
                            <div class="h1 mb-0">{{ $stats['total_phr_recruited'] }}</div>
                            <div class="text-secondary small">
                                <span class="text-success">{{ $stats['active_phr_recruited'] }} Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total PU Direferensikan</div>
                            <div class="h1 mb-0">{{ $stats['total_pu_referred'] }}</div>
                            <div class="text-secondary small">
                                <span class="text-success">{{ $stats['active_pu_referred'] }} Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent PHR Recruits -->
            <div class="row row-cards">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">PHR yang Baru Bergabung</h3>
                        </div>
                        <div class="list-group list-group-flush">
                            @forelse($recentPhrs as $phr)
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($phr->name) }}&background=random)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="fw-bold">{{ $phr->name }}</div>
                                        <div class="text-secondary small">{{ $phr->email }}</div>
                                        <div class="text-secondary small">
                                            <i class="ti ti-calendar"></i> Bergabung: {{ $phr->phr_joined_at ? $phr->phr_joined_at->format('d M Y') : '-' }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        @if($phr->is_phr_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-secondary">Tidak Aktif</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="list-group-item text-center py-5">
                                <i class="ti ti-users-off icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                <div class="text-secondary">Belum ada PHR yang direkrut</div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pelaku Usaha Terbaru</h3>
                        </div>
                        <div class="list-group list-group-flush">
                            @forelse($recentPus as $pu)
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($pu->name) }}&background=random)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="fw-bold">{{ $pu->name }}</div>
                                        <div class="text-secondary small">{{ $pu->email }}</div>
                                        <div class="text-secondary small">
                                            <i class="ti ti-calendar"></i> Bergabung: {{ $pu->created_at->format('d M Y') }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        @if($pu->is_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-secondary">Tidak Aktif</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="list-group-item text-center py-5">
                                <i class="ti ti-building-store icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                <div class="text-secondary">Belum ada PU yang direferensikan</div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function copyToClipboard(elementId) {
            const input = document.getElementById(elementId);
            input.select();
            document.execCommand('copy');
            alert('Link berhasil disalin!');
        }
    </script>
    @endpush
</x-layouts.admin.app>
