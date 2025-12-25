<x-layouts.admin.app>
    <x-slot name="title">Invoice</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Invoice</h2>
            <p class="text-secondary-light mb-0">Kelola invoice dan pembayaran sertifikasi</p>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Buat Invoice
            </button>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Invoice</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">156</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Belum Dibayar</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">23</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Lunas</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">121</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Jatuh Tempo</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">12</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-alert-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Invoice Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Invoice</h5>
            <div class="d-flex gap-2">
                <select class="form-select" style="width: 150px;">
                    <option value="">Semua Status</option>
                    <option value="paid">Lunas</option>
                    <option value="unpaid">Belum Bayar</option>
                    <option value="overdue">Jatuh Tempo</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">No. Invoice</th>
                        <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal</th>
                        <th style="padding: 1rem; font-weight: 600;">Jatuh Tempo</th>
                        <th style="padding: 1rem; font-weight: 600;">Total</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;"><strong>INV/2024/12/001</strong></td>
                        <td style="padding: 1rem;">PT. Halal Jaya Makmur</td>
                        <td style="padding: 1rem;">24 Des 2024</td>
                        <td style="padding: 1rem;">07 Jan 2025</td>
                        <td style="padding: 1rem;"><strong>Rp 4.000.000</strong></td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Belum Bayar</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-info" title="Download">
                                    <i class="ri-download-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-success" title="Konfirmasi Bayar">
                                    <i class="ri-check-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>INV/2024/12/002</strong></td>
                        <td style="padding: 1rem;">CV. Berkah Selalu</td>
                        <td style="padding: 1rem;">23 Des 2024</td>
                        <td style="padding: 1rem;">06 Jan 2025</td>
                        <td style="padding: 1rem;"><strong>Rp 3.500.000</strong></td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Lunas</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-info" title="Download">
                                    <i class="ri-download-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>INV/2024/12/003</strong></td>
                        <td style="padding: 1rem;">UD. Maju Bersama</td>
                        <td style="padding: 1rem;">10 Des 2024</td>
                        <td style="padding: 1rem;">24 Des 2024</td>
                        <td style="padding: 1rem;"><strong>Rp 4.500.000</strong></td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-danger">Jatuh Tempo</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-info" title="Download">
                                    <i class="ri-download-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Kirim Reminder">
                                    <i class="ri-mail-send-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Summary Card -->
    <div class="row g-3 mt-3">
        <div class="col-12 col-md-6">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Ringkasan Keuangan Bulan Ini</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Total Invoice:</span>
                    <strong>Rp 65.000.000</strong>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Terbayar:</span>
                    <strong class="text-success">Rp 45.000.000</strong>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary-light">Belum Terbayar:</span>
                    <strong class="text-warning">Rp 15.000.000</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-secondary-light">Jatuh Tempo:</span>
                    <strong class="text-danger">Rp 5.000.000</strong>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
