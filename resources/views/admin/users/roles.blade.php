<x-layouts.admin.app>
    <x-slot name="title">Role & Permission</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Role & Permission</h2>
            <p class="text-secondary-light mb-0">Kelola hak akses dan permission untuk setiap role</p>
        </div>
    </div>

    <!-- Roles Cards -->
    <div class="row g-3">
        <!-- Admin LPH -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-custom">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-shield-star-line"></i>
                    </div>
                    <span class="badge-custom badge-danger">Super Admin</span>
                </div>
                <h5 style="font-weight: 600;">Admin LPH</h5>
                <p class="text-secondary-light mb-3" style="font-size: 0.875rem;">Full access ke semua fitur sistem</p>
                <div class="mb-3">
                    <small class="text-secondary-light">Permissions:</small>
                    <div class="d-flex flex-wrap gap-1 mt-2">
                        <span class="badge-custom badge-success" style="font-size: 0.75rem;">All Access</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-secondary-light">5 Pengguna</small>
                    <button class="btn btn-sm btn-outline-primary">Edit Role</button>
                </div>
            </div>
        </div>

        <!-- Manajer Teknis -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-custom">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-user-settings-line"></i>
                    </div>
                    <span class="badge-custom badge-warning">Manager</span>
                </div>
                <h5 style="font-weight: 600;">Manajer Teknis</h5>
                <p class="text-secondary-light mb-3" style="font-size: 0.875rem;">Mengelola operasional teknis dan audit</p>
                <div class="mb-3">
                    <small class="text-secondary-light">Permissions:</small>
                    <div class="d-flex flex-wrap gap-1 mt-2">
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">View Submissions</span>
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">Manage Audits</span>
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">View Reports</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-secondary-light">12 Pengguna</small>
                    <button class="btn btn-sm btn-outline-primary">Edit Role</button>
                </div>
            </div>
        </div>

        <!-- Auditor Halal -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-custom">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <span class="badge-custom badge-success">Auditor</span>
                </div>
                <h5 style="font-weight: 600;">Auditor Halal</h5>
                <p class="text-secondary-light mb-3" style="font-size: 0.875rem;">Melakukan audit dan verifikasi halal</p>
                <div class="mb-3">
                    <small class="text-secondary-light">Permissions:</small>
                    <div class="d-flex flex-wrap gap-1 mt-2">
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">View Audits</span>
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">Create Reports</span>
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">Upload Documents</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-secondary-light">15 Pengguna</small>
                    <button class="btn btn-sm btn-outline-primary">Edit Role</button>
                </div>
            </div>
        </div>

        <!-- Pelaku Usaha -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-custom">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-building-line"></i>
                    </div>
                    <span class="badge-custom badge-primary">Business</span>
                </div>
                <h5 style="font-weight: 600;">Pelaku Usaha</h5>
                <p class="text-secondary-light mb-3" style="font-size: 0.875rem;">Mengajukan permohonan sertifikasi</p>
                <div class="mb-3">
                    <small class="text-secondary-light">Permissions:</small>
                    <div class="d-flex flex-wrap gap-1 mt-2">
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">Create Submission</span>
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">View Own Data</span>
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">Upload Documents</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-secondary-light">156 Pengguna</small>
                    <button class="btn btn-sm btn-outline-primary">Edit Role</button>
                </div>
            </div>
        </div>

        <!-- Penyedia Halal -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-custom">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-store-line"></i>
                    </div>
                    <span class="badge-custom badge-info">Provider</span>
                </div>
                <h5 style="font-weight: 600;">Penyedia Halal</h5>
                <p class="text-secondary-light mb-3" style="font-size: 0.875rem;">Menyediakan bahan baku halal</p>
                <div class="mb-3">
                    <small class="text-secondary-light">Permissions:</small>
                    <div class="d-flex flex-wrap gap-1 mt-2">
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">Manage Products</span>
                        <span class="badge-custom badge-info" style="font-size: 0.75rem;">View Certificates</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-secondary-light">46 Pengguna</small>
                    <button class="btn btn-sm btn-outline-primary">Edit Role</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Permissions Matrix -->
    <div class="card-custom mt-4">
        <h5 class="mb-3" style="font-weight: 600;">Permission Matrix</h5>
        <div class="table-responsive">
            <table class="table">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Module / Permission</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Admin LPH</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Manajer</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Auditor</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Penyedia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem; font-weight: 500;">View Submissions</td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: 500;">Create Submissions</td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: 500;">Manage Audits</td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: 500;">Manage Users</td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: 500;">View Reports</td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: 500;">Manage Finance</td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-checkbox-circle-fill text-success" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                        <td style="padding: 1rem; text-align: center;"><i class="ri-close-circle-line text-danger" style="font-size: 1.25rem;"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin.app>
