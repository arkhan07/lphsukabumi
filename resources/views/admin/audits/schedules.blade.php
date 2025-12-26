<x-layouts.admin.app>
    <x-slot name="title">Jadwal Audit</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Jadwal Audit</h2>
            <p class="text-secondary-light mb-0">Kelola jadwal audit sertifikasi halal</p>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scheduleModal">
                <i class="ri-calendar-event-line me-2"></i>
                Jadwalkan Audit
            </button>
        </div>
    </div>

    <!-- Success/Error Alerts -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="ri-checkbox-circle-line me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="ri-error-warning-line me-2"></i>
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600); cursor: pointer;" onclick="filterByStatus('all')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Jadwal</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-calendar-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main); cursor: pointer;" onclick="filterByStatus('scheduled')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Terjadwal</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['scheduled'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-calendar-check-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main); cursor: pointer;" onclick="filterByStatus('in_progress')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Berlangsung</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['in_progress'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main); cursor: pointer;" onclick="filterByStatus('completed')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Selesai</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['completed'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main); cursor: pointer;" onclick="filterByStatus('cancelled')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Dibatalkan</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['cancelled'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-close-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card-custom" style="border-left: 4px solid var(--purple-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Bulan Ini</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['this_month'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon" style="width: 50px; height: 50px; background-color: var(--purple-50); color: var(--purple-600);">
                        <i class="ri-calendar-2-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Toggle -->
    <div class="card-custom mb-4">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Tampilan Jadwal</h5>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary active" id="calendarViewBtn" onclick="toggleView('calendar')">
                    <i class="ri-calendar-view me-1"></i> Kalender
                </button>
                <button type="button" class="btn btn-outline-primary" id="listViewBtn" onclick="toggleView('list')">
                    <i class="ri-list-check me-1"></i> Daftar
                </button>
            </div>
        </div>

        <!-- Calendar View -->
        <div id="calendarView" class="p-3">
            <div id="calendar"></div>
        </div>

        <!-- List View -->
        <div id="listView" class="table-responsive" style="display: none;">
            <table class="table table-hover" id="schedulesTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 50px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal Jadwal</th>
                        <th style="padding: 1rem; font-weight: 600;">Permohonan</th>
                        <th style="padding: 1rem; font-weight: 600;">Auditor</th>
                        <th style="padding: 1rem; font-weight: 600;">Jenis Kegiatan</th>
                        <th style="padding: 1rem; font-weight: 600;">Lokasi</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($schedules ?? [] as $index => $schedule)
                    <tr>
                        <td style="padding: 1rem;">{{ $index + 1 }}</td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $schedule->schedule_date ? $schedule->schedule_date->format('d M Y') : '-' }}</div>
                            <small class="text-secondary-light">
                                <i class="ri-time-line"></i> {{ $schedule->start_time ?? '-' }} - {{ $schedule->end_time ?? '-' }}
                            </small>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $schedule->submission->submission_number ?? '-' }}</div>
                            <small class="text-secondary-light">{{ $schedule->submission->company_name ?? '-' }}</small>
                        </td>
                        <td style="padding: 1rem;">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($schedule->auditor->name ?? 'A') }}&background=3b82f6&color=fff"
                                     style="width: 30px; height: 30px; border-radius: 50%;">
                                <span>{{ $schedule->auditor->name ?? '-' }}</span>
                            </div>
                        </td>
                        <td style="padding: 1rem;">
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
                        <td style="padding: 1rem;">
                            <i class="ri-map-pin-line text-secondary-light"></i>
                            {{ $schedule->location ?? '-' }}
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $statusConfig = [
                                    'scheduled' => ['class' => 'badge-info', 'icon' => 'ri-calendar-check-line', 'text' => 'Terjadwal'],
                                    'in_progress' => ['class' => 'badge-warning', 'icon' => 'ri-time-line', 'text' => 'Berlangsung'],
                                    'completed' => ['class' => 'badge-success', 'icon' => 'ri-checkbox-circle-line', 'text' => 'Selesai'],
                                    'cancelled' => ['class' => 'badge-danger', 'icon' => 'ri-close-circle-line', 'text' => 'Dibatalkan'],
                                ];
                                $config = $statusConfig[$schedule->status] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => ucfirst($schedule->status ?? '-')];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}">
                                <i class="{{ $config['icon'] }} me-1"></i>
                                {{ $config['text'] }}
                            </span>
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <a href="{{ route('admin.audits.schedules.show', $schedule->id) }}" class="btn btn-outline-primary" title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                @if($schedule->status != 'completed' && $schedule->status != 'cancelled')
                                <a href="{{ route('admin.audits.schedules.edit', $schedule->id) }}" class="btn btn-outline-success" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                @endif
                                @if($schedule->status == 'scheduled')
                                <button class="btn btn-outline-danger" onclick="cancelSchedule({{ $schedule->id }})" title="Batalkan">
                                    <i class="ri-close-line"></i>
                                </button>
                                @endif
                                @if($schedule->status == 'in_progress')
                                <button class="btn btn-outline-info" onclick="completeSchedule({{ $schedule->id }})" title="Selesaikan">
                                    <i class="ri-check-line"></i>
                                </button>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center" style="padding: 3rem;">
                            <i class="ri-calendar-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="text-secondary-light mt-2 mb-0">Tidak ada jadwal audit</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Create Schedule Modal -->
    <div class="modal fade" id="scheduleModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="ri-calendar-event-line me-2"></i>
                        Jadwalkan Audit
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="{{ route('admin.audits.schedules.store') }}" id="scheduleForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 500;">Permohonan <span class="text-danger">*</span></label>
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
                                <label class="form-label" style="font-weight: 500;">Jenis Kegiatan <span class="text-danger">*</span></label>
                                <select name="activity_type" class="form-select" required>
                                    <option value="">Pilih Jenis Kegiatan</option>
                                    <option value="document_review">Tinjauan Dokumen</option>
                                    <option value="on_site_audit">Audit Lapangan</option>
                                    <option value="follow_up">Tindak Lanjut</option>
                                    <option value="surveillance">Surveillance</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 500;">Tanggal Jadwal <span class="text-danger">*</span></label>
                                <input type="date" name="schedule_date" class="form-control" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" style="font-weight: 500;">Waktu Mulai <span class="text-danger">*</span></label>
                                <input type="time" name="start_time" class="form-control" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" style="font-weight: 500;">Waktu Selesai <span class="text-danger">*</span></label>
                                <input type="time" name="end_time" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 500;">Auditor Utama <span class="text-danger">*</span></label>
                                <select name="auditor_id" class="form-select" required>
                                    <option value="">Pilih Auditor</option>
                                    @foreach($auditors ?? [] as $auditor)
                                    <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 500;">Tim Auditor (Opsional)</label>
                                <select name="team_members[]" class="form-select" multiple>
                                    @foreach($auditors ?? [] as $auditor)
                                    <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                                    @endforeach
                                </select>
                                <small class="text-secondary-light">Tahan Ctrl untuk memilih lebih dari satu</small>
                            </div>

                            <div class="col-12">
                                <label class="form-label" style="font-weight: 500;">Lokasi Audit <span class="text-danger">*</span></label>
                                <input type="text" name="location" class="form-control" placeholder="Alamat lengkap lokasi audit" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label" style="font-weight: 500;">Catatan</label>
                                <textarea name="notes" class="form-control" rows="3" placeholder="Catatan tambahan untuk jadwal audit ini..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ri-save-line me-2"></i>
                            Simpan Jadwal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        let calendar;
        let dataTable;

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

                // Initialize DataTable only when list view is shown
                if (!dataTable) {
                    dataTable = $('#schedulesTable').DataTable({
                        language: {
                            lengthMenu: "Tampilkan _MENU_ data per halaman",
                            zeroRecords: "Data tidak ditemukan",
                            info: "Menampilkan halaman _PAGE_ dari _PAGES_",
                            infoEmpty: "Tidak ada data tersedia",
                            infoFiltered: "(difilter dari _MAX_ total data)",
                            search: "Cari:",
                            paginate: {
                                first: "Pertama",
                                last: "Terakhir",
                                next: "Selanjutnya",
                                previous: "Sebelumnya"
                            }
                        },
                        order: [[1, 'asc']],
                        pageLength: 10
                    });
                } else {
                    // Adjust column sizing if already initialized
                    dataTable.columns.adjust().draw();
                }
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
