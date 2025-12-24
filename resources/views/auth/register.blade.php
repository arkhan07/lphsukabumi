<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="id" data-theme="light">

<x-auth.head>
    <x-slot name="title">Daftar Akun Pelaku Usaha</x-slot>
</x-auth.head>

<body>
    <section class="auth bg-base d-flex flex-wrap">
        <div class="auth-left d-lg-block d-none">
            <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                <img src="{{ asset('assets/images/auth/auth-img.png') }}" alt="LPH Doa Bangsa" style="max-width: 100%; height: auto;">
            </div>
        </div>
        <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <a href="{{ url('/') }}" class="mb-40 max-w-290-px">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="LPH Doa Bangsa" style="max-height: 60px;">
                    </a>
                    <h4 class="mb-12">Daftar Akun Baru</h4>
                    <p class="mb-32 text-secondary-light text-lg">Daftar sebagai Pelaku Usaha untuk mengajukan sertifikasi halal</p>
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

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="solar:user-outline"></iconify-icon>
                        </span>
                        <input
                            type="text"
                            name="name"
                            class="form-control h-56-px bg-neutral-50 radius-12"
                            placeholder="Nama Lengkap"
                            value="{{ old('name') }}"
                            required
                            autofocus
                        >
                    </div>

                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input
                            type="email"
                            name="email"
                            class="form-control h-56-px bg-neutral-50 radius-12"
                            placeholder="Email"
                            value="{{ old('email') }}"
                            required
                        >
                    </div>

                    <div class="position-relative mb-16">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span>
                            <input
                                type="password"
                                name="password"
                                class="form-control h-56-px bg-neutral-50 radius-12"
                                id="your-password"
                                placeholder="Kata Sandi"
                                required
                            >
                        </div>
                        <span
                            class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                            data-toggle="#your-password"
                        ></span>
                    </div>

                    <div class="position-relative mb-20">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span>
                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control h-56-px bg-neutral-50 radius-12"
                                id="confirm-password"
                                placeholder="Konfirmasi Kata Sandi"
                                required
                            >
                        </div>
                        <span
                            class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                            data-toggle="#confirm-password"
                        ></span>
                    </div>

                    <div class="mb-16" style="background-color: var(--primary-50); border-radius: 8px; padding: 12px; border-left: 3px solid var(--primary-600);">
                        <p class="mb-0" style="font-size: 0.813rem; color: var(--neutral-700); line-height: 1.5;">
                            <i class="ri-information-line" style="color: var(--primary-600);"></i>
                            <strong>Catatan:</strong> Pendaftaran hanya untuk Pelaku Usaha. Akun staff lembaga akan ditambahkan oleh Admin.
                        </p>
                    </div>

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-24">
                        Daftar
                    </button>

                    <div class="mt-32 text-center text-sm">
                        <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="text-primary-600 fw-semibold">Login di sini</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery (needed for password toggle) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        // ================== Password Show Hide Js Start ==========
        function initializePasswordToggle(toggleSelector) {
            $(toggleSelector).on("click", function() {
                $(this).toggleClass("ri-eye-off-line");
                var input = $($(this).attr("data-toggle"));
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        }
        // Call the function
        initializePasswordToggle(".toggle-password");
        // ========================= Password Show Hide Js End ===========================
    </script>
</body>
</html>
