<x-layouts.admin.app>
    <x-slot name="title">Konfigurasi Biaya</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Konfigurasi Biaya Sertifikasi</h2>
                    <p class="text-muted mt-1">Atur biaya untuk berbagai jenis sertifikasi dan layanan</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createFeeModal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Tambah Konfigurasi Biaya
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Stats -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Konfigurasi</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['total_fees'] }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-primary-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-primary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Konfigurasi Aktif</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['active_fees'] }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-green-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Biaya Sertifikasi</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['certification_fees'] }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-cyan-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-cyan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 9l1 0" /><path d="M9 13l6 0" /><path d="M9 17l6 0" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Biaya Audit</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['audit_fees'] }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-yellow-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" /><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M20.2 20.2l1.8 1.8" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fee Configurations Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Konfigurasi Biaya</h3>
                    <div class="card-actions">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                            </span>
                            <input type="text" class="form-control" placeholder="Cari konfigurasi..." id="searchFee">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Konfigurasi</th>
                                <th>Jenis Biaya</th>
                                <th>Metode</th>
                                <th>Biaya</th>
                                <th>Berlaku</th>
                                <th>Status</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fees as $fee)
                            <tr>
                                <td>
                                    <span class="badge bg-secondary-lt">{{ $fee->config_code }}</span>
                                </td>
                                <td>
                                    <div><strong>{{ $fee->config_name }}</strong></div>
                                    @if($fee->description)
                                    <small class="text-muted">{{ Str::limit($fee->description, 50) }}</small>
                                    @endif
                                    @if($fee->businessType || $fee->productType || $fee->region)
                                    <div class="mt-1">
                                        @if($fee->businessType)
                                        <span class="badge bg-cyan-lt">{{ $fee->businessType->name }}</span>
                                        @endif
                                        @if($fee->productType)
                                        <span class="badge bg-blue-lt">{{ $fee->productType->name }}</span>
                                        @endif
                                        @if($fee->region)
                                        <span class="badge bg-secondary-lt">{{ $fee->region->name }}</span>
                                        @endif
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $feeTypeBadge = match($fee->fee_type) {
                                            'base_fee' => 'primary',
                                            'audit_fee' => 'yellow',
                                            'surveillance_fee' => 'cyan',
                                            're_certification_fee' => 'green',
                                            'document_review_fee' => 'secondary',
                                            'product_fee' => 'red',
                                            'additional_service_fee' => 'dark',
                                            default => 'secondary'
                                        };
                                        $feeTypeLabel = match($fee->fee_type) {
                                            'base_fee' => 'Biaya Dasar',
                                            'audit_fee' => 'Biaya Audit',
                                            'surveillance_fee' => 'Biaya Surveillance',
                                            're_certification_fee' => 'Biaya Re-Sertifikasi',
                                            'document_review_fee' => 'Biaya Review Dokumen',
                                            'product_fee' => 'Biaya Produk',
                                            'additional_service_fee' => 'Biaya Layanan Tambahan',
                                            default => ucfirst($fee->fee_type)
                                        };
                                    @endphp
                                    <span class="badge bg-{{ $feeTypeBadge }}-lt">{{ $feeTypeLabel }}</span>
                                </td>
                                <td>
                                    @php
                                        $methodLabel = match($fee->calculation_method) {
                                            'fixed_amount' => 'Tetap',
                                            'per_product' => 'Per Produk',
                                            'per_process' => 'Per Proses',
                                            'per_day' => 'Per Hari',
                                            'percentage' => 'Persentase',
                                            'formula' => 'Formula',
                                            default => $fee->calculation_method
                                        };
                                    @endphp
                                    <span class="badge bg-secondary-lt">{{ $methodLabel }}</span>
                                </td>
                                <td>
                                    <div><strong>
                                        @if($fee->calculation_method === 'percentage')
                                            {{ number_format($fee->base_amount, 2) }}%
                                        @else
                                            Rp {{ number_format($fee->base_amount, 0, ',', '.') }}
                                        @endif
                                    </strong></div>
                                    @if($fee->min_amount || $fee->max_amount)
                                    <small class="text-muted">
                                        @if($fee->min_amount)
                                            Min: Rp {{ number_format($fee->min_amount, 0, ',', '.') }}
                                        @endif
                                        @if($fee->max_amount)
                                            Max: Rp {{ number_format($fee->max_amount, 0, ',', '.') }}
                                        @endif
                                    </small>
                                    @endif
                                </td>
                                <td>
                                    <div>{{ $fee->effective_from->format('d/m/Y') }}</div>
                                    @if($fee->effective_until)
                                    <small class="text-muted">s/d {{ $fee->effective_until->format('d/m/Y') }}</small>
                                    @else
                                    <small class="text-muted">Tidak terbatas</small>
                                    @endif
                                </td>
                                <td>
                                    @if($fee->is_active)
                                        <span class="badge bg-green-lt">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary-lt">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <button type="button" class="btn btn-ghost-primary btn-icon" onclick="editFee({{ $fee->id }})" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </button>
                                        <form method="POST" action="{{ route('admin.finance.fees.toggle', $fee) }}" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-ghost-{{ $fee->is_active ? 'warning' : 'success' }} btn-icon" title="{{ $fee->is_active ? 'Nonaktifkan' : 'Aktifkan' }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>@if($fee->is_active)<path d="M18 6l-12 12" /><path d="M6 6l12 12" />@else<path d="M5 12l5 5l10 -10" />@endif</svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                                        </div>
                                        <p class="empty-title">Belum ada konfigurasi biaya</p>
                                        <p class="empty-subtitle text-muted">Mulai dengan menambahkan konfigurasi biaya baru</p>
                                        <div class="empty-action">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createFeeModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                                                Tambah Konfigurasi
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($fees->hasPages())
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Menampilkan {{ $fees->firstItem() }} sampai {{ $fees->lastItem() }} dari {{ $fees->total() }} konfigurasi</p>
                    <div class="ms-auto">
                        {{ $fees->links() }}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Create Fee Modal -->
    <div class="modal modal-blur fade" id="createFeeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.finance.fees.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Konfigurasi Biaya</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="config_name" class="form-label required">Nama Konfigurasi</label>
                                <input type="text" class="form-control @error('config_name') is-invalid @enderror" id="config_name" name="config_name" value="{{ old('config_name') }}" required>
                                @error('config_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="config_code" class="form-label required">Kode Konfigurasi</label>
                                <input type="text" class="form-control @error('config_code') is-invalid @enderror" id="config_code" name="config_code" value="{{ old('config_code') }}" required>
                                <small class="form-hint">Contoh: FEE-CERT-001</small>
                                @error('config_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="2">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="fee_type" class="form-label required">Jenis Biaya</label>
                                <select class="form-select @error('fee_type') is-invalid @enderror" id="fee_type" name="fee_type" required>
                                    <option value="">Pilih jenis biaya...</option>
                                    <option value="base_fee" {{ old('fee_type') == 'base_fee' ? 'selected' : '' }}>Biaya Dasar</option>
                                    <option value="audit_fee" {{ old('fee_type') == 'audit_fee' ? 'selected' : '' }}>Biaya Audit</option>
                                    <option value="surveillance_fee" {{ old('fee_type') == 'surveillance_fee' ? 'selected' : '' }}>Biaya Surveillance</option>
                                    <option value="re_certification_fee" {{ old('fee_type') == 're_certification_fee' ? 'selected' : '' }}>Biaya Re-Sertifikasi</option>
                                    <option value="document_review_fee" {{ old('fee_type') == 'document_review_fee' ? 'selected' : '' }}>Biaya Review Dokumen</option>
                                    <option value="product_fee" {{ old('fee_type') == 'product_fee' ? 'selected' : '' }}>Biaya Produk</option>
                                    <option value="additional_service_fee" {{ old('fee_type') == 'additional_service_fee' ? 'selected' : '' }}>Biaya Layanan Tambahan</option>
                                </select>
                                @error('fee_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="calculation_method" class="form-label required">Metode Perhitungan</label>
                                <select class="form-select @error('calculation_method') is-invalid @enderror" id="calculation_method" name="calculation_method" required>
                                    <option value="">Pilih metode...</option>
                                    <option value="fixed_amount" {{ old('calculation_method') == 'fixed_amount' ? 'selected' : '' }}>Tetap</option>
                                    <option value="per_product" {{ old('calculation_method') == 'per_product' ? 'selected' : '' }}>Per Produk</option>
                                    <option value="per_process" {{ old('calculation_method') == 'per_process' ? 'selected' : '' }}>Per Proses</option>
                                    <option value="per_day" {{ old('calculation_method') == 'per_day' ? 'selected' : '' }}>Per Hari</option>
                                    <option value="percentage" {{ old('calculation_method') == 'percentage' ? 'selected' : '' }}>Persentase</option>
                                    <option value="formula" {{ old('calculation_method') == 'formula' ? 'selected' : '' }}>Formula</option>
                                </select>
                                @error('calculation_method')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="base_amount" class="form-label required">Biaya Dasar</label>
                                <input type="number" step="0.01" class="form-control @error('base_amount') is-invalid @enderror" id="base_amount" name="base_amount" value="{{ old('base_amount') }}" required>
                                @error('base_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="min_amount" class="form-label">Biaya Minimum</label>
                                <input type="number" step="0.01" class="form-control @error('min_amount') is-invalid @enderror" id="min_amount" name="min_amount" value="{{ old('min_amount') }}">
                                @error('min_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="max_amount" class="form-label">Biaya Maximum</label>
                                <input type="number" step="0.01" class="form-control @error('max_amount') is-invalid @enderror" id="max_amount" name="max_amount" value="{{ old('max_amount') }}">
                                @error('max_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="business_type_id" class="form-label">Jenis Usaha</label>
                                <select class="form-select @error('business_type_id') is-invalid @enderror" id="business_type_id" name="business_type_id">
                                    <option value="">Semua jenis usaha</option>
                                    @foreach(\App\Models\BusinessType::all() as $bt)
                                        <option value="{{ $bt->id }}" {{ old('business_type_id') == $bt->id ? 'selected' : '' }}>{{ $bt->name }}</option>
                                    @endforeach
                                </select>
                                @error('business_type_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="product_type_id" class="form-label">Tipe Produk</label>
                                <select class="form-select @error('product_type_id') is-invalid @enderror" id="product_type_id" name="product_type_id">
                                    <option value="">Semua tipe produk</option>
                                    @foreach(\App\Models\ProductType::all() as $pt)
                                        <option value="{{ $pt->id }}" {{ old('product_type_id') == $pt->id ? 'selected' : '' }}>{{ $pt->name }}</option>
                                    @endforeach
                                </select>
                                @error('product_type_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="region_id" class="form-label">Wilayah</label>
                                <select class="form-select @error('region_id') is-invalid @enderror" id="region_id" name="region_id">
                                    <option value="">Semua wilayah</option>
                                    @foreach(\App\Models\Region::all() as $r)
                                        <option value="{{ $r->id }}" {{ old('region_id') == $r->id ? 'selected' : '' }}>{{ $r->name }}</option>
                                    @endforeach
                                </select>
                                @error('region_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="effective_from" class="form-label required">Berlaku Dari</label>
                                <input type="date" class="form-control @error('effective_from') is-invalid @enderror" id="effective_from" name="effective_from" value="{{ old('effective_from') }}" required>
                                @error('effective_from')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="effective_until" class="form-label">Berlaku Sampai</label>
                                <input type="date" class="form-control @error('effective_until') is-invalid @enderror" id="effective_until" name="effective_until" value="{{ old('effective_until') }}">
                                @error('effective_until')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="include_tax" name="include_tax" value="1" {{ old('include_tax') ? 'checked' : '' }}>
                                    <span class="form-check-label">Termasuk Pajak</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="tax_percentage" class="form-label">Persentase Pajak (%)</label>
                                <input type="number" step="0.01" class="form-control @error('tax_percentage') is-invalid @enderror" id="tax_percentage" name="tax_percentage" value="{{ old('tax_percentage', 11) }}">
                                @error('tax_percentage')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="notes" class="form-label">Catatan</label>
                                <textarea class="form-control @error('notes') is-invalid @enderror" id="notes" name="notes" rows="2">{{ old('notes') }}</textarea>
                                @error('notes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Fee Modal -->
    <div class="modal modal-blur fade" id="editFeeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" id="editFeeForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Konfigurasi Biaya</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="edit_config_name" class="form-label required">Nama Konfigurasi</label>
                                <input type="text" class="form-control" id="edit_config_name" name="config_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_config_code" class="form-label required">Kode Konfigurasi</label>
                                <input type="text" class="form-control" id="edit_config_code" name="config_code" required>
                            </div>
                            <div class="col-12">
                                <label for="edit_description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="edit_description" name="description" rows="2"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_fee_type" class="form-label required">Jenis Biaya</label>
                                <select class="form-select" id="edit_fee_type" name="fee_type" required>
                                    <option value="base_fee">Biaya Dasar</option>
                                    <option value="audit_fee">Biaya Audit</option>
                                    <option value="surveillance_fee">Biaya Surveillance</option>
                                    <option value="re_certification_fee">Biaya Re-Sertifikasi</option>
                                    <option value="document_review_fee">Biaya Review Dokumen</option>
                                    <option value="product_fee">Biaya Produk</option>
                                    <option value="additional_service_fee">Biaya Layanan Tambahan</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_calculation_method" class="form-label required">Metode Perhitungan</label>
                                <select class="form-select" id="edit_calculation_method" name="calculation_method" required>
                                    <option value="fixed_amount">Tetap</option>
                                    <option value="per_product">Per Produk</option>
                                    <option value="per_process">Per Proses</option>
                                    <option value="per_day">Per Hari</option>
                                    <option value="percentage">Persentase</option>
                                    <option value="formula">Formula</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="edit_base_amount" class="form-label required">Biaya Dasar</label>
                                <input type="number" step="0.01" class="form-control" id="edit_base_amount" name="base_amount" required>
                            </div>
                            <div class="col-md-4">
                                <label for="edit_min_amount" class="form-label">Biaya Minimum</label>
                                <input type="number" step="0.01" class="form-control" id="edit_min_amount" name="min_amount">
                            </div>
                            <div class="col-md-4">
                                <label for="edit_max_amount" class="form-label">Biaya Maximum</label>
                                <input type="number" step="0.01" class="form-control" id="edit_max_amount" name="max_amount">
                            </div>
                            <div class="col-md-4">
                                <label for="edit_business_type_id" class="form-label">Jenis Usaha</label>
                                <select class="form-select" id="edit_business_type_id" name="business_type_id">
                                    <option value="">Semua jenis usaha</option>
                                    @foreach(\App\Models\BusinessType::all() as $bt)
                                        <option value="{{ $bt->id }}">{{ $bt->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="edit_product_type_id" class="form-label">Tipe Produk</label>
                                <select class="form-select" id="edit_product_type_id" name="product_type_id">
                                    <option value="">Semua tipe produk</option>
                                    @foreach(\App\Models\ProductType::all() as $pt)
                                        <option value="{{ $pt->id }}">{{ $pt->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="edit_region_id" class="form-label">Wilayah</label>
                                <select class="form-select" id="edit_region_id" name="region_id">
                                    <option value="">Semua wilayah</option>
                                    @foreach(\App\Models\Region::all() as $r)
                                        <option value="{{ $r->id }}">{{ $r->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_effective_from" class="form-label required">Berlaku Dari</label>
                                <input type="date" class="form-control" id="edit_effective_from" name="effective_from" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_effective_until" class="form-label">Berlaku Sampai</label>
                                <input type="date" class="form-control" id="edit_effective_until" name="effective_until">
                            </div>
                            <div class="col-md-6">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="edit_include_tax" name="include_tax" value="1">
                                    <span class="form-check-label">Termasuk Pajak</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_tax_percentage" class="form-label">Persentase Pajak (%)</label>
                                <input type="number" step="0.01" class="form-control" id="edit_tax_percentage" name="tax_percentage">
                            </div>
                            <div class="col-12">
                                <label for="edit_notes" class="form-label">Catatan</label>
                                <textarea class="form-control" id="edit_notes" name="notes" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Search functionality
        document.getElementById('searchFee').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        // Edit fee
        function editFee(id) {
            fetch(`/admin/finance/fee-settings/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('edit_config_name').value = data.config_name;
                    document.getElementById('edit_config_code').value = data.config_code;
                    document.getElementById('edit_description').value = data.description || '';
                    document.getElementById('edit_fee_type').value = data.fee_type;
                    document.getElementById('edit_calculation_method').value = data.calculation_method;
                    document.getElementById('edit_base_amount').value = data.base_amount;
                    document.getElementById('edit_min_amount').value = data.min_amount || '';
                    document.getElementById('edit_max_amount').value = data.max_amount || '';
                    document.getElementById('edit_business_type_id').value = data.business_type_id || '';
                    document.getElementById('edit_product_type_id').value = data.product_type_id || '';
                    document.getElementById('edit_region_id').value = data.region_id || '';
                    document.getElementById('edit_effective_from').value = data.effective_from;
                    document.getElementById('edit_effective_until').value = data.effective_until || '';
                    document.getElementById('edit_include_tax').checked = data.include_tax;
                    document.getElementById('edit_tax_percentage').value = data.tax_percentage || '';
                    document.getElementById('edit_notes').value = data.notes || '';
                    document.getElementById('editFeeForm').action = `/admin/finance/fee-settings/${id}`;

                    new bootstrap.Modal(document.getElementById('editFeeModal')).show();
                })
                .catch(error => {
                    alert('Error loading fee configuration data');
                    console.error(error);
                });
        }

        // Show validation errors if any
        @if($errors->any())
            new bootstrap.Modal(document.getElementById('createFeeModal')).show();
        @endif
    </script>
    @endpush
</x-layouts.admin.app>
