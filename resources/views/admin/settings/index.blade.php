<x-layouts.admin.app>
    <x-slot name="title">Pengaturan Sistem</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        <i class="ti ti-settings me-2"></i>
                        Pengaturan Sistem
                    </h2>
                    <div class="text-secondary mt-1">Kelola konfigurasi aplikasi dan integrasi</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div><i class="ti ti-check"></i></div>
                        <div class="ms-2">{{ session('success') }}</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div><i class="ti ti-alert-circle"></i></div>
                        <div class="ms-2">
                            <h4 class="alert-title">Error!</h4>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-email" class="nav-link active" data-bs-toggle="tab">
                                <i class="ti ti-mail me-1"></i>
                                Email SMTP
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-whatsapp" class="nav-link" data-bs-toggle="tab">
                                <i class="ti ti-brand-whatsapp me-1"></i>
                                WhatsApp
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-recaptcha" class="nav-link" data-bs-toggle="tab">
                                <i class="ti ti-shield-check me-1"></i>
                                reCAPTCHA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-appearance" class="nav-link" data-bs-toggle="tab">
                                <i class="ti ti-palette me-1"></i>
                                Tampilan
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <!-- Email SMTP Settings -->
                        <div class="tab-pane active show" id="tabs-email">
                            <form method="POST" action="{{ route('admin.settings.update') }}" id="emailSettingsForm">
                                @csrf
                                <h3 class="mb-4">Konfigurasi Email SMTP</h3>
                                <p class="text-secondary mb-4">
                                    Konfigurasikan SMTP untuk mengirim email notifikasi dan verifikasi ke pengguna.
                                </p>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label required">SMTP Host</label>
                                        <input type="text" name="smtp_host" class="form-control"
                                               value="{{ old('smtp_host', $settings['email']->firstWhere('key', 'smtp_host')->value ?? '') }}"
                                               placeholder="smtp.gmail.com">
                                        <small class="form-hint">Hostname server SMTP Anda</small>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label required">SMTP Port</label>
                                        <input type="number" name="smtp_port" class="form-control"
                                               value="{{ old('smtp_port', $settings['email']->firstWhere('key', 'smtp_port')->value ?? '587') }}"
                                               placeholder="587">
                                        <small class="form-hint">Port SMTP (587 untuk TLS, 465 untuk SSL)</small>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label required">SMTP Username</label>
                                        <input type="text" name="smtp_username" class="form-control"
                                               value="{{ old('smtp_username', $settings['email']->firstWhere('key', 'smtp_username')->value ?? '') }}"
                                               placeholder="your-email@gmail.com">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">SMTP Password</label>
                                        <input type="password" name="smtp_password" class="form-control"
                                               placeholder="Kosongkan jika tidak ingin mengubah">
                                        <small class="form-hint">Password atau App Password</small>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label required">Encryption</label>
                                        <select name="smtp_encryption" class="form-select">
                                            <option value="tls" {{ ($settings['email']->firstWhere('key', 'smtp_encryption')->value ?? 'tls') == 'tls' ? 'selected' : '' }}>TLS</option>
                                            <option value="ssl" {{ ($settings['email']->firstWhere('key', 'smtp_encryption')->value ?? '') == 'ssl' ? 'selected' : '' }}>SSL</option>
                                            <option value="none" {{ ($settings['email']->firstWhere('key', 'smtp_encryption')->value ?? '') == 'none' ? 'selected' : '' }}>None</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label required">From Email Address</label>
                                        <input type="email" name="smtp_from_address" class="form-control"
                                               value="{{ old('smtp_from_address', $settings['email']->firstWhere('key', 'smtp_from_address')->value ?? '') }}"
                                               placeholder="noreply@lphsukabumi.com">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label required">From Name</label>
                                    <input type="text" name="smtp_from_name" class="form-control"
                                           value="{{ old('smtp_from_name', $settings['email']->firstWhere('key', 'smtp_from_name')->value ?? 'LPH Doa Bangsa Sukabumi') }}"
                                           placeholder="LPH Doa Bangsa Sukabumi">
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti ti-device-floppy me-1"></i>
                                        Simpan Pengaturan
                                    </button>
                                    <button type="button" class="btn btn-outline-primary" onclick="testSmtp()">
                                        <i class="ti ti-send me-1"></i>
                                        Test Koneksi
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- WhatsApp Onesender Settings -->
                        <div class="tab-pane" id="tabs-whatsapp">
                            <form method="POST" action="{{ route('admin.settings.update') }}" id="whatsappSettingsForm">
                                @csrf
                                <h3 class="mb-4">Integrasi WhatsApp Onesender</h3>
                                <p class="text-secondary mb-4">
                                    Konfigurasikan integrasi WhatsApp menggunakan Onesender API untuk mengirim notifikasi otomatis.
                                </p>

                                <div class="mb-4">
                                    <label class="form-check form-switch">
                                        <input type="checkbox" name="whatsapp_enabled" class="form-check-input" value="1"
                                               {{ ($settings['whatsapp']->firstWhere('key', 'whatsapp_enabled')->value ?? '0') == '1' ? 'checked' : '' }}>
                                        <span class="form-check-label">Aktifkan WhatsApp Notifications</span>
                                    </label>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label required">Onesender API URL</label>
                                        <input type="url" name="whatsapp_api_url" class="form-control"
                                               value="{{ old('whatsapp_api_url', $settings['whatsapp']->firstWhere('key', 'whatsapp_api_url')->value ?? '') }}"
                                               placeholder="https://api.onesender.com/v1/messages">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label required">API Key</label>
                                        <input type="password" name="whatsapp_api_key" class="form-control"
                                               placeholder="Kosongkan jika tidak ingin mengubah">
                                        <small class="form-hint">API Key dari dashboard Onesender</small>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label required">Sender Number</label>
                                    <input type="text" name="whatsapp_sender_number" class="form-control"
                                           value="{{ old('whatsapp_sender_number', $settings['whatsapp']->firstWhere('key', 'whatsapp_sender_number')->value ?? '') }}"
                                           placeholder="628123456789">
                                    <small class="form-hint">Nomor WhatsApp pengirim (dengan kode negara 62)</small>
                                </div>

                                <hr class="my-4">

                                <h4 class="mb-3">Template Pesan</h4>

                                <div class="mb-3">
                                    <label class="form-label">Welcome Message</label>
                                    <textarea name="whatsapp_welcome_message" class="form-control" rows="3">{{ old('whatsapp_welcome_message', $settings['whatsapp']->firstWhere('key', 'whatsapp_welcome_message')->value ?? '') }}</textarea>
                                    <small class="form-hint">Pesan selamat datang untuk pengguna baru. Gunakan {name}, {email}</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Verification Message</label>
                                    <textarea name="whatsapp_verification_message" class="form-control" rows="3">{{ old('whatsapp_verification_message', $settings['whatsapp']->firstWhere('key', 'whatsapp_verification_message')->value ?? '') }}</textarea>
                                    <small class="form-hint">Template kode verifikasi. Gunakan {code}</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Payment Reminder</label>
                                    <textarea name="whatsapp_payment_reminder" class="form-control" rows="3">{{ old('whatsapp_payment_reminder', $settings['whatsapp']->firstWhere('key', 'whatsapp_payment_reminder')->value ?? '') }}</textarea>
                                    <small class="form-hint">Pengingat pembayaran. Gunakan {name}, {invoice_number}, {amount}, {due_date}</small>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Status Update</label>
                                    <textarea name="whatsapp_status_update" class="form-control" rows="3">{{ old('whatsapp_status_update', $settings['whatsapp']->firstWhere('key', 'whatsapp_status_update')->value ?? '') }}</textarea>
                                    <small class="form-hint">Update status permohonan. Gunakan {name}, {status}, {message}</small>
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti ti-device-floppy me-1"></i>
                                        Simpan Pengaturan
                                    </button>
                                    <button type="button" class="btn btn-outline-primary" onclick="testWhatsapp()">
                                        <i class="ti ti-send me-1"></i>
                                        Test Koneksi
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- reCAPTCHA Settings -->
                        <div class="tab-pane" id="tabs-recaptcha">
                            <form method="POST" action="{{ route('admin.settings.update') }}" id="recaptchaSettingsForm">
                                @csrf
                                <h3 class="mb-4">Google reCAPTCHA v2</h3>
                                <p class="text-secondary mb-4">
                                    Lindungi form autentikasi dari spam dan bot dengan Google reCAPTCHA v2.
                                    <a href="https://www.google.com/recaptcha/admin" target="_blank" class="link">
                                        Dapatkan reCAPTCHA Keys <i class="ti ti-external-link"></i>
                                    </a>
                                </p>

                                <div class="mb-4">
                                    <label class="form-check form-switch">
                                        <input type="checkbox" name="recaptcha_enabled" class="form-check-input" value="1"
                                               {{ ($settings['recaptcha']->firstWhere('key', 'recaptcha_enabled')->value ?? '0') == '1' ? 'checked' : '' }}>
                                        <span class="form-check-label">Aktifkan reCAPTCHA pada halaman autentikasi</span>
                                    </label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label required">reCAPTCHA Site Key</label>
                                    <input type="text" name="recaptcha_site_key" class="form-control"
                                           value="{{ old('recaptcha_site_key', $settings['recaptcha']->firstWhere('key', 'recaptcha_site_key')->value ?? '') }}"
                                           placeholder="6LdXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX">
                                    <small class="form-hint">Site key untuk client-side integration</small>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label required">reCAPTCHA Secret Key</label>
                                    <input type="password" name="recaptcha_secret_key" class="form-control"
                                           placeholder="Kosongkan jika tidak ingin mengubah">
                                    <small class="form-hint">Secret key untuk server-side validation</small>
                                </div>

                                <div class="alert alert-info">
                                    <i class="ti ti-info-circle me-2"></i>
                                    <strong>Info:</strong> reCAPTCHA akan ditampilkan pada halaman login, register, dan reset password.
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-device-floppy me-1"></i>
                                    Simpan Pengaturan
                                </button>
                            </form>
                        </div>

                        <!-- Appearance Settings -->
                        <div class="tab-pane" id="tabs-appearance">
                            <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" id="appearanceSettingsForm">
                                @csrf
                                <h3 class="mb-4">Pengaturan Tampilan</h3>
                                <p class="text-secondary mb-4">
                                    Sesuaikan logo dan tampilan aplikasi.
                                </p>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label">Logo Website</label>
                                        <div class="mb-3">
                                            @php
                                                $logoPath = $settings['appearance']->firstWhere('key', 'site_logo')->value ?? '../img/logo.webp';
                                            @endphp
                                            <img src="{{ asset($logoPath) }}" alt="Logo" class="img-thumbnail" style="max-height: 100px;">
                                        </div>
                                        <input type="file" name="site_logo" class="form-control" accept="image/*">
                                        <small class="form-hint">Format: JPG, PNG, WebP, SVG (Max: 2MB)</small>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Favicon</label>
                                        <div class="mb-3">
                                            @php
                                                $faviconPath = $settings['appearance']->firstWhere('key', 'site_favicon')->value ?? 'images/favicon.png';
                                            @endphp
                                            <img src="{{ asset($faviconPath) }}" alt="Favicon" class="img-thumbnail" style="max-height: 100px;">
                                        </div>
                                        <input type="file" name="site_favicon" class="form-control" accept="image/png,image/x-icon">
                                        <small class="form-hint">Format: PNG, ICO (16x16 atau 32x32 px)</small>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nama Website</label>
                                    <input type="text" name="site_name" class="form-control"
                                           value="{{ old('site_name', $settings['appearance']->firstWhere('key', 'site_name')->value ?? 'LPH Doa Bangsa Sukabumi') }}"
                                           placeholder="LPH Doa Bangsa Sukabumi">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Deskripsi Website</label>
                                    <textarea name="site_description" class="form-control" rows="3">{{ old('site_description', $settings['appearance']->firstWhere('key', 'site_description')->value ?? '') }}</textarea>
                                    <small class="form-hint">Deskripsi singkat untuk SEO dan meta tags</small>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-device-floppy me-1"></i>
                                    Simpan Pengaturan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Test SMTP Connection
        function testSmtp() {
            const email = prompt('Masukkan email untuk test:', '{{ auth()->user()->email }}');
            if (!email) return;

            const btn = event.target;
            const originalText = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<i class="ti ti-loader ti-spin me-1"></i> Mengirim...';

            fetch('{{ route('admin.settings.test-smtp') }}', {
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
                    alert('✅ ' + data.message);
                } else {
                    alert('❌ ' + data.message);
                }
            })
            .catch(error => {
                alert('❌ Error: ' + error.message);
            })
            .finally(() => {
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        }

        // Test WhatsApp Connection
        function testWhatsapp() {
            const number = prompt('Masukkan nomor WhatsApp untuk test (contoh: 628123456789):');
            if (!number) return;

            const btn = event.target;
            const originalText = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<i class="ti ti-loader ti-spin me-1"></i> Mengirim...';

            fetch('{{ route('admin.settings.test-whatsapp') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ test_number: number })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('✅ ' + data.message);
                } else {
                    alert('❌ ' + data.message);
                }
            })
            .catch(error => {
                alert('❌ Error: ' + error.message);
            })
            .finally(() => {
                btn.disabled = false;
                btn.innerHTML = originalText;
            });
        }
    </script>
    @endpush
</x-layouts.admin.app>
