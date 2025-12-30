<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Verifikasi Email - {{ $siteSettings['name'] }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset($siteSettings['favicon']) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($siteSettings['favicon']) }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .verify-container {
            width: 100%;
            max-width: 480px;
        }

        .verify-card {
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
            line-height: 1.6;
        }

        .icon-wrapper {
            text-align: center;
            margin-bottom: 24px;
        }

        .icon-wrapper i {
            font-size: 64px;
            color: #667eea;
        }

        .btn-primary {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-bottom: 12px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-secondary {
            width: 100%;
            padding: 14px;
            background: transparent;
            color: #64748b;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-success {
            background: #d1fae5;
            border-left: 4px solid #10b981;
            color: #065f46;
        }

        .footer-text {
            text-align: center;
            margin-top: 24px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.9);
        }

        .button-group {
            margin-top: 24px;
        }

        @media (max-width: 480px) {
            .verify-card {
                padding: 30px 24px;
            }

            .logo-section img {
                max-height: 60px;
            }

            .icon-wrapper i {
                font-size: 48px;
            }
        }
    </style>
</head>
<body>
    <div class="verify-container">
        <div class="verify-card">
            <!-- Logo Inside Card -->
            <div class="logo-section">
                <img src="{{ asset($siteSettings['logo']) }}" alt="{{ $siteSettings['name'] }}">
                <div class="logo-text">{{ $siteSettings['name'] }}</div>
                <div class="logo-subtitle">{{ $siteSettings['description'] }}</div>
            </div>

            <!-- Icon -->
            <div class="icon-wrapper">
                <i class="ti ti-mail-check"></i>
            </div>

            <!-- Form Title -->
            <h1 class="form-title">Verifikasi Email Anda</h1>
            <p class="form-subtitle">
                Terima kasih telah mendaftar! Sebelum memulai, silakan verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan. Jika Anda tidak menerima email, kami dengan senang hati akan mengirimkan yang lain.
            </p>

            <!-- Session Status -->
            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success">
                    Link verifikasi baru telah dikirimkan ke alamat email yang Anda berikan saat pendaftaran.
                </div>
            @endif

            <!-- Action Buttons -->
            <div class="button-group">
                <form method="POST" action="{{ route('verification.send') }}" style="margin-bottom: 12px;">
                    @csrf
                    <button type="submit" class="btn-primary">
                        Kirim Ulang Email Verifikasi
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-secondary">
                        Keluar
                    </button>
                </form>
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
