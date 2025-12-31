<x-layouts.admin.app>
    <x-slot name="title">Temuan Audit</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Temuan Audit</h2>
            <p class="text-secondary-light mb-0">Daftar temuan dan catatan hasil audit sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.audits.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali ke Audit
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
            <div class="card-custom" style="border-left: 4px solid var(--primary-600); cursor: pointer;" onclick="filterBySeverity('all')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Temuan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-error-warning-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main); cursor: pointer;" onclick="filterBySeverity('critical')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Kritis</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['critical'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-alert-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main); cursor: pointer;" onclick="filterBySeverity('major')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Major</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['major'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-error-warning-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main); cursor: pointer;" onclick="filterBySeverity('minor')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Minor</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['minor'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-information-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--warning-600); cursor: pointer;" onclick="filterByStatus('open')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Terbuka</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['open'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--warning-50); color: var(--warning-600);">
                        <i class="ri-file-list-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--success-main); cursor: pointer;" onclick="filterByStatus('closed')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Ditutup</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['closed'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
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
            <form method="GET" action="{{ route('admin.audits.findings') }}" id="filterForm">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Cari Temuan</label>
                        <div class="position-relative">
                            <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                            <input type="text" name="search" class="form-control ps-5" placeholder="No. Temuan, Audit, Perusahaan..." value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Tingkat Keparahan</label>
                        <select name="severity" class="form-select" id="severityFilter">
                            <option value="">Semua Tingkat</option>
                            <option value="critical" {{ request('severity') == 'critical' ? 'selected' : '' }}>Kritis</option>
                            <option value="major" {{ request('severity') == 'major' ? 'selected' : '' }}>Major</option>
                            <option value="minor" {{ request('severity') == 'minor' ? 'selected' : '' }}>Minor</option>
                            <option value="observation" {{ request('severity') == 'observation' ? 'selected' : '' }}>Observasi</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Status</label>
                        <select name="status" class="form-select" id="statusFilter">
                            <option value="">Semua Status</option>
                            <option value="open" {{ request('status') == 'open' ? 'selected' : '' }}>Terbuka</option>
                            <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>Dalam Perbaikan</option>
                            <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Ditutup</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" style="font-size: 0.875rem; font-weight: 500;">Status Tindakan</label>
                        <select name="action_status" class="form-select">
                            <option value="">Semua</option>
                            <option value="pending" {{ request('action_status') == 'pending' ? 'selected' : '' }}>Menunggu</option>
                            <option value="in_progress" {{ request('action_status') == 'in_progress' ? 'selected' : '' }}>Sedang Diperbaiki</option>
                            <option value="completed" {{ request('action_status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                            <option value="verified" {{ request('action_status') == 'verified' ? 'selected' : '' }}>Terverifikasi</option>
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
                            <a href="{{ route('admin.audits.findings') }}" class="btn btn-outline-secondary">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Findings Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Temuan</h5>
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
            <table class="table table-hover" id="findingsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 50px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">No. Temuan</th>
                        <th style="padding: 1rem; font-weight: 600;">Audit</th>
                        <th style="padding: 1rem; font-weight: 600;">Permohonan</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis</th>
                        <th style="padding: 1rem; font-weight: 600;">Tingkat</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600;">Status Tindakan</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($findings ?? [] as $index => $finding)
                    <tr>
                        <td style="padding: 1rem;">{{ $findings->firstItem() + $index }}</td>
                        <td style="padding: 1rem;">
                            <strong class="text-primary">{{ $finding->finding_number ?? '-' }}</strong>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $finding->audit->audit_number ?? '-' }}</div>
                            <small class="text-secondary-light">
                                <i class="ri-calendar-line"></i>
                                {{ $finding->audit->audit_date ? $finding->audit->audit_date->format('d M Y') : '-' }}
                            </small>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $finding->audit->submission->submission_number ?? '-' }}</div>
                            <small class="text-secondary-light">{{ $finding->audit->submission->company_name ?? '-' }}</small>
                        </td>
                        <td style="padding: 1rem;">
                            {{ $finding->category ?? '-' }}
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $severityConfig = [
                                    'critical' => ['class' => 'badge-danger', 'icon' => 'ri-alert-fill', 'text' => 'Kritis'],
                                    'major' => ['class' => 'badge-warning', 'icon' => 'ri-error-warning-fill', 'text' => 'Major'],
                                    'minor' => ['class' => 'badge-info', 'icon' => 'ri-information-fill', 'text' => 'Minor'],
                                    'observation' => ['class' => 'badge-secondary', 'icon' => 'ri-eye-line', 'text' => 'Observasi'],
                                ];
                                $sConfig = $severityConfig[$finding->severity] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => ucfirst($finding->severity ?? '-')];
                            @endphp
                            <span class="badge-custom {{ $sConfig['class'] }}">
                                <i class="{{ $sConfig['icon'] }} me-1"></i>
                                {{ $sConfig['text'] }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $statusConfig = [
                                    'open' => ['class' => 'badge-warning', 'icon' => 'ri-file-list-line', 'text' => 'Terbuka'],
                                    'in_progress' => ['class' => 'badge-info', 'icon' => 'ri-time-line', 'text' => 'Dalam Perbaikan'],
                                    'closed' => ['class' => 'badge-success', 'icon' => 'ri-checkbox-circle-line', 'text' => 'Ditutup'],
                                ];
                                $config = $statusConfig[$finding->status] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => ucfirst($finding->status ?? '-')];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}">
                                <i class="{{ $config['icon'] }} me-1"></i>
                                {{ $config['text'] }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $actionStatusConfig = [
                                    'pending' => ['class' => 'badge-secondary', 'icon' => 'ri-time-line', 'text' => 'Menunggu'],
                                    'in_progress' => ['class' => 'badge-warning', 'icon' => 'ri-tools-line', 'text' => 'Diperbaiki'],
                                    'completed' => ['class' => 'badge-info', 'icon' => 'ri-check-line', 'text' => 'Selesai'],
                                    'verified' => ['class' => 'badge-success', 'icon' => 'ri-shield-check-line', 'text' => 'Terverifikasi'],
                                ];
                                $aConfig = $actionStatusConfig[$finding->action_status ?? 'pending'] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => '-'];
                            @endphp
                            <span class="badge-custom {{ $aConfig['class'] }}">
                                <i class="{{ $aConfig['icon'] }} me-1"></i>
                                {{ $aConfig['text'] }}
                            </span>
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <a href="{{ route('admin.audits.findings.show', $finding->id) }}" class="btn btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                @if($finding->status != 'closed')
                                <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#updateCARModal{{ $finding->id }}" title="Update CAR">
                                    <i class="ri-pencil-line"></i>
                                </button>
                                @endif
                                @if($finding->action_status == 'completed' && $finding->status != 'closed')
                                <button class="btn btn-outline-info" onclick="verifyFinding({{ $finding->id }})" title="Verifikasi">
                                    <i class="ri-shield-check-line"></i>
                                </button>
                                @endif
                                @if($finding->action_status == 'verified' && $finding->status != 'closed')
                                <button class="btn btn-outline-success" onclick="closeFinding({{ $finding->id }})" title="Tutup Temuan">
                                    <i class="ri-check-double-line"></i>
                                </button>
                                @endif
                            </div>
                        </td>
                    </tr>

                    <!-- Update CAR Modal for each finding -->
                    <div class="modal fade" id="updateCARModal{{ $finding->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update CAR - {{ $finding->finding_number }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form method="POST" action="{{ route('admin.audits.findings.update-car', $finding->id) }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="font-weight: 500;">Status Tindakan <span class="text-danger">*</span></label>
                                            <select name="action_status" class="form-select" required>
                                                <option value="pending" {{ $finding->action_status == 'pending' ? 'selected' : '' }}>Menunggu</option>
                                                <option value="in_progress" {{ $finding->action_status == 'in_progress' ? 'selected' : '' }}>Sedang Diperbaiki</option>
                                                <option value="completed" {{ $finding->action_status == 'completed' ? 'selected' : '' }}>Selesai</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="font-weight: 500;">Catatan CAR</label>
                                            <textarea name="car_notes" class="form-control" rows="4" placeholder="Catatan tindakan perbaikan...">{{ $finding->car_notes ?? '' }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="font-weight: 500;">Target Penyelesaian</label>
                                            <input type="date" name="target_completion_date" class="form-control" value="{{ $finding->target_completion_date }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ri-save-line me-2"></i>
                                            Update CAR
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center" style="padding: 3rem;">
                            <i class="ri-error-warning-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="text-secondary-light mt-2 mb-0">Tidak ada temuan audit</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if(isset($findings) && $findings->hasPages())
        <div class="p-3">
            {{ $findings->links() }}
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
            $('#findingsTable').DataTable({
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

        function filterBySeverity(severity) {
            if (severity === 'all') {
                document.getElementById('severityFilter').value = '';
            } else {
                document.getElementById('severityFilter').value = severity;
            }
            document.getElementById('filterForm').submit();
        }

        function filterByStatus(status) {
            document.getElementById('statusFilter').value = status;
            document.getElementById('filterForm').submit();
        }

        function verifyFinding(id) {
            if (confirm('Apakah Anda yakin tindakan perbaikan sudah terverifikasi?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/audits/findings/' + id + '/verify';

                const csrfField = document.createElement('input');
                csrfField.type = 'hidden';
                csrfField.name = '_token';
                csrfField.value = '{{ csrf_token() }}';

                form.appendChild(csrfField);
                document.body.appendChild(form);
                form.submit();
            }
        }

        function closeFinding(id) {
            if (confirm('Tutup temuan ini? Temuan yang sudah ditutup tidak dapat diubah lagi.')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/audits/findings/' + id + '/close';

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
            window.location.href = '{{ route("admin.audits.findings") }}?' + params.toString();
        }
    </script>
    @endpush
</x-layouts.admin.app>
