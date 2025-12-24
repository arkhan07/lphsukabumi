<x-layouts.admin.app>
    <x-slot name="title">Dashboard Admin LPH</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Dashboard Admin LPH</h2>
            <p class="text-secondary-light mb-0">Selamat datang, {{ auth()->user()->name }}! Kelola operasional LPH Doa Bangsa Sukabumi</p>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Permohonan
            </button>
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
