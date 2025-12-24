<x-layouts.admin.app>
    <x-slot name="title">Dashboard Admin LPH</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Dashboard Admin LPH</h2>
            <p class="text-secondary-light mb-0">Selamat datang, {{ auth()->user()->name }}! Kelola operasional LPH Doa Bangsa Sukabumi</p>
        </div>
        <div>
            <a href="{{ route('admin.submissions.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Permohonan
            </a>
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
                    <div class="stat-value">156</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        12% dari bulan lalu
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
                    <div class="stat-label">Sertifikat Disetujui</div>
                    <div class="stat-value">89</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        8% dari bulan lalu
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
                    <div class="stat-label">Dalam Proses</div>
                    <div class="stat-value">42</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        3% dari bulan lalu
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-user-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Pelaku Usaha</div>
                    <div class="stat-value">234</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        15% dari bulan lalu
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
                    <i class="ri-file-warning-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Perlu Verifikasi</div>
                    <div class="stat-value">18</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        5 baru hari ini
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="ri-file-search-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Audit Bulan Ini</div>
                    <div class="stat-value">27</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        9 selesai
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-money-dollar-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pendapatan Bulan Ini</div>
                    <div class="stat-value">Rp 45M</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        18% dari bulan lalu
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-product-hunt-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Produk Tersertifikasi</div>
                    <div class="stat-value">542</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        23 produk baru
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
                    <h5 class="card-title mb-0">Statistik Permohonan</h5>
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-outline-primary active">Bulanan</button>
                        <button type="button" class="btn btn-outline-primary">Mingguan</button>
                        <button type="button" class="btn btn-outline-primary">Harian</button>
                    </div>
                </div>
                <div id="submissionsChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Status Permohonan</h5>
                </div>
                <div id="statusChart"></div>
            </div>
        </div>
    </div>

    <!-- Upcoming Audits & Recent Activity -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Jadwal Audit Mendatang</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-start" style="border: none; padding: 1rem 0;">
                        <div class="me-auto">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="stat-icon info" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0" style="font-size: 0.9rem; font-weight: 600;">PT. Halal Jaya Makmur</h6>
                                    <small class="text-secondary-light">Produk: Kecap Manis</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-secondary-light" style="font-size: 0.875rem;">
                                <i class="ri-time-line"></i>
                                <span>Besok, 25 Des 2024 - 10:00 WIB</span>
                            </div>
                        </div>
                        <span class="badge-custom badge-info">Terjadwal</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-start" style="border: none; padding: 1rem 0; border-top: 1px solid var(--neutral-200);">
                        <div class="me-auto">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="stat-icon warning" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0" style="font-size: 0.9rem; font-weight: 600;">CV. Berkah Selalu</h6>
                                    <small class="text-secondary-light">Produk: Mie Instan</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-secondary-light" style="font-size: 0.875rem;">
                                <i class="ri-time-line"></i>
                                <span>26 Des 2024 - 14:00 WIB</span>
                            </div>
                        </div>
                        <span class="badge-custom badge-warning">Pending</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-start" style="border: none; padding: 1rem 0; border-top: 1px solid var(--neutral-200);">
                        <div class="me-auto">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="stat-icon primary" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0" style="font-size: 0.9rem; font-weight: 600;">UD. Maju Bersama</h6>
                                    <small class="text-secondary-light">Produk: Sirup & Minuman</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-secondary-light" style="font-size: 0.875rem;">
                                <i class="ri-time-line"></i>
                                <span>27 Des 2024 - 09:00 WIB</span>
                            </div>
                        </div>
                        <span class="badge-custom badge-info">Terjadwal</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Aktivitas Terbaru</h5>
                </div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item" style="border: none; padding: 1rem 0;">
                        <div class="d-flex gap-3">
                            <div class="stat-icon success" style="width: 40px; height: 40px; font-size: 1rem;">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.875rem; font-weight: 600;">Permohonan Disetujui</h6>
                                <p class="mb-1 text-secondary-light" style="font-size: 0.813rem;">Sertifikat halal untuk <strong>PT. Halal Foods</strong> telah disetujui</p>
                                <small class="text-secondary-light">2 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item" style="border: none; padding: 1rem 0; border-top: 1px solid var(--neutral-200);">
                        <div class="d-flex gap-3">
                            <div class="stat-icon info" style="width: 40px; height: 40px; font-size: 1rem;">
                                <i class="ri-file-text-line"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.875rem; font-weight: 600;">Permohonan Baru</h6>
                                <p class="mb-1 text-secondary-light" style="font-size: 0.813rem;">Permohonan sertifikasi dari <strong>CV. Berkah Jaya</strong></p>
                                <small class="text-secondary-light">3 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item" style="border: none; padding: 1rem 0; border-top: 1px solid var(--neutral-200);">
                        <div class="d-flex gap-3">
                            <div class="stat-icon warning" style="width: 40px; height: 40px; font-size: 1rem;">
                                <i class="ri-alert-line"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.875rem; font-weight: 600;">Dokumen Perlu Revisi</h6>
                                <p class="mb-1 text-secondary-light" style="font-size: 0.813rem;">Dokumen <strong>UD. Sejahtera</strong> memerlukan perbaikan</p>
                                <small class="text-secondary-light">5 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item" style="border: none; padding: 1rem 0; border-top: 1px solid var(--neutral-200);">
                        <div class="d-flex gap-3">
                            <div class="stat-icon purple" style="width: 40px; height: 40px; font-size: 1rem;">
                                <i class="ri-user-add-line"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.875rem; font-weight: 600;">Pelaku Usaha Baru</h6>
                                <p class="mb-1 text-secondary-light" style="font-size: 0.813rem;"><strong>PT. Mitra Halal</strong> telah mendaftar</p>
                                <small class="text-secondary-light">1 hari yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Submissions Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Permohonan Terbaru</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No. Permohonan</th>
                                <th>Pelaku Usaha</th>
                                <th>Produk</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#SH2024-001</strong></td>
                                <td>PT. Halal Jaya Makmur</td>
                                <td>Kecap Manis</td>
                                <td>24 Des 2024</td>
                                <td><span class="badge-custom badge-warning">Verifikasi</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></button>
                                    <button class="btn btn-sm btn-success"><i class="ri-check-line"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#SH2024-002</strong></td>
                                <td>CV. Berkah Selalu</td>
                                <td>Mie Instan</td>
                                <td>23 Des 2024</td>
                                <td><span class="badge-custom badge-info">Audit</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></button>
                                    <button class="btn btn-sm btn-success"><i class="ri-check-line"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#SH2024-003</strong></td>
                                <td>UD. Maju Bersama</td>
                                <td>Sirup</td>
                                <td>22 Des 2024</td>
                                <td><span class="badge-custom badge-success">Disetujui</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></button>
                                    <button class="btn btn-sm btn-info"><i class="ri-download-line"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Submissions Chart
        var submissionsOptions = {
            series: [{
                name: 'Permohonan',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125, 89, 67, 45]
            }],
            chart: {
                type: 'area',
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
                width: 2
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
            },
            yaxis: {
                title: {
                    text: 'Jumlah Permohonan'
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                }
            }
        };
        var submissionsChart = new ApexCharts(document.querySelector("#submissionsChart"), submissionsOptions);
        submissionsChart.render();

        // Status Chart
        var statusOptions = {
            series: [42, 39, 25, 50],
            chart: {
                type: 'donut',
                height: 350
            },
            labels: ['Dalam Proses', 'Verifikasi', 'Audit', 'Disetujui'],
            colors: ['#f59e0b', '#3b82f6', '#7c3aed', '#10b981'],
            legend: {
                position: 'bottom'
            }
        };
        var statusChart = new ApexCharts(document.querySelector("#statusChart"), statusOptions);
        statusChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
