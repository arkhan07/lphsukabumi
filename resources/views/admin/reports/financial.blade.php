<x-layouts.admin.app>
    <x-slot name="title">Laporan Keuangan</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Keuangan</h2>
            <p class="text-secondary-light mb-0">Laporan pendapatan dan pembayaran sertifikasi halal</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-success">
                <i class="ri-file-excel-2-line me-2"></i>
                Export Excel
            </button>
            <button class="btn btn-danger">
                <i class="ri-file-pdf-line me-2"></i>
                Export PDF
            </button>
        </div>
    </div>

    <!-- Date Range Filter -->
    <form method="GET" action="{{ route('admin.reports.financial') }}" class="mb-4">
        <div class="card-custom">
            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <label for="start_date" class="form-label" style="font-weight: 500;">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"
                           value="{{ request('start_date', $startDate instanceof \Carbon\Carbon ? $startDate->format('Y-m-d') : $startDate) }}">
                </div>
                <div class="col-12 col-md-4">
                    <label for="end_date" class="form-label" style="font-weight: 500;">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="end_date" name="end_date"
                           value="{{ request('end_date', $endDate instanceof \Carbon\Carbon ? $endDate->format('Y-m-d') : $endDate) }}">
                </div>
                <div class="col-12 col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="ri-filter-line me-2"></i>
                        Filter Data
                    </button>
                </div>
            </div>
        </div>
    </form>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon primary">
                    <i class="ri-money-dollar-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Pendapatan</div>
                    <div class="stat-value">Rp {{ number_format($revenueStats['total_invoiced'], 0, ',', '.') }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Total Invoice Diterbitkan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-check-double-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pembayaran Lunas</div>
                    <div class="stat-value">Rp {{ number_format($revenueStats['total_paid'], 0, ',', '.') }}</div>
                    <div class="stat-trend {{ $revenueStats['total_invoiced'] > 0 ? 'up' : '' }}">
                        <i class="ri-arrow-up-line"></i>
                        {{ $revenueStats['total_invoiced'] > 0 ? number_format(($revenueStats['total_paid'] / $revenueStats['total_invoiced']) * 100, 1) : 0 }}% dari total
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon danger">
                    <i class="ri-error-warning-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pembayaran Tertunggak</div>
                    <div class="stat-value">Rp {{ number_format($revenueStats['total_overdue'], 0, ',', '.') }}</div>
                    <div class="stat-trend {{ $revenueStats['total_invoiced'] > 0 ? 'down' : '' }}">
                        <i class="ri-arrow-down-line"></i>
                        {{ $revenueStats['total_invoiced'] > 0 ? number_format(($revenueStats['total_overdue'] / $revenueStats['total_invoiced']) * 100, 1) : 0 }}% dari total
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon warning">
                    <i class="ri-time-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pembayaran Pending</div>
                    <div class="stat-value">Rp {{ number_format($revenueStats['total_pending'], 0, ',', '.') }}</div>
                    <div class="stat-trend {{ $revenueStats['total_invoiced'] > 0 ? 'up' : '' }}">
                        <i class="ri-arrow-up-line"></i>
                        {{ $revenueStats['total_invoiced'] > 0 ? number_format(($revenueStats['total_pending'] / $revenueStats['total_invoiced']) * 100, 1) : 0 }}% dari total
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Stats Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-bar-chart-box-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Pembayaran Sebagian</div>
                    <div class="stat-value">Rp {{ number_format($revenueStats['total_partial'], 0, ',', '.') }}</div>
                    <div class="stat-trend {{ $revenueStats['total_invoiced'] > 0 ? 'up' : '' }}">
                        <i class="ri-arrow-up-line"></i>
                        {{ $revenueStats['total_invoiced'] > 0 ? number_format(($revenueStats['total_partial'] / $revenueStats['total_invoiced']) * 100, 1) : 0 }}% dari total
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="ri-file-text-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Metode Pembayaran</div>
                    <div class="stat-value">{{ $paymentMethods->count() }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Metode tersedia
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-calendar-check-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Transaksi</div>
                    <div class="stat-value">{{ number_format($paymentMethods->sum('count'), 0, ',', '.') }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Pembayaran terverifikasi
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon info">
                    <i class="ri-percent-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Tingkat Pelunasan</div>
                    <div class="stat-value">{{ number_format($collectionRate['rate_percentage'], 1) }}%</div>
                    <div class="stat-trend {{ $collectionRate['rate_percentage'] >= 90 ? 'up' : 'down' }}">
                        <i class="ri-arrow-{{ $collectionRate['rate_percentage'] >= 90 ? 'up' : 'down' }}-line"></i>
                        {{ $collectionRate['rate_percentage'] >= 90 ? 'Target tercapai' : 'Perlu ditingkatkan' }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Tren Pendapatan Bulanan</h5>
                </div>
                <div id="revenueTrendChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Metode Pembayaran</h5>
                </div>
                <div id="paymentMethodChart"></div>
            </div>
        </div>
    </div>

    <!-- Charts Row 2 -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Perbandingan Pendapatan per Bulan</h5>
                </div>
                <div id="monthlyComparisonChart"></div>
            </div>
        </div>
    </div>

    <!-- Top Clients Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Top 10 Pelaku Usaha (Berdasarkan Pembayaran)</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Perusahaan</th>
                                <th>Jumlah Invoice</th>
                                <th>Total Ditagihkan</th>
                                <th>Total Terbayar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topClients as $index => $client)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><strong>{{ $client->company_name }}</strong></td>
                                <td>{{ $client->invoice_count }}</td>
                                <td>Rp {{ number_format($client->total_invoiced, 0, ',', '.') }}</td>
                                <td><strong>Rp {{ number_format($client->total_paid, 0, ',', '.') }}</strong></td>
                                <td>
                                    @if($client->total_paid >= $client->total_invoiced)
                                        <span class="badge-custom badge-success">Lunas</span>
                                    @else
                                        <span class="badge-custom badge-warning">Sebagian</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-secondary-light py-4">
                                    <i class="ri-inbox-line" style="font-size: 3rem; opacity: 0.3;"></i>
                                    <p class="mb-0 mt-2">Belum ada data pelanggan untuk periode ini</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Revenue Trend Chart (Line)
        var revenueTrendOptions = {
            series: [{
                name: 'Total Ditagihkan',
                data: @json($monthlyRevenue->pluck('total_invoiced')->map(fn($val) => round($val / 1000000, 2)))
            }, {
                name: 'Total Terbayar',
                data: @json($monthlyRevenue->pluck('total_paid')->map(fn($val) => round($val / 1000000, 2)))
            }],
            chart: {
                type: 'area',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            colors: ['#166F61', '#10b981'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 3
            },
            xaxis: {
                categories: @json($monthlyRevenue->pluck('month')->map(function($month) {
                    return \Carbon\Carbon::createFromFormat('Y-m', $month)->format('M Y');
                }))
            },
            yaxis: {
                title: {
                    text: 'Pendapatan (Juta Rupiah)'
                },
                labels: {
                    formatter: function(val) {
                        return 'Rp ' + val.toFixed(1) + 'M';
                    }
                }
            },
            legend: {
                position: 'top'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.5,
                    opacityTo: 0.1,
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return 'Rp ' + val.toFixed(2) + ' Juta';
                    }
                }
            }
        };
        var revenueTrendChart = new ApexCharts(document.querySelector("#revenueTrendChart"), revenueTrendOptions);
        revenueTrendChart.render();

        // Payment Method Chart (Pie)
        var paymentMethodOptions = {
            series: @json($paymentMethods->pluck('total_amount')),
            chart: {
                type: 'donut',
                height: 350
            },
            labels: @json($paymentMethods->pluck('payment_method')),
            colors: ['#166F61', '#3b82f6', '#7c3aed', '#f59e0b', '#ef4444'],
            legend: {
                position: 'bottom'
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return 'Rp ' + val.toLocaleString('id-ID');
                    }
                }
            },
            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            total: {
                                show: true,
                                label: 'Total',
                                formatter: function(w) {
                                    const total = w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                    return 'Rp ' + (total / 1000000).toFixed(1) + 'M';
                                }
                            }
                        }
                    }
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 300
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var paymentMethodChart = new ApexCharts(document.querySelector("#paymentMethodChart"), paymentMethodOptions);
        paymentMethodChart.render();

        // Monthly Comparison Chart (Bar)
        var monthlyComparisonOptions = {
            series: [{
                name: 'Terbayar',
                data: @json($monthlyRevenue->pluck('total_paid')->map(fn($val) => round($val / 1000000, 2)))
            }, {
                name: 'Tertunggak',
                data: @json($monthlyRevenue->pluck('total_outstanding')->map(fn($val) => round($val / 1000000, 2)))
            }],
            chart: {
                type: 'bar',
                height: 400,
                stacked: true,
                toolbar: {
                    show: false
                }
            },
            colors: ['#10b981', '#ef4444'],
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    horizontal: false,
                    columnWidth: '60%',
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: @json($monthlyRevenue->pluck('month')->map(function($month) {
                    return \Carbon\Carbon::createFromFormat('Y-m', $month)->format('M Y');
                }))
            },
            yaxis: {
                title: {
                    text: 'Pendapatan (Juta Rupiah)'
                },
                labels: {
                    formatter: function(val) {
                        return 'Rp ' + val.toFixed(1) + 'M';
                    }
                }
            },
            legend: {
                position: 'top'
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return 'Rp ' + val.toFixed(2) + ' Juta';
                    }
                }
            }
        };
        var monthlyComparisonChart = new ApexCharts(document.querySelector("#monthlyComparisonChart"), monthlyComparisonOptions);
        monthlyComparisonChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
