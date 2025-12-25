<x-layouts.admin.app>
    <x-slot name="title">Dashboard Admin LPH</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Dashboard Admin LPH</h2>
            <p class="text-secondary-light mb-0">Selamat datang, {{ auth()->user()->name }}! Kelola operasional LPH Doa Bangsa Sukabumi</p>
        </div>
        <div>
            <a href="{{ route('admin.submissions.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Permohonan
            </a>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon primary">
                    <i class="ri-file-list-3-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Permohonan</div>
                    <div class="stat-value">{{ number_format($stats['total_submissions']) }}</div>
                    <div class="stat-trend {{ $stats['total_submissions'] > 0 ? 'up' : '' }}">
                        <i class="ri-file-list-line"></i>
                        Total keseluruhan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-checkbox-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Sertifikat Disetujui</div>
                    <div class="stat-value">{{ number_format($stats['approved_submissions']) }}</div>
                    <div class="stat-trend {{ $stats['approved_submissions'] > 0 ? 'up' : '' }}">
                        <i class="ri-percent-line"></i>
                        {{ $stats['total_submissions'] > 0 ? number_format(($stats['approved_submissions'] / $stats['total_submissions']) * 100, 1) : 0 }}% approval rate
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon warning">
                    <i class="ri-time-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Dalam Proses</div>
                    <div class="stat-value">{{ number_format($stats['pending_submissions']) }}</div>
                    <div class="stat-trend">
                        <i class="ri-hourglass-line"></i>
                        {{ $stats['total_submissions'] > 0 ? number_format(($stats['pending_submissions'] / $stats['total_submissions']) * 100, 1) : 0 }}% dari total
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-user-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Pelaku Usaha</div>
                    <div class="stat-value">{{ number_format($stats['total_users']) }}</div>
                    <div class="stat-trend {{ $stats['total_users'] > 0 ? 'up' : '' }}">
                        <i class="ri-user-follow-line"></i>
                        Terdaftar di sistem
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Stats Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon danger">
                    <i class="ri-file-warning-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Perlu Verifikasi</div>
                    <div class="stat-value">{{ number_format($stats['pending_documents']) }}</div>
                    <div class="stat-trend {{ $stats['pending_documents'] > 0 ? 'up' : '' }}">
                        <i class="ri-file-list-2-line"></i>
                        Dokumen pending
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="ri-file-search-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Audit Bulan Ini</div>
                    <div class="stat-value">{{ number_format($stats['audits_this_month']) }}</div>
                    <div class="stat-trend {{ $stats['audits_completed_this_month'] > 0 ? 'up' : '' }}">
                        <i class="ri-checkbox-circle-line"></i>
                        {{ $stats['audits_completed_this_month'] }} selesai
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-money-dollar-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pendapatan Bulan Ini</div>
                    <div class="stat-value">Rp {{ number_format($stats['revenue_this_month'] / 1000000, 1) }}M</div>
                    <div class="stat-trend {{ $stats['revenue_this_month'] > 0 ? 'up' : '' }}">
                        <i class="ri-line-chart-line"></i>
                        Total bulan ini
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-product-hunt-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Produk Tersertifikasi</div>
                    <div class="stat-value">{{ number_format($stats['certified_products']) }}</div>
                    <div class="stat-trend {{ $stats['certified_products'] > 0 ? 'up' : '' }}">
                        <i class="ri-shield-check-line"></i>
                        Produk halal
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Statistik Permohonan {{ now()->year }}</h5>
                </div>
                <div id="submissionsChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Status Permohonan</h5>
                </div>
                <div id="statusChart"></div>
            </div>
        </div>
    </div>

    <!-- Upcoming Audits & Recent Submissions -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Jadwal Audit Mendatang</h5>
                    <a href="{{ route('admin.audits.schedules.index') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="list-group list-group-flush">
                    @forelse($recent_audits as $audit)
                    <div class="list-group-item d-flex justify-content-between align-items-start" style="border: none; padding: 1rem 0; {{ !$loop->first ? 'border-top: 1px solid var(--neutral-200);' : '' }}">
                        <div class="me-auto">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="stat-icon {{ $loop->first ? 'info' : ($loop->iteration == 2 ? 'warning' : 'primary') }}" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0" style="font-size: 0.9rem; font-weight: 600;">{{ $audit->submission->company_name ?? $audit->submission->user->name ?? 'N/A' }}</h6>
                                    <small class="text-secondary-light">{{ $audit->audit_type ?? 'Audit Halal' }}</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-secondary-light" style="font-size: 0.875rem;">
                                <i class="ri-time-line"></i>
                                <span>{{ $audit->planned_start_date ? $audit->planned_start_date->format('d M Y - H:i') : 'Belum dijadwalkan' }} WIB</span>
                            </div>
                        </div>
                        <span class="badge-custom badge-{{ $audit->status == 'planned' ? 'info' : 'warning' }}">
                            {{ ucfirst($audit->status) }}
                        </span>
                    </div>
                    @empty
                    <div class="text-center py-4">
                        <i class="ri-calendar-line" style="font-size: 3rem; color: var(--neutral-400);"></i>
                        <p class="text-secondary-light mt-2">Tidak ada audit yang dijadwalkan</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Permohonan Terbaru</h5>
                    <a href="{{ route('admin.submissions.index') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
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
                                <td><strong>{{ $submission->submission_number ?? '-' }}</strong></td>
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
                                    <span class="badge-custom badge-{{ $statusBadge }}">{{ $statusLabel }}</span>
                                </td>
                                <td>{{ $submission->created_at->format('d M Y') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">
                                    <i class="ri-file-list-line" style="font-size: 2rem; color: var(--neutral-400);"></i>
                                    <p class="text-secondary-light mt-2 mb-0">Belum ada permohonan</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
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
                height: 350,
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
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
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
                height: 350
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
