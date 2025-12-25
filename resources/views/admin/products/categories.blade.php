<x-layouts.admin.app>
    <x-slot name="title">Daftar Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Produk Halal</h2>
            <p class="text-secondary-light mb-0">Kelola produk yang terdaftar untuk sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.products.categories') }}" class="btn btn-outline-primary">
                <i class="ri-folder-line me-2"></i>
                Kategori
            </a>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Produk
            </a>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Produk</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">542</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-product-hunt-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Tersertifikasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">489</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Dalam Proses</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">42</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Kategori</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">12</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-folder-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Produk</h5>
            <div class="d-flex gap-2">
                <div class="position-relative">
                    <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                    <input type="text" class="form-control ps-5" placeholder="Cari produk..." style="width: 250px;">
                </div>
                <select class="form-select" style="width: 150px;">
                    <option value="">Semua Kategori</option>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="kosmetik">Kosmetik</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Produk</th>
                        <th style="padding: 1rem; font-weight: 600;">Kategori</th>
                        <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Sertifikat</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 50px; height: 50px; background: var(--neutral-100); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="ri-product-hunt-line" style="font-size: 1.5rem; color: var(--primary-600);"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 500;">Kecap Manis Premium</div>
                                    <small class="text-secondary-light">SKU: KCP-001</small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-primary">Makanan</span></td>
                        <td style="padding: 1rem;">PT. Halal Jaya Makmur</td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">SH-2024-001</div>
                            <small class="text-secondary-light">Valid s/d 24 Des 2026</small>
                        </td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Tersertifikasi</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 50px; height: 50px; background: var(--neutral-100); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="ri-product-hunt-line" style="font-size: 1.5rem; color: var(--primary-600);"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 500;">Mie Instan</div>
                                    <small class="text-secondary-light">SKU: MIE-002</small>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-primary">Makanan</span></td>
                        <td style="padding: 1rem;">CV. Berkah Selalu</td>
                        <td style="padding: 1rem;">
                            <small class="text-secondary-light">Dalam Proses</small>
                        </td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Verifikasi</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin.app>
