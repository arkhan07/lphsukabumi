<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="id" data-theme="light">

<x-auth.head>
    <x-slot name="title">Login Staff Lembaga</x-slot>
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
                    <h4 class="mb-12">Login Staff Lembaga</h4>
                    <p class="mb-32 text-secondary-light text-lg">Portal khusus untuk staff dan manajemen LPH</p>
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

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-16">
                        <label class="form-label fw-medium" style="margin-bottom: 8px; color: var(--neutral-700); font-size: 14px;">
                            <i class="ri-user-line" style="margin-right: 4px;"></i>
                            Pilih Role
                        </label>
                        <select
                            name="role"
                            class="form-select h-56-px bg-neutral-50 radius-12"
                            style="border: 1px solid var(--border-neutral-300); padding-left: 16px;"
                            required
                        >
                            <option value="">-- Pilih Role Anda --</option>
                            <option value="admin-lph">Admin LPH</option>
                            <option value="penyedia-halal">Penyedia Halal</option>
                            <option value="manajer-teknis">Manajer Teknis</option>
                            <option value="auditor-halal">Auditor Halal</option>
                        </select>
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

                    <div class="position-relative mb-20">
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

                    <div class="">
                        <div class="d-flex justify-content-between gap-2">
                            <div class="form-check style-check d-flex align-items-center">
                                <input
                                    class="form-check-input border border-neutral-300"
                                    type="checkbox"
                                    name="remember"
                                    id="remeber"
                                >
                                <label class="form-check-label" for="remeber">Ingat Saya</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-primary-600 fw-medium">Lupa Kata Sandi?</a>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                        Masuk
                    </button>

                    <div class="mt-24 text-center">
                        <p class="mb-0 text-secondary-light" style="font-size: 0.875rem;">
                            Login untuk <strong>Pelaku Usaha</strong>? <a href="{{ route('login') }}" class="text-primary-600 fw-semibold">Klik di sini</a>
                        </p>
                    </div>

                    <div class="mt-24" style="background-color: var(--primary-50); border-radius: 12px; padding: 12px 16px; border-left: 4px solid var(--primary-600);">
                        <div class="d-flex align-items-start gap-2">
                            <i class="ri-information-line" style="color: var(--primary-600); font-size: 18px; margin-top: 2px;"></i>
                            <p class="mb-0" style="font-size: 0.813rem; color: var(--neutral-700); line-height: 1.5;">
                                <strong>Akses Terbatas:</strong> Portal ini hanya untuk staff LPH Doa Bangsa Sukabumi.
                            </p>
                        </div>
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
