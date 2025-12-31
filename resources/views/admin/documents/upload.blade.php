<x-layouts.admin.app>
    <x-slot name="title">Upload Dokumen</x-slot>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Upload Dokumen</h2>
                    <p class="text-muted mt-1">Upload dokumen pendukung sertifikasi halal</p>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.documents.index') }}" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Dokumen</h3>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label required">Jenis Dokumen</label>
                                        <select class="form-select" name="type" required>
                                            <option value="">Pilih Jenis Dokumen</option>
                                            <option value="company_profile">Profil Perusahaan</option>
                                            <option value="business_permit">Izin Usaha</option>
                                            <option value="nib">NIB</option>
                                            <option value="npwp">NPWP</option>
                                            <option value="product_specification">Spesifikasi Produk</option>
                                            <option value="process_flow">Alur Proses</option>
                                            <option value="facility_layout">Layout Fasilitas</option>
                                            <option value="halal_certificate_material">Sertifikat Halal Bahan</option>
                                            <option value="certificate">Sertifikat</option>
                                            <option value="report">Laporan Audit</option>
                                            <option value="other">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label required">Permohonan/Pelaku Usaha</label>
                                        <select class="form-select" name="submission_id" required>
                                            <option value="">Pilih Permohonan</option>
                                            <option value="1">SH2024-001 - PT. Halal Jaya Makmur</option>
                                            <option value="2">SH2024-002 - CV. Berkah Selalu</option>
                                        </select>
                                        <div class="form-hint">Pilih permohonan atau pelaku usaha yang terkait dengan dokumen ini</div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label required">Upload File</label>
                                        <input type="file" class="form-control" name="file" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx,.xls,.xlsx,.zip" required>
                                        <div class="form-hint">Format yang diizinkan: PDF, JPG, PNG, DOC, DOCX, XLS, XLSX, ZIP (Maksimal 5MB)</div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Keterangan</label>
                                        <textarea class="form-control" name="notes" rows="4" placeholder="Catatan tambahan tentang dokumen ini..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <div class="d-flex">
                                    <a href="{{ route('admin.documents.index') }}" class="btn btn-link">Batal</a>
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" /><path d="M9 15l3 -3l3 3" /><path d="M12 12l0 9" /></svg>
                                        Upload Dokumen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Panduan Upload</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="text-muted mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 8l0 4" /><path d="M12 16l.01 0" /></svg>
                                        Ketentuan Upload:
                                    </div>
                                    <ul class="list-unstyled space-y-2">
                                        <li class="d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                            <span class="text-muted">Ukuran maksimal 5MB</span>
                                        </li>
                                        <li class="d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                            <span class="text-muted">Format: PDF, JPG, PNG, DOC, XLS</span>
                                        </li>
                                        <li class="d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                            <span class="text-muted">Pastikan dokumen jelas dan terbaca</span>
                                        </li>
                                        <li class="d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                            <span class="text-muted">Gunakan nama file yang deskriptif</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="hr-text">Jenis Dokumen</div>

                                <div class="text-muted">
                                    <ul class="list-unstyled space-y-1">
                                        <li class="text-muted"><small><strong>Profil Perusahaan:</strong> Company Profile, Sejarah</small></li>
                                        <li class="text-muted"><small><strong>Izin Usaha:</strong> SIUP, TDP, SKDP</small></li>
                                        <li class="text-muted"><small><strong>NIB:</strong> Nomor Induk Berusaha</small></li>
                                        <li class="text-muted"><small><strong>NPWP:</strong> Nomor Pokok Wajib Pajak</small></li>
                                        <li class="text-muted"><small><strong>Spesifikasi Produk:</strong> Detail produk</small></li>
                                        <li class="text-muted"><small><strong>Alur Proses:</strong> Flowchart produksi</small></li>
                                        <li class="text-muted"><small><strong>Layout Fasilitas:</strong> Denah pabrik</small></li>
                                        <li class="text-muted"><small><strong>Sertifikat Halal Bahan:</strong> Cert bahan baku</small></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-status-top bg-blue"></div>
                            <div class="card-body">
                                <h3 class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 17l0 .01" /><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" /></svg>
                                    Butuh Bantuan?
                                </h3>
                                <p class="text-muted">Jika mengalami kesulitan dalam upload dokumen, silakan hubungi tim support kami.</p>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                    Hubungi Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin.app>
