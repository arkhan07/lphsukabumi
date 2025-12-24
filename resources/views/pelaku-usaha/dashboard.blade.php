<x-layouts.admin.app>
    <x-slot name="title">Dashboard Pelaku Usaha</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Dashboard Pelaku Usaha</h2>
            <p class="text-secondary-light mb-0">Selamat datang, {{ auth()->user()->name }}! Kelola permohonan sertifikasi halal Anda</p>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Ajukan Sertifikasi Baru
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
                    <div class="stat-value">12</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        2 bulan ini
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
                    <div class="stat-value">5</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Menunggu verifikasi
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
                    <div class="stat-value">6</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Sertifikat aktif
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
                    <div class="stat-label">Perlu Perbaikan</div>
                    <div class="stat-value">1</div>
                    <div class="stat-trend down">
                        <i class="ri-alert-line"></i>
                        Segera diperbaiki
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Aksi Cepat</h5>
                </div>
                <div class="row g-3 p-3">
                    <div class="col-12 col-md-4">
                        <a href="#" class="d-flex align-items-center p-3 border rounded-3 text-decoration-none hover-shadow" style="transition: all 0.2s;">
                            <div class="stat-icon primary me-3" style="width: 50px; height: 50px; font-size: 1.5rem;">
                                <i class="ri-file-add-line"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Pengajuan Baru</h6>
                                <small class="text-secondary-light">Ajukan sertifikasi halal</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="#" class="d-flex align-items-center p-3 border rounded-3 text-decoration-none hover-shadow" style="transition: all 0.2s;">
                            <div class="stat-icon success me-3" style="width: 50px; height: 50px; font-size: 1.5rem;">
                                <i class="ri-file-list-line"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Lihat Permohonan</h6>
                                <small class="text-secondary-light">Cek status permohonan</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="#" class="d-flex align-items-center p-3 border rounded-3 text-decoration-none hover-shadow" style="transition: all 0.2s;">
                            <div class="stat-icon purple me-3" style="width: 50px; height: 50px; font-size: 1.5rem;">
                                <i class="ri-folder-upload-line"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Kelola Dokumen</h6>
                                <small class="text-secondary-light">Upload dokumen</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Recent Submissions -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-5">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Status Permohonan</h5>
                </div>
                <div id="statusChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-7">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Permohonan Terbaru</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No. Permohonan</th>
                                <th>Produk</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#SH2024-015</strong></td>
                                <td>Kecap Manis Premium</td>
                                <td>20 Des 2024</td>
                                <td><span class="badge-custom badge-warning">Verifikasi</span></td>
                                <td><button class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></button></td>
                            </tr>
                            <tr>
                                <td><strong>#SH2024-012</strong></td>
                                <td>Sambal Botol</td>
                                <td>15 Des 2024</td>
                                <td><span class="badge-custom badge-info">Audit</span></td>
                                <td><button class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></button></td>
                            </tr>
                            <tr>
                                <td><strong>#SH2024-008</strong></td>
                                <td>Sirup Buah</td>
                                <td>10 Des 2024</td>
                                <td><span class="badge-custom badge-success">Disetujui</span></td>
                                <td><button class="btn btn-sm btn-info"><i class="ri-download-line"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        var statusOptions = {
            series: [5, 6, 1],
            chart: {
                type: 'donut',
                height: 300
            },
            labels: ['Dalam Proses', 'Disetujui', 'Perlu Perbaikan'],
            colors: ['#f59e0b', '#10b981', '#ef4444'],
            legend: {
                position: 'bottom'
            }
        };
        var statusChart = new ApexCharts(document.querySelector("#statusChart"), statusOptions);
        statusChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
