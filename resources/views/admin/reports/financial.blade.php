<x-layouts.admin.app>
    <x-slot name="title">Laporan Sertifikasi</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Sertifikasi</h2>
            <p class="text-secondary-light mb-0">Laporan statistik dan data sertifikasi halal</p>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="ri-download-line me-2"></i>
                Export PDF
            </button>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Total Sertifikat</div>
                <div style="font-size: 1.75rem; font-weight: 700;">489</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Aktif</div>
                <div style="font-size: 1.75rem; font-weight: 700;">432</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Akan Kadaluarsa</div>
                <div style="font-size: 1.75rem; font-weight: 700;">35</div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main);">
                <div class="text-secondary-light mb-2" style="font-size: 0.875rem;">Kadaluarsa</div>
                <div style="font-size: 1.75rem; font-weight: 700;">22</div>
            </div>
        </div>
    </div>

    <div class="card-custom">
        <h5 class="mb-3" style="font-weight: 600;">Grafik Sertifikasi Per Bulan</h5>
        <div id="certificationChart" style="height: 300px;"></div>
    </div>
</x-layouts.admin.app>
