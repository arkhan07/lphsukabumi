<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('dashboard') }}">
                @php
                    $logoPath = App\Models\Setting::get('site_logo', '../img/logo.webp');
                    $siteName = App\Models\Setting::get('site_name', 'LPH Doa Bangsa Sukabumi');
                @endphp
                <img src="{{ asset($logoPath) }}" height="40" alt="{{ $siteName }}" class="navbar-brand-image">
            </a>
        </h1>

        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <!-- Dashboard - Available for all roles -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-home"></i>
                        </span>
                        <span class="nav-link-title">Dashboard</span>
                    </a>
                </li>

                @if(auth()->user()->hasRole('pendamping_halal_reguler'))
                    {{-- PENDAMPING HALAL REGULER (PHR) MENU --}}

                    <!-- Jaringan PHR -->
                    <li class="nav-item dropdown {{ request()->routeIs('phr.recruitment*') || request()->routeIs('phr.downlines*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-network-phr" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('phr.recruitment*') || request()->routeIs('phr.downlines*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-sitemap"></i>
                            </span>
                            <span class="nav-link-title">Jaringan</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('phr.recruitment*') || request()->routeIs('phr.downlines*') ? 'show' : '' }}" id="navbar-network-phr">
                            <a class="dropdown-item" href="{{ route('phr.recruitment') }}">Rekrutmen</a>
                            <a class="dropdown-item" href="{{ route('phr.downlines') }}">Downline PHR</a>
                        </div>
                    </li>

                    <!-- Fee & Royalti PHR -->
                    <li class="nav-item dropdown {{ request()->routeIs('phr.fees*') || request()->routeIs('phr.promotions*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-fees-phr" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('phr.fees*') || request()->routeIs('phr.promotions*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-cash"></i>
                            </span>
                            <span class="nav-link-title">Fee & Royalti</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('phr.fees*') || request()->routeIs('phr.promotions*') ? 'show' : '' }}" id="navbar-fees-phr">
                            <a class="dropdown-item" href="{{ route('phr.fees') }}">Daftar Fee</a>
                            <a class="dropdown-item" href="{{ route('phr.promotions') }}">Riwayat Promosi</a>
                        </div>
                    </li>

                    <!-- Permohonan (untuk registrasi PU) -->
                    <li class="nav-item dropdown {{ request()->routeIs('pelaku_usaha.submissions*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-submissions-phr" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('pelaku_usaha.submissions*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-file-text"></i>
                            </span>
                            <span class="nav-link-title">Permohonan PU</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('pelaku_usaha.submissions*') ? 'show' : '' }}" id="navbar-submissions-phr">
                            <a class="dropdown-item" href="{{ route('pelaku_usaha.submissions.create') }}">Daftarkan PU Baru</a>
                            <a class="dropdown-item" href="{{ route('pelaku_usaha.submissions.index') }}">Lihat Daftar PU</a>
                        </div>
                    </li>

                @elseif(auth()->user()->hasRole('pelaku_usaha') || auth()->user()->hasRole('penyedia_halal'))
                    {{-- PELAKU USAHA & PENYEDIA HALAL MENU --}}

                    <!-- Permohonan Saya -->
                    <li class="nav-item dropdown {{ request()->routeIs('pelaku_usaha.submissions*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-submissions-pu" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('pelaku_usaha.submissions*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-file-text"></i>
                            </span>
                            <span class="nav-link-title">Permohonan</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('pelaku_usaha.submissions*') ? 'show' : '' }}" id="navbar-submissions-pu">
                            <a class="dropdown-item" href="{{ route('pelaku_usaha.submissions.index') }}">Daftar Permohonan</a>
                            <a class="dropdown-item" href="{{ route('pelaku_usaha.submissions.create') }}">Buat Permohonan Baru</a>
                        </div>
                    </li>

                    <!-- Produk Saya -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pelaku_usaha.products*') ? 'active' : '' }}" href="{{ route('pelaku_usaha.products.index') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-package"></i>
                            </span>
                            <span class="nav-link-title">Produk Saya</span>
                        </a>
                    </li>

                    <!-- Dokumen Saya -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pelaku_usaha.documents*') ? 'active' : '' }}" href="{{ route('pelaku_usaha.documents.index') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-folder"></i>
                            </span>
                            <span class="nav-link-title">Dokumen Saya</span>
                        </a>
                    </li>

                    <!-- Keuangan -->
                    <li class="nav-item dropdown {{ request()->routeIs('pelaku_usaha.invoices*') || request()->routeIs('pelaku_usaha.payments*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-finance-pu" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('pelaku_usaha.invoices*') || request()->routeIs('pelaku_usaha.payments*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-currency-dollar"></i>
                            </span>
                            <span class="nav-link-title">Keuangan</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('pelaku_usaha.invoices*') || request()->routeIs('pelaku_usaha.payments*') ? 'show' : '' }}" id="navbar-finance-pu">
                            <a class="dropdown-item {{ request()->routeIs('pelaku_usaha.invoices*') ? 'active' : '' }}" href="{{ route('pelaku_usaha.invoices.index') }}">Invoice Saya</a>
                            <a class="dropdown-item {{ request()->routeIs('pelaku_usaha.payments*') ? 'active' : '' }}" href="{{ route('pelaku_usaha.payments.index') }}">Riwayat Pembayaran</a>
                        </div>
                    </li>

                @elseif(auth()->user()->hasRole('auditor_halal'))
                    {{-- AUDITOR HALAL MENU --}}

                    <!-- Jadwal Audit Saya -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('auditor.schedules*') ? 'active' : '' }}" href="{{ route('auditor.schedules') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-calendar-check"></i>
                            </span>
                            <span class="nav-link-title">Jadwal Audit Saya</span>
                        </a>
                    </li>

                    <!-- Laporan Audit -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('auditor.reports*') ? 'active' : '' }}" href="{{ route('auditor.reports') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-file-text"></i>
                            </span>
                            <span class="nav-link-title">Laporan Audit</span>
                        </a>
                    </li>

                    <!-- Temuan Audit -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('auditor.findings*') ? 'active' : '' }}" href="{{ route('auditor.findings') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-search"></i>
                            </span>
                            <span class="nav-link-title">Temuan Audit</span>
                        </a>
                    </li>

                    <!-- Fee Auditor (30%) -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('auditor.fees*') ? 'active' : '' }}" href="{{ route('auditor.fees') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-cash"></i>
                            </span>
                            <span class="nav-link-title">Fee Audit (30%)</span>
                        </a>
                    </li>

                @elseif(auth()->user()->hasRole('manajer_teknis'))
                    {{-- MANAJER TEKNIS MENU --}}

                    <!-- Monitoring -->
                    <li class="nav-item dropdown {{ request()->routeIs('manajer_teknis.certification-status*') || request()->routeIs('manajer_teknis.timeline*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-monitoring-mt" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('manajer_teknis.certification-status*') || request()->routeIs('manajer_teknis.timeline*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-chart-line"></i>
                            </span>
                            <span class="nav-link-title">Monitoring</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('manajer_teknis.certification-status*') || request()->routeIs('manajer_teknis.timeline*') ? 'show' : '' }}" id="navbar-monitoring-mt">
                            <a class="dropdown-item" href="{{ route('manajer_teknis.certification-status') }}">Status Sertifikasi</a>
                            <a class="dropdown-item" href="{{ route('manajer_teknis.timeline') }}">Timeline Compliance</a>
                        </div>
                    </li>

                    <!-- Auditor Management -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('manajer_teknis.auditor-workload*') ? 'active' : '' }}" href="{{ route('manajer_teknis.auditor-workload') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="nav-link-title">Beban Kerja Auditor</span>
                        </a>
                    </li>

                @elseif(auth()->user()->hasRole('admin_lph'))
                    {{-- ADMIN LPH MENU - Full Access --}}

                    <!-- Permohonan -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.submissions*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-submissions" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.submissions*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-file-text"></i>
                            </span>
                            <span class="nav-link-title">Permohonan</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.submissions*') ? 'show' : '' }}" id="navbar-submissions">
                            <a class="dropdown-item" href="{{ route('admin.submissions.index') }}">Daftar Permohonan</a>
                        </div>
                    </li>

                    <!-- Produk -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.products*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-products" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.products*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-package"></i>
                            </span>
                            <span class="nav-link-title">Produk</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.products*') ? 'show' : '' }}" id="navbar-products">
                            <a class="dropdown-item" href="{{ route('admin.products.index') }}">Daftar Produk</a>
                            <a class="dropdown-item" href="{{ route('admin.products.categories') }}">Kategori Produk</a>
                        </div>
                    </li>

                    <!-- Audit -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.audits*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-audits" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.audits*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-search"></i>
                            </span>
                            <span class="nav-link-title">Audit</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.audits*') ? 'show' : '' }}" id="navbar-audits">
                            <a class="dropdown-item" href="{{ route('admin.audits.schedules.index') }}">Jadwal Audit</a>
                            <a class="dropdown-item" href="{{ route('admin.audits.reports.index') }}">Laporan Audit</a>
                            <a class="dropdown-item" href="{{ route('admin.audits.findings') }}">Temuan Audit</a>
                        </div>
                    </li>

                    <!-- Keuangan -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.finance*') || request()->routeIs('admin.invoices*') || request()->routeIs('admin.auditor-fees*') || request()->routeIs('admin.phr.fees*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-finance" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.finance*') || request()->routeIs('admin.invoices*') || request()->routeIs('admin.auditor-fees*') || request()->routeIs('admin.phr.fees*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-currency-dollar"></i>
                            </span>
                            <span class="nav-link-title">Keuangan</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.finance*') || request()->routeIs('admin.invoices*') || request()->routeIs('admin.auditor-fees*') || request()->routeIs('admin.phr.fees*') ? 'show' : '' }}" id="navbar-finance">
                            <a class="dropdown-item" href="{{ route('admin.invoices.index') }}">Invoice</a>
                            <a class="dropdown-item" href="{{ route('admin.finance.payments') }}">Pembayaran</a>
                            <a class="dropdown-item" href="{{ route('admin.auditor-fees.index') }}">Fee Auditor (30%)</a>
                            <a class="dropdown-item" href="{{ route('admin.phr.fees') }}">Fee PHR (10-15%)</a>
                            <a class="dropdown-item" href="{{ route('admin.finance.fee-settings') }}">Konfigurasi Biaya</a>
                        </div>
                    </li>

                    <!-- PHR Management -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.phr*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-phr" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.phr*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-sitemap"></i>
                            </span>
                            <span class="nav-link-title">Manajemen PHR</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.phr*') ? 'show' : '' }}" id="navbar-phr">
                            <a class="dropdown-item" href="{{ route('admin.phr.index') }}">Dashboard PHR</a>
                            <a class="dropdown-item" href="{{ route('admin.phr.list') }}">Daftar PHR</a>
                            <a class="dropdown-item" href="{{ route('admin.phr.promotions') }}">Persetujuan Promosi</a>
                            <a class="dropdown-item" href="{{ route('admin.phr.fees') }}">Fee & Royalti PHR</a>
                        </div>
                    </li>

                    <!-- Dokumen -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.documents*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-documents" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.documents*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-folder"></i>
                            </span>
                            <span class="nav-link-title">Dokumen</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.documents*') ? 'show' : '' }}" id="navbar-documents">
                            <a class="dropdown-item" href="{{ route('admin.documents.index') }}">Daftar Dokumen</a>
                            <a class="dropdown-item" href="{{ route('admin.documents.create') }}">Upload Dokumen</a>
                            <a class="dropdown-item" href="{{ route('admin.documents.index') }}?verification_status=pending">Verifikasi Dokumen</a>
                        </div>
                    </li>

                    <!-- Laporan -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.reports*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-reports" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.reports*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-chart-bar"></i>
                            </span>
                            <span class="nav-link-title">Laporan</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.reports*') ? 'show' : '' }}" id="navbar-reports">
                            <a class="dropdown-item" href="{{ route('admin.reports.certification') }}">Laporan Sertifikasi</a>
                            <a class="dropdown-item" href="{{ route('admin.reports.financial') }}">Laporan Keuangan</a>
                            <a class="dropdown-item" href="{{ route('admin.reports.audits') }}">Laporan Audit</a>
                        </div>
                    </li>

                    <!-- Pengguna -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-users" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.users*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="nav-link-title">Pengguna</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.users*') ? 'show' : '' }}" id="navbar-users">
                            <a class="dropdown-item" href="{{ route('admin.users.index') }}">Daftar Pengguna</a>
                            <a class="dropdown-item" href="{{ route('admin.users.create') }}">Tambah Pengguna</a>
                            <a class="dropdown-item" href="{{ route('admin.users.roles') }}">Role & Permission</a>
                        </div>
                    </li>

                    <!-- Master Data -->
                    <li class="nav-item dropdown {{ request()->routeIs('admin.master-data*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-master" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ request()->routeIs('admin.master-data*') ? 'true' : 'false' }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-database"></i>
                            </span>
                            <span class="nav-link-title">Master Data</span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('admin.master-data*') ? 'show' : '' }}" id="navbar-master">
                            <a class="dropdown-item" href="{{ route('admin.master-data.regions') }}">Wilayah</a>
                            <a class="dropdown-item" href="{{ route('admin.master-data.business-types') }}">Jenis Usaha</a>
                            <a class="dropdown-item" href="{{ route('admin.master-data.product-types') }}">Tipe Produk</a>
                        </div>
                    </li>

                    <!-- Divider -->
                    <li class="nav-item">
                        <div class="hr-text">Lainnya</div>
                    </li>

                    <!-- Pengaturan -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.settings*') ? 'active' : '' }}" href="{{ route('admin.settings.index') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-settings"></i>
                            </span>
                            <span class="nav-link-title">Pengaturan</span>
                        </a>
                    </li>

                    <!-- Bantuan -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.help') ? 'active' : '' }}" href="{{ route('admin.help') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-help"></i>
                            </span>
                            <span class="nav-link-title">Bantuan</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</aside>
