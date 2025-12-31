<x-layouts.admin.app>
    <x-slot name="title">Manajemen Audit</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Manajemen</div>
                    <h2 class="page-title">Audit</h2>
                    <p class="text-muted mt-1">Kelola proses audit sertifikasi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('admin.audits.schedules.index') }}" class="btn btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                            Jadwal Audit
                        </a>
                        <a href="{{ route('admin.audits.create') }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Tambah Audit
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 8l0 4" /><path d="M12 16l.01 0" /></svg>
                    </div>
                    <div>{{ session('error') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            <!-- Statistics Cards -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('all')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Audit</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['total'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-primary-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-primary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 12l.01 0" /><path d="M13 12l2 0" /><path d="M9 16l.01 0" /><path d="M13 16l2 0" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('planned')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Direncanakan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['planned'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-cyan-lt">Planned</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('in_progress')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Berlangsung</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['in_progress'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-yellow-lt">Progress</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('completed')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Selesai</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['completed'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-green-lt">Done</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Results Stats -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Lulus</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-green">{{ $stats['passed'] ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Perlu Perbaikan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-yellow">{{ $stats['needs_correction'] ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Tidak Lulus</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-red">{{ $stats['failed'] ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Bulan Ini</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['this_month'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-purple-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M7 14h.013" /><path d="M10.01 14h.005" /><path d="M13.01 14h.005" /><path d="M16.015 14h.005" /><path d="M13.015 17h.005" /><path d="M7.01 17h.005" /><path d="M10.01 17h.005" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters and Search -->
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Filter & Pencarian</h3>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.audits.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Cari Audit</label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                    </span>
                                    <input type="text" name="search" class="form-control" placeholder="No. Audit, Perusahaan..." value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select" id="statusFilter">
                                    <option value="">Semua Status</option>
                                    <option value="planned" {{ request('status') == 'planned' ? 'selected' : '' }}>Direncanakan</option>
                                    <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>Berlangsung</option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Jenis Audit</label>
                                <select name="audit_type" class="form-select">
                                    <option value="">Semua Jenis</option>
                                    <option value="initial" {{ request('audit_type') == 'initial' ? 'selected' : '' }}>Audit Awal</option>
                                    <option value="surveillance" {{ request('audit_type') == 'surveillance' ? 'selected' : '' }}>Surveillance</option>
                                    <option value="renewal" {{ request('audit_type') == 'renewal' ? 'selected' : '' }}>Perpanjangan</option>
                                    <option value="special" {{ request('audit_type') == 'special' ? 'selected' : '' }}>Khusus</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Hasil</label>
                                <select name="result" class="form-select">
                                    <option value="">Semua Hasil</option>
                                    <option value="passed" {{ request('result') == 'passed' ? 'selected' : '' }}>Lulus</option>
                                    <option value="needs_correction" {{ request('result') == 'needs_correction' ? 'selected' : '' }}>Perlu Perbaikan</option>
                                    <option value="failed" {{ request('result') == 'failed' ? 'selected' : '' }}>Tidak Lulus</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Dari Tanggal</label>
                                <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-1 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                </button>
                                <a href="{{ route('admin.audits.index') }}" class="btn btn-outline-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" /><path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /></svg>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Main Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Audit</h3>
                    <div class="card-actions">
                        <button class="btn btn-outline-success btn-sm" onclick="exportData('excel')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 12h4" /><path d="M10 16h4" /></svg>
                            Excel
                        </button>
                        <button class="btn btn-outline-danger btn-sm" onclick="exportData('pdf')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M17 18h2" /><path d="M20 15h-3v6" /><path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" /></svg>
                            PDF
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Audit</th>
                                <th>Permohonan</th>
                                <th>Auditor Utama</th>
                                <th>Jenis Audit</th>
                                <th>Tanggal Audit</th>
                                <th>Status</th>
                                <th>Hasil</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($audits ?? [] as $index => $audit)
                            <tr>
                                <td>{{ $audits->firstItem() + $index }}</td>
                                <td><strong class="text-primary">{{ $audit->audit_number ?? '-' }}</strong></td>
                                <td>
                                    <div><strong>{{ $audit->submission->submission_number ?? '-' }}</strong></div>
                                    <div class="text-muted small">{{ $audit->submission->company_name ?? '-' }}</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm me-2" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($audit->leadAuditor->name ?? 'A') }}&background=206bc4&color=fff)"></span>
                                        <div>{{ $audit->leadAuditor->name ?? '-' }}</div>
                                    </div>
                                </td>
                                <td>
                                    @php
                                        $auditTypes = [
                                            'initial' => 'Audit Awal',
                                            'surveillance' => 'Surveillance',
                                            'renewal' => 'Perpanjangan',
                                            'special' => 'Khusus',
                                        ];
                                    @endphp
                                    <span class="badge bg-purple-lt">{{ $auditTypes[$audit->audit_type] ?? ucfirst($audit->audit_type ?? '-') }}</span>
                                </td>
                                <td>{{ $audit->audit_date ? $audit->audit_date->format('d M Y') : '-' }}</td>
                                <td>
                                    @php
                                        $statusConfig = [
                                            'planned' => ['class' => 'bg-cyan-lt', 'text' => 'Direncanakan'],
                                            'in_progress' => ['class' => 'bg-yellow-lt', 'text' => 'Berlangsung'],
                                            'completed' => ['class' => 'bg-green-lt', 'text' => 'Selesai'],
                                        ];
                                        $config = $statusConfig[$audit->status] ?? ['class' => 'bg-secondary-lt', 'text' => ucfirst($audit->status ?? '-')];
                                    @endphp
                                    <span class="badge {{ $config['class'] }}">{{ $config['text'] }}</span>
                                </td>
                                <td>
                                    @if($audit->overall_result)
                                        @php
                                            $resultConfig = [
                                                'passed' => ['class' => 'bg-green-lt', 'text' => 'Lulus'],
                                                'needs_correction' => ['class' => 'bg-yellow-lt', 'text' => 'Perlu Perbaikan'],
                                                'failed' => ['class' => 'bg-red-lt', 'text' => 'Tidak Lulus'],
                                            ];
                                            $rConfig = $resultConfig[$audit->overall_result] ?? ['class' => 'bg-secondary-lt', 'text' => '-'];
                                        @endphp
                                        <span class="badge {{ $rConfig['class'] }}">{{ $rConfig['text'] }}</span>
                                    @else
                                        <span class="badge bg-secondary-lt">-</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('admin.audits.show', $audit->id) }}" class="btn btn-ghost-primary btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                        </a>
                                        @if($audit->status != 'completed')
                                        <a href="{{ route('admin.audits.edit', $audit->id) }}" class="btn btn-ghost-success btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </a>
                                        @endif
                                        <a href="{{ route('admin.audits.findings.create', $audit->id) }}" class="btn btn-ghost-warning btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                                        </a>
                                        <button class="btn btn-ghost-info btn-icon" onclick="generateReport({{ $audit->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 9l1 0" /><path d="M9 13l6 0" /><path d="M9 17l6 0" /></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 12l.01 0" /><path d="M13 12l2 0" /><path d="M9 16l.01 0" /><path d="M13 16l2 0" /></svg>
                                        </div>
                                        <p class="empty-title">Tidak ada data audit</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if(isset($audits) && $audits->hasPages())
                <div class="card-footer">
                    {{ $audits->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
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
