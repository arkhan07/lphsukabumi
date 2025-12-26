<x-layouts.admin.app>
    <x-slot name="title">Master Data Tipe Produk</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Master Data Tipe Produk</h2>
            <p class="text-secondary-light mb-0">Kelola data tipe dan kategori produk halal</p>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="ri-add-line me-2"></i>
                Tambah Tipe Produk
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="stat-icon" style="background: var(--primary-50);">
                            <i class="ri-price-tag-3-line" style="color: var(--primary-600);"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 text-secondary-light">Total Tipe Produk</h6>
                        <h3 class="mb-0" style="font-weight: 600;">{{ $stats['total'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="stat-icon" style="background: var(--success-50);">
                            <i class="ri-checkbox-circle-line" style="color: var(--success-600);"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 text-secondary-light">Aktif</h6>
                        <h3 class="mb-0" style="font-weight: 600;">{{ $stats['active'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="stat-icon" style="background: var(--warning-50);">
                            <i class="ri-close-circle-line" style="color: var(--warning-600);"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 text-secondary-light">Tidak Aktif</h6>
                        <h3 class="mb-0" style="font-weight: 600;">{{ $stats['inactive'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="stat-icon" style="background: var(--info-50);">
                            <i class="ri-shopping-bag-line" style="color: var(--info-600);"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 text-secondary-light">Dengan Produk</h6>
                        <h3 class="mb-0" style="font-weight: 600;">{{ $stats['with_products'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="card-custom mb-3">
        <form method="GET" action="{{ route('admin.master-data.product-types') }}">
            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Cari tipe produk..." value="{{ request('search') }}">
                </div>
                <div class="col-12 col-md-3">
                    <select name="business_type_id" class="form-select">
                        <option value="">Semua Jenis Usaha</option>
                        @foreach($businessTypes as $businessType)
                            <option value="{{ $businessType->id }}" {{ request('business_type_id') == $businessType->id ? 'selected' : '' }}>
                                {{ $businessType->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-3">
                    <select name="status" class="form-select">
                        <option value="">Semua Status</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Aktif</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>
                <div class="col-12 col-md-2">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="ri-search-line me-1"></i> Filter
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Daftar Tipe Produk</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Kode</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Kategori</th>
                        <th style="padding: 1rem; font-weight: 600;">Deskripsi</th>
                        <th style="padding: 1rem; font-weight: 600;">Produk</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($productTypes as $type)
                    <tr>
                        <td style="padding: 1rem;">
                            <span class="badge bg-secondary">{{ $type->code }}</span>
                        </td>
                        <td style="padding: 1rem; font-weight: 500;">{{ $type->name }}</td>
                        <td style="padding: 1rem;">
                            @if($type->businessType)
                                <span class="badge bg-primary">{{ $type->businessType->name }}</span>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            @if($type->category)
                                <span class="badge" style="background: var(--info-100); color: var(--info-700);">{{ $type->category }}</span>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <span class="text-muted">{{ Str::limit($type->description, 40) ?: '-' }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            <span class="badge bg-info">{{ $type->products_count }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            @if($type->is_active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-secondary">Tidak Aktif</span>
                            @endif
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <button class="btn btn-outline-primary" onclick="editProductType({{ $type->id }})" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button class="btn btn-outline-danger" onclick="deleteProductType({{ $type->id }})" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-4">
                            <div class="text-muted">
                                <i class="ri-inbox-line" style="font-size: 3rem;"></i>
                                <p class="mt-2">Tidak ada data tipe produk</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($productTypes->hasPages())
        <div class="card-footer-custom">
            {{ $productTypes->links() }}
        </div>
        @endif
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.master-data.product-types.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Tipe Produk Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Tipe Produk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('code') is-invalid @enderror"
                                   name="code" value="{{ old('code') }}" required>
                            <small class="text-muted">Contoh: SNACK, MINUMAN-KEMASAN, KOSMETIK-WAJAH</small>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Usaha</label>
                            <select class="form-select @error('business_type_id') is-invalid @enderror" name="business_type_id">
                                <option value="">Pilih Jenis Usaha (Opsional)</option>
                                @foreach($businessTypes as $businessType)
                                    <option value="{{ $businessType->id }}" {{ old('business_type_id') == $businessType->id ? 'selected' : '' }}>
                                        {{ $businessType->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('business_type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror"
                                   name="category" value="{{ old('category') }}" placeholder="Contoh: Makanan Ringan, Minuman Segar">
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      name="description" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1"
                                       id="is_active" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">Aktif</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="editForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Tipe Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Tipe Produk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="edit_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="code" id="edit_code" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Usaha</label>
                            <select class="form-select" name="business_type_id" id="edit_business_type_id">
                                <option value="">Tidak Ada</option>
                                @foreach($businessTypes as $businessType)
                                    <option value="{{ $businessType->id }}">{{ $businessType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input type="text" class="form-control" name="category" id="edit_category">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" id="edit_description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" id="edit_is_active">
                                <label class="form-check-label" for="edit_is_active">Aktif</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Form -->
    <form method="POST" id="deleteForm" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    @push('scripts')
    <script>
        // Auto-open create modal if there are validation errors
        @if($errors->any() && !request()->has('edit'))
            var createModal = new bootstrap.Modal(document.getElementById('createModal'));
            createModal.show();
        @endif

        // Edit Product Type
        function editProductType(id) {
            const editModal = new bootstrap.Modal(document.getElementById('editModal'));
            const form = document.getElementById('editForm');
            form.action = `/admin/master-data/product-types/${id}`;
            editModal.show();
        }

        // Delete Product Type
        function deleteProductType(id) {
            if (confirm('Apakah Anda yakin ingin menghapus tipe produk ini?\n\nPerhatian: Tipe produk tidak dapat dihapus jika masih digunakan dalam produk.')) {
                const form = document.getElementById('deleteForm');
                form.action = `/admin/master-data/product-types/${id}`;
                form.submit();
            }
        }

        // Show success/error messages
        @if(session('success'))
            alert('{{ session('success') }}');
        @endif

        @if(session('error'))
            alert('{{ session('error') }}');
        @endif
    </script>
    @endpush
</x-layouts.admin.app>
