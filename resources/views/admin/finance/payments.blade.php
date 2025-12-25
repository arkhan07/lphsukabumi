<x-layouts.admin.app>
    <x-slot name="title">Pembayaran</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Riwayat Pembayaran</h2>
            <p class="text-secondary-light mb-0">Daftar transaksi pembayaran sertifikasi</p>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Terbayar</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">Rp 125M</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-money-dollar-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Pending Verifikasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">Rp 15M</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Bulan Ini</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">Rp 45M</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-calendar-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payments Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Pembayaran</h5>
            <div class="d-flex gap-2">
                <select class="form-select" style="width: 150px;">
                    <option value="">Semua Status</option>
                    <option value="verified">Terverifikasi</option>
                    <option value="pending">Pending</option>
                    <option value="rejected">Ditolak</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="paymentsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600;">No. Pembayaran</th>
                        <th style="padding: 1rem; font-weight: 600;">Invoice</th>
                        <th style="padding: 1rem; font-weight: 600;">Pelaku Usaha</th>
                        <th style="padding: 1rem; font-weight: 600;">Metode</th>
                        <th style="padding: 1rem; font-weight: 600;">Jumlah</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 1rem;"><strong>PAY/2024/12/001</strong></td>
                        <td style="padding: 1rem;">INV/2024/12/001</td>
                        <td style="padding: 1rem;">PT. Halal Jaya Makmur</td>
                        <td style="padding: 1rem;">Transfer Bank</td>
                        <td style="padding: 1rem;"><strong>Rp 4.000.000</strong></td>
                        <td style="padding: 1rem;">24 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-warning">Pending</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-success" title="Verifikasi">
                                    <i class="ri-check-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Tolak">
                                    <i class="ri-close-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>PAY/2024/12/002</strong></td>
                        <td style="padding: 1rem;">INV/2024/12/002</td>
                        <td style="padding: 1rem;">CV. Berkah Selalu</td>
                        <td style="padding: 1rem;">Transfer Bank</td>
                        <td style="padding: 1rem;"><strong>Rp 3.500.000</strong></td>
                        <td style="padding: 1rem;">23 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Terverifikasi</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-info" title="Bukti">
                                    <i class="ri-download-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem;"><strong>PAY/2024/12/003</strong></td>
                        <td style="padding: 1rem;">INV/2024/12/005</td>
                        <td style="padding: 1rem;">UD. Maju Bersama</td>
                        <td style="padding: 1rem;">Virtual Account</td>
                        <td style="padding: 1rem;"><strong>Rp 4.500.000</strong></td>
                        <td style="padding: 1rem;">22 Des 2024</td>
                        <td style="padding: 1rem;"><span class="badge-custom badge-success">Terverifikasi</span></td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-outline-primary" title="Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-info" title="Bukti">
                                    <i class="ri-download-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#paymentsTable').DataTable({
                language: {
                    lengthMenu: "Tampilkan _MENU_ data per halaman",
                    zeroRecords: "Data tidak ditemukan",
                    info: "Menampilkan halaman _PAGE_ dari _PAGES_",
                    infoEmpty: "Tidak ada data tersedia",
                    infoFiltered: "(difilter dari _MAX_ total data)",
                    search: "Cari:",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya"
                    }
                },
                order: [[5, 'desc']],
                pageLength: 10
            });
        });
    </script>
    @endpush
</x-layouts.admin.app>
