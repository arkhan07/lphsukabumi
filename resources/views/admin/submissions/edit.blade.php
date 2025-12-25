<x-layouts.admin.app>
    <x-slot name="title">Edit Permohonan</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Edit Permohonan Sertifikasi Halal</h2>
            <p class="text-secondary-light mb-0">
                Perbarui informasi permohonan: <strong>{{ $submission->submission_number ?? 'N/A' }}</strong>
            </p>
        </div>
        <div>
            <a href="{{ route('admin.submissions.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <!-- Validation Errors -->
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h6 class="alert-heading"><i class="ri-error-warning-line me-2"></i>Terdapat kesalahan pada formulir:</h6>
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Multi-Step Progress -->
    <div class="card-custom mb-4">
        <div class="p-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="step-item active" id="step-indicator-1">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <div class="step-title">Profil Perusahaan</div>
                            <div class="step-description">Data perusahaan dan produksi</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-item" id="step-indicator-2">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <div class="step-title">Informasi Produk</div>
                            <div class="step-description">Detail produk yang diajukan</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-item" id="step-indicator-3">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <div class="step-title">Dokumen</div>
                            <div class="step-description">Upload dokumen pendukung</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form -->
    <form action="{{ route('admin.submissions.update', $submission->id) }}" method="POST" enctype="multipart/form-data" id="submissionForm">
        @csrf
        @method('PUT')

        <!-- Step 1: Company Profile -->
        <div class="step-content-panel active" id="step-1">
            <div class="card-custom mb-4">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0"><i class="ri-building-line me-2"></i>Data Perusahaan</h5>
                </div>
                <div class="p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="company_name" class="form-label">Nama Perusahaan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ old('company_name', $submission->company_name) }}" required>
                            @error('company_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="business_type_id" class="form-label">Jenis Usaha <span class="text-danger">*</span></label>
                            <select class="form-select @error('business_type_id') is-invalid @enderror" id="business_type_id" name="business_type_id" required>
                                <option value="">Pilih Jenis Usaha</option>
                                @foreach($businessTypes ?? [] as $type)
                                    <option value="{{ $type->id }}" {{ old('business_type_id', $submission->business_type_id) == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('business_type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="company_email" class="form-label">Email Perusahaan <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('company_email') is-invalid @enderror" id="company_email" name="company_email" value="{{ old('company_email', $submission->company_email) }}" required>
                            @error('company_email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="company_phone" class="form-label">Telepon Perusahaan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('company_phone') is-invalid @enderror" id="company_phone" name="company_phone" value="{{ old('company_phone', $submission->company_phone) }}" required>
                            @error('company_phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="company_address" class="form-label">Alamat Perusahaan <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('company_address') is-invalid @enderror" id="company_address" name="company_address" rows="3" required>{{ old('company_address', $submission->company_address) }}</textarea>
                            @error('company_address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="region_id" class="form-label">Wilayah <span class="text-danger">*</span></label>
                            <select class="form-select @error('region_id') is-invalid @enderror" id="region_id" name="region_id" required>
                                <option value="">Pilih Wilayah</option>
                                @foreach($regions ?? [] as $region)
                                    <option value="{{ $region->id }}" {{ old('region_id', $submission->region_id) == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                @endforeach
                            </select>
                            @error('region_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="npwp" class="form-label">NPWP</label>
                            <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ old('npwp', $submission->npwp) }}">
                            @error('npwp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="nib" class="form-label">NIB</label>
                            <input type="text" class="form-control @error('nib') is-invalid @enderror" id="nib" name="nib" value="{{ old('nib', $submission->nib) }}">
                            @error('nib')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-custom mb-4">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0"><i class="ri-factory-line me-2"></i>Informasi Produksi</h5>
                </div>
                <div class="p-4">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="production_location" class="form-label">Lokasi Produksi <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('production_location') is-invalid @enderror" id="production_location" name="production_location" rows="2" required>{{ old('production_location', $submission->production_location) }}</textarea>
                            @error('production_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="location_latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control @error('location_latitude') is-invalid @enderror" id="location_latitude" name="location_latitude" value="{{ old('location_latitude', $submission->location_latitude) }}" placeholder="-6.123456">
                            @error('location_latitude')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="location_longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control @error('location_longitude') is-invalid @enderror" id="location_longitude" name="location_longitude" value="{{ old('location_longitude', $submission->location_longitude) }}" placeholder="106.123456">
                            @error('location_longitude')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="employee_count" class="form-label">Jumlah Karyawan</label>
                            <input type="number" class="form-control @error('employee_count') is-invalid @enderror" id="employee_count" name="employee_count" value="{{ old('employee_count', $submission->employee_count) }}">
                            @error('employee_count')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="production_capacity" class="form-label">Kapasitas Produksi</label>
                            <input type="number" step="0.01" class="form-control @error('production_capacity') is-invalid @enderror" id="production_capacity" name="production_capacity" value="{{ old('production_capacity', $submission->production_capacity) }}">
                            @error('production_capacity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <label for="production_capacity_unit" class="form-label">Satuan</label>
                            <select class="form-select @error('production_capacity_unit') is-invalid @enderror" id="production_capacity_unit" name="production_capacity_unit">
                                <option value="">Pilih</option>
                                <option value="kg" {{ old('production_capacity_unit', $submission->production_capacity_unit) == 'kg' ? 'selected' : '' }}>Kg</option>
                                <option value="liter" {{ old('production_capacity_unit', $submission->production_capacity_unit) == 'liter' ? 'selected' : '' }}>Liter</option>
                                <option value="pcs" {{ old('production_capacity_unit', $submission->production_capacity_unit) == 'pcs' ? 'selected' : '' }}>Pcs</option>
                                <option value="ton" {{ old('production_capacity_unit', $submission->production_capacity_unit) == 'ton' ? 'selected' : '' }}>Ton</option>
                            </select>
                            @error('production_capacity_unit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-custom mb-4">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0"><i class="ri-file-text-line me-2"></i>Jenis Sertifikasi</h5>
                </div>
                <div class="p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="certification_type" class="form-label">Jenis Sertifikasi <span class="text-danger">*</span></label>
                            <select class="form-select @error('certification_type') is-invalid @enderror" id="certification_type" name="certification_type" required>
                                <option value="">Pilih Jenis Sertifikasi</option>
                                <option value="new" {{ old('certification_type', $submission->certification_type) == 'new' ? 'selected' : '' }}>Sertifikasi Baru</option>
                                <option value="renewal" {{ old('certification_type', $submission->certification_type) == 'renewal' ? 'selected' : '' }}>Perpanjangan</option>
                                <option value="extension" {{ old('certification_type', $submission->certification_type) == 'extension' ? 'selected' : '' }}>Perluasan</option>
                            </select>
                            @error('certification_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6" id="certificate_number_field" style="display: {{ in_array(old('certification_type', $submission->certification_type), ['renewal', 'extension']) ? 'block' : 'none' }};">
                            <label for="halal_certificate_number" class="form-label">Nomor Sertifikat Halal Sebelumnya</label>
                            <input type="text" class="form-control @error('halal_certificate_number') is-invalid @enderror" id="halal_certificate_number" name="halal_certificate_number" value="{{ old('halal_certificate_number', $submission->halal_certificate_number) }}">
                            @error('halal_certificate_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="notes" class="form-label">Catatan Tambahan</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror" id="notes" name="notes" rows="3">{{ old('notes', $submission->notes) }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.submissions.index') }}" class="btn btn-outline-secondary">
                    <i class="ri-close-line me-2"></i>Batal
                </a>
                <button type="button" class="btn btn-primary" onclick="nextStep(2)">
                    Selanjutnya <i class="ri-arrow-right-line ms-2"></i>
                </button>
            </div>
        </div>

        <!-- Step 2: Products -->
        <div class="step-content-panel" id="step-2">
            <div class="card-custom mb-4">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0"><i class="ri-product-hunt-line me-2"></i>Produk Terdaftar</h5>
                    <a href="{{ route('admin.products.create', ['submission_id' => $submission->id]) }}" class="btn btn-sm btn-success">
                        <i class="ri-add-line me-1"></i>Tambah Produk
                    </a>
                </div>
                <div class="p-4">
                    @if($submission->products && $submission->products->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead style="background-color: var(--neutral-50);">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Kode</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($submission->products as $index => $product)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->product_code }}</td>
                                        <td>{{ $product->productType->name ?? '-' }}</td>
                                        <td>
                                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info">
                            <i class="ri-information-line me-2"></i>
                            Belum ada produk yang ditambahkan. Klik "Tambah Produk" untuk menambahkan produk.
                        </div>
                    @endif
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-outline-secondary" onclick="previousStep(1)">
                    <i class="ri-arrow-left-line me-2"></i>Sebelumnya
                </button>
                <button type="button" class="btn btn-primary" onclick="nextStep(3)">
                    Selanjutnya <i class="ri-arrow-right-line ms-2"></i>
                </button>
            </div>
        </div>

        <!-- Step 3: Documents -->
        <div class="step-content-panel" id="step-3">
            <div class="card-custom mb-4">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0"><i class="ri-folder-line me-2"></i>Dokumen Pendukung</h5>
                    <a href="{{ route('admin.documents.upload', ['submission_id' => $submission->id]) }}" class="btn btn-sm btn-success">
                        <i class="ri-upload-line me-1"></i>Upload Dokumen
                    </a>
                </div>
                <div class="p-4">
                    @if($submission->documents && $submission->documents->count() > 0)
                        <div class="list-group">
                            @foreach($submission->documents as $document)
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="ri-file-text-line text-primary me-2"></i>
                                    <strong>{{ $document->document_type }}</strong>
                                    <br>
                                    <small class="text-muted">{{ $document->file_name }}</small>
                                </div>
                                <div>
                                    <a href="{{ Storage::url($document->file_path) }}" class="btn btn-sm btn-outline-primary" target="_blank">
                                        <i class="ri-download-line"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <div class="alert alert-info">
                            <i class="ri-information-line me-2"></i>
                            Belum ada dokumen yang diupload. Klik "Upload Dokumen" untuk menambahkan dokumen.
                        </div>
                    @endif
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-outline-secondary" onclick="previousStep(2)">
                    <i class="ri-arrow-left-line me-2"></i>Sebelumnya
                </button>
                <div class="d-flex gap-2">
                    <button type="submit" name="action" value="draft" class="btn btn-outline-primary">
                        <i class="ri-save-line me-2"></i>Simpan Perubahan
                    </button>
                    <button type="submit" name="action" value="submit" class="btn btn-primary">
                        <i class="ri-send-plane-line me-2"></i>Update & Kirim
                    </button>
                </div>
            </div>
        </div>
    </form>

    @push('styles')
    <style>
        .step-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            opacity: 0.5;
            transition: opacity 0.3s;
        }

        .step-item.active {
            opacity: 1;
        }

        .step-item.completed {
            opacity: 1;
        }

        .step-number {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: var(--neutral-200);
            color: var(--neutral-600);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.25rem;
            transition: all 0.3s;
        }

        .step-item.active .step-number {
            background-color: var(--primary-600);
            color: white;
        }

        .step-item.completed .step-number {
            background-color: var(--success-main);
            color: white;
        }

        .step-title {
            font-weight: 600;
            font-size: 1rem;
            color: var(--neutral-900);
        }

        .step-description {
            font-size: 0.875rem;
            color: var(--neutral-500);
        }

        .step-content-panel {
            display: none;
        }

        .step-content-panel.active {
            display: block;
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Multi-step form navigation
        function nextStep(step) {
            document.querySelectorAll('.step-content-panel').forEach(panel => {
                panel.classList.remove('active');
            });

            document.getElementById('step-' + step).classList.add('active');

            document.querySelectorAll('.step-item').forEach((item, index) => {
                item.classList.remove('active');
                if (index < step - 1) {
                    item.classList.add('completed');
                }
            });

            document.getElementById('step-indicator-' + step).classList.add('active');

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function previousStep(step) {
            nextStep(step);
        }

        // Show/hide certificate number field
        document.getElementById('certification_type').addEventListener('change', function() {
            const certificateField = document.getElementById('certificate_number_field');
            if (this.value === 'renewal' || this.value === 'extension') {
                certificateField.style.display = 'block';
            } else {
                certificateField.style.display = 'none';
            }
        });
    </script>
    @endpush
</x-layouts.admin.app>
