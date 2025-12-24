<x-layouts.admin.app>
    <x-slot name="title">Dashboard Penyedia Halal</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Dashboard Penyedia Halal</h2>
            <p class="text-secondary-light mb-0">Selamat datang, {{ auth()->user()->name }}! Kelola verifikasi dan monitoring halal</p>
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
                    <div class="stat-label">Verifikasi Menunggu</div>
                    <div class="stat-value">18</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        5 hari terakhir
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
                    <div class="stat-label">Verifikasi Selesai</div>
                    <div class="stat-value">127</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Bulan ini
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
                    <div class="stat-label">Perlu Tindak Lanjut</div>
                    <div class="stat-value">7</div>
                    <div class="stat-trend down">
                        <i class="ri-alert-line"></i>
                        Segera ditangani
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-building-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pelaku Usaha Aktif</div>
                    <div class="stat-value">85</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Total aktif
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
                    <h5 class="card-title mb-0">Statistik Verifikasi</h5>
                </div>
                <div id="verificationChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Status Dokumen</h5>
                </div>
                <div id="documentChart"></div>
            </div>
        </div>
    </div>

    <!-- Recent Verifications Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Verifikasi Terbaru</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No. Permohonan</th>
                                <th>Pelaku Usaha</th>
                                <th>Produk</th>
                                <th>Tanggal Submit</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#SH2024-020</strong></td>
                                <td>CV. Maju Jaya</td>
                                <td>Mie Goreng</td>
                                <td>24 Des 2024</td>
                                <td><span class="badge-custom badge-warning">Menunggu</span></td>
                                <td><button class="btn btn-sm btn-primary"><i class="ri-check-line"></i> Verifikasi</button></td>
                            </tr>
                            <tr>
                                <td><strong>#SH2024-019</strong></td>
                                <td>PT. Berkah Mandiri</td>
                                <td>Snack Jagung</td>
                                <td>23 Des 2024</td>
                                <td><span class="badge-custom badge-success">Selesai</span></td>
                                <td><button class="btn btn-sm btn-info"><i class="ri-eye-line"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        var verificationOptions = {
            series: [{
                name: 'Verifikasi',
                data: [15, 22, 18, 25, 20, 28, 24, 30, 26, 22, 19, 18]
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: { show: false }
            },
            colors: ['#166F61'],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
            }
        };
        new ApexCharts(document.querySelector("#verificationChart"), verificationOptions).render();

        var documentOptions = {
            series: [18, 127, 7],
            chart: { type: 'donut', height: 300 },
            labels: ['Menunggu', 'Selesai', 'Perlu Tindakan'],
            colors: ['#f59e0b', '#10b981', '#ef4444'],
            legend: { position: 'bottom' }
        };
        new ApexCharts(document.querySelector("#documentChart"), documentOptions).render();
    </script>
    @endpush
</x-layouts.admin.app>
