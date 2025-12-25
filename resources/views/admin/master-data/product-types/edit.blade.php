<x-layouts.admin.app>
    <x-slot name="title">Edit Jenis Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Edit Jenis Produk</h2>
            <p class="text-secondary-light mb-0">Perbarui informasi jenis produk untuk sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.master-data.product-types.index') }}" class="btn btn-outline-secondary">
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

    <form action="{{ route('admin.master-data.product-types.update', $productType->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <!-- Product Type Information Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-product-hunt-line me-2"></i>Informasi Jenis Produk
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Nama Jenis Produk <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('name', $productType->name) }}"
                                   placeholder="Contoh: Mie Instan"
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Kode Jenis Produk <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('code') is-invalid @enderror"
                                   name="code"
                                   value="{{ old('code', $productType->code) }}"
                                   placeholder="Contoh: PRD-MI-01"
                                   required>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Kode unik untuk jenis produk</small>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Jenis Usaha <span class="text-danger">*</span></label>
                            <select class="form-select @error('business_type_id') is-invalid @enderror" name="business_type_id" required>
                                <option value="">Pilih Jenis Usaha</option>
                                @foreach($businessTypes ?? [] as $businessType)
                                    <option value="{{ $businessType->id }}"
                                        {{ old('business_type_id', $productType->business_type_id) == $businessType->id ? 'selected' : '' }}>
                                        {{ $businessType->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('business_type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Pilih jenis usaha terkait</small>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Kategori <span class="text-danger">*</span></label>
                            <select class="form-select @error('category') is-invalid @enderror" name="category" required>
                                <option value="">Pilih Kategori</option>
                                <option value="makanan" {{ old('category', $productType->category) == 'makanan' ? 'selected' : '' }}>Makanan</option>
                                <option value="minuman" {{ old('category', $productType->category) == 'minuman' ? 'selected' : '' }}>Minuman</option>
                                <option value="obat" {{ old('category', $productType->category) == 'obat' ? 'selected' : '' }}>Obat</option>
                                <option value="kosmetik" {{ old('category', $productType->category) == 'kosmetik' ? 'selected' : '' }}>Kosmetik</option>
                                <option value="lainnya" {{ old('category', $productType->category) == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Kategori produk</small>
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
                        <small class="text-secondary-light d-block mb-1">ID Jenis Produk</small>
                        <strong>{{ $productType->id }}</strong>
                    </div>

                    <div class="mb-3">
                        <small class="text-secondary-light d-block mb-1">Dibuat Pada</small>
                        <strong>{{ $productType->created_at ? $productType->created_at->format('d M Y H:i') : '-' }}</strong>
                    </div>

                    <div class="mb-0">
                        <small class="text-secondary-light d-block mb-1">Terakhir Diperbarui</small>
                        <strong>{{ $productType->updated_at ? $productType->updated_at->format('d M Y H:i') : '-' }}</strong>
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
                            <option value="1" {{ old('is_active', $productType->is_active) == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ old('is_active', $productType->is_active) == '0' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                        @error('is_active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-secondary-light">Status aktif/nonaktif jenis produk</small>
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
                        <a href="{{ route('admin.master-data.product-types.index') }}" class="btn btn-outline-secondary">
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
                        Menghapus jenis produk akan menghapus semua data terkait secara permanen.
                    </p>

                    <form action="{{ route('admin.master-data.product-types.destroy', $productType->id) }}"
                          method="POST"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus jenis produk ini? Tindakan ini tidak dapat dibatalkan!');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="ri-delete-bin-line me-2"></i>
                            Hapus Jenis Produk
                        </button>
                    </form>
                </div>

                <!-- Info Alert -->
                <div class="alert alert-info" role="alert">
                    <i class="ri-information-line me-2"></i>
                    <strong>Informasi:</strong>
                    <ul class="mb-0 mt-2 small">
                        <li>Field bertanda (*) wajib diisi</li>
                        <li>Kode jenis produk harus unik</li>
                        <li>Pastikan jenis usaha sesuai</li>
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
</x-layouts.admin.app>
