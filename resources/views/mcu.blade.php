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
                    "name": "Apa itu MCU SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MCU SAFFMedic adalah fitur Medical Check Up yang terintegrasi dalam SAFFMedic. Ini merupakan proses pemeriksaan kesehatan yang dapat dilakukan secara individu maupun untuk korporasi dengan dukungan berbagai penunjang seperti laboratorium, optometri, audiometri, dan lainnya."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana MCU SAFFMedic terintegrasi dengan fitur lainnya?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MCU SAFFMedic terintegrasi dengan fitur penunjang lainnya seperti laboratorium, optometri, dan audiometri. Semua ini tergabung dalam satu menu penunjang untuk memudahkan proses pemeriksaan kesehatan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah MCU SAFFMedic dapat digunakan oleh individu dan korporasi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, fitur MCU SAFFMedic dapat digunakan untuk pemeriksaan kesehatan individu dan korporasi. Ini memungkinkan pengelolaan data peserta MCU secara efisien."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana hasil MCU disajikan dalam MCU SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Hasil MCU disajikan dalam laporan yang dapat disesuaikan dengan kebutuhan. Data rekaman pemeriksaan dapat diakses dengan mudah."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa yang dapat diatur dalam jenis pemeriksaan MCU SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Jenis pemeriksaan dalam MCU SAFFMedic dapat diatur sesuai dengan rencana pemeriksaan yang diinginkan. Pengguna dapat membuat paket dan menentukan jenis pemeriksaan dengan metode setup mandiri."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa yang unik dalam penggunaan form kuesioner pada MCU SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MCU SAFFMedic dilengkapi dengan form kuesioner yang dapat diisi oleh peserta MCU, mengurangi penggunaan kertas dan meminimalkan kesalahan pengisian."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana MCU SAFFMedic mempercepat proses bagi korporasi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MCU SAFFMedic menyediakan dashboard khusus untuk korporasi atau organisasi. Mereka dapat mengisi data peserta MCU dan menerima hasil MCU dengan cepat, mempercepat proses pengiriman informasi."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah dashboard untuk organisasi dapat disesuaikan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, dashboard login untuk organisasi dapat dikembangkan dan disesuaikan dengan jenis laporan yang diinginkan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah ada biaya tambahan untuk fitur kustomisasi MCU SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Tidak, semua jenis kustomisasi dalam fitur MCU SAFFMedic tidak dipungut biaya selama masa berlangganan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara mengakses MCU SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MCU SAFFMedic berbasis web, memudahkan akses dan penggunaan. Pengguna dapat mengaksesnya melalui perangkat dengan koneksi internet."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana informasi mengenai harga, jumlah, dan paket MCU SAFFMedic?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Informasi lengkap mengenai harga, jumlah, dan paket dapat ditemukan pada fitur harga SAFFMedic."
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
        <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center p-5 gap-10">
                <div class="md:w-[470px] md:text-3xl text-xl text-darkgreen order-2 md:order-1">
                    <h1>MCU</h1>
                    <h2 class="font-semibold mb-5 mt-3">Fitur MCU yang Powerfull
                        untuk Menghasilkan Rekam Medis Digital</h2>

                    <div class="text-base">
                        <p>Fitur MCU yang terdapat pada SAFFMedic dapat membuat petugas FASKES melakukan kegiatan MCU
                            dengan
                            mudah.
                            <br><br>
                            Fitur yang terintegrasi dari semua modul layanan, meminimalisir resiko kekeliruan dalam
                            pengimputan
                            data.
                        </p>
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                            class="rounded-lg mb-10 mt-1 text-darkgreen transition-transform transform hover:scale-110"type="button">
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
                    <a role="button">
                        <div
                            class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white text-base font-semibold rounded-md mb-5">
                            <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                            <a href="/whatsapp">Hubungi Kami</a>
                        </div>
                    </a>
                </div>

                <div class="md:w-[45%] order-1 md:order-2">
                    <img src="img/bg-img-1.png" class="rounded-2xl" alt="Fitur MCU">
                </div>
            </div>

            <!-- Main modal -->
            <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-darkgreen">
                            <h3 class="text-xl font-semibold text-white">
                                Fitur MCU yang Powerfull
                                untuk Menghasilkan Rekam Medis Digital
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
                                MCU (Medical Check-Up) adalah sebuah prosedur pemeriksaan kesehatan yang melibatkan
                                serangkaian
                                tes untuk mengevaluasi kondisi kesehatan seseorang. Dalam menghadirkan pemeriksaan ini,
                                MCU
                                dilengkapi dengan fitur-fitur yang sangat berguna dan canggih. Salah satu dari fitur
                                tersebut
                                adalah kemampuannya untuk menghasilkan rekam medis digital.
                                <br><br>
                                Rekam medis digital adalah bentuk dokumentasi elektronik yang mencatat semua informasi
                                medis
                                seseorang secara digital. Document ini mencakup hasil tes laboratorium, hasil rontgen,
                                catatan
                                kondisi kesehatan, dan riwayat penyakit. Dengan adanya rekam medis digital ini, ada
                                banyak
                                manfaat yang bisa diperoleh.
                                <br><br>
                                Pertama, rekam medis digital dapat memberikan kemudahan dalam mengelola dan mengakses
                                data medis
                                seseorang. Dalam bentuk digital, semua informasi medis dapat disimpan secara
                                terorganisir dan
                                mudah diakses kapan pun diperlukan. Ini sangat berguna bagi pasien maupun dokter dalam
                                mengambil
                                keputusan yang berhubungan dengan perawatan dan pengobatan.
                                <br><br>
                                Kedua, rekam medis digital juga membantu meningkatkan efisiensi dan kualitas pelayanan
                                kesehatan. Dengan akses yang mudah, dokter dapat dengan cepat melihat data medis pasien
                                dan
                                mengambil keputusan yang lebih efektif. Selain itu, penggunaan rekam medis digital juga
                                meminimalkan risiko kehilangan atau kerusakan dokumen, sehingga informasi medis bisa
                                lebih aman
                                dan terjamin.
                                <br><br>
                                Terakhir, rekam medis digital juga memungkinkan adanya kolaborasi antara dokter dan
                                tenaga medis
                                lainnya. Dalam format digital, rekam medis bisa dengan mudah dibagikan dan diakses oleh
                                tim
                                medis yang terkait. Hal ini memudahkan koordinasi dalam perawatan pasien dan
                                memaksimalkan
                                efektivitas pengobatan.
                                <br><br>
                                Dalam kesimpulannya, fitur MCU yang powerfull dalam menghasilkan rekam medis digital
                                memiliki
                                banyak manfaat bagi pasien maupun dokter. Dalam era digital ini, penggunaan rekam medis
                                digital
                                menjadi semakin penting dalam mengoptimalkan pelayanan kesehatan. Dengan rekam medis
                                digital,
                                manajemen data medis menjadi lebih efisien, efektif, dan aman.
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
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section1 --}}

        {{-- Section2 --}}
        <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row gap-10 justify-center p-5">
                <div class="md:w-[500px] flex flex-col md:flex-row gap-3 bg-darkgreen text-white p-10 rounded-xl">
                    <div class="w-[35%]">
                        <img src="img/p-solusi-2-mcupersonal.png" alt="">
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold mb-2">MCU Personal</h1>
                        <p>Kegiatan MCU yang diadakan oleh individu. MCU yang dilakukan oleh individu hanya akan
                            mendapatkan
                            hasil
                            dalam bentuk cetak
                        </p>
                    </div>
                </div>

                <div class="md:w-[500px] flex flex-col md:flex-row gap-3 bg-darkgreen text-white p-10 rounded-xl">
                    <div class="w-[60%]">
                        <img src="img/p-solusi-2-mcucorporasi.png" alt="">
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold mb-2">MCU Corporasi</h1>
                        <p>Kegiatan MCU yang dilakukan oleh organisasi atau company.
                            Organisasi atau Company akan mendapatkan dashboard hasil
                            dan laporan MCU
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section2 --}}

        {{-- Section3 --}}
        <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
            <div class="md:w-4/5 mx-auto flex flex-col md:flex-row justify-center gap-10 p-5"
                style="background-color: #F2F2F2;">
                <div class="md:w-[40%]">
                    <img src="img/bg-mcu-medical.png" alt="">
                </div>
                <div class="md:w-[450px] py-10">
                    <div class="text-2xl text-darkgreen mb-5">
                        <h1 class="font-semibold">Kenali Lebih dalam Fitur Medical Check Up yang canggih</h1>
                        <h2>Hematkan waktu, mudahkan urusan</h2>
                    </div>

                    <div class="flex flex-wrap gap-10 text-deepturqoise">
                        <ul class="list-image-check list-inside">
                            <li>Pemeriksaan</li>
                            <li>Penunjang</li>
                            <li>Penunjang</li>
                        </ul>
                        <ul class="list-image-check list-inside">
                            <li>Medical Record</li>
                            <li>JCS</li>
                            <li>Custome</li>
                        </ul>
                    </div>

                    <div class="flex flex-wrap gap-6 mt-10 mb-6">
                        <img src="img/mudah-setup.png" class="w-[45%]" alt="">
                        <img src="img/lengkap-fitur.png" class="w-[45%]" alt="">
                    </div>

                    <div class="text-deepturqoise">
                        <p>MCU (Medical Check-Up) adalah sebuah prosedur pemeriksaan kesehatan yang melibatkan
                            serangkaian tes
                            untuk mengevaluasi kondisi kesehatan seseorang. Dalam menghadirkan pemeriksaan ini, MCU
                            dilengkapi
                            dengan fitur-fitur yang sangat berguna dan canggih. Salah satu dari fitur tersebut adalah
                            kemampuannya untuk menghasilkan rekam medis digital.</p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section3 --}}

        {{-- Section4 --}}
        <section class="container mx-auto my-20 p-5" data-aos="fade-right" data-aos-duration="1000">
            <div class="text-2xl text-center text-darkgreen">
                <div class="md:w-1/3 mx-auto">
                    <h1 class="font-semibold">Form Kuesioner</h1>
                    <h1 class="font-bold mb-2 mt-1">Digital online dan flexible</h1>
                    <p>Buat form kuesioner secara digital
                        dan bagikan secara online, form dapat
                        dibuat flexible.</p>
                </div>
                <div class="md:w-[40%] mx-auto my-10">
                    <img src="img/digital-kuesioner.png" alt="">
                </div>
            </div>
        </section>
        {{-- End Section4 --}}

        {{-- JCS - HST --}}
        <section class="md:w-1/2 mx-auto text-darkgreen text-2xl font-base my-20 p-5">
            <div class="my-12">
                <h1 class="font-bold text-center mb-5">Lengkap dengan pemeriksaan penunjang MCU</h1>
                <p class="text-center">SAFFMedic dilengkapi dengan beberapa fitur untuk menunjang
                    metode pemeriksaan</p>
            </div>
            <div class="md:flex ">
                <div class="md:w-1/3 md:ms-auto mb-5">
                    <img src="img/mcu_jcv.png" alt="JCV" width="50%" class="mx-auto">
                </div>
                <div class="md:w-2/3">
                    <h2 class="font-bold">Jakarta Cardio Vascular (JCV)</h2>
                    <p class="mt-4">Metode penunjang untuk analisa penyakita jangtung dan pembuluh darah </p>
                </div>
            </div>
            <div class="md:flex mt-12">
                <div class="md:w-1/3 md:ms-auto mb-5">
                    <img src="img/mcu_harvardtest.png" alt="Harvard Test" width="50%" class="mx-auto">
                </div>
                <div class="md:w-2/3">
                    <h2 class="font-bold">Harvard Step Test</h2>
                    <p class="mt-4">Dilengkapi dengan form untuk tes fisik dengan metode Harvard test, sehingga
                        kegiatan MCU yang
                        ingin mendapatkan kebugaran akan lebih mudah.</p>
                </div>
            </div>
        </section>
        {{-- End JCS - HST --}}

        {{-- Health & Prediction --}}
        <section class="md:w-2/3 mx-auto text-darkgreen text-2xl font-base my-20 p-5" id="sectionhealth">
            <div class="text-center my-10 text-darkteal">
                <h1 class="md:text-4xl font-bold mb-5 ">Health Analytics & Prediction Suite</h1>
                <p>Kami menghadirkan fitur analisa dan prediksi kesehatan untuk <br> membantu Anda dalam menghadirkan
                    laporan
                    MCU yang berkualitas</p>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-x-10 gap-y-10">
                <div class="bg-darkgreen text-white p-5 text-center hover:scale-110 items-center rounded-lg">
                    <a href="https://saffmedic.com/artikel/aplikasi-rekam-medis-klinik-inovasi-sindrom-metabolik"
                        class="items-center">
                        Analisis Sindrom Metabolik
                    </a>
                </div>
                <div class="bg-darkgreen text-white p-5 text-center hover:scale-110 items-center rounded-lg">
                    <a href="https://saffmedic.com/artikel/analisis-australian-type-2-diabetes-risk-ausrisk"
                        class="items-center">
                        Analisis Australian Type 2 Diabetes Risk (AUSRISK)
                    </a>
                </div>
                <div class="bg-darkgreen text-white p-5 text-center hover:scale-110 items-center rounded-lg">
                    <a href="https://saffmedic.com/artikel/sim-klinik-mcu-dengan-fitur-analisa-kualitas-kesehatan"
                        class="items-center">
                        Analisis Kualitas Kesehatan Karyawan
                    </a>
                </div>
                <div class="bg-darkgreen text-white p-5 text-center hover:scale-110 items-center rounded-lg">
                    <a href="https://saffmedic.com/artikel/sistem-klinik-analisis-serangan-jantung-10-tahun-mendatang"
                        class="items-center">
                        Analisis Serangan Jantung dalam 10 Tahun Mendatang
                    </a>
                </div>
                <div class="bg-darkgreen text-white p-5 text-center hover:scale-110 items-center rounded-lg">
                    <a href="https://saffmedic.com/artikel/analisis-penyakit-pembuluh-darah-jantung-dan-otak-dengan-aplikasi-simrs"
                        class="items-center">
                        Analisis Penyakit Pembuluh Darah Jantung dan Otak
                    </a>
                </div>
                <div class="bg-darkgreen text-white p-5 text-center hover:scale-110 items-center rounded-lg">
                    <a href="https://saffmedic.com/artikel/rekam-medis-online-dapat-menganalisa-puls-cardiac-marker"
                        class="items-center">
                        Analisis PULS Cardiac Marker
                    </a>
                </div>
            </div>
        </section>
        {{-- End Health & Prediction --}}

        {{-- Section5 --}}
        <section class="my-28 p-5" data-aos="zoom-in-up" data-aos-duration="1100">
            <div class="text-center text-darkgreen text-2xl">
                <h1 class="mb-5">Dapatkan solusi tepat dari Aplikasi Hebat <br> <b>Konsultasi kebutuhan Sistem
                        Faskes</b>
                </h1>
            </div>
            <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-5">
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/demo.png" width="25" alt="Demo">
                        <a href="{{ route('form-request-demo') }}">Atur Jadwal Demo</a>
                    </div>
                </a>
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-emerald md:w-[220px] text-white font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                        <a href="/whatsapp">Hubungi Kami</a>
                    </div>
                </a>
            </div>
        </section>
        {{-- End Section5 --}}

        {{-- Section 6 --}}
        <section class="my-40">
            <div class="text-center text-darkteal text-2xl mb-10">
                <h1 class="md:text-4xl">Penunjang Screening Mental Health</h1>
                <h2>Fitur analisa kesehatan mental</h2>
            </div>

            <div class="flex flex-col md:flex-row justify-center gap-20 p-5">
                <div
                    class="text-darkteal md:w-2/5 text-2xl rounded-lg p-5 shadow-md border shadow-darkteal order-2 md:order-1">
                    <p>Kami telah melengkapi fitur Medical
                        Check-Up dengan SRQ-20 dan DASS21, yang
                        dapat memberikan skor berdasarkan
                        analisis kesehatan mental.

                        Fitur ini sangat membantu dokter dan
                        tenaga medis lainnya dalam
                        melakukan analisis, cukup dengan
                        mengisi formulir SRQ dan DASS21 yang telah
                        disediakan.

                        Setelah formulir terisi, skor akan
                        tampil secara otomatis.
                    </p>
                </div>

                <img src="img/SRQ20.png" class="md:w-[300px] order-1 md:order-2" alt="">
            </div>

            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <p>Lihat Artikelnya Disini</p>
            </div>
            <div class="flex justify-center" data-aos="fade-down" data-aos-duration="500">
                <div class="mt-2 flex flex-row gap-2">
                    <a
                        href="https://saffmedic.com/artikel/temukan-kesehatan-jiwa-anda-dengan-srq20-aplikasi-lab-terbaru">
                        <p
                            class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                            SRQ-20</p>
                    </a>
                    <a class="ml-2" href="https://saffmedic.com/artikel/simrs-untuk-medical-check-up-solusi-deteksi-gangguan-mental">
                        <p
                            class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                            DASS21</p>
                    </a>
                </div>
            </div>

        </section>
        {{-- Section End 6 --}}

        {{-- FAQ --}}

        {{-- Desktop (Tab) --}}
        <div class="py-10 md:pt-20 md:pb-28 bg-[#f1f4f7] mt-10 md:mt-20" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>MCU SAFFMedic</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apa itu MCU SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. Bagaimana MCU SAFFMedic terintegrasi dengan fitur
                        lainnya?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Apakah MCU SAFFMedic dapat digunakan oleh individu dan
                        korporasi?
                    </button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Bagaimana hasil MCU disajikan dalam MCU SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '5')">5. Apa yang dapat diatur dalam jenis pemeriksaan MCU
                        SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '6')">6. Apa yang unik dalam penggunaan form kuesioner pada MCU
                        SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '7')">7. Bagaimana MCU SAFFMedic mempercepat proses bagi
                        korporasi?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '8')">8. Apakah dashboard untuk organisasi dapat disesuaikan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '9')">9. Apakah ada biaya tambahan untuk fitur kustomisasi MCU
                        SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '10')">10. Bagaimana cara mengakses MCU SAFFMedic?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '11')">11. Bagaimana informasi mengenai harga, jumlah, dan paket MCU
                        SAFFMedic?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa itu MCU SAFFMedic?</h3>
                    <p>MCU SAFFMedic adalah fitur Medical Check Up yang terintegrasi dalam SAFFMedic. Ini merupakan
                        proses
                        pemeriksaan kesehatan yang dapat dilakukan secara individu maupun untuk korporasi dengan
                        dukungan
                        berbagai penunjang seperti laboratorium, optometri, audiometri, dan lainnya.</p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana MCU SAFFMedic terintegrasi dengan
                        fitur
                        lainnya?</h3>
                    <p>MCU SAFFMedic terintegrasi dengan fitur penunjang lainnya seperti laboratorium, optometri, dan
                        audiometri. Semua ini tergabung dalam satu menu penunjang untuk memudahkan proses pemeriksaan
                        kesehatan.
                    </p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah MCU SAFFMedic dapat digunakan oleh
                        individu dan
                        korporasi?</h3>
                    <p>Ya, fitur MCU SAFFMedic dapat digunakan untuk pemeriksaan kesehatan individu dan korporasi. Ini
                        memungkinkan pengelolaan data peserta MCU secara efisien.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana hasil MCU disajikan dalam MCU
                        SAFFMedic?</h3>
                    <p>Hasil MCU disajikan dalam laporan yang dapat disesuaikan dengan kebutuhan. Data rekaman
                        pemeriksaan dapat
                        diakses dengan mudah.</p>
                </div>

                <div id="5" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa yang dapat diatur dalam jenis pemeriksaan
                        MCU
                        SAFFMedic?</h3>
                    <p>Jenis pemeriksaan dalam MCU SAFFMedic dapat diatur sesuai dengan rencana pemeriksaan yang
                        diinginkan.
                        Pengguna dapat membuat paket dan menentukan jenis pemeriksaan dengan metode setup mandiri.</p>
                </div>

                <div id="6" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa yang unik dalam penggunaan form kuesioner
                        pada MCU
                        SAFFMedic?</h3>
                    <p>MCU SAFFMedic dilengkapi dengan form kuesioner yang dapat diisi oleh peserta MCU, mengurangi
                        penggunaan
                        kertas dan meminimalkan kesalahan pengisian.</p>
                </div>

                <div id="7" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana MCU SAFFMedic mempercepat proses bagi
                        korporasi?</h3>
                    <p>MCU SAFFMedic menyediakan dashboard khusus untuk korporasi atau organisasi. Mereka dapat mengisi
                        data
                        peserta MCU dan menerima hasil MCU dengan cepat, mempercepat proses pengiriman informasi.</p>
                </div>

                <div id="8" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah dashboard untuk organisasi dapat
                        disesuaikan?
                    </h3>
                    <p>Ya, dashboard login untuk organisasi dapat dikembangkan dan disesuaikan dengan jenis laporan yang
                        diinginkan.</p>
                </div>

                <div id="9" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah ada biaya tambahan untuk fitur
                        kustomisasi MCU
                        SAFFMedic?</h3>
                    <p>Tidak, semua jenis kustomisasi dalam fitur MCU SAFFMedic tidak dipungut biaya selama masa
                        berlangganan.
                    </p>
                </div>
                <div id="10" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana cara mengakses MCU SAFFMedic?</h3>
                    <p>MCU SAFFMedic berbasis web, memudahkan akses dan penggunaan. Pengguna dapat mengaksesnya melalui
                        perangkat dengan koneksi internet.</p>
                </div>
                <div id="11" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana informasi mengenai harga, jumlah, dan
                        paket
                        MCU SAFFMedic?</h3>
                    <p>Informasi lengkap mengenai harga, jumlah, dan paket dapat ditemukan pada fitur harga SAFFMedic.
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
                            Apa itu MCU SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>MCU SAFFMedic adalah fitur Medical Check Up yang terintegrasi dalam SAFFMedic. Ini
                                merupakan
                                proses pemeriksaan kesehatan yang dapat dilakukan secara individu maupun untuk korporasi
                                dengan
                                dukungan berbagai penunjang seperti laboratorium, optometri, audiometri, dan lainnya..
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            MCU SAFFMedic terintegrasi dengan fitur lainnya?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>MCU SAFFMedic terintegrasi dengan fitur penunjang lainnya seperti laboratorium,
                                optometri, dan
                                audiometri. Semua ini tergabung dalam satu menu penunjang untuk memudahkan proses
                                pemeriksaan
                                kesehatan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            MCU SAFFMedic dapat digunakan oleh individu dan korporasi?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, fitur MCU SAFFMedic dapat digunakan untuk pemeriksaan kesehatan individu dan
                                korporasi. Ini
                                memungkinkan pengelolaan data peserta MCU secara efisien.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            hasil MCU disajikan dalam MCU SAFFMedic?.</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>Hasil MCU disajikan dalam laporan yang dapat disesuaikan dengan kebutuhan. Data rekaman
                                pemeriksaan dapat diakses dengan mudah.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input5" class="absolute peer opacity-0">
                        <label for="input5"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            yang dapat diatur dalam jenis pemeriksaan MCU SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-4 md:mt-0 text-deepturqoise opacity-95">
                            <p>Jenis pemeriksaan dalam MCU SAFFMedic dapat diatur sesuai dengan rencana pemeriksaan yang
                                diinginkan. Pengguna dapat membuat paket dan menentukan jenis pemeriksaan dengan metode
                                setup
                                mandiri.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input6" class="absolute peer opacity-0">
                        <label for="input6"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            yang unik dalam penggunaan form kuesioner pada MCU SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-5 md:mt-0 text-deepturqoise opacity-95">
                            <p>MCU SAFFMedic dilengkapi dengan form kuesioner yang dapat diisi oleh peserta MCU,
                                mengurangi
                                penggunaan kertas dan meminimalkan kesalahan pengisian.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input7" class="absolute peer opacity-0">
                        <label for="input7"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">
                            Bagaimana MCU SAFFMedic mempercepat proses bagi korporasi?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>MCU SAFFMedic menyediakan dashboard khusus untuk korporasi atau organisasi. Mereka dapat
                                mengisi
                                data peserta MCU dan menerima hasil MCU dengan cepat, mempercepat proses pengiriman
                                informasi.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input8" class="absolute peer opacity-0">
                        <label for="input8"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            dashboard untuk organisasi dapat disesuaikan?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-14 md:mt-0 text-deepturqoise opacity-95">
                            <p>Ya, dashboard login untuk organisasi dapat dikembangkan dan disesuaikan dengan jenis
                                laporan yang
                                diinginkan.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input9" class="absolute peer opacity-0">
                        <label for="input9"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            ada biaya tambahan untuk fitur kustomisasi MCU SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Tidak, semua jenis kustomisasi dalam fitur MCU SAFFMedic tidak dipungut biaya selama masa
                                berlangganan.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input10" class="absolute peer opacity-0">
                        <label for="input10"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            cara mengakses MCU SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>MCU SAFFMedic berbasis web, memudahkan akses dan penggunaan. Pengguna dapat mengaksesnya
                                melalui
                                perangkat dengan koneksi internet.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input11" class="absolute peer opacity-0">
                        <label for="input11"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            informasi mengenai harga, jumlah, dan paket MCU SAFFMedic?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-12 md:mt-0 text-deepturqoise opacity-95">
                            <p>Informasi lengkap mengenai harga, jumlah, dan paket dapat ditemukan pada fitur harga
                                SAFFMedic.
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
