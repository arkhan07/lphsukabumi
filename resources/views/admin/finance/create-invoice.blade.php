<x-layouts.admin.app>
    <x-slot name="title">Buat Invoice Baru</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Buat Invoice Baru</h2>
                    <p class="text-muted mt-1">Buat invoice untuk permohonan sertifikasi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.finance.invoices') }}" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Invoice Baru</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.finance.invoices.store') }}">
                        @csrf

                        <div class="row g-3">
                            <!-- Submission Selection -->
                            <div class="col-12">
                                <label for="submission_id" class="form-label required">Permohonan</label>
                                <select class="form-select @error('submission_id') is-invalid @enderror" id="submission_id" name="submission_id" required>
                                    <option value="">Pilih permohonan...</option>
                                    @foreach($submissions as $submission)
                                        <option value="{{ $submission->id }}" {{ old('submission_id') == $submission->id ? 'selected' : '' }}>
                                            {{ $submission->submission_number }} - {{ $submission->company_name ?? $submission->user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="form-hint">Pilih permohonan yang sudah disetujui/selesai dan belum memiliki invoice</small>
                                @error('submission_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Invoice Date -->
                            <div class="col-md-6">
                                <label for="invoice_date" class="form-label required">Tanggal Invoice</label>
                                <input type="date" class="form-control @error('invoice_date') is-invalid @enderror" id="invoice_date" name="invoice_date" value="{{ old('invoice_date', date('Y-m-d')) }}" required>
                                @error('invoice_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Due Date -->
                            <div class="col-md-6">
                                <label for="due_date" class="form-label required">Tanggal Jatuh Tempo</label>
                                <input type="date" class="form-control @error('due_date') is-invalid @enderror" id="due_date" name="due_date" value="{{ old('due_date', date('Y-m-d', strtotime('+14 days'))) }}" required>
                                @error('due_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Subtotal -->
                            <div class="col-md-4">
                                <label for="subtotal" class="form-label required">Subtotal</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" step="0.01" class="form-control @error('subtotal') is-invalid @enderror" id="subtotal" name="subtotal" value="{{ old('subtotal') }}" required>
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
                                    <input type="number" step="0.01" class="form-control @error('tax_amount') is-invalid @enderror" id="tax_amount" name="tax_amount" value="{{ old('tax_amount', 0) }}">
                                </div>
                                <small class="form-hint">Kosongkan atau isi 0 jika tidak ada pajak</small>
                                @error('tax_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Discount Amount -->
                            <div class="col-md-4">
                                <label for="discount_amount" class="form-label">Diskon</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" step="0.01" class="form-control @error('discount_amount') is-invalid @enderror" id="discount_amount" name="discount_amount" value="{{ old('discount_amount', 0) }}">
                                </div>
                                <small class="form-hint">Kosongkan atau isi 0 jika tidak ada diskon</small>
                                @error('discount_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Total (Auto-calculated) -->
                            <div class="col-12">
                                <div class="alert alert-info mb-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>Total Invoice:</strong>
                                        <span class="h2 mb-0" id="total_display">Rp 0</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Notes -->
                            <div class="col-12">
                                <label for="notes" class="form-label">Catatan</label>
                                <textarea class="form-control @error('notes') is-invalid @enderror" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
                                <small class="form-hint">Catatan tambahan untuk invoice (opsional)</small>
                                @error('notes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ route('admin.finance.invoices') }}" class="btn">
                                Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                                Simpan Invoice
                            </button>
                        </div>
                    </form>
                </div>
            </div>
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
