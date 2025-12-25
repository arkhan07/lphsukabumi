<x-layouts.admin.app>
    <x-slot name="title">Detail Jadwal Audit</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Jadwal Audit</h2>
            <p class="text-secondary-light mb-0">{{ $schedule->title }}</p>
        </div>
        <a href="{{ route('admin.audits.schedules') }}" class="btn btn-outline-primary">
            <i class="ri-arrow-left-line me-2"></i>
            Kembali
        </a>
    </div>

    <div class="row g-3">
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Informasi Jadwal</h5>
                    <div>
                        @php
                            $statusBadge = match($schedule->status) {
                                'scheduled' => 'primary',
                                'confirmed' => 'info',
                                'in_progress' => 'warning',
                                'completed' => 'success',
                                'cancelled' => 'danger',
                                default => 'secondary'
                            };
                        @endphp
                        <span class="badge-custom badge-{{ $statusBadge }}">{{ ucfirst($schedule->status) }}</span>
                    </div>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="text-secondary-light">Judul</label>
                            <div style="font-weight: 600;">{{ $schedule->title }}</div>
                        </div>
                        @if($schedule->description)
                        <div class="col-12">
                            <label class="text-secondary-light">Deskripsi</label>
                            <div>{{ $schedule->description }}</div>
                        </div>
                        @endif
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light">Tanggal</label>
                            <div style="font-weight: 600;">{{ $schedule->schedule_date->format('d/m/Y') }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light">Waktu</label>
                            <div style="font-weight: 600;">{{ $schedule->start_time }} - {{ $schedule->end_time }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light">Tipe Aktivitas</label>
                            <div style="font-weight: 600;">{{ ucfirst(str_replace('_', ' ', $schedule->activity_type)) }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light">Durasi</label>
                            <div style="font-weight: 600;">{{ $schedule->duration_minutes }} menit</div>
                        </div>
                        @if($schedule->location)
                        <div class="col-12">
                            <label class="text-secondary-light">Lokasi</label>
                            <div>{{ $schedule->location }}</div>
                            @if($schedule->location_address)
                            <div class="text-secondary-light">{{ $schedule->location_address }}</div>
                            @endif
                        </div>
                        @endif
                        @if($schedule->objectives)
                        <div class="col-12">
                            <label class="text-secondary-light">Objektif</label>
                            <div>{{ $schedule->objectives }}</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Info Permohonan</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nomor Permohonan</label>
                        <div style="font-weight: 600;">{{ $schedule->submission->submission_number }}</div>
                    </div>
                    <div>
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Perusahaan</label>
                        <div style="font-weight: 600;">{{ $schedule->submission->company_name ?? $schedule->submission->user->name }}</div>
                    </div>
                </div>
            </div>

            @if($schedule->status === 'scheduled')
            <div class="card-custom mt-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Aksi</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="d-grid gap-2">
                        <form method="POST" action="{{ route('admin.audits.schedules.complete', $schedule) }}">
                            @csrf
                            <button type="submit" class="btn btn-success w-100">
                                <i class="ri-check-line me-2"></i>
                                Tandai Selesai
                            </button>
                        </form>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#cancelModal">
                            <i class="ri-close-line me-2"></i>
                            Batalkan
                        </button>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Cancel Modal -->
    <div class="modal fade" id="cancelModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.audits.schedules.cancel', $schedule) }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Batalkan Jadwal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="cancellation_reason" class="form-label">Alasan Pembatalan <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="cancellation_reason" name="cancellation_reason" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Batalkan Jadwal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
