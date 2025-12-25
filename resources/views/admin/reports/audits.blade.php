<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Audit</h2>
            <p class="text-secondary-light mb-0">Laporan statistik dan data audit halal</p>
        </div>
        <div>
            <button class="btn btn-primary" onclick="window.print()">
                <i class="ri-download-line me-2"></i>
                Export PDF
            </button>
        </div>
    </div>

    <!-- Date Filter -->
    <div class="card-custom mb-4">
        <form method="GET" action="{{ route('admin.reports.audits') }}">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Tanggal Mulai</label>
                    <input type="date" name="start_date" class="form-control"
                           value="{{ request('start_date', $startDate instanceof \Carbon\Carbon ? $startDate->format('Y-m-d') : $startDate) }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Tanggal Akhir</label>
                    <input type="date" name="end_date" class="form-control"
                           value="{{ request('end_date', $endDate instanceof \Carbon\Carbon ? $endDate->format('Y-m-d') : $endDate) }}">
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="ri-filter-line me-1"></i> Filter
                    </button>
                    <a href="{{ route('admin.reports.audits') }}" class="btn btn-outline-secondary">
                        <i class="ri-refresh-line me-1"></i> Reset
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- Audit Statistics -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Total Audit</div>
                <div style="font-size: 1.75rem; font-weight: 700;">{{ $auditStats['total'] ?? 0 }}</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Selesai</div>
                <div style="font-size: 1.75rem; font-weight: 700;">{{ $auditStats['completed'] ?? 0 }}</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Dalam Proses</div>
                <div style="font-size: 1.75rem; font-weight: 700;">{{ $auditStats['in_progress'] ?? 0 }}</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Direncanakan</div>
                <div style="font-size: 1.75rem; font-weight: 700;">{{ $auditStats['planned'] ?? 0 }}</div>
            </div>
        </div>
    </div>

    <!-- Audit Results & Compliance -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid #10b981;">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Lulus</div>
                <div style="font-size: 1.75rem; font-weight: 700;">{{ $auditStats['passed'] ?? 0 }}</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid #f59e0b;">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Lulus Bersyarat</div>
                <div style="font-size: 1.75rem; font-weight: 700;">{{ $auditStats['conditional'] ?? 0 }}</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid #ef4444;">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Tidak Lulus</div>
                <div style="font-size: 1.75rem; font-weight: 700;">{{ $auditStats['failed'] ?? 0 }}</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Rata-rata Kepatuhan</div>
                <div style="font-size: 1.75rem; font-weight: 700;">{{ number_format($avgCompliance ?? 0, 1) }}%</div>
            </div>
        </div>
    </div>

    <!-- Finding Statistics -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Statistik Temuan</h5>
                <div class="row g-3">
                    <div class="col-md-2">
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Total Temuan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $findingStats['total'] ?? 0 }}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Kritis</div>
                        <div style="font-size: 1.5rem; font-weight: 700; color: #ef4444;">{{ $findingStats['critical'] ?? 0 }}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Mayor</div>
                        <div style="font-size: 1.5rem; font-weight: 700; color: #f59e0b;">{{ $findingStats['major'] ?? 0 }}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Minor</div>
                        <div style="font-size: 1.5rem; font-weight: 700; color: #eab308;">{{ $findingStats['minor'] ?? 0 }}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Observasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700; color: #3b82f6;">{{ $findingStats['observation'] ?? 0 }}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Tingkat Resolusi</div>
                        <div style="font-size: 1.5rem; font-weight: 700; color: #10b981;">{{ number_format($resolutionRate ?? 0, 1) }}%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-3 mb-4">
        <!-- Monthly Audit Trend -->
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Tren Audit Bulanan & Skor Kepatuhan</h5>
                <div id="monthlyAuditChart" style="height: 350px;"></div>
            </div>
        </div>

        <!-- Audit Type Distribution -->
        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Distribusi Tipe Audit</h5>
                <div id="auditTypeChart" style="height: 350px;"></div>
            </div>
        </div>
    </div>

    <!-- Finding Resolution Status -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Status Resolusi Temuan</h5>
                <div id="findingResolutionChart" style="height: 300px;"></div>
            </div>
        </div>

        <!-- Finding Severity Distribution -->
        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Distribusi Tingkat Keparahan Temuan</h5>
                <div id="findingSeverityChart" style="height: 300px;"></div>
            </div>
        </div>
    </div>

    <!-- Auditor Performance Table -->
    <div class="card-custom">
        <h5 class="mb-3" style="font-weight: 600;">Kinerja Auditor</h5>
        <div class="table-responsive">
            <table class="table table-hover">
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
                                <span class="badge" style="background-color: {{ $auditor->avg_score >= 80 ? '#10b981' : ($auditor->avg_score >= 60 ? '#f59e0b' : '#ef4444') }};">
                                    {{ number_format($auditor->avg_score, 1) }}%
                                </span>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td class="text-center"><span class="badge bg-success">{{ $auditor->passed_count }}</span></td>
                        <td class="text-center"><span class="badge bg-warning">{{ $auditor->conditional_count }}</span></td>
                        <td class="text-center"><span class="badge bg-danger">{{ $auditor->failed_count }}</span></td>
                        <td class="text-center">
                            @php
                                $successRate = $auditor->total_audits > 0
                                    ? round((($auditor->passed_count + $auditor->conditional_count) / $auditor->total_audits) * 100, 1)
                                    : 0;
                            @endphp
                            <span class="badge" style="background-color: {{ $successRate >= 80 ? '#10b981' : ($successRate >= 60 ? '#f59e0b' : '#ef4444') }};">
                                {{ number_format($successRate, 1) }}%
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Tidak ada data auditor</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
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
                colors: ['#487FFF', '#10b981']
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
                colors: ['#487FFF', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6'],
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
                colors: ['#ef4444', '#f59e0b', '#3b82f6', '#10b981', '#6b7280'],
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
                colors: ['#ef4444', '#f59e0b', '#eab308', '#3b82f6'],
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
