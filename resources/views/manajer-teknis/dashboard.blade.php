<x-layouts.admin.app>
    <x-slot name="title">Dashboard Manajer Teknis</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Dashboard Manajer Teknis</h2>
            <p class="text-secondary-light mb-0">Selamat datang, {{ auth()->user()->name }}! Kelola penugasan auditor dan monitoring audit</p>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="ri-user-add-line me-2"></i>
                Tugaskan Auditor
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
                    <div class="stat-label">Jadwal Audit</div>
                    <div class="stat-value">24</div>
                    <div class="stat-trend up">
                        <i class="ri-calendar-line"></i>
                        Bulan ini
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-user-star-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Auditor Aktif</div>
                    <div class="stat-value">15</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Available
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
                    <div class="stat-label">Audit Berjalan</div>
                    <div class="stat-value">8</div>
                    <div class="stat-trend up">
                        <i class="ri-timer-line"></i>
                        Sedang proses
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
                    <div class="stat-value">5</div>
                    <div class="stat-trend down">
                        <i class="ri-alert-line"></i>
                        Perlu review
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-7">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Statistik Audit Bulanan</h5>
                </div>
                <div id="auditChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-5">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Beban Kerja Auditor</h5>
                </div>
                <div id="workloadChart"></div>
            </div>
        </div>
    </div>

    <!-- Auditor Assignment Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Penugasan Terbaru</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>Auditor</th>
                                <th>Pelaku Usaha</th>
                                <th>Tanggal Audit</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Ahmad Fauzi, S.Si</strong></td>
                                <td>PT. Halal Jaya</td>
                                <td>25 Des 2024</td>
                                <td><span class="badge-custom badge-warning">Terjadwal</span></td>
                                <td><button class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></button></td>
                            </tr>
                            <tr>
                                <td><strong>Siti Nurhaliza, M.Si</strong></td>
                                <td>CV. Berkah Mandiri</td>
                                <td>24 Des 2024</td>
                                <td><span class="badge-custom badge-info">Berlangsung</span></td>
                                <td><button class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></button></td>
                            </tr>
                            <tr>
                                <td><strong>Dr. Muhammad Ridwan</strong></td>
                                <td>UD. Maju Jaya</td>
                                <td>23 Des 2024</td>
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
        var auditOptions = {
            series: [{
                name: 'Terjadwal',
                data: [12, 15, 14, 18, 16, 20, 19, 22, 25, 23, 21, 24]
            }, {
                name: 'Selesai',
                data: [10, 13, 12, 16, 14, 18, 17, 20, 22, 21, 19, 20]
            }],
            chart: { type: 'area', height: 350, toolbar: { show: false } },
            colors: ['#166F61', '#10b981'],
            stroke: { curve: 'smooth', width: 2 },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
            }
        };
        new ApexCharts(document.querySelector("#auditChart"), auditOptions).render();

        var workloadOptions = {
            series: [{
                name: 'Tugas',
                data: [3, 5, 2, 4, 3, 6, 2, 5, 4, 3, 5, 6, 2, 3, 4]
            }],
            chart: { type: 'bar', height: 350, toolbar: { show: false } },
            colors: ['#3b82f6'],
            xaxis: {
                categories: ['A.Fauzi', 'S.Nur', 'M.Rid', 'F.Has', 'N.Ain', 'R.Bud', 'I.Pra', 'D.Wid', 'E.Saf', 'H.Nur', 'J.Rah', 'K.Ayu', 'L.Fat', 'M.Ris', 'N.Han']
            }
        };
        new ApexCharts(document.querySelector("#workloadChart"), workloadOptions).render();
    </script>
    @endpush
</x-layouts.admin.app>
