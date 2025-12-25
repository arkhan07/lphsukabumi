<x-layouts.admin.app>
    <x-slot name="title">Tambah Temuan Audit</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Tambah Temuan Audit</h2>
            <p class="text-secondary-light mb-0">Catat temuan baru dari hasil audit</p>
        </div>
        <a href="{{ route('admin.audits.findings') }}" class="btn btn-outline-primary">
            <i class="ri-arrow-left-line me-2"></i>
            Kembali
        </a>
    </div>

    <div class="card-custom">
        <div class="card-body" style="padding: 1.5rem;">
            <form method="POST" action="{{ route('admin.audits.findings.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label for="audit_id" class="form-label">Audit <span class="text-danger">*</span></label>
                        <select class="form-select @error('audit_id') is-invalid @enderror" id="audit_id" name="audit_id" required>
                            <option value="">Pilih audit...</option>
                            @foreach($audits as $audit)
                                <option value="{{ $audit->id }}">{{ $audit->audit_number }} - {{ $audit->submission->company_name ?? $audit->submission->user->name }}</option>
                            @endforeach
                        </select>
                        @error('audit_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="submission_id" class="form-label">Permohonan <span class="text-danger">*</span></label>
                        <select class="form-select @error('submission_id') is-invalid @enderror" id="submission_id" name="submission_id" required>
                            <option value="">Pilih permohonan...</option>
                            @foreach($submissions as $submission)
                                <option value="{{ $submission->id }}">{{ $submission->submission_number }}</option>
                            @endforeach
                        </select>
                        @error('submission_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="auditor_id" class="form-label">Auditor <span class="text-danger">*</span></label>
                        <select class="form-select @error('auditor_id') is-invalid @enderror" id="auditor_id" name="auditor_id" required>
                            <option value="">Pilih auditor...</option>
                            @foreach($auditors as $auditor)
                                <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                            @endforeach
                        </select>
                        @error('auditor_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="finding_type" class="form-label">Tipe Temuan <span class="text-danger">*</span></label>
                        <select class="form-select @error('finding_type') is-invalid @enderror" id="finding_type" name="finding_type" required>
                            <option value="">Pilih tipe...</option>
                            <option value="non_conformity_critical">Non-Konformitas Kritis</option>
                            <option value="non_conformity_major">Non-Konformitas Major</option>
                            <option value="non_conformity_minor">Non-Konformitas Minor</option>
                            <option value="observation">Observasi</option>
                            <option value="opportunity_for_improvement">Peluang Perbaikan</option>
                            <option value="positive_finding">Temuan Positif</option>
                        </select>
                        @error('finding_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="severity" class="form-label">Tingkat Keparahan <span class="text-danger">*</span></label>
                        <select class="form-select @error('severity') is-invalid @enderror" id="severity" name="severity" required>
                            <option value="">Pilih tingkat...</option>
                            <option value="critical">Kritis</option>
                            <option value="high">Tinggi</option>
                            <option value="medium">Sedang</option>
                            <option value="low">Rendah</option>
                        </select>
                        @error('severity')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="title" class="form-label">Judul Temuan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required></textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="evidence" class="form-label">Bukti</label>
                        <textarea class="form-control @error('evidence') is-invalid @enderror" id="evidence" name="evidence" rows="3"></textarea>
                        @error('evidence')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location">
                        @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="area_department" class="form-label">Area/Departemen</label>
                        <input type="text" class="form-control @error('area_department') is-invalid @enderror" id="area_department" name="area_department">
                        @error('area_department')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.audits.findings') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Temuan</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin.app>
