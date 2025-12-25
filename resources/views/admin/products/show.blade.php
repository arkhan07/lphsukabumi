<x-layouts.admin.app>
    <x-slot name="title">Detail Produk - {{ $product->product_name }}</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Produk</h2>
            <p class="text-secondary-light mb-0">Informasi lengkap tentang produk</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success">
                <i class="ri-edit-line me-2"></i>
                Edit
            </a>
            <button type="button" class="btn btn-danger" onclick="confirmDelete()">
                <i class="ri-delete-bin-line me-2"></i>
                Hapus
            </button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <div class="row g-3">
        <!-- Main Content -->
        <div class="col-12 col-lg-8">
            <!-- Product Image & Basic Info -->
            <div class="card-custom mb-3">
                <div class="row g-3">
                    <div class="col-12 col-md-4">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}"
                                 class="img-fluid rounded" style="width: 100%; object-fit: cover; max-height: 300px;">
                        @else
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                 style="height: 300px;">
                                <div class="text-center">
                                    <i class="ri-product-hunt-line" style="font-size: 4rem; color: var(--neutral-400);"></i>
                                    <p class="text-secondary-light mt-2 mb-0">Tidak ada gambar</p>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h3 class="mb-2" style="font-weight: 600; color: var(--neutral-800);">
                                    {{ $product->product_name }}
                                </h3>
                                @if($product->variant)
                                    <p class="text-secondary-light mb-1">Varian: {{ $product->variant }}</p>
                                @endif
                                @if($product->product_code)
                                    <p class="text-secondary-light mb-0">SKU: {{ $product->product_code }}</p>
                                @endif
                            </div>
                            <div>
                                @if($product->halal_status === 'halal')
                                    <span class="badge-custom badge-success" style="font-size: 0.9rem; padding: 0.5rem 1rem;">
                                        <i class="ri-checkbox-circle-line me-1"></i>Halal
                                    </span>
                                @elseif($product->halal_status === 'not_halal')
                                    <span class="badge-custom badge-danger" style="font-size: 0.9rem; padding: 0.5rem 1rem;">
                                        <i class="ri-close-circle-line me-1"></i>Tidak Halal
                                    </span>
                                @else
                                    <span class="badge-custom badge-warning" style="font-size: 0.9rem; padding: 0.5rem 1rem;">
                                        <i class="ri-question-line me-1"></i>Meragukan
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row g-2">
                            @if($product->brand_name)
                                <div class="col-12">
                                    <label class="text-secondary-light" style="font-size: 0.875rem;">Brand</label>
                                    <div style="font-weight: 500;">{{ $product->brand_name }}</div>
                                </div>
                            @endif
                            @if($product->productType)
                                <div class="col-12">
                                    <label class="text-secondary-light" style="font-size: 0.875rem;">Tipe Produk</label>
                                    <div><span class="badge-custom badge-primary">{{ $product->productType->name }}</span></div>
                                </div>
                            @endif
                            @if($product->packaging_type)
                                <div class="col-12">
                                    <label class="text-secondary-light" style="font-size: 0.875rem;">Kemasan</label>
                                    <div style="font-weight: 500;">{{ $product->packaging_type }}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Description -->
            @if($product->product_description)
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-file-text-line me-2"></i>
                        Deskripsi Produk
                    </h5>
                    <p class="mb-0" style="line-height: 1.6;">{{ $product->product_description }}</p>
                </div>
            @endif

            <!-- Product Details -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-list-check me-2"></i>
                    Detail Produk
                </h5>
                <div class="row g-3">
                    @if($product->net_weight)
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Berat Bersih</label>
                            <div style="font-weight: 500;">
                                {{ number_format($product->net_weight, 2) }} {{ $product->weight_unit ?? 'gram' }}
                            </div>
                        </div>
                    @endif

                    @if($product->barcode)
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Barcode</label>
                            <div style="font-weight: 500;">{{ $product->barcode }}</div>
                        </div>
                    @endif

                    @if($product->hs_code)
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">HS Code</label>
                            <div style="font-weight: 500;">{{ $product->hs_code }}</div>
                        </div>
                    @endif

                    @if($product->monthly_production_volume)
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Volume Produksi Bulanan</label>
                            <div style="font-weight: 500;">{{ number_format($product->monthly_production_volume) }} unit/bulan</div>
                        </div>
                    @endif

                    @if($product->shelf_life_duration)
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Masa Simpan</label>
                            <div style="font-weight: 500;">
                                {{ $product->shelf_life_duration }}
                                @switch($product->shelf_life_unit)
                                    @case('days') Hari @break
                                    @case('weeks') Minggu @break
                                    @case('months') Bulan @break
                                    @case('years') Tahun @break
                                    @default {{ $product->shelf_life_unit }}
                                @endswitch
                            </div>
                        </div>
                    @endif

                    @if($product->is_active !== null)
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Status Produk</label>
                            <div>
                                @if($product->is_active)
                                    <span class="badge-custom badge-success">Aktif</span>
                                @else
                                    <span class="badge-custom badge-secondary">Tidak Aktif</span>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Ingredients -->
            @if($product->ingredients)
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-flask-line me-2"></i>
                        Komposisi / Ingredients
                    </h5>
                    <div class="p-3 rounded" style="background: var(--neutral-50);">
                        <p class="mb-0" style="line-height: 1.8;">{{ $product->ingredients }}</p>
                    </div>
                </div>
            @endif

            <!-- Halal Information -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-shield-check-line me-2"></i>
                    Informasi Halal
                </h5>
                <div class="row g-3">
                    <div class="col-12">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Status Halal</label>
                        <div>
                            @if($product->halal_status === 'halal')
                                <span class="badge-custom badge-success" style="font-size: 1rem; padding: 0.5rem 1rem;">
                                    <i class="ri-checkbox-circle-line me-1"></i>Halal
                                </span>
                            @elseif($product->halal_status === 'not_halal')
                                <span class="badge-custom badge-danger" style="font-size: 1rem; padding: 0.5rem 1rem;">
                                    <i class="ri-close-circle-line me-1"></i>Tidak Halal
                                </span>
                            @else
                                <span class="badge-custom badge-warning" style="font-size: 1rem; padding: 0.5rem 1rem;">
                                    <i class="ri-question-line me-1"></i>Meragukan
                                </span>
                            @endif
                        </div>
                    </div>

                    @if($product->halal_notes)
                        <div class="col-12">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Catatan</label>
                            <div class="p-3 rounded" style="background: var(--neutral-50);">
                                <p class="mb-0">{{ $product->halal_notes }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Materials Used -->
            @if($product->materials && $product->materials->count() > 0)
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-stack-line me-2"></i>
                        Bahan Baku yang Digunakan
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background-color: var(--neutral-50);">
                                <tr>
                                    <th style="padding: 0.75rem; font-weight: 600;">Nama Bahan</th>
                                    <th style="padding: 0.75rem; font-weight: 600;">Kode</th>
                                    <th style="padding: 0.75rem; font-weight: 600;">Tipe</th>
                                    <th style="padding: 0.75rem; font-weight: 600;">Status Halal</th>
                                    <th style="padding: 0.75rem; font-weight: 600;">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product->materials as $material)
                                    <tr>
                                        <td style="padding: 0.75rem;">{{ $material->material_name }}</td>
                                        <td style="padding: 0.75rem;">{{ $material->material_code ?? '-' }}</td>
                                        <td style="padding: 0.75rem;">
                                            <span class="badge bg-light text-dark">
                                                {{ str_replace('_', ' ', ucfirst($material->material_type)) }}
                                            </span>
                                        </td>
                                        <td style="padding: 0.75rem;">
                                            @if($material->halal_status === 'halal_certified')
                                                <span class="badge-custom badge-success">Tersertifikasi</span>
                                            @elseif($material->halal_status === 'self_declared')
                                                <span class="badge-custom badge-info">Self Declared</span>
                                            @elseif($material->halal_status === 'not_halal')
                                                <span class="badge-custom badge-danger">Tidak Halal</span>
                                            @else
                                                <span class="badge-custom badge-warning">Meragukan</span>
                                            @endif
                                        </td>
                                        <td style="padding: 0.75rem;">
                                            {{ $material->usage_percentage ? number_format($material->usage_percentage, 2) . '%' : '-' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="col-12 col-lg-4">
            <!-- Certificate Information -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-award-line me-2"></i>
                    Sertifikat Halal
                </h5>
                @if($product->submission && $product->submission->halal_certificate_number)
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nomor Sertifikat</label>
                        <div style="font-weight: 500; font-size: 1.1rem; color: var(--primary-600);">
                            {{ $product->submission->halal_certificate_number }}
                        </div>
                    </div>
                    @if($product->certificate_issue_date ?? false)
                        <div class="mb-3">
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Tanggal Terbit</label>
                            <div style="font-weight: 500;">
                                {{ \Carbon\Carbon::parse($product->certificate_issue_date)->format('d M Y') }}
                            </div>
                        </div>
                    @endif
                    @if($product->certificate_expiry_date ?? false)
                        <div>
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Tanggal Kadaluarsa</label>
                            <div style="font-weight: 500;">
                                {{ \Carbon\Carbon::parse($product->certificate_expiry_date)->format('d M Y') }}
                            </div>
                        </div>
                    @endif
                @else
                    <div class="text-center py-4">
                        <i class="ri-award-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                        <p class="text-secondary-light mt-2 mb-0">Belum memiliki sertifikat halal</p>
                    </div>
                @endif
            </div>

            <!-- Submission Information -->
            @if($product->submission)
                <div class="card-custom mb-3">
                    <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                        <i class="ri-file-list-3-line me-2"></i>
                        Permohonan
                    </h5>
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nomor Permohonan</label>
                        <div style="font-weight: 500;">
                            <a href="{{ route('admin.submissions.show', $product->submission->id) }}"
                               class="text-primary-600" style="text-decoration: none;">
                                {{ $product->submission->submission_number }}
                            </a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Perusahaan</label>
                        <div style="font-weight: 500;">{{ $product->submission->company_name }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Status Permohonan</label>
                        <div>
                            <span class="badge-custom badge-info">
                                {{ str_replace('_', ' ', ucfirst($product->submission->status)) }}
                            </span>
                        </div>
                    </div>
                    @if($product->submission->submission_date)
                        <div>
                            <label class="text-secondary-light" style="font-size: 0.875rem;">Tanggal Permohonan</label>
                            <div style="font-weight: 500;">
                                {{ \Carbon\Carbon::parse($product->submission->submission_date)->format('d M Y') }}
                            </div>
                        </div>
                    @endif
                </div>
            @endif

            <!-- Metadata -->
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-information-line me-2"></i>
                    Informasi Sistem
                </h5>
                <div class="mb-2">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">ID Produk</label>
                    <div style="font-weight: 500;">{{ $product->id }}</div>
                </div>
                <div class="mb-2">
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Dibuat Pada</label>
                    <div style="font-weight: 500;">{{ $product->created_at->format('d M Y, H:i') }}</div>
                </div>
                <div>
                    <label class="text-secondary-light" style="font-size: 0.875rem;">Terakhir Diperbarui</label>
                    <div style="font-weight: 500;">{{ $product->updated_at->format('d M Y, H:i') }}</div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">Aksi</h5>
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success">
                        <i class="ri-edit-line me-2"></i>
                        Edit Produk
                    </a>
                    <button type="button" class="btn btn-outline-primary" onclick="window.print()">
                        <i class="ri-printer-line me-2"></i>
                        Cetak Detail
                    </button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">
                        <i class="ri-delete-bin-line me-2"></i>
                        Hapus Produk
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Form -->
    <form id="deleteForm" action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    @push('scripts')
    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin ingin menghapus produk "{{ $product->product_name }}"?\n\nTindakan ini tidak dapat dibatalkan.')) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
    @endpush
</x-layouts.admin.app>
