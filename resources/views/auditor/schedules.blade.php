<x-layouts.admin.app>
    <x-slot name="title">Jadwal Audit Saya</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Jadwal Audit Saya</h2>
            <p class="text-secondary-light mb-0">Daftar jadwal audit yang ditugaskan kepada Anda</p>
        </div>
    </div>

    <div class="card-custom">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tanggal & Waktu</th>
                        <th>Perusahaan</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->scheduled_date->format('d/m/Y H:i') }}</td>
                        <td>{{ $schedule->audit->submission->company_name ?? 'N/A' }}</td>
                        <td>{{ $schedule->location ?? 'N/A' }}</td>
                        <td>
                            @php
                                $badge = match($schedule->status) {
                                    'scheduled' => 'primary',
                                    'in_progress' => 'warning',
                                    'completed' => 'success',
                                    'cancelled' => 'danger',
                                    default => 'secondary'
                                };
                            @endphp
                            <span class="badge-custom badge-{{ $badge }}">{{ ucfirst($schedule->status) }}</span>
                        </td>
                        <td>
                            <a href="{{ route('auditor.schedules.show', $schedule) }}" class="btn btn-sm btn-primary">
                                <i class="ri-eye-line"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            <i class="ri-calendar-line" style="font-size: 3rem; color: var(--neutral-400);"></i>
                            <p class="text-secondary-light mt-2">Belum ada jadwal audit</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($schedules->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-3 px-3 pb-3">
            <div class="text-secondary-light">
                Menampilkan {{ $schedules->firstItem() }} sampai {{ $schedules->lastItem() }} dari {{ $schedules->total() }} jadwal
            </div>
            {{ $schedules->links() }}
        </div>
        @endif
    </div>
</x-layouts.admin.app>
