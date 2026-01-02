<x-layouts.admin.app>
    <x-slot name="title">Persetujuan Promosi PHR</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Persetujuan Promosi PHR</h2>
                    <div class="text-secondary mt-1">Kelola promosi level PHR, Manajer Area, dan Manajer Regional</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('admin.phr.index') }}" class="btn btn-ghost-primary">
                        <i class="ti ti-arrow-left me-2"></i>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Filters -->
            <div class="card mb-3">
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.phr.promotions') }}">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Semua Status</option>
                                    <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ request('status') === 'approved' ? 'selected' : '' }}>Disetujui</option>
                                    <option value="rejected" {{ request('status') === 'rejected' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tipe Promosi</label>
                                <select name="type" class="form-select">
                                    <option value="">Semua Tipe</option>
                                    <option value="auto" {{ request('type') === 'auto' ? 'selected' : '' }}>Otomatis</option>
                                    <option value="manual" {{ request('type') === 'manual' ? 'selected' : '' }}>Manual</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">&nbsp;</label>
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti ti-filter me-2"></i>
                                        Filter
                                    </button>
                                    <a href="{{ route('admin.phr.promotions') }}" class="btn btn-ghost-secondary">
                                        <i class="ti ti-x me-2"></i>
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Promotions List -->
            <div class="row">
                @forelse($promotions as $promotion)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card {{ $promotion->status === 'pending' ? 'border-warning' : '' }}">
                        <div class="card-status-top {{ $promotion->status === 'pending' ? 'bg-warning' : ($promotion->status === 'approved' ? 'bg-success' : 'bg-danger') }}"></div>
                        <div class="card-body">
                            <!-- PHR Info -->
                            <div class="d-flex align-items-center mb-3">
                                <span class="avatar avatar-lg me-3" 
                                      style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($promotion->user->name) }}&background=random)">
                                </span>
                                <div class="flex-fill">
                                    <div class="font-weight-medium">{{ $promotion->user->name }}</div>
                                    <div class="text-secondary">{{ $promotion->user->email }}</div>
                                    <div class="text-secondary small">
                                        <i class="ti ti-tag me-1"></i>
                                        {{ $promotion->user->referral_code }}
                                    </div>
                                </div>
                            </div>

                            <!-- Promotion Details -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="text-secondary small mb-1">Level Saat Ini</div>
                                        <div>
                                            @if($promotion->from_level === 'phr')
                                                <span class="badge bg-secondary">PHR</span>
                                            @elseif($promotion->from_level === 'area_manager')
                                                <span class="badge bg-info">Area Manager</span>
                                            @else
                                                <span class="badge bg-warning">Regional Manager</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-secondary small mb-1">Promosi Ke</div>
                                        <div>
                                            @if($promotion->to_level === 'area_manager')
                                                <span class="badge bg-info">Area Manager</span>
                                            @else
                                                <span class="badge bg-warning">Regional Manager</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Achievement Stats -->
                            <div class="mb-3">
                                <div class="text-secondary small mb-2">Pencapaian:</div>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0 py-1">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <i class="ti ti-briefcase me-1 text-secondary"></i>
                                                PU Referensi
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge bg-primary">{{ $promotion->pu_referred_count_at_promotion }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0 py-1">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <i class="ti ti-users me-1 text-secondary"></i>
                                                PHR Rekrut
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge bg-info">{{ $promotion->phr_recruited_count_at_promotion }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @if($promotion->to_level === 'regional_manager')
                                    <div class="list-group-item px-0 py-1">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <i class="ti ti-star me-1 text-secondary"></i>
                                                Area Managers
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge bg-warning">{{ $promotion->area_managers_count_at_promotion }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0 py-1">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <i class="ti ti-map me-1 text-secondary"></i>
                                                Cakupan Provinsi
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge bg-success">{{ $promotion->province_coverage_percentage }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Promotion Info -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="text-secondary small">Tipe</div>
                                        <div>
                                            @if($promotion->promotion_type === 'auto')
                                                <span class="badge bg-primary-lt">Otomatis</span>
                                            @else
                                                <span class="badge bg-secondary-lt">Manual</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-secondary small">Tanggal</div>
                                        <div class="text-secondary">{{ $promotion->created_at->format('d M Y') }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                @if($promotion->status === 'pending')
                                    <span class="badge bg-warning w-100">Menunggu Persetujuan</span>
                                @elseif($promotion->status === 'approved')
                                    <div>
                                        <span class="badge bg-success w-100 mb-1">Disetujui</span>
                                        <div class="text-secondary small">
                                            Oleh: {{ $promotion->approvedBy->name ?? '-' }}<br>
                                            Pada: {{ $promotion->approved_at ? $promotion->approved_at->format('d M Y H:i') : '-' }}
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <span class="badge bg-danger w-100 mb-1">Ditolak</span>
                                        @if($promotion->rejection_reason)
                                        <div class="alert alert-danger mt-2 mb-0 small">
                                            {{ $promotion->rejection_reason }}
                                        </div>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <!-- Actions -->
                            @if($promotion->status === 'pending')
                            <div class="btn-list w-100">
                                <form method="POST" action="{{ route('admin.phr.promotions.approve', $promotion) }}" class="flex-fill">
                                    @csrf
                                    <button type="submit" class="btn btn-success w-100" 
                                            onclick="return confirm('Yakin menyetujui promosi ini?')">
                                        <i class="ti ti-check me-2"></i>
                                        Setujui
                                    </button>
                                </form>
                                <button type="button" class="btn btn-danger" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#rejectModal{{ $promotion->id }}">
                                    <i class="ti ti-x me-2"></i>
                                    Tolak
                                </button>
                            </div>

                            <!-- Reject Modal -->
                            <div class="modal modal-blur fade" id="rejectModal{{ $promotion->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('admin.phr.promotions.reject', $promotion) }}">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tolak Promosi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label required">Alasan Penolakan</label>
                                                    <textarea name="rejection_reason" class="form-control" rows="4" required 
                                                              placeholder="Jelaskan mengapa promosi ditolak..."></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-ghost-secondary" data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn btn-danger">
                                                    Tolak Promosi
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="empty">
                                <div class="empty-icon">
                                    <i class="ti ti-trophy-off"></i>
                                </div>
                                <p class="empty-title">Tidak ada promosi</p>
                                <p class="empty-subtitle text-secondary">
                                    Tidak ada promosi PHR yang ditemukan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($promotions->hasPages())
            <div class="d-flex justify-content-center mt-3">
                {{ $promotions->links() }}
            </div>
            @endif
        </div>
    </div>
</x-layouts.admin.app>
