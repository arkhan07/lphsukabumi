<x-layouts.admin.app>
    <x-slot name="title">Edit Pengguna</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Edit Pengguna</h2>
            <p class="text-secondary-light mb-0">Perbarui informasi pengguna dalam sistem LPH Sukabumi</p>
        </div>
        <div>
            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="ri-checkbox-circle-line me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="ri-error-warning-line me-2"></i>
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="ri-error-warning-line me-2"></i>
        <strong>Terdapat kesalahan pada form:</strong>
        <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <!-- User Information Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-user-line me-2"></i>Informasi Pengguna
                    </h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('name', $user->name) }}"
                                   placeholder="Masukkan nama lengkap pengguna"
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email', $user->email) }}"
                                   placeholder="email@example.com"
                                   required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">No. Telepon</label>
                            <input type="tel"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   name="phone"
                                   value="{{ old('phone', $user->phone) }}"
                                   placeholder="08123456789">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <hr class="my-3">
                            <div class="alert alert-warning" role="alert">
                                <i class="ri-lock-password-line me-2"></i>
                                <strong>Ubah Password:</strong> Kosongkan field password jika tidak ingin mengubah password
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Password Baru</label>
                            <div class="input-group">
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       id="password"
                                       name="password"
                                       placeholder="Minimal 8 karakter (opsional)">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="ri-eye-line" id="eyeIcon"></i>
                                </button>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="text-secondary-light">Kosongkan jika tidak ingin mengubah password</small>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label">Konfirmasi Password Baru</label>
                            <div class="input-group">
                                <input type="password"
                                       class="form-control @error('password_confirmation') is-invalid @enderror"
                                       id="password_confirmation"
                                       name="password_confirmation"
                                       placeholder="Ulangi password baru">
                                <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirm">
                                    <i class="ri-eye-line" id="eyeIconConfirm"></i>
                                </button>
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Roles Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-shield-user-line me-2"></i>Role Pengguna
                    </h5>
                    <p class="text-secondary-light mb-3">Pilih satu atau lebih role untuk pengguna ini</p>

                    <div class="row g-3">
                        @php
                            // Get user's current role IDs
                            $userRoleIds = old('roles', $user->roles->pluck('id')->toArray());
                        @endphp

                        @foreach($roles as $role)
                        <div class="col-12 col-md-6">
                            <div class="form-check form-check-card">
                                <input class="form-check-input @error('roles') is-invalid @enderror"
                                       type="checkbox"
                                       name="roles[]"
                                       value="{{ $role->id }}"
                                       id="role_{{ $role->id }}"
                                       {{ in_array($role->id, $userRoleIds) ? 'checked' : '' }}>
                                <label class="form-check-label w-100" for="role_{{ $role->id }}">
                                    <div class="d-flex align-items-start">
                                        <i class="ti ti-shield-check text-primary me-2" style="font-size: 1.5rem;"></i>
                                        <div>
                                            <div style="font-weight: 600;">{{ $role->display_name }}</div>
                                            <small class="text-secondary">{{ $role->description ?? $role->name }}</small>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        @endforeach

                        @error('roles')
                            <div class="col-12">
                                <div class="text-danger small">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4">
                <!-- User Info Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-information-line me-2"></i>Informasi Akun
                    </h5>

                    <div class="mb-3">
                        <small class="text-secondary-light d-block mb-1">User ID</small>
                        <strong>{{ $user->id }}</strong>
                    </div>

                    <div class="mb-3">
                        <small class="text-secondary-light d-block mb-1">Dibuat Pada</small>
                        <strong>{{ $user->created_at ? $user->created_at->format('d M Y H:i') : '-' }}</strong>
                    </div>

                    <div class="mb-0">
                        <small class="text-secondary-light d-block mb-1">Terakhir Diperbarui</small>
                        <strong>{{ $user->updated_at ? $user->updated_at->format('d M Y H:i') : '-' }}</strong>
                    </div>
                </div>

                <!-- Status Card -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-settings-line me-2"></i>Pengaturan
                    </h5>

                    <div class="mb-3">
                        <label class="form-label">Status Akun</label>
                        <select class="form-select @error('status') is-invalid @enderror" name="status">
                            <option value="active" {{ old('status', $user->status) == 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="inactive" {{ old('status', $user->status) == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                            <option value="pending" {{ old('status', $user->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-secondary-light">Status akun pengguna dalam sistem</small>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-save-line me-2"></i>Aksi
                    </h5>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="ri-save-line me-2"></i>
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
                            <i class="ri-close-line me-2"></i>
                            Batal
                        </a>
                    </div>
                </div>

                <!-- Danger Zone -->
                <div class="card-custom border-danger mb-3">
                    <h5 class="mb-3 text-danger" style="font-weight: 600;">
                        <i class="ri-alert-line me-2"></i>Danger Zone
                    </h5>

                    <p class="text-secondary-light small mb-3">
                        Menghapus pengguna akan menghapus semua data terkait secara permanen.
                    </p>

                    <form action="{{ route('admin.users.destroy', $user->id) }}"
                          method="POST"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini? Tindakan ini tidak dapat dibatalkan!');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="ri-delete-bin-line me-2"></i>
                            Hapus Pengguna
                        </button>
                    </form>
                </div>

                <!-- Info Card -->
                <div class="alert alert-info" role="alert">
                    <i class="ri-information-line me-2"></i>
                    <strong>Informasi:</strong>
                    <ul class="mb-0 mt-2 small">
                        <li>Field bertanda (*) wajib diisi</li>
                        <li>Password hanya diubah jika diisi</li>
                        <li>Email harus unik dalam sistem</li>
                        <li>Minimal satu role harus dipilih</li>
                    </ul>
                </div>
            </div>
        </div>
    </form>

    @push('styles')
    <style>
        .form-check-card {
            padding: 1rem;
            border: 2px solid var(--neutral-200);
            border-radius: 8px;
            transition: all 0.2s;
        }

        .form-check-card:hover {
            border-color: var(--primary-600);
            background-color: var(--neutral-50);
        }

        .form-check-card .form-check-input:checked ~ .form-check-label {
            color: var(--primary-600);
        }

        .form-check-card .form-check-input {
            margin-top: 0.5rem;
        }

        .border-danger {
            border: 1px solid var(--danger-main) !important;
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (password.type === 'password') {
                password.type = 'text';
                eyeIcon.classList.remove('ri-eye-line');
                eyeIcon.classList.add('ri-eye-off-line');
            } else {
                password.type = 'password';
                eyeIcon.classList.remove('ri-eye-off-line');
                eyeIcon.classList.add('ri-eye-line');
            }
        });

        document.getElementById('togglePasswordConfirm').addEventListener('click', function() {
            const passwordConfirm = document.getElementById('password_confirmation');
            const eyeIconConfirm = document.getElementById('eyeIconConfirm');

            if (passwordConfirm.type === 'password') {
                passwordConfirm.type = 'text';
                eyeIconConfirm.classList.remove('ri-eye-line');
                eyeIconConfirm.classList.add('ri-eye-off-line');
            } else {
                passwordConfirm.type = 'password';
                eyeIconConfirm.classList.remove('ri-eye-off-line');
                eyeIconConfirm.classList.add('ri-eye-line');
            }
        });
    </script>
    @endpush
</x-layouts.admin.app>
