<x-layouts.admin.app>
    <x-slot name="title">Dashboard Pelaku Usaha</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Dashboard Pelaku Usaha</h2>
                    <div class="text-muted mt-1">Selamat datang, {{ auth()->user()->name }}! Kelola permohonan sertifikasi halal Anda</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                        <i class="ti ti-plus me-2"></i>
                        Buat Permohonan Baru
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Analytics Cards -->
            <div class="row row-cards mb-3">
                <!-- Total Permohonan -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Permohonan</div>
                            </div>
                            <div class="h1 mb-0" data-target="{{ $totalSubmissions }}">0</div>
                            <div class="text-muted">Semua permohonan</div>
                        </div>
                    </div>
                </div>

                <!-- Dalam Proses -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Dalam Proses</div>
                            </div>
                            <div class="h1 mb-0" data-target="{{ $inProgress }}">0</div>
                            <div class="text-muted">Menunggu verifikasi</div>
                        </div>
                    </div>
                </div>

                <!-- Disetujui -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Disetujui</div>
                            </div>
                            <div class="h1 mb-0" data-target="{{ $approved }}">0</div>
                            <div class="text-muted">Sertifikat aktif</div>
                        </div>
                    </div>
                </div>

                <!-- Perlu Perbaikan -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Perlu Perbaikan</div>
                            </div>
                            <div class="h1 mb-0" data-target="{{ $needsRevision }}">0</div>
                            <div class="text-muted">Segera diperbaiki</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Referral Link Card -->
            <div class="card mb-3" style="border: 2px solid #10b981; background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3">
                            <span class="avatar avatar-lg" style="background-color: #10b981; color: white;">
                                <i class="ti ti-share-3" style="font-size: 1.5rem;"></i>
                            </span>
                        </div>
                        <div class="flex-fill">
                            <h3 class="card-title mb-1" style="color: #065f46;">Link Referral Pendamping Halal</h3>
                            <p class="text-muted mb-0">Bagikan link ini kepada calon Pendamping Halal Reguler</p>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" id="referralLink" value="{{ url('/register/phr?ref=' . auth()->user()->referral_code ?? 'PU' . auth()->id()) }}" readonly>
                        <button class="btn btn-success" type="button" onclick="copyReferralLink()">
                            <i class="ti ti-copy me-1"></i>
                            Salin Link
                        </button>
                    </div>
                    <div class="mt-3 text-center">
                        <small class="text-muted">
                            <i class="ti ti-info-circle me-1"></i>
                            PHR yang mendaftar melalui link Anda akan mendapatkan fee 10% dari nilai invoice Anda
                        </small>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Aksi Cepat</h3>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('pelaku_usaha.submissions.create') }}" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar" style="background-color: #206bc4; color: white;">
                                    <i class="ti ti-file-plus"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="fw-bold">Pengajuan Baru</div>
                                <div class="text-muted">Ajukan sertifikasi halal baru</div>
                            </div>
                            <div class="col-auto">
                                <i class="ti ti-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('pelaku_usaha.submissions.index') }}" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar" style="background-color: #2fb344; color: white;">
                                    <i class="ti ti-list-check"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="fw-bold">Lihat Permohonan</div>
                                <div class="text-muted">Cek status permohonan Anda</div>
                            </div>
                            <div class="col-auto">
                                <i class="ti ti-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar" style="background-color: #4299e1; color: white;">
                                    <i class="ti ti-upload"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="fw-bold">Kelola Dokumen</div>
                                <div class="text-muted">Upload & kelola dokumen</div>
                            </div>
                            <div class="col-auto">
                                <i class="ti ti-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row row-cards">
                <!-- Status Chart -->
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Permohonan</h3>
                        </div>
                        <div class="card-body">
                            @if($totalSubmissions > 0)
                                <div id="statusChart" class="mb-3"></div>
                                <div class="d-flex flex-column gap-2">
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-warning me-2"></span>
                                        <span class="flex-fill">Dalam Proses</span>
                                        <strong>{{ $inProgress }}</strong>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-success me-2"></span>
                                        <span class="flex-fill">Disetujui</span>
                                        <strong>{{ $approved }}</strong>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-danger me-2"></span>
                                        <span class="flex-fill">Perlu Perbaikan</span>
                                        <strong>{{ $needsRevision }}</strong>
                                    </div>
                                </div>
                            @else
                                <div class="empty">
                                    <div class="empty-icon">
                                        <i class="ti ti-chart-pie"></i>
                                    </div>
                                    <p class="empty-title">Belum ada data</p>
                                    <p class="empty-subtitle text-muted">Data akan ditampilkan setelah ada permohonan</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Recent Submissions -->
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Permohonan Terbaru</h3>
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
                                                <span class="avatar">
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
                                        <div class="empty">
                                            <div class="empty-icon">
                                                <i class="ti ti-inbox"></i>
                                            </div>
                                            <p class="empty-title">Belum ada permohonan</p>
                                            <p class="empty-subtitle text-muted">
                                                Mulai dengan membuat permohonan sertifikasi halal baru
                                            </p>
                                            <div class="empty-action">
                                                <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                                                    <i class="ti ti-plus me-2"></i>Buat Permohonan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Copy referral link function
        function copyReferralLink() {
            const referralInput = document.getElementById('referralLink');
            referralInput.select();
            referralInput.setSelectionRange(0, 99999); // For mobile devices

            navigator.clipboard.writeText(referralInput.value).then(function() {
                // Show success message
                const btn = event.target.closest('button');
                const originalHTML = btn.innerHTML;
                btn.innerHTML = '<i class="ti ti-check me-1"></i>Tersalin!';
                btn.classList.remove('btn-success');
                btn.classList.add('btn-primary');

                setTimeout(function() {
                    btn.innerHTML = originalHTML;
                    btn.classList.remove('btn-primary');
                    btn.classList.add('btn-success');
                }, 2000);
            }).catch(function(err) {
                alert('Gagal menyalin link: ' + err);
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Animate counters
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

            document.querySelectorAll('.h1[data-target]').forEach(animateCounter);

            // Initialize donut chart
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
                                    formatter: function (w) {
                                        return w.globals.seriesTotals.reduce((a, b) => a + b, 0)
                                    }
                                },
                                value: {
                                    fontSize: '28px',
                                    fontWeight: 700
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
