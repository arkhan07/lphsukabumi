<header class="navbar navbar-expand-md navbar-light d-print-none sticky-top">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="{{ route('dashboard') }}">
                @php
                    $logoPath = App\Models\Setting::get('site_logo', '../img/logo.webp');
                @endphp
                <img src="{{ asset($logoPath) }}" height="40" alt="LPH Doa Bangsa" class="navbar-brand-image">
            </a>
        </h1>

        <div class="navbar-nav flex-row order-md-last">
            <!-- Search -->
            <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-search">
                        <i class="ti ti-search"></i>
                        <span class="d-none d-lg-inline">Cari...</span>
                    </a>
                </div>
            </div>

            <!-- Notifications -->
            <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                    <i class="ti ti-bell"></i>
                    <span class="badge bg-red badge-pill badge-blink"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Notifikasi Terbaru</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="status-dot status-dot-animated bg-red d-block"></span>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Permohonan Baru</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Permohonan sertifikasi dari PT. Halal Jaya
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="status-dot status-dot-animated bg-green d-block"></span>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Dokumen Disetujui</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Dokumen untuk produk "Kecap Manis" telah disetujui
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions show">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="status-dot status-dot-animated bg-yellow d-block"></span>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Audit Dijadwalkan</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Audit untuk CV. Berkah akan dilaksanakan besok
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Menu -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ Auth::user()->profile_photo_url }})"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="mt-1 small text-secondary">{{ Auth::user()->roles->first()->display_name ?? 'User' }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    @if(Auth::user()->hasRole(['pelaku_usaha', 'penyedia_halal', 'pendamping_halal_reguler']))
                        <a href="{{ route('pelaku_usaha.profile.index') }}" class="dropdown-item">
                            <i class="ti ti-user me-2"></i>
                            Profil Saya
                        </a>
                        <a href="{{ route('pelaku_usaha.profile.index') }}" class="dropdown-item">
                            <i class="ti ti-settings me-2"></i>
                            Pengaturan
                        </a>
                        <a href="{{ route('pelaku_usaha.help.index') }}" class="dropdown-item">
                            <i class="ti ti-help me-2"></i>
                            Bantuan
                        </a>
                    @else
                        <a href="{{ route('admin.profile') }}" class="dropdown-item">
                            <i class="ti ti-user me-2"></i>
                            Profil Saya
                        </a>
                        <a href="{{ route('admin.settings.index') }}" class="dropdown-item">
                            <i class="ti ti-settings me-2"></i>
                            Pengaturan
                        </a>
                        <a href="{{ route('admin.help') }}" class="dropdown-item">
                            <i class="ti ti-help me-2"></i>
                            Bantuan
                        </a>
                    @endif
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="ti ti-logout me-2"></i>
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Search Modal -->
<div class="modal modal-blur fade" id="modal-search" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pencarian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-icon mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Cari permohonan, produk, atau dokumen..." autofocus>
                    <span class="input-icon-addon">
                        <i class="ti ti-search"></i>
                    </span>
                </div>
                <div class="text-secondary">
                    <small>Tekan Enter untuk mencari</small>
                </div>
            </div>
        </div>
    </div>
</div>
