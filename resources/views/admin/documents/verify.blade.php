<x-layouts.admin.app>
    <x-slot name="title">Dokumen</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Dokumen</h2>
            <p class="text-secondary-light mb-0">Kelola dokumen sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.documents.upload') }}" class="btn btn-primary">
                <i class="ri-upload-line me-2"></i>
                Upload Dokumen
            </a>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Dokumen</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">543</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Terverifikasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">489</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Perlu Verifikasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">54</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Dokumen</h5>
            <div class="d-flex gap-2">
                <select class="form-select" style="width: 150px;">
                    <option value="">Semua Jenis</option>
                    <option value="nib">NIB/SIUP</option>
                    <option value="npwp">NPWP</option>
                    <option value="certificate">Sertifikat</option>
                    <option value="report">Laporan</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Nama Dokumen</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis</th>
                        <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal Upload</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ri-file-pdf-line" style="font-size: 1.5rem; color: var(--danger-main);"></i>
                                <span>NIB_PT_Halal_Jaya.pdf</span>
                            </div>
                        </td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-primary">NIB/SIUP</span></td>
                        <td style="padding: 1rem;">PT. Halal Jaya Makmur</td>
                        <td style="padding: 1rem;">24 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Terverifikasi</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <button class="btn btn-outline-primary"><i class="ri-eye-line"></i></button>
                                <button class="btn btn-outline-info"><i class="ri-download-line"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin.app>
