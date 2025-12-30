<x-layouts.admin.app>
    <x-slot name="title">Pengaturan Profil</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Pengaturan Profil</h2>
                    <div class="text-muted mt-1">Kelola informasi profil dan keamanan akun Anda</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row row-cards">
                <!-- Profile Information -->
                <div class="col-lg-8">
                    <form action="{{ route('pelaku_usaha.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Profil</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label required">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nomor HP/WhatsApp</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $user->phone) }}" placeholder="08xxxxxxxxxx">
                                    <div class="form-hint">Format: 08xxxxxxxxxx</div>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-device-floppy me-2"></i>Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Change Password -->
                    <form action="{{ route('pelaku_usaha.profile.password') }}" method="POST" class="mt-3">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ubah Password</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label required">Password Saat Ini</label>
                                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required>
                                    @error('current_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Password Baru</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                    <div class="form-hint">Minimal 8 karakter</div>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Konfirmasi Password Baru</label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-lock me-2"></i>Ubah Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Account Info Sidebar -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Akun</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <div>
                                    @foreach($user->roles as $role)
                                        <span class="badge bg-primary">{{ ucwords(str_replace('_', ' ', $role->name)) }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Terdaftar Sejak</label>
                                <div>{{ $user->created_at->format('d F Y') }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Terakhir Update</label>
                                <div>{{ $user->updated_at->format('d F Y H:i') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Tips -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Tips Keamanan</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="ti ti-circle-check text-success me-2"></i>
                                    <small>Gunakan password yang kuat dan unik</small>
                                </li>
                                <li class="mb-2">
                                    <i class="ti ti-circle-check text-success me-2"></i>
                                    <small>Jangan bagikan password Anda</small>
                                </li>
                                <li class="mb-2">
                                    <i class="ti ti-circle-check text-success me-2"></i>
                                    <small>Perbarui password secara berkala</small>
                                </li>
                                <li class="mb-2">
                                    <i class="ti ti-circle-check text-success me-2"></i>
                                    <small>Pastikan email yang terdaftar aktif</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
