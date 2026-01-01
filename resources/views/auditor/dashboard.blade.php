<x-layouts.admin.app>
    <x-slot name="title">Dashboard Auditor Halal</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Dashboard Auditor Halal</h2>
            <p class="text-secondary-light mb-0">Selamat datang, {{ auth()->user()->name }}! Kelola jadwal dan laporan audit Anda</p>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="ri-file-add-line me-2"></i>
                Buat Laporan
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon primary">
                    <i class="ri-calendar-check-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Jadwal Audit Saya</div>
                    <div class="stat-value">6</div>
                    <div class="stat-trend up">
                        <i class="ri-calendar-line"></i>
                        Bulan ini
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
                    <div class="stat-label">Audit Berlangsung</div>
                    <div class="stat-value">2</div>
                    <div class="stat-trend up">
                        <i class="ri-timer-line"></i>
                        Sedang proses
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
                    <div class="stat-value">42</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Total tahun ini
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-file-list-3-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Laporan Pending</div>
                    <div class="stat-value">3</div>
                    <div class="stat-trend down">
                        <i class="ri-alert-line"></i>
                        Perlu diselesaikan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    <i class="ri-money-dollar-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Fee Bulan Ini</div>
                    <div class="stat-value">{{ $monthlyFeeTotalFormatted ?? 'Rp 0' }}</div>
                    <div class="stat-trend up">
                        <i class="ri-information-line"></i>
                        30% dari invoice
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    <i class="ri-wallet-3-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Status Pembayaran</div>
                    <div class="stat-value">{{ $feePaidFormatted ?? 'Rp 0' }}</div>
                    <div class="stat-trend">
                        <i class="ri-check-line"></i>
                        Dibayar
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                    <i class="ri-time-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Fee Pending</div>
                    <div class="stat-value">{{ $feePendingFormatted ?? 'Rp 0' }}</div>
                    <div class="stat-trend down">
                        <i class="ri-hourglass-line"></i>
                        Menunggu
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Jadwal Audit Minggu Ini</h5>
                </div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Senin, 25 Des 2024</div>
                            <small class="text-muted">PT. Halal Jaya Makmur - Kecap Manis</small>
                            <div><small><i class="ri-map-pin-line"></i> Sukabumi, Jawa Barat</small></div>
                        </div>
                        <span class="badge-custom badge-primary">09:00</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Rabu, 27 Des 2024</div>
                            <small class="text-muted">CV. Berkah Selalu - Mie Instan</small>
                            <div><small><i class="ri-map-pin-line"></i> Cianjur, Jawa Barat</small></div>
                        </div>
                        <span class="badge-custom badge-primary">10:00</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Jumat, 29 Des 2024</div>
                            <small class="text-muted">UD. Maju Bersama - Sirup Buah</small>
                            <div><small><i class="ri-map-pin-line"></i> Bogor, Jawa Barat</small></div>
                        </div>
                        <span class="badge-custom badge-primary">13:00</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Statistik Audit</h5>
                </div>
                <div id="auditStatsChart"></div>
            </div>
        </div>
    </div>

    <!-- Recent Audits Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Audit Terbaru</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No. Audit</th>
                                <th>Pelaku Usaha</th>
                                <th>Produk</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#AUD-098</strong></td>
                                <td>PT. Halal Jaya</td>
                                <td>Kecap Manis</td>
                                <td>25 Des 2024</td>
                                <td><span class="badge-custom badge-warning">Terjadwal</span></td>
                                <td><button class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></button></td>
                            </tr>
                            <tr>
                                <td><strong>#AUD-097</strong></td>
                                <td>CV. Berkah Mandiri</td>
                                <td>Snack Jagung</td>
                                <td>23 Des 2024</td>
                                <td><span class="badge-custom badge-info">Berlangsung</span></td>
                                <td><button class="btn btn-sm btn-success"><i class="ri-file-add-line"></i> Laporan</button></td>
                            </tr>
                            <tr>
                                <td><strong>#AUD-096</strong></td>
                                <td>UD. Maju Jaya</td>
                                <td>Sirup Buah</td>
                                <td>20 Des 2024</td>
                                <td><span class="badge-custom badge-success">Selesai</span></td>
                                <td><button class="btn btn-sm btn-info"><i class="ri-file-text-line"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        var auditStatsOptions = {
            series: [{
                name: 'Audit',
                data: [5, 7, 6, 8, 7, 9, 8, 10, 9, 8, 7, 6]
            }],
            chart: {
                type: 'line',
                height: 300,
                toolbar: { show: false }
            },
            colors: ['#166F61'],
            stroke: {
                curve: 'smooth',
                width: 3
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
            },
            yaxis: {
                title: {
                    text: 'Jumlah Audit'
                }
            }
        };
        new ApexCharts(document.querySelector("#auditStatsChart"), auditStatsOptions).render();
    </script>
    @endpush
</x-layouts.admin.app>
