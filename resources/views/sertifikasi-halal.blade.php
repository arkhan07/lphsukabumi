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
                    "name": "Layanan - Sertifikasi Makanan",
                    "item": "https://lpddb-sukabumi.com/sertifikasi-makanan"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Layanan - Sertifikasi Minuman",
                    "item": "https://lpddb-sukabumi.com/sertifikasi-minuman"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Layanan - Sertifikasi Kosmetik",
                    "item": "https://lpddb-sukabumi.com/sertifikasi-kosmetik"
                },
                {
                    "@type": "ListItem",
                    "position": 5,
                    "name": "Layanan - Sertifikasi Obat-obatan",
                    "item": "https://lpddb-sukabumi.com/sertifikasi-obat"
                },
                {
                    "@type": "ListItem",
                    "position": 6,
                    "name": "Layanan - Sertifikasi Bahan Baku",
                    "item": "https://lpddb-sukabumi.com/sertifikasi-bahan-baku"
                },
                {
                    "@type": "ListItem",
                    "position": 7,
                    "name": "Proses Sertifikasi",
                    "item": "https://lpddb-sukabumi.com/proses-sertifikasi"
                },
                {
                    "@type": "ListItem",
                    "position": 8,
                    "name": "Biaya Sertifikasi",
                    "item": "https://lpddb-sukabumi.com/biaya"
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
                    "name": "Apa itu LPH Doa Bangsa Sukabumi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang telah terdaftar dan diakui secara resmi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Kami berwenang melakukan pemeriksaan dan audit halal untuk berbagai jenis produk."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Berapa lama proses sertifikasi halal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Proses sertifikasi halal umumnya memerlukan waktu 30-60 hari kerja, tergantung pada kompleksitas produk, kelengkapan dokumen, dan kesiapan fasilitas produksi."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Dokumen apa saja yang diperlukan untuk sertifikasi halal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Dokumen yang diperlukan antara lain: akta perusahaan, SIUP, NIB, daftar produk, spesifikasi bahan baku, diagram alir proses, sertifikat halal bahan baku (jika ada), dan dokumen pendukung lainnya."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah sertifikat halal dari LPH Doa Bangsa Sukabumi diakui secara nasional?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, sertifikat halal yang kami terbitkan diakui secara resmi oleh BPJPH dan berlaku di seluruh wilayah Indonesia."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Berapa biaya sertifikasi halal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Biaya sertifikasi bervariasi tergantung pada jenis produk, jumlah varian, kompleksitas proses, dan lokasi fasilitas. Kami memberikan penawaran yang transparan setelah melakukan assessment awal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah LPH Doa Bangsa Sukabumi melayani sertifikasi untuk UKM?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Tentu saja. Kami memberikan layanan sertifikasi halal untuk semua skala usaha, dari UKM hingga perusahaan besar."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana jika produk saya menggunakan bahan impor?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Kami tetap dapat melakukan sertifikasi untuk produk yang menggunakan bahan impor dengan syarat tersedia dokumen yang menunjukkan kehalalan bahan impor tersebut."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Berapa lama masa berlaku sertifikat halal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Sertifikat halal umumnya berlaku selama 4 (empat) tahun dengan kewajiban surveilan tahunan untuk memastikan konsistensi penerapan sistem jaminan halal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah ada pelatihan yang disediakan untuk tim internal perusahaan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, kami menyediakan pelatihan dan workshop tentang sistem jaminan halal, persiapan sertifikasi, dan pemahaman regulasi halal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara memulai proses sertifikasi dengan LPH Doa Bangsa Sukabumi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Anda dapat menghubungi kami melalui WhatsApp, telepon, atau mengisi form konsultasi di website kami untuk pertemuan awal dan penyusunan rencana sertifikasi."
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
        <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center gap-10 p-5">
                <div class="md:w-[40%]">
                    <img src="img/klinik-p.png" alt="Proses Sertifikasi Halal">
                </div>
                <div class="md:w-1/3">
                    <h1 class="text-darkgreen text-3xl font-semibold mb-5">Sertifikasi Halal dengan Proses Cepat dan Terpercaya</h1>
                    <p class="text-deepturqoise mb-16 md:text-justify">LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang telah terdaftar dan diakui secara resmi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Kami menyediakan layanan sertifikasi halal komprehensif untuk berbagai jenis produk, mulai dari makanan, minuman, kosmetik, obat-obatan, hingga bahan baku industri.
                        <br><br>
                        Dengan tim auditor yang berpengalaman dan kompeten, kami memastikan setiap proses pemeriksaan dilakukan sesuai dengan standar yang ditetapkan BPJPH. Kami berkomitmen membantu pelaku usaha mendapatkan sertifikasi halal yang sah dan terpercaya dengan proses yang efisien dan transparan.
                    </p>

                    <a role="button">
                        <div class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md">
                            <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                            <a href="/whatsapp">Hubungi Kami</a>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <hr class="w-3/5 mx-auto">
        {{-- End Section1 --}}

        {{-- Section2 --}}
        <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
            <div class="flex flex-col md:flex-row justify-center gap-64 p-5">
                <div class="md:w-1/4 text-deepturqoise">
                    <div>
                        <h1 class="md:text-3xl md:no-underline text-xl underline">Proses Sertifikasi Halal</h1>
                        <h2 class="md:text-3xl mb-2 mt-5">Tahapan Sertifikasi Halal <br> yang Transparan</h2>
                        <p class="">Proses sertifikasi halal di LPH Doa Bangsa Sukabumi dilakukan secara bertahap dengan prinsip transparansi dan profesionalisme. Setiap tahap dirancang untuk memastikan produk Anda memenuhi semua persyaratan kehalalan sesuai standar nasional.</p>
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
                                        Proses Sertifikasi Halal Lengkap
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
                                        Proses sertifikasi halal di LPH Doa Bangsa Sukabumi meliputi beberapa tahapan penting:
                                        <br><br>
                                        1. Konsultasi Awal: Klien melakukan konsultasi untuk memahami persyaratan dan proses sertifikasi.
                                        <br><br>
                                        2. Pendaftaran dan Pengumpulan Dokumen: Klien mengisi formulir pendaftaran dan mengumpulkan dokumen yang diperlukan.
                                        <br><br>
                                        3. Assessment Dokumen: Tim auditor kami mengevaluasi kelengkapan dan keabsahan dokumen yang diajukan.
                                        <br><br>
                                        4. Audit Lapangan: Dilakukan kunjungan ke fasilitas produksi untuk memverifikasi proses dan bahan baku.
                                        <br><br>
                                        5. Uji Laboratorium (jika diperlukan): Pengujian sampel produk di laboratorium terakreditasi.
                                        <br><br>
                                        6. Evaluasi Hasil: Tim melakukan evaluasi menyeluruh berdasarkan hasil audit dan uji laboratorium.
                                        <br><br>
                                        7. Penerbitan Sertifikat: Jika memenuhi persyaratan, sertifikat halal diterbitkan.
                                        <br><br>
                                        8. Surveilan Tahunan: Pemantauan berkala untuk memastikan konsistensi penerapan sistem jaminan halal.
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
                        <h2 class="font-semibold mb-3">Keunggulan Proses Kami</h2>
                        <p>Proses yang jelas, komunikasi yang intensif, dan pendampingan dari awal hingga sertifikat diterbitkan.</p>
                    </div>
                </div>

                <div class="md:w-1/3">
                    <img src="img/p-solusi-rawat.png" width="100%" class="" alt="Proses Sertifikasi">
                    <ul
                        class="flex flex-col md:flex-row md:items-center gap-y-2  gap-x-5 mt-8 font-semibold text-deepturqoise">
                        <li class="flex items-center gap-x-2">
                            <img src="img/checkfill.png" width="30" alt="chekcfill">
                            Proses Transparan
                        </li>
                        <li class="flex items-cente gap-x-2">
                            <img src="img/checkfill.png" width="30" alt="chekcfill">
                            Tim Auditor Berpengalaman
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
                    <img src="img/p-solusi-inap.png" width="90%" alt="Audit Lapangan">
                    <ul
                        class="flex flex-col md:flex-row md:items-center gap-y-2 gap-x-32 mt-8 font-semibold text-deepturqoise">
                        <li class="flex items-center gap-x-2">
                            <img src="img/checkfill.png" width="30" alt="chekcfill">
                            Audit Komprehensif
                        </li>
                        <li class="flex items-cente gap-x-2">
                            <img src="img/checkfill.png" width="30" alt="chekcfill">
                            Pendampingan Penuh
                        </li>
                    </ul>
                </div>

                <div class="md:w-[500px] text-deepturqoise">
                    <div>
                        <h1 class="md:text-3xl md:no-underline text-xl underline">Audit dan Pemeriksaan</h1>
                        <h2 class="md:text-3xl text-2xl mb-2 mt-5">Audit Menyeluruh <br>
                            untuk Kepastian Halal</h2>
                        <p class="">Kami melakukan audit komprehensif terhadap seluruh aspek produksi, mulai dari bahan baku, proses produksi, fasilitas penyimpanan, hingga distribusi produk. Tim auditor kami yang kompeten akan memastikan setiap detail diperiksa dengan teliti.
                            <br><br>
                            Audit dilakukan dengan pendekatan yang kolaboratif, membantu pelaku usaha memahami dan menerapkan sistem jaminan halal yang benar sesuai dengan standar yang berlaku.
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
                                        Proses Audit Halal
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
                                        Audit halal yang kami lakukan mencakup beberapa aspek penting:
                                        <br><br>
                                        1. Audit Bahan Baku: Pemeriksaan kehalalan semua bahan baku, bahan tambahan, dan bahan penolong yang digunakan.
                                        <br><br>
                                        2. Audit Proses Produksi: Verifikasi seluruh tahapan proses produksi, termasuk pencampuran, pengolahan, pengemasan, dan penyimpanan.
                                        <br><br>
                                        3. Audit Fasilitas: Pemeriksaan kondisi fasilitas produksi, kebersihan, dan pencegahan kontaminasi silang.
                                        <br><br>
                                        4. Audit Dokumen: Verifikasi semua dokumen pendukung, termasuk sertifikat halal bahan baku, MSDS, dan spesifikasi produk.
                                        <br><br>
                                        5. Audit Sistem: Evaluasi sistem manajemen halal yang diterapkan perusahaan.
                                        <br><br>
                                        6. Audit Personil: Verifikasi pemahaman dan kompetensi personil terkait sistem jaminan halal.
                                        <br><br>
                                        7. Audit Peralatan: Pemeriksaan kondisi dan kebersihan peralatan produksi.
                                        <br><br>
                                        Setiap temuan audit akan didokumentasikan secara rinci dan dibahas dengan perusahaan untuk perbaikan dan peningkatan sistem.
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
                        <h2 class="font-semibold mb-3">Aspek yang Diaudit</h2>
                        <p>Audit kami mencakup semua aspek yang relevan dengan kehalalan produk</p>
                        <div class="flex flex-col md:flex-row gap-10 mb-3 ms-5">
                            <ul class="marker:text-3xl list-image-check">
                                <li>Bahan Baku</li>
                                <li>Proses Produksi</li>
                                <li>Fasilitas Produksi</li>
                                <li>Sistem Penyimpanan</li>
                            </ul>
                            <ul class="marker:text-3xl list-image-check">
                                <li>Dokumen Pendukung</li>
                                <li>Rantai Pasok</li>
                                <li>Personil</li>
                                <li>Peralatan</li>
                            </ul>
                            <ul class="marker:text-3xl list-image-check">
                                <li>Sistem Manajemen</li>
                                <li>Pengemasan</li>
                                <li>Distribusi</li>
                                <li>Pelabelan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-10">
                        <h2 class="font-semibold mb-3">Output Audit</h2>
                        <ul class="marker:text-3xl list-image-check ms-5">
                            <li>Laporan Audit Lengkap</li>
                            <li>Rekomendasi Perbaikan</li>
                            <li>Sertifikat Halal (jika lolos)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex justify-center my-10">
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-darkgreen md:w-[220px] text-white font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/demo.png" width="25" alt="Demo">
                        <a href="{{ route('whatsapp') }}">Ajukan Konsultasi</a>
                    </div>
                </a>
            </div>
        </section>
        {{-- End Section3 --}}

        {{-- FAQ --}}
        <div class="py-10 md:pt-20 md:pb-28 bg-[#f1f4f7] mt-10 md:mt-20" data-aos="fade-down"
            data-aos-duration="1000">
            <div class="text max-w-screen-lg mx-auto text-center text-darkgreen text-sm md:text-xl px-5 md:px-0">
                <h1 class="font-bold text-2xl md:text-5xl mb-3">FAQ</h1>
                <p>Layanan Sertifikasi Halal LPH Doa Bangsa Sukabumi</p>
            </div>

            <div class="max-w-screen-lg mx-auto bg-white rounded-lg ps-10 py-10 hidden md:flex mt-10">
                <div id="child-scroll" class="tab w-1/3 h-[450px] overflow-y-auto space-y-3">
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none active"
                        onclick="openCity(event, '1')">1. Apa itu LPH Doa Bangsa Sukabumi?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '2')">2. Berapa lama proses sertifikasi halal?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '3')">3. Dokumen apa saja yang diperlukan untuk sertifikasi halal?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '4')">4. Apakah sertifikat halal dari LPH Doa Bangsa Sukabumi diakui secara nasional?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '5')">5. Berapa biaya sertifikasi halal?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '6')">6. Apakah LPH Doa Bangsa Sukabumi melayani sertifikasi untuk UKM?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '7')">7. Bagaimana jika produk saya menggunakan bahan impor?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '8')">8. Berapa lama masa berlaku sertifikat halal?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '9')">9. Apakah ada pelatihan yang disediakan untuk tim internal perusahaan?</button>
                    <button
                        class="tablinks overflow-hidden text-lg w-full py-6 px-4 text-left rounded-lg hover:bg-darkteal hover:text-white focus:outline-none"
                        onclick="openCity(event, '10')">10. Bagaimana cara memulai proses sertifikasi dengan LPH Doa Bangsa Sukabumi?</button>
                </div>

                <div id="1" class="tabcontent text-lg w-2/3 px-16 h-96 transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apa itu LPH Doa Bangsa Sukabumi?</h3>
                    <p>LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang telah terdaftar dan diakui secara resmi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Kami berwenang melakukan pemeriksaan dan audit halal untuk berbagai jenis produk seperti makanan, minuman, kosmetik, obat-obatan, dan bahan baku industri.</p>
                </div>

                <div id="2" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Berapa lama proses sertifikasi halal?</h3>
                    <p>Proses sertifikasi halal umumnya memerlukan waktu 30-60 hari kerja, tergantung pada kompleksitas produk, kelengkapan dokumen, dan kesiapan fasilitas produksi. Kami berusaha memproses secepat mungkin tanpa mengorbankan kualitas pemeriksaan.</p>
                </div>

                <div id="3" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Dokumen apa saja yang diperlukan untuk sertifikasi halal?</h3>
                    <p>Dokumen yang diperlukan antara lain: akta perusahaan, SIUP, NIB, daftar produk, spesifikasi bahan baku, diagram alir proses, sertifikat halal bahan baku (jika ada), dan dokumen pendukung lainnya. Tim kami akan memberikan checklist lengkap sesuai dengan jenis produk Anda.</p>
                </div>

                <div id="4" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah sertifikat halal dari LPH Doa Bangsa Sukabumi diakui secara nasional?</h3>
                    <p>Ya, sertifikat halal yang kami terbitkan diakui secara resmi oleh BPJPH dan berlaku di seluruh wilayah Indonesia. Sertifikat tersebut dapat digunakan untuk keperluan perdagangan, ekspor, dan pemenuhan regulasi lainnya.</p>
                </div>

                <div id="5" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Berapa biaya sertifikasi halal?</h3>
                    <p>Biaya sertifikasi bervariasi tergantung pada jenis produk, jumlah varian, kompleksitas proses, dan lokasi fasilitas. Kami memberikan penawaran yang transparan setelah melakukan assessment awal. Silakan hubungi kami untuk konsultasi dan penawaran yang disesuaikan dengan kebutuhan Anda.</p>
                </div>

                <div id="6" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah LPH Doa Bangsa Sukabumi melayani sertifikasi untuk UKM?</h3>
                    <p>Tentu saja. Kami memberikan layanan sertifikasi halal untuk semua skala usaha, dari UKM hingga perusahaan besar. Untuk UKM, kami memberikan pendampingan khusus dan solusi yang sesuai dengan kapasitas usaha.</p>
                </div>

                <div id="7" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana jika produk saya menggunakan bahan impor?</h3>
                    <p>Kami tetap dapat melakukan sertifikasi untuk produk yang menggunakan bahan impor. Yang penting adalah tersedia dokumen yang menunjukkan kehalalan bahan impor tersebut, seperti sertifikat halal dari lembaga yang diakui atau dokumen lain yang dapat dipertanggungjawabkan.</p>
                </div>

                <div id="8" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Berapa lama masa berlaku sertifikat halal?</h3>
                    <p>Sertifikat halal umumnya berlaku selama 4 (empat) tahun. Namun, terdapat kewajiban untuk melakukan surveilan tahunan untuk memastikan konsistensi penerapan sistem jaminan halal. Kami akan mengingatkan Anda ketika mendekati masa perpanjangan sertifikat.</p>
                </div>

                <div id="9" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Apakah ada pelatihan yang disediakan untuk tim internal perusahaan?</h3>
                    <p>Ya, kami menyediakan pelatihan dan workshop tentang sistem jaminan halal, persiapan sertifikasi, dan pemahaman regulasi halal. Pelatihan dapat disesuaikan dengan kebutuhan spesifik perusahaan Anda.</p>
                </div>

                <div id="10" class="tabcontent text-lg w-2/3 px-16 h-96 hidden transition-opacity">
                    <h3 class="text-2xl font-bold text-darkgreen mb-4">Bagaimana cara memulai proses sertifikasi dengan LPH Doa Bangsa Sukabumi?</h3>
                    <p>Anda dapat menghubungi kami melalui WhatsApp, telepon, atau mengisi form konsultasi di website kami. Tim kami akan menjadwalkan pertemuan awal untuk memahami kebutuhan Anda, memberikan penjelasan proses, dan menyusun rencana sertifikasi yang sesuai dengan kondisi usaha Anda.</p>
                </div>
            </div>

            {{-- Mobile (Accordion) --}}
            <div class="md:hidden mt-14">
                <div class="mt-5 md:mt-0">
                    <div class="relative md:w-[450px]">
                        <input type="checkbox" id="input1" class="absolute peer opacity-0">
                        <label for="input1"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Apa
                            itu LPH Doa Bangsa Sukabumi?</label>
                        <div
                            class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: #166F61;transform: ;msFilter:;">
                                <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                            </svg>
                        </div>
                        <div
                            class="max-h-0 overflow-hidden peer-checked:max-h-full ps-9 pe-7 text-base mt-8 md:mt-0 text-deepturqoise opacity-95">
                            <p>LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang telah terdaftar dan diakui secara resmi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Kami berwenang melakukan pemeriksaan dan audit halal untuk berbagai jenis produk.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0">
                        <label for="input2"
                            class="flex items-center ps-4 text-base pe-16 md:mx-0 md:pe-10 h-[50px] ms-3 cursor-pointer select-none">Berapa
                            lama proses sertifikasi halal?
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
                            <p>Proses sertifikasi halal umumnya memerlukan waktu 30-60 hari kerja, tergantung pada kompleksitas produk, kelengkapan dokumen, dan kesiapan fasilitas produksi.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-3"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0">
                        <label for="input3"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Dokumen
                            apa saja yang diperlukan untuk sertifikasi halal?
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
                            <p>Dokumen yang diperlukan antara lain: akta perusahaan, SIUP, NIB, daftar produk, spesifikasi bahan baku, diagram alir proses, sertifikat halal bahan baku (jika ada), dan dokumen pendukung lainnya.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-10">
                        <input type="checkbox" id="input4" class="absolute peer opacity-0">
                        <label for="input4"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            sertifikat halal dari LPH Doa Bangsa Sukabumi diakui secara nasional?
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
                            <p>Ya, sertifikat halal yang kami terbitkan diakui secara resmi oleh BPJPH dan berlaku di seluruh wilayah Indonesia.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input5" class="absolute peer opacity-0">
                        <label for="input5"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Berapa
                            biaya sertifikasi halal?
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
                            <p>Biaya sertifikasi bervariasi tergantung pada jenis produk, jumlah varian, kompleksitas proses, dan lokasi fasilitas. Kami memberikan penawaran yang transparan setelah melakukan assessment awal.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-8">
                        <input type="checkbox" id="input6" class="absolute peer opacity-0">
                        <label for="input6"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            LPH Doa Bangsa Sukabumi melayani sertifikasi untuk UKM?
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
                            <p>Tentu saja. Kami memberikan layanan sertifikasi halal untuk semua skala usaha, dari UKM hingga perusahaan besar.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-5"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input7" class="absolute peer opacity-0">
                        <label for="input7"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            jika produk saya menggunakan bahan impor?
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
                            <p>Kami tetap dapat melakukan sertifikasi untuk produk yang menggunakan bahan impor dengan syarat tersedia dokumen yang menunjukkan kehalalan bahan impor tersebut.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-16">
                        <input type="checkbox" id="input8" class="absolute peer opacity-0">
                        <label for="input8"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Berapa
                            lama masa berlaku sertifikat halal?
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
                            <p>Sertifikat halal umumnya berlaku selama 4 (empat) tahun dengan kewajiban surveilan tahunan untuk memastikan konsistensi penerapan sistem jaminan halal.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input9" class="absolute peer opacity-0">
                        <label for="input9"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Apakah
                            ada pelatihan yang disediakan untuk tim internal perusahaan?
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
                            <p>Ya, kami menyediakan pelatihan dan workshop tentang sistem jaminan halal, persiapan sertifikasi, dan pemahaman regulasi halal.</p>
                        </div>
                    </div>

                    <div class="w-[200px] bg-deepturqoise h-[1px] ms-7 mt-4"></div>

                    <div class="relative md:w-[450px] mt-14">
                        <input type="checkbox" id="input10" class="absolute peer opacity-0">
                        <label for="input10"
                            class="flex items-center ps-4 text-base pe-16 md:pe-10 md:mx-0 h-[50px] ms-3 cursor-pointer select-none">Bagaimana
                            cara memulai proses sertifikasi dengan LPH Doa Bangsa Sukabumi?
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
                            <p>Anda dapat menghubungi kami melalui WhatsApp, telepon, atau mengisi form konsultasi di website kami untuk pertemuan awal dan penyusunan rencana sertifikasi.</p>
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
                <h1 class="text-3xl font-bold mb-3">Jenis Produk yang Disertifikasi</h1>
                <h2 class="font-semibold">Kami melayani sertifikasi halal untuk berbagai jenis produk</h2>
                <p>LPH Doa Bangsa Sukabumi siap membantu sertifikasi produk Anda sesuai dengan standar BPJPH</p>
            </div>

            <div class="flex flex-col md:flex-row justify-center gap-10 text-darkteal">
                <div class="w-[180px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/pratama-klinik.png" class="w-[50%] mx-auto" alt="Makanan">
                    <h2 class="text-center text-3xl">Makanan</h2>
                </div>
                <div class="w-[180px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/utama-klinik.png" class="w-[60%] mx-auto" alt="Minuman">
                    <h2 class="text-center text-3xl mt-2">Minuman</h2>
                </div>
                <div class="w-[180px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/pratama-klinik.png" class="w-[50%] mx-auto" alt="Kosmetik">
                    <h2 class="text-center text-3xl">Kosmetik</h2>
                </div>
                <div class="w-[180px] mx-auto md:mx-0 py-5 bg-[#F4F4F4] rounded-xl shadow-xl">
                    <img src="img/utama-klinik.png" class="w-[60%] mx-auto" alt="Obat-obatan">
                    <h2 class="text-center text-3xl mt-2">Obat-obatan</h2>
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

</body>
@include('partials.js')

</html>
