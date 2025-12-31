@extends('layout.app')

@section('content')
{{-- Section1 --}}
<section class="container my-10 mx-auto" data-aos="fade-down" data-aos-duration="1000">
<div class="text-center text-darkteal font-semibold p-5">
<h1 class="md:w-[400px] md:text-4xl text-2xl mx-auto mb-3">LPH Doa Bangsa Sukabumi: Partner Terpercaya Sertifikasi Halal Anda
</h1>
<p class="md:w-2/5 text-darkgreen mx-auto">Lembaga Pemeriksa Halal yang telah terdaftar dan diakui oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Kami berkomitmen membantu pelaku usaha mendapatkan sertifikasi halal yang sah dan terpercaya.</p>
<video class="md:w-[80%] mx-auto md:my-16 mt-10 rounded-lg video-hidden-controls" autoplay muted controls loop>
<source src="video/home-health.mp4" type="video/mp4" alt="Proses Sertifikasi Halal" title="LPH Doa Bangsa Sukabumi - Proses Sertifikasi Halal">
Your browser does not support the video tag.
</video>
</div>
{{-- Info --}}
        <section class="p-5">
            <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-8">

                {{-- Tombol 1: Jadwalkan Demo --}}
                <a href="{{ route('form-request-demo') }}"
                    class="flex justify-center items-center p-3 bg-darkteal md:w-[235px] text-white font-semibold rounded-md mb-5">
                    <img class="mr-3" src="img/demo.webp" width="25" alt="Demo">
                    Jadwalkan Konsultasi
                </a>

                {{-- Tombol 2: Hubungi Sales --}}
                <a href="/whatsapp"
                    class="flex justify-center items-center p-3 bg-darkteal md:w-[235px] text-white font-semibold rounded-md mb-5">
                    <img class="mr-3" src="img/whatsappicon.webp" width="25" alt="Whatsapp">
                    Hubungi Tim Halal
                </a>

            </div>
        </section>

    {{-- End Info --}}
    <div class="flex flex-col md:flex-row justify-center items-center gap-12 my-16 p-8">
        <!-- Card 1 -->
        <div class="flex items-center justify-center gap-6 flex-1 max-w-lg">
            <img src="img/halal-certified-icon.png" class="w-24 md:w-28" alt="Sertifikasi Halal">
            <div class="text-left">
                <h1 class="text-deepturqoise font-bold md:text-4xl text-2xl leading-snug">
                    Sertifikasi Halal <br> Resmi BPJPH
                </h1>
                <div
                    class="text-white mt-3 w-fit bg-turqoise px-4 py-2 rounded-md transition-transform transform hover:scale-105">
                    <a href="/sertifikasi">Pelajari Prosesnya</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="flex items-center justify-center gap-6 flex-1 max-w-lg">
            <img src="img/audit-icon.png" class="w-24 md:w-28" alt="Audit Halal">
            <div class="text-left">
                <h1 class="text-deepturqoise font-bold md:text-4xl text-2xl leading-snug">
                    Pemeriksaan & Audit
                </h1>
                <div
                    class="text-white mt-3 w-fit bg-turqoise px-4 py-2 rounded-md transition-transform transform hover:scale-105">
                    <a href="/audit">Lihat Standar Kami</a>
                </div>
            </div>
        </div>
    </div>

</section>

    <style>
        .video-hidden-controls::-webkit-media-controls {
            display: none !important;
        }

        .video-hidden-controls::-moz-media-controls {
            display: none !important;
        }
    </style>
    {{-- End Section1 --}}

 {{-- Section2 --}}
