<x-layouts.admin.app>
    <x-slot name="title">Laporan Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Produk</h2>
            <p class="text-secondary-light mb-0">Laporan statistik dan data produk tersertifikasi</p>
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

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon primary">
                    <i class="ri-product-hunt-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Produk</div>
                    <div class="stat-value">1,542</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        125 produk baru bulan ini
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
                    <div class="stat-label">Produk Halal</div>
                    <div class="stat-value">1,398</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        91% dari total produk
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon danger">
                    <i class="ri-close-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Tidak Halal</div>
                    <div class="stat-value">82</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        5% dari total produk
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon warning">
                    <i class="ri-question-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Meragukan (Syubhat)</div>
                    <div class="stat-value">62</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        4% dari total produk
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
                    <i class="ri-shopping-basket-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Kategori Produk</div>
                    <div class="stat-value">24</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Makanan & Minuman terbanyak
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="ri-building-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Perusahaan Terdaftar</div>
                    <div class="stat-value">234</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        18 perusahaan baru
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon warning">
                    <i class="ri-calendar-event-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Sertifikat Akan Kadaluarsa</div>
                    <div class="stat-value">45</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        Dalam 30 hari
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon danger">
                    <i class="ri-calendar-close-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Sertifikat Kadaluarsa</div>
                    <div class="stat-value">22</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Perlu perpanjangan
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
                    <h5 class="card-title mb-0">Produk Berdasarkan Jenis</h5>
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-outline-primary active">Top 10</button>
                        <button type="button" class="btn btn-outline-primary">Semua</button>
                    </div>
                </div>
                <div id="productTypeChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Distribusi Status Halal</h5>
                </div>
                <div id="halalStatusChart"></div>
            </div>
        </div>
    </div>

    <!-- Charts Row 2 -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Status Masa Berlaku Sertifikat</h5>
                </div>
                <div id="certificateExpiryChart"></div>
            </div>
        </div>
    </div>

    <!-- Detailed Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Detail Produk Tersertifikasi</h5>
                    <div class="d-flex gap-2">
                        <select class="form-select form-select-sm" style="width: 150px;">
                            <option>Semua Status</option>
                            <option>Halal</option>
                            <option>Tidak Halal</option>
                            <option>Meragukan</option>
                        </select>
                        <select class="form-select form-select-sm" style="width: 200px;">
                            <option>Semua Kategori</option>
                            <option>Makanan & Minuman</option>
                            <option>Kosmetik</option>
                            <option>Obat & Suplemen</option>
                            <option>Lainnya</option>
                        </select>
                        <input type="search" class="form-control form-control-sm" placeholder="Cari produk..." style="width: 250px;">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Perusahaan</th>
                                <th>Kategori</th>
                                <th>Status Halal</th>
                                <th>No. Sertifikat</th>
                                <th>Masa Berlaku</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>PRD-2024-1542</strong></td>
                                <td>Kecap Manis Premium</td>
                                <td>PT. Halal Jaya Makmur</td>
                                <td><span class="badge bg-primary">Makanan & Minuman</span></td>
                                <td><span class="badge-custom badge-success">Halal</span></td>
                                <td>#CERT-2024-489</td>
                                <td>24 Des 2026</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>PRD-2024-1541</strong></td>
                                <td>Mie Instan Ayam Bawang</td>
                                <td>CV. Berkah Selalu</td>
                                <td><span class="badge bg-primary">Makanan & Minuman</span></td>
                                <td><span class="badge-custom badge-success">Halal</span></td>
                                <td>#CERT-2024-488</td>
                                <td>22 Des 2026</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>PRD-2024-1540</strong></td>
                                <td>Sabun Mandi Herbal</td>
                                <td>UD. Maju Bersama</td>
                                <td><span class="badge bg-info">Kosmetik</span></td>
                                <td><span class="badge-custom badge-warning">Meragukan</span></td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>PRD-2024-1539</strong></td>
                                <td>Sirup Markisa</td>
                                <td>PT. Sejahtera Halal</td>
                                <td><span class="badge bg-primary">Makanan & Minuman</span></td>
                                <td><span class="badge-custom badge-success">Halal</span></td>
                                <td>#CERT-2024-486</td>
                                <td>20 Des 2026</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>PRD-2024-1538</strong></td>
                                <td>Vitamin C 1000mg</td>
                                <td>CV. Barokah Rezeki</td>
                                <td><span class="badge bg-warning">Obat & Suplemen</span></td>
                                <td><span class="badge-custom badge-danger">Tidak Halal</span></td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong>PRD-2024-1537</strong></td>
                                <td>Keripik Singkong Pedas</td>
                                <td>UD. Rizki Melimpah</td>
                                <td><span class="badge bg-primary">Makanan & Minuman</span></td>
                                <td><span class="badge-custom badge-success">Halal</span></td>
                                <td>#CERT-2024-484</td>
                                <td>16 Des 2026</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong>PRD-2024-1536</strong></td>
                                <td>Kopi Arabica Premium</td>
                                <td>PT. Berkah Usaha</td>
                                <td><span class="badge bg-primary">Makanan & Minuman</span></td>
                                <td><span class="badge-custom badge-success">Halal</span></td>
                                <td>#CERT-2024-483</td>
                                <td>14 Des 2026</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong>PRD-2024-1535</strong></td>
                                <td>Sampo Anti Ketombe</td>
                                <td>CV. Amanah Jaya</td>
                                <td><span class="badge bg-info">Kosmetik</span></td>
                                <td><span class="badge-custom badge-success">Halal</span></td>
                                <td>#CERT-2024-482</td>
                                <td>12 Des 2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="text-secondary-light">
                        Menampilkan 1 sampai 8 dari 1,542 produk
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
                            <li class="page-item"><a class="page-link" href="#">193</a></li>
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
        // Product Type Chart (Horizontal Bar)
        var productTypeOptions = {
            series: [{
                name: 'Jumlah Produk',
                data: [432, 287, 198, 165, 142, 118, 94, 76, 58, 42]
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
                categories: [
                    'Makanan & Minuman',
                    'Kosmetik',
                    'Obat & Suplemen',
                    'Bumbu & Rempah',
                    'Kue & Snack',
                    'Susu & Olahan',
                    'Minyak & Lemak',
                    'Produk Bayi',
                    'Herbal',
                    'Lainnya'
                ],
                title: {
                    text: 'Jumlah Produk'
                }
            },
            yaxis: {
                title: {
                    text: 'Kategori Produk'
                }
            }
        };
        var productTypeChart = new ApexCharts(document.querySelector("#productTypeChart"), productTypeOptions);
        productTypeChart.render();

        // Halal Status Chart (Pie)
        var halalStatusOptions = {
            series: [1398, 82, 62],
            chart: {
                type: 'pie',
                height: 350
            },
            labels: ['Halal', 'Tidak Halal', 'Meragukan'],
            colors: ['#10b981', '#ef4444', '#f59e0b'],
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        offset: -5
                    }
                }
            },
            dataLabels: {
                formatter: function(val, opts) {
                    return opts.w.config.series[opts.seriesIndex];
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
        var halalStatusChart = new ApexCharts(document.querySelector("#halalStatusChart"), halalStatusOptions);
        halalStatusChart.render();

        // Certificate Expiry Chart (Stacked Bar)
        var certificateExpiryOptions = {
            series: [{
                name: 'Aktif (>6 bulan)',
                data: [892, 865, 840, 815, 790, 765]
            }, {
                name: 'Akan Kadaluarsa (1-6 bulan)',
                data: [156, 165, 172, 178, 185, 192]
            }, {
                name: 'Akan Kadaluarsa (<30 hari)',
                data: [32, 38, 42, 45, 48, 52]
            }, {
                name: 'Kadaluarsa',
                data: [12, 15, 18, 20, 22, 25]
            }],
            chart: {
                type: 'bar',
                height: 400,
                stacked: true,
                toolbar: {
                    show: false
                }
            },
            colors: ['#10b981', '#f59e0b', '#f97316', '#ef4444'],
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
                    text: 'Jumlah Produk'
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            }
        };
        var certificateExpiryChart = new ApexCharts(document.querySelector("#certificateExpiryChart"), certificateExpiryOptions);
        certificateExpiryChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
