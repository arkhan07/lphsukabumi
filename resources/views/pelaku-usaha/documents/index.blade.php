<x-layouts.admin.app>
    <x-slot name="title">Dokumen Saya</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Dokumen Saya</h2>
                    <div class="text-muted mt-1">Kelola dokumen untuk permohonan sertifikasi halal</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('pelaku_usaha.documents.create') }}" class="btn btn-primary">
                        <i class="ti ti-upload me-2"></i>Upload Dokumen
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Dokumen</h3>
                </div>
                <div class="card-body">
                    @if($documents->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dokumen</th>
                                        <th>Jenis</th>
                                        <th>Permohonan</th>
                                        <th>Status</th>
                                        <th>Ukuran</th>
                                        <th>Tanggal Upload</th>
                                        <th class="w-1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($documents as $index => $document)
                                        <tr>
                                            <td>{{ $documents->firstItem() + $index }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="ti ti-file-text me-2 text-muted"></i>
                                                    <div>
                                                        <div class="fw-bold">{{ $document->document_name }}</div>
                                                        @if($document->description)
                                                            <div class="small text-muted">{{ Str::limit($document->description, 50) }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-azure-lt">{{ ucwords(str_replace('_', ' ', $document->document_type)) }}</span>
                                            </td>
                                            <td>
                                                <div class="text-muted small">{{ $document->submission->submission_number }}</div>
                                            </td>
                                            <td>
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
                                            </td>
                                            <td>{{ number_format($document->file_size / 1024, 2) }} KB</td>
                                            <td>{{ $document->created_at->format('d M Y') }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('pelaku_usaha.documents.show', $document->id) }}" class="btn btn-sm btn-icon btn-primary" title="Lihat">
                                                        <i class="ti ti-eye"></i>
                                                    </a>
                                                    <a href="{{ route('pelaku_usaha.documents.download', $document->id) }}" class="btn btn-sm btn-icon btn-success" title="Download">
                                                        <i class="ti ti-download"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $documents->links() }}
                        </div>
                    @else
                        <div class="empty">
                            <div class="empty-icon">
                                <i class="ti ti-folder"></i>
                            </div>
                            <p class="empty-title">Belum ada dokumen</p>
                            <p class="empty-subtitle text-muted">
                                Upload dokumen yang diperlukan untuk permohonan sertifikasi halal Anda
                            </p>
                            <div class="empty-action">
                                <a href="{{ route('pelaku_usaha.documents.create') }}" class="btn btn-primary">
                                    <i class="ti ti-upload me-2"></i>Upload Dokumen
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
