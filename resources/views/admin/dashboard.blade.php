<x-layouts.admin.app>
    <x-slot name="title">Dashboard Admin LPH</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Dashboard Admin LPH</h2>
                    <div class="text-secondary mt-1">Selamat datang, {{ auth()->user()->name }}! Kelola operasional LPH Doa Bangsa Sukabumi</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row row-deck row-cards">
        <!-- Total Permohonan -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <i class="ti ti-file-text"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Total Permohonan</div>
                                    <div class="text-secondary">Total keseluruhan</div>
                                </div>
                            </div>
                            <div class="h1 mt-3 mb-0">{{ number_format($stats['total_submissions']) }}</div>
                        </div>
                    </div>
                </div>

                <!-- Sertifikat Disetujui -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-success text-white avatar">
                                        <i class="ti ti-checkbox"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Sertifikat Disetujui</div>
                                    <div class="text-secondary">
                                        {{ $stats['total_submissions'] > 0 ? number_format(($stats['approved_submissions'] / $stats['total_submissions']) * 100, 1) : 0 }}% approval rate
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mt-3 mb-0">{{ number_format($stats['approved_submissions']) }}</div>
                        </div>
                    </div>
                </div>

                <!-- Dalam Proses -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-warning text-white avatar">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Dalam Proses</div>
                                    <div class="text-secondary">
                                        {{ $stats['total_submissions'] > 0 ? number_format(($stats['pending_submissions'] / $stats['total_submissions']) * 100, 1) : 0 }}% dari total
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mt-3 mb-0">{{ number_format($stats['pending_submissions']) }}</div>
                        </div>
                    </div>
                </div>

                <!-- Total Pelaku Usaha -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-info text-white avatar">
                                        <i class="ti ti-users"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Total Pelaku Usaha</div>
                                    <div class="text-secondary">Terdaftar di sistem</div>
                                </div>
                            </div>
                            <div class="h1 mt-3 mb-0">{{ number_format($stats['total_users']) }}</div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- PHR Statistics Row -->
        <div class="row row-deck row-cards mt-3">
            <div class="col-12">
                <div class="card-header px-0">
                    <h3 class="card-title">Statistik PHR (Pendamping Halal Reguler)</h3>
                </div>
            </div>

            <!-- Total PHR -->
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-blue text-white avatar">
                                    <i class="ti ti-users"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">Total PHR</div>
                                <div class="text-secondary">Semua PHR terdaftar</div>
                            </div>
                        </div>
                        <div class="h1 mt-3 mb-0">{{ number_format($phr_stats['total_phr'] ?? 0) }}</div>
                    </div>
                </div>
            </div>

            <!-- Active PHR -->
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-green text-white avatar">
                                    <i class="ti ti-user-check"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">PHR Aktif</div>
                                <div class="text-secondary">
                                    {{ ($phr_stats['total_phr'] ?? 0) > 0 ? number_format((($phr_stats['active_phr'] ?? 0) / $phr_stats['total_phr']) * 100, 1) : 0 }}% dari total
                                </div>
                            </div>
                        </div>
                        <div class="h1 mt-3 mb-0">{{ number_format($phr_stats['active_phr'] ?? 0) }}</div>
                    </div>
                </div>
            </div>

            <!-- Area Managers -->
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-azure text-white avatar">
                                    <i class="ti ti-star"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">Area Manager</div>
                                <div class="text-secondary">Level 2 PHR</div>
                            </div>
                        </div>
                        <div class="h1 mt-3 mb-0">{{ number_format($phr_stats['area_managers'] ?? 0) }}</div>
                    </div>
                </div>
            </div>

            <!-- Regional Managers -->
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-yellow text-white avatar">
                                    <i class="ti ti-crown"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">Regional Manager</div>
                                <div class="text-secondary">Level 3 PHR</div>
                            </div>
                        </div>
                        <div class="h1 mt-3 mb-0">{{ number_format($phr_stats['regional_managers'] ?? 0) }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Stats Row -->
        <div class="row row-deck row-cards mt-3">
                <!-- Perlu Verifikasi -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-danger text-white avatar">
                                        <i class="ti ti-alert-circle"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Perlu Verifikasi</div>
                                    <div class="text-secondary">Dokumen pending</div>
                                </div>
                            </div>
                            <div class="h1 mt-3 mb-0">{{ number_format($stats['pending_documents']) }}</div>
                        </div>
                    </div>
                </div>

                <!-- Audit Bulan Ini -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-purple text-white avatar">
                                        <i class="ti ti-search"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Audit Bulan Ini</div>
                                    <div class="text-secondary">{{ $stats['audits_completed_this_month'] }} selesai</div>
                                </div>
                            </div>
                            <div class="h1 mt-3 mb-0">{{ number_format($stats['audits_this_month']) }}</div>
                        </div>
                    </div>
                </div>

                <!-- Pendapatan Bulan Ini -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-teal text-white avatar">
                                        <i class="ti ti-currency-dollar"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Pendapatan Bulan Ini</div>
                                    <div class="text-secondary">Total bulan ini</div>
                                </div>
                            </div>
                            <div class="h1 mt-3 mb-0">Rp {{ number_format($stats['revenue_this_month'] / 1000000, 1) }}M</div>
                        </div>
                    </div>
                </div>

                <!-- Total Produk Tersertifikasi -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-cyan text-white avatar">
                                        <i class="ti ti-package"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Total Produk Tersertifikasi</div>
                                    <div class="text-secondary">Produk halal</div>
                                </div>
                            </div>
                            <div class="h1 mt-3 mb-0">{{ number_format($stats['certified_products']) }}</div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- PHR Financial Stats Row -->
        <div class="row row-deck row-cards mt-3">
            <div class="col-12">
                <div class="card-header px-0">
                    <h3 class="card-title">Keuangan PHR</h3>
                </div>
            </div>

            <!-- Total PHR Fees -->
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-indigo text-white avatar">
                                    <i class="ti ti-cash"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">Total Fee PHR</div>
                                <div class="text-secondary">Bulan ini</div>
                            </div>
                        </div>
                        <div class="h1 mt-3 mb-0">Rp {{ number_format(($phr_stats['total_fees_this_month'] ?? 0) / 1000000, 1) }}M</div>
                    </div>
                </div>
            </div>

            <!-- Pending PHR Fees -->
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-orange text-white avatar">
                                    <i class="ti ti-clock-dollar"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">Fee Pending</div>
                                <div class="text-secondary">Menunggu pembayaran</div>
                            </div>
                        </div>
                        <div class="h1 mt-3 mb-0">Rp {{ number_format(($phr_stats['pending_fees'] ?? 0) / 1000000, 1) }}M</div>
                    </div>
                </div>
            </div>

            <!-- Recent PHR Promotions -->
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-pink text-white avatar">
                                    <i class="ti ti-trending-up"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">Promosi Bulan Ini</div>
                                <div class="text-secondary">PHR naik level</div>
                            </div>
                        </div>
                        <div class="h1 mt-3 mb-0">{{ number_format($phr_stats['promotions_this_month'] ?? 0) }}</div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Charts Row -->
            <div class="row row-deck row-cards mt-3">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Statistik Permohonan {{ now()->year }}</h3>
                        </div>
                        <div class="card-body">
                            <div id="submissionsChart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Permohonan</h3>
                        </div>
                        <div class="card-body">
                            <div id="statusChart"></div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- PHR Activities & Recent Submissions -->
        <div class="row row-deck row-cards mt-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">PHR Terbaru Bergabung</h3>
                        <div class="card-actions">
                            <a href="{{ route('admin.phr.list') }}" class="btn btn-primary">
                                Lihat Semua
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            @forelse($recent_phrs ?? [] as $phr)
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($phr->name) }}&background=random)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="fw-bold">{{ $phr->name }}</div>
                                        <div class="text-secondary small">
                                            <i class="ti ti-mail"></i> {{ $phr->email }}
                                        </div>
                                        <div class="text-secondary small">
                                            <i class="ti ti-calendar"></i> Bergabung: {{ $phr->phr_joined_at ? $phr->phr_joined_at->format('d M Y') : '-' }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        @if($phr->phr_level === 'regional_manager')
                                            <span class="badge bg-warning text-dark">
                                                <i class="ti ti-crown"></i> Regional Manager
                                            </span>
                                        @elseif($phr->phr_level === 'area_manager')
                                            <span class="badge bg-info">
                                                <i class="ti ti-star"></i> Area Manager
                                            </span>
                                        @else
                                            <span class="badge bg-blue">
                                                <i class="ti ti-user"></i> PHR
                                            </span>
                                        @endif
                                        <br>
                                        @if($phr->is_phr_active)
                                            <span class="badge bg-success mt-1">Aktif</span>
                                        @else
                                            <span class="badge bg-danger mt-1">Tidak Aktif</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="list-group-item text-center py-5">
                                <i class="ti ti-users" style="font-size: 3rem; color: var(--tblr-border-color);"></i>
                                <div class="text-secondary mt-2">Belum ada PHR yang bergabung</div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Promosi PHR Terbaru</h3>
                        <div class="card-actions">
                            <a href="{{ route('admin.phr.promotions') }}" class="btn btn-primary">
                                Lihat Semua
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            @forelse($recent_promotions ?? [] as $promotion)
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($promotion->user->name ?? 'PHR') }}&background=random)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="fw-bold">{{ $promotion->user->name ?? 'N/A' }}</div>
                                        <div class="text-secondary small">
                                            {{ ucfirst(str_replace('_', ' ', $promotion->from_level)) }}
                                            <i class="ti ti-arrow-right"></i>
                                            {{ ucfirst(str_replace('_', ' ', $promotion->to_level)) }}
                                        </div>
                                        <div class="text-secondary small">
                                            <i class="ti ti-calendar"></i> {{ $promotion->created_at->format('d M Y') }}
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
                            @empty
                            <div class="list-group-item text-center py-5">
                                <i class="ti ti-trending-up" style="font-size: 3rem; color: var(--tblr-border-color);"></i>
                                <div class="text-secondary mt-2">Belum ada promosi PHR</div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Audits & Recent Submissions -->
        <div class="row row-deck row-cards mt-3">
            <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jadwal Audit Mendatang</h3>
                            <div class="card-actions">
                                <a href="{{ route('admin.audits.schedules.index') }}" class="btn btn-primary">
                                    Lihat Semua
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                @forelse($recent_audits as $audit)
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($audit->submission->company_name ?? 'A') }}&background=166F61&color=fff)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="fw-bold">{{ $audit->submission->company_name ?? $audit->submission->user->name ?? 'N/A' }}</div>
                                            <div class="text-secondary">
                                                <i class="ti ti-calendar"></i> {{ $audit->planned_start_date ? $audit->planned_start_date->format('d M Y - H:i') : 'Belum dijadwalkan' }} WIB
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-{{ $audit->status == 'planned' ? 'info' : 'warning' }}">
                                                {{ ucfirst($audit->status) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="list-group-item text-center py-5">
                                    <i class="ti ti-calendar" style="font-size: 3rem; color: var(--tblr-border-color);"></i>
                                    <div class="text-secondary mt-2">Tidak ada audit yang dijadwalkan</div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Permohonan Terbaru</h3>
                            <div class="card-actions">
                                <a href="{{ route('admin.submissions.index') }}" class="btn btn-primary">
                                    Lihat Semua
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No. Permohonan</th>
                                            <th>Pelaku Usaha</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($recent_submissions as $submission)
                                        <tr>
                                            <td class="fw-bold">{{ $submission->submission_number ?? '-' }}</td>
                                            <td>{{ $submission->company_name ?? $submission->user->name ?? '-' }}</td>
                                            <td>
                                                @php
                                                    $statusBadge = match($submission->status) {
                                                        'draft' => 'secondary',
                                                        'submitted', 'screening' => 'info',
                                                        'verification' => 'warning',
                                                        'approved', 'completed' => 'success',
                                                        'rejected' => 'danger',
                                                        'audit_in_progress', 'assigned' => 'purple',
                                                        default => 'secondary'
                                                    };
                                                    $statusLabel = match($submission->status) {
                                                        'draft' => 'Draft',
                                                        'submitted' => 'Diajukan',
                                                        'screening' => 'Screening',
                                                        'verification' => 'Verifikasi',
                                                        'approved' => 'Disetujui',
                                                        'completed' => 'Selesai',
                                                        'rejected' => 'Ditolak',
                                                        'audit_in_progress' => 'Audit',
                                                        'assigned' => 'Ditugaskan',
                                                        default => ucfirst($submission->status)
                                                    };
                                                @endphp
                                                <span class="badge bg-{{ $statusBadge }}-lt">{{ $statusLabel }}</span>
                                            </td>
                                            <td>{{ $submission->created_at->format('d M Y') }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-5">
                                                <i class="ti ti-file-text" style="font-size: 2rem; color: var(--tblr-border-color);"></i>
                                                <div class="text-secondary mt-2">Belum ada permohonan</div>
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

    @push('scripts')
    <script>
        // Submissions Chart with real data
        var submissionsOptions = {
            series: [{
                name: 'Permohonan',
                data: @json($submission_chart_data)
            }],
            chart: {
                type: 'area',
                height: 300,
                fontFamily: 'inherit',
                toolbar: {
                    show: false
                }
            },
            colors: ['#166F61'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
            },
            yaxis: {
                title: {
                    text: 'Jumlah Permohonan'
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.4,
                    opacityTo: 0.1,
                }
            }
        };
        var submissionsChart = new ApexCharts(document.querySelector("#submissionsChart"), submissionsOptions);
        submissionsChart.render();

        // Status Chart with real data
        var statusOptions = {
            series: [
                {{ $status_distribution['in_progress'] }},
                {{ $status_distribution['verification'] }},
                {{ $status_distribution['audit'] }},
                {{ $status_distribution['approved'] }}
            ],
            chart: {
                type: 'donut',
                height: 300,
                fontFamily: 'inherit'
            },
            labels: ['Dalam Proses', 'Verifikasi', 'Audit', 'Disetujui'],
            colors: ['#f59e0b', '#3b82f6', '#7c3aed', '#10b981'],
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            total: {
                                show: true,
                                label: 'Total',
                                formatter: function (w) {
                                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0)
                                }
                            }
                        }
                    }
                }
            }
        };
        var statusChart = new ApexCharts(document.querySelector("#statusChart"), statusOptions);
        statusChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