<section class="container mx-auto">
    <div class="md:w-5/6 bg-gray-100 mx-auto rounded-xl pt-10 pb-20">
        <div class="md:text-3xl text-xl text-center text-darkteal font-semibold mx-auto p-5">
            <h1>Fokus pada yang terpenting <br>
                <b>LPH Doa Bangsa Sukabumi</b> yang menyediakan Layanan
            </h1>
        </div>
        <div
            class="flex flex-col min-[1300px]:flex-row mx-auto min-[1300px]:text-end items-center justify-end gap-x-7 p-5">
            <div class="min-[1300px]:w-1/4 mt-10 order-2 min-[1300px]:order-1 text-deepturqoise">
                <p>
                    LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang telah terdaftar dan diakui secara resmi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Kami memberikan layanan pemeriksaan dan sertifikasi halal untuk berbagai jenis produk.
                    <br><br>
                    Layanan kami mencakup pemeriksaan bahan baku, proses produksi, hingga penerbitan sertifikat halal. Dengan tim auditor yang kompeten dan berpengalaman, kami memastikan setiap proses pemeriksaan dilakukan sesuai dengan standar yang ditetapkan oleh BPJPH.
                </p>
                <!-- Modal toggle -->
                <button data-modal-target="static-modal" data-modal-toggle="static-modal" aria-label="Modal"
                    class="rounded-lg p-1 mt-2 text-darkgreen transition-transform transform hover:scale-110"
                    type="button">
                    <svg class="w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentcolor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <img src="img/halal-certification-process.png" width="100%" class="order-1 min-[1300px]:order-2 md:w-[65%]" alt="Proses Sertifikasi Halal">
        </div>
    </div>

    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-darkgreen">
                    <h3 class="text-xl font-semibold text-white">
                        LAYANAN LPH DOA BANGSA SUKABUMI
                    </h3>
                    <button type="button"
                        class="text-white bg-transparent hover:bg-gray-200 hover:text-darkgreen rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500">
                        LPH Doa Bangsa Sukabumi menyediakan layanan pemeriksaan dan sertifikasi halal yang komprehensif untuk membantu pelaku usaha memenuhi kewajiban sertifikasi halal sesuai dengan peraturan perundang-undangan yang berlaku.
                        <br><br>
                        Sebagai Lembaga Pemeriksa Halal yang terdaftar resmi di BPJPH, kami memiliki kewenangan untuk melakukan pemeriksaan dan audit halal terhadap produk makanan, minuman, obat-obatan, kosmetik, dan produk lainnya yang memerlukan sertifikasi halal.
                        <br><br>
                        Proses pemeriksaan yang kami lakukan mencakup pemeriksaan dokumen, audit lapangan, pemeriksaan bahan baku, proses produksi, hingga sistem penyimpanan dan distribusi. Tim auditor kami yang berpengalaman akan memastikan bahwa seluruh proses produksi telah memenuhi kriteria halal sesuai dengan standar yang ditetapkan.
                        <br><br>
                        Selain layanan sertifikasi, kami juga memberikan konsultasi terkait persiapan sertifikasi halal, pelatihan bagi tim internal perusahaan, dan pendampingan selama proses sertifikasi berlangsung. Kami memahami bahwa setiap usaha memiliki karakteristik yang berbeda, oleh karena itu kami memberikan layanan yang disesuaikan dengan kebutuhan spesifik masing-masing klien.
                        <br><br>
                        Dengan menggunakan jasa LPH Doa Bangsa Sukabumi, pelaku usaha dapat memastikan bahwa produk mereka telah memenuhi standar halal yang berlaku secara nasional. Sertifikat halal yang kami terbitkan diakui secara resmi oleh BPJPH dan dapat digunakan untuk meningkatkan kepercayaan konsumen terhadap produk yang dihasilkan.
                    </p>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="static-modal" type="button"
                        class="text-white bg-darkgreen font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Section2 --}}

