<x-layouts.admin.app>
    <x-slot name="title">Profil PHR</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Profil Saya</h2>
                    <div class="text-secondary mt-1">Kelola informasi profil dan pengaturan akun Anda</div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <!-- Profile Summary Card -->
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <span class="avatar avatar-xl mb-3" style="background-image: url({{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=random&size=128' }})"></span>
                            <h3 class="mb-1">{{ $user->name }}</h3>
                            <div class="text-secondary">{{ $user->email }}</div>
                            <div class="mt-3">
                                <span class="badge bg-primary">
                                    {{ ucwords(str_replace('_', ' ', $user->phr_level ?? 'PHR')) }}
                                </span>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">
                                        <i class="ti ti-link"></i> Kode Referral
                                    </div>
                                    <div class="col-auto">
                                        <code>{{ $user->referral_code }}</code>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">
                                        <i class="ti ti-calendar"></i> Bergabung
                                    </div>
                                    <div class="col-auto">
                                        {{ $user->phr_joined_at ? $user->phr_joined_at->format('d M Y') : $user->created_at->format('d M Y') }}
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">
                                        <i class="ti ti-check-circle"></i> Status
                                    </div>
                                    <div class="col-auto">
                                        @if($user->is_phr_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-secondary">Tidak Aktif</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Statistik Singkat</h3>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">PHR Direkrut</div>
                                    <div class="col-auto">
                                        <span class="badge bg-primary">{{ $stats['phr_recruited'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">PU Direferensikan</div>
                                    <div class="col-auto">
                                        <span class="badge bg-info">{{ $stats['pu_referred'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col text-secondary">Total Fee Earned</div>
                                    <div class="col-auto fw-bold text-success">
                                        Rp {{ number_format($stats['total_fees_earned'] / 1000000, 1) }}M
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Profile Forms -->
                <div class="col-lg-8">
                    <!-- Success/Error Messages -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="ti ti-check"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="ti ti-alert-circle"></i> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <!-- Personal Information -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Pribadi</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('phr.profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

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
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $user->phone) }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Foto Profil</label>
                                    <input type="file" name="profile_photo" class="form-control @error('profile_photo') is-invalid @enderror" accept="image/jpeg,image/jpg,image/png">
                                    <small class="form-hint">Format: JPG, JPEG, PNG. Maksimal 2MB</small>
                                    @error('profile_photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3">{{ old('address', $user->address) }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti ti-device-floppy"></i> Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Password</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('phr.profile.updatePassword') }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label required">Password Lama</label>
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

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti ti-lock"></i> Ubah Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Bank Account Information -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Rekening Bank</h3>
                            <div class="card-subtitle">Untuk penerimaan fee PHR</div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('phr.profile.updateBankAccount') }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label">Nama Bank</label>
                                    <select name="bank_name" class="form-select @error('bank_name') is-invalid @enderror">
                                        <option value="">Pilih Bank</option>
                                        <option value="BCA" {{ old('bank_name', $user->bank_name) === 'BCA' ? 'selected' : '' }}>BCA</option>
                                        <option value="BNI" {{ old('bank_name', $user->bank_name) === 'BNI' ? 'selected' : '' }}>BNI</option>
                                        <option value="BRI" {{ old('bank_name', $user->bank_name) === 'BRI' ? 'selected' : '' }}>BRI</option>
                                        <option value="Mandiri" {{ old('bank_name', $user->bank_name) === 'Mandiri' ? 'selected' : '' }}>Mandiri</option>
                                        <option value="BSI" {{ old('bank_name', $user->bank_name) === 'BSI' ? 'selected' : '' }}>BSI</option>
                                        <option value="CIMB Niaga" {{ old('bank_name', $user->bank_name) === 'CIMB Niaga' ? 'selected' : '' }}>CIMB Niaga</option>
                                        <option value="Danamon" {{ old('bank_name', $user->bank_name) === 'Danamon' ? 'selected' : '' }}>Danamon</option>
                                        <option value="Permata" {{ old('bank_name', $user->bank_name) === 'Permata' ? 'selected' : '' }}>Permata</option>
                                    </select>
                                    @error('bank_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nomor Rekening</label>
                                    <input type="text" name="bank_account_number" class="form-control @error('bank_account_number') is-invalid @enderror" value="{{ old('bank_account_number', $user->bank_account_number) }}">
                                    @error('bank_account_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nama Pemilik Rekening</label>
                                    <input type="text" name="bank_account_holder" class="form-control @error('bank_account_holder') is-invalid @enderror" value="{{ old('bank_account_holder', $user->bank_account_holder) }}">
                                    <small class="form-hint">Harus sesuai dengan nama di rekening bank</small>
                                    @error('bank_account_holder')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti ti-building-bank"></i> Simpan Rekening
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
