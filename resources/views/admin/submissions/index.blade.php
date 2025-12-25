<x-layouts.admin.app>
    <x-slot name="title">Permohonan Sertifikasi Halal</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Permohonan Sertifikasi Halal</h2>
            <p class="text-secondary-light mb-0">Kelola semua permohonan sertifikasi halal dari pelaku usaha</p>
        </div>
        <div>
            <a href="{{ route('admin.submissions.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Permohonan
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
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Permohonan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--neutral-400); cursor: pointer;" onclick="filterByStatus('draft')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Draft</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['draft'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--neutral-100); color: var(--neutral-600);">
                        <i class="ri-draft-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main); cursor: pointer;" onclick="filterByStatus('submitted')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Submitted</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['submitted'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-send-plane-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main); cursor: pointer;" onclick="filterByStatus('screening')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Screening</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['screening'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-file-search-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Stats Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--purple-600); cursor: pointer;" onclick="filterByStatus('verification')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Verification</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['verification'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--purple-50); color: var(--purple-600);">
                        <i class="ri-shield-check-line"></i>
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
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--teal-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Bulan Ini</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['this_month'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--teal-50); color: var(--teal-600);">
                        <i class="ri-calendar-line"></i>
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
            <form method="GET" action="{{ route('admin.submissions.index') }}" id="filterForm">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Cari Permohonan</label>
                        <div class="position-relative">
                            <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                            <input type="text" name="search" class="form-control ps-5" placeholder="No. Permohonan, Perusahaan..." value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Status</label>
                        <select name="status" class="form-select" id="statusFilter">
                            <option value="">Semua Status</option>
                            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="submitted" {{ request('status') == 'submitted' ? 'selected' : '' }}>Submitted</option>
                            <option value="screening" {{ request('status') == 'screening' ? 'selected' : '' }}>Screening</option>
                            <option value="verification" {{ request('status') == 'verification' ? 'selected' : '' }}>Verification</option>
                            <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Jenis Sertifikasi</label>
                        <select name="certification_type" class="form-select">
                            <option value="">Semua Jenis</option>
                            <option value="new" {{ request('certification_type') == 'new' ? 'selected' : '' }}>Baru</option>
                            <option value="renewal" {{ request('certification_type') == 'renewal' ? 'selected' : '' }}>Perpanjangan</option>
                            <option value="extension" {{ request('certification_type') == 'extension' ? 'selected' : '' }}>Perluasan</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Dari Tanggal</label>
                        <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Sampai Tanggal</label>
                        <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
                    </div>
                    <div class="col-md-1">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">&nbsp;</label>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="ri-filter-line"></i>
                            </button>
                            <a href="{{ route('admin.submissions.index') }}" class="btn btn-outline-secondary">
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
            <h5 class="card-title mb-0">Daftar Permohonan</h5>
            <div class="d-flex gap-2">
                <button class="btn btn-sm btn-outline-success" onclick="exportData('excel')">
                    <i class="ri-file-excel-line me-1"></i> Excel
                </button>
                <button class="btn btn-sm btn-outline-danger" onclick="exportData('pdf')">
                    <i class="ri-file-pdf-line me-1"></i> PDF
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="submissionsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 50px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">No. Permohonan</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama Perusahaan</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal Pengajuan</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($submissions ?? [] as $index => $submission)
                    <tr>
                        <td style="padding: 1rem;">{{ $submissions->firstItem() + $index }}</td>
                        <td style="padding: 1rem;">
                            <strong class="text-primary">{{ $submission->submission_number ?? '-' }}</strong>
                            @if($submission->certification_type)
                            <br><small class="badge badge-sm" style="background-color: var(--purple-50); color: var(--purple-600);">
                                {{ ucfirst($submission->certification_type) }}
                            </small>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $submission->company_name }}</div>
                            <small class="text-secondary-light">
                                <i class="ri-map-pin-line"></i> {{ $submission->region->name ?? '-' }}
                            </small>
                        </td>
                        <td style="padding: 1rem;">
                            {{ $submission->businessType->name ?? '-' }}
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $statusConfig = [
                                    'draft' => ['class' => 'badge-secondary', 'icon' => 'ri-draft-line'],
                                    'submitted' => ['class' => 'badge-info', 'icon' => 'ri-send-plane-line'],
                                    'screening' => ['class' => 'badge-warning', 'icon' => 'ri-file-search-line'],
                                    'verification' => ['class' => 'badge-primary', 'icon' => 'ri-shield-check-line'],
                                    'approved' => ['class' => 'badge-success', 'icon' => 'ri-checkbox-circle-line'],
                                    'rejected' => ['class' => 'badge-danger', 'icon' => 'ri-close-circle-line'],
                                ];
                                $config = $statusConfig[$submission->status] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line'];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}">
                                <i class="{{ $config['icon'] }} me-1"></i>
                                {{ ucfirst($submission->status) }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            {{ $submission->submission_date ? $submission->submission_date->format('d M Y') : '-' }}
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.submissions.show', $submission->id) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                <a href="{{ route('admin.submissions.edit', $submission->id) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteSubmission({{ $submission->id }})" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-sm btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" title="Update Status">
                                        <i class="ri-refresh-line"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" onclick="updateStatus({{ $submission->id }}, 'submitted')">Set Submitted</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="updateStatus({{ $submission->id }}, 'screening')">Set Screening</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="updateStatus({{ $submission->id }}, 'verification')">Set Verification</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-success" href="#" onclick="updateStatus({{ $submission->id }}, 'approved')">Approve</a></li>
                                        <li><a class="dropdown-item text-danger" href="#" onclick="updateStatus({{ $submission->id }}, 'rejected')">Reject</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center" style="padding: 3rem;">
                            <i class="ri-file-list-3-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="text-secondary-light mt-2 mb-0">Tidak ada data permohonan</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if(isset($submissions) && $submissions->hasPages())
        <div class="p-3">
            {{ $submissions->links() }}
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
                    Apakah Anda yakin ingin menghapus permohonan ini?
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
            $('#submissionsTable').DataTable({
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
                order: [[5, 'desc']],
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

        function deleteSubmission(id) {
            const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            const form = document.getElementById('deleteForm');
            form.action = '/admin/submissions/' + id;
            modal.show();
        }

        function updateStatus(id, status) {
            if (confirm('Apakah Anda yakin ingin mengubah status permohonan ini?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/submissions/' + id + '/update-status';

                const csrfField = document.createElement('input');
                csrfField.type = 'hidden';
                csrfField.name = '_token';
                csrfField.value = '{{ csrf_token() }}';

                const statusField = document.createElement('input');
                statusField.type = 'hidden';
                statusField.name = 'status';
                statusField.value = status;

                form.appendChild(csrfField);
                form.appendChild(statusField);
                document.body.appendChild(form);
                form.submit();
            }
        }

        function exportData(format) {
            const params = new URLSearchParams(window.location.search);
            params.set('export', format);
            window.location.href = '{{ route("admin.submissions.index") }}?' + params.toString();
        }
    </script>
    @endpush
</x-layouts.admin.app>
