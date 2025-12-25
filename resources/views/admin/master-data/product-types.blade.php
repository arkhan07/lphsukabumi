<x-layouts.admin.app>
    <x-slot name="title">Master Data Wilayah</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Master Data Wilayah</h2>
            <p class="text-secondary-light mb-0">Kelola data provinsi, kota, dan kecamatan</p>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Wilayah
            </button>
        </div>
    </div>

    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Daftar Wilayah</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">Provinsi</th>
                        <th style="padding: 1rem; font-weight: 600;">Kota/Kabupaten</th>
                        <th style="padding: 1rem; font-weight: 600;">Kecamatan</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;">Jawa Barat</td>
                        <td style="padding: 1rem;">Sukabumi</td>
                        <td style="padding: 1rem;">Cisaat</td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-success"><i class="ri-edit-line"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin.app>
