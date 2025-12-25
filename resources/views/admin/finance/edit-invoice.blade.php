<x-layouts.admin.app>
    <x-slot name="title">Edit Invoice #{{ $invoice->invoice_number }}</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Edit Invoice</h2>
            <p class="text-secondary-light mb-0">{{ $invoice->invoice_number }}</p>
        </div>
        <a href="{{ route('admin.finance.invoices.show', $invoice) }}" class="btn btn-outline-primary">
            <i class="ri-arrow-left-line me-2"></i>
            Kembali
        </a>
    </div>

    @if($invoice->status !== 'draft')
    <div class="alert alert-warning">
        <i class="ri-alert-line me-2"></i>
        Hanya invoice dengan status <strong>draft</strong> yang dapat diedit.
    </div>
    @else
    <!-- Edit Invoice Form -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Form Edit Invoice</h5>
        </div>
        <div class="card-body" style="padding: 1.5rem;">
            <form method="POST" action="{{ route('admin.finance.invoices.update', $invoice) }}">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <!-- Invoice Date -->
                    <div class="col-12 col-md-6">
                        <label for="invoice_date" class="form-label">Tanggal Invoice <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('invoice_date') is-invalid @enderror" id="invoice_date" name="invoice_date" value="{{ old('invoice_date', $invoice->invoice_date->format('Y-m-d')) }}" required>
                        @error('invoice_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Due Date -->
                    <div class="col-12 col-md-6">
                        <label for="due_date" class="form-label">Tanggal Jatuh Tempo <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('due_date') is-invalid @enderror" id="due_date" name="due_date" value="{{ old('due_date', $invoice->due_date->format('Y-m-d')) }}" required>
                        @error('due_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Subtotal -->
                    <div class="col-12 col-md-4">
                        <label for="subtotal" class="form-label">Subtotal <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" step="0.01" class="form-control @error('subtotal') is-invalid @enderror" id="subtotal" name="subtotal" value="{{ old('subtotal', $invoice->subtotal) }}" required>
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
                            <input type="number" step="0.01" class="form-control @error('tax_amount') is-invalid @enderror" id="tax_amount" name="tax_amount" value="{{ old('tax_amount', $invoice->tax_amount) }}">
                        </div>
                        @error('tax_amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Discount Amount -->
                    <div class="col-12 col-md-4">
                        <label for="discount_amount" class="form-label">Diskon</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" step="0.01" class="form-control @error('discount_amount') is-invalid @enderror" id="discount_amount" name="discount_amount" value="{{ old('discount_amount', $invoice->discount_amount) }}">
                        </div>
                        @error('discount_amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Total (Auto-calculated) -->
                    <div class="col-12">
                        <div class="alert alert-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-weight: 600;">Total Invoice:</span>
                                <span style="font-size: 1.5rem; font-weight: 700;" id="total_display">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="col-12">
                        <label for="notes" class="form-label">Catatan</label>
                        <textarea class="form-control @error('notes') is-invalid @enderror" id="notes" name="notes" rows="3">{{ old('notes', $invoice->notes) }}</textarea>
                        @error('notes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.finance.invoices.show', $invoice) }}" class="btn btn-secondary">
                        <i class="ri-close-line me-2"></i>
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-2"></i>
                        Update Invoice
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif

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

        // Set minimum due date to invoice date
        document.getElementById('invoice_date').addEventListener('change', function() {
            document.getElementById('due_date').setAttribute('min', this.value);
        });
    </script>
    @endpush
</x-layouts.admin.app>
