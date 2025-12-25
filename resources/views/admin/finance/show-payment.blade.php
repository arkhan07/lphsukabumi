<x-layouts.admin.app>
    <x-slot name="title">Detail Pembayaran</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Pembayaran</h2>
            <p class="text-secondary-light mb-0">Informasi lengkap pembayaran invoice</p>
        </div>
        <a href="{{ route('admin.finance.payments') }}" class="btn btn-outline-secondary">
            <i class="ri-arrow-left-line me-2"></i>
            Kembali
        </a>
    </div>

    <div class="row g-3">
        <!-- Payment Information -->
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Informasi Pembayaran</h5>
                    @php
                        $statusBadge = match($payment->status) {
                            'pending' => 'warning',
                            'verified' => 'success',
                            'rejected' => 'danger',
                            default => 'secondary'
                        };
                        $statusLabel = match($payment->status) {
                            'pending' => 'Menunggu Verifikasi',
                            'verified' => 'Terverifikasi',
                            'rejected' => 'Ditolak',
                            default => ucfirst($payment->status)
                        };
                    @endphp
                    <span class="badge-custom badge-{{ $statusBadge }}">{{ $statusLabel }}</span>
                </div>
                <div class="p-4">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light d-block mb-1">Nomor Pembayaran</label>
                            <div style="font-weight: 600;">{{ $payment->payment_number }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light d-block mb-1">Tanggal Pembayaran</label>
                            <div style="font-weight: 600;">{{ $payment->payment_date->format('d F Y') }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light d-block mb-1">Invoice</label>
                            <div>
                                <a href="{{ route('admin.finance.invoices.show', $payment->invoice) }}" class="text-primary">
                                    {{ $payment->invoice->invoice_number }}
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light d-block mb-1">Perusahaan</label>
                            <div style="font-weight: 600;">{{ $payment->invoice->submission->company_name }}</div>
                        </div>
                        <div class="col-12">
                            <label class="text-secondary-light d-block mb-1">Jumlah Pembayaran</label>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--success-main);">
                                Rp {{ number_format($payment->amount, 0, ',', '.') }}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light d-block mb-1">Metode Pembayaran</label>
                            @php
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
                            <div style="font-weight: 600;">{{ $methodLabel }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light d-block mb-1">Dibuat Oleh</label>
                            <div style="font-weight: 600;">{{ $payment->user->name }}</div>
                        </div>

                        @if($payment->bank_name || $payment->account_number || $payment->transfer_reference_number)
                        <div class="col-12">
                            <hr class="my-2">
                            <h6 style="font-weight: 600;">Detail Transfer</h6>
                        </div>
                        @endif

                        @if($payment->bank_name)
                        <div class="col-12 col-md-4">
                            <label class="text-secondary-light d-block mb-1">Bank</label>
                            <div style="font-weight: 600;">{{ $payment->bank_name }}</div>
                        </div>
                        @endif

                        @if($payment->account_number)
                        <div class="col-12 col-md-4">
                            <label class="text-secondary-light d-block mb-1">Nomor Rekening</label>
                            <div style="font-weight: 600;">{{ $payment->account_number }}</div>
                        </div>
                        @endif

                        @if($payment->account_holder_name)
                        <div class="col-12 col-md-4">
                            <label class="text-secondary-light d-block mb-1">Nama Pemegang Rekening</label>
                            <div style="font-weight: 600;">{{ $payment->account_holder_name }}</div>
                        </div>
                        @endif

                        @if($payment->transfer_reference_number)
                        <div class="col-12">
                            <label class="text-secondary-light d-block mb-1">Nomor Referensi Transfer</label>
                            <div style="font-weight: 600;">{{ $payment->transfer_reference_number }}</div>
                        </div>
                        @endif

                        @if($payment->notes)
                        <div class="col-12">
                            <hr class="my-2">
                            <label class="text-secondary-light d-block mb-1">Catatan</label>
                            <div>{{ $payment->notes }}</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Payment Proof -->
            @if($payment->payment_proof_path)
            <div class="card-custom mt-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Bukti Pembayaran</h5>
                </div>
                <div class="p-4 text-center">
                    <img src="{{ asset('storage/' . $payment->payment_proof_path) }}" 
                         alt="Bukti Pembayaran" 
                         class="img-fluid" 
                         style="max-height: 500px; border-radius: 8px;">
                </div>
            </div>
            @endif
        </div>

        <!-- Actions -->
        <div class="col-12 col-lg-4">
            @if($payment->status === 'pending')
            <div class="card-custom mb-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Verifikasi Pembayaran</h5>
                </div>
                <div class="p-3">
                    <form method="POST" action="{{ route('admin.finance.payments.verify', $payment) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="verification_notes" class="form-label">Catatan Verifikasi</label>
                            <textarea class="form-control" id="verification_notes" name="verification_notes" rows="3" placeholder="Opsional..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mb-2">
                            <i class="ri-check-line me-2"></i>
                            Verifikasi Pembayaran
                        </button>
                    </form>
                    <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#rejectModal">
                        <i class="ri-close-line me-2"></i>
                        Tolak Pembayaran
                    </button>
                </div>
            </div>
            @endif

            @if($payment->status === 'verified')
            <div class="card-custom mb-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Informasi Verifikasi</h5>
                </div>
                <div class="p-3">
                    <div class="mb-2">
                        <label class="text-secondary-light d-block mb-1">Diverifikasi Oleh</label>
                        <div style="font-weight: 600;">{{ $payment->verifiedBy->name ?? 'N/A' }}</div>
                    </div>
                    <div class="mb-2">
                        <label class="text-secondary-light d-block mb-1">Tanggal Verifikasi</label>
                        <div style="font-weight: 600;">{{ $payment->verified_at ? $payment->verified_at->format('d F Y H:i') : 'N/A' }}</div>
                    </div>
                    @if($payment->verification_notes)
                    <div>
                        <label class="text-secondary-light d-block mb-1">Catatan</label>
                        <div>{{ $payment->verification_notes }}</div>
                    </div>
                    @endif
                </div>
            </div>
            @endif

            @if($payment->status === 'rejected')
            <div class="card-custom mb-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Informasi Penolakan</h5>
                </div>
                <div class="p-3">
                    <div class="mb-2">
                        <label class="text-secondary-light d-block mb-1">Ditolak Oleh</label>
                        <div style="font-weight: 600;">{{ $payment->verifiedBy->name ?? 'N/A' }}</div>
                    </div>
                    <div class="mb-2">
                        <label class="text-secondary-light d-block mb-1">Tanggal Penolakan</label>
                        <div style="font-weight: 600;">{{ $payment->verified_at ? $payment->verified_at->format('d F Y H:i') : 'N/A' }}</div>
                    </div>
                    @if($payment->verification_notes)
                    <div>
                        <label class="text-secondary-light d-block mb-1">Alasan Penolakan</label>
                        <div class="alert alert-danger mb-0">{{ $payment->verification_notes }}</div>
                    </div>
                    @endif
                </div>
            </div>
            @endif

            <!-- Timeline -->
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Riwayat</h5>
                </div>
                <div class="p-3">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <div style="font-weight: 600;">Pembayaran Dibuat</div>
                                <div class="text-secondary-light">{{ $payment->created_at->format('d F Y H:i') }}</div>
                            </div>
                        </div>
                        @if($payment->verified_at)
                        <div class="timeline-item">
                            <div class="timeline-marker bg-{{ $payment->status === 'verified' ? 'success' : 'danger' }}"></div>
                            <div class="timeline-content">
                                <div style="font-weight: 600;">
                                    {{ $payment->status === 'verified' ? 'Pembayaran Diverifikasi' : 'Pembayaran Ditolak' }}
                                </div>
                                <div class="text-secondary-light">{{ $payment->verified_at->format('d F Y H:i') }}</div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.finance.payments.reject', $payment) }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tolak Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <i class="ri-alert-line me-2"></i>
                            Anda akan menolak pembayaran ini. Pastikan alasan penolakan jelas.
                        </div>
                        <div class="mb-3">
                            <label for="reject_notes" class="form-label">Alasan Penolakan <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="reject_notes" name="verification_notes" rows="4" required placeholder="Jelaskan alasan penolakan pembayaran..."></textarea>
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
    <style>
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        .timeline-item {
            position: relative;
            padding-bottom: 1.5rem;
        }
        .timeline-item:last-child {
            padding-bottom: 0;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -23px;
            top: 8px;
            width: 2px;
            height: calc(100% + 8px);
            background-color: var(--neutral-200);
        }
        .timeline-item:last-child::before {
            display: none;
        }
        .timeline-marker {
            position: absolute;
            left: -30px;
            top: 0;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            border: 2px solid white;
        }
        .timeline-content {
            padding-left: 10px;
        }
    </style>
    @endpush
</x-layouts.admin.app>
