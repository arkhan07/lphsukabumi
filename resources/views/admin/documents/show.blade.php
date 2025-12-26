<x-layouts.admin.app>
    <x-slot name="title">Detail Dokumen - {{ $document->document_name }}</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Dokumen</h2>
            <p class="text-secondary-light mb-0">Informasi lengkap tentang dokumen</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.documents.download', $document->id) }}" class="btn btn-info">
                <i class="ri-download-line me-2"></i>
                Download
            </a>
            @if($document->status !== 'approved')
            <button type="button" class="btn btn-success" onclick="approveDocument()">
                <i class="ri-checkbox-line me-2"></i>
                Approve
            </button>
            @endif
            @if($document->status !== 'rejected')
            <button type="button" class="btn btn-danger" onclick="rejectDocument()">
                <i class="ri-close-line me-2"></i>
                Reject
            </button>
            @endif
            <button type="button" class="btn btn-outline-danger" onclick="confirmDelete()">
                <i class="ri-delete-bin-line me-2"></i>
                Hapus
            </button>
            <a href="{{ route('admin.documents.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <!-- Success/Error Alerts -->
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

    <div class="row g-3">
        <!-- Main Content -->
        <div class="col-12 col-lg-8">
            <!-- Document Preview/Download -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-file-line me-2"></i>Preview Dokumen
                </h5>

                @php
                    $isImage = in_array(strtolower($document->file_extension ?? ''), ['jpg', 'jpeg', 'png', 'gif']);
                    $isPdf = strtolower($document->file_extension ?? '') === 'pdf';
                @endphp

                @if($isImage)
                    <!-- Image Preview -->
                    <div class="text-center p-3 border rounded" style="background-color: var(--neutral-50);">
                        <img src="{{ asset('storage/' . $document->file_path) }}"
                             alt="{{ $document->document_name }}"
                             class="img-fluid rounded shadow-sm"
                             style="max-height: 500px;">
                    </div>
                @elseif($isPdf)
                    <!-- PDF Preview -->
                    <div class="border rounded" style="min-height: 600px;">
                        <iframe src="{{ asset('storage/' . $document->file_path) }}"
                                width="100%"
                                height="600px"
                                style="border: none; border-radius: 8px;">
                        </iframe>
                    </div>
                @else
                    <!-- Download Link for Other Files -->
                    <div class="text-center py-5">
                        @php
                            $iconMap = [
                                'pdf' => ['icon' => 'ri-file-pdf-line', 'color' => 'var(--danger-main)'],
                                'doc' => ['icon' => 'ri-file-word-line', 'color' => 'var(--info-main)'],
                                'docx' => ['icon' => 'ri-file-word-line', 'color' => 'var(--info-main)'],
                                'xls' => ['icon' => 'ri-file-excel-line', 'color' => 'var(--success-main)'],
                                'xlsx' => ['icon' => 'ri-file-excel-line', 'color' => 'var(--success-main)'],
                                'zip' => ['icon' => 'ri-file-zip-line', 'color' => 'var(--warning-main)'],
                            ];
                            $ext = strtolower($document->file_extension ?? '');
                            $icon = $iconMap[$ext] ?? ['icon' => 'ri-file-line', 'color' => 'var(--neutral-400)'];
                        @endphp
                        <i class="{{ $icon['icon'] }}" style="font-size: 5rem; color: {{ $icon['color'] }};"></i>
                        <h4 class="mt-3 mb-2">{{ $document->file_name }}</h4>
                        <p class="text-secondary-light">Preview tidak tersedia untuk tipe file ini</p>
                        <a href="{{ route('admin.documents.download', $document->id) }}" class="btn btn-primary mt-2">
                            <i class="ri-download-line me-2"></i>
                            Download untuk Melihat
                        </a>
                    </div>
                @endif
            </div>

            <!-- Document Metadata -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-information-line me-2"></i>Informasi Dokumen
                </h5>
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nama Dokumen</label>
                        <div style="font-weight: 500;">{{ $document->document_name }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Jenis Dokumen</label>
                        <div>
                            <span class="badge-custom badge-primary">
                                {{ str_replace('_', ' ', ucwords($document->document_type)) }}
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Kategori</label>
                        <div style="font-weight: 500;">{{ ucfirst($document->document_category ?? 'General') }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nama File</label>
                        <div style="font-weight: 500;">{{ $document->file_name }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Ukuran File</label>
                        <div style="font-weight: 500;">
                            {{ number_format(($document->file_size ?? 0) / 1024, 2) }} KB
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Tipe File</label>
                        <div style="font-weight: 500;">{{ strtoupper($document->file_extension ?? '') }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Diupload Oleh</label>
                        <div style="font-weight: 500;">{{ $document->uploader->name ?? '-' }}</div>
                        <small class="text-secondary-light">{{ $document->uploader->email ?? '' }}</small>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Tanggal Upload</label>
                        <div style="font-weight: 500;">
                            {{ $document->created_at ? $document->created_at->format('d M Y, H:i') : '-' }}
                        </div>
                    </div>
                    @if($document->description)
                    <div class="col-12">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Deskripsi</label>
                        <div class="p-3 rounded" style="background: var(--neutral-50);">
                            <p class="mb-0" style="line-height: 1.6;">{{ $document->description }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Validity Period (for certificates) -->
            @if($document->valid_from || $document->valid_until)
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-calendar-line me-2"></i>Masa Berlaku
                </h5>
                <div class="row g-3">
                    @if($document->valid_from)
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Berlaku Dari</label>
                        <div style="font-weight: 500;">
                            {{ \Carbon\Carbon::parse($document->valid_from)->format('d M Y') }}
                        </div>
                    </div>
                    @endif
                    @if($document->valid_until)
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Berlaku Sampai</label>
                        <div style="font-weight: 500;">
                            {{ \Carbon\Carbon::parse($document->valid_until)->format('d M Y') }}
                        </div>
                        @if($document->is_expired)
                            <span class="badge-custom badge-danger mt-1">Expired</span>
                        @else
                            <span class="badge-custom badge-success mt-1">Aktif</span>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            @endif

            <!-- Review Notes -->
            @if($document->review_notes)
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-message-line me-2"></i>Catatan Review
                </h5>
                <div class="p-3 rounded" style="background: var(--warning-50); border-left: 4px solid var(--warning-main);">
                    <p class="mb-0" style="line-height: 1.6;">{{ $document->review_notes }}</p>
                    @if($document->reviewed_by && $document->reviewer)
                    <hr>
                    <small class="text-secondary-light">
                        <i class="ri-user-line me-1"></i>
                        Direview oleh: {{ $document->reviewer->name }} -
                        {{ $document->reviewed_at ? $document->reviewed_at->format('d M Y, H:i') : '' }}
                    </small>
                    @endif
                </div>
            </div>
            @endif

            <!-- Version History -->
            @if($document->version > 1 || $document->parentDocument || $document->childDocuments->count() > 0)
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-history-line me-2"></i>Riwayat Versi
                </h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead style="background-color: var(--neutral-50);">
                            <tr>
                                <th style="padding: 0.75rem; font-weight: 600;">Versi</th>
                                <th style="padding: 0.75rem; font-weight: 600;">Status</th>
                                <th style="padding: 0.75rem; font-weight: 600;">Tanggal Upload</th>
                                <th style="padding: 0.75rem; font-weight: 600;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($document->parentDocument)
                                <tr>
                                    <td style="padding: 0.75rem;">
                                        <span class="badge bg-secondary">v{{ $document->parentDocument->version }}</span>
                                    </td>
                                    <td style="padding: 0.75rem;">
                                        <span class="badge-custom badge-secondary">Previous Version</span>
                                    </td>
                                    <td style="padding: 0.75rem;">
                                        {{ $document->parentDocument->created_at->format('d M Y, H:i') }}
                                    </td>
                                    <td style="padding: 0.75rem;">
                                        <a href="{{ route('admin.documents.show', $document->parentDocument->id) }}"
                                           class="btn btn-outline-primary">
                                            <i class="ri-eye-line"></i> Lihat
                                        </a>
                                    </td>
                                </tr>
                            @endif
                            <tr style="background-color: var(--primary-50);">
                                <td style="padding: 0.75rem;">
                                    <span class="badge bg-primary">v{{ $document->version }}</span>
                                    @if($document->is_latest_version)
                                        <span class="badge bg-success ms-1">Latest</span>
                                    @endif
                                </td>
                                <td style="padding: 0.75rem;">
                                    @php
                                        $statusConfig = [
                                            'uploaded' => ['class' => 'badge-secondary', 'icon' => 'ri-upload-line'],
                                            'pending_review' => ['class' => 'badge-warning', 'icon' => 'ri-time-line'],
                                            'approved' => ['class' => 'badge-success', 'icon' => 'ri-checkbox-circle-line'],
                                            'rejected' => ['class' => 'badge-danger', 'icon' => 'ri-close-circle-line'],
                                            'revision_required' => ['class' => 'badge-info', 'icon' => 'ri-file-edit-line'],
                                        ];
                                        $config = $statusConfig[$document->status] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line'];
                                    @endphp
                                    <span class="badge-custom {{ $config['class'] }}">
                                        <i class="{{ $config['icon'] }} me-1"></i>
                                        {{ str_replace('_', ' ', ucfirst($document->status)) }}
                                    </span>
                                </td>
                                <td style="padding: 0.75rem;">
                                    {{ $document->created_at->format('d M Y, H:i') }}
                                </td>
                                <td style="padding: 0.75rem;">
                                    <span class="badge bg-info">Current</span>
                                </td>
                            </tr>
                            @foreach($document->childDocuments ?? [] as $child)
                                <tr>
                                    <td style="padding: 0.75rem;">
                                        <span class="badge bg-secondary">v{{ $child->version }}</span>
                                        @if($child->is_latest_version)
                                            <span class="badge bg-success ms-1">Latest</span>
                                        @endif
                                    </td>
                                    <td style="padding: 0.75rem;">
                                        <span class="badge-custom badge-secondary">Newer Version</span>
                                    </td>
                                    <td style="padding: 0.75rem;">
                                        {{ $child->created_at->format('d M Y, H:i') }}
                                    </td>
                                    <td style="padding: 0.75rem;">
                                        <a href="{{ route('admin.documents.show', $child->id) }}"
                                           class="btn btn-outline-primary">
                                            <i class="ri-eye-line"></i> Lihat
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="col-12 col-lg-4">
            <!-- Verification Status -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-shield-check-line me-2"></i>Status Verifikasi
                </h5>
                <div class="text-center py-3">
                    @php
                        $statusConfig = [
                            'uploaded' => [
                                'class' => 'badge-secondary',
                                'icon' => 'ri-upload-cloud-line',
                                'text' => 'Uploaded',
                                'color' => 'var(--neutral-600)'
                            ],
                            'pending_review' => [
                                'class' => 'badge-warning',
                                'icon' => 'ri-time-line',
                                'text' => 'Pending Review',
                                'color' => 'var(--warning-main)'
                            ],
                            'approved' => [
                                'class' => 'badge-success',
                                'icon' => 'ri-checkbox-circle-line',
                                'text' => 'Approved',
                                'color' => 'var(--success-main)'
                            ],
                            'rejected' => [
                                'class' => 'badge-danger',
                                'icon' => 'ri-close-circle-line',
                                'text' => 'Rejected',
                                'color' => 'var(--danger-main)'
                            ],
                            'revision_required' => [
                                'class' => 'badge-info',
                                'icon' => 'ri-file-edit-line',
                                'text' => 'Revision Required',
                                'color' => 'var(--info-main)'
                            ],
                        ];
                        $config = $statusConfig[$document->status] ?? $statusConfig['uploaded'];
                    @endphp
                    <i class="{{ $config['icon'] }}" style="font-size: 4rem; color: {{ $config['color'] }};"></i>
                    <h4 class="mt-3 mb-0">{{ $config['text'] }}</h4>
                    @if($document->reviewed_at)
                    <small class="text-secondary-light">
                        Direview: {{ $document->reviewed_at->format('d M Y, H:i') }}
                    </small>
                    @endif
                </div>

                <!-- Status Timeline -->
                <div class="mt-4">
                    <div class="timeline">
                        <div class="timeline-item {{ in_array($document->status, ['uploaded', 'pending_review', 'approved', 'rejected', 'revision_required']) ? 'active' : '' }}">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div style="font-weight: 500;">Uploaded</div>
                                <small class="text-secondary-light">{{ $document->created_at->format('d M Y, H:i') }}</small>
                            </div>
                        </div>
                        @if(in_array($document->status, ['pending_review', 'approved', 'rejected', 'revision_required']))
                        <div class="timeline-item active">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div style="font-weight: 500;">Under Review</div>
                                <small class="text-secondary-light">{{ $document->updated_at->format('d M Y, H:i') }}</small>
                            </div>
                        </div>
                        @endif
                        @if($document->status === 'approved')
                        <div class="timeline-item active">
                            <div class="timeline-marker success"></div>
                            <div class="timeline-content">
                                <div style="font-weight: 500;">Approved</div>
                                <small class="text-secondary-light">
                                    {{ $document->reviewed_at ? $document->reviewed_at->format('d M Y, H:i') : '' }}
                                </small>
                            </div>
                        </div>
                        @elseif($document->status === 'rejected')
                        <div class="timeline-item active">
                            <div class="timeline-marker danger"></div>
                            <div class="timeline-content">
                                <div style="font-weight: 500;">Rejected</div>
                                <small class="text-secondary-light">
                                    {{ $document->reviewed_at ? $document->reviewed_at->format('d M Y, H:i') : '' }}
                                </small>
                            </div>
                        </div>
                        @elseif($document->status === 'revision_required')
                        <div class="timeline-item active">
                            <div class="timeline-marker warning"></div>
                            <div class="timeline-content">
                                <div style="font-weight: 500;">Revision Required</div>
                                <small class="text-secondary-light">
                                    {{ $document->reviewed_at ? $document->reviewed_at->format('d M Y, H:i') : '' }}
                                </small>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Submission Information -->
            @if($document->submission)
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-file-list-3-line me-2"></i>Permohonan
                </h5>
                <div class="mb-3">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Nomor Permohonan</label>
                    <div style="font-weight: 500;">
                        <a href="{{ route('admin.submissions.show', $document->submission->id) }}"
                           class="text-primary-600" style="text-decoration: none;">
                            {{ $document->submission->submission_number }}
                        </a>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Perusahaan</label>
                    <div style="font-weight: 500;">{{ $document->submission->company_name }}</div>
                </div>
                <div>
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Status Permohonan</label>
                    <div>
                        <span class="badge-custom badge-info">
                            {{ str_replace('_', ' ', ucfirst($document->submission->status)) }}
                        </span>
                    </div>
                </div>
            </div>
            @endif

            <!-- Document Settings -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-settings-line me-2"></i>Pengaturan
                </h5>
                <div class="mb-2">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Versi</label>
                    <div style="font-weight: 500;">
                        v{{ $document->version }}
                        @if($document->is_latest_version)
                            <span class="badge bg-success ms-1">Latest</span>
                        @endif
                    </div>
                </div>
                <div class="mb-2">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Dokumen Wajib</label>
                    <div>
                        @if($document->is_required)
                            <span class="badge-custom badge-danger">Required</span>
                        @else
                            <span class="badge-custom badge-secondary">Optional</span>
                        @endif
                    </div>
                </div>
                <div class="mb-2">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Akses Publik</label>
                    <div>
                        @if($document->is_public)
                            <span class="badge-custom badge-success">Public</span>
                        @else
                            <span class="badge-custom badge-secondary">Private</span>
                        @endif
                    </div>
                </div>
                <div>
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Jumlah Download</label>
                    <div style="font-weight: 500;">{{ $document->download_count ?? 0 }} kali</div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Aksi</h5>
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.documents.download', $document->id) }}" class="btn btn-info">
                        <i class="ri-download-line me-2"></i>
                        Download Dokumen
                    </a>
                    @if($document->status !== 'approved')
                    <button type="button" class="btn btn-success" onclick="approveDocument()">
                        <i class="ri-checkbox-line me-2"></i>
                        Approve
                    </button>
                    @endif
                    @if($document->status !== 'rejected')
                    <button type="button" class="btn btn-outline-danger" onclick="rejectDocument()">
                        <i class="ri-close-line me-2"></i>
                        Reject
                    </button>
                    @endif
                    <button type="button" class="btn btn-outline-warning" onclick="requestRevision()">
                        <i class="ri-edit-line me-2"></i>
                        Request Revision
                    </button>
                    <button type="button" class="btn btn-outline-secondary" onclick="window.print()">
                        <i class="ri-printer-line me-2"></i>
                        Print Detail
                    </button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">
                        <i class="ri-delete-bin-line me-2"></i>
                        Hapus Dokumen
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Form -->
    <form id="deleteForm" action="{{ route('admin.documents.destroy', $document->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <!-- Status Update Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="statusForm" action="{{ route('admin.documents.update-status', $document->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title" id="statusModalTitle">Update Status Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="status" id="statusValue">
                        <div class="mb-3">
                            <label class="form-label">Catatan Review <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="review_notes" rows="4"
                                      placeholder="Tambahkan catatan untuk status ini..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="statusSubmitButton">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0.5rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: var(--neutral-200);
        }

        .timeline-item {
            position: relative;
            padding-bottom: 1.5rem;
            opacity: 0.5;
        }

        .timeline-item.active {
            opacity: 1;
        }

        .timeline-marker {
            position: absolute;
            left: -1.65rem;
            top: 0.25rem;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            background-color: var(--neutral-300);
            border: 2px solid white;
        }

        .timeline-item.active .timeline-marker {
            background-color: var(--primary-600);
        }

        .timeline-marker.success {
            background-color: var(--success-main);
        }

        .timeline-marker.danger {
            background-color: var(--danger-main);
        }

        .timeline-marker.warning {
            background-color: var(--warning-main);
        }

        @media print {
            .btn, .card-custom:last-child {
                display: none !important;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin ingin menghapus dokumen "{{ $document->document_name }}"?\n\nTindakan ini tidak dapat dibatalkan.')) {
                document.getElementById('deleteForm').submit();
            }
        }

        function approveDocument() {
            showStatusModal('approved', 'Approve Dokumen', 'btn-success');
        }

        function rejectDocument() {
            showStatusModal('rejected', 'Reject Dokumen', 'btn-danger');
        }

        function requestRevision() {
            showStatusModal('revision_required', 'Request Revision', 'btn-warning');
        }

        function showStatusModal(status, title, buttonClass) {
            const modal = new bootstrap.Modal(document.getElementById('statusModal'));
            document.getElementById('statusModalTitle').textContent = title;
            document.getElementById('statusValue').value = status;

            const submitButton = document.getElementById('statusSubmitButton');
            submitButton.className = 'btn ' + buttonClass;

            modal.show();
        }
    </script>
    @endpush
</x-layouts.admin.app>
