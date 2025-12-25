<x-layouts.admin.app>
    <x-slot name="title">Detail Invoice</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">
                Invoice {{ $invoice->invoice_number ?? 'N/A' }}
            </h2>
            <p class="text-secondary-light mb-0">Detail invoice dan riwayat pembayaran</p>
        </div>
        <div class="d-flex gap-2">
            @if($invoice->payment_status !== 'paid')
            <a href="{{ route('admin.finance.invoices.edit', $invoice->id) }}" class="btn btn-success">
                <i class="ri-edit-line me-2"></i>
                Edit
            </a>
            @endif
            <button onclick="window.print()" class="btn btn-outline-primary">
                <i class="ri-printer-line me-2"></i>
                Cetak
            </button>
            <button onclick="downloadPDF()" class="btn btn-outline-info">
                <i class="ri-download-line me-2"></i>
                Download PDF
            </button>
            <a href="{{ route('admin.finance.invoices.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <div class="row g-3">
        <!-- Main Content -->
        <div class="col-12 col-lg-8">
            <!-- Invoice Card -->
            <div class="card-custom mb-3" id="invoiceContent">
                <!-- Invoice Header -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div style="font-size: 2rem; font-weight: 700; color: var(--primary-600); margin-bottom: 0.5rem;">
                            INVOICE
                        </div>
                        <div style="font-size: 1.25rem; font-weight: 600; color: var(--neutral-700);">
                            {{ $invoice->invoice_number }}
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div style="font-size: 1rem; color: var(--neutral-600);">
                            <div class="mb-2">
                                <strong>Tanggal Invoice:</strong><br>
                                {{ $invoice->invoice_date ? $invoice->invoice_date->format('d M Y') : '-' }}
                            </div>
                            <div class="mb-2">
                                <strong>Jatuh Tempo:</strong><br>
                                <span style="color: {{ $invoice->due_date && $invoice->due_date->isPast() ? 'var(--danger-main)' : 'var(--neutral-700)' }}; font-weight: 600;">
                                    {{ $invoice->due_date ? $invoice->due_date->format('d M Y') : '-' }}
                                </span>
                            </div>
                            @php
                                $statusConfig = [
                                    'draft' => ['class' => 'badge-secondary', 'text' => 'Draft'],
                                    'sent' => ['class' => 'badge-info', 'text' => 'Terkirim'],
                                    'partial' => ['class' => 'badge-warning', 'text' => 'Sebagian Bayar'],
                                    'paid' => ['class' => 'badge-success', 'text' => 'Lunas'],
                                    'overdue' => ['class' => 'badge-danger', 'text' => 'Jatuh Tempo'],
                                    'cancelled' => ['class' => 'badge-dark', 'text' => 'Dibatalkan'],
                                ];
                                $status = $invoice->payment_status ?? 'draft';
                                $config = $statusConfig[$status] ?? ['class' => 'badge-secondary', 'text' => 'Unknown'];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}" style="font-size: 1rem; padding: 0.5rem 1rem;">
                                {{ $config['text'] }}
                            </span>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <!-- Bill To / From -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="mb-3" style="font-weight: 600; color: var(--neutral-700);">Tagihan Untuk:</h6>
                        <div style="background-color: var(--neutral-50); padding: 1.5rem; border-radius: 8px;">
                            <div style="font-weight: 600; font-size: 1.125rem; margin-bottom: 0.5rem;">
                                {{ $invoice->user->name ?? '-' }}
                            </div>
                            @if($invoice->user && $invoice->user->company_name)
                            <div style="color: var(--neutral-600); margin-bottom: 0.5rem;">
                                {{ $invoice->user->company_name }}
                            </div>
                            @endif
                            <div style="color: var(--neutral-600); margin-bottom: 0.25rem;">
                                <i class="ri-mail-line me-2"></i>{{ $invoice->user->email ?? '-' }}
                            </div>
                            @if($invoice->user && $invoice->user->phone)
                            <div style="color: var(--neutral-600); margin-bottom: 0.25rem;">
                                <i class="ri-phone-line me-2"></i>{{ $invoice->user->phone }}
                            </div>
                            @endif
                            @if($invoice->user && $invoice->user->address)
                            <div style="color: var(--neutral-600); margin-top: 0.5rem;">
                                <i class="ri-map-pin-line me-2"></i>{{ $invoice->user->address }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-3" style="font-weight: 600; color: var(--neutral-700);">Dari:</h6>
                        <div style="background-color: var(--primary-50); padding: 1.5rem; border-radius: 8px;">
                            <div style="font-weight: 600; font-size: 1.125rem; margin-bottom: 0.5rem;">
                                LPH Sukabumi
                            </div>
                            <div style="color: var(--neutral-600); margin-bottom: 0.5rem;">
                                Lembaga Pemeriksa Halal
                            </div>
                            <div style="color: var(--neutral-600); margin-bottom: 0.25rem;">
                                <i class="ri-mail-line me-2"></i>info@lphsukabumi.id
                            </div>
                            <div style="color: var(--neutral-600); margin-bottom: 0.25rem;">
                                <i class="ri-phone-line me-2"></i>+62 xxx xxxx xxxx
                            </div>
                            <div style="color: var(--neutral-600); margin-top: 0.5rem;">
                                <i class="ri-map-pin-line me-2"></i>Sukabumi, Jawa Barat
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Line Items -->
                <div class="mb-4">
                    <h6 class="mb-3" style="font-weight: 600; color: var(--neutral-700);">Rincian Biaya:</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color: var(--neutral-100);">
                                <tr>
                                    <th style="padding: 1rem; font-weight: 600; width: 60px;">No</th>
                                    <th style="padding: 1rem; font-weight: 600;">Deskripsi</th>
                                    <th style="padding: 1rem; font-weight: 600; text-align: center; width: 100px;">Qty</th>
                                    <th style="padding: 1rem; font-weight: 600; text-align: right; width: 180px;">Harga Satuan</th>
                                    <th style="padding: 1rem; font-weight: 600; text-align: right; width: 180px;">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($invoice->items ?? [] as $index => $item)
                                <tr>
                                    <td style="padding: 1rem;">{{ $index + 1 }}</td>
                                    <td style="padding: 1rem;">
                                        <div style="font-weight: 500;">{{ $item->description }}</div>
                                        @if($item->notes)
                                        <small class="text-secondary-light">{{ $item->notes }}</small>
                                        @endif
                                    </td>
                                    <td style="padding: 1rem; text-align: center;">{{ $item->quantity ?? 1 }}</td>
                                    <td style="padding: 1rem; text-align: right;">Rp {{ number_format($item->unit_price ?? 0, 0, ',', '.') }}</td>
                                    <td style="padding: 1rem; text-align: right; font-weight: 600;">
                                        Rp {{ number_format(($item->quantity ?? 1) * ($item->unit_price ?? 0), 0, ',', '.') }}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center" style="padding: 2rem;">
                                        <span class="text-secondary-light">Tidak ada item</span>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Totals -->
                <div class="row">
                    <div class="col-md-6">
                        @if($invoice->notes)
                        <div>
                            <h6 style="font-weight: 600; color: var(--neutral-700);">Catatan:</h6>
                            <p style="color: var(--neutral-600);">{{ $invoice->notes }}</p>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div style="background-color: var(--neutral-50); padding: 1.5rem; border-radius: 8px;">
                            <div class="d-flex justify-content-between mb-2">
                                <span style="color: var(--neutral-600);">Subtotal:</span>
                                <span style="font-weight: 500;">Rp {{ number_format($invoice->subtotal ?? 0, 0, ',', '.') }}</span>
                            </div>
                            @if($invoice->tax_amount > 0)
                            <div class="d-flex justify-content-between mb-2">
                                <span style="color: var(--neutral-600);">Pajak ({{ $invoice->tax_percentage ?? 0 }}%):</span>
                                <span style="font-weight: 500;">Rp {{ number_format($invoice->tax_amount ?? 0, 0, ',', '.') }}</span>
                            </div>
                            @endif
                            @if($invoice->discount_amount > 0)
                            <div class="d-flex justify-content-between mb-2">
                                <span style="color: var(--neutral-600);">Diskon:</span>
                                <span style="font-weight: 500; color: var(--success-main);">
                                    - Rp {{ number_format($invoice->discount_amount ?? 0, 0, ',', '.') }}
                                </span>
                            </div>
                            @endif
                            <hr>
                            <div class="d-flex justify-content-between mb-3">
                                <span style="font-weight: 700; font-size: 1.125rem;">Total:</span>
                                <span style="font-weight: 700; font-size: 1.25rem; color: var(--primary-600);">
                                    Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}
                                </span>
                            </div>
                            @if($invoice->paid_amount > 0)
                            <div class="d-flex justify-content-between mb-2">
                                <span style="color: var(--success-main); font-weight: 600;">Terbayar:</span>
                                <span style="color: var(--success-main); font-weight: 600;">
                                    Rp {{ number_format($invoice->paid_amount ?? 0, 0, ',', '.') }}
                                </span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span style="font-weight: 700; color: var(--danger-main);">Sisa:</span>
                                <span style="font-weight: 700; font-size: 1.125rem; color: var(--danger-main);">
                                    Rp {{ number_format(($invoice->total_amount ?? 0) - ($invoice->paid_amount ?? 0), 0, ',', '.') }}
                                </span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                @if($invoice->terms)
                <hr class="my-4">
                <div>
                    <h6 style="font-weight: 600; color: var(--neutral-700);">Syarat dan Ketentuan:</h6>
                    <p style="color: var(--neutral-600); font-size: 0.875rem;">{{ $invoice->terms }}</p>
                </div>
                @endif
            </div>

            <!-- Payment History -->
            @if($invoice->payments && $invoice->payments->count() > 0)
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600; color: var(--neutral-800);">
                    <i class="ri-wallet-line me-2"></i>Riwayat Pembayaran
                </h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead style="background-color: var(--neutral-50);">
                            <tr>
                                <th style="padding: 1rem;">No. Pembayaran</th>
                                <th style="padding: 1rem;">Tanggal</th>
                                <th style="padding: 1rem;">Jumlah</th>
                                <th style="padding: 1rem;">Metode</th>
                                <th style="padding: 1rem;">Status</th>
                                <th style="padding: 1rem;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoice->payments as $payment)
                            <tr>
                                <td style="padding: 1rem;">
                                    <div style="font-weight: 600;">{{ $payment->payment_number }}</div>
                                </td>
                                <td style="padding: 1rem;">{{ $payment->payment_date ? $payment->payment_date->format('d M Y H:i') : '-' }}</td>
                                <td style="padding: 1rem;">
                                    <div style="font-weight: 600; color: var(--success-main);">
                                        Rp {{ number_format($payment->amount ?? 0, 0, ',', '.') }}
                                    </div>
                                </td>
                                <td style="padding: 1rem;">{{ $payment->payment_method ?? '-' }}</td>
                                <td style="padding: 1rem;">
                                    @php
                                        $paymentStatusConfig = [
                                            'pending' => ['class' => 'badge-warning', 'text' => 'Pending'],
                                            'verified' => ['class' => 'badge-success', 'text' => 'Terverifikasi'],
                                            'rejected' => ['class' => 'badge-danger', 'text' => 'Ditolak'],
                                        ];
                                        $payStatus = $payment->status ?? 'pending';
                                        $payConfig = $paymentStatusConfig[$payStatus] ?? ['class' => 'badge-secondary', 'text' => 'Unknown'];
                                    @endphp
                                    <span class="badge-custom {{ $payConfig['class'] }}">{{ $payConfig['text'] }}</span>
                                </td>
                                <td style="padding: 1rem;">
                                    <a href="{{ route('admin.finance.payments.show', $payment->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="ri-eye-line me-1"></i>Lihat
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="col-12 col-lg-4">
            <!-- Quick Actions -->
            <div class="card-custom mb-3">
                <h6 class="mb-3" style="font-weight: 600;">Aksi Cepat</h6>
                <div class="d-grid gap-2">
                    @if($invoice->payment_status !== 'paid')
                    <button class="btn btn-primary" onclick="showRecordPaymentModal()">
                        <i class="ri-money-dollar-circle-line me-2"></i>Catat Pembayaran
                    </button>
                    @endif
                    @if($invoice->payment_status === 'draft')
                    <button class="btn btn-info" onclick="sendInvoiceEmail()">
                        <i class="ri-mail-send-line me-2"></i>Kirim Email
                    </button>
                    @endif
                    <button class="btn btn-outline-primary" onclick="window.print()">
                        <i class="ri-printer-line me-2"></i>Cetak Invoice
                    </button>
                    <button class="btn btn-outline-info" onclick="downloadPDF()">
                        <i class="ri-download-line me-2"></i>Download PDF
                    </button>
                    @if($invoice->payment_status !== 'paid')
                    <a href="{{ route('admin.finance.invoices.edit', $invoice->id) }}" class="btn btn-outline-success">
                        <i class="ri-edit-line me-2"></i>Edit Invoice
                    </a>
                    @endif
                </div>
            </div>

            <!-- Invoice Information -->
            <div class="card-custom mb-3">
                <h6 class="mb-3" style="font-weight: 600;">Informasi Invoice</h6>
                <div class="mb-3">
                    <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Terkait Permohonan</label>
                    <p class="mb-0" style="font-weight: 500;">
                        @if($invoice->submission)
                            <a href="{{ route('admin.submissions.show', $invoice->submission_id) }}" style="color: var(--primary-600);">
                                {{ $invoice->submission->submission_number }}
                            </a>
                        @else
                            -
                        @endif
                    </p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Dibuat Tanggal</label>
                    <p class="mb-0" style="font-weight: 500;">
                        {{ $invoice->created_at ? $invoice->created_at->format('d M Y H:i') : '-' }}
                    </p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Dibuat Oleh</label>
                    <p class="mb-0" style="font-weight: 500;">
                        {{ $invoice->createdBy->name ?? 'System' }}
                    </p>
                </div>
                @if($invoice->updated_at && $invoice->updated_at != $invoice->created_at)
                <div class="mb-3">
                    <label class="form-label text-secondary-light" style="font-size: 0.875rem;">Terakhir Diupdate</label>
                    <p class="mb-0" style="font-weight: 500;">
                        {{ $invoice->updated_at->format('d M Y H:i') }}
                    </p>
                </div>
                @endif
            </div>

            <!-- Payment Summary -->
            <div class="card-custom">
                <h6 class="mb-3" style="font-weight: 600;">Ringkasan Pembayaran</h6>
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary-light">Total Invoice:</span>
                        <span style="font-weight: 600;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary-light">Terbayar:</span>
                        <span style="font-weight: 600; color: var(--success-main);">
                            Rp {{ number_format($invoice->paid_amount ?? 0, 0, ',', '.') }}
                        </span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary-light">Sisa:</span>
                        <span style="font-weight: 600; color: var(--danger-main);">
                            Rp {{ number_format(($invoice->total_amount ?? 0) - ($invoice->paid_amount ?? 0), 0, ',', '.') }}
                        </span>
                    </div>
                </div>
                @php
                    $paymentPercentage = $invoice->total_amount > 0
                        ? ($invoice->paid_amount / $invoice->total_amount) * 100
                        : 0;
                @endphp
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $paymentPercentage }}%"></div>
                </div>
                <small class="text-secondary-light">{{ number_format($paymentPercentage, 1) }}% Terbayar</small>
            </div>
        </div>
    </div>

    <!-- Record Payment Modal -->
    <div class="modal fade" id="recordPaymentModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Catat Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.finance.payments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="invoice_id" value="{{ $invoice->id }}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Jumlah Pembayaran <span class="text-danger">*</span></label>
                            <input type="number"
                                   class="form-control"
                                   name="amount"
                                   placeholder="Masukkan jumlah"
                                   min="0"
                                   max="{{ ($invoice->total_amount ?? 0) - ($invoice->paid_amount ?? 0) }}"
                                   required>
                            <small class="text-secondary-light">
                                Sisa: Rp {{ number_format(($invoice->total_amount ?? 0) - ($invoice->paid_amount ?? 0), 0, ',', '.') }}
                            </small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembayaran <span class="text-danger">*</span></label>
                            <input type="datetime-local" class="form-control" name="payment_date" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran <span class="text-danger">*</span></label>
                            <select class="form-select" name="payment_method" required>
                                <option value="">Pilih Metode</option>
                                <option value="transfer">Transfer Bank</option>
                                <option value="cash">Tunai</option>
                                <option value="credit_card">Kartu Kredit</option>
                                <option value="e_wallet">E-Wallet</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bukti Pembayaran</label>
                            <input type="file" class="form-control" name="payment_proof" accept="image/*,application/pdf">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Catatan</label>
                            <textarea class="form-control" name="notes" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        @media print {
            .btn, .card-custom h5, nav, .sidebar {
                display: none !important;
            }
            #invoiceContent {
                box-shadow: none !important;
                border: none !important;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        function showRecordPaymentModal() {
            const modal = new bootstrap.Modal(document.getElementById('recordPaymentModal'));
            modal.show();
        }

        function sendInvoiceEmail() {
            if (confirm('Apakah Anda yakin ingin mengirim invoice ini via email ke pelanggan?')) {
                fetch('{{ route("admin.finance.invoices.send", $invoice->id) }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Invoice berhasil dikirim via email!');
                        location.reload();
                    } else {
                        alert('Gagal mengirim invoice: ' + (data.message || 'Unknown error'));
                    }
                })
                .catch(error => {
                    alert('Terjadi kesalahan: ' + error.message);
                });
            }
        }

        function downloadPDF() {
            window.location.href = '{{ route("admin.finance.invoices.pdf", $invoice->id) }}';
        }
    </script>
    @endpush
</x-layouts.admin.app>
