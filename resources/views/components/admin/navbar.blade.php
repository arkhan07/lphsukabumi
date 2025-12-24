<nav class="navbar-custom">
    <div class="d-flex align-items-center gap-3">
        <!-- Mobile Menu Toggle -->
        <button class="navbar-icon-btn d-lg-none" id="sidebarToggle">
            <i class="ri-menu-line"></i>
        </button>

        <!-- Search Bar -->
        <div class="navbar-search d-none d-md-block">
            <div class="position-relative">
                <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                <input type="text" class="form-control ps-5" placeholder="Cari...">
            </div>
        </div>
    </div>

    <div class="navbar-actions">
        <!-- Notifications -->
        <div class="dropdown">
            <button class="navbar-icon-btn" data-bs-toggle="dropdown">
                <i class="ri-notification-3-line"></i>
                <span class="navbar-badge">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-0" style="width: 320px;">
                <div class="p-3 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Notifikasi</h6>
                        <span class="badge bg-primary">3 Baru</span>
                    </div>
                </div>
                <div class="list-group list-group-flush" style="max-height: 350px; overflow-y: auto;">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="stat-icon info" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="ri-file-text-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.875rem;">Permohonan Baru</h6>
                                <p class="mb-1 text-muted" style="font-size: 0.75rem;">Permohonan sertifikasi dari PT. Halal Jaya</p>
                                <small class="text-muted">5 menit yang lalu</small>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="stat-icon success" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="ri-check-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.875rem;">Dokumen Disetujui</h6>
                                <p class="mb-1 text-muted" style="font-size: 0.75rem;">Dokumen untuk produk "Kecap Manis" telah disetujui</p>
                                <small class="text-muted">1 jam yang lalu</small>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="stat-icon warning" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="ri-alert-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.875rem;">Audit Dijadwalkan</h6>
                                <p class="mb-1 text-muted" style="font-size: 0.75rem;">Audit untuk CV. Berkah akan dilaksanakan besok</p>
                                <small class="text-muted">2 jam yang lalu</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2 border-top text-center">
                    <a href="#" class="text-primary text-decoration-none">Lihat Semua Notifikasi</a>
                </div>
            </div>
        </div>

        <!-- User Profile -->
        <div class="dropdown">
            <div class="navbar-profile" data-bs-toggle="dropdown">
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=166F61&color=fff" alt="{{ Auth::user()->name }}">
                <div class="d-none d-md-block">
                    <div style="font-size: 0.875rem; font-weight: 600;">{{ Auth::user()->name }}</div>
                    <div style="font-size: 0.75rem; color: var(--text-secondary-light);">
                        {{ Auth::user()->roles->first()->display_name ?? 'User' }}
                    </div>
                </div>
                <i class="ri-arrow-down-s-line"></i>
            </div>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="ri-user-line me-2"></i>
                        Profil Saya
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="ri-settings-3-line me-2"></i>
                        Pengaturan
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="ri-question-line me-2"></i>
                        Bantuan
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="ri-logout-box-line me-2"></i>
                            Keluar
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Sidebar toggle for mobile
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');

        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('show');
            });
        }
    });
</script>
