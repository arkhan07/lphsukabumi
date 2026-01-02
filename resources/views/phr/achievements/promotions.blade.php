<x-layouts.admin.app>
    <x-slot name="title">Riwayat Promosi</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Riwayat Promosi</h2>
                    <div class="text-secondary mt-1">Histori permohonan promosi level PHR</div>
                </div>
                <div class="col-auto ms-auto">
                    @if($canRequestPromotion)
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#requestPromotionModal">
                            <i class="ti ti-trending-up"></i> Ajukan Promosi
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Permohonan Promosi</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Dari Level</th>
                                <th>Ke Level</th>
                                <th>Stats Saat Pengajuan</th>
                                <th>Status</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($promotions as $promotion)
                            <tr>
                                <td>{{ $promotion->created_at->format('d M Y H:i') }}</td>
                                <td>
                                    <span class="badge bg-secondary">
                                        {{ ucwords(str_replace('_', ' ', $promotion->from_level)) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ ucwords(str_replace('_', ' ', $promotion->to_level)) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="text-secondary small">
                                        <div>PU: {{ $promotion->pu_referred_count_at_promotion ?? 0 }}</div>
                                        <div>PHR: {{ $promotion->phr_recruited_count_at_promotion ?? 0 }}</div>
                                        <div>Area Manager: {{ $promotion->area_managers_count_at_promotion ?? 0 }}</div>
                                    </div>
                                </td>
                                <td>
                                    @if($promotion->status === 'approved')
                                        <span class="badge bg-success">Disetujui</span>
                                        @if($promotion->approved_at)
                                            <div class="text-secondary small">{{ $promotion->approved_at->format('d M Y') }}</div>
                                        @endif
                                    @elseif($promotion->status === 'rejected')
                                        <span class="badge bg-danger">Ditolak</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if($promotion->rejection_reason)
                                        <div class="text-danger small">{{ $promotion->rejection_reason }}</div>
                                    @elseif($promotion->notes)
                                        <div class="text-secondary small">{{ $promotion->notes }}</div>
                                    @else
                                        <span class="text-secondary">-</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <i class="ti ti-trending-up icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                    <div class="text-secondary">Belum ada permohonan promosi</div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Request Promotion Modal -->
    <div class="modal modal-blur fade" id="requestPromotionModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form method="POST" action="{{ route('phr.achievements.requestPromotion') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Ajukan Promosi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Catatan (Opsional)</label>
                            <textarea name="notes" class="form-control" rows="3" placeholder="Tambahkan catatan atau alasan pengajuan promosi..."></textarea>
                        </div>
                        <div class="alert alert-info">
                            <i class="ti ti-info-circle"></i>
                            Permohonan promosi akan ditinjau oleh admin berdasarkan pencapaian Anda.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ti ti-send"></i> Ajukan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
