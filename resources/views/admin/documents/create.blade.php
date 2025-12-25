<x-layouts.admin.app>
    <x-slot name="title">Upload Dokumen</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Upload Dokumen Baru</h2>
            <p class="text-secondary-light mb-0">Upload dokumen untuk permohonan sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.documents.index') }}" class="btn btn-outline-secondary">
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

    <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data" id="documentForm">
        @csrf

        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <!-- Document Information Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-file-text-line me-2"></i>Informasi Dokumen
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Permohonan <span class="text-danger">*</span></label>
                            <select class="form-select @error('submission_id') is-invalid @enderror"
                                    name="submission_id" id="submissionSelect" required>
                                <option value="">Pilih Permohonan...</option>
                                @foreach($submissions ?? [] as $submission)
                                <option value="{{ $submission->id }}" {{ old('submission_id') == $submission->id ? 'selected' : '' }}>
                                    {{ $submission->submission_number }} - {{ $submission->company_name }}
                                </option>
                                @endforeach
                            </select>
                            @error('submission_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Pilih permohonan yang terkait dengan dokumen ini</small>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Jenis Dokumen <span class="text-danger">*</span></label>
                            <select class="form-select @error('document_type') is-invalid @enderror"
                                    name="document_type" id="documentTypeSelect" required>
                                <option value="">Pilih Jenis Dokumen...</option>
                                <optgroup label="Dokumen Perusahaan">
                                    <option value="company_profile" {{ old('document_type') == 'company_profile' ? 'selected' : '' }}>Profil Perusahaan</option>
                                    <option value="business_permit" {{ old('document_type') == 'business_permit' ? 'selected' : '' }}>Izin Usaha</option>
                                    <option value="nib" {{ old('document_type') == 'nib' ? 'selected' : '' }}>NIB</option>
                                    <option value="npwp" {{ old('document_type') == 'npwp' ? 'selected' : '' }}>NPWP</option>
                                </optgroup>
                                <optgroup label="Dokumen Produk">
                                    <option value="product_specification" {{ old('document_type') == 'product_specification' ? 'selected' : '' }}>Spesifikasi Produk</option>
                                    <option value="process_flow" {{ old('document_type') == 'process_flow' ? 'selected' : '' }}>Alur Proses Produksi</option>
                                    <option value="facility_layout" {{ old('document_type') == 'facility_layout' ? 'selected' : '' }}>Layout Fasilitas</option>
                                    <option value="ingredient_list" {{ old('document_type') == 'ingredient_list' ? 'selected' : '' }}>Daftar Bahan/Ingredient</option>
                                    <option value="product_photo" {{ old('document_type') == 'product_photo' ? 'selected' : '' }}>Foto Produk</option>
                                    <option value="facility_photo" {{ old('document_type') == 'facility_photo' ? 'selected' : '' }}>Foto Fasilitas</option>
                                </optgroup>
                                <optgroup label="Sertifikat & Lab">
                                    <option value="halal_certificate_material" {{ old('document_type') == 'halal_certificate_material' ? 'selected' : '' }}>Sertifikat Halal Bahan</option>
                                    <option value="halal_certificate_supplier" {{ old('document_type') == 'halal_certificate_supplier' ? 'selected' : '' }}>Sertifikat Halal Supplier</option>
                                    <option value="material_safety_data_sheet" {{ old('document_type') == 'material_safety_data_sheet' ? 'selected' : '' }}>MSDS</option>
                                    <option value="haccp_certificate" {{ old('document_type') == 'haccp_certificate' ? 'selected' : '' }}>Sertifikat HACCP</option>
                                    <option value="gmp_certificate" {{ old('document_type') == 'gmp_certificate' ? 'selected' : '' }}>Sertifikat GMP</option>
                                    <option value="iso_certificate" {{ old('document_type') == 'iso_certificate' ? 'selected' : '' }}>Sertifikat ISO</option>
                                    <option value="lab_test_result" {{ old('document_type') == 'lab_test_result' ? 'selected' : '' }}>Hasil Uji Lab</option>
                                </optgroup>
                                <optgroup label="Dokumen Audit">
                                    <option value="audit_report" {{ old('document_type') == 'audit_report' ? 'selected' : '' }}>Laporan Audit</option>
                                    <option value="finding_photo" {{ old('document_type') == 'finding_photo' ? 'selected' : '' }}>Foto Temuan</option>
                                    <option value="corrective_action_proof" {{ old('document_type') == 'corrective_action_proof' ? 'selected' : '' }}>Bukti Tindakan Korektif</option>
                                </optgroup>
                                <optgroup label="Dokumen Keuangan">
                                    <option value="invoice" {{ old('document_type') == 'invoice' ? 'selected' : '' }}>Invoice</option>
                                    <option value="payment_proof" {{ old('document_type') == 'payment_proof' ? 'selected' : '' }}>Bukti Pembayaran</option>
                                </optgroup>
                                <optgroup label="Lainnya">
                                    <option value="contract" {{ old('document_type') == 'contract' ? 'selected' : '' }}>Kontrak</option>
                                    <option value="agreement" {{ old('document_type') == 'agreement' ? 'selected' : '' }}>Perjanjian</option>
                                    <option value="statement_letter" {{ old('document_type') == 'statement_letter' ? 'selected' : '' }}>Surat Pernyataan</option>
                                    <option value="other" {{ old('document_type') == 'other' ? 'selected' : '' }}>Lainnya</option>
                                </optgroup>
                            </select>
                            @error('document_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Kategori Dokumen <span class="text-danger">*</span></label>
                            <select class="form-select @error('document_category') is-invalid @enderror"
                                    name="document_category" required>
                                <option value="">Pilih Kategori...</option>
                                <option value="general" {{ old('document_category') == 'general' ? 'selected' : '' }}>General</option>
                                <option value="company" {{ old('document_category') == 'company' ? 'selected' : '' }}>Company</option>
                                <option value="product" {{ old('document_category') == 'product' ? 'selected' : '' }}>Product</option>
                                <option value="material" {{ old('document_category') == 'material' ? 'selected' : '' }}>Material</option>
                                <option value="audit" {{ old('document_category') == 'audit' ? 'selected' : '' }}>Audit</option>
                                <option value="financial" {{ old('document_category') == 'financial' ? 'selected' : '' }}>Financial</option>
                            </select>
                            @error('document_category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Nama Dokumen <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('document_name') is-invalid @enderror"
                                   name="document_name"
                                   id="documentName"
                                   value="{{ old('document_name') }}"
                                   placeholder="Masukkan nama dokumen"
                                   required>
                            @error('document_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-secondary-light">Nama akan otomatis terisi dari file yang diupload</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      name="description"
                                      rows="3"
                                      placeholder="Tambahkan deskripsi dokumen (opsional)">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- File Upload Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-upload-cloud-line me-2"></i>Upload File
                    </h5>

                    <!-- Drag & Drop Area -->
                    <div class="upload-area" id="uploadArea">
                        <input type="file"
                               class="form-control @error('document_file') is-invalid @enderror"
                               name="document_file"
                               id="documentFile"
                               accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.xls,.xlsx"
                               required
                               style="display: none;">

                        <div class="upload-area-content" id="uploadAreaContent">
                            <i class="ri-upload-cloud-2-line" style="font-size: 4rem; color: var(--primary-600);"></i>
                            <h5 style="font-weight: 600; margin-top: 1rem;">Drag & Drop File Disini</h5>
                            <p class="text-secondary-light mb-3">atau</p>
                            <button type="button" class="btn btn-primary" id="browseButton">
                                <i class="ri-folder-open-line me-2"></i>Browse File
                            </button>
                            <p class="text-secondary-light mt-3 mb-0" style="font-size: 0.875rem;">
                                Format: PDF, DOC, DOCX, JPG, PNG, XLS, XLSX | Maksimal 10MB
                            </p>
                        </div>

                        <div class="file-preview" id="filePreview" style="display: none;">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="file-icon ri-file-line" id="fileIcon" style="font-size: 3rem;"></i>
                                    <div>
                                        <div style="font-weight: 600;" id="fileName"></div>
                                        <small class="text-secondary-light" id="fileSize"></small>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-danger btn-sm" id="removeFile">
                                    <i class="ri-delete-bin-line me-1"></i> Hapus
                                </button>
                            </div>
                            <div class="progress mt-3" id="uploadProgress" style="display: none;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                     role="progressbar" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                    @error('document_file')
                        <div class="text-danger small mt-2">{{ $message }}</div>
                    @enderror

                    <!-- Image Preview (for image files) -->
                    <div id="imagePreview" class="mt-3" style="display: none;">
                        <label class="form-label">Preview Gambar:</label>
                        <div class="border rounded p-2">
                            <img id="previewImage" src="" alt="Preview" class="img-fluid" style="max-height: 300px;">
                        </div>
                    </div>
                </div>

                <!-- Validity Period (for certificates) -->
                <div class="card-custom mb-3" id="validityCard" style="display: none;">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-calendar-line me-2"></i>Masa Berlaku (Untuk Sertifikat)
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Berlaku Dari</label>
                            <input type="date"
                                   class="form-control @error('valid_from') is-invalid @enderror"
                                   name="valid_from"
                                   value="{{ old('valid_from') }}">
                            @error('valid_from')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Berlaku Sampai</label>
                            <input type="date"
                                   class="form-control @error('valid_until') is-invalid @enderror"
                                   name="valid_until"
                                   value="{{ old('valid_until') }}">
                            @error('valid_until')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4">
                <!-- Settings Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-settings-line me-2"></i>Pengaturan
                    </h5>

                    <div class="mb-3">
                        <label class="form-label">Status Dokumen</label>
                        <select class="form-select @error('status') is-invalid @enderror" name="status">
                            <option value="uploaded" {{ old('status') == 'uploaded' ? 'selected' : '' }}>Uploaded</option>
                            <option value="pending_review" {{ old('status', 'pending_review') == 'pending_review' ? 'selected' : '' }}>Pending Review</option>
                            <option value="approved" {{ old('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="is_required" id="isRequired"
                               value="1" {{ old('is_required') ? 'checked' : '' }}>
                        <label class="form-check-label" for="isRequired">
                            Dokumen Wajib (Required)
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_public" id="isPublic"
                               value="1" {{ old('is_public') ? 'checked' : '' }}>
                        <label class="form-check-label" for="isPublic">
                            Dokumen Publik
                        </label>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-save-line me-2"></i>Aksi
                    </h5>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" id="submitButton">
                            <i class="ri-upload-line me-2"></i>
                            Upload Dokumen
                        </button>
                        <a href="{{ route('admin.documents.index') }}" class="btn btn-outline-secondary">
                            <i class="ri-close-line me-2"></i>
                            Batal
                        </a>
                    </div>
                </div>

                <!-- Info Card -->
                <div class="alert alert-info" role="alert">
                    <i class="ri-information-line me-2"></i>
                    <strong>Informasi Upload:</strong>
                    <ul class="mb-0 mt-2 small">
                        <li>File maksimal 10MB</li>
                        <li>Format yang didukung: PDF, DOC, DOCX, JPG, PNG, XLS, XLSX</li>
                        <li>Pastikan file dapat dibaca dengan jelas</li>
                        <li>Untuk sertifikat, isi masa berlaku</li>
                    </ul>
                </div>
            </div>
        </div>
    </form>

    @push('styles')
    <style>
        .upload-area {
            border: 2px dashed var(--primary-600);
            border-radius: 12px;
            padding: 3rem 2rem;
            text-align: center;
            background-color: var(--primary-50);
            transition: all 0.3s;
            cursor: pointer;
        }

        .upload-area:hover {
            border-color: var(--primary-700);
            background-color: var(--primary-100);
        }

        .upload-area.drag-over {
            border-color: var(--success-main);
            background-color: var(--success-50);
        }

        .file-preview {
            padding: 1.5rem;
            border: 2px solid var(--success-main);
            border-radius: 12px;
            background-color: var(--success-50);
        }

        .file-icon {
            color: var(--primary-600);
        }

        .form-check-switch .form-check-input {
            width: 3rem;
            height: 1.5rem;
            cursor: pointer;
        }

        .form-check-switch .form-check-label {
            margin-left: 0.5rem;
            cursor: pointer;
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // File upload handling
        const uploadArea = document.getElementById('uploadArea');
        const fileInput = document.getElementById('documentFile');
        const browseButton = document.getElementById('browseButton');
        const uploadAreaContent = document.getElementById('uploadAreaContent');
        const filePreview = document.getElementById('filePreview');
        const removeFileButton = document.getElementById('removeFile');
        const documentNameInput = document.getElementById('documentName');
        const imagePreview = document.getElementById('imagePreview');
        const previewImage = document.getElementById('previewImage');
        const documentTypeSelect = document.getElementById('documentTypeSelect');
        const validityCard = document.getElementById('validityCard');

        // Browse button click
        browseButton.addEventListener('click', () => {
            fileInput.click();
        });

        // Upload area click
        uploadArea.addEventListener('click', (e) => {
            if (e.target !== removeFileButton && !removeFileButton.contains(e.target)) {
                fileInput.click();
            }
        });

        // Drag and drop events
        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('drag-over');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('drag-over');
        });

        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('drag-over');

            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                handleFileSelect(files[0]);
            }
        });

        // File input change
        fileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                handleFileSelect(file);
            }
        });

        // Handle file selection
        function handleFileSelect(file) {
            // Validate file size (10MB)
            if (file.size > 10 * 1024 * 1024) {
                alert('File terlalu besar! Maksimal 10MB');
                fileInput.value = '';
                return;
            }

            // Get file extension
            const fileName = file.name;
            const fileExt = fileName.split('.').pop().toLowerCase();
            const fileSize = formatFileSize(file.size);

            // Set document name if empty
            if (!documentNameInput.value) {
                documentNameInput.value = fileName.replace(/\.[^/.]+$/, "");
            }

            // Update preview
            document.getElementById('fileName').textContent = fileName;
            document.getElementById('fileSize').textContent = fileSize;

            // Set file icon
            const iconMap = {
                'pdf': 'ri-file-pdf-line',
                'doc': 'ri-file-word-line',
                'docx': 'ri-file-word-line',
                'xls': 'ri-file-excel-line',
                'xlsx': 'ri-file-excel-line',
                'jpg': 'ri-image-line',
                'jpeg': 'ri-image-line',
                'png': 'ri-image-line',
            };

            const fileIcon = document.getElementById('fileIcon');
            fileIcon.className = 'file-icon ' + (iconMap[fileExt] || 'ri-file-line');

            // Show/hide preview
            uploadAreaContent.style.display = 'none';
            filePreview.style.display = 'block';

            // Show image preview for images
            if (['jpg', 'jpeg', 'png'].includes(fileExt)) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.style.display = 'none';
            }
        }

        // Remove file
        removeFileButton.addEventListener('click', (e) => {
            e.stopPropagation();
            fileInput.value = '';
            uploadAreaContent.style.display = 'block';
            filePreview.style.display = 'none';
            imagePreview.style.display = 'none';
        });

        // Format file size
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
        }

        // Show/hide validity card based on document type
        documentTypeSelect.addEventListener('change', (e) => {
            const certificateTypes = [
                'halal_certificate_material',
                'halal_certificate_supplier',
                'haccp_certificate',
                'gmp_certificate',
                'iso_certificate'
            ];

            if (certificateTypes.includes(e.target.value)) {
                validityCard.style.display = 'block';
            } else {
                validityCard.style.display = 'none';
            }
        });

        // Form submission
        document.getElementById('documentForm').addEventListener('submit', (e) => {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="ri-loader-4-line me-2 rotate"></i> Uploading...';
        });
    </script>
    @endpush
</x-layouts.admin.app>
