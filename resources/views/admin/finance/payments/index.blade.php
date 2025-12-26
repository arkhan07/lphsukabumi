<x-layouts.admin.app>
    <x-slot name="title">Manajemen Pembayaran</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Pembayaran</h2>
            <p class="text-secondary-light mb-0">Kelola dan verifikasi pembayaran dari pelanggan</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Pembayaran</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-wallet-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Pending</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['pending'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-time-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Terverifikasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['verified'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Ditolak</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['rejected'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-close-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Pembayaran</h5>
            <div class="d-flex gap-2 flex-wrap">
                <div class="position-relative">
                    <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                    <input type="text" id="searchInput" class="form-control ps-5" placeholder="Cari pembayaran..." style="width: 250px;">
                </div>
                <select class="form-select" id="statusFilter" style="width: 180px;">
                    <option value="">Semua Status</option>
                    <option value="pending">Pending</option>
                    <option value="verified">Terverifikasi</option>
                    <option value="rejected">Ditolak</option>
                </select>
                <select class="form-select" id="methodFilter" style="width: 180px;">
                    <option value="">Semua Metode</option>
                    <option value="transfer">Transfer Bank</option>
                    <option value="cash">Tunai</option>
                    <option value="credit_card">Kartu Kredit</option>
                    <option value="e_wallet">E-Wallet</option>
                    <option value="other">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="paymentsTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 60px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">No. Pembayaran</th>
                        <th style="padding: 1rem; font-weight: 600;">Invoice</th>
                        <th style="padding: 1rem; font-weight: 600;">Pengguna</th>
                        <th style="padding: 1rem; font-weight: 600;">Jumlah</th>
                        <th style="padding: 1rem; font-weight: 600;">Metode</th>
                        <th style="padding: 1rem; font-weight: 600;">Tanggal</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center; width: 200px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($payments ?? [] as $index => $payment)
                    <tr>
                        <td style="padding: 1rem;">{{ $index + 1 }}</td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 600; color: var(--primary-600);">{{ $payment->payment_number }}</div>
                        </td>
                        <td style="padding: 1rem;">
                            @if($payment->invoice)
                            <a href="{{ route('admin.finance.invoices.show', $payment->invoice_id) }}" style="color: var(--primary-600); font-weight: 500;">
                                {{ $payment->invoice->invoice_number }}
                            </a>
                            @else
                                <span class="text-secondary-light">-</span>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $payment->user->name ?? '-' }}</div>
                            <small class="text-secondary-light">{{ $payment->user->email ?? '-' }}</small>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 600; color: var(--success-main);">
                                Rp {{ number_format($payment->amount ?? 0, 0, ',', '.') }}
                            </div>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $methodIcons = [
                                    'transfer' => 'ri-bank-line',
                                    'cash' => 'ri-money-dollar-circle-line',
                                    'credit_card' => 'ri-bank-card-line',
                                    'e_wallet' => 'ri-wallet-3-line',
                                    'other' => 'ri-more-line',
                                ];
                                $methodLabels = [
                                    'transfer' => 'Transfer Bank',
                                    'cash' => 'Tunai',
                                    'credit_card' => 'Kartu Kredit',
                                    'e_wallet' => 'E-Wallet',
                                    'other' => 'Lainnya',
                                ];
                                $method = $payment->payment_method ?? 'other';
                                $icon = $methodIcons[$method] ?? 'ri-more-line';
                                $label = $methodLabels[$method] ?? ucfirst($method);
                            @endphp
                            <i class="{{ $icon }} me-2"></i>{{ $label }}
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $payment->payment_date ? $payment->payment_date->format('d M Y') : '-' }}</div>
                            <small class="text-secondary-light">{{ $payment->payment_date ? $payment->payment_date->format('H:i') : '' }}</small>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $statusConfig = [
                                    'pending' => ['class' => 'badge-warning', 'text' => 'Pending'],
                                    'verified' => ['class' => 'badge-success', 'text' => 'Terverifikasi'],
                                    'rejected' => ['class' => 'badge-danger', 'text' => 'Ditolak'],
                                ];
                                $status = $payment->status ?? 'pending';
                                $config = $statusConfig[$status] ?? ['class' => 'badge-secondary', 'text' => 'Unknown'];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}">{{ $config['text'] }}</span>
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group">
                                <button type="button"
                                        class="btn btn-outline-primary"
                                        onclick="showPaymentDetail({{ $payment->id }})"
                                        title="Lihat Detail">
                                    <i class="ri-eye-line"></i>
                                </button>
                                @if($payment->status === 'pending')
                                <button type="button"
                                        class="btn btn-outline-success"
                                        onclick="verifyPayment({{ $payment->id }})"
                                        title="Verifikasi">
                                    <i class="ri-checkbox-circle-line"></i>
                                </button>
                                <button type="button"
                                        class="btn btn-outline-danger"
                                        onclick="rejectPayment({{ $payment->id }})"
                                        title="Tolak">
                                    <i class="ri-close-circle-line"></i>
                                </button>
                                @endif
                                @if($payment->payment_proof)
                                <a href="{{ Storage::url($payment->payment_proof) }}"
                                   class="btn btn-outline-info"
                                   target="_blank"
                                   title="Lihat Bukti">
                                    <i class="ri-file-text-line"></i>
                                </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center" style="padding: 2rem;">
                            <i class="ri-wallet-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="mt-2 mb-0 text-secondary-light">Belum ada pembayaran</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Payment Detail Modal -->
    <div class="modal fade" id="paymentDetailModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="paymentDetailContent">
                    <div class="text-center py-5">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Payment Modal -->
    <div class="modal fade" id="rejectPaymentModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tolak Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form id="rejectPaymentForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Alasan Penolakan <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="rejection_reason" rows="4" required placeholder="Jelaskan alasan penolakan pembayaran..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Tolak Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    @endpush

    @push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#paymentsTable').DataTable({
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
                order: [[6, 'desc']], // Sort by Date column
                pageLength: 10,
                columnDefs: [
                    { orderable: false, targets: [8] } // Disable sorting on Actions column
                ]
            });

            // Custom search input
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Status filter
            $('#statusFilter').on('change', function() {
                var filterValue = this.value;
                if (filterValue) {
                    table.column(7).search(filterValue).draw();
                } else {
                    table.column(7).search('').draw();
                }
            });

            // Method filter
            $('#methodFilter').on('change', function() {
                var filterValue = this.value;
                if (filterValue) {
                    table.column(5).search(filterValue).draw();
                } else {
                    table.column(5).search('').draw();
                }
            });
        });

        function showPaymentDetail(paymentId) {
            const modal = new bootstrap.Modal(document.getElementById('paymentDetailModal'));
            modal.show();

            // Load payment details via AJAX
            fetch(`/admin/finance/payments/${paymentId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('paymentDetailContent').innerHTML = `
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">No. Pembayaran</label>
                                <p class="mb-0" style="font-weight: 600;">${data.payment_number}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Status</label>
                                <p class="mb-0">
                                    <span class="badge-custom badge-${data.status === 'verified' ? 'success' : data.status === 'rejected' ? 'danger' : 'warning'}">
                                        ${data.status === 'verified' ? 'Terverifikasi' : data.status === 'rejected' ? 'Ditolak' : 'Pending'}
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Jumlah</label>
                                <p class="mb-0" style="font-weight: 600; font-size: 1.25rem; color: var(--success-main);">
                                    Rp ${new Intl.NumberFormat('id-ID').format(data.amount)}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Metode Pembayaran</label>
                                <p class="mb-0" style="font-weight: 500;">${data.payment_method}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Tanggal</label>
                                <p class="mb-0" style="font-weight: 500;">${data.payment_date}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Invoice</label>
                                <p class="mb-0" style="font-weight: 500;">${data.invoice_number || '-'}</p>
                            </div>
                            ${data.notes ? `
                            <div class="col-12">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Catatan</label>
                                <p class="mb-0">${data.notes}</p>
                            </div>
                            ` : ''}
                            ${data.rejection_reason ? `
                            <div class="col-12">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Alasan Penolakan</label>
                                <p class="mb-0 text-danger">${data.rejection_reason}</p>
                            </div>
                            ` : ''}
                            ${data.payment_proof ? `
                            <div class="col-12">
                                <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Bukti Pembayaran</label>
                                <div class="mt-2">
                                    <a href="${data.payment_proof_url}" target="_blank" class="btn btn-outline-primary">
                                        <i class="ri-eye-line me-2"></i>Lihat Bukti
                                    </a>
                                    <a href="${data.payment_proof_url}" download class="btn btn-outline-success">
                                        <i class="ri-download-line me-2"></i>Download
                                    </a>
                                </div>
                            </div>
                            ` : ''}
                        </div>
                    `;
                })
                .catch(error => {
                    document.getElementById('paymentDetailContent').innerHTML = `
                        <div class="alert alert-danger">
                            <i class="ri-error-warning-line me-2"></i>
                            Gagal memuat detail pembayaran
                        </div>
                    `;
                });
        }

        function verifyPayment(paymentId) {
            if (confirm('Apakah Anda yakin ingin memverifikasi pembayaran ini?')) {
                fetch(`/admin/finance/payments/${paymentId}/verify`, {
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Pembayaran berhasil diverifikasi!');
                        location.reload();
                    } else {
                        alert('Gagal memverifikasi pembayaran: ' + (data.message || 'Unknown error'));
                    }
                })
                .catch(error => {
                    alert('Terjadi kesalahan: ' + error.message);
                });
            }
        }

        function rejectPayment(paymentId) {
            const modal = new bootstrap.Modal(document.getElementById('rejectPaymentModal'));
            const form = document.getElementById('rejectPaymentForm');
            form.action = `/admin/finance/payments/${paymentId}/reject`;
            modal.show();
        }
    </script>
    @endpush
</x-layouts.admin.app>
