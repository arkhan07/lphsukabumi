<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name='description' itemprop='description' content={{ $description }}>

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
                    "item": "https://lpddb-sukabumi.com/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Layanan - Konsultasi Makanan",
                    "item": "https://lpddb-sukabumi.com/konsultasi-makanan"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Layanan - Konsultasi Minuman",
                    "item": "https://lpddb-sukabumi.com/konsultasi-minuman"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Layanan - Konsultasi Kosmetik",
                    "item": "https://lpddb-sukabumi.com/konsultasi-kosmetik"
                },
                {
                    "@type": "ListItem",
                    "position": 5,
                    "name": "Layanan - Konsultasi Obat-obatan",
                    "item": "https://lpddb-sukabumi.com/konsultasi-obat"
                },
                {
                    "@type": "ListItem",
                    "position": 6,
                    "name": "Layanan - Konsultasi Bahan Baku",
                    "item": "https://lpddb-sukabumi.com/konsultasi-bahan-baku"
                },
                {
                    "@type": "ListItem",
                    "position": 7,
                    "name": "Proses Konsultasi Halal",
                    "item": "https://lpddb-sukabumi.com/proses-konsultasi"
                },
                {
                    "@type": "ListItem",
                    "position": 8,
                    "name": "Biaya Konsultasi",
                    "item": "https://lpddb-sukabumi.com/biaya-konsultasi"
                },
                {
                    "@type": "ListItem",
                    "position": 9,
                    "name": "Kontak",
                    "item": "https://lpddb-sukabumi.com/kontak"
                },
                {
                    "@type": "ListItem",
                    "position": 10,
                    "name": "Artikel",
                    "item": "https://lpddb-sukabumi.com/artikel"
                },
                {
                    "@type": "ListItem",
                    "position": 11,
                    "name": "Tentang Kami",
                    "item": "https://lpddb-sukabumi.com/tentang-kami"
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
                    "name": "Apa itu Konsultasi Halal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Konsultasi Halal adalah layanan bimbingan dan pendampingan yang diberikan oleh LPH Doa Bangsa Sukabumi kepada pelaku usaha untuk mempersiapkan dan melaksanakan proses sertifikasi halal sesuai dengan standar BPJPH."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa keunggulan Konsultasi Halal LPH Doa Bangsa Sukabumi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Keunggulan kami terletak pada tim konsultan yang berpengalaman, pendekatan yang personal sesuai kebutuhan usaha, dan pemahaman mendalam tentang regulasi halal yang berlaku di Indonesia."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah Konsultasi Halal dapat dilakukan untuk UKM?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, LPH Doa Bangsa Sukabumi memberikan layanan konsultasi halal untuk semua skala usaha, dari UKM hingga perusahaan besar. Untuk UKM, kami memberikan solusi yang sesuai dengan kapasitas dan kebutuhan usaha."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa saja yang dibahas dalam Konsultasi Halal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Konsultasi mencakup analisis kebutuhan, persiapan dokumen, penyusunan sistem jaminan halal, pelatihan personil, dan persiapan audit sertifikasi."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana sistem konsultasi dilakukan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Konsultasi dilakukan melalui kombinasi pertemuan online, komunikasi via email/WhatsApp, dan kunjungan lapangan jika diperlukan untuk memahami kondisi usaha secara langsung."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah konsultasi halal berbasis online?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, sebagian besar konsultasi dapat dilakukan secara online melalui video conference, telepon, dan komunikasi digital. Namun, kunjungan lapangan mungkin diperlukan untuk kasus tertentu."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah ada biaya untuk konsultasi halal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, terdapat biaya untuk layanan konsultasi yang disesuaikan dengan kompleksitas kebutuhan dan durasi pendampingan yang diperlukan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah konsultasi sudah termasuk pendampingan hingga sertifikat diterbitkan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, paket konsultasi kami mencakup pendampingan dari awal persiapan hingga sertifikat halal diterbitkan, termasuk bantuan selama proses audit."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah biaya konsultasi juga mencakup revisi dokumen dan pelatihan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, biaya konsultasi sudah mencakup revisi dokumen, pelatihan personil, dan bimbingan implementasi sistem jaminan halal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara memulai Konsultasi Halal dengan LPH Doa Bangsa Sukabumi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Anda dapat menghubungi tim kami melalui WhatsApp, telepon, atau mengisi form konsultasi di website untuk mendapatkan sesi konsultasi awal secara gratis."
                    }
                }
            ]
        }
    </script>

