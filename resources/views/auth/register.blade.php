<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar Akun - {{ $siteSettings['name'] }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset($siteSettings['favicon']) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($siteSettings['favicon']) }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    @if($siteSettings['recaptcha_enabled'])
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #166F61 0%, #125950 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-container {
            width: 100%;
            max-width: 480px;
        }

        .register-card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .logo-section {
            text-align: center;
            margin-bottom: 32px;
        }

        .logo-section img {
            max-height: 70px;
            width: auto;
            margin-bottom: 12px;
        }

        .logo-text {
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 4px;
        }

        .logo-subtitle {
            font-size: 14px;
            color: #64748b;
        }

        .form-title {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
            text-align: center;
        }

        .form-subtitle {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 24px;
            text-align: center;
        }

        /* Floating Label Styles */
        .form-group {
            position: relative;
            margin-bottom: 24px;
        }

        .form-control {
            width: 100%;
            padding: 16px 16px 8px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.2s ease;
            background: white;
        }

        .form-control:focus {
            outline: none;
            border-color: #166F61;
            box-shadow: 0 0 0 3px rgba(22, 111, 97, 0.1);
        }

        .form-label {
            position: absolute;
            left: 16px;
            top: 16px;
            font-size: 16px;
            color: #6b7280;
            pointer-events: none;
            transition: all 0.2s ease;
            background: white;
            padding: 0 4px;
        }

        .form-control:focus + .form-label,
        .form-control:not(:placeholder-shown) + .form-label {
            top: -8px;
            left: 12px;
            font-size: 12px;
            color: #166F61;
            font-weight: 600;
        }

        .form-hint {
            font-size: 12px;
            color: #64748b;
            margin-top: 4px;
        }

        .btn-register {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #166F61 0%, #125950 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(22, 111, 97, 0.4);
        }

        .btn-register:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            margin-top: 24px;
            font-size: 14px;
            color: #64748b;
        }

        .login-link a {
            color: #166F61;
            font-weight: 600;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-error {
            background: #fee2e2;
            border-left: 4px solid #ef4444;
            color: #991b1b;
        }

        .alert-success {
            background: #d1fae5;
            border-left: 4px solid #10b981;
            color: #065f46;
        }

        .alert-info {
            background: #dbeafe;
            border-left: 4px solid #3b82f6;
            color: #1e40af;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .footer-text {
            text-align: center;
            margin-top: 24px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.9);
        }

        .recaptcha-wrapper {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        @media (max-width: 480px) {
            .register-card {
                padding: 30px 24px;
            }

            .logo-section img {
                max-height: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <!-- Logo Inside Card -->
            <div class="logo-section">
                <img src="{{ asset($siteSettings['logo']) }}" alt="{{ $siteSettings['name'] }}">
                <div class="logo-text">{{ $siteSettings['name'] }}</div>
                <div class="logo-subtitle">{{ $siteSettings['description'] }}</div>
            </div>

            <!-- Form Title -->
            <h1 class="form-title">Daftar Akun Baru</h1>
            <p class="form-subtitle">Daftar sebagai Pelaku Usaha untuk mengajukan sertifikasi halal</p>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Info Alert -->
            <div class="alert alert-info">
                <strong>Catatan:</strong> Pendaftaran hanya untuk Pelaku Usaha. Akun staff lembaga akan ditambahkan oleh Admin.
            </div>

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name Field -->
                <div class="form-group">
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        placeholder=" "
                        value="{{ old('name') }}"
                        required
                        autofocus
                        autocomplete="name"
                    >
                    <label for="name" class="form-label">Nama Lengkap</label>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder=" "
                        value="{{ old('email') }}"
                        required
                        autocomplete="username"
                    >
                    <label for="email" class="form-label">Email</label>
                </div>

                <!-- WhatsApp Field -->
                <div class="form-group">
                    <input
                        type="text"
                        id="whatsapp"
                        name="whatsapp"
                        class="form-control"
                        placeholder=" "
                        value="{{ old('whatsapp') }}"
                        required
                        autocomplete="tel"
                    >
                    <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                </div>
                <small class="form-hint" style="display: block; margin-top: -16px; margin-bottom: 20px;">Gunakan format: 08xxxxxxxxxx atau 628xxxxxxxxxx</small>

                <!-- Password Field -->
                <div class="form-group">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        placeholder=" "
                        required
                        autocomplete="new-password"
                    >
                    <label for="password" class="form-label">Kata Sandi</label>
                </div>
                <small class="form-hint" style="display: block; margin-top: -16px; margin-bottom: 20px;">Minimal 8 karakter</small>

                <!-- Password Confirmation Field -->
                <div class="form-group">
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="form-control"
                        placeholder=" "
                        required
                        autocomplete="new-password"
                    >
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                </div>

                @if($siteSettings['recaptcha_enabled'])
                <!-- Google reCAPTCHA -->
                <div class="recaptcha-wrapper">
                    <div class="g-recaptcha" data-sitekey="{{ $siteSettings['recaptcha_site_key'] }}"></div>
                </div>
                @endif

                <!-- Register Button -->
                <button type="submit" class="btn-register">
                    Daftar
                </button>
            </form>

            <!-- Login Link -->
            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-text">
            <p>&copy; {{ date('Y') }} {{ $siteSettings['name'] }}. All rights reserved.</p>
            <p style="margin-top: 6px; opacity: 0.8;">Lembaga Pemeriksa Halal Terdaftar BPJPH</p>
        </div>
    </div>
</body>
</html>
