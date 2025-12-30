<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Konfirmasi Password - {{ $siteSettings['name'] }}</title>

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
                <div class="card-body text-center">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-primary" width="64" height="64" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                            <path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            <path d="M12 12l0 2.5" />
                        </svg>
                    </div>

                    <h2 class="h2 mb-4">Area Aman</h2>
                    <p class="text-muted mb-4">
                        Ini adalah area aman dari aplikasi. Silakan konfirmasi kata sandi Anda sebelum melanjutkan.
                    </p>

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger text-start" role="alert">
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

                    <!-- Confirm Password Form -->
                    <form method="POST" action="{{ route('password.confirm') }}" autocomplete="off" class="text-start">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label required">Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Password"
                                required
                                autofocus
                                autocomplete="current-password"
                            >
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Konfirmasi</button>
                        </div>
                    </form>
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
