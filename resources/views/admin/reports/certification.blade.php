<x-layouts.admin.app>
    <x-slot name="title">Laporan Sertifikasi</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Sertifikasi</h2>
            <p class="text-secondary-light mb-0">Laporan statistik dan data sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-success" onclick="exportReport('excel')">
                <i class="ri-file-excel-2-line me-2"></i>
                Export Excel
            </button>
            <button class="btn btn-danger" onclick="exportReport('pdf')">
                <i class="ri-file-pdf-line me-2"></i>
                Export PDF
            </button>
        </div>
    </div>

    <!-- Date Range Filter -->
    <div class="card-custom mb-4">
        <form method="GET" action="{{ route('admin.reports.certification') }}">
            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <label for="startDate" class="form-label" style="font-weight: 500;">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="startDate" name="start_date" value="{{ $startDate }}">
                </div>
                <div class="col-12 col-md-4">
                    <label for="endDate" class="form-label" style="font-weight: 500;">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="endDate" name="end_date" value="{{ $endDate }}">
                </div>
                <div class="col-12 col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="ri-filter-line me-2"></i>
                        Filter Data
                    </button>
                </div>
            </div>
        </form>
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
                    <div class="stat-value">{{ $submissionStats['total'] ?? 0 }}</div>
                    <div class="stat-trend {{ ($submissionStats['total'] ?? 0) > 0 ? 'up' : '' }}">
                        <i class="ri-calendar-line"></i>
                        Periode yang dipilih
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-file-add-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Permohonan Baru</div>
                    <div class="stat-value">{{ $submissionStats['new'] ?? 0 }}</div>
                    <div class="stat-trend">
                        <i class="ri-percent-line"></i>
                        {{ $submissionStats['total'] > 0 ? round(($submissionStats['new'] / $submissionStats['total']) * 100, 1) : 0 }}% dari total
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon warning">
                    <i class="ri-refresh-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Perpanjangan</div>
                    <div class="stat-value">{{ $submissionStats['renewal'] ?? 0 }}</div>
                    <div class="stat-trend">
                        <i class="ri-percent-line"></i>
                        {{ $submissionStats['total'] > 0 ? round(($submissionStats['renewal'] / $submissionStats['total']) * 100, 1) : 0 }}% dari total
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
                    <div class="stat-label">Disetujui</div>
                    <div class="stat-value">{{ $statusStats['approved'] ?? 0 }}</div>
                    <div class="stat-trend {{ ($statusStats['approved'] ?? 0) > 0 ? 'up' : '' }}">
                        <i class="ri-percent-line"></i>
                        {{ $submissionStats['total'] > 0 ? round(($statusStats['approved'] / $submissionStats['total']) * 100, 1) : 0 }}% approval rate
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
                    <i class="ri-close-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Ditolak</div>
                    <div class="stat-value">{{ $statusStats['rejected'] ?? 0 }}</div>
                    <div class="stat-trend">
                        <i class="ri-percent-line"></i>
                        {{ $submissionStats['total'] > 0 ? round(($statusStats['rejected'] / $submissionStats['total']) * 100, 1) : 0 }}% rejection rate
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="ri-time-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Dalam Proses</div>
                    <div class="stat-value">{{ $statusStats['in_progress'] ?? 0 }}</div>
                    <div class="stat-trend">
                        <i class="ri-percent-line"></i>
                        {{ $submissionStats['total'] > 0 ? round(($statusStats['in_progress'] / $submissionStats['total']) * 100, 1) : 0 }}% sedang diproses
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-timer-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Selesai</div>
                    <div class="stat-value">{{ $statusStats['completed'] ?? 0 }}</div>
                    <div class="stat-trend {{ ($statusStats['completed'] ?? 0) > 0 ? 'up' : '' }}">
                        <i class="ri-checkbox-line"></i>
                        Terselesaikan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-award-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Sertifikat Aktif</div>
                    <div class="stat-value">{{ $certificateStats['certified'] ?? 0 }}</div>
                    <div class="stat-trend up">
                        <i class="ri-shield-check-line"></i>
                        Total keseluruhan
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
                    <h5 class="card-title mb-0">Tren Permohonan Bulanan</h5>
                </div>
                <div id="monthlyTrendChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Distribusi Status</h5>
                </div>
                <div id="statusDistributionChart"></div>
            </div>
        </div>
    </div>

    <!-- Charts Row 2 -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Permohonan Berdasarkan Jenis Usaha</h5>
                </div>
                <div id="businessTypeChart"></div>
            </div>
        </div>
    </div>

    <!-- Summary Statistics -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card-custom">
                <h6 class="mb-3" style="font-weight: 600;">Ringkasan Permohonan</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Total:</span>
                    <strong>{{ $submissionStats['total'] ?? 0 }}</strong>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Baru:</span>
                    <strong class="text-info">{{ $submissionStats['new'] ?? 0 }}</strong>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Perpanjangan:</span>
                    <strong class="text-warning">{{ $submissionStats['renewal'] ?? 0 }}</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-secondary-light">Perubahan:</span>
                    <strong class="text-primary">{{ $submissionStats['extension'] ?? 0 }}</strong>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom">
                <h6 class="mb-3" style="font-weight: 600;">Status Permohonan</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Draft:</span>
                    <span class="badge bg-secondary">{{ $statusStats['draft'] ?? 0 }}</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Dalam Proses:</span>
                    <span class="badge bg-purple">{{ $statusStats['in_progress'] ?? 0 }}</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Disetujui:</span>
                    <span class="badge bg-success">{{ $statusStats['approved'] ?? 0 }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-secondary-light">Ditolak:</span>
                    <span class="badge bg-danger">{{ $statusStats['rejected'] ?? 0 }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom">
                <h6 class="mb-3" style="font-weight: 600;">Status Sertifikat</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Tersertifikasi:</span>
                    <strong class="text-success">{{ $certificateStats['certified'] ?? 0 }}</strong>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Pending:</span>
                    <strong class="text-warning">{{ $certificateStats['pending_certification'] ?? 0 }}</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-secondary-light">Ditolak:</span>
                    <strong class="text-danger">{{ $certificateStats['rejected'] ?? 0 }}</strong>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Monthly Trend Chart with real data
        var monthlyTrendOptions = {
            series: [{
                name: 'Permohonan',
                data: @json($monthlyTrend->pluck('total'))
            }],
            chart: {
                type: 'line',
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
                width: 3
            },
            xaxis: {
                categories: @json($monthlyTrend->pluck('month'))
            },
            yaxis: {
                title: {
                    text: 'Jumlah Permohonan'
                }
            },
            legend: {
                position: 'top'
            }
        };
        var monthlyTrendChart = new ApexCharts(document.querySelector("#monthlyTrendChart"), monthlyTrendOptions);
        monthlyTrendChart.render();

        // Status Distribution Chart (Pie) with real data
        var statusDistributionOptions = {
            series: [
                {{ $statusStats['approved'] ?? 0 }},
                {{ $statusStats['rejected'] ?? 0 }},
                {{ $statusStats['in_progress'] ?? 0 }},
                {{ $statusStats['completed'] ?? 0 }}
            ],
            chart: {
                type: 'pie',
                height: 350
            },
            labels: ['Disetujui', 'Ditolak', 'Dalam Proses', 'Selesai'],
            colors: ['#10b981', '#ef4444', '#7c3aed', '#166F61'],
            legend: {
                position: 'bottom'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 300
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var statusDistributionChart = new ApexCharts(document.querySelector("#statusDistributionChart"), statusDistributionOptions);
        statusDistributionChart.render();

        // Business Type Chart (Bar) with real data
        var businessTypeOptions = {
            series: [{
                name: 'Permohonan',
                data: @json($businessDistribution->pluck('total'))
            }],
            chart: {
                type: 'bar',
                height: 400,
                toolbar: {
                    show: false
                }
            },
            colors: ['#166F61'],
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    horizontal: true,
                    distributed: false,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                offsetX: 30,
                style: {
                    fontSize: '12px',
                    colors: ['#166F61']
                }
            },
            xaxis: {
                categories: @json($businessDistribution->pluck('name')),
                title: {
                    text: 'Jumlah Permohonan'
                }
            },
            yaxis: {
                title: {
                    text: 'Jenis Usaha'
                }
            }
        };
        var businessTypeChart = new ApexCharts(document.querySelector("#businessTypeChart"), businessTypeOptions);
        businessTypeChart.render();

        // Export function
        function exportReport(format) {
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            const url = `{{ route('admin.reports.certification') }}?export=${format}&start_date=${startDate}&end_date=${endDate}`;
            window.location.href = url;
        }
    </script>
    @endpush
</x-layouts.admin.app>
