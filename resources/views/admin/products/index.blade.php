<x-layouts.admin.app>
    <x-slot name="title">Manajemen Produk</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Manajemen Produk</h2>
                    <div class="text-muted mt-1">Produk dibuat otomatis dari form permohonan sertifikasi</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('admin.products.categories') }}" class="btn btn-outline-primary">
                        <i class="ti ti-folder me-2"></i>
                        Kategori
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Info Alert -->
            <div class="alert alert-info d-flex align-items-center mb-3" role="alert">
                <i class="ti ti-info-circle me-2"></i>
                <div>
                    <strong>Informasi:</strong> Produk tidak dapat ditambahkan secara manual. Produk akan otomatis dibuat saat pelaku usaha mengisi form permohonan sertifikasi.
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Produk</div>
                            </div>
                            <div class="h1 mb-0">{{ $stats['total'] ?? 0 }}</div>
                            <div class="text-muted">Semua produk</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Halal</div>
                            </div>
                            <div class="h1 mb-0 text-success">{{ $stats['halal'] ?? 0 }}</div>
                            <div class="text-muted">Produk halal</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Tidak Halal</div>
                            </div>
                            <div class="h1 mb-0 text-danger">{{ $stats['not_halal'] ?? 0 }}</div>
                            <div class="text-muted">Produk tidak halal</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Meragukan</div>
                            </div>
                            <div class="h1 mb-0 text-warning">{{ $stats['doubtful'] ?? 0 }}</div>
                            <div class="text-muted">Perlu verifikasi</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Produk</h3>
                    <div class="card-actions">
                        <div class="input-group input-group-sm me-2">
                            <span class="input-group-text">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text" id="searchInput" class="form-control" placeholder="Cari produk...">
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex gap-2">
                        <select class="form-select form-select-sm" id="filterHalalStatus" style="width: auto;">
                            <option value="">Semua Status</option>
                            <option value="halal">Halal</option>
                            <option value="not_halal">Tidak Halal</option>
                            <option value="doubtful">Meragukan</option>
                        </select>
                        <select class="form-select form-select-sm" id="filterProductType" style="width: auto;">
                            <option value="">Semua Tipe</option>
                            @foreach($productTypes ?? [] as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        <select class="form-select form-select-sm" id="filterSubmission" style="width: auto;">
                            <option value="">Semua Permohonan</option>
                            @foreach($submissions ?? [] as $submission)
                                <option value="{{ $submission->id }}">{{ $submission->submission_number }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table" id="productsTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>SKU</th>
                                <th>Brand</th>
                                <th>Tipe Produk</th>
                                <th>Status Halal</th>
                                <th>No. Sertifikat</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products ?? [] as $index => $product)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($product->image)
                                                <span class="avatar me-2" style="background-image: url({{ asset('storage/' . $product->image) }})"></span>
                                            @else
                                                <span class="avatar me-2">
                                                    <i class="ti ti-package"></i>
                                                </span>
                                            @endif
                                            <div class="flex-fill">
                                                <div>{{ $product->product_name }}</div>
                                                @if($product->variant)
                                                    <div class="text-muted small">{{ $product->variant }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-secondary-lt">{{ $product->product_code ?? '-' }}</span></td>
                                    <td>{{ $product->brand_name ?? '-' }}</td>
                                    <td>
                                        @if($product->productType)
                                            <span class="badge bg-azure-lt">{{ $product->productType->name }}</span>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->halal_status === 'halal')
                                            <span class="badge bg-success">
                                                <i class="ti ti-circle-check me-1"></i>Halal
                                            </span>
                                        @elseif($product->halal_status === 'not_halal')
                                            <span class="badge bg-danger">
                                                <i class="ti ti-circle-x me-1"></i>Tidak Halal
                                            </span>
                                        @else
                                            <span class="badge bg-warning">
                                                <i class="ti ti-alert-circle me-1"></i>Meragukan
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->submission && $product->submission->halal_certificate_number)
                                            {{ $product->submission->halal_certificate_number }}
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.products.show', $product->id) }}"
                                               class="btn btn-sm btn-icon btn-primary"
                                               title="Detail">
                                                <i class="ti ti-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                               class="btn btn-sm btn-icon btn-success"
                                               title="Edit">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            <button type="button"
                                                    class="btn btn-sm btn-icon btn-danger"
                                                    title="Hapus"
                                                    onclick="confirmDelete({{ $product->id }})">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">
                                        <div class="empty">
                                            <div class="empty-icon">
                                                <i class="ti ti-package"></i>
                                            </div>
                                            <p class="empty-title">Belum ada produk</p>
                                            <p class="empty-subtitle text-muted">
                                                Produk akan muncul setelah pelaku usaha membuat permohonan
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if(isset($products) && $products->hasPages())
                    <div class="card-footer">
                        {{ $products->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Delete Form -->
    <form id="deleteForm" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    @push('scripts')
    <script>
        // Initialize DataTable if jQuery DataTables is available
        $(document).ready(function() {
            if ($.fn.DataTable) {
                var table = $('#productsTable').DataTable({
                    pageLength: 25,
                    order: [[1, 'asc']],
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json'
                    },
                    columnDefs: [
                        { orderable: false, targets: [0, 7] }
                    ]
                });

                // Custom filters
                $('#searchInput').on('keyup', function() {
                    table.search(this.value).draw();
                });

                $('#filterHalalStatus, #filterProductType, #filterSubmission').on('change', function() {
                    var halalStatus = $('#filterHalalStatus').val();
                    table.column(5).search(halalStatus).draw();
                });
            }
        });

        // Delete confirmation
        function confirmDelete(id) {
            if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
                const form = document.getElementById('deleteForm');
                form.action = `/admin/products/${id}`;
                form.submit();
            }
        }
    </script>
    @endpush
</x-layouts.admin.app>
