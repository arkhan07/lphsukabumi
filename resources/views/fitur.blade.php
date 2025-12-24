@extends('layout.app')
@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name='description' itemprop='description' content={{ $description }}>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'green-dark': '#166F61',
                        'green-light': '#18A37E',
                        'turquoise': '#14FFEC',
                    }
                }
            }
        }
    </script>

    </script>
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
    </script>
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

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCNTDDPL" height="0" width="0"
            style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section class="mx-auto bg-darkteal">
        <nav>
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
                                                <img src="{{ asset('img/dropdown_klinik_hijau.png') }}"
                                                    alt="Menu Klinik"
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
                                                class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
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
                                                <img src="{{ asset('img/dropdown_apotek_hijau.png') }}"
                                                    alt="Menu Apotek"
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
                                                class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
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
                                                class="mx-auto mt-3 rounded-2xl w-fit group hover:cursor-pointer hover:bg-white">
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
                                                <img src="{{ asset('img/keuangan-dropdown3.png') }}"
                                                    alt="Menu Keuangan"
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
                                                <img src="{{ asset('img/farmasi-dropdown3.png') }}"
                                                    alt="Menu Farmasi"
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
                                                <img src="{{ asset('img/antrian-dropdown3.png') }}"
                                                    alt="Menu Antrian"
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

        <div class="relative flex flex-col lg:flex-row mt-10" data-aos="fade-right" data-aos-duration="1000">
            <div class="lg:absolute left-32 min-[2400px]:left-[560px] bottom-40 text-white md:w-[400px] p-5">
                <h1 class="font-bold lg:text-3xl text-2xl">Fitur Lengkap <br>
                    Mudah ditambahkan</h1>
                <p class="lg:text-xl">Kami membangun fitur sesuai dengan kebutuhan Faskes. Kami mengawali dengan
                    mendengar apa yang Anda
                    perlukan, dan mewujudkan dalam bentuk sistem</p>
            </div>
            <div class="mx-auto">
                <img src="img/bg-fitur-remove-bgx.png" class="w-[70%] ml-auto" alt="">
            </div>
        </div>
    </section>

    {{-- Section2 --}}
