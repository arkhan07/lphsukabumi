<x-layouts.admin.app>
    <x-slot name="title">Detail Permohonan #SH2024-001</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Permohonan #SH2024-{{ str_pad($id, 3, '0', STR_PAD_LEFT) }}</h2>
            <p class="text-secondary-light mb-0">Informasi lengkap permohonan sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.submissions.edit', $id) }}" class="btn btn-success">
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
            <!-- Status Timeline -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-time-line me-2"></i>
                    Timeline Permohonan
                </h5>
                <div class="position-relative" style="padding-left: 2rem;">
                    <!-- Timeline Item 1 -->
                    <div class="mb-4 position-relative">
                        <div class="position-absolute" style="left: -2rem; top: 0;">
                            <div style="width: 12px; height: 12px; border-radius: 50%; background: var(--success-main);"></div>
                            <div style="width: 2px; height: 100%; background: var(--neutral-300); margin-left: 5px; margin-top: 4px;"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 style="font-size: 0.9rem; font-weight: 600;">Permohonan Dibuat</h6>
                                <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">Permohonan berhasil dibuat dan terdaftar di sistem</p>
                                <small class="text-secondary-light">24 Des 2024, 10:30 WIB</small>
                            </div>
                            <span class="badge-custom badge-success">Selesai</span>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="mb-4 position-relative">
                        <div class="position-absolute" style="left: -2rem; top: 0;">
                            <div style="width: 12px; height: 12px; border-radius: 50%; background: var(--warning-main);"></div>
                            <div style="width: 2px; height: 100%; background: var(--neutral-300); margin-left: 5px; margin-top: 4px;"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 style="font-size: 0.9rem; font-weight: 600;">Verifikasi Dokumen</h6>
                                <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">Dokumen sedang dalam proses verifikasi</p>
                                <small class="text-secondary-light">24 Des 2024, 14:00 WIB</small>
                            </div>
                            <span class="badge-custom badge-warning">Dalam Proses</span>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="mb-4 position-relative">
                        <div class="position-absolute" style="left: -2rem; top: 0;">
                            <div style="width: 12px; height: 12px; border-radius: 50%; background: var(--neutral-300);"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 style="font-size: 0.9rem; font-weight: 600; color: var(--neutral-500);">Audit</h6>
                                <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">Menunggu jadwal audit</p>
                            </div>
                            <span class="badge-custom badge-primary">Pending</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Business Info -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-building-line me-2"></i>
                    Informasi Pelaku Usaha
                </h5>
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nama Perusahaan</label>
                        <div style="font-weight: 500;">PT. Halal Jaya Makmur</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Jenis Usaha</label>
                        <div style="font-weight: 500;">Makanan & Minuman</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Penanggung Jawab</label>
                        <div style="font-weight: 500;">Budi Santoso</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">No. Telepon</label>
                        <div style="font-weight: 500;">0812-3456-7890</div>
                    </div>
                    <div class="col-12">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Email</label>
                        <div style="font-weight: 500;">budi.santoso@halaljaya.com</div>
                    </div>
                    <div class="col-12">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Alamat</label>
                        <div style="font-weight: 500;">Jl. Raya Sukabumi No. 123, Sukabumi, Jawa Barat 43121</div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-product-hunt-line me-2"></i>
                    Informasi Produk
                </h5>
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nama Produk</label>
                        <div style="font-weight: 500;">Kecap Manis Premium</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Kategori</label>
                        <div style="font-weight: 500;">Makanan & Minuman</div>
                    </div>
                    <div class="col-12">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Deskripsi Produk</label>
                        <div style="font-weight: 500;">Kecap manis berkualitas tinggi dengan bahan baku pilihan, tanpa pengawet buatan, dan diproduksi dengan standar halal yang ketat.</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Komposisi</label>
                        <div style="font-weight: 500;">Kedelai hitam, gula aren, garam, air, rempah-rempah</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Proses Produksi</label>
                        <div style="font-weight: 500;">Fermentasi tradisional, Pengolahan modern</div>
                    </div>
                </div>
            </div>

            <!-- Documents -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-file-list-3-line me-2"></i>
                    Dokumen Pendukung
                </h5>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border: none; padding: 1rem 0;">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stat-icon danger" style="width: 40px; height: 40px; font-size: 1rem;">
                                <i class="ri-file-pdf-line"></i>
                            </div>
                            <div>
                                <div style="font-weight: 500;">NIB/SIUP</div>
                                <small class="text-secondary-light">PDF • 1.2 MB • Diupload 24 Des 2024</small>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="ri-download-line"></i>
                        </button>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border: none; padding: 1rem 0; border-top: 1px solid var(--neutral-200);">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stat-icon danger" style="width: 40px; height: 40px; font-size: 1rem;">
                                <i class="ri-file-pdf-line"></i>
                            </div>
                            <div>
                                <div style="font-weight: 500;">NPWP</div>
                                <small class="text-secondary-light">PDF • 850 KB • Diupload 24 Des 2024</small>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="ri-download-line"></i>
                        </button>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border: none; padding: 1rem 0; border-top: 1px solid var(--neutral-200);">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stat-icon info" style="width: 40px; height: 40px; font-size: 1rem;">
                                <i class="ri-image-line"></i>
                            </div>
                            <div>
                                <div style="font-weight: 500;">Foto Produk</div>
                                <small class="text-secondary-light">JPG • 2.1 MB • Diupload 24 Des 2024</small>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="ri-download-line"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-12 col-lg-4">
            <!-- Status Card -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Status Permohonan</h5>
                <div class="text-center mb-3">
                    <span class="badge-custom badge-warning" style="font-size: 1rem; padding: 0.75rem 1.5rem;">
                        Verifikasi
                    </span>
                </div>
                <div class="mb-3">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Tanggal Pengajuan</label>
                    <div style="font-weight: 500;">24 Desember 2024</div>
                </div>
                <div class="mb-3">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Target Selesai</label>
                    <div style="font-weight: 500;">14 Januari 2025</div>
                </div>
                <div>
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Prioritas</label>
                    <div><span class="badge-custom badge-warning">Normal</span></div>
                </div>
            </div>

            <!-- Financial Info -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Informasi Biaya</h5>
                <div class="mb-2 d-flex justify-content-between">
                    <span class="text-secondary-light">Biaya Sertifikasi:</span>
                    <strong>Rp 2.500.000</strong>
                </div>
                <div class="mb-2 d-flex justify-content-between">
                    <span class="text-secondary-light">Biaya Audit:</span>
                    <strong>Rp 1.500.000</strong>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <strong>Total Biaya:</strong>
                    <strong class="text-primary-600" style="font-size: 1.125rem;">Rp 4.000.000</strong>
                </div>
                <hr>
                <div class="mb-2">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Status Pembayaran</label>
                    <div><span class="badge-custom badge-warning">Menunggu</span></div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Aksi</h5>
                <div class="d-grid gap-2">
                    <button class="btn btn-success">
                        <i class="ri-check-line me-2"></i>
                        Setujui Permohonan
                    </button>
                    <button class="btn btn-danger">
                        <i class="ri-close-line me-2"></i>
                        Tolak Permohonan
                    </button>
                    <button class="btn btn-outline-primary">
                        <i class="ri-calendar-line me-2"></i>
                        Jadwalkan Audit
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="ri-printer-line me-2"></i>
                        Cetak Detail
                    </button>
                </div>
            </div>

            <!-- Notes -->
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Catatan</h5>
                <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">
                    Dokumen lengkap dan sesuai persyaratan. Menunggu jadwal audit untuk lokasi produksi.
                </p>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