{{-- Section3 --}}
<section class="container mx-auto my-20">
    <div class="md:w-5/6 mb-4 mx-auto">
        <ul class="flex flex-wrap justify-center -mb-px text-lg font-medium text-center" id="default-tab"
            data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button
                    class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 rounded-s-lg"
                    id="makanan-tab" data-tabs-target="#makanan" type="button" role="tab"
                    aria-controls="makanan" aria-selected="false">Makanan</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 md:rounded-none rounded-lg"
                    id="minuman-tab" data-tabs-target="#minuman" type="button" role="tab" aria-controls="minuman"
                    aria-selected="false">Minuman</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 md:rounded-none rounded-lg"
                    id="kosmetik-tab" data-tabs-target="#kosmetik" type="button" role="tab"
                    aria-controls="kosmetik" aria-selected="false">Kosmetik</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 md:rounded-none rounded-lg"
                    id="obat-tab" data-tabs-target="#obat" type="button" role="tab"
                    aria-controls="obat" aria-selected="false">Obat-obatan</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 md:rounded-none rounded-lg"
                    id="bahan-tab" data-tabs-target="#bahan" type="button" role="tab"
                    aria-controls="bahan" aria-selected="false">Bahan Baku</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white border-gray-200 rounded-e-lg"
                    id="jasa-tab" data-tabs-target="#jasa" type="button" role="tab"
                    aria-controls="jasa" aria-selected="false">Jasa</button>
            </li>
        </ul>
    </div>
    <div class="md:w-5/6 mx-auto" id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50" id="makanan" role="tabpanel" aria-labelledby="makanan-tab">
            <div class="flex flex-col md:flex-row justify-center items-center gap-10">
                <div class="md:w-[50%]">
                    <img src="img/halal-food.png" alt="Sertifikasi Makanan Halal">
                </div>
                <div class="md:w-[320px] text-deepturqoise">
                    <h1 class="text-lg text-darkgreen font-bold">Sertifikasi Makanan Halal</h1>
                    <p class="my-5">Kami membantu produsen makanan mendapatkan sertifikat halal resmi dari BPJPH. Pemeriksaan menyeluruh dari bahan baku hingga proses produksi.</p>
                    <div>
                        <h1 class="text-lg text-darkgreen font-bold">Layanan yang diberikan</h1>
                        <ul class="mt-5 list-image-check list-inside">
                            <li>Pemeriksaan bahan baku</li>
                            <li>Audit proses produksi</li>
                            <li>Pemeriksaan fasilitas penyimpanan</li>
                            <li>Verifikasi kemasan dan labeling</li>
                            <li>Penerbitan sertifikat halal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50" id="minuman" role="tabpanel" aria-labelledby="minuman-tab">
            <div class="flex flex-col md:flex-row justify-center gap-10">
                <div class="md:w-[50%]">
                    <img src="img/halal-beverage.webp" alt="Sertifikasi Minuman Halal">
                </div>
                <div class="md:w-[400px] text-deepturqoise">
                    <h1 class="text-lg text-darkgreen font-bold">Sertifikasi Minuman Halal</h1>
                    <p class="my-5">Layanan sertifikasi halal untuk berbagai jenis minuman, termasuk minuman kemasan, sirup, susu, dan produk minuman lainnya.</p>
                    <div class="mb-5">
                        <h1 class="text-lg text-darkgreen font-bold">Layanan yang diberikan</h1>
                        <ul class="mt-5 list-image-check list-inside">
                            <li>Analisis kandungan bahan</li>
                            <li>Pemeriksaan proses pengolahan</li>
                            <li>Verifikasi bahan tambahan</li>
                            <li>Audit rantai pasok</li>
                            <li>Sertifikasi halal BPJPH</li>
                            <li>Konsultasi pra-sertifikasi</li>
                        </ul>
                    </div>
                    <span>Kami membantu memastikan produk minuman Anda memenuhi standar halal nasional.</span>
                    <div
                        class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                        <a href="{{ route('kontak') }}">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50" id="kosmetik" role="tabpanel"
            aria-labelledby="kosmetik-tab">
            <div class="flex flex-col md:flex-row justify-center gap-10">
                <div class="md:w-[50%]">
                    <img src="img/halal-cosmetics.webp" alt="Sertifikasi Kosmetik Halal">
                </div>
                <div class="md:w-[400px] text-deepturqoise">
                    <h1 class="text-lg text-darkgreen font-bold">Sertifikasi Kosmetik Halal</h1>
                    <p class="my-5">Kami memberikan layanan sertifikasi halal untuk produk kosmetik dan kecantikan sesuai dengan standar yang ditetapkan BPJPH.</p>
                    <div class="mb-5">
                        <h1 class="text-lg text-darkgreen font-bold">Layanan yang diberikan</h1>
                        <ul class="mt-5 list-image-check list-inside">
                            <li>Pemeriksaan bahan aktif</li>
                            <li>Analisis bahan turunan hewan</li>
                            <li>Audit proses manufaktur</li>
                            <li>Verifikasi bahan pembawa</li>
                            <li>Sertifikasi produk akhir</li>
                        </ul>
                    </div>
                    <span>Produk kosmetik halal semakin diminati pasar. Sertifikat halal meningkatkan kepercayaan konsumen.</span>
                    <div
                        class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                        <a href="{{ route('kontak') }}">Mulai Sertifikasi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50" id="obat" role="tabpanel"
            aria-labelledby="obat-tab">
            <div class="flex flex-col md:flex-row justify-center gap-10">
                <div class="md:w-[50%]">
                    <img src="img/halal-medicine.webp" alt="Sertifikasi Obat-obatan Halal">
                </div>
                <div class="md:w-[400px] text-deepturqoise">
                    <h1 class="text-lg text-darkgreen font-bold">Sertifikasi Obat-obatan Halal</h1>
                    <p class="my-5">Layanan sertifikasi halal untuk produk farmasi, suplemen, dan obat tradisional sesuai dengan regulasi yang berlaku.</p>
                    <div class="mb-5">
                        <h1 class="text-lg text-darkgreen font-bold">Layanan yang diberikan</h1>
                        <ul class="mt-5 list-image-check list-inside">
                            <li>Analisis bahan farmasi</li>
                            <li>Pemeriksaan bahan baku obat</li>
                            <li>Audit proses produksi</li>
                            <li>Verifikasi kapsul dan pembawa</li>
                            <li>Sertifikasi halal obat</li>
                            <li>Pendampingan regulasi</li>
                        </ul>
                    </div>
                    <span>Kami memahami kompleksitas sertifikasi produk farmasi dan siap membantu prosesnya.</span>
                    <div
                        class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                        <a href="{{ route('kontak') }}">Konsultasi Spesifik</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50" id="bahan" role="tabpanel" aria-labelledby="bahan-tab">
            <div class="flex flex-col md:flex-row justify-center gap-10">
                <div class="md:w-[50%]">
                    <img src="img/halal-raw-material.webp" alt="Sertifikasi Bahan Baku Halal">
                </div>
                <div class="md:w-[400px] text-deepturqoise">
                    <h1 class="text-lg text-darkgreen font-bold">Sertifikasi Bahan Baku Halal</h1>
                    <p class="my-5">Kami membantu produsen bahan baku mendapatkan sertifikasi halal untuk meningkatkan nilai jual dan kepercayaan mitra bisnis.</p>
                    <div class="mb-5">
                        <h1 class="text-lg text-darkgreen font-bold">Layanan yang diberikan</h1>
                        <ul class="mt-5 list-image-check list-inside">
                            <li>Sertifikasi bahan kimia</li>
                            <li>Sertifikasi bahan alami</li>
                            <li>Sertifikasi enzim dan mikroba</li>
                            <li>Sertifikasi bahan tambahan</li>
                            <li>Verifikasi rantai pasok</li>
                        </ul>
                    </div>
                    <span>Bahan baku bersertifikat halal menjadi nilai tambah dalam industri yang semakin kompetitif.</span>
                    <div
                        class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                        <a href="{{ route('harga') }}">Lihat Biaya Sertifikasi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50" id="jasa" role="tabpanel"
            aria-labelledby="jasa-tab">
            <div class="flex flex-col md:flex-row justify-center gap-10">
                <div class="md:w-[50%]">
                    <img src="img/halal-service.webp" alt="Sertifikasi Jasa Halal">
                </div>
                <div class="md:w-[400px] text-deepturqoise">
                    <h1 class="text-lg text-darkgreen font-bold">Sertifikasi Jasa Halal</h1>
                    <p class="my-5">Layanan sertifikasi untuk jasa penyedia makanan, catering, restoran, rumah potong hewan, dan jasa lainnya yang berkaitan dengan produk halal.</p>
                    <div class="mb-5">
                        <h1 class="text-lg text-darkgreen font-bold">Layanan yang diberikan</h1>
                        <ul class="mt-5 list-image-check list-inside">
                            <li>Sertifikasi rumah makan</li>
                            <li>Sertifikasi catering</li>
                            <li>Sertifikasi rumah potong</li>
                            <li>Sertifikasi jasa pengolahan</li>
                            <li>Audit sistem jasa</li>
                            <li>Pelatihan staf</li>
                        </ul>
                    </div>
                    <span>Sertifikasi jasa halal meningkatkan kepercayaan pelanggan dan membuka pasar yang lebih luas.</span>
                    <div
                        class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                        <a href="{{ route('harga') }}">Informasi Lengkap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="w-3/5 mx-auto">
{{-- End Section3 --}}

 
{{-- Section4 --}}
<section class="container mx-auto p-5 mt-20">
    <div
        class="md:w-5/6 mx-auto flex flex-col md:flex-row justify-center gap-10 md:gap-x-32 md:text-3xl text-lg bg-darkteal text-white font-bold md:p-20 p-10 rounded-xl">
        <div class="flex gap-5 items-center">
            <img src="img/bpjph-certified.svg" width="60" class="md:w-[120px]" alt="BPJPH Certified">
            <h1>TERDAFTAR <br> BPJPH</h1>
        </div>
        <div class="flex gap-5 items-center">
            <img src="img/expert-auditor.svg" width="60" class="md:w-[120px]" alt="Expert Auditor">
            <h1>AUDITOR <br> BERKOMPETEN</h1>
        </div>
        <div class="flex gap-5 items-center">
            <img src="img/fast-process.svg" width="60" class="md:w-[120px]" alt="Fast Process">
            <h1>PROSES <br> CEPAT</h1>
        </div>
    </div>

    <div class="md:w-5/6 mx-auto text-deepturqoise my-20">
        <h1 class="font-bold mb-2">
            Mengapa Memilih <br>
            LPH Doa Bangsa Sukabumi?
        </h1>
        <p class="text-justify">
            Sebagai Lembaga Pemeriksa Halal yang terdaftar resmi di BPJPH, kami memiliki kredibilitas dan legalitas yang kuat dalam menerbitkan sertifikat halal. Setiap sertifikat yang kami keluarkan diakui secara nasional dan dapat digunakan untuk berbagai keperluan bisnis.
            <br><br>
            Tim auditor kami terdiri dari profesional yang berpengalaman dan memiliki kompetensi di bidang pemeriksaan halal. Mereka memahami secara mendalam regulasi dan standar halal yang berlaku, serta memiliki kemampuan teknis untuk melakukan audit yang komprehensif.
            <br><br>
            Kami memahami bahwa waktu adalah hal yang berharga bagi pelaku usaha. Oleh karena itu, kami mengoptimalkan proses pemeriksaan tanpa mengorbankan kualitas. Proses yang efisien memungkinkan Anda mendapatkan sertifikat halal dalam waktu yang relatif cepat.
            <br><br>
            Selain layanan sertifikasi, kami juga memberikan pendampingan dan konsultasi kepada klien. Kami membantu Anda memahami persyaratan sertifikasi, mempersiapkan dokumen yang diperlukan, dan memberikan rekomendasi untuk perbaikan sistem jika diperlukan.
            <br><br>
            Kami berkomitmen untuk memberikan layanan yang transparan, profesional, dan berorientasi pada kepuasan klien. Setiap langkah dalam proses sertifikasi dijelaskan dengan jelas, dan kami siap menjawab pertanyaan serta memberikan solusi atas kendala yang mungkin dihadapi.
        </p>
    </div>
