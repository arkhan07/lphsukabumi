@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="text-center text-darkteal p-5">
            <img src="img/p-ketentuan.png" class="w-16 mx-auto mb-4" alt="Syarat & Ketentuan Icon">
            <h1 class="text-2xl text-darkgreen font-bold">Syarat & Ketentuan Lembaga Pemeriksa Halal</h1>
            <p class="font-medium">Ketentuan layanan sertifikasi halal oleh lembaga yang terpercaya dan profesional</p>
            <p>Mengatur hubungan hukum antara Lembaga Pemeriksa Halal dengan Klien dalam proses sertifikasi halal</p>
        </div>
    </section>
    {{-- End Section 1 --}}

    <style>
        /* Tab Terms */
        .tab_terms {
            overflow: hidden;
            background-color: #ffffff;
        }

        .tab_terms button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .tab_terms button:hover {
            color: #ffffff;
            background-color: #166F61;
        }

        .tab_terms button.active {
            color: #ffffff;
            background-color: #166F61;
        }

        .tabcontent {
            display: none;
            animation: fadeEffect 1s;
        }

        @keyframes fadeEffect {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @media only screen and (max-width: 320px) {
            li, p, h5, h6 {
                font-size: 13px;
            }
        }
    </style>

    {{-- Section 2 --}}
    <section class="max-w-screen-xl mx-auto my-20">
        <div class="flex flex-col lg:flex-row gap-4 px-6 lg:px-16">
            <!-- Tab links mobile -->
            <div class="dropdown lg:hidden mx-auto">
                <select class="dropdown-select bg-darkteal text-white text-sm px-2 py-2 w-[220px] truncate"
                    onchange="openTabs(event, this.value)">
                    <option value="General" selected>PENGANTAR</option>
                    <option value="1">DEFINISI DAN RUANG LINGKUP</option>
                    <option value="2">KEWENANGAN LEMBAGA</option>
                    <option value="3">PROSEDUR SERTIFIKASI</option>
                    <option value="4">HAK DAN KEWAJIBAN KLIEN</option>
                    <option value="5">PEMERIKSAAN DAN AUDIT HALAL</option>
                    <option value="6">KEBERSIFATAN DAN KERAHASIAAN</option>
                    <option value="7">MASA BERLAKU SERTIFIKAT</option>
                    <option value="8">PENARIKAN SERTIFIKAT</option>
                    <option value="9">BIAYA SERTIFIKASI</option>
                    <option value="10">BATASAN TANGGUNG JAWAB</option>
                    <option value="11">PENYELESAIAN SENGKETA</option>
                    <option value="12">PENGAWASAN DAN PEMBINAAN</option>
                </select>
            </div>

            <!-- Tab links desktop -->
            <div class="flex flex-col space-y-4">
                <div class="tab_terms lg:flex flex-col h-fit w-[400px] border border-darkteal rounded-md hidden">
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, 'General')" id="defaultOpen">PENGANTAR</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '1')">DEFINISI DAN RUANG LINGKUP</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '2')">KEWENANGAN LEMBAGA</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '3')">PROSEDUR SERTIFIKASI</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '4')">HAK DAN KEWAJIBAN KLIEN</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '5')">PEMERIKSAAN DAN AUDIT HALAL</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '6')">KEBERSIFATAN DAN KERAHASIAAN</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '7')">MASA BERLAKU SERTIFIKAT</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '8')">PENARIKAN SERTIFIKAT</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '9')">BIAYA SERTIFIKASI</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '10')">BATASAN TANGGUNG JAWAB</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '11')">PENYELESAIAN SENGKETA</button>
                    <button class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '12')">PENGAWASAN DAN PEMBINAAN</button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="container mx-auto" data-aos="fade-left" data-aos-duration="1000">
                <div class="mx-auto text-darkgreen border border-darkgreen rounded-md p-4 md:p-10 md:text-justify">
                    <div>
                        <!-- PENGANTAR -->
                        <div id="General" class="tabcontent">
                            <div class="mb-7">
                                <h5 class="font-medium text-lg my-2 underline">SYARAT DAN KETENTUAN LEMBAGA PEMERIKSA HALAL</h5>
                                <p>
                                    Lembaga Pemeriksa Halal (LPH) yang terpercaya dan profesional ini beroperasi berdasarkan 
                                    Undang-Undang Nomor 33 Tahun 2014 tentang Jaminan Produk Halal dan peraturan pelaksananya. 
                                    Syarat dan Ketentuan ini mengatur hubungan hukum antara LPH dengan Klien dalam proses 
                                    sertifikasi halal.
                                </p>
                                <p class="mt-4 font-semibold text-darkteal">
                                    PERHATIAN: Dengan mengajukan permohonan sertifikasi halal, Klien dianggap telah membaca, 
                                    memahami, dan menyetujui semua ketentuan yang tercantum dalam dokumen ini.
                                </p>
                                <div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-md">
                                    <h6 class="font-bold text-green-800 mb-2">Komitmen Lembaga:</h6>
                                    <ul class="list-disc ml-6 text-green-700">
                                        <li>Independensi dan objektivitas dalam pemeriksaan</li>
                                        <li>Kerahasiaan informasi klien</li>
                                        <li>Kompetensi dan profesionalitas auditor halal</li>
                                        <li>Kepatuhan terhadap standar nasional dan internasional</li>
                                        <li>Pelayanan yang transparan dan akuntabel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- DEFINISI DAN RUANG LINGKUP -->
                        <div id="1" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">DEFINISI DAN RUANG LINGKUP</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-inside">
                                    <li><strong>Lembaga Pemeriksa Halal (LPH)</strong> adalah lembaga yang melakukan pemeriksaan dan audit halal terhadap produk, proses, dan sistem jaminan halal.</li>
                                    <li><strong>Klien</strong> adalah perusahaan, industri, atau pelaku usaha yang mengajukan permohonan sertifikasi halal.</li>
                                    <li><strong>Produk</strong> meliputi makanan, minuman, obat-obatan, kosmetika, produk kimia, dan produk biologi.</li>
                                    <li><strong>Sertifikat Halal</strong> adalah pengakuan tertulis dari otoritas yang berwenang atas kehalalan suatu produk.</li>
                                    <li><strong>Sistem Jaminan Halal (SJH)</strong> adalah sistem manajemen untuk menjamin kehalalan produk dalam seluruh rantai pasok.</li>
                                    <li><strong>Auditor Halal</strong> adalah personel kompeten yang ditunjuk untuk melakukan pemeriksaan halal.</li>
                                    <li><strong>Komite Halal</strong> adalah tim yang dibentuk oleh perusahaan untuk mengawasi implementasi SJH.</li>
                                </ol>
                                <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-md">
                                    <h6 class="font-bold text-blue-800 mb-2">Ruang Lingkup Layanan:</h6>
                                    <ul class="list-disc ml-6 text-blue-700">
                                        <li>Sertifikasi produk halal</li>
                                        <li>Konsultasi sistem jaminan halal</li>
                                        <li>Pelatihan auditor internal halal</li>
                                        <li>Surveilan dan audit berkala</li>
                                        <li>Pendampingan penyusunan dokumen halal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- KEWENANGAN LEMBAGA -->
                        <div id="2" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">KEWENANGAN LEMBAGA</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li>Melakukan pemeriksaan dan audit terhadap fasilitas produksi, bahan baku, dan proses produksi.</li>
                                    <li>Mengambil sampel untuk uji laboratorium sesuai dengan kebutuhan pemeriksaan.</li>
                                    <li>Mengakses seluruh area produksi, penyimpanan, dan laboratorium yang relevan.</li>
                                    <li>Memeriksa dokumen terkait sistem jaminan halal, termasuk dokumen pemasok.</li>
                                    <li>Mewawancarai personel terkait, termasuk manajemen dan operator produksi.</li>
                                    <li>Memberikan rekomendasi perbaikan dan tindakan korektif.</li>
                                    <li>Melaporkan hasil pemeriksaan kepada otoritas yang berwenang.</li>
                                </ol>
                                <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-md">
                                    <h6 class="font-bold text-yellow-800 mb-2">Prinsip Audit:</h6>
                                    <ul class="list-disc ml-6 text-yellow-700">
                                        <li>Independensi dan tidak memihak</li>
                                        <li>Berdasarkan bukti objektif</li>
                                        <li>Konfidensial</li>
                                        <li>Profesional dan kompeten</li>
                                        <li>Transparan dalam prosedur</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- PROSEDUR SERTIFIKASI -->
                        <div id="3" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">PROSEDUR SERTIFIKASI</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li><strong>Pengajuan Permohonan:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Klien mengajukan permohonan tertulis dengan melampirkan dokumen yang dipersyaratkan</li>
                                            <li>LPH melakukan penilaian kelengkapan dokumen dalam waktu 5 hari kerja</li>
                                            <li>Jika dokumen lengkap, LPH menerbitkan rencana audit dan perkiraan biaya</li>
                                        </ul>
                                    </li>
                                    
                                    <li><strong>Pemeriksaan Awal:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Review dokumen sistem jaminan halal</li>
                                            <li>Evaluasi bahan baku dan formulasi produk</li>
                                            <li>Verifikasi data pemasok dan rantai pasok</li>
                                        </ul>
                                    </li>
                                    
                                    <li><strong>Audit Lapangan:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Pemeriksaan fasilitas produksi dan penyimpanan</li>
                                            <li>Wawancara dengan personel terkait</li>
                                            <li>Pengambilan sampel untuk analisis jika diperlukan</li>
                                            <li>Verifikasi penerapan sistem jaminan halal</li>
                                        </ul>
                                    </li>
                                    
                                    <li><strong>Analisis Laboratorium:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Uji kandungan bahan haram atau syubhat</li>
                                            <li>Analisis kontaminasi silang</li>
                                            <li>Uji DNA atau metode analisis lainnya sesuai kebutuhan</li>
                                        </ul>
                                    </li>
                                    
                                    <li><strong>Penetapan Keputusan:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Evaluasi hasil audit oleh tim teknis LPH</li>
                                            <li>Rekomendasi kepada Komite Sertifikasi</li>
                                            <li>Penerbitan sertifikat halal jika memenuhi persyaratan</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <!-- HAK DAN KEWAJIBAN KLIEN -->
                        <div id="4" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">HAK DAN KEWAJIBAN KLIEN</h6>
                                
                                <h6 class="font-bold my-4 mt-6">Hak Klien:</h6>
                                <ol class="list-decimal flex flex-col gap-4 list-outside ml-4">
                                    <li>Mendapatkan informasi yang jelas tentang prosedur sertifikasi</li>
                                    <li>Mendapatkan penjelasan tentang temuan audit dan rekomendasi perbaikan</li>
                                    <li>Mengajukan banding atas keputusan sertifikasi</li>
                                    <li>Mendapatkan kerahasiaan informasi bisnis yang sensitif</li>
                                    <li>Mendapatkan pelayanan yang profesional dan tidak diskriminatif</li>
                                </ol>
                                
                                <h6 class="font-bold my-4 mt-6">Kewajiban Klien:</h6>
                                <ol class="list-decimal flex flex-col gap-4 list-outside ml-4">
                                    <li>Menyediakan informasi dan dokumen yang benar, lengkap, dan terkini</li>
                                    <li>Mengizinkan akses penuh kepada auditor halal ke fasilitas yang relevan</li>
                                    <li>Menunjuk petugas yang kompeten untuk mendampingi proses audit</li>
                                    <li>Melaksanakan tindakan korektif atas temuan audit yang disepakati</li>
                                    <li>Membayar biaya sertifikasi sesuai ketentuan yang berlaku</li>
                                    <li>Melaporkan perubahan signifikan dalam proses produksi atau bahan baku</li>
                                    <li>Menjaga integritas sistem jaminan halal yang telah disertifikasi</li>
                                </ol>
                            </div>
                        </div>

                        <!-- PEMERIKSAAN DAN AUDIT HALAL -->
                        <div id="5" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">PEMERIKSAAN DAN AUDIT HALAL</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li><strong>Jadwal Audit:</strong> Ditentukan berdasarkan kesepakatan bersama dengan memperhatikan operasional klien</li>
                                    <li><strong>Tim Auditor:</strong> Terdiri dari auditor halal yang kompeten dan independen</li>
                                    <li><strong>Lingkup Audit:</strong> Meliputi seluruh rantai pasok dari penerimaan bahan baku hingga distribusi produk</li>
                                    <li><strong>Metode Audit:</strong> Menggunakan pendekatan berbasis risiko dan bukti</li>
                                    <li><strong>Laporan Audit:</strong> Disampaikan dalam waktu 10 hari kerja setelah audit selesai</li>
                                    <li><strong>Tindakan Korektif:</strong> Klien wajib menyelesaikan tindakan korektif dalam waktu yang ditentukan</li>
                                    <li><strong>Verifikasi:</strong> LPH melakukan verifikasi atas implementasi tindakan korektif</li>
                                </ol>
                                
                                <div class="mt-6 p-4 bg-purple-50 border border-purple-200 rounded-md">
                                    <h6 class="font-bold text-purple-800 mb-2">Standar Audit:</h6>
                                    <ul class="list-disc ml-6 text-purple-700">
                                        <li>SNI 99001:2016 Sistem Jaminan Halal</li>
                                        <li>ISO 19011:2018 Pedoman Audit Sistem Manajemen</li>
                                        <li>Pedoman LPH dari Badan Penyelenggara Jaminan Produk Halal</li>
                                        <li>Fatwa Majelis Ulama Indonesia terkait kehalalan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- KEBERSIFATAN DAN KERAHASIAAN -->
                        <div id="6" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">KEBERSIFATAN DAN KERAHASIAAN</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li>LPH menjaga kerahasiaan semua informasi yang diperoleh selama proses sertifikasi</li>
                                    <li>Informasi klien tidak akan diungkapkan kepada pihak ketiga tanpa persetujuan tertulis, kecuali diwajibkan oleh hukum</li>
                                    <li>Data dan informasi sensitif disimpan dengan sistem keamanan yang memadai</li>
                                    <li>Auditor halal menandatangani pernyataan kerahasiaan sebelum melaksanakan tugas</li>
                                    <li>LPH hanya mengungkapkan informasi yang diperlukan kepada otoritas berwenang sesuai ketentuan perundang-undangan</li>
                                    <li>Setelah berakhirnya hubungan kerja, kewajiban kerahasiaan tetap berlaku</li>
                                </ol>
                                
                                <div class="mt-6 p-4 bg-red-50 border border-red-200 rounded-md">
                                    <h6 class="font-bold text-red-800 mb-2">Informasi yang Dilindungi:</h6>
                                    <ul class="list-disc ml-6 text-red-700">
                                        <li>Formulasi dan resep produk</li>
                                        <li>Data pemasok dan harga bahan baku</li>
                                        <li>Strategi bisnis dan pemasaran</li>
                                        <li>Data produksi dan kapasitas</li>
                                        <li>Informasi finansial yang sensitif</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- MASA BERLAKU SERTIFIKAT -->
                        <div id="7" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">MASA BERLAKU SERTIFIKAT</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li>Sertifikat halal berlaku selama 4 (empat) tahun sejak tanggal diterbitkan</li>
                                    <li>Selama masa berlaku, LPH melakukan audit surveilan minimal 1 (satu) kali per tahun</li>
                                    <li>Klien wajib melaporkan perubahan signifikan yang mempengaruhi kehalalan produk</li>
                                    <li>Perpanjangan sertifikat diajukan minimal 6 (enam) bulan sebelum masa berlaku berakhir</li>
                                    <li>Proses perpanjangan meliputi audit ulang terhadap sistem jaminan halal</li>
                                    <li>Sertifikat dapat dicabut sebelum masa berlaku berakhir jika terdapat pelanggaran berat</li>
                                </ol>
                                
                                <div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-md">
                                    <h6 class="font-bold text-green-800 mb-2">Jadwal Surveilan:</h6>
                                    <ul class="list-disc ml-6 text-green-700">
                                        <li>Surveilan I : 12 bulan setelah sertifikasi</li>
                                        <li>Surveilan II : 24 bulan setelah sertifikasi</li>
                                        <li>Surveilan III : 36 bulan setelah sertifikasi</li>
                                        <li>Audit Ulang : Sebelum perpanjangan sertifikat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- PENARIKAN SERTIFIKAT -->
                        <div id="8" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">PENARIKAN SERTIFIKAT</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li><strong>Alasan Penarikan:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Penggunaan bahan haram atau syubhat tanpa izin</li>
                                            <li>Pemalsuan dokumen atau informasi</li>
                                            <li>Kegagalan dalam mempertahankan sistem jaminan halal</li>
                                            <li>Ketidakpatuhan terhadap rekomendasi perbaikan</li>
                                            <li>Pelanggaran berat terhadap persyaratan halal</li>
                                        </ul>
                                    </li>
                                    
                                    <li><strong>Prosedur Penarikan:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Pemberitahuan tertulis dengan alasan yang jelas</li>
                                            <li>Kesempatan untuk membela diri dalam waktu 15 hari kerja</li>
                                            <li>Keputusan final oleh Komite Sertifikasi</li>
                                            <li>Pelaporan kepada otoritas berwenang</li>
                                            <li>Pencabutan sertifikat dari peredaran</li>
                                        </ul>
                                    </li>
                                    
                                    <li><strong>Dampak Penarikan:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Produk tidak boleh lagi menggunakan logo halal</li>
                                            <li>Klien tidak dapat mengajukan sertifikasi ulang dalam waktu tertentu</li>
                                            <li>Kewajiban penarikan produk dari pasar</li>
                                            <li>Pelaporan kepada pihak berwajib jika terdapat unsur pidana</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <!-- BIAYA SERTIFIKASI -->
                        <div id="9" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">BIAYA SERTIFIKASI</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li><strong>Komponen Biaya:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Biaya administrasi dan penilaian dokumen</li>
                                            <li>Biaya audit lapangan (transportasi, akomodasi, honorarium auditor)</li>
                                            <li>Biaya analisis laboratorium jika diperlukan</li>
                                            <li>Biaya penerbitan dan administrasi sertifikat</li>
                                            <li>Biaya surveilan tahunan</li>
                                        </ul>
                                    </li>
                                    
                                    <li><strong>Pembayaran:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>50% dibayarkan setelah penandatanganan kontrak</li>
                                            <li>50% dibayarkan sebelum penerbitan sertifikat</li>
                                            <li>Biaya surveilan dibayarkan per tahun di muka</li>
                                            <li>Biaya tambahan untuk audit di luar jadwal atau lokasi khusus</li>
                                        </ul>
                                    </li>
                                    
                                    <li><strong>Kebijakan:</strong>
                                        <ul class="list-disc ml-8 mt-2">
                                            <li>Biaya tidak dapat dikembalikan jika audit telah dilaksanakan</li>
                                            <li>Perubahan biaya diberitahukan minimal 30 hari sebelumnya</li>
                                            <li>Keringanan biaya untuk UKM sesuai kebijakan pemerintah</li>
                                            <li>Pembayaran dengan faktur pajak sesuai ketentuan perpajakan</li>
                                        </ul>
                                    </li>
                                </ol>
                                
                                <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-md">
                                    <h6 class="font-bold text-blue-800 mb-2">Transparansi Biaya:</h6>
                                    <p class="text-blue-700">
                                        LPH menyediakan rincian biaya yang jelas dan terperinci sebelum proses sertifikasi dimulai. 
                                        Tidak ada biaya tersembunyi atau tambahan yang tidak disepakati sebelumnya.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- BATASAN TANGGUNG JAWAB -->
                        <div id="10" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">BATASAN TANGGUNG JAWAB</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li>LPH bertanggung jawab atas keakuratan pemeriksaan berdasarkan informasi yang diberikan klien</li>
                                    <li>LPH tidak bertanggung jawab atas penggunaan sertifikat halal untuk tujuan yang tidak sesuai</li>
                                    <li>Tanggung jawab LPH terbatas pada biaya sertifikasi yang telah dibayarkan</li>
                                    <li>LPH tidak bertanggung jawab atas kerugian tidak langsung atau konsekuensial</li>
                                    <li>Klien bertanggung jawab penuh atas kehalalan produk selama masa produksi dan distribusi</li>
                                    <li>LPH tidak menjamin kontinuitas kehalalan jika terjadi perubahan tanpa pemberitahuan</li>
                                </ol>
                                
                                <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-md">
                                    <h6 class="font-bold text-yellow-800 mb-2">Klausul Penting:</h6>
                                    <p class="text-yellow-700">
                                        Sertifikasi halal merupakan pengakuan pada saat audit dilakukan. Klien wajib mempertahankan 
                                        sistem jaminan halal secara konsisten selama masa berlaku sertifikat.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- PENYELESAIAN SENGKETA -->
                        <div id="11" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">PENYELESAIAN SENGKETA</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li><strong>Musyawarah:</strong> Setiap sengketa diselesaikan melalui musyawarah terlebih dahulu</li>
                                    <li><strong>Mediasi:</strong> Jika musyawarah gagal, pihak sepakat untuk menyelesaikan melalui mediasi</li>
                                    <li><strong>Banding Teknis:</strong> Klien dapat mengajukan banding atas keputusan teknis dalam waktu 14 hari</li>
                                    <li><strong>Pengadilan:</strong> Jika mediasi gagal, sengketa diselesaikan melalui pengadilan di wilayah domisili LPH</li>
                                    <li><strong>Hukum yang Berlaku:</strong> Hukum Republik Indonesia</li>
                                    <li><strong>Biaya Hukum:</strong> Pihak yang kalah menanggung biaya hukum dan proses penyelesaian sengketa</li>
                                </ol>
                                
                                <div class="mt-6 p-4 bg-gray-50 border border-gray-200 rounded-md">
                                    <h6 class="font-bold text-gray-800 mb-2">Mekanisme Banding:</h6>
                                    <ul class="list-disc ml-6 text-gray-700">
                                        <li>Pengajuan banding secara tertulis dengan alasan yang jelas</li>
                                        <li>Ditangani oleh Komite Banding yang independen</li>
                                        <li>Keputusan banding dalam waktu 30 hari kerja</li>
                                        <li>Keputusan banding bersifat final dan mengikat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- PENGAWASAN DAN PEMBINAAN -->
                        <div id="12" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">PENGAWASAN DAN PEMBINAAN</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li>LPH diawasi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH)</li>
                                    <li>LPH wajib memenuhi standar kompetensi dan integritas yang ditetapkan</li>
                                    <li>LPH memberikan pembinaan kepada klien untuk peningkatan sistem jaminan halal</li>
                                    <li>Klien dapat memberikan umpan balik tentang kinerja LPH melalui mekanisme yang tersedia</li>
                                    <li>LPH melakukan evaluasi internal dan eksternal secara berkala</li>
                                    <li>LPH wajib mengikuti pelatihan dan pembaruan kompetensi secara rutin</li>
                                </ol>
                                
                                <div class="mt-6 p-4 bg-teal-50 border border-teal-200 rounded-md">
                                    <h6 class="font-bold text-teal-800 mb-2">Komitmen Kualitas:</h6>
                                    <ul class="list-disc ml-6 text-teal-700">
                                        <li>Sertifikasi ISO 9001 untuk sistem manajemen mutu</li>
                                        <li>Akreditasi dari Komite Akreditasi Nasional</li>
                                        <li>Auditor bersertifikat kompetensi halal</li>
                                        <li>Laboratorium yang terakreditasi</li>
                                        <li>Sistem pengaduan dan umpan balik yang transparan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-6 border-t border-gray-300">
                        <p class="text-sm text-gray-600">
                            <strong>Dasar Hukum:</strong> Syarat dan Ketentuan ini disusun berdasarkan Undang-Undang 
                            Nomor 33 Tahun 2014 tentang Jaminan Produk Halal, Peraturan Pemerintah, dan peraturan 
                            pelaksananya.
                        </p>
                        <p class="text-sm text-gray-600 mt-2">
                            Untuk informasi lebih lanjut atau pengaduan, silakan hubungi:
                            <br>
                            <strong>Lembaga Pemeriksa Halal</strong>
                            <br>
                            Email: <a class="underline text-darkteal" href="mailto:halal@lembagapemeriksahalal.co.id">halal@lembagapemeriksahalal.co.id</a>
                            <br>
                            Telepon: (021) 1234-5678
                            <br>
                            Alamat: Jl. Profesional No. 123, Jakarta Pusat 10110
                        </p>
                        <p class="text-sm text-gray-500 mt-4">
                            Dokumen ini diperbaharui pada: 04 Juni 2025
                            <br>
                            Versi: 2.0
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section 2 --}}

    <script>
        function openTabs(evt, tabsName) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabsName).style.display = "block";
            if (evt.currentTarget) {
                evt.currentTarget.className += " active";
            }
        }

        document.getElementById("defaultOpen").click();
    </script>
@endsection
