<x-layouts.admin.app>
    <x-slot name="title">Hubungi Kami</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Hubungi Kami</h2>
                    <div class="text-muted mt-1">Kami siap membantu Anda</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('pelaku_usaha.help.index') }}" class="btn btn-outline-secondary">
                        <i class="ti ti-arrow-left me-2"></i>Kembali ke Bantuan
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <!-- Contact Info -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Kontak</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start mb-3">
                                        <div class="me-3">
                                            <div class="avatar avatar-md" style="background-color: #206bc4; color: white;">
                                                <i class="ti ti-phone"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4>Telepon</h4>
                                            <p class="text-muted mb-1">(0266) 123456</p>
                                            <p class="text-muted mb-0">Senin - Jumat, 08:00 - 17:00 WIB</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start mb-3">
                                        <div class="me-3">
                                            <div class="avatar avatar-md" style="background-color: #2fb344; color: white;">
                                                <i class="ti ti-brand-whatsapp"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4>WhatsApp</h4>
                                            <p class="text-muted mb-1">0812-3456-7890</p>
                                            <p class="text-muted mb-0">Senin - Jumat, 08:00 - 17:00 WIB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start mb-3">
                                        <div class="me-3">
                                            <div class="avatar avatar-md" style="background-color: #d63939; color: white;">
                                                <i class="ti ti-mail"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4>Email</h4>
                                            <p class="text-muted mb-1">info@lphsukabumi.or.id</p>
                                            <p class="text-muted mb-0">Respons dalam 1x24 jam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start mb-3">
                                        <div class="me-3">
                                            <div class="avatar avatar-md" style="background-color: #4299e1; color: white;">
                                                <i class="ti ti-map-pin"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4>Alamat</h4>
                                            <p class="text-muted mb-0">
                                                Jl. Contoh No. 123<br>
                                                Sukabumi, Jawa Barat 43111
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <h4 class="mt-4 mb-3">Jam Operasional</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">Senin - Kamis</td>
                                            <td>08:00 - 17:00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Jumat</td>
                                            <td>08:00 - 16:00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Sabtu - Minggu</td>
                                            <td class="text-muted">Tutup</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Akses Cepat</h3>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="https://wa.me/6281234567890" target="_blank" class="list-group-item list-group-item-action">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-color: #2fb344; color: white;">
                                            <i class="ti ti-brand-whatsapp"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="fw-bold">Chat WhatsApp</div>
                                        <div class="text-muted small">Respon cepat via WhatsApp</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="ti ti-external-link"></i>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:info@lphsukabumi.or.id" class="list-group-item list-group-item-action">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-color: #d63939; color: white;">
                                            <i class="ti ti-mail"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="fw-bold">Kirim Email</div>
                                        <div class="text-muted small">Email ke tim support</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="ti ti-external-link"></i>
                                    </div>
                                </div>
                            </a>
                            <a href="tel:+622661234567" class="list-group-item list-group-item-action">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-color: #206bc4; color: white;">
                                            <i class="ti ti-phone"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="fw-bold">Telepon Langsung</div>
                                        <div class="text-muted small">Hubungi via telepon</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="ti ti-external-link"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- FAQ Link -->
                    <div class="card mt-3">
                        <div class="card-body text-center">
                            <i class="ti ti-help-circle text-muted mb-3" style="font-size: 3rem;"></i>
                            <h4>Cek FAQ Dulu</h4>
                            <p class="text-muted">Mungkin pertanyaan Anda sudah terjawab di FAQ</p>
                            <a href="{{ route('pelaku_usaha.help.index') }}" class="btn btn-outline-primary w-100">
                                <i class="ti ti-book me-2"></i>Lihat FAQ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
