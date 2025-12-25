<x-layouts.admin.app>
    <x-slot name="title">Laporan Keuangan</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Keuangan</h2>
            <p class="text-secondary-light mb-0">Laporan pendapatan dan pembayaran sertifikasi halal</p>
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
                    <i class="ri-money-dollar-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Pendapatan</div>
                    <div class="stat-value">Rp 145M</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        18% dari periode sebelumnya
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-check-double-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pembayaran Lunas</div>
                    <div class="stat-value">Rp 128M</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        88% dari total
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon danger">
                    <i class="ri-error-warning-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pembayaran Tertunggak</div>
                    <div class="stat-value">Rp 12M</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        8% dari total
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
                    <div class="stat-label">Pembayaran Pending</div>
                    <div class="stat-value">Rp 5M</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        4% dari total
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Stats Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-bar-chart-box-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Rata-rata per Invoice</div>
                    <div class="stat-value">Rp 297K</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        5% lebih tinggi
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="ri-file-text-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Invoice</div>
                    <div class="stat-value">489</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        62 invoice baru
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-calendar-check-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Waktu Rata-rata Bayar</div>
                    <div class="stat-value">3.5 Hari</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        1 hari lebih cepat
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-percent-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Tingkat Pelunasan</div>
                    <div class="stat-value">92%</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Target tercapai
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
                    <h5 class="card-title mb-0">Tren Pendapatan Bulanan</h5>
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-outline-primary active">6 Bulan</button>
                        <button type="button" class="btn btn-outline-primary">12 Bulan</button>
                        <button type="button" class="btn btn-outline-primary">Tahun Ini</button>
                    </div>
                </div>
                <div id="revenueTrendChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Metode Pembayaran</h5>
                </div>
                <div id="paymentMethodChart"></div>
            </div>
        </div>
    </div>

    <!-- Charts Row 2 -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Perbandingan Pendapatan per Bulan</h5>
                </div>
                <div id="monthlyComparisonChart"></div>
            </div>
        </div>
    </div>

    <!-- Detailed Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Detail Invoice & Pembayaran</h5>
                    <div class="d-flex gap-2">
                        <select class="form-select form-select-sm" style="width: 150px;">
                            <option>Semua Status</option>
                            <option>Lunas</option>
                            <option>Pending</option>
                            <option>Tertunggak</option>
                        </select>
                        <input type="search" class="form-control form-control-sm" placeholder="Cari invoice..." style="width: 250px;">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Invoice</th>
                                <th>Pelaku Usaha</th>
                                <th>Jumlah</th>
                                <th>Metode Bayar</th>
                                <th>Status</th>
                                <th>Tanggal Invoice</th>
                                <th>Tanggal Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>#INV-2024-489</strong></td>
                                <td>PT. Halal Jaya Makmur</td>
                                <td><strong>Rp 350.000</strong></td>
                                <td>Transfer Bank</td>
                                <td><span class="badge-custom badge-success">Lunas</span></td>
                                <td>20 Des 2024</td>
                                <td>22 Des 2024</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>#INV-2024-488</strong></td>
                                <td>CV. Berkah Selalu</td>
                                <td><strong>Rp 250.000</strong></td>
                                <td>E-Wallet</td>
                                <td><span class="badge-custom badge-success">Lunas</span></td>
                                <td>18 Des 2024</td>
                                <td>19 Des 2024</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>#INV-2024-487</strong></td>
                                <td>UD. Maju Bersama</td>
                                <td><strong>Rp 300.000</strong></td>
                                <td>Transfer Bank</td>
                                <td><span class="badge-custom badge-warning">Pending</span></td>
                                <td>15 Des 2024</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>#INV-2024-486</strong></td>
                                <td>PT. Sejahtera Halal</td>
                                <td><strong>Rp 275.000</strong></td>
                                <td>Transfer Bank</td>
                                <td><span class="badge-custom badge-success">Lunas</span></td>
                                <td>12 Des 2024</td>
                                <td>14 Des 2024</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>#INV-2024-485</strong></td>
                                <td>CV. Barokah Rezeki</td>
                                <td><strong>Rp 325.000</strong></td>
                                <td>QRIS</td>
                                <td><span class="badge-custom badge-success">Lunas</span></td>
                                <td>10 Des 2024</td>
                                <td>11 Des 2024</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong>#INV-2024-484</strong></td>
                                <td>UD. Rizki Melimpah</td>
                                <td><strong>Rp 280.000</strong></td>
                                <td>E-Wallet</td>
                                <td><span class="badge-custom badge-danger">Tertunggak</span></td>
                                <td>5 Des 2024</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong>#INV-2024-483</strong></td>
                                <td>PT. Berkah Usaha</td>
                                <td><strong>Rp 290.000</strong></td>
                                <td>Transfer Bank</td>
                                <td><span class="badge-custom badge-success">Lunas</span></td>
                                <td>3 Des 2024</td>
                                <td>6 Des 2024</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong>#INV-2024-482</strong></td>
                                <td>CV. Amanah Jaya</td>
                                <td><strong>Rp 310.000</strong></td>
                                <td>QRIS</td>
                                <td><span class="badge-custom badge-success">Lunas</span></td>
                                <td>1 Des 2024</td>
                                <td>2 Des 2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="text-secondary-light">
                        Menampilkan 1 sampai 8 dari 489 invoice
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
        // Revenue Trend Chart (Line)
        var revenueTrendOptions = {
            series: [{
                name: 'Pendapatan',
                data: [18.5, 22.3, 19.8, 26.5, 24.2, 29.4]
            }, {
                name: 'Target',
                data: [20, 22, 24, 26, 28, 30]
            }],
            chart: {
                type: 'area',
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
                    text: 'Pendapatan (Juta Rupiah)'
                },
                labels: {
                    formatter: function(val) {
                        return 'Rp ' + val.toFixed(1) + 'M';
                    }
                }
            },
            legend: {
                position: 'top'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.5,
                    opacityTo: 0.1,
                }
            }
        };
        var revenueTrendChart = new ApexCharts(document.querySelector("#revenueTrendChart"), revenueTrendOptions);
        revenueTrendChart.render();

        // Payment Method Chart (Pie)
        var paymentMethodOptions = {
            series: [245, 156, 88],
            chart: {
                type: 'donut',
                height: 350
            },
            labels: ['Transfer Bank', 'E-Wallet', 'QRIS'],
            colors: ['#166F61', '#3b82f6', '#7c3aed'],
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
        var paymentMethodChart = new ApexCharts(document.querySelector("#paymentMethodChart"), paymentMethodOptions);
        paymentMethodChart.render();

        // Monthly Comparison Chart (Bar)
        var monthlyComparisonOptions = {
            series: [{
                name: 'Lunas',
                data: [16.5, 19.8, 17.2, 23.5, 21.6, 25.8]
            }, {
                name: 'Pending',
                data: [1.2, 1.5, 1.8, 2.1, 1.8, 2.4]
            }, {
                name: 'Tertunggak',
                data: [0.8, 1.0, 0.8, 0.9, 0.8, 1.2]
            }],
            chart: {
                type: 'bar',
                height: 400,
                stacked: true,
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
                    text: 'Pendapatan (Juta Rupiah)'
                },
                labels: {
                    formatter: function(val) {
                        return 'Rp ' + val.toFixed(1) + 'M';
                    }
                }
            },
            legend: {
                position: 'top'
            }
        };
        var monthlyComparisonChart = new ApexCharts(document.querySelector("#monthlyComparisonChart"), monthlyComparisonOptions);
        monthlyComparisonChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
