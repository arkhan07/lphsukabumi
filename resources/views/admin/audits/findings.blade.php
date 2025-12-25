<x-layouts.admin.app>
    <x-slot name="title">Temuan Audit</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Temuan Audit</h2>
            <p class="text-secondary-light mb-0">Daftar temuan dan catatan hasil audit</p>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Temuan Kritis</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">5</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-error-warning-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Perlu Perbaikan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">18</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-alert-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Observasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">32</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-eye-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Sudah Diperbaiki</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">42</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Findings Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Temuan</h5>
            <div class="d-flex gap-2">
                <select class="form-select" style="width: 150px;">
                    <option value="">Semua Kategori</option>
                    <option value="critical">Kritis</option>
                    <option value="major">Major</option>
                    <option value="minor">Minor</option>
                    <option value="observation">Observasi</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">No. Temuan</th>
                        <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Kategori</th>
                        <th style="padding: 1rem; font-weight: 600;">Temuan</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;"><strong>FND-001</strong></td>
                        <td style="padding: 1rem;">PT. Halal Jaya Makmur</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-danger">Kritis</span></td>
                        <td style="padding: 1rem;">Pencampuran bahan baku tidak sesuai prosedur halal</td>
                        <td style="padding: 1rem;">24 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Dalam Perbaikan</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-success" title="Tutup">
                                    <i class="ri-check-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>FND-002</strong></td>
                        <td style="padding: 1rem;">CV. Berkah Selalu</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Major</span></td>
                        <td style="padding: 1rem;">Dokumentasi proses produksi tidak lengkap</td>
                        <td style="padding: 1rem;">23 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Diperbaiki</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>FND-003</strong></td>
                        <td style="padding: 1rem;">UD. Maju Bersama</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-info">Minor</span></td>
                        <td style="padding: 1rem;">Label produk perlu penyesuaian</td>
                        <td style="padding: 1rem;">22 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Diperbaiki</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin.app>
