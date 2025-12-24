<x-layouts.admin.app>
    <x-slot name="title">Daftar Permohonan</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Daftar Permohonan Sertifikasi Halal</h2>
            <p class="text-secondary-light mb-0">Kelola semua permohonan sertifikasi halal dari pelaku usaha</p>
        </div>
        <div>
            <a href="{{ route('admin.submissions.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Permohonan
            </a>
        </div>
    </div>

    <!-- Filter Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="cursor: pointer; border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Semua Permohonan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">156</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="cursor: pointer; border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Verifikasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">18</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-file-warning-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="cursor: pointer; border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Dalam Proses</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">42</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="cursor: pointer; border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Disetujui</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">89</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Permohonan</h5>
            <div class="d-flex gap-2">
                <div class="position-relative">
                    <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                    <input type="text" class="form-control ps-5" placeholder="Cari permohonan..." style="width: 250px;">
                </div>
                <select class="form-select" style="width: 150px;">
                    <option value="">Semua Status</option>
                    <option value="draft">Draft</option>
                    <option value="verifikasi">Verifikasi</option>
                    <option value="audit">Audit</option>
                    <option value="approved">Disetujui</option>
                    <option value="rejected">Ditolak</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="submissionsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">No. Permohonan</th>
                        <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Produk</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal Pengajuan</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;"><strong>#SH2024-001</strong></td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">PT. Halal Jaya Makmur</div>
                            <small class="text-secondary-light">Sukabumi, Jawa Barat</small>
                        </td>
                        <td style="padding: 1rem;">Kecap Manis</td>
                        <td style="padding: 1rem;">Makanan & Minuman</td>
                        <td style="padding: 1rem;">24 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Verifikasi</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.submissions.show', 1) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                <a href="{{ route('admin.submissions.edit', 1) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>#SH2024-002</strong></td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">CV. Berkah Selalu</div>
                            <small class="text-secondary-light">Sukabumi, Jawa Barat</small>
                        </td>
                        <td style="padding: 1rem;">Mie Instan</td>
                        <td style="padding: 1rem;">Makanan & Minuman</td>
                        <td style="padding: 1rem;">23 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-info">Audit</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.submissions.show', 2) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                <a href="{{ route('admin.submissions.edit', 2) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>#SH2024-003</strong></td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">UD. Maju Bersama</div>
                            <small class="text-secondary-light">Sukabumi, Jawa Barat</small>
                        </td>
                        <td style="padding: 1rem;">Sirup & Minuman</td>
                        <td style="padding: 1rem;">Makanan & Minuman</td>
                        <td style="padding: 1rem;">22 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Disetujui</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.submissions.show', 3) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                <a href="{{ route('admin.submissions.edit', 3) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-info" title="Download Sertifikat">
                                    <i class="ri-download-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>#SH2024-004</strong></td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">PT. Sejahtera Abadi</div>
                            <small class="text-secondary-light">Bogor, Jawa Barat</small>
                        </td>
                        <td style="padding: 1rem;">Bakso & Sosis</td>
                        <td style="padding: 1rem;">Makanan & Minuman</td>
                        <td style="padding: 1rem;">21 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-primary">Draft</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.submissions.show', 4) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                <a href="{{ route('admin.submissions.edit', 4) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>#SH2024-005</strong></td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">CV. Barokah Jaya</div>
                            <small class="text-secondary-light">Cianjur, Jawa Barat</small>
                        </td>
                        <td style="padding: 1rem;">Kosmetik Herbal</td>
                        <td style="padding: 1rem;">Kosmetik</td>
                        <td style="padding: 1rem;">20 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Verifikasi</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.submissions.show', 5) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                <a href="{{ route('admin.submissions.edit', 5) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#submissionsTable').DataTable({
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
                order: [[0, 'desc']],
                pageLength: 10
            });
        });
    </script>
    @endpush
</x-layouts.admin.app>
