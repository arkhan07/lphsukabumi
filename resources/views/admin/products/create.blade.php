<x-layouts.admin.app>
    <x-slot name="title">Tambah Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Tambah Produk Baru</h2>
            <p class="text-secondary-light mb-0">Daftarkan produk baru untuk sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
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
                <!-- Informasi Produk -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-product-hunt-line me-2"></i>
                        Informasi Produk
                    </h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Nama Produk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="product_name" placeholder="Nama produk" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">SKU/Kode Produk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="sku" placeholder="SKU-001" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Kategori <span class="text-danger">*</span></label>
                            <select class="form-select" name="category" required>
                                <option value="">Pilih Kategori</option>
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                                <option value="kosmetik">Kosmetik</option>
                                <option value="obat">Obat-obatan</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Merk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="brand" placeholder="Nama merk" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="Deskripsi lengkap produk"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Komposisi/Bahan</label>
                            <textarea class="form-control" name="ingredients" rows="3" placeholder="Daftar bahan"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Berat/Volume</label>
                            <input type="text" class="form-control" name="weight" placeholder="250gr / 500ml">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" name="photo" accept=".jpg,.jpeg,.png">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Foto Kemasan</label>
                            <input type="file" class="form-control" name="packaging" accept=".jpg,.jpeg,.png">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-12 col-lg-4">
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Status</h5>
                    <div class="mb-3">
                        <label class="form-label">Status Produk</label>
                        <select class="form-select" name="status">
                            <option value="active">Aktif</option>
                            <option value="inactive">Tidak Aktif</option>
                        </select>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-2"></i>
                        Simpan Produk
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layouts.admin.app>
