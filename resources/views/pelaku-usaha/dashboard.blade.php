<x-layouts.admin.app>
    <x-slot name="title">Dashboard Pelaku Usaha</x-slot>

    <!-- Welcome Banner -->
    <div class="welcome-banner mb-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="mb-2" style="font-size: 2rem; font-weight: 700; color: #1a202c;">
                    Selamat Datang, {{ auth()->user()->name }}! 👋
                </h2>
                <p class="mb-0" style="font-size: 1rem; color: #64748b;">
                    Kelola dan pantau permohonan sertifikasi halal Anda dengan mudah
                </p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-lg btn-gradient-primary">
                    <i class="ti ti-plus me-2"></i>
                    Ajukan Sertifikasi Baru
                </a>
            </div>
        </div>
    </div>

    <!-- Statistics Cards with Gradient -->
    <div class="row g-4 mb-4">
        <!-- Total Permohonan -->
        <div class="col-6 col-lg-3">
            <div class="stat-card stat-card-primary">
                <div class="stat-card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="stat-icon-wrapper stat-icon-primary">
                            <i class="ti ti-file-text"></i>
                        </div>
                        <span class="badge badge-light-primary">Total</span>
                    </div>
                    <h3 class="stat-number mb-1" data-target="{{ $totalSubmissions }}">0</h3>
                    <p class="stat-label mb-2">Total Permohonan</p>
                    <div class="progress-thin">
                        <div class="progress-bar bg-primary" style="width: 100%"></div>
                    </div>
                    <small class="stat-hint mt-2">Semua permohonan Anda</small>
                </div>
            </div>
        </div>

        <!-- Dalam Proses -->
        <div class="col-6 col-lg-3">
            <div class="stat-card stat-card-warning">
                <div class="stat-card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="stat-icon-wrapper stat-icon-warning">
                            <i class="ti ti-clock"></i>
                        </div>
                        <span class="badge badge-light-warning">Proses</span>
                    </div>
                    <h3 class="stat-number mb-1" data-target="{{ $inProgress }}">0</h3>
                    <p class="stat-label mb-2">Dalam Proses</p>
                    <div class="progress-thin">
                        <div class="progress-bar bg-warning" style="width: {{ $totalSubmissions > 0 ? ($inProgress / $totalSubmissions * 100) : 0 }}%"></div>
                    </div>
                    <small class="stat-hint mt-2">Menunggu verifikasi</small>
                </div>
            </div>
        </div>

        <!-- Disetujui -->
        <div class="col-6 col-lg-3">
            <div class="stat-card stat-card-success">
                <div class="stat-card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="stat-icon-wrapper stat-icon-success">
                            <i class="ti ti-check-circle"></i>
                        </div>
                        <span class="badge badge-light-success">Approved</span>
                    </div>
                    <h3 class="stat-number mb-1" data-target="{{ $approved }}">0</h3>
                    <p class="stat-label mb-2">Disetujui</p>
                    <div class="progress-thin">
                        <div class="progress-bar bg-success" style="width: {{ $totalSubmissions > 0 ? ($approved / $totalSubmissions * 100) : 0 }}%"></div>
                    </div>
                    <small class="stat-hint mt-2">Sertifikat aktif</small>
                </div>
            </div>
        </div>

        <!-- Perlu Perbaikan -->
        <div class="col-6 col-lg-3">
            <div class="stat-card stat-card-danger">
                <div class="stat-card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="stat-icon-wrapper stat-icon-danger">
                            <i class="ti ti-alert-circle"></i>
                        </div>
                        <span class="badge badge-light-danger">Action</span>
                    </div>
                    <h3 class="stat-number mb-1" data-target="{{ $needsRevision }}">0</h3>
                    <p class="stat-label mb-2">Perlu Perbaikan</p>
                    <div class="progress-thin">
                        <div class="progress-bar bg-danger" style="width: {{ $totalSubmissions > 0 ? ($needsRevision / $totalSubmissions * 100) : 0 }}%"></div>
                    </div>
                    <small class="stat-hint mt-2">Segera diperbaiki</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions Grid -->
    <div class="row g-4 mb-4">
        <div class="col-12">
            <h5 class="mb-3" style="font-weight: 600; font-size: 1.25rem; color: #1a202c;">
                <i class="ti ti-bolt me-2" style="color: #f59e0b;"></i>Aksi Cepat
            </h5>
        </div>

        <div class="col-md-4">
            <a href="{{ route('pelaku_usaha.submissions.create') }}" class="action-card action-card-blue">
                <div class="action-card-icon">
                    <i class="ti ti-file-plus"></i>
                </div>
                <div class="action-card-content">
                    <h6 class="action-card-title">Pengajuan Baru</h6>
                    <p class="action-card-desc">Ajukan sertifikasi halal baru</p>
                </div>
                <div class="action-card-arrow">
                    <i class="ti ti-arrow-right"></i>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('pelaku_usaha.submissions.index') }}" class="action-card action-card-green">
                <div class="action-card-icon">
                    <i class="ti ti-list-check"></i>
                </div>
                <div class="action-card-content">
                    <h6 class="action-card-title">Lihat Permohonan</h6>
                    <p class="action-card-desc">Cek status permohonan Anda</p>
                </div>
                <div class="action-card-arrow">
                    <i class="ti ti-arrow-right"></i>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="action-card action-card-purple">
                <div class="action-card-icon">
                    <i class="ti ti-upload"></i>
                </div>
                <div class="action-card-content">
                    <h6 class="action-card-title">Kelola Dokumen</h6>
                    <p class="action-card-desc">Upload & kelola dokumen</p>
                </div>
                <div class="action-card-arrow">
                    <i class="ti ti-arrow-right"></i>
                </div>
            </a>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="row g-4">
        <!-- Status Chart -->
        <div class="col-12 col-lg-5">
            <div class="modern-card">
                <div class="modern-card-header">
                    <h5 class="modern-card-title">
                        <i class="ti ti-chart-donut-2 me-2" style="color: #3b82f6;"></i>
                        Status Permohonan
                    </h5>
                </div>
                <div class="modern-card-body">
                    @if($totalSubmissions > 0)
                        <div id="statusChart"></div>
                        <div class="chart-legend mt-4">
                            <div class="legend-item">
                                <span class="legend-dot" style="background: #f59e0b;"></span>
                                <span class="legend-label">Dalam Proses</span>
                                <span class="legend-value">{{ $inProgress }}</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-dot" style="background: #10b981;"></span>
                                <span class="legend-label">Disetujui</span>
                                <span class="legend-value">{{ $approved }}</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-dot" style="background: #ef4444;"></span>
                                <span class="legend-label">Perlu Perbaikan</span>
                                <span class="legend-value">{{ $needsRevision }}</span>
                            </div>
                        </div>
                    @else
                        <div class="empty-state py-5">
                            <i class="ti ti-chart-pie" style="font-size: 4rem; color: #cbd5e1; display: block; margin-bottom: 1rem;"></i>
                            <p class="text-muted">Belum ada data untuk ditampilkan</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recent Submissions -->
        <div class="col-12 col-lg-7">
            <div class="modern-card">
                <div class="modern-card-header">
                    <h5 class="modern-card-title">
                        <i class="ti ti-history me-2" style="color: #8b5cf6;"></i>
                        Permohonan Terbaru
                    </h5>
                    <a href="{{ route('pelaku_usaha.submissions.index') }}" class="btn btn-sm btn-light">
                        Lihat Semua <i class="ti ti-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="modern-card-body p-0">
                    @forelse($recentSubmissions as $submission)
                        <div class="submission-item">
                            <div class="submission-icon">
                                @if($submission->status == 'draft')
                                    <i class="ti ti-file-text" style="color: #64748b;"></i>
                                @elseif($submission->status == 'submitted')
                                    <i class="ti ti-send" style="color: #3b82f6;"></i>
                                @elseif(in_array($submission->status, ['screening', 'verification', 'in_review']))
                                    <i class="ti ti-clock" style="color: #f59e0b;"></i>
                                @elseif($submission->status == 'approved')
                                    <i class="ti ti-circle-check" style="color: #10b981;"></i>
                                @else
                                    <i class="ti ti-alert-circle" style="color: #ef4444;"></i>
                                @endif
                            </div>
                            <div class="submission-content">
                                <div class="submission-header">
                                    <h6 class="submission-number">{{ $submission->submission_number }}</h6>
                                    <span class="submission-date">{{ $submission->created_at->diffForHumans() }}</span>
                                </div>
                                <p class="submission-company">{{ $submission->company_name }}</p>
                                <div class="submission-footer">
                                    @if($submission->status == 'draft')
                                        <span class="status-badge status-badge-secondary">Draft</span>
                                    @elseif($submission->status == 'submitted')
                                        <span class="status-badge status-badge-info">Diajukan</span>
                                    @elseif(in_array($submission->status, ['screening', 'verification', 'in_review']))
                                        <span class="status-badge status-badge-warning">Verifikasi</span>
                                    @elseif($submission->status == 'approved')
                                        <span class="status-badge status-badge-success">Disetujui</span>
                                    @elseif($submission->status == 'revision_required')
                                        <span class="status-badge status-badge-danger">Perlu Perbaikan</span>
                                    @else
                                        <span class="status-badge status-badge-secondary">{{ ucfirst($submission->status) }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="submission-action">
                                <a href="{{ route('pelaku_usaha.submissions.show', $submission->id) }}" class="btn-icon-view">
                                    <i class="ti ti-eye"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="empty-state py-5">
                            <i class="ti ti-inbox" style="font-size: 4rem; color: #cbd5e1; display: block; margin-bottom: 1rem;"></i>
                            <h6 class="mb-2" style="color: #64748b;">Belum ada permohonan</h6>
                            <p class="text-muted mb-3">Mulai dengan membuat permohonan sertifikasi halal baru</p>
                            <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                                <i class="ti ti-plus me-2"></i>Buat Permohonan
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        /* Welcome Banner */
        .welcome-banner {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
            padding: 2rem;
            color: white;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
        }

        .btn-gradient-primary {
            background: linear-gradient(135deg, #f59e0b 0%, #f97316 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
            transition: all 0.3s ease;
        }

        .btn-gradient-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.4);
            color: white;
        }

        /* Stat Cards */
        .stat-card {
            border-radius: 16px;
            padding: 0;
            border: none;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .stat-card-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .stat-card-warning { background: linear-gradient(135deg, #f59e0b 0%, #f97316 100%); }
        .stat-card-success { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
        .stat-card-danger { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); }

        .stat-card-body {
            padding: 1.5rem;
            color: white;
        }

        .stat-icon-wrapper {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin: 0;
        }

        .stat-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            margin: 0;
        }

        .stat-hint {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.7);
            display: block;
        }

        .progress-thin {
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-thin .progress-bar {
            height: 100%;
            transition: width 1s ease;
        }

        .badge-light-primary { background: rgba(255, 255, 255, 0.2); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; }
        .badge-light-warning { background: rgba(255, 255, 255, 0.2); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; }
        .badge-light-success { background: rgba(255, 255, 255, 0.2); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; }
        .badge-light-danger { background: rgba(255, 255, 255, 0.2); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; }

        /* Action Cards */
        .action-card {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            border-radius: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .action-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            transition: width 0.3s ease;
        }

        .action-card-blue::before { background: linear-gradient(180deg, #3b82f6, #2563eb); }
        .action-card-green::before { background: linear-gradient(180deg, #10b981, #059669); }
        .action-card-purple::before { background: linear-gradient(180deg, #8b5cf6, #7c3aed); }

        .action-card:hover {
            transform: translateX(5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .action-card:hover::before {
            width: 100%;
        }

        .action-card-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-right: 1rem;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
        }

        .action-card-blue .action-card-icon {
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            color: #1e40af;
        }

        .action-card-green .action-card-icon {
            background: linear-gradient(135deg, #d1fae5, #a7f3d0);
            color: #065f46;
        }

        .action-card-purple .action-card-icon {
            background: linear-gradient(135deg, #ede9fe, #ddd6fe);
            color: #5b21b6;
        }

        .action-card-content {
            flex: 1;
            position: relative;
            z-index: 1;
        }

        .action-card-title {
            font-size: 1rem;
            font-weight: 600;
            color: #1a202c;
            margin-bottom: 0.25rem;
        }

        .action-card-desc {
            font-size: 0.875rem;
            color: #64748b;
            margin: 0;
        }

        .action-card-arrow {
            font-size: 1.25rem;
            color: #cbd5e1;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .action-card:hover .action-card-arrow {
            color: white;
            transform: translateX(5px);
        }

        .action-card:hover .action-card-title,
        .action-card:hover .action-card-desc {
            color: white;
        }

        /* Modern Card */
        .modern-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            height: 100%;
        }

        .modern-card-header {
            padding: 1.5rem;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .modern-card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1a202c;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .modern-card-body {
            padding: 1.5rem;
        }

        /* Chart Legend */
        .chart-legend {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.5rem;
            border-radius: 8px;
            background: #f8fafc;
        }

        .legend-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .legend-label {
            flex: 1;
            font-size: 0.875rem;
            color: #475569;
        }

        .legend-value {
            font-weight: 600;
            color: #1e293b;
        }

        /* Submission Item */
        .submission-item {
            display: flex;
            align-items: center;
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.2s ease;
        }

        .submission-item:last-child {
            border-bottom: none;
        }

        .submission-item:hover {
            background: #f8fafc;
        }

        .submission-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .submission-content {
            flex: 1;
            min-width: 0;
        }

        .submission-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 0.25rem;
        }

        .submission-number {
            font-size: 0.875rem;
            font-weight: 600;
            color: #1e293b;
            margin: 0;
        }

        .submission-date {
            font-size: 0.75rem;
            color: #94a3b8;
        }

        .submission-company {
            font-size: 0.875rem;
            color: #64748b;
            margin-bottom: 0.5rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .submission-footer {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .status-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-weight: 500;
        }

        .status-badge-secondary { background: #f1f5f9; color: #64748b; }
        .status-badge-info { background: #dbeafe; color: #1e40af; }
        .status-badge-warning { background: #fef3c7; color: #92400e; }
        .status-badge-success { background: #d1fae5; color: #065f46; }
        .status-badge-danger { background: #fee2e2; color: #991b1b; }

        .submission-action {
            margin-left: 1rem;
        }

        .btn-icon-view {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: #f1f5f9;
            color: #64748b;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.2s ease;
            font-size: 1.25rem;
        }

        .btn-icon-view:hover {
            background: #3b82f6;
            color: white;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
        }

        /* Counter Animation */
        @keyframes countUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .stat-number {
            animation: countUp 0.6s ease;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .welcome-banner {
                padding: 1.5rem;
            }

            .welcome-banner h2 {
                font-size: 1.5rem;
            }

            .stat-card-body {
                padding: 1.25rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .action-card {
                padding: 1.25rem;
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
            document.querySelectorAll('.stat-number').forEach(animateCounter);

            // Initialize chart
            @if($totalSubmissions > 0)
            var statusOptions = {
                series: [{{ $statusCounts['in_progress'] }}, {{ $statusCounts['approved'] }}, {{ $statusCounts['needs_revision'] }}],
                chart: {
                    type: 'donut',
                    height: 280,
                    fontFamily: 'Inter, sans-serif'
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
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            height: 250
                        }
                    }
                }]
            };
            var statusChart = new ApexCharts(document.querySelector("#statusChart"), statusOptions);
            statusChart.render();
            @endif
        });
    </script>
    @endpush
</x-layouts.admin.app>
