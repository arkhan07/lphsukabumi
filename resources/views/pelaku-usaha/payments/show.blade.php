<x-layouts.admin.app>
    <x-slot name="title">Detail Pembayaran</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Detail Pembayaran</h2>
                </div>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        @if($payment->payment_proof_path)
                            <a href="{{ route('pelaku_usaha.payments.proof', $payment->id) }}" class="btn btn-success">
                                <i class="ti ti-download me-2"></i>Download Bukti
                            </a>
                        @endif
                        @if($payment->receipt_file_path)
                            <a href="{{ route('pelaku_usaha.payments.receipt', $payment->id) }}" class="btn btn-primary">
                                <i class="ti ti-receipt me-2"></i>Download Kwitansi
                            </a>
                        @endif
                        <a href="{{ route('pelaku_usaha.payments.index') }}" class="btn btn-outline-secondary">
                            <i class="ti ti-arrow-left me-2"></i>Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Status Alert -->
            @if($payment->status == 'verified')
                <div class="alert alert-success">
                    <i class="ti ti-circle-check me-2"></i>Pembayaran ini telah diverifikasi pada {{ $payment->verified_at->format('d F Y H:i') }}
                </div>
            @elseif($payment->status == 'rejected')
                <div class="alert alert-danger">
                    <i class="ti ti-alert-circle me-2"></i>Pembayaran ini ditolak. Silakan hubungi admin untuk informasi lebih lanjut.
                </div>
            @elseif($payment->status == 'pending')
                <div class="alert alert-warning">
                    <i class="ti ti-clock me-2"></i>Pembayaran ini sedang menunggu verifikasi dari admin
                </div>
            @endif

            <div class="row row-cards">
                <!-- Payment Details -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Pembayaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">No. Pembayaran</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $payment->payment_number }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Jumlah Pembayaran</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="h3 mb-0 text-primary">Rp {{ number_format($payment->amount, 0, ',', '.') }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Tanggal Pembayaran</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ $payment->payment_date->format('d F Y') }}</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Metode Pembayaran</label>
                                </div>
                                <div class="col-md-8">
                                    <div>{{ ucwords(str_replace('_', ' ', $payment->payment_method)) }}</div>
                                </div>
                            </div>
                            @if($payment->notes)
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold">Catatan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div>{{ $payment->notes }}</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Transfer Details -->
                    @if($payment->payment_method == 'bank_transfer')
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Detail Transfer</h3>
                            </div>
                            <div class="card-body">
                                @if($payment->bank_name)
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">Nama Bank</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div>{{ $payment->bank_name }}</div>
                                        </div>
                                    </div>
                                @endif
                                @if($payment->account_number)
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">No. Rekening</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div>{{ $payment->account_number }}</div>
                                        </div>
                                    </div>
                                @endif
                                @if($payment->account_holder_name)
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">Atas Nama</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div>{{ $payment->account_holder_name }}</div>
                                        </div>
                                    </div>
                                @endif
                                @if($payment->transfer_reference_number)
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">No. Referensi</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div>{{ $payment->transfer_reference_number }}</div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Verification Info -->
                    @if($payment->status != 'pending')
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Verifikasi</h3>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold">Status</label>
                                    </div>
                                    <div class="col-md-8">
                                        @if($payment->status == 'verified')
                                            <span class="badge bg-success">Terverifikasi</span>
                                        @elseif($payment->status == 'rejected')
                                            <span class="badge bg-danger">Ditolak</span>
                                        @elseif($payment->status == 'cancelled')
                                            <span class="badge bg-secondary">Dibatalkan</span>
                                        @endif
                                    </div>
                                </div>
                                @if($payment->verified_at)
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">Diverifikasi Pada</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div>{{ $payment->verified_at->format('d F Y H:i') }}</div>
                                        </div>
                                    </div>
                                @endif
                                @if($payment->verifiedBy)
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">Diverifikasi Oleh</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div>{{ $payment->verifiedBy->name }}</div>
                                        </div>
                                    </div>
                                @endif
                                @if($payment->verification_notes)
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">Catatan Verifikasi</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="alert alert-info mb-0">{{ $payment->verification_notes }}</div>
                                        </div>
                                    </div>
                                @endif
                                @if($payment->rejection_reason)
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label fw-bold">Alasan Penolakan</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="alert alert-danger mb-0">{{ $payment->rejection_reason }}</div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Invoice Info -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Invoice Terkait</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">No. Invoice</label>
                                <div class="fw-bold">{{ $payment->invoice->invoice_number }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Judul Invoice</label>
                                <div>{{ $payment->invoice->invoice_title }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total Invoice</label>
                                <div class="fw-bold">Rp {{ number_format($payment->invoice->total_amount, 0, ',', '.') }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sisa Tagihan</label>
                                <div class="fw-bold text-danger">Rp {{ number_format($payment->invoice->outstanding_amount, 0, ',', '.') }}</div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('pelaku_usaha.invoices.show', $payment->invoice->id) }}" class="btn btn-primary w-100">
                                    <i class="ti ti-eye me-2"></i>Lihat Invoice
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Submission Info -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Permohonan Terkait</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Nomor Permohonan</label>
                                <div class="fw-bold">{{ $payment->invoice->submission->submission_number }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Perusahaan</label>
                                <div>{{ $payment->invoice->submission->company_name }}</div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('pelaku_usaha.submissions.show', $payment->invoice->submission->id) }}" class="btn btn-outline-primary w-100">
                                    <i class="ti ti-eye me-2"></i>Lihat Permohonan
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Proof -->
                    @if($payment->payment_proof_path)
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Bukti Pembayaran</h3>
                            </div>
                            <div class="card-body text-center">
                                <i class="ti ti-file-text" style="font-size: 4rem; color: #cbd5e1;"></i>
                                <p class="mt-2">Bukti pembayaran telah terupload</p>
                                <a href="{{ route('pelaku_usaha.payments.proof', $payment->id) }}" class="btn btn-success w-100">
                                    <i class="ti ti-download me-2"></i>Download Bukti
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
