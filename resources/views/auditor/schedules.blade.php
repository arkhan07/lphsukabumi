<x-layouts.admin.app>
    <x-slot name="title">Jadwal Audit Saya</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Jadwal Audit Saya</h2>
                    <div class="text-muted mt-1">Daftar jadwal audit yang ditugaskan kepada Anda</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Jadwal Audit</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table" id="schedulesTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal & Waktu</th>
                                <th>Perusahaan</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($schedules as $index => $schedule)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $schedule->scheduled_date->format('d/m/Y H:i') }}</td>
                                <td>{{ $schedule->audit->submission->company_name ?? 'N/A' }}</td>
                                <td>{{ $schedule->location ?? 'N/A' }}</td>
                                <td>
                                    @php
                                        $badge = match($schedule->status) {
                                            'scheduled' => 'azure',
                                            'in_progress' => 'warning',
                                            'completed' => 'success',
                                            'cancelled' => 'danger',
                                            default => 'secondary'
                                        };
                                    @endphp
                                    <span class="badge bg-{{ $badge }}">{{ ucfirst($schedule->status) }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('auditor.schedules.show', $schedule) }}" class="btn btn-sm btn-icon btn-primary">
                                        <i class="ti ti-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <i class="ti ti-calendar"></i>
                                        </div>
                                        <p class="empty-title">Belum ada jadwal audit</p>
                                        <p class="empty-subtitle text-muted">
                                            Jadwal audit akan muncul setelah ditugaskan oleh admin
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($schedules->hasPages())
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">
                                Menampilkan {{ $schedules->firstItem() }} sampai {{ $schedules->lastItem() }} dari {{ $schedules->total() }} jadwal
                            </div>
                            {{ $schedules->links() }}
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
                $('#schedulesTable').DataTable({
                    pageLength: 25,
                    order: [[1, 'desc']],
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