</section>
<hr class="w-3/5 mx-auto">
{{-- End Section4 --}}

{{-- Section5 --}}
<section class="container mx-auto my-20 p-5">
    <div class="md:w-5/6 mx-auto">
        <div class="flex flex-col md:flex-row gap-x-40 gap-y-10">
            <div class="md:w-1/3 text-darkgreen">
                <h1 class="text-2xl font-bold">F&Q</h1>
                <img src="img/f&qimage.webp" alt="f&q" width="80">
                <p class="my-8">Beberapa pertanyaan yang sering diajukan kepada Kami, untuk membantu Anda berikut
                    Kami rangkumkan
                    dalam bentuk F&Q.
                    <br><br>
                    Anda juga dapat menghubungi Kami lewat pesan berikut apabila Anda tidak menemukan jawaban.
                </p>
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md">
                        <img class="mr-3" src="img/whatsappicon.webp" width="25" alt="Whatsapp">
                        <a href="/whatsapp">Hubungi Kami</a>
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
                            <span>Apa itu LPH Doa Bangsa Sukabumi?</span>
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
                                LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang telah terdaftar dan diakui secara resmi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Kami berwenang melakukan pemeriksaan dan audit halal untuk berbagai jenis produk.</p>
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
                                Proses sertifikasi halal umumnya memerlukan waktu 30-60 hari kerja, tergantung pada kompleksitas produk, kelengkapan dokumen, dan kesiapan fasilitas produksi. Kami berusaha memproses secepat mungkin tanpa mengorbankan kualitas pemeriksaan.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                            aria-controls="accordion-collapse-body-3">
                            <span>Dokumen apa saja yang diperlukan untuk sertifikasi halal?</span>
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
                                Dokumen yang diperlukan antara lain: akta perusahaan, SIUP, NIB, daftar produk, spesifikasi bahan baku, diagram alir proses, sertifikat halal bahan baku (jika ada), dan dokumen pendukung lainnya. Tim kami akan memberikan checklist lengkap sesuai dengan jenis produk Anda.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                            data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                            aria-controls="accordion-collapse-body-4">
                            <span>Apakah sertifikat halal dari LPH Doa Bangsa Sukabumi diakui secara nasional?</span>
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
                                Ya, sertifikat halal yang kami terbitkan diakui secara resmi oleh BPJPH dan berlaku di seluruh wilayah Indonesia. Sertifikat tersebut dapat digunakan untuk keperluan perdagangan, ekspor, dan pemenuhan regulasi lainnya.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-5">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                            data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                            aria-controls="accordion-collapse-body-5">
                            <span>Berapa biaya sertifikasi halal?</span>
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
                        <div class="p-5 border border-b-0 border-gray-200 ">
                            <p class="mb-2 text-deepturqoise">
                                Biaya sertifikasi bervariasi tergantung pada jenis produk, jumlah varian, kompleksitas proses, dan lokasi fasilitas. Kami memberikan penawaran yang transparan setelah melakukan assessment awal. Silakan hubungi kami untuk konsultasi dan penawaran yang disesuaikan dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-6">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                            data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                            aria-controls="accordion-collapse-body-6">
                            <span>Apakah LPH Doa Bangsa Sukabumi melayani sertifikasi untuk UKM?</span>
                            <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-6" class="hidden transition duration-1000"
                        aria-labelledby="accordion-collapse-heading-6" style="background-color: #166F6110;">
                        <div class="p-5 border border-b-0 border-gray-200 ">
                            <p class="mb-2 text-deepturqoise">
                                Tentu saja. Kami memberikan layanan sertifikasi halal untuk semua skala usaha, dari UKM hingga perusahaan besar. Untuk UKM, kami memberikan pendampingan khusus dan solusi yang sesuai dengan kapasitas usaha.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-7">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                            data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                            aria-controls="accordion-collapse-body-7">
                            <span>Bagaimana jika produk saya menggunakan bahan impor?</span>
                            <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-7" class="hidden transition duration-1000"
                        aria-labelledby="accordion-collapse-heading-7" style="background-color: #166F6110;">
                        <div class="p-5 border border-b-0 border-gray-200 ">
                            <p class="mb-2 text-deepturqoise">
                                Kami tetap dapat melakukan sertifikasi untuk produk yang menggunakan bahan impor. Yang penting adalah tersedia dokumen yang menunjukkan kehalalan bahan impor tersebut, seperti sertifikat halal dari lembaga yang diakui atau dokumen lain yang dapat dipertanggungjawabkan.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-8">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                            data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                            aria-controls="accordion-collapse-body-8">
                            <span>Apakah ada pelatihan yang disediakan untuk tim internal perusahaan?</span>
                            <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-8" class="hidden transition duration-1000"
                        aria-labelledby="accordion-collapse-heading-8" style="background-color: #166F6110;">
                        <div class="p-5 border border-b-0 border-gray-200 ">
                            <p class="mb-2 text-deepturqoise">
                                Ya, kami menyediakan pelatihan dan workshop tentang sistem jaminan halal, persiapan sertifikasi, dan pemahaman regulasi halal. Pelatihan dapat disesuaikan dengan kebutuhan spesifik perusahaan Anda.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-9">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                            data-accordion-target="#accordion-collapse-body-9" aria-expanded="false"
                            aria-controls="accordion-collapse-body-9">
                            <span>Berapa lama masa berlaku sertifikat halal?</span>
                            <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-9" class="hidden transition duration-1000"
                        aria-labelledby="accordion-collapse-heading-9" style="background-color: #166F6110;">
                        <div class="p-5 border border-b-0 border-gray-200 ">
                            <p class="mb-2 text-deepturqoise">
                                Sertifikat halal umumnya berlaku selama 4 (empat) tahun. Namun, terdapat kewajiban untuk melakukan surveilan tahunan untuk memastikan konsistensi penerapan sistem jaminan halal. Kami akan mengingatkan Anda ketika mendekati masa perpanjangan sertifikat.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-10">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-gray-200 gap-3"
                            data-accordion-target="#accordion-collapse-body-10" aria-expanded="false"
                            aria-controls="accordion-collapse-body-10">
                            <span>Bagaimana cara memulai proses sertifikasi dengan LPH Doa Bangsa Sukabumi?</span>
                            <svg data-accordion-icon class="w-3 h-3 transition duration-500 rotate-180 shrink-0"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-10" class="hidden transition duration-1000"
                        aria-labelledby="accordion-collapse-heading-10" style="background-color: #166F6110;">
                        <div class="p-5 border border-gray-200 ">
                            <p class="mb-2 text-deepturqoise">
                                Anda dapat menghubungi kami melalui WhatsApp, telepon, atau mengisi form konsultasi di website kami. Tim kami akan menjadwalkan pertemuan awal untuk memahami kebutuhan Anda, memberikan penjelasan proses, dan menyusun rencana sertifikasi yang sesuai dengan kondisi usaha Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Section5 --}}
{{-- Section6 --}}
<section class="container my-20 mx-auto">
    <hr class="w-5/6 mx-auto">
    <div class="text-darkgreen text-center p-5 my-20">
        <h1 class="md:text-3xl text-2xl font-bold mb-2">TERDAFTAR RESMI <br>
            BADAN PENYELENGGARA JAMINAN PRODUK HALAL</h1>
        <a href="https://bpjph.halal.go.id">
            <img src="img/bpjph-logo.webp" alt="BPJPH Logo"
                class="md:w-[7%] w-36 mx-auto mb-3 mt-5 transition-transform transform duration-500 hover:scale-110">
        </a>
        <p>LPH Doa Bangsa Sukabumi merupakan Lembaga Pemeriksa Halal yang telah <br> terdaftar dan diakui secara resmi oleh Badan Penyelenggara Jaminan Produk Halal Republik Indonesia</p>
    </div>
</section>
{{-- End Section6 --}}
@endsection
