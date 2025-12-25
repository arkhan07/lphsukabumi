<x-layouts.admin.app>
    <x-slot name="title">Detail Permohonan</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">
                Detail Permohonan {{ $submission->submission_number ?? 'N/A' }}
            </h2>
            <p class="text-secondary-light mb-0">Informasi lengkap permohonan sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.submissions.edit', $submission->id) }}" class="btn btn-success">
                <i class="ri-edit-line me-2"></i>
                Edit
            </a>
            <a href="{{ route('admin.submissions.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <div class="row g-3">
        <!-- Main Content -->
        <div class="col-12 col-lg-8">
            <!-- Status Progress Tracker -->
            <div class="card-custom mb-3">
                <h5 class="mb-4" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-route-line me-2"></i>
                    Progress Sertifikasi
                </h5>
                <div class="progress-tracker">
                    <div class="progress-step {{ in_array($submission->status, ['draft', 'submitted', 'screening', 'verification', 'approved']) ? 'completed' : '' }}">
                        <div class="progress-step-icon">
                            <i class="ri-file-text-line"></i>
                        </div>
                        <div class="progress-step-label">Submitted</div>
                    </div>
                    <div class="progress-step {{ in_array($submission->status, ['screening', 'verification', 'approved']) ? 'completed' : '' }}">
                        <div class="progress-step-icon">
                            <i class="ri-search-eye-line"></i>
                        </div>
                        <div class="progress-step-label">Screening</div>
                    </div>
                    <div class="progress-step {{ in_array($submission->status, ['verification', 'approved']) ? 'completed' : '' }}">
                        <div class="progress-step-icon">
                            <i class="ri-shield-check-line"></i>
                        </div>
                        <div class="progress-step-label">Verification</div>
                    </div>
                    <div class="progress-step {{ $submission->status == 'approved' ? 'completed' : '' }}">
                        <div class="progress-step-icon">
                            <i class="ri-checkbox-circle-line"></i>
                        </div>
                        <div class="progress-step-label">Approved</div>
                    </div>
                </div>
            </div>

            <!-- Tabs Navigation -->
            <div class="card-custom mb-3">
                <ul class="nav nav-tabs" id="submissionTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab">
                            <i class="ri-building-line me-2"></i>Profil Perusahaan
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab">
                            <i class="ri-product-hunt-line me-2"></i>Produk
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab">
                            <i class="ri-folder-line me-2"></i>Dokumen
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="audits-tab" data-bs-toggle="tab" data-bs-target="#audits" type="button" role="tab">
                            <i class="ri-history-line me-2"></i>Riwayat Audit
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="invoices-tab" data-bs-toggle="tab" data-bs-target="#invoices" type="button" role="tab">
                            <i class="ri-file-list-line me-2"></i>Invoice
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content p-4" id="submissionTabsContent">
                    <!-- Profile Tab -->
                    <div class="tab-pane fade show active" id="profile" role="tabpanel">
                        <h6 class="mb-3" style="font-weight: 600;">Informasi Perusahaan</h6>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Nama Perusahaan</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->company_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Jenis Usaha</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->businessType->name ?? '-' }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Email</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->company_email }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Telepon</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->company_phone }}</p>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Alamat</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->company_address }}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Wilayah</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->region->name ?? '-' }}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">NPWP</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->npwp ?? '-' }}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">NIB</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->nib ?? '-' }}</p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h6 class="mb-3" style="font-weight: 600;">Informasi Produksi</h6>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Lokasi Produksi</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->production_location }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Koordinat</label>
                                <p class="mb-0" style="font-weight: 500;">
                                    {{ $submission->location_latitude ?? '-' }}, {{ $submission->location_longitude ?? '-' }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Jumlah Karyawan</label>
                                <p class="mb-0" style="font-weight: 500;">{{ $submission->employee_count ?? '-' }} orang</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Kapasitas Produksi</label>
                                <p class="mb-0" style="font-weight: 500;">
                                    {{ $submission->production_capacity ?? '-' }} {{ $submission->production_capacity_unit ?? '' }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Jenis Sertifikasi</label>
                                <p class="mb-0" style="font-weight: 500;">{{ ucfirst($submission->certification_type) }}</p>
                            </div>
                        </div>

                        @if($submission->notes)
                        <hr class="my-4">
                        <h6 class="mb-3" style="font-weight: 600;">Catatan</h6>
                        <p style="font-weight: 500;">{{ $submission->notes }}</p>
                        @endif
                    </div>

                    <!-- Products Tab -->
                    <div class="tab-pane fade" id="products" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0" style="font-weight: 600;">Daftar Produk</h6>
                            <a href="{{ route('admin.products.create', ['submission_id' => $submission->id]) }}" class="btn btn-sm btn-primary">
                                <i class="ri-add-line me-1"></i>Tambah Produk
                            </a>
                        </div>

                        @if($submission->products && $submission->products->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead style="background-color: var(--neutral-50);">
                                    <tr>
                                        <th style="padding: 1rem;">No</th>
                                        <th style="padding: 1rem;">Nama Produk</th>
                                        <th style="padding: 1rem;">Kode Produk</th>
                                        <th style="padding: 1rem;">Kategori</th>
                                        <th style="padding: 1rem;">Status</th>
                                        <th style="padding: 1rem;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($submission->products as $index => $product)
                                    <tr>
                                        <td style="padding: 1rem;">{{ $index + 1 }}</td>
                                        <td style="padding: 1rem;">{{ $product->name }}</td>
                                        <td style="padding: 1rem;">{{ $product->product_code }}</td>
                                        <td style="padding: 1rem;">{{ $product->productType->name ?? '-' }}</td>
                                        <td style="padding: 1rem;">
                                            <span class="badge-custom badge-success">Aktif</span>
                                        </td>
                                        <td style="padding: 1rem;">
                                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="alert alert-info">
                            <i class="ri-information-line me-2"></i>
                            Belum ada produk yang terdaftar untuk permohonan ini.
                        </div>
                        @endif
                    </div>

                    <!-- Documents Tab -->
                    <div class="tab-pane fade" id="documents" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0" style="font-weight: 600;">Dokumen Pendukung</h6>
                            <a href="{{ route('admin.documents.upload', ['submission_id' => $submission->id]) }}" class="btn btn-sm btn-primary">
                                <i class="ri-upload-line me-1"></i>Upload Dokumen
                            </a>
                        </div>

                        @if($submission->documents && $submission->documents->count() > 0)
                        <div class="list-group">
                            @foreach($submission->documents as $document)
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-3">
                                        <div style="width: 48px; height: 48px; border-radius: 8px; background-color: var(--primary-50); color: var(--primary-600); display: flex; align-items: center; justify-content: center;">
                                            <i class="ri-file-text-line" style="font-size: 1.5rem;"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1" style="font-weight: 600;">{{ $document->document_type }}</h6>
                                            <p class="mb-0 text-secondary-light" style="font-size: 0.875rem;">
                                                {{ $document->file_name }} • {{ number_format($document->file_size / 1024, 2) }} KB
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="{{ Storage::url($document->file_path) }}" class="btn btn-sm btn-outline-primary" target="_blank">
                                            <i class="ri-eye-line me-1"></i>Lihat
                                        </a>
                                        <a href="{{ Storage::url($document->file_path) }}" class="btn btn-sm btn-outline-success" download>
                                            <i class="ri-download-line me-1"></i>Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="alert alert-info">
                            <i class="ri-information-line me-2"></i>
                            Belum ada dokumen yang diupload untuk permohonan ini.
                        </div>
                        @endif
                    </div>

                    <!-- Audits Tab -->
                    <div class="tab-pane fade" id="audits" role="tabpanel">
                        <h6 class="mb-3" style="font-weight: 600;">Riwayat Audit</h6>

                        @if($submission->audits && $submission->audits->count() > 0)
                        <div class="timeline">
                            @foreach($submission->audits as $audit)
                            <div class="timeline-item">
                                <div class="timeline-icon bg-primary">
                                    <i class="ri-shield-check-line"></i>
                                </div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0" style="font-weight: 600;">{{ $audit->audit_type }}</h6>
                                        <small class="text-secondary-light">{{ $audit->audit_date->format('d M Y') }}</small>
                                    </div>
                                    <p class="mb-2 text-secondary-light" style="font-size: 0.875rem;">
                                        Auditor: {{ $audit->auditor->name ?? '-' }}
                                    </p>
                                    <p class="mb-0">{{ $audit->notes }}</p>
                                    <div class="mt-2">
                                        <span class="badge-custom badge-{{ $audit->status == 'completed' ? 'success' : 'warning' }}">
                                            {{ ucfirst($audit->status) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="alert alert-info">
                            <i class="ri-information-line me-2"></i>
                            Belum ada riwayat audit untuk permohonan ini.
                        </div>
                        @endif
                    </div>

                    <!-- Invoices Tab -->
                    <div class="tab-pane fade" id="invoices" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0" style="font-weight: 600;">Daftar Invoice</h6>
                            <a href="{{ route('admin.finance.invoices.create', ['submission_id' => $submission->id]) }}" class="btn btn-sm btn-primary">
                                <i class="ri-add-line me-1"></i>Buat Invoice
                            </a>
                        </div>

                        @if($submission->invoices && $submission->invoices->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead style="background-color: var(--neutral-50);">
                                    <tr>
                                        <th style="padding: 1rem;">No Invoice</th>
                                        <th style="padding: 1rem;">Tanggal</th>
                                        <th style="padding: 1rem;">Total</th>
                                        <th style="padding: 1rem;">Status</th>
                                        <th style="padding: 1rem;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($submission->invoices as $invoice)
                                    <tr>
                                        <td style="padding: 1rem;"><strong>{{ $invoice->invoice_number }}</strong></td>
                                        <td style="padding: 1rem;">{{ $invoice->invoice_date->format('d M Y') }}</td>
                                        <td style="padding: 1rem;">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</td>
                                        <td style="padding: 1rem;">
                                            <span class="badge-custom badge-{{ $invoice->payment_status == 'paid' ? 'success' : 'warning' }}">
                                                {{ ucfirst($invoice->payment_status) }}
                                            </span>
                                        </td>
                                        <td style="padding: 1rem;">
                                            <a href="{{ route('admin.finance.invoices.show', $invoice->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="alert alert-info">
                            <i class="ri-information-line me-2"></i>
                            Belum ada invoice untuk permohonan ini.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-12 col-lg-4">
            <!-- Status Card -->
            <div class="card-custom mb-3">
                <h6 class="mb-3" style="font-weight: 600;">Status Permohonan</h6>
                @php
                    $statusConfig = [
                        'draft' => ['class' => 'badge-secondary', 'icon' => 'ri-draft-line', 'text' => 'Draft'],
                        'submitted' => ['class' => 'badge-info', 'icon' => 'ri-send-plane-line', 'text' => 'Submitted'],
                        'screening' => ['class' => 'badge-warning', 'icon' => 'ri-file-search-line', 'text' => 'Screening'],
                        'verification' => ['class' => 'badge-primary', 'icon' => 'ri-shield-check-line', 'text' => 'Verification'],
                        'approved' => ['class' => 'badge-success', 'icon' => 'ri-checkbox-circle-line', 'text' => 'Approved'],
                        'rejected' => ['class' => 'badge-danger', 'icon' => 'ri-close-circle-line', 'text' => 'Rejected'],
                    ];
                    $config = $statusConfig[$submission->status] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => 'Unknown'];
                @endphp
                <div class="text-center p-3" style="background-color: var(--neutral-50); border-radius: 8px;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">
                        <i class="{{ $config['icon'] }}"></i>
                    </div>
                    <span class="badge-custom {{ $config['class'] }}" style="font-size: 1rem; padding: 0.5rem 1rem;">
                        {{ $config['text'] }}
                    </span>
                </div>

                <!-- Action Buttons Based on Status -->
                <div class="mt-3">
                    @if($submission->status == 'submitted')
                    <button class="btn btn-success w-100 mb-2" onclick="updateStatus('screening')">
                        <i class="ri-checkbox-line me-2"></i>Lanjutkan ke Screening
                    </button>
                    <button class="btn btn-danger w-100" onclick="showRejectModal()">
                        <i class="ri-close-line me-2"></i>Tolak Permohonan
                    </button>
                    @elseif($submission->status == 'screening')
                    <button class="btn btn-success w-100 mb-2" onclick="updateStatus('verification')">
                        <i class="ri-checkbox-line me-2"></i>Lanjutkan ke Verification
                    </button>
                    <button class="btn btn-warning w-100 mb-2" onclick="showAssignAuditorModal()">
                        <i class="ri-user-add-line me-2"></i>Assign Auditor
                    </button>
                    @elseif($submission->status == 'verification')
                    <button class="btn btn-success w-100 mb-2" onclick="updateStatus('approved')">
                        <i class="ri-checkbox-circle-line me-2"></i>Approve Permohonan
                    </button>
                    <button class="btn btn-danger w-100" onclick="showRejectModal()">
                        <i class="ri-close-line me-2"></i>Tolak Permohonan
                    </button>
                    @elseif($submission->status == 'approved')
                    <a href="{{ route('admin.certificates.generate', $submission->id) }}" class="btn btn-primary w-100 mb-2">
                        <i class="ri-award-line me-2"></i>Generate Sertifikat
                    </a>
                    @endif
                </div>
            </div>

            <!-- Information Card -->
            <div class="card-custom mb-3">
                <h6 class="mb-3" style="font-weight: 600;">Informasi</h6>
                <div class="mb-3">
                    <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Tanggal Pengajuan</label>
                    <p class="mb-0" style="font-weight: 500;">
                        {{ $submission->submission_date ? $submission->submission_date->format('d M Y') : '-' }}
                    </p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Target Selesai</label>
                    <p class="mb-0" style="font-weight: 500;">
                        {{ $submission->target_completion_date ? $submission->target_completion_date->format('d M Y') : '-' }}
                    </p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Kelengkapan</label>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $submission->completeness_percentage ?? 0 }}%"></div>
                    </div>
                    <small class="text-secondary-light">{{ $submission->completeness_percentage ?? 0 }}% Complete</small>
                </div>
                <div>
                    <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Dibuat oleh</label>
                    <p class="mb-0" style="font-weight: 500;">{{ $submission->user->name ?? '-' }}</p>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card-custom">
                <h6 class="mb-3" style="font-weight: 600;">Aksi Cepat</h6>
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.submissions.edit', $submission->id) }}" class="btn btn-outline-primary">
                        <i class="ri-edit-line me-2"></i>Edit Permohonan
                    </a>
                    <a href="{{ route('admin.products.index', ['submission_id' => $submission->id]) }}" class="btn btn-outline-success">
                        <i class="ri-product-hunt-line me-2"></i>Kelola Produk
                    </a>
                    <a href="{{ route('admin.documents.index', ['submission_id' => $submission->id]) }}" class="btn btn-outline-info">
                        <i class="ri-folder-line me-2"></i>Kelola Dokumen
                    </a>
                    <button class="btn btn-outline-secondary" onclick="printSubmission()">
                        <i class="ri-printer-line me-2"></i>Cetak Permohonan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tolak Permohonan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.submissions.reject', $submission->id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Alasan Penolakan <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="rejection_reason" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Tolak Permohonan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Assign Auditor Modal -->
    <div class="modal fade" id="assignAuditorModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Auditor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.submissions.assign-auditor', $submission->id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Pilih Auditor <span class="text-danger">*</span></label>
                            <select class="form-select" name="auditor_id" required>
                                <option value="">Pilih Auditor</option>
                                @foreach($auditors ?? [] as $auditor)
                                    <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Audit</label>
                            <input type="date" class="form-control" name="audit_date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Catatan</label>
                            <textarea class="form-control" name="notes" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Assign Auditor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        .nav-tabs {
            border-bottom: 2px solid var(--neutral-200);
        }

        .nav-tabs .nav-link {
            border: none;
            color: var(--neutral-600);
            font-weight: 500;
            padding: 1rem 1.5rem;
            border-bottom: 3px solid transparent;
        }

        .nav-tabs .nav-link:hover {
            border-color: transparent;
            color: var(--primary-600);
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-600);
            background-color: transparent;
            border-bottom-color: var(--primary-600);
        }

        .progress-tracker {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            padding: 2rem 0;
        }

        .progress-tracker::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background-color: var(--neutral-200);
            transform: translateY(-50%);
            z-index: 0;
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .progress-step-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: var(--neutral-200);
            color: var(--neutral-600);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s;
        }

        .progress-step.completed .progress-step-icon {
            background-color: var(--success-main);
            color: white;
        }

        .progress-step-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--neutral-600);
        }

        .progress-step.completed .progress-step-label {
            color: var(--success-main);
        }

        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 24px;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: var(--neutral-200);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-icon {
            position: absolute;
            left: -2rem;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
        }

        .timeline-content {
            padding-left: 2rem;
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        function updateStatus(status) {
            if (confirm('Apakah Anda yakin ingin mengubah status permohonan ini?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("admin.submissions.update-status", $submission->id) }}';

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

        function showRejectModal() {
            const modal = new bootstrap.Modal(document.getElementById('rejectModal'));
            modal.show();
        }

        function showAssignAuditorModal() {
            const modal = new bootstrap.Modal(document.getElementById('assignAuditorModal'));
            modal.show();
        }

        function printSubmission() {
            window.print();
        }
    </script>
    @endpush
</x-layouts.admin.app>
