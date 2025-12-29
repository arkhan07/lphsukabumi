<x-layouts.admin.app>
    <x-slot name="title">Produk Saya</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Produk Saya</h2>
                    <div class="text-muted mt-1">Daftar produk yang terdaftar dari permohonan sertifikasi halal</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Produk</h3>
                </div>
                <div class="card-body">
                    @if($products->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Permohonan</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th class="w-1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $index => $product)
                                        <tr>
                                            <td>{{ $products->firstItem() + $index }}</td>
                                            <td>
                                                <div class="fw-bold">{{ $product->product_name }}</div>
                                            </td>
                                            <td>
                                                <div class="text-muted">{{ $product->submission->submission_number }}</div>
                                                <div class="small text-muted">{{ $product->submission->company_name }}</div>
                                            </td>
                                            <td>
                                                <div class="text-truncate" style="max-width: 200px;">
                                                    {{ $product->description ?? '-' }}
                                                </div>
                                            </td>
                                            <td>
                                                @if($product->is_active)
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-secondary">Non-Aktif</span>
                                                @endif
                                            </td>
                                            <td>{{ $product->created_at->format('d M Y') }}</td>
                                            <td>
                                                <a href="{{ route('pelaku_usaha.products.show', $product->id) }}" class="btn btn-sm btn-icon btn-primary" title="Lihat Detail">
                                                    <i class="ti ti-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $products->links() }}
                        </div>
                    @else
                        <div class="empty">
                            <div class="empty-icon">
                                <i class="ti ti-package"></i>
                            </div>
                            <p class="empty-title">Belum ada produk</p>
                            <p class="empty-subtitle text-muted">
                                Produk akan otomatis ditambahkan saat Anda membuat permohonan sertifikasi halal
                            </p>
                            <div class="empty-action">
                                <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                                    <i class="ti ti-plus me-2"></i>Buat Permohonan Baru
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
