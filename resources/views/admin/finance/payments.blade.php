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
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Terverifikasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">
                            Rp {{ number_format($stats['verified_amount'] ?? 0, 0, ',', '.') }}
                        </div>
                        <small class="text-secondary-light">{{ $stats['verified'] ?? 0 }} pembayaran</small>
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
                        <div style="font-size: 1.5rem; font-weight: 700;">
                            Rp {{ number_format($stats['pending_amount'] ?? 0, 0, ',', '.') }}
                        </div>
                        <small class="text-secondary-light">{{ $stats['pending'] ?? 0 }} pembayaran</small>
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
                        <div style="font-size: 1.5rem; font-weight: 700;">
                            Rp {{ number_format($stats['this_month_amount'] ?? 0, 0, ',', '.') }}
                        </div>
                        <small class="text-secondary-light">Terverifikasi</small>
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
                <form method="GET" action="{{ route('admin.finance.payments') }}" class="d-flex gap-2">
                    <select name="status" class="form-select" style="width: 150px;" onchange="this.form.submit()">
                        <option value="">Semua Status</option>
                        <option value="verified" {{ request('status') == 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                </form>
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
                    @forelse($payments as $payment)
                    @php
                        $statusBadge = match($payment->status) {
                            'pending' => 'warning',
                            'verified' => 'success',
                            'rejected' => 'danger',
                            default => 'secondary'
                        };

                        $statusLabel = match($payment->status) {
                            'pending' => 'Pending',
                            'verified' => 'Terverifikasi',
                            'rejected' => 'Ditolak',
                            default => $payment->status
                        };

                        $methodLabel = match($payment->payment_method) {
                            'bank_transfer' => 'Transfer Bank',
                            'cash' => 'Tunai',
                            'check' => 'Cek',
                            'credit_card' => 'Kartu Kredit',
                            'virtual_account' => 'Virtual Account',
                            'e_wallet' => 'E-Wallet',
                            'other' => 'Lainnya',
                            default => $payment->payment_method
                        };
                    @endphp
                    <tr>
                        <td style="padding: 1rem;"><strong>{{ $payment->payment_number }}</strong></td>
                        <td style="padding: 1rem;">
                            <a href="{{ route('admin.finance.invoices.show', $payment->invoice) }}" class="text-primary">
                                {{ $payment->invoice->invoice_number }}
                            </a>
                        </td>
                        <td style="padding: 1rem;">{{ $payment->invoice->submission->company_name ?? '-' }}</td>
                        <td style="padding: 1rem;">{{ $methodLabel }}</td>
                        <td style="padding: 1rem;"><strong>Rp {{ number_format($payment->amount, 0, ',', '.') }}</strong></td>
                        <td style="padding: 1rem;">{{ $payment->payment_date->format('d M Y') }}</td>
                        <td style="padding: 1rem;">
                            <span class="badge-custom badge-{{ $statusBadge }}">{{ $statusLabel }}</span>
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.finance.payments.show', $payment) }}"
                                   class="btn btn-sm btn-outline-primary"
                                   title="Detail">
                                    <i class="ri-eye-line"></i>
                                </a>
                                @if($payment->status === 'pending')
                                <form method="POST"
                                      action="{{ route('admin.finance.payments.verify', $payment) }}"
                                      style="display: inline;"
                                      onsubmit="return confirm('Verifikasi pembayaran ini?')">
                                    @csrf
                                    <button type="submit"
                                            class="btn btn-sm btn-outline-success"
                                            title="Verifikasi">
                                        <i class="ri-check-line"></i>
                                    </button>
                                </form>
                                <button type="button"
                                        class="btn btn-sm btn-outline-danger"
                                        title="Tolak"
                                        onclick="showRejectModal({{ $payment->id }})">
                                    <i class="ri-close-line"></i>
                                </button>
                                @elseif($payment->payment_proof_path)
                                <a href="{{ asset('storage/' . $payment->payment_proof_path) }}"
                                   target="_blank"
                                   class="btn btn-sm btn-outline-info"
                                   title="Bukti">
                                    <i class="ri-download-line"></i>
                                </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" style="padding: 2rem; text-align: center;">
                            <div class="text-secondary-light">
                                <i class="ri-inbox-line" style="font-size: 3rem;"></i>
                                <p class="mt-2 mb-0">Tidak ada data pembayaran</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($payments->hasPages())
        <div class="card-footer" style="padding: 1rem;">
            {{ $payments->links() }}
        </div>
        @endif
    </div>

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="rejectForm">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tolak Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Alasan Penolakan <span class="text-danger">*</span></label>
                            <textarea name="verification_notes"
                                      class="form-control"
                                      rows="4"
                                      required
                                      placeholder="Jelaskan alasan penolakan pembayaran"></textarea>
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

        function showRejectModal(paymentId) {
            const modal = new bootstrap.Modal(document.getElementById('rejectModal'));
            const form = document.getElementById('rejectForm');
            form.action = '{{ route("admin.finance.payments.reject", ":id") }}'.replace(':id', paymentId);
            modal.show();
        }
    </script>
    @endpush
</x-layouts.admin.app>
