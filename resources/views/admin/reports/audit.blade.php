<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Laporan</div>
                    <h2 class="page-title">Laporan Audit</h2>
                    <p class="text-muted mt-1">Laporan hasil audit dan inspeksi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <button class="btn btn-outline-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 12h4" /><path d="M10 16h4" /></svg>
                            Export Excel
                        </button>
                        <button class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M17 18h2" /><path d="M20 15h-3v6" /><path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" /></svg>
                            Export PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Date Range Filter -->
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12 col-md-4">
                            <label for="startDate" class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="startDate" value="{{ date('Y-m-01') }}">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="endDate" class="form-label">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="endDate" value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-end">
                            <button class="btn btn-primary w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                Filter Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Audit</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">342</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-primary-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-primary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 12l4 0" /><path d="M10 16l4 0" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                    15%
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                                <span class="text-muted ms-1">dari periode sebelumnya</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Audit Selesai</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">298</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-green-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                    87%
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                                <span class="text-muted ms-1">completion rate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Temuan</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">126</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-yellow-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                    8%
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 6l4 -4l8 8" /><path d="M21 10l0 7l-7 0" /></svg>
                                </span>
                                <span class="text-muted ms-1">lebih rendah</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Skor Rata-rata</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">87.5</div>
                                <div class="me-auto">
                                    <span class="avatar avatar-sm" style="background-color: var(--tblr-cyan-lt);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-cyan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                    3.2
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                                <span class="text-muted ms-1">poin lebih tinggi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Stats Row -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Temuan Kritis</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-red">18</div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <span class="badge bg-red-lt">14% dari total temuan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Temuan Mayor</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-orange">42</div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <span class="badge bg-orange-lt">33% dari total temuan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Temuan Minor</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 text-cyan">66</div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <span class="badge bg-cyan-lt">53% dari total temuan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Waktu Rata-rata Audit</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">4.5</div>
                                <div class="me-auto">
                                    <span class="text-muted">Jam</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 6l4 -4l8 8" /><path d="M21 10l0 7l-7 0" /></svg>
                                    30 menit lebih efisien
                                </span>
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
                            <h3 class="card-title">Distribusi Hasil Audit</h3>
                            <div class="card-actions">
                                <div class="btn-group" role="group">
                                    <input type="radio" class="btn-check" name="chart-period" id="monthly" autocomplete="off" checked>
                                    <label class="btn btn-sm" for="monthly">Bulanan</label>

                                    <input type="radio" class="btn-check" name="chart-period" id="weekly" autocomplete="off">
                                    <label class="btn btn-sm" for="weekly">Mingguan</label>

                                    <input type="radio" class="btn-check" name="chart-period" id="daily" autocomplete="off">
                                    <label class="btn btn-sm" for="daily">Harian</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="auditResultsChart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Temuan Berdasarkan Tingkat</h3>
                        </div>
                        <div class="card-body">
                            <div id="findingsSeverityChart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row 2 -->
            <div class="row row-cards mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Performa Auditor</h3>
                        </div>
                        <div class="card-body">
                            <div id="auditorPerformanceChart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Audit & Temuan</h3>
                    <div class="card-actions">
                        <div class="d-flex gap-2">
                            <select class="form-select form-select-sm" style="width: 150px;">
                                <option>Semua Status</option>
                                <option>Selesai</option>
                                <option>Dalam Proses</option>
                                <option>Terjadwal</option>
                            </select>
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                </span>
                                <input type="search" class="form-control form-control-sm" placeholder="Cari audit..." style="width: 250px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Audit</th>
                                <th>Pelaku Usaha</th>
                                <th>Auditor</th>
                                <th>Tanggal Audit</th>
                                <th>Skor</th>
                                <th>Temuan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong class="text-primary">#AUD-2024-342</strong></td>
                                <td>PT. Halal Jaya Makmur</td>
                                <td>Ahmad Fauzi, S.T.</td>
                                <td>22 Des 2024</td>
                                <td><span class="badge bg-green-lt">92</span></td>
                                <td>
                                    <span class="badge bg-red">0 Kritis</span>
                                    <span class="badge bg-orange">1 Mayor</span>
                                    <span class="badge bg-cyan">2 Minor</span>
                                </td>
                                <td><span class="badge bg-green-lt">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong class="text-primary">#AUD-2024-341</strong></td>
                                <td>CV. Berkah Selalu</td>
                                <td>Siti Nurhaliza, M.T.</td>
                                <td>20 Des 2024</td>
                                <td><span class="badge bg-green-lt">88</span></td>
                                <td>
                                    <span class="badge bg-red">0 Kritis</span>
                                    <span class="badge bg-orange">2 Mayor</span>
                                    <span class="badge bg-cyan">3 Minor</span>
                                </td>
                                <td><span class="badge bg-green-lt">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong class="text-primary">#AUD-2024-340</strong></td>
                                <td>UD. Maju Bersama</td>
                                <td>Budi Santoso, S.T.</td>
                                <td>18 Des 2024</td>
                                <td><span class="badge bg-yellow-lt">75</span></td>
                                <td>
                                    <span class="badge bg-red">1 Kritis</span>
                                    <span class="badge bg-orange">3 Mayor</span>
                                    <span class="badge bg-cyan">4 Minor</span>
                                </td>
                                <td><span class="badge bg-green-lt">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong class="text-primary">#AUD-2024-339</strong></td>
                                <td>PT. Sejahtera Halal</td>
                                <td>Ahmad Fauzi, S.T.</td>
                                <td>15 Des 2024</td>
                                <td><span class="badge bg-green-lt">95</span></td>
                                <td>
                                    <span class="badge bg-red">0 Kritis</span>
                                    <span class="badge bg-orange">0 Mayor</span>
                                    <span class="badge bg-cyan">1 Minor</span>
                                </td>
                                <td><span class="badge bg-green-lt">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong class="text-primary">#AUD-2024-338</strong></td>
                                <td>CV. Barokah Rezeki</td>
                                <td>Dewi Lestari, M.Sc.</td>
                                <td>12 Des 2024</td>
                                <td><span class="badge bg-red-lt">65</span></td>
                                <td>
                                    <span class="badge bg-red">2 Kritis</span>
                                    <span class="badge bg-orange">4 Mayor</span>
                                    <span class="badge bg-cyan">5 Minor</span>
                                </td>
                                <td><span class="badge bg-green-lt">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong class="text-primary">#AUD-2024-337</strong></td>
                                <td>UD. Rizki Melimpah</td>
                                <td>Siti Nurhaliza, M.T.</td>
                                <td>10 Des 2024</td>
                                <td><span class="badge bg-green-lt">90</span></td>
                                <td>
                                    <span class="badge bg-red">0 Kritis</span>
                                    <span class="badge bg-orange">1 Mayor</span>
                                    <span class="badge bg-cyan">2 Minor</span>
                                </td>
                                <td><span class="badge bg-green-lt">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong class="text-primary">#AUD-2024-336</strong></td>
                                <td>PT. Berkah Usaha</td>
                                <td>Budi Santoso, S.T.</td>
                                <td>26 Des 2024</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="badge bg-cyan-lt">Terjadwal</span></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong class="text-primary">#AUD-2024-335</strong></td>
                                <td>CV. Amanah Jaya</td>
                                <td>Ahmad Fauzi, S.T.</td>
                                <td>24 Des 2024</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="badge bg-yellow-lt">Dalam Proses</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Menampilkan 1 sampai 8 dari 342 audit</p>
                    <ul class="pagination m-0 ms-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                                Sebelumnya
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">43</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Audit Results Chart (Bar with multiple series)
        var auditResultsOptions = {
            series: [{
                name: 'Lulus',
                data: [42, 48, 45, 52, 49, 55]
            }, {
                name: 'Lulus dengan Temuan',
                data: [18, 22, 20, 24, 21, 26]
            }, {
                name: 'Tidak Lulus',
                data: [3, 4, 2, 5, 3, 4]
            }],
            chart: {
                type: 'bar',
                height: 350,
                stacked: false,
                toolbar: {
                    show: false
                },
                fontFamily: 'inherit'
            },
            colors: ['#10b981', '#f59e0b', '#ef4444'],
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: false,
                    columnWidth: '60%',
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['Jul 2024', 'Agu 2024', 'Sep 2024', 'Okt 2024', 'Nov 2024', 'Des 2024']
            },
            yaxis: {
                title: {
                    text: 'Jumlah Audit'
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            },
            grid: {
                borderColor: 'rgba(0,0,0,0.05)'
            }
        };
        var auditResultsChart = new ApexCharts(document.querySelector("#auditResultsChart"), auditResultsOptions);
        auditResultsChart.render();

        // Findings Severity Chart (Donut)
        var findingsSeverityOptions = {
            series: [18, 42, 66],
            chart: {
                type: 'donut',
                height: 350,
                fontFamily: 'inherit'
            },
            labels: ['Kritis', 'Mayor', 'Minor'],
            colors: ['#ef4444', '#f59e0b', '#3b82f6'],
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            total: {
                                show: true,
                                label: 'Total Temuan',
                                formatter: function(w) {
                                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                }
                            }
                        }
                    }
                }
            },
            dataLabels: {
                enabled: true,
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
        var findingsSeverityChart = new ApexCharts(document.querySelector("#findingsSeverityChart"), findingsSeverityOptions);
        findingsSeverityChart.render();

        // Auditor Performance Chart (Horizontal Bar)
        var auditorPerformanceOptions = {
            series: [{
                name: 'Jumlah Audit',
                data: [89, 76, 65, 54, 48]
            }, {
                name: 'Skor Rata-rata',
                data: [92, 88, 85, 87, 90]
            }],
            chart: {
                type: 'bar',
                height: 400,
                toolbar: {
                    show: false
                },
                fontFamily: 'inherit'
            },
            colors: ['#206bc4', '#f59e0b'],
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: true,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                offsetX: 30,
                style: {
                    fontSize: '12px'
                }
            },
            xaxis: {
                categories: ['Ahmad Fauzi, S.T.', 'Siti Nurhaliza, M.T.', 'Budi Santoso, S.T.', 'Dewi Lestari, M.Sc.', 'Rizki Pratama, M.T.']
            },
            yaxis: {
                title: {
                    text: 'Auditor'
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            },
            grid: {
                borderColor: 'rgba(0,0,0,0.05)'
            }
        };
        var auditorPerformanceChart = new ApexCharts(document.querySelector("#auditorPerformanceChart"), auditorPerformanceOptions);
        auditorPerformanceChart.render();
    </script>
    @endpush
</x-layouts.admin.app>
