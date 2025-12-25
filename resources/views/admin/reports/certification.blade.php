<x-layouts.admin.app>
    <x-slot name="title">Laporan Sertifikasi</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Sertifikasi</h2>
            <p class="text-secondary-light mb-0">Laporan statistik dan data sertifikasi halal</p>
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
                    <i class="ri-file-list-3-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Permohonan</div>
                    <div class="stat-value">489</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        12% dari periode sebelumnya
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
                    <div class="stat-value">325</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        66% dari total
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
                    <div class="stat-value">164</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        34% dari total
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
                    <div class="stat-value">432</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        88% approval rate
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
                    <div class="stat-value">35</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        7% rejection rate
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
                    <div class="stat-value">22</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        5% sedang diproses
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
                    <div class="stat-label">Waktu Rata-rata</div>
                    <div class="stat-value">14 Hari</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        3 hari lebih cepat
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
                    <div class="stat-value">1,234</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
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
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-outline-primary active">6 Bulan</button>
                        <button type="button" class="btn btn-outline-primary">12 Bulan</button>
                        <button type="button" class="btn btn-outline-primary">Tahun Ini</button>
                    </div>
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
                    <h5 class="card-title mb-0">Permohonan Berdasarkan Wilayah</h5>
                </div>
                <div id="regionChart"></div>
            </div>
        </div>
    </div>

    <!-- Detailed Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Detail Permohonan Sertifikasi</h5>
                    <div class="d-flex gap-2">
                        <input type="search" class="form-control form-control-sm" placeholder="Cari permohonan..." style="width: 250px;">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Permohonan</th>
                                <th>Pelaku Usaha</th>
                                <th>Jenis</th>
                                <th>Status</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Tanggal Selesai</th>
                                <th>Durasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>#SH2024-156</strong></td>
                                <td>PT. Halal Jaya Makmur</td>
                                <td><span class="badge-custom badge-info">Baru</span></td>
                                <td><span class="badge-custom badge-success">Disetujui</span></td>
                                <td>20 Des 2024</td>
                                <td>24 Des 2024</td>
                                <td>4 hari</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>#SH2024-155</strong></td>
                                <td>CV. Berkah Selalu</td>
                                <td><span class="badge-custom badge-warning">Perpanjangan</span></td>
                                <td><span class="badge-custom badge-success">Disetujui</span></td>
                                <td>18 Des 2024</td>
                                <td>22 Des 2024</td>
                                <td>4 hari</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>#SH2024-154</strong></td>
                                <td>UD. Maju Bersama</td>
                                <td><span class="badge-custom badge-info">Baru</span></td>
                                <td><span class="badge-custom badge-purple">Dalam Proses</span></td>
                                <td>15 Des 2024</td>
                                <td>-</td>
                                <td>9 hari</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>#SH2024-153</strong></td>
                                <td>PT. Sejahtera Halal</td>
                                <td><span class="badge-custom badge-warning">Perpanjangan</span></td>
                                <td><span class="badge-custom badge-success">Disetujui</span></td>
                                <td>12 Des 2024</td>
                                <td>20 Des 2024</td>
                                <td>8 hari</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>#SH2024-152</strong></td>
                                <td>CV. Barokah Rezeki</td>
                                <td><span class="badge-custom badge-info">Baru</span></td>
                                <td><span class="badge-custom badge-danger">Ditolak</span></td>
                                <td>10 Des 2024</td>
                                <td>18 Des 2024</td>
                                <td>8 hari</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong>#SH2024-151</strong></td>
                                <td>UD. Rizki Melimpah</td>
                                <td><span class="badge-custom badge-info">Baru</span></td>
                                <td><span class="badge-custom badge-success">Disetujui</span></td>
                                <td>8 Des 2024</td>
                                <td>16 Des 2024</td>
                                <td>8 hari</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong>#SH2024-150</strong></td>
                                <td>PT. Berkah Usaha</td>
                                <td><span class="badge-custom badge-warning">Perpanjangan</span></td>
                                <td><span class="badge-custom badge-success">Disetujui</span></td>
                                <td>5 Des 2024</td>
                                <td>14 Des 2024</td>
                                <td>9 hari</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong>#SH2024-149</strong></td>
                                <td>CV. Amanah Jaya</td>
                                <td><span class="badge-custom badge-info">Baru</span></td>
                                <td><span class="badge-custom badge-success">Disetujui</span></td>
                                <td>3 Des 2024</td>
                                <td>12 Des 2024</td>
                                <td>9 hari</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="text-secondary-light">
                        Menampilkan 1 sampai 8 dari 489 permohonan
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
                            <li class="page-item"><a class="page-link" href="#">62</a></li>
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
        // Monthly Trend Chart
        var monthlyTrendOptions = {
            series: [{
                name: 'Baru',
                data: [45, 52, 48, 65, 58, 72]
            }, {
                name: 'Perpanjangan',
                data: [24, 28, 22, 35, 30, 38]
            }],
            chart: {
                type: 'line',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            colors: ['#166F61', '#f59e0b'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 3
            },
            xaxis: {
                categories: ['Jul 2024', 'Agu 2024', 'Sep 2024', 'Okt 2024', 'Nov 2024', 'Des 2024']
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

        // Status Distribution Chart (Pie)
        var statusDistributionOptions = {
            series: [432, 35, 22],
            chart: {
                type: 'pie',
                height: 350
            },
            labels: ['Disetujui', 'Ditolak', 'Dalam Proses'],
            colors: ['#10b981', '#ef4444', '#7c3aed'],
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

        // Region Chart (Bar)
        var regionOptions = {
            series: [{
                name: 'Permohonan',
                data: [89, 76, 65, 54, 48, 42, 35, 28, 22, 18]
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
                categories: ['Kota Sukabumi', 'Kab. Sukabumi', 'Bogor', 'Cianjur', 'Bandung', 'Garut', 'Tasikmalaya', 'Ciamis', 'Cirebon', 'Jakarta'],
                title: {
                    text: 'Jumlah Permohonan'
                }
            },
            yaxis: {
                title: {
                    text: 'Wilayah'
                }
            }
        };
        var regionChart = new ApexCharts(document.querySelector("#regionChart"), regionOptions);
        regionChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
