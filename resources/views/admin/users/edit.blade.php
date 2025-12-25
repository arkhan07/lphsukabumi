<x-layouts.admin.app>
    <x-slot name="title">Edit Pengguna</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Edit Pengguna</h2>
            <p class="text-secondary-light mb-0">Perbarui informasi pengguna</p>
        </div>
        <div>
            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <form action="#" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Informasi Pengguna</h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Nama lengkap pengguna" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" placeholder="email@example.com" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" placeholder="Minimal 8 karakter" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Ulangi password" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control" name="phone" placeholder="08123456789">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Role <span class="text-danger">*</span></label>
                            <select class="form-select" name="role" required>
                                <option value="">Pilih Role</option>
                                <option value="admin_lph">Admin LPH</option>
                                <option value="manajer_teknis">Manajer Teknis</option>
                                <option value="auditor_halal">Auditor Halal</option>
                                <option value="pelaku_usaha">Pelaku Usaha</option>
                                <option value="penyedia_halal">Penyedia Halal</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Status</h5>
                    <div class="mb-3">
                        <label class="form-label">Status Akun</label>
                        <select class="form-select" name="status">
                            <option value="active">Aktif</option>
                            <option value="inactive">Tidak Aktif</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-2"></i>
                        Simpan Pengguna
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layouts.admin.app>
