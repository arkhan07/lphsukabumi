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
                    "name": "Apa itu SIM Klinik SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SIM Klinik SAFFMedic adalah aplikasi berbasis web yang dirancang untuk mendukung operasional klinik. Fitur-fiturnya mencakup administrasi, rekam medis, apotek, antrian, dan penunjang laboratorium."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa saja fitur utama SIM Klinik SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Fitur utama SIM Klinik SAFFMedic meliputi ADMISI, rekam medis, apotek, antrian, dan penunjang untuk laboratorium."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara mengakses SIM Klinik SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SIM Klinik SAFFMedic dapat diakses dengan mudah karena berbasis web. Anda hanya perlu koneksi internet dan browser web untuk menggunakan aplikasi ini."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Untuk jenis fasilitas kesehatan apa SIM Klinik SAFFMedic cocok?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SIM Klinik SAFFMedic dapat digunakan di berbagai jenis fasilitas kesehatan, termasuk praktek dokter, puskesmas, klinik, dan rumah sakit."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SIM Klinik SAFFMedic dapat disesuaikan dengan poli atau ruangan tertentu?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, SIM Klinik SAFFMedic dapat disetup sesuai dengan poli atau ruangan yang diperlukan, sehingga sesuai dengan kebutuhan spesifik fasilitas kesehatan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara melihat biaya penggunaan SIM Klinik?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Biaya penggunaan SIM Klinik dapat dilihat di halaman harga yang tersedia. Informasi terkait biaya pelatihan, pendampingan, dan pembaruan fitur juga dapat ditemukan di sana."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SIM Klinik SAFFMedic dapat disesuaikan sesuai kebutuhan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, SIM Klinik SAFFMedic dapat disesuaikan sesuai dengan keperluan spesifik Anda, sehingga dapat memenuhi kebutuhan khusus fasilitas kesehatan Anda."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah biaya yang tertera sudah termasuk pelatihan dan pendampingan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, biaya yang tertera sudah mencakup pelatihan dan pendampingan secara virtual. Ini memastikan bahwa pengguna dapat memanfaatkan aplikasi dengan efektif."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SAFFMedic menyediakan dukungan untuk impor data pasien dan rekam medis dari file Excel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, tim SAFFMedic dapat melakukan impor data pasien dan rekam medis dari file Excel tanpa biaya tambahan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SAFFMedic memiliki versi aplikasi desktop?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Tidak, SAFFMedic saat ini hanya tersedia dalam bentuk web base dan tidak mengembangkan aplikasi dalam bentuk instaler desktop."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara mendapatkan dukungan teknis tambahan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Untuk mendapatkan dukungan teknis tambahan, Anda dapat menghubungi tim dukungan pelanggan SAFFMedic melalui kontak yang disediakan di situs www.safmedic.com"
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
        <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center gap-10 p-5">
                <div class="md:w-[40%]">
                    <img src="img/klinik-p.png" alt="Klinik">
                </div>
                <div class="md:w-1/3">
                    <h1 class="text-darkgreen text-3xl font-semibold mb-5">Aplikasi Klinik Dengan Kemampuan Online
                        Menjadi Lebih
                        Fleksibel</h1>
                    <p class="text-deepturqoise mb-16 md:text-justify">Aplikasi klinik adalah sebuah solusi perangkat
                        lunak yang
                        dirancang khusus
                        untuk membantu manajemen dan
                        operasional sebuah klinik atau praktik medis, SAFFMedic. SAFFMedic menawarkan berbagai fitur
                        yang sangat
                        berguna bagi praktisi medis, staf administrasi, dan pasien. Aplikasi klinik SAFFMedic memiliki
                        peran
                        penting dalam mengoptimalkan efisiensi dan kualitas layanan yang diberikan oleh klinik.
                    </p>

                    <a role="button">
                        <div
                            class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md">
                            <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                            <a href="/whatsapp">Hubungi Kami</a>
                        </div>
                    </a>
                </div>
            </div>F
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section1 --}}

        {{-- Section2 --}}
        <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center gap-64 p-5">
                <div class="md:w-1/4 text-deepturqoise">
                    <div>
                        <h1 class="md:text-3xl md:no-underline text-xl underline">SIM Klinik Rawat Jalan</h1>
                        <h2 class="md:text-3xl mb-2 mt-5">Aplikasi klinik dengan <br> fitur rawat jalan</h2>
                        <p class="">Pada umumnya, klinik atau rumah sakit menyediakan layanan praktek dokter dalam
                            bentuk kegiatan rawat
                            jalan. Fitur ini bertujuan untuk memudahkan pengelolaan kegiatan rawat jalan, mulai dari
                            pendaftaran, pendistribusian pasien ke poli-poli yang sesuai, dan pengolahan data pasien
                            yang
                            terpusat.</p>
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal2" data-modal-toggle="static-modal2"
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
                    <div id="static-modal2" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-darkgreen">
                                    <h3 class="text-xl font-semibold text-white">
                                        SIMRS Rawat Jalan
                                    </h3>
                                    <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                        class="rounded-lg text-darkgreen transition-transform transform hover:scale-110"type="button">
                                        <svg class="w-7" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z"
                                                stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentcolor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500">
                                        Pendataan dan Pelayanan: <br> Mempercepat kerja, hasil yang lebih akurat
                                        <br><br>
                                        Dalam dunia kerja, efisiensi dan keakuratan merupakan faktor utama yang sangat
                                        diinginkan. Hal ini berlaku juga dalam proses pendataan dan pelayanan di
                                        berbagai
                                        bidang.
                                        <br><br>
                                        Pertama-tama, bagi pendataan, kecepatan dalam mengumpulkan informasi menjadi
                                        faktor
                                        penting. Dalam hal ini, teknologi informasi dapat memberikan kontribusi besar
                                        dalam
                                        mempercepat proses pengumpulan data. Misalnya, dengan menggunakan aplikasi atau
                                        perangkat lunak khusus, data dapat dikumpulkan dengan mudah dan cepat,
                                        mengurangi risiko
                                        kesalahan manusia dan juga waktu yang dibutuhkan. Selain itu, dengan adanya
                                        teknologi,
                                        data bisa diakses secara real-time, sehingga keputusan dapat diambil dengan
                                        lebih cepat
                                        berdasarkan informasi terbaru.
                                        <br><br>
                                        Dalam kesimpulannya, dalam dunia kerja, pendataan yang cepat dan akurat dapat
                                        menjadi
                                        faktor penentu kesuksesan. Dengan menggunakan teknologi informasi dan melibatkan
                                        prosedur yang jelas, pendataan dapat ditingkatkan dalam segi kecepatan dan
                                        akurasi.
                                        Selain itu, pelayanan yang cepat dan responsif juga dapat memberikan kepuasan
                                        kepada
                                        pelanggan. Oleh karena itu, mengintegrasikan teknologi dalam pendataan dan
                                        pelayanan
                                        menjadi langkah yang penting untuk menghasilkan hasil yang lebih tepat dan
                                        efisien.
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="static-modal2" type="button"
                                        class="text-white bg-darkgreen font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16">
                        <h2 class="font-semibold mb-3">Yang terdapat dalam Rawat Jalan</h2>
                        <p>Beberapa inputan yang diterima pada rawat jalan dapat disesuaikan sesuai dengan kebutuhan
                            Faskes.</p>
                    </div>
                </div>

                <div class="md:w-1/3">
                    <img src="img/p-solusi-rawat.png" width="100%" class="" alt="Rawat Jalan">
                    <ul
                        class="flex flex-col md:flex-row md:items-center gap-y-2  gap-x-5 mt-8 font-semibold text-deepturqoise">
                        <li class="flex items-center gap-x-2">
                            <img src="img/checkfill.png" width="30" alt="chekcfill">
                            Efektif dalam Pelayanan
                        </li>
                        <li class="flex items-cente gap-x-2">
                            <img src="img/checkfill.png" width="30" alt="chekcfill">
                            Cepat dalam tindakan
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section2 --}}

        {{-- Section3 --}}
        <section class="container mx-auto my-20" data-aos="fade-up-right" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center gap-10 p-5">
                <div class="md:w-2/5">
                    <img src="img/p-solusi-inap.png" width="90%" alt="Rawat Inap">
                    <ul
                        class="flex flex-col md:flex-row md:items-center gap-y-2 gap-x-32 mt-8 font-semibold text-deepturqoise">
                        <li class="flex items-center gap-x-2">
                            <img src="img/checkfill.png" width="30" alt="chekcfill">
                            Mudah terhubung
                        </li>
                        <li class="flex items-cente gap-x-2">
                            <img src="img/checkfill.png" width="30" alt="chekcfill">
                            Data tersentral
                        </li>
                    </ul>
                </div>

                <div class="md:w-[500px] text-deepturqoise">
                    <div>
                        <h1 class="md:text-3xl md:no-underline text-xl underline">Rawat Inap</h1>
                        <h2 class="md:text-3xl text-2xl mb-2 mt-5">Mudah digunakan <br>
                            dan Mudah terhubung</h2>
                        <p class="">Bagi Klinik yang dilengkapi dengan fasilitas Rawat Inap, pengelolaan dan
                            pengendalian
                            data pasien
                            dalam kamar atau ruangan menjadi lebih mudah dan nyaman.
                            <br><br>
                            Fitur ini memungkinkan pengelola untuk dengan mudah mengatur serta mengontrol data pasien
                            yang
                            berada di kamar atau ruangan.
                        </p>
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal2" data-modal-toggle="static-modal2"
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
                    <div id="static-modal2" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-darkgreen">
                                    <h3 class="text-xl font-semibold text-white">
                                        SIMRS Rawat Inap
                                    </h3>
                                    <button type="button"
                                        class="text-white bg-transparent hover:bg-gray-200 hover:text-darkgreen rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-hide="static-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500">
                                        Manfaat menggunakan SIMRS SAFFMedic untuk mengelola data pasien rawat inap
                                        sangat
                                        signifikan. Berikut adalah beberapa manfaatnya:
                                        <br><br>
                                        1. Efisiensi pengelolaan data: Dengan menggunakan SIMRS SAFFMedic, pengelolaan
                                        data
                                        pasien rawat inap dapat dilakukan secara efisien dan cepat. Semua informasi
                                        pasien,
                                        seperti riwayat medis, hasil tes, dan pengobatan dapat diakses dan dikelola
                                        dengan mudah
                                        dalam satu sistem.
                                        <br><br>
                                        2. Koordinasi tim medis: SIMRS SAFFMedic memungkinkan tim medis yang terdiri
                                        dari
                                        dokter, perawat, dan tenaga medis lainnya untuk berkomunikasi dan berkoordinasi
                                        dengan
                                        lebih baik. Masing-masing anggota tim dapat dengan mudah mengakses data pasien
                                        dan
                                        melihat perubahan yang telah dilakukan oleh anggota tim lainnya, sehingga
                                        memberikan
                                        perawatan yang konsisten dan terkoordinasi.
                                        <br><br>
                                        Dengan manfaat-manfaat tersebut, penggunaan SIMRS SAFFMedic dalam mengelola data
                                        pasien
                                        rawat inap akan membantu meningkatkan efisiensi, keselamatan, dan kualitas
                                        perawatan
                                        kesehatan.
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
                    <div class="mt-10">
                        <h2 class="font-semibold mb-3">Yang terdapat dalam Rawat Inap</h2>
                        <p>Beberapa inputan yang didapatkan pada rawat inap, dan inputan ini dapat di custome sesuai
                            kebutuhan
                            Faskes</p>
                        <div class="flex flex-col md:flex-row gap-10 mb-3 ms-5">
                            <ul class="marker:text-3xl list-image-check">
                                <li>Data pasien</li>
                                <li>Kondisi Umum</li>
                                <li>Kondisi Fisik</li>
                                <li> Diagnosa ICD 10</li>
                            </ul>
                            <ul class="marker:text-3xl list-image-check">
                                <li>Prosedur ICD 9</li>
                                <li>Tindakan</li>
                                <li>BHP</li>
                                <li>SOAP & Resep</li>
                            </ul>
                            <ul class="marker:text-3xl list-image-check">
                                <li>Penunjang</li>
                                <li>Kesimpulan</li>
                                <li>Lampiran</li>
                                <li>Custome</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-10">
                        <h2 class="font-semibold mb-3">Manajemen Ruang</h2>
                        <ul class="marker:text-3xl list-image-check ms-5">
                            <li>Kamar Inap</li>
                            <li>Ranjang</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex justify-center my-10">
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-darkgreen md:w-[220px] text-white font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/demo.png" width="25" alt="Demo">
                        <a href="{{ route('form-request-demo') }}">Ajukan Demo</a>
                    </div>
                </a>
            </div>
        </section>
        {{-- End Section3 --}}

        {{-- FAQ --}}

        {{-- Desktop (Tab) --}}
        <div class="py-10 md:pt-20 md:pb-28 bg-[#f1f4f7] mt-10 md:mt-20" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>SIM Klinik SAFFMedic</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apa itu SIM Klinik SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. Apa saja fitur utama SIM Klinik SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Bagaimana cara mengakses SIM Klinik SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Untuk jenis fasilitas kesehatan apa SIM Klinik SAFFMedic
                        cocok?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '5')">5. Apakah SIM Klinik SAFFMedic dapat disesuaikan dengan poli
                        atau
                        ruangan tertentu?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '6')">6. Bagaimana cara melihat biaya penggunaan SIM Klinik?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '7')">7. Apakah SIM Klinik SAFFMedic dapat disesuaikan sesuai
                        kebutuhan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '8')">8. Apakah biaya yang tertera sudah termasuk pelatihan dan
                        pendampingan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '9')">9. Apakah SAFFMedic menyediakan dukungan untuk impor data pasien
                        dan
                        rekam medis dari file Excel?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '10')">10. Apakah SAFFMedic memiliki versi aplikasi desktop?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '11')">11. Bagaimana cara mendapatkan dukungan teknis
                        tambahan?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa itu SIM Klinik SAFFMedic?</h3>
                    <p>SIM Klinik SAFFMedic adalah aplikasi berbasis web yang dirancang untuk mendukung operasional
                        klinik.
                        Fitur-fiturnya mencakup administrasi, rekam medis, apotek, antrian, dan penunjang laboratorium.
                    </p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa saja fitur utama SIM Klinik SAFFMedic?</h3>
                    <p>Fitur utama SIM Klinik SAFFMedic meliputi ADMISI, rekam medis, apotek, antrian, dan penunjang
                        untuk
                        laboratorium.
                    </p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana cara mengakses SIM Klinik SAFFMedic?
                    </h3>
                    <p>SIM Klinik SAFFMedic dapat diakses dengan mudah karena berbasis web. Anda hanya perlu koneksi
                        internet
                        dan browser web untuk menggunakan aplikasi ini.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Untuk jenis fasilitas kesehatan apa SIM Klinik
                        SAFFMedic
                        cocok?</h3>
                    <p>SIM Klinik SAFFMedic dapat digunakan di berbagai jenis fasilitas kesehatan, termasuk praktek
                        dokter,
                        puskesmas, klinik, dan rumah sakit.
                    </p>
                </div>

                <div id="5" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SIM Klinik SAFFMedic dapat disesuaikan
                        dengan
                        poli atau ruangan tertentu?</h3>
                    <p>Ya, SIM Klinik SAFFMedic dapat disetup sesuai dengan poli atau ruangan yang diperlukan, sehingga
                        sesuai
                        dengan kebutuhan spesifik fasilitas kesehatan.
                    </p>
                </div>

                <div id="6" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana cara melihat biaya penggunaan SIM
                        Klinik?</h3>
                    <p>Biaya penggunaan SIM Klinik dapat dilihat di halaman harga yang tersedia. Informasi terkait biaya
                        pelatihan, pendampingan, dan pembaruan fitur juga dapat ditemukan di sana.
                    </p>
                </div>

                <div id="7" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SIM Klinik SAFFMedic dapat disesuaikan
                        sesuai
                        kebutuhan?
                    </h3>
                    <p>Ya, SIM Klinik SAFFMedic dapat disesuaikan sesuai dengan keperluan spesifik Anda, sehingga dapat
                        memenuhi
                        kebutuhan khusus fasilitas kesehatan Anda.
                    </p>
                </div>

                <div id="8" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4"> Apakah biaya yang tertera sudah termasuk
                        pelatihan dan
                        pendampingan?
                    </h3>
                    <p>Ya, biaya yang tertera sudah mencakup pelatihan dan pendampingan secara virtual. Ini memastikan
                        bahwa
                        pengguna dapat memanfaatkan aplikasi dengan efektif.
                    </p>
                </div>

                <div id="9" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SAFFMedic menyediakan dukungan untuk
                        impor data
                        pasien dan rekam medis dari file Excel?
                    </h3>
                    <p>Ya, tim SAFFMedic dapat melakukan impor data pasien dan rekam medis dari file Excel tanpa biaya
                        tambahan.
                    </p>
                </div>
                <div id="10" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SAFFMedic memiliki versi aplikasi
                        desktop?</h3>
                    <p>Tidak, SAFFMedic saat ini hanya tersedia dalam bentuk web base dan tidak mengembangkan aplikasi
                        dalam
                        bentuk instaler desktop.
                    </p>
                </div>
                <div id="11" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana cara mendapatkan dukungan teknis
                        tambahan?
                    </h3>
                    <p>Untuk mendapatkan dukungan teknis tambahan, Anda dapat menghubungi tim dukungan pelanggan
                        SAFFMedic
                        melalui kontak yang disediakan di situs www.safmedic.com
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
                            itu SIM Klinik SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>SIM Klinik SAFFMedic adalah aplikasi berbasis web yang dirancang untuk mendukung
                                operasional
                                klinik. Fitur-fiturnya mencakup administrasi, rekam medis, apotek, antrian, dan
                                penunjang
                                laboratorium.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apa
                            saja fitur utama SIM Klinik SAFFMedic?
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
                            <p>Fitur utama SIM Klinik SAFFMedic meliputi ADMISI, rekam medis, apotek, antrian, dan
                                penunjang
                                untuk laboratorium.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            cara mengakses SIM Klinik SAFFMedic?
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
                            <p>SIM Klinik SAFFMedic dapat diakses dengan mudah karena berbasis web. Anda hanya perlu
                                koneksi
                                internet dan browser web untuk menggunakan aplikasi ini
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Untuk
                            jenis fasilitas kesehatan apa SIM Klinik SAFFMedic cocok?
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
                            <p>SIM Klinik SAFFMedic dapat digunakan di berbagai jenis fasilitas kesehatan, termasuk
                                praktek
                                dokter, puskesmas, klinik, dan rumah sakit.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input5" class="absolute peer opacity-0">
                        <label for="input5"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SIM Klinik SAFFMedic dapat disesuaikan dengan poli atau ruangan tertentu?
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
                            <p>Ya, SIM Klinik SAFFMedic dapat disetup sesuai dengan poli atau ruangan yang diperlukan,
                                sehingga
                                sesuai dengan kebutuhan spesifik fasilitas kesehatan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input6" class="absolute peer opacity-0">
                        <label for="input6"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            cara melihat biaya penggunaan SIM Klinik?
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
                            <p>Biaya penggunaan SIM Klinik dapat dilihat di halaman harga yang tersedia. Informasi
                                terkait biaya
                                pelatihan, pendampingan, dan pembaruan fitur juga dapat ditemukan di sana.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input7" class="absolute peer opacity-0">
                        <label for="input7"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SIM Klinik SAFFMedic dapat disesuaikan sesuai kebutuhan?
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
                            <p>Ya, SIM Klinik SAFFMedic dapat disesuaikan sesuai dengan keperluan spesifik Anda,
                                sehingga dapat
                                memenuhi kebutuhan khusus fasilitas kesehatan Anda.
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input8" class="absolute peer opacity-0">
                        <label for="input8"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            biaya yang tertera sudah termasuk pelatihan dan pendampingan?
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
                            <p>Ya, biaya yang tertera sudah mencakup pelatihan dan pendampingan secara virtual. Ini
                                memastikan
                                bahwa pengguna dapat memanfaatkan aplikasi dengan efektif.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input9" class="absolute peer opacity-0">
                        <label for="input9"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SAFFMedic menyediakan dukungan untuk impor data pasien dan rekam medis dari file Excel?
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
                            <p>Ya, tim SAFFMedic dapat melakukan impor data pasien dan rekam medis dari file Excel tanpa
                                biaya
                                tambahan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input10" class="absolute peer opacity-0">
                        <label for="input10"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SAFFMedic memiliki versi aplikasi desktop?
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
                            <p>Tidak, SAFFMedic saat ini hanya tersedia dalam bentuk web base dan tidak mengembangkan
                                aplikasi
                                dalam bentuk instaler desktop
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input11" class="absolute peer opacity-0">
                        <label for="input11"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            cara mendapatkan dukungan teknis tambahan?
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
                            <p>Untuk mendapatkan dukungan teknis tambahan, Anda dapat menghubungi tim dukungan pelanggan
                                SAFFMedic melalui kontak yang disediakan di situs www.safmedic.com
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
        <section class="container mx-auto my-20 p-5" data-aos="fade-right" data-aos-duration="1000">
            <div class="md:w-1/3 text-darkgreen text-center mx-auto mb-10">
                <h1 class="text-3xl font-bold mb-3">Tipe Faskes</h1>
                <h2 class="font-semibold">Dapat diiplementasikan pada semua type FASKES</h2>
                <p>SAFFMedic Memberikan SIMRS dengan harga terjangkau
                    serta menghadirkan fitur Semi Custome</p>
            </div>

            <div class="flex flex-col md:flex-row justify-center gap-10 text-darkteal">
                <div class="w-[180px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/pratama-klinik.png" class="w-[50%] mx-auto" alt="Pratama">
                    <h2 class="text-center text-3xl">Pratama</h2>
                </div>
                <div class="w-[180px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/utama-klinik.png" class="w-[60%] mx-auto" alt="Utama">
                    <h2 class="text-center text-3xl mt-2">Utama</h2>
                </div>
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
