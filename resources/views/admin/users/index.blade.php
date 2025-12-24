<x-layouts.admin.app>
    <x-slot name="title">Manajemen Pengguna</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Pengguna</h2>
            <p class="text-secondary-light mb-0">Kelola pengguna dan akses sistem LPH Doa Bangsa</p>
        </div>
        <div>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                <i class="ri-user-add-line me-2"></i>
                Tambah Pengguna
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Pengguna</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">234</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-user-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Pelaku Usaha</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">156</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-building-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Auditor</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">15</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-shield-check-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Admin & Staff</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">63</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-admin-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Pengguna</h5>
            <div class="d-flex gap-2">
                <div class="position-relative">
                    <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                    <input type="text" class="form-control ps-5" placeholder="Cari pengguna..." style="width: 250px;">
                </div>
                <select class="form-select" style="width: 150px;">
                    <option value="">Semua Role</option>
                    <option value="admin_lph">Admin LPH</option>
                    <option value="manajer_teknis">Manajer Teknis</option>
                    <option value="auditor_halal">Auditor Halal</option>
                    <option value="pelaku_usaha">Pelaku Usaha</option>
                    <option value="penyedia_halal">Penyedia Halal</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="usersTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Nama</th>
                        <th style="padding: 1rem; font-weight: 600;">Email</th>
                        <th style="padding: 1rem; font-weight: 600;">Role</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600;">Bergabung</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Admin+LPH&background=166F61&color=fff" alt="Admin" style="width: 40px; height: 40px; border-radius: 50%;">
                                <div>
                                    <div style="font-weight: 500;">Admin LPH</div>
                                    <small class="text-secondary-light">ID: USR001</small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;">admin@lphsukabumi.com</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-danger">Admin LPH</span></td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Aktif</span></td>
                        <td style="padding: 1rem;">1 Jan 2024</td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.users.edit', 1) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" title="Nonaktifkan">
                                    <i class="ri-close-circle-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=3b82f6&color=fff" alt="Budi" style="width: 40px; height: 40px; border-radius: 50%;">
                                <div>
                                    <div style="font-weight: 500;">Budi Santoso</div>
                                    <small class="text-secondary-light">ID: USR002</small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;">budi.santoso@example.com</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Auditor Halal</span></td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Aktif</span></td>
                        <td style="padding: 1rem;">15 Jan 2024</td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.users.edit', 2) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" title="Nonaktifkan">
                                    <i class="ri-close-circle-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Siti+Aminah&background=10b981&color=fff" alt="Siti" style="width: 40px; height: 40px; border-radius: 50%;">
                                <div>
                                    <div style="font-weight: 500;">Siti Aminah</div>
                                    <small class="text-secondary-light">ID: USR003</small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;">siti.aminah@example.com</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Manajer Teknis</span></td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Aktif</span></td>
                        <td style="padding: 1rem;">20 Jan 2024</td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.users.edit', 3) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" title="Nonaktifkan">
                                    <i class="ri-close-circle-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=PT+Halal+Jaya&background=f59e0b&color=fff" alt="Halal Jaya" style="width: 40px; height: 40px; border-radius: 50%;">
                                <div>
                                    <div style="font-weight: 500;">PT. Halal Jaya Makmur</div>
                                    <small class="text-secondary-light">ID: USR004</small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;">info@halaljaya.com</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-primary">Pelaku Usaha</span></td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Aktif</span></td>
                        <td style="padding: 1rem;">5 Feb 2024</td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.users.edit', 4) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" title="Nonaktifkan">
                                    <i class="ri-close-circle-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Ahmad+Hidayat&background=7c3aed&color=fff" alt="Ahmad" style="width: 40px; height: 40px; border-radius: 50%;">
                                <div>
                                    <div style="font-weight: 500;">Ahmad Hidayat</div>
                                    <small class="text-secondary-light">ID: USR005</small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;">ahmad.hidayat@example.com</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Auditor Halal</span></td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Pending</span></td>
                        <td style="padding: 1rem;">10 Mar 2024</td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.users.edit', 5) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-success" title="Aktifkan">
                                    <i class="ri-check-line"></i>
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
            $('#usersTable').DataTable({
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
