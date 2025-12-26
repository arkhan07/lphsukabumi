<x-layouts.admin.app>
    <x-slot name="title">Manajemen Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Produk</h2>
            <p class="text-secondary-light mb-0">Kelola produk yang terdaftar untuk sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.products.categories') }}" class="btn btn-outline-primary">
                <i class="ri-folder-line me-2"></i>
                Kategori
            </a>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Produk
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Total Produk</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-package" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Halal</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['halal'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-check" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Tidak Halal</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['not_halal'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-x" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Meragukan</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $stats['doubtful'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-help" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Daftar Produk</h5>
            <div class="d-flex gap-2 flex-wrap">
                <div class="position-relative">
                    <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                    <input type="text" id="searchInput" class="form-control ps-5" placeholder="Cari produk..." style="width: 250px;">
                </div>
                <select class="form-select" id="filterHalalStatus" style="width: 180px;">
                    <option value="">Semua Status Halal</option>
                    <option value="halal">Halal</option>
                    <option value="not_halal">Tidak Halal</option>
                    <option value="doubtful">Meragukan</option>
                </select>
                <select class="form-select" id="filterProductType" style="width: 180px;">
                    <option value="">Semua Tipe Produk</option>
                    @foreach($productTypes ?? [] as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                <select class="form-select" id="filterSubmission" style="width: 200px;">
                    <option value="">Semua Permohonan</option>
                    @foreach($submissions ?? [] as $submission)
                        <option value="{{ $submission->id }}">{{ $submission->submission_number }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="productsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 50px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama Produk</th>
                        <th style="padding: 1rem; font-weight: 600;">SKU</th>
                        <th style="padding: 1rem; font-weight: 600;">Brand</th>
                        <th style="padding: 1rem; font-weight: 600;">Tipe Produk</th>
                        <th style="padding: 1rem; font-weight: 600;">Status Halal</th>
                        <th style="padding: 1rem; font-weight: 600;">No. Sertifikat</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products ?? [] as $index => $product)
                        <tr>
                            <td style="padding: 1rem;">{{ $index + 1 }}</td>
                            <td style="padding: 1rem;">
                                <div class="d-flex align-items-center gap-2">
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}"
                                             style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                                    @else
                                        <div style="width: 50px; height: 50px; background: var(--neutral-100); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                            <i class="ri-product-hunt-line" style="font-size: 1.5rem; color: var(--primary-600);"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <div style="font-weight: 500;">{{ $product->product_name }}</div>
                                        @if($product->variant)
                                            <small class="text-secondary-light">{{ $product->variant }}</small>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 1rem;">
                                <span class="badge bg-light text-dark">{{ $product->product_code ?? '-' }}</span>
                            </td>
                            <td style="padding: 1rem;">{{ $product->brand_name ?? '-' }}</td>
                            <td style="padding: 1rem;">
                                @if($product->productType)
                                    <span class="badge-custom badge-primary">{{ $product->productType->name }}</span>
                                @else
                                    <span class="text-secondary-light">-</span>
                                @endif
                            </td>
                            <td style="padding: 1rem;">
                                @if($product->halal_status === 'halal')
                                    <span class="badge-custom badge-success">
                                        <i class="ri-checkbox-circle-line me-1"></i>Halal
                                    </span>
                                @elseif($product->halal_status === 'not_halal')
                                    <span class="badge-custom badge-danger">
                                        <i class="ri-close-circle-line me-1"></i>Tidak Halal
                                    </span>
                                @else
                                    <span class="badge-custom badge-warning">
                                        <i class="ri-question-line me-1"></i>Meragukan
                                    </span>
                                @endif
                            </td>
                            <td style="padding: 1rem;">
                                @if($product->submission && $product->submission->halal_certificate_number)
                                    <div style="font-weight: 500;">{{ $product->submission->halal_certificate_number }}</div>
                                @else
                                    <span class="text-secondary-light">Belum ada</span>
                                @endif
                            </td>
                            <td style="padding: 1rem;">
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('admin.products.show', $product->id) }}"
                                       class="btn btn-sm btn-primary"
                                       title="Detail"
                                       style="min-width: 38px; min-height: 38px; display: inline-flex; align-items: center; justify-content: center;">
                                        <i class="ti ti-eye" style="font-size: 1.1rem;"></i>
                                    </a>
                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                       class="btn btn-sm btn-success"
                                       title="Edit"
                                       style="min-width: 38px; min-height: 38px; display: inline-flex; align-items: center; justify-content: center;">
                                        <i class="ti ti-edit" style="font-size: 1.1rem;"></i>
                                    </a>
                                    <button type="button"
                                            class="btn btn-sm btn-danger"
                                            title="Hapus"
                                            onclick="confirmDelete({{ $product->id }})"
                                            style="min-width: 38px; min-height: 38px; display: inline-flex; align-items: center; justify-content: center;">
                                        <i class="ti ti-trash" style="font-size: 1.1rem;"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" style="padding: 2rem; text-align: center;">
                                <div class="text-secondary-light">
                                    <i class="ri-inbox-line" style="font-size: 3rem; opacity: 0.3;"></i>
                                    <p class="mt-2 mb-0">Belum ada produk terdaftar</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if(isset($products) && $products->hasPages())
            <div class="card-footer-custom">
                {{ $products->links() }}
            </div>
        @endif
    </div>

    <!-- Delete Form -->
    <form id="deleteForm" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    @push('styles')
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
                    var productType = $('#filterProductType').val();
                    var submission = $('#filterSubmission').val();

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
