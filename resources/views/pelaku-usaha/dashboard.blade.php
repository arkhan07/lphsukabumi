<x-layouts.admin.app>
    <x-slot name="title">Dashboard Pelaku Usaha</x-slot>

    <!-- Page Header -->
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title">Dashboard Pelaku Usaha</h2>
                <p class="text-muted mb-0">Selamat datang, <strong>{{ auth()->user()->name }}</strong>! Kelola permohonan sertifikasi halal Anda</p>
            </div>
            <div class="col-auto">
                <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                    <i class="ti ti-plus me-2"></i>
                    Buat Permohonan Baru
                </a>
            </div>
        </div>
    </div>

    <!-- Analytics Cards -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="ti ti-chart-line me-2"></i>
                        Ringkasan Permohonan
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- Total Permohonan -->
                        <div class="col-6 col-lg-3">
                            <div class="analytics-card analytics-primary">
                                <div class="analytics-icon">
                                    <i class="ti ti-file-text"></i>
                                </div>
                                <div class="analytics-content">
                                    <div class="analytics-label">Total Permohonan</div>
                                    <div class="analytics-number" data-target="{{ $totalSubmissions }}">0</div>
                                    <div class="analytics-desc">Semua permohonan</div>
                                </div>
                            </div>
                        </div>

                        <!-- Dalam Proses -->
                        <div class="col-6 col-lg-3">
                            <div class="analytics-card analytics-warning">
                                <div class="analytics-icon">
                                    <i class="ti ti-clock"></i>
                                </div>
                                <div class="analytics-content">
                                    <div class="analytics-label">Dalam Proses</div>
                                    <div class="analytics-number" data-target="{{ $inProgress }}">0</div>
                                    <div class="analytics-desc">Menunggu verifikasi</div>
                                </div>
                            </div>
                        </div>

                        <!-- Disetujui -->
                        <div class="col-6 col-lg-3">
                            <div class="analytics-card analytics-success">
                                <div class="analytics-icon">
                                    <i class="ti ti-circle-check"></i>
                                </div>
                                <div class="analytics-content">
                                    <div class="analytics-label">Disetujui</div>
                                    <div class="analytics-number" data-target="{{ $approved }}">0</div>
                                    <div class="analytics-desc">Sertifikat aktif</div>
                                </div>
                            </div>
                        </div>

                        <!-- Perlu Perbaikan -->
                        <div class="col-6 col-lg-3">
                            <div class="analytics-card analytics-danger">
                                <div class="analytics-icon">
                                    <i class="ti ti-alert-circle"></i>
                                </div>
                                <div class="analytics-content">
                                    <div class="analytics-label">Perlu Perbaikan</div>
                                    <div class="analytics-number" data-target="{{ $needsRevision }}">0</div>
                                    <div class="analytics-desc">Segera diperbaiki</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="ti ti-bolt me-2"></i>
                        Aksi Cepat
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="{{ route('pelaku_usaha.submissions.create') }}" class="quick-action-card">
                                <div class="quick-action-icon quick-action-primary">
                                    <i class="ti ti-file-plus"></i>
                                </div>
                                <div class="quick-action-content">
                                    <h4>Pengajuan Baru</h4>
                                    <p>Ajukan sertifikasi halal baru</p>
                                </div>
                                <div class="quick-action-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{ route('pelaku_usaha.submissions.index') }}" class="quick-action-card">
                                <div class="quick-action-icon quick-action-success">
                                    <i class="ti ti-list-check"></i>
                                </div>
                                <div class="quick-action-content">
                                    <h4>Lihat Permohonan</h4>
                                    <p>Cek status permohonan Anda</p>
                                </div>
                                <div class="quick-action-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#" class="quick-action-card">
                                <div class="quick-action-icon quick-action-info">
                                    <i class="ti ti-upload"></i>
                                </div>
                                <div class="quick-action-content">
                                    <h4>Kelola Dokumen</h4>
                                    <p>Upload & kelola dokumen</p>
                                </div>
                                <div class="quick-action-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row g-4">
        <!-- Status Chart -->
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="ti ti-chart-donut-2 me-2"></i>
                        Status Permohonan
                    </h3>
                </div>
                <div class="card-body">
                    @if($totalSubmissions > 0)
                        <div id="statusChart" class="mb-3"></div>
                        <div class="chart-stats">
                            <div class="chart-stat-item">
                                <span class="chart-stat-dot bg-warning"></span>
                                <span class="chart-stat-label">Dalam Proses</span>
                                <span class="chart-stat-value">{{ $inProgress }}</span>
                            </div>
                            <div class="chart-stat-item">
                                <span class="chart-stat-dot bg-success"></span>
                                <span class="chart-stat-label">Disetujui</span>
                                <span class="chart-stat-value">{{ $approved }}</span>
                            </div>
                            <div class="chart-stat-item">
                                <span class="chart-stat-dot bg-danger"></span>
                                <span class="chart-stat-label">Perlu Perbaikan</span>
                                <span class="chart-stat-value">{{ $needsRevision }}</span>
                            </div>
                        </div>
                    @else
                        <div class="empty-chart">
                            <i class="ti ti-chart-pie"></i>
                            <p>Belum ada data untuk ditampilkan</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recent Submissions -->
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="ti ti-history me-2"></i>
                        Permohonan Terbaru
                    </h3>
                    <div class="card-actions">
                        <a href="{{ route('pelaku_usaha.submissions.index') }}" class="btn btn-sm btn-primary">
                            Lihat Semua
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse($recentSubmissions as $submission)
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar avatar-md">
                                            @if($submission->status == 'draft')
                                                <i class="ti ti-file-text"></i>
                                            @elseif($submission->status == 'submitted')
                                                <i class="ti ti-send"></i>
                                            @elseif(in_array($submission->status, ['screening', 'verification', 'in_review']))
                                                <i class="ti ti-clock"></i>
                                            @elseif($submission->status == 'approved')
                                                <i class="ti ti-circle-check"></i>
                                            @else
                                                <i class="ti ti-alert-circle"></i>
                                            @endif
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="text-truncate">
                                            <strong>{{ $submission->submission_number }}</strong>
                                        </div>
                                        <div class="text-muted">{{ $submission->company_name }}</div>
                                    </div>
                                    <div class="col-auto">
                                        @if($submission->status == 'draft')
                                            <span class="badge bg-secondary">Draft</span>
                                        @elseif($submission->status == 'submitted')
                                            <span class="badge bg-azure">Diajukan</span>
                                        @elseif(in_array($submission->status, ['screening', 'verification', 'in_review']))
                                            <span class="badge bg-warning">Verifikasi</span>
                                        @elseif($submission->status == 'approved')
                                            <span class="badge bg-success">Disetujui</span>
                                        @elseif($submission->status == 'revision_required')
                                            <span class="badge bg-danger">Perlu Perbaikan</span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst($submission->status) }}</span>
                                        @endif
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('pelaku_usaha.submissions.show', $submission->id) }}" class="btn btn-sm btn-icon">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="list-group-item">
                                <div class="empty-list">
                                    <i class="ti ti-inbox"></i>
                                    <h4>Belum ada permohonan</h4>
                                    <p>Mulai dengan membuat permohonan sertifikasi halal baru</p>
                                    <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary mt-2">
                                        <i class="ti ti-plus me-2"></i>Buat Permohonan
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        /* Page Header */
        .page-header {
            margin-bottom: 1.5rem;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }

        /* Analytics Cards */
        .analytics-card {
            display: flex;
            align-items: center;
            padding: 1.25rem;
            border-radius: 8px;
            background: #fff;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            height: 100%;
        }

        .analytics-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        .analytics-icon {
            width: 56px;
            height: 56px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .analytics-primary .analytics-icon {
            background: #dbeafe;
            color: #1e40af;
        }

        .analytics-warning .analytics-icon {
            background: #fef3c7;
            color: #92400e;
        }

        .analytics-success .analytics-icon {
            background: #d1fae5;
            color: #065f46;
        }

        .analytics-danger .analytics-icon {
            background: #fee2e2;
            color: #991b1b;
        }

        .analytics-content {
            flex: 1;
        }

        .analytics-label {
            font-size: 0.875rem;
            color: #64748b;
            margin-bottom: 0.25rem;
        }

        .analytics-number {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            line-height: 1;
            margin-bottom: 0.25rem;
        }

        .analytics-desc {
            font-size: 0.75rem;
            color: #94a3b8;
        }

        /* Quick Action Cards */
        .quick-action-card {
            display: flex;
            align-items: center;
            padding: 1.25rem;
            border-radius: 8px;
            background: #f8fafc;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .quick-action-card:hover {
            background: #fff;
            border-color: #e2e8f0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            transform: translateX(4px);
        }

        .quick-action-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .quick-action-primary {
            background: #dbeafe;
            color: #1e40af;
        }

        .quick-action-success {
            background: #d1fae5;
            color: #065f46;
        }

        .quick-action-info {
            background: #e0e7ff;
            color: #3730a3;
        }

        .quick-action-content {
            flex: 1;
        }

        .quick-action-content h4 {
            font-size: 1rem;
            font-weight: 600;
            color: #1e293b;
            margin: 0 0 0.25rem 0;
        }

        .quick-action-content p {
            font-size: 0.875rem;
            color: #64748b;
            margin: 0;
        }

        .quick-action-arrow {
            color: #cbd5e1;
            font-size: 1.25rem;
            transition: all 0.3s ease;
        }

        .quick-action-card:hover .quick-action-arrow {
            color: #3b82f6;
            transform: translateX(4px);
        }

        /* Chart Stats */
        .chart-stats {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .chart-stat-item {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            border-radius: 6px;
            background: #f8fafc;
        }

        .chart-stat-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 0.75rem;
            flex-shrink: 0;
        }

        .chart-stat-label {
            flex: 1;
            font-size: 0.875rem;
            color: #64748b;
        }

        .chart-stat-value {
            font-weight: 600;
            color: #1e293b;
            font-size: 0.875rem;
        }

        /* Avatar */
        .avatar {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 0.5rem;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: #64748b;
        }

        /* Empty States */
        .empty-chart {
            text-align: center;
            padding: 3rem 1rem;
        }

        .empty-chart i {
            font-size: 4rem;
            color: #cbd5e1;
            display: block;
            margin-bottom: 1rem;
        }

        .empty-chart p {
            color: #94a3b8;
            margin: 0;
        }

        .empty-list {
            text-align: center;
            padding: 3rem 1rem;
        }

        .empty-list i {
            font-size: 4rem;
            color: #cbd5e1;
            display: block;
            margin-bottom: 1rem;
        }

        .empty-list h4 {
            color: #475569;
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .empty-list p {
            color: #94a3b8;
            margin-bottom: 0;
        }

        /* List Group */
        .list-group-item {
            padding: 1rem 1.5rem;
            border: none;
            border-bottom: 1px solid #f1f5f9;
        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .list-group-item:hover {
            background: #f8fafc;
        }

        /* Card Customizations */
        .card {
            border: 1px solid #e2e8f0;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .card-header {
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
            padding: 1rem 1.5rem;
        }

        .card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1e293b;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .card-actions {
            margin-left: auto;
        }

        /* Counter Animation */
        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .analytics-number {
            animation: countUp 0.6s ease;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .analytics-number {
                font-size: 1.5rem;
            }

            .analytics-icon {
                width: 48px;
                height: 48px;
                font-size: 1.5rem;
            }

            .quick-action-card {
                padding: 1rem;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Animated Counter
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            let current = 0;
            const increment = target / 30;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 50);
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Animate all counters
            document.querySelectorAll('.analytics-number').forEach(animateCounter);

            // Initialize chart
            @if($totalSubmissions > 0)
            var statusOptions = {
                series: [{{ $statusCounts['in_progress'] }}, {{ $statusCounts['approved'] }}, {{ $statusCounts['needs_revision'] }}],
                chart: {
                    type: 'donut',
                    height: 280,
                    fontFamily: 'inherit'
                },
                labels: ['Dalam Proses', 'Disetujui', 'Perlu Perbaikan'],
                colors: ['#f59e0b', '#10b981', '#ef4444'],
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: true,
                    style: {
                        fontSize: '14px',
                        fontWeight: 600
                    }
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%',
                            labels: {
                                show: true,
                                total: {
                                    show: true,
                                    label: 'Total',
                                    fontSize: '14px',
                                    color: '#64748b',
                                    formatter: function (w) {
                                        return w.globals.seriesTotals.reduce((a, b) => a + b, 0)
                                    }
                                },
                                value: {
                                    fontSize: '28px',
                                    fontWeight: 700,
                                    color: '#1e293b'
                                }
                            }
                        }
                    }
                },
                stroke: {
                    width: 0
                }
            };
            var statusChart = new ApexCharts(document.querySelector("#statusChart"), statusOptions);
            statusChart.render();
            @endif
        });
    </script>
    @endpush
</x-layouts.admin.app>
