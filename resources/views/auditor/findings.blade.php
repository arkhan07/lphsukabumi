<x-layouts.admin.app>
    <x-slot name="title">Temuan Audit</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Temuan Audit</h2>
            <p class="text-secondary-light mb-0">Kelola temuan dari proses audit</p>
        </div>
        <a href="{{ route('auditor.findings.create') }}" class="btn btn-primary">
            <i class="ri-file-add-line me-2"></i>
            Tambah Temuan
        </a>
    </div>

    <div class="card-custom">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nomor Temuan</th>
                        <th>Perusahaan</th>
                        <th>Jenis Temuan</th>
                        <th>Tingkat Keparahan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($findings as $finding)
                    <tr>
                        <td><strong>{{ $finding->finding_number ?? 'N/A' }}</strong></td>
                        <td>{{ $finding->audit->submission->company_name ?? 'N/A' }}</td>
                        <td>{{ ucfirst(str_replace('_', ' ', $finding->finding_type ?? '')) }}</td>
                        <td>
                            @php
                                $severityBadge = match($finding->severity ?? 'low') {
                                    'critical' => 'danger',
                                    'high' => 'warning',
                                    'medium' => 'info',
                                    'low' => 'secondary',
                                    default => 'secondary'
                                };
                            @endphp
                            <span class="badge-custom badge-{{ $severityBadge }}">{{ ucfirst($finding->severity ?? 'low') }}</span>
                        </td>
                        <td>
                            @php
                                $statusBadge = match($finding->status ?? 'open') {
                                    'open' => 'danger',
                                    'in_progress' => 'warning',
                                    'resolved' => 'success',
                                    'closed' => 'secondary',
                                    default => 'secondary'
                                };
                            @endphp
                            <span class="badge-custom badge-{{ $statusBadge }}">{{ ucfirst($finding->status ?? 'open') }}</span>
                        </td>
                        <td>
                            <a href="{{ route('auditor.findings.show', $finding) }}" class="btn btn-sm btn-primary">
                                <i class="ri-eye-line"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">
                            <i class="ri-file-search-line" style="font-size: 3rem; color: var(--neutral-400);"></i>
                            <p class="text-secondary-light mt-2">Belum ada temuan audit</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($findings->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-3 px-3 pb-3">
            <div class="text-secondary-light">
                Menampilkan {{ $findings->firstItem() }} sampai {{ $findings->lastItem() }} dari {{ $findings->total() }} temuan
            </div>
            {{ $findings->links() }}
        </div>
        @endif
    </div>
</x-layouts.admin.app>
