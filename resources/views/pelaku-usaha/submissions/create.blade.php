<x-layouts.admin.app>
    <x-slot name="title">Buat Permohonan Baru</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Formulir Permohonan Sertifikasi Halal
                    </h2>
                    <div class="text-muted mt-1">Lengkapi formulir di bawah ini untuk mengajukan permohonan sertifikasi halal</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('pelaku_usaha.dashboard') }}" class="btn btn-outline-secondary">
                        <i class="ti ti-arrow-left me-2"></i>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <form action="{{ route('pelaku_usaha.submissions.store') }}" method="POST">
                @csrf

                <!-- Section A: Identitas Pelaku Usaha -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">A. Identitas Pelaku Usaha</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label required">Nama Pelaku Usaha</label>
                                <input type="text" class="form-control @error('owner_name') is-invalid @enderror"
                                       name="owner_name" value="{{ old('owner_name', auth()->user()->name) }}" required>
                                @error('owner_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required">Nama Perusahaan</label>
                                <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                                       name="company_name" value="{{ old('company_name') }}" required>
                                @error('company_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label required">Email Perusahaan</label>
                                <input type="email" class="form-control @error('company_email') is-invalid @enderror"
                                       name="company_email" value="{{ old('company_email', auth()->user()->email) }}" required>
                                @error('company_email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required">Telepon Perusahaan</label>
                                <input type="tel" class="form-control @error('company_phone') is-invalid @enderror"
                                       name="company_phone" value="{{ old('company_phone') }}" required>
                                @error('company_phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">NPWP</label>
                                <input type="text" class="form-control @error('npwp') is-invalid @enderror"
                                       name="npwp" value="{{ old('npwp') }}">
                                @error('npwp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">NIB</label>
                                <input type="text" class="form-control @error('nib') is-invalid @enderror"
                                       name="nib" value="{{ old('nib') }}">
                                @error('nib')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label required">Skala Usaha</label>
                                <select class="form-select @error('business_scale') is-invalid @enderror"
                                        name="business_scale" required>
                                    <option value="">Pilih skala usaha</option>
                                    <option value="Mikro" {{ old('business_scale') == 'Mikro' ? 'selected' : '' }}>Mikro</option>
                                    <option value="Kecil" {{ old('business_scale') == 'Kecil' ? 'selected' : '' }}>Kecil</option>
                                    <option value="Menengah" {{ old('business_scale') == 'Menengah' ? 'selected' : '' }}>Menengah</option>
                                    <option value="Besar" {{ old('business_scale') == 'Besar' ? 'selected' : '' }}>Besar</option>
                                </select>
                                @error('business_scale')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section B: Informasi Usaha dan Layanan -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">B. Informasi Usaha dan Layanan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label required">Wilayah</label>
                                <select class="form-select @error('region_id') is-invalid @enderror"
                                        name="region_id" required>
                                    <option value="">Pilih wilayah</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}" {{ old('region_id') == $region->id ? 'selected' : '' }}>
                                            {{ $region->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('region_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required">Jenis Usaha</label>
                                <select class="form-select @error('business_type_id') is-invalid @enderror"
                                        name="business_type_id" required>
                                    <option value="">Pilih jenis usaha</option>
                                    @foreach($businessTypes as $type)
                                        <option value="{{ $type->id }}" {{ old('business_type_id') == $type->id ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('business_type_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label required">Layanan</label>
                                <select class="form-select @error('service_type') is-invalid @enderror"
                                        name="service_type" id="serviceSelect" required>
                                    <option value="">Pilih layanan</option>
                                    @foreach(config('services.halal_services', []) as $service => $products)
                                        <option value="{{ $service }}" {{ old('service_type') == $service ? 'selected' : '' }}>
                                            {{ $service }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('service_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-hint">Pilih jenis layanan sertifikasi halal</small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required">Jenis Produk</label>
                                <select class="form-select @error('product_type') is-invalid @enderror"
                                        name="product_type" id="productSelect" required disabled>
                                    <option value="">Pilih jenis produk</option>
                                </select>
                                @error('product_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-hint" id="productHint">Pilih layanan terlebih dahulu</small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label required">Jumlah Produk/Menu</label>
                                <input type="number" class="form-control @error('product_count') is-invalid @enderror"
                                       name="product_count" value="{{ old('product_count', 1) }}" min="1" required>
                                @error('product_count')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label required">Jumlah Tempat Produksi</label>
                                <input type="number" class="form-control @error('production_site_count') is-invalid @enderror"
                                       name="production_site_count" value="{{ old('production_site_count', 1) }}" min="1" required>
                                @error('production_site_count')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label required">Jumlah Cabang/Outlet</label>
                                <input type="number" class="form-control @error('branch_count') is-invalid @enderror"
                                       name="branch_count" value="{{ old('branch_count', 0) }}" min="0" required>
                                @error('branch_count')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section C: Alamat -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">C. Alamat</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Alamat Perusahaan</label>
                            <textarea class="form-control @error('company_address') is-invalid @enderror"
                                      name="company_address" rows="3" required>{{ old('company_address') }}</textarea>
                            @error('company_address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lokasi Produksi</label>
                            <textarea class="form-control @error('production_location') is-invalid @enderror"
                                      name="production_location" rows="2">{{ old('production_location') }}</textarea>
                            @error('production_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-hint">Isi jika berbeda dengan alamat perusahaan</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Cabang/Outlet</label>
                            <div id="branchContainer">
                                @if(old('branches'))
                                    @foreach(old('branches') as $index => $branch)
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="branches[]"
                                                   value="{{ $branch }}" placeholder="Alamat cabang/outlet">
                                            <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="addBranchBtn">
                                <i class="ti ti-plus me-2"></i>Tambah Cabang
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Section D: Penyelia Halal dan Referensi -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">D. Penyelia Halal dan Referensi</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Apakah memiliki Penyelia Halal?</label>
                            <div>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="has_halal_supervisor"
                                           value="1" {{ old('has_halal_supervisor') == '1' ? 'checked' : '' }} required>
                                    <span class="form-check-label">Ya</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="has_halal_supervisor"
                                           value="0" {{ old('has_halal_supervisor') == '0' ? 'checked' : '' }} required>
                                    <span class="form-check-label">Tidak</span>
                                </label>
                            </div>
                            @error('has_halal_supervisor')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kode Referral PHR (Pendamping Halal Reguler)</label>
                            @if(auth()->user()->hasRole('pendamping_halal_reguler'))
                                {{-- PHR yang login otomatis terisi kodenya --}}
                                <input type="text" class="form-control is-valid"
                                       id="phr_referral_code" name="phr_referral_code"
                                       value="{{ auth()->user()->referral_code }}"
                                       readonly>
                                <small class="form-text text-success">
                                    <i class="ti ti-check"></i> Kode afiliasi Anda otomatis terisi
                                </small>
                            @else
                                {{-- Pelaku Usaha bisa input manual atau dari URL --}}
                                <input type="text" class="form-control @error('phr_referral_code') is-invalid @enderror"
                                       id="phr_referral_code" name="phr_referral_code"
                                       value="{{ old('phr_referral_code', request('ref')) }}"
                                       placeholder="Masukkan kode referral PHR (jika ada)">
                                <small class="form-text text-muted">
                                    Jika Anda direferensikan oleh Pendamping Halal Reguler, masukkan kode referralnya di sini.
                                </small>
                                <div id="phr_validation_message" class="mt-2"></div>
                            @endif
                            @error('phr_referral_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sumber Referensi</label>
                            <input type="text" class="form-control @error('referral_source') is-invalid @enderror"
                                   name="referral_source" value="{{ old('referral_source') }}"
                                   placeholder="Bagaimana Anda mengetahui layanan kami? (Media sosial, teman, iklan, dll)">
                            @error('referral_source')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('pelaku_usaha.dashboard') }}" class="btn btn-outline-secondary">
                                <i class="ti ti-arrow-left me-2"></i>
                                Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-device-floppy me-2"></i>
                                Simpan Permohonan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        const serviceData = @json(config('services.halal_services', []));
        const serviceSelect = document.getElementById('serviceSelect');
        const productSelect = document.getElementById('productSelect');
        const productHint = document.getElementById('productHint');

        // Handle service selection change
        serviceSelect.addEventListener('change', function() {
            populateProductTypes(this.value);
        });

        function populateProductTypes(service) {
            productSelect.innerHTML = '<option value="">Pilih jenis produk</option>';

            if (!service || !serviceData[service]) {
                productHint.textContent = 'Pilih layanan terlebih dahulu';
                productSelect.disabled = true;
                return;
            }

            serviceData[service].forEach(product => {
                const option = document.createElement('option');
                option.value = product;
                option.textContent = product;
                if ('{{ old('product_type') }}' === product) {
                    option.selected = true;
                }
                productSelect.appendChild(option);
            });

            productSelect.disabled = false;
            productHint.textContent = 'Pilih jenis produk sesuai layanan';
        }

        // Auto-populate if old input exists
        if (serviceSelect.value) {
            populateProductTypes(serviceSelect.value);
        }

        // Add branch functionality
        document.getElementById('addBranchBtn').addEventListener('click', function() {
            const container = document.getElementById('branchContainer');
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = `
                <input type="text" class="form-control" name="branches[]" placeholder="Alamat cabang/outlet">
                <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
                    <i class="ti ti-trash"></i>
                </button>
            `;
            container.appendChild(div);
        });

        // PHR Referral Code Validation
        const phrReferralInput = document.getElementById('phr_referral_code');
        const validationMessage = document.getElementById('phr_validation_message');
        let validationTimeout;

        if (phrReferralInput) {
            phrReferralInput.addEventListener('input', function() {
                clearTimeout(validationTimeout);
                const code = this.value.trim();

                if (code === '') {
                    validationMessage.innerHTML = '';
                    phrReferralInput.classList.remove('is-valid', 'is-invalid');
                    return;
                }

                validationMessage.innerHTML = '<small class="text-muted">Memvalidasi kode...</small>';

                validationTimeout = setTimeout(() => {
                    fetch('/register/phr/validate-code?code=' + encodeURIComponent(code))
                        .then(response => response.json())
                        .then(data => {
                            if (data.valid) {
                                phrReferralInput.classList.remove('is-invalid');
                                phrReferralInput.classList.add('is-valid');
                                validationMessage.innerHTML = `
                                    <div class="alert alert-success alert-sm mb-0">
                                        <strong><i class="ti ti-check"></i> Kode valid!</strong><br>
                                        PHR: ${data.recruiter.name}<br>
                                        Level: ${data.recruiter.level}<br>
                                        Lokasi: ${data.recruiter.city}, ${data.recruiter.province}
                                    </div>
                                `;
                            } else {
                                phrReferralInput.classList.remove('is-valid');
                                phrReferralInput.classList.add('is-invalid');
                                validationMessage.innerHTML = `
                                    <div class="alert alert-danger alert-sm mb-0">
                                        <i class="ti ti-x"></i> ${data.message}
                                    </div>
                                `;
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            validationMessage.innerHTML = '<small class="text-danger">Gagal memvalidasi kode</small>';
                        });
                }, 500);
            });
        }
    </script>
    @endpush
</x-layouts.admin.app>
