<x-layouts.admin.app>
    <x-slot name="title">Dashboard Pendamping Halal Reguler</x-slot>

    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">Dashboard Pendamping Halal Reguler (PHR)</h2>
                    <div class="text-muted mt-1">Selamat datang, {{ auth()->user()->name }}</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                        <i class="ti ti-plus"></i>
                        Daftarkan Pelaku Usaha Baru
                    </a>
                </div>
            </div>
        </div>

        <!-- Affiliation Code Card -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card card-lg">
                    <div class="card-body text-center py-5">
                        <h3 class="mb-3">Kode Afiliasi Anda</h3>
                        <div class="display-6 fw-bold text-primary mb-3" id="affiliationCode">
                            {{ auth()->user()->referral_code ?? 'Generating...' }}
                        </div>
                        <p class="text-muted mb-3">
                            Gunakan kode ini saat mendaftarkan Pelaku Usaha untuk mendapatkan fee
                        </p>
                        <button class="btn btn-outline-primary" onclick="copyAffiliationCode()">
                            <i class="ti ti-copy"></i>
                            Salin Kode
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">Total Pelaku Usaha</div>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <div class="h1 mb-0 me-2">{{ $stats['total_pu'] ?? 0 }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">Total Fee</div>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <div class="h1 mb-0 me-2">{{ $stats['total_fees_formatted'] ?? 'Rp 0' }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">Fee Dibayar</div>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <div class="h1 mb-0 me-2">{{ $stats['paid_fees_formatted'] ?? 'Rp 0' }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">Fee Pending</div>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <div class="h1 mb-0 me-2">{{ $stats['pending_fees_formatted'] ?? 'Rp 0' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MLM Level Info (if applicable) -->
        @if(isset($stats['level']) && $stats['level'] !== 'phr')
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Status Level PHR</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label text-muted">Level Saat Ini</label>
                                    <div class="h3">{{ $stats['level_name'] ?? 'PHR' }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label text-muted">Total PHR Direkrut</label>
                                    <div class="h3">{{ $stats['total_phr_recruited'] ?? 0 }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label text-muted">Area Managers</label>
                                    <div class="h3">{{ $stats['area_managers_count'] ?? 0 }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Recent Pelaku Usaha -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pelaku Usaha Terdaftar</h3>
                    </div>
                    <div class="card-body">
                        @if(isset($recentPu) && $recentPu->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentPu as $pu)
                                    <tr>
                                        <td>{{ $pu->name }}</td>
                                        <td>{{ $pu->email }}</td>
                                        <td>{{ $pu->phone ?? '-' }}</td>
                                        <td>{{ $pu->created_at->format('d M Y') }}</td>
                                        <td>
                                            <span class="badge bg-success">Terdaftar</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="empty">
                            <div class="empty-icon">
                                <i class="ti ti-users"></i>
                            </div>
                            <p class="empty-title">Belum ada Pelaku Usaha</p>
                            <p class="empty-subtitle text-muted">
                                Mulai daftarkan Pelaku Usaha untuk mendapatkan fee
                            </p>
                            <div class="empty-action">
                                <a href="{{ route('pelaku_usaha.submissions.create') }}" class="btn btn-primary">
                                    <i class="ti ti-plus"></i>
                                    Daftarkan Pelaku Usaha
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Fees -->
        @if(isset($recentFees) && $recentFees->count() > 0)
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Fee Terbaru</h3>
                        <div class="card-actions">
                            <a href="{{ route('phr.fees.index') }}" class="btn btn-sm btn-outline-primary">
                                Lihat Semua
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Pelaku Usaha</th>
                                        <th>Invoice</th>
                                        <th>Tipe</th>
                                        <th>Jumlah Fee</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentFees as $fee)
                                    <tr>
                                        <td>{{ $fee->pelakuUsaha->name ?? '-' }}</td>
                                        <td>{{ $fee->invoice->invoice_number ?? '-' }}</td>
                                        <td>
                                            @if($fee->fee_type === 'direct')
                                                <span class="badge bg-blue">Direct (10%)</span>
                                            @elseif($fee->fee_type === 'downline')
                                                <span class="badge bg-cyan">Downline (3%)</span>
                                            @else
                                                <span class="badge bg-indigo">Regional (2%)</span>
                                            @endif
                                        </td>
                                        <td class="fw-bold">Rp {{ number_format($fee->fee_amount, 0, ',', '.') }}</td>
                                        <td>
                                            @if($fee->status === 'paid')
                                                <span class="badge bg-success">Dibayar</span>
                                            @elseif($fee->status === 'approved')
                                                <span class="badge bg-info">Disetujui</span>
                                            @else
                                                <span class="badge bg-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{ $fee->created_at->format('d M Y') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    @push('scripts')
    <script>
        function copyAffiliationCode() {
            const code = document.getElementById('affiliationCode').textContent.trim();

            navigator.clipboard.writeText(code).then(function() {
                // Show success notification
                alert('Kode afiliasi berhasil disalin: ' + code);
            }).catch(function(err) {
                console.error('Failed to copy:', err);
                alert('Gagal menyalin kode');
            });
        }

        // Auto-generate referral code if not exists
        @if(!auth()->user()->referral_code)
        window.addEventListener('DOMContentLoaded', function() {
            fetch('{{ route("phr.generate-code") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.code) {
                    document.getElementById('affiliationCode').textContent = data.code;
                }
            });
        });
        @endif
    </script>
    @endpush
</x-layouts.admin.app>
