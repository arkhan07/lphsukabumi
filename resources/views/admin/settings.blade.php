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
                <form method="POST" action="{{ route('admin.settings.update-general') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nama Lembaga</label>
                            <input type="text" class="form-control @error('app_name') is-invalid @enderror"
                                   name="app_name" value="{{ old('app_name', $settings['app_name']) }}">
                            @error('app_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Email Lembaga</label>
                            <input type="email" class="form-control @error('app_email') is-invalid @enderror"
                                   name="app_email" value="{{ old('app_email', $settings['app_email']) }}">
                            @error('app_email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control @error('app_phone') is-invalid @enderror"
                                   name="app_phone" value="{{ old('app_phone', $settings['app_phone']) }}">
                            @error('app_phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control @error('app_address') is-invalid @enderror"
                                      name="app_address" rows="3">{{ old('app_address', $settings['app_address']) }}</textarea>
                            @error('app_address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                <form method="POST" action="{{ route('admin.settings.update-email') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">SMTP Host</label>
                            <input type="text" class="form-control @error('mail_host') is-invalid @enderror"
                                   name="mail_host" value="{{ old('mail_host', $settings['mail_host']) }}">
                            @error('mail_host')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">SMTP Port</label>
                            <input type="number" class="form-control @error('mail_port') is-invalid @enderror"
                                   name="mail_port" value="{{ old('mail_port', $settings['mail_port']) }}">
                            @error('mail_port')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">SMTP Username</label>
                            <input type="text" class="form-control @error('mail_username') is-invalid @enderror"
                                   name="mail_username" value="{{ old('mail_username', $settings['mail_username']) }}">
                            @error('mail_username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">SMTP Password</label>
                            <input type="password" class="form-control @error('mail_password') is-invalid @enderror"
                                   name="mail_password" placeholder="Kosongkan jika tidak ingin mengubah">
                            @error('mail_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Encryption</label>
                            <select class="form-select @error('mail_encryption') is-invalid @enderror" name="mail_encryption">
                                <option value="tls" {{ old('mail_encryption', $settings['mail_encryption']) == 'tls' ? 'selected' : '' }}>TLS</option>
                                <option value="ssl" {{ old('mail_encryption', $settings['mail_encryption']) == 'ssl' ? 'selected' : '' }}>SSL</option>
                            </select>
                            @error('mail_encryption')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <button type="button" class="btn btn-outline-secondary" onclick="testEmail()">Test Email</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Certification Settings -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Pengaturan Sertifikasi</h5>
                <form method="POST" action="{{ route('admin.settings.update-certification') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Masa Berlaku Sertifikat (Tahun)</label>
                            <input type="number" class="form-control @error('cert_validity_years') is-invalid @enderror"
                                   name="cert_validity_years" value="{{ old('cert_validity_years', $settings['cert_validity_years']) }}">
                            @error('cert_validity_years')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Batas Waktu Pembayaran (Hari)</label>
                            <input type="number" class="form-control @error('payment_due_days') is-invalid @enderror"
                                   name="payment_due_days" value="{{ old('payment_due_days', $settings['payment_due_days']) }}">
                            @error('payment_due_days')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Biaya Sertifikasi Default (Rp)</label>
                            <input type="number" class="form-control @error('default_cert_fee') is-invalid @enderror"
                                   name="default_cert_fee" value="{{ old('default_cert_fee', $settings['default_cert_fee']) }}">
                            @error('default_cert_fee')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Biaya Audit Default (Rp)</label>
                            <input type="number" class="form-control @error('default_audit_fee') is-invalid @enderror"
                                   name="default_audit_fee" value="{{ old('default_audit_fee', $settings['default_audit_fee']) }}">
                            @error('default_audit_fee')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                <form method="POST" action="{{ route('admin.settings.upload-logo') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center mb-3">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="max-height: 100px;" onerror="this.src='https://via.placeholder.com/100x100?text=Logo'">
                    </div>
                    <input type="file" class="form-control mb-2 @error('logo') is-invalid @enderror"
                           name="logo" accept="image/*" onchange="previewLogo(event)">
                    @error('logo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="text-muted d-block mb-2">Format: JPG, PNG, SVG (Max: 2MB)</small>
                    <button type="submit" class="btn btn-primary w-100">Upload Logo</button>
                </form>
            </div>

            <!-- Notifications -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Notifikasi</h5>
                <form method="POST" action="{{ route('admin.settings.update-notifications') }}">
                    @csrf
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="notif_email" value="1"
                               id="emailNotif" {{ $settings['notif_email'] ? 'checked' : '' }}>
                        <label class="form-check-label" for="emailNotif">
                            Email Notifications
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="notif_sms" value="1"
                               id="smsNotif" {{ $settings['notif_sms'] ? 'checked' : '' }}>
                        <label class="form-check-label" for="smsNotif">
                            SMS Notifications
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="notif_whatsapp" value="1"
                               id="whatsappNotif" {{ $settings['notif_whatsapp'] ? 'checked' : '' }}>
                        <label class="form-check-label" for="whatsappNotif">
                            WhatsApp Notifications
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
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
                    <div style="font-weight: 500;">{{ app()->version() }}</div>
                </div>
                <div class="mb-2">
                    <small class="text-secondary-light">PHP Version:</small>
                    <div style="font-weight: 500;">{{ PHP_VERSION }}</div>
                </div>
                <div>
                    <small class="text-secondary-light">Database:</small>
                    <div style="font-weight: 500;">{{ config('database.default') }}</div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Test Email Function
        function testEmail() {
            const email = prompt('Masukkan alamat email untuk test:', '{{ auth()->user()->email }}');
            if (email) {
                fetch('{{ route("admin.settings.test-email") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ test_email: email })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Email test berhasil dikirim!');
                    } else {
                        alert('Gagal mengirim email test: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim email test');
                });
            }
        }

        // Preview Logo Before Upload
        function previewLogo(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = event.target.closest('form').querySelector('img');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        // Show success/error messages
        @if(session('success'))
            alert('{{ session('success') }}');
        @endif

        @if(session('error'))
            alert('{{ session('error') }}');
        @endif
    </script>
    @endpush
</x-layouts.admin.app>
