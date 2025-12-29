<x-layouts.admin.app>
    <x-slot name="title">Dashboard Pelaku Usaha</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Dashboard Pelaku Usaha</h2>
            <p class="text-secondary-light mb-0">Selamat datang, {{ auth()->user()->name }}! Kelola permohonan sertifikasi halal Anda</p>
        </div>
        <div>
            <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                <i class="ti ti-plus me-2"></i>
                Ajukan Sertifikasi Baru
            </a>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Total Permohonan</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $totalSubmissions }}</div>
                        <small class="text-muted">Semua permohonan</small>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-file-text" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Dalam Proses</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $inProgress }}</div>
                        <small class="text-muted">Menunggu verifikasi</small>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-clock" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Disetujui</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $approved }}</div>
                        <small class="text-muted">Sertifikat aktif</small>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-check" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light mb-1" style="font-size: 0.875rem;">Perlu Perbaikan</div>
                        <div style="font-size: 1.75rem; font-weight: 700; color: var(--neutral-900);">{{ $needsRevision }}</div>
                        <small class="text-muted">Segera diperbaiki</small>
                    </div>
                    <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="ti ti-alert-circle" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Aksi Cepat</h5>
                <div class="row g-3">
                    <div class="col-12 col-md-4">
                        <a href="{{ route('pelaku_usaha.submissions.create') }}" class="d-flex align-items-center p-3 rounded-3 text-decoration-none" style="background-color: var(--neutral-50); transition: all 0.2s;">
                            <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="ti ti-file-plus" style="font-size: 1.25rem; color: var(--neutral-600);"></i>
                            </div>
                            <div>
                                <h6 class="mb-1" style="color: var(--neutral-900);">Pengajuan Baru</h6>
                                <small class="text-secondary-light">Ajukan sertifikasi halal</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="#" class="d-flex align-items-center p-3 rounded-3 text-decoration-none" style="background-color: var(--neutral-50); transition: all 0.2s;">
                            <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="ti ti-list-check" style="font-size: 1.25rem; color: var(--neutral-600);"></i>
                            </div>
                            <div>
                                <h6 class="mb-1" style="color: var(--neutral-900);">Lihat Permohonan</h6>
                                <small class="text-secondary-light">Cek status permohonan</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="#" class="d-flex align-items-center p-3 rounded-3 text-decoration-none" style="background-color: var(--neutral-50); transition: all 0.2s;">
                            <div class="stat-icon" style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="ti ti-upload" style="font-size: 1.25rem; color: var(--neutral-600);"></i>
                            </div>
                            <div>
                                <h6 class="mb-1" style="color: var(--neutral-900);">Kelola Dokumen</h6>
                                <small class="text-secondary-light">Upload dokumen</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Recent Submissions -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-5">
            <div class="card-custom h-100">
                <h5 class="mb-3" style="font-weight: 600;">Status Permohonan</h5>
                <div id="statusChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-7">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0" style="font-weight: 600;">Permohonan Terbaru</h5>
                    <a href="{{ route('pelaku_usaha.submissions.index') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead style="background-color: var(--neutral-50);">
                            <tr>
                                <th style="padding: 1rem; font-weight: 600;">No. Permohonan</th>
                                <th style="padding: 1rem; font-weight: 600;">Produk</th>
                                <th style="padding: 1rem; font-weight: 600;">Tanggal</th>
                                <th style="padding: 1rem; font-weight: 600;">Status</th>
                                <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentSubmissions as $submission)
                            <tr>
                                <td style="padding: 1rem;"><strong>{{ $submission->submission_number }}</strong></td>
                                <td style="padding: 1rem;">{{ $submission->company_name }}</td>
                                <td style="padding: 1rem;">{{ $submission->created_at->format('d M Y') }}</td>
                                <td style="padding: 1rem;">
                                    @if($submission->status == 'draft')
                                        <span class="badge-custom badge-secondary">Draft</span>
                                    @elseif($submission->status == 'submitted')
                                        <span class="badge-custom badge-info">Diajukan</span>
                                    @elseif(in_array($submission->status, ['screening', 'verification', 'in_review']))
                                        <span class="badge-custom badge-warning">Verifikasi</span>
                                    @elseif($submission->status == 'approved')
                                        <span class="badge-custom badge-success">Disetujui</span>
                                    @elseif($submission->status == 'revision_required')
                                        <span class="badge-custom badge-danger">Perlu Perbaikan</span>
                                    @else
                                        <span class="badge-custom badge-secondary">{{ ucfirst($submission->status) }}</span>
                                    @endif
                                </td>
                                <td style="padding: 1rem; text-align: center;">
                                    <a href="{{ route('pelaku_usaha.submissions.show', $submission->id) }}" class="btn btn-sm btn-primary" style="min-width: 38px; min-height: 38px; display: inline-flex; align-items: center; justify-content: center;">
                                        <i class="ti ti-eye" style="font-size: 1.1rem;"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" style="padding: 2rem; text-align: center;" class="text-muted">
                                    <i class="ti ti-inbox" style="font-size: 3rem; display: block; margin-bottom: 1rem; opacity: 0.3;"></i>
                                    Belum ada permohonan. <a href="{{ route('pelaku_usaha.submissions.create') }}">Buat permohonan baru</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        /* Card custom styling */
        .card-custom {
            background: white;
            border: 1px solid var(--neutral-200);
            border-radius: 8px;
            padding: 1.25rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
        }

        .card-custom:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        /* Quick action hover */
        .row a:hover {
            background-color: var(--neutral-100) !important;
        }
    </style>
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var statusOptions = {
            series: [{{ $statusCounts['in_progress'] }}, {{ $statusCounts['approved'] }}, {{ $statusCounts['needs_revision'] }}],
            chart: {
                type: 'donut',
                height: 300
            },
            labels: ['Dalam Proses', 'Disetujui', 'Perlu Perbaikan'],
            colors: ['#f59e0b', '#10b981', '#ef4444'],
            legend: {
                position: 'bottom'
            },
            dataLabels: {
                enabled: true
            },
            noData: {
                text: 'Belum ada data'
            }
        };
        var statusChart = new ApexCharts(document.querySelector("#statusChart"), statusOptions);
        statusChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
