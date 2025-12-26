<x-layouts.admin.app>
    <x-slot name="title">Profil Saya</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        <i class="ti ti-user me-2"></i>
                        Profil Saya
                    </h2>
                    <div class="text-secondary mt-1">Kelola informasi profil dan keamanan akun Anda</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div><i class="ti ti-check"></i></div>
                        <div class="ms-2">{{ session('success') }}</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div><i class="ti ti-alert-circle"></i></div>
                        <div class="ms-2">
                            <h4 class="alert-title">Error!</h4>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="row row-deck row-cards">
                <!-- Profile Information -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Profil</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label required">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                               value="{{ old('name', $user->name) }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label required">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                               value="{{ old('email', $user->email) }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor Telepon</label>
                                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                               value="{{ old('phone', $user->phone) }}"
                                               placeholder="08xxxxxxxxxx">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor WhatsApp</label>
                                        <input type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror"
                                               value="{{ old('whatsapp', $user->whatsapp) }}"
                                               placeholder="08xxxxxxxxxx">
                                        @error('whatsapp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Foto Profil</label>
                                    <input type="file" name="profile_photo" class="form-control @error('profile_photo') is-invalid @enderror"
                                           accept="image/*">
                                    <small class="form-hint">Format: JPG, PNG, GIF (Max: 2MB)</small>
                                    @error('profile_photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-device-floppy me-1"></i>
                                    Simpan Perubahan
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Password</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.profile.password') }}">
                                @csrf
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
                                    <small class="form-hint">Minimal 8 karakter</small>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label required">Konfirmasi Password Baru</label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-lock me-1"></i>
                                    Ubah Password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Profile Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <span class="avatar avatar-xl" style="background-image: url({{ $user->profile_photo_url }})"></span>
                            </div>
                            <h3 class="mb-1">{{ $user->name }}</h3>
                            <p class="text-secondary mb-3">{{ $user->roles->first()->display_name ?? 'User' }}</p>

                            @if($user->profile_photo)
                                <form method="POST" action="{{ route('admin.profile.delete-photo') }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus foto profil?')">
                                        <i class="ti ti-trash me-1"></i>
                                        Hapus Foto
                                    </button>
                                </form>
                            @endif
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <div class="text-secondary">Email</div>
                                    <div class="small">{{ $user->email }}</div>
                                </div>
                            </div>
                            @if($user->phone)
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="text-secondary">Telepon</div>
                                    <div class="small">{{ $user->phone }}</div>
                                </div>
                            </div>
                            @endif
                            @if($user->whatsapp)
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="text-secondary">WhatsApp</div>
                                    <div class="small">{{ $user->whatsapp }}</div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
