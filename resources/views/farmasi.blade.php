@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto my-10" data-aos="fade-right" data-aos-duration="1000">
        <div class="flex flex-col md:flex-row justify-center md:gap-10 p-5">
            <div class="md:w-[40%]">
                <img src="img/bg-farmasi.png" alt="Fitur Farmasi">
            </div>

            <div class="md:w-[400px] text-darkgreen mt-8">
                <div class="font-bold mb-4">
                    <h1 class="text-3xl">FARMASI</h1>
                    <h2 class="text-lg">Dari stok hingga, Laporan Keuangan
                        hingga resep elektronik</h2>
                </div>
                <div>
                    <p class="text-deepturqoise">Apotek dalam SAFF-Medic dapat diterapkan secara mandiri dan juga terhubung
                        dengan berbagai sentra
                        layanan
                        atau poli.
                        <br><br>
                        SAFFMedic dapat diintegrasikan dengan resep digital yang disubmit dari ruang pemeriksaan Dokter.
                    </p>
                    <a role="button">
                        <div
                            class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md mt-8">
                            <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                            <a href="/whatsapp">Hubungi Sales</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section1 --}}

    {{-- Section2 --}}
    <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-1/4 text-darkgreen text-center mx-auto mb-20">
            <h1 class="text-3xl font-semibold mb-2">Fitur Lengkap</h1>
            <p>Mengelola stok hingga menghadirkan laporan keuangan, cukup dalam satu dashboard</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 justify-center gap-x-20 gap-y-10 p-5">
            <div
                class="md:w-[380px] md:place-self-end border rounded-3xl shadow-xl px-8 pt-10 pb-28 
                transition-transform transform duration-500 hover:scale-110">
                <img src="img/pembelian-farmasi.png" width="" class="w-[20%] mx-auto" alt="Pembelian">
                <h2 class="text-center my-4">Pembelian</h2>
                <ul class="list-image-check list-inside">
                    <li class="mb-2">Membuat permintaan pembelian</li>
                    <li class="mb-2">Melakukan pemesanan barang</li>
                    <li class="mb-2">Penerimaan barang pembelian</li>
                    <li class="mb-2">Pembuatan Faktur atau Nota Jual</li>
                </ul>
            </div>
            <div
                class="md:w-[380px] border rounded-3xl shadow-xl px-8 pt-10 pb-28 
                transition-transform transform duration-500 hover:scale-110">
                <img src="img/penjualan-farmasi.png" class="w-[20%] mx-auto" alt="Penjualan">
                <h2 class="text-center my-4">Penjualan</h2>
                <ul class="list-image-check list-inside">
                    <li class="mb-2">Lakukan penawaran</li>
                    <li class="mb-2">Buat pesanan Penjualan</li>
                    <li class="mb-2">Kirim barang ke customer</li>
                    <li class="mb-2">Siapkan nota dan tagihan</li>
                </ul>
            </div>
            <div
                class="md:w-[380px] md:place-self-end border rounded-3xl shadow-xl px-8 pt-10 pb-28 
                transition-transform transform duration-500 hover:scale-110">
                <img src="img/inventory-farmasi.png" class="w-[20%] mx-auto" alt="Inventory">
                <h2 class="text-center my-4">Inventory</h2>
                <ul class="list-image-check list-inside">
                    <li class="mb-2">Kartu stok</li>
                    <li class="mb-2">Batch Number</li>
                    <li class="mb-2">harga berdasarkan cabang</li>
                    <li class="mb-2">Mencetak barcode</li>
                </ul>
            </div>
            <div
                class="md:w-[380px] border rounded-3xl shadow-xl px-8 pt-10 pb-28 
                transition-transform transform duration-500 hover:scale-110">
                <img src="img/akutansi-farmasi.png" class="w-[20%] mx-auto" alt="Akutansi">
                <h2 class="text-center my-4">Akutansi</h2>
                <ul class="list-image-check list-inside">
                    <li class="mb-2">Kas Masuk</li>
                    <li class="mb-2">Kas Keluar</li>
                    <li class="mb-2">Uang Muka</li>
                    <li class="mb-2">Jurnal</li>
                </ul>
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section 2 --}}

    {{-- Section 3 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="md:w-1/4 text-darkgreen text-center mx-auto mb-20">
            <h1 class="text-3xl font-semibold mb-2">Fitur Lainnya</h1>
            <p>Apotek dan administrasi terintegtrasi dan tertata rapi</p>
        </div>

        <div class="flex flex-wrap justify-center gap-10 text-center text-darkteal">
            <div>
                <img src="img/merk-farmasi.png" class="w-[80%] mx-auto">
                <p>Merk</p>
            </div>
            <div>
                <img src="img/kategori-farmasi.png" class="w-[80%] mx-auto">
                <p>Kategori</p>
            </div>
            <div>
                <img src="img/satuan-farmasi.png" class="w-[80%] mx-auto">
                <p>Satuan</p>
            </div>
            <div>
                <img src="img/harga-tetap-farmasi.png" class="w-[80%] mx-auto">
                <p>Harta tetap</p>
            </div>
        </div>
        <div class="md:w-full lg:w-4/5 xl:w-3/4 mx-auto border rounded-3xl shadow-xl px-6 pt-10 pb-12 mt-20">
            <p class="text-xl text-gray-700 mb-4 leading-relaxed">
                SAFFMedic kini terintegrasi dengan 
                <a href="https://kfa.or.id/"
                class="text-[#0E5242] underline hover:text-[#166F61] transition-colors font-medium"
                target="_blank" rel="noopener noreferrer">
                    Kode KFA,
                </a>
                menjadikan pengelolaan obat dan alat kesehatan lebih akurat, 
                terstandar nasional, dan siap terhubung dengan SatuSehat Kemenkes RI.
            </p>
            <p class="text-lg text-gray-600 mt-4 font-medium">
                Apa itu Kode KFA?,
                <a href="https://saffmedic.com/artikel/saffmedic-kini-menggunakan-kode-kfa-untuk-farmasi-dan-alat-kesehatan"
                class="text-[#0E5242] underline font-bold hover:text-[#166F61] transition-colors"
                target="_blank" rel="noopener noreferrer">
                    baca di sini
                </a>
            </p>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section3 --}}

    {{-- Section4 --}}
    <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-1/4 text-darkgreen text-center mx-auto mb-20">
            <h1 class="text-3xl font-semibold mb-2">Multi Fungsi</h1>
            <h2>Dapat Digunakan untuk beragam fungsi</h2>
            <h2><strong>Terapkan SAFFMec untuk FASKES Anda</strong></h2>
        </div>

        <div class="md:w-5/6 mx-auto p-4 sm:px-0">
            <div class="md:w-5/6 md:mx-auto">
                <div role="tablist" aria-label="tabs"
                    class="relative md:w-max mx-auto h-12 grid grid-cols-3 items-center px-[3px] rounded-full bg-darkteal overflow-hidden shadow-2xl shadow-900/20 transition">
                    <div class="absolute indicator h-10 my-auto top-0 bottom-0 left-0 rounded-full shadow-md bg-goldenrod">
                    </div>
                    <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
                        class="relative block h-10 px-6 tab rounded-full">
                        <span class="md:text-2xl text-lg font-semibold text-white">Apotik</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
                        class="relative block h-10 px-6 tab rounded-full">
                        <span class="md:text-2xl text-lg font-semibold text-white">Klinik</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-3" id="tab-3" tabindex="-1"
                        class="relative block h-10 px-6 tab rounded-full">
                        <span class="hidden md:block text-2xl font-semibold text-white">Rumah Sakit</span>
                        <span class="md:hidden text-lg font-semibold text-white">RS</span>
                    </button>
                </div>
                <div class="mt-10 relative rounded-3xl text-darkteal font-medium">
                    <div role="tabpanel" id="panel-1" class="tab-panel p-6 transition duration-300">
                        <div class="flex flex-col md:flex-row justify-center gap-x-20 gap-y-5">
                            <div class="md:w-[300px] mt-2 order-2 md:order-1">
                                <p>Mempermudah pengelolaan Apotik, mulai dari penjualan, Pembelian, hingga pencatatan
                                    Keuangan</p>
                                <div
                                    class="text-turqoise mt-5 w-fit bg-goldenrod p-1 rounded-md transition-transform transform hover:scale-105">
                                    <a href="/apotek">Lebih lengkap</a>
                                </div>
                            </div>
                            <div class="md:w-[45%] order-1 md:order-2">
                                <img src="img/apotik-img-farmasi.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" id="panel-2"
                        class="absolute top-0 left-20 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <div class="flex flex-col md:flex-row justify-center gap-x-20 gap-y-5">
                            <div class="md:w-[300px] mt-2 order-2 md:order-1">
                                <p>Fitur Farmasi dapat diintegrasikan dengan Klinik maupun digunakan secara mandiri.
                                    Fitur ini juga dilengkapi dengan laporan keuangan yang dapat disesuaikan.</p>
                                <div
                                    class="text-turqoise mt-5 w-fit bg-goldenrod p-1 rounded-md transition-transform transform hover:scale-105">
                                    <a href="/klinik">Lebih lengkap</a>
                                </div>
                            </div>
                            <div class="md:w-[45%] order-1 md:order-2">
                                <img src="img/klinik-img-farmasi.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" id="panel-3"
                        class="absolute top-0 left-20 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <div class="flex flex-col md:flex-row justify-center gap-x-20 gap-y-5">
                            <div class="md:w-[300px] mt-2 order-2 md:order-1">
                                <p>Fitur Farmasi SAFFMedic sangat cocok digunakan di Rumah Sakit. Dengan integrasinya
                                    yang mencakup Rawat Jalan, Rawat Inap, Pelayanan Penunjang, hingga Gawat Darurat,
                                    fitur ini menjadi sangat komprehensif dan lengkap.</p>
                                <div
                                    class="text-turqoise mt-5 w-fit bg-goldenrod p-1 rounded-md transition-transform transform hover:scale-105">
                                    <a href="/rumah-sakit">Lebih lengkap</a>
                                </div>
                            </div>
                            <div class="md:w-[45%] order-1 md:order-2">
                                <img src="img/rumah-sakit-img-farmasi.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .indicator {
            transition: left .4s;
        }
    </style>

    <script>
        let tabs = document.querySelectorAll(".tab")
        let indicator = document.querySelector(".indicator")
        let panels = document.querySelectorAll(".tab-panel")

        indicator.style.width = tabs[0].getBoundingClientRect().width + 'px'
        indicator.style.left = tabs[0].getBoundingClientRect().left - tabs[0].parentElement.getBoundingClientRect().left +
            'px'

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                let tabTarget = tab.getAttribute("aria-controls")

                indicator.style.width = tab.getBoundingClientRect().width + 'px'
                indicator.style.left = tab.getBoundingClientRect().left - tab.parentElement
                    .getBoundingClientRect().left + 'px'


                panels.forEach(panel => {
                    let panelId = panel.getAttribute("id")
                    if (tabTarget === panelId) {
                        panel.classList.remove("invisible", "opacity-0")
                        panel.classList.add("visible", "opacity-100")
                    } else {
                        panel.classList.add("invisible", "opacity-0")
                    }
                })
            })
        })
    </script>
    <hr class="w-3/5 mx-auto">
    {{-- End Section4 --}}

    {{-- Section5 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="md:w-2/3 mx-auto md:text-justify text-deepturqoise p-5">
            <h1 class="text-darkgreen text-2xl font-semibold mb-5">Pentingnya sistem Apotek</h1>
            <p>
                Untuk mempermudah pengelolaan Apotik, perlu dilakukan beberapa langkah seperti penjualan, pembelian, serta
                pencatatan keuangan yang efisien.
                <br><br>
                Pertama-tama, dalam hal penjualan, dapat digunakan sistem kasir yang modern. Dengan menggunakan sistem ini,
                proses penjualan akan lebih mudah dan cepat. Selain itu, kemungkinan terjadinya kesalahan dalam perhitungan
                harga juga akan berkurang. Di samping itu, penting juga untuk memiliki stok obat yang cukup agar tidak
                kehabisan saat ada permintaan pelanggan.
                <br><br>
                Kedua, dalam hal pembelian, dapat dilakukan melalui pemasok yang terpercaya. Pemasok yang handal akan
                memberikan kepastian stok obat yang diperlukan. Selain itu, perlu juga diperhatikan dalam melakukan
                negosiasi harga agar dapat mendapatkan harga terbaik untuk obat-obatan yang dibeli. Melakukan pembelian
                secara teratur juga penting untuk menjaga ketersediaan stok obat.
                <br><br>
                Terakhir, dalam hal pencatatan keuangan, disarankan untuk menggunakan software akuntansi atau sistem
                manajemen keuangan yang membantu mencatat dengan lebih mudah dan akurat. Dengan menggunakan sistem ini,
                semua transaksi yang masuk dan keluar dapat dicatat dengan rapi dan mudah dianalisis. Tetapkan juga waktu
                yang tetap untuk melakukan pencatatan keuangan, misalnya setiap hari diakhir hari atau seminggu sekali. Hal
                ini akan membantu memantau keuangan Apotik dengan lebih baik.
                <br><br>
                Dengan menerapkan langkah-langkah ini, pengelolaan Apotik akan lebih teratur dan efisien. Hal ini akan
                mencegah terjadinya kekurangan stok obat dan kesalahan dalam pencatatan keuangan. Selain itu, pengelolaan
                Apotik yang baik juga akan meningkatkan kepercayaan pelanggan dan memperkuat reputasi Apotik di mata
                masyarakat.
            </p>
        </div>
    </section>
    {{-- End Section5 --}}
@endsection
