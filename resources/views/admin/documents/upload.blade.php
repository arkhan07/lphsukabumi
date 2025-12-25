<x-layouts.admin.app>
    <x-slot name="title">Upload Dokumen</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Upload Dokumen</h2>
            <p class="text-secondary-light mb-0">Upload dokumen pendukung sertifikasi</p>
        </div>
        <div>
            <a href="{{ route('admin.documents.index') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-left-line me-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <div class="card-custom">
                    <h5 class="mb-3" style="font-weight: 600;">Informasi Dokumen</h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Jenis Dokumen <span class="text-danger">*</span></label>
                            <select class="form-select" name="type" required>
                                <option value="">Pilih Jenis</option>
                                <option value="nib">NIB/SIUP</option>
                                <option value="npwp">NPWP</option>
                                <option value="certificate">Sertifikat</option>
                                <option value="report">Laporan Audit</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Permohonan/Pelaku Usaha <span class="text-danger">*</span></label>
                            <select class="form-select" name="submission_id" required>
                                <option value="">Pilih Permohonan</option>
                                <option value="1">SH2024-001 - PT. Halal Jaya Makmur</option>
                                <option value="2">SH2024-002 - CV. Berkah Selalu</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Upload File <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="file" accept=".pdf,.jpg,.jpeg,.png" required>
                            <small class="text-secondary-light">Format: PDF, JPG, PNG (Max 5MB)</small>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Keterangan</label>
                            <textarea class="form-control" name="notes" rows="3" placeholder="Catatan tambahan..."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-upload-line me-2"></i>
                                Upload Dokumen
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-layouts.admin.app>
