<x-layouts.admin.app>
    <x-slot name="title">Pembayaran</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Riwayat Pembayaran</h2>
                    <p class="text-muted mt-1">Daftar transaksi pembayaran sertifikasi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <!-- Stats -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Total Terverifikasi</div>
                            </div>
                            <div class="h1 mb-0">Rp {{ number_format($stats['verified_amount'] ?? 0, 0, ',', '.') }}</div>
                            <div class="text-muted mt-1">{{ $stats['verified'] ?? 0 }} pembayaran</div>
                        </div>
                        <div class="card-footer">
                            <span class="avatar avatar-sm" style="background-color: var(--tblr-green-lt);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" /><path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" /></svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Pending Verifikasi</div>
                            </div>
                            <div class="h1 mb-0">Rp {{ number_format($stats['pending_amount'] ?? 0, 0, ',', '.') }}</div>
                            <div class="text-muted mt-1">{{ $stats['pending'] ?? 0 }} pembayaran</div>
                        </div>
                        <div class="card-footer">
                            <span class="avatar avatar-sm" style="background-color: var(--tblr-warning-lt);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-warning" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 7l0 5l3 3" /></svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Bulan Ini</div>
                            </div>
                            <div class="h1 mb-0">Rp {{ number_format($stats['this_month_amount'] ?? 0, 0, ',', '.') }}</div>
                            <div class="text-muted mt-1">Terverifikasi</div>
                        </div>
                        <div class="card-footer">
                            <span class="avatar avatar-sm" style="background-color: var(--tblr-cyan-lt);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-cyan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payments Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Semua Pembayaran</h3>
                    <div class="card-actions">
                        <form method="GET" action="{{ route('admin.finance.payments') }}">
                            <select name="status" class="form-select" style="width: auto;" onchange="this.form.submit()">
                                <option value="">Semua Status</option>
                                <option value="verified" {{ request('status') == 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Ditolak</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>No. Pembayaran</th>
                                <th>Invoice</th>
                                <th>Pelaku Usaha</th>
                                <th>Metode</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($payments as $payment)
                            @php
                                $statusBadge = match($payment->status) {
                                    'pending' => 'yellow',
                                    'verified' => 'green',
                                    'rejected' => 'red',
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
                                <td><strong>{{ $payment->payment_number }}</strong></td>
                                <td>
                                    <a href="{{ route('admin.finance.invoices.show', $payment->invoice) }}" class="text-reset">
                                        {{ $payment->invoice->invoice_number }}
                                    </a>
                                </td>
                                <td>{{ $payment->invoice->submission->company_name ?? '-' }}</td>
                                <td>{{ $methodLabel }}</td>
                                <td><strong>Rp {{ number_format($payment->amount, 0, ',', '.') }}</strong></td>
                                <td>{{ $payment->payment_date->format('d M Y') }}</td>
                                <td>
                                    <span class="badge bg-{{ $statusBadge }}-lt">{{ $statusLabel }}</span>
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('admin.finance.payments.show', $payment) }}"
                                           class="btn btn-ghost-primary btn-icon"
                                           title="Detail">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                        </a>
                                        @if($payment->status === 'pending')
                                        <form method="POST"
                                              action="{{ route('admin.finance.payments.verify', $payment) }}"
                                              style="display: inline;"
                                              onsubmit="return confirm('Verifikasi pembayaran ini?')">
                                            @csrf
                                            <button type="submit"
                                                    class="btn btn-ghost-success btn-icon"
                                                    title="Verifikasi">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                            </button>
                                        </form>
                                        <button type="button"
                                                class="btn btn-ghost-danger btn-icon"
                                                title="Tolak"
                                                onclick="showRejectModal({{ $payment->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                        </button>
                                        @elseif($payment->payment_proof_path)
                                        <a href="{{ asset('storage/' . $payment->payment_proof_path) }}"
                                           target="_blank"
                                           class="btn btn-ghost-cyan btn-icon"
                                           title="Bukti">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" /></svg>
                                        </div>
                                        <p class="empty-title">Tidak ada data pembayaran</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($payments->hasPages())
                <div class="card-footer d-flex align-items-center">
                    {{ $payments->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div class="modal modal-blur fade" id="rejectModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" id="rejectForm">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tolak Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label required">Alasan Penolakan</label>
                            <textarea name="verification_notes"
                                      class="form-control"
                                      rows="4"
                                      required
                                      placeholder="Jelaskan alasan penolakan pembayaran"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Tolak Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function showRejectModal(paymentId) {
            const modal = new bootstrap.Modal(document.getElementById('rejectModal'));
            const form = document.getElementById('rejectForm');
            form.action = '{{ route("admin.finance.payments.reject", ":id") }}'.replace(':id', paymentId);
            modal.show();
        }
    </script>
    @endpush
</x-layouts.admin.app>
