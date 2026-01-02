<x-layouts.admin.app>
    <x-slot name="title">Pencapaian PHR</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Pencapaian</h2>
                    <div class="text-secondary mt-1">Progress dan pencapaian Anda sebagai PHR</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('phr.promotions.index') }}" class="btn btn-primary">
                        <i class="ti ti-trophy"></i> Riwayat Promosi
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Current Level Card -->
            <div class="card mb-3">
                <div class="card-header bg-primary-lt">
                    <h3 class="card-title">Level Saat Ini</h3>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="avatar avatar-xl bg-primary text-white">
                                @if($currentLevel === 'regional_manager')
                                    <i class="ti ti-crown" style="font-size: 2rem;"></i>
                                @elseif($currentLevel === 'area_manager')
                                    <i class="ti ti-star" style="font-size: 2rem;"></i>
                                @else
                                    <i class="ti ti-user" style="font-size: 2rem;"></i>
                                @endif
                            </span>
                        </div>
                        <div class="col">
                            <h2 class="mb-1">{{ $levelInfo['name'] }}</h2>
                            <div class="text-secondary">{{ $levelInfo['description'] }}</div>
                            <div class="mt-2">
                                @foreach($levelInfo['benefits'] as $benefit)
                                    <span class="badge bg-success-lt me-1">
                                        <i class="ti ti-check"></i> {{ $benefit }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current Statistics -->
            <div class="row row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">PU Direferensikan</div>
                            <div class="h1 mb-0">{{ $currentStats['pu_referred'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">PHR Direkrut</div>
                            <div class="h1 mb-0">{{ $currentStats['phr_recruited'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Area Manager</div>
                            <div class="h1 mb-0">{{ $currentStats['area_managers'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total Fee Earned</div>
                            <div class="h1 mb-0">Rp {{ number_format($currentStats['total_fees_earned'] / 1000000, 1) }}M</div>
                        </div>
                    </div>
                </div>
            </div>

            @if($nextLevelRequirements)
            <!-- Progress to Next Level -->
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Progress ke Level Selanjutnya</h3>
                </div>
                <div class="card-body">
                    @foreach($progress as $key => $prog)
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-capitalize">
                                    @if($key === 'pu_referred')
                                        Pelaku Usaha Direferensikan
                                    @elseif($key === 'phr_recruited')
                                        PHR Direkrut (Aktif)
                                    @elseif($key === 'area_managers')
                                        Area Manager di Jaringan
                                    @endif
                                </span>
                                <span class="text-secondary">{{ $prog['current'] }} / {{ $prog['required'] }}</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar {{ $prog['percentage'] >= 100 ? 'bg-success' : 'bg-primary' }}"
                                     role="progressbar"
                                     style="width: {{ min(100, $prog['percentage']) }}%"
                                     aria-valuenow="{{ $prog['percentage'] }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100">
                                    {{ $prog['percentage'] }}%
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @php
                        $allComplete = true;
                        foreach($progress as $prog) {
                            if($prog['percentage'] < 100) {
                                $allComplete = false;
                                break;
                            }
                        }
                    @endphp

                    @if($allComplete)
                        <div class="alert alert-success mt-3">
                            <i class="ti ti-check-circle"></i>
                            <strong>Selamat!</strong> Anda telah memenuhi semua syarat untuk promosi.
                            <a href="{{ route('phr.promotions.index') }}" class="alert-link">Ajukan promosi sekarang</a>
                        </div>
                    @endif
                </div>
            </div>
            @else
            <div class="card mb-3">
                <div class="card-body text-center py-5">
                    <i class="ti ti-trophy icon mb-3" style="font-size: 4rem; opacity: 0.5;"></i>
                    <h3>Anda Sudah di Level Tertinggi!</h3>
                    <p class="text-secondary">Terima kasih atas dedikasi Anda sebagai Regional Manager</p>
                </div>
            </div>
            @endif

            <!-- Recent Milestones -->
            @if(count($milestones) > 0)
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Milestone Terbaru</h3>
                </div>
                <div class="list-group list-group-flush">
                    @foreach($milestones as $milestone)
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar bg-{{ $milestone['color'] }}-lt">
                                    <i class="ti ti-{{ $milestone['icon'] }}"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="fw-bold">{{ $milestone['title'] }}</div>
                                <div class="text-secondary small">
                                    <i class="ti ti-calendar"></i> {{ $milestone['date']->format('d M Y H:i') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</x-layouts.admin.app>
