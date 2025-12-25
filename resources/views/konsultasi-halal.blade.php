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

    <!-- FAQ Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Apa itu SAFFMedic Apotek?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SAFFMedic Apotek adalah bagian dari aplikasi SIM Klinik dan SIMRS yang dilengkapi dengan modul apotek. Modul ini dapat diterapkan secara terpisah dan mandiri oleh toko apotek tanpa harus menjalankan sistem klinik."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa keunggulan SAFFMedic Apotek?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Keunggulan SAFFMedic Apotek terletak pada integrasinya dengan SIM Klinik dan SIMRS. Aplikasi ini dapat dijalankan pada fasilitas kesehatan seperti klinik dan rumah sakit. Fitur unggulan termasuk penjualan, pembelian, pengelolaan stok, batch number, expire, pembukuan keuangan, akuntansi, modul antrian, penerimaan resep digital, dan laporan lengkap yang dapat disesuaikan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SAFFMedic Apotek dapat dijalankan secara terpisah?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, SAFFMedic Apotek dapat dijalankan secara mandiri tanpa harus terhubung dengan sistem klinik. Toko apotek dapat menggunakan aplikasi ini secara terpisah."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa saja fitur yang disediakan oleh Apotek SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Fitur utama meliputi penjualan, pembelian, pengelolaan stok, batch number, expire, pembukuan keuangan, akuntansi, modul antrian, penerimaan resep digital, dan laporan yang dapat disesuaikan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana manajemen stok di Apotek SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Manajemen stok pada SAFFMedic Apotek menggunakan sistem FIFO (First In, First Out) untuk pengaturan inventory."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SAFFMedic Apotek berbasis cloud?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, SAFFMedic Apotek berbasis cloud dan tidak memerlukan instalasi desktop. Aplikasi dapat diakses secara online."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah ada biaya langganan untuk menggunakan SAFFMedic Apotek?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, pengguna harus berlangganan untuk menggunakan SAFFMedic Apotek. Informasi lebih lanjut mengenai tarif dan biaya dapat ditemukan pada fitur harga."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah pelatihan dan dukungan online disertakan dalam paket harga?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, paket harga SAFFMedic Apotek sudah termasuk pelatihan virtual dan dukungan online untuk membantu pengguna dalam penggunaan aplikasi."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah harga paket juga mencakup pengembangan dan update?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, harga paket SAFFMedic Apotek mencakup pengembangan dan update. Pengguna akan mendapatkan pembaruan secara berkala tanpa biaya tambahan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara mendapatkan SAFFMedic Apotek?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Anda dapat menghubungi tim SAFFMedic untuk informasi lebih lanjut dan proses pemesanan. Kontak dan informasi lebih lanjut dapat ditemukan di situs web resmi SAFFMedic."
                    }
                }
            ]
        }
    </script>

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

    <div>
        @include('partials.navbar')

        {{-- Section1 --}}
        <section class="container mx-auto my-20">
            <div class="flex flex-col md:flex-row justify-center items-center gap-10 p-5">
                <div class="md:w-[45%]">
                    <img src="img/apotek-bg-element1.png" class="" alt="Apotek">
                </div>
                <div class="md:w-1/3">
                    <div class="text-darkgreen font-bold">
                        <h1 class="text-3xl">MANDIRI ATAU TERPISAH</h1>
                        <h2 class="text-2xl">Bebas sesuai yang Kamu suka</h2>
                        <h3 class="mt-2 mb-1 text-deepturqoise font-semibold">SAFFMedic memiliki Fitur Apotik
                            terintegrasi</h3>
                        <p class="font-normal text-deepturqoise">
                            Kamu bebas pilih, hanya menggunakan Apotik,
                            atau gabung dalam Klinik yang tersentraslisasi
                            <br><br>
                            Aplikasi dan Fitur Apotek SAFFMedic merupakan software yang digunakan secara online dengan
                            harga
                            yang
                            murah
                        </p>
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                            class="rounded-lg text-darkgreen transition-transform transform hover:scale-110"type="button">
                            <svg class="w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                    stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentcolor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <!-- Main modal -->
                    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-darkgreen">
                                    <h3 class="text-xl font-semibold text-white">
                                        PLATFORM SIMRS
                                    </h3>
                                    <button type="button"
                                        class="text-white bg-transparent hover:bg-gray-200 hover:text-darkgreen rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-hide="static-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500">
                                        Platform SIMRS digunakan untuk mengoptimalkan operasional FASKES.
                                        <br><br>
                                        Platform SIMRS adalah sistem informasi manajemen rumah sakit yang dirancang
                                        khusus untuk
                                        membantu mengelola data dan proses operasional di fasilitas kesehatan. Dengan
                                        menggunakan
                                        platform ini, FASKES dapat meningkatkan efisiensi dan efektivitas dalam
                                        pengelolaan
                                        layanan
                                        kesehatan.
                                        <br><br>
                                        Dalam pengoperasiannya, platform SIMRS memiliki beberapa fitur yang sangat
                                        berguna.
                                        Pertama,
                                        platform ini memungkinkan FASKES untuk mengelola data pasien dengan lebih mudah
                                        dan
                                        teratur.
                                        Semua informasi medis pasien dapat diakses dengan mudah dan aman, mulai dari
                                        riwayat
                                        medis
                                        hingga hasil tes laboratorium.
                                        <br><br>
                                        Selain itu, platform SIMRS juga memiliki modul untuk mengelola jadwal dan
                                        pendaftaran
                                        pasien.
                                        FASKES dapat mengatur jadwal dokter, memantau jumlah pasien yang datang, dan
                                        membuat
                                        sistem
                                        antrian yang efisien. Dengan demikian, waktu tunggu pasien dapat diminimalisir
                                        dan
                                        pengalaman
                                        mereka dalam mengakses layanan kesehatan menjadi lebih baik.
                                        <br><br>
                                        Selain itu, platform SIMRS juga dapat membantu FASKES dalam mengelola stok obat
                                        dan
                                        inventaris
                                        fasilitas kesehatan. FASKES dapat melacak persediaan obat yang tersedia,
                                        mengatur
                                        pembelian
                                        suplai baru, dan mengelola distribusi obat yang efisien. Hal ini akan membantu
                                        FASKES
                                        dalam
                                        menghindari kekurangan persediaan obat dan meningkatkan pelayanan pasien.
                                        <br><br>
                                        Dengan semua fitur dan manfaat yang ditawarkan oleh platform SIMRS, FASKES dapat
                                        meningkatkan
                                        efektivitas dan efisiensi operasional mereka. Penggunaan platform ini akan
                                        membantu
                                        FASKES untuk
                                        mengelola data dengan lebih baik, meningkatkan pengalaman pasien, dan memastikan
                                        ketersediaan
                                        stok obat yang memadai. Sebagai hasilnya, FASKES dapat memberikan layanan
                                        kesehatan yang
                                        lebih
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
                    <a role="button">
                        <div
                            class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md mt-5">
                            <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                            <a href="/whatsapp">Hubungi Kami</a>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        {{-- End Section1 --}}

        {{-- Section2 --}}
        <section class="container mx-auto my-20 bg-lightsage" data-aos="fade-down" data-aos-duration="1000">
            <div class="text-center py-10">
                <h1 class="text-darkteal text-3xl font-bold">Sistem Apotik SAFFMedic <br>
                    Fitur lebih lengkap, harga lebih murah</h1>
                <p class="text-deepturqoise md:w-[520px] mx-auto mt-4">Harga yang murah, membuat pengeluaranmu makin
                    hemat
                    SAFFmedic dilengkapi dengan fitur yang dapat dikembangkan</p>
            </div>

            <div
                class="flex flex-col md:flex-row md:gap-10 gap-5 justify-center text-darkgreen font-semibold text-2xl pb-32 px-5">
                <ul class="w-fit mx-auto md:mx-0 flex flex-col md:gap-10 gap-5 md:mt-10">
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Fitur Pembelian</li>
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Fitur Keuangan</li>
                </ul>
                <div class="md:w-[50%] order-2 md:order-1">
                    <img src="img/apotik_fitur.png" class="mx-auto" alt=" Fitur Apotek">
                </div>
                <ul class="w-fit mx-auto md:mx-0 flex flex-col md:gap-20 gap-5 md:mt-10 order-1 md:order-2">
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Fitur Penjualan</li>
                    <li class="border-b-2 border-b-turqoise px-5 py-2">inventory obat</li>
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Gudang / Depo</li>
                </ul>
            </div>
        </section>
        {{-- End Section2 --}}

        {{-- Section3 --}}
        <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center gap-5 items-center p-5">
                <div class="md:w-1/3 order-2 md:order-1">
                    <div class="md:w-4/5 text-darkgreen font-bold">
                        <h1 class="text-3xl">Resep Dokter</h1>
                        <h2 class="text-2xl">Tinggalkan cara manual</h2>
                        <h3 class="mt-2 mb-1 text-deepturqoise font-semibold">Submit resep dari ruang pemeriksaan</h3>
                        <p class="font-normal text-deepturqoise">Pasien tidak perlu membawa kertas resep,
                            Petugas apotik cukup lihat dari dashboard</p>
                        <a role="button">
                            <div
                                class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md mt-5    ">
                                <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                                <a href="/whatsapp">Hubungi Kami</a>
                            </div>
                        </a>
                    </div>
                </div>
                <img src="img/resep-dokter.png" width="100%" class="md:w-[40%] order-1 md:order-2"
                    alt="Resep Dokter">
            </div>
        </section>
        {{-- End Section3 --}}

        {{-- FAQ --}}

        {{-- Desktop (Tab) --}}
        <div class="py-10 md:pt-20 md:pb-28 bg-[#f1f4f7] mt-10 md:mt-20" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>SAFFMedic Apotek</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apa itu SAFFMedic Apotek?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. Apa keunggulan SAFFMedic Apotek?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Apakah SAFFMedic Apotek dapat dijalankan secara
                        terpisah?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Apa saja fitur yang disediakan oleh Apotek
                        SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '5')">5. Bagaimana manajemen stok di Apotek SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '6')">6. Apakah SAFFMedic Apotek berbasis cloud?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '7')">7. Apakah ada biaya langganan untuk menggunakan SAFFMedic
                        Apotek?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '8')">8. Apakah pelatihan dan dukungan online disertakan dalam
                        paket
                        harga?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '9')">9. Apakah harga paket juga mencakup pengembangan dan
                        update?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '10')">10. Bagaimana cara mendapatkan SAFFMedic Apotek?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa itu SAFFMedic Apotek?</h3>
                    <p>SAFFMedic Apotek adalah bagian dari aplikasi SIM Klinik dan SIMRS yang dilengkapi dengan
                        modul apotek.
                        Modul ini dapat diterapkan secara terpisah dan mandiri oleh toko apotek tanpa harus
                        menjalankan sistem
                        klinik.</p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa keunggulan SAFFMedic Apotek?</h3>
                    <p>Keunggulan SAFFMedic Apotek terletak pada integrasinya dengan SIM Klinik dan SIMRS. Aplikasi
                        ini dapat
                        dijalankan pada fasilitas kesehatan seperti klinik dan rumah sakit. Fitur unggulan termasuk
                        penjualan,
                        pembelian, pengelolaan stok, batch number, expire, pembukuan keuangan, akuntansi, modul
                        antrian,
                        penerimaan resep digital, dan laporan lengkap yang dapat disesuaikan.
                    </p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SAFFMedic Apotek dapat dijalankan
                        secara
                        terpisah?</h3>
                    <p>Ya, SAFFMedic Apotek dapat dijalankan secara mandiri tanpa harus terhubung dengan sistem
                        klinik. Toko
                        apotek dapat menggunakan aplikasi ini secara terpisah.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa saja fitur yang disediakan oleh Apotek
                        SAFFMedic?
                    </h3>
                    <p>Fitur utama meliputi penjualan, pembelian, pengelolaan stok, batch number, expire, pembukuan
                        keuangan,
                        akuntansi, modul antrian, penerimaan resep digital, dan laporan yang dapat disesuaikan.</p>
                </div>

                <div id="5" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana manajemen stok di Apotek
                        SAFFMedic?</h3>
                    <p>Manajemen stok pada SAFFMedic Apotek menggunakan sistem FIFO (First In, First Out) untuk
                        pengaturan
                        inventory.</p>
                </div>

                <div id="6" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SAFFMedic Apotek berbasis cloud?</h3>
                    <p>Ya, SAFFMedic Apotek berbasis cloud dan tidak memerlukan instalasi desktop. Aplikasi dapat
                        diakses secara
                        online.</p>
                </div>

                <div id="7" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah ada biaya langganan untuk menggunakan
                        SAFFMedic
                        Apotek?</h3>
                    <p>Ya, pengguna harus berlangganan untuk menggunakan SAFFMedic Apotek. Informasi lebih lanjut
                        mengenai tarif
                        dan biaya dapat ditemukan pada fitur harga.</p>
                </div>

                <div id="8" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4"> Apakah pelatihan dan dukungan online
                        disertakan dalam
                        paket harga?</h3>
                    <p>Ya, paket harga SAFFMedic Apotek sudah termasuk pelatihan virtual dan dukungan online untuk
                        membantu
                        pengguna dalam penggunaan aplikasi.</p>
                </div>

                <div id="9" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah harga paket juga mencakup
                        pengembangan dan
                        update?</h3>
                    <p>Ya, harga paket SAFFMedic Apotek mencakup pengembangan dan update. Pengguna akan mendapatkan
                        pembaruan
                        secara berkala tanpa biaya tambahan.
                    </p>
                </div>
                <div id="10" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana cara mendapatkan SAFFMedic Apotek?
                    </h3>
                    <p>Anda dapat menghubungi tim SAFFMedic untuk informasi lebih lanjut dan proses pemesanan.
                        Kontak dan
                        informasi lebih lanjut dapat ditemukan di situs web resmi SAFFMedic.
                    </p>
                </div>
            </div>

            {{-- Mobile (Accordion) --}}
            <div class="md:hidden mt-14">
                <div class="mt-5 md:mt-0">
                    <div class="relative md:w-[450px]">
                        <input type="checkbox" id="input1" class="absolute peer opacity-0">
                        <label for="input1"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apa
                            itu SAFFMedic Apotek?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>SAFFMedic Apotek adalah bagian dari aplikasi SIM Klinik dan SIMRS yang dilengkapi
                                dengan modul
                                apotek. Modul ini dapat diterapkan secara terpisah dan mandiri oleh toko apotek
                                tanpa harus
                                menjalankan sistem klinik.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apa
                            keunggulan SAFFMedic Apotek?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Keunggulan SAFFMedic Apotek terletak pada integrasinya dengan SIM Klinik dan SIMRS.
                                Aplikasi ini
                                dapat dijalankan pada fasilitas kesehatan seperti klinik dan rumah sakit. Fitur
                                unggulan
                                termasuk penjualan, pembelian, pengelolaan stok, batch number, expire, pembukuan
                                keuangan,
                                akuntansi, modul antrian, penerimaan resep digital, dan laporan lengkap yang dapat
                                disesuaikan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SAFFMedic Apotek dapat dijalankan secara terpisah?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, SAFFMedic Apotek dapat dijalankan secara mandiri tanpa harus terhubung dengan
                                sistem klinik.
                                Toko apotek dapat menggunakan aplikasi ini secara terpisah.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            saja fitur yang disediakan oleh Apotek SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>Fitur utama meliputi penjualan, pembelian, pengelolaan stok, batch number, expire,
                                pembukuan
                                keuangan, akuntansi, modul antrian, penerimaan resep digital, dan laporan yang dapat
                                disesuaikan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input5" class="absolute peer opacity-0">
                        <label for="input5"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            manajemen stok di Apotek SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-4 md:mt-0 text-deepturqoise opacity-95">
                            <p>Manajemen stok pada SAFFMedic Apotek menggunakan sistem FIFO (First In, First Out)
                                untuk
                                pengaturan inventory.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input6" class="absolute peer opacity-0">
                        <label for="input6"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SAFFMedic Apotek berbasis cloud?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-5 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, SAFFMedic Apotek berbasis cloud dan tidak memerlukan instalasi desktop. Aplikasi
                                dapat
                                diakses secara online.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input7" class="absolute peer opacity-0">
                        <label for="input7"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">
                            Apakah ada biaya langganan untuk menggunakan SAFFMedic Apotek?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, pengguna harus berlangganan untuk menggunakan SAFFMedic Apotek. Informasi lebih
                                lanjut
                                mengenai tarif dan biaya dapat ditemukan pada fitur harga
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input8" class="absolute peer opacity-0">
                        <label for="input8"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            pelatihan dan dukungan online disertakan dalam paket harga?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, paket harga SAFFMedic Apotek sudah termasuk pelatihan virtual dan dukungan online
                                untuk
                                membantu pengguna dalam penggunaan aplikasi.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input9" class="absolute peer opacity-0">
                        <label for="input9"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            harga paket juga mencakup pengembangan dan update?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, harga paket SAFFMedic Apotek mencakup pengembangan dan update. Pengguna akan
                                mendapatkan
                                pembaruan secara berkala tanpa biaya tambahan.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input10" class="absolute peer opacity-0">
                        <label for="input10"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            cara mendapatkan SAFFMedic Apotek?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Anda dapat menghubungi tim SAFFMedic untuk informasi lebih lanjut dan proses
                                pemesanan. Kontak
                                dan informasi lebih lanjut dapat ditemukan di situs web resmi SAFFMedic.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>
                </div>
            </div>
        </div>

        <style>
            #child-scroll {
                padding-right: 21px;
            }

            #child-scroll::-webkit-scrollbar {
                width: 10px !important;
            }

            #child-scroll::-webkit-scrollbar-thumb {
                background-color: #166F61;
                border-radius: 50px;
            }

            #child-scroll::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 50px;
            }

            /* Handle on hover */
            #child-scroll::-webkit-scrollbar-thumb:hover {
                background: #166F61;
            }
        </style>

        <style>
            /* Create an active/current "tab button" class */
            .tab button.active {
                background-color: #166F61;
            }

            .tab button.active {
                color: white;
            }
        </style>

        <script>
            function openCity(evt, cityName) {
                // Declare all variables
                var i, tabcontent, tablinks;

                // Get all elements with class="tabcontent" and hide them
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the link that opened the tab
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            document.addEventListener("DOMContentLoaded", function() {
                // Simulate a click on the first tab to open it by default
                document.querySelector(".tab button").click();
            });

            function openCity(evt, cityName) {
                // Your existing JavaScript code
                var i, tabcontent, tablinks;

                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
        {{-- End FAQ --}}

        {{-- Section4 --}}
        <section class="container mx-auto my-20 p-5" data-aos="fade-down" data-aos-duration="1000">
            <div class="text-2xl md:text-3xl font-bold text-center text-darkgreen">
                <h1>Mudah terhubung <br>
                    dan selalu memberi solusi</h1>
            </div>

            <div class="flex flex-wrap justify-center gap-10 text-center text-darkgreen my-20">
                <div class="w-[320px]">
                    <img src="img/metode-pembayaran.png" class="w-[20%] mx-auto mb-5" alt="Metode Pembayaran">
                    <h1 class="md:text-2xl text-xl font-bold">Metode Pembayaran</h1>
                    <p>Metode pembayaran yang dapat disesuaikan dengan fasilitas Apotek</p>
                </div>
                <div class="w-[320px]">
                    <img src="img/koneksi-semua-layanan.png" class="w-[20%] mx-auto mb-5" alt="Koneksi">
                    <h1 class="md:text-2xl text-xl font-bold">Koneksi semua layanan</h1>
                    <p>Semua layanan yang di izinkan dapat melihat ketersediaan obat, kerja akan lebih mudah</p>
                </div>
                <div class="w-[320px]">
                    <img src="img/database-terpusat.png" class="w-[20%] mx-auto mb-5" alt="Database Terpisah">
                    <h1 class="md:text-2xl text-xl font-bold">Database terpisah</h1>
                    <p>Tidak perlu khawatir
                        datamu transaksimu akan tersimpan
                        indah pada SAFFMedic</p>
                </div>
            </div>

            <hr class="w-3/5 mx-auto">

            <div class="md:w-4/5 mx-auto rounded-lg p-10 my-20 shadow-lg">
                <p class="text-deepturqoise">
                    SAFFMedic adalah aplikasi apotek atau software apotek berbasis cloud dengan metode online yang
                    dapat
                    digunakan terpisah atau diintegrasikan dengan klinik atau rumah sakit. Aplikasi apotek ini
                    lengkap dan
                    murah, serta telah dilengkapi dengan fitur pembukuan dan manajemen stok yang memudahkan pengguna
                    dalam
                    mengelola apotek mereka.
                    <br><br>
                    Dengan SAFFMedic, apotek Anda akan dapat mengoptimalkan efisiensi operasional dengan menggunakan
                    teknologi
                    cloud. Aplikasi ini memungkinkan Anda untuk mengakses data apotek secara real-time dari mana
                    saja dan kapan
                    saja, sehingga memudahkan pengelolaan apotek Anda tanpa harus terbatas pada satu tempat.
                    <br><br>
                    Selain itu, SAFFMedic juga dapat diintegrasikan dengan klinik atau rumah sakit yang Anda miliki.
                    Dengan
                    menggabungkan data dari berbagai unit pelayanan kesehatan, Anda dapat memantau stok obat-obatan,
                    mengelola
                    resep, dan mengatur penjualan dengan lebih efisien.
                    <br><br>
                    Aplikasi apotek SAFFMedic juga dilengkapi dengan fitur pembukuan yang memudahkan pengguna dalam
                    mengelola
                    keuangan apotek. Anda dapat melakukan pencatatan transaksi penjualan, pembelian, dan pengeluaran
                    dengan
                    mudah dan akurat. Dengan adanya fitur ini, Anda dapat memantau arus kas apotek Anda secara
                    efektif dan
                    membuat laporan keuangan yang lengkap.
                    <br><br>
                    Selain itu, fitur manajemen stok pada SAFFMedic memungkinkan Anda untuk mengontrol persediaan
                    obat-obatan
                    dengan lebih baik. Anda dapat melacak jumlah stok yang tersedia, mengatur pemesanan ulang secara
                    otomatis,
                    dan memantau tanggal kadaluwarsa obat-obatan. Dengan demikian, Anda dapat menghindari kekurangan
                    stok atau
                    kelebihan persediaan yang tidak efisien.
                    <br><br>
                    Dengan SAFFMedic, Anda tidak perlu lagi khawatir tentang pengelolaan apotek yang rumit dan
                    memakan waktu.
                    Aplikasi ini memberikan solusi yang komprehensif dan terjangkau untuk memenuhi kebutuhan
                    pengelolaan apotek
                    Anda. Dapatkan SAFFMedic sekarang dan tingkatkan efisiensi operasional apotek Anda!
                </p>
            </div>
        </section>
        {{-- End Section4 --}}

        @include('partials.footer')

    </div>

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

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCNTDDPL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>
@include('partials.js')

</html>
