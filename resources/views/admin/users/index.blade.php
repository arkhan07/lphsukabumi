<x-layouts.admin.app>
    <x-slot name="title">Manajemen Pengguna</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Pengguna</h2>
            <p class="text-secondary-light mb-0">Kelola pengguna dan akses sistem LPH Sukabumi</p>
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
        <!-- Total Pengguna Card -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-2-4">
            <div class="card border-0 shadow-sm h-100 stats-card" style="border-radius: 16px; overflow: hidden; position: relative; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <div class="card-body p-4 text-white" style="position: relative; z-index: 2;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper me-3" style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 14px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                            <i class="ti ti-users" style="font-size: 1.75rem;"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; opacity: 0.9; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600;">Total Pengguna</div>
                            <div style="font-size: 2rem; font-weight: 800; line-height: 1; margin-top: 0.25rem;">{{ $stats['total'] ?? 0 }}</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="font-size: 0.8rem; opacity: 0.9;">
                        <i class="ti ti-trending-up me-1"></i>
                        <span>Semua pengguna terdaftar</span>
                    </div>
                </div>
                <div style="position: absolute; bottom: -20px; right: -20px; width: 120px; height: 120px; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: 1;"></div>
            </div>
        </div>

        <!-- Admin LPH Card -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-2-4">
            <div class="card border-0 shadow-sm h-100 stats-card" style="border-radius: 16px; overflow: hidden; position: relative; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <div class="card-body p-4 text-white" style="position: relative; z-index: 2;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper me-3" style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 14px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                            <i class="ti ti-shield-star" style="font-size: 1.75rem;"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; opacity: 0.9; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600;">Admin LPH</div>
                            <div style="font-size: 2rem; font-weight: 800; line-height: 1; margin-top: 0.25rem;">{{ $stats['admin_lph'] ?? 0 }}</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="font-size: 0.8rem; opacity: 0.9;">
                        <i class="ti ti-crown me-1"></i>
                        <span>Administrator sistem</span>
                    </div>
                </div>
                <div style="position: absolute; bottom: -20px; right: -20px; width: 120px; height: 120px; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: 1;"></div>
            </div>
        </div>

        <!-- Auditor Card -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-2-4">
            <div class="card border-0 shadow-sm h-100 stats-card" style="border-radius: 16px; overflow: hidden; position: relative; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                <div class="card-body p-4 text-white" style="position: relative; z-index: 2;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper me-3" style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 14px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                            <i class="ti ti-shield-check" style="font-size: 1.75rem;"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; opacity: 0.9; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600;">Auditor</div>
                            <div style="font-size: 2rem; font-weight: 800; line-height: 1; margin-top: 0.25rem;">{{ $stats['auditor'] ?? 0 }}</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="font-size: 0.8rem; opacity: 0.9;">
                        <i class="ti ti-clipboard-check me-1"></i>
                        <span>Auditor halal aktif</span>
                    </div>
                </div>
                <div style="position: absolute; bottom: -20px; right: -20px; width: 120px; height: 120px; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: 1;"></div>
            </div>
        </div>

        <!-- Pelaku Usaha Card -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-2-4">
            <div class="card border-0 shadow-sm h-100 stats-card" style="border-radius: 16px; overflow: hidden; position: relative; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                <div class="card-body p-4 text-white" style="position: relative; z-index: 2;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper me-3" style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 14px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                            <i class="ti ti-building" style="font-size: 1.75rem;"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; opacity: 0.9; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600;">Pelaku Usaha</div>
                            <div style="font-size: 2rem; font-weight: 800; line-height: 1; margin-top: 0.25rem;">{{ $stats['pelaku_usaha'] ?? 0 }}</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="font-size: 0.8rem; opacity: 0.9;">
                        <i class="ti ti-briefcase me-1"></i>
                        <span>Perusahaan terdaftar</span>
                    </div>
                </div>
                <div style="position: absolute; bottom: -20px; right: -20px; width: 120px; height: 120px; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: 1;"></div>
            </div>
        </div>

        <!-- Penyedia Halal Card -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-2-4">
            <div class="card border-0 shadow-sm h-100 stats-card" style="border-radius: 16px; overflow: hidden; position: relative; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                <div class="card-body p-4 text-white" style="position: relative; z-index: 2;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper me-3" style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 14px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                            <i class="ti ti-shopping-bag" style="font-size: 1.75rem;"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; opacity: 0.9; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600;">Penyedia Halal</div>
                            <div style="font-size: 2rem; font-weight: 800; line-height: 1; margin-top: 0.25rem;">{{ $stats['penyedia_halal'] ?? 0 }}</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="font-size: 0.8rem; opacity: 0.9;">
                        <i class="ti ti-package me-1"></i>
                        <span>Supplier halal</span>
                    </div>
                </div>
                <div style="position: absolute; bottom: -20px; right: -20px; width: 120px; height: 120px; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: 1;"></div>
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
                    <input type="text" id="searchInput" class="form-control ps-5" placeholder="Cari pengguna..." style="width: 250px;">
                </div>
                <select class="form-select" id="roleFilter" style="width: 180px;">
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
                        <th style="padding: 1rem; font-weight: 600; width: 60px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama</th>
                        <th style="padding: 1rem; font-weight: 600;">Email</th>
                        <th style="padding: 1rem; font-weight: 600;">Telepon</th>
                        <th style="padding: 1rem; font-weight: 600;">Role</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600;">Dibuat</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center; width: 180px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users ?? [] as $index => $user)
                    <tr>
                        <td style="padding: 1rem;">{{ $index + 1 }}</td>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=166F61&color=fff"
                                     alt="{{ $user->name }}"
                                     style="width: 40px; height: 40px; border-radius: 50%;">
                                <div>
                                    <div style="font-weight: 500;">{{ $user->name }}</div>
                                    <small class="text-secondary-light">ID: {{ $user->id }}</small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;">{{ $user->email }}</td>
                        <td style="padding: 1rem;">{{ $user->phone ?? '-' }}</td>
                        <td style="padding: 1rem;">
                            @if($user->roles && $user->roles->count() > 0)
                                @foreach($user->roles as $role)
                                    <span class="badge-custom
                                        @if($role->name === 'admin_lph') badge-danger
                                        @elseif($role->name === 'auditor_halal') badge-success
                                        @elseif($role->name === 'manajer_teknis') badge-warning
                                        @elseif($role->name === 'pelaku_usaha') badge-primary
                                        @else badge-info
                                        @endif
                                    ">{{ ucwords(str_replace('_', ' ', $role->name)) }}</span>
                                @endforeach
                            @else
                                <span class="badge-custom badge-secondary">No Role</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            @if($user->status === 'active')
                                <span class="badge-custom badge-success">Aktif</span>
                            @elseif($user->status === 'inactive')
                                <span class="badge-custom badge-danger">Nonaktif</span>
                            @else
                                <span class="badge-custom badge-warning">Pending</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">{{ $user->created_at ? $user->created_at->format('d M Y') : '-' }}</td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                   class="btn btn-outline-success"
                                   title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <a href="{{ route('admin.users.roles', $user->id) }}"
                                   class="btn btn-outline-primary"
                                   title="Kelola Role">
                                    <i class="ri-shield-user-line"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-outline-danger"
                                            title="Hapus">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center" style="padding: 2rem;">
                            <i class="ri-user-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="mt-2 mb-0 text-secondary-light">Belum ada pengguna</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <style>
        /* Custom grid for 5 columns */
        @media (min-width: 992px) {
            .col-lg-2-4 {
                flex: 0 0 auto;
                width: 20%;
            }
        }

        /* Stats card animations */
        .stats-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stats-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18) !important;
        }

        .stats-card .icon-wrapper {
            transition: all 0.3s ease;
        }

        .stats-card:hover .icon-wrapper {
            transform: scale(1.15) rotate(5deg);
        }

        /* Perbesar tombol aksi */
        .btn-group .btn {
            min-width: 45px;
            min-height: 38px;
            padding: 0.5rem 0.75rem;
            font-size: 1.1rem;
        }
        .btn-group .btn i {
            font-size: 1.2rem;
        }

        /* Card custom enhancements */
        .card-custom {
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .card-custom:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
        }
    </style>
    @endpush

    @push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#usersTable').DataTable({
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
                order: [[6, 'desc']], // Sort by Created At column
                pageLength: 10,
                columnDefs: [
                    { orderable: false, targets: [7] } // Disable sorting on Actions column
                ]
            });

            // Custom search input
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Role filter
            $('#roleFilter').on('change', function() {
                var filterValue = this.value;
                if (filterValue) {
                    table.column(4).search(filterValue).draw();
                } else {
                    table.column(4).search('').draw();
                }
            });
        });
    </script>
    @endpush
</x-layouts.admin.app>
