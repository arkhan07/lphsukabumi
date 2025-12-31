<x-layouts.admin.app>
    <x-slot name="title">Laporan Sertifikasi</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Laporan</div>
                    <h2 class="page-title">Sertifikasi</h2>
                    <p class="text-muted mt-1">Laporan statistik dan data sertifikasi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <button class="btn btn-success d-none d-sm-inline-block" onclick="exportReport('excel')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 13h4" /><path d="M12 11v6" /></svg>
                            Export Excel
                        </button>
                        <button class="btn btn-danger d-none d-sm-inline-block" onclick="exportReport('pdf')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 17h6" /><path d="M9 13h6" /></svg>
                            Export PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Date Range Filter -->
            <form method="GET" action="{{ route('admin.reports.certification') }}" class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label required">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="start_date" value="{{ $startDate }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label required">Tanggal Akhir</label>
                            <input type="date" class="form-control" name="end_date" value="{{ $endDate }}">
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Filter Data</button>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Statistics Cards Row 1 -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Permohonan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $submissionStats['total'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="text-muted">Periode yang dipilih</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Permohonan Baru</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $submissionStats['new'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-cyan-lt">{{ $submissionStats['total'] > 0 ? round(($submissionStats['new'] / $submissionStats['total']) * 100, 1) : 0 }}%</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>dari total permohonan</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Perpanjangan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $submissionStats['renewal'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-yellow-lt">{{ $submissionStats['total'] > 0 ? round(($submissionStats['renewal'] / $submissionStats['total']) * 100, 1) : 0 }}%</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>dari total permohonan</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Disetujui</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-green">{{ $statusStats['approved'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-green-lt">{{ $submissionStats['total'] > 0 ? round(($statusStats['approved'] / $submissionStats['total']) * 100, 1) : 0 }}%</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>approval rate</small></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards Row 2 -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Ditolak</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-red">{{ $statusStats['rejected'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-red-lt">{{ $submissionStats['total'] > 0 ? round(($statusStats['rejected'] / $submissionStats['total']) * 100, 1) : 0 }}%</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>rejection rate</small></div>
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
                                <div class="h1 mb-0 me-2 text-purple">{{ $statusStats['in_progress'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-purple-lt">{{ $submissionStats['total'] > 0 ? round(($statusStats['in_progress'] / $submissionStats['total']) * 100, 1) : 0 }}%</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>sedang diproses</small></div>
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
                                <div class="h1 mb-0 me-2 text-green">{{ $statusStats['completed'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="text-green">Terselesaikan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Sertifikat Aktif</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-cyan">{{ $certificateStats['certified'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="text-muted">Total keseluruhan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row row-cards mb-3">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tren Permohonan Bulanan</h3>
                        </div>
                        <div class="card-body">
                            <div id="monthlyTrendChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Distribusi Status</h3>
                        </div>
                        <div class="card-body">
                            <div id="statusDistributionChart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Business Type Chart -->
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Permohonan Berdasarkan Jenis Usaha</h3>
                </div>
                <div class="card-body">
                    <div id="businessTypeChart"></div>
                </div>
            </div>

            <!-- Summary Statistics -->
            <div class="row row-cards mb-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ringkasan Permohonan</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Total:</span>
                                <strong>{{ $submissionStats['total'] ?? 0 }}</strong>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Baru:</span>
                                <strong class="text-cyan">{{ $submissionStats['new'] ?? 0 }}</strong>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Perpanjangan:</span>
                                <strong class="text-yellow">{{ $submissionStats['renewal'] ?? 0 }}</strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Perubahan:</span>
                                <strong class="text-blue">{{ $submissionStats['extension'] ?? 0 }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Permohonan</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Draft:</span>
                                <span class="badge bg-secondary-lt">{{ $statusStats['draft'] ?? 0 }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Dalam Proses:</span>
                                <span class="badge bg-purple-lt">{{ $statusStats['in_progress'] ?? 0 }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Disetujui:</span>
                                <span class="badge bg-green-lt">{{ $statusStats['approved'] ?? 0 }}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Ditolak:</span>
                                <span class="badge bg-red-lt">{{ $statusStats['rejected'] ?? 0 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Sertifikat</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Tersertifikasi:</span>
                                <strong class="text-green">{{ $certificateStats['certified'] ?? 0 }}</strong>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Pending:</span>
                                <strong class="text-yellow">{{ $certificateStats['pending_certification'] ?? 0 }}</strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Ditolak:</span>
                                <strong class="text-red">{{ $certificateStats['rejected'] ?? 0 }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Monthly Trend Chart
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
            colors: ['#206bc4'],
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
        new ApexCharts(document.querySelector("#monthlyTrendChart"), monthlyTrendOptions).render();

        // Status Distribution Chart
        var statusDistributionOptions = {
            series: [
                {{ $statusStats['approved'] ?? 0 }},
                {{ $statusStats['rejected'] ?? 0 }},
                {{ $statusStats['in_progress'] ?? 0 }},
                {{ $statusStats['completed'] ?? 0 }}
            ],
            chart: {
                type: 'pie',
                height: 240
            },
            labels: ['Disetujui', 'Ditolak', 'Dalam Proses', 'Selesai'],
            colors: ['#2fb344', '#d63939', '#ae3ec9', '#206bc4'],
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
        new ApexCharts(document.querySelector("#statusDistributionChart"), statusDistributionOptions).render();

        // Business Type Chart
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
            colors: ['#206bc4'],
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
                    colors: ['#206bc4']
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
        new ApexCharts(document.querySelector("#businessTypeChart"), businessTypeOptions).render();

        // Export function
        function exportReport(format) {
            const startDate = document.querySelector('input[name="start_date"]').value;
            const endDate = document.querySelector('input[name="end_date"]').value;
            const url = `{{ route('admin.reports.certification') }}?export=${format}&start_date=${startDate}&end_date=${endDate}`;
            window.location.href = url;
        }
    </script>
    @endpush
</x-layouts.admin.app>
