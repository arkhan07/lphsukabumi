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

        @can('view_submissions')
        <!-- Permohonan -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#submissionMenu">
                <i class="ri-file-list-3-line"></i>
                <span>Permohonan</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="submissionMenu">
                <li><a href="#" class="sidebar-submenu-link">Daftar Permohonan</a></li>
                <li><a href="#" class="sidebar-submenu-link">Buat Permohonan Baru</a></li>
                <li><a href="#" class="sidebar-submenu-link">Permohonan Saya</a></li>
            </ul>
        </li>
        @endcan

        @can('view_products')
        <!-- Produk -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#productMenu">
                <i class="ri-product-hunt-line"></i>
                <span>Produk</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="productMenu">
                <li><a href="#" class="sidebar-submenu-link">Daftar Produk</a></li>
                <li><a href="#" class="sidebar-submenu-link">Tambah Produk</a></li>
                <li><a href="#" class="sidebar-submenu-link">Kategori Produk</a></li>
            </ul>
        </li>
        @endcan

        @can('view_audits')
        <!-- Audit -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#auditMenu">
                <i class="ri-file-search-line"></i>
                <span>Audit</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="auditMenu">
                <li><a href="#" class="sidebar-submenu-link">Jadwal Audit</a></li>
                <li><a href="#" class="sidebar-submenu-link">Laporan Audit</a></li>
                <li><a href="#" class="sidebar-submenu-link">Temuan Audit</a></li>
            </ul>
        </li>
        @endcan

        @can('view_invoices')
        <!-- Keuangan -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#financeMenu">
                <i class="ri-money-dollar-circle-line"></i>
                <span>Keuangan</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="financeMenu">
                <li><a href="#" class="sidebar-submenu-link">Invoice</a></li>
                <li><a href="#" class="sidebar-submenu-link">Pembayaran</a></li>
                <li><a href="#" class="sidebar-submenu-link">Konfigurasi Biaya</a></li>
            </ul>
        </li>
        @endcan

        @can('view_documents')
        <!-- Dokumen -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#documentMenu">
                <i class="ri-folder-line"></i>
                <span>Dokumen</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="documentMenu">
                <li><a href="#" class="sidebar-submenu-link">Daftar Dokumen</a></li>
                <li><a href="#" class="sidebar-submenu-link">Upload Dokumen</a></li>
                <li><a href="#" class="sidebar-submenu-link">Verifikasi Dokumen</a></li>
            </ul>
        </li>
        @endcan

        @can('view_reports')
        <!-- Laporan -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#reportMenu">
                <i class="ri-file-chart-line"></i>
                <span>Laporan</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="reportMenu">
                <li><a href="#" class="sidebar-submenu-link">Laporan Sertifikasi</a></li>
                <li><a href="#" class="sidebar-submenu-link">Laporan Keuangan</a></li>
                <li><a href="#" class="sidebar-submenu-link">Laporan Audit</a></li>
            </ul>
        </li>
        @endcan

        @can('manage_users')
        <!-- Pengguna -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#userMenu">
                <i class="ri-user-settings-line"></i>
                <span>Pengguna</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="userMenu">
                <li><a href="#" class="sidebar-submenu-link">Daftar Pengguna</a></li>
                <li><a href="#" class="sidebar-submenu-link">Tambah Pengguna</a></li>
                <li><a href="#" class="sidebar-submenu-link">Role & Permission</a></li>
            </ul>
        </li>
        @endcan

        @can('manage_master_data')
        <!-- Master Data -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" data-bs-toggle="collapse" data-bs-target="#masterMenu">
                <i class="ri-database-2-line"></i>
                <span>Master Data</span>
                <i class="ri-arrow-down-s-line ms-auto"></i>
            </a>
            <ul class="sidebar-submenu collapse" id="masterMenu">
                <li><a href="#" class="sidebar-submenu-link">Wilayah</a></li>
                <li><a href="#" class="sidebar-submenu-link">Jenis Usaha</a></li>
                <li><a href="#" class="sidebar-submenu-link">Tipe Produk</a></li>
            </ul>
        </li>
        @endcan

        <!-- Pengaturan -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link">
                <i class="ri-settings-3-line"></i>
                <span>Pengaturan</span>
            </a>
        </li>

        <!-- Bantuan -->
        <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link">
                <i class="ri-question-line"></i>
                <span>Bantuan</span>
            </a>
        </li>
    </ul>
</aside>
