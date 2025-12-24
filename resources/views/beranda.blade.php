@extends('layout.app')

@section('content')
    {{-- Hero Section --}}
    <section class="container my-10 mx-auto" data-aos="fade-down" data-aos-duration="1000">
        <div class="text-center text-darkteal font-semibold p-5">
            <h1 class="md:w-[600px] md:text-4xl text-2xl mx-auto mb-3">Lembaga Pemeriksa Halal Terpercaya di Sukabumi
            </h1>
            <p class="md:w-3/5 text-darkgreen mx-auto">LPH Doa Bangsa adalah Lembaga Pemeriksa Halal yang berkomitmen memberikan layanan sertifikasi halal terbaik untuk produk Anda. Kami membantu pelaku usaha dalam memenuhi standar kehalalan yang diakui oleh BPJPH.</p>

            <div class="md:w-[80%] mx-auto md:my-16 mt-10 bg-gray-100 rounded-lg p-10">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center p-6 bg-white rounded-lg shadow-md">
                        <div class="text-darkteal text-4xl font-bold mb-2">500+</div>
                        <div class="text-darkgreen">Produk Tersertifikasi</div>
                    </div>
                    <div class="text-center p-6 bg-white rounded-lg shadow-md">
                        <div class="text-darkteal text-4xl font-bold mb-2">200+</div>
                        <div class="text-darkgreen">Mitra Pelaku Usaha</div>
                    </div>
                    <div class="text-center p-6 bg-white rounded-lg shadow-md">
                        <div class="text-darkteal text-4xl font-bold mb-2">15+</div>
                        <div class="text-darkgreen">Auditor Berpengalaman</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA Buttons --}}
        <section class="p-5">
            <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-8">
                <a href="{{ route('form-request-demo') }}"
                    class="flex justify-center items-center p-3 bg-darkteal md:w-[235px] text-white font-semibold rounded-md mb-5 hover:bg-opacity-90">
                    Ajukan Sertifikasi
                </a>

                <a href="{{ route('whatsapp') }}"
                    class="flex justify-center items-center p-3 bg-darkteal md:w-[235px] text-white font-semibold rounded-md mb-5 hover:bg-opacity-90">
                    Hubungi Kami
                </a>
            </div>
        </section>
    </section>

    {{-- Layanan Section --}}
    <section class="container mx-auto">
        <div class="md:w-5/6 bg-gray-100 mx-auto rounded-xl pt-10 pb-20">
            <div class="md:text-3xl text-xl text-center text-darkteal font-semibold mx-auto p-5">
                <h1>Layanan Kami <br>
                    <b>LPH Doa Bangsa</b> Sukabumi
                </h1>
            </div>

            <div class="grid md:grid-cols-2 gap-8 p-8">
                {{-- Sertifikasi Halal --}}
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-darkteal text-xl font-bold mb-3">Sertifikasi Halal</h3>
                    <p class="text-deepturqoise">Kami membantu pelaku usaha mendapatkan sertifikat halal yang diakui oleh BPJPH untuk berbagai jenis produk makanan, minuman, kosmetik, dan obat-obatan.</p>
                    <a href="{{ route('klinik') }}" class="inline-block mt-4 text-darkteal font-semibold hover:underline">Selengkapnya →</a>
                </div>

                {{-- Audit Halal --}}
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-darkteal text-xl font-bold mb-3">Audit Halal</h3>
                    <p class="text-deepturqoise">Layanan audit komprehensif untuk memastikan proses produksi Anda memenuhi standar halal yang ditetapkan, dari bahan baku hingga produk jadi.</p>
                    <a href="{{ route('rumah-sakit') }}" class="inline-block mt-4 text-darkteal font-semibold hover:underline">Selengkapnya →</a>
                </div>

                {{-- Konsultasi Halal --}}
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-darkteal text-xl font-bold mb-3">Konsultasi Halal</h3>
                    <p class="text-deepturqoise">Konsultasi ahli untuk membantu Anda memahami persyaratan sertifikasi halal dan mempersiapkan dokumen yang diperlukan dengan tepat.</p>
                    <a href="{{ route('apotek') }}" class="inline-block mt-4 text-darkteal font-semibold hover:underline">Selengkapnya →</a>
                </div>

                {{-- Pelatihan Halal --}}
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-darkteal text-xl font-bold mb-3">Pelatihan Halal</h3>
                    <p class="text-deepturqoise">Program pelatihan untuk tim internal Anda agar memahami sistem jaminan halal dan dapat mengelola proses sertifikasi dengan efektif.</p>
                    <a href="{{ route('laboratorium') }}" class="inline-block mt-4 text-darkteal font-semibold hover:underline">Selengkapnya →</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Proses Sertifikasi Section --}}
    <section class="container mx-auto my-20 p-5">
        <div class="md:w-5/6 mx-auto">
            <h2 class="md:text-3xl text-2xl text-center text-darkteal font-bold mb-10">Proses Sertifikasi Halal</h2>

            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="bg-darkteal text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                    <h4 class="font-bold text-darkgreen mb-2">Pendaftaran</h4>
                    <p class="text-sm text-deepturqoise">Daftar melalui SIHALAL dan lengkapi dokumen persyaratan</p>
                </div>

                <div class="text-center">
                    <div class="bg-darkteal text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                    <h4 class="font-bold text-darkgreen mb-2">Pemeriksaan Dokumen</h4>
                    <p class="text-sm text-deepturqoise">Tim kami memeriksa kelengkapan dan kesesuaian dokumen Anda</p>
                </div>

                <div class="text-center">
                    <div class="bg-darkteal text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                    <h4 class="font-bold text-darkgreen mb-2">Audit Lapangan</h4>
                    <p class="text-sm text-deepturqoise">Auditor melakukan pemeriksaan langsung ke lokasi produksi</p>
                </div>

                <div class="text-center">
                    <div class="bg-darkteal text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                    <h4 class="font-bold text-darkgreen mb-2">Sertifikat Halal</h4>
                    <p class="text-sm text-deepturqoise">Dapatkan sertifikat halal resmi dari BPJPH</p>
                </div>
            </div>
        </div>
    </section>

    <hr class="w-3/5 mx-auto">

    {{-- Keunggulan Section --}}
    <section class="container mx-auto my-20 p-5">
        <div class="md:w-5/6 mx-auto">
            <h2 class="md:text-3xl text-2xl text-center text-darkteal font-bold mb-10">Mengapa Memilih LPH Doa Bangsa?</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-darkteal text-5xl mb-4">✓</div>
                    <h4 class="font-bold text-darkgreen mb-2">Terdaftar Resmi BPJPH</h4>
                    <p class="text-deepturqoise">Lembaga pemeriksa halal yang telah terdaftar dan diakui oleh Badan Penyelenggara Jaminan Produk Halal</p>
                </div>

                <div class="text-center">
                    <div class="text-darkteal text-5xl mb-4">✓</div>
                    <h4 class="font-bold text-darkgreen mb-2">Auditor Berpengalaman</h4>
                    <p class="text-deepturqoise">Tim auditor profesional dan berpengalaman yang memahami berbagai jenis industri</p>
                </div>

                <div class="text-center">
                    <div class="text-darkteal text-5xl mb-4">✓</div>
                    <h4 class="font-bold text-darkgreen mb-2">Proses Cepat & Mudah</h4>
                    <p class="text-deepturqoise">Pendampingan penuh dari awal hingga sertifikat halal Anda terbit</p>
                </div>
            </div>
        </div>
    </section>

    <hr class="w-3/5 mx-auto">

    {{-- FAQ Section --}}
    <section class="container mx-auto my-20 p-5">
        <div class="md:w-5/6 mx-auto">
            <div class="flex flex-col md:flex-row gap-x-40 gap-y-10">
                <div class="md:w-1/3 text-darkgreen">
                    <h1 class="text-2xl font-bold">F&Q</h1>
                    <p class="my-8">Beberapa pertanyaan yang sering diajukan kepada Kami mengenai sertifikasi halal.
                        <br><br>
                        Anda juga dapat menghubungi Kami jika memiliki pertanyaan lain.
                    </p>
                    <a role="button" href="{{ route('whatsapp') }}">
                        <div
                            class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md hover:bg-opacity-90">
                            Hubungi Kami
                        </div>
                    </a>
                </div>

                <div class="md:w-[700px]">
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500  focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 rounded-t-xl gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span>Apa saja syarat untuk mengajukan sertifikasi halal?</span>
                                <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden transition duration-1000"
                            aria-labelledby="accordion-collapse-heading-1" style="background-color: #166F6110;">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <p class="mb-2 text-deepturqoise">
                                    Pelaku usaha perlu menyiapkan dokumen seperti NIB, daftar produk, daftar bahan, dan Manual Sistem Jaminan Halal. Kami akan membantu Anda dalam melengkapi semua persyaratan.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Berapa lama proses sertifikasi halal?</span>
                                <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden transition duration-1000"
                            aria-labelledby="accordion-collapse-heading-2" style="background-color: #166F6110;">
                            <div class="p-5 border border-b-0 border-gray-200 ">
                                <p class="mb-2 text-deepturqoise">
                                    Proses sertifikasi halal biasanya memakan waktu 1-3 bulan tergantung kelengkapan dokumen dan hasil audit. Kami akan mendampingi Anda di setiap tahap prosesnya.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span>Berapa biaya untuk sertifikasi halal?</span>
                                <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden transition duration-1000"
                            aria-labelledby="accordion-collapse-heading-3" style="background-color: #166F6110;">
                            <div class="p-5 border border-b-0 border-gray-200 ">
                                <p class="mb-2 text-deepturqoise">
                                    Biaya sertifikasi bervariasi tergantung jenis dan jumlah produk yang akan disertifikasi. Silakan hubungi kami untuk mendapatkan penawaran yang sesuai dengan kebutuhan Anda.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                aria-controls="accordion-collapse-body-4">
                                <span>Apakah sertifikat halal berlaku selamanya?</span>
                                <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden transition duration-1000"
                            aria-labelledby="accordion-collapse-heading-4" style="background-color: #166F6110;">
                            <div class="p-5 border border-b-0 border-gray-200 ">
                                <p class="mb-2 text-deepturqoise">
                                    Sertifikat halal berlaku selama 4 tahun dan dapat diperpanjang. Kami akan membantu Anda dalam proses perpanjangan sertifikat halal Anda.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-5">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                aria-controls="accordion-collapse-body-5">
                                <span>Produk apa saja yang bisa disertifikasi halal?</span>
                                <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden transition duration-1000"
                            aria-labelledby="accordion-collapse-heading-5" style="background-color: #166F6110;">
                            <div class="p-5 border border-gray-200 ">
                                <p class="mb-2 text-deepturqoise">
                                    Berbagai jenis produk dapat disertifikasi halal, termasuk makanan, minuman, kosmetik, obat-obatan, dan produk lainnya yang beredar di Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="container my-20 mx-auto">
        <div class="md:w-5/6 mx-auto bg-darkteal rounded-xl p-10 text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Siap Mendapatkan Sertifikat Halal?</h2>
            <p class="mb-6">Hubungi kami sekarang untuk konsultasi gratis dan mulai proses sertifikasi halal Anda</p>
            <div class="flex md:flex-row flex-col justify-center gap-4">
                <a href="{{ route('form-request-demo') }}" class="bg-white text-darkteal px-8 py-3 rounded-md font-semibold hover:bg-opacity-90">
                    Ajukan Sertifikasi
                </a>
                <a href="{{ route('whatsapp') }}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-md font-semibold hover:bg-white hover:text-darkteal">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>
@endsection
