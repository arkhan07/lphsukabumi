<x-layouts.admin.app>
    <x-slot name="title">Detail Dokumen - {{ $document->document_name }}</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Detail Dokumen</h2>
                    <p class="text-muted mt-1">Informasi lengkap tentang dokumen</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('admin.documents.download', $document->id) }}" class="btn btn-cyan">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                            Download
                        </a>
                        @if($document->status !== 'approved')
                        <button type="button" class="btn btn-success" onclick="approveDocument()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            Approve
                        </button>
                        @endif
                        @if($document->status !== 'rejected')
                        <button type="button" class="btn btn-danger" onclick="rejectDocument()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                            Reject
                        </button>
                        @endif
                        <button type="button" class="btn btn-ghost-danger" onclick="confirmDelete()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                            Hapus
                        </button>
                        <a href="{{ route('admin.documents.index') }}" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Success/Error Alerts -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    </div>
                    <div>{{ session('success') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                    </div>
                    <div>{{ session('error') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            <div class="row g-3">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Document Preview -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Preview Dokumen</h3>
                        </div>
                        <div class="card-body">
                            @php
                                $isImage = in_array(strtolower($document->file_extension ?? ''), ['jpg', 'jpeg', 'png', 'gif']);
                                $isPdf = strtolower($document->file_extension ?? '') === 'pdf';
                            @endphp

                            @if($isImage)
                                <!-- Image Preview -->
                                <div class="text-center p-3">
                                    <img src="{{ asset('storage/' . $document->file_path) }}"
                                         alt="{{ $document->document_name }}"
                                         class="img-fluid rounded shadow-sm"
                                         style="max-height: 500px;">
                                </div>
                            @elseif($isPdf)
                                <!-- PDF Preview -->
                                <div style="min-height: 600px;">
                                    <iframe src="{{ asset('storage/' . $document->file_path) }}"
                                            width="100%"
                                            height="600px"
                                            style="border: none;">
                                    </iframe>
                                </div>
                            @else
                                <!-- Download Link for Other Files -->
                                <div class="empty">
                                    <div class="empty-icon">
                                        @php
                                            $iconMap = [
                                                'doc' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>',
                                                'docx' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>',
                                                'xls' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>',
                                                'xlsx' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>',
                                                'zip' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 20.735a2 2 0 0 1 -1 -1.735v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-1" /></svg>',
                                            ];
                                            $ext = strtolower($document->file_extension ?? '');
                                            $icon = $iconMap[$ext] ?? '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>';
                                        @endphp
                                        {!! $icon !!}
                                    </div>
                                    <p class="empty-title">{{ $document->file_name }}</p>
                                    <p class="empty-subtitle text-muted">
                                        Preview tidak tersedia untuk tipe file ini
                                    </p>
                                    <div class="empty-action">
                                        <a href="{{ route('admin.documents.download', $document->id) }}" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                            Download untuk Melihat
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Document Metadata -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Dokumen</h3>
                        </div>
                        <div class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Nama Dokumen</div>
                                    <div class="datagrid-content">{{ $document->document_name }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Jenis Dokumen</div>
                                    <div class="datagrid-content">
                                        <span class="badge bg-blue-lt">{{ str_replace('_', ' ', ucwords($document->document_type)) }}</span>
                                    </div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Nama File</div>
                                    <div class="datagrid-content">{{ $document->file_name }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Ukuran File</div>
                                    <div class="datagrid-content">{{ number_format(($document->file_size ?? 0) / 1024, 2) }} KB</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Tipe File</div>
                                    <div class="datagrid-content">{{ strtoupper($document->file_extension ?? '') }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Diupload Oleh</div>
                                    <div class="datagrid-content">
                                        {{ $document->uploader->name ?? '-' }}
                                        <div class="text-muted"><small>{{ $document->uploader->email ?? '' }}</small></div>
                                    </div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Tanggal Upload</div>
                                    <div class="datagrid-content">{{ $document->created_at ? $document->created_at->format('d M Y, H:i') : '-' }}</div>
                                </div>
                            </div>

                            @if($document->description)
                            <div class="mt-3">
                                <label class="form-label">Deskripsi</label>
                                <div class="card card-sm">
                                    <div class="card-body">{{ $document->description }}</div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Review Notes -->
                    @if($document->review_notes)
                    <div class="card mb-3">
                        <div class="card-status-top bg-yellow"></div>
                        <div class="card-header">
                            <h3 class="card-title">Catatan Review</h3>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">{{ $document->review_notes }}</p>
                            @if($document->reviewed_by && $document->reviewer)
                            <hr class="my-2">
                            <small class="text-muted">
                                Direview oleh: {{ $document->reviewer->name }} -
                                {{ $document->reviewed_at ? $document->reviewed_at->format('d M Y, H:i') : '' }}
                            </small>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Verification Status -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Status Verifikasi</h3>
                        </div>
                        <div class="card-body text-center">
                            @php
                                $statusConfig = [
                                    'uploaded' => ['class' => 'bg-secondary-lt', 'text' => 'Uploaded'],
                                    'pending_review' => ['class' => 'bg-yellow-lt', 'text' => 'Pending Review'],
                                    'approved' => ['class' => 'bg-green-lt', 'text' => 'Approved'],
                                    'rejected' => ['class' => 'bg-red-lt', 'text' => 'Rejected'],
                                    'revision_required' => ['class' => 'bg-cyan-lt', 'text' => 'Revision Required'],
                                ];
                                $config = $statusConfig[$document->status] ?? $statusConfig['uploaded'];
                            @endphp

                            <div class="mb-3">
                                <span class="avatar avatar-xl rounded" style="background-color: var(--tblr-body-bg);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 7l6 0" /><path d="M9 11l6 0" /><path d="M9 15l4 0" /></svg>
                                </span>
                            </div>
                            <h3>{{ $config['text'] }}</h3>
                            @if($document->reviewed_at)
                            <div class="text-muted"><small>Direview: {{ $document->reviewed_at->format('d M Y, H:i') }}</small></div>
                            @endif
                            <div class="mt-3">
                                <span class="status {{ $config['class'] }}">
                                    <span class="status-dot"></span>
                                    {{ $config['text'] }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Submission Information -->
                    @if($document->submission)
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Permohonan</h3>
                        </div>
                        <div class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Nomor Permohonan</div>
                                    <div class="datagrid-content">
                                        <a href="{{ route('admin.submissions.show', $document->submission->id) }}" class="text-reset">
                                            {{ $document->submission->submission_number }}
                                        </a>
                                    </div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Perusahaan</div>
                                    <div class="datagrid-content">{{ $document->submission->company_name }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Status</div>
                                    <div class="datagrid-content">
                                        <span class="badge bg-cyan-lt">{{ str_replace('_', ' ', ucfirst($document->submission->status)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Actions -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Aksi</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="{{ route('admin.documents.download', $document->id) }}" class="btn btn-cyan">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                    Download Dokumen
                                </a>
                                @if($document->status !== 'approved')
                                <button type="button" class="btn btn-success" onclick="approveDocument()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    Approve
                                </button>
                                @endif
                                @if($document->status !== 'rejected')
                                <button type="button" class="btn btn-danger" onclick="rejectDocument()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                    Reject
                                </button>
                                @endif
                                <button type="button" class="btn btn-warning" onclick="requestRevision()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                    Request Revision
                                </button>
                                <button type="button" class="btn btn-ghost-secondary" onclick="window.print()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg>
                                    Print Detail
                                </button>
                                <button type="button" class="btn btn-ghost-danger" onclick="confirmDelete()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    Hapus Dokumen
                                </button>
                            </div>
                        </div>
                    </div>
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
    <div class="modal modal-blur fade" id="statusModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="statusForm" action="{{ route('admin.documents.update-status', $document->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title" id="statusModalTitle">Update Status Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="status" id="statusValue">
                        <div class="mb-3">
                            <label class="form-label required">Catatan Review</label>
                            <textarea class="form-control" name="review_notes" rows="4"
                                      placeholder="Tambahkan catatan untuk status ini..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="statusSubmitButton">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
