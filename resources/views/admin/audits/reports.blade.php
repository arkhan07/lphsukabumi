<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Audit</h2>
            <p class="text-secondary-light mb-0">Daftar laporan hasil audit sertifikasi halal</p>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Buat Laporan
            </button>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Laporan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">89</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-text-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Lulus Audit</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">76</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Perlu Perbaikan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">10</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-alert-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Tidak Lulus</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">3</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-close-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reports Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Laporan Audit</h5>
            <div class="d-flex gap-2">
                <select class="form-select" style="width: 150px;">
                    <option value="">Semua Status</option>
                    <option value="passed">Lulus</option>
                    <option value="revision">Perlu Perbaikan</option>
                    <option value="failed">Tidak Lulus</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="reportsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">No. Laporan</th>
                        <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Produk</th>
                        <th style="padding: 1rem; font-weight: 600;">Auditor</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal Audit</th>
                        <th style="padding: 1rem; font-weight: 600;">Hasil</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;"><strong>AUD/2024/12/001</strong></td>
                        <td style="padding: 1rem;">PT. Halal Jaya Makmur</td>
                        <td style="padding: 1rem;">Kecap Manis</td>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=3b82f6&color=fff" style="width: 30px; height: 30px; border-radius: 50%;">
                                <span>Budi Santoso</span>
                            </div>
                        </td>
                        <td style="padding: 1rem;">24 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Lulus</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-info" title="Download">
                                    <i class="ri-download-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>AUD/2024/12/002</strong></td>
                        <td style="padding: 1rem;">CV. Berkah Selalu</td>
                        <td style="padding: 1rem;">Mie Instan</td>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Ahmad+Hidayat&background=10b981&color=fff" style="width: 30px; height: 30px; border-radius: 50%;">
                                <span>Ahmad Hidayat</span>
                            </div>
                        </td>
                        <td style="padding: 1rem;">23 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Perlu Perbaikan</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-info" title="Download">
                                    <i class="ri-download-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>AUD/2024/12/003</strong></td>
                        <td style="padding: 1rem;">UD. Maju Bersama</td>
                        <td style="padding: 1rem;">Sirup & Minuman</td>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Siti+Aminah&background=f59e0b&color=fff" style="width: 30px; height: 30px; border-radius: 50%;">
                                <span>Siti Aminah</span>
                            </div>
                        </td>
                        <td style="padding: 1rem;">22 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Lulus</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-info" title="Download">
                                    <i class="ri-download-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#reportsTable').DataTable({
                language: {
                    lengthMenu: "Tampilkan _MENU_ data per halaman",
                    zeroRecords: "Data tidak ditemukan",
                    info: "Menampilkan halaman _PAGE_ dari _PAGES_",
                    infoEmpty: "Tidak ada data tersedia",
                    infoFiltered: "(difilter dari _MAX_ total data)",
                    search: "Cari:",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya"
                    }
                },
                order: [[4, 'desc']],
                pageLength: 10
            });
        });
    </script>
    @endpush
</x-layouts.admin.app>
