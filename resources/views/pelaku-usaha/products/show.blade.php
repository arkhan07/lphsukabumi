<x-layouts.admin.app>
    <x-slot name="title">Detail Produk</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Detail Produk</h2>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('pelaku_usaha.products.index') }}" class="btn btn-outline-secondary">
                        <i class="ti ti-arrow-left me-2"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <!-- Product Information -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Produk</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Nama Produk</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $product->product_name }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Deskripsi</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $product->description ?? '-' }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Status</label>
                                </div>
                                <div class="col-md-8">
                                    @if($product->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Non-Aktif</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Tanggal Dibuat</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $product->created_at->format('d F Y H:i') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submission Information -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Permohonan</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Nomor Permohonan</label>
                                <div class="fw-bold">{{ $product->submission->submission_number }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Perusahaan</label>
                                <div>{{ $product->submission->company_name }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status Permohonan</label>
                                <div>
                                    @if($product->submission->status == 'draft')
                                        <span class="badge bg-secondary">Draft</span>
                                    @elseif($product->submission->status == 'submitted')
                                        <span class="badge bg-azure">Diajukan</span>
                                    @elseif(in_array($product->submission->status, ['screening', 'verification', 'in_review']))
                                        <span class="badge bg-warning">Verifikasi</span>
                                    @elseif($product->submission->status == 'approved')
                                        <span class="badge bg-success">Disetujui</span>
                                    @elseif($product->submission->status == 'revision_required')
                                        <span class="badge bg-danger">Perlu Perbaikan</span>
                                    @else
                                        <span class="badge bg-secondary">{{ ucfirst($product->submission->status) }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('pelaku_usaha.submissions.show', $product->submission->id) }}" class="btn btn-primary w-100">
                                    <i class="ti ti-eye me-2"></i>Lihat Permohonan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
