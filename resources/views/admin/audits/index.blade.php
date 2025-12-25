<x-layouts.admin.app>
    <x-slot name="title">Manajemen Audit</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Audit</h2>
            <p class="text-secondary-light mb-0">Kelola proses audit sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.audits.schedules.index') }}" class="btn btn-outline-primary">
                <i class="ri-calendar-line me-2"></i>
                Jadwal Audit
            </a>
            <a href="{{ route('admin.audits.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Audit
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
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Audit</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main); cursor: pointer;" onclick="filterByStatus('planned')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Direncanakan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['planned'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-draft-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main); cursor: pointer;" onclick="filterByStatus('in_progress')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Berlangsung</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['in_progress'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main); cursor: pointer;" onclick="filterByStatus('completed')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Selesai</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['completed'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Lulus</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['passed'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--success-50); color: var(--success-600);">
                        <i class="ri-shield-check-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Perlu Perbaikan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['needs_correction'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--warning-50); color: var(--warning-600);">
                        <i class="ri-tools-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Tidak Lulus</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['failed'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--danger-50); color: var(--danger-600);">
                        <i class="ri-shield-cross-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--purple-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Bulan Ini</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['this_month'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--purple-50); color: var(--purple-600);">
                        <i class="ri-calendar-2-line"></i>
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
            <form method="GET" action="{{ route('admin.audits.index') }}" id="filterForm">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Cari Audit</label>
                        <div class="position-relative">
                            <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                            <input type="text" name="search" class="form-control ps-5" placeholder="No. Audit, Perusahaan..." value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Status</label>
                        <select name="status" class="form-select" id="statusFilter">
                            <option value="">Semua Status</option>
                            <option value="planned" {{ request('status') == 'planned' ? 'selected' : '' }}>Direncanakan</option>
                            <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>Berlangsung</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Jenis Audit</label>
                        <select name="audit_type" class="form-select">
                            <option value="">Semua Jenis</option>
                            <option value="initial" {{ request('audit_type') == 'initial' ? 'selected' : '' }}>Audit Awal</option>
                            <option value="surveillance" {{ request('audit_type') == 'surveillance' ? 'selected' : '' }}>Surveillance</option>
                            <option value="renewal" {{ request('audit_type') == 'renewal' ? 'selected' : '' }}>Perpanjangan</option>
                            <option value="special" {{ request('audit_type') == 'special' ? 'selected' : '' }}>Khusus</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Hasil</label>
                        <select name="result" class="form-select">
                            <option value="">Semua Hasil</option>
                            <option value="passed" {{ request('result') == 'passed' ? 'selected' : '' }}>Lulus</option>
                            <option value="needs_correction" {{ request('result') == 'needs_correction' ? 'selected' : '' }}>Perlu Perbaikan</option>
                            <option value="failed" {{ request('result') == 'failed' ? 'selected' : '' }}>Tidak Lulus</option>
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
                            <a href="{{ route('admin.audits.index') }}" class="btn btn-outline-secondary">
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
            <h5 class="card-title mb-0">Daftar Audit</h5>
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
            <table class="table table-hover" id="auditsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 50px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">No. Audit</th>
                        <th style="padding: 1rem; font-weight: 600;">Permohonan</th>
                        <th style="padding: 1rem; font-weight: 600;">Auditor Utama</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Audit</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal Audit</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600;">Hasil</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($audits ?? [] as $index => $audit)
                    <tr>
                        <td style="padding: 1rem;">{{ $audits->firstItem() + $index }}</td>
                        <td style="padding: 1rem;">
                            <strong class="text-primary">{{ $audit->audit_number ?? '-' }}</strong>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $audit->submission->submission_number ?? '-' }}</div>
                            <small class="text-secondary-light">{{ $audit->submission->company_name ?? '-' }}</small>
                        </td>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($audit->leadAuditor->name ?? 'A') }}&background=3b82f6&color=fff"
                                     style="width: 30px; height: 30px; border-radius: 50%;">
                                <span>{{ $audit->leadAuditor->name ?? '-' }}</span>
                            </div>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $auditTypes = [
                                    'initial' => 'Audit Awal',
                                    'surveillance' => 'Surveillance',
                                    'renewal' => 'Perpanjangan',
                                    'special' => 'Khusus',
                                ];
                            @endphp
                            <span class="badge badge-sm" style="background-color: var(--purple-50); color: var(--purple-600);">
                                {{ $auditTypes[$audit->audit_type] ?? ucfirst($audit->audit_type ?? '-') }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            {{ $audit->audit_date ? $audit->audit_date->format('d M Y') : '-' }}
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $statusConfig = [
                                    'planned' => ['class' => 'badge-info', 'icon' => 'ri-draft-line', 'text' => 'Direncanakan'],
                                    'in_progress' => ['class' => 'badge-warning', 'icon' => 'ri-time-line', 'text' => 'Berlangsung'],
                                    'completed' => ['class' => 'badge-success', 'icon' => 'ri-checkbox-circle-line', 'text' => 'Selesai'],
                                ];
                                $config = $statusConfig[$audit->status] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => ucfirst($audit->status ?? '-')];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}">
                                <i class="{{ $config['icon'] }} me-1"></i>
                                {{ $config['text'] }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            @if($audit->overall_result)
                                @php
                                    $resultConfig = [
                                        'passed' => ['class' => 'badge-success', 'icon' => 'ri-shield-check-line', 'text' => 'Lulus'],
                                        'needs_correction' => ['class' => 'badge-warning', 'icon' => 'ri-tools-line', 'text' => 'Perlu Perbaikan'],
                                        'failed' => ['class' => 'badge-danger', 'icon' => 'ri-shield-cross-line', 'text' => 'Tidak Lulus'],
                                    ];
                                    $rConfig = $resultConfig[$audit->overall_result] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => '-'];
                                @endphp
                                <span class="badge-custom {{ $rConfig['class'] }}">
                                    <i class="{{ $rConfig['icon'] }} me-1"></i>
                                    {{ $rConfig['text'] }}
                                </span>
                            @else
                                <span class="badge-custom badge-secondary">-</span>
                            @endif
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.audits.show', $audit->id) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                @if($audit->status != 'completed')
                                <a href="{{ route('admin.audits.edit', $audit->id) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                @endif
                                <a href="{{ route('admin.audits.findings.create', $audit->id) }}" class="btn btn-sm btn-outline-warning" title="Tambah Temuan">
                                    <i class="ri-error-warning-line"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-info" onclick="generateReport({{ $audit->id }})" title="Generate Laporan">
                                    <i class="ri-file-text-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center" style="padding: 3rem;">
                            <i class="ri-file-list-3-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="text-secondary-light mt-2 mb-0">Tidak ada data audit</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if(isset($audits) && $audits->hasPages())
        <div class="p-3">
            {{ $audits->links() }}
        </div>
        @endif
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
            $('#auditsTable').DataTable({
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

        function generateReport(auditId) {
            if (confirm('Generate laporan audit?')) {
                window.location.href = '/admin/audits/' + auditId + '/generate-report';
            }
        }

        function exportData(format) {
            const params = new URLSearchParams(window.location.search);
            params.set('export', format);
            window.location.href = '{{ route("admin.audits.index") }}?' + params.toString();
        }
    </script>
    @endpush
</x-layouts.admin.app>
