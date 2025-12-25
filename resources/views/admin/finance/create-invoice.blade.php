<x-layouts.admin.app>
    <x-slot name="title">Buat Invoice Baru</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Buat Invoice Baru</h2>
            <p class="text-secondary-light mb-0">Buat invoice untuk permohonan sertifikasi halal</p>
        </div>
        <a href="{{ route('admin.finance.invoices') }}" class="btn btn-outline-primary">
            <i class="ri-arrow-left-line me-2"></i>
            Kembali ke Daftar Invoice
        </a>
    </div>

    <!-- Create Invoice Form -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Form Invoice Baru</h5>
        </div>
        <div class="card-body" style="padding: 1.5rem;">
            <form method="POST" action="{{ route('admin.finance.invoices.store') }}">
                @csrf

                <div class="row g-3">
                    <!-- Submission Selection -->
                    <div class="col-12">
                        <label for="submission_id" class="form-label">Permohonan <span class="text-danger">*</span></label>
                        <select class="form-select @error('submission_id') is-invalid @enderror" id="submission_id" name="submission_id" required>
                            <option value="">Pilih permohonan...</option>
                            @foreach($submissions as $submission)
                                <option value="{{ $submission->id }}" {{ old('submission_id') == $submission->id ? 'selected' : '' }}>
                                    {{ $submission->submission_number }} - {{ $submission->company_name ?? $submission->user->name }}
                                </option>
                            @endforeach
                        </select>
                        <small class="text-secondary-light">Pilih permohonan yang sudah disetujui/selesai dan belum memiliki invoice</small>
                        @error('submission_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Invoice Date -->
                    <div class="col-12 col-md-6">
                        <label for="invoice_date" class="form-label">Tanggal Invoice <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('invoice_date') is-invalid @enderror" id="invoice_date" name="invoice_date" value="{{ old('invoice_date', date('Y-m-d')) }}" required>
                        @error('invoice_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Due Date -->
                    <div class="col-12 col-md-6">
                        <label for="due_date" class="form-label">Tanggal Jatuh Tempo <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('due_date') is-invalid @enderror" id="due_date" name="due_date" value="{{ old('due_date', date('Y-m-d', strtotime('+14 days'))) }}" required>
                        @error('due_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Subtotal -->
                    <div class="col-12 col-md-4">
                        <label for="subtotal" class="form-label">Subtotal <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" step="0.01" class="form-control @error('subtotal') is-invalid @enderror" id="subtotal" name="subtotal" value="{{ old('subtotal') }}" required>
                        </div>
                        @error('subtotal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tax Amount -->
                    <div class="col-12 col-md-4">
                        <label for="tax_amount" class="form-label">Pajak (PPN)</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" step="0.01" class="form-control @error('tax_amount') is-invalid @enderror" id="tax_amount" name="tax_amount" value="{{ old('tax_amount', 0) }}">
                        </div>
                        <small class="text-secondary-light">Kosongkan atau isi 0 jika tidak ada pajak</small>
                        @error('tax_amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Discount Amount -->
                    <div class="col-12 col-md-4">
                        <label for="discount_amount" class="form-label">Diskon</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" step="0.01" class="form-control @error('discount_amount') is-invalid @enderror" id="discount_amount" name="discount_amount" value="{{ old('discount_amount', 0) }}">
                        </div>
                        <small class="text-secondary-light">Kosongkan atau isi 0 jika tidak ada diskon</small>
                        @error('discount_amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Total (Auto-calculated) -->
                    <div class="col-12">
                        <div class="alert alert-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-weight: 600;">Total Invoice:</span>
                                <span style="font-size: 1.5rem; font-weight: 700;" id="total_display">Rp 0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="col-12">
                        <label for="notes" class="form-label">Catatan</label>
                        <textarea class="form-control @error('notes') is-invalid @enderror" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
                        <small class="text-secondary-light">Catatan tambahan untuk invoice (opsional)</small>
                        @error('notes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.finance.invoices') }}" class="btn btn-secondary">
                        <i class="ri-close-line me-2"></i>
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-2"></i>
                        Simpan Invoice
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        // Auto-calculate total
        function calculateTotal() {
            const subtotal = parseFloat(document.getElementById('subtotal').value) || 0;
            const taxAmount = parseFloat(document.getElementById('tax_amount').value) || 0;
            const discountAmount = parseFloat(document.getElementById('discount_amount').value) || 0;

            const total = subtotal + taxAmount - discountAmount;

            document.getElementById('total_display').textContent = 'Rp ' + total.toLocaleString('id-ID', {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            });
        }

        // Add event listeners
        document.getElementById('subtotal').addEventListener('input', calculateTotal);
        document.getElementById('tax_amount').addEventListener('input', calculateTotal);
        document.getElementById('discount_amount').addEventListener('input', calculateTotal);

        // Calculate on page load
        calculateTotal();

        // Auto-calculate tax (11% PPN)
        document.getElementById('subtotal').addEventListener('blur', function() {
            const subtotal = parseFloat(this.value) || 0;
            const currentTax = parseFloat(document.getElementById('tax_amount').value) || 0;

            // Only auto-fill if tax is 0
            if (currentTax === 0 && subtotal > 0) {
                const tax = subtotal * 0.11; // 11% PPN
                document.getElementById('tax_amount').value = tax.toFixed(2);
                calculateTotal();
            }
        });

        // Set minimum due date to invoice date
        document.getElementById('invoice_date').addEventListener('change', function() {
            const invoiceDate = new Date(this.value);
            const dueDate = new Date(invoiceDate);
            dueDate.setDate(dueDate.getDate() + 14); // Default 14 days

            document.getElementById('due_date').value = dueDate.toISOString().split('T')[0];
            document.getElementById('due_date').setAttribute('min', this.value);
        });
    </script>
    @endpush
</x-layouts.admin.app>
