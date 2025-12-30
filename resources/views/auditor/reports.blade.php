<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Laporan Audit</h2>
                    <div class="text-muted mt-1">Kelola laporan audit Anda</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('auditor.reports.create') }}" class="btn btn-primary">
                        <i class="ti ti-file-plus me-2"></i>
                        Buat Laporan Baru
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Laporan Audit</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table" id="reportsTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Laporan</th>
                                <th>Perusahaan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($reports as $index => $report)
                            <tr>
                                <td>{{ $index + 1 }}</td>
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
                                    <span class="badge bg-{{ $badge }}">{{ ucfirst($report->status ?? 'draft') }}</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('auditor.reports.show', $report) }}" class="btn btn-sm btn-icon btn-primary">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        @if(($report->status ?? 'draft') === 'draft')
                                        <a href="{{ route('auditor.reports.edit', $report) }}" class="btn btn-sm btn-icon btn-success">
                                            <i class="ti ti-edit"></i>
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <i class="ti ti-file-text"></i>
                                        </div>
                                        <p class="empty-title">Belum ada laporan audit</p>
                                        <p class="empty-subtitle text-muted">
                                            Mulai dengan membuat laporan audit baru
                                        </p>
                                        <div class="empty-action">
                                            <a href="{{ route('auditor.reports.create') }}" class="btn btn-primary">
                                                <i class="ti ti-file-plus me-2"></i>Buat Laporan
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($reports->hasPages())
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">
                                Menampilkan {{ $reports->firstItem() }} sampai {{ $reports->lastItem() }} dari {{ $reports->total() }} laporan
                            </div>
                            {{ $reports->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {
            if ($.fn.DataTable) {
                $('#reportsTable').DataTable({
                    pageLength: 25,
                    order: [[3, 'desc']],
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json'
                    },
                    columnDefs: [
                        { orderable: false, targets: [0, 5] }
                    ]
                });
            }
        });
    </script>
    @endpush
</x-layouts.admin.app>
