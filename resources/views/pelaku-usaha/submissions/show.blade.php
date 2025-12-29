<x-layouts.admin.app>
    <x-slot name="title">Detail Permohonan</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Permohonan</h2>
            <p class="text-secondary-light mb-0">{{ $submission->submission_number }}</p>
        </div>
        <div>
            <a href="{{ route('pelaku_usaha.submissions.index') }}" class="btn btn-outline-secondary">
                <i class="ti ti-arrow-left me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <!-- Status Badge -->
    <div class="alert alert-{{ $submission->status == 'approved' ? 'success' : ($submission->status == 'revision_required' ? 'danger' : 'info') }} mb-4">
        <div class="d-flex align-items-center">
            <div>
                <i class="ti ti-info-circle me-2" style="font-size: 1.5rem;"></i>
            </div>
            <div>
                <strong>Status Permohonan:</strong>
                @if($submission->status == 'draft')
                    Draft - Permohonan masih dalam draft
                @elseif($submission->status == 'submitted')
                    Diajukan - Menunggu verifikasi admin
                @elseif(in_array($submission->status, ['screening', 'verification', 'in_review']))
                    Dalam Proses Verifikasi
                @elseif($submission->status == 'approved')
                    Disetujui - Sertifikat halal telah diterbitkan
                @elseif($submission->status == 'revision_required')
                    Perlu Perbaikan - Silakan perbaiki sesuai catatan
                @else
                    {{ ucfirst($submission->status) }}
                @endif
            </div>
        </div>
    </div>

    <div class="row g-3">
        <!-- Section A: Identitas Pelaku Usaha -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">A. Identitas Pelaku Usaha</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Nama Pelaku Usaha</label>
                            <p class="fw-bold">{{ $submission->owner_name }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Nama Perusahaan</label>
                            <p class="fw-bold">{{ $submission->company_name }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Email</label>
                            <p class="fw-bold">{{ $submission->company_email }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Telepon</label>
                            <p class="fw-bold">{{ $submission->company_phone }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">NPWP</label>
                            <p class="fw-bold">{{ $submission->npwp ?? '-' }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">NIB</label>
                            <p class="fw-bold">{{ $submission->nib ?? '-' }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Skala Usaha</label>
                            <p class="fw-bold">{{ $submission->business_scale }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section B: Informasi Usaha dan Layanan -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">B. Informasi Usaha dan Layanan</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Wilayah</label>
                            <p class="fw-bold">{{ $submission->region->name ?? '-' }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Jenis Usaha</label>
                            <p class="fw-bold">{{ $submission->businessType->name ?? '-' }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Layanan</label>
                            <p class="fw-bold">{{ $submission->service_type }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Jenis Produk</label>
                            <p class="fw-bold">{{ $submission->product_type }}</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label text-muted">Jumlah Produk/Menu</label>
                            <p class="fw-bold">{{ $submission->product_count }}</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label text-muted">Jumlah Tempat Produksi</label>
                            <p class="fw-bold">{{ $submission->production_site_count }}</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label text-muted">Jumlah Cabang/Outlet</label>
                            <p class="fw-bold">{{ $submission->branch_count }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section C: Alamat -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">C. Alamat</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label text-muted">Alamat Perusahaan</label>
                        <p class="fw-bold">{{ $submission->company_address }}</p>
                    </div>

                    @if($submission->production_location)
                    <div class="mb-3">
                        <label class="form-label text-muted">Lokasi Produksi</label>
                        <p class="fw-bold">{{ $submission->production_location }}</p>
                    </div>
                    @endif

                    @if($submission->branches->count() > 0)
                    <div class="mb-3">
                        <label class="form-label text-muted">Alamat Cabang/Outlet</label>
                        <ul class="list-group">
                            @foreach($submission->branches as $index => $branch)
                            <li class="list-group-item">
                                <strong>Cabang {{ $index + 1 }}:</strong> {{ $branch->branch_address }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Section D: Penyelia Halal dan Referensi -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">D. Penyelia Halal dan Referensi</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Memiliki Penyelia Halal?</label>
                            <p class="fw-bold">{{ $submission->has_halal_supervisor ? 'Ya' : 'Tidak' }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">Sumber Referensi</label>
                            <p class="fw-bold">{{ $submission->referral_source ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->
        @if($submission->products->count() > 0)
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produk yang Diajukan</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 60px;">No.</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th style="width: 100px;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($submission->products as $index => $product)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->description ?? '-' }}</td>
                                    <td>
                                        @if($product->is_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-secondary">Tidak Aktif</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    @push('styles')
    <style>
        .form-label.text-muted {
            font-size: 0.875rem;
            margin-bottom: 0.25rem;
        }
    </style>
    @endpush
</x-layouts.admin.app>
