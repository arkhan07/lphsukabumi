<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name='description' itemprop='description' content='Lihat disini {{ $title }}'>

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

    @include('partials/navbar')

    <!-- Breadcrumb Start -->
    <div class="items-center w-2/3 md:w-1/2 md:pl-40 ms-auto">
        <hr class="bg-slate-400 md:w-[470px] mb-6">
        <div class="flex md:gap-4">
            <div class="">
                <a href="{{ route('artikel') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: #166F61;transform: ;msFilter:;">
                        <path
                            d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                    style="fill: #166F61;transform: ;msFilter:;">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
            <div class="md:w-[320px] md:underline text-deepturqoise">
                <p>{{ $post->post_title }}</p>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <section class="py-20">
        <div class="max-w-screen-xl mx-auto px-4 pb-20 grid">
            @if ($post)
                @if ($post->thumbnail)
                    <img src="{{ $post->thumbnail }}" alt="Post Thumbnail" class="md:w-[50%] w-[100%] mx-auto mb-16">
                @endif
                <h1 class="text-xl lg:text-3xl text-center text-darkteal font-semibold  mb-16">
                    {{ $post->post_title }}</h1>
                <div class="flex flex-col lg:flex-row gap-x-8 items-start">
                    <!-- Display Table of Contents -->
                    <div id="toc" class=" mb-4">
                        <div class="flex items-center justify-between">
                            <p class="font-semibold text-darkteal text-base md:text-lg">Daftar Isi</p>
                            <button id="toggle-toc" class="text-3xl text-persianblue">
                                <ion-icon name="menu-outline"></ion-icon>
                            </button>
                        </div>
                        <hr class="my-4">
                        <div id="toc-container">
                            {!! $tableOfContents !!}
                        </div>
                    </div>
                    <!-- Display Modified Post Content -->
                    <div id="post-content" class=" w-[85%] order-3 md:order-2">
                        {!! $modifiedPostContent !!}
                        <h3 class="ml-3 flex text-lg font-semibold items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M15 12c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm9-.449s-4.252 8.449-11.985 8.449c-7.18 0-12.015-8.449-12.015-8.449s4.446-7.551 12.015-7.551c7.694 0 11.985 7.551 11.985 7.551zm-7 .449c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5z" />
                            </svg>{{ $post->count }}
                        </h3>
                    </div>
                    <div class="order-2 md:order-3 md:mr-auto">
                        <div class="">
                            <h2 class="text-center text-2xl font-semibold bg-darkteal text-white py-4">Hits</h2>
                            @foreach ($TopPost as $post)
                                <a class="" href="{{ route('artikel.show', $post->post_name) }}">
                                    <div class="bg-slate-100 transform hover:scale-105">
                                        <h2 class="mt-5 text-xl p-4 break-normal text-darkteal">{{ $post->post_title }}
                                        </h2>
                                    </div>
                                </a>
                            @endforeach
                            <div id="carousel" class="mt-5 relative carousel">
                                <div class="relative overflow-hidden h-[1000px] md:h-[851px]">
                                    <div class="slide active-slide duration-[1000ms] ease-in-out">
                                        <a href="https://api.whatsapp.com/send?phone=6282333202020">
                                            <img src="../img/banner/payou.gif"
                                                class="absolute block w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                alt="GIF Banner">
                                        </a>
                                    </div>
                                    <div class="slide duration-[1000ms] ease-in-out">
                                        <a href="https://api.whatsapp.com/send?phone=6282333202020">
                                            <img src="../img/banner/payouhr.gif"
                                                class="absolute block w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                alt="GIF Banner">
                                        </a>
                                    </div>
                                    <div class="slide duration-[1000ms] ease-in-out">
                                        <a href="https://api.whatsapp.com/send?phone=6282333202020">
                                            <img src="../img/banner/saffmedic.gif"
                                                class="absolute block w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                alt="GIF Banner">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const carousel = document.getElementById('carousel');
                                    const slides = document.querySelectorAll('.slide');
                                    let currentSlide = 0;

                                    function showSlide(index) {
                                        slides.forEach((slide, i) => {
                                            slide.classList.toggle('active-slide', i === index);
                                        });
                                    }

                                    function nextSlide() {
                                        currentSlide = (currentSlide + 1) % slides.length;
                                        showSlide(currentSlide);
                                    }

                                    setInterval(nextSlide, 10000); // Change slide every 3 seconds (adjust as needed)
                                });
                            </script>
                            <style>
                                .carousel {
                                    position: relative;
                                    overflow: hidden;
                                }

                                .slide {
                                    opacity: 0;
                                    transition: opacity 1s ease-in-out;
                                }

                                .active-slide {
                                    opacity: 1;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="md:w-3/4 mx-auto md:order-1 order-2 mt-20 md:mt-0">
                    <h2 class="w-full my-4 p-4 text-deepturqoise text-lg md:text-2xl border-b-2 border-deepturqoise">
                        Artikel Lainnya</h2>
                    <div class="mx-auto grid grid-cols-1 md:grid-cols-3 gap-2 gap-y-5">
                        @foreach ($RandomPost as $post)
                            <div class="w-11/12 bg-gray-100 rounded-lg p-4">
                                <a href="{{ route('artikel.show', $post->post_name) }}">
                                    @if ($post->thumbnail)
                                        <img src="{{ $post->thumbnail }}" alt="Post Thumbnail"
                                            class="w-[100%] rounded-lg mx-auto">
                                    @endif
                                    <h2 class="line-clamp-3 font-medium text-base lg:text-lg text-deepturqoise mt-4">
                                        {{ $post->post_title }}
                                    </h2>
                                </a>
                                <p class=" font-medium text-xs lg:text-sm text-gray-400 mt-4">
                                    {{ date('j F Y', strtotime($post->post_date)) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p>Sorry, the requested post was not found.</p>
            @endif
        </div>
        <div class="flex gap-x-4 justify-center items-center mt-4">
            <div class="-mt-1">
                <p class=" font-medium text-sm lg:text-base text-darkteal pl-4">Bagikan :</p>
            </div>
            <div class="social-btns flex gap-x-2">
                <button onclick="shareOnFacebook()" class="text-darkteal text-xl lg:text-3xl">
                    <ion-icon name="logo-facebook"></ion-icon>
                </button>
                <button onclick="shareOnTwitter()" class="text-darkteal text-xl lg:text-3xl">
                    <ion-icon name="logo-twitter"></ion-icon>
                </button>
                <button onclick="shareViaEmail()" class="text-darkteal text-xl lg:text-3xl">
                    <ion-icon name="mail"></ion-icon>
                </button>
                <button onclick="copyLinkToClipboard()" class="text-darkteal text-xl lg:text-3xl">
                    <ion-icon name="link"></ion-icon>
                </button>
            </div>
        </div>

        <div id="disqus_thread" class="max-w-screen-xl mx-auto px-4 mt-16"></div>
    </section>

    {{-- Footer --}}
    @include('partials.footer')
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

    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://https-saffmedic-com.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>

    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>

    <script id="dsq-count-scr" src="//https-saffmedic-com.disqus.com/count.js"  async></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var tocContainer = document.getElementById("toc-container");
            var toggleButton = document.getElementById("toggle-toc");

            // Show TOC by default
            tocContainer.style.maxHeight =
                "2000px"; /* Set a sufficiently large max-height to ensure it's visible */

            // Toggle TOC visibility when button is clicked
            toggleButton.addEventListener("click", function() {
                if (tocContainer.style.maxHeight === "0px" || tocContainer.style.maxHeight === "") {
                    tocContainer.style.maxHeight =
                        "2000px"; /* Set a sufficiently large max-height to expand */
                } else {
                    tocContainer.style.maxHeight = "0px"; /* Collapse the TOC */
                }
            });
        });
    </script>

    <script>
        function shareOnFacebook() {
            window.open(
                "https://www.facebook.com/sharer/sharer.php?u=" +
                encodeURIComponent(window.location.href),
                "_blank"
            );
        }

        function shareOnTwitter() {
            window.open(
                "https://twitter.com/intent/tweet?url=" +
                encodeURIComponent(window.location.href) +
                "&text=Check%20out%20this%20awesome%20website!",
                "_blank"
            );
        }

        function shareOnInstagram() {
            window.open(
                "https://www.instagram.com/share?url=" +
                encodeURIComponent(window.location.href),
                "_blank"
            );
        }

        function shareViaEmail() {
            var subject = "Check out this awesome website!";
            var body =
                "I found this amazing website and thought you might like it: " +
                window.location.href;
            var mailtoLink =
                "mailto:?subject=" +
                encodeURIComponent(subject) +
                "&body=" +
                encodeURIComponent(body);
            window.location.href = mailtoLink;
        }

        function copyLinkToClipboard() {
            var copyText = document.createElement("textarea");
            copyText.value = window.location.href;
            document.body.appendChild(copyText);
            copyText.select();
            document.execCommand("copy");
            document.body.removeChild(copyText);
            alert("Link copied to clipboard!");
        }
    </script>
</body>

@include('partials.js')

</html>
