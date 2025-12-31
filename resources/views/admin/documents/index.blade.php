<x-layouts.admin.app>
    <x-slot name="title">Manajemen Dokumen</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Manajemen</div>
                    <h2 class="page-title">Dokumen</h2>
                    <p class="text-muted mt-1">Kelola semua dokumen sertifikasi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.documents.create') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" /><path d="M9 15l3 -3l3 3" /><path d="M12 12l0 9" /></svg>
                        Upload Dokumen
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

            <!-- Statistics Cards -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg">
                    <div class="card cursor-pointer" onclick="filterByStatus('all')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Dokumen</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-0">{{ $stats['total'] ?? 0 }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg">
                    <div class="card cursor-pointer" onclick="filterByStatus('pending_review')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Pending Review</div>
                                <div class="ms-auto lh-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 7l0 5l3 3" /></svg>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['pending_review'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-yellow-lt">Review</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg">
                    <div class="card cursor-pointer" onclick="filterByStatus('approved')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Approved</div>
                                <div class="ms-auto lh-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['approved'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-green-lt">Disetujui</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg">
                    <div class="card cursor-pointer" onclick="filterByStatus('rejected')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Rejected</div>
                                <div class="ms-auto lh-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['rejected'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-red-lt">Ditolak</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg">
                    <div class="card cursor-pointer" onclick="filterByStatus('revision_required')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Revision Required</div>
                                <div class="ms-auto lh-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-cyan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['revision_required'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-cyan-lt">Revisi</span>
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
                    <form method="GET" action="{{ route('admin.documents.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Cari Dokumen</label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                    </span>
                                    <input type="text" name="search" class="form-control" placeholder="Nama dokumen, permohonan..." value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Jenis Dokumen</label>
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
                                <label class="form-label">Status</label>
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
                                <label class="form-label">Permohonan</label>
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
                                <label class="form-label">Dari Tanggal</label>
                                <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-1 d-flex align-items-end">
                                <div class="btn-list w-100">
                                    <button type="submit" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5" /></svg>
                                    </button>
                                    <a href="{{ route('admin.documents.index') }}" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" /><path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Main Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Dokumen</h3>
                    <div class="card-actions">
                        <button class="btn btn-success" onclick="exportData('excel')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 13h4" /><path d="M12 11v6" /></svg>
                            Excel
                        </button>
                        <button class="btn btn-danger" onclick="exportData('pdf')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 17h6" /><path d="M9 13h6" /></svg>
                            PDF
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter" id="documentsTable">
                        <thead>
                            <tr>
                                <th class="w-1">No</th>
                                <th>Nama Dokumen</th>
                                <th>Jenis</th>
                                <th>Permohonan</th>
                                <th>Diupload Oleh</th>
                                <th>Status</th>
                                <th>Tanggal Upload</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($documents ?? [] as $index => $document)
                            <tr>
                                <td><span class="text-muted">{{ $documents->firstItem() + $index }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @php
                                            $iconMap = [
                                                'pdf' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 17h6" /><path d="M9 13h6" /></svg>',
                                                'doc' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M11 17h2" /><path d="M9 12l1 5l5 0" /></svg>',
                                                'docx' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M11 17h2" /><path d="M9 12l1 5l5 0" /></svg>',
                                                'xls' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 13h4" /><path d="M12 11v6" /></svg>',
                                                'xlsx' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 13h4" /><path d="M12 11v6" /></svg>',
                                                'jpg' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg>',
                                                'jpeg' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg>',
                                                'png' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg>',
                                                'zip' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 20.735a2 2 0 0 1 -1 -1.735v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-1" /><path d="M11 17a2 2 0 0 1 2 2v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-2a2 2 0 0 1 2 -2z" /><path d="M11 5l0 2" /><path d="M13 7l0 2" /><path d="M11 9l0 2" /><path d="M13 11l0 2" /><path d="M11 13l0 2" /></svg>',
                                            ];
                                            $ext = strtolower($document->file_extension ?? '');
                                            $icon = $iconMap[$ext] ?? '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>';
                                        @endphp
                                        <span class="avatar avatar-sm me-2">{!! $icon !!}</span>
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ $document->document_name }}</div>
                                            <div class="text-muted">
                                                <small>{{ strtoupper($document->file_extension ?? '') }} - {{ number_format(($document->file_size ?? 0) / 1024, 2) }} KB</small>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-blue-lt">{{ str_replace('_', ' ', ucwords($document->document_type ?? '')) }}</span>
                                </td>
                                <td>
                                    @if($document->submission)
                                        <a href="{{ route('admin.submissions.show', $document->submission->id) }}" class="text-reset">
                                            {{ $document->submission->submission_number ?? '-' }}
                                        </a>
                                        <div class="text-muted"><small>{{ $document->submission->company_name ?? '' }}</small></div>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    <div>{{ $document->uploader->name ?? '-' }}</div>
                                    <div class="text-muted"><small>{{ $document->uploader->email ?? '' }}</small></div>
                                </td>
                                <td>
                                    @php
                                        $statusConfig = [
                                            'uploaded' => ['class' => 'bg-secondary-lt', 'text' => 'Uploaded'],
                                            'pending_review' => ['class' => 'bg-yellow-lt', 'text' => 'Pending Review'],
                                            'approved' => ['class' => 'bg-green-lt', 'text' => 'Approved'],
                                            'rejected' => ['class' => 'bg-red-lt', 'text' => 'Rejected'],
                                            'revision_required' => ['class' => 'bg-cyan-lt', 'text' => 'Revision Required'],
                                        ];
                                        $config = $statusConfig[$document->status] ?? ['class' => 'bg-secondary-lt', 'text' => ucfirst($document->status)];
                                    @endphp
                                    <span class="badge {{ $config['class'] }}">{{ $config['text'] }}</span>
                                </td>
                                <td>
                                    {{ $document->created_at ? $document->created_at->format('d M Y') : '-' }}
                                    <div class="text-muted"><small>{{ $document->created_at ? $document->created_at->format('H:i') : '' }}</small></div>
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('admin.documents.show', $document->id) }}" class="btn btn-sm btn-ghost-primary" title="Lihat Detail">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                        </a>
                                        <a href="{{ route('admin.documents.download', $document->id) }}" class="btn btn-sm btn-ghost-info" title="Download">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                        </a>
                                        @if($document->status === 'pending_review' || $document->status === 'uploaded')
                                        <button class="btn btn-sm btn-ghost-success" onclick="updateStatus({{ $document->id }}, 'approved')" title="Approve">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                        </button>
                                        <button class="btn btn-sm btn-ghost-danger" onclick="updateStatus({{ $document->id }}, 'rejected')" title="Reject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                        </button>
                                        <button class="btn btn-sm btn-ghost-warning" onclick="updateStatus({{ $document->id }}, 'revision_required')" title="Request Revision">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </button>
                                        @endif
                                        <button class="btn btn-sm btn-ghost-danger" onclick="deleteDocument({{ $document->id }})" title="Hapus">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-5">
                                    <div class="empty">
                                        <div class="empty-img"><img src="{{ asset('assets/illustrations/undraw_empty.svg') }}" height="128" alt="No data">
                                        </div>
                                        <p class="empty-title">Tidak ada data dokumen</p>
                                        <p class="empty-subtitle text-muted">
                                            Mulai dengan mengupload dokumen baru
                                        </p>
                                        <div class="empty-action">
                                            <a href="{{ route('admin.documents.create') }}" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                                                Upload Dokumen
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if(isset($documents) && $documents->hasPages())
                <div class="card-footer d-flex align-items-center">
                    {{ $documents->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal modal-blur fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                    <h3>Apakah Anda yakin?</h3>
                    <div class="text-muted">Dokumen yang dihapus tidak dapat dikembalikan.</div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col"><button type="button" class="btn w-100" data-bs-dismiss="modal">Batal</button></div>
                            <div class="col">
                                <form id="deleteForm" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Update Modal -->
    <div class="modal modal-blur fade" id="statusModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="statusForm" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title">Update Status Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="status" id="statusValue">
                        <div class="mb-3">
                            <label class="form-label">Catatan Review</label>
                            <textarea class="form-control" name="review_notes" rows="4" placeholder="Tambahkan catatan untuk status ini..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        .cursor-pointer {
            cursor: pointer;
        }
    </style>
    @endpush

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
