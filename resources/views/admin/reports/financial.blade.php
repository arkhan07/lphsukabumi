<x-layouts.admin.app>
    <x-slot name="title">Laporan Keuangan</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Laporan</div>
                    <h2 class="page-title">Keuangan</h2>
                    <p class="text-muted mt-1">Laporan pendapatan dan pembayaran sertifikasi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <button class="btn btn-success d-none d-sm-inline-block" onclick="exportExcel()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 13h4" /><path d="M12 11v6" /></svg>
                            Export Excel
                        </button>
                        <button class="btn btn-danger d-none d-sm-inline-block" onclick="exportPDF()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 17h6" /><path d="M9 13h6" /></svg>
                            Export PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Date Filter -->
            <form method="GET" action="{{ route('admin.reports.financial') }}" class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label required">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="start_date"
                                   value="{{ request('start_date', $startDate instanceof \Carbon\Carbon ? $startDate->format('Y-m-d') : $startDate) }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label required">Tanggal Akhir</label>
                            <input type="date" class="form-control" name="end_date"
                                   value="{{ request('end_date', $endDate instanceof \Carbon\Carbon ? $endDate->format('Y-m-d') : $endDate) }}">
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Filter Data</button>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Statistics Cards -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Pendapatan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ number_format($revenueStats['total_invoiced'] / 1000000, 1) }}M</div>
                                <div class="me-auto">
                                    <span class="text-green">Total Invoice</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>Rp {{ number_format($revenueStats['total_invoiced'], 0, ',', '.') }}</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Pembayaran Lunas</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">{{ number_format($revenueStats['total_paid'] / 1000000, 1) }}M</div>
                                <div class="me-auto">
                                    <span class="badge bg-success-lt">{{ $revenueStats['total_invoiced'] > 0 ? number_format(($revenueStats['total_paid'] / $revenueStats['total_invoiced']) * 100, 0) : 0 }}%</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>Rp {{ number_format($revenueStats['total_paid'], 0, ',', '.') }}</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Pembayaran Tertunggak</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-danger">{{ number_format($revenueStats['total_overdue'] / 1000000, 1) }}M</div>
                                <div class="me-auto">
                                    <span class="badge bg-danger-lt">{{ $revenueStats['total_invoiced'] > 0 ? number_format(($revenueStats['total_overdue'] / $revenueStats['total_invoiced']) * 100, 0) : 0 }}%</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>Rp {{ number_format($revenueStats['total_overdue'], 0, ',', '.') }}</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Pembayaran Pending</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-warning">{{ number_format($revenueStats['total_pending'] / 1000000, 1) }}M</div>
                                <div class="me-auto">
                                    <span class="badge bg-warning-lt">{{ $revenueStats['total_invoiced'] > 0 ? number_format(($revenueStats['total_pending'] / $revenueStats['total_invoiced']) * 100, 0) : 0 }}%</span>
                                </div>
                            </div>
                            <div class="mt-2 text-muted"><small>Rp {{ number_format($revenueStats['total_pending'], 0, ',', '.') }}</small></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Secondary Stats -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Pembayaran Sebagian</div>
                            <div class="h3 mb-0">Rp {{ number_format($revenueStats['total_partial'], 0, ',', '.') }}</div>
                            <div class="text-muted mt-1"><small>{{ $revenueStats['total_invoiced'] > 0 ? number_format(($revenueStats['total_partial'] / $revenueStats['total_invoiced']) * 100, 1) : 0 }}% dari total</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Metode Pembayaran</div>
                            <div class="h3 mb-0">{{ $paymentMethods->count() }}</div>
                            <div class="text-muted mt-1"><small>Metode tersedia</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Total Transaksi</div>
                            <div class="h3 mb-0">{{ number_format($paymentMethods->sum('count'), 0, ',', '.') }}</div>
                            <div class="text-muted mt-1"><small>Pembayaran terverifikasi</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Tingkat Pelunasan</div>
                            <div class="h3 mb-0">{{ number_format($collectionRate['rate_percentage'], 1) }}%</div>
                            <div class="text-muted mt-1"><small>{{ $collectionRate['rate_percentage'] >= 90 ? 'Target tercapai' : 'Perlu ditingkatkan' }}</small></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="row row-cards mb-3">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tren Pendapatan Bulanan</h3>
                        </div>
                        <div class="card-body">
                            <div id="revenueTrendChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Metode Pembayaran</h3>
                        </div>
                        <div class="card-body">
                            <div id="paymentMethodChart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Clients Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top 10 Pelaku Usaha (Berdasarkan Pembayaran)</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <thead>
                            <tr>
                                <th>No</th>
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
                                <td class="text-muted">{{ $index + 1 }}</td>
                                <td><strong>{{ $client->company_name }}</strong></td>
                                <td class="text-muted">{{ $client->invoice_count }}</td>
                                <td class="text-muted">Rp {{ number_format($client->total_invoiced, 0, ',', '.') }}</td>
                                <td><strong class="text-green">Rp {{ number_format($client->total_paid, 0, ',', '.') }}</strong></td>
                                <td>
                                    @if($client->total_paid >= $client->total_invoiced)
                                        <span class="badge bg-success-lt">Lunas</span>
                                    @else
                                        <span class="badge bg-warning-lt">Sebagian</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 10l.01 0" /><path d="M15 10l.01 0" /><path d="M9.5 15a3.5 3.5 0 0 0 5 0" /></svg>
                                    <div>Belum ada data pelanggan untuk periode ini</div>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Revenue Trend Chart
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
                toolbar: { show: false }
            },
            colors: ['#206bc4', '#2fb344'],
            dataLabels: { enabled: false },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            xaxis: {
                categories: @json($monthlyRevenue->pluck('month')->map(function($month) {
                    return \Carbon\Carbon::createFromFormat('Y-m', $month)->format('M Y');
                }))
            },
            yaxis: {
                title: { text: 'Pendapatan (Juta Rupiah)' },
                labels: {
                    formatter: function(val) {
                        return 'Rp ' + val.toFixed(1) + 'M';
                    }
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
        new ApexCharts(document.querySelector("#revenueTrendChart"), revenueTrendOptions).render();

        // Payment Method Chart
        var paymentMethodOptions = {
            series: @json($paymentMethods->pluck('count')),
            chart: {
                type: 'donut',
                height: 240
            },
            labels: @json($paymentMethods->pluck('method')),
            colors: ['#206bc4', '#2fb344', '#f59f00', '#d63939', '#ae3ec9'],
            legend: { position: 'bottom' },
            plotOptions: {
                pie: {
                    donut: {
                        size: '70%',
                        labels: {
                            show: true,
                            total: {
                                show: true,
                                label: 'Total',
                                formatter: function (w) {
                                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                }
                            }
                        }
                    }
                }
            }
        };
        new ApexCharts(document.querySelector("#paymentMethodChart"), paymentMethodOptions).render();

        function exportExcel() {
            window.location.href = '{{ route("admin.reports.financial") }}?export=excel&start_date={{ request("start_date") }}&end_date={{ request("end_date") }}';
        }

        function exportPDF() {
            window.location.href = '{{ route("admin.reports.financial") }}?export=pdf&start_date={{ request("start_date") }}&end_date={{ request("end_date") }}';
        }
    </script>
    @endpush
</x-layouts.admin.app>
