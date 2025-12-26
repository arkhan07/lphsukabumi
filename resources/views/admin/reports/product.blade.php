<x-layouts.admin.app>
    <x-slot name="title">Laporan Produk</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Produk</h2>
            <p class="text-secondary-light mb-0">Laporan statistik dan data produk tersertifikasi</p>
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

    <!-- Date Filter -->
    <div class="card-custom mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.reports.product') }}" class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Tanggal Mulai</label>
                    <input type="date" name="start_date" class="form-control" value="{{ request('start_date', $startDate instanceof \Carbon\Carbon ? $startDate->format('Y-m-d') : $startDate) }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Tanggal Akhir</label>
                    <input type="date" name="end_date" class="form-control" value="{{ request('end_date', $endDate instanceof \Carbon\Carbon ? $endDate->format('Y-m-d') : $endDate) }}">
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="ri-filter-line me-2"></i>Filter
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon primary">
                    <i class="ri-product-hunt-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Total Produk</div>
                    <div class="stat-value">{{ number_format($productStats['total']) }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Tingkat Sertifikasi: {{ $certificationRate }}%
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
                    <div class="stat-label">Produk Halal</div>
                    <div class="stat-value">{{ number_format($productStats['halal']) }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        {{ $productStats['total'] > 0 ? round(($productStats['halal'] / $productStats['total']) * 100, 2) : 0 }}% dari total produk
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon danger">
                    <i class="ri-close-circle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Tidak Halal</div>
                    <div class="stat-value">{{ number_format($productStats['not_halal']) }}</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        {{ $productStats['total'] > 0 ? round(($productStats['not_halal'] / $productStats['total']) * 100, 2) : 0 }}% dari total produk
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon warning">
                    <i class="ri-question-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Meragukan (Syubhat)</div>
                    <div class="stat-value">{{ number_format($productStats['doubtful']) }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        {{ $productStats['total'] > 0 ? round(($productStats['doubtful'] / $productStats['total']) * 100, 2) : 0 }}% dari total produk
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
                    <i class="ri-shopping-basket-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Kategori Produk</div>
                    <div class="stat-value">{{ $productTypeDistribution->count() }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        @if($productTypeDistribution->first())
                            {{ $productTypeDistribution->first()->name }} terbanyak
                        @else
                            Tidak ada data
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="ri-building-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Perusahaan Terdaftar</div>
                    <div class="stat-value">{{ $topCompanies->count() }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        Top {{ $topCompanies->count() }} perusahaan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon success">
                    <i class="ri-toggle-line"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Produk Aktif</div>
                    <div class="stat-value">{{ number_format($activityStats['active']) }}</div>
                    <div class="stat-trend up">
                        <i class="ri-arrow-up-line"></i>
                        {{ $productStats['total'] > 0 ? round(($activityStats['active'] / $productStats['total']) * 100, 2) : 0 }}% dari total
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon secondary">
                    <i class="ri-toggle-fill"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label">Produk Tidak Aktif</div>
                    <div class="stat-value">{{ number_format($activityStats['inactive']) }}</div>
                    <div class="stat-trend down">
                        <i class="ri-arrow-down-line"></i>
                        {{ $productStats['total'] > 0 ? round(($activityStats['inactive'] / $productStats['total']) * 100, 2) : 0 }}% dari total
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
                    <h5 class="card-title mb-0">Produk Berdasarkan Jenis</h5>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary active">Top {{ min(10, $productTypeDistribution->count()) }}</button>
                    </div>
                </div>
                <div id="productTypeChart"></div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Distribusi Status Halal</h5>
                </div>
                <div id="halalStatusChart"></div>
            </div>
        </div>
    </div>

    <!-- Charts Row 2 -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Trend Produk Bulanan</h5>
                </div>
                <div id="monthlyTrendChart"></div>
            </div>
        </div>
    </div>

    <!-- Top Companies Table -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Top 10 Perusahaan dengan Produk Halal Terbanyak</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Perusahaan</th>
                                <th>Total Produk</th>
                                <th>Produk Halal</th>
                                <th>Persentase Halal</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topCompanies as $index => $company)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><strong>{{ $company->company_name }}</strong></td>
                                <td>{{ number_format($company->total_products) }}</td>
                                <td>{{ number_format($company->halal_products) }}</td>
                                <td>
                                    @php
                                        $percentage = $company->total_products > 0 ? round(($company->halal_products / $company->total_products) * 100, 2) : 0;
                                    @endphp
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $percentage }}%;" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">
                                            {{ $percentage }}%
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($percentage >= 90)
                                        <span class="badge-custom badge-success">Excellent</span>
                                    @elseif($percentage >= 70)
                                        <span class="badge-custom badge-info">Good</span>
                                    @elseif($percentage >= 50)
                                        <span class="badge-custom badge-warning">Average</span>
                                    @else
                                        <span class="badge-custom badge-danger">Needs Improvement</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-secondary-light py-4">
                                    Tidak ada data perusahaan tersedia
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
        // Product Type Chart (Horizontal Bar)
        var productTypeOptions = {
            series: [{
                name: 'Halal',
                data: @json($productTypeDistribution->pluck('halal_count'))
            }, {
                name: 'Tidak Halal',
                data: @json($productTypeDistribution->pluck('not_halal_count'))
            }, {
                name: 'Meragukan',
                data: @json($productTypeDistribution->pluck('doubtful_count'))
            }],
            chart: {
                type: 'bar',
                height: 400,
                stacked: true,
                toolbar: {
                    show: false
                }
            },
            colors: ['#10b981', '#ef4444', '#f59e0b'],
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    horizontal: true,
                    dataLabels: {
                        position: 'center'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontSize: '12px',
                    colors: ['#fff']
                },
                formatter: function(val) {
                    return val > 0 ? val : '';
                }
            },
            xaxis: {
                categories: @json($productTypeDistribution->pluck('name')),
                title: {
                    text: 'Jumlah Produk'
                }
            },
            yaxis: {
                title: {
                    text: 'Kategori Produk'
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            }
        };
        var productTypeChart = new ApexCharts(document.querySelector("#productTypeChart"), productTypeOptions);
        productTypeChart.render();

        // Halal Status Chart (Pie)
        var halalStatusOptions = {
            series: @json($halalDistribution->pluck('total')),
            chart: {
                type: 'pie',
                height: 350
            },
            labels: @json($halalDistribution->pluck('halal_status')->map(function($status) {
                return $status === 'halal' ? 'Halal' : ($status === 'not_halal' ? 'Tidak Halal' : 'Meragukan');
            })),
            colors: ['#10b981', '#ef4444', '#f59e0b'],
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        offset: -5
                    }
                }
            },
            dataLabels: {
                formatter: function(val, opts) {
                    return opts.w.config.series[opts.seriesIndex];
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
        var halalStatusChart = new ApexCharts(document.querySelector("#halalStatusChart"), halalStatusOptions);
        halalStatusChart.render();

        // Monthly Trend Chart (Line/Area)
        var monthlyTrendOptions = {
            series: [{
                name: 'Total Produk',
                data: @json($monthlyProducts->pluck('total'))
            }, {
                name: 'Produk Halal',
                data: @json($monthlyProducts->pluck('halal_count'))
            }],
            chart: {
                type: 'area',
                height: 400,
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
                width: 2
            },
            fill: {
                type: 'gradient',
                gradient: {
                    opacityFrom: 0.6,
                    opacityTo: 0.1
                }
            },
            xaxis: {
                categories: @json($monthlyProducts->pluck('month')->map(function($month) {
                    return \Carbon\Carbon::parse($month . '-01')->format('M Y');
                })),
                title: {
                    text: 'Bulan'
                }
            },
            yaxis: {
                title: {
                    text: 'Jumlah Produk'
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            }
        };
        var monthlyTrendChart = new ApexCharts(document.querySelector("#monthlyTrendChart"), monthlyTrendOptions);
        monthlyTrendChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
