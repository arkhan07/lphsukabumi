@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="text-center text-darkteal p-5">
            <img src="img/p-ketentuan.png" class="w-16 mx-auto mb-4" alt="">
            <h1 class="text-2xl text-darkgreen font-bold">Syarat & Ketentuan</h1>
            <p class="font-medium">Syarat dan ketentuan ini berlaku untuk layanan SAFFMedic</p>
            <p>Mohon dibaca, agar syarat dan ketentuan ini dapat dipahami dan dimengerti.</p>
        </div>
    </section>
    {{-- End Section 1 --}}

    <style>
        /* Tab Terms */
        .tab_terms {
            overflow: hidden;
            /* border: 1px solid #ccc; */
            background-color: #ffffff;
        }

        .tab_terms button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            /* padding: 14px 16px; */
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
            /* Fading effect takes 1 second */
        }

        @keyframes fadeEffect {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media only screen and (max-width: 320px) {

            li,
            p,
            h5,
            h6 {
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
                    <option value="General" selected>DEFINISI</option>
                    <option value="1">PAKET DAN BIAYA BERLANGGANAN</option>
                    <option value="2">MEKANISME BERHENTI BERLANGGANAN</option>
                    <option value="3">IMPLEMENTASI DAN PELATIHAN</option>
                    <option value="4">SLA DAN PURNA JUAL</option>
                    <option value="5">INTEGRASI PIHAK DILUAR SAFFMedic</option>
                    <option value="6">PENGKINIAN DAN PERUBAHAN TERHADAP LAYANAN ATAU SYARAT DAN KETENTUAN INI</option>
                    <option value="7">HAL-HAL DI LUAR TANGGUNG JAWAB PIHAK PT. SaKa Access Fix</option>
                    <option value="8">REGULASI DI LUAR SAFFMedic</option>
                    <option value="9">PENAFIAN</option>
                    <option value="10">UMPAN BALIK DAN INFORMASI</option>
                    <option value="11" class="kso-1">KETENTUAN KSO</option>
                </select>
            </div>

            <!-- Tab links desktop -->
            <div class="flex flex-col space-y-4">
                <div class="tab_terms lg:flex flex-col h-fit w-[400px] border border-darkteal rounded-md hidden">
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, 'DEFINISI')" id="defaultOpen">DEFINISI</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '1')">PAKET DAN BIAYA BERLANGGANAN</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '2')">MEKANISME BERHENTI BERLANGGANAN</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '3')">IMPLEMENTASI DAN PELATIHAN</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '4')">SLA DAN PURNA JUAL</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '5')">INTEGRASI PIHAK DILUAR SAFFMedic</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '6')">PENGKINIAN DAN PERUBAHAN TERHADAP LAYANAN ATAU SYARAT DAN KETENTUAN
                        INI</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '7')">HAL-HAL DI LUAR TANGGUNG JAWAB PIHAK PT. SaKa Access Fix</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '8')">REGULASI DI LUAR SAFFMedic</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '9')">PENAFIAN</button>
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        onclick="openTabs(event, '10')">UMPAN BALIK DAN INFORMASI</button>
                </div>

                <div class="mt-4 tab_terms lg:flex flex-col h-fit w-[400px] border border-darkteal rounded-md hidden">
                    <button
                        class="tablinks font-poppins font-semibold text-sm md:text-base text-darkteal text-left truncate lg:px-5 lg:py-3 px-2 py-2"
                        name="kso-1" onclick="openTabs(event, '11')">KETENTUAN KSO</button>
                </div>
            </div>
            <!-- Tab Content -->
            <div class="container mx-auto" data-aos="fade-left" data-aos-duration="1000">
                <div class="mx-auto text-darkgreen border border-darkgreen rounded-md p-4 md:p-10 md:text-justify">
                    <div>
                        <div id="DEFINISI" class="tabcontent">
                            <div class="mb-7">
                                <h5 class="font-medium text-lg my-2 underline">TERM OF USER</h5>
                                <p>
                                    PT. SaKa Access Fix merupakan sebuah badan hukum yang bergerak di bidang penerbitan
                                    piranti
                                    lunak
                                    (Software), aktivitas pemrograman komputer lainnya, portal web dan/atau platform digital
                                    yang
                                    dalam
                                    hal
                                    ini adalah Aplikasi SAFFMedic.
                                    <br><br>
                                    Sebelum menggunakan situs web dan/atau peranti lunak serta dokumen apa pun yang kami
                                    miliki,
                                    bacalah
                                    dengan saksama Persyaratan Penggunaan ini.
                                    <b>PERHATIKAN BAHWA DENGAN MENGUNJUNGI DAN/ATAU MENGGUNAKAN
                                        SITUS WEB INI, BERARTI ANDA SETUJU DENGAN PERSYARATAN PENGGUNAAN. JIKA ANDA TIDAK
                                        SETUJU,
                                        JANGAN
                                        KUNJUNGI DAN/ATAU GUNAKAN SITUS ATAU PIRANTI LUNAK YANG KAMI SEDIAKAN.
                                    </b>
                                </p>
                            </div>
                            <div class="mb-7">
                                <h6 class="font-bold my-4">DEFINISI</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-inside">
                                    <li>Add-Ons - berarti layanan tambahan diluar Paket yang dapat dipilih sesuai kebutuhan
                                        Anda.
                                    </li>
                                    <li>Akun - berarti hak akses anda untuk dapat menggunakan Layanan.</li>
                                    <li>Anda - berarti Pelanggan atau Pengguna Diundang.</li>
                                    <li>Batasan Penggunaan SAFFMedic (SAFFMedic Fair Usage) atau Fair Usage Pricing (FUP) -
                                        berarti
                                        batasan-batasan sebagaimana ditentukan pada Paket SAFFMedic yang Anda pesan dan
                                        termasuk
                                        batasan
                                        apa
                                        pun yang dikenakan SAFFMedic terkait dengan modul atau fitur Layanan SAFFMedic.</li>
                                    <li>Biaya Berlangganan- berarti biaya bulanan (sudah termasuk pajak) yang harus Anda
                                        bayar
                                        sesuai
                                        daftar
                                        biaya yang dicantumkan pada Website SAFFMedic.</li>
                                    <li>Informasi Rahasia - berarti seluruh informasi terkait informasi bisnis dari
                                        SAFFMedic
                                        (atau
                                        para
                                        afiliasinya) (termasuk, namun tidak terbatas kepada, desain produk, perencanaan
                                        produk,
                                        data,
                                        piranti lunak dan teknologi, informasi finansial, rencana pemasaran, informasi
                                        biaya,
                                        data
                                        vendor
                                        atau pelanggan dan informasi lain apapun yang bersifat rahasia, informasi
                                        non-publik,
                                        dan
                                        hak
                                        milik
                                        yang menyangkut usaha, operasional, dan aset-aset milik PT. SaKa Access Fix) yang
                                        telah
                                        atau
                                        akan
                                        diberikan kepada Anda atau setiap perwakilan Anda oleh atau atas nama SAFFMedic,
                                        bersama
                                        dengan
                                        seluruh analisis, kompilasi, perkiraan, studi atau dokumen-dokumen lain yang
                                        disiapkan
                                        oleh
                                        Anda
                                        atau perwakilan Anda yang mengandung informasi apapun tersebut.</li>
                                    <li>Kami atau SAFFMedic - berarti PT. SaKa Access Fix</li>
                                    <li>Layanan - berarti layanan penyediaan software as a service untuk pengelolaan data
                                        pasien,
                                        data
                                        hasil
                                        pemeriksaan, data laboratorium dan hasilnya ,manajemen bisnis, Manajemen Keuangan,
                                        manajemen
                                        stok
                                        yang terdapat dalam SISTEM INFROMASI RUMAH SAKIT (SIMRS) atau SISTEM INFORMASI
                                        KLINIK
                                        (SIM
                                        KLINIK)
                                        yang disediakan oleh SAFFMedic melalui Website, aplikasi seluler, dan/atau platform
                                        lainnya.
                                    </li>
                                    <li>Masa Aktif - berarti durasi masa aktif Akun berlangganan SAFFMedic Anda yang telah
                                        Anda
                                        pilih
                                        dan
                                        bayarkan.</li>
                                    <li>Paket - berarti setiap satu kesatuan modul dan fitur pada Layanan yang dapat dipilih
                                        sesuai
                                        kebutuhan Anda.</li>
                                    <li>Pelanggan - berarti orang, organisasi, dan/atau badan lainnya, yang mendaftar untuk
                                        menggunakan
                                        Layanan.
                                    </li>
                                    <li>Pengguna Diundang - berarti orang, organisasi, dan/atau badan lainnya, selain
                                        Pelanggan,
                                        yang
                                        memakai Layanan dari waktu ke waktu dengan izin dan undangan dari Pelanggan.</li>
                                    <li>Website - berarti situs internet di domain www.SAFFMedic.com, atau situs internet
                                        lainnya
                                        yang
                                        dikelola oleh SAFFMedic dan mungkin diubah dari waktu ke waktu.</li>
                                    <li>Hak Kekayaan Intelektual - berarti paten, merek dagang, merek jasa atau layanan, hak
                                        cipta,
                                        hak pada desain, pengetahuan, atau hak kekayaan intelektual atau industri lainnya,
                                        baik
                                        itu
                                        terdaftar atau tidak terdaftar.</li>
                                </ol>
                            </div>
                        </div>

                        <div id="1" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">PAKET DAN BIAYA BERLANGGANAN</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-inside">
                                    <li>SAFFMedic menjual produk dan layanan dengan bentuk Subscribe/Annual billing, yaitu
                                        pembayaran
                                        dengan cara berlangganan yang dilakukan setahun sekali oleh PENGGUNA.</li>
                                    <li>Tarif yang diterbitkan oleh PT. SaKa Access Fix berlaku sesuai dengan kebijakan yang
                                        dikeluarkan
                                        oleh Kami, dan Pengguna akan dikenakan Tarif sesuai dengan Kebijakan dan kesepakatan
                                        serta
                                        menerima
                                        bukti pembayaran yang sah.</li>
                                    <li>Pengguna akan mendapatkan Paket atau fitur yang disesuaikan dengan jenis Paket atau
                                        fitur
                                        yang
                                        Pengguna ambil ketika menambah paket dan layanan yang dimiliki oleh PT. SaKa Access
                                        Fix.
                                    </li>
                                    <li>Apabila kapasitas cloud pada PENGGUNA telah mencapai limit maka PENGGUNA diwajibkan
                                        menambah
                                        kapasitas untuk kelancaran operasional.</li>
                                </ol>
                            </div>
                        </div>

                        <div id="2" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">MEKANISAME BERHENTI BERLANGGANAN</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside">
                                    <li>Layanan akan diberhentikan apabila PENGGUNA tidak melakukan pembayaran atau
                                        berhenti.
                                    </li>
                                    <li>Apabila PENGGUNA tidak melanjutkan berlangganan, maka seluruh data yang tersimpan di
                                        dalam
                                        sistem
                                        SAFFMedic tidak dapat diakses kembali</li>
                                    <li>Adapun ketentuan untuk mengakses data PENGGUNA setelah melakukan pemberhentian
                                        berlangganan,
                                        yaitu:
                                        <ul class="list-disc flex flex-col gap-3 list-outside ms-20 mt-5">
                                            <li>Mekanisme pengambilan data diakses dengan format PDF atau Excel;</li>
                                            <li>Pengguna harus mengaktifkan masa berlangganan kembali sesuai dengan
                                                kebutuhan
                                                waktu
                                                untuk
                                                mengakses data;</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div id="3" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">IMPLEMENTASI DAN LATIHAN</h6>
                                <p class="mb-4">Setelah Anda melakukan pembayaran atas pembelian produk dan atau layanan
                                    yang
                                    Anda
                                    butuhkan, maka berikutnya akan dilaksanakan proses implementasi dengan ketentuan sebagai
                                    berikut:</p>
                                <ol class="list-decimal flex flex-col gap-5 list-outside">
                                    <li>Media Implementasi : <br>Implementasi Layanan Aplikasi SAFFMedic dilakukan mandiri
                                        oleh
                                        Anda, mulai dari pengisian master data hingga aplikasi siap digunakan (go-live).
                                        SAFFMedic
                                        akan mengadakan asistensi sebanyak satu (1) kali melalui media online (daring) pada
                                        saat
                                        masa trial / masuk ke fase New Subscription (lihat: Status Berlangganan). Apabila
                                        diperlukan
                                        asistensi lebih lanjut setelah go - live, Anda bisa menghubungi tim admin kami.</li>
                                    <li>Persyaratan Implementasi : <br>Implementasi bisa dilakukan ketika Anda sudah
                                        menyiapkan
                                        Master Data untuk diunggah di server SAFFMedic yang berupa database faskes, data
                                        tarif,
                                        data
                                        penunjang medis, data barang, dan data mapping cabang (jika ada). Sejumlah detil
                                        Master
                                        Data
                                        yang dibutuhkan akan diberikan rinciannya melalui representative teraMedikCE.</li>
                                    <li>Saat sesi implementasi, Anda harus menghadirkan team IT dan pengguna SAFFMedic yaitu
                                        semua
                                        perwakilan dari unit yang ada di Faskes Anda (dokter, perawat, apoteker, lab,
                                        kasir).
                                    </li>
                                    <li>Jam Operasiona iplementasil : <br>Jam operasional kegiatan implementasi adalah
                                        diantara
                                        hari
                                        Senin – Jum’at jam 09:00 - 17:00 WIB sesuai waktu yang sudah ditentukan bersama.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div id="4" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">SERVICE LEVEL AGREEMENT DAN LAYANAN PURNA JUAL</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-outside ml-4">
                                    <li><b>Layanan SAFFMedic memiliki Service Level Agreement dengan tiga (3) kondisi
                                            berikut
                                            :</b>
                                        <ol style="list-style-type: lower-alpha" class="ml-5">
                                            <li class="mb-4">LOW : <br>Berupa masalah yang timbul akibat kesalahan entry,
                                                konsultasi mengenai prosedur yang harus dijalankan terkait pelaksanaan
                                                operasi
                                                bisnis Faskes secara umum dan SaffMrdic secara khusus, dimana masalah
                                                tersebut
                                                tidak
                                                berdampak berhentinya operasi bisnis Faskes terkait penggunaan SAFFMedic.
                                                <br>
                                                Lama respon : <br>Maksimal 3 x 24 jam untuk respon dan penanganan, atau
                                                disesuaikan
                                                dengan kondisi.
                                            </li>
                                            <li class="mb-4">MEDIUM : <br>Kondisi dimana system SAFFMedic masih berfungsi
                                                akan
                                                tetapi ada modul non-medis dan modul yang tidak berhubungan langsung dengan
                                                pelayanan pasien yang error dan sama sekali tidak dapat digunakan. <br>
                                                Lama respon : <br>Maksimal 2 x 24 jam untuk respon dan penanganan, atau
                                                disesuaikan
                                                dengan kondisi.</li>
                                            <li>HIGH : <br>Kondisi dimana permasalahan yang terjadi menyebabkan terhentinya
                                                operasional Faskes dan tidak ada solusi manual yang tersedia, seperti
                                                gangguan
                                                pada
                                                server, kehilangan data secara masif dan tidak berjalannya modul-modul
                                                aplikasi
                                                yang
                                                berhubungan dengan medis dan berimplikasi terhadap pelayanan kepada pasien.
                                                <br>
                                                Lama respon : <br>6 Jam untuk respon dan penanganan, atau disesuaikan dengan
                                                kondisi.
                                            </li>
                                        </ol>
                                    </li>
                                    <li><b>Layanan SAFFMedic memiliki Service Level Agreement dengan tiga (3) kondisi
                                            berikut
                                            :</b>
                                        <ol style="list-style-type: lower-alpha" class="ml-5">
                                            <li class="mb-4">Learning : <br>Panduan penggunaan aplikasi, yang bisa Anda
                                                peroleh
                                                dari team SAFFMedic.</li>
                                            <li class="mb-4">Live Chat : <br>Komunikasi via chat kepada tim support
                                                SAFFMedic
                                                Dukungan Live Chat dari SAFFMedic tersedia melalui opsi berikut:
                                                <ol style="list-style-type: lower-roman" class="ml-8">
                                                    <li>Hari Senin hingga Minggu: Pukul 09:00 s.d. 17:00 WIB
                                                        Pesan singkat (chat) yang diterima di luar jam-jam tersebut di atas
                                                        akan
                                                        menjadi support ticket dan akan segera ditindaklanjuti pada jam-jam
                                                        yang
                                                        sudah disebutkan di atas.</li>
                                                </ol>
                                            </li>
                                            <li>Tanggal Merah dan Hari Besar: <br>Untuk hari-hari besar keagamaan, cuti
                                                bersama,
                                                atau hari libur lainnya yang menyebabkan tidak tersedianya Dukungan
                                                Pelanggan,
                                                maka
                                                akan diinformasikan maksimal 5 (lima) hari kerja sebelum tanggal tidak
                                                tersedianya
                                                layanan Dukungan Pelanggan.</li>
                                        </ol>
                                    </li>
                                    <li><b>STATUS BERLANGGANAN</b> <br>Yang dimaksud status berlangganan Anda adalah status
                                        berlangganan
                                        Anda terhadap produk dan atau layanan SAFFMedic. Status berlangganan Anda bisa
                                        berupa,
                                        diantaranya:
                                        <ul class="list-disc ml-5">
                                            <li class="mb-4">
                                                New Subscription : <br>Tahapan proses implementasi dimana Anda telah
                                                melakukan
                                                pembayaran, namun masa aktif berlangganan Anda belum berjalan (15 hari
                                                free).
                                            </li>
                                            <li class="mb-4">
                                                Active : <br>Tahapan setelah Go Live dimana masa aktif berlangganan mulai
                                                dijalankan
                                                atau Anda telah melakukan perpanjangan dan melakukan pembayaran atas periode
                                                berlangganan berikutnya. Dalam tahapan ini, Anda bisa menikmati layanan
                                                purna
                                                jual.
                                            </li>
                                            <li class="mb-4">
                                                Grace Period : <br>Tahapan dimana masa aktif berlangganan Anda sudah
                                                berakhir,
                                                namun
                                                belum melakukan pembayaran atas periode berlangganan berikutnya. Dalam
                                                tahapan
                                                ini
                                                Anda masih bisa mengakses seluruh produk dan atau layanan SAFFMedic yang
                                                telah
                                                digunakan pada periode berlangganan sebelumnya namun Anda tidak bisa
                                                melakukan
                                                registrasi pasien baru dan lama. Batas waktu Grace Period adalah 15 hari
                                                sejak
                                                berakhirnya masa aktif berlangganan Anda.
                                            </li>
                                            <li>
                                                Cancelled : <br>Tahapan dimana Anda telah melewati batas waktu tahapan Grace
                                                Period,
                                                namun Anda belum juga melakukan pembayaran atas periode berlangganan
                                                berikutnya,
                                                atau Anda sudah mengajukan permintaan berhenti berlangganan sebelum
                                                berakhirnya
                                                masa
                                                aktif berlangganan Anda. Dalam tahapan ini Anda tidak akan bisa mengakses
                                                SAFFMedic
                                                dan data Anda pada seluruh produk dan layanan SAFFMedic akan terhapus 3
                                                bulan
                                                setelahnya.
                                            </li>
                                        </ul>
                                    </li>
                                    <li><b>TAGIHAN DAN BIAYA LAINNYA</b>
                                        <ul class="list-disc ml-5">
                                            <li class="mb-4">Tagihan SAFFMedic memuat biaya yang terdiri dari:
                                                <ol class="list-decimal ml-8">
                                                    <li>Biaya langganan SAFFMedic sesuai paket yang Anda pilih.</li>
                                                </ol>
                                            </li>
                                            <li class="mb-4">Pembayaran periode pertama (mencakup biaya langganan atau
                                                biaya
                                                lainnya jika ada)
                                                dibayarkan di awal sekaligus dalam 1 (satu) tahun pertama agar bisa
                                                menggunakan
                                                layanan SAFFMedic . Pembayaran penggunaan SAFFMedic berikutnya mengikuti
                                                bulan
                                                berjalan berlangganan.</li>
                                            <li class="mb-4">Pembayaran SAFFMedic ditagihkan dalam satu invoice (single
                                                invoice),
                                                sehingga
                                                pembayaran tagihan SAFFMedic menjadi satu kesatuan, tidak dapat dibayarkan
                                                secara
                                                parsial / sebagian layanan SAFFMedic dan dikirim ke Anda untuk dapat
                                                menggunakan
                                                layanan SAFF Medic.</li>
                                            <li class="mb-4">Sebuah tagihan untuk biaya penggunaan Layanan akan dibuat
                                                untuk
                                                Anda
                                                setiap awal
                                                periode penggunaan Layanan SAFFMedic . Semua tagihan akan mengandung biaya
                                                untuk
                                                periode Masa Aktif pemakaian Layanan. SAFFMedic akan terus membuat tagihan
                                                untuk
                                                Anda setiap akhir periode Masa Aktif sampai perjanjian ini diakhiri. Semua
                                                tagihan
                                                dari SAFFMedic akan dikirim kepada Anda, atau kepada kontak penagihan yang
                                                telah
                                                Anda berikan, melalui surat elektronik (email). Anda wajib melakukan
                                                pembayaran
                                                untuk seluruh nilai yang tertera di tagihan Anda sebelum melewati tanggal
                                                jatuh
                                                tempo untuk tagihannya, yang harus dilunaskan 7 (tujuh) hari dari saat
                                                tagihan
                                                dikirim oleh SAFFMedic. Anda mempunyai tanggung jawab untuk pembayaran semua
                                                pajak
                                                dan bea yang ditambahkan kepada Biaya tersebut sesuai dengan aturan pajak
                                                yang
                                                berlaku. Anda juga diminta untuk menyimpan bukti transaksi. Jika layanan
                                                sempat
                                                terhenti sebelum pembayaran dilakukan, SAFFMedic akan mengaktifkan layanan
                                                setelah
                                                Anda melakukan pembayaran Biaya untuk perpanjangan Masa Aktif.</li>
                                            <li class="mb-4">Klaim keberatan atas tagihan PT.SAKA ACCESS FIX akan
                                                diproses
                                                apabila
                                                : <br>
                                                Anda melaporkan klaim keberatan melalui channel layanan PT. SAKA ACCESS FIX
                                                paling
                                                lambat satu bulan setelah tanggal batas akhir waktu pembayaran.
                                            </li>
                                            <li>Klaim atas keberatan Anda terhadap tagihan SAFFMedic akan diproses sesuai
                                                ketentuan
                                                PT SAKA ACCESS FIX.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <b>KERAHASIAAN DATA</b> <br>SAFFMedic merupakan Aplikasi Layanan Sistem Informasi
                                        dan
                                        Manajemen
                                        Klinik berbasis cloud terintegrasi dimana data yang dihasilkan dihasilkan tersimpan
                                        di
                                        server PT. Saka Access Fix. Ketika PELANGGAN menggunakan SAFFMedic, PELANGGAN secara
                                        langsung maupun tidak langsung memberikan data kepada PT. Saka Access Fix yang akan
                                        dilindungi dan gunakan dalam metode yang diatur dalam Kebijakan ini. Sebagai contoh,
                                        data
                                        yang dikumpulkan dapat berupa nama, alamat e-mail, nomor telepon dan data lainnya
                                        yang
                                        diberikan sehubungan dengan penggunaan Anda atas SAFFMedic.
                                        <ul class="list-disc ml-5">
                                            <li class="mb-4">Pembagian data ke pihak ketiga : <br>PT. SAKA ACCESS FIX
                                                tidak
                                                akan
                                                menjual, menyewakan, atau menyebarkan data tanpa izin dari PELANGGAN kecuali
                                                ditentukan lain dalam Kebijakan ini. Data hanya akan diungkapkan kepada
                                                pihak
                                                ketiga
                                                atas izin atau jika diperlukan untuk mengakomodir kebutuhan penggunaan
                                                SAFFMedic.
                                                Pihak yang dimaksud adalah regulator (Kementerian Kesehatan) dan pihak-pihak
                                                lain
                                                yang memiliki kewenangan dari pemerintah.</li>
                                            <li>Akses administratif untuk informasi: <br>PT. SAKA ACCESS FIX
                                                menetapkan prosedur internal yang sangat ketat untuk mencegah karyawan atau
                                                administrator untuk mendapatkan akses ke akun PELANGGAN diluar data terbatas
                                                yang
                                                diperlukan untuk memberi bantuan yang diperlukan atau menyelesaikan masalah.
                                                PT.SAKA
                                                ACCESS FIX menyimpan catatan untuk semua akses kepada akun PELANGGAN, maupun
                                                itu
                                                PELANGGAN, administrator, atau orang yang tidak dikenal, dan PT SAKA ACCESS
                                                FIXmelakukan audit pada catatan ini secara teratur untuk memastikan
                                                keamanan.
                                            </li>
                                        </ul>
                                    </li>
                                    <li><b>KEWAJIBAN, HAK, TANGGUNG JAWAB DAN LARANGAN PELANGGAN</b>
                                        <ol class="list-decimal ml-5">
                                            <li class="mb-4">Kewajiban Anda :
                                                <ul class="list-disc ml-5">
                                                    <li class="mb-2">Membayar biaya langganan bulanan Aplikasi SAFFMedic
                                                        sesuai
                                                        dengan paket
                                                        (Basic, Medium, Medium II, Pro, Enterprise) dan biaya Add On. PT.
                                                        SAKA
                                                        ACCESS FIX</li>
                                                    <li class="mb-2">Menyediakan perangkat penunjang teknologi minimal
                                                        untuk
                                                        menjalankan
                                                        SAFFMedic dengan detail sebagai berikut :
                                                        <ol class="list-decimal list-outside ml-7">
                                                            <li>Jaringan internet (minim 10 MBps) dedicated / 50 MBps untuk
                                                                sharing.
                                                            </li>
                                                            <li>Satu (1) mesin pencetak (printer A4 / roll).</li>
                                                            <li>Perangkat komputer (PC / laptop) dengan spesifikasi sebagai
                                                                berikut
                                                                :
                                                                <ul class="list-disc ml-7">
                                                                    <li>Operating System = Windows</li>
                                                                    <li>Processor minimum dengan core i3 gen 8th atau AMD
                                                                        minimum
                                                                        Athlon Silver</li>
                                                                    <li>RAM minimum 4 GB</li>
                                                                    <li>Internal Storage SSD minimum 256 GB</li>
                                                                </ul>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="mb-2">Memelihara perangkat penunjang teknologi untuk
                                                        menjalankan
                                                        SAFFMedic agar
                                                        selalu dalam keadaan baik.</li>
                                                    <li class="mb-2">Memberikan izin (apabila diperlukan) kepada PT. SAKA
                                                        ACCESS
                                                        FIX untuk proses
                                                        instalasi dan migrasi data SAFFMedic di akun Anda.</li>
                                                    <li class="mb-2">Melaporkan kepada PT. SAKA ACCESS FIX jika layanan
                                                        SAFFMedic
                                                        mengalami
                                                        gangguan.</li>
                                                    <li class="mb-2">Setiap pemindah-tanganan hak tanggung jawab dan/atau
                                                        kewajiban PELANGGAN
                                                        terkait layanan SAFFMedic kepada pihak lain harus dilaporkan secara
                                                        tertulis
                                                        kepada PT. SAKA ACCESS FIX.</li>
                                                    <li>Menginformasikan minimal 30 hari sebelumnya kepada PT. SAKA ACCESS
                                                        FIX
                                                        secara tertulis apabila ingin menghentikan langganan layanan
                                                        SaffMedic
                                                        untuk sementara atau seterusnya.</li>
                                                </ul>
                                            </li>
                                            <li class="mb-4">Hak Anda :
                                                <ul class="list-disc ml-5">
                                                    <li class="mb-2">Mendapatkan layanan SAFFMedic sesuai dengan paket
                                                        yang
                                                        Anda
                                                        beli.</li>
                                                    <li>Mendapatkan pelayanan yang baik sesuai dengan jaminan tingkat
                                                        layanan
                                                        (Service Level Guarantee) dari PT.SAKA ACCESS FIX terkait aplikasi
                                                        SAFFMedic.</li>
                                                    <li class="mb-2">Mendapatkan informasi mengenai spesifikasi teknis,
                                                        sifat-sifat dan
                                                        karakteristik umum aplikasi SAFFMedic yang disediakan PT. SAKA
                                                        ACCESS
                                                        FIX.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mb-4">Tanggung Jawab Anda :
                                                <ul class="list-disc ml-5">
                                                    <li class="mb-2">Anda bertanggung jawab sepenuhnya atas setiap
                                                        penggunaan
                                                        layanan SAFFMedic
                                                        terhadap data yang Anda input di SAFFMedic.</li>
                                                    <li class="mb-2">Anda bertanggung jawab sepenuhnya atas setiap
                                                        penggunaan
                                                        layanan SAFFMedic
                                                        oleh siapapun termasuk penggunaan oleh anggota keluarga, pegawai,
                                                        penghuni
                                                        atau pihak ketiga lainnya.</li>
                                                    <li>Anda harus memastikan bahwa semua nama pengguna (username) dan kata
                                                        sandi
                                                        (password) yang diperlukan untuk mengakses Layanan SAFFMedic
                                                        tersimpan
                                                        dengan aman dan secara rahasia. Anda harus segera memberitahu
                                                        SAFFMedic
                                                        mengenai pemakaian kata sandi (password) Anda dari pihak yang tidak
                                                        berwenang, atau pelanggaran keamanan lainnya, dan SAFFMedic akan
                                                        melakukan
                                                        pengaturan ulang (reset) terhadap kata sandi (password) Anda, dan
                                                        Anda
                                                        harus
                                                        melakukan semua tindakan lainnya yang dianggap cukup penting oleh
                                                        SAFFMedic
                                                        untuk mempertahankan atau meningkatkan keamanan sistem komputer dan
                                                        jaringan
                                                        Saffmedic, dan akses Anda kepada Layanan SAFFMedic.</li>
                                                </ul>
                                            </li>
                                            <li class="mb-4">Larangan Anda :
                                                <ul class="list-disc ml-5">
                                                    <li class="mb-2">Tidak mencoba untuk melemahkan keamanan atau
                                                        integritas
                                                        dari
                                                        sistem komputer
                                                        atau jaringan SAFFMedic, atau jika Layanan-nya dikelola (hosted)
                                                        oleh
                                                        pihak
                                                        ketiga, sistem komputer atau jaringan pihak ketiga tersebut.</li>
                                                    <li class="mb-2">Tidak menggunakan atau menyalahgunakan Layanan
                                                        SAFFMedic
                                                        dengan cara apapun
                                                        yang dapat mengganggu kemampuan pengguna lain untuk menggunakan
                                                        Layanan
                                                        atau
                                                        Website SAFFMedic.</li>
                                                    <li class="mb-2">Tidak mencoba untuk mendapatkan akses yang tidak sah
                                                        kepada
                                                        materi apapun
                                                        selain yang sudah dinyatakan dengan jelas bahwa Anda telah
                                                        mendapatkan
                                                        izin
                                                        untuk mengaksesnya, atau untuk mengakses sistem komputer SAFFMedic
                                                        dimana
                                                        Layanan-nya dikelola (hosted).</li>
                                                    <li class="mb-2">Tidak mengirimkan, atau memasukan kedalam Website
                                                        dan
                                                        perangkat lunak
                                                        SAFFMedic: berkas (file) apapun yang dapat merusak alat komputer
                                                        atau
                                                        perangkat lunak orang lain, materi yang bersifat menghina, atau Data
                                                        yang
                                                        melanggar hukum apapun (termasuk Data atau materi lainnya yang
                                                        terlindungi
                                                        oleh hak cipta atau rahasia dagang dimana Anda tidak memiliki
                                                        otorisasi
                                                        untuk menggunakannya).</li>
                                                    <li class="mb-2">Tidak mencoba untuk mengubah, menyalin, meniru,
                                                        membongkar,
                                                        atau melakukan
                                                        reverse engineering untuk program komputer apapun yang dipakai untuk
                                                        memberi
                                                        Layanan SAFFMedic, atau untuk menggunakan Website diluar penggunaan
                                                        yang
                                                        diperlukan dan dimaksudkan.</li>
                                                    <li class="mb-2">Tidak melakukan penjualan kembali (re-sale) jasa
                                                        layanan
                                                        SAFFMedic dalam
                                                        bentuk apapun tanpa seizin PT. SAKA ACCESS FIX.</li>
                                                    <li>Melakukan tindakan-tindakan yang melanggar norma-norma kesopanan,
                                                        kesusilaan
                                                        peraturan, atau hukum yang berlaku di Wilayah Republik Indonesia.
                                                    </li>
                                                </ul>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><b>KEWAJIBAN, HAK DAN LARANGAN BAGI PT. SAKA ACCESS FIX</b>
                                        <ol class="list-decimal ml-5">
                                            <li class="mb-4">Kewajiban PT. SAKA ACCESS FIX
                                                <ul class="list-disc ml-5">
                                                    <li class="mb-2">Menyediakan layanan SAFFMedic di alamat PELANGGAN
                                                        atas
                                                        permintaan PELANGGAN
                                                        yang memenuhi ketentuan teknis PT. SAKA ACCESS FIX.</li>
                                                    <li class="mb-2">Memberikan pelayanan yang baik dan transparan
                                                        terkait
                                                        layanan SAFFMedic
                                                        kepada PELANGGAN.</li>
                                                    <li class="mb-2">Memberikan informasi mengenai spesifikasi teknis,
                                                        modul-modul, dan fitur
                                                        aplikasi SAFFMedic yang disampaikan melalui media komunikasi PT.
                                                        SAKA
                                                        ACCESS
                                                        FIX, seperti brosur, leaflet, e-mail, WhatsApp, website, social
                                                        media,
                                                        atau
                                                        media lainnya.</li>
                                                    <li class="mb-2">Memberikan jaminan tingkat layanan (Service Level
                                                        Guarantee)
                                                        SAFFMedic
                                                        sesuai dengan ketentuan PT. SAKA ACCESS FIX.</li>
                                                    <li class="mb-2">Menindak lanjuti laporan PELANGGAN jika Aplikasi
                                                        SAFFMedic
                                                        mengalami
                                                        gangguan.</li>
                                                    <li class="mb-2">Menindak lanjuti laporan PELANGGAN atas setiap
                                                        pemindah-tanganan hak
                                                        tanggung jawab dan/atau kewajiban PELANGGAN terkait Aplikasi
                                                        SAFFMedic
                                                        kepada pihak lain.</li>
                                                    <li>Menindak lanjuti permintaan PELANGGAN untuk berhenti berlangganan
                                                        Aplikasi
                                                        SAFFMedic sementara atau memutuskan Perjanjian ini.</li>
                                                </ul>
                                            </li>
                                            <li class="mb-4">Hak PT. SAKA ACCESS FIX
                                                <ul class="list-disc ml-5">
                                                    <li class="mb-2">Menerima pembayaran berlangganan layanan Aplikasi
                                                        SAFFMedic
                                                        sesuai dengan
                                                        paket (Basic, Medium, Medium II, Pro, Enterprise).</li>
                                                    <li class="mb-2">Melakukan perubahan layanan dan pembaruan Aplikasi
                                                        SAFFMedic
                                                        dalam rangka
                                                        meningkatkan nilai tambah layanan, kehandalan dan keamanan Aplikasi
                                                        SAFFMedic untuk PELANGGAN.</li>
                                                    <li class="mb-2">Menolak permintaan tambahan diluar Aplikasi
                                                        SAFFMedic
                                                        yang
                                                        diajukan
                                                        PELANGGAN, bila tidak memenuhi ketentuan teknis PT. SAKA ACCESS FIX.
                                                    </li>
                                                    <li class="mb-2">Memeriksa perangkat penunjang teknologi PELANGGAN
                                                        untuk
                                                        memastikan agar
                                                        Aplikasi SAFFMedic dapat berfungsi dengan baik.</li>
                                                    <li>Mengenakan sanksi kepada PELANGGAN sesuai ketentuan butir 7.</li>
                                                </ul>
                                            </li>
                                            <li>Larangan bagi PT. SAKA ACCESS FIX
                                                <ul class="list-disc ml-5">
                                                    <li class="mb-2">PT. SAKA ACCESS FIX dilarang melakukan perubahan
                                                        dalam
                                                        bentuk apapun
                                                        terhadap database Aplikasi SAFFMedic terdaftar milik Akun PELANGGAN
                                                        tanpa
                                                        sepengetahuan PELANGGAN kecuali dilakukan sesuai butir 6.1.d</li>
                                                    <li>PT. SAKA ACCESS FIX dilarang mengenakan sanksi kepada PELANGGAN
                                                        selain
                                                        sanksi berdasarkan ketentuan butir 7.</li>
                                                </ul>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><b>SANKSI</b>
                                        <ol class="list-decimal ml-5">
                                            <li class="mb-2">Pelanggaran terhadap butir 6.1.a dikenakan sanksi
                                                pengisoliran
                                                sampai dengan
                                                pemberhentian layanan Aplikasi SAFFMedic sesuai dengan ketentuan PT. SAKA
                                                ACCESS
                                                FIX
                                                dengan masa tenggang 15 hari yang dimana PELANGGAN akan mendapatkan
                                                peringatan
                                                tertulis pada tanggal habisnya bulan berlangganan berjalan.</li>
                                            <li>PELANGGAN dengan ini memahami, mengetahui dan menyatakan bahwa ketentuan
                                                dalam
                                                sanksi merupakan pemberitahuan/ informasi tentang kemungkinan dikenakannya
                                                sanksi
                                                tersebut, oleh karena itu tidak ada kewajiban bagi PT. SAKA ACCESS FIX untuk
                                                memberitahukan lebih dahulu kepada PELANGGAN atas pengenaan sanksi dimaksud.
                                            </li>
                                        </ol>
                                    </li>
                                    <li><b>PEMBATASAN TANGGUNG JAWAB PT. SAKA ACCESS FIX</b>
                                        <p>PT. SAKA ACCESS FIX dibebaskan dari tanggung jawab atas pembayaran kompensasi
                                            atau
                                            kerugian yang telah ditanggung oleh PELANGGAN, baik kerugian langsung ataupun
                                            tidak
                                            langsung sebagai akibat dari berfungsinya atau tidak berfungsinya Aplikasi
                                            SAFFMedic,
                                            karena :</p>
                                        <ol class="list-decimal ml-5">
                                            <li class="mb-2">Kerusakan / gangguan perangkat penunjang teknologi Aplikasi
                                                SAFFMedic milik
                                                PELANGGAN.</li>
                                            <li class="mb-2">Kegagalan akses jaringan ke Aplikasi SAFFMedic yang
                                                diakibatkan
                                                kelalaian penyedia
                                                jaringan internet.</li>
                                            <li class="mb-2">Kegagalan koneksi Aplikasi SAFFMedic dengan aplikasi pihak
                                                ketiga
                                                semisal BPJS.</li>
                                            <li class="mb-2">Kesalahan tagihan dan rekam medis terhadap pasien yang
                                                diakibatkan
                                                kelalaian
                                                penggunaan dari master data, input user, dan kata sandi oleh PELANGGAN.</li>
                                            <li>Kerusakan akibat peristiwa / kejadian diluar batas kendali normal PT. SAKA
                                                ACCESS
                                                FIX (Force Majeur).</li>
                                        </ol>
                                    </li>
                                    <li><b>FORCE MAJEURE</b>
                                        <ul class="list-disc ml-5">
                                            <li class="mb-2">Tidak dilaksanakannya sebagian atau seluruh ketentuan
                                                Perjanjian
                                                ini
                                                oleh PELANGGAN
                                                atau PT. SAKA ACCESS FIX tidak termasuk sebagai pelanggaran atas Perjanjian
                                                jika
                                                hal
                                                tersebut disebabkan oleh keadaan force majeure (keadaan memaksa).</li>
                                            <li class="mb-2">Yang termasuk force majeure adalah kejadian-kejadian yang
                                                tidak
                                                dapat diduga yang
                                                berdampak luas serta tidak dapat diatasi oleh pihak yang mengalaminya atau
                                                pihak
                                                lainnya dan /atau diumumkan oleh pemerintah setempat, termasuk
                                                peristiwa-peristiwa
                                                bencana alam, wabah penyakit, huru hara, perang, kebakaran, sabotase,
                                                pemogokan
                                                umum, putus aliran listrik umum/ PLN.</li>
                                            <li>Seluruh kerugian yang dialami oleh PELANGGAN atau PT. SAKA ACCESS FIX
                                                sebagai
                                                akibat
                                                dari keadaan force majeure tidak menjadi tanggung jawab pihak lainnya.</li>
                                        </ul>
                                    </li>
                                    <li><b>PENYELESAIAN PERSELISIHAN</b>
                                        <ul class="list-disc ml-5">
                                            <li class="mb-2">Perselisihan yang menyangkut pelaksanaan dan /atau
                                                penafsiran
                                                atas
                                                Perjanjian ini
                                                diselesaikan bersama oleh PT. SAKA ACCESS FIX dan PELANGGAN secara
                                                musyawarah.
                                            </li>
                                            <li>Apabila penyelesaian secara musyawarah berdasarkan ketentuan butir 11.1
                                                tidak
                                                tercapai maka SAKA ACCESS FIX dan PELANGGAN sepakat menyerahkan
                                                penyelesaiannya
                                                kepada Pengadilan Negeri (PN) / Badan Penyelesaian Sengketa Konsumen (BPSK)
                                                dengan
                                                domisili hukum dilokasi kantor PT. SAKA ACCESS FIX</li>
                                        </ul>
                                    </li>
                                    <li class="list-disc"><b>Ketentuan Umum Lainnya</b>
                                        <ul class="list-disc ml-7 mt-2">
                                            <li class="mb-2">Syarat & Ketentuan ini, bersama dengan Kebijakan Privasi
                                                SAFFMedic
                                                dan ketentuan
                                                dari pemberitahuan atau instruksi yang diberikan kepada Anda di bawah Syarat
                                                dan
                                                Ketentuan ini menggantikan dan menghapus semua perjanjian sebelumnya,
                                                representasi
                                                (baik lisan maupun tulisan), dan pemahaman, dan merupakan keseluruhan
                                                perjanjian
                                                antara Anda dan SAFFMedic yang berhubungan dengan Layanan dan hal lainnya
                                                yang
                                                dibahas dalam Ketentuan ini.</li>
                                            <li class="mb-2">Jika salah satu pihak melepaskan tuntutan dari pelanggaran
                                                apapun
                                                pada Ketentuan
                                                ini, ini tidak akan melepaskan mereka dari tuntutan pelanggaran lainnya.
                                                Pelepasan
                                                dari tuntutan tidak efektif kecuali dibuat secara tulisan.</li>
                                            <li class="mb-2">Anda tidak dapat mengalihkan atau mentransfer hak kepada
                                                orang
                                                lain
                                                tanpa
                                                persetujuan tertulis dari SAFFMedic.</li>
                                            <li class="mb-2">Setiap pemberitahuan yang diberikan berdasarkan Persyaratan
                                                ini
                                                oleh
                                                satu pihak ke
                                                yang lain harus dilakukan secara tertulis.</li>
                                            <li class="mb-2">Subscription adalah pembayaran berulang yang dibayar di muka
                                                untuk
                                                mengkonsumsi jasa
                                                aplikasi manajemen fasilitas kesehatan yang disediakan oleh SAFFMedic.
                                                Setelah
                                                subscription telah dibeli, anda bisa membatalkan setiap saat tanpa biaya
                                                tambahan
                                                kecuali yang sudah dibayarkan. Pembatalan membutuhkan paling lama 14 (empat
                                                belas)
                                                hari sebelum efektif.</li>
                                            <li class="mb-2">Hal-hal yang belum cukup diatur dalam Perjanjian ini akan
                                                diatur
                                                lebih lanjut dalam
                                                brosur, buku, leaflet, catalog produk, pengumuman/ pemberitahuan dan/ atau
                                                dokumen
                                                lain yang diterbitkan secara resmi dari waktu ke waktu oleh PT. SAKA ACCESS
                                                FIX.
                                            </li>
                                            <li>PELANGGAN sepenuhnya memahami, menerima, dan tunduk pada syarat dan
                                                ketentuan
                                                berlangganan jasa layanan SAFFMedic sebagaimana tertuang dalam Perjanjian
                                                ini,
                                                termasuk tetapi tidak terbatas pada layanan telekomunikasi lainnya yang
                                                dapat
                                                dikembangkan oleh PT. SAKA ACCESS FIX dari waktu ke waktu.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div id="5" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">INTEGRASI PIHAK DILUAR SAFFMedic</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-inside">
                                    <li>Integrasi yang diajukan oleh Pengguna terkait Pihak Lain diluar SAFFMedic akan
                                        dikenakan
                                        biaya
                                        tambahan.</li>
                                    <li>Besarnya biaya yang akan dibebankan tergantung pada kebutuhan integrasi yang akan
                                        diterapkan.
                                    </li>
                                    <li>Semua dampak yang timbul akibat integrasi dengan Pihak Lain diluar SAFFmedic
                                        selanjutnya
                                        akan
                                        menjadi tanggung Jawab Pengguna.</li>
                                </ol>
                            </div>
                        </div>

                        <div id="6" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">PENGKINIAN DAN PERUBAHAN TERHADAP LAYANAN ATAU SYARAT DAN
                                    KETENTUAN
                                    INI
                                </h6>
                                <p class="my-4">Layanan SAFFMedic dapat berubah dari waktu ke waktu berdasarkan kebijakan
                                    PT.
                                    SaKa
                                    Access
                                    Fix, keputusan pemerintah, perubahan teknis dari sistem, dan/atau oleh karena sebab
                                    lainnya.
                                    SAFFMedic
                                    berhak untuk mengubah Syarat dan Ketentuan ini kapan saja, dan mulai berlaku pada saat
                                    Syarat
                                    dan
                                    Ketentuan yang baru atau yang telah direvisi di tampilkan di Website SAFFMedic. Anda
                                    berkewajiban
                                    untuk
                                    memastikan bahwa Anda sudah membaca, mengerti, dan menyetujui Syarat dan Ketentuan
                                    terbaru
                                    yang
                                    tersedia
                                    pada Website SAFFMedic.asia Dengan mendaftarkan diri untuk menggunakan Layanan
                                    SAFFMedic,
                                    Anda
                                    menyatakan bahwa Anda sudah membaca, mengerti, dan menyetujui Syarat dan Ketentuan ini,
                                    dan
                                    dianggap
                                    memiliki wewenang untuk bertindak atas nama siapapun yang terdaftar untuk menggunakan
                                    Layanan
                                    Kami.
                                    <b>PERNYATAAN, JAMINAN DAN PENGAKUAN PELANGGAN</b>
                                </p>

                                <ol class="list-decimal flex flex-col gap-5 list-inside">
                                    <li>Anda menjamin bahwa, jika Anda mendaftar untuk menggunakan Layanan atas nama orang
                                        lain,
                                        Anda
                                        memiliki wewenang untuk menyetujui Syarat dan Ketentuan ini atas nama orang
                                        tersebut,
                                        dan
                                        menyetujui
                                        bahwa dengan mendaftar untuk memakai Layanan, Anda mengikat orang yang Anda atas
                                        namakan
                                        untuk,
                                        atau
                                        dengan niat untuk, membuat tindakan atas nama mereka kepada setiap kewajiban manapun
                                        yang
                                        Anda
                                        telah
                                        setujui pada Syarat dan Ketentuan ini, tanpa membatasi kewajiban Anda sendiri kepada
                                        ketentuannya.
                                    </li>

                                    <li>Anda mengakui bahwa:
                                        <ul class="flex flex-col gap-5 list-inside ms-5">
                                            <li>a. Anda memiliki wewenang untuk menggunakan Layanan dan Website, dan untuk
                                                mengakses
                                                informasi dan Data yang Anda masukan kedalam Website dan sistem, termasuk
                                                informasi
                                                atau
                                                Data apapun yang dimasukan kedalam Website dan sistem oleh siapapun yang
                                                Anda
                                                telah
                                                beri
                                                kewenangan untuk menggunakan Layanan. Anda juga berwenang untuk mengakses
                                                informasi
                                                dan
                                                data
                                                yang sudah diproses, yang disediakan untuk Anda melalui penggunaan Anda pada
                                                Website
                                                dan
                                                Layanan Kami (maupun informasi dan Data itu Anda miliki sendiri atau milik
                                                orang
                                                lain).
                                            </li>

                                            <li>b. SAFFMedic tidak bertanggung jawab kepada siapapun selain Anda, dan tidak
                                                ada
                                                maksud
                                                apapun dalam Syarat dan Ketentuan ini untuk memberi manfaat kepada siapapun
                                                selain
                                                Anda.
                                                Jika Anda memakai Layanan atau mengakses Website atas nama atau untuk
                                                manfaat
                                                seseorang
                                                selain Anda (maupun organisasi berbadan hukum atau tidak, atau lainnya),
                                                Anda
                                                menyetujui
                                                bahwa:

                                                <ul class="list-disc flex flex-col gap-5 list-inside ms-20 mt-5">
                                                    <li>Anda bertanggung jawab untuk memastikan bahwa Anda memiliki hak
                                                        untuk
                                                        melakukannya;
                                                    </li>
                                                    <li>Anda bertanggung jawab atas pemberian wewenang kepada siapapun yang
                                                        Anda
                                                        berikan
                                                        akses kepada informasi atau Data, dan Anda menyetujui bahwa
                                                        SAFFMedic
                                                        tidak
                                                        memiliki
                                                        tanggung jawab untuk menyediakan siapapun akses kepada informasi
                                                        atau
                                                        Data
                                                        tersebut
                                                        tanpa otorisasi Anda;</li>
                                                    <li>Anda membebaskan SAFFMedic dari klaim apapun atau kehilangan yang
                                                        terkait
                                                        pada
                                                        penolakan SAFFMedic untuk menyediakan akses pada siapapun kepada
                                                        informasi
                                                        atau
                                                        Data
                                                        Anda sesuai dengan Syarat dan Ketentuan ini, penyediaan informasi
                                                        atau
                                                        Data
                                                        oleh
                                                        SAFFMedic kepada siapapun berdasarkan otorisasi Anda.</li>
                                                </ul>
                                            </li>

                                            <li>c. Penyediaan, akses kepada, dan pemakaian Layanan tersedia sebagaimana
                                                adanya
                                                dan
                                                pada
                                                resiko Anda sendiri.
                                            </li>

                                            <li>d. SAFFMedic tidak menjamin bahwa penggunaan Layanan tidak akan pernah
                                                terganggu
                                                atau
                                                bebas
                                                dari kesalahan. Di antara lain, operasi dan ketersediaan sistem yang
                                                digunakan
                                                untuk
                                                mengakses Layanan, termasuk layanan telepon umum, jaringan komputer dan
                                                internet,
                                                bisa
                                                susah
                                                diprediksi dan mungkin bisa dari waktu ke waktu mengganggu atau mencegah
                                                akses
                                                kepada
                                                Layanan. SAFFMedic dengan bagaimanapun tidak bertanggung jawab atas gangguan
                                                tersebut,
                                                atau
                                                pencegahan akses kepada penggunaan Layanan.
                                            </li>

                                            <li>e. SAFFMedic bukanlah akuntan Anda, dan penggunaan Layanan tidak merupakan
                                                penerimaan
                                                nasihat akunting. Jika Anda memiliki pertanyaan akunting, harap hubungi
                                                seorang
                                                akuntan.
                                            </li>

                                            <li>f. Untuk menentukan bahwa Layanan Kami memenuhi keperluan bisnis Anda dan
                                                bisa
                                                digunakan
                                                sesuai dengan tujuan adalah tanggung jawab Anda sendiri.</li>

                                            <li>g. Anda tetap memiliki tanggung jawab untuk mematuhi semua undang-undang
                                                Kesehatan,
                                                akuntansi, perpajakan, dan lainnya yang berlaku. Menjadi tanggung jawab Anda
                                                untuk
                                                memeriksa
                                                bahwa penyimpanan dan akses kepada Data Anda melalui Layanan dan Website
                                                tetap
                                                mematuhi
                                                undang-undang yang berlaku kepada Anda (termasuk undang-undang apapun yang
                                                membutuhkan
                                                Anda
                                                untuk menyimpan arsip).</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div id="7" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">HAL-HAL DI LUAR TANGGUNG JAWAB PIHAK PT. SaKa Access Fix</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-inside">
                                    <li>Gangguan pada koneksi jaringan yang dimiliki oleh PENGGUNA</li>
                                    <li>Penyalahgunaan fungsi sistem produk yang mengakibatkan pelanggaran hukum yang
                                        dilakukan
                                        oleh
                                        PENGGUNA</li>
                                    <li>Segala sesuatu yang mengakibatkan hilang atau bocornya data akibat kelalaian atau
                                        kesengajaan
                                        dari
                                        PENGGUNA</li>
                                </ol>
                            </div>
                        </div>

                        <div id="8" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">REGULASI DI LUAR SAFFMedic</h6>
                                <ol class="list-decimal flex flex-col gap-5 list-inside">
                                    <li>PT. SaKa Access Fix tunduk pada segala Peraturan PerUndang-Undangan yang berlaku,
                                        oleh
                                        karena
                                        itu
                                        apabila PENGGUNA mengalami kerugian yang disebabkan oleh Peraturan
                                        PerUndang-Undangan
                                        yang
                                        berlaku
                                        tidak dapat melakukan penuntutan maupun gugatan kepada SAFFMedic.</li>
                                    <li>Dampak dari regulasi yang berasal dari luar PARA PIHAK merupakan dampak yang akan
                                        dipikul
                                        PENGGUNA
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div id="9" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">PENAFIAN</h6>
                                <p>PT SaKa Access Fix INSAN SINERGI tidak bertanggung jawab atas segala kerusakan baik
                                    khusus,
                                    tidak
                                    langsung, berkonsekuensi, maupun yang disebabkan dari kerugian penggunaan data ataupun
                                    keuntungannya,
                                    baik karena kelalaian maupun tindakan lainnya, yang timbul sehubungan dengan penggunaan
                                    kinerja
                                    peranti
                                    lunak, dokumentasi, atau informasi yang tersedia di situs web.
                                    <br><br>
                                    Dokumen-dokumen yang diumumkan pada situs web ini boleh jadi mengandungi sekelumit
                                    kesalahan
                                    teknis
                                    atau
                                    kesalahan pengetikan. Informasi yang disajikan di situs web dan peranti lunak dapat
                                    berubah
                                    secara
                                    berkala dan PT SaKa Access Fix INSAN SINERGI dapat melakukan pembetulan dan/atau
                                    perubahan
                                    produk,
                                    program, dan/atau dokumentasi yang dijelaskan setiap saat tanpa pemberitahuan terlebih
                                    dahulu.
                                </p>
                            </div>
                        </div>

                        <div id="10" class="tabcontent">
                            <div class="mb-7">
                                <h6 class="font-bold my-4">UMPAN BALIK DAN INFORMASI</h6>
                                <p>Umpan balik yang Anda berikan kepada Kami dianggap bukan rahasia. PT SaKa Access Fix
                                    dapat
                                    bebas
                                    untuk
                                    menggunakan informasi tersebut secara tak terbatas dengan tetap mengacu pada etika
                                    bisnis PT
                                    SaKa
                                    Access
                                    Fix
                                    <br><br>
                                    Apabila Anda memiliki pertanyaan lebih lanjut mengenai persyaratan penggunaan, silakan
                                    hubungi
                                    kami
                                    di
                                    <a class="underline" href="mailto:info@saffmedic.com">info@saffmedic.com</a> atau
                                    lihat <a class="underline" href="{{ route('kontak') }}">alamat</a> kami.
                                </p>
                            </div>
                        </div>

                        <div id="11" class="tabcontent">
                            <div class="mb-7">
                                <h4 class="font-bold my-4">Kerja Sama Operasi (KSO) dalam Penggunaan SAFFMedic</h4>
                                <br>
                                <h6 class="font-bold my-4">Latar Belakang</h6>
                                Kami memahami bahwa banyak klinik dan rumah sakit memiliki beberapa prioritas dalam
                                menyediakan fasilitas dan infrastruktur. Selain menentukan skala prioritas, biasanya
                                keputusan tersebut juga mempertimbangkan faktor jumlah, waktu, dan biaya
                                <br><br>
                                SAFFMedic menawarkan beberapa pilihan paket dan harga (lihat di sini). Masing-masing paket
                                memiliki kapasitas penggunaan tertentu. Namun, klinik dan rumah sakit sering kali kesulitan
                                memprediksi jumlah kebutuhan setiap bulan. Pada bulan-bulan tertentu, mungkin terjadi
                                lonjakan jumlah pasien yang menyebabkan paket yang ada tidak memenuhi kebutuhan kuota
                                <br><br>
                                <h6 class="font-bold my-4">Solusi KSO</h6>
                                Melihat kondisi tersebut, SAFFMedic menyediakan opsi KSO sebagai solusi yang lebih fleksibel
                                bagi klinik dan rumah sakit. Dalam skema ini, klinik atau rumah sakit dapat menggunakan
                                layanan SAFFMedic sesuai kebutuhan, dan biaya akan dihitung setiap bulan berdasarkan
                                penggunaan aktual.
                                <br><br>
                                <h4 class="font-bold my-4">Keuntungan dari Pola Kerja Sama Sistem Operasi:</h4>
                                <ul class="list-disc flex flex-col gap-4 list-inside ps-5 mt-5">
                                    <li>
                                        Investasi awal yang lebih rendah
                                    </li>
                                    <li>
                                        Bebas dari masalah teknis, karena dikelola oleh penyedia layanan
                                    </li>
                                    <li>
                                        Sistem mendapat pemeliharaan rutin
                                    </li>
                                    <li>
                                        Pembayaran sistem disesuaikan dengan pendapatan Klinik atau Rumah Sakit
                                    </li>
                                </ul>
                                <br>
                                <h4 class="font-bold my-4">Syarat dan Ketentuan</h4>
                                <ul class="list-disc flex flex-col gap-4 list-inside ps-5 mt-5">
                                    <li>
                                        Klinik atau rumah sakit yang menggunakan KSO diwajibkan menyetor deposit sesuai dengan paket yang dipilih
                                    </li>
                                    <li>
                                        Deposit tersebut menjadi jaminan pembayaran atas penggunaan layanan SAFFMedic oleh
                                        klinik atau rumah sakit
                                    </li>
                                    <li>
                                        SAFFMedic akan mengirimkan rekap penggunaan
                                    </li>
                                    <li>
                                        Klinik atau rumah sakit wajib melakukan pembayaran paling lambat tanggal 10 setiap
                                        awal bulan.
                                    </li>
                                    <li>
                                        Apabila pembayaran belum dilakukan hingga tanggal 15, layanan akan dinonaktifkan
                                        sementara hingga pembayaran diterima.
                                    </li>
                                    <li>
                                        Jika tidak ada pembayaran selama satu bulan penuh, SAFFMedic berhak menghapus data
                                        klinik atau rumah sakit secara permanen. SAFFMedic tidak bertanggung jawab atas data
                                        dan informasi yang tersimpan di database tersebut setelah penghapusan.
                                    </li>
                                    <li>
                                        Dana deposit dapat digunakan oleh SAFFMedic untuk melunasi tagihan jika klinik atau
                                        rumah sakit belum melakukan pembayaran sesuai ketentuan.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p>Diperbaharui pada 04 Juni 2025</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section 2 --}}

    <script>
        if (window.location.hash === '#kso') {
            document.getElementById('defaultOpen')?.removeAttribute('id');
            const ksoButton = document.querySelector('button[name="kso-1"]');
            if (ksoButton) {
                ksoButton.setAttribute('id', 'defaultOpen');
            }
        }

        function openTabs(evt, tabsName) {
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

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabsName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>
@endsection
