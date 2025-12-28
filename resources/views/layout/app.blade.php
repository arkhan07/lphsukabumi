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

    <!-- WhatsApp Floating Button -->
    <div id="whatsapp" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
        <a href="/whatsapp" target="_blank">
            <img src="{{ asset('img/tanya-lph.png') }}"
                 alt="Tanya LPH"
                 style="width: 70px; height: 70px; border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;"
                 onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 16px rgba(0,0,0,0.25)';"
                 onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)';">
        </a>
    </div>

    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCNTDDPL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->
</body>
@include('partials.js')

</html>
