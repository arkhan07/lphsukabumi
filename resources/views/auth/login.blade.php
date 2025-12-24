<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - LPH Doa Bangsa Sukabumi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #374151;
            font-weight: 500;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #166F61;
            box-shadow: 0 0 0 3px rgba(22, 111, 97, 0.1);
        }

        .password-toggle {
            position: relative;
        }

        .password-toggle button {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #6B7280;
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

        .footer-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #E5E7EB;
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
                    <div class="logo-text">LPH DOA BANGSA</div>
                    <p style="color: #6B7280; font-size: 14px;">Sukabumi</p>
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

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email Anda"
                                required
                                autofocus
                            >
                        </div>

                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <div class="password-toggle">
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Masukkan kata sandi"
                                    required
                                >
                                <button type="button" onclick="togglePassword()">
                                    <svg id="eye-icon" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="forgot-password">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Lupa Kata Sandi?</a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                            <label style="display: flex; align-items: center; cursor: pointer;">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    style="width: auto; margin-right: 8px;"
                                >
                                <span style="font-weight: 400;">Ingat Saya</span>
                            </label>
                        </div>

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
                <p>&copy; 2024 LPH Doa Bangsa Sukabumi. All rights reserved.</p>
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

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<path d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"/><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"/>';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>';
            }
        }
    </script>
</body>
</html>
