<x-layouts.admin.app>
    <x-slot name="title">Tambah Permohonan Baru</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Tambah Permohonan Sertifikasi Halal</h2>
            <p class="text-secondary-light mb-0">Buat permohonan sertifikasi halal baru untuk pelaku usaha</p>
        </div>
        <div>
            <a href="{{ route('admin.submissions.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-3">
            <!-- Left Column -->
            <div class="col-12 col-lg-8">
                <!-- Informasi Pelaku Usaha -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-building-line me-2"></i>
                        Informasi Pelaku Usaha
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Pelaku Usaha <span class="text-danger">*</span></label>
                            <select class="form-select" name="business_id" required>
                                <option value="">Pilih Pelaku Usaha</option>
                                <option value="1">PT. Halal Jaya Makmur</option>
                                <option value="2">CV. Berkah Selalu</option>
                                <option value="3">UD. Maju Bersama</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Nama Penanggung Jawab <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="pic_name" placeholder="Nama lengkap penanggung jawab" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">No. Telepon <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" name="pic_phone" placeholder="08123456789" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="pic_email" placeholder="email@example.com" required>
                        </div>
                    </div>
                </div>

                <!-- Informasi Produk -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-product-hunt-line me-2"></i>
                        Informasi Produk
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nama Produk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="product_name" placeholder="Contoh: Kecap Manis Premium" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Kategori Produk <span class="text-danger">*</span></label>
                            <select class="form-select" name="product_category" required>
                                <option value="">Pilih Kategori</option>
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                                <option value="kosmetik">Kosmetik</option>
                                <option value="obat">Obat-obatan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Jenis Produk <span class="text-danger">*</span></label>
                            <select class="form-select" name="product_type" required>
                                <option value="">Pilih Jenis</option>
                                <option value="fresh">Produk Segar</option>
                                <option value="processed">Produk Olahan</option>
                                <option value="packaged">Produk Kemasan</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" name="product_description" rows="4" placeholder="Deskripsi lengkap tentang produk..."></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Komposisi Bahan</label>
                            <textarea class="form-control" name="ingredients" rows="3" placeholder="Daftar komposisi bahan..."></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Proses Produksi</label>
                            <textarea class="form-control" name="production_process" rows="3" placeholder="Deskripsi proses produksi..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Informasi Lokasi Produksi -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-map-pin-line me-2"></i>
                        Lokasi Produksi
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="address" rows="3" placeholder="Alamat lengkap lokasi produksi..." required></textarea>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Provinsi <span class="text-danger">*</span></label>
                            <select class="form-select" name="province" required>
                                <option value="">Pilih Provinsi</option>
                                <option value="jawa-barat">Jawa Barat</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Kota/Kabupaten <span class="text-danger">*</span></label>
                            <select class="form-select" name="city" required>
                                <option value="">Pilih Kota/Kab</option>
                                <option value="sukabumi">Sukabumi</option>
                                <option value="bogor">Bogor</option>
                                <option value="cianjur">Cianjur</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" name="postal_code" placeholder="43xxx">
                        </div>
                    </div>
                </div>

                <!-- Dokumen Pendukung -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-file-upload-line me-2"></i>
                        Dokumen Pendukung
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">NIB/SIUP <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="nib_file" accept=".pdf,.jpg,.jpeg,.png" required>
                            <small class="text-secondary-light">Format: PDF, JPG, PNG (Max 2MB)</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Sertifikat Halal Sebelumnya</label>
                            <input type="file" class="form-control" name="previous_certificate" accept=".pdf,.jpg,.jpeg,.png">
                            <small class="text-secondary-light">Jika ada</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">NPWP</label>
                            <input type="file" class="form-control" name="npwp_file" accept=".pdf,.jpg,.jpeg,.png">
                            <small class="text-secondary-light">Format: PDF, JPG, PNG (Max 2MB)</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" name="product_photo" accept=".jpg,.jpeg,.png">
                            <small class="text-secondary-light">Format: JPG, PNG (Max 2MB)</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-12 col-lg-4">
                <!-- Status & Tanggal -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-information-line me-2"></i>
                        Status & Tanggal
                    </h5>
                    <div class="mb-3">
                        <label class="form-label">Status Permohonan <span class="text-danger">*</span></label>
                        <select class="form-select" name="status" required>
                            <option value="draft">Draft</option>
                            <option value="verifikasi">Verifikasi</option>
                            <option value="audit">Audit</option>
                            <option value="approved">Disetujui</option>
                            <option value="rejected">Ditolak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Pengajuan <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="submission_date" value="{{ date('Y-m-d') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prioritas</label>
                        <select class="form-select" name="priority">
                            <option value="normal">Normal</option>
                            <option value="high">Tinggi</option>
                            <option value="urgent">Mendesak</option>
                        </select>
                    </div>
                </div>

                <!-- Biaya -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-money-dollar-circle-line me-2"></i>
                        Informasi Biaya
                    </h5>
                    <div class="mb-3">
                        <label class="form-label">Biaya Sertifikasi</label>
                        <input type="number" class="form-control" name="certification_fee" placeholder="0" value="2500000">
                        <small class="text-secondary-light">Dalam Rupiah</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Biaya Audit</label>
                        <input type="number" class="form-control" name="audit_fee" placeholder="0" value="1500000">
                        <small class="text-secondary-light">Dalam Rupiah</small>
                    </div>
                    <div class="p-3" style="background-color: var(--neutral-50); border-radius: 8px;">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Biaya Sertifikasi:</span>
                            <strong>Rp 2.500.000</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Biaya Audit:</span>
                            <strong>Rp 1.500.000</strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <strong>Total:</strong>
                            <strong class="text-primary-600" style="font-size: 1.125rem;">Rp 4.000.000</strong>
                        </div>
                    </div>
                </div>

                <!-- Catatan -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-sticky-note-line me-2"></i>
                        Catatan
                    </h5>
                    <textarea class="form-control" name="notes" rows="4" placeholder="Catatan tambahan untuk permohonan ini..."></textarea>
                </div>

                <!-- Action Buttons -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-2"></i>
                        Simpan Permohonan
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="ri-draft-line me-2"></i>
                        Simpan sebagai Draft
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layouts.admin.app>
