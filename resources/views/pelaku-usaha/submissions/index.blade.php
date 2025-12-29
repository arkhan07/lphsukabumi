<x-layouts.admin.app>
    <x-slot name="title">Daftar Permohonan</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Daftar Permohonan</h2>
            <p class="text-secondary-light mb-0">Kelola semua permohonan sertifikasi halal Anda</p>
        </div>
        <div>
            <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                <i class="ti ti-plus me-2"></i>
                Buat Permohonan Baru
            </a>
        </div>
    </div>

    <!-- Submissions Table -->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover data-table">
                    <thead>
                        <tr>
                            <th style="width: 150px;">No. Permohonan</th>
                            <th>Nama Perusahaan</th>
                            <th>Jenis Usaha</th>
                            <th>Wilayah</th>
                            <th>Jumlah Produk</th>
                            <th style="width: 120px;">Tanggal</th>
                            <th style="width: 120px;">Status</th>
                            <th style="width: 100px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($submissions as $submission)
                        <tr>
                            <td><strong>{{ $submission->submission_number }}</strong></td>
                            <td>{{ $submission->company_name }}</td>
                            <td>{{ $submission->businessType->name ?? '-' }}</td>
                            <td>{{ $submission->region->name ?? '-' }}</td>
                            <td>{{ $submission->product_count }} produk</td>
                            <td>{{ $submission->created_at->format('d M Y') }}</td>
                            <td>
                                @if($submission->status == 'draft')
                                    <span class="badge bg-secondary">Draft</span>
                                @elseif($submission->status == 'submitted')
                                    <span class="badge bg-info">Diajukan</span>
                                @elseif(in_array($submission->status, ['screening', 'verification', 'in_review']))
                                    <span class="badge bg-warning">Verifikasi</span>
                                @elseif($submission->status == 'approved')
                                    <span class="badge bg-success">Disetujui</span>
                                @elseif($submission->status == 'revision_required')
                                    <span class="badge bg-danger">Perlu Perbaikan</span>
                                @else
                                    <span class="badge bg-secondary">{{ ucfirst($submission->status) }}</span>
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('pelaku_usaha.submissions.show', $submission->id) }}"
                                   class="btn btn-sm btn-primary"
                                   title="Lihat Detail">
                                    <i class="ti ti-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-5">
                                <div class="text-muted">
                                    <i class="ti ti-inbox" style="font-size: 4rem; opacity: 0.3; display: block; margin-bottom: 1rem;"></i>
                                    <h4>Belum ada permohonan</h4>
                                    <p>Mulai dengan membuat permohonan sertifikasi halal baru</p>
                                    <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary mt-3">
                                        <i class="ti ti-plus me-2"></i>
                                        Buat Permohonan Baru
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        .badge {
            padding: 0.375rem 0.75rem;
            font-weight: 500;
            font-size: 0.8125rem;
        }
    </style>
    @endpush
</x-layouts.admin.app>
