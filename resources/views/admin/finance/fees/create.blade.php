<x-layouts.admin.app>
    <x-slot name="title">Tambah Konfigurasi Biaya</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Tambah Konfigurasi Biaya</h2>
            <p class="text-secondary-light mb-0">Buat konfigurasi biaya sertifikasi halal baru</p>
        </div>
        <div>
            <a href="{{ route('admin.finance.fees.index') }}" class="btn btn-outline-secondary">
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

    <form action="{{ route('admin.finance.fees.store') }}" method="POST">
        @csrf

        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <!-- Basic Information Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-information-line me-2"></i>Informasi Dasar
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nama Biaya <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('name') }}"
                                   placeholder="Contoh: Biaya Sertifikasi Produk Makanan"
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Kode Biaya <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('code') is-invalid @enderror"
                                   name="code"
                                   value="{{ old('code') }}"
                                   placeholder="Contoh: CERT_FOOD"
                                   style="text-transform: uppercase;"
                                   required>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Kode unik untuk identifikasi biaya</small>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Kategori <span class="text-danger">*</span></label>
                            <select class="form-select @error('category') is-invalid @enderror" name="category" required>
                                <option value="">Pilih Kategori</option>
                                <option value="certification" {{ old('category') == 'certification' ? 'selected' : '' }}>Sertifikasi</option>
                                <option value="audit" {{ old('category') == 'audit' ? 'selected' : '' }}>Audit</option>
                                <option value="renewal" {{ old('category') == 'renewal' ? 'selected' : '' }}>Perpanjangan</option>
                                <option value="inspection" {{ old('category') == 'inspection' ? 'selected' : '' }}>Inspeksi</option>
                                <option value="administrative" {{ old('category') == 'administrative' ? 'selected' : '' }}>Administrasi</option>
                                <option value="other" {{ old('category') == 'other' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      name="description"
                                      rows="3"
                                      placeholder="Jelaskan detail biaya ini...">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Fee Configuration Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-money-dollar-circle-line me-2"></i>Konfigurasi Biaya
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Tipe Biaya <span class="text-danger">*</span></label>
                            <select class="form-select @error('fee_type') is-invalid @enderror"
                                    name="fee_type"
                                    id="feeType"
                                    required>
                                <option value="">Pilih Tipe</option>
                                <option value="fixed" {{ old('fee_type') == 'fixed' ? 'selected' : '' }}>Tetap (Fixed)</option>
                                <option value="percentage" {{ old('fee_type') == 'percentage' ? 'selected' : '' }}>Persentase (%)</option>
                                <option value="variable" {{ old('fee_type') == 'variable' ? 'selected' : '' }}>Variabel</option>
                            </select>
                            @error('fee_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">
                                <span id="amountLabel">Jumlah</span> <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text" id="amountPrefix">Rp</span>
                                <input type="number"
                                       class="form-control @error('amount') is-invalid @enderror"
                                       name="amount"
                                       id="amount"
                                       value="{{ old('amount') }}"
                                       placeholder="0"
                                       step="0.01"
                                       min="0"
                                       required>
                                <span class="input-group-text d-none" id="amountSuffix">%</span>
                                @error('amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6" id="minAmountGroup" style="display: none;">
                            <label class="form-label">Jumlah Minimum</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number"
                                       class="form-control @error('min_amount') is-invalid @enderror"
                                       name="min_amount"
                                       value="{{ old('min_amount') }}"
                                       placeholder="0"
                                       step="1000"
                                       min="0">
                                @error('min_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="text-secondary-light">Opsional, untuk tipe persentase</small>
                        </div>

                        <div class="col-12 col-md-6" id="maxAmountGroup" style="display: none;">
                            <label class="form-label">Jumlah Maximum</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number"
                                       class="form-control @error('max_amount') is-invalid @enderror"
                                       name="max_amount"
                                       value="{{ old('max_amount') }}"
                                       placeholder="0"
                                       step="1000"
                                       min="0">
                                @error('max_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="text-secondary-light">Opsional, untuk tipe persentase</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Formula/Rumus</label>
                            <input type="text"
                                   class="form-control @error('formula') is-invalid @enderror"
                                   name="formula"
                                   value="{{ old('formula') }}"
                                   placeholder="Contoh: base_amount * 0.10">
                            @error('formula')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Opsional, untuk perhitungan variabel</small>
                        </div>
                    </div>
                </div>

                <!-- Validity Period Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-calendar-line me-2"></i>Periode Berlaku
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Berlaku Dari <span class="text-danger">*</span></label>
                            <input type="date"
                                   class="form-control @error('effective_date') is-invalid @enderror"
                                   name="effective_date"
                                   value="{{ old('effective_date', date('Y-m-d')) }}"
                                   required>
                            @error('effective_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Berlaku Sampai</label>
                            <input type="date"
                                   class="form-control @error('expiry_date') is-invalid @enderror"
                                   name="expiry_date"
                                   value="{{ old('expiry_date') }}">
                            @error('expiry_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Kosongkan jika tidak ada batas waktu</small>
                        </div>
                    </div>
                </div>

                <!-- Additional Settings Card -->
                <div class="card-custom">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-settings-line me-2"></i>Pengaturan Tambahan
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       id="isTaxable"
                                       name="is_taxable"
                                       value="1"
                                       {{ old('is_taxable') ? 'checked' : '' }}>
                                <label class="form-check-label" for="isTaxable">
                                    Dikenakan Pajak
                                </label>
                            </div>
                            <small class="text-secondary-light">Centang jika biaya ini dikenakan pajak (PPN/PPh)</small>
                        </div>

                        <div class="col-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       id="isMandatory"
                                       name="is_mandatory"
                                       value="1"
                                       {{ old('is_mandatory') ? 'checked' : '' }}>
                                <label class="form-check-label" for="isMandatory">
                                    Biaya Wajib
                                </label>
                            </div>
                            <small class="text-secondary-light">Centang jika biaya ini wajib ditagihkan</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Catatan Internal</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror"
                                      name="notes"
                                      rows="3"
                                      placeholder="Catatan untuk admin...">{{ old('notes') }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4">
                <!-- Status Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-toggle-line me-2"></i>Status
                    </h5>

                    <div class="mb-3">
                        <label class="form-label">Status Aktif</label>
                        <select class="form-select @error('is_active') is-invalid @enderror" name="is_active">
                            <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                        @error('is_active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-secondary-light">Status konfigurasi biaya dalam sistem</small>
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
                            Simpan Konfigurasi
                        </button>
                        <a href="{{ route('admin.finance.fees.index') }}" class="btn btn-outline-secondary">
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
                        <li>Semua field bertanda (*) wajib diisi</li>
                        <li>Kode biaya harus unik</li>
                        <li>Tipe Tetap: jumlah fix dalam Rupiah</li>
                        <li>Tipe Persentase: nilai dalam persen (0-100)</li>
                        <li>Tipe Variabel: menggunakan formula</li>
                    </ul>
                </div>
            </div>
        </div>
    </form>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const feeTypeSelect = document.getElementById('feeType');
            const amountLabel = document.getElementById('amountLabel');
            const amountPrefix = document.getElementById('amountPrefix');
            const amountSuffix = document.getElementById('amountSuffix');
            const minAmountGroup = document.getElementById('minAmountGroup');
            const maxAmountGroup = document.getElementById('maxAmountGroup');

            feeTypeSelect.addEventListener('change', function() {
                const selectedType = this.value;

                if (selectedType === 'percentage') {
                    amountLabel.textContent = 'Persentase';
                    amountPrefix.classList.add('d-none');
                    amountSuffix.classList.remove('d-none');
                    minAmountGroup.style.display = 'block';
                    maxAmountGroup.style.display = 'block';
                } else if (selectedType === 'fixed') {
                    amountLabel.textContent = 'Jumlah';
                    amountPrefix.classList.remove('d-none');
                    amountSuffix.classList.add('d-none');
                    minAmountGroup.style.display = 'none';
                    maxAmountGroup.style.display = 'none';
                } else if (selectedType === 'variable') {
                    amountLabel.textContent = 'Nilai Dasar';
                    amountPrefix.classList.remove('d-none');
                    amountSuffix.classList.add('d-none');
                    minAmountGroup.style.display = 'none';
                    maxAmountGroup.style.display = 'none';
                }
            });

            // Trigger change event on page load if old value exists
            if (feeTypeSelect.value) {
                feeTypeSelect.dispatchEvent(new Event('change'));
            }

            // Convert code to uppercase
            const codeInput = document.querySelector('input[name="code"]');
            codeInput.addEventListener('input', function() {
                this.value = this.value.toUpperCase();
            });
        });
    </script>
    @endpush
</x-layouts.admin.app>