</head>

<body>
    <div>
        @include('partials.navbar')

        {{-- Section1 --}}
        <section class="container mx-auto my-20">
            <div class="flex flex-col md:flex-row justify-center items-center gap-10 p-5">
                <div class="md:w-[45%]">
                    <img src="img/apotek-bg-element1.png" class="" alt="Konsultasi Halal">
                </div>
                <div class="md:w-1/3">
                    <div class="text-darkgreen font-bold">
                        <h1 class="text-3xl">KONSULTASI GRATIS ATAU BERBAYAR</h1>
                        <h2 class="text-2xl">Pilih sesuai kebutuhan bisnis Anda</h2>
                        <h3 class="mt-2 mb-1 text-deepturqoise font-semibold">LPH Doa Bangsa Sukabumi memiliki layanan Konsultasi Halal terintegrasi</h3>
                        <p class="font-normal text-deepturqoise">
                            Anda bebas memilih, mulai dari konsultasi gratis untuk pemahaman awal, atau konsultasi berbayar untuk pendampingan lengkap
                            <br><br>
                            Layanan Konsultasi Halal LPH Doa Bangsa Sukabumi merupakan bimbingan profesional dengan harga yang kompetitif dan transparan
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
                                        LAYANAN KONSULTASI HALAL
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
                                        Layanan Konsultasi Halal digunakan untuk membantu pelaku usaha dalam mempersiapkan dan menjalani proses sertifikasi halal sesuai dengan standar BPJPH.
                                        <br><br>
                                        Konsultasi Halal adalah bimbingan profesional yang diberikan oleh Lembaga Pemeriksa Halal terdaftar untuk memastikan bahwa produk, proses produksi, dan fasilitas telah memenuhi semua persyaratan kehalalan yang berlaku.
                                        <br><br>
                                        Dalam pelaksanaannya, layanan konsultasi mencakup beberapa aspek penting. Pertama, tim konsultan akan membantu Anda memahami regulasi dan persyaratan sertifikasi halal yang berlaku. Mereka akan menjelaskan secara detail dokumen-dokumen yang diperlukan, proses pemeriksaan, dan kriteria yang harus dipenuhi.
                                        <br><br>
                                        Selain itu, konsultan juga akan membantu dalam penyusunan dan penyempurnaan dokumen-dokumen pendukung sertifikasi. Mereka akan memastikan bahwa semua dokumen telah lengkap, benar, dan sesuai dengan format yang ditetapkan oleh BPJPH.
                                        <br><br>
                                        Konsultan juga akan memberikan rekomendasi untuk perbaikan sistem dan proses produksi jika diperlukan. Mereka akan membantu mengidentifikasi potensi risiko dan memberikan solusi untuk memastikan kepatuhan terhadap standar halal.
                                        <br><br>
                                        Dengan layanan konsultasi yang komprehensif, pelaku usaha dapat mempersiapkan diri dengan lebih baik untuk menghadapi proses sertifikasi halal. Pendampingan profesional akan mengurangi risiko penolakan sertifikat dan mempercepat proses penerbitan sertifikat halal.
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
                            <a href="/whatsapp">Hubungi Konsultan Kami</a>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        {{-- End Section1 --}}

        {{-- Section2 --}}
        <section class="container mx-auto my-20 bg-lightsage" data-aos="fade-down" data-aos-duration="1000">
            <div class="text-center py-10">
                <h1 class="text-darkteal text-3xl font-bold">Konsultasi Halal LPH Doa Bangsa Sukabumi <br>
                    Lebih lengkap, lebih terjangkau</h1>
                <p class="text-deepturqoise md:w-[520px] mx-auto mt-4">Harga yang kompetitif, membuat investasi Anda semakin hemat. Layanan kami dilengkapi dengan pendekatan yang dapat disesuaikan dengan kebutuhan spesifik usaha Anda</p>
            </div>

            <div
                class="flex flex-col md:flex-row md:gap-10 gap-5 justify-center text-darkgreen font-semibold text-2xl pb-32 px-5">
                <ul class="w-fit mx-auto md:mx-0 flex flex-col md:gap-10 gap-5 md:mt-10">
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Analisis Kebutuhan</li>
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Penyusunan Dokumen</li>
                </ul>
                <div class="md:w-[50%] order-2 md:order-1">
                    <img src="img/apotik_fitur.png" class="mx-auto" alt="Proses Konsultasi">
                </div>
                <ul class="w-fit mx-auto md:mx-0 flex flex-col md:gap-20 gap-5 md:mt-10 order-1 md:order-2">
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Pelatihan Personil</li>
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Pendampingan Audit</li>
                    <li class="border-b-2 border-b-turqoise px-5 py-2">Follow-up Pasca Sertifikasi</li>
                </ul>
            </div>
        </section>
        {{-- End Section2 --}}

        {{-- Section3 --}}
        <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center gap-5 items-center p-5">
                <div class="md:w-1/3 order-2 md:order-1">
                    <div class="md:w-4/5 text-darkgreen font-bold">
                        <h1 class="text-3xl">Konsultasi Dokumen</h1>
                        <h2 class="text-2xl">Tinggalkan kebingungan administrasi</h2>
                        <h3 class="mt-2 mb-1 text-deepturqoise font-semibold">Panduan lengkap penyusunan dokumen sertifikasi</h3>
                        <p class="font-normal text-deepturqoise">Anda tidak perlu khawatir dengan kerumitan dokumen,
                            Konsultan kami akan memandu Anda langkah demi langkah</p>
                        <a role="button">
                            <div
                                class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md mt-5">
                                <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                                <a href="/whatsapp">Konsultasi Sekarang</a>
                            </div>
                        </a>
                    </div>
                </div>
                <img src="img/resep-dokter.png" width="100%" class="md:w-[40%] order-1 md:order-2"
                    alt="Konsultasi Dokumen">
            </div>
        </section>
        {{-- End Section3 --}}

        {{-- FAQ --}}
        <div class="py-10 md:pt-20 md:pb-28 bg-[#f1f4f7] mt-10 md:mt-20" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>Konsultasi Halal LPH Doa Bangsa Sukabumi</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apa itu Konsultasi Halal?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. Apa keunggulan Konsultasi Halal LPH Doa Bangsa Sukabumi?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Apakah Konsultasi Halal dapat dilakukan untuk UKM?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Apa saja yang dibahas dalam Konsultasi Halal?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '5')">5. Bagaimana sistem konsultasi dilakukan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '6')">6. Apakah konsultasi halal berbasis online?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '7')">7. Apakah ada biaya untuk konsultasi halal?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '8')">8. Apakah konsultasi sudah termasuk pendampingan hingga sertifikat diterbitkan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '9')">9. Apakah biaya konsultasi juga mencakup revisi dokumen dan pelatihan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '10')">10. Bagaimana cara memulai Konsultasi Halal dengan LPH Doa Bangsa Sukabumi?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa itu Konsultasi Halal?</h3>
                    <p>Konsultasi Halal adalah layanan bimbingan dan pendampingan yang diberikan oleh LPH Doa Bangsa Sukabumi kepada pelaku usaha untuk mempersiapkan dan melaksanakan proses sertifikasi halal sesuai dengan standar BPJPH.</p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa keunggulan Konsultasi Halal LPH Doa Bangsa Sukabumi?</h3>
                    <p>Keunggulan kami terletak pada tim konsultan yang berpengalaman, pendekatan yang personal sesuai kebutuhan usaha, dan pemahaman mendalam tentang regulasi halal yang berlaku di Indonesia.
                    </p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah Konsultasi Halal dapat dilakukan untuk UKM?</h3>
                    <p>Ya, LPH Doa Bangsa Sukabumi memberikan layanan konsultasi halal untuk semua skala usaha, dari UKM hingga perusahaan besar. Untuk UKM, kami memberikan solusi yang sesuai dengan kapasitas dan kebutuhan usaha.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa saja yang dibahas dalam Konsultasi Halal?
                    </h3>
                    <p>Konsultasi mencakup analisis kebutuhan, persiapan dokumen, penyusunan sistem jaminan halal, pelatihan personil, dan persiapan audit sertifikasi.</p>
                </div>

                <div id="5" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana sistem konsultasi dilakukan?</h3>
                    <p>Konsultasi dilakukan melalui kombinasi pertemuan online, komunikasi via email/WhatsApp, dan kunjungan lapangan jika diperlukan untuk memahami kondisi usaha secara langsung.</p>
                </div>

                <div id="6" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah konsultasi halal berbasis online?</h3>
                    <p>Ya, sebagian besar konsultasi dapat dilakukan secara online melalui video conference, telepon, dan komunikasi digital. Namun, kunjungan lapangan mungkin diperlukan untuk kasus tertentu.</p>
                </div>

                <div id="7" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah ada biaya untuk konsultasi halal?</h3>
                    <p>Ya, terdapat biaya untuk layanan konsultasi yang disesuaikan dengan kompleksitas kebutuhan dan durasi pendampingan yang diperlukan.</p>
                </div>

                <div id="8" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4"> Apakah konsultasi sudah termasuk pendampingan hingga sertifikat diterbitkan?</h3>
                    <p>Ya, paket konsultasi kami mencakup pendampingan dari awal persiapan hingga sertifikat halal diterbitkan, termasuk bantuan selama proses audit.</p>
                </div>

                <div id="9" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah biaya konsultasi juga mencakup revisi dokumen dan pelatihan?</h3>
                    <p>Ya, biaya konsultasi sudah mencakup revisi dokumen, pelatihan personil, dan bimbingan implementasi sistem jaminan halal.
                    </p>
                </div>
                <div id="10" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana cara memulai Konsultasi Halal dengan LPH Doa Bangsa Sukabumi?
                    </h3>
                    <p>Anda dapat menghubungi tim kami melalui WhatsApp, telepon, atau mengisi form konsultasi di website untuk mendapatkan sesi konsultasi awal secara gratis.
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
                            itu Konsultasi Halal?</label>
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
                            <p>Konsultasi Halal adalah layanan bimbingan dan pendampingan yang diberikan oleh LPH Doa Bangsa Sukabumi kepada pelaku usaha untuk mempersiapkan dan melaksanakan proses sertifikasi halal sesuai dengan standar BPJPH.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apa
                            keunggulan Konsultasi Halal LPH Doa Bangsa Sukabumi?</label>
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
                            <p>Keunggulan kami terletak pada tim konsultan yang berpengalaman, pendekatan yang personal sesuai kebutuhan usaha, dan pemahaman mendalam tentang regulasi halal yang berlaku di Indonesia.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            Konsultasi Halal dapat dilakukan untuk UKM?</label>
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
                            <p>Ya, LPH Doa Bangsa Sukabumi memberikan layanan konsultasi halal untuk semua skala usaha, dari UKM hingga perusahaan besar.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            saja yang dibahas dalam Konsultasi Halal?</label>
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
                            <p>Konsultasi mencakup analisis kebutuhan, persiapan dokumen, penyusunan sistem jaminan halal, pelatihan personil, dan persiapan audit sertifikasi.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input5" class="absolute peer opacity-0">
                        <label for="input5"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            sistem konsultasi dilakukan?</label>
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
                            <p>Konsultasi dilakukan melalui kombinasi pertemuan online, komunikasi via email/WhatsApp, dan kunjungan lapangan jika diperlukan.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input6" class="absolute peer opacity-0">
                        <label for="input6"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            konsultasi halal berbasis online?</label>
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
                            <p>Ya, sebagian besar konsultasi dapat dilakukan secara online melalui video conference, telepon, dan komunikasi digital.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input7" class="absolute peer opacity-0">
                        <label for="input7"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">
                            Apakah ada biaya untuk konsultasi halal?</label>
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
                            <p>Ya, terdapat biaya untuk layanan konsultasi yang disesuaikan dengan kompleksitas kebutuhan dan durasi pendampingan yang diperlukan.
                            </p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input8" class="absolute peer opacity-0">
                        <label for="input8"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            konsultasi sudah termasuk pendampingan hingga sertifikat diterbitkan?</label>
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
                            <p>Ya, paket konsultasi kami mencakup pendampingan dari awal persiapan hingga sertifikat halal diterbitkan, termasuk bantuan selama proses audit.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input9" class="absolute peer opacity-0">
                        <label for="input9"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            biaya konsultasi juga mencakup revisi dokumen dan pelatihan?</label>
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
                            <p>Ya, biaya konsultasi sudah mencakup revisi dokumen, pelatihan personil, dan bimbingan implementasi sistem jaminan halal.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input10" class="absolute peer opacity-0">
                        <label for="input10"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            cara memulai Konsultasi Halal dengan LPH Doa Bangsa Sukabumi?</label>
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
                            <p>Anda dapat menghubungi tim kami melalui WhatsApp, telepon, atau mengisi form konsultasi di website untuk mendapatkan sesi konsultasi awal secara gratis.
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
                <h1>Mudah diakses <br>
                    dan selalu memberikan solusi terbaik</h1>
            </div>

            <div class="flex flex-wrap justify-center gap-10 text-center text-darkgreen my-20">
                <div class="w-[320px]">
                    <img src="img/metode-pembayaran.png" class="w-[20%] mx-auto mb-5" alt="Metode Konsultasi">
                    <h1 class="md:text-2xl text-xl font-bold">Metode Konsultasi Fleksibel</h1>
                    <p>Konsultasi dapat dilakukan secara online atau offline sesuai kebutuhan dan kenyamanan klien</p>
                </div>
                <div class="w-[320px]">
                    <img src="img/koneksi-semua-layanan.png" class="w-[20%] mx-auto mb-5" alt="Tim Ahli">
                    <h1 class="md:text-2xl text-xl font-bold">Tim Konsultan Ahli</h1>
                    <p>Didukung oleh tim konsultan yang berpengalaman dan memahami regulasi halal secara mendalam</p>
                </div>
                <div class="w-[320px]">
                    <img src="img/database-terpusat.png" class="w-[20%] mx-auto mb-5" alt="Dokumen Terkelola">
                    <h1 class="md:text-2xl text-xl font-bold">Dokumen Terkelola dengan Baik</h1>
                    <p>Tidak perlu khawatir tentang kerumitan dokumen, kami akan membantu mengelola dan menyusunnya dengan rapi</p>
                </div>
            </div>

            <hr class="w-3/5 mx-auto">

            <div class="md:w-4/5 mx-auto rounded-lg p-10 my-20 shadow-lg">
                <p class="text-deepturqoise">
                    LPH Doa Bangsa Sukabumi adalah penyedia layanan konsultasi halal yang profesional dan terpercaya dengan metode pendekatan yang dapat disesuaikan dengan kebutuhan spesifik usaha Anda. Layanan konsultasi kami lengkap dan terjangkau, serta telah dilengkapi dengan pemahaman mendalam tentang regulasi halal yang berlaku di Indonesia.
                    <br><br>
                    Dengan layanan konsultasi kami, usaha Anda akan dapat mengoptimalkan persiapan sertifikasi halal dengan bimbingan profesional. Layanan ini memungkinkan Anda untuk mendapatkan pemahaman yang komprehensif tentang persyaratan sertifikasi halal dari mana saja dan kapan saja, sehingga memudahkan persiapan Anda tanpa harus terbatas pada satu lokasi.
                    <br><br>
                    Selain itu, konsultasi kami juga dapat disesuaikan dengan karakteristik spesifik usaha Anda, baik itu UKM, perusahaan menengah, atau korporasi besar. Dengan pendekatan yang personal, kami dapat memberikan solusi yang tepat sesuai dengan kapasitas dan kebutuhan usaha Anda.
                    <br><br>
                    Layanan konsultasi LPH Doa Bangsa Sukabumi juga dilengkapi dengan bimbingan penyusunan dokumen yang memudahkan pengusaha dalam mempersiapkan kelengkapan administrasi sertifikasi halal. Anda dapat mendapatkan panduan lengkap tentang dokumen-dokumen yang diperlukan, format yang harus diikuti, dan cara penyusunan yang benar. Dengan adanya bimbingan ini, Anda dapat mempersiapkan dokumen dengan lebih efektif dan mengurangi risiko penolakan.
                    <br><br>
                    Selain itu, konsultasi kami mencakup pelatihan personil untuk memastikan bahwa tim internal perusahaan memahami dan dapat menerapkan sistem jaminan halal dengan baik. Anda dapat mendapatkan pembekalan tentang prinsip-prinsip halal, sistem manajemen halal, dan implementasinya dalam proses produksi. Dengan demikian, Anda dapat membangun sistem yang berkelanjutan dan memastikan konsistensi kepatuhan terhadap standar halal.
                    <br><br>
                    Dengan LPH Doa Bangsa Sukabumi, Anda tidak perlu lagi khawatir tentang kerumitan persiapan sertifikasi halal. Layanan konsultasi kami memberikan solusi yang komprehensif dan terjangkau untuk memenuhi kebutuhan persiapan sertifikasi halal usaha Anda. Dapatkan layanan konsultasi kami sekarang dan tingkatkan peluang keberhasilan sertifikasi halal usaha Anda!
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

</body>
@include('partials.js')

</html>
