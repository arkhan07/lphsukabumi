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
                    "name": "Apakah Rekam Medis Elektronik SAFFMedic telah terintegrasi dengan SATUSEHAT?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, Rekam Medis Elektronik SAFFMedic telah terintegrasi dengan SATUSEHAT."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah terdapat batasan terhadap jumlah rekam medis elektronik",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Tidak ada batasan jumlah pengimputan, namun kapasitas penyimpanan tergantung pada paket berlangganan yang Anda pilih. Silakan lihat tabel harga untuk detail jumlah penyimpanan yang tersedia."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah Rekam Medis Elektronik SAFFMedic online atau offline?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SAFFMedic dirancang sebagai Software As a Service (SaaS) dan beroperasi secara cloud-based."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SAFFMedic dapat dijalankan secara offline?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Tidak, SAFFMedic memerlukan koneksi internet untuk dapat digunakan."
                    }
                },
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
        <section class="container mx-auto p-5" data-aos="fade-left" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center items-center">
                <img src="img/e_rekam_medis.webp" class="md:w-[40%]" alt="">
                <div class="text-darkteal md:w-2/5">
                    <h1 class="font-bold text-2xl md:text-3xl">E-REKAM MEDIS</h1>
                    <h2 class="md:text-3xl text-2xl my-3">Rekam Medis secara elektronik
                        dengan fitur yang lengkap</h2>
                    <p>
                        SAFFMedic telah dilengkapi dengan Elektronik Rekam Medis (ERM), sebuah fitur yang memungkinkan
                        semua
                        kegiatan medis dilakukan secara komputerisasi dan terintegrasi dalam satu aplikasi. Dengan
                        menggunakan
                        ERM, seluruh data pasien, mulai dari informasi identitas, catatan medis, riwayat pengobatan,
                        hingga
                        hasil pemeriksaan laboratorium, tersimpan secara aman dan mudah diakses oleh tim medis.
                        <br><br>
                        ERM di SAFFMedic tidak hanya mempermudah proses pencatatan dan pemantauan kesehatan pasien,
                        tetapi juga
                        memastikan bahwa semua prosedur medis dilakukan sesuai dengan standar yang berlaku. Hal ini
                        penting bagi
                        klinik dan rumah sakit untuk memenuhi persyaratan akreditasi dan meningkatkan kualitas pelayanan
                        kesehatan. Dengan ERM, SAFFMedic membantu fasilitas kesehatan mengurangi risiko kesalahan medis,
                        meningkatkan efisiensi kerja, dan memastikan bahwa setiap langkah perawatan sesuai dengan
                        pedoman dan
                        regulasi yang telah ditetapkan.

                    </p>
                </div>
            </div>
        </section>
        {{-- End Section1 --}}
        <hr class="w-5/6 mx-auto my-20">

        {{-- Section2 --}}
        <section class="text-darkteal p-5 " data-aos="fade-right" data-aos-duration="1000">
            <h1 class="md:text-3xl text-2xl text-center mb-10 font-bold">Mendukung Akreditasi</h1>
            <div class="flex flex-col md:flex-row justify-center gap-10">
                <div
                    class="md:w-1/6 min-[2000px]:w-[250px] rounded p-4 shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/soap.webp" class="w-[50%] my-5" alt="">
                    <h1 class="md:text-2xl text-xl font-semibold">SOAP</h1>
                    <p>Pencatatan SOAP oleh Dokter secara digital</p>
                </div>
                <div
                    class="md:w-1/6 min-[2000px]:w-[250px] rounded p-4 shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/persetujuan.webp" class="w-[60%] my-3" alt="">
                    <h1 class="md:text-2xl text-xl font-semibold">Persetujuan</h1>
                    <p>Dapat memberikan persetujuan digital untuk general consent dan general conditions.</p>
                </div>
                <div
                    class="md:w-1/6 min-[2000px]:w-[250px] rounded p-4 shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/kajian.webp" class="w-[60%] my-3" alt="">
                    <h1 class="md:text-2xl text-xl font-semibold">Kajian
                        Awal & Ulang</h1>
                    <p>Pencatatan Kajian awal dan ulang terhadap pasien</p>
                </div>
                <div
                    class="md:w-1/6 min-[2000px]:w-[250px] rounded p-4 shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/tatacara.webp" class="w-[60%] my-3" alt="">
                    <h1 class="md:text-2xl text-xl font-semibold">Tata cara & Tata Laksana</h1>
                    <p>Informasi tentang tata cara dan tata laksana</p>
                </div>
                <div
                    class="md:w-1/6 min-[2000px]:w-[250px] rounded p-4 shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/fiturlain.webp" class="w-[60%] my-3" alt="">
                    <h1 class="md:text-2xl text-xl font-semibold">Fitur lain</h1>
                    <p>Dan masi banyak lagi fitur yang menarik untuk membantu Anda dalam mengelola Klik maupun rumah
                        Sakit</p>
                </div>
            </div>
        </section>
        {{-- End Section2 --}}
        <hr class="w-5/6 mx-auto my-20">
        {{-- Section3 --}}
        <section class="container mx-auto" data-aos="fade-left" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center items-center gap-x-24 gap-y-10">
                <div class="md:w-1/3 text-darkteal order-2 md:order-1">
                    <h1 class="md:text-3xl text-2xl text-center font-bold">Integrasi dengan Satu Sehat</h1>
                    <img src="img/satusehat.webp" class="w-[35%] mx-auto spin-on-hover my-9" alt="">
                    <p class="text-center">SAFFMedic telah ter integrasi dengan SATU SEHAT, Sehingga pemeriskaan dapat
                        di
                        posting secara integrasi.
                        <br><br>
                        Selain integrasi dengan SATUSEHAT, SAFFMedic juga dapat melakukan verifikasi KYC untuk
                        memvalidasi data
                        pasien.
                    </p>
                </div>
                <div class="md:w-[40%] order-1 md:order-2">
                    <img src="img/integrasi_satusehat.webp" alt="">
                </div>
            </div>
        </section>
        <style>
            .spin-on-hover {
                transition: transform 0.5s ease;
                /* Efek transisi yang mulus */
            }

            .spin-on-hover:hover {
                transform: rotate(360deg);
                /* Putar gambar 360 derajat */
            }
        </style>
        {{-- End Section3 --}}
        <hr class="w-5/6 mx-auto my-20">
        {{-- Section4 --}}
        <section class="bg-[url('/img/bgerm.webp')] bg-cover bg-center bg-no-repeat container mx-auto md:py-20 p-5"
            data-aos="fade-right" data-aos-duration="1000">
            <div class="text-white md:text-3xl text-2xl md:w-1/2 mx-auto text-center">
                <img src="img/badgeerm.webp" class="md:w-[15%] w-[30%] mx-auto mb-10" alt="">
                <p>Tingkatkan standar Klinik Anda menuju Akreditasi dengan menggunakan SAFFMedic sebagai sistem
                    manajemen Klinik
                </p>
            </div>
        </section>
        {{-- End Section4 --}}

        {{-- FAQ --}}

        {{-- Desktop (Tab) --}}
        <div class="container mx-auto py-10 md:pt-20 md:pb-28 bg-[#f1f4f7]" data-aos="fade-left"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>SIM Klinik SAFFMedic</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apakah Rekam Medis Elektronik SAFFMedic telah terintegrasi
                        dengan
                        SATUSEHAT?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. Apakah terdapat batasan terhadap jumlah rekam medis
                        elektronik?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Apakah Rekam Medis Elektronik SAFFMedic online atau
                        offline?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Apakah SAFFMedic dapat dijalankan secara offline?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah Rekam Medis Elektronik SAFFMedic telah
                        terintegrasi dengan SATUSEHAT?</h3>
                    <p>Ya, Rekam Medis Elektronik SAFFMedic telah terintegrasi dengan SATUSEHAT.
                    </p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah terdapat batasan terhadap jumlah rekam
                        medis
                        elektronik?</h3>
                    <p>Tidak ada batasan jumlah pengimputan, namun kapasitas penyimpanan tergantung pada paket
                        berlangganan yang
                        Anda pilih. Silakan lihat tabel harga untuk detail jumlah penyimpanan yang tersedia.
                    </p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah Rekam Medis Elektronik SAFFMedic online
                        atau
                        offline?
                    </h3>
                    <p>SAFFMedic dirancang sebagai Software As a Service (SaaS) dan beroperasi secara cloud-based.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah SAFFMedic dapat dijalankan secara offline?
                    </h3>
                    <p>Tidak, SAFFMedic memerlukan koneksi internet untuk dapat digunakan.
                    </p>
                </div>
            </div>

            {{-- Mobile (Accordion) --}}
            <div class="md:hidden mt-14">
                <div class="mt-5 md:mt-0">
                    <div class="relative md:w-[450px]">
                        <input type="checkbox" id="input1" class="absolute peer opacity-0">
                        <label for="input1"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            Rekam Medis Elektronik SAFFMedic telah terintegrasi dengan SATUSEHAT?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, Rekam Medis Elektronik SAFFMedic telah terintegrasi dengan SATUSEHAT.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            terdapat batasan terhadap jumlah rekam medis elektronik?
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
                            <p>Tidak ada batasan jumlah pengimputan, namun kapasitas penyimpanan tergantung pada paket
                                berlangganan yang Anda pilih. Silakan lihat tabel harga untuk detail jumlah penyimpanan
                                yang
                                tersedia.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            Rekam Medis Elektronik SAFFMedic online atau offline?
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
                            <p>SAFFMedic dirancang sebagai Software As a Service (SaaS) dan beroperasi secara
                                cloud-based.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            SAFFMedic dapat dijalankan secara offline?
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
                            <p>Tidak, SAFFMedic memerlukan koneksi internet untuk dapat digunakan.</p>
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

        {{-- Section 5 --}}
        <section class="container my-20 mx-auto" data-aos="fade-right" data-aos-duration="1000">
            <div class=" text-darkteal md:w-1/4 w-1/2 text-center mx-auto">
                <h1 class="text-lg"><b>Tertarik dengan Kami?</b><br>
                    Konsultasi dengan team expert Kami
                </h1>
            </div>

            <div class="flex flex-row gap-x-16 justify-center mt-8">
                <img src="img/message.png" width="70">
                <img src="img/meeting.png" width="70">
                <img src="img/coffe.png" width="70">
            </div>

            <div class="w-fit mt-12 mx-auto">
                <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-5">
                    <a role="button">
                        <div
                            class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white  font-semibold rounded-md mb-5">
                            <img class="mr-3" src="img/demo.png" width="25" alt="virtual">
                            <a href="{{ route('form-request-demo') }}">Jadwalkan Demo</a>
                        </div>
                    </a>
                    <a role="button">
                        <div
                            class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white  font-semibold rounded-md mb-5">
                            <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                            <a href="/whatsapp">Hubungi Kami</a>
                        </div>
                    </a>
                    <a role="button">
                        <div
                            class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white  font-semibold rounded-md mb-5">
                            <img class="mr-3" src="img/email_gray.png" width="30" alt="Demo">
                            <a href="{{ route('form-request-demo') }}">e-Mail</a>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        {{-- Section 5 --}}

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
