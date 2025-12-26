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
                    "name": "Layanan - Audit Makanan",
                    "item": "https://lpddb-sukabumi.com/audit-makanan"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Layanan - Audit Minuman",
                    "item": "https://lpddb-sukabumi.com/audit-minuman"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Layanan - Audit Kosmetik",
                    "item": "https://lpddb-sukabumi.com/audit-kosmetik"
                },
                {
                    "@type": "ListItem",
                    "position": 5,
                    "name": "Layanan - Audit Obat-obatan",
                    "item": "https://lpddb-sukabumi.com/audit-obat"
                },
                {
                    "@type": "ListItem",
                    "position": 6,
                    "name": "Layanan - Audit Bahan Baku",
                    "item": "https://lpddb-sukabumi.com/audit-bahan-baku"
                },
                {
                    "@type": "ListItem",
                    "position": 7,
                    "name": "Proses Audit Halal",
                    "item": "https://lpddb-sukabumi.com/proses-audit"
                },
                {
                    "@type": "ListItem",
                    "position": 8,
                    "name": "Biaya Audit",
                    "item": "https://lpddb-sukabumi.com/biaya-audit"
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
                    "name": "Apa yang dimaksud dengan Audit Halal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Audit Halal adalah proses pemeriksaan dan verifikasi yang sistematis untuk memastikan bahwa produk, bahan baku, proses produksi, dan fasilitas telah memenuhi semua persyaratan kehalalan sesuai dengan standar yang ditetapkan oleh BPJPH."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah Audit Halal dapat dilakukan untuk UKM?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, LPH Doa Bangsa Sukabumi memberikan layanan audit halal untuk semua skala usaha, dari UKM hingga perusahaan besar. Untuk UKM, kami memberikan pendampingan khusus dan solusi yang sesuai dengan kapasitas usaha."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa yang dimaksud dengan \"audit komprehensif\" pada layanan LPH Doa Bangsa Sukabumi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "\"Audit komprehensif\" berarti kami melakukan pemeriksaan menyeluruh terhadap seluruh aspek produksi, mulai dari bahan baku, proses produksi, fasilitas penyimpanan, hingga distribusi produk untuk memastikan kepatuhan terhadap standar halal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah audit halal dilakukan secara online atau offline?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Audit halal dilakukan melalui kombinasi pemeriksaan dokumen online dan kunjungan lapangan (offline) ke fasilitas produksi. Kunjungan lapangan diperlukan untuk memverifikasi langsung kondisi dan proses produksi."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana proses audit halal di fasilitas produksi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Proses audit di fasilitas produksi meliputi pemeriksaan bahan baku, observasi proses produksi, verifikasi peralatan, wawancara dengan personil, dan pengecekan sistem penyimpanan serta distribusi."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apa saja aspek yang diperiksa dalam audit halal, dan apakah aspek-aspek tersebut dapat disesuaikan dengan kebutuhan spesifik?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Audit halal mencakup pemeriksaan bahan baku, proses produksi, fasilitas, personil, peralatan, dan dokumen. Kami dapat menyesuaikan fokus audit sesuai dengan kebutuhan spesifik perusahaan dan karakteristik produk."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana biaya audit halal ditentukan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Biaya audit halal ditentukan berdasarkan jenis produk, kompleksitas proses produksi, jumlah lokasi fasilitas, dan cakupan audit yang diperlukan. Kami memberikan penawaran yang transparan setelah melakukan assessment awal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jika perusahaan memiliki beberapa lokasi produksi, apakah audit dilakukan di semua lokasi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, jika perusahaan memiliki beberapa lokasi produksi yang berbeda, audit perlu dilakukan di setiap lokasi untuk memastikan konsistensi penerapan sistem jaminan halal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah biaya audit sudah termasuk konsultasi dan pelatihan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, biaya audit sudah termasuk konsultasi awal, pelatihan personil terkait sistem jaminan halal, dan pendampingan selama proses audit berlangsung."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah biaya audit mencakup biaya perjalanan dan akomodasi auditor?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Biaya audit umumnya sudah mencakup biaya perjalanan dan akomodasi auditor untuk kunjungan lapangan dalam wilayah yang telah disepakati. Untuk lokasi yang sangat jauh, mungkin ada tambahan biaya."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana integrasi audit halal dengan sistem manajemen yang sudah ada di perusahaan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Kami melakukan pendekatan yang kolaboratif untuk mengintegrasikan sistem jaminan halal dengan sistem manajemen yang sudah ada di perusahaan, seperti ISO, HACCP, atau GMP."
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
        <section class="container mx-auto mt-20" data-aos="fade-right" data-aos-duration="1000">
            <div class="md:w-4/5 mx-auto rounded-xl bg-darkteal flex flex-col md:flex-row gap-10 p-5">
                <div class="md:w-[50%]">
                    <img src="img/sc1bg.png" alt="Audit Halal">
                </div>

                <div class="md:w-1/3 text-white md:mt-24">
                    <h1 class="md:text-3xl text-xl font-bold mb-2">Solusi Audit Halal untuk Perusahaan yang Ingin Tepat dan Akurat</h1>
                    <p>Meningkatkan Kepastian Kehalalan Produk dengan Audit Komprehensif oleh LPH Doa Bangsa Sukabumi</p>
                </div>
            </div>
        </section>
        {{-- End Section1 --}}

        {{-- Section2 --}}
        <section>
            <div class="wrapper flex items-center justify-center p-5">
                <div class="slider flex space-x-14 md:space-x-14 w-[1000px] overflow-hidden relative bg-white">
                    <div class="slidee space-x-10 h-[400px] flex items-center">
                        <div class=" w-[300px] bg-darkteal bg-cover py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="/audit-makanan">
                                <img src="img/rawat_inaps2.png" class="w-[30%] mx-auto" alt="Audit Makanan">
                                <p class="text-center text-white text-xl">Audit Makanan</p>
                            </a>
                        </div>
                        <div class=" w-[300px] bg-darkteal bg-over py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="/audit-minuman">
                                <img src="img/polis2.png" class="w-[30%] mx-auto" alt="Audit Minuman">
                                <p class="text-center text-white text-xl">Audit Minuman</p>
                            </a>
                        </div>
                        <div class=" w-[300px] bg-darkteal bg-cover py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="/audit-kosmetik">
                                <img src="img/farmasis2.png" class="w-[30%] mx-auto" alt="Audit Kosmetik">
                                <p class="text-center text-white text-xl">Audit Kosmetik</p>
                            </a>
                        </div>
                    </div>

                    <div class="slidee space-x-10 h-[400px] flex items-center">
                        <div class=" w-[300px] bg-darkteal bg-cover py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="/audit-obat">
                                <img src="img/penunjangs2.png" class="w-[30%] mx-auto" alt="Audit Obat-obatan">
                                <p class="text-center text-white text-xl">Audit Obat</p>
                            </a>
                        </div>
                        <div class="w-[300px] bg-darkteal bg-cover py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="/audit-bahan-baku">
                                <img src="img/antrians2.png" class="w-[30%] mx-auto" alt="Audit Bahan Baku">
                                <p class="text-center text-white text-xl">Audit Bahan Baku</p>
                            </a>
                        </div>
                        <div class="w-[300px] bg-darkteal bg-over py-7 transform hover:scale-110 snap-always snap-center rounded-xl">
                            <a href="/audit-jasa">
                                <img src="img/keuangans2.png" class="w-[30%] mx-auto" alt="Audit Jasa">
                                <p class="text-center text-white text-xl">Audit Jasa</p>
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
                <h1 class="md:w-1/4 mx-auto mb-10">Memberikan banyak manfaat untuk Perusahaan Anda</h1>
                <img src="img/SIMRS.png" width="60%" class="md:w-[45%] mx-auto" alt="Proses Audit Halal">
            </div>

            <div class="md:w-4/5 mx-auto text-deepturqoise" data-aos="fade-down" data-aos-duration="1000">
                <div class="text-center text-xl">
                    <h1 class="font-bold">Audit yang Efisien dan Akurat</h1>
                </div>
                <div class="md:w-[900px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-5 p-8">
                    <div class="border-2 border-deepturqoise p-5 rounded-md">
                        <div class="flex items-center font-semibold gap-x-2 mb-3">
                            <img src="img/pasien_sc4.png" width="30" alt="Bahan Baku">
                            <h2>Pemeriksaan Bahan Baku</h2>
                        </div>
                        <p>Audit menyeluruh terhadap semua bahan baku untuk memastikan kehalalan dan asal-usul yang jelas</p>
                    </div>
                    <div class="border-2 border-deepturqoise p-5 rounded-md">
                        <div class="flex items-center font-semibold gap-x-2 mb-3">
                            <img src="img/web_sc4.png" width="30" alt="Proses Produksi">
                            <h2>Audit Proses Produksi</h2>
                        </div>
                        <p>Verifikasi seluruh tahapan proses produksi untuk mencegah kontaminasi dan memastikan kepatuhan halal</p>
                    </div>
                    <div class="border-2 border-deepturqoise p-5 rounded-md">
                        <div class="flex items-center font-semibold gap-x-2 mb-3">
                            <img src="img/rekam_sc4.png" width="30" alt="Dokumen">
                            <h2>Verifikasi Dokumen</h2>
                        </div>
                        <p>Pemeriksaan kelengkapan dan keabsahan dokumen pendukung kehalalan produk</p>
                    </div>
                    <div class="border-2 border-deepturqoise p-5 rounded-md">
                        <div class="flex items-center font-semibold gap-x-2 mb-3">
                            <img src="img/keuangan_sc4.png" width="30" alt="Fasilitas">
                            <h2>Audit Fasilitas</h2>
                        </div>
                        <p>Pemeriksaan kondisi fasilitas produksi, penyimpanan, dan distribusi untuk memastikan standar halal</p>
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
                    <h1>Audit Lapangan yang Mendalam</h1>
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
                            Observasi langsung proses produksi untuk memastikan tidak ada pelanggaran prinsip halal
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
                            Wawancara dengan personil kunci untuk memahami pemahaman dan implementasi sistem jaminan halal
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
                            Pemeriksaan peralatan produksi untuk memastikan kebersihan dan tidak adanya kontaminasi silang
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
                            Dokumentasi temuan audit secara rinci dengan foto dan catatan untuk referensi dan tindak lanjut
                        </li>
                    </ul>

                    <div class="md:w-[500px] order-1 md:order-2">
                        <img src="img/manajemen-inap.png" alt="Audit Lapangan">
                        <div class="bg-darkteal text-white font-semibold px-10 py-16">
                            <p>Dengan menggunakan jasa audit LPH Doa Bangsa Sukabumi, perusahaan dapat meningkatkan kepercayaan konsumen terhadap kehalalan produk mereka. Audit komprehensif kami membantu mengidentifikasi potensi risiko, memberikan rekomendasi perbaikan, dan memastikan kepatuhan terhadap standar halal yang berlaku.
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
                <h1>Mengapa memilih Audit Halal oleh LPH Doa Bangsa Sukabumi?</h1>
            </div>

            <div class="flex justify-center gap-5 p-5">
                <img src="img/line-dot.png" class="md:w-6" alt="">
                <ul class="flex flex-col text-deepturqoise font-medium gap-3">
                    <li>Tim auditor yang berpengalaman dan kompeten di bidang pemeriksaan halal</li>
                    <li>Pendekatan audit yang komprehensif dan sesuai dengan standar BPJPH</li>
                    <li>Proses audit yang transparan dengan komunikasi intensif dengan klien</li>
                    <li>Fleksibilitas dalam penyesuaian cakupan audit sesuai kebutuhan spesifik perusahaan</li>
                    <li>Laporan audit yang rinci dan mudah dipahami dengan rekomendasi tindakan perbaikan</li>
                    <li>Pendampingan pasca-audit untuk implementasi rekomendasi dan perbaikan sistem</li>
                </ul>
            </div>
        </section>
        {{-- End Section5 --}}

        {{-- Section6 --}}
        <section class="container mx-auto my-20 p-5" data-aos="fade-down" data-aos-duration="1000">
            <div class="text-center text-deepturqoise mb-10">
                <h1 class="md:text-3xl text-2xl font-bold mb-3">Jenis Audit Halal</h1>
                <h2 class="font-semibold">Kami menyediakan berbagai jenis layanan audit sesuai kebutuhan</h2>
                <p>LPH Doa Bangsa Sukabumi memberikan layanan audit halal yang komprehensif <br>
                    untuk memastikan kepatuhan terhadap standar kehalalan</p>
            </div>

            <div class="flex flex-wrap justify-center gap-10 text-darkteal">
                <div class="w-[120px] mx-auto md:mx-0 py-2 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/typea_sc7.png" class="w-[40%] mx-auto" alt="Audit Awal">
                    <h2 class="text-center text-sm">Audit Awal</h2>
                </div>
                <div class="w-[120px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/typeb_sc7.png" class="w-[60%] mx-auto" alt="Audit Rutin">
                    <h2 class="text-center text-sm">Audit Rutin</h2>
                </div>
                <div class="w-[120px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/typec_sc7.png" class="w-[60%] mx-auto" alt="Audit Khusus">
                    <h2 class="text-center text-sm">Audit Khusus</h2>
                </div>
                <div class="w-[120px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/typed_sc7.png" class="w-[50%] mx-auto" alt="Surveilan">
                    <h2 class="text-center text-sm">Surveilan</h2>
                </div>
            </div>
        </section>
        {{-- End Section6 --}}

        {{-- FAQ --}}
        <div class="py-10 md:pt-20 md:pb-28 bg-[#f1f4f7] mt-10 md:mt-20" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>Audit Halal LPH Doa Bangsa Sukabumi</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apa yang dimaksud dengan Audit Halal?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. Apakah Audit Halal dapat dilakukan untuk UKM?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Apa yang dimaksud dengan "audit komprehensif" pada layanan LPH Doa Bangsa Sukabumi?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Apakah audit halal dilakukan secara online atau offline?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '5')">5. Bagaimana proses audit halal di fasilitas produksi?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '6')">6. Apa saja aspek yang diperiksa dalam audit halal, dan apakah aspek-aspek tersebut dapat disesuaikan dengan kebutuhan spesifik?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '7')">7. Bagaimana biaya audit halal ditentukan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '8')">8. Jika perusahaan memiliki beberapa lokasi produksi, apakah audit dilakukan di semua lokasi?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '9')">9. Apakah biaya audit sudah termasuk konsultasi dan pelatihan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '10')">10. Apakah biaya audit mencakup biaya perjalanan dan akomodasi auditor?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '11')">11. Bagaimana integrasi audit halal dengan sistem manajemen yang sudah ada di perusahaan?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa yang dimaksud dengan Audit Halal?</h3>
                    <p>Audit Halal adalah proses pemeriksaan dan verifikasi yang sistematis untuk memastikan bahwa produk, bahan baku, proses produksi, dan fasilitas telah memenuhi semua persyaratan kehalalan sesuai dengan standar yang ditetapkan oleh BPJPH.</p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah Audit Halal dapat dilakukan untuk UKM?</h3>
                    <p>Ya, LPH Doa Bangsa Sukabumi memberikan layanan audit halal untuk semua skala usaha, dari UKM hingga perusahaan besar. Untuk UKM, kami memberikan pendampingan khusus dan solusi yang sesuai dengan kapasitas usaha.</p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa yang dimaksud dengan "audit komprehensif" pada layanan LPH Doa Bangsa Sukabumi?</h3>
                    <p>"Audit komprehensif" berarti kami melakukan pemeriksaan menyeluruh terhadap seluruh aspek produksi, mulai dari bahan baku, proses produksi, fasilitas penyimpanan, hingga distribusi produk untuk memastikan kepatuhan terhadap standar halal.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah audit halal dilakukan secara online atau offline?</h3>
                    <p>Audit halal dilakukan melalui kombinasi pemeriksaan dokumen online dan kunjungan lapangan (offline) ke fasilitas produksi. Kunjungan lapangan diperlukan untuk memverifikasi langsung kondisi dan proses produksi.</p>
                </div>

                <div id="5" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana proses audit halal di fasilitas produksi?</h3>
                    <p>Proses audit di fasilitas produksi meliputi pemeriksaan bahan baku, observasi proses produksi, verifikasi peralatan, wawancara dengan personil, dan pengecekan sistem penyimpanan serta distribusi.</p>
                </div>

                <div id="6" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa saja aspek yang diperiksa dalam audit halal, dan apakah aspek-aspek tersebut dapat disesuaikan dengan kebutuhan spesifik?</h3>
                    <p>Audit halal mencakup pemeriksaan bahan baku, proses produksi, fasilitas, personil, peralatan, dan dokumen. Kami dapat menyesuaikan fokus audit sesuai dengan kebutuhan spesifik perusahaan dan karakteristik produk.</p>
                </div>

                <div id="7" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana biaya audit halal ditentukan?</h3>
                    <p>Biaya audit halal ditentukan berdasarkan jenis produk, kompleksitas proses produksi, jumlah lokasi fasilitas, dan cakupan audit yang diperlukan. Kami memberikan penawaran yang transparan setelah melakukan assessment awal.</p>
                </div>

                <div id="8" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Jika perusahaan memiliki beberapa lokasi produksi, apakah audit dilakukan di semua lokasi?</h3>
                    <p>Ya, jika perusahaan memiliki beberapa lokasi produksi yang berbeda, audit perlu dilakukan di setiap lokasi untuk memastikan konsistensi penerapan sistem jaminan halal.</p>
                </div>

                <div id="9" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah biaya audit sudah termasuk konsultasi dan pelatihan?</h3>
                    <p>Ya, biaya audit sudah termasuk konsultasi awal, pelatihan personil terkait sistem jaminan halal, dan pendampingan selama proses audit berlangsung.</p>
                </div>

                <div id="10" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah biaya audit mencakup biaya perjalanan dan akomodasi auditor?</h3>
                    <p>Biaya audit umumnya sudah mencakup biaya perjalanan dan akomodasi auditor untuk kunjungan lapangan dalam wilayah yang telah disepakati. Untuk lokasi yang sangat jauh, mungkin ada tambahan biaya.</p>
                </div>

                <div id="11" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana integrasi audit halal dengan sistem manajemen yang sudah ada di perusahaan?</h3>
                    <p>Kami melakukan pendekatan yang kolaboratif untuk mengintegrasikan sistem jaminan halal dengan sistem manajemen yang sudah ada di perusahaan, seperti ISO, HACCP, atau GMP.</p>
                </div>
            </div>

            {{-- Mobile (Accordion) --}}
            <div class="md:hidden mt-14">
                <div class="mt-5 md:mt-0">
                    <div class="relative md:w-[450px]">
                        <input type="checkbox" id="input1" class="absolute peer opacity-0">
                        <label for="input1"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apa
                            yang dimaksud dengan Audit Halal?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>Audit Halal adalah proses pemeriksaan dan verifikasi yang sistematis untuk memastikan bahwa produk, bahan baku, proses produksi, dan fasilitas telah memenuhi semua persyaratan kehalalan sesuai dengan standar yang ditetapkan oleh BPJPH.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            Audit Halal dapat dilakukan untuk UKM?
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
                            <p>Ya, LPH Doa Bangsa Sukabumi memberikan layanan audit halal untuk semua skala usaha, dari UKM hingga perusahaan besar.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            yang dimaksud dengan "audit komprehensif" pada layanan LPH Doa Bangsa Sukabumi?
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
                            <p>"Audit komprehensif" berarti kami melakukan pemeriksaan menyeluruh terhadap seluruh aspek produksi untuk memastikan kepatuhan terhadap standar halal.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            audit halal dilakukan secara online atau offline?
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
                            <p>Audit halal dilakukan melalui kombinasi pemeriksaan dokumen online dan kunjungan lapangan (offline) ke fasilitas produksi.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input5" class="absolute peer opacity-0">
                        <label for="input5"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            proses audit halal di fasilitas produksi?
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
                            <p>Proses audit di fasilitas produksi meliputi pemeriksaan bahan baku, observasi proses produksi, verifikasi peralatan, wawancara dengan personil, dan pengecekan sistem penyimpanan serta distribusi.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input6" class="absolute peer opacity-0">
                        <label for="input6"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apa
                            saja aspek yang diperiksa dalam audit halal, dan apakah aspek-aspek tersebut dapat disesuaikan dengan kebutuhan spesifik?
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
                            <p>Audit halal mencakup pemeriksaan bahan baku, proses produksi, fasilitas, personil, peralatan, dan dokumen. Kami dapat menyesuaikan fokus audit sesuai dengan kebutuhan spesifik perusahaan.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input7" class="absolute peer opacity-0">
                        <label for="input7"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            biaya audit halal ditentukan?
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
                            <p>Biaya audit halal ditentukan berdasarkan jenis produk, kompleksitas proses produksi, jumlah lokasi fasilitas, dan cakupan audit yang diperlukan.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input8" class="absolute peer opacity-0">
                        <label for="input8"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Jika
                            perusahaan memiliki beberapa lokasi produksi, apakah audit dilakukan di semua lokasi?
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
                            <p>Ya, jika perusahaan memiliki beberapa lokasi produksi yang berbeda, audit perlu dilakukan di setiap lokasi untuk memastikan konsistensi penerapan sistem jaminan halal.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input9" class="absolute peer opacity-0">
                        <label for="input9"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            biaya audit sudah termasuk konsultasi dan pelatihan?
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
                            <p>Ya, biaya audit sudah termasuk konsultasi awal, pelatihan personil terkait sistem jaminan halal, dan pendampingan selama proses audit berlangsung.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input10" class="absolute peer opacity-0">
                        <label for="input10"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            biaya audit mencakup biaya perjalanan dan akomodasi auditor?
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
                            <p>Biaya audit umumnya sudah mencakup biaya perjalanan dan akomodasi auditor untuk kunjungan lapangan dalam wilayah yang telah disepakati.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input11" class="absolute peer opacity-0">
                        <label for="input11"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            integrasi audit halal dengan sistem manajemen yang sudah ada di perusahaan?
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
                            <p>Kami melakukan pendekatan yang kolaboratif untuk mengintegrasikan sistem jaminan halal dengan sistem manajemen yang sudah ada di perusahaan.</p>
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
                <h1 class="font-bold mb-5">Mulai Audit Halal Anda Sekarang!</h1>
                <p>Dapatkan Kepastian Kehalalan Produk dengan Audit Komprehensif oleh LPH Doa Bangsa Sukabumi</p>
            </div>
            <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-7 mb-20">
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-emerald md:w-[220px] text-white font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/demo.png" width="25" alt="Demo">
                        <a href="/whatsapp">Jadwal Konsultasi</a>
                    </div>
                </a>
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                        <a href="/whatsapp">Auditor Kami</a>
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

</body>
@include('partials.js')

</html>
