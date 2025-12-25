<x-layouts.admin.app>
    <x-slot name="title">Pengaturan Sistem</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Pengaturan Sistem</h2>
            <p class="text-secondary-light mb-0">Konfigurasi dan pengaturan aplikasi LPH</p>
        </div>
    </div>

    <div class="row g-3">
        <!-- Left Column -->
        <div class="col-12 col-lg-8">
            <!-- General Settings -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Pengaturan Umum</h5>
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nama Lembaga</label>
                            <input type="text" class="form-control" value="LPH Doa Bangsa Sukabumi">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Email Lembaga</label>
                            <input type="email" class="form-control" value="info@lphsukabumi.com">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control" value="0266-123456">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" rows="3">Jl. Raya Sukabumi No. 123, Sukabumi, Jawa Barat 43121</textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Email Settings -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Pengaturan Email</h5>
                <form>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">SMTP Host</label>
                            <input type="text" class="form-control" value="smtp.gmail.com">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">SMTP Port</label>
                            <input type="text" class="form-control" value="587">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">SMTP Username</label>
                            <input type="text" class="form-control" value="noreply@lphsukabumi.com">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">SMTP Password</label>
                            <input type="password" class="form-control" value="••••••••">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <button type="button" class="btn btn-outline-secondary">Test Email</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Certification Settings -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Pengaturan Sertifikasi</h5>
                <form>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Masa Berlaku Sertifikat (Tahun)</label>
                            <input type="number" class="form-control" value="2">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Batas Waktu Pembayaran (Hari)</label>
                            <input type="number" class="form-control" value="14">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Biaya Sertifikasi Default</label>
                            <input type="number" class="form-control" value="2500000">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Biaya Audit Default</label>
                            <input type="number" class="form-control" value="1500000">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-12 col-lg-4">
            <!-- Logo Upload -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Logo Lembaga</h5>
                <div class="text-center mb-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="max-height: 100px;">
                </div>
                <input type="file" class="form-control mb-2" accept="image/*">
                <button class="btn btn-primary w-100">Upload Logo</button>
            </div>

            <!-- Notifications -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Notifikasi</h5>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="emailNotif" checked>
                    <label class="form-check-label" for="emailNotif">
                        Email Notifications
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="smsNotif">
                    <label class="form-check-label" for="smsNotif">
                        SMS Notifications
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="whatsappNotif" checked>
                    <label class="form-check-label" for="whatsappNotif">
                        WhatsApp Notifications
                    </label>
                </div>
                <button class="btn btn-primary w-100">Simpan</button>
            </div>

            <!-- System Info -->
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Informasi Sistem</h5>
                <div class="mb-2">
                    <small class="text-secondary-light">Versi Aplikasi:</small>
                    <div style="font-weight: 500;">v1.0.0</div>
                </div>
                <div class="mb-2">
                    <small class="text-secondary-light">Laravel Version:</small>
                    <div style="font-weight: 500;">8.x</div>
                </div>
                <div class="mb-2">
                    <small class="text-secondary-light">PHP Version:</small>
                    <div style="font-weight: 500;">8.1</div>
                </div>
                <div>
                    <small class="text-secondary-light">Database:</small>
                    <div style="font-weight: 500;">MySQL 8.0</div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
