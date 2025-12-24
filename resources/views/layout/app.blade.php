<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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

    <!-- WebSite Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "SAFFMedic",
            "url": "https://saffmedic.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    <!-- Organization Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Corporation",
            "name": "SaKa Access Fix",
            "alternateName": "SAFFMedic",
            "url": "https://saffmedic.com",
            "logo": "https://saffmedic.com/img/saffmedicbiglogo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "6285100431111",
                "contactType": "sales",
                "contactOption": "",
                "areaServed": "ID",
                "availableLanguage": "id"
            },
            "sameAs": [
                "https://instagram.com/saffmedic"
            ]
        }
    </script>

    <!-- FAQ Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Apakah SAFFMedic dapat mengembangkan aplikasi SIMRS yang saya miliki?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Sebelumnya, kami akan melakukan pengecekan terhadap aplikasi yang saat ini anda gunakan dan mengidentifikasi kebutuhan pengembangan yang ingin diimplementasikan"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Sebaiknya menggunakan aplikasi yang sudah jadi atau membuat sendiri?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Jika Anda mengedepankan efisiensi, lebih baik menggunakan aplikasi yang sudah tersedia seperti SAFFMedic daripada harus membangun aplikasi sendiri.\n"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jika saya ingin membeli sebuah aplikasi, jenis aplikasi apa yang sesuai dengan usaha saya?\n",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ketika memilih aplikasi, perlu memperhatikan kebutuhan dan juga mempertimbangkan layanan purna jual.\n"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Kenapa SAFFMedic bersifat suscribe Cloud? bukan aplikasi Desktop.",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Kami memeprtimbangkan perkembangan teknologi, saat ini teknologi informasi dan data sudah beralih pada layanan cloud sistem. Selain lebih efisien, manfaat lainnya adalah pada maintenance atau perawatan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Berapa lama SAFFMedic Mendampingi Saya",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Selama Anda menggunakan SAFFMedic, Kami terus melakukan pendampingan"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Pendampingan seperti apa yang berikan oleh SAFFMedic",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Kami memberikan support, pelatihan, perbaikan, dan pengembangan fitur secara gratis selama Anda menggunakan SAFFMedic"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SAFFMedic melayani migrasi data",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "selama data tersebut bisa di export ke csv atau excel Kami dapat melakukan migrasi"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah SAFFMedic menyediakan open API",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Tentu saja iya, selama aplikai yang akan dihubungkan juga membuka diri untuk bridging API."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bila Saya memiliki server sendiri apakah SAFFMedic dapat ditempatkan pada server Saya\n",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Hal ini dapat mengacu pada paket layanan hybrid , dengan mengikuti ketentuan yang terdapat pada paket tersebut."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa yang dimaksud dengan Semi Custome pada SAFFMedic\n",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SAFFMedic merupakan apalikasi sudah siap digunakan, namun apabila Anda menginginkan penambahan fitur maka SAFFMedic dapat melakukannya.\n"
                    }
                }
            ]
        }
    </script>

    {{-- <script type="text/javascript" src="https://gass.co.id/gassv3.min.js?v=3"></script> --}}
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-674058545"></script> --}}
    {{-- <script>
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

    <link rel="stylesheet" href="css/customstylecss.css">
</head>

<body class="overflow-x-hidden">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCNTDDPL" height="0" width="0"
            style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div>
        @include('partials.navbar')

        @yield('content')

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
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCNTDDPL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->
</body>
@include('partials.js')

</html>
