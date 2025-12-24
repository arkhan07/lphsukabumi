@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto my-20">
        <div class="flex flex-col md:flex-row justify-center md:gap-16 gap-10 p-5">
            <div class="md:w-[470px] text-darkgreen mt-8 order-2 md:order-1">
                <h1 class="text-3xl font-bold mb-4">KEUANGAN</h1>
                <p>Faskes yang Anda kelola perlu pencatatan keuangan yang rapi agar mudah menganalisa perkembangan dan
                    melihat
                    history transaksi.
                    <br><br>
                    SAFFmedic dilengkapi fitur akutansi yang membuat Anda semakin percaya diri untuk mengembangkan usaha.
                </p>
                <a role="button">
                    <div
                        class="flex justify-center items-center p-3 bg-darkgreen md:w-[220px] text-white font-semibold rounded-md mt-20">
                        <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                        <a href="/whatsapp">Hubungi Sales</a>
                    </div>
                </a>
            </div>

            <div class="md:w-[40%] order-1 md:order-2">
                <img src="img/bg-keuangan.png" alt="Fitur Keuangan">
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section1 --}}

    {{-- Section2 --}}
    <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-1/3 mx-auto text-darkgreen text-center mb-20 p-5">
            <h1 class="text-3xl font-semibold">Semua Jadi Lebih Jelas!</h1>
            <p>Diawali imputan sederhana, Hasilkan laporan luar biasa Tinggal Input, laporan jadi beres</p>
        </div>

        <div class="w-full relative mx-auto flex flex-col md:flex-row bg-[#E6E6E6] py-10 md:pe-40 p-5 gap-y-5">
            <div class="md:absolute bottom-0 md:w-[50%]">
                <img src="img/bg-keuangan-img.png" alt="">
            </div>
            <div class="flex flex-col md:flex-row justify-end gap-y-8 gap-x-28 z-10 text-deepturqoise">
                <div class="md:w-[23%] flex flex-col gap-8">
                    <div>
                        <h1 class="text-xl mb-1 text-darkgreen font-bold">Kas Masuk</h1>
                        <p>Mencatat aktifitas keuangan penerimaan Kas, seperti penyertaan Modal, Penerimaan dari pihak lain
                            diluar transaksi</p>
                    </div>
                    <div>
                        <h1 class="text-xl mb-1 text-darkgreen font-bold">Uang Muka Masuk</h1>
                        <p>Mencatat aktifitas penerimaan uang muka (DP), Ketika digunakan akan terlihat histori penggunaan
                            dan nilai yang tersisa </p>
                    </div>
                </div>
                <div class="md:w-[23%] flex flex-col gap-8">
                    <div>
                        <h1 class="text-xl mb-1 text-darkgreen font-bold">Kas Keluar</h1>
                        <p>Mencatat aktifitas keuangan pengeluaran Kas, seperti biaya atau beban operasional, dll</p>
                    </div>
                    <div>
                        <h1 class="text-xl mb-1 text-darkgreen font-bold">Uang Muka Keluar</h1>
                        <p>Mencatat aktifitas pengeluaran uang muka ( DP ), ketika digunakan akan terlihat histori
                            penggunaan dan nilai yang tersisa</p>
                    </div>
                    <div>
                        <h1 class="text-xl mb-1 text-darkgreen font-bold">Pajak</h1>
                        <p>Kamu juga dapat melakukan trasnfer antar kas untuk mempermudah pemindahan pembukuan keuangan,
                            Misal dari Bank ke kac ataupun sebaliknya.</p>
                    </div>
                    <div>
                        <h1 class="text-xl mb-1 text-darkgreen font-bold">Transfer Kas</h1>
                        <p>Kamu juga dapat melakukan trasnfer antar kas untuk mempermudah pemindahan pembukuan keuangan,
                            Misal dari Bank ke kac ataupun sebaliknya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section2 --}}

    {{-- Section3 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="md:w-3/4 mx-auto p-5">
            <div class="md:w-1/3 text-darkgreen text-lg">
                <h1 class="font-bold">Menghasilkan laporan keuangan</h1>
                <h2 class="my-3">Jangan sia-siakan waktu Anda,
                    Buat laporan keuangan dengan cepat.</h2>
                <p class="font-light text-deepturqoise text-sm">SAFFMedic menyediakan laporan keuangan yang lengkap dan
                    dapat disesuaikan sesuai kebutuhan.</p>
            </div>
        </div>

        <div class="md:w-1/2 mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 text-2xl font-medium my-20">
            <div class="w-[300px] text-center text-darkteal">
                <div class="w-[30%] mb-3 mx-auto">
                    <img src="img/neraca-keuangan.png" alt="Neraca">
                </div>
                <h3>Neraca</h3>
            </div>
            <div class="w-[300px] text-center text-darkteal">
                <div class="w-[30%] mb-6 mx-auto">
                    <img src="img/buku-besar-keuangan.png" alt="Buku Besar">
                </div>
                <h3>Buku Besar</h3>
            </div>
            <div class="w-[300px] text-center text-darkteal">
                <div class="w-[30%] mb-3 mx-auto">
                    <img src="img/jurnal-keuangan.png" alt="Jurnal">
                </div>
                <h3>Jurnal</h3>
            </div>
            <div class="w-[300px] text-center text-darkteal">
                <div class="w-[30%] mb-3 mx-auto">
                    <img src="img/arus-kas-keuangan.png" alt="Arus Kas">
                </div>
                <h3>Arus Kas</h3>
            </div>
            <div class="w-[300px] text-center text-darkteal">
                <div class="w-[30%] mb-3 mx-auto">
                    <img src="img/labarugi-keuangan.png" alt="Labarugi">
                </div>
                <h3>Labarugi</h3>
            </div>
            <div class="w-[300px] text-center text-darkteal">
                <div class="w-[30%] mb-3 mx-auto">
                    <img src="img/neraca-saldo-keuangan.png" alt="Neraca Saldo">
                </div>
                <h3>Neraca Saldo</h3>
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section3 --}}

    {{-- Section4 --}}
    <section class="container mx-auto my-20 p-5" data-aos="fade-up-right" data-aos-duration="1000">
        <div class="md:w-5/6 mx-auto">
            <img src="img/p-home-health-new.png" class="md:w-[30%] mx-auto my-7 md:my-16" alt="">
            <h1 class="text-2xl text-darkgreen text-center">Dapatkan Aplikasi Rumah Sakit (SIMRS) <br>
                SAFFMedic dengan harga terjangkau dan fitur lengkap.</h1>
        </div>
        <div class="w-fit mx-auto mt-10">
            <a role="button">
                <div
                    class="flex justify-center items-center p-3 bg-darkgreen md:w-[220px] text-white font-semibold rounded-md mb-5">
                    <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                    <a href="/whatsapp">Hubungi Kami</a>
                </div>
            </a>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section4 --}}

    {{-- Section5 --}}
    <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-4/5 mx-auto p-5">
            <h1 class="text-2xl font-medium text-darkteal mb-5 text-center">Pertanyaan Keuangan</h1>

            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-darkteal border-darkteal"
                data-inactive-classes="text-gray-500">
                <h2 id="accordion-flush-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3"
                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                        aria-controls="accordion-flush-body-1">
                        <span>Apakah SAFFMedic dapat menyediakan laporan Keuangan</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500 ">SAFFmedic telah dilengkapi dengan fitur akutansi standard, semua
                            transaksi akan dialokasikan pada akun yang terhubung. Fitur Kas Masuk dan Kas keluar telah
                            tersedia di SAFFmedic</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3"
                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                        aria-controls="accordion-flush-body-2">
                        <span>Apakah SAFFMedic dapat mencatat transaksi yang berkaitan Pajak</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500 ">SAFFMedic memiliki setup Pajak yang dapat disesuikan, Anda akan
                            dengan mudah mengatur pajak pada setiap transaksi baik PPN maupun PPH.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3"
                        data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                        aria-controls="accordion-flush-body-3">
                        <span>Laporan keuangan seperti apa yang dapat disajikan oleh SAFFMedic</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500 ">Bentuk laporan dapat disesuaikan dengan kebutuhan, selama data yang
                            akan dilaporkan terdapat pada database SAFFMedic</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-4">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3"
                        data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                        aria-controls="accordion-flush-body-4">
                        <span>Dapatkah Saya download laporan</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500 ">Dengan mudah Anda dapat mengunduh laporan dalam bentuk Excel maupun
                            PDF</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section5 --}}
@endsection
