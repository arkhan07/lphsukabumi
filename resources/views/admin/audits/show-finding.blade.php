<x-layouts.admin.app>
    <x-slot name="title">Detail Temuan #{{ $finding->finding_number }}</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Detail Temuan</h2>
            <p class="text-secondary-light mb-0">{{ $finding->finding_number }}</p>
        </div>
        <a href="{{ route('admin.audits.findings') }}" class="btn btn-outline-primary">
            <i class="ri-arrow-left-line me-2"></i>
            Kembali
        </a>
    </div>

    <div class="row g-3">
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Informasi Temuan</h5>
                    <div class="d-flex gap-2">
                        @php
                            $severityBadge = match($finding->severity) {
                                'critical' => 'danger',
                                'high' => 'warning',
                                'medium' => 'info',
                                'low' => 'secondary',
                                default => 'secondary'
                            };
                            $statusBadge = match($finding->status) {
                                'draft' => 'secondary',
                                'submitted' => 'primary',
                                'acknowledged' => 'info',
                                'resolved' => 'success',
                                'closed' => 'dark',
                                default => 'secondary'
                            };
                        @endphp
                        <span class="badge-custom badge-{{ $severityBadge }}">{{ ucfirst($finding->severity) }}</span>
                        <span class="badge-custom badge-{{ $statusBadge }}">{{ ucfirst($finding->status) }}</span>
                    </div>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="text-secondary-light">Judul</label>
                            <div style="font-weight: 600; font-size: 1.1rem;">{{ $finding->title }}</div>
                        </div>
                        <div class="col-12">
                            <label class="text-secondary-light">Deskripsi</label>
                            <div>{{ $finding->description }}</div>
                        </div>
                        @if($finding->evidence)
                        <div class="col-12">
                            <label class="text-secondary-light">Bukti</label>
                            <div>{{ $finding->evidence }}</div>
                        </div>
                        @endif
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light">Tipe Temuan</label>
                            <div>{{ ucfirst(str_replace('_', ' ', $finding->finding_type)) }}</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light">Auditor</label>
                            <div style="font-weight: 600;">{{ $finding->auditor->name ?? '-' }}</div>
                        </div>
                        @if($finding->location)
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light">Lokasi</label>
                            <div>{{ $finding->location }}</div>
                        </div>
                        @endif
                        @if($finding->area_department)
                        <div class="col-12 col-md-6">
                            <label class="text-secondary-light">Area/Departemen</label>
                            <div>{{ $finding->area_department }}</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            @if($finding->proposed_corrective_action)
            <div class="card-custom mt-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Tindakan Korektif</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div>{{ $finding->proposed_corrective_action }}</div>
                    @if($finding->responsiblePerson)
                    <div class="mt-3">
                        <label class="text-secondary-light">Penanggung Jawab</label>
                        <div>{{ $finding->responsiblePerson->name }}</div>
                    </div>
                    @endif
                    @if($finding->target_completion_date)
                    <div class="mt-2">
                        <label class="text-secondary-light">Target Selesai</label>
                        <div>{{ $finding->target_completion_date->format('d/m/Y') }}</div>
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div>

        <div class="col-12 col-lg-4">
            <div class="card-custom">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Info Audit</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nomor Audit</label>
                        <div style="font-weight: 600;">{{ $finding->audit->audit_number ?? '-' }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Nomor Permohonan</label>
                        <div style="font-weight: 600;">{{ $finding->submission->submission_number }}</div>
                    </div>
                    <div>
                        <label class="text-secondary-light" style="font-size: 0.875rem;">Perusahaan</label>
                        <div>{{ $finding->submission->company_name ?? $finding->submission->user->name }}</div>
                    </div>
                </div>
            </div>

            @if($finding->status !== 'closed')
            <div class="card-custom mt-3">
                <div class="card-header-custom">
                    <h5 class="card-title mb-0">Aksi</h5>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="d-grid gap-2">
                        @if($finding->status === 'resolved' && !$finding->is_verified)
                        <form method="POST" action="{{ route('admin.audits.findings.verify', $finding) }}">
                            @csrf
                            <button type="submit" class="btn btn-success w-100">
                                <i class="ri-check-double-line me-2"></i>
                                Verifikasi
                            </button>
                        </form>
                        @endif
                        @if($finding->is_verified)
                        <form method="POST" action="{{ route('admin.audits.findings.close', $finding) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="ri-close-circle-line me-2"></i>
                                Tutup Temuan
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-layouts.admin.app>
