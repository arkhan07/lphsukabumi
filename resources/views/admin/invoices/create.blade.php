@extends('layouts.admin')

@section('title', 'Buat Invoice Baru')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    <a href="{{ route('admin.invoices.index') }}" class="text-reset">Invoice</a>
                </div>
                <h2 class="page-title">Buat Invoice Baru</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.invoices.store') }}">
            @csrf
            <div class="row row-cards">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Invoice</h3>
                        </div>
                        <div class="card-body">
                            <!-- Submission Selection -->
                            <div class="mb-3">
                                <label class="form-label required">Permohonan</label>
                                <select name="submission_id" id="submissionSelect" class="form-select @error('submission_id') is-invalid @enderror" required>
                                    <option value="">Pilih permohonan...</option>
                                    @foreach($submissions as $sub)
                                        <option value="{{ $sub->id }}"
                                            data-user="{{ $sub->user->name }}"
                                            data-company="{{ $sub->company_name }}"
                                            data-address="{{ $sub->company_address }}"
                                            data-scale="{{ $sub->business_scale }}"
                                            {{ old('submission_id', $submission->id ?? '') == $sub->id ? 'selected' : '' }}>
                                            {{ $sub->submission_number }} - {{ $sub->user->name }} - {{ $sub->company_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('submission_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Invoice Type -->
                            <div class="mb-3">
                                <label class="form-label required">Tipe Invoice</label>
                                <select name="invoice_type" class="form-select @error('invoice_type') is-invalid @enderror" required>
                                    <option value="full_payment" {{ old('invoice_type') == 'full_payment' ? 'selected' : '' }}>Pembayaran Penuh</option>
                                    <option value="down_payment" {{ old('invoice_type') == 'down_payment' ? 'selected' : '' }}>Uang Muka (DP)</option>
                                    <option value="remaining_payment" {{ old('invoice_type') == 'remaining_payment' ? 'selected' : '' }}>Pembayaran Sisa</option>
                                </select>
                                @error('invoice_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Invoice Title -->
                            <div class="mb-3">
                                <label class="form-label required">Judul Invoice</label>
                                <input type="text" name="invoice_title" class="form-control @error('invoice_title') is-invalid @enderror"
                                    value="{{ old('invoice_title', 'Surat Penawaran Sertifikasi Halal') }}" required>
                                @error('invoice_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Date Fields -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required">Tanggal Invoice</label>
                                    <input type="date" name="invoice_date" class="form-control @error('invoice_date') is-invalid @enderror"
                                        value="{{ old('invoice_date', date('Y-m-d')) }}" required>
                                    @error('invoice_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required">Jangka Waktu Pembayaran</label>
                                    <select name="payment_term" id="paymentTerm" class="form-select @error('payment_term') is-invalid @enderror" required>
                                        <option value="immediate">Segera</option>
                                        <option value="net_7" {{ old('payment_term') == 'net_7' ? 'selected' : '' }}>7 Hari</option>
                                        <option value="net_14" {{ old('payment_term', 'net_14') == 'net_14' ? 'selected' : '' }}>14 Hari</option>
                                        <option value="net_30" {{ old('payment_term') == 'net_30' ? 'selected' : '' }}>30 Hari</option>
                                        <option value="custom" {{ old('payment_term') == 'custom' ? 'selected' : '' }}>Custom</option>
                                    </select>
                                    @error('payment_term')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div id="customDaysField" class="mb-3" style="display: none;">
                                <label class="form-label">Jumlah Hari (Custom)</label>
                                <input type="number" name="payment_days" class="form-control" min="1" value="{{ old('payment_days') }}">
                            </div>

                            <!-- Pricing -->
                            <div class="mb-3">
                                <label class="form-label required">Subtotal</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" name="subtotal" id="subtotal" class="form-control @error('subtotal') is-invalid @enderror"
                                        value="{{ old('subtotal', 0) }}" step="0.01" required>
                                </div>
                                @error('subtotal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pajak (%)</label>
                                    <input type="number" name="tax_percentage" id="taxPercentage" class="form-control"
                                        value="{{ old('tax_percentage', 0) }}" min="0" max="100" step="0.01">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Diskon (%)</label>
                                    <input type="number" name="discount_percentage" id="discountPercentage" class="form-control"
                                        value="{{ old('discount_percentage', 0) }}" min="0" max="100" step="0.01">
                                </div>
                            </div>

                            <div class="alert alert-info">
                                <div class="row">
                                    <div class="col">Total Invoice:</div>
                                    <div class="col-auto"><strong id="totalAmount">Rp 0</strong></div>
                                </div>
                            </div>

                            <!-- Notes -->
                            <div class="mb-3">
                                <label class="form-label">Catatan</label>
                                <textarea name="notes" class="form-control" rows="4">{{ old('notes') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Bank Account Info -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Rekening Pembayaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Bank</label>
                                <input type="text" name="bank_name" class="form-control" value="{{ old('bank_name', 'BCA') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Rekening</label>
                                <input type="text" name="bank_account_number" class="form-control" value="{{ old('bank_account_number') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Atas Nama</label>
                                <input type="text" name="bank_account_name" class="form-control" value="{{ old('bank_account_name', 'LPH Doa Bangsa') }}">
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-check icon me-2"></i>
                                    Buat Invoice
                                </button>
                                <a href="{{ route('admin.invoices.index') }}" class="btn">
                                    Batal
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Payment term custom field toggle
    const paymentTerm = document.getElementById('paymentTerm');
    const customDaysField = document.getElementById('customDaysField');

    paymentTerm.addEventListener('change', function() {
        if (this.value === 'custom') {
            customDaysField.style.display = 'block';
        } else {
            customDaysField.style.display = 'none';
        }
    });

    // Calculate total amount
    const subtotalInput = document.getElementById('subtotal');
    const taxInput = document.getElementById('taxPercentage');
    const discountInput = document.getElementById('discountPercentage');
    const totalDisplay = document.getElementById('totalAmount');

    function calculateTotal() {
        const subtotal = parseFloat(subtotalInput.value) || 0;
        const taxPercent = parseFloat(taxInput.value) || 0;
        const discountPercent = parseFloat(discountInput.value) || 0;

        const taxAmount = subtotal * (taxPercent / 100);
        const discountAmount = subtotal * (discountPercent / 100);
        const total = subtotal + taxAmount - discountAmount;

        totalDisplay.textContent = 'Rp ' + total.toLocaleString('id-ID', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        });
    }

    subtotalInput.addEventListener('input', calculateTotal);
    taxInput.addEventListener('input', calculateTotal);
    discountInput.addEventListener('input', calculateTotal);

    // Initial calculation
    calculateTotal();

    // Trigger custom field check on load
    if (paymentTerm.value === 'custom') {
        customDaysField.style.display = 'block';
    }
});
</script>
@endpush
@endsection
