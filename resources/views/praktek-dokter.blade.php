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
                    "name": "Apa itu DocPro SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "DocPro SAFFMedic adalah aplikasi dokter praktek yang dirancang untuk membantu operasional layanan dokter praktek. Aplikasi ini merupakan aplikasi berbasis web yang mudah dioperasikan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa kegunaan utama DocPro SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "DocPro SAFFMedic digunakan oleh dokter praktek untuk mendukung operasional layanan mereka. Aplikasi ini membantu dalam administrasi data pasien, rekam medis, pembuatan faktur, manajemen antrian, dan integrasi dengan fitur apotek."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara mengoperasikan DocPro SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "DocPro SAFFMedic dapat dioperasikan dengan mudah melalui antarmuka web. Dokter praktek dapat mengaksesnya dari berbagai perangkat dengan koneksi internet."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa yang membuat DocPro SAFFMedic berbeda?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "DocPro SAFFMedic menawarkan fitur lengkap dengan harga yang mudah diakses. Terdapat fitur admisi, manajemen antrian, pembuatan faktur, dan integrasi dengan fitur apotek."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa yang termasuk dalam fitur Admisi DocPro SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Fitur Admisi mencakup administrasi data pasien dan rekam medis pasien, memastikan pencatatan administrasi yang rapi dan tersentral."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana dengan fitur Antrian pada DocPro SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "DocPro SAFFMedic dilengkapi dengan fitur antrian untuk mempermudah proses pelayanan di fasilitas kesehatan. Detail fitur antrian dapat dilihat pada fitur Antrian SAFFMedic."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah DocPro SAFFMedic dapat mengeluarkan faktur atau kwitansi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, DocPro SAFFMedic dapat langsung membuat faktur atau kwitansi untuk memudahkan proses administrasi keuangan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah DocPro SAFFMedic cocok untuk siapa?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "DocPro cocok digunakan oleh dokter praktek dan tenaga medis yang memerlukan pencatatan administrasi yang rapi dan tersentral. Ini dapat mempercepat proses pelayanan dan mempersingkat birokrasi koordinasi."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah DocPro dapat diintegrasikan dengan fitur Apotek SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, DocPro dapat diintegrasikan dengan fitur apotek SAFFMedic. Informasi lebih lanjut dapat dilihat pada penjelasan fitur Apotek SAFFMedic."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana dengan dukungan dan pemeliharaan DocPro SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Harga DocPro SAFFMedic mencakup pelatihan virtual, pemeliharaan, dan pembaruan. Pengguna dapat mengakses dukungan online untuk bantuan teknis dan pelatihan tambahan. Informasi lebih lanjut dapat ditemukan pada fitur harga SAFFMedic."
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
            <div class="md:w-4/5 mx-auto rounded-r-xl bg-darkteal flex flex-col md:flex-row gap-y-10 p-5 md:p-0">
                <div class="md:w-[40%]">
                    <img src="img/praktekdokter_sc1.png" alt="">
                </div>
                <div class="md:w-[380px] mx-auto text-white md:mt-24">
                    <h1 class="text-4xl font-bold">DocPro</h1>
                    <h2 class="font-bold my-5">Untuk mempercepat proses dan melancarkan pelayanan Praktek Dokter.</h2>
                    <p>Khusus untuk praktek dokter, SAFFMedic menyediakan fitur aplikasi DocPro. DocPro adalah aplikasi
                        yang
                        dikembangkan khusus untuk membantu dokter dalam menjalankan praktek mandiri mereka. DocPro
                        diterbitkan
                        oleh SAFFMedic sebagai entitas yang sama.</p>
                </div>
            </div>
        </section>
        {{-- End Section1 --}}

        {{-- Section2 --}}
        <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
            <div class="w-full p-5">
                <div class="md:w-1/3 text-darkgreen text-center mx-auto mb-10">
                    <h1 class="text-2xl font-bold mb-4">Solusi untuk Praktek Dokter</h1>
                    <p class="font-medium">Aplikasi SAFFMedic merupakan solusi terbaik bagi praktek dokter mandiri.
                        Dengan
                        fitur-fiturnya yang
                        canggih,
                        Kami hadir untuk membantu Anda dalam menjalankan praktek medis dengan lebih efisien dan mudah.
                    </p>
                </div>
                <img src="img/sc2img.png" width="100%" class="md:w-[50%] mx-auto" alt="Solusi Praktek Dokter">
            </div>
        </section>
        {{-- End Section2 --}}

        {{-- Section3 --}}
        <section class="container mx-auto my-20 pt-20 md:pb-52 pb-20 bg-gray-100 px-5" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="md:w-1/5 text-darkgreen text-center mx-auto mb-20">
                <h1 class="text-2xl font-bold mb-2">Fitur yang ditawarkan</h1>
                <h2>Kami Menawarkan fitur yang hebat dengan harga yang hemat</h2>
            </div>

            <div class="flex flex-col md:flex-row justify-center gap-10 text-deepturqoise">
                <div class="md:w-[490px] bg-white rounded-xl px-7 py-10">
                    <img src="img/img1_sc3.png" class="md:w-[20%] w-[30%] mb-2" alt="Rekam Medis">
                    <h3 class="font-semibold mb-3">Rekam Medis Digital</h3>
                    <p>Dengan menggunakan SIMRS SAFFMedic, Anda dapat beralih dari merawat rekam medis secara manual
                        menjadi
                        digital. Ini akan menghilangkan kerumitan dalam mengakses catatan medis pasien. Tidak perlu lagi
                        menghadapi penumpukan berkas kertas yang memakan waktu dan ruang. Semua data pasien akan
                        tersimpan
                        dengan aman dan mudah diakses.</p>
                </div>
                <div class="md:w-[490px] bg-white rounded-xl px-7 py-10">
                    <img src="img/img2_sc3.png" class="md:w-[20%] w-[30%] mb-2" alt="Resep Digital">
                    <h3 class="font-semibold mb-3">Resep Digital</h3>
                    <p>Integrasi dengan instalasi farmasi atau apotek adalah salah satu fitur unggulan SAFFMedic. Anda
                        dapat
                        dengan mudah membuat resep untuk pasien dan terhubng dengan instalasi farmasi yaing Anda miliki.
                        Ini
                        mempercepat proses pengambilan obat pasien dan menjaga kelancaran praktik Anda</p>
                </div>
            </div>
        </section>
        {{-- End Section3 --}}

        {{-- Section4 --}}
        <section class="container mx-auto my-20" data-aos="fade-up-right" data-aos-duration="1000">
            <div class="text-darkteal text-center mx-auto">
                <h1 class="text-2xl font-semibold mb-2">2 Fitur telah Include</h1>
                <h2>DocPro dari SAFFMedic telah dilengkapi dengan Poli dan Antrian</h2>
            </div>

            <div class="flex flex-wrap justify-center gap-10 text-2xl text-white font-medium my-20">
                <div class="w-[180px] py-5 rounded-xl bg-darkgreen">
                    <img src="img/poli_sc4.png" class="w-[50%] mx-auto mb-3" alt="Poli">
                    <h1 class="text-center">Poli</h1>
                </div>
                <div class="w-[180px] py-5 rounded-xl bg-darkgreen">
                    <img src="img/antrian_sc4.png" class="w-[50%] mx-auto mb-2" alt="Antrian">
                    <h1 class="text-center">Antrian</h1>
                </div>
            </div>

            <div class="text-darkteal text-center mx-auto mb-20">
                <h1 class="text-2xl font-semibold mb-2">Mudah meningkatkan Fitur</h1>
                <h2 class="mb-10">Anda dapat dengan mudah menambah fitur dan yang diperlukan</h2>

                <div class="flex flex-wrap justify-center gap-10 text-lg text-deepturqoise font-medium">
                    <a href="/farmasi">
                        <div class="group w-[150px] py-5 rounded-xl hover:bg-darkgreen">
                            <img src="img/farmasi_sc4pd.png" class="group-hover:hidden w-[30%] mx-auto" alt="Farmasi">
                            <img src="img/farmasiwhite_sc4pd.png" class="hidden group-hover:block w-[30%] mx-auto"
                                alt="Farmasi White">
                            <h1 class="mt-3 group-hover:text-white">Farmasi</h1>
                        </div>
                    </a>
                    <a href="/penunjang">
                        <div class="group w-[150px] py-5 rounded-xl hover:bg-darkgreen">
                            <img src="img/penunjang_sc4pd.png" class="group-hover:hidden w-[28%] mx-auto"
                                alt="Penunjang">
                            <img src="img/penunjangwhite_sc4pd.png" class="hidden group-hover:block w-[28%] mx-auto"
                                alt="Penunjang White">
                            <h1 class="mt-3 group-hover:text-white">Penunjang</h1>
                        </div>
                    </a>
                    <a href="/keuangan">
                        <div class="group w-[150px] py-5 rounded-xl hover:bg-darkgreen">
                            <img src="img/keuangan_sc4pd.png" class="group-hover:hidden w-[39%] mx-auto" alt="Keuangan">
                            <img src="img/keuanganwhite_sc4pd.png" class="hidden group-hover:block w-[39%] mx-auto"
                                alt="Keuangan White">
                            <h1 class="mt-3 group-hover:text-white">Keuangan</h1>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section4 --}}

        {{-- Section5 --}}
        <section class="my-20" data-aos="fade-down" data-aos-duration="1000">
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

        {{-- FAQ --}}

        {{-- Desktop (Tab) --}}
        <div class="py-10 md:pt-20 md:pb-28 bg-[#f1f4f7] mt-10 md:mt-20" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>DocPro SAFFMedic</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apa itu DocPro SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. Apa kegunaan utama DocPro SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Bagaimana cara mengoperasikan DocPro SAFFMedic?
                    </button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Apa yang membuat DocPro SAFFMedic berbeda?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '5')">5. Apa yang termasuk dalam fitur Admisi DocPro
                        SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '6')">6. Bagaimana dengan fitur Antrian pada DocPro
                        SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '7')">7. Apakah DocPro SAFFMedic dapat mengeluarkan faktur atau
                        kwitansi?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '8')">8. Apakah DocPro SAFFMedic cocok untuk siapa?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '9')">9. Apakah DocPro dapat diintegrasikan dengan fitur Apotek
                        SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '10')">10. Bagaimana dengan dukungan dan pemeliharaan DocPro
                        SAFFMedic?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa itu DocPro SAFFMedic?</h3>
                    <p>DocPro SAFFMedic adalah aplikasi dokter praktek yang dirancang untuk membantu operasional layanan
                        dokter
                        praktek. Aplikasi ini merupakan aplikasi berbasis web yang mudah dioperasikan.</p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa kegunaan utama DocPro SAFFMedic?</h3>
                    <p>DocPro SAFFMedic digunakan oleh dokter praktek untuk mendukung operasional layanan mereka.
                        Aplikasi ini
                        membantu dalam administrasi data pasien, rekam medis, pembuatan faktur, manajemen antrian, dan
                        integrasi
                        dengan fitur apotek.
                    </p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4"> Bagaimana cara mengoperasikan DocPro SAFFMedic?
                    </h3>
                    <p>DocPro SAFFMedic dapat dioperasikan dengan mudah melalui antarmuka web. Dokter praktek dapat
                        mengaksesnya
                        dari berbagai perangkat dengan koneksi internet.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa yang membuat DocPro SAFFMedic berbeda?</h3>
                    <p>DocPro SAFFMedic menawarkan fitur lengkap dengan harga yang mudah diakses. Terdapat fitur admisi,
                        manajemen antrian, pembuatan faktur, dan integrasi dengan fitur apotek.</p>
                </div>

                <div id="5" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa yang termasuk dalam fitur Admisi DocPro
                        SAFFMedic?
                    </h3>
                    <p>Fitur Admisi mencakup administrasi data pasien dan rekam medis pasien, memastikan pencatatan
                        administrasi
                        yang rapi dan tersentral.</p>
                </div>

                <div id="6" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana dengan fitur Antrian pada DocPro
                        SAFFMedic?
                    </h3>
                    <p>DocPro SAFFMedic dilengkapi dengan fitur antrian untuk mempermudah proses pelayanan di fasilitas
                        kesehatan. Detail fitur antrian dapat dilihat pada fitur Antrian SAFFMedic.</p>
                </div>

                <div id="7" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah DocPro SAFFMedic dapat mengeluarkan
                        faktur atau
                        kwitansi?</h3>
                    <p>Ya, DocPro SAFFMedic dapat langsung membuat faktur atau kwitansi untuk memudahkan proses
                        administrasi
                        keuangan.</p>
                </div>

                <div id="8" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4"> Apakah DocPro SAFFMedic cocok untuk siapa?
                    </h3>
                    <p>DocPro cocok digunakan oleh dokter praktek dan tenaga medis yang memerlukan pencatatan
                        administrasi yang
                        rapi dan tersentral. Ini dapat mempercepat proses pelayanan dan mempersingkat birokrasi
                        koordinasi.</p>
                </div>

                <div id="9" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah DocPro dapat diintegrasikan dengan fitur
                        Apotek
                        SAFFMedic?</h3>
                    <p>Ya, DocPro dapat diintegrasikan dengan fitur apotek SAFFMedic. Informasi lebih lanjut dapat
                        dilihat pada
                        penjelasan fitur Apotek SAFFMedic.
                    </p>
                </div>
                <div id="10" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana dengan dukungan dan pemeliharaan
                        DocPro
                        SAFFMedic?</h3>
                    <p>Harga DocPro SAFFMedic mencakup pelatihan virtual, pemeliharaan, dan pembaruan. Pengguna dapat
                        mengakses
                        dukungan online untuk bantuan teknis dan pelatihan tambahan. Informasi lebih lanjut dapat
                        ditemukan pada
                        fitur harga SAFFMedic.</p>
                </div>
            </div>

            {{-- Mobile (Accordion) --}}
            <div class="md:hidden mt-14">
                <div class="mt-5 md:mt-0">
                    <div class="relative md:w-[450px]">
                        <input type="checkbox" id="input1" class="absolute peer opacity-0">
                        <label for="input1"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apa
                            itu DocPro SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>DocPro SAFFMedic adalah aplikasi dokter praktek yang dirancang untuk membantu operasional
                                layanan
                                dokter praktek. Aplikasi ini merupakan aplikasi berbasis web yang mudah dioperasikan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apa
                            kegunaan utama DocPro SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>DocPro SAFFMedic digunakan oleh dokter praktek untuk mendukung operasional layanan
                                mereka.
                                Aplikasi ini membantu dalam administrasi data pasien, rekam medis, pembuatan faktur,
                                manajemen
                                antrian, dan integrasi dengan fitur apotek.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            cara mengoperasikan DocPro SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>DocPro SAFFMedic dapat dioperasikan dengan mudah melalui antarmuka web. Dokter praktek
                                dapat
                                mengaksesnya dari berbagai perangkat dengan koneksi internet.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            yang membuat DocPro SAFFMedic berbeda?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>DocPro SAFFMedic menawarkan fitur lengkap dengan harga yang mudah diakses. Terdapat fitur
                                admisi,
                                manajemen antrian, pembuatan faktur, dan integrasi dengan fitur apotek.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input5" class="absolute peer opacity-0">
                        <label for="input5"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            yang termasuk dalam fitur Admisi DocPro SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-4 md:mt-0 text-deepturqoise opacity-95">
                            <p>Fitur Admisi mencakup administrasi data pasien dan rekam medis pasien, memastikan
                                pencatatan
                                administrasi yang rapi dan tersentral.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input6" class="absolute peer opacity-0">
                        <label for="input6"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            dengan fitur Antrian pada DocPro SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-5 md:mt-0 text-deepturqoise opacity-95">
                            <p>DocPro SAFFMedic dilengkapi dengan fitur antrian untuk mempermudah proses pelayanan di
                                fasilitas
                                kesehatan. Detail fitur antrian dapat dilihat pada fitur Antrian SAFFMedic.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input7" class="absolute peer opacity-0">
                        <label for="input7"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">
                            Apakah DocPro SAFFMedic dapat mengeluarkan faktur atau kwitansi?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, DocPro SAFFMedic dapat langsung membuat faktur atau kwitansi untuk memudahkan proses
                                administrasi keuangan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input8" class="absolute peer opacity-0">
                        <label for="input8"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            DocPro SAFFMedic cocok untuk siapa?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>DocPro cocok digunakan oleh dokter praktek dan tenaga medis yang memerlukan pencatatan
                                administrasi yang rapi dan tersentral. Ini dapat mempercepat proses pelayanan dan
                                mempersingkat
                                birokrasi koordinasi..</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input9" class="absolute peer opacity-0">
                        <label for="input9"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            DocPro dapat diintegrasikan dengan fitur Apotek SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, DocPro dapat diintegrasikan dengan fitur apotek SAFFMedic. Informasi lebih lanjut
                                dapat
                                dilihat pada penjelasan fitur Apotek SAFFMedic.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input10" class="absolute peer opacity-0">
                        <label for="input10"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">
                            Bagaimana dengan dukungan dan pemeliharaan DocPro SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Harga DocPro SAFFMedic mencakup pelatihan virtual, pemeliharaan, dan pembaruan. Pengguna
                                dapat
                                mengakses dukungan online untuk bantuan teknis dan pelatihan tambahan. Informasi lebih
                                lanjut
                                dapat ditemukan pada fitur harga SAFFMedic.
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

        {{-- Section6 --}}
        <section class="my-28 p-5" data-aos="zoom-in-up" data-aos-duration="1100">
            <div class="md:w-1/3 mx-auto text-center text-darkgreen mb-20 text-xl">
                <h1 class="font-bold mb-5">Bergabunglah segera !</h1>
                <p>Jangan menumpuk kertas, hubungi Kami untuk mengambil penawaran Murah</p>
            </div>
            <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-10 mb-20">
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
        {{-- End Section6 --}}

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
