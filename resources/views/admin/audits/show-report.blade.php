<x-layouts.admin.app>
    <x-slot name="title">Laporan Audit #{{ $report->report_number }}</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Laporan Audit</h2>
            <p class="text-secondary-light mb-0">{{ $report->report_number }}</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.audits.reports') }}" class="btn btn-outline-primary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
            @if(in_array($report->status, ['draft', 'revision_required']))
            <a href="{{ route('admin.audits.reports.edit', $report) }}" class="btn btn-primary">
                <i class="ri-edit-line me-2"></i>
                Edit
            </a>
            @endif
        </div>
    </div>

    <div class="row g-3">
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">{{ $report->report_title }}</h5>
                    <div>
                        @php
                            $statusBadge = match($report->status) {
                                'draft' => 'secondary',
                                'submitted' => 'primary',
                                'under_review' => 'info',
                                'revision_required' => 'warning',
                                'approved' => 'success',
                                'rejected' => 'danger',
                                'finalized' => 'dark',
                                default => 'secondary'
                            };
                        @endphp
                        <span class="badge-custom badge-{{ $statusBadge }}">{{ ucfirst(str_replace('_', ' ', $report->status)) }}</span>
                    </div>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    @if($report->executive_summary)
                    <div class="mb-4">
                        <h6 style="font-weight: 600;">Ringkasan Eksekutif</h6>
                        <p>{{ $report->executive_summary }}</p>
                    </div>
                    @endif

                    <div class="mb-4">
                        <h6 style="font-weight: 600;">Ruang Lingkup Audit</h6>
                        <p>{{ $report->audit_scope }}</p>
                    </div>

                    @if($report->audit_conclusion)
                    <div class="mb-4">
                        <h6 style="font-weight: 600;">Kesimpulan Audit</h6>
                        <p>{{ $report->audit_conclusion }}</p>
                    </div>
                    @endif

                    @if($report->recommendations)
                    <div class="mb-4">
                        <h6 style="font-weight: 600;">Rekomendasi</h6>
                        <p>{{ $report->recommendations }}</p>
                    </div>
                    @endif

                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3">
                            <div class="text-center p-3" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                                <div class="text-secondary-light" style="font-size: 0.875rem;">Total Temuan</div>
                                <div style="font-size: 1.5rem; font-weight: 700;">{{ $report->total_findings }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="text-center p-3" style="border: 1px solid var(--danger-main); border-radius: 8px;">
                                <div class="text-secondary-light" style="font-size: 0.875rem;">Kritis</div>
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--danger-main);">{{ $report->critical_findings }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="text-center p-3" style="border: 1px solid var(--warning-main); border-radius: 8px;">
                                <div class="text-secondary-light" style="font-size: 0.875rem;">Major</div>
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--warning-main);">{{ $report->major_findings }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="text-center p-3" style="border: 1px solid var(--info-main); border-radius: 8px;">
                                <div class="text-secondary-light" style="font-size: 0.875rem;">Minor</div>
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--info-main);">{{ $report->minor_findings }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Informasi</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nomor Laporan</label>
                        <div style="font-weight: 600;">{{ $report->report_number }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Tanggal Laporan</label>
                        <div>{{ $report->report_date->format('d/m/Y') }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Tipe Laporan</label>
                        <div>{{ ucfirst(str_replace('_', ' ', $report->report_type)) }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Hasil Audit</label>
                        <div>
                            @php
                                $resultBadge = match($report->overall_result) {
                                    'recommend_certification' => 'success',
                                    'recommend_with_conditions' => 'warning',
                                    'not_recommend' => 'danger',
                                    'need_re_audit' => 'info',
                                    default => 'secondary'
                                };
                            @endphp
                            <span class="badge-custom badge-{{ $resultBadge }}">
                                {{ ucfirst(str_replace('_', ' ', $report->overall_result)) }}
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Dibuat Oleh</label>
                        <div>{{ $report->preparedBy->name ?? '-' }}</div>
                    </div>
                    @if($report->halal_compliance_score)
                    <div>
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Skor Kepatuhan Halal</label>
                        <div style="font-size: 1.5rem; font-weight: 700;">{{ $report->halal_compliance_score }}/100</div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="card-custom mt-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Aksi</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.audits.reports.download', $report) }}" class="btn btn-primary">
                            <i class="ri-download-line me-2"></i>
                            Download PDF
                        </a>
                        @if($report->status === 'submitted')
                        <form method="POST" action="{{ route('admin.audits.reports.approve', $report) }}">
                            @csrf
                            <button type="submit" class="btn btn-success w-100">
                                <i class="ri-check-line me-2"></i>
                                Setujui Laporan
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
