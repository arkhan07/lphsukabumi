<x-layouts.admin.app>
    <x-slot name="title">Konfigurasi Biaya</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Konfigurasi Biaya Sertifikasi</h2>
            <p class="text-secondary-light mb-0">Atur biaya untuk berbagai jenis sertifikasi dan layanan</p>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createFeeModal">
            <i class="ri-add-line me-2"></i>
            Tambah Konfigurasi Biaya
        </button>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Konfigurasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total_fees'] }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-settings-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Konfigurasi Aktif</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['active_fees'] }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Biaya Sertifikasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['certification_fees'] }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Biaya Audit</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['audit_fees'] }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-file-search-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fee Configurations Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Daftar Konfigurasi Biaya</h5>
            <div class="position-relative">
                <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                <input type="text" class="form-control ps-5" placeholder="Cari konfigurasi..." id="searchFee" style="width: 250px;">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Kode</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama Konfigurasi</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Biaya</th>
                        <th style="padding: 1rem; font-weight: 600;">Metode</th>
                        <th style="padding: 1rem; font-weight: 600;">Biaya</th>
                        <th style="padding: 1rem; font-weight: 600;">Berlaku</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($fees as $fee)
                    <tr>
                        <td style="padding: 1rem;">
                            <span class="badge bg-secondary">{{ $fee->config_code }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $fee->config_name }}</div>
                            @if($fee->description)
                            <small class="text-secondary-light">{{ Str::limit($fee->description, 50) }}</small>
                            @endif
                            @if($fee->businessType || $fee->productType || $fee->region)
                            <div class="mt-1">
                                @if($fee->businessType)
                                <span class="badge bg-info">{{ $fee->businessType->name }}</span>
                                @endif
                                @if($fee->productType)
                                <span class="badge bg-primary">{{ $fee->productType->name }}</span>
                                @endif
                                @if($fee->region)
                                <span class="badge bg-secondary">{{ $fee->region->name }}</span>
                                @endif
                            </div>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $feeTypeBadge = match($fee->fee_type) {
                                    'base_fee' => 'primary',
                                    'audit_fee' => 'warning',
                                    'surveillance_fee' => 'info',
                                    're_certification_fee' => 'success',
                                    'document_review_fee' => 'secondary',
                                    'product_fee' => 'danger',
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
                            <span class="badge-custom badge-{{ $feeTypeBadge }}">{{ $feeTypeLabel }}</span>
                        </td>
                        <td style="padding: 1rem;">
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
                            <span class="badge bg-secondary">{{ $methodLabel }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">
                                @if($fee->calculation_method === 'percentage')
                                    {{ number_format($fee->base_amount, 2) }}%
                                @else
                                    Rp {{ number_format($fee->base_amount, 0, ',', '.') }}
                                @endif
                            </div>
                            @if($fee->min_amount || $fee->max_amount)
                            <small class="text-secondary-light">
                                @if($fee->min_amount)
                                    Min: Rp {{ number_format($fee->min_amount, 0, ',', '.') }}
                                @endif
                                @if($fee->max_amount)
                                    Max: Rp {{ number_format($fee->max_amount, 0, ',', '.') }}
                                @endif
                            </small>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <div>{{ $fee->effective_from->format('d/m/Y') }}</div>
                            @if($fee->effective_until)
                            <small class="text-secondary-light">s/d {{ $fee->effective_until->format('d/m/Y') }}</small>
                            @else
                            <small class="text-secondary-light">Tidak terbatas</small>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            @if($fee->is_active)
                                <span class="badge-custom badge-success">Aktif</span>
                            @else
                                <span class="badge-custom badge-secondary">Nonaktif</span>
                            @endif
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary" onclick="editFee({{ $fee->id }})" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <form method="POST" action="{{ route('admin.finance.fees.toggle', $fee) }}" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-{{ $fee->is_active ? 'warning' : 'success' }}" title="{{ $fee->is_active ? 'Nonaktifkan' : 'Aktifkan' }}">
                                        <i class="ri-{{ $fee->is_active ? 'close' : 'check' }}-line"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-4">
                            <i class="ri-settings-3-line" style="font-size: 3rem; color: var(--neutral-400);"></i>
                            <p class="text-secondary-light mt-2">Belum ada konfigurasi biaya</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($fees->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-3 px-3 pb-3">
            <div class="text-secondary-light">
                Menampilkan {{ $fees->firstItem() }} sampai {{ $fees->lastItem() }} dari {{ $fees->total() }} konfigurasi
            </div>
            {{ $fees->links() }}
        </div>
        @endif
    </div>

    <!-- Create Fee Modal -->
    <div class="modal fade" id="createFeeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.finance.fees.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Konfigurasi Biaya</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="config_name" class="form-label">Nama Konfigurasi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('config_name') is-invalid @enderror" id="config_name" name="config_name" value="{{ old('config_name') }}" required>
                                @error('config_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="config_code" class="form-label">Kode Konfigurasi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('config_code') is-invalid @enderror" id="config_code" name="config_code" value="{{ old('config_code') }}" required>
                                <small class="text-secondary-light">Contoh: FEE-CERT-001</small>
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
                            <div class="col-12 col-md-6">
                                <label for="fee_type" class="form-label">Jenis Biaya <span class="text-danger">*</span></label>
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
                            <div class="col-12 col-md-6">
                                <label for="calculation_method" class="form-label">Metode Perhitungan <span class="text-danger">*</span></label>
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
                            <div class="col-12 col-md-4">
                                <label for="base_amount" class="form-label">Biaya Dasar <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" class="form-control @error('base_amount') is-invalid @enderror" id="base_amount" name="base_amount" value="{{ old('base_amount') }}" required>
                                @error('base_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="min_amount" class="form-label">Biaya Minimum</label>
                                <input type="number" step="0.01" class="form-control @error('min_amount') is-invalid @enderror" id="min_amount" name="min_amount" value="{{ old('min_amount') }}">
                                @error('min_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="max_amount" class="form-label">Biaya Maximum</label>
                                <input type="number" step="0.01" class="form-control @error('max_amount') is-invalid @enderror" id="max_amount" name="max_amount" value="{{ old('max_amount') }}">
                                @error('max_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4">
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
                            <div class="col-12 col-md-4">
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
                            <div class="col-12 col-md-4">
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
                            <div class="col-12 col-md-6">
                                <label for="effective_from" class="form-label">Berlaku Dari <span class="text-danger">*</span></label>
                                <input type="date" class="form-control @error('effective_from') is-invalid @enderror" id="effective_from" name="effective_from" value="{{ old('effective_from') }}" required>
                                @error('effective_from')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="effective_until" class="form-label">Berlaku Sampai</label>
                                <input type="date" class="form-control @error('effective_until') is-invalid @enderror" id="effective_until" name="effective_until" value="{{ old('effective_until') }}">
                                @error('effective_until')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="include_tax" name="include_tax" value="1" {{ old('include_tax') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="include_tax">
                                        Termasuk Pajak
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Fee Modal -->
    <div class="modal fade" id="editFeeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
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
                            <div class="col-12 col-md-6">
                                <label for="edit_config_name" class="form-label">Nama Konfigurasi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="edit_config_name" name="config_name" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="edit_config_code" class="form-label">Kode Konfigurasi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="edit_config_code" name="config_code" required>
                            </div>
                            <div class="col-12">
                                <label for="edit_description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="edit_description" name="description" rows="2"></textarea>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="edit_fee_type" class="form-label">Jenis Biaya <span class="text-danger">*</span></label>
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
                            <div class="col-12 col-md-6">
                                <label for="edit_calculation_method" class="form-label">Metode Perhitungan <span class="text-danger">*</span></label>
                                <select class="form-select" id="edit_calculation_method" name="calculation_method" required>
                                    <option value="fixed_amount">Tetap</option>
                                    <option value="per_product">Per Produk</option>
                                    <option value="per_process">Per Proses</option>
                                    <option value="per_day">Per Hari</option>
                                    <option value="percentage">Persentase</option>
                                    <option value="formula">Formula</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="edit_base_amount" class="form-label">Biaya Dasar <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" class="form-control" id="edit_base_amount" name="base_amount" required>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="edit_min_amount" class="form-label">Biaya Minimum</label>
                                <input type="number" step="0.01" class="form-control" id="edit_min_amount" name="min_amount">
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="edit_max_amount" class="form-label">Biaya Maximum</label>
                                <input type="number" step="0.01" class="form-control" id="edit_max_amount" name="max_amount">
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="edit_business_type_id" class="form-label">Jenis Usaha</label>
                                <select class="form-select" id="edit_business_type_id" name="business_type_id">
                                    <option value="">Semua jenis usaha</option>
                                    @foreach(\App\Models\BusinessType::all() as $bt)
                                        <option value="{{ $bt->id }}">{{ $bt->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="edit_product_type_id" class="form-label">Tipe Produk</label>
                                <select class="form-select" id="edit_product_type_id" name="product_type_id">
                                    <option value="">Semua tipe produk</option>
                                    @foreach(\App\Models\ProductType::all() as $pt)
                                        <option value="{{ $pt->id }}">{{ $pt->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="edit_region_id" class="form-label">Wilayah</label>
                                <select class="form-select" id="edit_region_id" name="region_id">
                                    <option value="">Semua wilayah</option>
                                    @foreach(\App\Models\Region::all() as $r)
                                        <option value="{{ $r->id }}">{{ $r->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="edit_effective_from" class="form-label">Berlaku Dari <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="edit_effective_from" name="effective_from" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="edit_effective_until" class="form-label">Berlaku Sampai</label>
                                <input type="date" class="form-control" id="edit_effective_until" name="effective_until">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="edit_include_tax" name="include_tax" value="1">
                                    <label class="form-check-label" for="edit_include_tax">
                                        Termasuk Pajak
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update</button>
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
