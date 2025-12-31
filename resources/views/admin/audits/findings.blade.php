<x-layouts.admin.app>
    <x-slot name="title">Temuan Audit</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Manajemen Audit</div>
                    <h2 class="page-title">Temuan Audit</h2>
                    <p class="text-muted mt-1">Daftar temuan dan catatan hasil audit sertifikasi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.audits.index') }}" class="btn btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                        Kembali ke Audit
                    </a>
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
                    <div class="card" style="cursor: pointer;" onclick="filterBySeverity('all')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Temuan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['total'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-primary-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-primary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterBySeverity('critical')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Kritis</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-red">{{ $stats['critical'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-red-lt">Critical</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterBySeverity('major')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Major</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-orange">{{ $stats['major'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-orange-lt">Major</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterBySeverity('minor')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Minor</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-cyan">{{ $stats['minor'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-cyan-lt">Minor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status Stats -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-4">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('open')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Terbuka</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['open'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-yellow-lt">Open</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('closed')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Ditutup</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['closed'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-green-lt">Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
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
                    <form method="GET" action="{{ route('admin.audits.findings') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Cari Temuan</label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                    </span>
                                    <input type="text" name="search" class="form-control" placeholder="No. Temuan, Audit, Perusahaan..." value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Tingkat Keparahan</label>
                                <select name="severity" class="form-select" id="severityFilter">
                                    <option value="">Semua Tingkat</option>
                                    <option value="critical" {{ request('severity') == 'critical' ? 'selected' : '' }}>Kritis</option>
                                    <option value="major" {{ request('severity') == 'major' ? 'selected' : '' }}>Major</option>
                                    <option value="minor" {{ request('severity') == 'minor' ? 'selected' : '' }}>Minor</option>
                                    <option value="observation" {{ request('severity') == 'observation' ? 'selected' : '' }}>Observasi</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select" id="statusFilter">
                                    <option value="">Semua Status</option>
                                    <option value="open" {{ request('status') == 'open' ? 'selected' : '' }}>Terbuka</option>
                                    <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>Dalam Perbaikan</option>
                                    <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Ditutup</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Status Tindakan</label>
                                <select name="action_status" class="form-select">
                                    <option value="">Semua</option>
                                    <option value="pending" {{ request('action_status') == 'pending' ? 'selected' : '' }}>Menunggu</option>
                                    <option value="in_progress" {{ request('action_status') == 'in_progress' ? 'selected' : '' }}>Sedang Diperbaiki</option>
                                    <option value="completed" {{ request('action_status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                                    <option value="verified" {{ request('action_status') == 'verified' ? 'selected' : '' }}>Terverifikasi</option>
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
                                <a href="{{ route('admin.audits.findings') }}" class="btn btn-outline-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" /><path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /></svg>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Findings Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Semua Temuan</h3>
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
                                <th>No. Temuan</th>
                                <th>Audit</th>
                                <th>Permohonan</th>
                                <th>Jenis</th>
                                <th>Tingkat</th>
                                <th>Status</th>
                                <th>Status Tindakan</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($findings ?? [] as $index => $finding)
                            <tr>
                                <td>{{ $findings->firstItem() + $index }}</td>
                                <td><strong class="text-primary">{{ $finding->finding_number ?? '-' }}</strong></td>
                                <td>
                                    <div><strong>{{ $finding->audit->audit_number ?? '-' }}</strong></div>
                                    <div class="text-muted small">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                        {{ $finding->audit->audit_date ? $finding->audit->audit_date->format('d M Y') : '-' }}
                                    </div>
                                </td>
                                <td>
                                    <div><strong>{{ $finding->audit->submission->submission_number ?? '-' }}</strong></div>
                                    <div class="text-muted small">{{ $finding->audit->submission->company_name ?? '-' }}</div>
                                </td>
                                <td>{{ $finding->category ?? '-' }}</td>
                                <td>
                                    @php
                                        $severityConfig = [
                                            'critical' => ['class' => 'bg-red-lt', 'text' => 'Kritis'],
                                            'major' => ['class' => 'bg-orange-lt', 'text' => 'Major'],
                                            'minor' => ['class' => 'bg-cyan-lt', 'text' => 'Minor'],
                                            'observation' => ['class' => 'bg-secondary-lt', 'text' => 'Observasi'],
                                        ];
                                        $sConfig = $severityConfig[$finding->severity] ?? ['class' => 'bg-secondary-lt', 'text' => ucfirst($finding->severity ?? '-')];
                                    @endphp
                                    <span class="badge {{ $sConfig['class'] }}">{{ $sConfig['text'] }}</span>
                                </td>
                                <td>
                                    @php
                                        $statusConfig = [
                                            'open' => ['class' => 'bg-yellow-lt', 'text' => 'Terbuka'],
                                            'in_progress' => ['class' => 'bg-cyan-lt', 'text' => 'Dalam Perbaikan'],
                                            'closed' => ['class' => 'bg-green-lt', 'text' => 'Ditutup'],
                                        ];
                                        $config = $statusConfig[$finding->status] ?? ['class' => 'bg-secondary-lt', 'text' => ucfirst($finding->status ?? '-')];
                                    @endphp
                                    <span class="badge {{ $config['class'] }}">{{ $config['text'] }}</span>
                                </td>
                                <td>
                                    @php
                                        $actionStatusConfig = [
                                            'pending' => ['class' => 'bg-secondary-lt', 'text' => 'Menunggu'],
                                            'in_progress' => ['class' => 'bg-yellow-lt', 'text' => 'Diperbaiki'],
                                            'completed' => ['class' => 'bg-cyan-lt', 'text' => 'Selesai'],
                                            'verified' => ['class' => 'bg-green-lt', 'text' => 'Terverifikasi'],
                                        ];
                                        $aConfig = $actionStatusConfig[$finding->action_status ?? 'pending'] ?? ['class' => 'bg-secondary-lt', 'text' => '-'];
                                    @endphp
                                    <span class="badge {{ $aConfig['class'] }}">{{ $aConfig['text'] }}</span>
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('admin.audits.findings.show', $finding->id) }}" class="btn btn-ghost-primary btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                        </a>
                                        @if($finding->status != 'closed')
                                        <button class="btn btn-ghost-warning btn-icon" data-bs-toggle="modal" data-bs-target="#updateCARModal{{ $finding->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </button>
                                        @endif
                                        @if($finding->action_status == 'completed' && $finding->status != 'closed')
                                        <button class="btn btn-ghost-info btn-icon" onclick="verifyFinding({{ $finding->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 12l2 2l4 -4" /><path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" /></svg>
                                        </button>
                                        @endif
                                        @if($finding->action_status == 'verified' && $finding->status != 'closed')
                                        <button class="btn btn-ghost-success btn-icon" onclick="closeFinding({{ $finding->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
                                        </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>

                            <!-- Update CAR Modal for each finding -->
                            <div class="modal modal-blur fade" id="updateCARModal{{ $finding->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update CAR - {{ $finding->finding_number }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ route('admin.audits.findings.update-car', $finding->id) }}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label required">Status Tindakan</label>
                                                    <select name="action_status" class="form-select" required>
                                                        <option value="pending" {{ $finding->action_status == 'pending' ? 'selected' : '' }}>Menunggu</option>
                                                        <option value="in_progress" {{ $finding->action_status == 'in_progress' ? 'selected' : '' }}>Sedang Diperbaiki</option>
                                                        <option value="completed" {{ $finding->action_status == 'completed' ? 'selected' : '' }}>Selesai</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Catatan CAR</label>
                                                    <textarea name="car_notes" class="form-control" rows="4" placeholder="Catatan tindakan perbaikan...">{{ $finding->car_notes ?? '' }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Target Penyelesaian</label>
                                                    <input type="date" name="target_completion_date" class="form-control" value="{{ $finding->target_completion_date }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                                                    Update CAR
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <tr>
                                <td colspan="9">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                                        </div>
                                        <p class="empty-title">Tidak ada temuan audit</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if(isset($findings) && $findings->hasPages())
                <div class="card-footer">
                    {{ $findings->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
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
