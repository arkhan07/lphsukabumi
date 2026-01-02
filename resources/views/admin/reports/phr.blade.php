@extends('layouts.admin')

@section('title', 'Laporan PHR (Pendamping Halal Reguler)')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Laporan</div>
                <h2 class="page-title">Laporan PHR (Pendamping Halal Reguler)</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filterModal">
                        <i class="ti ti-filter icon me-2"></i>
                        Filter Periode
                    </button>
                    <a href="?export=pdf" class="btn btn-success">
                        <i class="ti ti-file-type-pdf icon me-2"></i>
                        Export PDF
                    </a>
                    <a href="?export=excel" class="btn btn-info">
                        <i class="ti ti-file-spreadsheet icon me-2"></i>
                        Export Excel
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <!-- Period Info -->
        <div class="alert alert-info mb-3">
            <i class="ti ti-calendar icon me-2"></i>
            Periode Laporan: <strong>{{ \Carbon\Carbon::parse($startDate)->format('d M Y') }}</strong> s/d <strong>{{ \Carbon\Carbon::parse($endDate)->format('d M Y') }}</strong>
        </div>

        <!-- PHR Statistics -->
        <div class="row row-cards mb-3">
            <div class="col-12">
                <h3 class="mb-3">Statistik PHR</h3>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Total PHR</div>
                        <div class="h1 mb-0">{{ number_format($phrStats['total']) }}</div>
                        <div class="text-secondary small mt-1">
                            <span class="text-success me-2">
                                <i class="ti ti-check"></i> {{ number_format($phrStats['active']) }} Aktif
                            </span>
                            <span class="text-danger">
                                <i class="ti ti-x"></i> {{ number_format($phrStats['inactive']) }} Tidak Aktif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Area Manager</div>
                        <div class="h1 mb-0 text-info">{{ number_format($phrStats['area_managers']) }}</div>
                        <div class="text-secondary small mt-1">
                            {{ $phrStats['total'] > 0 ? number_format(($phrStats['area_managers'] / $phrStats['total']) * 100, 1) : 0 }}% dari total
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Regional Manager</div>
                        <div class="h1 mb-0 text-warning">{{ number_format($phrStats['regional_managers']) }}</div>
                        <div class="text-secondary small mt-1">
                            {{ $phrStats['total'] > 0 ? number_format(($phrStats['regional_managers'] / $phrStats['total']) * 100, 1) : 0 }}% dari total
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">PHR Regular</div>
                        <div class="h1 mb-0 text-secondary">{{ number_format($phrStats['regular']) }}</div>
                        <div class="text-secondary small mt-1">Level dasar</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Bergabung Periode Ini</div>
                        <div class="h1 mb-0 text-primary">{{ number_format($phrStats['new_this_period']) }}</div>
                        <div class="text-secondary small mt-1">PHR baru</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Rata-rata Fee per PHR</div>
                        <div class="h1 mb-0">Rp {{ number_format($avgFeePerPhr / 1000, 0) }}K</div>
                        <div class="text-secondary small mt-1">Total periode</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fee Statistics -->
        <div class="row row-cards mb-3">
            <div class="col-12">
                <h3 class="mb-3">Statistik Fee PHR</h3>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Total Fee</div>
                        <div class="h1 mb-0">Rp {{ number_format($feeStats['total_fees'] / 1000000, 1) }}M</div>
                        <div class="text-secondary small mt-1">Periode ini</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Fee Direct (10%)</div>
                        <div class="h1 mb-0 text-primary">Rp {{ number_format($feeStats['direct_fees'] / 1000000, 1) }}M</div>
                        <div class="text-secondary small mt-1">
                            {{ $feeStats['total_fees'] > 0 ? number_format(($feeStats['direct_fees'] / $feeStats['total_fees']) * 100, 1) : 0 }}% dari total
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Fee Downline (3%)</div>
                        <div class="h1 mb-0 text-info">Rp {{ number_format($feeStats['downline_fees'] / 1000000, 1) }}M</div>
                        <div class="text-secondary small mt-1">
                            {{ $feeStats['total_fees'] > 0 ? number_format(($feeStats['downline_fees'] / $feeStats['total_fees']) * 100, 1) : 0 }}% dari total
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Fee Regional (2%)</div>
                        <div class="h1 mb-0 text-warning">Rp {{ number_format($feeStats['regional_fees'] / 1000000, 1) }}M</div>
                        <div class="text-secondary small mt-1">
                            {{ $feeStats['total_fees'] > 0 ? number_format(($feeStats['regional_fees'] / $feeStats['total_fees']) * 100, 1) : 0 }}% dari total
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Fee Pending</div>
                        <div class="h1 mb-0 text-orange">Rp {{ number_format($feeStats['pending'] / 1000000, 1) }}M</div>
                        <div class="text-secondary small mt-1">Menunggu pembayaran</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Fee Dibayar</div>
                        <div class="h1 mb-0 text-success">Rp {{ number_format($feeStats['paid'] / 1000000, 1) }}M</div>
                        <div class="text-secondary small mt-1">Tingkat pembayaran: {{ $paymentRate }}%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Fee Disetujui</div>
                        <div class="h1 mb-0 text-cyan">Rp {{ number_format($feeStats['approved'] / 1000000, 1) }}M</div>
                        <div class="text-secondary small mt-1">Menunggu proses</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promotion Statistics -->
        <div class="row row-cards mb-3">
            <div class="col-12">
                <h3 class="mb-3">Statistik Promosi PHR</h3>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Total Promosi</div>
                        <div class="h1 mb-0">{{ number_format($promotionStats['total']) }}</div>
                        <div class="text-secondary small mt-1">Periode ini</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Ke Area Manager</div>
                        <div class="h1 mb-0 text-info">{{ number_format($promotionStats['to_area_manager']) }}</div>
                        <div class="text-secondary small mt-1">
                            {{ $promotionStats['total'] > 0 ? number_format(($promotionStats['to_area_manager'] / $promotionStats['total']) * 100, 1) : 0 }}% dari total
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Ke Regional Manager</div>
                        <div class="h1 mb-0 text-warning">{{ number_format($promotionStats['to_regional_manager']) }}</div>
                        <div class="text-secondary small mt-1">
                            {{ $promotionStats['total'] > 0 ? number_format(($promotionStats['to_regional_manager'] / $promotionStats['total']) * 100, 1) : 0 }}% dari total
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Promosi Disetujui</div>
                        <div class="h1 mb-0 text-success">{{ number_format($promotionStats['approved']) }}</div>
                        <div class="text-secondary small mt-1">
                            {{ $promotionStats['total'] > 0 ? number_format(($promotionStats['approved'] / $promotionStats['total']) * 100, 1) : 0 }}% approval rate
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row row-cards mb-3">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Trend Registrasi PHR</h3>
                    </div>
                    <div class="card-body">
                        <div id="registrationChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Distribusi Level PHR</h3>
                    </div>
                    <div class="card-body">
                        <div id="levelChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fee Trend Chart -->
        <div class="row row-cards mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Trend Fee PHR per Bulan</h3>
                    </div>
                    <div class="card-body">
                        <div id="feeChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Performers -->
        <div class="row row-cards mb-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Top 10 PHR by Fee Earned</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>PHR</th>
                                    <th>Level</th>
                                    <th>Total Fee</th>
                                    <th>Dibayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($topPhrs as $index => $phr)
                                <tr>
                                    <td>
                                        @if($index == 0)
                                            <span class="badge bg-yellow">
                                                <i class="ti ti-trophy"></i> 1
                                            </span>
                                        @elseif($index == 1)
                                            <span class="badge bg-secondary">
                                                <i class="ti ti-medal"></i> 2
                                            </span>
                                        @elseif($index == 2)
                                            <span class="badge bg-orange">
                                                <i class="ti ti-award"></i> 3
                                            </span>
                                        @else
                                            <span class="text-secondary">{{ $index + 1 }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div>{{ $phr->name }}</div>
                                        <div class="text-secondary small">{{ $phr->email }}</div>
                                    </td>
                                    <td>
                                        @if($phr->phr_level === 'regional_manager')
                                            <span class="badge bg-warning text-dark">Regional Manager</span>
                                        @elseif($phr->phr_level === 'area_manager')
                                            <span class="badge bg-info">Area Manager</span>
                                        @else
                                            <span class="badge bg-secondary">PHR Regular</span>
                                        @endif
                                    </td>
                                    <td>Rp {{ number_format($phr->total_fees, 0, ',', '.') }}</td>
                                    <td>
                                        <span class="text-success">Rp {{ number_format($phr->paid_fees, 0, ',', '.') }}</span>
                                        <div class="text-secondary small">
                                            {{ $phr->total_fees > 0 ? number_format(($phr->paid_fees / $phr->total_fees) * 100, 1) : 0 }}% paid
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5">
                                        <i class="ti ti-inbox icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                        <div class="text-secondary">Belum ada data</div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Top 10 Recruiter PHR</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>PHR</th>
                                    <th>Level</th>
                                    <th>PHR Direkrut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($topRecruiters as $index => $recruiter)
                                <tr>
                                    <td>
                                        @if($index == 0)
                                            <span class="badge bg-yellow">
                                                <i class="ti ti-trophy"></i> 1
                                            </span>
                                        @elseif($index == 1)
                                            <span class="badge bg-secondary">
                                                <i class="ti ti-medal"></i> 2
                                            </span>
                                        @elseif($index == 2)
                                            <span class="badge bg-orange">
                                                <i class="ti ti-award"></i> 3
                                            </span>
                                        @else
                                            <span class="text-secondary">{{ $index + 1 }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div>{{ $recruiter->name }}</div>
                                        <div class="text-secondary small">{{ $recruiter->email }}</div>
                                    </td>
                                    <td>
                                        @if($recruiter->phr_level === 'regional_manager')
                                            <span class="badge bg-warning text-dark">Regional Manager</span>
                                        @elseif($recruiter->phr_level === 'area_manager')
                                            <span class="badge bg-info">Area Manager</span>
                                        @else
                                            <span class="badge bg-secondary">PHR Regular</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-primary badge-lg">{{ number_format($recruiter->recruited_count) }} PHR</span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5">
                                        <i class="ti ti-inbox icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                        <div class="text-secondary">Belum ada data</div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Province Distribution -->
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Distribusi PHR per Provinsi (Top 10)</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Provinsi</th>
                                    <th>Total PHR</th>
                                    <th>PHR Aktif</th>
                                    <th>Status Aktif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($provinceDistribution as $province)
                                <tr>
                                    <td><strong>{{ $province->province }}</strong></td>
                                    <td>{{ number_format($province->total) }} PHR</td>
                                    <td>{{ number_format($province->active_count) }} PHR</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success"
                                                 style="width: {{ $province->total > 0 ? ($province->active_count / $province->total) * 100 : 0 }}%"
                                                 role="progressbar">
                                                {{ $province->total > 0 ? number_format(($province->active_count / $province->total) * 100, 1) : 0 }}%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5">
                                        <i class="ti ti-inbox icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                        <div class="text-secondary">Belum ada data</div>
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
</div>

<!-- Filter Modal -->
<div class="modal modal-blur fade" id="filterModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="GET" action="{{ route('admin.reports.phr') }}">
                <div class="modal-header">
                    <h5 class="modal-title">Filter Periode Laporan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tanggal Mulai</label>
                        <input type="date" name="start_date" class="form-control" value="{{ request('start_date', now()->startOfYear()->format('Y-m-d')) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Akhir</label>
                        <input type="date" name="end_date" class="form-control" value="{{ request('end_date', now()->format('Y-m-d')) }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Terapkan Filter</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Registration Trend Chart
    var registrationData = @json($monthlyRegistrations);
    var regCategories = registrationData.map(item => item.month);
    var regValues = registrationData.map(item => item.total);

    var regOptions = {
        series: [{
            name: 'PHR Terdaftar',
            data: regValues
        }],
        chart: {
            type: 'area',
            height: 300,
            fontFamily: 'inherit',
            toolbar: { show: false }
        },
        colors: ['#166F61'],
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth', width: 2 },
        xaxis: { categories: regCategories },
        yaxis: { title: { text: 'Jumlah PHR' } },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.1,
            }
        }
    };
    var regChart = new ApexCharts(document.querySelector("#registrationChart"), regOptions);
    regChart.render();

    // Level Distribution Chart
    var levelOptions = {
        series: [
            {{ $phrStats['regular'] }},
            {{ $phrStats['area_managers'] }},
            {{ $phrStats['regional_managers'] }}
        ],
        chart: {
            type: 'donut',
            height: 300,
            fontFamily: 'inherit'
        },
        labels: ['PHR Regular', 'Area Manager', 'Regional Manager'],
        colors: ['#6c757d', '#0dcaf0', '#ffc107'],
        legend: { position: 'bottom' },
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        total: {
                            show: true,
                            label: 'Total PHR',
                            formatter: function (w) {
                                return w.globals.seriesTotals.reduce((a, b) => a + b, 0)
                            }
                        }
                    }
                }
            }
        }
    };
    var levelChart = new ApexCharts(document.querySelector("#levelChart"), levelOptions);
    levelChart.render();

    // Fee Trend Chart
    var feeData = @json($monthlyFees);
    var feeCategories = feeData.map(item => item.month);
    var directFees = feeData.map(item => item.direct_total);
    var downlineFees = feeData.map(item => item.downline_total);
    var regionalFees = feeData.map(item => item.regional_total);

    var feeOptions = {
        series: [
            { name: 'Fee Direct (10%)', data: directFees },
            { name: 'Fee Downline (3%)', data: downlineFees },
            { name: 'Fee Regional (2%)', data: regionalFees }
        ],
        chart: {
            type: 'bar',
            height: 350,
            stacked: true,
            fontFamily: 'inherit',
            toolbar: { show: false }
        },
        colors: ['#0d6efd', '#0dcaf0', '#ffc107'],
        dataLabels: { enabled: false },
        stroke: { width: 1, colors: ['#fff'] },
        xaxis: { categories: feeCategories },
        yaxis: {
            title: { text: 'Jumlah Fee (Rp)' },
            labels: {
                formatter: function (value) {
                    return 'Rp ' + (value / 1000000).toFixed(1) + 'M';
                }
            }
        },
        legend: { position: 'top' },
        fill: { opacity: 1 }
    };
    var feeChart = new ApexCharts(document.querySelector("#feeChart"), feeOptions);
    feeChart.render();
</script>
@endpush
@endsection
