<x-layouts.admin.app>
    <x-slot name="title">Detail Dokumen</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Detail Dokumen</h2>
                </div>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="{{ route('pelaku_usaha.documents.download', $document->id) }}" class="btn btn-success">
                            <i class="ti ti-download me-2"></i>Download
                        </a>
                        <a href="{{ route('pelaku_usaha.documents.index') }}" class="btn btn-outline-secondary">
                            <i class="ti ti-arrow-left me-2"></i>Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <!-- Document Information -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Dokumen</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Nama Dokumen</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $document->document_name }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Jenis Dokumen</label>
                                </div>
                                <div class="col-md-8">
                                    <span class="badge bg-azure-lt">{{ ucwords(str_replace('_', ' ', $document->document_type)) }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Kategori</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ ucfirst($document->document_category) }}</div>
                                </div>
                            </div>
                            @if($document->description)
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold">Deskripsi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div>{{ $document->description }}</div>
                                    </div>
                                </div>
                            @endif
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Status</label>
                                </div>
                                <div class="col-md-8">
                                    @if($document->status == 'uploaded')
                                        <span class="badge bg-secondary">Terupload</span>
                                    @elseif($document->status == 'pending_review')
                                        <span class="badge bg-warning">Menunggu Review</span>
                                    @elseif($document->status == 'approved')
                                        <span class="badge bg-success">Disetujui</span>
                                    @elseif($document->status == 'rejected')
                                        <span class="badge bg-danger">Ditolak</span>
                                    @elseif($document->status == 'revision_required')
                                        <span class="badge bg-orange">Perlu Revisi</span>
                                    @endif
                                </div>
                            </div>
                            @if($document->review_notes)
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold">Catatan Review</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="alert alert-info mb-0">{{ $document->review_notes }}</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- File Information -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Informasi File</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Nama File</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $document->file_name }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Ukuran File</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ number_format($document->file_size / 1024, 2) }} KB</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Tipe File</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ strtoupper($document->file_extension) }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Jumlah Download</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $document->download_count }} kali</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Tanggal Upload</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $document->created_at->format('d F Y H:i') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submission & Validity -->
                <div class="col-lg-4">
                    <!-- Submission Info -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Permohonan Terkait</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Nomor Permohonan</label>
                                <div class="fw-bold">{{ $document->submission->submission_number }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Perusahaan</label>
                                <div>{{ $document->submission->company_name }}</div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('pelaku_usaha.submissions.show', $document->submission->id) }}" class="btn btn-primary w-100">
                                    <i class="ti ti-eye me-2"></i>Lihat Permohonan
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Validity Period -->
                    @if($document->valid_from || $document->valid_until)
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Masa Berlaku</h3>
                            </div>
                            <div class="card-body">
                                @if($document->valid_from)
                                    <div class="mb-3">
                                        <label class="form-label">Berlaku Dari</label>
                                        <div>{{ $document->valid_from->format('d F Y') }}</div>
                                    </div>
                                @endif
                                @if($document->valid_until)
                                    <div class="mb-3">
                                        <label class="form-label">Berlaku Sampai</label>
                                        <div>{{ $document->valid_until->format('d F Y') }}</div>
                                    </div>
                                    @if($document->valid_until->isPast())
                                        <div class="alert alert-danger mb-0">
                                            <i class="ti ti-alert-circle me-2"></i>Dokumen sudah kadaluarsa
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Delete -->
                    @if($document->status == 'uploaded')
                        <div class="card mt-3">
                            <div class="card-body">
                                <form action="{{ route('pelaku_usaha.documents.destroy', $document->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">
                                        <i class="ti ti-trash me-2"></i>Hapus Dokumen
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
