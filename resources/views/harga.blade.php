@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="md:w-1/3 mx-auto text-center text-darkteal p-5">
            <img src="img/pagehargaelement1.png" class="md:w-[15%] w-[20%] mx-auto mb-3" alt="">
            <h1 class="md:text-3xl text-2xl font-bold text-darkgreen">Harga & Paket LPH</h1>
            <h2 class="font-medium my-1">Lembaga Pemeriksa Halal Terpercaya</h2>
            <p>LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang telah terdaftar dan diakui oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). </p>
            <h2 class="p-2 text-2xl font-bold text-darkgreen">Sertifikasi Halal dengan Proses Cepat & Terpercaya</h2>
        </div>
    </section>
    {{-- End Section1 --}}

    <section class="overflow-x-auto w-full px-4 sm:px-6 lg:px-8 mb-10" data-aos="fade-up" data-aos-duration="1000">
        <div class="mb-4 border-b mx-auto border-gray-200 dark:border-gray-700">
            <ul class="flex w-3/12 text-sm font-medium text-center" id="default-tab"
                style="display: flex !important; justify-content: center !important; width: fit-content !important; margin-left: auto; margin-right: auto;"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="ms-auto" role="presentation">
                    <button
                        class="p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white text-2xl rounded-s-lg"
                        id="sertifikasi-tab" data-tabs-target="#sertifikasi" type="button" role="tab" aria-controls="sertifikasi"
                        aria-selected="false">Sertifikasi Halal</button>
                </li>
                <li class="me-auto" role="presentation">
                    <button
                        class="p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white text-2xl rounded-sm"
                        id="pelatihan-tab" data-tabs-target="#pelatihan" type="button" role="tab" aria-controls="pelatihan"
                        aria-selected="false">Pelatihan & Audit</button>
                </li>
                <li class="me-auto" role="presentation">
                    <button
                        class="p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white text-2xl rounded-sm rounded-e-lg "
                        id="tambahan-tab" data-tabs-target="#tambahan" type="button" role="tab" aria-controls="tambahan"
                        aria-selected="false">Layanan Tambahan</button>
                </li>
            </ul>
        </div>
    </section>

    <div id="default-tab-content" class="w-100">
        <div class="hidden" id="sertifikasi" role="tabpanel" aria-labelledby="sertifikasi-tab">
            <section class="container mx-auto my-20 p-2 bg-[#E6E6E670]">
                <div class="md:w-5/6 mx-auto" data-aos="fade-left" data-aos-duration="1000">
                    <div class="text-center my-8 max-w-4xl mx-auto px-4">
                        <h1 class="md:text-3xl text-2xl text-darkgreen font-semibold mb-3">PAKET SERTIFIKASI HALAL</h1>
                        <p class="text-darkteal text-base md:text-lg mb-2">Pilih paket sesuai dengan skala dan kebutuhan usaha anda.</p>
                        <p class="text-darkteal text-sm md:text-base leading-relaxed">Paket dan tarif pada halaman ini dapat disesuaikan dengan kebutuhan proses sertifikasi halal 
                            yang Anda perlukan. Tim kami akan membantu menghitung serta memberikan penawaran harga 
                            terbaik sesuai dengan kompleksitas produk dan proses audit. Silakan hubungi LPH Doa Bangsa Sukabumi untuk melakukan kustomisasi paket.</p>
                    </div>
                    <div>
                        <div class="w-full overflow-x-auto py-5 text-base text-darkgreen">
                            <table class="min-w-full divide-y divide-gray-200 bg-white rounded-xl shadow-lg">
                                <style>
                                    @keyframes pulse-zoom {
                                        0%, 100% {
                                            transform: scale(1);
                                        }
                                        50% {
                                            transform: scale(1.15);
                                        }
                                    }
                                    
                                    .animate-pulse-zoom {
                                        animation: pulse-zoom 2s ease-in-out infinite;
                                    }
                                </style>

                                <thead>
                                    <tr class="bg-turqoise text-white">
                                        <th class="px-6 py-4 text-left text-lg font-bold rounded-tl-xl">Fitur Layanan</th>
                                        <th class="px-6 py-4 text-center text-lg font-bold">BASIC</th>
                                        <th class="px-6 py-4 text-center text-lg font-bold">STANDARD</th>
                                        <th class="px-6 py-4 text-center text-lg font-bold">PREMIUM</th>
                                        <th class="px-6 py-4 text-center text-lg font-bold">
                                            <div class="inline-flex items-center gap-2">
                                                <span>ENTERPRISE</span>
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md bg-red-600 text-white text-sm font-bold shadow-md animate-pulse-zoom -translate-y-1">
                                                    +AUDIT LANJUT
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Pendaftaran (parent) -->
                                    <tr id="pendaftaran-row" class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('pendaftaran')">
                                            <svg id="pendaftaran-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Pendaftaran & Administrasi</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU Pendaftaran: Konsultasi Awal -->
                                    <tr id="pendaftaran-konsultasi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pendaftaran-konsultasi')">
                                            <svg id="pendaftaran-konsultasi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Konsultasi Awal</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-center relative">
                                                <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                                <button data-popover-target="konsultasi-awal-info"
                                                    data-popover-placement="bottom-end" type="button">
                                                    <svg class="w-4 h-4 ms-12 text-yellow-300 hover:text-yellow-400"
                                                        aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Show information</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- Popover untuk Konsultasi Awal --}}
                                    <div data-popover id="konsultasi-awal-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Konsultasi mendalam selama 2 jam dengan tim ahli LPH</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    {{-- SUB MENU Pendaftaran: Dokumen --}}
                                    <tr id="pendaftaran-dokumen-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Pengurusan Dokumen</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU Pendaftaran: Verifikasi -->
                                    <tr id="pendaftaran-verifikasi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pendaftaran-verifikasi')">
                                            <svg id="pendaftaran-verifikasi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Verifikasi Dokumen</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- Pemeriksaan (parent) -->
                                    <tr id="pemeriksaan-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer "
                                            onclick="toggleTree('pemeriksaan')">
                                            <svg id="pemeriksaan-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Pemeriksaan & Audit</span>
                                        </td>
                                        <td class="px-6 py-3 text-center">-</td>
                                        <td class="px-6 py-3 text-center">-</td>
                                        <td class="px-6 py-3 text-center">-</td>
                                        <td class="px-6 py-3 text-center">-</td>
                                    </tr>

                                    <!-- SUB-MENU: pemeriksaan: Audit Dokumen -->
                                    <tr id="pemeriksaan-audit-dokumen-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pemeriksaan-audit-dokumen')">
                                            <svg id="pemeriksaan-audit-dokumen-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Audit Dokumen</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Pemeriksaan: AUDIT LAPANGAN -->
                                    <tr id="pemeriksaan-audit-lapangan-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Audit Lapangan</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Pemeriksaan: PEMERIKSAAN LAB -->
                                    <tr id="pemeriksaan-lab-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Pemeriksaan Laboratorium</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Pemeriksaan: UJI MATERIAL -->
                                    <tr id="pemeriksaan-uji-material-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Uji Material</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- Sertifikasi (parent) -->
                                    <tr id="sertifikasi-main-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('sertifikasi-main')">
                                            <svg id="sertifikasi-main-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Sertifikasi & Sertifikat</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 1: Sertifikat --}}
                                    <tr id="sertifikasi-sertifikat-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('sertifikasi-sertifikat')">
                                            <svg id="sertifikasi-sertifikat-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Sertifikat Halal</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 2: Fisik --}}
                                    <tr id="sertifikasi-sertifikat-fisik-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Sertifikat Fisik</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 2: Digital --}}
                                    <tr id="sertifikasi-sertifikat-digital-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Sertifikat Digital</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- Pendampingan (parent) -->
                                    <tr id="pendampingan-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('pendampingan')">
                                            <svg id="pendampingan-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Pendampingan</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU LEVEL 1: Konsultasi -->
                                    <tr id="pendampingan-konsultasi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pendampingan-konsultasi')">
                                            <svg id="pendampingan-konsultasi-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Konsultasi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Konsultasi: Online -->
                                    <tr id="pendampingan-konsultasi-online-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Online</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Konsultasi: Offline -->
                                    <tr id="pendampingan-konsultasi-offline-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Offline</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Integrasi Sistem --}}
                                    <tr id="integrasi-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('integrasi')">
                                            <svg id="integrasi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Integrasi Sistem</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- integrasi: sistem BPJPH  --}}
                                    <tr id="integrasi-bpjph-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Sistem BPJPH</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- integrasi: dashboard monitoring --}}
                                    <tr id="integrasi-dashboard-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Dashboard Monitoring</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Whatsapp Notifikasi --}}
                                    <tr id="integrasi-Whatsapp-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Whatsapp Notifikasi</td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-center relative">
                                                <img class="absolute" src="{{ asset('img/h-yes.png') }}"
                                                    width="21">
                                                <button data-popover-target="whatsapp-enterprise-info"
                                                    data-popover-placement="bottom-end" type="button">
                                                    <svg class="w-4 h-4 ms-12 text-yellow-300 hover:text-yellow-400"
                                                        aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Show information</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- Popover untuk WhatsApp ENTERPRISE --}}
                                    <div data-popover id="whatsapp-enterprise-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Notifikasi progress sertifikasi via WhatsApp</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    <!-- Jumlah Produk -->
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900"><span>Jumlah Produk yang Disertifikasi</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1-3 Produk</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">4-10 Produk</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">11-25 Produk</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">>25 Produk</span></td>
                                    </tr>

                                    <!-- Waktu Proses -->
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900">
                                            <span>Waktu Proses (Estimasi)</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">30-45 Hari</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">30-45 Hari</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">20-30 Hari</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">15-25 Hari</span></td>
                                    </tr>

                                    {{-- Masa Berlaku --}}
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center gap-1">
                                            <div class="flex items-start gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <span>Masa Berlaku Sertifikat</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">2 Tahun</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">2 Tahun</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">4 Tahun</span></td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">4 Tahun</span></td>
                                    </tr>

                                    {{-- Konsultan yang Ditugaskan --}}
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center gap-1">
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                                </svg>
                                            </div>
                                            <span>Konsultan yang Ditugaskan</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1 Orang</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">2 Orang</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">Tim 3 Orang</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">Tim 5 Orang</span></td>
                                    </tr>

                                    {{-- HARGA --}}
                                    <tr class="bg-gray-50">
                                        <td class="px-6 py-4 text-base font-bold text-gray-900"><span>Harga / Paket</span>
                                        </td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 3.500K</span></td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 8.000K</span></td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 15.000K</span></td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 30.000K+</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="hidden lg:flex gap-8 justify-center text-xl text-darkteal">
                            <div class="w-[150px] bg-[#E6E6E6] rounded-md">
                                <img src="img/menu-fitur.png" class="w-16 mx-auto py-10" alt="">
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2 rounded-md">
                                <h1>UMKM & Startup</h1>
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2  rounded-md">
                                <h1>Usaha Kecil</h1>
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2  rounded-md">
                                <h1>Perusahaan Menengah</h1>
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2  rounded-md">
                                <h1>Perusahaan Besar</h1>
                            </div>
                        </div>
                        <div class="hidden lg:flex gap-8 justify-center text-base text-center text-white mt-3">
                            <div class="w-[150px]  rounded-md">
                            </div>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20info%20Paket%20Basic%20Sertifikasi%20Halal">
                                Hubungi Kami</a>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20info%20Paket%20Standard%20Sertifikasi%20Halal">
                                Hubungi Kami</a>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20info%20Paket%20Premium%20Sertifikasi%20Halal">
                                Hubungi Kami</a>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20konsultasi%20Paket%20Enterprise%20Sertifikasi%20Halal">
                                Konsultasi Gratis</a>
                        </div>

                        {{-- Bagian HYBRID & KSO --}}
                        <div class="flex flex-col md:flex-row justify-center gap-5 mt-40" data-aos="fade-down"
                            data-aos-duration="1000">
                            <div
                                class="relative mt-10 md:w-1/2 h-[250px] align-items-center p-10 bg-darkteal text-white font-medium text-xl text-center">
                                <!-- Ikon/Hybrid -->
                                <div class="absolute inset-x-0 -top-4">
                                    <div class="relative flex justify-center">
                                        <div
                                            class="absolute -top-8 bg-white rounded-full p-1 shadow-md border-4 border-darkteal">
                                            <div class="bg-white rounded-full p-3">
                                                <img src="img/hybrid.png" class="w-10 h-10" alt="Hybrid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="text-2xl my-3">KONSULTASI GRATIS</h3>
                                <p>Dapatkan konsultasi awal secara gratis dengan tim ahli LPH Doa Bangsa Sukabumi untuk analisis kebutuhan sertifikasi halal perusahaan Anda.</p>
                            </div>
                            <div
                                class="relative mt-10 md:w-1/2 h-[250px] align-items-center p-10 bg-darkteal text-white font-medium text-xl text-center">
                                <!-- Ikon/KSO -->
                                <div class="absolute inset-x-0 -top-4">
                                    <div class="relative flex justify-center">
                                        <div
                                            class="absolute -top-8 bg-white rounded-full p-1 shadow-md border-4 border-darkteal">
                                            <div class="bg-white rounded-full p-3">
                                                <img src="img/kso.png" class="w-10 h-10" alt="KSO">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="text-2xl my-3">KERJASAMA CORPORATE</h3>
                                <p>LPH Doa Bangsa Sukabumi menyediakan paket kerjasama corporate untuk perusahaan dengan multiple produk atau cabang.</p> <br>
                                <a class="mt-3 bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md transition-transform duration-200 hover:scale-110"
                                    href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20info%20Kerjasama%20Corporate">
                                    Info Corporate
                                    <span class="ml-1">→</span>
                                </a>
                            </div>
                        </div>

                        {{-- Tombol Konsultasi --}}
                        <div class="flex justify-center" data-aos="fade-down" data-aos-duration="1000">
                            <div class="mt-10">
                                <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20konsultasi%20sertifikasi%20halal">
                                    <p
                                        class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                                        Konsultasi Gratis <br>Via WhatsApp
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Tarif Lainnya Sertifikasi --}}
                    <div class="max-w-6xl mx-auto mt-20 px-4" data-aos="fade-down" data-aos-duration="1000">
                        <h2
                            class="bg-[#166F61] text-white font-bold text-xl md:text-2xl py-4 rounded-lg text-center mb-6">
                            Layanan Tambahan Sertifikasi Halal
                        </h2>
                        <div class="bg-white rounded-lg shadow p-5">
                            <h3 class="font-bold text-base text-center text-gray-800 mb-2">Keterangan</h3>
                            <p class="text-gray-600 text-center text-sm">
                                Jika Anda membutuhkan layanan tambahan di luar paket sertifikasi yang tersedia,
                                kami menyediakan berbagai layanan pendukung untuk mengoptimalkan proses sertifikasi halal perusahaan Anda.
                            </p>
                        </div>

                        <div class="overflow-x-auto bg-white rounded-xl shadow-lg border border-gray-200 mt-6">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Layanan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Harga
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Periode / Kuota
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Pesan
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Item 1 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Perpanjangan Sertifikat Halal
                                            <button data-popover-target="perpanjangan-info" data-popover-placement="bottom-end"
                                                type="button" class="ml-1">
                                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span class="sr-only">Show information</span>
                                            </button>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp2.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Sertifikat
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20perpanjang%20sertifikat%20halal"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Hubungi Kami
                                            </a>
                                        </td>
                                    </tr>

                                    <div data-popover id="perpanjangan-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Proses perpanjangan sertifikat halal sebelum masa berlaku habis</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    <!-- Item 2 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Konsultasi Online (per sesi)
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / 90 menit
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20konsultasi%20online%20sertifikasi%20halal"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Jadwalkan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 3 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Audit Internal Sistem Halal
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp3.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Audit
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20audit%20internal%20sistem%20halal"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Layanan
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 4 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Pelatihan Auditor Internal
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp3.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Peserta
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20pelatihan%20auditor%20internal%20halal"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Daftar Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 5 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">5</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Penyusunan Dokumen Sistem Halal
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp5.000.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Paket Lengkap
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20penyusunan%20dokumen%20sistem%20halal"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Konsultasi Gratis
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 6 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">6</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Pendampingan Khusus Produk Baru
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp2.000.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Produk
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20pendampingan%20produk%20baru%20halal"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Info Lengkap
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 7 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">7</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Uji Laboratorium Tambahan
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp1.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Sampel
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20uji%20laboratorium%20tambahan"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Layanan
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{--  Benefit Paket Sertifikasi --}}
                    <section class="container mx-auto my-20 py-12" data-aos="fade-up-right" data-aos-duration="1000">
                        <div class="md:w-1/3 mb-10 text-center mx-auto text-darkgreen text-2xl font-semibold p-5">
                            <h1>Benefit yang Anda Dapatkan</h1>
                        </div>
                        <div class="max-w-6xl mx-auto px-4">
                            <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr class="bg-turqoise text-white">
                                            <th class="px-6 py-8 text-left text-lg font-bold rounded-tl-xl">
                                                <div class="flex items-center">
                                                    <img src="img/tree-benefit.png" width="32" class="mr-3"
                                                        alt="">
                                                    Benefit Paket
                                                </div>
                                            </th>
                                            <th class="px-6 py-8 text-center text-lg font-bold">
                                                BASIC
                                            </th>
                                            <th class="px-6 py-8 text-center text-lg font-bold">
                                                STANDARD
                                            </th>
                                            <th class="px-6 py-8 text-center text-lg font-bold">
                                                PREMIUM
                                            </th>
                                            <th class="px-6 py-8 text-center text-lg font-bold">
                                                ENTERPRISE
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        <!-- Konsultasi Awal -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                                Konsultasi Awal
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Pendampingan Proses -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                                Pendampingan Proses
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-gray-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                                </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Pelatihan Internal -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332-.477 4.5-1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                </svg>
                                                Pelatihan Internal
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-gray-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-gray-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Sertifikat Digital -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                </svg>
                                                Sertifikat Digital
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Monitoring & Evaluasi -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                </svg>
                                                Monitoring & Evaluasi
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-gray-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center">
                                                    <svg class="w-6 h-6 text-green-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="bg-gray-50">
                                            <td colspan="5" class="px-6 py-8 text-center">
                                                <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20konsultasi%20sertifikasi%20halal"
                                                    class="inline-flex items-center px-8 py-4 text-lg font-bold rounded-full shadow-lg text-white bg-darkteal border-2 border-green-700 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transform transition-transform hover:scale-105">
                                                    Konsultasi Gratis via WhatsApp
                                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </section>
                    {{-- End Benefit Paket --}}
                </div>
            </section>
        </div>

        {{-- Tab Pelatihan & Audit --}}
        <div class="hidden" id="pelatihan" role="tabpanel" aria-labelledby="pelatihan-tab">
            <section class="container mx-auto my-20 p-2 bg-[#E6E6E670]" data-aos="fade-down" data-aos-duration="1000">
                <div class="text-center my-8 max-w-4xl mx-auto px-4">
                    <h1 class="md:text-3xl text-2xl text-darkgreen font-semibold mb-3">PAKET PELATIHAN & AUDIT HALAL</h1>
                    <p class="text-darkteal text-base md:text-lg mb-2">Tingkatkan kompetensi SDM dan sistem halal perusahaan Anda.</p>
                    <p class="text-darkteal text-sm md:text-base leading-relaxed">Kami menyediakan berbagai program pelatihan dan audit untuk mendukung keberlangsungan sertifikasi halal perusahaan Anda.</p>
                </div>

                <div class="max-w-6xl mx-auto px-4">
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Paket Pelatihan Auditor -->
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <div class="flex items-center justify-center gap-3 mb-5">
                                <img src="img/training-icon.png" class="w-10 h-10" alt="Pelatihan">
                                <h3 class="text-2xl font-bold text-darkteal">Pelatihan Auditor Halal</h3>
                            </div>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Materi dasar sertifikasi halal</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Teknik audit dan pemeriksaan</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Penyusunan laporan audit</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Sertifikat pelatihan</span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <p class="text-2xl font-bold text-darkteal mb-4">IDR 3.500K / Peserta</p>
                                <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20daftar%20Pelatihan%20Auditor%20Halal"
                                   class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal">
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>

                        <!-- Paket Audit Internal -->
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <div class="flex items-center justify-center gap-3 mb-5">
                                <img src="img/audit-icon.png" class="w-10 h-10" alt="Audit">
                                <h3 class="text-2xl font-bold text-darkteal">Audit Internal Sistem Halal</h3>
                            </div>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Analisis sistem halal perusahaan</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Pemeriksaan dokumen & proses</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Rekomendasi perbaikan</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Laporan audit lengkap</span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <p class="text-2xl font-bold text-darkteal mb-4">IDR 8.000K / Audit</p>
                                <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20Audit%20Internal%20Sistem%20Halal"
                                   class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal">
                                    Pesan Layanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- Tab Layanan Tambahan --}}
        <div class="hidden" id="tambahan" role="tabpanel" aria-labelledby="tambahan-tab">
            <section class="container mx-auto my-20 p-2 bg-[#E6E6E670]" data-aos="fade-down" data-aos-duration="1000">
                <div class="text-center my-8 max-w-4xl mx-auto px-4">
                    <h1 class="md:text-3xl text-2xl text-darkgreen font-semibold mb-3">LAYANAN TAMBAHAN</h1>
                    <p class="text-darkteal text-base md:text-lg mb-2">Layanan pendukung untuk optimasi sistem halal perusahaan Anda.</p>
                </div>

                <div class="max-w-6xl mx-auto px-4">
                    <div class="overflow-x-auto bg-white rounded-xl shadow-lg border border-gray-200 mt-6">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Layanan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pesan</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Item 1 -->
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Konsultasi Online (per sesi)
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp500.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">/ 90 menit</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20konsultasi%20online%20sertifikasi%20halal"
                                           class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                            Jadwalkan Sekarang
                                        </a>
                                    </td>
                                </tr>

                                <!-- Item 2 -->
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Penyusunan Dokumen Sistem Halal
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp5.000.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">/ Paket Lengkap</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20penyusunan%20dokumen%20sistem%20halal"
                                           class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                            Konsultasi Gratis
                                        </a>
                                    </td>
                                </tr>

                                <!-- Item 3 -->
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Pelatihan Karyawan (in-house)
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp7.500.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">/ 20 peserta / hari</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20pelatihan%20in-house%20untuk%20karyawan"
                                           class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                            Request Proposal
                                        </a>
                                    </td>
                                </tr>

                                <!-- Item 4 -->
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Uji Laboratorium Tambahan
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp1.500.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">/ Sampel</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="https://wa.me/62811223344?text=Halo,%20saya%20ingin%20uji%20laboratorium%20tambahan"
                                           class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                            Pesan Layanan
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        function toggleTree(id) {
            const row = document.getElementById(`${id}-row`);
            const icon = document.getElementById(`${id}-icon`);
            
            if (row.classList.contains('hidden')) {
                row.classList.remove('hidden');
                if (icon) icon.classList.add('rotate-90');
            } else {
                row.classList.add('hidden');
                if (icon) icon.classList.remove('rotate-90');
            }
        }

        // Initialize popovers
        document.addEventListener('DOMContentLoaded', function() {
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-popover-target]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new Popover(popoverTriggerEl)
            })
        });
    </script>
@endsection
