<x-layouts.admin.app>
    <x-slot name="title">Pusat Bantuan</x-slot>

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Pusat Bantuan</h2>
                    <div class="text-muted mt-1">Temukan jawaban untuk pertanyaan Anda</div>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('pelaku_usaha.help.contact') }}" class="btn btn-primary">
                        <i class="ti ti-message-circle me-2"></i>Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Quick Links -->
            <div class="row row-cards mb-3">
                <div class="col-md-3">
                    <a href="{{ route('pelaku_usaha.submissions.create') }}" class="card card-link">
                        <div class="card-body text-center">
                            <div class="text-primary mb-3">
                                <i class="ti ti-file-plus" style="font-size: 3rem;"></i>
                            </div>
                            <h3 class="card-title">Buat Permohonan</h3>
                            <p class="text-muted">Ajukan sertifikasi halal baru</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('pelaku_usaha.documents.create') }}" class="card card-link">
                        <div class="card-body text-center">
                            <div class="text-success mb-3">
                                <i class="ti ti-upload" style="font-size: 3rem;"></i>
                            </div>
                            <h3 class="card-title">Upload Dokumen</h3>
                            <p class="text-muted">Upload dokumen pendukung</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('pelaku_usaha.invoices.index') }}" class="card card-link">
                        <div class="card-body text-center">
                            <div class="text-warning mb-3">
                                <i class="ti ti-receipt" style="font-size: 3rem;"></i>
                            </div>
                            <h3 class="card-title">Lihat Invoice</h3>
                            <p class="text-muted">Cek tagihan pembayaran</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('pelaku_usaha.profile.index') }}" class="card card-link">
                        <div class="card-body text-center">
                            <div class="text-info mb-3">
                                <i class="ti ti-settings" style="font-size: 3rem;"></i>
                            </div>
                            <h3 class="card-title">Pengaturan</h3>
                            <p class="text-muted">Kelola profil & keamanan</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- FAQ Sections -->
            @foreach($faqs as $faqCategory)
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="{{ $faqCategory['icon'] }} me-2"></i>
                            {{ $faqCategory['category'] }}
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="faq-{{ Str::slug($faqCategory['category']) }}">
                            @foreach($faqCategory['questions'] as $index => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-{{ Str::slug($faqCategory['category']) }}-{{ $index }}">
                                        <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ Str::slug($faqCategory['category']) }}-{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{ Str::slug($faqCategory['category']) }}-{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" data-bs-parent="#faq-{{ Str::slug($faqCategory['category']) }}">
                                        <div class="accordion-body">
                                            {{ $faq['answer'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Contact Support -->
            <div class="card">
                <div class="card-body text-center py-5">
                    <i class="ti ti-help-circle text-muted mb-3" style="font-size: 4rem;"></i>
                    <h3>Tidak menemukan jawaban yang Anda cari?</h3>
                    <p class="text-muted">Tim support kami siap membantu Anda</p>
                    <a href="{{ route('pelaku_usaha.help.contact') }}" class="btn btn-primary">
                        <i class="ti ti-message-circle me-2"></i>Hubungi Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
