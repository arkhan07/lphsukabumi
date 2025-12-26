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
        <div class="col-6 col-md-4 col-lg">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Total Pengguna</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-users" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Admin LPH</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['admin_lph'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-shield-star" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Auditor</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['auditor'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-shield-check" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Pelaku Usaha</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['pelaku_usaha'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-building" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Penyedia Halal</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['penyedia_halal'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-shopping-bag" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
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
                        <td style="padding: 1rem;">
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                   class="btn btn-sm btn-success"
                                   title="Edit"
                                   style="min-width: 38px; min-height: 38px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="ti ti-edit" style="font-size: 1.1rem;"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            title="Hapus"
                                            style="min-width: 38px; min-height: 38px; display: inline-flex; align-items: center; justify-content: center;">
                                        <i class="ti ti-trash" style="font-size: 1.1rem;"></i>
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
        /* Card custom styling */
        .card-custom {
            background: white;
            border: 1px solid var(--neutral-200);
            border-radius: 8px;
            padding: 1.25rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
        }

        .card-custom:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
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
