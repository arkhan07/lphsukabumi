<x-layouts.admin.app>
    <x-slot name="title">Jadwal Audit</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Manajemen Audit</div>
                    <h2 class="page-title">Jadwal Audit</h2>
                    <p class="text-muted mt-1">Kelola jadwal audit sertifikasi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scheduleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Jadwalkan Audit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Success/Error Alerts -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                    </div>
                    <div>{{ session('success') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 8l0 4" /><path d="M12 16l.01 0" /></svg>
                    </div>
                    <div>{{ session('error') }}</div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            <!-- Statistics Cards -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('all')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Jadwal</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['total'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-primary-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-primary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /><path d="M18 16.496v1.504l1 1" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('scheduled')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Terjadwal</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['scheduled'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-cyan-lt">Scheduled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('in_progress')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Berlangsung</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['in_progress'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-yellow-lt">Progress</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('completed')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Selesai</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['completed'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-green-lt">Done</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Stats -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6">
                    <div class="card" style="cursor: pointer;" onclick="filterByStatus('cancelled')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Dibatalkan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['cancelled'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="badge bg-red-lt">Cancelled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Bulan Ini</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ $stats['this_month'] ?? 0 }}</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-purple-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M7 14h.013" /><path d="M10.01 14h.005" /><path d="M13.01 14h.005" /><path d="M16.015 14h.005" /><path d="M13.015 17h.005" /><path d="M7.01 17h.005" /><path d="M10.01 17h.005" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View Toggle -->
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Tampilan Jadwal</h3>
                    <div class="card-actions">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary active" id="calendarViewBtn" onclick="toggleView('calendar')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                Kalender
                            </button>
                            <button type="button" class="btn btn-outline-primary" id="listViewBtn" onclick="toggleView('list')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l11 0" /><path d="M9 12l11 0" /><path d="M9 18l11 0" /><path d="M5 6l0 .01" /><path d="M5 12l0 .01" /><path d="M5 18l0 .01" /></svg>
                                Daftar
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Calendar View -->
                <div id="calendarView" class="card-body">
                    <div id="calendar"></div>
                </div>

                <!-- List View -->
                <div id="listView" style="display: none;">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Jadwal</th>
                                    <th>Permohonan</th>
                                    <th>Auditor</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th class="w-1">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($schedules ?? [] as $index => $schedule)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <div><strong>{{ $schedule->schedule_date ? $schedule->schedule_date->format('d M Y') : '-' }}</strong></div>
                                        <div class="text-muted small">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 7l0 5l3 3" /></svg>
                                            {{ $schedule->start_time ?? '-' }} - {{ $schedule->end_time ?? '-' }}
                                        </div>
                                    </td>
                                    <td>
                                        <div><strong>{{ $schedule->submission->submission_number ?? '-' }}</strong></div>
                                        <div class="text-muted small">{{ $schedule->submission->company_name ?? '-' }}</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-sm me-2" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($schedule->auditor->name ?? 'A') }}&background=206bc4&color=fff)"></span>
                                            <div>{{ $schedule->auditor->name ?? '-' }}</div>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            $activityTypes = [
                                                'document_review' => 'Tinjauan Dokumen',
                                                'on_site_audit' => 'Audit Lapangan',
                                                'follow_up' => 'Tindak Lanjut',
                                                'surveillance' => 'Surveillance',
                                            ];
                                        @endphp
                                        {{ $activityTypes[$schedule->activity_type] ?? ucfirst($schedule->activity_type ?? '-') }}
                                    </td>
                                    <td>
                                        <div class="text-muted small">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                                            {{ $schedule->location ?? '-' }}
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            $statusConfig = [
                                                'scheduled' => ['class' => 'bg-cyan-lt', 'text' => 'Terjadwal'],
                                                'in_progress' => ['class' => 'bg-yellow-lt', 'text' => 'Berlangsung'],
                                                'completed' => ['class' => 'bg-green-lt', 'text' => 'Selesai'],
                                                'cancelled' => ['class' => 'bg-red-lt', 'text' => 'Dibatalkan'],
                                            ];
                                            $config = $statusConfig[$schedule->status] ?? ['class' => 'bg-secondary-lt', 'text' => ucfirst($schedule->status ?? '-')];
                                        @endphp
                                        <span class="badge {{ $config['class'] }}">{{ $config['text'] }}</span>
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="{{ route('admin.audits.schedules.show', $schedule->id) }}" class="btn btn-ghost-primary btn-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                            </a>
                                            @if($schedule->status != 'completed' && $schedule->status != 'cancelled')
                                            <a href="{{ route('admin.audits.schedules.edit', $schedule->id) }}" class="btn btn-ghost-success btn-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                            </a>
                                            @endif
                                            @if($schedule->status == 'scheduled')
                                            <button class="btn btn-ghost-danger btn-icon" onclick="cancelSchedule({{ $schedule->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                            </button>
                                            @endif
                                            @if($schedule->status == 'in_progress')
                                            <button class="btn btn-ghost-info btn-icon" onclick="completeSchedule({{ $schedule->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                            </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">
                                        <div class="empty">
                                            <div class="empty-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /><path d="M18 16.496v1.504l1 1" /></svg>
                                            </div>
                                            <p class="empty-title">Tidak ada jadwal audit</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Schedule Modal -->
    <div class="modal modal-blur fade" id="scheduleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Jadwalkan Audit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('admin.audits.schedules.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label required">Permohonan</label>
                                <select name="submission_id" class="form-select" required>
                                    <option value="">Pilih Permohonan</option>
                                    @foreach($submissions ?? [] as $submission)
                                    <option value="{{ $submission->id }}">
                                        {{ $submission->submission_number }} - {{ $submission->company_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label required">Jenis Kegiatan</label>
                                <select name="activity_type" class="form-select" required>
                                    <option value="">Pilih Jenis Kegiatan</option>
                                    <option value="document_review">Tinjauan Dokumen</option>
                                    <option value="on_site_audit">Audit Lapangan</option>
                                    <option value="follow_up">Tindak Lanjut</option>
                                    <option value="surveillance">Surveillance</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label required">Tanggal Jadwal</label>
                                <input type="date" name="schedule_date" class="form-control" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label required">Waktu Mulai</label>
                                <input type="time" name="start_time" class="form-control" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label required">Waktu Selesai</label>
                                <input type="time" name="end_time" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label required">Auditor Utama</label>
                                <select name="auditor_id" class="form-select" required>
                                    <option value="">Pilih Auditor</option>
                                    @foreach($auditors ?? [] as $auditor)
                                    <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tim Auditor (Opsional)</label>
                                <select name="team_members[]" class="form-select" multiple>
                                    @foreach($auditors ?? [] as $auditor)
                                    <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                                    @endforeach
                                </select>
                                <div class="form-hint">Tahan Ctrl untuk memilih lebih dari satu</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label required">Lokasi Audit</label>
                                <input type="text" name="location" class="form-control" placeholder="Alamat lengkap lokasi audit" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Catatan</label>
                                <textarea name="notes" class="form-control" rows="3" placeholder="Catatan tambahan untuk jadwal audit ini..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                            Simpan Jadwal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css" rel="stylesheet">
    <style>
        .fc-event {
            cursor: pointer;
        }
        .fc-daygrid-event {
            white-space: normal;
        }
    </style>
    @endpush

    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>

    <script>
        let calendar;

        $(document).ready(function() {
            // Initialize Calendar
            const calendarEl = document.getElementById('calendar');
            calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                    @foreach($schedules ?? [] as $schedule)
                    {
                        id: '{{ $schedule->id }}',
                        title: '{{ $schedule->submission->company_name ?? "" }} - {{ $schedule->auditor->name ?? "" }}',
                        start: '{{ $schedule->schedule_date ? $schedule->schedule_date->format("Y-m-d") : "" }}T{{ $schedule->start_time ?? "09:00" }}',
                        end: '{{ $schedule->schedule_date ? $schedule->schedule_date->format("Y-m-d") : "" }}T{{ $schedule->end_time ?? "17:00" }}',
                        backgroundColor: '{{ $schedule->status == "scheduled" ? "#3b82f6" : ($schedule->status == "in_progress" ? "#f59e0b" : ($schedule->status == "completed" ? "#10b981" : "#ef4444")) }}',
                        borderColor: '{{ $schedule->status == "scheduled" ? "#3b82f6" : ($schedule->status == "in_progress" ? "#f59e0b" : ($schedule->status == "completed" ? "#10b981" : "#ef4444")) }}'
                    },
                    @endforeach
                ],
                eventClick: function(info) {
                    window.location.href = '/admin/audits/schedules/' + info.event.id;
                }
            });
            calendar.render();
        });

        function toggleView(view) {
            if (view === 'calendar') {
                document.getElementById('calendarView').style.display = 'block';
                document.getElementById('listView').style.display = 'none';
                document.getElementById('calendarViewBtn').classList.add('active');
                document.getElementById('listViewBtn').classList.remove('active');
                if (calendar) calendar.render();
            } else {
                document.getElementById('calendarView').style.display = 'none';
                document.getElementById('listView').style.display = 'block';
                document.getElementById('calendarViewBtn').classList.remove('active');
                document.getElementById('listViewBtn').classList.add('active');
            }
        }

        function filterByStatus(status) {
            if (status === 'all') {
                window.location.href = '{{ route("admin.audits.schedules.index") }}';
            } else {
                window.location.href = '{{ route("admin.audits.schedules.index") }}?status=' + status;
            }
        }

        function cancelSchedule(id) {
            if (confirm('Apakah Anda yakin ingin membatalkan jadwal audit ini?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/audits/schedules/' + id + '/cancel';

                const csrfField = document.createElement('input');
                csrfField.type = 'hidden';
                csrfField.name = '_token';
                csrfField.value = '{{ csrf_token() }}';

                form.appendChild(csrfField);
                document.body.appendChild(form);
                form.submit();
            }
        }

        function completeSchedule(id) {
            if (confirm('Apakah Anda yakin jadwal audit ini sudah selesai?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/audits/schedules/' + id + '/complete';

                const csrfField = document.createElement('input');
                csrfField.type = 'hidden';
                csrfField.name = '_token';
                csrfField.value = '{{ csrf_token() }}';

                form.appendChild(csrfField);
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
    @endpush
</x-layouts.admin.app>
