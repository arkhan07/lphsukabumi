<x-layouts.admin.app>
    <x-slot name="title">Kategori Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Kategori Produk</h2>
            <p class="text-secondary-light mb-0">Kelola kategori dan tipe produk halal</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-primary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali ke Produk
            </a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
                <i class="ri-add-line me-2"></i>
                Tambah Kategori
            </button>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Kategori</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $categories->total() }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-folder-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Kategori Aktif</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $categories->where('is_active', true)->count() }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Produk</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $categories->sum('products_count') }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-product-hunt-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Daftar Kategori</h5>
            <div class="position-relative">
                <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                <input type="text" class="form-control ps-5" placeholder="Cari kategori..." id="searchCategory" style="width: 250px;">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Kode</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama Kategori</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Jumlah Produk</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td style="padding: 1rem;">
                            <span class="badge bg-secondary">{{ $category->code ?? '-' }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $category->name }}</div>
                            @if($category->description)
                            <small class="text-secondary-light">{{ Str::limit($category->description, 50) }}</small>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            @if($category->businessType)
                                <span class="badge-custom badge-primary">{{ $category->businessType->name }}</span>
                            @else
                                <span class="text-secondary-light">-</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <span class="badge bg-info">{{ $category->products_count }} produk</span>
                        </td>
                        <td style="padding: 1rem;">
                            @if($category->is_active)
                                <span class="badge-custom badge-success">Aktif</span>
                            @else
                                <span class="badge-custom badge-secondary">Nonaktif</span>
                            @endif
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-success" onclick="editCategory({{ $category->id }})" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button type="button" class="btn btn-outline-danger" onclick="deleteCategory({{ $category->id }})" title="Hapus" {{ $category->products_count > 0 ? 'disabled' : '' }}>
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">
                            <i class="ri-folder-line" style="font-size: 3rem; color: var(--neutral-400);"></i>
                            <p class="text-secondary-light mt-2">Belum ada kategori produk</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($categories->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-3 px-3 pb-3">
            <div class="text-secondary-light">
                Menampilkan {{ $categories->firstItem() }} sampai {{ $categories->lastItem() }} dari {{ $categories->total() }} kategori
            </div>
            {{ $categories->links() }}
        </div>
        @endif
    </div>

    <!-- Create Category Modal -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.products.categories.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Kategori Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="code" class="form-label">Kode Kategori <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" required>
                            <small class="text-secondary-light">Contoh: KT-001</small>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="business_type_id" class="form-label">Jenis Usaha</label>
                            <select class="form-select @error('business_type_id') is-invalid @enderror" id="business_type_id" name="business_type_id">
                                <option value="">Pilih jenis usaha...</option>
                                @foreach(\App\Models\BusinessType::all() as $bt)
                                    <option value="{{ $bt->id }}" {{ old('business_type_id') == $bt->id ? 'selected' : '' }}>{{ $bt->name }}</option>
                                @endforeach
                            </select>
                            @error('business_type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Aktif
                                </label>
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

    <!-- Edit Category Modal -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="editCategoryForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Kategori Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_name" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_code" class="form-label">Kode Kategori <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="edit_code" name="code" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_business_type_id" class="form-label">Jenis Usaha</label>
                            <select class="form-select" id="edit_business_type_id" name="business_type_id">
                                <option value="">Pilih jenis usaha...</option>
                                @foreach(\App\Models\BusinessType::all() as $bt)
                                    <option value="{{ $bt->id }}">{{ $bt->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="edit_is_active" name="is_active" value="1">
                                <label class="form-check-label" for="edit_is_active">
                                    Aktif
                                </label>
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

    @push('scripts')
    <script>
        // Search functionality
        document.getElementById('searchCategory').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        // Edit category
        function editCategory(id) {
            fetch(`/admin/products/categories/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('edit_name').value = data.name;
                    document.getElementById('edit_code').value = data.code;
                    document.getElementById('edit_business_type_id').value = data.business_type_id || '';
                    document.getElementById('edit_description').value = data.description || '';
                    document.getElementById('edit_is_active').checked = data.is_active;
                    document.getElementById('editCategoryForm').action = `/admin/products/categories/${id}`;

                    new bootstrap.Modal(document.getElementById('editCategoryModal')).show();
                })
                .catch(error => {
                    alert('Error loading category data');
                    console.error(error);
                });
        }

        // Delete category
        function deleteCategory(id) {
            if (confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/admin/products/categories/${id}`;
                form.innerHTML = `
                    @csrf
                    @method('DELETE')
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }

        // Show validation errors if any
        @if($errors->any())
            new bootstrap.Modal(document.getElementById('createCategoryModal')).show();
        @endif
    </script>
    @endpush
</x-layouts.admin.app>
