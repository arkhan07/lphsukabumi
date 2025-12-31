<x-layouts.admin.app>
    <x-slot name="title">Master Data Wilayah</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Master Data</div>
                    <h2 class="page-title">Wilayah</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#createModal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Tambah Wilayah
                        </button>
                        <button class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#createModal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Statistics Cards -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Wilayah</div>
                            </div>
                            <div class="h1 mb-0 mt-1">{{ $stats['total'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Provinsi</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 mt-1">{{ $stats['provinces'] }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-blue-lt">Provinsi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Kota</div>
                            </div>
                            <div class="h1 mb-0 mt-1">{{ $stats['cities'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Kabupaten</div>
                            </div>
                            <div class="h1 mb-0 mt-1">{{ $stats['regencies'] }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success/Error Messages -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    </div>
                    <div>{{ session('success') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>
                    </div>
                    <div>{{ session('error') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            <!-- Filters & Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Wilayah</h3>
                </div>
                <div class="card-body border-bottom py-3">
                    <form method="GET" action="{{ route('admin.master-data.regions') }}">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                    </span>
                                    <input type="text" name="search" class="form-control" placeholder="Cari wilayah..." value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select name="category" class="form-select">
                                    <option value="">Semua Kategori</option>
                                    <option value="food" {{ request('category') == 'food' ? 'selected' : '' }}>Makanan</option>
                                    <option value="beverage" {{ request('category') == 'beverage' ? 'selected' : '' }}>Minuman</option>
                                    <option value="cosmetics" {{ request('category') == 'cosmetics' ? 'selected' : '' }}>Kosmetik</option>
                                    <option value="pharmaceutical" {{ request('category') == 'pharmaceutical' ? 'selected' : '' }}>Farmasi</option>
                                    <option value="other" {{ request('category') == 'other' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="status" class="form-select">
                                    <option value="">Semua Status</option>
                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Aktif</option>
                                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary w-100">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Permohonan</th>
                                <th class="text-center">Tipe Produk</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($regions as $type)
                            <tr>
                                <td><span class="badge badge-outline text-secondary">{{ $type->code }}</span></td>
                                <td class="text-muted">{{ $type->name }}</td>
                                <td>
                                    @if($type->category == 'food')
                                        <span class="badge bg-success-lt">Makanan</span>
                                    @elseif($type->category == 'beverage')
                                        <span class="badge bg-info-lt">Minuman</span>
                                    @elseif($type->category == 'cosmetics')
                                        <span class="badge bg-warning-lt">Kosmetik</span>
                                    @elseif($type->category == 'pharmaceutical')
                                        <span class="badge bg-danger-lt">Farmasi</span>
                                    @else
                                        <span class="badge bg-secondary-lt">Lainnya</span>
                                    @endif
                                </td>
                                <td class="text-muted">{{ Str::limit($type->description, 50) ?: '-' }}</td>
                                <td class="text-center"><span class="badge bg-azure-lt">{{ $type->submissions_count }}</span></td>
                                <td class="text-center"><span class="badge bg-blue-lt">{{ $type->product_types_count }}</span></td>
                                <td>
                                    @if($type->is_active)
                                        <span class="badge bg-success-lt">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary-lt">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-icon btn-sm btn-ghost-primary" onclick="editBusinessType({{ $type->id }}, {{ json_encode($type) }})" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                    </button>
                                    <button class="btn btn-icon btn-sm btn-ghost-danger" onclick="deleteBusinessType({{ $type->id }})" title="Hapus">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 7v5l-6 6l-8 -8l6 -6h5" /></svg>
                                    <div>Tidak ada data wilayah</div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if($regions->hasPages())
                <div class="card-footer d-flex align-items-center">
                    {{ $regions->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div class="modal modal-blur fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.master-data.regions.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Wilayah Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label required">Nama Wilayah</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required placeholder="Contoh: Restoran">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Kode</label>
                            <input type="text" class="form-control @error('code') is-invalid @enderror"
                                   name="code" value="{{ old('code') }}" required placeholder="Contoh: RESTO">
                            <small class="form-hint">Gunakan huruf kapital, tanpa spasi. Gunakan tanda hubung (-) untuk pemisah.</small>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Kategori</label>
                            <select class="form-select @error('category') is-invalid @enderror" name="category" required>
                                <option value="">Pilih Kategori</option>
                                <option value="food" {{ old('category') == 'food' ? 'selected' : '' }}>Makanan</option>
                                <option value="beverage" {{ old('category') == 'beverage' ? 'selected' : '' }}>Minuman</option>
                                <option value="cosmetics" {{ old('category') == 'cosmetics' ? 'selected' : '' }}>Kosmetik</option>
                                <option value="pharmaceutical" {{ old('category') == 'pharmaceutical' ? 'selected' : '' }}>Farmasi</option>
                                <option value="other" {{ old('category') == 'other' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      name="description" rows="3" placeholder="Deskripsi singkat tentang wilayah ini">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <span class="form-check-label">Status Aktif</span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal modal-blur fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" id="editForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Wilayah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label required">Nama Wilayah</label>
                            <input type="text" class="form-control" name="name" id="edit_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Kode</label>
                            <input type="text" class="form-control" name="code" id="edit_code" required>
                            <small class="form-hint">Gunakan huruf kapital, tanpa spasi. Gunakan tanda hubung (-) untuk pemisah.</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Kategori</label>
                            <select class="form-select" name="category" id="edit_category" required>
                                <option value="food">Makanan</option>
                                <option value="beverage">Minuman</option>
                                <option value="cosmetics">Kosmetik</option>
                                <option value="pharmaceutical">Farmasi</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" id="edit_description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" id="edit_is_active">
                                <span class="form-check-label">Status Aktif</span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                            Update
                        </button>
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

        // Edit Business Type
        function editBusinessType(id, data) {
            const editModal = new bootstrap.Modal(document.getElementById('editModal'));
            const form = document.getElementById('editForm');

            form.action = `/admin/master-data/regions/${id}`;
            document.getElementById('edit_name').value = data.name;
            document.getElementById('edit_code').value = data.code;
            document.getElementById('edit_category').value = data.category;
            document.getElementById('edit_description').value = data.description || '';
            document.getElementById('edit_is_active').checked = data.is_active;

            editModal.show();
        }

        // Delete Business Type
        function deleteBusinessType(id) {
            if (confirm('Apakah Anda yakin ingin menghapus wilayah ini?\n\nPerhatian: Jenis usaha tidak dapat dihapus jika masih digunakan dalam permohonan atau memiliki tipe produk.')) {
                const form = document.getElementById('deleteForm');
                form.action = `/admin/master-data/regions/${id}`;
                form.submit();
            }
        }
    </script>
    @endpush
</x-layouts.admin.app>
