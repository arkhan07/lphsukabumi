<x-layouts.admin.app>
    <x-slot name="title">Detail Audit - {{ $audit->audit_number ?? 'N/A' }}</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Audit</h2>
            <p class="text-secondary-light mb-0">Informasi lengkap audit sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.audits.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
            @if($audit->status != 'completed')
            <a href="{{ route('admin.audits.edit', $audit->id) }}" class="btn btn-outline-primary">
                <i class="ri-edit-line me-2"></i>
                Edit Audit
            </a>
            @endif
            <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#addFindingModal">
                <i class="ri-error-warning-line me-2"></i>
                Tambah Temuan
            </button>
            @if($audit->status == 'in_progress')
            <button class="btn btn-success" onclick="completeAudit()">
                <i class="ri-checkbox-circle-line me-2"></i>
                Selesaikan Audit
            </button>
            @endif
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

    <!-- Audit Header Card -->
    <div class="card-custom mb-4">
        <div class="p-4">
            <div class="row g-4">
                <div class="col-md-6">
                    <h4 class="text-primary mb-3">{{ $audit->audit_number ?? 'N/A' }}</h4>
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td style="width: 150px; font-weight: 500;">Permohonan</td>
                            <td>: {{ $audit->submission->submission_number ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 500;">Perusahaan</td>
                            <td>: {{ $audit->submission->company_name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 500;">Jenis Audit</td>
                            <td>:
                                @php
                                    $auditTypes = [
                                        'initial' => 'Audit Awal',
                                        'surveillance' => 'Surveillance',
                                        'renewal' => 'Perpanjangan',
                                        'special' => 'Khusus',
                                    ];
                                @endphp
                                <span class="badge" style="background-color: var(--purple-50); color: var(--purple-600);">
                                    {{ $auditTypes[$audit->audit_type] ?? ucfirst($audit->audit_type ?? '-') }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: 500;">Tanggal Audit</td>
                            <td>: {{ $audit->audit_date ? $audit->audit_date->format('d F Y') : '-' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="text-end mb-3">
                        @php
                            $statusConfig = [
                                'planned' => ['class' => 'badge-info', 'icon' => 'ri-draft-line', 'text' => 'Direncanakan'],
                                'in_progress' => ['class' => 'badge-warning', 'icon' => 'ri-time-line', 'text' => 'Berlangsung'],
                                'completed' => ['class' => 'badge-success', 'icon' => 'ri-checkbox-circle-line', 'text' => 'Selesai'],
                            ];
                            $config = $statusConfig[$audit->status] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => ucfirst($audit->status ?? '-')];
                        @endphp
                        <span class="badge-custom {{ $config['class'] }}" style="font-size: 1rem; padding: 0.5rem 1rem;">
                            <i class="{{ $config['icon'] }} me-1"></i>
                            {{ $config['text'] }}
                        </span>
                    </div>
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td style="width: 150px; font-weight: 500;">Auditor Utama</td>
                            <td>: {{ $audit->leadAuditor->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 500;">Lokasi Audit</td>
                            <td>: {{ $audit->location ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 500;">Hasil Audit</td>
                            <td>:
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
                                    <span class="text-secondary-light">Belum ada hasil</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: 500;">Dibuat</td>
                            <td>: {{ $audit->created_at ? $audit->created_at->format('d M Y H:i') : '-' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="card-custom">
        <div class="card-header-custom" style="border-bottom: 2px solid var(--neutral-100);">
            <ul class="nav nav-tabs card-header-tabs" id="auditTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">
                        <i class="ri-information-line me-2"></i>
                        Overview
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="findings-tab" data-bs-toggle="tab" data-bs-target="#findings" type="button" role="tab">
                        <i class="ri-error-warning-line me-2"></i>
                        Temuan
                        @if(isset($audit->findings) && $audit->findings->count() > 0)
                        <span class="badge bg-danger rounded-pill ms-2">{{ $audit->findings->count() }}</span>
                        @endif
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="evidence-tab" data-bs-toggle="tab" data-bs-target="#evidence" type="button" role="tab">
                        <i class="ri-file-list-3-line me-2"></i>
                        Bukti Audit
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="report-tab" data-bs-toggle="tab" data-bs-target="#report" type="button" role="tab">
                        <i class="ri-file-text-line me-2"></i>
                        Laporan
                    </button>
                </li>
            </ul>
        </div>
        <div class="tab-content p-4" id="auditTabsContent">
            <!-- Overview Tab -->
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="row g-4">
                    <!-- Audit Team -->
                    <div class="col-md-6">
                        <h5 class="mb-3">
                            <i class="ri-team-line me-2 text-primary"></i>
                            Tim Audit
                        </h5>
                        <div class="card" style="background-color: var(--neutral-50); border: 1px solid var(--neutral-200);">
                            <div class="card-body">
                                <div class="mb-3">
                                    <strong>Auditor Utama:</strong>
                                    <div class="d-flex align-items-center gap-2 mt-2">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($audit->leadAuditor->name ?? 'A') }}&background=3b82f6&color=fff"
                                             style="width: 40px; height: 40px; border-radius: 50%;">
                                        <div>
                                            <div style="font-weight: 500;">{{ $audit->leadAuditor->name ?? '-' }}</div>
                                            <small class="text-secondary-light">{{ $audit->leadAuditor->email ?? '-' }}</small>
                                        </div>
                                    </div>
                                </div>
                                @if(isset($audit->teamMembers) && $audit->teamMembers->count() > 0)
                                <div>
                                    <strong>Anggota Tim:</strong>
                                    <div class="mt-2">
                                        @foreach($audit->teamMembers as $member)
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($member->name) }}&background=10b981&color=fff"
                                                 style="width: 32px; height: 32px; border-radius: 50%;">
                                            <div>
                                                <div style="font-size: 0.875rem; font-weight: 500;">{{ $member->name }}</div>
                                                <small class="text-secondary-light">{{ $member->email }}</small>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Audit Scope -->
                    <div class="col-md-6">
                        <h5 class="mb-3">
                            <i class="ri-focus-2-line me-2 text-primary"></i>
                            Ruang Lingkup Audit
                        </h5>
                        <div class="card" style="background-color: var(--neutral-50); border: 1px solid var(--neutral-200);">
                            <div class="card-body">
                                <p style="white-space: pre-line;">{{ $audit->scope ?? 'Tidak ada ruang lingkup yang ditentukan.' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Audit Criteria -->
                    <div class="col-md-6">
                        <h5 class="mb-3">
                            <i class="ri-file-list-2-line me-2 text-primary"></i>
                            Kriteria Audit
                        </h5>
                        <div class="card" style="background-color: var(--neutral-50); border: 1px solid var(--neutral-200);">
                            <div class="card-body">
                                <p style="white-space: pre-line;">{{ $audit->criteria ?? 'Tidak ada kriteria yang ditentukan.' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Audit Conclusion -->
                    <div class="col-md-6">
                        <h5 class="mb-3">
                            <i class="ri-checkbox-multiple-line me-2 text-primary"></i>
                            Kesimpulan Audit
                        </h5>
                        <div class="card" style="background-color: var(--neutral-50); border: 1px solid var(--neutral-200);">
                            <div class="card-body">
                                <p style="white-space: pre-line;">{{ $audit->conclusion ?? 'Kesimpulan audit belum dibuat.' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="col-12">
                        <h5 class="mb-3">
                            <i class="ri-sticky-note-line me-2 text-primary"></i>
                            Catatan Tambahan
                        </h5>
                        <div class="card" style="background-color: var(--neutral-50); border: 1px solid var(--neutral-200);">
                            <div class="card-body">
                                <p style="white-space: pre-line;">{{ $audit->notes ?? 'Tidak ada catatan tambahan.' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Findings Tab -->
            <div class="tab-pane fade" id="findings" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Daftar Temuan Audit</h5>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addFindingModal">
                        <i class="ri-add-line me-2"></i>
                        Tambah Temuan
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead style="background-color: var(--neutral-50);">
                            <tr>
                                <th style="padding: 1rem; font-weight: 600;">No. Temuan</th>
                                <th style="padding: 1rem; font-weight: 600;">Kategori</th>
                                <th style="padding: 1rem; font-weight: 600;">Tingkat Keparahan</th>
                                <th style="padding: 1rem; font-weight: 600;">Deskripsi</th>
                                <th style="padding: 1rem; font-weight: 600;">Status</th>
                                <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($audit->findings ?? [] as $finding)
                            <tr>
                                <td style="padding: 1rem;">
                                    <strong>{{ $finding->finding_number ?? '-' }}</strong>
                                </td>
                                <td style="padding: 1rem;">{{ $finding->category ?? '-' }}</td>
                                <td style="padding: 1rem;">
                                    @php
                                        $severityConfig = [
                                            'critical' => ['class' => 'badge-danger', 'text' => 'Kritis'],
                                            'major' => ['class' => 'badge-warning', 'text' => 'Major'],
                                            'minor' => ['class' => 'badge-info', 'text' => 'Minor'],
                                            'observation' => ['class' => 'badge-secondary', 'text' => 'Observasi'],
                                        ];
                                        $sConfig = $severityConfig[$finding->severity] ?? ['class' => 'badge-secondary', 'text' => ucfirst($finding->severity ?? '-')];
                                    @endphp
                                    <span class="badge-custom {{ $sConfig['class'] }}">
                                        {{ $sConfig['text'] }}
                                    </span>
                                </td>
                                <td style="padding: 1rem;">{{ Str::limit($finding->description, 100) }}</td>
                                <td style="padding: 1rem;">
                                    @php
                                        $findingStatusConfig = [
                                            'open' => ['class' => 'badge-warning', 'text' => 'Terbuka'],
                                            'in_progress' => ['class' => 'badge-info', 'text' => 'Dalam Perbaikan'],
                                            'closed' => ['class' => 'badge-success', 'text' => 'Ditutup'],
                                        ];
                                        $fsConfig = $findingStatusConfig[$finding->status] ?? ['class' => 'badge-secondary', 'text' => ucfirst($finding->status ?? '-')];
                                    @endphp
                                    <span class="badge-custom {{ $fsConfig['class'] }}">
                                        {{ $fsConfig['text'] }}
                                    </span>
                                </td>
                                <td style="padding: 1rem; text-align: center;">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('admin.audits.findings.show', $finding->id) }}" class="btn btn-sm btn-outline-primary" title="Detail">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="{{ route('admin.audits.findings.edit', $finding->id) }}" class="btn btn-sm btn-outline-success" title="Edit">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center" style="padding: 3rem;">
                                    <i class="ri-error-warning-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                                    <p class="text-secondary-light mt-2 mb-0">Tidak ada temuan audit</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Evidence Tab -->
            <div class="tab-pane fade" id="evidence" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Bukti dan Dokumentasi Audit</h5>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#uploadEvidenceModal">
                        <i class="ri-upload-2-line me-2"></i>
                        Upload Bukti
                    </button>
                </div>
                <div class="row g-3">
                    @forelse($audit->evidences ?? [] as $evidence)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <i class="ri-file-line text-primary" style="font-size: 2rem;"></i>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ $evidence->file_url ?? '#' }}" download><i class="ri-download-line me-2"></i>Download</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="ri-delete-bin-line me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h6 class="mb-1">{{ $evidence->name ?? 'Dokumen' }}</h6>
                                <small class="text-secondary-light">{{ $evidence->description ?? '-' }}</small>
                                <div class="mt-2">
                                    <small class="text-secondary-light">
                                        <i class="ri-time-line"></i>
                                        {{ $evidence->created_at ? $evidence->created_at->format('d M Y') : '-' }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center" style="padding: 3rem;">
                        <i class="ri-file-list-3-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                        <p class="text-secondary-light mt-2 mb-0">Belum ada bukti audit yang diupload</p>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Report Tab -->
            <div class="tab-pane fade" id="report" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Laporan Audit</h5>
                    @if(!isset($audit->report))
                    <button class="btn btn-sm btn-primary" onclick="generateReport()">
                        <i class="ri-file-text-line me-2"></i>
                        Generate Laporan
                    </button>
                    @endif
                </div>
                @if(isset($audit->report))
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="mb-3">{{ $audit->report->report_number ?? 'N/A' }}</h5>
                                <table class="table table-sm table-borderless">
                                    <tr>
                                        <td style="width: 150px; font-weight: 500;">Jenis Laporan</td>
                                        <td>: {{ ucfirst($audit->report->report_type ?? '-') }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 500;">Status</td>
                                        <td>:
                                            @php
                                                $reportStatusConfig = [
                                                    'draft' => ['class' => 'badge-secondary', 'text' => 'Draft'],
                                                    'submitted' => ['class' => 'badge-info', 'text' => 'Submitted'],
                                                    'approved' => ['class' => 'badge-success', 'text' => 'Approved'],
                                                ];
                                                $rsConfig = $reportStatusConfig[$audit->report->status ?? 'draft'] ?? ['class' => 'badge-secondary', 'text' => 'Draft'];
                                            @endphp
                                            <span class="badge-custom {{ $rsConfig['class'] }}">{{ $rsConfig['text'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 500;">Dibuat</td>
                                        <td>: {{ $audit->report->created_at ? $audit->report->created_at->format('d M Y H:i') : '-' }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="{{ route('admin.audits.reports.show', $audit->report->id) }}" class="btn btn-outline-primary mb-2 w-100">
                                    <i class="ri-eye-line me-2"></i>
                                    Lihat Laporan
                                </a>
                                <a href="{{ route('admin.audits.reports.download', $audit->report->id) }}" class="btn btn-outline-info w-100">
                                    <i class="ri-download-line me-2"></i>
                                    Download PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="text-center" style="padding: 3rem;">
                    <i class="ri-file-text-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                    <p class="text-secondary-light mt-2 mb-0">Laporan audit belum dibuat</p>
                    <button class="btn btn-primary mt-3" onclick="generateReport()">
                        <i class="ri-file-add-line me-2"></i>
                        Generate Laporan Sekarang
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Add Finding Modal -->
    <div class="modal fade" id="addFindingModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="ri-error-warning-line me-2"></i>
                        Tambah Temuan Audit
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="{{ route('admin.audits.findings.store') }}">
                    @csrf
                    <input type="hidden" name="audit_id" value="{{ $audit->id }}">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 500;">Kategori Temuan <span class="text-danger">*</span></label>
                                <input type="text" name="category" class="form-control" placeholder="Misal: Halal Assurance System" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 500;">Tingkat Keparahan <span class="text-danger">*</span></label>
                                <select name="severity" class="form-select" required>
                                    <option value="">Pilih Tingkat</option>
                                    <option value="critical">Kritis</option>
                                    <option value="major">Major</option>
                                    <option value="minor">Minor</option>
                                    <option value="observation">Observasi</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="font-weight: 500;">Deskripsi Temuan <span class="text-danger">*</span></label>
                                <textarea name="description" class="form-control" rows="4" placeholder="Jelaskan temuan secara detail..." required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="font-weight: 500;">Tindakan Perbaikan yang Disarankan</label>
                                <textarea name="corrective_action" class="form-control" rows="3" placeholder="Saran tindakan perbaikan..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ri-save-line me-2"></i>
                            Simpan Temuan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Upload Evidence Modal -->
    <div class="modal fade" id="uploadEvidenceModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="ri-upload-2-line me-2"></i>
                        Upload Bukti Audit
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="{{ route('admin.audits.evidences.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="audit_id" value="{{ $audit->id }}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Nama Dokumen <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Nama dokumen..." required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Deskripsi</label>
                            <textarea name="description" class="form-control" rows="2" placeholder="Deskripsi singkat..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">File <span class="text-danger">*</span></label>
                            <input type="file" name="file" class="form-control" required>
                            <small class="text-secondary-light">Format: PDF, JPG, PNG, DOC. Maksimal 5MB</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ri-upload-2-line me-2"></i>
                            Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function completeAudit() {
            if (confirm('Apakah Anda yakin ingin menyelesaikan audit ini?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("admin.audits.complete", $audit->id) }}';

                const csrfField = document.createElement('input');
                csrfField.type = 'hidden';
                csrfField.name = '_token';
                csrfField.value = '{{ csrf_token() }}';

                form.appendChild(csrfField);
                document.body.appendChild(form);
                form.submit();
            }
        }

        function generateReport() {
            if (confirm('Generate laporan audit?')) {
                window.location.href = '{{ route("admin.audits.generate-report", $audit->id) }}';
            }
        }
    </script>
    @endpush
</x-layouts.admin.app>
