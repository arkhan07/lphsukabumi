<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="id" data-theme="light">

<x-auth.head>
    <x-slot name="title">Lupa Kata Sandi</x-slot>
</x-auth.head>

<body>
    <section class="auth forgot-password-page bg-base d-flex flex-wrap">
        <div class="auth-left d-lg-block d-none">
            <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                <img src="{{ asset('assets/images/auth/forgot-pass-img.png') }}" alt="Lupa Password" style="max-width: 100%; height: auto;">
            </div>
        </div>
        <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <a href="{{ url('/') }}" class="mb-40 max-w-290-px">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="LPH Doa Bangsa" style="max-height: 60px;">
                    </a>
                    <h4 class="mb-12">Lupa Kata Sandi</h4>
                    <p class="mb-32 text-secondary-light text-lg">Masukkan alamat email yang terkait dengan akun Anda dan kami akan mengirimkan link untuk reset kata sandi Anda.</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="margin: 0; padding-left: 20px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="icon-field">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input
                            type="email"
                            name="email"
                            class="form-control h-56-px bg-neutral-50 radius-12"
                            placeholder="Masukkan Email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                        >
                    </div>

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                        Kirim Link Reset Password
                    </button>

                    <div class="text-center mt-24">
                        <a href="{{ route('login') }}" class="text-primary-600 fw-bold">Kembali ke Login</a>
                    </div>

                    <div class="mt-120 text-center text-sm">
                        <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="text-primary-600 fw-semibold">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
