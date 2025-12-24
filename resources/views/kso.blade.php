@extends('layout.app')
@section('content')
    <div class="w-100">
        <section class="container mx-auto my-20 p-5 bg-[#E6E6E670]">
            <div class="md:w-5/6 mx-auto" data-aos="fade-left" data-aos-duration="1000">
                <div class="text-center my-12">
                    <h1 class="md:text-3xl text-2xl text-darkgreen">PAKET KSO</h1>
                    <p class="text-darkteal">Paket KSO adalah bentuk kerja sama yang memungkinkan Anda menggunakan Saffmedic
                        sesuai kebutuhan,
                        tanpa langganan tetap.
                        Pembayaran dilakukan berdasarkan jumlah penggunaan.</p>
                </div>
                <div>
                    <div class="w-full overflow-x-auto py-5 text-base text-darkgreen">
                        <table class="min-w-full divide-y divide-gray-200 bg-white rounded-xl shadow-lg">
                            <thead>
                                <tr class="bg-turqoise text-white">
                                    <th class="px-6 py-4 text-left text-lg font-bold rounded-tl-xl">Fitur</th>
                                    <th class="px-6 py-4 text-center text-lg font-bold">
                                        KSO I
                                        <button data-popover-target="kso-1-info" data-popover-placement="bottom-end"
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
                                    </th>
                                    <th class="px-6 py-4 text-center text-lg font-bold">
                                        KSO II
                                        <button data-popover-target="kso-2-info" data-popover-placement="bottom-end"
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
                                    </th>
                                    <th class="px-6 py-4 text-center text-lg font-bold">
                                        KSO III
                                        <button data-popover-target="kso-3-info" data-popover-placement="bottom-end"
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
                                    </th>
                                    <th class="px-6 py-4 text-center text-lg font-bold">
                                        KSO IV
                                        <button data-popover-target="kso-4-info" data-popover-placement="bottom-end"
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
                                    </th>
                                    <th class="px-6 py-4 text-center text-lg font-bold">
                                        KSO V
                                        <button data-popover-target="kso-5-info" data-popover-placement="bottom-end"
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
                                    </th>
                                    <th class="px-6 py-4 text-center text-lg font-bold rounded-tr-xl">
                                        KSO VI
                                        <button data-popover-target="kso-6-info" data-popover-placement="bottom-end"
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
                                    </th>
                                </tr>

                                {{-- Popover --}}
                                <div data-popover id="kso-1-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                                    <div class="p-3 space-y-2">
                                        <p>Cocok ntuk praktek dokter.</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>

                                {{-- Popover --}}
                                <div data-popover id="kso-2-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                                    <div class="p-3 space-y-2">
                                        <p>Cocok untuk Klinik yang tidak memiliki laboratorium maupun farmasi/apotek.</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>

                                {{-- Popover --}}
                                <div data-popover id="kso-3-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                                    <div class="p-3 space-y-2">
                                        <p>Cocok untuk klinik yang memiliki pelayanan rawat jalan dan rawat inap.</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>

                                {{-- Popover --}}
                                <div data-popover id="kso-4-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                                    <div class="p-3 space-y-2">
                                        <p>Cocok untuk klinik yang melayani kegiatan MCU.</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>

                                {{-- Popover --}}
                                <div data-popover id="kso-5-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                                    <div class="p-3 space-y-2">
                                        <p>Cocok untuk klinik yang menjalankan kegiatan rawat jalan, MCU dan farmasi.</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>

                                {{-- Popover --}}
                                <div data-popover id="kso-6-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                                    <div class="p-3 space-y-2">
                                        <p>Cocok untuk klinik atau rumah sakit yang menjalankan kegiatan, rawat jalan, mcu
                                        </p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>

                            </thead>
                            <tbody class="divide-y divide-gray-200">

                                <!-- Admisi -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Admisi</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Keuangan/Faktur -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Keuangan/Faktur</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Rawat jalan -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Rawat jalan</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- MCu -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>MCU</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- PENUNJANG Expand -->
                                <tr id="penunjang-row" class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center cursor-pointer"
                                        onclick="toggleTree('penunjang')">
                                        <svg id="penunjang-icon" xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 mr-2 transform transition-transform rotate-0" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                        <span>Penunjang</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                </tr>

                                <!-- Penunjang: LABORATORIUM -->
                                <tr id="penunjang-laboratorium-row" class="hidden hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Laboratorium</span></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                </tr>

                                <!-- Penunjang: RADIOLOGI -->
                                <tr id="penunjang-radiologi-row" class="hidden hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Radiologi</span></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                </tr>

                                <!-- Penunjang: Spirometri -->
                                <tr id="penunjang-spirometri-row" class="hidden hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Spirometri</span></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                </tr>

                                <!-- Penunjang: Audiometri -->
                                <tr id="penunjang-audiometri-row" class="hidden hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Audiometri</span></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                </tr>

                                <!-- Penunjang: Optometri-->
                                <tr id="penunjang-optometri-row" class="hidden hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Optometri</span></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                </tr>

                                <!-- Penunjang: Odontogram -->
                                <tr id="penunjang-odontogram-row" class="hidden hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-2 pl-12 text-sm text-gray-800"><span>Odontogram</span></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}" width="21" class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}" width="21" class="mx-auto"></td>
                                </tr>

                                <!-- Penunjang Analysis -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Penunjang Analysis</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Antrian -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Antrian</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Farmasi -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Farmasi</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Akutansi -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Akutansi</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- IGD -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>IGD</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Fitur B to B -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Fitur B to B</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Rawat inap -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Rawat inap</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Fitur Bedah -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Fitur Bedah</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Departemen/cabang-->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Departemen/Cabang</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span
                                            class="font-semibold text-darkteal">Unlimited</span></td>
                                </tr>

                                <!-- Divisi-->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900"><span>Divisi</span></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-yes.png') }}"width="21"
                                            class="mx-auto"></td>
                                </tr>

                                <!-- Gudang/Depo -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Gudang/Depo</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span>
                                    </td>
                                    <td class="px-6 py-2 text-center"><img src="{{ asset('img/h-no.png') }}"width="21"
                                            class="mx-auto"></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span
                                            class="font-semibold text-darkteal">unlimited</span></td>
                                </tr>

                                {{-- Storage --}}
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center gap-1">
                                        <div class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                                            </svg>
                                        </div>
                                        <span>Storage</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">1GB</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">2GB</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">3GB</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">4GB</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">6GB</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span
                                            class="font-semibold text-darkteal">15GB</span></td>
                                </tr>

                                {{-- Poli --}}
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center gap-1">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24"
                                                fill="white" stroke="black" stroke-width="1.5">
                                                <path d="M15 2.013H9V9H2v6h7v6.987h6V15h7V9h-7z"></path>
                                            </svg>
                                        </div>
                                        <span>Poli</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">5
                                            Poli</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">5
                                            Poli</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">8
                                            Poli</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">5
                                            Poli</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">10
                                            Poli</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">Unlimited
                                            Poli</span></td>
                                </tr>

                                {{-- User --}}
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900 flex items-center gap-1">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                            </svg>
                                        </div>
                                        <span>User</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">10
                                            User</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">15
                                            User</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">20
                                            User</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">10
                                            User</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">25
                                            User</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">Unlimited
                                            User</span></td>
                                </tr>

                                <!-- Minimun Pasien/Bulan -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Minimun Pasien/Bulan</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">500</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">750</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">750</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">750</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">750</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span
                                            class="font-semibold text-darkteal">1000</span></td>
                                </tr>

                                <!-- Harga/Pasien -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>harga/Pasein</span>
                                    </td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            3.500k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            4.500k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            5.500k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            6.500k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            8.500k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            12.000k</span></td>
                                </tr>

                                <!-- Deposit -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-3 text-base font-medium text-gray-900">
                                        <span>Deposit</span>
                                        <button data-popover-target="kso-deposit-info" data-popover-placement="bottom-end"
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
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            5.000k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            7.000k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            9.000k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            11.500k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            13.000k</span></td>
                                    <td class="px-6 py-3 text-center"><span class="font-semibold text-darkteal">IDR.
                                            15.000k</span></td>
                                </tr>

                                {{-- Popover --}}
                                <div data-popover id="kso-deposit-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-white bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-64">
                                    <div class="p-3 space-y-2">
                                        <p>Deposit dipakai sebagai jaminan penggunaan SAFFMedic.
                                            Jika Anda tidak membayar sesuai rekap tagihan, SAFFMedic akan memotong jumlahnya
                                            dari deposit Anda.</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>

                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3 max-w-10xl mx-auto p-3 bg-green-50 rounded-lg border border-green-200">
                        <div class="flex items-center justify-start space-x-2 pl-6">
                            <button type="button"
                                class="flex items-center text-left text-green-900 font-medium hover:text-green-800">
                                <span class="mr-1">Ketentuan Paket KSO</span>
                                <a href="/ketentuan#kso" class="relative inline-flex items-center group"
                                    title="Klik untuk melihat">
                                    <svg class="w-5" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentcolor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span
                                        class="absolute bottom-6 left-1/2 -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap shadow-md">
                                        Klik untuk melihat
                                    </span>
                                </a>
                            </button>
                        </div>
                    </div>

                    {{-- <div class="flex justify-center" data-aos="fade-down" data-aos-duration="1000">
                        <div class="mt-2 flex flex-row gap-2">
                            <a
                                href="https://api.whatsapp.com/send?phone=6285100431111&text=Halo.%20Saya%20Ingin%20Bertanya%20Tentang%20Saffmedic%20?">
                                <p
                                    class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                                    Konsultasi Sekarang</p>
                            </a>
                            <a class="ml-2" href="/ketentuan#kso">
                                <p
                                    class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                                    Ketentuan KSO</p>
                            </a>
                        </div>
                    </div> --}}
                    <div class="flex justify-center" data-aos="fade-down" data-aos-duration="1000">
                        <div class="mt-10">
                            <a href="{{ route('form-demo') }}">
                                <p
                                    class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                                    Ajukan Produk <br>Demo</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="hidden " id="mcu" role="tabpanel" aria-labelledby="mcu-tab">
            <section class="container mx-auto my-20 p-2 bg-[#E6E6E670]" data-aos="fade-down" data-aos-duration="1000">
                <div class="">
                    <div class="text-center my-16">
                        <h1 class="md:text-3xl text-2xl text-darkgreen ">PAKET MCU</h1>
                        <p class="text-darkteal">harga penggunaan SAFFMedic untuk penyelanggara MCU</p>
                    </div>

                    <div class="flex flex-col gap-7 md:px-32 p-5">
                        <div class="flex flex-col md:flex-row justify-center gap-7">
                            <div
                                class="bg-darkteal text-white px-16 rounded w-full transition-transform transform duration-500 hover:scale-105 flex flex-col h-full">
                                <div class="my-7 text-3xl text-center font-medium">
                                    <h1>PAKET 1</h1>
                                    <hr class="w-[50px] border-2 mx-auto">
                                </div>
                                <div class="text-center font-medium">
                                    <h1 class="md:text-3xl text-2xl">IDR. 5.500 K </h1>
                                    <p>Per tahun</p>
                                </div>
                                <div class="flex flex-col gap-y-1 mt-3 mb-24 md:text-base text-sm flex-grow">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/peserta.png') }}" width="30" alt="">
                                        <p>300 Peserta / Bulan</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/tenaga-medis.png') }}" width="30" alt="">
                                        <p>3 Tenaga Medis</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/labo-white.png') }}" width="30" alt="">
                                        <p>3 Penunjang : Laboratorium & Radiologi & Cardiologi</p>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="flex flex-col items-center justify-end mb-4 mt-auto">
                                    <a class="bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md hover:scale-110 mb-3"
                                        href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-i">
                                        Pesan Sekarang</a>
                                </div>
                            </div>

                            <div
                                class="bg-darkteal text-white px-16 rounded w-full transition-transform transform duration-500 hover:scale-105">
                                <div class="my-7 text-3xl text-center font-medium">
                                    <h1>PAKET 2</h1>
                                    <hr class="w-[50px] border-2 mx-auto">
                                </div>
                                <div class="text-center font-medium">
                                    <h1 class="md:text-3xl text-2xl">IDR. 7.500 K </h1>
                                    <p>Per tahun</p>
                                </div>
                                <div class="flex flex-col gap-y-1 mt-3 mb-24 md:text-base text-sm">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/peserta.png') }}" width="30" alt="">
                                        <p>600 Peserta / Bulan</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/tenaga-medis.png') }}" width="30" alt="">
                                        <p>5 Tenaga Medis</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/dashboard-perusahaan.png') }}" width="30"
                                            alt="">
                                        <p>2 Dashboard Perusahaan</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/labo-white.png') }}" width="30" alt="">
                                        <p>3 Penunjang: Laboratorium & Radiologi & Cardiologi</p>
                                    </div>
                                </div>
                                {{-- <br> --}}
                                <div class="flex flex-col items-center justify-end mb-4">
                                    <a class="bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md hover:scale-110"
                                        href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-2">
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                            <div
                                class="bg-darkteal text-white px-16 rounded w-full transition-transform transform duration-500 hover:scale-105">
                                <div class="my-7 text-3xl text-center font-medium">
                                    <h1>PAKET 3</h1>
                                    <hr class="w-[50px] border-2 mx-auto">
                                </div>
                                <div class="text-center font-medium">
                                    <h1 class="md:text-3xl text-2xl">IDR. 10.500 K </h1>
                                    <p>Per tahun</p>
                                </div>
                                <div class="flex flex-col gap-y-1 mt-3 mb-16 md:text-base text-sm"
                                    style="margin-bottom: 70px">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/peserta.png') }}" width="30" alt="">
                                        <p>1300 Peserta / Bulan</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/tenaga-medis.png') }}" width="30" alt="">
                                        <p>8 Tenaga Medis</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/dashboard-perusahaan.png') }}" width="30"
                                            alt="">
                                        <p>5 Dashboard Perusahaan</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/labo-white.png') }}" width="30" alt="">
                                        <p>4 Penunjang: Laboratorium & Radiologi & Cardiologi & Audiometri</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-end mb-4">
                                    <a class="bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md hover:scale-110"
                                        href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-3">
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                            <div
                                class="bg-darkteal text-white px-16 rounded w-full transition-transform transform duration-500 hover:scale-105 flex-col h-full">
                                <div class="my-7 text-3xl text-center font-medium">
                                    <h1>PAKET 4</h1>
                                    <hr class="w-[50px] border-2 mx-auto">
                                </div>
                                <div class="text-center font-medium">
                                    <h1 class="md:text-3xl text-2xl">IDR. 14.500 K </h1>
                                    <p>Per tahun</p>
                                </div>
                                <div class="flex flex-col gap-y-1 mt-3 mb-20 md:text-base text-sm">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/peserta.png') }}" width="30" alt="">
                                        <p>1500 Peserta / Bulan</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/tenaga-medis.png') }}" width="30" alt="">
                                        <p>10 Tenaga Medis</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/dashboard-perusahaan.png') }}" width="30"
                                            alt="">
                                        <p>7 Dashboard Perusahaan</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="img/labo-white.png" width="30" alt="">
                                        <p>5 Penunjang Laboratorium & Radiologi & Cardiologi & Audiometri & Optometri</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-end mb-4">
                                    <a class="bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md hover:scale-110"
                                        href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-4">
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row justify-center gap-7">
                            <div
                                class="bg-darkteal text-white px-16 rounded w-full transition-transform transform duration-500 hover:scale-105 flex flex-col h-full">
                                <div class="my-7 text-3xl text-center font-medium">
                                    <h1>PAKET 5</h1>
                                    <hr class="w-[50px] border-2 mx-auto">
                                </div>
                                <div class="text-center font-medium">
                                    <h1 class="md:text-3xl text-2xl">IDR. 23.000 K </h1>
                                    <p>Per tahun</p>
                                </div>
                                <div class="flex flex-col gap-y-1 mt-3 mb-20 md:text-base text-sm flex-grow pb-5">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/peserta.png') }}" width="30" alt="">
                                        <p>1800 Peserta / Bulan</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/tenaga-medis.png') }}" width="30" alt="">
                                        <p>13 Tenaga Medis</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/dashboard-perusahaan.png') }}" width="30"
                                            alt="">
                                        <p>15 Dashboard Perusahaan</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/labo-white.png') }}" width="30" alt="">
                                        <p>6 Penunjang Laboratorium & Radiologi & Cardiologi & Audiometri & Optometri &
                                            Spirometri</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/pie-chart.png') }}" width="30" alt="">
                                        <p>1 Penunjang Analysis Jakarta Cardiovascular</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/excel-white.png') }}" width="30" alt="">
                                        <p>4 Integrasi Import Excel pada Peserta & Lab</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-end mb-4 mt-auto">
                                    <a class="bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md hover:scale-110  mb-5"
                                        href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-5">
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                            <div
                                class="bg-darkteal text-white px-16 rounded w-full transition-transform transform duration-500 hover:scale-105  flex flex-col h-full">
                                <div class="my-7 text-3xl text-center font-medium">
                                    <h1>PAKET 6</h1>
                                    <hr class="w-[50px] border-2 mx-auto">
                                </div>
                                <div class="text-center font-medium">
                                    <h1 class="md:text-3xl text-2xl">IDR. 29.000 K </h1>
                                    <p>Per tahun</p>
                                </div>
                                <div class="flex flex-col gap-y-1 mt-3 mb-20 md:text-base text-sm flex-grow">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/peserta.png') }}" width="30" alt="">
                                        <p>2.500 Peserta / Bulan</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/tenaga-medis.png') }}" width="30" alt="">
                                        <p>16 Tenaga Medis</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/labo-white.png') }}" width="30" alt="">
                                        <p>Penunjang Lengkap</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/pie-chart.png') }}" width="30" alt="">
                                        <p>Penunjang Analysis Lengkap</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/excel-white.png') }}" width="30" alt="">
                                        <p>4 Integrasi Import Excel Lab, Audiometri, Spirometri & Peserta</p>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="flex flex-col items-center justify-end mb-4 mt-auto ">
                                    <a class="bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md hover:scale-110 mb-3"
                                        href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-5">
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                            <div
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
                                        <img src="{{ asset('img/peserta.png') }}" width="30" alt="">
                                        <p>Tidak dibatasi</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/tenaga-medis.png') }}" width="30" alt="">
                                        <p>Tidak dibatasi</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/dashboard-perusahaan.png') }}" width="30"
                                            alt="">
                                        <p>Tidak dibatasi</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/labo-white.png') }}" width="30" alt="">
                                        <p>Penunjang Lengkap</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('img/pie-chart.png') }}" width="30" alt="">
                                        <p>Penunjang Analysis Lengkap</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/excel-white.png') }}" width="30" alt="">
                                        <p>Integrasi Import Excel Lengkap</p>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <img src="{{ asset('img/icon-star-white.png') }}" width="30"
                                            alt="">
                                        <a href="{{ route('ketentuan') }}" class="underline">Syarat & Ketentuan</a>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-end mb-4 mt-auto">
                                    <a class="bg-white w-[150px] text-center py-2 px-4 font-medium text-darkteal rounded-md hover:scale-110 mb-3"
                                        href="https://my.saffix.id/index.php?rp=/store/saffmedic/saffmedic-mcu-paket-6">
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center " data-aos="fade-down" data-aos-duration="1000">
                        <div class="mt-10">
                            <a href="{{ route('form-demo') }}">
                                <p
                                    class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                                    Ajukan Produk <br>Demo</p>
                            </a>
                        </div>
                    </div>

                    <div class="w-5/6 mx-auto my-20">
                        <h1 class="text-darkgreen text-2xl font-semibold my-3">Ketentuan</h1>
                        <div class="flex flex-col gap-y-4 py-4 text-darkteal">
                            <div class="flex items-start gap-x-4">
                                <img class="w-6 mt-1" src="{{ asset('img/square-check.png') }}" alt="">
                                <p>Apabila Kuota dashboard perusahaan telah penuh maka dikenakan biaya per perusahaan Mitra
                                    MCU
                                    Faske Rp. 2.500.000 per Perusahaan <br>dengan Kapasitas 200 peserta dan kelipatan
                                    penambahan
                                    tenaga
                                    medis 4 petugas.</p>
                            </div>
                            <div class="flex items-start gap-x-4">
                                <img class="w-6 mt-1" src="{{ asset('img/square-check.png') }}" alt="">
                                <p>Paket Kerjasama Mitra harus memenuhi Kuota 250 peserta MCU per bulan , apabila tidak
                                    mencapai
                                    kuota maka tarif akan berlaku mengikuti <br> Paket 2.</p>
                            </div>
                            <div class="flex items-start gap-x-4">
                                <img class="w-6 mt-1" src="{{ asset('img/square-check.png') }}" alt="">
                                <p>Kelebihan kapasitas disetiap Paket akan dikenakan biaya per MCU RP. 17.500/ tindakan mcu
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-darkteal text-white p-6 my-12 md:w-1/2 mx-auto flex rounded shadow-lg">
                        <!-- Dashboard Company Section -->
                        <div class="md:flex mb-4 md:me-auto mr-5 w-fit">
                            <div class="w-1/4 mr-2">
                                <img src="{{ asset('img/dashboard_company_mcu.png') }}" alt="Dashboard Icon"
                                    class="mr-2">
                            </div>
                            <div>
                                <h4 class="text-2xl font-semibold">+ Dashboard Company</h4>
                                <p class="text-lg">Dapat dilakukan penambahan <br> dashboard Company.</p>
                            </div>
                        </div>
                        <div class="md:w-fit md:ms-auto">
                            <!-- Pricing Section 1 -->
                            <div class="flex items-center mb-4">
                                <img src="{{ asset('img/checkicon.png') }}" alt="Checkmark Icon"
                                    class="h-10 w-10 mr-2">
                                <p><span class="font-semibold">IDR. 1.500K</span> <br> /thn/500 peserta</p>
                            </div>
                            <!-- Pricing Section 2 -->
                            <div class="flex items-center mb-4">
                                <img src="{{ asset('img/checkicon.png') }}" alt="Checkmark Icon"
                                    class="h-10 w-10 mr-2">
                                <p><span class="font-semibold">IDR. 3.000K</span> <br> /thn/800 peserta</p>
                            </div>
                            <!-- Pricing Section 3 -->
                            <div class="flex items-center">
                                <img src="{{ asset('img/checkicon.png') }}" alt="Checkmark Icon"
                                    class="h-10 w-10 mr-2">
                                <p><span class="font-semibold">IDR. 5.000K</span> <br> /thn/1000 peserta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{--  Benefit Paket --}}
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
                                    <img src="{{ asset('img/tree-benefit.png') }}" width="32" class="mr-3"
                                        alt="">
                                    Benefit Paket
                                </div>
                            </th>
                            <th class="px-6 py-8 text-center text-lg font-bold">
                                KSO I
                            </th>
                            <th class="px-6 py-8 text-center text-lg font-bold">
                                KSO II
                            </th>
                            <th class="px-6 py-8 text-center text-lg font-bold">
                                KSO III
                            </th>
                            <th class="px-6 py-8 text-center text-lg font-bold">
                                KSO IV
                            </th>
                            <th class="px-6 py-8 text-center text-lg font-bold">
                                KSO V
                            </th>
                            <th class="px-6 py-8 text-center text-lg font-bold rounded-tr-xl">
                                KSO VI
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <!-- Pelatihan Online -->
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
                                    4 Jam
                                </div>
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
                                    5 Jam
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
                                    6 Jam
                                </div>
                            </td>
                        </tr>

                        <!-- Pelatihan On-Site -->
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-base font-bold text-gray-900 flex items-center">
                                <svg class="w-5 h-5 text-green-700 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                                Pelatihan On-Site
                                <button data-popover-target="pelatihan-on-site-kso-info"
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
                            <td class="px-6 py-4 text-center">
                                <div
                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-gray-100 text-gray-800">
                                    2 jam
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div
                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-gray-100 text-gray-800">
                                    2 jam
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div
                                    class="inline-flex items-center px-3 py-1 rounded-full text-base font-bold bg-green-100 text-green-800">
                                    2 Jam
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
                                    6 Jam
                                </div>
                            </td>
                        </tr>

                        {{-- Popover untukSupport Premium --}}
                        <div data-popover id="pelatihan-on-site-kso-info" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <p>Biaya kunjungan offline di tanggung penyelenggara</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>

                        <!-- Migrasi data awal -->
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
                                    Data Kontak dan Master Produk
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
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                        </tr>

                        <!-- Support Reguler -->
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
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
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
                                <button data-popover-target="support-premium-kso-info"
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
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </td>
                        </tr>
                        =
                        {{-- Popover untukSupport Premium --}}
                        <div data-popover id="support-premium-kso-info" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-white transition-opacity duration-300 bg-darkteal border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <p>Biaya kunjungan offline di tanggung penyelenggara</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </tbody>
                    <tfoot>
                        <tr class="bg-gray-50">
                            <td colspan="6" class="px-6 py-4 text-center">
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

    <section class="container mx-auto my-20 py-12" style="background-color: #0E524210;">
        {{-- Header: Paket Tambahan --}}
        <div class="w-full max-w-3xl mx-auto flex flex-col md:flex-row items-center justify-center gap-6 py-12 px-4">
            <div class="flex-shrink-0">
                <img src="{{ asset('img/menu-modul.png') }}" class="w-12 mx-auto" alt="Menu Modul KSO">
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
        <div class="max-w-6xl mx-auto px-4">
            <div class="md:flex items-center gap-10 bg-[#E6E6E670] rounded-xl p-8 mb-16">
                <div class="md:w-2/5 text-center md:text-left mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold text-center text-[#0E5242]">Penambahan Modul Penunjang</h3>
                    <div class="h-1 w-30 bg-[#0E5242] mx-auto md:mx-0 my-3"></div>
                    <p class="text-[#0E5242] text-center">SAFFMedic menyediakan modul terpisah yang dapat disesuaikan
                        dengan kebutuhan.</p>
                </div>

                <div class="md:w-3/5 grid grid-cols-2 sm:grid-cols-3 gap-4">

                    <!-- Laboratorium -->
                    <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-laboratorium"
                        class="block bg-[#166F61] rounded-lg p-4 text-center hover:bg-[#125954] transition-transform duration-200 hover:scale-[1.02]">
                        <img src="{{ asset('img/laboratorium-white-image.png') }}"
                            class="w-16 h-16 mx-auto mb-2 object-contain" alt="Laboratorium">
                        <h4 class="text-white text-sm font-semibold">Laboratorium</h4>
                        <p class="text-white text-xs mt-1">IDR. 1.500 K/thn</p>
                    </a>

                    <!-- Radiologi -->
                    <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-radiologi"
                        class="block bg-[#166F61] rounded-lg p-4 text-center hover:bg-[#125954] transition-transform duration-200 hover:scale-[1.02]">
                        <img src="{{ asset('img/radio-logi-white-image.png') }}"
                            class="w-16 h-16 mx-auto mb-2 object-contain" alt="Radiologi">
                        <h4 class="text-white text-sm font-semibold">Radiologi</h4>
                        <p class="text-white text-xs mt-1">IDR. 1.300 K/thn</p>
                    </a>

                    <!-- Spirometry -->
                    <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-spirometry"
                        class="block bg-[#166F61] rounded-lg p-4 text-center hover:bg-[#125954] transition-transform duration-200 hover:scale-[1.02]">
                        <img src="{{ asset('img/spirometry-white-image.png') }}"
                            class="w-16 h-16 mx-auto mb-2 object-contain" alt="Spirometry">
                        <h4 class="text-white text-sm font-semibold">Spirometry</h4>
                        <p class="text-white text-xs mt-1">IDR. 1.300 K/thn</p>
                    </a>

                    <!-- Optometry -->
                    <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-optometry"
                        class="block bg-[#166F61] rounded-lg p-4 text-center hover:bg-[#125954] transition-transform duration-200 hover:scale-[1.02]">
                        <img src="{{ asset('img/optometry-white-image.png') }}"
                            class="w-16 h-16 mx-auto mb-2 object-contain" alt="Optometry">
                        <h4 class="text-white text-sm font-semibold">Optometry</h4>
                        <p class="text-white text-xs mt-1">IDR. 1.300 K/thn</p>
                    </a>

                    <!-- Cardiologi -->
                    <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-cardiologi"
                        class="block bg-[#166F61] rounded-lg p-4 text-center hover:bg-[#125954] transition-transform duration-200 hover:scale-[1.02]">
                        <img src="{{ asset('img/cardiologi-white-image.png') }}"
                            class="w-16 h-16 mx-auto mb-2 object-contain" alt="Cardiologi">
                        <h4 class="text-white text-sm font-semibold">Cardiologi</h4>
                        <p class="text-white text-xs mt-1">IDR. 1.300 K/thn</p>
                    </a>

                    <!-- Audiometri -->
                    <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-audiometr"
                        class="block bg-[#166F61] rounded-lg p-4 text-center hover:bg-[#125954] transition-transform duration-200 hover:scale-[1.02]">
                        <img src="{{ asset('img/audiometri-white-image.png') }}"
                            class="w-16 h-16 mx-auto mb-2 object-contain" alt="Audiometri">
                        <h4 class="text-white text-sm font-semibold">Audiometri</h4>
                        <p class="text-white text-xs mt-1">IDR. 1.300 K/thn</p>
                    </a>

                    <!-- Odontogram -->
                    <a href="https://my.saffix.id/index.php?rp=/store/saffmedic-modul/saffmedic-modul-odontogram"
                        class="block bg-[#166F61] rounded-lg p-4 text-center hover:bg-[#125954] transition-transform duration-200 hover:scale-[1.02]">
                        <img src="{{ asset('img/odontogram-dropdown.webp') }}"
                            class="w-16 h-16 mx-auto mb-2 object-contain" alt="Odontogram">
                        <h4 class="text-white text-sm font-semibold">Odontogram</h4>
                        <p class="text-white text-xs mt-1">IDR. 1.300 K/thn</p>
                    </a>

                </div>
            </div>
        </div>

        <h2 class="p-2 text-2xl font-bold text-center text-darkgreen">Aditional Fitur Antrian</h2>
        {{-- section4 --}}
        <div class="max-w-6xl mx-auto mt-6 px-4">
            <div class="bg-[#166F61] rounded-xl p-4 shadow-lg">
                <div class="mb-4 overflow-x-auto pb-2">
                    <div class="flex space-x-4 min-w-max">
                        {{-- Anjungan Mandiri --}}
                        <div class="bg-white rounded-lg p-4 w-1/3 flex flex-col items-center justify-between">
                            <div class="w-16 h-16 bg-[#166F61] rounded-lg flex items-center justify-center mb-3">
                                <img src="{{ asset('img/Anjungan.png') }}" class="w-12 h-12 object-contain"
                                    alt="Anjungan Mandiri">
                            </div>
                            <h4 class="font-bold text-[#0E5242] text-center flex items-center justify-center gap-1">
                                Anjungan Mandiri
                                <button data-popover-target="anjungan-antrian-info" data-popover-placement="bottom-end"
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
                            </h4>
                            <p class="text-xl font-bold text-[#0E5242] mt-2">IDR. 3.500 K</p>
                            <p class="text-xs text-gray-600">One Time</p>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=8"
                                class="mt-3 w-full max-w-[140px] bg-[#166F61] text-white text-sm font-medium py-2 rounded-md text-center transition-transform duration-200 hover:scale-[1.03]">
                                Pesan Sekarang
                            </a>
                        </div>

                        {{-- Modul Antrian --}}
                        <div class="bg-white rounded-lg p-4 w-1/3 flex flex-col items-center justify-between">
                            <div class="w-16 h-16 bg-[#166F61] rounded-lg flex items-center justify-center mb-3">
                                <img src="{{ asset('img/icon_modul_antrian.png') }}" class="w-12 h-12 object-contain"
                                    alt="Modul Antrian">
                            </div>
                            <h4 class="font-bold text-[#0E5242] text-center flex items-center justify-center gap-1">
                                Modul Antrian
                                <button data-popover-target="modul-antrian-info" data-popover-placement="bottom-end"
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
                            </h4>
                            <p class="text-xl font-bold text-[#0E5242] mt-2">IDR. 600 K</p>
                            <p class="text-xs text-gray-600">Per tahun</p>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=7"
                                class="mt-3 w-full max-w-[140px] bg-[#166F61] text-white text-sm font-medium py-2 rounded-md text-center transition-transform duration-200 hover:scale-[1.03]">
                                Pesan Sekarang
                            </a>
                        </div>

                        {{-- Display Informasi --}}
                        <div class="bg-white rounded-lg p-4 w-1/3 flex flex-col items-center justify-between">
                            <div class="w-16 h-16 bg-[#166F61] rounded-lg flex items-center justify-center mb-3">
                                <img src="{{ asset('img/Display.png') }}" class="w-12 h-12 object-contain"
                                    alt="Display Informasi">
                            </div>
                            <h4 class="font-bold text-[#0E5242] text-center flex items-center justify-center gap-1">
                                Display Informasi
                                <button data-popover-target="display-antrian-info" data-popover-placement="bottom-end"
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
                            </h4>
                            <p class="text-xl font-bold text-[#0E5242] mt-2">IDR. 3.500 K</p>
                            <p class="text-xs text-gray-600">One Time</p>
                            <a href="https://my.saffix.id/cart.php?a=confproduct&i=7"
                                class="mt-3 w-full max-w-[140px] bg-[#166F61] text-white text-sm font-medium py-2 rounded-md text-center transition-transform duration-200 hover:scale-[1.03]">
                                Pesan Sekarang
                            </a>
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
    {{-- end section4 --}}

    <div class="my-12">
        <h2 class="text-2xl text-darkteal text-center font-semibold mb-12">Paket Integrasi</h2>
        <div class="flex justify-between">
            <div class="md:w-1/3 mt-2">
                <img src="{{ asset('img/satusehat_harga.png') }}" alt="Satu Sehat" width="25%" class="mx-auto">
            </div class="md:w-1/3 mt-2">
            <div>
                <img src="{{ asset('img/api_harga.png') }}" alt="API" width="30%" class="mx-auto">
            </div>
            <div class="md:w-1/3 mt-2">
                <img src="{{ asset('img/bpjs_harga.png') }}" alt="BPJS" width="30%" class="mx-auto">
            </div>
        </div>
        <p class="text-center text-darkteal text-xl">Hubungi Kami untuk informasi lebih lanjut tentang integrasi</p>
    </div>

    <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-1/4 mx-auto text-center text-deepturqoise p-5">
            <h4 class="font-medium text-lg">Diskusi Kebutuhan dan tarif, <br>
                Silahkan hubungi Kami</h4>
            <p class="mt-3 mb-5">Kami mengutamakan suport dan pelayanan
                agar Anda lancar dalam operasional</p>
            <a role="button">
                <div
                    class="flex justify-center items-center mx-auto p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md">
                    <img class="mr-3" src="{{ asset('img/whatsappicon.png') }}" width="25" alt="Whatsapp">
                    <a href="/whatsapp">Hubungi Kami</a>
                </div>
            </a>
            <img src="{{ asset('img/p-harga-hubungi_kami.png') }}" width="180" class="mx-auto mt-4"
                alt="">
        </div>

    </section>

    <h1 class="font-bold text-xl text-darkteal text-center">Accepted Payment Method</h1>
    <div
        class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">
        <ul
            class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
            <li><img src="{{ asset('img/payment/bca.png') }}" alt="bca"></li>
            <li><img src="{{ asset('img/payment/cniaga.png') }}" alt="cniaga"></li>
            <li><img src="{{ asset('img/payment/bri.png') }}" alt="bri"></li>
            <li><img src="{{ asset('img/payment/bni.png') }}" alt="bni"></li>
            <li><img src="{{ asset('img/payment/maybank.png') }}" alt="maybank"></li>
            <li><img src="{{ asset('img/payment/linkaja.png') }}" alt="linkaja"></li>
            <li><img src="{{ asset('img/payment/alfamart.png') }}" alt="alfamart"></li>
            <li><img src="{{ asset('img/payment/mandiri.png') }}" alt="mandiri"></li>
            <li><img src="{{ asset('img/payment/atmb.png') }}" alt="atmb"></li>
            <li><img src="{{ asset('img/payment/ovo.png') }}" alt="ovo"></li>
            <li><img src="{{ asset('img/payment/pegadaian.png') }}" alt="pegadaian"></li>
            <li><img src="{{ asset('img/payment/qris.png') }}" alt="qris"></li>
            <li><img src="{{ asset('img/payment/pos.png') }}" alt="pos"></li>
        </ul>
        <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll"
            aria-hidden="true">
            <li><img src="{{ asset('img/payment/bca.png') }}" alt="bca"></li>
            <li><img src="{{ asset('img/payment/cniaga.png') }}" alt="cniaga"></li>
            <li><img src="{{ asset('img/payment/bri.png') }}" alt="bri"></li>
            <li><img src="{{ asset('img/payment/bni.png') }}" alt="bni"></li>
            <li><img src="{{ asset('img/payment/maybank.png') }}" alt="maybank"></li>
            <li><img src="{{ asset('img/payment/linkaja.png') }}" alt="linkaja"></li>
            <li><img src="{{ asset('img/payment/alfamart.png') }}" alt="alfamart"></li>
            <li><img src="{{ asset('img/payment/mandiri.png') }}" alt="mandiri"></li>
            <li><img src="{{ asset('img/payment/atmb.png') }}" alt="atmb"></li>
            <li><img src="{{ asset('img/payment/ovo.png') }}" alt="ovo"></li>
            <li><img src="{{ asset('img/payment/pegadaian.png') }}" alt="pegadaian"></li>
            <li><img src="{{ asset('img/payment/qris.png') }}" alt="qris"></li>
            <li><img src="{{ asset('img/payment/pos.png') }}" alt="pos"></li>
        </ul>
    </div>

    <script>
        function toggleTree(id) {
            const toggleMap = {
                'penunjang': [
                    'penunjang-laboratorium-row',
                    'penunjang-radiologi-row',
                    'penunjang-spirometri-row',
                    'penunjang-audiometri-row',
                    'penunjang-optometri-row',
                    'penunjang-odontogram-row'
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
                    
                    // Sembunyikan sub-children jika ada
                    const childKey = childId.replace('-row', '');
                    if (toggleMap[childKey]) {
                        toggleMap[childKey].forEach(grandChildId => {
                            const gEl = document.getElementById(grandChildId);
                            if (gEl) gEl.classList.add('hidden');
                        });
                        
                        // Reset icon sub-children
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
    </script>
@endsection
