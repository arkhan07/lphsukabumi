<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Audit</h2>
            <p class="text-secondary-light mb-0">Daftar laporan hasil audit sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.audits.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali ke Audit
            </a>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createReportModal">
                <i class="ri-add-line me-2"></i>
                Buat Laporan
            </button>
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
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Laporan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-text-line"></i>
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
    </div>

    <!-- Results Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--success-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Lulus Audit</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['passed'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--success-50); color: var(--success-600);">
                        <i class="ri-shield-check-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
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
        <div class="col-12 col-md-4">
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
    </div>

    <!-- Filters and Search -->
    <div class="card-custom mb-4">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Filter & Pencarian</h5>
        </div>
        <div class="p-3">
            <form method="GET" action="{{ route('admin.audits.reports.index') }}" id="filterForm">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Cari Laporan</label>
                        <div class="position-relative">
                            <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                            <input type="text" name="search" class="form-control ps-5" placeholder="No. Laporan, Perusahaan..." value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Status</label>
                        <select name="status" class="form-select" id="statusFilter">
                            <option value="">Semua Status</option>
                            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="submitted" {{ request('status') == 'submitted' ? 'selected' : '' }}>Submitted</option>
                            <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Jenis Laporan</label>
                        <select name="report_type" class="form-select">
                            <option value="">Semua Jenis</option>
                            <option value="initial" {{ request('report_type') == 'initial' ? 'selected' : '' }}>Audit Awal</option>
                            <option value="surveillance" {{ request('report_type') == 'surveillance' ? 'selected' : '' }}>Surveillance</option>
                            <option value="renewal" {{ request('report_type') == 'renewal' ? 'selected' : '' }}>Perpanjangan</option>
                            <option value="special" {{ request('report_type') == 'special' ? 'selected' : '' }}>Khusus</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Hasil</label>
                        <select name="overall_result" class="form-select">
                            <option value="">Semua Hasil</option>
                            <option value="passed" {{ request('overall_result') == 'passed' ? 'selected' : '' }}>Lulus</option>
                            <option value="needs_correction" {{ request('overall_result') == 'needs_correction' ? 'selected' : '' }}>Perlu Perbaikan</option>
                            <option value="failed" {{ request('overall_result') == 'failed' ? 'selected' : '' }}>Tidak Lulus</option>
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
                            <a href="{{ route('admin.audits.reports.index') }}" class="btn btn-outline-secondary">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Reports Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Laporan Audit</h5>
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
            <table class="table table-hover" id="reportsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 50px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">No. Laporan</th>
                        <th style="padding: 1rem; font-weight: 600;">Audit</th>
                        <th style="padding: 1rem; font-weight: 600;">Permohonan</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Laporan</th>
                        <th style="padding: 1rem; font-weight: 600;">Hasil</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reports ?? [] as $index => $report)
                    <tr>
                        <td style="padding: 1rem;">{{ $reports->firstItem() + $index }}</td>
                        <td style="padding: 1rem;">
                            <strong class="text-primary">{{ $report->report_number ?? '-' }}</strong>
                            <br>
                            <small class="text-secondary-light">
                                <i class="ri-calendar-line"></i>
                                {{ $report->created_at ? $report->created_at->format('d M Y') : '-' }}
                            </small>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $report->audit->audit_number ?? '-' }}</div>
                            <small class="text-secondary-light">
                                {{ $report->audit->audit_date ? $report->audit->audit_date->format('d M Y') : '-' }}
                            </small>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $report->audit->submission->submission_number ?? '-' }}</div>
                            <small class="text-secondary-light">{{ $report->audit->submission->company_name ?? '-' }}</small>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $reportTypes = [
                                    'initial' => 'Audit Awal',
                                    'surveillance' => 'Surveillance',
                                    'renewal' => 'Perpanjangan',
                                    'special' => 'Khusus',
                                ];
                            @endphp
                            <span class="badge badge-sm" style="background-color: var(--purple-50); color: var(--purple-600);">
                                {{ $reportTypes[$report->report_type] ?? ucfirst($report->report_type ?? '-') }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $resultConfig = [
                                    'passed' => ['class' => 'badge-success', 'icon' => 'ri-shield-check-line', 'text' => 'Lulus'],
                                    'needs_correction' => ['class' => 'badge-warning', 'icon' => 'ri-tools-line', 'text' => 'Perlu Perbaikan'],
                                    'failed' => ['class' => 'badge-danger', 'icon' => 'ri-shield-cross-line', 'text' => 'Tidak Lulus'],
                                ];
                                $rConfig = $resultConfig[$report->overall_result ?? ''] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => '-'];
                            @endphp
                            <span class="badge-custom {{ $rConfig['class'] }}">
                                <i class="{{ $rConfig['icon'] }} me-1"></i>
                                {{ $rConfig['text'] }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $statusConfig = [
                                    'draft' => ['class' => 'badge-secondary', 'icon' => 'ri-draft-line', 'text' => 'Draft'],
                                    'submitted' => ['class' => 'badge-info', 'icon' => 'ri-send-plane-line', 'text' => 'Submitted'],
                                    'approved' => ['class' => 'badge-success', 'icon' => 'ri-checkbox-circle-line', 'text' => 'Approved'],
                                ];
                                $config = $statusConfig[$report->status] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => ucfirst($report->status ?? '-')];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}">
                                <i class="{{ $config['icon'] }} me-1"></i>
                                {{ $config['text'] }}
                            </span>
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <a href="{{ route('admin.audits.reports.show', $report->id) }}" class="btn btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                @if($report->status != 'approved')
                                <a href="{{ route('admin.audits.reports.edit', $report->id) }}" class="btn btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                @endif
                                @if($report->status == 'submitted')
                                <button class="btn btn-outline-info" onclick="approveReport({{ $report->id }})" title="Approve">
                                    <i class="ri-checkbox-circle-line"></i>
                                </button>
                                @endif
                                <a href="{{ route('admin.audits.reports.download', $report->id) }}" class="btn btn-outline-danger" title="Download PDF" target="_blank">
                                    <i class="ri-download-line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center" style="padding: 3rem;">
                            <i class="ri-file-text-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="text-secondary-light mt-2 mb-0">Tidak ada laporan audit</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if(isset($reports) && $reports->hasPages())
        <div class="p-3">
            {{ $reports->links() }}
        </div>
        @endif
    </div>

    <!-- Create Report Modal -->
    <div class="modal fade" id="createReportModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="ri-file-text-line me-2"></i>
                        Buat Laporan Audit
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="{{ route('admin.audits.reports.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" style="font-weight: 500;">Pilih Audit <span class="text-danger">*</span></label>
                                <select name="audit_id" class="form-select" required>
                                    <option value="">Pilih Audit</option>
                                    @foreach($audits ?? [] as $audit)
                                    <option value="{{ $audit->id }}">
                                        {{ $audit->audit_number }} - {{ $audit->submission->company_name ?? '-' }}
                                        ({{ $audit->audit_date ? $audit->audit_date->format('d M Y') : '-' }})
                                    </option>
                                    @endforeach
                                </select>
                                <small class="text-secondary-light">Pilih audit yang akan dibuatkan laporan</small>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 500;">Jenis Laporan <span class="text-danger">*</span></label>
                                <select name="report_type" class="form-select" required>
                                    <option value="">Pilih Jenis</option>
                                    <option value="initial">Audit Awal</option>
                                    <option value="surveillance">Surveillance</option>
                                    <option value="renewal">Perpanjangan</option>
                                    <option value="special">Khusus</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 500;">Hasil Keseluruhan <span class="text-danger">*</span></label>
                                <select name="overall_result" class="form-select" required>
                                    <option value="">Pilih Hasil</option>
                                    <option value="passed">Lulus</option>
                                    <option value="needs_correction">Perlu Perbaikan</option>
                                    <option value="failed">Tidak Lulus</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label" style="font-weight: 500;">Ringkasan Eksekutif <span class="text-danger">*</span></label>
                                <textarea name="executive_summary" class="form-control" rows="4" placeholder="Ringkasan hasil audit..." required></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label" style="font-weight: 500;">Kesimpulan</label>
                                <textarea name="conclusion" class="form-control" rows="3" placeholder="Kesimpulan audit..."></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label" style="font-weight: 500;">Rekomendasi</label>
                                <textarea name="recommendations" class="form-control" rows="3" placeholder="Rekomendasi untuk pelaku usaha..."></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="auto_generate" id="autoGenerate" checked>
                                    <label class="form-check-label" for="autoGenerate">
                                        Otomatis generate nomor laporan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="submit_action" value="draft" class="btn btn-outline-primary">
                            <i class="ri-draft-line me-2"></i>
                            Simpan sebagai Draft
                        </button>
                        <button type="submit" name="submit_action" value="submit" class="btn btn-primary">
                            <i class="ri-send-plane-line me-2"></i>
                            Buat & Submit
                        </button>
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
            $('#reportsTable').DataTable({
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
                order: [[1, 'desc']],
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

        function approveReport(id) {
            if (confirm('Approve laporan audit ini?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/audits/reports/' + id + '/approve';

                const csrfField = document.createElement('input');
                csrfField.type = 'hidden';
                csrfField.name = '_token';
                csrfField.value = '{{ csrf_token() }}';

                form.appendChild(csrfField);
                document.body.appendChild(form);
                form.submit();
            }
        }

        function exportData(format) {
            const params = new URLSearchParams(window.location.search);
            params.set('export', format);
            window.location.href = '{{ route("admin.audits.reports.index") }}?' + params.toString();
        }
    </script>
    @endpush
</x-layouts.admin.app>
