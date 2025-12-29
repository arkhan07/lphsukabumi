<x-layouts.pelaku-usaha.app>
    <x-slot name="title">Formulir Permohonan Sertifikasi Halal Reguler</x-slot>

    <style>
        :root {
            --bg: #f6f7f9;
            --card: #ffffff;
            --text: #101828;
            --muted: #475467;
            --border: #d0d5dd;
            --border2: #e4e7ec;
            --accent: #166F61;
            --shadow: 0 10px 30px rgba(16,24,40,.08);
            --radius: 14px;
        }

        .form-container {
            max-width: 980px;
            margin: 0 auto;
        }

        .form-header {
            margin-bottom: 1.5rem;
        }

        .form-header h1 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: var(--muted);
            font-size: 0.875rem;
        }

        .form-card {
            background: var(--card);
            border: 1px solid var(--border2);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-card h2 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
            color: var(--text);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 1rem;
        }

        .form-field {
            grid-column: span 12;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-field.span-6 {
            grid-column: span 12;
        }

        .form-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text);
        }

        .form-hint {
            font-size: 0.75rem;
            color: var(--muted);
            margin-top: 0.25rem;
        }

        .form-control,
        .form-select {
            width: 100%;
            padding: 0.625rem 0.75rem;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: #fff;
            font-size: 0.875rem;
            color: var(--text);
            transition: all 0.12s ease;
        }

        .form-control:focus,
        .form-select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(22, 111, 97, 0.12);
        }

        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }

        .radio-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .radio-chip {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 0.75rem;
            border: 1px solid var(--border);
            border-radius: 999px;
            font-size: 0.875rem;
            background: #fff;
            cursor: pointer;
            user-select: none;
            transition: all 0.2s ease;
        }

        .radio-chip:hover {
            border-color: var(--accent);
            background: rgba(22, 111, 97, 0.05);
        }

        .radio-chip input[type="radio"] {
            width: auto;
            margin: 0;
        }

        .branch-list {
            display: grid;
            gap: 0.75rem;
        }

        .branch-item {
            display: flex;
            gap: 0.625rem;
            align-items: flex-start;
        }

        .branch-item input {
            flex: 1;
        }

        .btn-mini {
            border: 1px solid var(--border);
            background: #fff;
            border-radius: 10px;
            padding: 0.625rem 0.75rem;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.875rem;
            min-width: 44px;
            transition: all 0.2s ease;
        }

        .btn-mini:hover {
            transform: translateY(-1px);
        }

        .btn-mini.danger {
            border-color: #fda29b;
            color: #b42318;
        }

        .btn-mini.danger:hover {
            background: #fef3f2;
        }

        .divider {
            height: 1px;
            background: var(--border2);
            margin: 1.5rem 0;
        }

        .btn-primary {
            background: var(--accent) !important;
            border-color: var(--accent) !important;
            color: white !important;
        }

        .btn-primary:hover {
            background: #125950 !important;
            border-color: #125950 !important;
        }

        @media (min-width: 768px) {
            .form-field.span-6 {
                grid-column: span 6;
            }

            .form-field.span-4 {
                grid-column: span 4;
            }

            .form-field.span-8 {
                grid-column: span 8;
            }

            .form-field.span-3 {
                grid-column: span 3;
            }

            .form-field.span-9 {
                grid-column: span 9;
            }
        }
    </style>

    <div class="form-container">
        <!-- Header -->
        <div class="form-header">
            <h1>Formulir Permohonan Sertifikasi Halal Reguler</h1>
            <p>Isi data dengan lengkap dan benar. Kolom "Jenis Produk" otomatis mengikuti pilihan "Layanan".</p>
        </div>

        <!-- Alerts -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="d-flex">
                    <div><i class="ti ti-check"></i></div>
                    <div class="ms-2">{{ session('success') }}</div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <div class="d-flex">
                    <div><i class="ti ti-alert-circle"></i></div>
                    <div class="ms-2">
                        <h4 class="alert-title">Terdapat {{ $errors->count() }} kesalahan:</h4>
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

        <form method="POST" action="{{ route('pelaku_usaha.submissions.store') }}" id="submissionForm" autocomplete="off">
            @csrf

            <!-- Section A: Identitas Pelaku Usaha -->
            <div class="form-card">
                <h2>A. Identitas Pelaku Usaha</h2>
                <div class="form-grid">
                    <div class="form-field span-6">
                        <label class="form-label" for="owner_name">1. Nama Pelaku Usaha <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="owner_name" name="owner_name"
                               value="{{ old('owner_name', auth()->user()->name) }}"
                               placeholder="Nama lengkap" required>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="company_name">2. Nama Usaha <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="company_name" name="company_name"
                               value="{{ old('company_name') }}"
                               placeholder="Nama usaha" required>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="company_email">3. Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="company_email" name="company_email"
                               value="{{ old('company_email', auth()->user()->email) }}"
                               placeholder="contoh@email.com" required>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="company_phone">4. Nomor HP/WhatsApp <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="company_phone" name="company_phone"
                               value="{{ old('company_phone') }}"
                               placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="nib">5. NIB (Nomor Induk Berusaha)</label>
                        <input type="text" class="form-control" id="nib" name="nib"
                               value="{{ old('nib') }}"
                               placeholder="Nomor NIB">
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="business_scale">6. Skala Usaha <span class="text-danger">*</span></label>
                        <select class="form-select" id="business_scale" name="business_scale" required>
                            <option value="" selected disabled>Pilih skala usaha</option>
                            <option value="Mikro" {{ old('business_scale') == 'Mikro' ? 'selected' : '' }}>Mikro</option>
                            <option value="Kecil" {{ old('business_scale') == 'Kecil' ? 'selected' : '' }}>Kecil</option>
                            <option value="Menengah" {{ old('business_scale') == 'Menengah' ? 'selected' : '' }}>Menengah</option>
                            <option value="Besar" {{ old('business_scale') == 'Besar' ? 'selected' : '' }}>Besar</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Section B: Informasi Usaha dan Layanan -->
            <div class="form-card">
                <h2>B. Informasi Usaha dan Layanan</h2>
                <div class="form-grid">
                    <div class="form-field span-6">
                        <label class="form-label" for="service_type">7. Layanan <span class="text-danger">*</span></label>
                        <select class="form-select" id="service_type" name="service_type" required>
                            <option value="" selected disabled>Pilih layanan</option>
                            @foreach(config('services.halal_services', []) as $service => $products)
                                <option value="{{ $service }}" {{ old('service_type') == $service ? 'selected' : '' }}>{{ $service }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="product_type">8. Jenis Produk <span class="text-danger">*</span></label>
                        <select class="form-select" id="product_type" name="product_type" required disabled>
                            <option value="" selected disabled>Pilih jenis produk</option>
                        </select>
                        <div class="form-hint" id="product_type_hint">Pilih layanan terlebih dahulu.</div>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="product_count">9. Jumlah Produk/Menu <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="product_count" name="product_count"
                               value="{{ old('product_count') }}"
                               min="1" step="1" placeholder="Contoh: 10" required>
                        <div class="form-hint">Jumlah produk/menu berpengaruh pada biaya sertifikasi</div>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="production_site_count">10. Jumlah Tempat Produksi <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="production_site_count" name="production_site_count"
                               value="{{ old('production_site_count', 1) }}"
                               min="1" step="1" placeholder="Contoh: 1" required>
                    </div>
                </div>
            </div>

            <!-- Section C: Alamat dan Cabang/Outlet -->
            <div class="form-card">
                <h2>C. Alamat dan Cabang/Outlet</h2>
                <div class="form-grid">
                    <div class="form-field span-6">
                        <label class="form-label" for="company_address">11. Alamat Lengkap Usaha <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="company_address" name="company_address"
                                  placeholder="Jalan, nomor, kelurahan/desa, kecamatan, kota/kab, provinsi, kode pos"
                                  required>{{ old('company_address') }}</textarea>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="production_location">12. Alamat Tempat Produksi <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="production_location" name="production_location"
                                  placeholder="Jika sama dengan alamat usaha, tulis: Sama dengan alamat usaha"
                                  required>{{ old('production_location') }}</textarea>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="branch_count">13. Jumlah Cabang/Outlet</label>
                        <input type="number" class="form-control" id="branch_count" name="branch_count"
                               value="{{ old('branch_count', 0) }}"
                               min="0" step="1" placeholder="Contoh: 2">
                        <div class="form-hint">Jumlah cabang/outlet berpengaruh pada biaya sertifikasi. Jika lebih dari 0, isi alamat cabang di bawah.</div>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label">14. Alamat Cabang/Outlet (jika ada)</label>
                        <div id="branchList" class="branch-list">
                            <!-- Branch items will be added here dynamically -->
                        </div>
                        <button type="button" class="btn btn-outline-secondary btn-sm mt-2" id="btnAddBranch">
                            <i class="ti ti-plus me-1"></i> Tambah Cabang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Section D: Penyelia Halal dan Referensi -->
            <div class="form-card">
                <h2>D. Penyelia Halal dan Referensi</h2>
                <div class="form-grid">
                    <div class="form-field span-6">
                        <div class="form-label">15. Apakah sudah memiliki Penyelia Halal? <span class="text-danger">*</span></div>
                        <div class="radio-group">
                            <label class="radio-chip">
                                <input type="radio" name="has_halal_supervisor" value="1"
                                       {{ old('has_halal_supervisor') == '1' ? 'checked' : '' }} required>
                                Ya
                            </label>
                            <label class="radio-chip">
                                <input type="radio" name="has_halal_supervisor" value="0"
                                       {{ old('has_halal_supervisor') == '0' ? 'checked' : '' }} required>
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="form-field span-6">
                        <label class="form-label" for="referral_source">16. Referensi</label>
                        <input type="text" class="form-control" id="referral_source" name="referral_source"
                               value="{{ old('referral_source') }}"
                               placeholder="Nama pemberi referensi (opsional)">
                        <div class="form-hint">Diisi bila ada pihak yang mereferensikan permohonan ini.</div>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <!-- Submit Buttons -->
            <div class="d-flex gap-2 justify-content-end">
                <a href="{{ route('pelaku_usaha.dashboard') }}" class="btn btn-outline-secondary">
                    <i class="ti ti-arrow-left me-1"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="ti ti-device-floppy me-1"></i> Simpan Permohonan
                </button>
            </div>
        </form>
    </div>

    @push('scripts')
    <script>
        // Data dropdown: layanan -> jenis produk
        const serviceData = @json(config('services.halal_services', []));

        const serviceSelect = document.getElementById('service_type');
        const productSelect = document.getElementById('product_type');
        const productHint = document.getElementById('product_type_hint');
        const branchCountInput = document.getElementById('branch_count');
        const branchList = document.getElementById('branchList');
        const btnAddBranch = document.getElementById('btnAddBranch');

        // Populate product types based on service
        function populateProductTypes(service) {
            productSelect.innerHTML = '<option value="" selected disabled>Pilih jenis produk</option>';

            if (!service || !serviceData[service]) {
                productHint.textContent = 'Pilih layanan terlebih dahulu.';
                productSelect.disabled = true;
                return;
            }

            serviceData[service].forEach(product => {
                const option = document.createElement('option');
                option.value = product;
                option.textContent = product;
                productSelect.appendChild(option);
            });

            productSelect.disabled = false;
            productHint.textContent = 'Jenis produk sudah menyesuaikan layanan.';
        }

        serviceSelect.addEventListener('change', (e) => populateProductTypes(e.target.value));

        // Branch management
        function makeBranchItem(value = '') {
            const wrap = document.createElement('div');
            wrap.className = 'branch-item';

            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'form-control';
            input.name = 'branches[]';
            input.placeholder = 'Alamat cabang/outlet';
            input.value = value;

            const delBtn = document.createElement('button');
            delBtn.type = 'button';
            delBtn.className = 'btn-mini danger';
            delBtn.innerHTML = '<i class="ti ti-trash"></i>';
            delBtn.title = 'Hapus cabang';
            delBtn.addEventListener('click', () => wrap.remove());

            wrap.appendChild(input);
            wrap.appendChild(delBtn);
            return wrap;
        }

        btnAddBranch.addEventListener('click', () => {
            branchList.appendChild(makeBranchItem(''));
        });

        // Initialize branches based on branch_count
        branchCountInput.addEventListener('input', (e) => {
            const count = parseInt(e.target.value) || 0;
            const currentCount = branchList.querySelectorAll('.branch-item').length;

            if (count > currentCount) {
                for (let i = currentCount; i < count; i++) {
                    branchList.appendChild(makeBranchItem(''));
                }
            }
        });

        // Initialize with 0 branches
        if (branchCountInput.value > 0) {
            for (let i = 0; i < branchCountInput.value; i++) {
                branchList.appendChild(makeBranchItem(''));
            }
        }

        // Auto-populate product types if service is already selected (from old input)
        if (serviceSelect.value) {
            populateProductTypes(serviceSelect.value);
            if ('{{ old('product_type') }}') {
                productSelect.value = '{{ old('product_type') }}';
            }
        }
    </script>
    @endpush
</x-layouts.pelaku-usaha.app>
