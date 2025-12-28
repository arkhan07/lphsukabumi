<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Staff - {{ $siteSettings['name'] }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset($siteSettings['favicon']) }}">

    <!-- Tabler CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

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
            background: linear-gradient(135deg, #166F61 0%, #125950 100%);
        }
        .btn-primary {
            background-color: var(--tblr-primary) !important;
            border-color: var(--tblr-primary) !important;
        }
        .btn-primary:hover {
            background-color: #125950 !important;
            border-color: #125950 !important;
        }

        /* Floating Label Styles - Google Material Design */
        .floating-label {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .floating-label input {
            width: 100%;
            padding: 16px 16px 8px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.2s ease;
            background: white;
        }

        .floating-label input:focus {
            outline: none;
            border-color: var(--tblr-primary);
            box-shadow: 0 0 0 3px rgba(22, 111, 97, 0.1);
        }

        .floating-label label {
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

        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label {
            top: -8px;
            left: 12px;
            font-size: 12px;
            color: var(--tblr-primary);
            font-weight: 600;
        }

        .floating-label .input-icon {
            position: absolute;
            right: 16px;
            top: 16px;
            color: #9ca3af;
        }

        .floating-label input:focus ~ .input-icon {
            color: var(--tblr-primary);
        }
    </style>
</head>
<body class="d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark">
                    <img src="{{ asset($siteSettings['logo']) }}" height="60" alt="{{ $siteSettings['name'] }}">
                </a>
            </div>

            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login Staff Lembaga</h2>
                    <p class="text-secondary text-center mb-4">Portal khusus untuk staff dan manajemen LPH</p>

                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <div class="d-flex">
                                <div><i class="ti ti-check"></i></div>
                                <div class="ms-2">{{ session('status') }}</div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <div class="d-flex">
                                <div><i class="ti ti-alert-circle"></i></div>
                                <div class="ms-2">
                                    <h4 class="alert-title">Error!</h4>
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <!-- Email Field with Floating Label -->
                        <div class="floating-label">
                            <input type="email"
                                   name="email"
                                   id="email"
                                   placeholder=" "
                                   value="{{ old('email') }}"
                                   required
                                   autofocus>
                            <label for="email">Email</label>
                            <span class="input-icon">
                                <i class="ti ti-mail"></i>
                            </span>
                        </div>

                        <!-- Password Field with Floating Label -->
                        <div class="floating-label">
                            <input type="password"
                                   name="password"
                                   id="password"
                                   placeholder=" "
                                   required>
                            <label for="password">Kata Sandi</label>
                            <span class="input-icon">
                                <i class="ti ti-key"></i>
                            </span>
                        </div>

                        <div class="mb-3">
                            <label class="form-check">
                                <input type="checkbox" name="remember" class="form-check-input"/>
                                <span class="form-check-label">Ingat saya di perangkat ini</span>
                            </label>
                        </div>

                        @if($siteSettings['recaptcha_enabled'])
                        <!-- Google reCAPTCHA -->
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="{{ $siteSettings['recaptcha_site_key'] }}"></div>
                        </div>
                        @endif

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="ti ti-login me-1"></i>
                                Masuk
                            </button>
                        </div>
                    </form>

                    <div class="text-center text-secondary mt-3">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" tabindex="-1">Lupa kata sandi?</a>
                        @endif
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 text-center">
                            <small class="text-secondary">
                                Login untuk <strong>Pelaku Usaha</strong>?
                                <a href="{{ route('login') }}">Klik di sini</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-info mt-3" role="alert">
                <div class="d-flex">
                    <div><i class="ti ti-info-circle"></i></div>
                    <div class="ms-2">
                        <h4 class="alert-title">Akses Terbatas</h4>
                        <div class="text-secondary">Portal ini hanya untuk staff {{ $siteSettings['name'] }}. Role akan otomatis terdeteksi berdasarkan email Anda.</div>
                    </div>
                </div>
            </div>

            <div class="text-center text-white mt-3">
                <small>&copy; {{ date('Y') }} {{ $siteSettings['name'] }}. All rights reserved.</small>
            </div>
        </div>
    </div>

    <!-- Tabler Core -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
</body>
</html>
