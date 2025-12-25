<x-layouts.admin.app>
    <x-slot name="title">Edit Wilayah</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Edit Wilayah</h2>
            <p class="text-secondary-light mb-0">Perbarui informasi wilayah administratif</p>
        </div>
        <div>
            <a href="{{ route('admin.master-data.regions.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="ri-checkbox-circle-line me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="ri-error-warning-line me-2"></i>
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="ri-error-warning-line me-2"></i>
        <strong>Terdapat kesalahan pada form:</strong>
        <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="{{ route('admin.master-data.regions.update', $region->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <!-- Region Information Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-map-pin-line me-2"></i>Informasi Wilayah
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Nama Wilayah <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('name', $region->name) }}"
                                   placeholder="Contoh: Jawa Barat"
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Kode Wilayah <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('code') is-invalid @enderror"
                                   name="code"
                                   value="{{ old('code', $region->code) }}"
                                   placeholder="Contoh: 32"
                                   required>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Kode wilayah sesuai standar Kemendagri</small>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Tipe Wilayah <span class="text-danger">*</span></label>
                            <select class="form-select @error('type') is-invalid @enderror" name="type" id="typeSelect" required>
                                <option value="">Pilih Tipe Wilayah</option>
                                <option value="provinsi" {{ old('type', $region->type) == 'provinsi' ? 'selected' : '' }}>Provinsi</option>
                                <option value="kabupaten" {{ old('type', $region->type) == 'kabupaten' ? 'selected' : '' }}>Kabupaten</option>
                                <option value="kota" {{ old('type', $region->type) == 'kota' ? 'selected' : '' }}>Kota</option>
                                <option value="kecamatan" {{ old('type', $region->type) == 'kecamatan' ? 'selected' : '' }}>Kecamatan</option>
                                <option value="desa" {{ old('type', $region->type) == 'desa' ? 'selected' : '' }}>Desa/Kelurahan</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Wilayah Induk</label>
                            <select class="form-select @error('parent_id') is-invalid @enderror" name="parent_id" id="parentSelect">
                                <option value="">Tidak Ada (Level Tertinggi)</option>
                                @foreach($parents ?? [] as $parent)
                                    <option value="{{ $parent->id }}"
                                        {{ old('parent_id', $region->parent_id) == $parent->id ? 'selected' : '' }}>
                                        {{ $parent->name }} ({{ ucfirst($parent->type) }})
                                    </option>
                                @endforeach
                            </select>
                            @error('parent_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Pilih wilayah induk jika ada</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4">
                <!-- Info Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-information-line me-2"></i>Informasi Data
                    </h5>

                    <div class="mb-3">
                        <small class="text-secondary-light d-block mb-1">ID Wilayah</small>
                        <strong>{{ $region->id }}</strong>
                    </div>

                    <div class="mb-3">
                        <small class="text-secondary-light d-block mb-1">Dibuat Pada</small>
                        <strong>{{ $region->created_at ? $region->created_at->format('d M Y H:i') : '-' }}</strong>
                    </div>

                    <div class="mb-0">
                        <small class="text-secondary-light d-block mb-1">Terakhir Diperbarui</small>
                        <strong>{{ $region->updated_at ? $region->updated_at->format('d M Y H:i') : '-' }}</strong>
                    </div>
                </div>

                <!-- Status Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-settings-line me-2"></i>Pengaturan
                    </h5>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select @error('is_active') is-invalid @enderror" name="is_active">
                            <option value="1" {{ old('is_active', $region->is_active) == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ old('is_active', $region->is_active) == '0' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                        @error('is_active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-secondary-light">Status aktif/nonaktif wilayah</small>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-save-line me-2"></i>Aksi
                    </h5>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="ri-save-line me-2"></i>
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('admin.master-data.regions.index') }}" class="btn btn-outline-secondary">
                            <i class="ri-close-line me-2"></i>
                            Batal
                        </a>
                    </div>
                </div>

                <!-- Danger Zone -->
                <div class="card-custom border-danger mb-3">
                    <h5 class="mb-3 text-danger" style="font-weight: 600;">
                        <i class="ri-alert-line me-2"></i>Danger Zone
                    </h5>

                    <p class="text-secondary-light small mb-3">
                        Menghapus wilayah akan menghapus semua data terkait secara permanen.
                    </p>

                    <form action="{{ route('admin.master-data.regions.destroy', $region->id) }}"
                          method="POST"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus wilayah ini? Tindakan ini tidak dapat dibatalkan!');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="ri-delete-bin-line me-2"></i>
                            Hapus Wilayah
                        </button>
                    </form>
                </div>

                <!-- Info Alert -->
                <div class="alert alert-info" role="alert">
                    <i class="ri-information-line me-2"></i>
                    <strong>Informasi:</strong>
                    <ul class="mb-0 mt-2 small">
                        <li>Field bertanda (*) wajib diisi</li>
                        <li>Kode wilayah harus unik</li>
                        <li>Perhatikan hierarki wilayah</li>
                    </ul>
                </div>
            </div>
        </div>
    </form>

    @push('styles')
    <style>
        .border-danger {
            border: 1px solid var(--danger-main) !important;
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Update parent select based on type
        document.getElementById('typeSelect').addEventListener('change', function() {
            const type = this.value;
            const parentSelect = document.getElementById('parentSelect');

            // If provinsi selected, disable parent selection
            if (type === 'provinsi') {
                parentSelect.value = '';
                parentSelect.disabled = true;
            } else {
                parentSelect.disabled = false;
            }
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.getElementById('typeSelect');
            if (typeSelect.value === 'provinsi') {
                document.getElementById('parentSelect').disabled = true;
            }
        });
    </script>
    @endpush
</x-layouts.admin.app>
