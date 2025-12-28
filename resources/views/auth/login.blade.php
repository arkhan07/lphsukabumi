<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - {{ $siteSettings['name'] }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset($siteSettings['favicon']) }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @if($siteSettings['recaptcha_enabled'])
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
        }

        .login-left {
            background: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .login-right {
            background: linear-gradient(135deg, #7C3AED 0%, #5B21B6 100%);
            padding: 60px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .login-right::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        }

        .logo-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-section img {
            max-height: 80px;
            width: auto;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: #166F61;
            margin-top: 10px;
        }

        .form-section h1 {
            font-size: 28px;
            font-weight: 600;
            color: #1F2937;
            margin-bottom: 10px;
        }

        .form-section p {
            color: #6B7280;
            margin-bottom: 30px;
        }

        /* Floating Label Styles - Google Material Design */
        .floating-label {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .floating-label input {
            width: 100%;
            padding: 16px 16px 8px 16px;
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .floating-label input:focus {
            outline: none;
            border-color: #166F61;
            box-shadow: 0 0 0 3px rgba(22, 111, 97, 0.1);
        }

        .floating-label label {
            position: absolute;
            left: 16px;
            top: 16px;
            font-size: 14px;
            color: #6B7280;
            pointer-events: none;
            transition: all 0.2s ease;
            background: white;
            padding: 0 4px;
        }

        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label {
            top: -8px;
            left: 12px;
            font-size: 12px;
            color: #166F61;
            font-weight: 600;
        }

        .forgot-password {
            text-align: right;
            margin-top: 8px;
        }

        .forgot-password a {
            color: #166F61;
            font-size: 14px;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .login-button {
            width: 100%;
            padding: 14px;
            background: #166F61;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .login-button:hover {
            background: #125950;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #6B7280;
            font-size: 14px;
        }

        .register-link a {
            color: #166F61;
            font-weight: 600;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .info-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 12px;
            margin-top: 20px;
        }

        .info-box h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .info-box p {
            font-size: 14px;
            line-height: 1.6;
            opacity: 0.9;
        }

        .content-box {
            background: white;
            color: #1F2937;
            padding: 30px;
            border-radius: 16px;
            margin-top: 30px;
            position: relative;
            z-index: 1;
        }

        .content-box h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #7C3AED;
        }

        .service-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        .service-item h4 {
            font-weight: 600;
            margin-bottom: 10px;
            color: #7C3AED;
        }

        .service-item ul {
            list-style: none;
            padding: 0;
        }

        .service-item li {
            padding: 4px 0;
            font-size: 14px;
            color: #4B5563;
        }

        .service-item li:before {
            content: "• ";
            color: #7C3AED;
            font-weight: bold;
            margin-right: 8px;
        }

        .footer-text {
            text-align: center;
            color: #9CA3AF;
            font-size: 12px;
            margin-top: 10px;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-error {
            background: #FEE2E2;
            border: 1px solid #FCA5A5;
            color: #991B1B;
        }

        .alert-success {
            background: #D1FAE5;
            border: 1px solid #6EE7B7;
            color: #065F46;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            margin-right: 8px;
            cursor: pointer;
        }

        .remember-me label {
            font-size: 14px;
            color: #374151;
            cursor: pointer;
            margin: 0;
        }

        @media (max-width: 768px) {
            .login-container {
                grid-template-columns: 1fr;
            }

            .login-right {
                display: none;
            }

            .login-left {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Left Side - Login Form -->
        <div class="login-left">
            <div>
                <div class="logo-section">
                    <img src="{{ asset($siteSettings['logo']) }}" alt="{{ $siteSettings['name'] }}">
                    <div class="logo-text">{{ $siteSettings['name'] }}</div>
                    <p style="color: #6B7280; font-size: 14px;">{{ $siteSettings['description'] }}</p>
                </div>

                <div class="form-section">
                    <h1>Selamat Datang</h1>
                    <p>Login untuk mengakses sistem sertifikasi halal</p>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-error">
                            <ul style="margin: 0; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Field with Floating Label -->
                        <div class="floating-label">
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder=" "
                                required
                                autofocus
                            >
                            <label for="email">Email</label>
                        </div>

                        <!-- Password Field with Floating Label -->
                        <div class="floating-label">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder=" "
                                required
                            >
                            <label for="password">Kata Sandi</label>
                            <div class="forgot-password">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Lupa Kata Sandi?</a>
                                @endif
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="remember-me">
                            <input
                                type="checkbox"
                                name="remember"
                                id="remember"
                            >
                            <label for="remember">Ingat Saya</label>
                        </div>

                        @if($siteSettings['recaptcha_enabled'])
                        <!-- Google reCAPTCHA -->
                        <div style="margin-bottom: 20px;">
                            <div class="g-recaptcha" data-sitekey="{{ $siteSettings['recaptcha_site_key'] }}"></div>
                        </div>
                        @endif

                        <button type="submit" class="login-button">
                            Masuk
                        </button>
                    </form>

                    <div class="register-link">
                        Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
                    </div>
                </div>
            </div>

            <div class="footer-text">
                <p>&copy; {{ date('Y') }} {{ $siteSettings['name'] }}. All rights reserved.</p>
                <p style="margin-top: 5px;">Lembaga Pemeriksa Halal Terdaftar BPJPH</p>
            </div>
        </div>

        <!-- Right Side - Information -->
        <div class="login-right">
            <div>
                <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">
                    Lembaga Pemeriksa Halal<br>Doa Bangsa Sukabumi
                </h2>

                <div class="content-box">
                    <h2>Layanan Sertifikasi Halal</h2>

                    <div class="service-grid">
                        <div class="service-item">
                            <h4>Produk yang Dapat Disertifikasi:</h4>
                            <ul>
                                <li>Makanan & Minuman</li>
                                <li>Kosmetik & Perawatan</li>
                                <li>Obat-obatan</li>
                                <li>Produk Kimia</li>
                                <li>Produk Biologi</li>
                                <li>Produk Rekayasa Genetik</li>
                            </ul>
                        </div>

                        <div class="service-item">
                            <h4>Layanan Kami:</h4>
                            <ul>
                                <li>Sertifikasi Halal</li>
                                <li>Audit Halal</li>
                                <li>Konsultasi Halal</li>
                                <li>Pelatihan SJH</li>
                                <li>Pendampingan</li>
                                <li>Perpanjangan Sertifikat</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="info-box">
                    <h3>ℹ️ Informasi</h3>
                    <p>
                        Disarankan menggunakan Google Chrome versi terbaru untuk hasil terbaik.
                        Pastikan koneksi internet Anda stabil untuk proses yang lancar.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px; position: relative; z-index: 1;">
                <p style="font-size: 14px; opacity: 0.9;">
                    Terhubung dengan BPJPH untuk sertifikasi halal yang sah dan terpercaya
                </p>
            </div>
        </div>
    </div>
</body>
</html>
