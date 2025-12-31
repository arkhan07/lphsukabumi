<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Laporan</div>
                    <h2 class="page-title">Audit</h2>
                    <p class="text-muted mt-1">Laporan statistik dan data audit halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <button class="btn btn-primary" onclick="window.print()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg>
                        Export PDF
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Date Filter -->
            <form method="GET" action="{{ route('admin.reports.audits') }}" class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label required">Tanggal Mulai</label>
                            <input type="date" name="start_date" class="form-control"
                                   value="{{ request('start_date', $startDate instanceof \Carbon\Carbon ? $startDate->format('Y-m-d') : $startDate) }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label required">Tanggal Akhir</label>
                            <input type="date" name="end_date" class="form-control"
                                   value="{{ request('end_date', $endDate instanceof \Carbon\Carbon ? $endDate->format('Y-m-d') : $endDate) }}">
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary me-2">Filter</button>
                            <a href="{{ route('admin.reports.audits') }}" class="btn btn-outline-secondary">Reset</a>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Audit Statistics Row 1 -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Audit</div>
                            </div>
                            <div class="h1 mb-0 mt-1">{{ $auditStats['total'] ?? 0 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Selesai</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 mt-1">{{ $auditStats['completed'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-green-lt">Selesai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Dalam Proses</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 mt-1">{{ $auditStats['in_progress'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-yellow-lt">Proses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Direncanakan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 mt-1">{{ $auditStats['planned'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-cyan-lt">Planned</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Audit Results & Compliance -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Lulus</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 mt-1 text-green">{{ $auditStats['passed'] ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Lulus Bersyarat</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 mt-1 text-yellow">{{ $auditStats['conditional'] ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Tidak Lulus</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 mt-1 text-red">{{ $auditStats['failed'] ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Rata-rata Kepatuhan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 mt-1 text-blue">{{ number_format($avgCompliance ?? 0, 1) }}%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Finding Statistics -->
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Statistik Temuan</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="subheader">Total Temuan</div>
                            <div class="h2 mb-0">{{ $findingStats['total'] ?? 0 }}</div>
                        </div>
                        <div class="col-md-2">
                            <div class="subheader">Kritis</div>
                            <div class="h2 mb-0 text-red">{{ $findingStats['critical'] ?? 0 }}</div>
                        </div>
                        <div class="col-md-2">
                            <div class="subheader">Mayor</div>
                            <div class="h2 mb-0 text-orange">{{ $findingStats['major'] ?? 0 }}</div>
                        </div>
                        <div class="col-md-2">
                            <div class="subheader">Minor</div>
                            <div class="h2 mb-0 text-yellow">{{ $findingStats['minor'] ?? 0 }}</div>
                        </div>
                        <div class="col-md-2">
                            <div class="subheader">Observasi</div>
                            <div class="h2 mb-0 text-blue">{{ $findingStats['observation'] ?? 0 }}</div>
                        </div>
                        <div class="col-md-2">
                            <div class="subheader">Tingkat Resolusi</div>
                            <div class="h2 mb-0 text-green">{{ number_format($resolutionRate ?? 0, 1) }}%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row row-cards mb-3">
                <!-- Monthly Audit Trend -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tren Audit Bulanan & Skor Kepatuhan</h3>
                        </div>
                        <div class="card-body">
                            <div id="monthlyAuditChart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Audit Type Distribution -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Distribusi Tipe Audit</h3>
                        </div>
                        <div class="card-body">
                            <div id="auditTypeChart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Finding Resolution & Severity -->
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Resolusi Temuan</h3>
                        </div>
                        <div class="card-body">
                            <div id="findingResolutionChart" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Finding Severity Distribution -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Distribusi Tingkat Keparahan Temuan</h3>
                        </div>
                        <div class="card-body">
                            <div id="findingSeverityChart" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Auditor Performance Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kinerja Auditor</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <thead>
                            <tr>
                                <th>Nama Auditor</th>
                                <th class="text-center">Total Audit</th>
                                <th class="text-center">Rata-rata Skor</th>
                                <th class="text-center">Lulus</th>
                                <th class="text-center">Lulus Bersyarat</th>
                                <th class="text-center">Tidak Lulus</th>
                                <th class="text-center">Tingkat Keberhasilan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($auditorPerformance as $auditor)
                            <tr>
                                <td><strong>{{ $auditor->name }}</strong></td>
                                <td class="text-center">{{ $auditor->total_audits }}</td>
                                <td class="text-center">
                                    @if($auditor->avg_score)
                                        <span class="badge {{ $auditor->avg_score >= 80 ? 'bg-green-lt' : ($auditor->avg_score >= 60 ? 'bg-yellow-lt' : 'bg-red-lt') }}">
                                            {{ number_format($auditor->avg_score, 1) }}%
                                        </span>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td class="text-center"><span class="badge bg-green-lt">{{ $auditor->passed_count }}</span></td>
                                <td class="text-center"><span class="badge bg-yellow-lt">{{ $auditor->conditional_count }}</span></td>
                                <td class="text-center"><span class="badge bg-red-lt">{{ $auditor->failed_count }}</span></td>
                                <td class="text-center">
                                    @php
                                        $successRate = $auditor->total_audits > 0
                                            ? round((($auditor->passed_count + $auditor->conditional_count) / $auditor->total_audits) * 100, 1)
                                            : 0;
                                    @endphp
                                    <span class="badge {{ $successRate >= 80 ? 'bg-green-lt' : ($successRate >= 60 ? 'bg-yellow-lt' : 'bg-red-lt') }}">
                                        {{ number_format($successRate, 1) }}%
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 10l.01 0" /><path d="M15 10l.01 0" /><path d="M9.5 15a3.5 3.5 0 0 0 5 0" /></svg>
                                    <div>Tidak ada data auditor</div>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Monthly Audit Trend Chart
            const monthlyData = @json($monthlyAudits);
            const monthlyAuditOptions = {
                series: [
                    {
                        name: 'Jumlah Audit',
                        type: 'column',
                        data: monthlyData.map(item => item.total || 0)
                    },
                    {
                        name: 'Rata-rata Skor Kepatuhan',
                        type: 'line',
                        data: monthlyData.map(item => item.avg_score ? parseFloat(item.avg_score).toFixed(1) : 0)
                    }
                ],
                chart: {
                    height: 350,
                    type: 'line',
                    toolbar: {
                        show: true
                    }
                },
                stroke: {
                    width: [0, 4]
                },
                dataLabels: {
                    enabled: true,
                    enabledOnSeries: [1]
                },
                labels: monthlyData.map(item => {
                    const date = new Date(item.month + '-01');
                    return date.toLocaleDateString('id-ID', { month: 'short', year: 'numeric' });
                }),
                xaxis: {
                    type: 'category'
                },
                yaxis: [
                    {
                        title: {
                            text: 'Jumlah Audit'
                        }
                    },
                    {
                        opposite: true,
                        title: {
                            text: 'Skor Kepatuhan (%)'
                        },
                        min: 0,
                        max: 100
                    }
                ],
                colors: ['#206bc4', '#2fb344']
            };
            const monthlyAuditChart = new ApexCharts(document.querySelector("#monthlyAuditChart"), monthlyAuditOptions);
            monthlyAuditChart.render();

            // Audit Type Distribution Chart
            const auditTypes = @json($auditTypes);
            const auditTypeOptions = {
                series: auditTypes.map(item => item.total),
                chart: {
                    type: 'donut',
                    height: 350
                },
                labels: auditTypes.map(item => {
                    const typeLabels = {
                        'surveillance_1': 'Surveillance 1',
                        'surveillance_2': 'Surveillance 2',
                        'recertification': 'Resertifikasi',
                        'initial': 'Sertifikasi Awal',
                        'special': 'Audit Khusus'
                    };
                    return typeLabels[item.audit_type] || item.audit_type;
                }),
                colors: ['#206bc4', '#2fb344', '#f59f00', '#d63939', '#ae3ec9'],
                legend: {
                    position: 'bottom'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };
            const auditTypeChart = new ApexCharts(document.querySelector("#auditTypeChart"), auditTypeOptions);
            auditTypeChart.render();

            // Finding Resolution Chart
            const findingResolution = @json($findingResolution);
            const findingResolutionOptions = {
                series: [{
                    name: 'Jumlah',
                    data: [
                        findingResolution.open || 0,
                        findingResolution.in_progress || 0,
                        findingResolution.resolved || 0,
                        findingResolution.verified || 0,
                        findingResolution.closed || 0
                    ]
                }],
                chart: {
                    type: 'bar',
                    height: 300,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        borderRadius: 4,
                        horizontal: true,
                        distributed: true,
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
                        colors: ['#304758']
                    }
                },
                xaxis: {
                    categories: ['Terbuka', 'Dalam Proses', 'Diselesaikan', 'Diverifikasi', 'Ditutup']
                },
                colors: ['#d63939', '#f59f00', '#206bc4', '#2fb344', '#6c757d'],
                legend: {
                    show: false
                }
            };
            const findingResolutionChart = new ApexCharts(document.querySelector("#findingResolutionChart"), findingResolutionOptions);
            findingResolutionChart.render();

            // Finding Severity Distribution Chart
            const findingStats = @json($findingStats);
            const findingSeverityOptions = {
                series: [
                    findingStats.critical || 0,
                    findingStats.major || 0,
                    findingStats.minor || 0,
                    findingStats.observation || 0
                ],
                chart: {
                    type: 'pie',
                    height: 300
                },
                labels: ['Kritis', 'Mayor', 'Minor', 'Observasi'],
                colors: ['#d63939', '#f59f00', '#fab005', '#206bc4'],
                legend: {
                    position: 'bottom'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };
            const findingSeverityChart = new ApexCharts(document.querySelector("#findingSeverityChart"), findingSeverityOptions);
            findingSeverityChart.render();
        });
    </script>
    @endpush
</x-layouts.admin.app>
