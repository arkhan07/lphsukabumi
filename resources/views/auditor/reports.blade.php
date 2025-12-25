<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Audit</h2>
            <p class="text-secondary-light mb-0">Kelola laporan audit Anda</p>
        </div>
        <a href="{{ route('auditor.reports.create') }}" class="btn btn-primary">
            <i class="ri-file-add-line me-2"></i>
            Buat Laporan Baru
        </a>
    </div>

    <div class="card-custom">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nomor Laporan</th>
                        <th>Perusahaan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reports as $report)
                    <tr>
                        <td><strong>{{ $report->report_number ?? 'N/A' }}</strong></td>
                        <td>{{ $report->audit->submission->company_name ?? 'N/A' }}</td>
                        <td>{{ $report->created_at->format('d/m/Y') }}</td>
                        <td>
                            @php
                                $badge = match($report->status ?? 'draft') {
                                    'draft' => 'secondary',
                                    'submitted' => 'warning',
                                    'approved' => 'success',
                                    default => 'secondary'
                                };
                            @endphp
                            <span class="badge-custom badge-{{ $badge }}">{{ ucfirst($report->status ?? 'draft') }}</span>
                        </td>
                        <td>
                            <a href="{{ route('auditor.reports.show', $report) }}" class="btn btn-sm btn-primary">
                                <i class="ri-eye-line"></i> Detail
                            </a>
                            @if(($report->status ?? 'draft') === 'draft')
                            <a href="{{ route('auditor.reports.edit', $report) }}" class="btn btn-sm btn-warning">
                                <i class="ri-edit-line"></i> Edit
                            </a>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            <i class="ri-file-list-line" style="font-size: 3rem; color: var(--neutral-400);"></i>
                            <p class="text-secondary-light mt-2">Belum ada laporan audit</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($reports->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-3 px-3 pb-3">
            <div class="text-secondary-light">
                Menampilkan {{ $reports->firstItem() }} sampai {{ $reports->lastItem() }} dari {{ $reports->total() }} laporan
            </div>
            {{ $reports->links() }}
        </div>
        @endif
    </div>
</x-layouts.admin.app>
