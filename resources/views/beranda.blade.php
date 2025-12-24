@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container my-10 mx-auto" data-aos="fade-down" data-aos-duration="1000">
        <div class="text-center text-darkteal font-semibold p-5">
            <h1 class="md:w-[400px] md:text-4xl text-2xl mx-auto mb-3">Platform SIMRS untuk Mengoptimalkan Operasional FASKES
            </h1>
            <p class="md:w-2/5 text-darkgreen mx-auto">Kami membangun fitur sesuai dengan kebutuhan Faskes. Kami memulainya
                dengan mendengarkan apa yang Anda
                butuhkan, lalu mewujudkannya dalam bentuk sistem.</p>
            <video class="md:w-[80%] mx-auto md:my-16 mt-10 rounded-lg video-hidden-controls" autoplay muted controls loop>
                <source src="video/home-health.mp4" type="video/mp4" alt="Software Rumah Sakit"
                    title="Aplikasi SIMRS: Transformasi Digital dalam Manajemen Rumah Sakit">
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
                    Jadwalkan Demo
                </a>

                {{-- Tombol 2: Hubungi Sales --}}
                <a href="/whatsapp"
                    class="flex justify-center items-center p-3 bg-darkteal md:w-[235px] text-white font-semibold rounded-md mb-5">
                    <img class="mr-3" src="img/whatsappicon.webp" width="25" alt="Whatsapp">
                    Hubungi Sales
                </a>

            </div>
        </section>

        {{-- End Info --}}
        <div class="flex flex-col md:flex-row justify-center items-center gap-12 my-16 p-8">
            <!-- Card 1 -->
            <div class="flex items-center justify-center gap-6 flex-1 max-w-lg">
                <img src="img/ai-icon.png" class="w-24 md:w-28" alt="">
                <div class="text-left">
                    <h1 class="text-deepturqoise font-bold md:text-4xl text-2xl leading-snug">
                        Hadir dengan teknologi <br> Analisa Kesehatan AI
                    </h1>
                    <div
                        class="text-white mt-3 w-fit bg-turqoise px-4 py-2 rounded-md transition-transform transform hover:scale-105">
                        <a href="{{ route('mcu') }}#sectionhealth">Cek selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex items-center justify-center gap-6 flex-1 max-w-lg">
                <img src="img/translate-icon.png" class="w-24 md:w-28" alt="">
                <div class="text-left">
                    <h1 class="text-deepturqoise font-bold md:text-4xl text-2xl leading-snug">
                        Hadir dengan teknologi <br> Multi Bahasa
                    </h1>
                    <div
                        class="text-white mt-3 w-fit bg-turqoise px-4 py-2 rounded-md transition-transform transform hover:scale-105">
                        <a href="{{ route('sectionbahasa') }}">Cek selengkapnya</a>
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
                <h1>Focus bagi yang terpenting <br>
                    <b>SAFFMedic</b> yang menyediakan Sistem
                </h1>
            </div>
            <div
                class="flex flex-col min-[1300px]:flex-row mx-auto min-[1300px]:text-end items-center justify-end gap-x-7 p-5">
                <div class="min-[1300px]:w-1/4 mt-10 order-2 min-[1300px]:order-1 text-deepturqoise">
                    <p>
                        SIMRS SAFFMedic adalah Sistem Informasi Manajemen Rumah Sakit yang terintegrasi di seluruh unit
                        pelayanan,
                        mulai dari front office hingga back office. Sistem ini mencakup layanan pendaftaran, poliklinik,
                        apotek/farmasi, rawat inap, laboratorium, dan kasir.
                        <br><br>
                        Sistem SIMRS SAFFMedic mampu mengotomatisasi, menyederhanakan, dan mengintegrasikan kegiatan
                        operasional
                        yang sebelumnya dilakukan secara manual. Dengan demikian, klinik maupun rumah sakit dapat fokus pada
                        pelayanan kesehatan demi kepuasan pasien.
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
                <img src="img/p-solusi.webp" width="100%" class="order-1 min-[1300px]:order-2 md:w-[65%]" alt="">
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
                            PLATFORM SIMRS
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
                            Platform SIMRS digunakan untuk mengoptimalkan operasional FASKES.
                            <br><br>
                            Platform SIMRS adalah sistem informasi manajemen rumah sakit yang dirancang khusus untuk
                            membantu mengelola data dan proses operasional di fasilitas kesehatan. Dengan menggunakan
                            platform ini, FASKES dapat meningkatkan efisiensi dan efektivitas dalam pengelolaan layanan
                            kesehatan.
                            <br><br>
                            Dalam pengoperasiannya, platform SIMRS memiliki beberapa fitur yang sangat berguna. Pertama,
                            platform ini memungkinkan FASKES untuk mengelola data pasien dengan lebih mudah dan teratur.
                            Semua informasi medis pasien dapat diakses dengan mudah dan aman, mulai dari riwayat medis
                            hingga hasil tes laboratorium.
                            <br><br>
                            Selain itu, platform SIMRS juga memiliki modul untuk mengelola jadwal dan pendaftaran pasien.
                            FASKES dapat mengatur jadwal dokter, memantau jumlah pasien yang datang, dan membuat sistem
                            antrian yang efisien. Dengan demikian, waktu tunggu pasien dapat diminimalisir dan pengalaman
                            mereka dalam mengakses layanan kesehatan menjadi lebih baik.
                            <br><br>
                            Selain itu, platform SIMRS juga dapat membantu FASKES dalam mengelola stok obat dan inventaris
                            fasilitas kesehatan. FASKES dapat melacak persediaan obat yang tersedia, mengatur pembelian
                            suplai baru, dan mengelola distribusi obat yang efisien. Hal ini akan membantu FASKES dalam
                            menghindari kekurangan persediaan obat dan meningkatkan pelayanan pasien.
                            <br><br>
                            Dengan semua fitur dan manfaat yang ditawarkan oleh platform SIMRS, FASKES dapat meningkatkan
                            efektivitas dan efisiensi operasional mereka. Penggunaan platform ini akan membantu FASKES untuk
                            mengelola data dengan lebih baik, meningkatkan pengalaman pasien, dan memastikan ketersediaan
                            stok obat yang memadai. Sebagai hasilnya, FASKES dapat memberikan layanan kesehatan yang lebih
                            baik kepada masyarakat.
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

    {{-- new section 2 --}}
    {{-- <section>
        <div class="md:w-5/6 bg-gray-100 mx-auto rounded-xl pt-10 pb-20">
            <div class="md:text-3xl text-xl text-center text-darkteal font-semibold mx-auto p-5">
                <h1>Focus bagi yang terpenting <br>
                    <b>SAFFMedic</b> yang menyediakan Sistem
                </h1>
            </div>

            <div class="flex flex-col lg:flex-row">
                <div class="order-2 md:order-1 text-deepturqoise">
                    <p>
                        SIMRS SAFFMedic adalah Sistem Informasi Manajemen Rumah Sakit yang terintegrasi di seluruh unit
                        pelayanan,
                        mulai dari front office hingga back office. Sistem ini mencakup layanan pendaftaran, poliklinik,
                        apotek/farmasi, rawat inap, laboratorium, dan kasir.
                        <br><br>
                        Sistem SIMRS SAFFMedic mampu mengotomatisasi, menyederhanakan, dan mengintegrasikan kegiatan
                        operasional
                        yang sebelumnya dilakukan secara manual. Dengan demikian, klinik maupun rumah sakit dapat fokus pada
                        pelayanan kesehatan demi kepuasan pasien.
                    </p>
                    <!-- Modal toggle -->
                    <button data-modal-target="static-modal" data-modal-toggle="static-modal" aria-label="Modal"
                        class="rounded-lg p-1 mt-2 text-darkgreen transition-transform transform hover:scale-110"
                        type="button">
                        <svg class="w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentcolor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <img src="img/p-solusi.webp" width="100%" class="order-1 md:order-2 md:w-[65%]" alt="">
            </div>

        </div>
    </section> --}}

    {{-- end new section 2 --}}

    {{-- Section3 --}}
    <section class="container mx-auto my-20">
        <div class="md:w-5/6 mb-4 mx-auto">
            <ul class="flex flex-wrap justify-center -mb-px text-lg font-medium text-center" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 rounded-s-lg"
                        id="praktek-tab" data-tabs-target="#praktek" type="button" role="tab"
                        aria-controls="praktek" aria-selected="false">Praktek Dokter</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 md:rounded-none rounded-lg"
                        id="klinik-tab" data-tabs-target="#klinik" type="button" role="tab" aria-controls="klinik"
                        aria-selected="false">Klinik</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 md:rounded-none rounded-lg"
                        id="puskesmas-tab" data-tabs-target="#puskesmas" type="button" role="tab"
                        aria-controls="puskesmas" aria-selected="false">Puskesmas</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 md:rounded-none rounded-lg"
                        id="rumahsakit-tab" data-tabs-target="#rumahsakit" type="button" role="tab"
                        aria-controls="rumahsakit" aria-selected="false">Rumah Sakit</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 md:rounded-none rounded-lg"
                        id="farmasi-tab" data-tabs-target="#farmasi" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">Farmasi</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white border-gray-200 rounded-e-lg"
                        id="laboratorium-tab" data-tabs-target="#laboratorium" type="button" role="tab"
                        aria-controls="laboratorium" aria-selected="false">Laboratorium</button>
                </li>
            </ul>
        </div>
        <div class="md:w-5/6 mx-auto" id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50" id="praktek" role="tabpanel" aria-labelledby="praktek-tab">
                <div class="flex flex-col md:flex-row justify-center items-center gap-10">
                    <div class="md:w-[50%]">
                        <img src="img/p-praktek-dokter.webp" alt="Solusi Praktek Dokter">
                    </div>
                    <div class="md:w-[320px] text-deepturqoise">
                        <h1 class="text-lg text-darkgreen font-bold">Praktek Dokter</h1>
                        <p class="my-5">Praktek mandiri yang dilakukan oleh dokter akan sangat terbantu dalam hal
                            pencatatan administrasi
                            pasien, seperti rekaman medis digital secara online.</p>
                        <div>
                            <h1 class="text-lg text-darkgreen font-bold">Fitur yang di dapat</h1>
                            <ul class="mt-5 list-image-check list-inside">
                                <li>Admisi</li>
                                <li>Keuangan /Faktur</li>
                                <li>Rawat jalan</li>
                                <li>Penunjang</li>
                                <li>Antrian</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="klinik" role="tabpanel" aria-labelledby="klinik-tab">
                <div class="flex flex-col md:flex-row justify-center gap-10">
                    <div class="md:w-[50%]">
                        <img src="img/p-klinik.webp" alt="Solusi Klinik">
                    </div>
                    <div class="md:w-[400px] text-deepturqoise">
                        <h1 class="text-lg text-darkgreen font-bold">Klinik</h1>
                        <p class="my-5">Fitur ini sangat cocok untuk berbagai jenis klinik dan akan membantu dalam
                            menyediakan pelayanan pasien serta administrasi yang terpusat.</p>
                        <div class="mb-5">
                            <h1 class="text-lg text-darkgreen font-bold">Fitur yang di dapat</h1>
                            <ul class="mt-5 list-image-check list-inside">
                                <li>Admisi</li>
                                <li>Keuangan /Faktur</li>
                                <li>Rawat jalan</li>
                                <li>Penunjang</li>
                                <li>Antrian</li>
                                <li>Farmasi</li>
                                <li>Akutansi</li>
                                <li>Rawat Jalan</li>
                                <li>Fitur B to B</li>
                            </ul>
                        </div>
                        <span>Anda dapat memilih fitur yang sesuai dengan kebutuhan Anda dan menyesuaikannya.</span>
                        <div
                            class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                            <a href="{{ route('harga') }}">Perbandingan Fitur dan harga</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="puskesmas" role="tabpanel"
                aria-labelledby="puskesmas-tab">
                <div class="flex flex-col md:flex-row justify-center gap-10">
                    <div class="md:w-[50%]">
                        <img src="img/p-puskesmas.webp" alt="Solusi Puskesmas">
                    </div>
                    <div class="md:w-[400px] text-deepturqoise">
                        <h1 class="text-lg text-darkgreen font-bold">Puskesmas</h1>
                        <p class="my-5">Seperti halnya klinik, PUSKESMAS juga dapat menggunakan SAFFMedic sebagai
                            aplikasi penunjang kegiatan.</p>
                        <div class="mb-5">
                            <h1 class="text-lg text-darkgreen font-bold">Fitur yang di dapat</h1>
                            <ul class="mt-5 list-image-check list-inside">
                                <li>Admisi</li>
                                <li>Keuangan /Faktur</li>
                                <li>Rawat jalan</li>
                                <li>Penunjang</li>
                                <li>Antrian</li>
                                <li>Farmasi</li>
                                <li>Akutansi</li>
                            </ul>
                        </div>
                        <span>Anda dapat memilih fitur yang sesuai dengan kebutuhan Anda dan menyesuaikannya.</span>
                        <div
                            class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                            <a href="{{ route('harga') }}">Perbandingan Fitur dan harga</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="rumahsakit" role="tabpanel"
                aria-labelledby="rumahsakit-tab">
                <div class="flex flex-col md:flex-row justify-center gap-10">
                    <div class="md:w-[50%]">
                        <img src="img/p-rumah-sakit.webp" alt="Solusi Rumah Sakit">
                    </div>
                    <div class="md:w-[400px] text-deepturqoise">
                        <h1 class="text-lg text-darkgreen font-bold">Rumah Sakit</h1>
                        <p class="my-5">Tentu saja, Rumah Sakit dapat menggunakan SAFFMedic untuk mendukung operasional
                            mereka, mulai dari Administrasi, antrian pasien, apotek, hingga pembuatan laporan keuangan dalam
                            sistem manajemen rumah sakit (SIMRS) SAFFMedic.</p>
                        <div class="mb-5">
                            <h1 class="text-lg text-darkgreen font-bold">Fitur yang di dapat</h1>
                            <ul class="mt-5 list-image-check list-inside">
                                <li>Admisi</li>
                                <li>Keuangan /Faktur</li>
                                <li>Rawat jalan</li>
                                <li>Penunjang</li>
                                <li>Antrian</li>
                                <li>Farmasi</li>
                                <li>Akutansi</li>
                                <li>Rawat Jalan</li>
                                <li>Fitur B to B</li>
                                <li>Rawat inap</li>
                            </ul>
                        </div>
                        <span>Anda dapat memilih fitur yang sesuai dengan kebutuhan Anda dan menyesuaikannya.</span>
                        <div
                            class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                            <a href="{{ route('harga') }}">Perbandingan Fitur dan harga</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="farmasi" role="tabpanel" aria-labelledby="farmasi-tab">
                <div class="flex flex-col md:flex-row justify-center gap-10">
                    <div class="md:w-[50%]">
                        <img src="img/p-farmasi.webp" alt="Solusi Farmasi">
                    </div>
                    <div class="md:w-[400px] text-deepturqoise">
                        <h1 class="text-lg text-darkgreen font-bold">Farmasi</h1>
                        <p class="my-5">SAFFMedic telah dilengkapi dengan fitur Farmasi yang terintegrasi dengan modul
                            SIMRS yang lengkap.</p>
                        <div class="mb-5">
                            <h1 class="text-lg text-darkgreen font-bold">Fitur yang di dapat</h1>
                            <ul class="mt-5 list-image-check list-inside">
                                <li>Penjualan</li>
                                <li>Pembelian</li>
                                <li>Kontrol stok atau inventory</li>
                                <li>Keuangan</li>
                                <li>Resep online</li>
                                <li>Antrian</li>
                            </ul>
                        </div>
                        <span>Anda dapat memilih fitur yang sesuai dengan kebutuhan Anda dan menyesuaikannya.</span>
                        <div
                            class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                            <a href="{{ route('harga') }}">Perbandingan Fitur dan harga</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="laboratorium" role="tabpanel"
                aria-labelledby="laboratorium-tab">
                <div class="flex flex-col md:flex-row justify-center gap-10">
                    <div class="md:w-[50%]">
                        <img src="img/p-laboratorium.webp" alt="Solusi Laboratorium">
                    </div>
                    <div class="md:w-[400px] text-deepturqoise">
                        <h1 class="text-lg text-darkgreen font-bold">Laboratorium</h1>
                        <p class="my-5">Dapat diterapkan secara mandiri maupun kolaboratif dalam berbagai pengaturan,
                            seperti di rumah sakit atau klinik yang memiliki fasilitas laboratorium.</p>
                        <div class="mb-5">
                            <h1 class="text-lg text-darkgreen font-bold">Fitur yang di dapat</h1>
                            <ul class="mt-5 list-image-check list-inside">
                                <li>MCU</li>
                                <li>Audio Metri</li>
                                <li>Opto Metri</li>
                                <li>Spiro Metr</li>
                                <li>Admisi</li>
                                <li>Antrian</li>
                            </ul>
                        </div>
                        <span>Anda dapat memilih fitur yang sesuai dengan kebutuhan Anda dan menyesuaikannya.</span>
                        <div
                            class="text-white mt-3 w-fit bg-turqoise p-1 rounded-md transition-transform transform hover:scale-105">
                            <a href="{{ route('harga') }}">Perbandingan Fitur dan harga</a>
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
                <img src="img/cloudsystem.webp" width="60" class="md:w-[120px]" alt="Cloud System">
                <h1>CLOUD <br> SYSTEM</h1>
            </div>
            <div class="flex gap-5 items-center">
                <img src="img/semicustome.webp" width="60" class="md:w-[120px]" alt="semi Custome">
                <h1>SEMI <br> CUSTOME</h1>
            </div>
        </div>

        <div class="md:w-5/6 mx-auto text-deepturqoise my-20">
            <h1 class="font-bold mb-2">
                Salah satu alasan <br>
                Kamu beralih ke SAFFMedic.
            </h1>
            <p class="text-justify">
                Paperless adalah sebuah konsep yang melibatkan penggunaan teknologi untuk mengurangi penggunaan kertas
                secara signifikan. Menggunakan SAFFMedic dalam melakukan pemeriksaan akan membuat operasional menjadi
                lebih efisien dan menghemat biaya.
                <br><br>
                Dengan menggunakan digitalisasi untuk melakukan pemeriksaan, proses akan menjadi lebih cepat dan
                efisien. Tidak perlu lagi mencetak dan mengatur dokumen fisik, karena semua informasi dapat diakses
                secara elektronik. Selain itu, dengan digitalisasi, dapat melakukan pencarian dan analisis data dengan
                lebih mudah dan cepat.
                <br><br>
                Selain itu, digitalisasi juga akan mengurangi biaya yang terkait dengan penggunaan kertas, printer, dan
                penyimpanan fisik dokumen. Hal ini memberikan dampak positif bagi lingkungan, karena mengurangi
                penggunaan kertas yang berasal dari pohon.
                <br><br>
                Selain efisiensi dan hemat biaya, digitalisasi pemeriksaan juga memberikan keuntungan lainnya. Dapat
                mengurangi potensi kesalahan manusia dalam pengolahan data dan meningkatkan keamanan informasi karena
                data dapat dienkripsi dan diatur dengan akses yang terbatas.
                <br><br>
                Dengan semua keuntungan ini, tidak heran jika semakin banyak organisasi dan bisnis yang beralih ke
                digitalisasi pemeriksaan. Ini adalah langkah penting menuju operasional yang lebih efisien, hemat biaya,
                dan ramah lingkungan.
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
                    <p class="my-8">Beberapa pertanyaan yang sering layangkan kepada Kami, untuk membantu Anda berikut
                        Kami Rangkumkan
                        dalam
                        bentuk F&Q.
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
                                <span>Dapatkah SAFFMedic mengembangkan aplikasi SIMRS yang saya miliki?</span>
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
                                    Sebelumnya, kami akan memeriksa aplikasi yang sedang Anda gunakan dan
                                    mengidentifikasi
                                    kebutuhan pengembangan yang ingin diimplementasikan.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Lebih baik menggunakan aplikasi yang sudah ada atau membuat sendiri?</span>
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
                                    Jika Anda ingin mencapai efisiensi, lebih baik menggunakan aplikasi yang sudah
                                    tersedia
                                    seperti SAFFMedic daripada harus membuat aplikasi sendiri.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span>Jenis aplikasi apa yang sesuai dengan usaha saya jika saya ingin membeli?</span>
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
                                    Ketika memilih aplikasi, penting untuk mempertimbangkan kebutuhan Anda dan juga
                                    layanan
                                    purna jual yang diberikan.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                aria-controls="accordion-collapse-body-4">
                                <span>Mengapa SAFFMedic menggunakan cloud subscription? Mengapa bukan aplikasi
                                    desktop?</span>
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
                                    Kami mengutamakan perkembangan teknologi. Saat ini, teknologi informasi dan data
                                    telah
                                    berpindah ke layanan cloud sistem. Selain lebih efisien, keuntungan lainnya adalah
                                    dalam
                                    hal pemeliharaan atau perawatan.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-5">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                aria-controls="accordion-collapse-body-5">
                                <span>Berapa lama SAFFMedic akan mendampingi saya?</span>
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
                                    Kami akan terus mendampingi Anda selama Anda menggunakan SAFFMedic.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-6">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                                aria-controls="accordion-collapse-body-6">
                                <span>Pendampingan apa yang diberikan oleh SAFFMedic?</span>
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
                                    Kami menyediakan dukungan, pelatihan, perbaikan, dan pengembangan fitur secara
                                    gratis
                                    selama Anda menggunakan SAFFMedic.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-7">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                                aria-controls="accordion-collapse-body-7">
                                <span>Apakah SAFFMedic dapat melakukan migrasi data?</span>
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
                                    Kami dapat melakukan migrasi data selama data tersebut dapat diekspor ke format CSV
                                    atau
                                    Excel.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-8">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                                aria-controls="accordion-collapse-body-8">
                                <span>Apakah SAFFMedic menyediakan open API?</span>
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
                                    Tentu saja. Asalkan aplikasi yang akan dihubungkan juga memiliki kemampuan untuk
                                    berintegrasi melalui API.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-9">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-b-0 border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-9" aria-expanded="false"
                                aria-controls="accordion-collapse-body-9">
                                <span>
                                    Jika saya memiliki server sendiri, apakah SAFFMedic dapat diinstal di server
                                    saya?</span>
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
                                    Hal ini bisa dipertimbangkan dengan paket layanan hybrid yang sesuai dengan
                                    ketentuan
                                    yang berlaku.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-10">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start rtl:text-right text-gray-500 focus:bg-darkteal focus:text-white border border-gray-200 gap-3"
                                data-accordion-target="#accordion-collapse-body-10" aria-expanded="false"
                                aria-controls="accordion-collapse-body-10">
                                <span>Apa yang dimaksud dengan Semi Custom pada SAFFMedic?</span>
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
                                    SAFFMedic adalah aplikasi yang siap digunakan, namun jika Anda menginginkan
                                    penambahan
                                    fitur, SAFFMedic dapat melakukan hal tersebut.</p>
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
            <h1 class="md:text-3xl text-2xl font-bold mb-2">MITRA SATU SEHAT <br>
                KEMENKES</h1>
            <a href="https://satusehat.kemkes.go.id/platform/system-rme-list">
                <img src="img/satu-sehat.webp" alt="kemenkes satu sehat"
                    class="md:w-[7%] w-36 mx-auto mb-3 mt-5 transition-transform transform duration-500 hover:scale-110">
            </a>
            <p>SAFFMedic merupakan penyedia Sistem Informasi Klinik dan Rumah <br> Sakit Mitra Satu Sehat Kementrian
                Kesehatan
                Republik Indonesia</p>
        </div>
    </section>
    {{-- End Section6 --}}
@endsection
