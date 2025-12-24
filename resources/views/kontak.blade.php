<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name='description' itemprop='description' content={{ $description }}>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NCNTDDPL');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Start Google tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QSSKFWH17L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QSSKFWH17L');
    </script>
    <!-- End Google tag (gtag.js) - Google Analytics -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61766aa1f7c0440a591fd06f/1fir912hm';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    </script>
    <!-- End Facebook Pixel Code -->

    @include('partials.style')

    <!--Start of breadcrumb list Script-->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Beranda",
                    "item": "https://saffmedic.com/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Solusi - Klinik",
                    "item": "https://saffmedic.com/klinik"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Solusi - Rumah Sakit",
                    "item": "https://saffmedic.com/rumah-sakit"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Solusi - Apotek",
                    "item": "https://saffmedic.com/apotek"
                },
                {
                    "@type": "ListItem",
                    "position": 5,
                    "name": "Solusi - Laboratorium",
                    "item": "https://saffmedic.com/laboratorium"
                },
                {
                    "@type": "ListItem",
                    "position": 6,
                    "name": "Solusi- Praktek Dokter",
                    "item": "https://saffmedic.com/praktek-dokter"
                },
                {
                    "@type": "ListItem",
                    "position": 7,
                    "name": "Fitur - Keuangan",
                    "item": "https://saffmedic.com/keuangan"
                },
                {
                    "@type": "ListItem",
                    "position": 8,
                    "name": "Fitur - MCU",
                    "item": "https://saffmedic.com/mcu"
                },
                {
                    "@type": "ListItem",
                    "position": 9,
                    "name": "Fitur - Farmasi",
                    "item": "https://saffmedic.com/farmasi"
                },
                {
                    "@type": "ListItem",
                    "position": 10,
                    "name": "Fitur - Penunjang",
                    "item": "https://saffmedic.com/penunjang"
                },
                {
                    "@type": "ListItem",
                    "position": 11,
                    "name": "Fitur - Antrian",
                    "item": "https://saffmedic.com/antrian"
                },
                {
                    "@type": "ListItem",
                    "position": 12,
                    "name": "Fitur - E-Rekam Medis",
                    "item": "https://saffmedic.com/rekammediselektronik"
                },
                {
                    "@type": "ListItem",
                    "position": 13,
                    "name": "Fitur - Odontogram",
                    "item": "https://saffmedic.com/odontogram"
                },
                {
                    "@type": "ListItem",
                    "position": 14,
                    "name": "Fitur",
                    "item": "https://saffmedic.com/fitur"
                },
                {
                    "@type": "ListItem",
                    "position": 15,
                    "name": "Harga",
                    "item": "https://saffmedic.com/harga"
                },
                {
                    "@type": "ListItem",
                    "position": 16,
                    "name": "Kontak",
                    "item": "https://saffmedic.com/kontak"
                },
                {
                    "@type": "ListItem",
                    "position": 17,
                    "name": "Kententuan",
                    "item": "https://saffmedic.com/ketentuan"
                },
                {
                    "@type": "ListItem",
                    "position": 18,
                    "name": "Artikel",
                    "item": "https://saffmedic.com/artikel"
                },
                {
                    "@type": "ListItem",
                    "position": 19,
                    "name": "Mitra",
                    "item": "https://saffmedic.com/mitra"
                }
            ]
        }
    </script>
    <!--End of breadcrumb list Script-->

    {{-- <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NCNTDDPL');
    </script>
    <!-- End Google Tag Manager -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61766aa1f7c0440a591fd06f/1fir912hm';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script type="text/javascript" src="https://gass.co.id/gassv3.min.js?v=3"></script>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-674058545"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-674058545');
    </script>
    <script>
        gass.run({
            adw_tag: 'AW-674058545',
            campaign_id: 1,
            interval: 2
        }, function(data) {});
    </script> --}}
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCNTDDPL" height="0" width="0"
            style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="bg-darkteal">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="md:w-1/5 w-2/5">
                <img src="{{ 'img/saffmedic-logo-white.png' }}" alt="Saffmedic Logo">
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-darkgreen focus:outline-none focus:ring-2 focus:ring-gray-200"
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
                    class="flex flex-col text-xl font-semibold p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:gap-5 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="{{ route('beranda') }}"
                            class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white md:text-white md:hover:bg-white md:hover:text-darkteal rounded"
                            aria-current="page">Beranda</a>
                    </li>
                    <li class="">
                        <button id="dropdownNavbarLink1" data-dropdown-toggle="dropdownNavbar1"
                            class="flex items-center justify-between w-full py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white md:text-white md:hover:bg-white md:hover:text-darkteal rounded">Solusi
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown Solusi Desktop -->
                        <div id="dropdownNavbar1"
                            class="z-10 hidden group-hover/menu:block font-normal bg-darkteal border border-white rounded-lg shadow md:w-1/5 w-4/5">
                            <ul class="flex flex-wrap justify-center" aria-labelledby="dropdownLargeButton">
                                <li class="w-fit p-3">
                                    <div
                                        class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <a href="{{ route('klinik') }}">
                                            <img src="{{ asset('img/klinik-dropdown3.png') }}" alt="Menu Klinik"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_klinik_hijau.png') }}" alt="Menu Klinik"
                                                class="md:w-28 w-16 mx-auto p-[6px] hidden group-hover:block">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    Klinik</p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('rumah-sakit') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white p-1">
                                            <img src="{{ asset('img/rumah-sakit-dropdown3.png') }}"
                                                alt="Menu Rumah Sakit"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_rumahsakit_hijau.png') }}"
                                                alt="Menu Rumah Sakit"
                                                class="md:w-28 w-16 mx-auto p-[6px] hidden group-hover:block">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class="font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    Rumah Sakit</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('apotek') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
                                            <img src="{{ asset('img/apotek-dropdown3.png') }}" alt="Menu Apotek"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_apotek_hijau.png') }}" alt="Menu Apotek"
                                                class="md:w-28 w-16 mx-auto p-[6px] hidden group-hover:block">
                                            <div class="mx-auto w-fit text-center ">
                                                <p
                                                    class="font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    Apotek</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('laboratorium') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white p-1">
                                            <img src="{{ asset('img/laboratorium-dropdown3.png') }}"
                                                alt="Menu Laboratorium"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_lab_hijau.png') }}"
                                                alt="Menu Laboratorium"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                            <div class="mx-auto w-fit ">
                                                <p
                                                    class="font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    Laboratorium</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('praktek-dokter') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white p-1">
                                            <img src="{{ asset('img/dokter-dropdown3.png') }}" alt="Menu Dokter"
                                                class="md:w-28 w-16 p-[6px] mx-auto group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_praktekdokter_hijau.png') }}"
                                                alt="Menu Dokter"
                                                class="md:w-28 w-16 mx-auto p-[6px] hidden group-hover:block">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
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
                            class="flex items-center justify-between w-full py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white md:text-white md:hover:bg-white md:hover:text-darkteal rounded">Fitur
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown fitur -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden group-hover/menu:block font-normal bg-darkteal border border-white rounded-lg shadow md:w-1/5 w-4/5">
                            <ul class="flex flex-wrap justify-center" aria-labelledby="dropdownLargeButton">
                                <li class="w-fit p-3">
                                    <div
                                        class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
                                        <a href="{{ route('keuangan') }}">
                                            <img src="{{ asset('img/keuangan-dropdown3.png') }}" alt="Menu Keuangan"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_keuangan_hijau.png') }}"
                                                alt="Menu Keuangan"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    Keuangan</p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('mcu') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
                                            <img src="{{ asset('img/mcu-dropdown3.png') }}" alt="Menu MCU"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_mcu_hijau.png') }}" alt="Menu MCU"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    MCU</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('farmasi') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
                                            <img src="{{ asset('img/farmasi-dropdown3.png') }}" alt="Menu Farmasi"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_farmasi_hijau.png') }}"
                                                alt="Menu Farmasi"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    Farmasi</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('penunjang') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
                                            <img src="{{ asset('img/penunjang-dropdown3.png') }}"
                                                alt="Menu Penunjang"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_penunjang_hijau.png') }}"
                                                alt="Menu Penunjang"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    Penunjang</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('antrian') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
                                            <img src="{{ asset('img/antrian-dropdown3.png') }}" alt="Menu Antrian"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_antrian_hijau.png') }}"
                                                alt="Menu Antrian"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
                                                    Antrian</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-fit p-3">
                                    <a href="{{ route('fitur') }}">
                                        <div
                                            class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
                                            <img src="{{ asset('img/lainnya-dropdown.png') }}" alt="Menu Lainnya"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:hidden">
                                            <img src="{{ asset('img/dropdown_lainnya_hijau.png') }}"
                                                alt="Menu Lainnya"
                                                class="md:w-28 w-16 mx-auto p-[6px] group-hover:block hidden">
                                            <div class="mx-auto w-fit">
                                                <p
                                                    class=" font-medium text-base md:text-lg text-white group-hover:text-darkgreen">
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
                            class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white md:text-white md:hover:bg-white md:hover:text-darkteal rounded">Harga</a>
                    </li>
                    <li>
                        <a href="{{ route('kontak') }}"
                            class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white md:text-white md:hover:bg-white md:hover:text-darkteal rounded">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Header Section --}}
    <section id="header" class="mx-auto pt-5 text-white bg-darkteal text-center font-poppins">
        <div class="container mx-auto" data-aos="fade-down" data-aos-duration="1000">
            <div class="md:w-[15%] w-[80%] my-16 mx-auto">
                <img src="img/saffmedic-logo-white.png" alt="PaYou Logo">
            </div>
            <p class="text-center mt-5 font-semibold text-2xl">
                Hubungi Kami
            </p>
            <div class="hidden md:flex justify-center mt-5 gap-10">
                <div class="w-[4%] ">
                    <img src="img/kontak_chatting_gray.png" alt="Chatting">
                </div>
                <div class="w-[5%] mt-2">
                    <img src="img/kontak_meet_gray.png" alt="Meeting">
                </div>
                <div class="w-[3%]">
                    <img src="img/kontak_coffee_gray.png" alt="Coffee">
                </div>
            </div>

            <div class="p-5">
                <p class="md:w-3/5 mx-auto text-lg">
                    Hubungi kami jika Anda ingin menghadirkan sistem atau perangkat lunak (Software) Sistem Manajemen
                    Informasi Rumah Sakit (SIMRS), Sistem Manajemen Informasi Klinik (SIM Klinik), Sistem MCU, Sistem
                    Keuangan dan Akuntansi, serta Sistem Antrian yang terintegrasi dan dapat diakses secara online
                    dengan
                    harga terjangkau dan pelayanan berkualitas.
                </p>
            </div>
        </div>
    </section>

    {{-- Alamat & Kontak Kami --}}
    <section id="contact" class=" font-poppins text-white bg-darkteal">
        <div class="mx-auto md:w-fit px-6 py-24 space-y-6 text-lg">
            <div class="mb-20" data-aos="fade-right" data-aos-duration="1000">
                <div class="flex gap-5 items-center mb-5">
                    <div class="w-[40px]">
                        <img src="img/kontak_alamat_gray.png" alt="House">
                    </div>
                    <h1 class="text-3xl font-semibold">
                        Alamat
                    </h1>
                </div>

                <div class="md:w-3/5">
                    <p class="mb-5">
                        Citra Sawangan Square Blok N. RT. 3 RW. 4
                        Bojongsari, Depok, Jawa Barat
                    </p>

                    <p>
                        Jl. D.I Panjaitan No. 05 RT. 25 Gunung Guntur
                        Balikpapan, Kalimantan Timur
                    </p>
                </div>
            </div>

            <div data-aos="fade-down" data-aos-duration="1000">
                {{-- Kontak --}}
                <div>
                    <h1 class="md:text-3xl text-lg font-medium mb-5">
                        Kontak
                    </h1>
                    <div class="flex gap-3 items-center">
                        <div class="w-[30px]">
                            <img src="img/whatsapp_gray.png" alt="Whatsapp">
                        </div>
                        <p class="">
                            082 333 202020
                        </p>
                    </div>
                </div>
                {{-- End Kontak --}}

                {{-- Social Media --}}
                <div class="my-10">
                    <h1 class="md:text-3xl text-lg font-medium mb-5">
                        Sosial Media
                    </h1>

                    <div class="flex flex-wrap gap-x-16 gap-y-5">
                        <div class="flex gap-3 items-center">
                            <div class="w-[30px]">
                                <img src="img/ig_gray.png" alt="Instagram">
                            </div>
                            <p class="">
                                saffmedic
                            </p>
                        </div>
                        <div class="flex gap-3 items-center">
                            <div class="w-[30px]">
                                <img src="img/globe_gray.png" alt="Web">
                            </div>
                            <p class="">
                                saffmedic.com
                            </p>
                        </div>
                    </div>
                </div>
                {{-- End Social Media --}}

                {{-- E-mail --}}
                <div>
                    <h1 class="md:text-3xl text-lg font-medium mb-5">
                        e-Mail
                    </h1>

                    <div class="flex gap-3 items-center">
                        <div class="w-[30px]">
                            <img src="img/email_gray.png" alt="Email">
                        </div>
                        <p class="">
                            info@saffmedic.com
                        </p>
                    </div>
                </div>
                {{-- End E-mail --}}
            </div>

            <div data-aos="fade-right" data-aos-duration="1000">
                <h1 class="text-center md:text-3xl text-xl font-light mb-10 mt-20">
                    Anda dapat menghubungi Kami dengan cara ini
                </h1>

                <div class="flex flex-wrap gap-5 mb-5">
                    <div class="md:w-fit bg-[#E6E6E6] mx-auto rounded-lg text-darkteal md:p-10 p-5">
                        <a href="{{ route('form-request-demo') }}" class="items-center">
                            <p class="md:text-3xl font-semibold text-center">
                                Janji meeting online
                            </p>
                        </a>
                    </div>
                    <div class="md:w-fit bg-[#E6E6E6] mx-auto rounded-lg text-darkteal md:p-10 p-5">
                        <a href="mailto:info@saffmedic.com" class="items-center">
                            <p class="md:text-3xl font-semibold text-center">
                                Mengirim Pesan
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials/footer')
    <div id="whatsapp">
        <a href="/whatsapp" target="_blank">
            <div
                class="rounded-full text-green-400 bg-green-400 p-2 md:p-3 hover:scale-105 hover:text-green-700 hover:bg-green-700 duration-300">
                <svg class="w-6 md:w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <g fill="none" stroke-width="none" stroke-linejoin="none" stroke-miterlimit="10"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode:normal">
                        <path
                            d="M230.4 128c0 56.55-45.85 102.4-102.4 102.4-18.38 0-35.584-4.907-50.5-13.38L26.513 230.4l13.688-49.92C30.993 165.12 25.6 147.208 25.6 128 25.6 71.45 71.45 25.6 128 25.6S230.4 71.45 230.4 128z"
                            fill="#fff" stroke="#fff" stroke-width="50" stroke-linejoin="round" />
                        <path
                            d="M128 25.6C71.45 25.6 25.6 71.45 25.6 128c0 19.208 5.393 37.12 14.592 52.48l-13.67 49.92 50.986-13.38A101.845 101.845 0 0 0 128 230.4c56.55 0 102.4-45.85 102.4-102.4S184.55 25.6 128 25.6zM92.954 80.23c1.664 0 3.37 0 4.846.069 1.827.042 3.815.17 5.718 4.386 2.261 5 7.185 17.544 7.816 18.816.632 1.271 1.076 2.765.197 4.437-.837 1.707-1.272 2.73-2.5 4.241-1.272 1.468-2.663 3.294-3.815 4.403-1.272 1.28-2.586 2.663-1.11 5.206 1.46 2.526 6.563 10.837 14.098 17.544 9.685 8.653 17.851 11.315 20.394 12.587 2.543 1.271 4.011 1.075 5.487-.632 1.51-1.664 6.34-7.38 8.047-9.924 1.664-2.543 3.362-2.1 5.666-1.263 2.338.836 14.806 6.98 17.349 8.252 2.543 1.271 4.215 1.903 4.855 2.935.657 1.067.657 6.144-1.45 12.067-2.108 5.913-12.46 11.63-17.101 12.032-4.694.426-9.054 2.107-30.447-6.315-25.805-10.163-42.087-36.6-43.35-38.306-1.28-1.664-10.333-13.739-10.333-26.198 0-12.5 6.553-18.628 8.849-21.162 2.338-2.552 5.077-3.175 6.784-3.175z"
                            fill="currentColor" />
                    </g>
                </svg>
            </div>
        </a>
    </div>
</body>
@include('partials.js')

</html>
