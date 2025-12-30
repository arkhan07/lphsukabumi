<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - {{ $siteSettings['name'] }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset($siteSettings['favicon']) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($siteSettings['favicon']) }}">

    <!-- Tabler CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

    @if($siteSettings['recaptcha_enabled'])
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif

    <style>
        :root {
            --tblr-primary: #166F61;
            --tblr-primary-rgb: 22, 111, 97;
        }
        body {
            background-color: #f4f6fa;
        }
        .brand-color {
            color: #166F61;
        }
        .btn-primary {
            background-color: #166F61;
            border-color: #166F61;
        }
        .btn-primary:hover {
            background-color: #125950;
            border-color: #125950;
        }
        .form-control:focus {
            border-color: #166F61;
            box-shadow: 0 0 0 0.25rem rgba(22, 111, 97, 0.25);
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
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login ke akun Anda</h2>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <div class="d-flex">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                </div>
                                <div>{{ session('status') }}</div>
                            </div>
                        </div>
                    @endif

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <div class="d-flex">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>
                                </div>
                                <div>
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="email@example.com"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                            >
                        </div>

                        <div class="mb-2">
                            <label class="form-label">
                                Password
                                @if (Route::has('password.request'))
                                    <span class="form-label-description">
                                        <a href="{{ route('password.request') }}">Lupa password?</a>
                                    </span>
                                @endif
                            </label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Password"
                                required
                                autocomplete="current-password"
                            >
                        </div>

                        <div class="mb-2">
                            <label class="form-check">
                                <input type="checkbox" name="remember" class="form-check-input"/>
                                <span class="form-check-label">Ingat saya di perangkat ini</span>
                            </label>
                        </div>

                        @if($siteSettings['recaptcha_enabled'])
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="{{ $siteSettings['recaptcha_site_key'] }}"></div>
                        </div>
                        @endif

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center text-muted mt-3">
                Belum punya akun? <a href="{{ route('register') }}" tabindex="-1">Daftar sekarang</a>
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
