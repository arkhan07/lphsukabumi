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
                    "name": "Apa yang dimaksud dengan SIMRS?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SIMRS (Sistem Manajemen Rumah Sakit) adalah sistem informasi yang dirancang khusus untuk mengelola dan memfasilitasi berbagai aspek operasional dalam sebuah rumah sakit, mencakup fitur-fitur seperti antrian, admisi, keperawatan, keuangan, dan lainnya."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SIMRS SAFFMedic dapat di custome?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, SIMRS SAFFMedic dapat disesuaikan (semi-custome). Fitur-fitur dapat ditambahkan dan disesuaikan dengan kebutuhan rumah sakit, memberikan fleksibilitas dalam penggunaan sistem."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa yang dimaksud dengan \"semi-custome\" pada SIMRS SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "\"Semi-custome\" pada SIMRS SAFFMedic berarti memungkinkan penambahan dan penyesuaian fitur sesuai kebutuhan rumah sakit, memberikan kontrol sebagian atas fungsionalitas sistem."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SIMRS SAFFMedic berbasis Web, dan dapat dioperasikan tanpa terhubung ke Internet?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, SIMRS SAFFMedic berbasis web, namun memerlukan koneksi internet selama penggunaan. Penerapan pada server lokal dapat dilakukan dengan persetujuan antara pihak SAFFMedic dan rumah sakit."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana proses penerapan SIMRS SAFFMedic pada server lokal di rumah sakit?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Proses penerapan pada server lokal dapat dilakukan dengan kesepakatan antara SAFFMedic dan rumah sakit. Persetujuan ini memastikan integrasi dan kesiapan sistem dengan infrastruktur lokal rumah sakit."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa saja fitur yang terdapat dalam SIMRS SAFFMedic, dan apakah fitur-fitur tersebut dapat ditambahkan atau disesuaikan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SIMRS SAFFMedic mencakup fitur seperti Antrian, Admisi, Keperawatan, Keuangan, dan Penunjang untuk Laboratorium, Farmasi, MCU, dll. Fitur-fitur ini dapat ditambahkan dan disesuaikan sesuai dengan kebutuhan rumah sakit."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana harga paket berlangganan SIMRS SAFFMedic ditentukan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Harga paket berlangganan SIMRS SAFFMedic tertera sebagai harga paket yang mencakup fitur-fitur tertentu. Harga dapat bervariasi tergantung pada paket yang dipilih dan dapat mencakup pelatihan dan pendampingan virtual."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jika rumah sakit ingin menerapkan SIMRS pada server lokal, apakah paket yang diambil adalah paket hybrid?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, jika rumah sakit ingin menerapkan SIMRS pada server lokal, paket yang diambil adalah paket hybrid, memungkinkan penggunaan sistem secara lokal dengan penyesuaian fitur."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah harga paket berlangganan SIMRS SAFFMedic sudah termasuk pelatihan dan pendampingan virtual?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, harga paket berlangganan SIMRS SAFFMedic sudah termasuk pelatihan dan pendampingan virtual, memastikan pengguna mendapatkan dukungan yang diperlukan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah harga paket berlangganan mencakup biaya kunjungan offline dan akomodasi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Tidak, harga paket berlangganan tidak mencakup biaya kunjungan offline dan akomodasi. Biaya ini dapat dikenakan tambahan jika dibutuhkan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana integrasi dengan pihak ketiga pada SIMRS SAFFMedic diimplementasikan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Integrasi dengan pihak ketiga memerlukan kerjasama antara rumah sakit dan SAFFMedic untuk membangun hubungan API. Proses ini dapat dilakukan dengan koordinasi antara kedua belah pihak"
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
        <section class="container mx-auto mt-20" data-aos="fade-right" data-aos-duration="1000">
            <div class="md:w-4/5 mx-auto rounded-xl bg-darkteal flex flex-col md:flex-row gap-10 p-5">
                <div class="md:w-[50%]">
                    <img src="img/sc1bg.png" alt="Rumah Sakit">
                </div>

                <div class="md:w-1/3 text-white md:mt-24">
                    <h1 class="md:text-3xl text-xl font-bold mb-2">Solusi untuk Rumah Sakit yang ingin efisien</h1>
                    <p>Meningkatkan Keefektifan Rumah Sakit Berbagai Tipe dengan SIMRS SAFFMedic</p>
                </div>
            </div>
        </section>
        {{-- End Section1 --}}

        {{-- Section2 --}}
        <section>
            <div class="wrapper flex items-center justify-center p-5">
                <div class="slider flex space-x-14 md:space-x-14 w-[1000px] overflow-hidden relative bg-white">
                    <div class="slidee space-x-10 h-[400px] flex items-center">
                        <div
                            class=" w-[300px] bg-darkteal bg-cover py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="{{ route('rumah-sakit') }}">
                                <img src="img/rawat_inaps2.png" class="w-[30%] mx-auto" alt="">
                                <p class="text-center text-white text-xl">Rawat Inap</p>
                            </a>
                        </div>
                        <div
                            class=" w-[300px] bg-darkteal bg-over py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="{{ route('praktek-dokter') }}">
                                <img src="img/polis2.png" class="w-[30%] mx-auto" alt="">
                                <p class="text-center text-white text-xl">Poli</p>
                            </a>
                        </div>
                        <div
                            class=" w-[300px] bg-darkteal bg-cover py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="{{ route('farmasi') }}">
                                <img src="img/farmasis2.png" class="w-[30%] mx-auto" alt="">
                                <p class="text-center text-white text-xl">Farmasi</p>
                            </a>
                        </div>
                    </div>

                    <div class="slidee space-x-10 h-[400px] flex items-center">
                        <div
                            class=" w-[300px] bg-darkteal bg-cover py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="{{ route('penunjang') }}">
                                <img src="img/penunjangs2.png" class="w-[30%] mx-auto" alt="">
                                <p class="text-center text-white text-xl">Penunjang</p>
                            </a>
                        </div>
                        <div
                            class="w-[300px] bg-darkteal bg-cover py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="{{ route('antrian') }}">
                                <img src="img/antrians2.png" class="w-[30%] mx-auto" alt="">
                                <p class="text-center text-white text-xl">Antrian</p>
                            </a>
                        </div>
                        <div
                            class="w-[300px] bg-darkteal bg-over py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="{{ route('keuangan') }}">
                                <img src="img/keuangans2.png" class="w-[30%] mx-auto" alt="">
                                <p class="text-center text-white text-xl">Keuangan</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .slider::before,
                .slider::after {
                    height: 300px;
                    width: 35px;
                    position: absolute;
                    content: "";
                    background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
                    z-index: 2;
                }

                .slider::before {
                    left: 0;
                    top: 0;
                }

                .slider::after {
                    right: 0;
                    top: 0;
                    transform: rotateZ(180deg);
                }

                .slidee {
                    animation: slideshow 11s linear infinite;
                }

                @media (max-width: 576px) {

                    .slider::before,
                    .slider::after {
                        height: 300px;
                        width: 10px;
                        position: absolute;
                        content: "";
                        background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
                        z-index: 2;
                    }

                    .slider::before {
                        left: 0;
                        top: 0;
                    }

                    .slider::after {
                        right: 0;
                        top: 0;
                        transform: rotateZ(180deg);
                    }

                    .slidee {
                        animation: slideshow 7s linear infinite;
                    }

                    @keyframes slideshow {
                        0% {
                            transform: translateX(0);
                        }

                        100% {
                            transform: translateX(-100%);
                        }
                    }
                }

                @keyframes slideshow {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-100%);
                    }
                }
            </style>
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section2 --}}

        {{-- Section3 --}}
        <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
            <div class="font-semibold text-2xl text-deepturqoise text-center mb-40">
                <h1 class="md:w-1/4 mx-auto mb-10">Memberikan banyak manfaat untuk Rumah Sakit</h1>
                <img src="img/SIMRS.png" width="60%" class="md:w-[45%] mx-auto" alt="SIMRS">
            </div>

            <div class="md:w-4/5 mx-auto text-deepturqoise" data-aos="fade-down" data-aos-duration="1000">
                <div class="text-center text-xl">
                    <h1 class="font-bold">Administrasi yang efisien</h1>
                </div>
                <div class="md:w-[900px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-5 p-8">
                    <div class="border-2 border-deepturqoise p-5 rounded-md">
                        <div class="flex items-center font-semibold gap-x-2 mb-3 ">
                            <img src="img/pasien_sc4.png" width="30" alt="Pasien">
                            <h2>Mengelola Pasien</h2>
                        </div>
                        <p>Fitur Admisi yang lengkap untuk mengelola pendaftaran pasien dengan cepat dan mudah</p>
                    </div>
                    <div class="border-2 border-deepturqoise p-5 rounded-md">
                        <div class="flex items-center font-semibold gap-x-2 mb-3">
                            <img src="img/web_sc4.png" width="30" alt="Web">
                            <h2>Web Base</h2>
                        </div>
                        <p>Sistem manajemen berbasis web yang memungkinkan akses data administrasi secara real-time</p>
                    </div>
                    <div class="border-2 border-deepturqoise p-5 rounded-md">
                        <div class="flex items-center font-semibold gap-x-2 mb-3">
                            <img src="img/rekam_sc4.png" width="30" alt="Rekam Medis">
                            <h2>Rekam Medis Elektronik</h2>
                        </div>
                        <p>Pengelolaan proses administrasi yang efektif karna menggunakan Rekam Medis Elektronik</p>
                    </div>
                    <div class="border-2 border-deepturqoise p-5 rounded-md">
                        <div class="flex items-center font-semibold gap-x-2 mb-3">
                            <img src="img/keuangan_sc4.png" width="30" alt="Keuangan">
                            <h2>Mengelola Keuangan</h2>
                        </div>
                        <p>Administrasi keuangan dan tagihan pembayaran pasien dapat dikelola lebih mudah</p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section3 --}}

        {{-- Section4 --}}
        <section class="container mx-auto my-20" data-aos="fade-up-right" data-aos-duration="1000">
            <div class="md:w-5/6 mx-auto text-deepturqoise">
                <div class="text-center text-xl font-bold mb-20">
                    <h1>Manajemen Rawat Inap Yang tepat</h1>
                </div>

                <div class="flex flex-col md:flex-row justify-center p-5">
                    <ul class="md:w-[500px] flex flex-col gap-5 md:mt-14 px-20 py-10 order-2 md:order-1"
                        style="background-color: #18A37E20">
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-8 h-8 text-darkteal">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            Monitoring pasien secara real-time dan pengelolaan ketersediaan tempat tidur secara efisien
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-8 h-8 text-darkteal">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            SIMRS SAFFMedic menyediakan informasi yang akurat dan terkini tentang ketersediaan kamar
                            rawat inap,
                            termasuk tipe kamar
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-8 h-8 text-darkteal">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            Integrasi dengan Poli, ruang tindakan, Farmasi, instalasi Gizi, dll
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-8 h-8 text-darkteal">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            Customisasi fitur dan laporan apabila diperlukan oleh Rumah Sakit
                        </li>
                    </ul>

                    <div class="md:w-[500px] order-1 md:order-2">
                        <img src="img/manajemen-inap.png" alt="Manajemen Rawat Inap">
                        <div class="bg-darkteal text-white font-semibold px-10 py-16">
                            <p>Dengan menggunakan SIMRS SAFFMedic, rumah sakit dapat meningkatkan efisiensi dan kualitas
                                layanan
                                rawat inap mereka. Sistem ini membantu mengurangi birokrasi dan meningkatkan koordinasi
                                antara
                                berbagai departemen kesehatan dalam rumah sakit, sehingga pasien mendapatkan perawatan
                                yang
                                lebih baik dan lebih terkoordinasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section4 --}}

        {{-- Section5 --}}
        <section data-aos="fade-down" data-aos-duration="1000">
            <div class="text-center font-bold text-deepturqoise mb-16 mt-40">
                <h1>Mengapa beralih ke SIMRS SAFFMedic?</h1>
            </div>

            <div class="flex justify-center gap-5 p-5">
                <img src="img/line-dot.png" class="md:w-6" alt="">
                <ul class="flex flex-col text-deepturqoise font-medium gap-3">
                    <li>Berbasis Web, sehingga tidak memerlukan biaya <br> pengadaan dan pemeliharaan Server</li>
                    <li>Senantiasa update setiap ada usulan, masukan <br> ataupun permintaan dari user</li>
                    <li>Terletak pada data center yang aman yang memiliki <br> standarisasi pengelolaan server</li>
                    <li>Semi Custome yang memungkinkan pengguna <br> meminta pernambahan modul ataupun laporan</li>
                    <li>Sistem telah terintegrasi dari semua layanan</li>
                    <li>Menyediakan layanan migrasi gratis untuk <br> perpindahan dari sistem lama kepada SAFFMedic</li>
                </ul>
            </div>
        </section>
        {{-- End Section5 --}}

        {{-- Section6 --}}
        <section class="container mx-auto my-20 p-5" data-aos="fade-down" data-aos-duration="1000">
            <div class="text-center text-deepturqoise mb-10">
                <h1 class="md:text-3xl text-2xl font-bold mb-3">Tipe Rumah Sakit</h1>
                <h2 class="font-semibold">Dapat diiplementasikan pada semua type Rumah Sakit</h2>
                <p>SAFFMedic Memberikan SIMRS dengan harga terjangkau <br>
                    serta menghadirkan fitur Semi Custome</p>
            </div>

            <div class="flex flex-wrap justify-center gap-10 text-darkteal">
                <div class="w-[120px] mx-auto md:mx-0 py-2 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/typea_sc7.png" class="w-[40%] mx-auto" alt="Type A">
                    <h2 class="text-center">Type A</h2>
                </div>
                <div class="w-[120px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/typeb_sc7.png" class="w-[60%] mx-auto" alt="Type B">
                    <h2 class="text-center">Type B</h2>
                </div>
                <div class="w-[120px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/typec_sc7.png" class="w-[60%] mx-auto" alt="Type C">
                    <h2 class="text-center">Type C</h2>
                </div>
                <div class="w-[120px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/typed_sc7.png" class="w-[50%] mx-auto" alt="Type D">
                    <h2 class="text-center">Type D</h2>
                </div>
            </div>
        </section>
        {{-- End Section6}}

    {{-- FAQ --}}

        {{-- Desktop (Tab) --}}
        <div class="py-10 md:pt-20 md:pb-28 bg-[#f1f4f7] mt-10 md:mt-20" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>SIMRS SAFFMedic</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apa yang dimaksud dengan SIMRS?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. akah SIMRS SAFFMedic dapat di custome?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Apa yang dimaksud dengan "semi-custome" pada SIMRS
                        SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Apakah SIMRS SAFFMedic berbasis Web, dan dapat dioperasikan
                        tanpa
                        terhubung ke Internet?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '5')">5. Bagaimana proses penerapan SIMRS SAFFMedic pada server lokal
                        di rumah
                        sakit?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '6')">6. Apa saja fitur yang terdapat dalam SIMRS SAFFMedic, dan
                        apakah
                        fitur-fitur tersebut dapat ditambahkan atau disesuaikan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '7')">7. Bagaimana harga paket berlangganan SIMRS SAFFMedic
                        ditentukan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '8')">8. Jika rumah sakit ingin menerapkan SIMRS pada server lokal,
                        apakah
                        paket yang diambil adalah paket hybrid?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '9')">9. Apakah harga paket berlangganan SIMRS SAFFMedic sudah
                        termasuk
                        pelatihan dan pendampingan virtual?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '10')">10. Apakah harga paket berlangganan mencakup biaya kunjungan
                        offline
                        dan
                        akomodasi?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '11')">11. Bagaimana integrasi dengan pihak ketiga pada SIMRS
                        SAFFMedic
                        diimplementasikan?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa yang dimaksud dengan SIMRS?</h3>
                    <p>SIMRS (Sistem Manajemen Rumah Sakit) adalah sistem informasi yang dirancang khusus untuk
                        mengelola dan
                        memfasilitasi berbagai aspek operasional dalam sebuah rumah sakit, mencakup fitur-fitur seperti
                        antrian,
                        admisi, keperawatan, keuangan, dan lainnya.
                    </p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SIMRS SAFFMedic dapat di custome?</h3>
                    <p>Ya, SIMRS SAFFMedic dapat disesuaikan (semi-custome). Fitur-fitur dapat ditambahkan dan
                        disesuaikan
                        dengan kebutuhan rumah sakit, memberikan fleksibilitas dalam penggunaan sistem.
                    </p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa yang dimaksud dengan "semi-custome" pada
                        SIMRS
                        SAFFMedic?</h3>
                    <p>"Semi-custome" pada SIMRS SAFFMedic berarti memungkinkan penambahan dan penyesuaian fitur sesuai
                        kebutuhan rumah sakit, memberikan kontrol sebagian atas fungsionalitas sistem.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SIMRS SAFFMedic berbasis Web, dan dapat
                        dioperasikan tanpa terhubung ke Internet?</h3>
                    <p>Ya, SIMRS SAFFMedic berbasis web, namun memerlukan koneksi internet selama penggunaan. Penerapan
                        pada
                        server lokal dapat dilakukan dengan persetujuan antara pihak SAFFMedic dan rumah sakit.
                    </p>
                </div>

                <div id="5" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana proses penerapan SIMRS SAFFMedic pada
                        server
                        lokal di rumah sakit?</h3>
                    <p>Proses penerapan pada server lokal dapat dilakukan dengan kesepakatan antara SAFFMedic dan rumah
                        sakit.
                        Persetujuan ini memastikan integrasi dan kesiapan sistem dengan infrastruktur lokal rumah sakit.
                    </p>
                </div>

                <div id="6" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa saja fitur yang terdapat dalam SIMRS
                        SAFFMedic, dan
                        apakah fitur-fitur tersebut dapat ditambahkan atau disesuaikan?
                    </h3>
                    <p>SIMRS SAFFMedic mencakup fitur seperti Antrian, Admisi, Keperawatan, Keuangan, dan Penunjang
                        untuk
                        Laboratorium, Farmasi, MCU, dll. Fitur-fitur ini dapat ditambahkan dan disesuaikan sesuai dengan
                        kebutuhan rumah sakit.
                    </p>
                </div>

                <div id="7" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana harga paket berlangganan SIMRS
                        SAFFMedic
                        ditentukan?
                    </h3>
                    <p>Harga paket berlangganan SIMRS SAFFMedic tertera sebagai harga paket yang mencakup fitur-fitur
                        tertentu.
                        Harga dapat bervariasi tergantung pada paket yang dipilih dan dapat mencakup pelatihan dan
                        pendampingan
                        virtual.
                    </p>
                </div>

                <div id="8" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4"> Jika rumah sakit ingin menerapkan SIMRS pada
                        server
                        lokal, apakah paket yang diambil adalah paket hybrid?
                    </h3>
                    <p>Ya, jika rumah sakit ingin menerapkan SIMRS pada server lokal, paket yang diambil adalah paket
                        hybrid,
                        memungkinkan penggunaan sistem secara lokal dengan penyesuaian fitur.
                    </p>
                </div>

                <div id="9" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah harga paket berlangganan SIMRS SAFFMedic
                        sudah
                        termasuk pelatihan dan pendampingan virtual?
                    </h3>
                    <p>Ya, harga paket berlangganan SIMRS SAFFMedic sudah termasuk pelatihan dan pendampingan virtual,
                        memastikan pengguna mendapatkan dukungan yang diperlukan.
                    </p>
                </div>
                <div id="10" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah harga paket berlangganan mencakup biaya
                        kunjungan
                        offline dan akomodasi?
                    </h3>
                    <p>Tidak, harga paket berlangganan tidak mencakup biaya kunjungan offline dan akomodasi. Biaya ini
                        dapat
                        dikenakan tambahan jika dibutuhkan.
                    </p>
                </div>
                <div id="11" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana integrasi dengan pihak ketiga pada
                        SIMRS
                        SAFFMedic diimplementasikan?
                    </h3>
                    <p>Integrasi dengan pihak ketiga memerlukan kerjasama antara rumah sakit dan SAFFMedic untuk
                        membangun
                        hubungan API. Proses ini dapat dilakukan dengan koordinasi antara kedua belah pihak
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
                            yang dimaksud dengan SIMRS?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>SIMRS (Sistem Manajemen Rumah Sakit) adalah sistem informasi yang dirancang khusus untuk
                                mengelola dan memfasilitasi berbagai aspek operasional dalam sebuah rumah sakit,
                                mencakup
                                fitur-fitur seperti antrian, admisi, keperawatan, keuangan, dan lainnya.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SIMRS SAFFMedic dapat di custome?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, SIMRS SAFFMedic dapat disesuaikan (semi-custome). Fitur-fitur dapat ditambahkan dan
                                disesuaikan dengan kebutuhan rumah sakit, memberikan fleksibilitas dalam penggunaan
                                sistem.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            yang dimaksud dengan "semi-custome" pada SIMRS SAFFMedic?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>"Semi-custome" pada SIMRS SAFFMedic berarti memungkinkan penambahan dan penyesuaian fitur
                                sesuai
                                kebutuhan rumah sakit, memberikan kontrol sebagian atas fungsionalitas sistem.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SIMRS SAFFMedic berbasis Web, dan dapat dioperasikan tanpa terhubung ke Internet?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, SIMRS SAFFMedic berbasis web, namun memerlukan koneksi internet selama penggunaan.
                                Penerapan
                                pada server lokal dapat dilakukan dengan persetujuan antara pihak SAFFMedic dan rumah
                                sakit.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input5" class="absolute peer opacity-0">
                        <label for="input5"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            proses penerapan SIMRS SAFFMedic pada server lokal di rumah sakit?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-4 md:mt-0 text-deepturqoise opacity-95">
                            <p>Proses penerapan pada server lokal dapat dilakukan dengan kesepakatan antara SAFFMedic
                                dan rumah
                                sakit. Persetujuan ini memastikan integrasi dan kesiapan sistem dengan infrastruktur
                                lokal rumah
                                sakit.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input6" class="absolute peer opacity-0">
                        <label for="input6"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            saja fitur yang terdapat dalam SIMRS SAFFMedic, dan apakah fitur-fitur tersebut dapat
                            ditambahkan
                            atau disesuaikan?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-5 md:mt-0 text-deepturqoise opacity-95">
                            <p>SIMRS SAFFMedic mencakup fitur seperti Antrian, Admisi, Keperawatan, Keuangan, dan
                                Penunjang
                                untuk Laboratorium, Farmasi, MCU, dll. Fitur-fitur ini dapat ditambahkan dan disesuaikan
                                sesuai
                                dengan kebutuhan rumah sakit.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input7" class="absolute peer opacity-0">
                        <label for="input7"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            harga paket berlangganan SIMRS SAFFMedic ditentukan?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Harga paket berlangganan SIMRS SAFFMedic tertera sebagai harga paket yang mencakup
                                fitur-fitur
                                tertentu. Harga dapat bervariasi tergantung pada paket yang dipilih dan dapat mencakup
                                pelatihan
                                dan pendampingan virtual.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input8" class="absolute peer opacity-0">
                        <label for="input8"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Jika
                            rumah sakit ingin menerapkan SIMRS pada server lokal, apakah paket yang diambil adalah paket
                            hybrid?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, jika rumah sakit ingin menerapkan SIMRS pada server lokal, paket yang diambil adalah
                                paket
                                hybrid, memungkinkan penggunaan sistem secara lokal dengan penyesuaian fitur.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input9" class="absolute peer opacity-0">
                        <label for="input9"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            harga paket berlangganan SIMRS SAFFMedic sudah termasuk pelatihan dan pendampingan virtual?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, harga paket berlangganan SIMRS SAFFMedic sudah termasuk pelatihan dan pendampingan
                                virtual,
                                memastikan pengguna mendapatkan dukungan yang diperlukan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input10" class="absolute peer opacity-0">
                        <label for="input10"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            harga paket berlangganan mencakup biaya kunjungan offline dan akomodasi?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Tidak, harga paket berlangganan tidak mencakup biaya kunjungan offline dan akomodasi.
                                Biaya ini
                                dapat dikenakan tambahan jika dibutuhkan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input11" class="absolute peer opacity-0">
                        <label for="input11"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            integrasi dengan pihak ketiga pada SIMRS SAFFMedic diimplementasikan?
                        </label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Integrasi dengan pihak ketiga memerlukan kerjasama antara rumah sakit dan SAFFMedic untuk
                                membangun hubungan API. Proses ini dapat dilakukan dengan koordinasi antara kedua belah
                                pihak
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

        {{-- Section7 --}}
        <section class="my-28 p-5" data-aos="zoom-in-up" data-aos-duration="1100">
            <div class="md:w-2/5 mx-auto text-center text-darkgreen mb-20 text-xl">
                <h1 class="font-bold mb-5">Bergabunglah segera !</h1>
                <p>Dapatkan Kemudahan dan Efisiensi Terbaik dalam Manajemen Rumah Sakit dengan SIMRS SAFFMedic</p>
            </div>
            <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-7 mb-20">
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-emerald md:w-[220px] text-white font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/demo.png" width="25" alt="Demo">
                        <a href="{{ route('form-request-demo') }}">Atur Jadwal Demo</a>
                    </div>
                </a>
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                        <a href="/whatsapp">Hubungi Kami</a>
                    </div>
                </a>
            </div>
        </section>
        {{-- End Section7 --}}

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
