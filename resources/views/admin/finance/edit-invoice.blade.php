<x-layouts.admin.app>
    <x-slot name="title">Edit Invoice #{{ $invoice->invoice_number }}</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Edit Invoice</h2>
                    <p class="text-muted mt-1">{{ $invoice->invoice_number }}</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.finance.invoices.show', $invoice) }}" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            @if($invoice->status !== 'draft')
            <div class="alert alert-warning alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                    </div>
                    <div>Hanya invoice dengan status <strong>draft</strong> yang dapat diedit.</div>
                </div>
            </div>
            @else
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Invoice</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.finance.invoices.update', $invoice) }}">
                        @csrf
                        @method('PUT')

                        <div class="row g-3">
                            <!-- Invoice Date -->
                            <div class="col-md-6">
                                <label for="invoice_date" class="form-label required">Tanggal Invoice</label>
                                <input type="date" class="form-control @error('invoice_date') is-invalid @enderror" id="invoice_date" name="invoice_date" value="{{ old('invoice_date', $invoice->invoice_date->format('Y-m-d')) }}" required>
                                @error('invoice_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Due Date -->
                            <div class="col-md-6">
                                <label for="due_date" class="form-label required">Tanggal Jatuh Tempo</label>
                                <input type="date" class="form-control @error('due_date') is-invalid @enderror" id="due_date" name="due_date" value="{{ old('due_date', $invoice->due_date->format('Y-m-d')) }}" required>
                                @error('due_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Subtotal -->
                            <div class="col-md-4">
                                <label for="subtotal" class="form-label required">Subtotal</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" step="0.01" class="form-control @error('subtotal') is-invalid @enderror" id="subtotal" name="subtotal" value="{{ old('subtotal', $invoice->subtotal) }}" required>
                                </div>
                                @error('subtotal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tax Amount -->
                            <div class="col-md-4">
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
                            <div class="col-md-4">
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
                                <div class="alert alert-info mb-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>Total Invoice:</strong>
                                        <span class="h2 mb-0" id="total_display">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</span>
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
                            <a href="{{ route('admin.finance.invoices.show', $invoice) }}" class="btn">
                                Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                                Update Invoice
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endif
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
        document.getElementById('subtotal')?.addEventListener('input', calculateTotal);
        document.getElementById('tax_amount')?.addEventListener('input', calculateTotal);
        document.getElementById('discount_amount')?.addEventListener('input', calculateTotal);

        // Set minimum due date to invoice date
        document.getElementById('invoice_date')?.addEventListener('change', function() {
            document.getElementById('due_date').setAttribute('min', this.value);
        });
    </script>
    @endpush
</x-layouts.admin.app>
