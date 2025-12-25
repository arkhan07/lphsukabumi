<x-layouts.admin.app>
    <x-slot name="title">Tambah Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Tambah Produk Baru</h2>
            <p class="text-secondary-light mb-0">Tambahkan produk baru untuk sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-3">
            <!-- Main Content -->
            <div class="col-12 col-lg-8">
                <!-- Basic Information -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-information-line me-2"></i>
                        Informasi Dasar
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Permohonan <span class="text-danger">*</span></label>
                            <select class="form-select @error('submission_id') is-invalid @enderror" name="submission_id" required>
                                <option value="">Pilih Permohonan</option>
                                @foreach($submissions ?? [] as $submission)
                                    <option value="{{ $submission->id }}" {{ old('submission_id') == $submission->id ? 'selected' : '' }}>
                                        {{ $submission->submission_number }} - {{ $submission->company_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('submission_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Tipe Produk <span class="text-danger">*</span></label>
                            <select class="form-select @error('product_type_id') is-invalid @enderror" name="product_type_id" required>
                                <option value="">Pilih Tipe Produk</option>
                                @foreach($productTypes ?? [] as $type)
                                    <option value="{{ $type->id }}" {{ old('product_type_id') == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('product_type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Nama Produk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                   name="product_name" value="{{ old('product_name') }}"
                                   placeholder="Masukkan nama produk" required>
                            @error('product_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">SKU / Kode Produk</label>
                            <input type="text" class="form-control @error('product_code') is-invalid @enderror"
                                   name="product_code" value="{{ old('product_code') }}"
                                   placeholder="Contoh: PRD-001">
                            @error('product_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Brand / Merek</label>
                            <input type="text" class="form-control @error('brand_name') is-invalid @enderror"
                                   name="brand_name" value="{{ old('brand_name') }}"
                                   placeholder="Nama brand">
                            @error('brand_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Varian</label>
                            <input type="text" class="form-control @error('variant') is-invalid @enderror"
                                   name="variant" value="{{ old('variant') }}"
                                   placeholder="Contoh: Original, Pedas, dll">
                            @error('variant')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Jenis Kemasan</label>
                            <input type="text" class="form-control @error('packaging_type') is-invalid @enderror"
                                   name="packaging_type" value="{{ old('packaging_type') }}"
                                   placeholder="Contoh: Botol, Sachet, Box">
                            @error('packaging_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control @error('product_description') is-invalid @enderror"
                                      name="product_description" rows="4"
                                      placeholder="Deskripsi detail tentang produk">{{ old('product_description') }}</textarea>
                            @error('product_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-list-check me-2"></i>
                        Detail Produk
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Berat Bersih</label>
                            <div class="input-group">
                                <input type="number" step="0.01" class="form-control @error('net_weight') is-invalid @enderror"
                                       name="net_weight" value="{{ old('net_weight') }}"
                                       placeholder="0.00">
                                <select class="form-select @error('weight_unit') is-invalid @enderror" name="weight_unit" style="max-width: 100px;">
                                    <option value="gram" {{ old('weight_unit') == 'gram' ? 'selected' : '' }}>gram</option>
                                    <option value="kg" {{ old('weight_unit') == 'kg' ? 'selected' : '' }}>kg</option>
                                    <option value="ml" {{ old('weight_unit') == 'ml' ? 'selected' : '' }}>ml</option>
                                    <option value="liter" {{ old('weight_unit') == 'liter' ? 'selected' : '' }}>liter</option>
                                </select>
                            </div>
                            @error('net_weight')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Barcode</label>
                            <input type="text" class="form-control @error('barcode') is-invalid @enderror"
                                   name="barcode" value="{{ old('barcode') }}"
                                   placeholder="Nomor barcode">
                            @error('barcode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">HS Code</label>
                            <input type="text" class="form-control @error('hs_code') is-invalid @enderror"
                                   name="hs_code" value="{{ old('hs_code') }}"
                                   placeholder="Kode HS">
                            @error('hs_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Volume Produksi Bulanan</label>
                            <input type="number" class="form-control @error('monthly_production_volume') is-invalid @enderror"
                                   name="monthly_production_volume" value="{{ old('monthly_production_volume') }}"
                                   placeholder="Jumlah unit per bulan">
                            @error('monthly_production_volume')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Masa Simpan</label>
                            <div class="input-group">
                                <input type="number" step="0.01" class="form-control @error('shelf_life_duration') is-invalid @enderror"
                                       name="shelf_life_duration" value="{{ old('shelf_life_duration') }}"
                                       placeholder="0">
                                <select class="form-select @error('shelf_life_unit') is-invalid @enderror" name="shelf_life_unit" style="max-width: 120px;">
                                    <option value="">Pilih</option>
                                    <option value="days" {{ old('shelf_life_unit') == 'days' ? 'selected' : '' }}>Hari</option>
                                    <option value="weeks" {{ old('shelf_life_unit') == 'weeks' ? 'selected' : '' }}>Minggu</option>
                                    <option value="months" {{ old('shelf_life_unit') == 'months' ? 'selected' : '' }}>Bulan</option>
                                    <option value="years" {{ old('shelf_life_unit') == 'years' ? 'selected' : '' }}>Tahun</option>
                                </select>
                            </div>
                            @error('shelf_life_duration')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Komposisi / Ingredients</label>
                            <textarea class="form-control @error('ingredients') is-invalid @enderror"
                                      name="ingredients" rows="3"
                                      placeholder="Daftar komposisi bahan produk">{{ old('ingredients') }}</textarea>
                            @error('ingredients')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Pisahkan setiap bahan dengan koma</small>
                        </div>
                    </div>
                </div>

                <!-- Halal Information -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-shield-check-line me-2"></i>
                        Informasi Halal
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Status Halal <span class="text-danger">*</span></label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="halal_status" id="halal"
                                           value="halal" {{ old('halal_status', 'doubtful') == 'halal' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="halal">
                                        <i class="ri-checkbox-circle-line text-success me-1"></i>Halal
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="halal_status" id="not_halal"
                                           value="not_halal" {{ old('halal_status') == 'not_halal' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="not_halal">
                                        <i class="ri-close-circle-line text-danger me-1"></i>Tidak Halal
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="halal_status" id="doubtful"
                                           value="doubtful" {{ old('halal_status', 'doubtful') == 'doubtful' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="doubtful">
                                        <i class="ri-question-line text-warning me-1"></i>Meragukan
                                    </label>
                                </div>
                            </div>
                            @error('halal_status')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Catatan Status Halal</label>
                            <textarea class="form-control @error('halal_notes') is-invalid @enderror"
                                      name="halal_notes" rows="3"
                                      placeholder="Catatan terkait status halal produk">{{ old('halal_notes') }}</textarea>
                            @error('halal_notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Certificate Information -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-award-line me-2"></i>
                        Informasi Sertifikat
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nomor Sertifikat</label>
                            <input type="text" class="form-control @error('certificate_number') is-invalid @enderror"
                                   name="certificate_number" value="{{ old('certificate_number') }}"
                                   placeholder="Nomor sertifikat halal">
                            @error('certificate_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Kosongkan jika belum memiliki sertifikat</small>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Tanggal Terbit Sertifikat</label>
                            <input type="date" class="form-control @error('certificate_issue_date') is-invalid @enderror"
                                   name="certificate_issue_date" value="{{ old('certificate_issue_date') }}">
                            @error('certificate_issue_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Tanggal Kadaluarsa Sertifikat</label>
                            <input type="date" class="form-control @error('certificate_expiry_date') is-invalid @enderror"
                                   name="certificate_expiry_date" value="{{ old('certificate_expiry_date') }}">
                            @error('certificate_expiry_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4">
                <!-- Image Upload -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Gambar Produk</h5>
                    <div class="mb-3">
                        <div class="border rounded p-3 text-center" style="min-height: 200px; background: var(--neutral-50);">
                            <img id="imagePreview" src="#" alt="Preview"
                                 style="max-width: 100%; max-height: 300px; display: none; border-radius: 8px;">
                            <div id="imagePlaceholder">
                                <i class="ri-image-add-line" style="font-size: 3rem; color: var(--neutral-400);"></i>
                                <p class="text-secondary-light mt-2 mb-0">Upload gambar produk</p>
                                <small class="text-secondary-light">JPG, PNG, maksimal 2MB</small>
                            </div>
                        </div>
                    </div>
                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                           name="image" id="imageInput" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Status -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Status</h5>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                               value="1" {{ old('is_active', '1') == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            Produk Aktif
                        </label>
                    </div>
                    <small class="text-secondary-light">Nonaktifkan jika produk sudah tidak diproduksi</small>
                </div>

                <!-- Actions -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-2"></i>
                        Simpan Produk
                    </button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
                        <i class="ri-close-line me-2"></i>
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </form>

    @push('scripts')
    <script>
        // Image preview
        document.getElementById('imageInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').src = e.target.result;
                    document.getElementById('imagePreview').style.display = 'block';
                    document.getElementById('imagePlaceholder').style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
    @endpush
</x-layouts.admin.app>
