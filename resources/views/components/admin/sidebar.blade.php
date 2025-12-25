<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('dashboard') }}" class="sidebar-logo">
            <i class="ri-home-smile-line"></i>
            LPH Doa Bangsa
        </a>
    </div>

    <ul class="sidebar-menu">
        <!-- Dashboard -->
        <li class="sidebar-menu-item">
            <a href="{{ route('dashboard') }}" class="sidebar-menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="ri-dashboard-line"></i>
                <span>Dashboard</span>
            </a>
        </li>

        @if(auth()->user()->hasRole('auditor_halal'))
        <!-- Auditor Menu -->
        <!-- Jadwal Audit -->
        <li class="sidebar-menu-item">
            <a href="{{ route('auditor.schedules') }}" class="sidebar-menu-link {{ request()->routeIs('auditor.schedules*') ? 'active' : '' }}">
                <i class="ri-calendar-check-line"></i>
                <span>Jadwal Audit Saya</span>
            </a>
        </li>

        <!-- Laporan Audit -->
        <li class="sidebar-menu-item">
            <a href="{{ route('auditor.reports') }}" class="sidebar-menu-link {{ request()->routeIs('auditor.reports*') ? 'active' : '' }}">
                <i class="ri-file-list-3-line"></i>
                <span>Laporan Audit</span>
            </a>
        </li>

        <!-- Temuan Audit -->
        <li class="sidebar-menu-item">
            <a href="{{ route('auditor.findings') }}" class="sidebar-menu-link {{ request()->routeIs('auditor.findings*') ? 'active' : '' }}">
                <i class="ri-file-search-line"></i>
                <span>Temuan Audit</span>
            </a>
        </li>

        @elseif(auth()->user()->hasRole('admin_lph'))
        <!-- Admin LPH Menu -->

        <!-- Permohonan -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#submissionMenu">
                <i class="ri-file-list-3-line"></i>
                <span>Permohonan</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="submissionMenu">
                <li><a href="{{ route('admin.submissions.index') }}" class="sidebar-submenu-link">Daftar Permohonan</a></li>
                <li><a href="{{ route('admin.submissions.create') }}" class="sidebar-submenu-link">Buat Permohonan Baru</a></li>
            </ul>
        </li>

        <!-- Produk -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#productMenu">
                <i class="ri-product-hunt-line"></i>
                <span>Produk</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="productMenu">
                <li><a href="{{ route('admin.products.index') }}" class="sidebar-submenu-link">Daftar Produk</a></li>
                <li><a href="{{ route('admin.products.create') }}" class="sidebar-submenu-link">Tambah Produk</a></li>
                <li><a href="{{ route('admin.products.categories') }}" class="sidebar-submenu-link">Kategori Produk</a></li>
            </ul>
        </li>

        <!-- Audit -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#auditMenu">
                <i class="ri-file-search-line"></i>
                <span>Audit</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="auditMenu">
                <li><a href="{{ route('admin.audits.schedules') }}" class="sidebar-submenu-link">Jadwal Audit</a></li>
                <li><a href="{{ route('admin.audits.reports') }}" class="sidebar-submenu-link">Laporan Audit</a></li>
                <li><a href="{{ route('admin.audits.findings') }}" class="sidebar-submenu-link">Temuan Audit</a></li>
            </ul>
        </li>

        <!-- Keuangan -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#financeMenu">
                <i class="ri-money-dollar-circle-line"></i>
                <span>Keuangan</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="financeMenu">
                <li><a href="{{ route('admin.finance.invoices') }}" class="sidebar-submenu-link">Invoice</a></li>
                <li><a href="{{ route('admin.finance.payments') }}" class="sidebar-submenu-link">Pembayaran</a></li>
                <li><a href="{{ route('admin.finance.fee-settings') }}" class="sidebar-submenu-link">Konfigurasi Biaya</a></li>
            </ul>
        </li>

        <!-- Dokumen -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#documentMenu">
                <i class="ri-folder-line"></i>
                <span>Dokumen</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="documentMenu">
                <li><a href="{{ route('admin.documents.index') }}" class="sidebar-submenu-link">Daftar Dokumen</a></li>
                <li><a href="{{ route('admin.documents.create') }}" class="sidebar-submenu-link">Upload Dokumen</a></li>
                <li><a href="{{ route('admin.documents.index') }}?verification_status=pending" class="sidebar-submenu-link">Verifikasi Dokumen</a></li>
            </ul>
        </li>

        <!-- Laporan -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#reportMenu">
                <i class="ri-file-chart-line"></i>
                <span>Laporan</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="reportMenu">
                <li><a href="{{ route('admin.reports.certification') }}" class="sidebar-submenu-link">Laporan Sertifikasi</a></li>
                <li><a href="{{ route('admin.reports.financial') }}" class="sidebar-submenu-link">Laporan Keuangan</a></li>
                <li><a href="{{ route('admin.reports.audits') }}" class="sidebar-submenu-link">Laporan Audit</a></li>
            </ul>
        </li>

        <!-- Pengguna -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#userMenu">
                <i class="ri-user-settings-line"></i>
                <span>Pengguna</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="userMenu">
                <li><a href="{{ route('admin.users.index') }}" class="sidebar-submenu-link">Daftar Pengguna</a></li>
                <li><a href="{{ route('admin.users.create') }}" class="sidebar-submenu-link">Tambah Pengguna</a></li>
                <li><a href="{{ route('admin.users.roles') }}" class="sidebar-submenu-link">Role & Permission</a></li>
            </ul>
        </li>

        <!-- Master Data -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#masterMenu">
                <i class="ri-database-2-line"></i>
                <span>Master Data</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="masterMenu">
                <li><a href="{{ route('admin.master-data.regions') }}" class="sidebar-submenu-link">Wilayah</a></li>
                <li><a href="{{ route('admin.master-data.business-types') }}" class="sidebar-submenu-link">Jenis Usaha</a></li>
                <li><a href="{{ route('admin.master-data.product-types') }}" class="sidebar-submenu-link">Tipe Produk</a></li>
            </ul>
        </li>

        <!-- Pengaturan -->
        <li class="sidebar-menu-item">
            <a href="{{ route('admin.settings.index') }}" class="sidebar-menu-link">
                <i class="ri-settings-3-line"></i>
                <span>Pengaturan</span>
            </a>
        </li>

        <!-- Bantuan -->
        <li class="sidebar-menu-item">
            <a href="{{ route('admin.help') }}" class="sidebar-menu-link">
                <i class="ri-question-line"></i>
                <span>Bantuan</span>
            </a>
        </li>
        @endif
    </ul>
</aside>
