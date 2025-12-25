<x-layouts.admin.app>
    <x-slot name="title">Tambah Jenis Usaha</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Tambah Jenis Usaha Baru</h2>
            <p class="text-secondary-light mb-0">Tambahkan data jenis usaha baru untuk sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.master-data.business-types.index') }}" class="btn btn-outline-secondary">
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

    <form action="{{ route('admin.master-data.business-types.store') }}" method="POST">
        @csrf

        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <!-- Business Type Information Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-building-line me-2"></i>Informasi Jenis Usaha
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Nama Jenis Usaha <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('name') }}"
                                   placeholder="Contoh: Produsen Makanan Olahan"
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Kode Jenis Usaha <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('code') is-invalid @enderror"
                                   name="code"
                                   value="{{ old('code') }}"
                                   placeholder="Contoh: PMO-01"
                                   required>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Kode unik untuk jenis usaha</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Kategori <span class="text-danger">*</span></label>
                            <select class="form-select @error('category') is-invalid @enderror" name="category" required>
                                <option value="">Pilih Kategori</option>
                                <option value="produsen" {{ old('category') == 'produsen' ? 'selected' : '' }}>Produsen</option>
                                <option value="rumah_potong_hewan" {{ old('category') == 'rumah_potong_hewan' ? 'selected' : '' }}>Rumah Potong Hewan</option>
                                <option value="restoran" {{ old('category') == 'restoran' ? 'selected' : '' }}>Restoran</option>
                                <option value="dapur" {{ old('category') == 'dapur' ? 'selected' : '' }}>Dapur</option>
                                <option value="lainnya" {{ old('category') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Kategori jenis usaha sesuai LPPOM MUI</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      name="description"
                                      rows="4"
                                      placeholder="Deskripsi singkat tentang jenis usaha ini...">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Penjelasan detail tentang jenis usaha</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4">
                <!-- Status Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-settings-line me-2"></i>Pengaturan
                    </h5>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select @error('is_active') is-invalid @enderror" name="is_active">
                            <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                        @error('is_active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-secondary-light">Status aktif/nonaktif jenis usaha</small>
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
                            Simpan Jenis Usaha
                        </button>
                        <a href="{{ route('admin.master-data.business-types.index') }}" class="btn btn-outline-secondary">
                            <i class="ri-close-line me-2"></i>
                            Batal
                        </a>
                    </div>
                </div>

                <!-- Info Card -->
                <div class="alert alert-info" role="alert">
                    <i class="ri-information-line me-2"></i>
                    <strong>Informasi:</strong>
                    <ul class="mb-0 mt-2 small">
                        <li>Field bertanda (*) wajib diisi</li>
                        <li>Kode jenis usaha harus unik</li>
                        <li>Kategori sesuai standar LPPOM MUI</li>
                        <li>Deskripsi membantu auditor memahami jenis usaha</li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</x-layouts.admin.app>
