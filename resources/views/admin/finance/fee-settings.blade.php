<x-layouts.admin.app>
    <x-slot name="title">Konfigurasi Biaya</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Konfigurasi Biaya Sertifikasi</h2>
            <p class="text-secondary-light mb-0">Atur biaya untuk berbagai jenis sertifikasi dan layanan</p>
        </div>
    </div>

    <div class="row g-3">
        <!-- Biaya Sertifikasi -->
        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">
                    <i class="ri-file-list-3-line me-2"></i>
                    Biaya Sertifikasi Berdasarkan Kategori
                </h5>
                <table class="table">
                    <thead style="background-color: var(--neutral-50);">
                        <tr>
                            <th style="padding: 1rem;">Kategori Produk</th>
                            <th style="padding: 1rem;">Biaya</th>
                            <th style="padding: 1rem; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 1rem;">Makanan & Minuman</td>
                            <td style="padding: 1rem;"><strong>Rp 2.500.000</strong></td>
                            <td style="padding: 1rem; text-align: center;">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem;">Kosmetik</td>
                            <td style="padding: 1rem;"><strong>Rp 3.000.000</strong></td>
                            <td style="padding: 1rem; text-align: center;">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem;">Obat-obatan</td>
                            <td style="padding: 1rem;"><strong>Rp 3.500.000</strong></td>
                            <td style="padding: 1rem; text-align: center;">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem;">Jasa/Layanan</td>
                            <td style="padding: 1rem;"><strong>Rp 2.000.000</strong></td>
                            <td style="padding: 1rem; text-align: center;">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary w-100 mt-2">
                    <i class="ri-add-line me-2"></i>
                    Tambah Kategori Baru
                </button>
            </div>
        </div>

        <!-- Biaya Audit -->
        <div class="col-12 col-lg-6">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">
                    <i class="ri-file-search-line me-2"></i>
                    Biaya Audit
                </h5>
                <table class="table">
                    <thead style="background-color: var(--neutral-50);">
                        <tr>
                            <th style="padding: 1rem;">Jenis Audit</th>
                            <th style="padding: 1rem;">Biaya</th>
                            <th style="padding: 1rem; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 1rem;">Audit Tahap 1</td>
                            <td style="padding: 1rem;"><strong>Rp 1.500.000</strong></td>
                            <td style="padding: 1rem; text-align: center;">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem;">Audit Tahap 2</td>
                            <td style="padding: 1rem;"><strong>Rp 2.000.000</strong></td>
                            <td style="padding: 1rem; text-align: center;">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem;">Audit Surveillance</td>
                            <td style="padding: 1rem;"><strong>Rp 1.200.000</strong></td>
                            <td style="padding: 1rem; text-align: center;">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem;">Re-audit</td>
                            <td style="padding: 1rem;"><strong>Rp 1.800.000</strong></td>
                            <td style="padding: 1rem; text-align: center;">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-edit-line"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Biaya Tambahan -->
        <div class="col-12">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">
                    <i class="ri-money-dollar-circle-line me-2"></i>
                    Biaya Layanan Tambahan
                </h5>
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="p-3" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                            <div class="text-secondary-light mb-2">Perpanjangan Sertifikat</div>
                            <div style="font-size: 1.25rem; font-weight: 700;">Rp 1.500.000</div>
                            <button class="btn btn-sm btn-outline-primary mt-2">Edit</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="p-3" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                            <div class="text-secondary-light mb-2">Penggantian Sertifikat</div>
                            <div style="font-size: 1.25rem; font-weight: 700;">Rp 500.000</div>
                            <button class="btn btn-sm btn-outline-primary mt-2">Edit</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="p-3" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                            <div class="text-secondary-light mb-2">Konsultasi</div>
                            <div style="font-size: 1.25rem; font-weight: 700;">Rp 750.000</div>
                            <button class="btn btn-sm btn-outline-primary mt-2">Edit</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="p-3" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                            <div class="text-secondary-light mb-2">Pelatihan</div>
                            <div style="font-size: 1.25rem; font-weight: 700;">Rp 2.000.000</div>
                            <button class="btn btn-sm btn-outline-primary mt-2">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengaturan Umum -->
        <div class="col-12">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">
                    <i class="ri-settings-3-line me-2"></i>
                    Pengaturan Umum Biaya
                </h5>
                <form>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">PPN (%)</label>
                            <input type="number" class="form-control" value="11">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Diskon Maximum (%)</label>
                            <input type="number" class="form-control" value="20">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Batas Waktu Pembayaran (Hari)</label>
                            <input type="number" class="form-control" value="14">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Denda Keterlambatan (%)</label>
                            <input type="number" class="form-control" value="2">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
