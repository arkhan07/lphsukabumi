<x-layouts.admin.app>
    <x-slot name="title">Master Data Jenis Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Master Data Jenis Produk</h2>
            <p class="text-secondary-light mb-0">Kelola data jenis produk untuk sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.master-data.product-types.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Jenis Produk
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Jenis Produk</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-product-hunt-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Aktif</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['active'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Nonaktif</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['inactive'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-close-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Jenis Produk</h5>
            <div class="d-flex gap-2">
                <div class="position-relative">
                    <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                    <input type="text" id="searchInput" class="form-control ps-5" placeholder="Cari jenis produk..." style="width: 250px;">
                </div>
                <select class="form-select" id="categoryFilter" style="width: 180px;">
                    <option value="">Semua Kategori</option>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="obat">Obat</option>
                    <option value="kosmetik">Kosmetik</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="productTypesTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 60px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">Kode</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama Jenis Produk</th>
                        <th style="padding: 1rem; font-weight: 600;">Kategori</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600;">Dibuat</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center; width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($productTypes ?? [] as $index => $productType)
                    <tr>
                        <td style="padding: 1rem;">{{ $index + 1 }}</td>
                        <td style="padding: 1rem;">
                            <span class="badge-custom badge-secondary">{{ $productType->code }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $productType->name }}</div>
                        </td>
                        <td style="padding: 1rem;">
                            <span class="badge-custom
                                @if($productType->category === 'makanan') badge-success
                                @elseif($productType->category === 'minuman') badge-info
                                @elseif($productType->category === 'obat') badge-danger
                                @elseif($productType->category === 'kosmetik') badge-warning
                                @else badge-secondary
                                @endif
                            ">{{ ucfirst($productType->category) }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            {{ $productType->businessType ? $productType->businessType->name : '-' }}
                        </td>
                        <td style="padding: 1rem;">
                            @if($productType->is_active)
                                <span class="badge-custom badge-success">Aktif</span>
                            @else
                                <span class="badge-custom badge-danger">Nonaktif</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">{{ $productType->created_at ? $productType->created_at->format('d M Y') : '-' }}</td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <a href="{{ route('admin.master-data.product-types.edit', $productType->id) }}"
                                   class="btn btn-outline-success"
                                   title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <form action="{{ route('admin.master-data.product-types.destroy', $productType->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus jenis produk ini?');">
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
                            <i class="ri-product-hunt-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="mt-2 mb-0 text-secondary-light">Belum ada data jenis produk</p>
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
            var table = $('#productTypesTable').DataTable({
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

            // Category filter
            $('#categoryFilter').on('change', function() {
                var filterValue = this.value;
                if (filterValue) {
                    table.column(3).search(filterValue).draw();
                } else {
                    table.column(3).search('').draw();
                }
            });
        });
    </script>
    @endpush
</x-layouts.admin.app>
