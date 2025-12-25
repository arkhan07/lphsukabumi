<x-layouts.admin.app>
    <x-slot name="title">Jadwal Audit</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Jadwal Audit</h2>
            <p class="text-secondary-light mb-0">Kelola jadwal audit sertifikasi halal</p>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scheduleModal">
                <i class="ri-calendar-event-line me-2"></i>
                Jadwalkan Audit
            </button>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Terjadwal</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">12</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-calendar-check-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Hari Ini</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">3</div>
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
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Selesai</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">89</div>
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
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Pending</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">7</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-alert-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar & List View -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Jadwal Audit Mendatang</h5>
                    <div class="d-flex gap-2">
                        <select class="form-select" style="width: 150px;">
                            <option value="">Bulan Ini</option>
                            <option value="next">Bulan Depan</option>
                            <option value="all">Semua</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead style="background-color: var(--neutral-50);">
                            <tr>
                                <th style="padding: 1rem; font-weight: 600;">Tanggal & Waktu</th>
                                <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                                <th style="padding: 1rem; font-weight: 600;">Produk</th>
                                <th style="padding: 1rem; font-weight: 600;">Auditor</th>
                                <th style="padding: 1rem; font-weight: 600;">Lokasi</th>
                                <th style="padding: 1rem; font-weight: 600;">Status</th>
                                <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 1rem;">
                                    <div style="font-weight: 500;">25 Des 2024</div>
                                    <small class="text-secondary-light">10:00 - 14:00 WIB</small>
                                </td>
                                <td style="padding: 1rem;">PT. Halal Jaya Makmur</td>
                                <td style="padding: 1rem;">Kecap Manis</td>
                                <td style="padding: 1rem;">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=3b82f6&color=fff" style="width: 30px; height: 30px; border-radius: 50%;">
                                        <span>Budi Santoso</span>
                                    </div>
                                </td>
                                <td style="padding: 1rem;">Sukabumi</td>
                                <td style="padding: 1rem;"><span class="badge-custom badge-info">Terjadwal</span></td>
                                <td style="padding: 1rem; text-align: center;">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-sm btn-outline-primary" title="Detail">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success" title="Edit">
                                            <i class="ri-edit-line"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Batalkan">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem;">
                                    <div style="font-weight: 500;">26 Des 2024</div>
                                    <small class="text-secondary-light">14:00 - 17:00 WIB</small>
                                </td>
                                <td style="padding: 1rem;">CV. Berkah Selalu</td>
                                <td style="padding: 1rem;">Mie Instan</td>
                                <td style="padding: 1rem;">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://ui-avatars.com/api/?name=Ahmad+Hidayat&background=10b981&color=fff" style="width: 30px; height: 30px; border-radius: 50%;">
                                        <span>Ahmad Hidayat</span>
                                    </div>
                                </td>
                                <td style="padding: 1rem;">Sukabumi</td>
                                <td style="padding: 1rem;"><span class="badge-custom badge-warning">Pending</span></td>
                                <td style="padding: 1rem; text-align: center;">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-sm btn-outline-primary" title="Detail">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success" title="Edit">
                                            <i class="ri-edit-line"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Batalkan">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem;">
                                    <div style="font-weight: 500;">27 Des 2024</div>
                                    <small class="text-secondary-light">09:00 - 12:00 WIB</small>
                                </td>
                                <td style="padding: 1rem;">UD. Maju Bersama</td>
                                <td style="padding: 1rem;">Sirup & Minuman</td>
                                <td style="padding: 1rem;">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://ui-avatars.com/api/?name=Siti+Aminah&background=f59e0b&color=fff" style="width: 30px; height: 30px; border-radius: 50%;">
                                        <span>Siti Aminah</span>
                                    </div>
                                </td>
                                <td style="padding: 1rem;">Bogor</td>
                                <td style="padding: 1rem;"><span class="badge-custom badge-info">Terjadwal</span></td>
                                <td style="padding: 1rem; text-align: center;">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-sm btn-outline-primary" title="Detail">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success" title="Edit">
                                            <i class="ri-edit-line"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Batalkan">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
