<x-layouts.admin.app>
    <x-slot name="title">Edit Laporan #{{ $report->report_number }}</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Edit Laporan Audit</h2>
            <p class="text-secondary-light mb-0">{{ $report->report_number }}</p>
        </div>
        <a href="{{ route('admin.audits.reports.show', $report) }}" class="btn btn-outline-primary">
            <i class="ri-arrow-left-line me-2"></i>
            Kembali
        </a>
    </div>

    <div class="card-custom">
        <div class="card-body" style="padding: 1.5rem;">
            <form method="POST" action="{{ route('admin.audits.reports.update', $report) }}">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-12">
                        <label for="report_title" class="form-label">Judul Laporan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('report_title') is-invalid @enderror" id="report_title" name="report_title" value="{{ old('report_title', $report->report_title) }}" required>
                        @error('report_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="executive_summary" class="form-label">Ringkasan Eksekutif</label>
                        <textarea class="form-control @error('executive_summary') is-invalid @enderror" id="executive_summary" name="executive_summary" rows="3">{{ old('executive_summary', $report->executive_summary) }}</textarea>
                        @error('executive_summary')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="audit_scope" class="form-label">Ruang Lingkup Audit <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('audit_scope') is-invalid @enderror" id="audit_scope" name="audit_scope" rows="3" required>{{ old('audit_scope', $report->audit_scope) }}</textarea>
                        @error('audit_scope')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="audit_conclusion" class="form-label">Kesimpulan Audit <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('audit_conclusion') is-invalid @enderror" id="audit_conclusion" name="audit_conclusion" rows="4" required>{{ old('audit_conclusion', $report->audit_conclusion) }}</textarea>
                        @error('audit_conclusion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="recommendations" class="form-label">Rekomendasi</label>
                        <textarea class="form-control @error('recommendations') is-invalid @enderror" id="recommendations" name="recommendations" rows="3">{{ old('recommendations', $report->recommendations) }}</textarea>
                        @error('recommendations')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="total_findings" class="form-label">Total Temuan</label>
                        <input type="number" class="form-control @error('total_findings') is-invalid @enderror" id="total_findings" name="total_findings" value="{{ old('total_findings', $report->total_findings) }}">
                        @error('total_findings')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="critical_findings" class="form-label">Temuan Kritis</label>
                        <input type="number" class="form-control @error('critical_findings') is-invalid @enderror" id="critical_findings" name="critical_findings" value="{{ old('critical_findings', $report->critical_findings) }}">
                        @error('critical_findings')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="major_findings" class="form-label">Temuan Major</label>
                        <input type="number" class="form-control @error('major_findings') is-invalid @enderror" id="major_findings" name="major_findings" value="{{ old('major_findings', $report->major_findings) }}">
                        @error('major_findings')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="minor_findings" class="form-label">Temuan Minor</label>
                        <input type="number" class="form-control @error('minor_findings') is-invalid @enderror" id="minor_findings" name="minor_findings" value="{{ old('minor_findings', $report->minor_findings) }}">
                        @error('minor_findings')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="overall_result" class="form-label">Hasil Audit <span class="text-danger">*</span></label>
                        <select class="form-select @error('overall_result') is-invalid @enderror" id="overall_result" name="overall_result" required>
                            <option value="recommend_certification" {{ old('overall_result', $report->overall_result) == 'recommend_certification' ? 'selected' : '' }}>Direkomendasikan untuk Sertifikasi</option>
                            <option value="recommend_with_conditions" {{ old('overall_result', $report->overall_result) == 'recommend_with_conditions' ? 'selected' : '' }}>Direkomendasikan dengan Syarat</option>
                            <option value="not_recommend" {{ old('overall_result', $report->overall_result) == 'not_recommend' ? 'selected' : '' }}>Tidak Direkomendasikan</option>
                            <option value="need_re_audit" {{ old('overall_result', $report->overall_result) == 'need_re_audit' ? 'selected' : '' }}>Perlu Re-Audit</option>
                        </select>
                        @error('overall_result')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="status" class="form-label">Status Laporan <span class="text-danger">*</span></label>
                        <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="draft" {{ old('status', $report->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="submitted" {{ old('status', $report->status) == 'submitted' ? 'selected' : '' }}>Submitted</option>
                            <option value="under_review" {{ old('status', $report->status) == 'under_review' ? 'selected' : '' }}>Under Review</option>
                            <option value="revision_required" {{ old('status', $report->status) == 'revision_required' ? 'selected' : '' }}>Revision Required</option>
                            <option value="approved" {{ old('status', $report->status) == 'approved' ? 'selected' : '' }}>Approved</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="halal_compliance_score" class="form-label">Skor Kepatuhan Halal (0-100)</label>
                        <input type="number" min="0" max="100" class="form-control @error('halal_compliance_score') is-invalid @enderror" id="halal_compliance_score" name="halal_compliance_score" value="{{ old('halal_compliance_score', $report->halal_compliance_score) }}">
                        @error('halal_compliance_score')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="halal_compliance_level" class="form-label">Level Kepatuhan Halal</label>
                        <select class="form-select @error('halal_compliance_level') is-invalid @enderror" id="halal_compliance_level" name="halal_compliance_level">
                            <option value="">Pilih level...</option>
                            <option value="excellent" {{ old('halal_compliance_level', $report->halal_compliance_level) == 'excellent' ? 'selected' : '' }}>Excellent</option>
                            <option value="good" {{ old('halal_compliance_level', $report->halal_compliance_level) == 'good' ? 'selected' : '' }}>Good</option>
                            <option value="satisfactory" {{ old('halal_compliance_level', $report->halal_compliance_level) == 'satisfactory' ? 'selected' : '' }}>Satisfactory</option>
                            <option value="needs_improvement" {{ old('halal_compliance_level', $report->halal_compliance_level) == 'needs_improvement' ? 'selected' : '' }}>Needs Improvement</option>
                            <option value="not_compliant" {{ old('halal_compliance_level', $report->halal_compliance_level) == 'not_compliant' ? 'selected' : '' }}>Not Compliant</option>
                        </select>
                        @error('halal_compliance_level')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.audits.reports.show', $report) }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update Laporan</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin.app>
