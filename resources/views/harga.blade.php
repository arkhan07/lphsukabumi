@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="md:w-1/3 mx-auto text-center text-darkteal p-5">
            <img src="img/pagehargaelement1.png" class="md:w-[15%] w-[20%] mx-auto mb-3" alt="">
            <h1 class="md:text-3xl text-2xl font-bold text-darkgreen">Harga & Paket</h1>
            <h2 class="font-medium my-1">Fitur Melimpah dengan harga Hemat</h2>
            <p>Kapan lagi dapat aplikasi dengan fitur yang lengkap,
                tapi harga sangat bersahabat. </p>
            <h2 class="p-2 text-2xl font-bold text-darkgreen">No 1 SIMRS yang dilengkapi dengan sistem Accounting</h2>
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
                        id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general"
                        aria-selected="false">General</button>
                </li>
                <li class="me-auto" role="presentation">
                    <button
                        class="p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white text-2xl rounded-sm"
                        id="mcu-tab" data-tabs-target="#mcu" type="button" role="tab" aria-controls="mcu"
                        aria-selected="false">MCU</button>
                </li>
                <li class="me-auto" role="presentation">
                    <button
                        class="p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white text-2xl rounded-sm rounded-e-lg "
                        id="apotek-tab" data-tabs-target="#apotek" type="button" role="tab" aria-controls="apotek"
                        aria-selected="false">Apotek/Farmasi</button>
                </li>
            </ul>
        </div>
    </section>

    <div id="default-tab-content" class="w-100">
        <div class="hidden" id="general" role="tabpanel" aria-labelledby="general-tab">
            <section class="container mx-auto my-20 p-2 bg-[#E6E6E670]">
                <div class="md:w-5/6 mx-auto" data-aos="fade-left" data-aos-duration="1000">
                    <div class="text-center my-8 max-w-4xl mx-auto px-4">
                        <h1 class="md:text-3xl text-2xl text-darkgreen font-semibold mb-3">PAKET GENERAL</h1>
                        <p class="text-darkteal text-base md:text-lg mb-2">Pilih paket sesuai kebutuhan dan jenis pelayanan anda.</p>
                        <p class="text-darkteal text-sm md:text-base leading-relaxed">Paket dan tarif pada halaman ini dapat disesuaikan dengan kebutuhan fitur 
                            dan modul yang Anda perlukan. Tim kami akan membantu menghitung serta memberikan penawaran harga 
                            terbaik sesuai kebutuhan Anda. Silakan hubungi SAFFMedic untuk melakukan kustomisasi paket.</p>
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
                                        <th class="px-6 py-4 text-left text-lg font-bold rounded-tl-xl">Fitur</th>
                                        <th class="px-6 py-4 text-center text-lg font-bold">BASIC</th>
                                        <th class="px-6 py-4 text-center text-lg font-bold">MEDIUM I</th>
                                        <th class="px-6 py-4 text-center text-lg font-bold">MEDIUM II</th>
                                        <th class="px-6 py-4 text-center text-lg font-bold">
                                            <div class="inline-flex items-center gap-2">
                                                <span>PRO</span>
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md bg-red-600 text-white text-sm font-bold shadow-md animate-pulse-zoom -translate-y-1">
                                                    +MCU
                                                </span>
                                            </div>
                                        </th>
                                        <th class="px-6 py-4 text-center text-lg font-bold rounded-tr-xl">
                                            <div class="inline-flex items-center gap-2">
                                                <span>ENTERPRISE</span>
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md bg-red-600 text-white text-sm font-bold shadow-md animate-pulse-zoom -translate-y-1">
                                                    +MCU
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Pelayanan (parent) -->
                                    <tr id="pelayanan-row" class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('pelayanan')">
                                            <svg id="pelayanan-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Pelayanan</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU Pelayanan: Rawat Jalan -->
                                    <tr id="pelayanan-rawat-jalan-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pelayanan-rawat-jalan')">
                                            <svg id="pelayanan-rawat-jalan-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Rawat Jalan</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-center relative">
                                                <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                                <button data-popover-target="rawat-jalan-info"
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

                                    {{-- Popover untuk Rawat jalan --}}
                                    <div data-popover id="rawat-jalan-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Mendapatkan 6 Poli</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    {{-- SUB MENU Pelayanan: Rawat Jalan: contoh 1 --}}
                                    <tr id="pelayanan-rawat-jalan-admisi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Admisi</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU Pelayanan: Rawat inap -->
                                    <tr id="pelayanan-rawat-inap-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pelayanan-rawat-inap')">
                                            <svg id="pelayanan-rawat-inap-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Rawat Inap</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- SUB MENU Pelayanan: Rawat inap --}}
                                    <tr id="pelayanan-rawat-inap-admisi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Admisi</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU Pelayanan: IGD -->
                                    <tr id="pelayanan-igd-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pelayanan-igd')">
                                            <svg id="pelayanan-igd-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>IGD</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- SUB MENU Pelayanan: Rawat inap --}}
                                    <tr id="pelayanan-igd-admisi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Admisi</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU Pelayanan: MCU -->
                                    <tr id="pelayanan-mcu-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pelayanan-mcu')">
                                            <svg id="pelayanan-mcu-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>MCU</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-center relative">
                                                <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                                <button data-popover-target="mcu-pro-info"
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
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-center relative">
                                                <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                                <button data-popover-target="mcu-enterprise-info"
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

                                    {{-- Popover untuk MCU PRO --}}
                                    <div data-popover id="mcu-pro-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Paket 2 MCU 600 Peserta</p>
                                            <button 
                                                id="lihat-detail-mcu-pro"
                                                class="text-white underline cursor-pointer">
                                                Lihat detail paket
                                            </button>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    {{-- Popover untuk MCU PRO --}}
                                    <div data-popover id="mcu-enterprise-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Paket 3 MCU 1300 Peserta</p>
                                            <button 
                                                id="lihat-detail-mcu-enterprise"
                                                class="text-white underline cursor-pointer">
                                                Lihat detail paket
                                            </button>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    {{-- SUB MENU Pelayanan: Mcu admisi --}}
                                    <tr id="pelayanan-mcu-admisi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Admisi</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- SUB MENU Pelayanan: MCU: Umum --}}
                                    <tr id="pelayanan-mcu-umum-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Umum</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- SUB MENU Pelayanan: MCU: organisasi --}}
                                    <tr id="pelayanan-mcu-organisasi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('pelayanan-mcu-organisasi')">
                                            <svg id="pelayanan-mcu-organisasi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Organisasi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- SUB MENU Pelayanan: MCU: Admisi --}}
                                    <tr id="pelayanan-mcu-organisasi-admisi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>admisi</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="pelayanan-mcu-organisasi-fitur-b-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Fitur B to B</td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"
                                                width="21" class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-center relative">
                                                <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                                <button data-popover-target="fitur-b-pro-info"
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
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-center relative">
                                                <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                                <button data-popover-target="fitur-b-enterprise-info"
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

                                    {{-- Popover untuk MCU PRO --}}
                                    <div data-popover id="fitur-b-pro-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>1. Menggunakan user login yang diberikan oleh faskes</p>
                                            <p>2. Jumlah peserta maksimum import peserta perbulan 1000</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    {{-- Popover untuk MCU ENTERPRISE --}}
                                    <div data-popover id="fitur-b-enterprise-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>1. Menggunakan user login yang diberikan oleh faskes</p>
                                            <p>2. Jumlah peserta maksimum import peserta perbulan 2000</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    {{-- login --}}
                                    <tr id="pelayanan-mcu-organisasi-login-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700 flex items-center gap-2">
                                            Login
                                            <button data-popover-target="pelayanan-organisasi-login-info"
                                                data-popover-placement="bottom-end" type="button" class="ml-2">
                                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span class="sr-only">Show information</span>
                                            </button>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png"
                                                width="21"class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png"
                                                width="21"class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png"
                                                width="21"class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><span class="text-xs">1 User</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-xs">1 User</span></td>
                                    </tr>

                                    <div data-popover id="pelayanan-organisasi-login-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <p>Perusahaan mendapatkan akses untuk menginput data peserta MCU dan melihat
                                                laporan
                                                hasil MCU, dengan jumlah user yang disesuaikan dengan akun yang dimiliki
                                                FASKES.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    <!-- PENUNJANG (PARENT) -->
                                    <tr id="penunjang-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer "
                                            onclick="toggleTree('penunjang')">
                                            <svg id="penunjang-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Penunjang</span>
                                        </td>
                                        <td class="px-6 py-3 text-center">-</td>
                                        <td class="px-6 py-3 text-center">-</td>
                                        <td class="px-6 py-3 text-center">-</td>
                                        <td class="px-6 py-3 text-center">-</td>
                                        <td class="px-6 py-3 text-center">-</td>
                                    </tr>

                                    <!-- SUB-MENU: penunjang: umum -->
                                    <tr id="penunjang-umum-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('penunjang-umum')">
                                            <svg id="penunjang-umum-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>penunjang umum</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: LABORATORIUM -->
                                    <tr id="penunjang-laboratorium-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Laboratorium</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: RADIOLOGI -->
                                    <tr id="penunjang-radiologi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Radiologi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: KARDIOLOGI -->
                                    <tr id="penunjang-kardiologi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Kardiologi</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Audiometri -->
                                    <tr id="penunjang-audiometri-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Audiometri</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Spirometri -->
                                    <tr id="penunjang-spirometri-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Spirometri</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"> <img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Odontogram -->
                                    <tr id="penunjang-odontogram-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"> <span>Odontogram</span> </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Optometri-->
                                    <tr id="penunjang-optometri-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"> <span>Optometri</span> </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Penunjang analysis -->
                                    <tr id="penunjang-analysis-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('penunjang-analysis')">
                                            <svg id="penunjang-analysis-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Penunjang Analysis</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Penunjang analysis: Frammingham -->
                                    <tr id="penunjang-frammingham-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Frammingham</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Penunjang analysis: DASS21-->
                                    <tr id="penunjang-DASS21-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>DASS21</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Penunjang analysis: SRQ20-->
                                    <tr id="penunjang-SRQ20-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>SRQ20</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Penunjang analysis: Harvard Test-->
                                    <tr id="penunjang-harvard-test-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Harvard
                                                Test</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Penunjang analysis: Jakarta Cardiavaskular -->
                                    <tr id="penunjang-jakarta-cardiavaskular-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Jakarta
                                                Cardiavaskular</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU: Penunjang: Penunjang analysis: SAFFMedic AI Analisis (COLLAPSIBLE) -->
                                    <tr id="penunjang-saffmedic-ai-analisis-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('penunjang-saffmedic-ai-analisis')">
                                            <svg id="penunjang-saffmedic-ai-analisis-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>SAFFMedic AI Analisis</span>
                                        </td>
                                        <td class="px-6 py-2 text-center">-</td>
                                        <td class="px-6 py-2 text-center">-</td>
                                        <td class="px-6 py-2 text-center">-</td>
                                        <td class="px-6 py-2 text-center">-</td>
                                        <td class="px-6 py-2 text-center">-</td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Analysis sindrom metabolik -->
                                    <tr id="penunjang-saffmedic-ai-analisis-metabolik-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis sindrom
                                                metabolik</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Analysis kualitas kesehatan -->
                                    <tr id="penunjang-saffmedic-ai-analisis-kualitas-kesehatan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis kualitas
                                                kesehatan</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Analysis penyakit pembuluh darah jantung dan otak -->
                                    <tr id="penunjang-saffmedic-ai-analisis-penyakit-pembuluh-darah-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis penyakit
                                                pembuluh darah jantung dan otak</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: AUSDRISK (Australian Type 2 Diabetes Risk Assessment Tool) -->
                                    <tr id="penunjang-saffmedic-ai-analisis-ausdrisk-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>AUSDRISK
                                                (Australian Type 2 Diabetes Risk Assessment Tool)</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Analysis serangan jantung dalam 10 tahun mendatang -->
                                    <tr id="penunjang-saffmedic-ai-analisis-serangan-jantung-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis serangan
                                                jantung dalam 10 tahun mendatang</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Analysis puls cardiac maker -->
                                    <tr id="penunjang-saffmedic-ai-analisis-puls-cardiac-maker-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis puls
                                                cardiac maker</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- FARMASI (Level 0) --}}
                                    <tr id="farmasi-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('farmasi')">
                                            <svg id="farmasi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Farmasi</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 1: Resep --}}
                                    <tr id="farmasi-resep-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('farmasi-resep')">
                                            <svg id="farmasi-resep-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Resep</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 2: Racik --}}
                                    <tr id="farmasi-resep-racik-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Racik</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 1: Transaksi --}}
                                    <tr id="farmasi-transaksi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('farmasi-transaksi')">
                                            <svg id="farmasi-transaksi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Transaksi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 2: Penjualan --}}
                                    <tr id="farmasi-transaksi-penjualan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('farmasi-transaksi-penjualan')">
                                            <svg id="farmasi-transaksi-penjualan-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Penjualan</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-penjualan-faktur-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Faktur Penjualan</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-penjualan-daftar-piutang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Daftar Piutang</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-penjualan-pembayaran-piutang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Pembayaran Piutang</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-penjualan-penawaran-penjualan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Penawaran Penjualan</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-penjualan-return-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Return</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-penjualan-pengiriman-penjualan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Pengiriman Penjualan
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-penjualan-pesanan-penjualan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Pesanan Penjualan</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 2: Pembelian --}}
                                    <tr id="farmasi-transaksi-pembelian-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('farmasi-transaksi-pembelian')">
                                            <svg id="farmasi-transaksi-pembelian-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Pembelian</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-pembelian-faktur-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Faktur</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-pembelian-daftar-hutang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Daftar Hutang</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-pembelian-pembayaran-hutang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Pembayaran Hutang</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-pembelian-pesanan-pembelian-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Pesanan Pembelian</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-pembelian-permintaan-pembelian-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Permintaan Pembelian
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-pembelian-pengiriman-pembelian-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Pengiriman Pembelian
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-transaksi-pembelian-return-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700">Return</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 1: Akuntansi --}}
                                    <tr id="farmasi-akuntansi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('farmasi-akuntansi')">
                                            <svg id="farmasi-akuntansi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Akuntansi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 2: Item Akuntansi --}}
                                    <tr id="farmasi-akuntansi-saldo-awal-akun-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Saldo Awal Akun</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-akuntansi-kas-masuk-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Kas Masuk</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-akuntansi-kas-keluar-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Kas Keluar</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-akuntansi-uang-muka-penerimaan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Uang Muka Penerimaan
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-akuntansi-uang-muka-pengeluaran-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Uang Muka Pengeluaran
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-akuntansi-transfer-kas-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Transfer Kas</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-akuntansi-jurnal-umum-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Jurnal Umum</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-akuntansi-harta-tetap-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Harta Tetap</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 1: Inventori --}}
                                    <tr id="farmasi-inventori-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 cursor-pointer"
                                            onclick="toggleTree('farmasi-inventori')">
                                            <svg id="farmasi-inventori-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="inline-block h-4 w-4 transform transition-transform rotate-0 mr-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span> Inventori</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Level 2: Item Inventori --}}
                                    <tr id="farmasi-inventori-penyesuaian-persediaan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Penyesuaian Persediaan
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-inventori-stok-opname-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Stok Opname</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-inventori-mutasi-stok-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Mutasi Stok</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-inventori-mutasi-stok-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Mutasi Stok</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-inventori-saldo-awal-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Saldo Awal</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-inventori-konversi-satuan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Konversi Satuan</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="farmasi-inventori-level-harga-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Level Harga</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr
                                        id="farmasi-inventori-gudang-row"class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Gudang</td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                    </tr>

                                    <tr id="farmasi-manajemen-farmasi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Manajemen Farmasi</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- farmasi laporan --}}
                                    <tr id="farmasi-laporan-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Laporan</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- MANAJEMEN TRANSAKSI (PARENT) -->
                                    <tr id="manajemen-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('manajemen-transaksi')">
                                            <svg id="manajemen-transaksi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Manajemen</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU LEVEL 1: Transaksi -->
                                    <tr id="manajemen-transaksi-transaksi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('manajemen-transaksi-transaksi')">
                                            <svg id="manajemen-transaksi-transaksi-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Transaksi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU LEVEL 2: Penjualan (dibawah Transaksi) -->
                                    <tr id="manajemen-transaksi-transaksi-penjualan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('manajemen-transaksi-transaksi-penjualan')">
                                            <svg id="manajemen-transaksi-transaksi-penjualan-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Penjualan</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Penjualan: FAKTUR PENJUALAN -->
                                    <tr id="manajemen-transaksi-transaksi-penjualan-faktur-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Faktur</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Penjualan: DAFTAR PIUTANG -->
                                    <tr id="manajemen-transaksi-transaksi-penjualan-daftar-piutang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Daftar
                                                Piutang</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Penjualan: Pembayaran Piutang -->
                                    <tr id="manajemen-transaksi-transaksi-penjualan-pembayaran-piutang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Pembayaran
                                                Piutang</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Penjualan: Penawaran Penjualan -->
                                    <tr id="manajemen-transaksi-transaksi-penjualan-penawaran-penjualan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Penawaran
                                                Penjualan</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Penjualan: Return -->
                                    <tr id="manajemen-transaksi-transaksi-penjualan-return-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Return</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Penjualan: Pengiriman Penjualan -->
                                    <tr id="manajemen-transaksi-transaksi-penjualan-pengiriman-penjualan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Pengiriman
                                                Penjualan</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Penjualan: Pesanan Penjualan -->
                                    <tr id="manajemen-transaksi-transaksi-penjualan-pesanan-penjualan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Pesanan
                                                Penjualan</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU LEVEL 2: Pembelian (dibawah Transaksi) -->
                                    <tr id="manajemen-transaksi-transaksi-pembelian-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('manajemen-transaksi-transaksi-pembelian')">
                                            <svg id="manajemen-transaksi-transaksi-pembelian-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Pembelian</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Pembelian: FAKTUR PEMBELIAN -->
                                    <tr id="manajemen-transaksi-transaksi-pembelian-faktur-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Faktur</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Pembelian: Daftar Hutang -->
                                    <tr id="manajemen-transaksi-transaksi-pembelian-daftar-hutang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Daftar
                                                Hutang</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Pembelian: Pembayaran Hutang -->
                                    <tr id="manajemen-transaksi-transaksi-pembelian-pembayaran-hutang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Pembayaran
                                                Hutang</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Pembelian: Pesanan Pembelian -->
                                    <tr id="manajemen-transaksi-transaksi-pembelian-pesanan-pembelian-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Pesanan
                                                Pembelian</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Pembelian: Permintaan Pembelian -->
                                    <tr id="manajemen-transaksi-transaksi-pembelian-permintaan-pembelian-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Permintaan
                                                Pembelian</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Pembelian: Pengiriman Pembelian -->
                                    <tr id="manajemen-transaksi-transaksi-pembelian-pengiriman-pembelian-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Pengiriman
                                                Pembelian</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Pembelian: Return -->
                                    <tr id="manajemen-transaksi-transaksi-pembelian-return-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Return</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU LEVEL 1: Akuntansi -->
                                    <tr id="manajemen-transaksi-akuntansi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('manajemen-transaksi-akuntansi')">
                                            <svg id="manajemen-transaksi-akuntansi-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Akuntansi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Akuntansi: Saldo Awal Akun -->
                                    <tr id="manajemen-transaksi-akuntansi-saldo-awal-akun-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Saldo Awal
                                                Akun</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Akuntansi: Kas Masuk -->
                                    <tr id="manajemen-transaksi-akuntansi-kas-masuk-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Kas Masuk</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Akuntansi: Kas Keluar -->
                                    <tr id="manajemen-transaksi-akuntansi-kas-keluar-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Kas Keluar</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Akuntansi: Uang Muka Penerimaan -->
                                    <tr id="manajemen-transaksi-akuntansi-uang-muka-penerimaan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Uang Muka
                                                Penerimaan</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Akuntansi: Uang Muka Pengeluaran -->
                                    <tr id="manajemen-transaksi-akuntansi-uang-muka-pengeluaran-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Uang Muka
                                                Pengeluaran</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Akuntansi: Transfer Kas -->
                                    <tr id="manajemen-transaksi-akuntansi-transfer-kas-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Transfer
                                                Kas</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Akuntansi: Jurnal Umum -->
                                    <tr id="manajemen-transaksi-akuntansi-jurnal-umum-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Jurnal Umum</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Akuntansi: Harta Tetap -->
                                    <tr id="manajemen-transaksi-akuntansi-harta-tetap-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Harta Tetap</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-MENU LEVEL 1: Inventori -->
                                    <tr id="manajemen-transaksi-inventori-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('manajemen-transaksi-inventori')">
                                            <svg id="manajemen-transaksi-inventori-icon"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Inventori</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Inventori: Penyesuaian Persediaan -->
                                    <tr id="manajemen-transaksi-inventori-penyesuaian-persediaan-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Penyesuaian
                                                Persediaan</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Inventori: Stok Opname -->
                                    <tr id="manajemen-transaksi-inventori-stok-opname-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Stok Opname</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Inventori: Mutasi Stok -->
                                    <tr id="manajemen-transaksi-inventori-mutasi-stok-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Mutasi Stok</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Inventori: Saldo Awal -->
                                    <tr id="manajemen-transaksi-inventori-saldo-awal-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Saldo Awal</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Inventori: Konversi Harga -->
                                    <tr id="manajemen-transaksi-inventori-konversi-harga-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Konversi
                                                Harga</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- SUB-SUB-MENU: Inventori: Level Harga -->
                                    <tr id="manajemen-transaksi-inventori-level-harga-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Level Harga</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr
                                        id="manajemen-inventori-gudang-row"class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-16 text-xs text-gray-700">Gudang</td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                        <td class="px-6 py-2 text-center"><span class="text-darkteal text-xs">1
                                                gudang</span></td>
                                    </tr>

                                    {{-- Integrasi --}}
                                    <tr id="integrasi-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('integrasi')">
                                            <svg id="integrasi-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Integrasi</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- integrasi: satu sehat  --}}
                                    <tr id="integrasi-satu-sehat-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Satu Sehat</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- integrasi: BPJS --}}
                                    <tr id="integrasi-bpjs-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">BPJS</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Whatsapp --}}
                                    <tr id="integrasi-Whatsapp-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Whatsapp</td>
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
                                                <button data-popover-target="whatsapp-pro-info"
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

                                    {{-- Popover untuk WhatsApp PRO --}}
                                    <div data-popover id="whatsapp-pro-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Free 500 whatsapp</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    {{-- Popover untuk WhatsApp ENTERPRISE --}}
                                    <div data-popover id="whatsapp-enterprise-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Free 1000 whatsapp</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    <!-- MODUL (PARENT UTAMA) -->
                                    <tr id="modul-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('modul')">
                                            <svg id="modul-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Modul</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- IMPORT PENUNJANG -->
                                    <tr id="modul-import-penunjang-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                            onclick="toggleTree('modul-import-penunjang')">
                                            <svg id="modul-import-penunjang-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Import Penunjang</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- GRANDCHILD: Laboratorium -->
                                    <tr id="modul-import-penunjang-laboratorium-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-sm text-gray-800">
                                            <span>Laboratorium</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- GRANDCHILD: Audiometri -->
                                    <tr id="modul-import-penunjang-audiometri-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-sm text-gray-800"><span>Audiometri</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- GRANDCHILD: Spirometri -->
                                    <tr id="modul-import-penunjang-spirometri-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-sm text-gray-800"><span>Spirometri</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- GRANDCHILD: Radiologi -->
                                    <tr id="modul-import-penunjang-radiologi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-sm text-gray-800"><span>Radiologi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- GRANDCHILD: Kardiologi -->
                                    <tr id="modul-import-penunjang-kardiologi-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-sm text-gray-800"><span>Kardiologi</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- GRANDCHILD: Optometri -->
                                    <tr id="modul-import-penunjang-optometri-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-sm text-gray-800"><span>Optometri</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- GRANDCHILD: Odontogram -->
                                    <tr id="modul-import-penunjang-odontogram-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-20 text-sm text-gray-800"><span>Odontogram</span>
                                        </td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- IMPORT PASIEN -->
                                    <tr id="modul-import-pasien-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Import
                                                Pasien</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- IMPORT PESERTA MCU -->
                                    <tr id="modul-import-peserta-mcu-row"
                                        class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Import Peserta
                                                MCU</span></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- Tagihan -->
                                    <tr id="tagihan-row"class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                            onclick="toggleTree('tagihan')">
                                            <svg id="tagihan-icon" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2 transform transition-transform rotate-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span>Tagihan</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="tagihan-umum-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Umum</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="tagihan-organisasi-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Organisasi</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <tr id="tagihan-metode-kasir-row" class="hidden hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-2 pl-12 text-sm text-gray-800">Metode Kasir</td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- ANTRIAN -->
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900">
                                            <span>Antrian</span>
                                        </td>
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
                                                <button data-popover-target="antrian-pro-info"
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
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-center relative">
                                                <img class="absolute" src="{{ asset('img/h-yes.png') }}"
                                                    width="21">
                                                <button data-popover-target="antrian-enterprise-info"
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

                                    <div data-popover id="antrian-pro-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Tidak termasuk display dan anjungan</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    <div data-popover id="antrian-enterprise-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Tidak termasuk display dan anjungan</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    <!-- FITUR BEDAH -->
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900"><span>Fitur Bedah</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    <!-- Departemen/cabang-->
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900">
                                            <span>Departemen/Cabang</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">1</span></td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">1</span></td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">1</span></td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">1</span></td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">1</span></td>
                                    </tr>

                                    <!-- Divisi-->
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900"><span>Divisi</span></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </tr>

                                    {{-- Storage --}}
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center gap-1">
                                            <div class="flex items-start gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                                                </svg>
                                            </div>
                                            <span>Storage</span>
                                            <button data-popover-target="general-storage-info"
                                                data-popover-placement="bottom-end" type="button" class="ml-2">
                                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span class="sr-only">Show information</span>
                                            </button>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">1GB</span></td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">2GB</span></td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">4GB</span></td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">6GB</span></td>
                                        <td class="px-6 py-3 text-center"><span
                                                class="font-semibold text-darkteal">15GB</span></td>
                                    </tr>

                                    <div data-popover id="general-storage-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Apabila kuota storage penuh maka dapat dilakukan penambahan dengan kapasitas
                                                per 5GB</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    {{-- User --}}
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
                                            <span>User</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">2
                                                User</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">4
                                                User</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">5
                                                User</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">8
                                                User</span> </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">10
                                                User</span></td>
                                    </tr>

                                    {{-- Poli --}}
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center gap-1">
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                                    viewBox="0 0 24 24" fill="white" stroke="black"
                                                    stroke-width="1.5">
                                                    <path d="M15 2.013H9V9H2v6h7v6.987h6V15h7V9h-7z"></path>
                                                </svg>
                                            </div>
                                            <span>Poli</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1
                                                Poli</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">2
                                                Poli</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">3
                                                Poli</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">4
                                                Poli</span>
                                        </td>
                                        <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">10
                                                Poli</span>
                                        </td>
                                    </tr>

                                    {{-- HARGA --}}
                                    <tr class="bg-gray-50">
                                        <td class="px-6 py-4 text-base font-bold text-gray-900"><span>Harga / Tahun</span>
                                        </td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 3.550K</span></td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 4.980K</span></td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 9.000K</span></td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 24.000K</span></td>
                                        <td class="px-6 py-4 text-center"><span
                                                class="font-bold text-darkteal text-lg">IDR 43.000K</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="hidden lg:flex gap-8 justify-center text-xl text-darkteal">
                            <div class="w-[150px] bg-[#E6E6E6] rounded-md">
                                <img src="img/menu-fitur.png" class="w-16 mx-auto py-10" alt="">
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2 rounded-md">
                                <h1>Cocok untuk Praktek Dokter</h1>
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2  rounded-md">
                                <h1>Cocok untuk Praktek Dokter 2 Poli</h1>
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2  rounded-md">
                                <h1>Cocok untuk Klinik 2 Poli</h1>
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2  rounded-md">
                                <h1>Klinik Pratama Utama</h1>
                            </div>
                            <div class="bg-white w-[150px] font-medium px-7 py-2  rounded-md">
                                <h1>Cocok untuk Rumah Sakit</h1>
                            </div>
                        </div>
                        <div class="hidden lg:flex gap-8 justify-center text-base text-center text-white mt-3">
                            <div class="w-[150px]  rounded-md">
                            </div>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-basic">
                                Pesan Sekarang</a>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-paket-medium-i">
                                Pesan Sekarang</a>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-paket-medium-ii">
                                Pesan Sekarang</a>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-paket-pro">
                                Pesan Sekarang</a>
                            <a class="bg-darkteal w-[150px] font-medium px-7 py-2 transform hover:scale-110 duration-150 rounded-md"
                                href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-paket-enterprise">
                                Pesan Sekarang</a>
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
                                <h3 class="text-2xl my-3">HYBRID</h3>
                                <p>Ini merupakan paket yang mengizinkan pengguna menerapkan SAFF-Medic pada server mandiri
                                    dengan tetap melakukan langganan lisensi.</p>
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
                                <h3 class="text-2xl my-3">KSO</h3>
                                <p>SAFF-Medic memiliki paket Kerjasama Operasi (KSO) untuk semua Jenis Fasked</p> <br>
                                <a class="mt-3 bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md transition-transform duration-200 hover:scale-110"
                                    href="/harga/kso">
                                    Lihat Paket KSO
                                    <span class="ml-1">→</span>
                                </a>
                            </div>
                        </div>

                        {{-- Tombol Demo --}}
                        <div class="flex justify-center" data-aos="fade-down" data-aos-duration="1000">
                            <div class="mt-10">
                                <a href="{{ route('form-demo') }}">
                                    <p
                                        class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                                        Ajukan Produk <br>Demo
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Tarif Lainnya General --}}
                    <div class="max-w-6xl mx-auto mt-20 px-4" data-aos="fade-down" data-aos-duration="1000">
                        <h2
                            class="bg-[#166F61] text-white font-bold text-xl md:text-2xl py-4 rounded-lg text-center mb-6">
                            Tarif SAFFMedic Lainnya
                        </h2>
                        <div class="bg-white rounded-lg shadow p-5">
                            <h3 class="font-bold text-base text-center text-gray-800 mb-2">Keterangan</h3>
                            <p class="text-gray-600 text-center text-sm">
                                Jika dalam paket SAFFMedic yang Anda gunakan belum tersedia fitur atau modul tertentu,
                                Anda dapat menambahkannya secara terpisah sesuai kebutuhan.
                            </p>
                            <p class="text-gray-600 text-center text-sm ">
                                SAFFMedic memberikan fleksibilitas bagi Anda untuk menentukan fitur yang ingin digunakan.
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
                                            Custom Desain Cetak
                                            <button data-popover-target="desain-cetak-info" data-popover-placement="bottom-end"
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
                                            Rp350.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / One Time
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-lainnya/custom-desain-faktur"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <div data-popover id="desain-cetak-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Kami menyediakan template cetak default. 
                                                Jika Anda ingin format desain sendiri, gunakan opsi custom desain cetak ini.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                    <!-- Item 2 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Custom Report
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp500.000,00
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / One Time
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-lainnya/custom-report"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 3 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Premium Support
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Tahun
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-lainnya/premium-support"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 4 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Kuota Whatsapp
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / 2500 kuota
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=8"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 5 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">5</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Tambahkan Kuota WA
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / 7000 kuota
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=10"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 6 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">6</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Integrasi Satu Sehat
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp1.000.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Tahun
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-lainnya/integrasi-satu-sehat"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Item 7 -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">7</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Integrasi BPJS
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp2.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Tahun
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=13"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">8</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Custom Report / Report Jenis
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / One Time
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-lainnya/custom-report"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">9</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Penambahan Gudang / Gudang
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp3.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Gudang / Tahun
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-lainnya/penambahan-gudang"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Penambahan Departemen / Departemen
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp2.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Departemen / Tahun
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-lainnya/penambahan-departemen"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">11</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Penambahan Poli / Poli
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp2.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / Poli / Tahun
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=16"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Modul Import Rekam Medis
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Rp1.500.000
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            / One Time
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=17"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">13</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            Penambahan Storage
                                            <button data-popover-target="penambahan-storage-info" data-popover-placement="bottom-end"
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
                                            / 4GB
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=17"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </td>
                                    </tr>

                                    <div data-popover id="penambahan-storage-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <p>Penambahan strorage dilakukan apabila kapasitas pada paket 
                                                penggunaan SAFFMedic anda telah penuh.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{--  Modul Import Penunjang general --}}
                    <div class="w-full max-w-7xl mx-auto px-4 py-8 mt-10">
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <!-- Header: Judul + Icon -->
                            <div class="flex items-center justify-center gap-3 mb-5">
                                <h3 class="text-2xl font-bold text-darkteal">Modul Import Penunjang</h3>
                            </div>
                            <p class="text-gray-600 mb-8 text-center">
                                Modul ini memungkinkan Anda mengimpor data dari file Excel ke dalam sistem SAFFMedic dengan
                                mudah dan cepat.
                                Ideal untuk klinik yang ingin mempercepat proses input data pasien, stok, atau laporan.
                            </p>
                            <div class="flex flex-nowrap gap-4 justify-start pl-4 overflow-x-auto pb-2">
                                <!-- Modul 1 -->
                                <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                                    <div
                                        class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                        <img src="img/icon_excel.png" class="w-8 h-8 object-contain"
                                            alt="Laboratorium">
                                    </div>
                                    <h4 class="text-xs font-semibold mb-1 leading-tight">Laboratorium</h4>
                                    <p class="text-xs">IDR 500K / Thn</p>
                                </div>

                                <!-- Modul 2 -->
                                <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                                    <div
                                        class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                        <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Radiologi">
                                    </div>
                                    <h4 class="text-xs font-semibold mb-1 leading-tight">Radiologi</h4>
                                    <p class="text-xs">IDR 350K / Thn</p>
                                </div>

                                <!-- Modul 3 -->
                                <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                                    <div
                                        class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                        <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Spirometry">
                                    </div>
                                    <h4 class="text-xs font-semibold mb-1 leading-tight">Spirometry</h4>
                                    <p class="text-xs">IDR 350K / Thn</p>
                                </div>

                                <!-- Modul 4 -->
                                <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                                    <div
                                        class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                        <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Optometry">
                                    </div>
                                    <h4 class="text-xs font-semibold mb-1 leading-tight">Optometry</h4>
                                    <p class="text-xs">IDR 350K / Thn</p>
                                </div>

                                <!-- Modul 5 -->
                                <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                                    <div
                                        class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                        <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Cardiologi">
                                    </div>
                                    <h4 class="text-xs font-semibold mb-1 leading-tight">Cardiologi</h4>
                                    <p class="text-xs">IDR 350K / Thn</p>
                                </div>

                                <!-- Modul 6 -->
                                <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                                    <div
                                        class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                        <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Audiometri">
                                    </div>
                                    <h4 class="text-xs font-semibold mb-1 leading-tight">Audiometri</h4>
                                    <p class="text-xs">IDR 350K / Thn</p>
                                </div>

                                <!-- Modul 7 -->
                                <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                                    <div
                                        class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                        <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Odontogram">
                                    </div>
                                    <h4 class="text-xs font-semibold mb-1 leading-tight">Odontogram</h4>
                                    <p class="text-xs">IDR 350K / Thn</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  Benefit Paket General --}}
                    <section class="container mx-auto my-20 py-12" data-aos="fade-up-right" data-aos-duration="1000">
                        <div class="md:w-1/3 mb-10 text-center mx-auto text-darkgreen text-2xl font-semibold p-5">
                            <h1>Ini Yang didapatkan setiap Kamu berlangganan SAFFMedic</h1>
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
                                                MEDIUM 1
                                            </th>
                                            <th class="px-6 py-8 text-center text-lg font-bold">
                                                MEDIUM 2
                                            </th>
                                            <th class="px-6 py-8 text-center text-lg font-bold">
                                                PRO
                                            </th>
                                            <th class="px-6 py-8 text-center text-lg font-bold">
                                                ENTERPRISE
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        <!-- Pelatihan Online -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332-.477 4.5-1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                                    </path>
                                                </svg>
                                                Pelatihan Online
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    4 Jam
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    10 Jam
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    20 Jam
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    30 Jam
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    40 Jam
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Pelatihan On-Site -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                    </path>
                                                </svg>
                                                Pelatihan On-Site
                                                <button data-popover-target="pelatihan-on-site-general-info"
                                                    data-popover-placement="bottom-end" type="button" class="ml-2">
                                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span class="sr-only">Show information</span>
                                                </button>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-gray-100 text-gray-800">
                                                    -
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-gray-100 text-gray-800">
                                                    -
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    3 Jam
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    6 Jam
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    10 Jam
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- Popover untukSupport Premium --}}
                                        <div data-popover id="pelatihan-on-site-general-info" role="tooltip"
                                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                            <div class="p-3 space-y-2">
                                                <p>Biaya kunjungan offline di tanggung penyelenggara</p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>

                                        <!-- Migrasi data awal -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                                    </path>
                                                </svg>
                                                Migrasi data awal
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    Data Kontak
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    Data Kontak
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    Data Kontak
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    Data Kontak dan Master Produk
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                                    Data Kontak dan Master Produk
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- After sale service -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                                    </path>
                                                </svg>
                                                After sale service
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

                                        <!-- Support Reguler -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                                    </path>
                                                </svg>
                                                Support Reguler
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

                                        <!-- Support Premium -->
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                                    </path>
                                                </svg>
                                                Support Premium
                                                <button data-popover-target="support-premium-info"
                                                    data-popover-placement="bottom-end" type="button" class="ml-2">
                                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span class="sr-only">Show information</span>
                                                </button>
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
                                        </tr>

                                        {{-- Popover untukSupport Premium --}}
                                        <div data-popover id="support-premium-info" role="tooltip"
                                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                            <div class="p-3 space-y-2">
                                                <p>Dibuatkan group Whatsapp</p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </tbody>
                                    <tfoot>
                                        <tr class="bg-gray-50">
                                            <td colspan="6" class="px-6 py-8 text-center">
                                                <a href="{{ route('form-demo') }}"
                                                    class="inline-flex items-center px-8 py-4 text-lg font-bold rounded-full shadow-lg text-white bg-darkteal border-2 border-green-700 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transform transition-transform hover:scale-105">
                                                    Ajukan Produk Demo
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
                    {{-- Modul Akutansi General --}}
                    <div class="bg-gray-50 py-8 px-4">
                        <div class="max-w-6xl mx-auto">
                            <!-- Header Section -->
                            <div class="text-center mb-8">
                                <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Modul Akutansi</h1>
                                <p class="text-gray-600 mt-2">Pilih paket yang sesuai dengan kebutuhan bisnis Anda.</p>
                            </div>

                            <!-- Pricing Table Container -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-5xl mx-auto">
                                <!-- Table Header Row -->
                                <div class="grid grid-cols-3 border-b border-gray-200 bg-darkteal text-white">
                                    <div class="py-4 px-6 font-bold">Fitur</div>
                                    <div class="py-4 px-6 text-center font-bold">Pro</div>
                                    <div class="py-4 px-6 text-center font-bold">Enterprise</div>
                                </div>
                                <div class="divide-y divide-gray-200">
                                    <div
                                        class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="font-medium text-gray-800">Saldo Awal Akun</div>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="font-medium text-gray-800">Kas Masuk</div>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="font-medium text-gray-800">Kas Keluar</div>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="font-medium text-gray-800">uang Muka Penerimaan</div>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="font-medium text-gray-800">Uang Muka Pengeluaran</div>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="font-medium text-gray-800">Transfer Kas</div>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="font-medium text-gray-800">Jurnal Umum</div>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="font-medium text-gray-800">Harta Tetap</div>
                                        <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                                class="mx-auto"></td>
                                        <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                                class="mx-auto"></td>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                        <div class="text-gray-800">Harga / Tahun</div>
                                        <div class="text-center text-darkteal text-lg">IDR 4.5JT</div>
                                        <div class="text-center text-darkteal text-lg">IDR 6.5JT</div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="grid grid-cols-3 py-4 px-6 bg-white">
                                        <div></div>
                                        <div class="text-center">
                                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=1"
                                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=3"
                                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                                Pesan Sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 max-w-5xl mx-auto p-4 bg-green-50 rounded-lg border border-green-200">
                                <h3 class="font-bold text-base text-center text-gray-800 mb-2">Catatan</h3>
                                <p class="text-gray-600 text-center text-sm mb-2">
                                    Perubahan harga dapat saja terjadi namun kami semaksimal mungkin tetap memberikan
                                    harga dan pelayanan yang terbaik buat Anda.
                                </p>
                                <p class="text-gray-600 text-center text-sm">
                                    Konsultasikan kebutuhan anda kepada kami untuk mendapatkan harga penawaran terbaik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{-- MCU Feature Comparison Table --}}
    <div class="hidden" id="mcu" role="tabpanel" aria-labelledby="mcu-tab">
        <section class="container mx-auto my-20 p-2 bg-[#E6E6E670]" data-aos="fade-down" data-aos-duration="1000">
        <div class="text-center my-8 max-w-4xl mx-auto px-4">
            <h1 class="md:text-3xl text-2xl text-darkgreen font-semibold mb-3">PAKET MCU</h1>
            <p class="text-darkgreen text-base md:text-lg mb-2">Aplikasi MCU Fitur lengkap, dan fleksibel.</p>
            <p class="text-darkteal text-base md:text-lg mb-2">Tentukan paket MCU sesuai dengan kapasitas pelayanan MCU.</p>
            <p class="text-darkteal text-sm md:text-base leading-relaxed">Paket dan tarif pada halaman ini dapat disesuaikan dengan kebutuhan fitur 
                dan modul yang Anda perlukan. Tim kami akan membantu menghitung serta memberikan penawaran harga 
                terbaik sesuai kebutuhan Anda. Silakan hubungi SAFFMedic untuk melakukan kustomisasi paket.</p>
        </div>

            {{-- === TABEL MCU LANGSUNG (TANPA "LIHAT FITUR SELENGKAPNYA") === --}}
            <div class="w-full overflow-x-auto py-5 text-base text-darkgreen mx-auto my-5">
                <table class="min-w-full divide-y divide-gray-200 bg-white rounded-xl shadow-lg">
                    <thead>
                        <tr class="bg-turqoise text-white">
                            <th class="px-6 py-4 text-left text-lg font-bold rounded-tl-xl">Fitur</th>
                            <th class="px-6 py-4 text-center text-lg font-bold">PAKET 1</th>
                            <th class="px-6 py-4 text-center text-lg font-bold">PAKET 2</th>
                            <th class="px-6 py-4 text-center text-lg font-bold">PAKET 3</th>
                            <th class="px-6 py-4 text-center text-lg font-bold">PAKET 4</th>
                            <th class="px-6 py-4 text-center text-lg font-bold">PAKET 5</th>
                            <th class="px-6 py-4 text-center text-lg font-bold rounded-tr-xl">PAKET 6</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        {{-- MCU (parent) --}}
                        <tr id="mcu-mcu-row" class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                onclick="toggleMcuTree('mcu-mcu')">
                                <svg id="mcu-mcu-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>MCU</span>
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB-MENU MCU --}}
                        <tr id="mcu-umum-mcu-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                onclick="toggleMcuTree('mcu-umum-mcu')">
                                <svg id="mcu-umum-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Umum</span>
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB MENU Pelayanan: MCU: Admisi --}}
                        <tr id="mcu-umum-admisi-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Admisi</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB MENU Pelayanan: MCU: Translate bahasa --}}
                        <tr id="mcu-umum-bahasa-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Translate Bahasa</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB-MENU Pelayanan: MCU --}}
                        <tr id="mcu-organisasi-mcu-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                onclick="toggleMcuTree('mcu-organisasi-mcu')">
                                <svg id="mcu-pelayanan-mcu-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Organisasi</span>
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- admisi --}}
                        <tr id="mcu-organisasi-admisi-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Admisi</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB MENU Pelayanan: MCU: Translate bahasa --}}
                        <tr id="mcu-organisasi-bahasa-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Translate Bahasa</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        <div data-popover id="mcu-organisasi-kuota-organisasi-info" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                            <div class="p-3 space-y-2">
                                <p>Berfungsi untuk perusahaan melakukan penginputan data peserta
                                    secara mandiri dan mengikuti kuota yang terdapat di faskes.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>

                        {{-- login --}}
                        <tr id="mcu-organisasi-kuota-login-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700 flex items-center gap-1">
                                Login
                                <button data-popover-target="mcu-organisasi-login-info"
                                    data-popover-placement="bottom-end" type="button" class="ml-2">
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
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">1 User</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">1 User</span></td>
                        </tr>

                        <div data-popover id="mcu-organisasi-login-info" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                            <div class="p-3 space-y-2">
                                <p>Perusahaan mendapatkan akses untuk menginput data peserta MCU dan melihat
                                    laporan
                                    hasil MCU, dengan jumlah user yang disesuaikan dengan akun yang dimiliki FASKES.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>

                        {{-- PENUNJANG (PARENT) --}}
                        <tr id="mcu-penunjang-row" class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                onclick="toggleMcuTree('mcu-penunjang')">
                                <svg id="mcu-penunjang-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Penunjang</span>
                            </td>
                            <td class="px-6 py-3 text-center">-</td>
                            <td class="px-6 py-3 text-center">-</td>
                            <td class="px-6 py-3 text-center">-</td>
                            <td class="px-6 py-3 text-center">-</td>
                            <td class="px-6 py-3 text-center">-</td>
                            <td class="px-6 py-3 text-center">-</td>
                        </tr>

                        {{-- SUB-MENU: Penunjang: Umum --}}
                        <tr id="mcu-penunjang-umum-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                onclick="toggleMcuTree('mcu-penunjang-umum')">
                                <svg id="mcu-penunjang-umum-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Penunjang Umum</span>
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Laboratorium --}}
                        <tr id="mcu-penunjang-laboratorium-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Laboratorium</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Radiologi --}}
                        <tr id="mcu-penunjang-radiologi-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Radiologi</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Kardiologi --}}
                        <tr id="mcu-penunjang-kardiologi-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Kardiologi</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Audiometri --}}
                        <tr id="mcu-penunjang-audiometri-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Audiometri</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Spirometri --}}
                        <tr id="mcu-penunjang-spirometri-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Spirometri</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Optometri --}}
                        <tr id="mcu-penunjang-optometri-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Optometri</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Odontogram --}}
                        <tr id="mcu-penunjang-odontogram-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Odontogram</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB-MENU: Penunjang: Penunjang Analysis --}}
                        <tr id="mcu-penunjang-analysis-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center space-x-1 cursor-pointer"
                                onclick="toggleMcuTree('mcu-penunjang-analysis')">
                                <svg id="mcu-penunjang-analysis-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Penunjang Analysis</span>
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center">-</td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Frammingham --}}
                        <tr id="mcu-penunjang-frammingham-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Frammingham</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- DASS21 --}}
                        <tr id="mcu-penunjang-dass21-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>DASS21</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SRQ20 --}}
                        <tr id="mcu-penunjang-srq20-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>SRQ20</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Harvard Test --}}
                        <tr id="mcu-penunjang-harvard-test-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Harvard Test</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Jakarta Cardiavaskular --}}
                        <tr id="mcu-penunjang-jakarta-cardiavaskular-row"
                            class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-xs text-gray-700"><span>Jakarta Cardiavaskular</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB-MENU: Penunjang: Penunjang Analysis: SAFFMedic AI Analisis (COLLAPSIBLE) --}}
                        <tr id="mcu-penunjang-saffmedic-ai-analisis-row"
                            class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-16 text-sm text-gray-800 flex items-center space-x-2 cursor-pointer"
                                onclick="toggleMcuTree('mcu-penunjang-saffmedic-ai-analisis')">
                                <svg id="mcu-penunjang-saffmedic-ai-analisis-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>SAFFMedic AI Analisis</span>
                                <button data-popover-target="mcu-penunjang-saffmedic-ai-analisis-info"
                                    data-popover-placement="bottom-end" type="button" class="ml-2">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
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
                            <td class="px-6 py-2 text-center">-</td>
                            <td class="px-6 py-2 text-center">-</td>
                            <td class="px-6 py-2 text-center">-</td>
                            <td class="px-6 py-2 text-center">-</td>
                            <td class="px-6 py-2 text-center">-</td>
                            <td class="px-6 py-2 text-center">-</td>
                        </tr>

                        <div data-popover id="mcu-penunjang-saffmedic-ai-analisis-info" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                            <div class="p-3 space-y-2">
                                <p>Tools untuk membantu dokter atau petugas medis membaca data dari hasil analisa AI</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>

                        {{-- SUB-SUB-MENU: Analysis sindrom metabolik --}}
                        <tr id="mcu-penunjang-saffmedic-ai-analisis-metabolik-row"
                            class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis sindrom metabolik</span>
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                        </tr>

                        {{-- SUB-SUB-MENU: Analysis kualitas kesehatan --}}
                        <tr id="mcu-penunjang-saffmedic-ai-analisis-kualitas-kesehatan-row"
                            class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis kualitas kesehatan</span>
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB-SUB-MENU: Analysis penyakit pembuluh darah jantung dan otak --}}
                        <tr id="mcu-penunjang-saffmedic-ai-analisis-penyakit-pembuluh-darah-row"
                            class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis penyakit pembuluh darah
                                    jantung dan otak</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB-SUB-MENU: AUSDRISK --}}
                        <tr id="mcu-penunjang-saffmedic-ai-analisis-ausdrisk-row"
                            class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>AUSDRISK (Australian Type 2
                                    Diabetes Risk Assessment Tool)</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB-SUB-MENU: Analysis serangan jantung dalam 10 tahun mendatang --}}
                        <tr id="mcu-penunjang-saffmedic-ai-analisis-serangan-jantung-row"
                            class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis serangan jantung dalam 10
                                    tahun mendatang</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- SUB-SUB-MENU: Analysis puls cardiac maker --}}
                        <tr id="mcu-penunjang-saffmedic-ai-analisis-puls-cardiac-maker-row"
                            class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-20 text-xs text-gray-700"><span>Analysis puls cardiac maker</span>
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- MANAJEMEN (PARENT) --}}
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                onclick="toggleMcuTree('mcu-manajemen')">
                                <svg id="mcu-manajemen-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Manajemen</span>
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Storage --}}
                        <tr id="mcu-manajemen-storage-row"class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-sm text-gray-800 flex items-center gap-1 pl-12">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                                    </svg>
                                </div>
                                <span>Storage</span>
                                <button data-popover-target="mcu-storage-info" data-popover-placement="bottom-end"
                                    type="button" class="ml-2">
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
                            <td class="px-6 py-2 text-center"><span class="text-xs">1 GB</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">2 GB</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">4 GB</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">6 GB</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">10 GB</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">15 GB</span></td>
                        </tr>

                        {{-- Popover untuk WhatsApp PRO --}}
                        <div data-popover id="mcu-storage-info" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <p>Apabila kuota storage penuh maka dapat dilakukan penambahan dengan kapasitas per 5GB</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>

                        {{-- Tenaga Medis --}}
                        <tr id="mcu-manajemen-tenaga-medis-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 text-sm text-gray-800 flex items-center gap-1 pl-12">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg>
                                </div>
                                <span>Hak Akses (User) </span>
                            </td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">3 User</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">5 User</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">8 User</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">10 User</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">13 User</span></td>
                            <td class="px-6 py-2 text-center"><span class="text-xs">16 User</span></td>
                        </tr>

                        {{-- INTEGRASI (PARENT) --}}
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                onclick="toggleMcuTree('mcu-integrasi')">
                                <svg id="mcu-integrasi-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Integrasi</span>
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Satu Sehat --}}
                        <tr id="mcu-integrasi-satu-sehat-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Satu Sehat</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- BPJS --}}
                        <tr id="mcu-integrasi-bpjs-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>BPJS</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Whatsapp --}}
                        <tr id="mcu-integrasi-whatsapp-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Whatsapp</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center">
                                <div class="flex justify-center relative">
                                    <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                    <button data-popover-target="whatsapp-paket-6" data-popover-placement="bottom-end"
                                        type="button">
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

                        {{-- Popover untuk WhatsApp PRO --}}
                        <div data-popover id="whatsapp-paket-6" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <p>Free 500 whatsapp</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>

                        {{-- MODUL (PARENT) --}}
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                onclick="toggleMcuTree('mcu-modul')">
                                <svg id="mcu-modul-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Modul</span>
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Import Pasien --}}
                        <tr id="mcu-modul-import-pasien-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Import Pasien</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Import Peserta MCU --}}
                        <tr id="mcu-modul-import-peserta-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Import Peserta MCU</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- modul lab --}}
                        <tr id="mcu-modul-laboratorium-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Modul import data
                                    hasil Laboratorium</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- modul radiologi --}}
                        <tr id="mcu-modul-radiologi-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Modul import data
                                    hasil Radiologi</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- modul kardiologi --}}
                        <tr id="mcu-modul-kardiologi-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Modul import data hasil
                                    Kardiologi</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- modul audiometri --}}
                        <tr id="mcu-modul-audiometri-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Modul import data hasil
                                    Audiometri</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                    class="mx-auto"></td>
                        </tr>

                        {{-- modul spirometri --}}
                        <tr id="mcu-modul-spirometri-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Modul import data
                                    hasil Spirometri</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- TAGIHAN (PARENT) --}}
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                onclick="toggleMcuTree('mcu-tagihan')">
                                <svg id="mcu-tagihan-icon" xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <span>Tagihan</span>
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Tagihan Umum --}}
                        <tr id="mcu-tagihan-umum-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Umum</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Tagihan Organisasi --}}
                        <tr id="mcu-tagihan-organisasi-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Organisasi</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        {{-- Metode Kasir --}}
                        <tr id="mcu-tagihan-metode-kasir-row" class="hidden hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Metode Kasir</span></td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                            <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"class="mx-auto">
                            </td>
                        </tr>

                        <!-- Departemen/cabang-->
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900">
                                <span>Departemen/Cabang</span>
                            </td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span></td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span></td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span></td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span></td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span></td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span></td>
                        </tr>

                        <!-- Divisi-->
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900"><span>Divisi</span></td>
                            <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-3 text-center"><img src="img/h-no.png" width="21"
                                    class="mx-auto"></td>
                            <td class="px-6 py-3 text-center"><img src="img/h-yes.png" width="21"
                                    class="mx-auto"></td>
                        </tr>

                        {{-- KUOTA PESERTA --}}
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-3 text-base font-medium text-gray-900"><span>Kuota Peserta
                                    /Bulan</span></td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">300</span>
                            </td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">600</span>
                            </td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1.300</span>
                            </td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1.500</span>
                            </td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1.800</span>
                            </td>
                            <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">2.500</span>
                            </td>
                        </tr>

                        {{-- HARGA --}}
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 text-base font-bold text-gray-900"><span>Harga / Tahun</span></td>
                            <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                    5.500K</span></td>
                            <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                    7.500K</span></td>
                            <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                    10.500K</span></td>
                            <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                    14.500K</span></td>
                            <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                    23.000K</span></td>
                            <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                    29.000K</span></td>
                        </tr>

                        {{-- SAMPAI BARIS "TOMBOL PESAN" --}}
                        <tr class="bg-white">
                            <td class="px-6 py-4"></td>
                            <td class="px-6 py-4 text-center">
                                <a href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-i"
                                    class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                    Pesan Sekarang
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-2"
                                    class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                    Pesan Sekarang
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-3"
                                    class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                    Pesan Sekarang
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-4"
                                    class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                    Pesan Sekarang
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-5"
                                    class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                    Pesan Sekarang
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="https://my.saffix.id/cart.php?a=confproduct&i=0"
                                    class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                    Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-darkteal text-center">Beberapa paket yang tidak memiliki fitur atau modul dapat di tambhakan
                secara terpisah</p>

            {{-- === BLOK KETENTUAN === --}}
            <div class="bg-white text-gray-800 py-6 mt-10">
                <div class="pl-6 pr-6 md:pl-12 md:pr-12">
                    <h4 class="text-2xl font-semibold text-darkteal mb-5 text-left">Ketentuan</h4>
                    <p class="text-sm text-gray-600 mb-6 text-left">Syarat dan ketentuan penggunaan paket MCU.</p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3 pb-4 border-b border-gray-300">
                            <span class="font-bold text-lg text-darkteal flex-shrink-0">1.</span>
                            <p class="text-sm text-gray-800 leading-relaxed text-left">
                                Jika kuota dashboard perusahaan sudah mencapai batas maksimal, Anda dapat menambah kapasitas
                                dengan biaya sebesar
                                <span class="font-semibold text-darkteal">Rp2.500.000 per perusahaan mitra MCU
                                    Faskes.</span>
                                Penambahan ini mencakup bonus 200 peserta tambahan serta 4 tenaga medis tambahan.
                            </p>
                        </div>
                        <div class="flex items-start gap-3 pb-4 border-b border-gray-300">
                            <span class="font-bold text-lg text-darkteal flex-shrink-0">2.</span>
                            <p class="text-sm text-gray-800 leading-relaxed text-left">
                                Kelebihan kapasitas pada setiap paket dikenakan biaya tambahan sebesar
                                <span class="font-semibold text-darkteal">Rp17.500 per tindakan MCU</span>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Private Server MCU --}}
            <div class="flex flex-col md:flex-row justify-center gap-5 mt-10" data-aos="fade-down"
                data-aos-duration="1000">
                <div
                    class="relative mt-10 md:w-1/2 align-items-center p-8 bg-darkteal text-white font-medium text-xl text-center rounded-xl shadow-lg">
                    <div class="absolute inset-x-0 -top-4">
                        <div class="relative flex justify-center">
                            <div class="absolute -top-8 bg-white rounded-full p-1 shadow-md border-4 border-darkteal">
                                <div class="bg-white rounded-full p-3">
                                    <img src="{{ asset('img/private_server.png') }}" class="w-14 h-14 object-contain"
                                        alt="Private Server">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl my-3">Private Server</h3>
                    <p class="mb-2">
                        Apabila kegiatan MCU di klinik Anda memiliki jumlah pengunjung yang cukup padat,
                        kami menyarankan untuk menggunakan Private Server.
                    </p>
                    <p class="mb-6">
                        Penggunaan Private Server akan membantu memperlancar kinerja dan stabilitas aplikasi SAFFMedic yang
                        Anda gunakan.
                    </p>
                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full text-sm text-center text-white border-collapse">
                            <thead>
                                <tr class="border-b border-teal-300/30 bg-darkteal">
                                    <th class="py-2 px-3 font-semibold">Produk</th>
                                    <th class="py-2 px-3 font-semibold">Kapasitas mcu / hari</th>
                                    <th class="py-2 px-3 font-semibold">Keterangan</th>
                                    <th class="py-2 px-3 font-semibold">Harga/tahun</th>
                                </tr>
                            </thead>
                            <tbody class="bg-darkteal">
                                <tr class="border-b border-teal-300/20 hover:bg-teal-900/30 transition">
                                    <td class="py-2 px-3 font-medium">PS1</td>
                                    <td class="py-2 px-3">300 s/d 1000</td>
                                    <td class="py-2 px-3">-</td>
                                    <td class="py-2 px-3">Rp7.500.000</td>
                                </tr>
                                <tr class="hover:bg-teal-900/30 transition">
                                    <td class="py-2 px-3 font-medium">PS2</td>
                                    <td class="py-2 px-3">650 s/d 1500</td>
                                    <td class="py-2 px-3">-</td>
                                    <td class="py-2 px-3">Rp8.500.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Tarif MCU --}}
            <div class="max-w-6xl mx-auto mt-20 px-4" data-aos="fade-down" data-aos-duration="1000">
                <h2 class="bg-[#166F61] text-white font-bold text-xl md:text-2xl py-4 rounded-lg text-center mb-6">
                    Tarif SAFFMedic MCU Lainnya
                </h2>
                <div class="bg-white rounded-lg shadow p-5">
                    <h3 class="font-bold text-base text-center text-gray-800 mb-2">Keterangan</h3>
                    <p class="text-gray-600 text-center text-sm">
                        Jika dalam paket SAFFMedic yang Anda gunakan belum tersedia fitur atau modul tertentu,
                        Anda dapat menambahkannya secara terpisah sesuai kebutuhan.
                    </p>
                    <p class="text-gray-600 text-center text-sm ">
                        SAFFMedic memberikan fleksibilitas bagi Anda untuk menentukan fitur yang ingin digunakan.
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
                                    Periode / Detail
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
                                    Translate Cetak Bahasa / Bahasa / per Page
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    Rp350.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    / per page
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="https://my.saffix.id/cart.php?a=confproduct&i=0"
                                        class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                        Pesan Sekarang
                                    </a>
                                </td>
                            </tr>

                            <!-- Item 2 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Custom Report / Report / Jenis
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    Rp500.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    / one time
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="https://my.saffix.id/cart.php?a=confproduct&i=1"
                                        class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                        Pesan Sekarang
                                    </a>
                                </td>
                            </tr>

                            <!-- Item 3 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 flex items-center">
                                    Aktifasi Dashboard Organisasi
                                    <button data-popover-target="aktifasi-dashboard-info"
                                        data-popover-placement="bottom-end" type="button" class="ml-2">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
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
                                    R2.500.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    / Tahun
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="https://my.saffix.id/cart.php?a=confproduct&i=2"
                                        class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                        Pesan Sekarang
                                    </a>
                                </td>
                            </tr>

                            {{-- Popover untuk Aktifasi Dashboard --}}
                            <div data-popover id="aktifasi-dashboard-info" role="tooltip"
                                class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                <div class="p-3 space-y-2">
                                    <p>Peserta MCU mengikuti kuota Klinik</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>


            {{--  Modul Import Penunjang MCU --}}
            <div class="w-full max-w-7xl mx-auto px-4 py-8 mt-10">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <!-- Header: Judul + Icon -->
                    <div class="flex items-center justify-center gap-3 mb-5">
                        <h3 class="text-2xl font-bold text-darkteal">Modul Import Penunjang</h3>
                    </div>
                    <p class="text-gray-600 mb-8 text-center">
                        Modul ini memungkinkan Anda mengimpor data dari file Excel ke dalam sistem SAFFMedic dengan
                        mudah dan cepat.
                        Ideal untuk klinik yang ingin mempercepat proses input data pasien, stok, atau laporan.
                    </p>
                    <div class="flex flex-nowrap gap-4 justify-start pl-4 overflow-x-auto pb-2">
                        <!-- Modul 1 -->
                        <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                            <div class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Laboratorium">
                            </div>
                            <h4 class="text-xs font-semibold mb-1 leading-tight">Laboratorium</h4>
                            <p class="text-xs">IDR 500K / Thn</p>
                        </div>

                        <!-- Modul 2 -->
                        <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                            <div class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Radiologi">
                            </div>
                            <h4 class="text-xs font-semibold mb-1 leading-tight">Radiologi</h4>
                            <p class="text-xs">IDR 350K / Thn</p>
                        </div>

                        <!-- Modul 3 -->
                        <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                            <div class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Spirometry">
                            </div>
                            <h4 class="text-xs font-semibold mb-1 leading-tight">Spirometry</h4>
                            <p class="text-xs">IDR 350K / Thn</p>
                        </div>

                        <!-- Modul 4 -->
                        <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                            <div class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Optometry">
                            </div>
                            <h4 class="text-xs font-semibold mb-1 leading-tight">Optometry</h4>
                            <p class="text-xs">IDR 350K / Thn</p>
                        </div>

                        <!-- Modul 5 -->
                        <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                            <div class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Cardiologi">
                            </div>
                            <h4 class="text-xs font-semibold mb-1 leading-tight">Cardiologi</h4>
                            <p class="text-xs">IDR 350K / Thn</p>
                        </div>

                        <!-- Modul 6 -->
                        <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                            <div class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Audiometri">
                            </div>
                            <h4 class="text-xs font-semibold mb-1 leading-tight">Audiometri</h4>
                            <p class="text-xs">IDR 350K / Thn</p>
                        </div>

                        <!-- Modul 7 -->
                        <div class="bg-darkteal rounded-lg p-3 min-w-[150px] text-center text-white">
                            <div class="w-12 h-12 mx-auto mb-1 flex items-center justify-center rounded-full bg-white/10">
                                <img src="img/icon_excel.png" class="w-8 h-8 object-contain" alt="Odontogram">
                            </div>
                            <h4 class="text-xs font-semibold mb-1 leading-tight">Odontogram</h4>
                            <p class="text-xs">IDR 350K / Thn</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- === BLOK KSO DAN DEMO (DI LUAR TABEL) === --}}
            <div class="flex flex-col md:flex-row justify-center gap-5 mt-40" data-aos="fade-down"
                data-aos-duration="1000">
                <div
                    class="relative mt-10 md:w-1/2 h-[250px] align-items-center p-10 bg-darkteal text-white font-medium text-xl text-center">
                    <div class="absolute inset-x-0 -top-4">
                        <div class="relative flex justify-center">
                            <div class="absolute -top-8 bg-white rounded-full p-1 shadow-md border-4 border-darkteal">
                                <div class="bg-white rounded-full p-3">
                                    <img src="img/kso.png" class="w-10 h-10" alt="KSO">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl my-3">KSO</h3>
                    <p>SAFF-Medic memiliki paket Kerjasama Operasi (KSO) untuk semua Jenis Fasked</p> <br>
                    <a class="mt-3 bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md transition-transform duration-200 hover:scale-110"
                        href="/harga/kso">
                        Lihat Paket KSO
                        <span class="ml-1">→</span>
                    </a>
                </div>
            </div>
            <div class="flex justify-center" data-aos="fade-down" data-aos-duration="1000">
                <div class="mt-10">
                    <a href="{{ route('form-demo') }}">
                        <p
                            class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                            Ajukan Produk <br>Demo</p>
                    </a>
                </div>
            </div>
            {{-- Benefit Paket MCU --}}
            <section class="container mx-auto my-20 py-12" data-aos="fade-up-right" data-aos-duration="1000">
                <div class="md:w-1/3 mb-10 text-center mx-auto text-darkgreen text-2xl font-semibold p-5">
                    <h1>Ini Yang didapatkan setiap Kamu berlangganan SAFFMedic</h1>
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
                                        MEDIUM 1
                                    </th>
                                    <th class="px-6 py-8 text-center text-lg font-bold">
                                        MEDIUM 2
                                    </th>
                                    <th class="px-6 py-8 text-center text-lg font-bold">
                                        PRO
                                    </th>
                                    <th class="px-6 py-8 text-center text-lg font-bold">
                                        ENTERPRISE
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 text-green-700 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332-.477 4.5-1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                        Pelatihan Online
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            4 Jam
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            10 Jam
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            20 Jam
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            30 Jam
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            40 Jam
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 text-green-700 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                            </path>
                                        </svg>
                                        Pelatihan On-Site
                                        <button data-popover-target="pelatihan-on-site-info"
                                            data-popover-placement="bottom-end" type="button" class="ml-2">
                                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <span class="sr-only">Show information</span>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-gray-100 text-gray-800">
                                            -
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-gray-100 text-gray-800">
                                            -
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            3 Jam
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            6 Jam
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            10 Jam
                                        </div>
                                    </td>
                                </tr>

                                {{-- Popover untukSupport Premium --}}
                                <div data-popover id="pelatihan-on-site-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <p>Biaya kunjungan offline di tanggung penyelenggara</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>

                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 text-green-700 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                            </path>
                                        </svg>
                                        Migrasi data awal
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            Data Kontak
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            Data Kontak
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            Data Kontak
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            Data Kontak
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                            Data Kontak
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 text-green-700 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                            </path>
                                        </svg>
                                        After sale service
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 text-green-700 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                            </path>
                                        </svg>
                                        Support Reguler
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Support Premium -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                        <svg class="w-5 h-5 text-green-700 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                            </path>
                                        </svg>
                                        Support Premium
                                        <button data-popover-target="support=premium-mcu-info"
                                            data-popover-placement="bottom-end" type="button" class="ml-2">
                                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <span class="sr-only">Show information</span>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Popover untuk Support Premium --}}
                                <div data-popover id="support-premium-mcu-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <p>Dibuatkan group Whatsapp</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                            </tbody>
                            <tfoot>
                                <tr class="bg-gray-50">
                                    <td colspan="6" class="px-6 py-8 text-center">
                                        <a href="{{ route('form-demo') }}"
                                            class="inline-flex items-center px-8 py-4 text-lg font-bold rounded-full shadow-lg text-white bg-darkteal border-2 border-green-700 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transform transition-transform hover:scale-105">
                                            Ajukan Produk Demo
                                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
            {{-- End Section3 --}}
            {{-- Modul Akutansi MCU --}}
            <div class="bg-gray-50 py-8 px-4">
                <div class="max-w-6xl mx-auto">
                    <!-- Header Section -->
                    <div class="text-center mb-8">
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Modul Akutansi</h1>
                        <p class="text-gray-600 mt-2">Pilih paket yang sesuai dengan kebutuhan bisnis Anda.</p>
                    </div>

                    <!-- Pricing Table Container -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-5xl mx-auto">
                        <!-- Table Header Row -->
                        <div class="grid grid-cols-3 border-b border-gray-200 bg-darkteal text-white">
                            <div class="py-4 px-6 font-bold">Fitur</div>
                            <div class="py-4 px-6 text-center font-bold">Pro</div>
                            <div class="py-4 px-6 text-center font-bold">Enterprise</div>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="font-medium text-gray-800">Saldo Awal Akun</div>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </div>

                            <div class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="font-medium text-gray-800">Kas Masuk</div>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </div>

                            <div class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="font-medium text-gray-800">Kas Keluar</div>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </div>

                            <div class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="font-medium text-gray-800">uang Muka Penerimaan</div>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </div>

                            <div
                                class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="font-medium text-gray-800">Uang Muka Pengeluaran</div>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </div>

                            <div
                                class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="font-medium text-gray-800">Transfer Kas</div>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </div>

                            <div
                                class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="font-medium text-gray-800">Jurnal Umum</div>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </div>

                            <div
                                class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="font-medium text-gray-800">Harta Tetap</div>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </div>

                            <div
                                class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="text-gray-800">Harga / Tahun</div>
                                <div class="text-center text-darkteal text-lg">IDR 4.5JT</div>
                                <div class="text-center text-darkteal text-lg">IDR 6.5JT</div>
                            </div>

                            <!-- Buttons -->
                            <div class="grid grid-cols-3 py-4 px-6 bg-white">
                                <div></div>
                                <div class="text-center">
                                    <a href="https://my.saffix.id/cart.php?a=confproduct&i=1"
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                        Pesan Sekarang
                                    </a>
                                </div>
                                <div class="text-center">
                                    <a href="https://my.saffix.id/cart.php?a=confproduct&i=3"
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                        Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 max-w-5xl mx-auto p-4 bg-green-50 rounded-lg border border-green-200">
                        <h3 class="font-bold text-base text-center text-gray-800 mb-2">Catatan</h3>
                        <p class="text-gray-600 text-center text-sm mb-2">
                            Perubahan harga dapat saja terjadi namun kami semaksimal mungkin tetap memberikan
                            harga dan pelayanan yang terbaik buat Anda.
                        </p>
                        <p class="text-gray-600 text-center text-sm">
                            Konsultasikan kebutuhan anda kepada kami untuk mendapatkan harga penawaran terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- <div
                            class="bg-darkteal text-white px-16 rounded w-full transition-transform transform duration-500 hover:scale-105  flex flex-col h-full">
                            <div class="my-6 text-2xl text-center font-medium">
                                <h1>PAKET KERJASAMA MITRA</h1>
                                <hr class="w-[50px] border-2 mx-auto">
                            </div>
                            <div class="text-center font-medium">
                                <h1 class="md:text-3xl text-2xl">IDR. 3.5 K </h1>
                                <p>/Pasien /MCU</p>
                            </div>
                            <div class="flex flex-col gap-y-1 mt-3 mb-16 md:text-base text-sm flex-grow">
                                <div class="flex items-center gap-2">
                                    <img src="img/peserta.png" width="30" alt="">
                                    <p>Tidak dibatasi</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="img/tenaga-medis.png" width="30" alt="">
                                    <p>Tidak dibatasi</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="img/dashboard-perusahaan.png" width="30" alt="">
                                    <p>Tidak dibatasi</p>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img src="img/labo-white.png" width="30" alt="">
                                    <p>Penunjang Lengkap</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="img/pie-chart.png" width="30" alt="">
                                    <p>Penunjang Analysis Lengkap</p>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img src="img/excel-white.png" width="30" alt="">
                                    <p>Integrasi Import Excel Lengkap</p>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img src="img/icon-star-white.png" width="30" alt="">
                                    <a href="{{ route('ketentuan') }}" class="underline">Syarat & Ketentuan</a>
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-end mt-auto mb-3">
                                <a class="bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md hover:scale-110 mb-3"
                                    href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-6">
                                    Pesan Sekarang</a>
                            </div>
                        </div> --}}

    {{-- Apotek/Farmasi --}}
    <div id="apotek" role="tabpanel" aria-labelledby="apotek-tab" class="hidden">
        <section class="container mx-auto my-20 p-2 bg-[#E6E6E670]" data-aos="fade-down" data-aos-duration="1000">
            <div>
                <!-- HEADER -->
                <div class="text-center my-8 max-w-4xl mx-auto px-4">
                    <h1 class="md:text-3xl text-2xl text-darkgreen font-semibold mb-3">PAKET APOTEK / FARMASI</h1>
                    <p class="text-darkteal text-base md:text-lg mb-2">harga penggunaan SAFFMedic untuk penyelanggara Apotek/Farmasi</p>
                    <p class="text-darkteal text-sm md:text-base leading-relaxed">Paket dan tarif pada halaman ini dapat disesuaikan dengan kebutuhan fitur 
                        dan modul yang Anda perlukan. Tim kami akan membantu menghitung serta memberikan penawaran harga 
                        terbaik sesuai kebutuhan Anda. Silakan hubungi SAFFMedic untuk melakukan kustomisasi paket.</p>
                </div>

                <!-- TABEL FITUR -->
                <div class="w-full overflow-x-auto py-5 mt-6 text-base text-darkgreen">
                    <table class="min-w-full divide-y divide-gray-200 bg-white rounded-xl shadow-lg">
                        <thead>
                            <tr class="bg-turqoise text-white">
                                <th class="px-4 py-3 text-left text-lg font-bold rounded-tl-xl">Fitur</th>
                                <th class="px-4 py-3 text-center text-lg font-bold">MEDIUM</th>
                                <th class="px-4 py-3 text-center text-lg font-bold">PRO</th>
                                <th class="px-4 py-3 text-center text-lg font-bold rounded-tr-xl">ENTERPRISE</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">

                            <!-- ==================== PEMBELIAN ==================== -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-pembelian')">
                                    <svg id="apotek-pembelian-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Pembelian</span>
                                </td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                            </tr>

                            <!-- SUB: Faktur Pembelian -->
                            <tr id="apotek-pembelian-faktur-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Faktur Pembelian</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Penerimaan Pembelian -->
                            <tr id="apotek-pembelian-penerimaan-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Penerimaan Pembelian</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Pemesanan Pembelian -->
                            <tr id="apotek-pembelian-pemesanan-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Faktur Pemesanan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Permintaan Pembelian -->
                            <tr id="apotek-pembelian-permintaan-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Permintaan Pembelian</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Return Pembelian -->
                            <tr id="apotek-pembelian-return-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Return Pembelian</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Daftar Hutang -->
                            <tr id="apotek-pembelian-hutang-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Daftar Hutang</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Pembayaran Hutang -->
                            <tr id="apotek-pembelian-pembayaran-hutang-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Daftar Pembayaran Hutang </td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- ==================== PENJUALAN ==================== -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-penjualan')">
                                    <svg id="apotek-penjualan-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Penjualan</span>
                                </td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                            </tr>

                            <!-- SUB: Faktur Penjualan -->
                            <tr id="apotek-penjualan-faktur-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Faktur Penjualan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Pengriman penjualan -->
                            <tr id="apotek-penjualan-piutang-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Pengiriman Penjualan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Pesanan Penjualan -->
                            <tr id="apotek-penjualan-pembayaran-piutang-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Pesanan Penjualan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Penawaran Penjualan -->
                            <tr id="apotek-penjualan-penawaran-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Penawaran Penjualan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Return Penjualan -->
                            <tr id="apotek-penjualan-return-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Return Penjualan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Pembayaran Piutang Penjualan -->
                            <tr id="apotek-penjualan-pengiriman-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Daftar Piutang</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Pembayaran Piutang Penjualan -->
                            <tr id="apotek-penjualan-pesanan-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Pembayaran Piutang</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- ==================== AKUNTANSI ==================== -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-akuntansi')">
                                    <svg id="apotek-akuntansi-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Akuntansi</span>
                                </td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                            </tr>

                            <!-- SUB: Saldo Awal Akun -->
                            <tr id="apotek-akuntansi-saldo-awal-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Saldo Awal Akun</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Kas Masuk -->
                            <tr id="apotek-akuntansi-kas-masuk-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Kas Masuk</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Kas Keluar -->
                            <tr id="apotek-akuntansi-kas-keluar-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Kas Keluar</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Uang Muka Penerimaan -->
                            <tr id="apotek-akuntansi-uang-muka-penerimaan-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Uang Muka Penerimaan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Uang Muka Pengeluaran -->
                            <tr id="apotek-akuntansi-uang-muka-pengeluaran-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Uang Muka Pengeluaran</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Transfer Kas -->
                            <tr id="apotek-akuntansi-transfer-kas-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Transfer Kas</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Jurnal Umum -->
                            <tr id="apotek-akuntansi-jurnal-umum-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Jurnal Umum</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Harta Tetap -->
                            <tr id="apotek-akuntansi-harta-tetap-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Harta Tetap</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- ==================== INVENTORY ==================== -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-inventory')">
                                    <svg id="apotek-inventory-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Inventory</span>
                                </td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                            </tr>

                            <!-- SUB: Penyesuaian Persediaan -->
                            <tr id="apotek-inventory-penyesuaian-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Penyesuaian Persediaan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Stok Opname -->
                            <tr id="apotek-inventory-stok-opname-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Stok Opname</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Mutasi Stok -->
                            <tr id="apotek-inventory-mutasi-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Mutasi Stok</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Saldo Awal -->
                            <tr id="apotek-inventory-saldo-awal-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Saldo Awal</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Batch Number-->
                            <tr id="apotek-inventory-number-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Batch Number</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Expiredate -->
                            <tr id="apotek-inventory-expiredate-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Expiradate</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>


                            <!-- SUB: Produk -->
                            <tr id="apotek-inventory-produk-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Produk</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png"
                                        width="21"class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Harga Produk -->
                            <tr id="apotek-inventory-harga-produk-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Harga Produk</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png"
                                        width="21"class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Kategori Produk -->
                            <tr id="apotek-inventory-kategori-produk-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Kategori Produk</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Merek -->
                            <tr id="apotek-inventory-merek-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Merek</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Satuan -->
                            <tr id="apotek-inventory-satuan-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Satuan</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- ==================== MANAJEMEN ==================== -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-manajemen')">
                                    <svg id="apotek-manajemen-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Manajemen</span>
                                </td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                            </tr>

                            <!-- SUB: Kontak -->
                            <tr id="apotek-manajemen-kontak-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Kontak</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Unit Usaha (dengan popover) -->
                            <tr id="apotek-manajemen-unit-usaha-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Unit Usaha</td>
                                <td class="px-6 py-2 text-center">
                                    <div class="flex justify-center relative">
                                        <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                        <button data-popover-target="apotek-unit-usaha-medium-info"
                                            data-popover-placement="bottom-end" type="button">
                                            <svg class="w-4 h-4 ms-12 text-yellow-300 hover:text-yellow-400"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-2 text-center">
                                    <div class="flex justify-center relative">
                                        <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                        <button data-popover-target="apotek-unit-usaha-pro-info"
                                            data-popover-placement="bottom-end" type="button">
                                            <svg class="w-4 h-4 ms-12 text-yellow-300 hover:text-yellow-400"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-2 text-center">
                                    <div class="flex justify-center relative">
                                        <img class="absolute" src="{{ asset('img/h-yes.png') }}" width="21">
                                        <button data-popover-target="apotek-unit-usaha-enterprise-info"
                                            data-popover-placement="bottom-end" type="button">
                                            <svg class="w-4 h-4 ms-12 text-yellow-300 hover:text-yellow-400"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- SUB: Grup Akun -->
                            <tr id="apotek-manajemen-grup-akun-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Grup Akun</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Jenis Pembayaran -->
                            <tr id="apotek-manajemen-jenis-pembayaran-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Jenis Pembayaran</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Klasifikasi Uang Muka -->
                            <tr id="apotek-manajemen-klasifikasi-uang-muka-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Klasifikasi Uang Muka</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Kategori Harta Tetap -->
                            <tr id="apotek-manajemen-kategori-harta-tetap-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800">Kategori Harta Tetap</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- ==================== LAPORAN ==================== -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-laporan')">
                                    <svg id="apotek-laporan-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Laporan</span>
                                </td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                                <td class="px-6 py-3 text-center">-</td>
                            </tr>

                            <!-- SUB: Laporan Penjualan (dengan nested) -->
                            <tr id="apotek-laporan-penjualan-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-laporan-penjualan')">
                                    <svg id="apotek-laporan-penjualan-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Penjualan</span>
                                </td>
                                <td class="px-6 py-2 text-center">-</td>
                                <td class="px-6 py-2 text-center">-</td>
                                <td class="px-6 py-2 text-center">-</td>
                            </tr>

                            <tr id="apotek-laporan-penjualan-transaksi-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Transaksi</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <tr id="apotek-laporan-penjualan-return-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Return</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Laporan Pembelian (dengan nested) -->
                            <tr id="apotek-laporan-pembelian-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-laporan-pembelian')">
                                    <svg id="apotek-laporan-pembelian-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Pembelian</span>
                                </td>
                                <td class="px-6 py-2 text-center">-</td>
                                <td class="px-6 py-2 text-center">-</td>
                                <td class="px-6 py-2 text-center">-</td>
                            </tr>

                            <tr id="apotek-laporan-pembelian-transaksi-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Transaksi</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <tr id="apotek-laporan-pembelian-return-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Return</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Laporan Akuntansi (dengan nested) -->
                            <tr id="apotek-laporan-akuntansi-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-laporan-akuntansi')">
                                    <svg id="apotek-laporan-akuntansi-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Akuntansi</span>
                                </td>
                                <td class="px-6 py-2 text-center">-</td>
                                <td class="px-6 py-2 text-center">-</td>
                                <td class="px-6 py-2 text-center">-</td>
                            </tr>

                            <tr id="apotek-laporan-akuntansi-neraca-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Neraca</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <tr id="apotek-laporan-akuntansi-laba-rugi-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Laba Rugi</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <tr id="apotek-laporan-akuntansi-buku-besar-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Buku Besar</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <tr id="apotek-laporan-akuntansi-pendapatan-pengeluaran-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Pendapatan & Pengeluaran
                                </td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <!-- SUB: Laporan Produk (dengan nested) -->
                            <tr id="apotek-laporan-produk-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-12 text-sm text-gray-800 flex items-center cursor-pointer"
                                    onclick="toggleTree('apotek-laporan-produk')">
                                    <svg id="apotek-laporan-produk-icon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Produk</span>
                                </td>
                                <td class="px-6 py-2 text-center">-</td>
                                <td class="px-6 py-2 text-center">-</td>
                                <td class="px-6 py-2 text-center">-</td>
                            </tr>

                            <tr id="apotek-laporan-produk-review-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Review Produk</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <tr id="apotek-laporan-produk-kartu-stok-row"
                                class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Kartu Stok</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            <tr id="apotek-laporan-produk-produk-row" class="hidden hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-2 pl-20 text-xs text-gray-700">Produk</td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                                <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                        class="mx-auto"></td>
                            </tr>

                            {{-- Jumlah Gudang --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center">
                                    <span>Jumlah Gudang</span>
                                </td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1
                                        Gudang</span></td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1 Gudang
                                    </span></td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1 Gudang
                                    </span></td>
                            </tr>

                            {{-- Jumlah Departemen --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center">
                                    <span>Jumalah Departemen</span>
                                </td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1 Departemen
                                    </span></td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1 Departemen
                                    </span></td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1 Departemen
                                    </span></td>
                            </tr>

                            {{-- Kapasitas --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center">
                                    <span>Kapasitas</span>
                                </td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">2GB</span>
                                </td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">4GB</span>
                                </td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">6GB</span>
                                </td>
                            </tr>

                            {{-- Akun --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center">
                                    <span>Akun</span>
                                </td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">3</span>
                                </td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">5</span>
                                </td>
                                <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">6</span>
                                </td>
                            </tr>

                            {{-- HARGA --}}
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 text-base font-bold text-gray-900"><span>Harga / Tahun</span></td>
                                <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                        5.000K</span></td>
                                <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                        9.000K</span></td>
                                <td class="px-6 py-4 text-center"><span class="font-bold text-darkteal text-lg">IDR
                                        13.000K</span></td>
                            </tr>

                            {{-- SAMPAI BARIS "TOMBOL PESAN" --}}
                            <tr class="bg-white">
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4 text-center">
                                    <a href="https://my.saffix.id/cart.php?a=confproduct&i=0"
                                        class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                        Pesan Sekarang
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="https://my.saffix.id/cart.php?a=confproduct&i=0"
                                        class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                        Pesan Sekarang
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="https://my.saffix.id/cart.php?a=checkout"
                                        class="inline-block bg-darkteal text-white font-semibold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-200 text-sm">
                                        Pesan Sekarang
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- TOMBOL DEMO -->
                <div class="flex justify-center" data-aos="fade-down" data-aos-duration="1000">
                    <div class="mt-10">
                        <a href="{{ route('form-demo') }}">
                            <p
                                class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                                Ajukan Produk <br>Demo
                            </p>
                        </a>
                    </div>
                </div>

                {{-- Modul Akutansi Farmasi --}}
                <div class="bg-gray-50 py-8 px-4">
                    <div class="max-w-6xl mx-auto">
                        <!-- Header Section -->
                        <div class="text-center mb-8">
                            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Modul Akutansi</h1>
                            <p class="text-gray-600 mt-2">Pilih paket yang sesuai dengan kebutuhan bisnis Anda.</p>
                        </div>

                        <!-- Pricing Table Container -->
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-5xl mx-auto">
                            <!-- Table Header Row -->
                            <div class="grid grid-cols-3 border-b border-gray-200 bg-darkteal text-white">
                                <div class="py-4 px-6 font-bold">Fitur</div>
                                <div class="py-4 px-6 text-center font-bold">Pro</div>
                                <div class="py-4 px-6 text-center font-bold">Enterprise</div>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="font-medium text-gray-800">Saldo Awal Akun</div>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                </div>

                                <div class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="font-medium text-gray-800">Kas Masuk</div>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                </div>

                                <div class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="font-medium text-gray-800">Kas Keluar</div>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                </div>

                                <div class="grid grid-cols-3 py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="font-medium text-gray-800">uang Muka Penerimaan</div>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                </div>

                                <div
                                    class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="font-medium text-gray-800">Uang Muka Pengeluaran</div>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                </div>

                                <div
                                    class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="font-medium text-gray-800">Transfer Kas</div>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                </div>

                                <div
                                    class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="font-medium text-gray-800">Jurnal Umum</div>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                </div>

                                <div
                                    class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="font-medium text-gray-800">Harta Tetap</div>
                                    <td class="px-6 py-2 text-center"><img src="img/h-no.png" width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="img/h-yes.png" width="21"
                                            class="mx-auto"></td>
                                </div>

                                <div
                                    class="grid grid-cols-3 font-bold py-4 px-6 hover:bg-gray-50 transition-colors duration-150">
                                    <div class="text-gray-800">Harga / Tahun</div>
                                    <div class="text-center text-darkteal text-lg">IDR 4.5JT</div>
                                    <div class="text-center text-darkteal text-lg">IDR 6.5JT</div>
                                </div>

                                <!-- Buttons -->
                                <div class="grid grid-cols-3 py-4 px-6 bg-white">
                                    <div></div>
                                    <div class="text-center">
                                        <a href="https://my.saffix.id/cart.php?a=confproduct&i=1"
                                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                            Pesan Sekarang
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="https://my.saffix.id/cart.php?a=confproduct&i=3"
                                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-darkteal hover:bg-[#125954] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkteal transition transform hover:scale-105">
                                            Pesan Sekarang
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 max-w-5xl mx-auto p-4 bg-green-50 rounded-lg border border-green-200">
                            <h3 class="font-bold text-base text-center text-gray-800 mb-2">Catatan</h3>
                            <p class="text-gray-600 text-center text-sm mb-2">
                                Perubahan harga dapat saja terjadi namun kami semaksimal mungkin tetap memberikan
                                harga dan pelayanan yang terbaik buat Anda.
                            </p>
                            <p class="text-gray-600 text-center text-sm">
                                Konsultasikan kebutuhan anda kepada kami untuk mendapatkan harga penawaran terbaik.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- POPOVERS -->
                <div data-popover id="apotek-unit-usaha-medium-info" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                    <div class="p-3 space-y-2">
                        <p>Mendapatkan 1 Unit Usaha</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

                <div data-popover id="apotek-unit-usaha-pro-info" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                    <div class="p-3 space-y-2">
                        <p>Mendapatkan 1 Unit Usaha</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

                <div data-popover id="apotek-unit-usaha-enterprise-info" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                    <div class="p-3 space-y-2">
                        <p>Mendapatkan 2 Unit Usaha</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

                <!-- Gudang Popovers -->
                <div data-popover id="apotek-gudang-medium-info" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                    <div class="p-3 space-y-2">
                        <p>Mendapatkan 1 Gudang</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

                <div data-popover id="apotek-gudang-pro-info" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                    <div class="p-3 space-y-2">
                        <p>Mendapatkan 1 Gudang</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

                <div data-popover id="apotek-gudang-enterprise-info" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                    <div class="p-3 space-y-2">
                        <p>Mendapatkan 2 Gudang</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>
            </div>
        </section>
    </div>

    {{-- Section 4: Paket & Modul --}}
    <section class="container mx-auto my-20 py-12" style="background-color: #0E524210;">

        {{-- Header: Paket Tambahan --}}
        <div class="w-full max-w-3xl mx-auto flex flex-col md:flex-row items-center justify-center gap-6 py-12 px-4">
            <div class="flex-shrink-0">
                <img src="img/menu-modul.png" class="w-12 mx-auto" alt="Menu Modul">
            </div>
            <div class="text-center md:text-left">
                <h2 class="text-3xl font-bold text-[#0E5242]">Paket Tambahan</h2>
                <p class="text-sm text-[#0E5242] mt-2">Pilih sesuai kebutuhan<br>Lebih hemat ambil paket apabila ada
                    penambahan Poli atau User</p>
            </div>
        </div>

        {{-- Paket 1–4 --}}
        <div class="flex flex-wrap text-center justify-center gap-8 px-4">
            @foreach ([['name' => 'PAKET 1', 'price' => '600 K', 'poli' => '2 Poli', 'user' => '3 User', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-paket/saffmedic-paket-1'], ['name' => 'PAKET 2', 'price' => '1.200 K', 'poli' => '3 Poli', 'user' => '5 User', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-paket/saffmedic-paket-2'], ['name' => 'PAKET 3', 'price' => '2.000 K', 'poli' => '5 Poli', 'user' => '10 User', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-paket/saffmedic-paket-3'], ['name' => 'PAKET PRO', 'price' => 'Call US', 'poli' => '- Poli', 'user' => '- User', 'url' => route('form')]] as $paket)
                <div
                    class="w-full max-w-[220px] bg-[#166F61] text-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                    <div class="py-6">
                        <h3 class="text-xl font-bold">{{ $paket['name'] }}</h3>
                        <hr class="w-12 h-1 bg-white mx-auto mt-2 rounded">
                    </div>
                    <h4 class="text-2xl font-bold mb-3">IDR. {{ $paket['price'] }}</h4>
                    <div class="px-4 flex flex-wrap justify-center gap-x-3 gap-y-2 text-sm mb-4">
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path d="M15 2.013H9V9H2v6h7v6.987h6V15h7V9h-7z" />
                            </svg>
                            <span>{{ $paket['poli'] }}</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                            <span>{{ $paket['user'] }}</span>
                        </div>
                    </div>
                    <p class="text-sm mb-4">Harga pertahun</p>
                    <div class="mt-auto px-4 pb-5">
                        <a href="{{ $paket['url'] }}"
                            class="block w-full bg-white text-[#0E5242] font-semibold py-2.5 rounded-md text-center text-sm transition-transform duration-200 hover:scale-[1.03] hover:bg-gray-100">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Opsi Tambahan per User/Poli --}}
        <div class="w-full max-w-5xl mx-auto px-4 py-8 mt-12">
            <div class="text-center mb-6">
                <h3 class="text-xl md:text-2xl font-bold text-darkteal">Aplikasi Sim Rs yang mendukung multi cabang dan
                    multi gudang </h3>
                <h2 class="text-xl md:text-2xl font-bold text-darkteal">Opsi Tambahan Paket per Poli atau User</h2>
                <p class="text-gray-600 mt-2">Paket ini bagi Anda yang hanya memerlukan tambahan per poli, gudang, cabang,
                    atau user.</p>
            </div>
            <div class="overflow-x-auto rounded-xl border border-darkteal shadow-sm">
                <div class="min-w-[700px] bg-white">
                    <!-- Header -->
                    <div class="grid grid-cols-4 bg-darkteal text-white font-semibold text-sm md:text-base">
                        <div class="py-3 px-4">Opsi</div>
                        <div class="py-3 px-4 text-center">1 Unit / Tahun</div>
                        <div class="py-3 px-4 text-center">2 Unit / Tahun</div>
                        <div class="py-3 px-4 text-center">3 Unit / Tahun</div>
                    </div>

                    <!-- Baris 1: User / Dokter -->
                    <div
                        class="grid grid-cols-4 py-4 px-4 border-t border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <div class="font-medium text-gray-800">User / Dokter</div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 250K / Thn</div>
                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-addon/add-on-user"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 480K / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=4"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 690K / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=0"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    <!-- Baris 2: Gudang / Depo -->
                    <div
                        class="grid grid-cols-4 py-4 px-4 border-t border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center gap-1 font-medium text-gray-800">
                            Gudang / Depo
                            <button data-popover-target="gudang-info" data-popover-placement="bottom-end"
                                type="button" class="ml-2">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
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
                        </div>

                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 3JT / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=0"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 5JT / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=1"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 6JT / Thn</div>
                            <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-addon/add-on-user"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    <!-- Popover Gudang -->
                    <div data-popover id="gudang-info" role="tooltip"
                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">
                            <p>SaffMedic dirancang untuk klinik atau rumah sakit dengan lebih dari satu lokasi.</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>


                    <!-- Baris 3: Departemen / Cabang -->
                    <div
                        class="grid grid-cols-4 py-4 px-4 border-t border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center gap-1 font-medium text-gray-800">
                            Departemen / Cabang
                            <button data-popover-target="info-departemen" data-popover-placement="bottom-end"
                                type="button" class="ml-2">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
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
                        </div>

                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 4JT / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=2"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 7JT / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=3"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 9JT / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=4"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    <!-- Popover Departemen -->
                    <div data-popover id="info-departemen" role="tooltip"
                        class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">
                            <p>Modul ini digunakan untuk menambah dan mengelola gudang atau depo bila Anda memiliki lebih
                                dari satu tempat penyimpanan barang.</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>

                    <!-- baris 4 : Poli -->
                    <div
                        class="grid grid-cols-4 py-4 px-4 border-t border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <div class="font-medium text-gray-800">Poli</div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 800k / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=6"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 1.2JT / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=5"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-darkteal mb-2">IDR 1.4JT / Thn</div>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=6"
                                class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-medium text-white bg-darkteal rounded-md hover:bg-[#125954] transition-all duration-200 transform hover:scale-105 shadow-sm">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modul Tambahan --}}
        <div class="text-center mt-20">
            <h2 class="text-2xl md:text-3xl font-bold text-[#0E5242]">Modul Tambahan</h2>
            <p class="text-lg text-[#0E5242] mt-2">Penunjang Analisis</p>
        </div>

        <div class="flex overflow-x-auto px-4 py-4 gap-5 scrollbar-hide">
            @foreach ([['name' => 'Frammingham', 'price' => '800 K', 'url' => 'https://my.saffix.id/cart.php?a=confproduct&i=7'], ['name' => 'SRQ20', 'price' => '600 K', 'url' => 'https://my.saffix.id/cart.php?a=confproduct&i=0'], ['name' => 'DASS21', 'price' => '600 K', 'url' => 'https://my.saffix.id/cart.php?a=confproduct&i=0'], ['name' => 'Harvard Test', 'price' => '600 K', 'url' => 'https://my.saffix.id/cart.php?a=confproduct&i=2'], ['name' => 'Jakarta Cardivaskuler', 'price' => '600 K', 'url' => 'https://my.saffix.id/cart.php?a=confproduct&i=3'], ['name' => 'SAFFMedic<br>AI Analisis', 'price' => '3.500 K', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-ai-analisis']] as $modul)
                <div
                    class="w-[230px] bg-[#166F61] text-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-between py-4 px-3">
                    <div class="text-center">
                        <h3 class="text-xl font-bold">{!! $modul['name'] !!}</h3>
                    </div>
                    <div class="text-center mt-3">
                        <h4 class="text-2xl font-bold">IDR. {{ $modul['price'] }}</h4>
                        <p class="text-sm mt-1">Per tahun</p>
                    </div>
                    <div class="mt-4 w-full">
                        <a href="{{ $modul['url'] }}"
                            class="block w-full bg-white text-[#0E5242] font-semibold py-2.5 rounded-md text-center text-sm transition-transform duration-200 hover:scale-[1.03] hover:bg-gray-100">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <hr class="my-16 border-t border-[#E6E6E670]">

        {{-- Penambahan Modul (Grid Icon) --}}
        <div class="max-w-6xl mx-auto px-4">
            <div class="md:flex items-center gap-10 bg-[#E6E6E670] rounded-xl p-8 mb-16">
                <div class="md:w-2/5 text-center md:text-left mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold text-center text-[#0E5242]">Penambahan Modul Penunjang</h3>
                    <div class="h-1 w-30 bg-[#0E5242] mx-auto md:mx-0 my-3"></div>
                    <p class="text-[#0E5242] text-center">SAFFMedic menyediakan modul terpisah yang dapat disesuaikan
                        dengan kebutuhan.</p>
                </div>
                <div class="md:w-3/5 grid grid-cols-2 sm:grid-cols-3 gap-4">
                    @foreach ([
            ['name' => 'Laboratorium', 'price' => '1.500 K/thn', 'img' => 'img/laboratorium-white-image.png', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-laboratorium'],
            ['name' => 'Radiologi', 'price' => '1.300 K/thn', 'img' => 'img/radio-logi-white-image.png', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-radiologi'],
            ['name' => 'Spirometry', 'price' => '1.300 K/thn', 'img' => 'img/spirometry-white-image.png', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-spirometry'],
            ['name' => 'Optometry', 'price' => '1.300 K/thn', 'img' => 'img/optometry-white-image.png', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-optometry'],
            ['name' => 'Cardiologi', 'price' => '1.300 K/thn', 'img' => 'img/cardiologi-white-image.png', 'url' => 'https://my.saffix.id/cart.php?a=confproduct&i=2'],
            ['name' => 'Audiometri', 'price' => '1.300 K/thn', 'img' => 'img/audiometri-white-image.png', 'url' => 'https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-audiometr'],
            ['name' => 'Odontogram', 'price' => '1.300 K/thn', 'img' => 'img/odontogram-dropdown.webp', 'url' => 'https://my.saffix.id/cart.php?a=confproduct&i=3'],
        ] as $mod)
                        <a href="{{ $mod['url'] }}"
                            class="block bg-[#166F61] rounded-lg p-4 text-center hover:bg-[#125954] transition-transform duration-200 hover:scale-[1.02]">
                            <img src="{{ $mod['img'] }}" class="w-16 h-16 mx-auto mb-2 object-contain"
                                alt="{{ $mod['name'] }}">
                            <h4 class="text-white text-sm font-semibold">{{ $mod['name'] }}</h4>
                            <p class="text-white text-xs mt-1">IDR. {{ $mod['price'] }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto mt-8 px-4">
            <div
                class="bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl shadow-xl overflow-hidden border border-teal-100">
                <div class="bg-gradient-to-r from-[#166F61] to-[#0E5242] p-6">
                    <p class="text-white text-center text-lg font-bold">
                        Additional Fitur Antrian
                    </p>
                </div>

                <div class="px-8 pt-6 pb-4 mt-1">
                    <p class="text-center text-[#0E5242] font-bold text-lg leading-relaxed">
                        SAFFMedic dilengkapi dengan fitur Antrian yang terdiri dari 3 modul utama:
                    </p>
                </div>

                {{-- 3 Modul Utama - Ukuran Dikecilkan Sedikit --}}
                <div class="px-8 pb-6 space-y-4">
                    {{-- Modul 1 --}}
                    <div class="flex items-start space-x-3">
                        <!-- Ikon SVG Tanpa Background -->
                        <svg class="w-6 h-6 stroke-[#166F61]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>

                        <!-- Nomor + Judul + Deskripsi -->
                        <div class="flex-1">
                            <h3 class="text-base font-bold text-[#0E5242] mb-1">
                                1. Modul Pembuatan Nomor Antrian
                            </h3>
                            <p class="text-sm text-gray-700 leading-tight">
                                Berfungsi untuk membuat nomor antrian bagi pasien sesuai kebutuhan pelayanan.
                            </p>
                        </div>
                    </div>

                    {{-- Modul 2 --}}
                    <div class="flex items-start space-x-3">
                        <!-- Ikon SVG Tanpa Background -->
                        <svg class="w-6 h-6 stroke-[#166F61]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/>
                        </svg>

                        <!-- Nomor + Judul + Deskripsi -->
                        <div class="flex-1">
                            <h3 class="text-base font-bold text-[#0E5242] mb-1">
                                2. Modul Anjungan Mandiri (Self-Service)
                            </h3>
                            <p class="text-sm text-gray-700 leading-tight">
                                Pasien dapat mengambil nomor antrian sendiri sesuai tujuan poli melalui mesin anjungan mandiri.
                            </p>
                        </div>
                    </div>

                    {{-- Modul 3 --}}
                    <div class="flex items-start space-x-3">
                        <!-- Ikon SVG Tanpa Background -->
                        <svg class="w-6 h-6 stroke-[#166F61]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>

                        <!-- Nomor + Judul + Deskripsi -->
                        <div class="flex-1">
                            <h3 class="text-base font-bold text-[#0E5242] mb-1">
                                3. Modul Display Informasi
                            </h3>
                            <p class="text-sm text-gray-700 leading-tight">
                                Menampilkan nomor antrian secara real-time pada layar display. Klinik juga dapat menampilkan informasi atau pengumuman lainnya melalui layar tersebut.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="px-8 pb-6">
                    <div class="mb-4 overflow-x-auto pb-2">
                        <div class="flex space-x-4 min-w-max">
                            <div
                                class="bg-white rounded-lg p-3 w-1/3 flex flex-col items-center justify-between shadow-[0_4px_12px_rgba(22,111,97,0.3)]">
                                <div class="w-14 h-14 bg-[#166F61] rounded-lg flex items-center justify-center mb-2">
                                    <img src="{{ asset('img/Anjungan.png') }}" class="w-10 h-10 object-contain"
                                        alt="Anjungan Mandiri">
                                </div>
                                <h4
                                    class="font-bold text-[#0E5242] text-center text-sm flex items-center justify-center gap-1">
                                    Anjungan Mandiri
                                    <button data-popover-target="anjungan-antrian-info"
                                        data-popover-placement="bottom-end" type="button" class="ml-1">
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
                                </h4>
                                <p class="text-lg font-bold text-[#0E5242] mt-1">IDR. 3.500 K</p>
                                <p class="text-xs text-gray-600">One Time</p>
                                <a href="https://my.saffix.id/cart.php?a=confproduct&i=8"
                                    class="mt-2 w-full max-w-[120px] bg-[#166F61] text-white text-xs font-medium py-1.5 rounded-md text-center transition-transform duration-200 hover:scale-[1.03]">
                                    Pesan Sekarang
                                </a>
                            </div>

                            {{-- Modul Antrian --}}
                            <div
                                class="bg-white rounded-lg p-3 w-1/3 flex flex-col items-center justify-between shadow-[0_4px_12px_rgba(22,111,97,0.3)]">
                                <div class="w-14 h-14 bg-[#166F61] rounded-lg flex items-center justify-center mb-2">
                                    <img src="{{ asset('img/icon_modul_antrian.png') }}"
                                        class="w-10 h-10 object-contain" alt="Modul Antrian">
                                </div>
                                <h4
                                    class="font-bold text-[#0E5242] text-center text-sm flex items-center justify-center gap-1">
                                    Modul Antrian
                                    <button data-popover-target="modul-antrian-info" data-popover-placement="bottom-end"
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
                                </h4>
                                <p class="text-lg font-bold text-[#0E5242] mt-1">IDR. 600 K</p>
                                <p class="text-xs text-gray-600">Per tahun</p>
                                <a href="https://my.saffix.id/cart.php?a=confproduct&i=7"
                                    class="mt-2 w-full max-w-[120px] bg-[#166F61] text-white text-xs font-medium py-1.5 rounded-md text-center transition-transform duration-200 hover:scale-[1.03]">
                                    Pesan Sekarang
                                </a>
                            </div>

                            {{-- Display Informasi --}}
                            <div
                                class="bg-white rounded-lg p-3 w-1/3 flex flex-col items-center justify-between shadow-[0_4px_12px_rgba(22,111,97,0.3)]">
                                <div class="w-14 h-14 bg-[#166F61] rounded-lg flex items-center justify-center mb-2">
                                    <img src="{{ asset('img/Display.png') }}" class="w-10 h-10 object-contain"
                                        alt="Display Informasi">
                                </div>
                                <h4
                                    class="font-bold text-[#0E5242] text-center text-sm flex items-center justify-center gap-1">
                                    Display Informasi
                                    <button data-popover-target="display-antrian-info"
                                        data-popover-placement="bottom-end" type="button" class="ml-1">
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
                                </h4>
                                <p class="text-lg font-bold text-[#0E5242] mt-1">IDR. 3.500 K</p>
                                <p class="text-xs text-gray-600">One Time</p>
                                <a href="https://my.saffix.id/cart.php?a=confproduct&i=7"
                                    class="mt-2 w-full max-w-[120px] bg-[#166F61] text-white text-xs font-medium py-1.5 rounded-md text-center transition-transform duration-200 hover:scale-[1.03]">
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Popover --}}
            <div data-popover id="anjungan-antrian-info" role="tooltip"
                class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                <div class="p-3 space-y-2">
                    <p>Terminal untuk pengambilan nomor antrian mandiri oleh pasien.</p>
                </div>
                <div data-popper-arrow></div>
            </div>

            <div data-popover id="modul-antrian-info" role="tooltip"
                class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                <div class="p-3 space-y-2">
                    <p>Modul utama untuk mengelola sistem antrian pasien.</p>
                </div>
                <div data-popper-arrow></div>
            </div>

            <div data-popover id="display-antrian-info" role="tooltip"
                class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                <div class="p-3 space-y-2">
                    <p>Layar untuk menampilkan informasi antrian yang sedang berlangsung.</p>
                </div>
                <div data-popper-arrow></div>
            </div>
        </div>
    </section>
    {{-- End Section 4 --}}

    <div class="my-12">
        <h2 class="text-2xl text-darkteal text-center font-semibold mb-12">Paket Integrasi</h2>
        <div class="flex justify-between">
            <div class="md:w-1/3 mt-2">
                <img src="img/satusehat_harga.png" alt="Satu Sehat" width="25%" class="mx-auto">
            </div>
            <div class="md:w-1/3 mt-2">
                <div>
                    <img src="img/api_harga.png" alt="API" width="30%" class="mx-auto">
                </div>
            </div>
            <div class="md:w-1/3 mt-2">
                <img src="img/bpjs_harga.png" alt="BPJS" width="30%" class="mx-auto">
            </div>
        </div>
        <p class="text-center text-darkteal text-xl">Hubungi Kami untuk informasi lebih lanjut tentang integrasi</p>
    </div>

    {{-- Section5 --}}
    <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-1/4 mx-auto text-center text-deepturqoise p-5">
            <h4 class="font-medium text-lg">Diskusi Kebutuhan dan tarif, <br>
                Silahkan hubungi Kami</h4>
            <p class="mt-3 mb-5">Kami mengutamakan suport dan pelayanan
                agar Anda lancar dalam operasional</p>
            <a role="button">
                <div
                    class="flex justify-center items-center mx-auto p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md">
                    <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                    <a href="/whatsapp">Hubungi Kami</a>
                </div>
            </a>
            <img src="img/p-harga-hubungi_kami.png" width="180" class="mx-auto mt-4" alt="">
        </div>
    </section>

    <h1 class="font-bold text-xl text-darkteal text-center">Accepted Payment Method</h1>
    <div
        class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">
        <ul
            class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
            <li><img src="img/payment/bca.png" alt="bca"></li>
            <li><img src="img/payment/cniaga.png" alt="cniaga"></li>
            <li><img src="img/payment/bri.png" alt="bri"></li>
            <li><img src="img/payment/bni.png" alt="bni"></li>
            <li><img src="img/payment/maybank.png" alt="maybank"></li>
            <li><img src="img/payment/linkaja.png" alt="linkaja"></li>
            <li><img src="img/payment/alfamart.png" alt="alfamart"></li>
            <li><img src="img/payment/mandiri.png" alt="mandiri"></li>
            <li><img src="img/payment/atmb.png" alt="atmb"></li>
            <li><img src="img/payment/ovo.png" alt="ovo"></li>
            <li><img src="img/payment/pegadaian.png" alt="pegadaian"></li>
            <li><img src="img/payment/qris.png" alt="qris"></li>
            <li><img src="img/payment/pos.png" alt="pos"></li>
        </ul>
        <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll"
            aria-hidden="true">
            <li><img src="img/payment/bca.png" alt="bca"></li>
            <li><img src="img/payment/cniaga.png" alt="cniaga"></li>
            <li><img src="img/payment/bri.png" alt="bri"></li>
            <li><img src="img/payment/bni.png" alt="bni"></li>
            <li><img src="img/payment/maybank.png" alt="maybank"></li>
            <li><img src="img/payment/linkaja.png" alt="linkaja"></li>
            <li><img src="img/payment/alfamart.png" alt="alfamart"></li>
            <li><img src="img/payment/mandiri.png" alt="mandiri"></li>
            <li><img src="img/payment/atmb.png" alt="atmb"></li>
            <li><img src="img/payment/ovo.png" alt="ovo"></li>
            <li><img src="img/payment/pegadaian.png" alt="pegadaian"></li>
            <li><img src="img/payment/qris.png" alt="qris"></li>
            <li><img src="img/payment/pos.png" alt="pos"></li>
        </ul>
    </div>
    {{-- End Section5 --}}

    <script>
        document.getElementById('lihat-detail-mcu-pro').addEventListener('click', function () {
            document.getElementById('mcu-tab').click()
        })
        document.getElementById('lihat-detail-mcu-enterprise').addEventListener('click', function () {
            document.getElementById('mcu-tab').click()
        })
        // ========== General Tree Toggle ==========
        function toggleTree(id) {
            const toggleMap = {
                // Pelayanan
                'pelayanan': [
                    'pelayanan-rawat-jalan-row',
                    'pelayanan-rawat-inap-row',
                    'pelayanan-igd-row',
                    'pelayanan-mcu-row'
                ],
                'pelayanan-rawat-jalan': [
                    'pelayanan-rawat-jalan-admisi-row'
                ],
                'pelayanan-rawat-inap': [
                    'pelayanan-rawat-inap-admisi-row'
                ],
                'pelayanan-igd': [
                    'pelayanan-igd-admisi-row'
                ],
                'pelayanan-mcu': [
                    'pelayanan-mcu-admisi-row',
                    'pelayanan-mcu-umum-row',
                    'pelayanan-mcu-organisasi-row'
                ],
                'pelayanan-mcu-organisasi': [
                    'pelayanan-mcu-organisasi-admisi-row',
                    'pelayanan-mcu-organisasi-fitur-b-row',
                    'pelayanan-mcu-organisasi-login-row'
                ],
                'penunjang': [
                    'penunjang-umum-row',
                    'penunjang-analysis-row'
                ],
                'penunjang-umum': [
                    'penunjang-laboratorium-row',
                    'penunjang-radiologi-row',
                    'penunjang-kardiologi-row',
                    'penunjang-audiometri-row',
                    'penunjang-spirometri-row',
                    'penunjang-odontogram-row',
                    'penunjang-optometri-row'
                ],
                'penunjang-analysis': [
                    'penunjang-frammingham-row',
                    'penunjang-DASS21-row',
                    'penunjang-SRQ20-row',
                    'penunjang-harvard-test-row',
                    'penunjang-jakarta-cardiavaskular-row',
                    'penunjang-saffmedic-ai-analisis-row'
                ],
                'penunjang-saffmedic-ai-analisis': [
                    'penunjang-saffmedic-ai-analisis-metabolik-row',
                    'penunjang-saffmedic-ai-analisis-kualitas-kesehatan-row',
                    'penunjang-saffmedic-ai-analisis-penyakit-pembuluh-darah-row',
                    'penunjang-saffmedic-ai-analisis-ausdrisk-row',
                    'penunjang-saffmedic-ai-analisis-serangan-jantung-row',
                    'penunjang-saffmedic-ai-analisis-puls-cardiac-maker-row'
                ],
                'manajemen-transaksi': [
                    'manajemen-transaksi-transaksi-row',
                    'manajemen-transaksi-akuntansi-row',
                    'manajemen-transaksi-inventori-row'
                ],
                'manajemen-transaksi-transaksi': [
                    'manajemen-transaksi-transaksi-penjualan-row',
                    'manajemen-transaksi-transaksi-pembelian-row'
                ],
                'manajemen-transaksi-transaksi-penjualan': [
                    'manajemen-transaksi-transaksi-penjualan-faktur-row',
                    'manajemen-transaksi-transaksi-penjualan-daftar-piutang-row',
                    'manajemen-transaksi-transaksi-penjualan-pembayaran-piutang-row',
                    'manajemen-transaksi-transaksi-penjualan-penawaran-penjualan-row',
                    'manajemen-transaksi-transaksi-penjualan-return-row',
                    'manajemen-transaksi-transaksi-penjualan-pengiriman-penjualan-row',
                    'manajemen-transaksi-transaksi-penjualan-pesanan-penjualan-row'
                ],
                'manajemen-transaksi-transaksi-pembelian': [
                    'manajemen-transaksi-transaksi-pembelian-faktur-row',
                    'manajemen-transaksi-transaksi-pembelian-daftar-hutang-row',
                    'manajemen-transaksi-transaksi-pembelian-pembayaran-hutang-row',
                    'manajemen-transaksi-transaksi-pembelian-pesanan-pembelian-row',
                    'manajemen-transaksi-transaksi-pembelian-permintaan-pembelian-row',
                    'manajemen-transaksi-transaksi-pembelian-pengiriman-pembelian-row',
                    'manajemen-transaksi-transaksi-pembelian-return-row'
                ],
                'manajemen-transaksi-akuntansi': [
                    'manajemen-transaksi-akuntansi-saldo-awal-akun-row',
                    'manajemen-transaksi-akuntansi-kas-masuk-row',
                    'manajemen-transaksi-akuntansi-kas-keluar-row',
                    'manajemen-transaksi-akuntansi-uang-muka-penerimaan-row',
                    'manajemen-transaksi-akuntansi-uang-muka-pengeluaran-row',
                    'manajemen-transaksi-akuntansi-transfer-kas-row',
                    'manajemen-transaksi-akuntansi-jurnal-umum-row',
                    'manajemen-transaksi-akuntansi-harta-tetap-row'
                ],
                'manajemen-transaksi-inventori': [
                    'manajemen-transaksi-inventori-penyesuaian-persediaan-row',
                    'manajemen-transaksi-inventori-stok-opname-row',
                    'manajemen-transaksi-inventori-mutasi-stok-row',
                    'manajemen-transaksi-inventori-saldo-awal-row',
                    'manajemen-transaksi-inventori-konversi-harga-row',
                    'manajemen-transaksi-inventori-level-harga-row',
                    'manajemen-inventori-gudang-row'
                ],
                'farmasi': [
                    'farmasi-resep-row',
                    'farmasi-transaksi-row',
                    'farmasi-akuntansi-row',
                    'farmasi-inventori-row',
                    'farmasi-manajemen-farmasi-row',
                    'farmasi-laporan-row'
                ],
                'farmasi-resep': [
                    'farmasi-resep-racik-row'
                ],
                'farmasi-transaksi': [
                    'farmasi-transaksi-penjualan-row',
                    'farmasi-transaksi-pembelian-row'
                ],
                'farmasi-transaksi-penjualan': [
                    'farmasi-transaksi-penjualan-faktur-row',
                    'farmasi-transaksi-penjualan-daftar-piutang-row',
                    'farmasi-transaksi-penjualan-pembayaran-piutang-row',
                    'farmasi-transaksi-penjualan-penawaran-penjualan-row',
                    'farmasi-transaksi-penjualan-return-row',
                    'farmasi-transaksi-penjualan-pengiriman-penjualan-row',
                    'farmasi-transaksi-penjualan-pesanan-penjualan-row'
                ],
                'farmasi-transaksi-pembelian': [
                    'farmasi-transaksi-pembelian-faktur-row',
                    'farmasi-transaksi-pembelian-daftar-hutang-row',
                    'farmasi-transaksi-pembelian-pembayaran-hutang-row',
                    'farmasi-transaksi-pembelian-pesanan-pembelian-row',
                    'farmasi-transaksi-pembelian-permintaan-pembelian-row',
                    'farmasi-transaksi-pembelian-pengiriman-pembelian-row',
                    'farmasi-transaksi-pembelian-return-row'
                ],
                'farmasi-akuntansi': [
                    'farmasi-akuntansi-saldo-awal-akun-row',
                    'farmasi-akuntansi-kas-masuk-row',
                    'farmasi-akuntansi-kas-keluar-row',
                    'farmasi-akuntansi-uang-muka-penerimaan-row',
                    'farmasi-akuntansi-uang-muka-pengeluaran-row',
                    'farmasi-akuntansi-transfer-kas-row',
                    'farmasi-akuntansi-jurnal-umum-row',
                    'farmasi-akuntansi-harta-tetap-row'
                ],
                'farmasi-inventori': [
                    'farmasi-inventori-penyesuaian-persediaan-row',
                    'farmasi-inventori-stok-opname-row',
                    'farmasi-inventori-mutasi-stok-row',
                    'farmasi-inventori-saldo-awal-row',
                    'farmasi-inventori-konversi-satuan-row',
                    'farmasi-inventori-level-harga-row',
                    'farmasi-inventori-gudang-row'
                ],
                'apotek-pembelian': [
                    'apotek-pembelian-faktur-row',
                    'apotek-pembelian-penerimaan-row',
                    'apotek-pembelian-pemesanan-row',
                    'apotek-pembelian-permintaan-row',
                    'apotek-pembelian-return-row',
                    'apotek-pembelian-hutang-row',
                    'apotek-pembelian-pembayaran-hutang-row'
                ],
                'apotek-penjualan': [
                    'apotek-penjualan-faktur-row',
                    'apotek-penjualan-piutang-row',
                    'apotek-penjualan-pembayaran-piutang-row',
                    'apotek-penjualan-penawaran-row',
                    'apotek-penjualan-return-row',
                    'apotek-penjualan-pengiriman-row',
                    'apotek-penjualan-pesanan-row'
                ],
                'apotek-akuntansi': [
                    'apotek-akuntansi-saldo-awal-row',
                    'apotek-akuntansi-kas-masuk-row',
                    'apotek-akuntansi-kas-keluar-row',
                    'apotek-akuntansi-uang-muka-penerimaan-row',
                    'apotek-akuntansi-uang-muka-pengeluaran-row',
                    'apotek-akuntansi-transfer-kas-row',
                    'apotek-akuntansi-jurnal-umum-row',
                    'apotek-akuntansi-harta-tetap-row'
                ],
                'apotek-inventory': [
                    'apotek-inventory-penyesuaian-row',
                    'apotek-inventory-stok-opname-row',
                    'apotek-inventory-mutasi-row',
                    'apotek-inventory-saldo-awal-row',
                    'apotek-inventory-number-row',
                    'apotek-inventory-expiredate-row',
                    'apotek-inventory-produk-row',
                    'apotek-inventory-harga-produk-row',
                    'apotek-inventory-kategori-produk-row',
                    'apotek-inventory-merek-row',
                    'apotek-inventory-satuan-row'
                ],
                'apotek-manajemen': [
                    'apotek-manajemen-kontak-row',
                    'apotek-manajemen-unit-usaha-row',
                    'apotek-manajemen-grup-akun-row',
                    'apotek-manajemen-akun-row',
                    'apotek-manajemen-jenis-pembayaran-row',
                    'apotek-manajemen-klasifikasi-uang-muka-row',
                    'apotek-manajemen-kategori-harta-tetap-row'
                ],
                'apotek-laporan': [
                    'apotek-laporan-penjualan-row',
                    'apotek-laporan-pembelian-row',
                    'apotek-laporan-akuntansi-row',
                    'apotek-laporan-produk-row'
                ],
                'apotek-laporan-penjualan': [
                    'apotek-laporan-penjualan-transaksi-row',
                    'apotek-laporan-penjualan-return-row'
                ],
                'apotek-laporan-pembelian': [
                    'apotek-laporan-pembelian-transaksi-row',
                    'apotek-laporan-pembelian-return-row'
                ],
                'apotek-laporan-akuntansi': [
                    'apotek-laporan-akuntansi-neraca-row',
                    'apotek-laporan-akuntansi-laba-rugi-row',
                    'apotek-laporan-akuntansi-buku-besar-row',
                    'apotek-laporan-akuntansi-pendapatan-pengeluaran-row'
                ],
                'apotek-laporan-produk': [
                    'apotek-laporan-produk-review-row',
                    'apotek-laporan-produk-kartu-stok-row',
                    'apotek-laporan-produk-produk-row'
                ],
                'integrasi': [
                    'integrasi-satu-sehat-row',
                    'integrasi-bpjs-row',
                    'integrasi-Whatsapp-row'
                ],
                'modul': [
                    'modul-import-penunjang-row',
                    'modul-import-pasien-row',
                    'modul-import-peserta-mcu-row'
                ],
                'modul-import-penunjang': [
                    'modul-import-penunjang-laboratorium-row',
                    'modul-import-penunjang-audiometri-row',
                    'modul-import-penunjang-spirometri-row',
                    'modul-import-penunjang-radiologi-row',
                    'modul-import-penunjang-kardiologi-row',
                    'modul-import-penunjang-optometri-row',
                    'modul-import-penunjang-odontogram-row'
                ],
                'tagihan': [
                    'tagihan-umum-row',
                    'tagihan-organisasi-row',
                    'tagihan-metode-kasir-row'
                ]
            };

            const childIds = toggleMap[id];
            if (!childIds || childIds.length === 0) return;

            const firstChild = document.getElementById(childIds[0]);
            const isCurrentlyVisible = firstChild && !firstChild.classList.contains('hidden');

            const icon = document.getElementById(id + '-icon');
            if (icon) {
                if (isCurrentlyVisible) {
                    icon.classList.remove('rotate-90');
                    icon.classList.add('rotate-0');
                } else {
                    icon.classList.remove('rotate-0');
                    icon.classList.add('rotate-90');
                }
            }

            if (isCurrentlyVisible) {
                childIds.forEach(childId => {
                    const el = document.getElementById(childId);
                    if (el) el.classList.add('hidden');
                    const childKey = childId.replace('-row', '');
                    if (toggleMap[childKey]) {
                        toggleMap[childKey].forEach(grandChildId => {
                            const gEl = document.getElementById(grandChildId);
                            if (gEl) gEl.classList.add('hidden');
                        });
                        const childIcon = document.getElementById(childKey + '-icon');
                        if (childIcon) {
                            childIcon.classList.remove('rotate-90');
                            childIcon.classList.add('rotate-0');
                        }
                    }
                });
            } else {
                childIds.forEach(childId => {
                    const el = document.getElementById(childId);
                    if (el) el.classList.remove('hidden');
                });
            }
        }

        // ========== TOGGLE FARMASI (APOTEK) ==========
        function toggleFarmasi(section) {
            const sectionMap = {
                'pembelian': [
                    'farmasi-pembelian-faktur',
                    'farmasi-pembelian-penerimaan',
                    'farmasi-pembelian-pemesanan',
                    'farmasi-pembelian-permintaan',
                    'farmasi-pembelian-return',
                    'farmasi-pembelian-hutang',
                    'farmasi-pembelian-pembayaran-hutang'
                ],
                'penjualan': [
                    'farmasi-penjualan-faktur',
                    'farmasi-penjualan-pengiriman',
                    'farmasi-penjualan-pesanan',
                    'farmasi-penjualan-penawaran',
                    'farmasi-penjualan-return',
                    'farmasi-penjualan-piutang',
                    'farmasi-penjualan-pembayaran-piutang'
                ],
                'akuntansi': [
                    'farmasi-akuntansi-saldo-awal',
                    'farmasi-akuntansi-kas-masuk',
                    'farmasi-akuntansi-kas-keluar',
                    'farmasi-akuntansi-uang-muka-penerimaan',
                    'farmasi-akuntansi-uang-muka-pengeluaran',
                    'farmasi-akuntansi-transfer-kas',
                    'farmasi-akuntansi-jurnal-umum',
                    'farmasi-akuntansi-harta-tetap'
                ],
                'inventory': [
                    'farmasi-inventory-penyesuaian',
                    'farmasi-inventory-stok-opname',
                    'farmasi-inventory-mutasi',
                    'farmasi-inventory-saldo-awal'
                ],
                'manajemen': [
                    'farmasi-manajemen-kontak',
                    'farmasi-manajemen-produk',
                    'farmasi-manajemen-harga-produk',
                    'farmasi-manajemen-kategori-produk',
                    'farmasi-manajemen-merek',
                    'farmasi-manajemen-satuan',
                    'farmasi-manajemen-unit-usaha',
                    'farmasi-manajemen-gudang',
                    'farmasi-manajemen-grup-akun',
                    'farmasi-manajemen-akun',
                    'farmasi-manajemen-jenis-pembayaran',
                    'farmasi-manajemen-klasifikasi-uang-muka',
                    'farmasi-manajemen-kategori-harga-tetap'
                ],
                'laporan': [
                    'farmasi-laporan-penjualan-title',
                    'farmasi-laporan-penjualan-transaksi',
                    'farmasi-laporan-penjualan-return',
                    'farmasi-laporan-pembelian-title',
                    'farmasi-laporan-pembelian-transaksi',
                    'farmasi-laporan-pembelian-return',
                    'farmasi-laporan-akuntansi-title',
                    'farmasi-laporan-akuntansi-neraca',
                    'farmasi-laporan-akuntansi-laba-rugi',
                    'farmasi-laporan-akuntansi-buku-besar',
                    'farmasi-laporan-akuntansi-pendapatan-pengeluaran',
                    'farmasi-laporan-produk-title',
                    'farmasi-laporan-produk-review',
                    'farmasi-laporan-produk-kartu-stok',
                    'farmasi-laporan-produk-produk'
                ]
            };

            const rows = sectionMap[section];
            if (!rows) return;

            const firstRow = document.getElementById(rows[0]);
            const isVisible = firstRow && !firstRow.classList.contains('hidden');

            rows.forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    if (isVisible) el.classList.add('hidden');
                    else el.classList.remove('hidden');
                }
            });

            const icon = document.getElementById(`farmasi-${section}-icon`);
            if (icon) {
                if (isVisible) {
                    icon.classList.remove('rotate-90');
                    icon.classList.add('rotate-0');
                } else {
                    icon.classList.remove('rotate-0');
                    icon.classList.add('rotate-90');
                }
            }
        }

        // ========== TOGGLE MCU TREE (FIXED VERSION) ==========
        function toggleMcuTree(id) {
            const mcuToggleMap = {
                'mcu-mcu': [
                    'mcu-umum-mcu-row',
                    'mcu-organisasi-mcu-row'
                ],
                'mcu-umum-mcu': [
                    'mcu-umum-admisi-row',
                    'mcu-umum-bahasa-row'
                ],
                'mcu-organisasi-mcu': [
                    'mcu-organisasi-admisi-row',
                    'mcu-organisasi-bahasa-row',
                    'mcu-organisasi-kuota-organisasi-row',
                    'mcu-organisasi-kuota-login-row'
                ],
                'mcu-penunjang': [
                    'mcu-penunjang-umum-row',
                    'mcu-penunjang-analysis-row'
                ],
                'mcu-penunjang-umum': [
                    'mcu-penunjang-laboratorium-row',
                    'mcu-penunjang-radiologi-row',
                    'mcu-penunjang-kardiologi-row',
                    'mcu-penunjang-audiometri-row',
                    'mcu-penunjang-spirometri-row',
                    'mcu-penunjang-odontogram-row',
                    'mcu-penunjang-optometri-row'
                ],
                'mcu-penunjang-analysis': [
                    'mcu-penunjang-frammingham-row',
                    'mcu-penunjang-dass21-row',
                    'mcu-penunjang-srq20-row',
                    'mcu-penunjang-harvard-test-row',
                    'mcu-penunjang-jakarta-cardiavaskular-row',
                    'mcu-penunjang-saffmedic-ai-analisis-row'
                ],
                'mcu-penunjang-saffmedic-ai-analisis': [
                    'mcu-penunjang-saffmedic-ai-analisis-metabolik-row',
                    'mcu-penunjang-saffmedic-ai-analisis-kualitas-kesehatan-row',
                    'mcu-penunjang-saffmedic-ai-analisis-penyakit-pembuluh-darah-row',
                    'mcu-penunjang-saffmedic-ai-analisis-ausdrisk-row',
                    'mcu-penunjang-saffmedic-ai-analisis-serangan-jantung-row',
                    'mcu-penunjang-saffmedic-ai-analisis-puls-cardiac-maker-row'
                ],
                'mcu-manajemen': [
                    'mcu-manajemen-storage-row',
                    'mcu-manajemen-tenaga-medis-row',
                ],
                'mcu-integrasi': [
                    'mcu-integrasi-satu-sehat-row',
                    'mcu-integrasi-bpjs-row',
                    'mcu-integrasi-whatsapp-row'
                ],
                'mcu-modul': [
                    'mcu-modul-import-peserta-row',
                    'mcu-modul-import-pasien-row',
                    'mcu-modul-laboratorium-row',
                    'mcu-modul-radiologi-row',
                    'mcu-modul-kardiologi-row',
                    'mcu-modul-audiometri-row',
                    'mcu-modul-spirometri-row',
                ],
                'mcu-tagihan': [
                    'mcu-tagihan-umum-row',
                    'mcu-tagihan-organisasi-row',
                    'mcu-tagihan-metode-kasir-row'
                ]
            };

            const childIds = mcuToggleMap[id];
            if (!childIds || childIds.length === 0) return;

            const firstChild = document.getElementById(childIds[0]);
            const isCurrentlyVisible = firstChild && !firstChild.classList.contains('hidden');

            const icon = document.getElementById(id + '-icon');
            if (icon) {
                if (isCurrentlyVisible) {
                    icon.classList.remove('rotate-90');
                    icon.classList.add('rotate-0');
                } else {
                    icon.classList.remove('rotate-0');
                    icon.classList.add('rotate-90');
                }
            }

            const hideRecursive = (key) => {
                const rows = mcuToggleMap[key];
                if (!rows) return;
                rows.forEach(r => {
                    const el = document.getElementById(r);
                    if (el) el.classList.add('hidden');
                    const nextKey = r.replace('-row', '');
                    hideRecursive(nextKey);
                    // Reset icon untuk child
                    const childIcon = document.getElementById(nextKey + '-icon');
                    if (childIcon) {
                        childIcon.classList.remove('rotate-90');
                        childIcon.classList.add('rotate-0');
                    }
                });
            };

            if (isCurrentlyVisible) {
                // Tutup semua anak + cucu
                childIds.forEach(childId => {
                    const el = document.getElementById(childId);
                    if (el) el.classList.add('hidden');
                    const childKey = childId.replace('-row', '');
                    hideRecursive(childKey);
                });
            } else {
                childIds.forEach(childId => {
                    const el = document.getElementById(childId);
                    if (el) el.classList.remove('hidden');
                });
            }
        }
    </script>
@endsection
