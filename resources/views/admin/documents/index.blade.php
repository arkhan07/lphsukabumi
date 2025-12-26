<x-layouts.admin.app>
    <x-slot name="title">Manajemen Dokumen</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Dokumen</h2>
            <p class="text-secondary-light mb-0">Kelola semua dokumen sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.documents.create') }}" class="btn btn-primary">
                <i class="ri-upload-line me-2"></i>
                Upload Dokumen
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

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600); cursor: pointer;" onclick="filterByStatus('all')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Dokumen</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main); cursor: pointer;" onclick="filterByStatus('pending_review')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Pending Review</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['pending_review'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main); cursor: pointer;" onclick="filterByStatus('approved')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Approved</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['approved'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main); cursor: pointer;" onclick="filterByStatus('rejected')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Rejected</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['rejected'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-close-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Stat -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main); cursor: pointer;" onclick="filterByStatus('revision_required')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Revision Required</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['revision_required'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-file-edit-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="card-custom mb-4">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Filter & Pencarian</h5>
        </div>
        <div class="p-3">
            <form method="GET" action="{{ route('admin.documents.index') }}" id="filterForm">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Cari Dokumen</label>
                        <div class="position-relative">
                            <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                            <input type="text" name="search" class="form-control ps-5" placeholder="Nama dokumen, permohonan..." value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Jenis Dokumen</label>
                        <select name="document_type" class="form-select">
                            <option value="">Semua Jenis</option>
                            <option value="company_profile" {{ request('document_type') == 'company_profile' ? 'selected' : '' }}>Profil Perusahaan</option>
                            <option value="business_permit" {{ request('document_type') == 'business_permit' ? 'selected' : '' }}>Izin Usaha</option>
                            <option value="nib" {{ request('document_type') == 'nib' ? 'selected' : '' }}>NIB</option>
                            <option value="npwp" {{ request('document_type') == 'npwp' ? 'selected' : '' }}>NPWP</option>
                            <option value="product_specification" {{ request('document_type') == 'product_specification' ? 'selected' : '' }}>Spesifikasi Produk</option>
                            <option value="process_flow" {{ request('document_type') == 'process_flow' ? 'selected' : '' }}>Alur Proses</option>
                            <option value="facility_layout" {{ request('document_type') == 'facility_layout' ? 'selected' : '' }}>Layout Fasilitas</option>
                            <option value="halal_certificate_material" {{ request('document_type') == 'halal_certificate_material' ? 'selected' : '' }}>Sertifikat Halal Bahan</option>
                            <option value="other" {{ request('document_type') == 'other' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Status</label>
                        <select name="status" class="form-select" id="statusFilter">
                            <option value="">Semua Status</option>
                            <option value="uploaded" {{ request('status') == 'uploaded' ? 'selected' : '' }}>Uploaded</option>
                            <option value="pending_review" {{ request('status') == 'pending_review' ? 'selected' : '' }}>Pending Review</option>
                            <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            <option value="revision_required" {{ request('status') == 'revision_required' ? 'selected' : '' }}>Revision Required</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Permohonan</label>
                        <select name="submission_id" class="form-select">
                            <option value="">Semua Permohonan</option>
                            @foreach($submissions ?? [] as $submission)
                            <option value="{{ $submission->id }}" {{ request('submission_id') == $submission->id ? 'selected' : '' }}>
                                {{ $submission->submission_number }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Dari Tanggal</label>
                        <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                    </div>
                    <div class="col-md-1">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">&nbsp;</label>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="ri-filter-line"></i>
                            </button>
                            <a href="{{ route('admin.documents.index') }}" class="btn btn-outline-secondary">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Main Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Daftar Dokumen</h5>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-success" onclick="exportData('excel')">
                    <i class="ri-file-excel-line me-1"></i> Excel
                </button>
                <button class="btn btn-outline-danger" onclick="exportData('pdf')">
                    <i class="ri-file-pdf-line me-1"></i> PDF
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="documentsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 50px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama Dokumen</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis</th>
                        <th style="padding: 1rem; font-weight: 600;">Permohonan</th>
                        <th style="padding: 1rem; font-weight: 600;">Diupload Oleh</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal Upload</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($documents ?? [] as $index => $document)
                    <tr>
                        <td style="padding: 1rem;">{{ $documents->firstItem() + $index }}</td>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                @php
                                    $iconMap = [
                                        'pdf' => ['icon' => 'ri-file-pdf-line', 'color' => 'var(--danger-main)'],
                                        'doc' => ['icon' => 'ri-file-word-line', 'color' => 'var(--info-main)'],
                                        'docx' => ['icon' => 'ri-file-word-line', 'color' => 'var(--info-main)'],
                                        'xls' => ['icon' => 'ri-file-excel-line', 'color' => 'var(--success-main)'],
                                        'xlsx' => ['icon' => 'ri-file-excel-line', 'color' => 'var(--success-main)'],
                                        'jpg' => ['icon' => 'ri-image-line', 'color' => 'var(--purple-600)'],
                                        'jpeg' => ['icon' => 'ri-image-line', 'color' => 'var(--purple-600)'],
                                        'png' => ['icon' => 'ri-image-line', 'color' => 'var(--purple-600)'],
                                        'zip' => ['icon' => 'ri-file-zip-line', 'color' => 'var(--warning-main)'],
                                    ];
                                    $ext = strtolower($document->file_extension ?? '');
                                    $icon = $iconMap[$ext] ?? ['icon' => 'ri-file-line', 'color' => 'var(--neutral-400)'];
                                @endphp
                                <i class="{{ $icon['icon'] }}" style="font-size: 1.5rem; color: {{ $icon['color'] }};"></i>
                                <div>
                                    <div style="font-weight: 500;">{{ $document->document_name }}</div>
                                    <small class="text-secondary-light">
                                        {{ strtoupper($document->file_extension ?? '') }} -
                                        {{ number_format(($document->file_size ?? 0) / 1024, 2) }} KB
                                    </small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;">
                            <span class="badge-custom badge-primary">
                                {{ str_replace('_', ' ', ucwords($document->document_type ?? '')) }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            @if($document->submission)
                                <a href="{{ route('admin.submissions.show', $document->submission->id) }}"
                                   class="text-primary-600" style="text-decoration: none;">
                                    {{ $document->submission->submission_number ?? '-' }}
                                </a>
                                <br>
                                <small class="text-secondary-light">{{ $document->submission->company_name ?? '' }}</small>
                            @else
                                -
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <div>{{ $document->uploader->name ?? '-' }}</div>
                            <small class="text-secondary-light">{{ $document->uploader->email ?? '' }}</small>
                        </td>
                        <td style="padding: 1rem;">
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
                        <td style="padding: 1rem;">
                            {{ $document->created_at ? $document->created_at->format('d M Y') : '-' }}
                            <br>
                            <small class="text-secondary-light">{{ $document->created_at ? $document->created_at->format('H:i') : '' }}</small>
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <a href="{{ route('admin.documents.show', $document->id) }}"
                                   class="btn btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                <a href="{{ route('admin.documents.download', $document->id) }}"
                                   class="btn btn-outline-info" title="Download">
                                    <i class="ri-download-line"></i>
                                </a>
                                @if($document->status === 'pending_review' || $document->status === 'uploaded')
                                <button class="btn btn-outline-success"
                                        onclick="updateStatus({{ $document->id }}, 'approved')" title="Approve">
                                    <i class="ri-checkbox-line"></i>
                                </button>
                                <button class="btn btn-outline-danger"
                                        onclick="updateStatus({{ $document->id }}, 'rejected')" title="Reject">
                                    <i class="ri-close-line"></i>
                                </button>
                                <button class="btn btn-outline-warning"
                                        onclick="updateStatus({{ $document->id }}, 'revision_required')" title="Request Revision">
                                    <i class="ri-edit-line"></i>
                                </button>
                                @endif
                                <button class="btn btn-outline-danger"
                                        onclick="deleteDocument({{ $document->id }})" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center" style="padding: 3rem;">
                            <i class="ri-file-list-3-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="text-secondary-light mt-2 mb-0">Tidak ada data dokumen</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if(isset($documents) && $documents->hasPages())
        <div class="p-3">
            {{ $documents->links() }}
        </div>
        @endif
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus dokumen ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form id="deleteForm" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Update Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="statusForm" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title">Update Status Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="status" id="statusValue">
                        <div class="mb-3">
                            <label class="form-label">Catatan Review</label>
                            <textarea class="form-control" name="review_notes" rows="4"
                                      placeholder="Tambahkan catatan untuk status ini..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    @endpush

    @push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#documentsTable').DataTable({
                language: {
                    lengthMenu: "Tampilkan _MENU_ data per halaman",
                    zeroRecords: "Data tidak ditemukan",
                    info: "Menampilkan halaman _PAGE_ dari _PAGES_",
                    infoEmpty: "Tidak ada data tersedia",
                    infoFiltered: "(difilter dari _MAX_ total data)",
                    search: "Cari:",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya"
                    }
                },
                order: [[6, 'desc']],
                pageLength: 10,
                searching: false,
                paging: false,
                info: false
            });
        });

        function filterByStatus(status) {
            if (status === 'all') {
                document.getElementById('statusFilter').value = '';
            } else {
                document.getElementById('statusFilter').value = status;
            }
            document.getElementById('filterForm').submit();
        }

        function deleteDocument(id) {
            const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            const form = document.getElementById('deleteForm');
            form.action = '/admin/documents/' + id;
            modal.show();
        }

        function updateStatus(id, status) {
            const modal = new bootstrap.Modal(document.getElementById('statusModal'));
            const form = document.getElementById('statusForm');
            const statusValue = document.getElementById('statusValue');

            form.action = '/admin/documents/' + id + '/update-status';
            statusValue.value = status;
            modal.show();
        }

        function exportData(format) {
            const params = new URLSearchParams(window.location.search);
            params.set('export', format);
            window.location.href = '{{ route("admin.documents.index") }}?' + params.toString();
        }
    </script>
    @endpush
</x-layouts.admin.app>
