<x-layouts.admin.app>
    <x-slot name="title">Bantuan</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Pusat Bantuan</h2>
            <p class="text-secondary-light mb-0">Panduan dan dokumentasi penggunaan sistem</p>
        </div>
    </div>

    <div class="row g-3">
        <!-- Quick Links -->
        <div class="col-12">
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Panduan Cepat</h5>
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-custom" style="cursor: pointer; border: 1px solid var(--neutral-200);">
                            <div class="text-center">
                                <div class="stat-icon primary mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                                    <i class="ri-file-list-3-line"></i>
                                </div>
                                <h6 style="font-weight: 600;">Mengelola Permohonan</h6>
                                <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">Cara membuat dan mengelola permohonan sertifikasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-custom" style="cursor: pointer; border: 1px solid var(--neutral-200);">
                            <div class="text-center">
                                <div class="stat-icon success mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                                    <i class="ri-user-settings-line"></i>
                                </div>
                                <h6 style="font-weight: 600;">Manajemen Pengguna</h6>
                                <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">Panduan mengelola pengguna dan role</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-custom" style="cursor: pointer; border: 1px solid var(--neutral-200);">
                            <div class="text-center">
                                <div class="stat-icon warning mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                                    <i class="ri-calendar-line"></i>
                                </div>
                                <h6 style="font-weight: 600;">Jadwal Audit</h6>
                                <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">Cara menjadwalkan dan mengelola audit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-custom" style="cursor: pointer; border: 1px solid var(--neutral-200);">
                            <div class="text-center">
                                <div class="stat-icon info mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                                    <i class="ri-money-dollar-circle-line"></i>
                                </div>
                                <h6 style="font-weight: 600;">Manajemen Keuangan</h6>
                                <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">Panduan invoice dan pembayaran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ -->
        <div class="col-12 col-lg-8">
            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Pertanyaan yang Sering Diajukan (FAQ)</h5>
                <div class="accordion" id="faqAccordion">
                    <div class="mb-2" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: none; border: none; padding: 1rem;">
                                <strong>Bagaimana cara membuat permohonan sertifikasi baru?</strong>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1rem;">
                                Untuk membuat permohonan baru, klik menu "Permohonan" > "Buat Permohonan Baru", kemudian isi form dengan lengkap termasuk informasi pelaku usaha, produk, dan upload dokumen pendukung.
                            </div>
                        </div>
                    </div>

                    <div class="mb-2" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: none; border: none; padding: 1rem;">
                                <strong>Bagaimana cara menjadwalkan audit?</strong>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1rem;">
                                Buka menu "Audit" > "Jadwal Audit", klik "Jadwalkan Audit", pilih permohonan, auditor, dan tentukan tanggal serta waktu audit.
                            </div>
                        </div>
                    </div>

                    <div class="mb-2" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: none; border: none; padding: 1rem;">
                                <strong>Bagaimana cara mengelola invoice?</strong>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1rem;">
                                Akses menu "Keuangan" > "Invoice" untuk melihat semua invoice. Anda dapat membuat invoice baru, mengkonfirmasi pembayaran, atau mendownload invoice dalam format PDF.
                            </div>
                        </div>
                    </div>

                    <div class="mb-2" style="border: 1px solid var(--neutral-200); border-radius: 8px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: none; border: none; padding: 1rem;">
                                <strong>Bagaimana cara menambah pengguna baru?</strong>
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1rem;">
                                Buka menu "Pengguna" > "Tambah Pengguna", isi form dengan data lengkap, pilih role yang sesuai, dan klik "Simpan Pengguna".
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Support -->
        <div class="col-12 col-lg-4">
            <div class="card-custom mb-3">
                <h5 class="mb-3" style="font-weight: 600;">Hubungi Dukungan</h5>
                <div class="mb-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="ri-phone-line" style="color: var(--primary-600); font-size: 1.25rem;"></i>
                        <div>
                            <small class="text-secondary-light">Telepon</small>
                            <div style="font-weight: 500;">0266-123456</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="ri-mail-line" style="color: var(--primary-600); font-size: 1.25rem;"></i>
                        <div>
                            <small class="text-secondary-light">Email</small>
                            <div style="font-weight: 500;">support@lphsukabumi.com</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="ri-whatsapp-line" style="color: var(--success-main); font-size: 1.25rem;"></i>
                        <div>
                            <small class="text-secondary-light">WhatsApp</small>
                            <div style="font-weight: 500;">0812-3456-7890</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary w-100">
                    <i class="ri-customer-service-line me-2"></i>
                    Live Chat
                </button>
            </div>

            <div class="card-custom">
                <h5 class="mb-3" style="font-weight: 600;">Video Tutorial</h5>
                <div class="mb-2">
                    <a href="#" class="d-flex align-items-center gap-2 text-decoration-none mb-2">
                        <i class="ri-play-circle-line" style="color: var(--primary-600); font-size: 1.5rem;"></i>
                        <div>
                            <div style="font-weight: 500; color: var(--neutral-800);">Pengenalan Dashboard</div>
                            <small class="text-secondary-light">5 menit</small>
                        </div>
                    </a>
                </div>
                <div class="mb-2">
                    <a href="#" class="d-flex align-items-center gap-2 text-decoration-none mb-2">
                        <i class="ri-play-circle-line" style="color: var(--primary-600); font-size: 1.5rem;"></i>
                        <div>
                            <div style="font-weight: 500; color: var(--neutral-800);">Membuat Permohonan</div>
                            <small class="text-secondary-light">8 menit</small>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#" class="d-flex align-items-center gap-2 text-decoration-none">
                        <i class="ri-play-circle-line" style="color: var(--primary-600); font-size: 1.5rem;"></i>
                        <div>
                            <div style="font-weight: 500; color: var(--neutral-800);">Manajemen Audit</div>
                            <small class="text-secondary-light">12 menit</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