<script src="https://cdn.tailwindcss.com"></script>

  <style>
   /* Smooth easing universal */
  :root {
      --ease-smooth: cubic-bezier(0.23, 1, 0.32, 1);
      --duration: .45s;
  }

  .feature-item {
      position: relative;
      overflow: hidden;
      background: white;
      padding: 14px 16px;
      border-radius: 14px;
      border: 1px solid #d3d3d3;
      color: #166F61;
      transition: 
          background-color var(--duration) var(--ease-smooth),
          padding var(--duration) var(--ease-smooth),
          box-shadow var(--duration) var(--ease-smooth),
          transform var(--duration) var(--ease-smooth);
  }

  /* Smooth left indicator */
  .feature-item::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 4px;
      height: 100%;
      background-color: #166F61;
      border-radius: 10px;
      opacity: 0;
      transform: translateX(-6px);
      transition: 
          opacity var(--duration) var(--ease-smooth),
          transform var(--duration) var(--ease-smooth);
  }

  /* Description hidden default */
  .feature-item p:nth-child(2) {
      max-height: 0;
      opacity: 0;
      transform: translateY(-6px);
      transition: 
          max-height .6s var(--ease-smooth),
          opacity .4s var(--ease-smooth),
          transform .45s var(--ease-smooth);
  }

  /* --- HOVER SMOOTH EFFECT --- */
  .feature-item:hover {
      background-color: #f3faf8;
      transform: translateY(2px);
      padding-bottom: 28px;
      box-shadow: 0px 10px 20px rgba(0,0,0,0.06);
  }

  .feature-item:hover::before {
      opacity: 1;
      transform: translateX(0);
  }

  .feature-item:hover p:nth-child(2) {
      max-height: 200px;
      opacity: 1;
      transform: translateY(0);
      transition-delay: .08s; /* DELAY HALUS */
  }

  /* --- CLICK / ACTIVE STATE --- */
  .feature-item.active {
      background-color: #166F61 !important;
      color: white !important;
      border-color: #166F61 !important;
      transform: translateY(2px);
  }

  .feature-item.active::before {
      opacity: 1 !important;
      background-color: white !important;
      transform: translateX(0);
  }

  .feature-item.active p:nth-child(2) {
      opacity: 1;
      max-height: 200px;
      color: white;
      transform: translateY(0);
  }
  .mobile-feature {
  padding: 20px;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.mobile-feature .title {
  font-size: 22px;
  font-weight: 700;
  text-align: center;
  color: #E95A0C;
}

.mobile-feature .subtitle {
  font-size: 15px;
  text-align: center;
  opacity: 0.9;
}

.feature-img {
  width: 100%;
  border-radius: 12px;
}

.mobile-list {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.mobile-list .item {
  font-size: 16px;
  border-left: 3px solid transparent;
  padding-left: 12px;
}

.mobile-list .item.highlight {
  border-left-color: #ff7b00;
  background: linear-gradient(to right, rgba(255,140,0,0.15), white);
  border-radius: 8px;
  padding: 12px;
}
.mobile-feature {
  animation: fadeSlide 0.4s ease;
}

@keyframes fadeSlide {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}


</style>

</head>

<body class="bg-gradient-to-br from-white to-[#e9f4f2]">

<section class="min-h-screen flex flex-col items-center py-10 px-4 md:py-16 md:px-6">


  <h1 class="text-3xl font-bold text-[#166F61] mb-2 text-center">
    Fitur Unggulan SAFFMedic
  </h1>

  <p class="text-gray-700 text-center mb-12 max-w-2xl">
    SAFFMedic dirancang sebagai sistem informasi klinik dan rumah sakit modern yang membantu Anda mengelola seluruh proses pelayanan kesehatan secara terintegrasi, efisien, dan profesional. Berikut beberapa fitur utama yang menjadi keunggulan SAFFMedic.
  </p>

  <div class="flex flex-col md:flex-row w-full max-w-6xl gap-12 items-start">


    <!-- LEFT MENU -->
    <div id="featureMenu" class="flex flex-col gap-6 w-1/3">

      <!-- Item 1 (default aktif) -->
   <div class="feature-item feature-hover cursor-pointer p-4 rounded-xl border
     bg-white border-gray-300 text-[#166F61]"
            data-img="img/multi-bahasaf.png"
            data-title="Multi Bahasa"
            data-desc="Kelola persediaan obat, alat medis, dan bahan habis pakai dengan lebih efektif.
Melalui fitur Multi Gudang/Depo, SAFFMedic memungkinkan Anda untuk:
Memonitor stok barang dari berbagai lokasi,
Melacak pergerakan barang antar gudang atau unit, 
Mencegah kekurangan maupun kelebihan stok.
Seluruh proses pencatatan inventori dilakukan secara otomatis dan akurat, membantu Anda menjaga efisiensi logistik dan transparansi data stok.
"
            aria-pressed="false">
        <p class="text-lg font-medium">Multi Bahasa</p>
        <p class="text-sm opacity-90">SAFFMedic mendukung multi bahasa untuk mempermudah pengguna.</p>
      </div>

<div class="feature-item feature-hover cursor-pointer p-4 rounded-xl border
     bg-white border-gray-300 text-[#166F61]"
            data-img="img/kalender-jadwalf.png"
            data-title="Kalender & Jadwal Tindakan"
            data-desc="Fitur Jadwal dan Kalender Tindakan membantu klinik atau rumah sakit mengatur pelayanan dengan lebih terencana.
Pasien dapat melakukan booking janji temu secara langsung dengan dokter melalui sistem, sementara tenaga medis dan administrasi dapat melihat agenda pelayanan harian, mingguan, atau bulanan.
Dengan fitur ini, SAFFMedic membantu Anda:
Menghindari kelebihan kapasitas pasien,
Mengatur antrian dengan efisien, dan
Memastikan setiap pasien mendapat pelayanan tepat waktu.
."
            aria-pressed="false">
        <p class="text-lg font-medium">Jadwal & Kalender</p>
        <p class="text-sm text-gray-600">Atur jadwal tindakan dan pelayanan dengan efisien.</p>
      </div>

     <div class="feature-item feature-hover cursor-pointer p-4 rounded-xl border
     bg-white border-gray-300 text-[#166F61]"
            data-img="img/akuntansi-pembukuanf.png"
            data-title="Akuntansi Pembukuan Integrasi"
            data-desc="SAFFMedic tidak hanya mencatat pelayanan pasien, tetapi juga menyediakan sistem akuntansi lengkap yang siap digunakan untuk pengelolaan keuangan klinik dan rumah sakit.
Fitur ini mencakup:
Pencatatan transaksi dan kas (kas masuk, kas keluar, transfer antar kas),
Jurnal otomatis,
Metode pembukuan persediaan FIFO & Average,
Laporan keuangan lengkap, seperti:
Neraca,
Laba rugi,
Arus kas,
Buku besar, dan lainnya.
Dengan sistem akuntansi terintegrasi ini, seluruh aktivitas keuangan dan stok dapat dipantau dalam satu platform — menghasilkan laporan yang akurat, cepat, dan dapat diandalkan untuk pengambilan keputusan manajerial.
."
            aria-pressed="false">
        <p class="text-lg font-medium">Akuntansi Pembuakan Integrasi</p>
        <p class="text-sm text-gray-600">Kelola departemen dan cabang dengan mudah</p>
      </div>

        <div class="feature-item feature-hover cursor-pointer p-4 rounded-xl border
     bg-white border-gray-300 text-[#166F61]"
            data-img="img/multi-gudangf.png"
            data-title="Multi-Gudang / Depo "
            data-desc="Kelola persediaan obat, alat medis, dan bahan habis pakai dengan lebih efektif.
Melalui fitur Multi Gudang/Depo, SAFFMedic memungkinkan Anda untuk:
Memonitor stok barang dari berbagai lokasi,
Melacak pergerakan barang antar gudang atau unit, 
Mencegah kekurangan maupun kelebihan stok.
Seluruh proses pencatatan inventori dilakukan secara otomatis dan akurat, membantu Anda menjaga efisiensi logistik dan transparansi data stok.
"
            aria-pressed="false">
        <p class="text-lg font-medium">Multi-Gudang / Depo</p>
        <p class="text-sm text-gray-600">Kelola departemen dan cabang dengan mudah.</p>
      </div>

         <div class="feature-item feature-hover cursor-pointer p-4 rounded-xl border
     bg-white border-gray-300 text-[#166F61]"
            data-img="img/deposit-pelayananf.png"
            data-title="Fitur Deposit Pelayanan"
            data-desc="Deposit Pelayanan adalah pembayaran yang dilakukan pasien sebelum layanan digunakan, biasanya untuk tindakan yang memerlukan penjadwalan seperti:
Operasi atau tindakan bedah
Prosedur medis yang bertahap
Tindakan dengan persiapan khusus dokter atau fasilitas
Dengan fitur ini, pasien dapat membayar lebih dulu untuk memastikan jadwal tindakan aman dan terkonfirmasi.
."
            aria-pressed="false">
        <p class="text-lg font-medium">Fitur Deposit Pelayanan</p>
        <p class="text-sm text-gray-600">Kelola departemen dan cabang dengan mudah.</p>
      </div>
      
         <div class="feature-item feature-hover cursor-pointer p-4 rounded-xl border
     bg-white border-gray-300 text-[#166F61]"
            data-img="img/pesan-pelayananf.png"
            data-title="Pesan Pelayanan"
            data-desc="Permudah Pasien dalam Memesan Layanan Rawat Jalan & MCU
SAFFMedic menyediakan fitur Pesanan Layanan yang memungkinkan pasien, tamu, atau pelanggan klinik melakukan pemesanan (booking) sebelum menerima layanan. Dengan fitur ini, proses administrasi klinik menjadi lebih teratur, terencana, dan efisien.
."
            aria-pressed="false">
        <p class="text-lg font-medium">Pesan Pelayanan</p>
        <p class="text-sm text-gray-600">Kelola departemen dan cabang dengan mudah.</p>
      </div>

         <div class="feature-item feature-hover cursor-pointer p-4 rounded-xl border
     bg-white border-gray-300 text-[#166F61]"
            data-img="img/integrasi-whatsappf.png"
            data-title="Integrasi WhatsApp (WA)"
            data-desc="SAFFMedic dilengkapi dengan fitur Integrasi WhatsApp (WA) yang tersambung melalui API resmi. Fitur ini memudahkan klinik dan rumah sakit dalam melakukan komunikasi otomatis maupun manual kepada pasien dan dokter, langsung dari dalam sistem tanpa perlu berpindah aplikasi.
Integrasi ini membantu meningkatkan kecepatan informasi, kenyamanan layanan, serta efisiensi operasional staf administrasi.
"
            aria-pressed="false">
        <p class="text-lg font-medium">Integrasi WhatsApp (WA)</p>
        <p class="text-sm text-gray-600">Kelola departemen dan cabang dengan mudah.</p>
      </div>

         <div class="feature-item feature-hover cursor-pointer p-4 rounded-xl border
     bg-white border-gray-300 text-[#166F61]"
            data-img="img/manajemen-cabangf.png"
            data-title="Manajemen Cabang"
            data-desc="Fitur Manajemen Departemen atau Cabang di SAFFMedic dirancang untuk membantu fasilitas kesehatan yang memiliki lebih dari satu lokasi operasional dalam satu entitas bisnis. Melalui fitur ini, setiap Departemen dapat diatur sebagai cabang, unit satelit, atau lokasi layanan mandiri yang berada di bawah profil bisnis yang sama.
"
            aria-pressed="false">
        <p class="text-lg font-medium">Manajemen Cabang</p>
        <p class="text-sm text-gray-600">Kelola departemen dan cabang dengan mudah.</p>
      </div>


    </div>

<!-- RIGHT PREVIEW -->
<div class="w-full md:w-2/3 bg-white shadow-xl rounded-2xl p-6 border">

  <h2 id="featureTitle" 
      class="text-2xl font-bold text-[#166F61] mb-4 fade-slide show">
    Multi Bahasa
  </h2>

  <img id="featureImage" 
       src="/img/multi-bahasaf.png"
      class="w-full max-w-[360px] mx-auto h-auto object-contain rounded-xl fade-slide show mb-6 md:max-w-[420px]">


  <p id="featureDesc" 
     class="text-gray-600 fade-slide show">
    SAFFMedic mendukung multi bahasa untuk mempermudah pengguna.
  </p>

</div>



  </div>
</section>

<script>
  const items = document.querySelectorAll('.feature-item');
  const featureImage = document.getElementById('featureImage');
  const featureTitle = document.getElementById('featureTitle');
  const featureDesc = document.getElementById('featureDesc');

  function resetAll() {
    items.forEach(item => {
      item.classList.remove("bg-[#166F61]", "text-white", "border-[#166F61]", "feature-pop");
      item.classList.add("bg-white", "text-[#166F61]", "border-gray-300");

      // Ubah semua deskripsi kembali abu abu
      const desc = item.querySelector("p:nth-child(2)");
      desc.classList.remove("text-white");
      desc.classList.add("text-gray-600");
    });
  }

  function animatePreview() {
    [featureImage, featureTitle, featureDesc].forEach(el => {
      el.classList.remove('show');
      void el.offsetWidth;
      el.classList.add('show');
    });
  }

  items.forEach(item => {
    item.addEventListener('click', () => {

      resetAll();

      const img = item.dataset.img;
      const title = item.dataset.title;
      const desc = item.dataset.desc;

      // Aktifkan item
      item.classList.remove("bg-white", "text-[#166F61]", "border-gray-300");
      item.classList.add("bg-[#166F61]", "text-white", "border-[#166F61]", "feature-pop");

      // Ubah warna deskripsi supaya tidak hilang
      const descEl = item.querySelector("p:nth-child(2)");
      descEl.classList.remove("text-gray-600");
      descEl.classList.add("text-white");

      // Update preview kanan
      featureTitle.textContent = title;
      featureDesc.textContent = desc;
      featureImage.src = img;

      animatePreview();
    });
     window.addEventListener("load", () => {
      document.getElementById("featureSection").classList.add("show");
  });
   const items = document.querySelectorAll(".feature-item");

  items.forEach(item => {
      item.addEventListener("click", () => {

          // Hilangkan active dari semua box
          items.forEach(i => i.classList.remove("active"));

          // Tambahkan active ke yg diklik
          item.classList.add("active");
      });
  });
  });
  
</script>


    {{-- End Section2 --}}

    {{-- Section3 --}}
    <section class="container mx-auto my-20 py-20 bg-[#F2F2F2]" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-4/5 flex flex-col md:flex-row md:justify-between gap-10 mx-auto rounded-lg">
            <div class="md:w-[450px] p-10">
                <h1 class="text-2xl md:text-3xl font-bold text-darkteal mb-4">Solusi Laboratorium pada menu Penunjang
                </h1>
                <p class="text-deepturqoise mb-5">SAFFMedic telah dilengkapi dengan fitur penunjang untuk rekam medis
                </p>
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 md:w-[220px] bg-darkteal text-white font-semibold rounded-md">
                        <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                        <a href="/whatsapp">Hubungi Kami</a>
                    </div>
                </a>
            </div>
            <div class="md:w-1/2 w-full grid grid-cols-2 text-darkteal font-semibold text-xl rounded-lg p-5">
                <div class="flex flex-col items-center">
                    <img src="img/labo-green.png" width="85" alt="Laboratorium">
                    <h2>Laboratorium</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/radio-logi-green.png" width="120" alt="Radiologi">
                    <h2>Radiologi</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/spirometry-green.png" width="85" alt="Spirometry">
                    <h2>Spirometry</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/optometry-green.png" width="120" alt="Optometry">
                    <h2>Optometry</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/cardiologi-green.png" width="85" alt="Cardiologi">
                    <h2>Cardiologi</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/audiometri-green.png" width="120" alt="Audiometri">
                    <h2>Audiometri</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/dropdown_odontogram_hijau.png" width="85" height="20"alt="Audiometri">
                    <h2>Odontogram</h2>
                </div>

                <a role="button">
                    <div
                        class="flex justify-center items-center gap-5 p-3 w-fit col-span-2 bg-emerald text-white text-base font-semibold rounded-md place-self-center mt-16">
                        <a href="/whatsapp">Lihat lebih lengkap</a>
                        <img class="mr-3" src="img/arrow-yellow.png" width="25" alt="Whatsapp">
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- End Section3 --}}

    {{-- Section4 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div id="list-message">
            <div class="md:w-5/6 mb-4 mx-auto">
                <ul class="flex flex-wrap justify-center -mb-px text-lg font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white md:border-r border-gray-200 rounded-s-lg"
                            id="btob-tab" data-tabs-target="#btob" type="button" role="tab"
                            aria-controls="btob" aria-selected="false">B to B</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block w-[180px] p-4 text-deepturqoise hover:bg-darkteal hover:text-white focus:bg-darkteal focus:text-white border-gray-200 rounded-e-lg"
                            id="antrian-tab" data-tabs-target="#antrian" type="button" role="tab"
                            aria-controls="antrian" aria-selected="false">Antrian</button>
                    </li>
                </ul>
            </div>

            <div class="md:w-5/6 mx-auto" id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50" id="btob" role="tabpanel"
                    aria-labelledby="btob-tab">
                    <div class="flex flex-wrap justify-center gap-10">
                        <div class="md:w-[50%] flex flex-col gap-5">
                            <img src="img/real-item.png" alt="Fitur B to B">
                            <p class="w-5/6 mx-auto text-deepturqoise">Fitur ini dapat digunakan oleh organisasi atau
                                korporasi yang memiliki kerjasama pemerikasaan
                                dengan Klinik atau Faskes yang menggunakan SAFFMedic.</p>
                        </div>
                        <div class="md:w-[35%] text-deepturqoise">
                            <h1 class="md:text-3xl text-2xl text-darkgreen font-bold">Fitur B to B </h1>
                            <h5 class="mb-5 mt-2 font-bold">Jalin kerjasama pemeriksaan antar lembaga</h5>
                            <p class="mb-20">Dengan adanya fitur ini, Klinik/Rumah Sakit dapat menjalankan program
                                kerjasama dengan beberapa perusahaan / organisasi dalam melakukan pemeriksaan ataupun
                                MCU.
                                <br><br>
                                Fitur B to B memungkinkan Organisasi atau Perusahaan yang telah menjalin kerjasama dapat
                                menamabahkan peserta dan melihat hasil pemeriksaan secara langsung melalui dashboar yang
                                telah diberikan FASKES.
                            </p>
                            <div>
                                <h3 class="md:text-3xl text-2xl text-darkgreen font-bold">Begitu mudah <br>
                                    Melihat Laporan</h3>
                                <p class="my-4">Hasil pemeriksaan MCU langsung dapat di akses oleh rekanan organisasi
                                    yang
                                    memiliki
                                    akses.</p>
                                <ul class="mt-5 list-image-check list-inside">
                                    <li>Pemeriksaan Fisik</li>
                                    <li>Penunjang</li>
                                    <li>Resume</li>
                                    <li>JCS</li>
                                    <li>Medical record</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50" id="antrian" role="tabpanel"
                    aria-labelledby="antrian-tab">
                    <div class="flex flex-wrap justify-center gap-10">
                        <div class="md:w-[35%] text-deepturqoise order-2 md:order-1">
                            <div>
                                <h1 class="md:text-3xl text-2xl text-darkgreen font-bold">Antrian</h1>
                                <p class="mb-16 mt-5">Memberikan pelayanan yang optimal kepada pasien adalah tugas yang
                                    tidak
                                    mudah. SAFF-Medic menawarkan solusi dengan mengintegrasikan proses pendaftaran dari
                                    Poli
                                    hingga Apotek melalui sistem antrian yang terpadu.
                                </p>
                            </div>
                            <div>
                                <h1 class="md:text-3xl text-2xl text-darkgreen font-bold">1 Nomor</h1>
                                <h2 class="md:text-2xl text-xl mb-5 mt-2 font-bold">Untuk semua semua layanan</h2>
                                <p class="mb-10">SAFFMedic menggunakan konsep Antrian Multiple Channel dan Multiple
                                    Phase.
                                    Konsep ini memungkinkan pengunjung untuk menggunakan nomor antrian yang sama untuk
                                    mendapatkan layanan yang berbeda.
                                    <br><br>
                                    Jika situasi membutuhkan adanya konsep antrian lain yang tidak sesuai, SAFFMedic
                                    memberikan fleksibilitas kepada Anda untuk menyesuaikan konsep antrian sesuai dengan
                                    kebutuhan Faskes Anda.
                                </p>
                            </div>
                            <div>
                                <h1 class="md:text-3xl text-2xl text-darkgreen font-bold">Dashboard Fitur</h1>
                                <ul class="mt-5 list-image-check list-inside">
                                    <li>Dashboard petugas</li>
                                    <li>Dashboard Dokter</li>
                                    <li>Display console</li>
                                    <li>Display monitor not include hadware</li>
                                </ul>
                            </div>
                            <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-10 mt-10">
                                <a role="button">
                                    <div
                                        class="flex justify-center items-center gap-5 p-3 bg-emerald md:w-[250px] text-white font-semibold rounded-md mb-5">
                                        <a href="/antrian">Lihat lebih lengkap</a>
                                        <img class="mr-1" src="img/arrow-yellow.png" width="25"
                                            alt="Whatsapp">
                                    </div>
                                </a>
                                <a role="button">
                                    <div
                                        class="flex justify-center items-center p-3 bg-darkteal md:w-[230px] text-white font-semibold rounded-md mb-5">
                                        <img class="mr-3" src="img/whatsappicon.png" width="25"
                                            alt="Whatsapp">
                                        <a href="/whatsapp">Hubungi Kami</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="md:w-[50%] flex flex-col gap-5 order-1 md:order-2">
                            <img src="img/dashboard-antrian.png" alt="Fitur B to B">
                            <p class="w-5/6 mx-auto text-deepturqoise mt-5">Fitur ini dapat digunakan oleh organisasi
                                atau
                                Fitur ini adalah opsional dan tidak termasuk dalam semua paket langganan SAFFMedic. Anda
                                dapat membelinya secara terpisah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- <section id="testimonials" class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-[#166F61] text-center mb-5 fade-in">Apa Kata Mereka</h2>
    <p class="text-gray-600 text-center max-w-3xl mx-auto mb-16 fade-in">
      Dengarkan pengalaman mereka yang telah menggunakan SAFFMedic untuk meningkatkan efisiensi operasional fasilitas kesehatan mereka.
    </p>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="testimonial-card bg-white rounded-2xl p-8 border-t-4 border-[#166F61] shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-500 fade-in">
        <p class="text-gray-600 italic mb-6 relative z-10">
          "SAFFMedic telah mengubah cara kami mengelola rumah sakit. Dengan fitur multi cabang, kami dapat memantau kinerja semua lokasi dari satu dashboard pusat. Sangat efisien!"
        </p>
        <div class="flex items-center">
          <img src="https://picsum.photos/seed/doctor1/50/50.jpg" alt="Dr. Ahmad" class="w-12 h-12 rounded-full mr-4 object-cover">
          <div>
            <h5 class="font-semibold text-[#166F61]">Dr. Ahmad Wijaya</h5>
            <p class="text-sm text-gray-500">Direktur RS Sehat Sejahtera</p>
          </div>
        </div>
      </div>

      <div class="testimonial-card bg-white rounded-2xl p-8 border-t-4 border-[#166F61] shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-500 fade-in">
        <p class="text-gray-600 italic mb-6 relative z-10">
          "Fitur akuntansi terintegrasi SAFFMedic sangat membantu kami dalam mengelola keuangan. Laporan keuangan yang akurat dan real-time membuat pengambilan keputusan menjadi lebih mudah."
        </p>
        <div class="flex items-center">
          <img src="https://picsum.photos/seed/doctor2/50/50.jpg" alt="Dr. Siti" class="w-12 h-12 rounded-full mr-4 object-cover">
          <div>
            <h5 class="font-semibold text-[#166F61]">Dr. Siti Nurhaliza</h5>
            <p class="text-sm text-gray-500">Manajer Keuangan Klinik Medika</p>
          </div>
        </div>
      </div>

      <div class="testimonial-card bg-white rounded-2xl p-8 border-t-4 border-[#166F61] shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-500 fade-in">
        <p class="text-gray-600 italic mb-6 relative z-10">
          "Sebagai rumah sakit yang melayani pasien internasional, fitur multi bahasa SAFFMedic sangat berharga. Pasien kami merasa lebih nyaman dengan laporan medis dalam bahasa mereka."
        </p>
        <div class="flex items-center">
          <img src="https://picsum.photos/seed/doctor3/50/50.jpg" alt="Dr. Budi" class="w-12 h-12 rounded-full mr-4 object-cover">
          <div>
            <h5 class="font-semibold text-[#166F61]">Dr. Budi Santoso</h5>
            <p class="text-sm text-gray-500">Direktur RS Internasional</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- <style>
  /* Fade-in animation */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .fade-in {
    opacity: 0;
    animation: fadeInUp 0.8s ease forwards;
  }

  /* Stagger effect */
  .testimonial-card:nth-child(1) {
    animation-delay: 0.2s;
  }

  .testimonial-card:nth-child(2) {
    animation-delay: 0.4s;
  }

  .testimonial-card:nth-child(3) {
    animation-delay: 0.6s;
  }
</style> -->

    {{-- End Section4 --}}
    <!-- WhatsApp -->
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


  

@endsection




