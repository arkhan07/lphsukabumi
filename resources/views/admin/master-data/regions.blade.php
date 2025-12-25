<x-layouts.admin.app>
    <x-slot name="title">Master Data Wilayah</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Master Data Wilayah</h2>
            <p class="text-secondary-light mb-0">Kelola data provinsi, kota, dan kabupaten</p>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="ri-add-line me-2"></i>
                Tambah Wilayah
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="stat-icon" style="background: var(--primary-50);">
                            <i class="ri-map-2-line" style="color: var(--primary-600);"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 text-secondary-light">Total Wilayah</h6>
                        <h3 class="mb-0" style="font-weight: 600;">{{ $stats['total'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="stat-icon" style="background: var(--success-50);">
                            <i class="ri-building-line" style="color: var(--success-600);"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 text-secondary-light">Provinsi</h6>
                        <h3 class="mb-0" style="font-weight: 600;">{{ $stats['provinces'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="stat-icon" style="background: var(--warning-50);">
                            <i class="ri-community-line" style="color: var(--warning-600);"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 text-secondary-light">Kota</h6>
                        <h3 class="mb-0" style="font-weight: 600;">{{ $stats['cities'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="stat-icon" style="background: var(--info-50);">
                            <i class="ri-map-pin-line" style="color: var(--info-600);"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 text-secondary-light">Kabupaten</h6>
                        <h3 class="mb-0" style="font-weight: 600;">{{ $stats['regencies'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="card-custom mb-3">
        <form method="GET" action="{{ route('admin.master-data.regions') }}">
            <div class="row g-3">
                <div class="col-12 col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Cari wilayah..." value="{{ request('search') }}">
                </div>
                <div class="col-12 col-md-2">
                    <select name="type" class="form-select">
                        <option value="">Semua Tipe</option>
                        <option value="province" {{ request('type') == 'province' ? 'selected' : '' }}>Provinsi</option>
                        <option value="city" {{ request('type') == 'city' ? 'selected' : '' }}>Kota</option>
                        <option value="regency" {{ request('type') == 'regency' ? 'selected' : '' }}>Kabupaten</option>
                    </select>
                </div>
                <div class="col-12 col-md-3">
                    <select name="parent_id" class="form-select">
                        <option value="">Semua Induk</option>
                        @foreach($parentRegions as $parent)
                            <option value="{{ $parent->id }}" {{ request('parent_id') == $parent->id ? 'selected' : '' }}>
                                {{ $parent->name }} ({{ ucfirst($parent->type) }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-2">
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
            <h5 class="card-title mb-0">Daftar Wilayah</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="regionsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Kode</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama</th>
                        <th style="padding: 1rem; font-weight: 600;">Tipe</th>
                        <th style="padding: 1rem; font-weight: 600;">Induk</th>
                        <th style="padding: 1rem; font-weight: 600;">Pengajuan</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($regions as $region)
                    <tr>
                        <td style="padding: 1rem;">
                            <span class="badge bg-secondary">{{ $region->code }}</span>
                        </td>
                        <td style="padding: 1rem; font-weight: 500;">{{ $region->name }}</td>
                        <td style="padding: 1rem;">
                            @if($region->type == 'province')
                                <span class="badge" style="background: var(--primary-100); color: var(--primary-700);">Provinsi</span>
                            @elseif($region->type == 'city')
                                <span class="badge" style="background: var(--success-100); color: var(--success-700);">Kota</span>
                            @else
                                <span class="badge" style="background: var(--info-100); color: var(--info-700);">Kabupaten</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            @if($region->parent)
                                {{ $region->parent->name }}
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <span class="badge bg-info">{{ $region->submissions_count }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            @if($region->is_active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-secondary">Tidak Aktif</span>
                            @endif
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" onclick="editRegion({{ $region->id }})" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteRegion({{ $region->id }})" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">
                            <div class="text-muted">
                                <i class="ri-inbox-line" style="font-size: 3rem;"></i>
                                <p class="mt-2">Tidak ada data wilayah</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($regions->hasPages())
        <div class="card-footer-custom">
            {{ $regions->links() }}
        </div>
        @endif
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.master-data.regions.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Wilayah Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Wilayah <span class="text-danger">*</span></label>
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
                            <small class="text-muted">Contoh: JABAR, SKB, CISAAT</small>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipe <span class="text-danger">*</span></label>
                            <select class="form-select @error('type') is-invalid @enderror" name="type" required>
                                <option value="">Pilih Tipe</option>
                                <option value="province" {{ old('type') == 'province' ? 'selected' : '' }}>Provinsi</option>
                                <option value="city" {{ old('type') == 'city' ? 'selected' : '' }}>Kota</option>
                                <option value="regency" {{ old('type') == 'regency' ? 'selected' : '' }}>Kabupaten</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Wilayah Induk</label>
                            <select class="form-select @error('parent_id') is-invalid @enderror" name="parent_id">
                                <option value="">Tidak Ada (Top Level)</option>
                                @foreach($parentRegions as $parent)
                                    <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                                        {{ $parent->name }} ({{ ucfirst($parent->type) }})
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Kota harus di bawah Provinsi, Kabupaten di bawah Provinsi/Kota</small>
                            @error('parent_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1"
                                       id="is_active" {{ old('is_active', true) ? 'checked' : '' }}>
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

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="editForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Wilayah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Wilayah <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="edit_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="code" id="edit_code" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipe <span class="text-danger">*</span></label>
                            <select class="form-select" name="type" id="edit_type" required>
                                <option value="province">Provinsi</option>
                                <option value="city">Kota</option>
                                <option value="regency">Kabupaten</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Wilayah Induk</label>
                            <select class="form-select" name="parent_id" id="edit_parent_id">
                                <option value="">Tidak Ada</option>
                                @foreach($parentRegions as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }} ({{ ucfirst($parent->type) }})</option>
                                @endforeach
                            </select>
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

        // Edit Region
        function editRegion(id) {
            fetch(`/admin/master-data/regions`)
                .then(response => response.text())
                .then(html => {
                    // Parse the current page to get region data
                    // In a real app, you'd fetch JSON data from an API endpoint
                    // For now, we'll use a simpler approach

                    const editModal = new bootstrap.Modal(document.getElementById('editModal'));
                    const form = document.getElementById('editForm');
                    form.action = `/admin/master-data/regions/${id}`;

                    // You would populate the form fields here with data from the server
                    // For now, showing the modal
                    editModal.show();
                });
        }

        // Delete Region
        function deleteRegion(id) {
            if (confirm('Apakah Anda yakin ingin menghapus wilayah ini?')) {
                const form = document.getElementById('deleteForm');
                form.action = `/admin/master-data/regions/${id}`;
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
