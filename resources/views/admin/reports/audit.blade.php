<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Audit</h2>
            <p class="text-secondary-light mb-0">Laporan hasil audit dan inspeksi halal</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-success">
                <i class="ri-file-excel-2-line me-2"></i>
                Export Excel
            </button>
            <button class="btn btn-danger">
                <i class="ri-file-pdf-line me-2"></i>
                Export PDF
            </button>
        </div>
    </div>

    <!-- Date Range Filter -->
    <div class="card-custom mb-4">
        <div class="row g-3">
            <div class="col-12 col-md-4">
                <label for="startDate" class="form-label" style="font-weight: 500;">Tanggal Mulai</label>
                <input type="date" class="form-control" id="startDate" value="{{ date('Y-m-01') }}">
            </div>
            <div class="col-12 col-md-4">
                <label for="endDate" class="form-label" style="font-weight: 500;">Tanggal Akhir</label>
                <input type="date" class="form-control" id="endDate" value="{{ date('Y-m-d') }}">
            </div>
            <div class="col-12 col-md-4 d-flex align-items-end">
                <button class="btn btn-primary w-100">
                    <i class="ri-filter-line me-2"></i>
                    Filter Data
                </button>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon primary">
                    <i class="ri-file-search-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Audit</div>
                    <div class="stat-value">342</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        15% dari periode sebelumnya
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
                    <div class="stat-label">Audit Selesai</div>
                    <div class="stat-value">298</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        87% completion rate
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon warning">
                    <i class="ri-alert-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Temuan</div>
                    <div class="stat-value">126</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        8% lebih rendah
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-star-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Skor Rata-rata</div>
                    <div class="stat-value">87.5</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        3.2 poin lebih tinggi
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
                    <div class="stat-label">Temuan Kritis</div>
                    <div class="stat-value">18</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        14% dari total temuan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon warning">
                    <i class="ri-error-warning-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Temuan Mayor</div>
                    <div class="stat-value">42</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        33% dari total temuan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-information-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Temuan Minor</div>
                    <div class="stat-value">66</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        53% dari total temuan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="ri-timer-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Waktu Rata-rata Audit</div>
                    <div class="stat-value">4.5 Jam</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        30 menit lebih efisien
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
                    <h5 class="card-title mb-0">Distribusi Hasil Audit</h5>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary active">Bulanan</button>
                        <button type="button" class="btn btn-outline-primary">Mingguan</button>
                        <button type="button" class="btn btn-outline-primary">Harian</button>
                    </div>
                </div>
                <div id="auditResultsChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Temuan Berdasarkan Tingkat</h5>
                </div>
                <div id="findingsSeverityChart"></div>
            </div>
        </div>
    </div>

    <!-- Charts Row 2 -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Performa Auditor</h5>
                </div>
                <div id="auditorPerformanceChart"></div>
            </div>
        </div>
    </div>

    <!-- Detailed Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Detail Audit & Temuan</h5>
                    <div class="d-flex gap-2">
                        <select class="form-select form-select-sm" style="width: 150px;">
                            <option>Semua Status</option>
                            <option>Selesai</option>
                            <option>Dalam Proses</option>
                            <option>Terjadwal</option>
                        </select>
                        <input type="search" class="form-control form-control-sm" placeholder="Cari audit..." style="width: 250px;">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Audit</th>
                                <th>Pelaku Usaha</th>
                                <th>Auditor</th>
                                <th>Tanggal Audit</th>
                                <th>Skor</th>
                                <th>Temuan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>#AUD-2024-342</strong></td>
                                <td>PT. Halal Jaya Makmur</td>
                                <td>Ahmad Fauzi, S.T.</td>
                                <td>22 Des 2024</td>
                                <td><span class="badge-custom badge-success">92</span></td>
                                <td>
                                    <span class="badge bg-danger">0 Kritis</span>
                                    <span class="badge bg-warning">1 Mayor</span>
                                    <span class="badge bg-info">2 Minor</span>
                                </td>
                                <td><span class="badge-custom badge-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>#AUD-2024-341</strong></td>
                                <td>CV. Berkah Selalu</td>
                                <td>Siti Nurhaliza, M.T.</td>
                                <td>20 Des 2024</td>
                                <td><span class="badge-custom badge-success">88</span></td>
                                <td>
                                    <span class="badge bg-danger">0 Kritis</span>
                                    <span class="badge bg-warning">2 Mayor</span>
                                    <span class="badge bg-info">3 Minor</span>
                                </td>
                                <td><span class="badge-custom badge-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>#AUD-2024-340</strong></td>
                                <td>UD. Maju Bersama</td>
                                <td>Budi Santoso, S.T.</td>
                                <td>18 Des 2024</td>
                                <td><span class="badge-custom badge-warning">75</span></td>
                                <td>
                                    <span class="badge bg-danger">1 Kritis</span>
                                    <span class="badge bg-warning">3 Mayor</span>
                                    <span class="badge bg-info">4 Minor</span>
                                </td>
                                <td><span class="badge-custom badge-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>#AUD-2024-339</strong></td>
                                <td>PT. Sejahtera Halal</td>
                                <td>Ahmad Fauzi, S.T.</td>
                                <td>15 Des 2024</td>
                                <td><span class="badge-custom badge-success">95</span></td>
                                <td>
                                    <span class="badge bg-danger">0 Kritis</span>
                                    <span class="badge bg-warning">0 Mayor</span>
                                    <span class="badge bg-info">1 Minor</span>
                                </td>
                                <td><span class="badge-custom badge-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>#AUD-2024-338</strong></td>
                                <td>CV. Barokah Rezeki</td>
                                <td>Dewi Lestari, M.Sc.</td>
                                <td>12 Des 2024</td>
                                <td><span class="badge-custom badge-danger">65</span></td>
                                <td>
                                    <span class="badge bg-danger">2 Kritis</span>
                                    <span class="badge bg-warning">4 Mayor</span>
                                    <span class="badge bg-info">5 Minor</span>
                                </td>
                                <td><span class="badge-custom badge-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong>#AUD-2024-337</strong></td>
                                <td>UD. Rizki Melimpah</td>
                                <td>Siti Nurhaliza, M.T.</td>
                                <td>10 Des 2024</td>
                                <td><span class="badge-custom badge-success">90</span></td>
                                <td>
                                    <span class="badge bg-danger">0 Kritis</span>
                                    <span class="badge bg-warning">1 Mayor</span>
                                    <span class="badge bg-info">2 Minor</span>
                                </td>
                                <td><span class="badge-custom badge-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong>#AUD-2024-336</strong></td>
                                <td>PT. Berkah Usaha</td>
                                <td>Budi Santoso, S.T.</td>
                                <td>26 Des 2024</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="badge-custom badge-info">Terjadwal</span></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong>#AUD-2024-335</strong></td>
                                <td>CV. Amanah Jaya</td>
                                <td>Ahmad Fauzi, S.T.</td>
                                <td>24 Des 2024</td>
                                <td><span class="badge-custom badge-warning">-</span></td>
                                <td>-</td>
                                <td><span class="badge-custom badge-warning">Dalam Proses</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="text-secondary-light">
                        Menampilkan 1 sampai 8 dari 342 audit
                    </div>
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Sebelumnya</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">43</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Selanjutnya</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Audit Results Chart (Bar with multiple series)
        var auditResultsOptions = {
            series: [{
                name: 'Lulus',
                data: [42, 48, 45, 52, 49, 55]
            }, {
                name: 'Lulus dengan Temuan',
                data: [18, 22, 20, 24, 21, 26]
            }, {
                name: 'Tidak Lulus',
                data: [3, 4, 2, 5, 3, 4]
            }],
            chart: {
                type: 'bar',
                height: 350,
                stacked: false,
                toolbar: {
                    show: false
                }
            },
            colors: ['#10b981', '#f59e0b', '#ef4444'],
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    horizontal: false,
                    columnWidth: '60%',
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['Jul 2024', 'Agu 2024', 'Sep 2024', 'Okt 2024', 'Nov 2024', 'Des 2024']
            },
            yaxis: {
                title: {
                    text: 'Jumlah Audit'
                }
            },
            legend: {
                position: 'top'
            }
        };
        var auditResultsChart = new ApexCharts(document.querySelector("#auditResultsChart"), auditResultsOptions);
        auditResultsChart.render();

        // Findings Severity Chart (Donut)
        var findingsSeverityOptions = {
            series: [18, 42, 66],
            chart: {
                type: 'donut',
                height: 350
            },
            labels: ['Kritis', 'Mayor', 'Minor'],
            colors: ['#ef4444', '#f59e0b', '#3b82f6'],
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
                                label: 'Total Temuan',
                                formatter: function(w) {
                                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                }
                            }
                        }
                    }
                }
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
        var findingsSeverityChart = new ApexCharts(document.querySelector("#findingsSeverityChart"), findingsSeverityOptions);
        findingsSeverityChart.render();

        // Auditor Performance Chart (Horizontal Bar)
        var auditorPerformanceOptions = {
            series: [{
                name: 'Jumlah Audit',
                data: [89, 76, 65, 54, 48]
            }, {
                name: 'Skor Rata-rata',
                data: [92, 88, 85, 87, 90]
            }],
            chart: {
                type: 'bar',
                height: 400,
                toolbar: {
                    show: false
                }
            },
            colors: ['#166F61', '#f59e0b'],
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    horizontal: true,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                offsetX: 30,
                style: {
                    fontSize: '12px'
                }
            },
            xaxis: {
                categories: ['Ahmad Fauzi, S.T.', 'Siti Nurhaliza, M.T.', 'Budi Santoso, S.T.', 'Dewi Lestari, M.Sc.', 'Rizki Pratama, M.T.']
            },
            yaxis: {
                title: {
                    text: 'Auditor'
                }
            },
            legend: {
                position: 'top'
            }
        };
        var auditorPerformanceChart = new ApexCharts(document.querySelector("#auditorPerformanceChart"), auditorPerformanceOptions);
        auditorPerformanceChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
