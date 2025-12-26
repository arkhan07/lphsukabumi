<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar Akun - LPH Doa Bangsa Sukabumi</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- Tabler CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

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
    </style>
</head>
<body class="d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark">
                    <img src="{{ '../img/logo.webp' }}" height="60" alt="LPH Doa Bangsa">
                </a>
            </div>

            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Daftar Akun Baru</h2>
                    <p class="text-secondary text-center mb-4">Daftar sebagai Pelaku Usaha untuk mengajukan sertifikasi halal</p>

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

                    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="ti ti-user"></i>
                                </span>
                                <input type="text" name="name" class="form-control"
                                       placeholder="Nama lengkap Anda"
                                       value="{{ old('name') }}"
                                       required autofocus>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="ti ti-mail"></i>
                                </span>
                                <input type="email" name="email" class="form-control"
                                       placeholder="email@example.com"
                                       value="{{ old('email') }}"
                                       required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nomor WhatsApp</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="ti ti-brand-whatsapp"></i>
                                </span>
                                <input type="text" name="whatsapp" class="form-control"
                                       placeholder="08xxxxxxxxxx"
                                       value="{{ old('whatsapp') }}"
                                       required>
                            </div>
                            <small class="form-hint">Gunakan format: 08xxxxxxxxxx atau 628xxxxxxxxxx</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kata Sandi</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="ti ti-key"></i>
                                </span>
                                <input type="password" name="password" class="form-control"
                                       placeholder="Minimal 8 karakter"
                                       required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Kata Sandi</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="ti ti-key"></i>
                                </span>
                                <input type="password" name="password_confirmation" class="form-control"
                                       placeholder="Ulangi kata sandi"
                                       required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="alert alert-info" role="alert">
                                <div class="d-flex">
                                    <div><i class="ti ti-info-circle"></i></div>
                                    <div class="ms-2">
                                        <small>
                                            <strong>Catatan:</strong> Pendaftaran hanya untuk Pelaku Usaha.
                                            Akun staff lembaga akan ditambahkan oleh Admin.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="ti ti-user-plus me-1"></i>
                                Daftar
                            </button>
                        </div>
                    </form>

                    <div class="text-center text-secondary mt-3">
                        Sudah punya akun? <a href="{{ route('login') }}" tabindex="-1">Login di sini</a>
                    </div>
                </div>
            </div>

            <div class="text-center text-white mt-3">
                <small>Dengan mendaftar, Anda menyetujui <a href="#" class="text-white text-decoration-underline">Syarat & Ketentuan</a> kami.</small>
            </div>

            <div class="text-center text-white mt-2">
                <small>&copy; {{ date('Y') }} LPH Doa Bangsa Sukabumi. All rights reserved.</small>
            </div>
        </div>
    </div>

    <!-- Tabler Core -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
</body>
</html>
