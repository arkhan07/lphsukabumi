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

    <!-- Tabler CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --tblr-primary: #166F61;
            --tblr-primary-rgb: 22, 111, 97;
        }
        body {
            background-color: #f4f6fa;
        }
        .btn-primary {
            background-color: #166F61;
            border-color: #166F61;
        }
        .btn-primary:hover {
            background-color: #125950;
            border-color: #125950;
        }
    </style>
</head>
<body class="d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ route('home') }}" class="navbar-brand navbar-brand-autodark">
                    <img src="{{ asset($siteSettings['logo']) }}" height="60" alt="{{ $siteSettings['name'] }}">
                </a>
            </div>

            <div class="card card-md">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-primary" width="64" height="64" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                            <path d="M3 7l9 6l9 -6" />
                            <path d="M12 13l-9 -6" />
                            <path d="M21 7l-9 6" />
                        </svg>
                    </div>

                    <h2 class="h2 mb-4">Verifikasi Email Anda</h2>
                    <p class="text-muted mb-4">
                        Terima kasih telah mendaftar! Sebelum memulai, silakan verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan. Jika Anda tidak menerima email, kami dengan senang hati akan mengirimkan yang lain.
                    </p>

                    <!-- Session Status -->
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success text-start" role="alert">
                            <div class="d-flex">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                </div>
                                <div>
                                    Link verifikasi baru telah dikirimkan ke alamat email yang Anda berikan saat pendaftaran.
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="mt-4">
                        <form method="POST" action="{{ route('verification.send') }}" class="mb-2">
                            @csrf
                            <button type="submit" class="btn btn-primary w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                Kirim Ulang Email Verifikasi
                            </button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn w-100">
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="text-center text-muted mt-3">
                <small>&copy; {{ date('Y') }} {{ $siteSettings['name'] }}. All rights reserved.</small><br>
                <small class="text-muted">Lembaga Pemeriksa Halal Terdaftar BPJPH</small>
            </div>
        </div>
    </div>

    <!-- Tabler Core -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
</body>
</html>
