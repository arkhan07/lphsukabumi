<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - LPH Doa Bangsa Sukabumi</title>

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

        .register-container {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
        }

        .register-left {
            background: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            max-height: 100vh;
            overflow-y: auto;
        }

        .register-right {
            background: linear-gradient(135deg, #7C3AED 0%, #5B21B6 100%);
            padding: 60px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .register-right::before {
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

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
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

        .role-info {
            background: #F3F4F6;
            padding: 12px;
            border-radius: 8px;
            margin-top: 8px;
            font-size: 13px;
            line-height: 1.5;
            color: #4B5563;
        }

        .role-info strong {
            color: #166F61;
            display: block;
            margin-bottom: 2px;
        }

        .register-button {
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

        .register-button:hover {
            background: #125950;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #6B7280;
            font-size: 14px;
        }

        .login-link a {
            color: #166F61;
            font-weight: 600;
            text-decoration: none;
        }

        .login-link a:hover {
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

        .roles-grid {
            display: grid;
            gap: 15px;
            margin-top: 20px;
        }

        .role-card {
            background: #F9FAFB;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #7C3AED;
        }

        .role-card h4 {
            font-weight: 600;
            margin-bottom: 5px;
            color: #7C3AED;
        }

        .role-card p {
            font-size: 13px;
            color: #6B7280;
            margin: 0;
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
            .register-container {
                grid-template-columns: 1fr;
            }

            .register-right {
                display: none;
            }

            .register-left {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Left Side - Register Form -->
        <div class="register-left">
            <div>
                <div class="logo-section">
                    <div class="logo-text">LPH DOA BANGSA</div>
                    <p style="color: #6B7280; font-size: 14px;">Sukabumi</p>
                </div>

                <div class="form-section">
                    <h1>Daftar Akun Baru</h1>
                    <p>Buat akun untuk mengakses sistem sertifikasi halal</p>

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

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama lengkap Anda"
                                required
                                autofocus
                            >
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email Anda"
                                required
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
                                <button type="button" onclick="togglePassword('password')">
                                    <svg id="eye-icon-1" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                            <div class="password-toggle">
                                <input
                                    type="password"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    placeholder="Masukkan ulang kata sandi"
                                    required
                                >
                                <button type="button" onclick="togglePassword('password_confirmation')">
                                    <svg id="eye-icon-2" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role">Daftar Sebagai</label>
                            <select id="role" name="role" required onchange="showRoleInfo(this.value)">
                                <option value="">-- Pilih Role --</option>
                                <option value="pelaku_usaha" {{ old('role') == 'pelaku_usaha' ? 'selected' : '' }}>Pelaku Usaha</option>
                                <option value="penyedia_halal" {{ old('role') == 'penyedia_halal' ? 'selected' : '' }}>Penyedia Halal</option>
                                <option value="admin_lph" {{ old('role') == 'admin_lph' ? 'selected' : '' }}>Admin LPH</option>
                                <option value="manajer_teknis" {{ old('role') == 'manajer_teknis' ? 'selected' : '' }}>Manajer Teknis</option>
                                <option value="auditor_halal" {{ old('role') == 'auditor_halal' ? 'selected' : '' }}>Auditor Halal</option>
                            </select>

                            <div id="role-info" class="role-info" style="display: none;"></div>
                        </div>

                        <button type="submit" class="register-button">
                            Daftar Sekarang
                        </button>
                    </form>

                    <div class="login-link">
                        Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
                    </div>
                </div>
            </div>

            <div class="footer-text">
                <p>&copy; 2024 LPH Doa Bangsa Sukabumi. All rights reserved.</p>
                <p style="margin-top: 5px;">Lembaga Pemeriksa Halal Terdaftar BPJPH</p>
            </div>
        </div>

        <!-- Right Side - Information -->
        <div class="register-right">
            <div>
                <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 20px;">
                    Bergabunglah dengan<br>LPH Doa Bangsa
                </h2>

                <div class="content-box">
                    <h2>Pilih Role Sesuai Kebutuhan Anda</h2>

                    <div class="roles-grid">
                        <div class="role-card">
                            <h4>🏢 Pelaku Usaha</h4>
                            <p>Untuk perusahaan yang ingin mengajukan sertifikasi halal produknya</p>
                        </div>

                        <div class="role-card">
                            <h4>✅ Penyedia Halal</h4>
                            <p>Untuk melakukan verifikasi internal produk dan proses halal</p>
                        </div>

                        <div class="role-card">
                            <h4>⚙️ Admin LPH</h4>
                            <p>Untuk admin operasional lembaga pemeriksa halal</p>
                        </div>

                        <div class="role-card">
                            <h4>📋 Manajer Teknis</h4>
                            <p>Untuk penugasan dan koordinasi tim auditor halal</p>
                        </div>

                        <div class="role-card">
                            <h4>🔍 Auditor Halal</h4>
                            <p>Untuk melakukan audit dan pemeriksaan halal eksternal</p>
                        </div>
                    </div>
                </div>

                <div class="info-box">
                    <h3>ℹ️ Informasi Pendaftaran</h3>
                    <p>
                        Pastikan data yang Anda masukkan benar dan valid.
                        Akun Anda akan diverifikasi oleh admin LPH sebelum dapat digunakan.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px; position: relative; z-index: 1;">
                <p style="font-size: 14px; opacity: 0.9;">
                    Proses sertifikasi halal yang transparan, akurat, dan terpercaya
                </p>
            </div>
        </div>
    </div>

    <script>
        const roleDescriptions = {
            pelaku_usaha: '<strong>Pelaku Usaha:</strong> Dapat mengajukan permohonan sertifikasi halal, memantau status pengajuan, dan mengakses sertifikat halal yang telah diterbitkan.',
            penyedia_halal: '<strong>Penyedia Halal:</strong> Dapat melakukan verifikasi internal terhadap produk dan proses halal di perusahaan atau organisasi.',
            admin_lph: '<strong>Admin LPH:</strong> Mengelola operasional lembaga, memproses pengajuan sertifikasi, dan mengelola data master sistem.',
            manajer_teknis: '<strong>Manajer Teknis:</strong> Menugaskan auditor untuk setiap pengajuan, memantau progress audit, dan menyetujui hasil audit.',
            auditor_halal: '<strong>Auditor Halal:</strong> Melakukan audit lapangan, memeriksa dokumen, dan membuat laporan hasil audit halal.'
        };

        function showRoleInfo(role) {
            const roleInfo = document.getElementById('role-info');
            if (role && roleDescriptions[role]) {
                roleInfo.innerHTML = roleDescriptions[role];
                roleInfo.style.display = 'block';
            } else {
                roleInfo.style.display = 'none';
            }
        }

        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(fieldId === 'password' ? 'eye-icon-1' : 'eye-icon-2');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<path d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"/><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"/>';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>';
            }
        }

        // Show role info if old value exists
        document.addEventListener('DOMContentLoaded', function() {
            const roleSelect = document.getElementById('role');
            if (roleSelect.value) {
                showRoleInfo(roleSelect.value);
            }
        });
    </script>
</body>
</html>
