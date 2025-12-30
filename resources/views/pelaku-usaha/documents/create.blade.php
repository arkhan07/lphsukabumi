<x-layouts.admin.app>
    <x-slot name="title">Upload Dokumen</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Upload Dokumen</h2>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('pelaku_usaha.documents.index') }}" class="btn btn-outline-secondary">
                        <i class="ti ti-arrow-left me-2"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="{{ route('pelaku_usaha.documents.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Dokumen</h3>
                            </div>
                            <div class="card-body">
                                <!-- Submission -->
                                <div class="mb-3">
                                    <label class="form-label required">Permohonan</label>
                                    <select name="submission_id" class="form-select @error('submission_id') is-invalid @enderror" required>
                                        <option value="">Pilih Permohonan</option>
                                        @foreach($submissions as $submission)
                                            <option value="{{ $submission->id }}" {{ old('submission_id') == $submission->id ? 'selected' : '' }}>
                                                {{ $submission->submission_number }} - {{ $submission->company_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('submission_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Document Type -->
                                <div class="mb-3">
                                    <label class="form-label required">Jenis Dokumen</label>
                                    <select name="document_type" class="form-select @error('document_type') is-invalid @enderror" required>
                                        <option value="">Pilih Jenis Dokumen</option>
                                        @foreach($documentTypes as $category => $types)
                                            <optgroup label="{{ $category }}">
                                                @foreach($types as $value => $label)
                                                    <option value="{{ $value }}" {{ old('document_type') == $value ? 'selected' : '' }}>
                                                        {{ $label }}
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                    @error('document_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Document Name -->
                                <div class="mb-3">
                                    <label class="form-label required">Nama Dokumen</label>
                                    <input type="text" name="document_name" class="form-control @error('document_name') is-invalid @enderror" value="{{ old('document_name') }}" required>
                                    <div class="form-hint">Berikan nama yang jelas dan deskriptif</div>
                                    @error('document_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ old('description') }}</textarea>
                                    <div class="form-hint">Keterangan tambahan tentang dokumen (opsional)</div>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- File Upload -->
                                <div class="mb-3">
                                    <label class="form-label required">File Dokumen</label>
                                    <input type="file" name="document_file" class="form-control @error('document_file') is-invalid @enderror" required>
                                    <div class="form-hint">Maksimal ukuran file 10MB. Format: PDF, DOC, DOCX, JPG, PNG</div>
                                    @error('document_file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Validity Period -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Berlaku Dari</label>
                                            <input type="date" name="valid_from" class="form-control @error('valid_from') is-invalid @enderror" value="{{ old('valid_from') }}">
                                            <div class="form-hint">Untuk dokumen sertifikat yang memiliki masa berlaku</div>
                                            @error('valid_from')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Berlaku Sampai</label>
                                            <input type="date" name="valid_until" class="form-control @error('valid_until') is-invalid @enderror" value="{{ old('valid_until') }}">
                                            @error('valid_until')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <a href="{{ route('pelaku_usaha.documents.index') }}" class="btn btn-link">Batal</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-upload me-2"></i>Upload Dokumen
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
