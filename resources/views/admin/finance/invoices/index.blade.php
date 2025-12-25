<x-layouts.admin.app>
    <x-slot name="title">Manajemen Invoice</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Invoice</h2>
            <p class="text-secondary-light mb-0">Kelola invoice dan tagihan sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.finance.invoices.create') }}" class="btn btn-primary">
                <i class="ri-file-add-line me-2"></i>
                Buat Invoice
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Invoice</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-file-list-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="card-custom" style="border-left: 4px solid var(--neutral-400);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Draft</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['draft'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon secondary" style="width: 50px; height: 50px;">
                        <i class="ri-draft-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Terkirim</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['sent'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-send-plane-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="card-custom" style="border-left: 4px solid var(--warning-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Sebagian Bayar</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['partial'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon warning" style="width: 50px; height: 50px;">
                        <i class="ri-percent-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Lunas</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['paid'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="card-custom" style="border-left: 4px solid var(--danger-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Jatuh Tempo</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['overdue'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon danger" style="width: 50px; height: 50px;">
                        <i class="ri-alarm-warning-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Invoice</h5>
            <div class="d-flex gap-2 flex-wrap">
                <div class="position-relative">
                    <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                    <input type="text" id="searchInput" class="form-control ps-5" placeholder="Cari invoice..." style="width: 250px;">
                </div>
                <select class="form-select" id="statusFilter" style="width: 180px;">
                    <option value="">Semua Status</option>
                    <option value="draft">Draft</option>
                    <option value="sent">Terkirim</option>
                    <option value="partial">Sebagian Bayar</option>
                    <option value="paid">Lunas</option>
                    <option value="overdue">Jatuh Tempo</option>
                    <option value="cancelled">Dibatalkan</option>
                </select>
                <input type="date" class="form-control" id="dateFrom" placeholder="Dari Tanggal" style="width: 160px;">
                <input type="date" class="form-control" id="dateTo" placeholder="Sampai Tanggal" style="width: 160px;">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="invoicesTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 60px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">No. Invoice</th>
                        <th style="padding: 1rem; font-weight: 600;">Pengguna/Perusahaan</th>
                        <th style="padding: 1rem; font-weight: 600;">Total</th>
                        <th style="padding: 1rem; font-weight: 600;">Terbayar</th>
                        <th style="padding: 1rem; font-weight: 600;">Sisa</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600;">Jatuh Tempo</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center; width: 200px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($invoices ?? [] as $index => $invoice)
                    <tr>
                        <td style="padding: 1rem;">{{ $index + 1 }}</td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 600; color: var(--primary-600);">{{ $invoice->invoice_number }}</div>
                            <small class="text-secondary-light">{{ $invoice->invoice_date ? $invoice->invoice_date->format('d M Y') : '-' }}</small>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $invoice->user->name ?? '-' }}</div>
                            <small class="text-secondary-light">{{ $invoice->user->company_name ?? $invoice->user->email ?? '-' }}</small>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 600;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</div>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500; color: var(--success-main);">Rp {{ number_format($invoice->paid_amount ?? 0, 0, ',', '.') }}</div>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $outstanding = ($invoice->total_amount ?? 0) - ($invoice->paid_amount ?? 0);
                            @endphp
                            <div style="font-weight: 500; color: {{ $outstanding > 0 ? 'var(--danger-main)' : 'var(--neutral-600)' }};">
                                Rp {{ number_format($outstanding, 0, ',', '.') }}
                            </div>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $statusConfig = [
                                    'draft' => ['class' => 'badge-secondary', 'text' => 'Draft'],
                                    'sent' => ['class' => 'badge-info', 'text' => 'Terkirim'],
                                    'partial' => ['class' => 'badge-warning', 'text' => 'Sebagian'],
                                    'paid' => ['class' => 'badge-success', 'text' => 'Lunas'],
                                    'overdue' => ['class' => 'badge-danger', 'text' => 'Jatuh Tempo'],
                                    'cancelled' => ['class' => 'badge-dark', 'text' => 'Batal'],
                                ];
                                $status = $invoice->payment_status ?? 'draft';
                                $config = $statusConfig[$status] ?? ['class' => 'badge-secondary', 'text' => 'Unknown'];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}">{{ $config['text'] }}</span>
                        </td>
                        <td style="padding: 1rem;">
                            @if($invoice->due_date)
                                <div style="font-weight: 500;">{{ $invoice->due_date->format('d M Y') }}</div>
                                @php
                                    $daysUntilDue = now()->diffInDays($invoice->due_date, false);
                                @endphp
                                @if($daysUntilDue < 0)
                                    <small class="text-danger">{{ abs($daysUntilDue) }} hari terlambat</small>
                                @elseif($daysUntilDue <= 7)
                                    <small class="text-warning">{{ $daysUntilDue }} hari lagi</small>
                                @endif
                            @else
                                <span class="text-secondary-light">-</span>
                            @endif
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.finance.invoices.show', $invoice->id) }}"
                                   class="btn btn-sm btn-outline-primary"
                                   title="Lihat">
                                    <i class="ri-eye-line"></i>
                                </a>
                                @if($invoice->payment_status !== 'paid')
                                <a href="{{ route('admin.finance.invoices.edit', $invoice->id) }}"
                                   class="btn btn-sm btn-outline-success"
                                   title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                @endif
                                @if($invoice->payment_status === 'draft')
                                <button type="button"
                                        class="btn btn-sm btn-outline-info"
                                        onclick="sendInvoice({{ $invoice->id }})"
                                        title="Kirim">
                                    <i class="ri-send-plane-line"></i>
                                </button>
                                @endif
                                <form action="{{ route('admin.finance.invoices.destroy', $invoice->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus invoice ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus"
                                            {{ $invoice->payment_status === 'paid' ? 'disabled' : '' }}>
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center" style="padding: 2rem;">
                            <i class="ri-file-list-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="mt-2 mb-0 text-secondary-light">Belum ada invoice</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    @endpush

    @push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#invoicesTable').DataTable({
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
                order: [[7, 'asc']], // Sort by Due Date column
                pageLength: 10,
                columnDefs: [
                    { orderable: false, targets: [8] } // Disable sorting on Actions column
                ]
            });

            // Custom search input
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Status filter
            $('#statusFilter').on('change', function() {
                var filterValue = this.value;
                if (filterValue) {
                    table.column(6).search(filterValue).draw();
                } else {
                    table.column(6).search('').draw();
                }
            });

            // Date range filter
            $('#dateFrom, #dateTo').on('change', function() {
                table.draw();
            });

            // Custom date range filtering
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var dateFrom = $('#dateFrom').val();
                    var dateTo = $('#dateTo').val();

                    if (dateFrom === '' && dateTo === '') {
                        return true;
                    }

                    var invoiceDate = data[1] || ''; // Invoice date column

                    if (dateFrom !== '' && dateTo !== '') {
                        return invoiceDate >= dateFrom && invoiceDate <= dateTo;
                    } else if (dateFrom !== '') {
                        return invoiceDate >= dateFrom;
                    } else if (dateTo !== '') {
                        return invoiceDate <= dateTo;
                    }

                    return true;
                }
            );
        });

        function sendInvoice(invoiceId) {
            if (confirm('Apakah Anda yakin ingin mengirim invoice ini ke pelanggan?')) {
                fetch(`/admin/finance/invoices/${invoiceId}/send`, {
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
                        alert('Invoice berhasil dikirim!');
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
    </script>
    @endpush
</x-layouts.admin.app>
