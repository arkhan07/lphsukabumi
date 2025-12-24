<nav class="bg-white border-gray-200 sticky top-0 z-10 shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('beranda') }}" class="md:w-1/5 w-2/5">
            <img src="{{ '../img/brand-saffmedic-colorgreen2.webp' }}" alt="Saffmedic Logo">
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-darkgreen rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col text-xl font-semibold p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:gap-5 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('beranda') }}" class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded"
                        aria-current="page">Beranda</a>
                </li>
                <li class="">
                    <button id="dropdownNavbarLink1" data-dropdown-toggle="dropdownNavbar1"
                        class="flex items-center justify-between w-full py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded">Solusi
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown Solusi Desktop -->
                    <div id="dropdownNavbar1"
                        class="z-10 hidden group-hover/solusi:block font-normal bg-darkteal rounded-lg shadow md:w-1/5 w-4/5">
                        <ul class="flex flex-wrap justify-center" aria-labelledby="dropdownLargeButton">
                            <li class="w-fit p-3">
                                <div class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                    <a href="{{ route('klinik') }}">
                                        <img src="{{ asset('img/klinik-dropdown3.webp') }}" alt="Menu Klinik"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_klinik_hijau.webp') }}" alt="Menu Klinik"
                                            class="md:w-28 w-16 mx-auto p-[6px] hidden group-hover:block">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Klinik</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('rumah-sakit') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white p-1">
                                        <img src="{{ asset('img/rumah-sakit-dropdown3.webp') }}" alt="Menu Rumah Sakit"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_rumahsakit_hijau.webp') }}"
                                            alt="Menu Rumah Sakit"
                                            class="md:w-28 w-16 mx-auto p-[6px] hidden group-hover:block">
                                        <div class="mx-auto w-fit">
                                            <p class="font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Rumah Sakit</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('apotek') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <img src="{{ asset('img/apotek-dropdown3.webp') }}" alt="Menu Apotek"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_apotek_hijau.webp') }}" alt="Menu Apotek"
                                            class="md:w-28 w-16 mx-auto p-[6px] hidden group-hover:block">
                                        <div class="mx-auto w-fit text-center ">
                                            <p class="font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Apotek</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('laboratorium') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white p-1">
                                        <img src="{{ asset('img/laboratorium-dropdown3.webp') }}" alt="Menu Laboratorium"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_lab_hijau.webp') }}" alt="Menu Laboratorium"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit ">
                                            <p class="font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Laboratorium</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('praktek-dokter') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white p-1">
                                        <img src="{{ asset('img/dokter-dropdown3.webp') }}" alt="Menu Dokter"
                                            class="md:w-28 w-16 p-[6px] mx-auto group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_praktekdokter_hijau.webp') }}"
                                            alt="Menu Dokter" class="md:w-28 w-16 mx-auto p-[6px] hidden group-hover:block">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Praktek Dokter</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded">Fitur
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown fitur -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden group-hover/fitur:block font-normal bg-darkteal rounded-lg shadow md:w-1/5 w-4/5">
                        <ul class="flex flex-wrap justify-center" aria-labelledby="dropdownLargeButton">
                            <li class="w-fit p-3">
                                <div class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                    <a href="{{ route('keuangan') }}">
                                        <img src="{{ asset('img/keuangan-dropdown3.webp') }}" alt="Menu Keuangan"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_keuangan_hijau.webp') }}" alt="Menu Keuangan"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Keuangan</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('mcu') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <img src="{{ asset('img/mcu-dropdown3.webp') }}" alt="Menu MCU"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_mcu_hijau.webp') }}" alt="Menu MCU"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                MCU</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('farmasi') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <img src="{{ asset('img/farmasi-dropdown3.webp') }}" alt="Menu Farmasi"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_farmasi_hijau.webp') }}" alt="Menu Farmasi"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Farmasi</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('penunjang') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <img src="{{ asset('img/penunjang-dropdown3.webp') }}" alt="Menu Penunjang"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_penunjang_hijau.webp') }}"
                                            alt="Menu Penunjang"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Penunjang</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('antrian') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <img src="{{ asset('img/antrian-dropdown3.webp') }}" alt="Menu Antrian"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_antrian_hijau.webp') }}" alt="Menu Antrian"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Antrian</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('rekammediselektronik') }}">
                                    <div
                                        class="mx-auto mt-7 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <img src="{{ asset('img/erm-dropdown.webp') }}" alt="E-Rekam Medis"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_erm_hijau.webp') }}" alt="E-Rekam Medis"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                E-Rekam Medis</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('odontogram') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <img src="{{ asset('img/odontogram-dropdown.webp') }}" alt="Menu Odontogram"
                                            class="md:w-24 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_odontogram_hijau.webp') }}" alt="Menu Odontogram"
                                            class="md:w-24 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit">
                                            <p class=" mt-2 font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Odontogram</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="w-fit p-3">
                                <a href="{{ route('fitur') }}">
                                    <div
                                        class="mx-auto mt-3 rounded-xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <img src="{{ asset('img/lainnya-dropdown.webp') }}" alt="Menu Lainnya"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                        <img src="{{ asset('img/dropdown_lainnya_hijau.webp') }}" alt="Menu Lainnya"
                                            class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                        <div class="mx-auto w-fit">
                                            <p class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                Lainnya</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('harga') }}"
                        class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded">Harga</a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}"
                        class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded">Kontak</a>
                </li>
                <li>
                <div>
                        <a href="https://my.saffix.id/index.php?rp=/login">
                            <p
                                class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                                Login</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>