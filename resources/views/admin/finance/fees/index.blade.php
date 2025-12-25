<x-layouts.admin.app>
    <x-slot name="title">Konfigurasi Biaya</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Konfigurasi Biaya</h2>
            <p class="text-secondary-light mb-0">Kelola konfigurasi biaya sertifikasi halal</p>
        </div>
        <div>
            <a href="{{ route('admin.finance.fees.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-2"></i>
                Tambah Biaya
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--primary-600);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Total Konfigurasi</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['total'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon primary" style="width: 50px; height: 50px;">
                        <i class="ri-settings-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--success-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Aktif</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['active'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon success" style="width: 50px; height: 50px;">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--neutral-400);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Tidak Aktif</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['inactive'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon secondary" style="width: 50px; height: 50px;">
                        <i class="ri-close-circle-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-custom" style="border-left: 4px solid var(--info-main);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary-light" style="font-size: 0.875rem;">Biaya Tetap</div>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $stats['fixed'] ?? 0 }}</div>
                    </div>
                    <div class="stat-icon info" style="width: 50px; height: 50px;">
                        <i class="ri-price-tag-3-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table -->
    <div class="card-custom">
        <div class="card-header-custom">
            <h5 class="card-title mb-0">Semua Konfigurasi Biaya</h5>
            <div class="d-flex gap-2 flex-wrap">
                <div class="position-relative">
                    <i class="ri-search-line position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--neutral-400);"></i>
                    <input type="text" id="searchInput" class="form-control ps-5" placeholder="Cari biaya..." style="width: 250px;">
                </div>
                <select class="form-select" id="typeFilter" style="width: 180px;">
                    <option value="">Semua Tipe</option>
                    <option value="fixed">Tetap</option>
                    <option value="percentage">Persentase</option>
                    <option value="variable">Variabel</option>
                </select>
                <select class="form-select" id="statusFilter" style="width: 150px;">
                    <option value="">Semua Status</option>
                    <option value="active">Aktif</option>
                    <option value="inactive">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="feesTable">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 1rem; font-weight: 600; width: 60px;">No</th>
                        <th style="padding: 1rem; font-weight: 600;">Nama Biaya</th>
                        <th style="padding: 1rem; font-weight: 600;">Kode</th>
                        <th style="padding: 1rem; font-weight: 600;">Tipe</th>
                        <th style="padding: 1rem; font-weight: 600;">Jumlah</th>
                        <th style="padding: 1rem; font-weight: 600;">Berlaku Dari</th>
                        <th style="padding: 1rem; font-weight: 600;">Status</th>
                        <th style="padding: 1rem; font-weight: 600; text-align: center; width: 180px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($fees ?? [] as $index => $fee)
                    <tr>
                        <td style="padding: 1rem;">{{ $index + 1 }}</td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 600;">{{ $fee->name }}</div>
                            @if($fee->description)
                            <small class="text-secondary-light">{{ Str::limit($fee->description, 50) }}</small>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <code style="background-color: var(--neutral-100); padding: 0.25rem 0.5rem; border-radius: 4px;">
                                {{ $fee->code }}
                            </code>
                        </td>
                        <td style="padding: 1rem;">
                            @php
                                $typeConfig = [
                                    'fixed' => ['class' => 'badge-info', 'icon' => 'ri-price-tag-3-line', 'text' => 'Tetap'],
                                    'percentage' => ['class' => 'badge-warning', 'icon' => 'ri-percent-line', 'text' => 'Persentase'],
                                    'variable' => ['class' => 'badge-primary', 'icon' => 'ri-exchange-line', 'text' => 'Variabel'],
                                ];
                                $type = $fee->fee_type ?? 'fixed';
                                $config = $typeConfig[$type] ?? ['class' => 'badge-secondary', 'icon' => 'ri-question-line', 'text' => 'Unknown'];
                            @endphp
                            <span class="badge-custom {{ $config['class'] }}">
                                <i class="{{ $config['icon'] }} me-1"></i>{{ $config['text'] }}
                            </span>
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 600;">
                                @if($fee->fee_type === 'percentage')
                                    {{ number_format($fee->amount ?? 0, 2) }}%
                                @elseif($fee->fee_type === 'fixed')
                                    Rp {{ number_format($fee->amount ?? 0, 0, ',', '.') }}
                                @else
                                    {{ $fee->amount ?? 0 }}
                                @endif
                            </div>
                            @if($fee->min_amount || $fee->max_amount)
                            <small class="text-secondary-light">
                                @if($fee->min_amount)
                                    Min: Rp {{ number_format($fee->min_amount, 0, ',', '.') }}
                                @endif
                                @if($fee->max_amount)
                                    Max: Rp {{ number_format($fee->max_amount, 0, ',', '.') }}
                                @endif
                            </small>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            <div style="font-weight: 500;">{{ $fee->effective_date ? $fee->effective_date->format('d M Y') : '-' }}</div>
                            @if($fee->expiry_date)
                            <small class="text-secondary-light">s/d {{ $fee->expiry_date->format('d M Y') }}</small>
                            @endif
                        </td>
                        <td style="padding: 1rem;">
                            @if($fee->is_active)
                                <span class="badge-custom badge-success">Aktif</span>
                            @else
                                <span class="badge-custom badge-secondary">Tidak Aktif</span>
                            @endif
                        </td>
                        <td style="padding: 1rem; text-align: center;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.finance.fees.edit', $fee->id) }}"
                                   class="btn btn-sm btn-outline-success"
                                   title="Edit">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <button type="button"
                                        class="btn btn-sm btn-outline-{{ $fee->is_active ? 'warning' : 'info' }}"
                                        onclick="toggleStatus({{ $fee->id }}, {{ $fee->is_active ? 'false' : 'true' }})"
                                        title="{{ $fee->is_active ? 'Nonaktifkan' : 'Aktifkan' }}">
                                    <i class="ri-{{ $fee->is_active ? 'close' : 'check' }}-line"></i>
                                </button>
                                <form action="{{ route('admin.finance.fees.destroy', $fee->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus konfigurasi biaya ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center" style="padding: 2rem;">
                            <i class="ri-settings-3-line" style="font-size: 3rem; color: var(--neutral-300);"></i>
                            <p class="mt-2 mb-0 text-secondary-light">Belum ada konfigurasi biaya</p>
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
            var table = $('#feesTable').DataTable({
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
                order: [[5, 'desc']], // Sort by Effective Date column
                pageLength: 10,
                columnDefs: [
                    { orderable: false, targets: [7] } // Disable sorting on Actions column
                ]
            });

            // Custom search input
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Type filter
            $('#typeFilter').on('change', function() {
                var filterValue = this.value;
                if (filterValue) {
                    table.column(3).search(filterValue).draw();
                } else {
                    table.column(3).search('').draw();
                }
            });

            // Status filter
            $('#statusFilter').on('change', function() {
                var filterValue = this.value;
                if (filterValue) {
                    table.column(6).search(filterValue === 'active' ? 'Aktif' : 'Tidak Aktif').draw();
                } else {
                    table.column(6).search('').draw();
                }
            });
        });

        function toggleStatus(feeId, newStatus) {
            const action = newStatus === 'true' ? 'mengaktifkan' : 'menonaktifkan';
            if (confirm(`Apakah Anda yakin ingin ${action} konfigurasi biaya ini?`)) {
                fetch(`/admin/finance/fees/${feeId}/toggle-status`, {
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        is_active: newStatus === 'true'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(`Konfigurasi biaya berhasil ${newStatus === 'true' ? 'diaktifkan' : 'dinonaktifkan'}!`);
                        location.reload();
                    } else {
                        alert('Gagal mengubah status: ' + (data.message || 'Unknown error'));
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
