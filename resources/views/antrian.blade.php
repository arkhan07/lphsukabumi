@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto my-10" data-aos="fade-down" data-aos-duration="1000">
        <div class="flex flex-col md:flex-row justify-center items-center gap-10 p-5">
            <div class="md:w-[45%]">
                <img src="img/p-fitur-antrian-girl.png" alt="Fitur Antrian">
            </div>
            <div class="md:w-[450px] text-darkgreen font-bold">
                <h1 class="text-3xl">Fitur Antrian</h1>
                <h2 class="mt-2 mb-1">Tertip dalam antrian <br>
                    Lebih cepat dalam pelayanan</h2>
                <p class="text-deepturqoise font-normal">Mengelola laynan pasien tentu memerlukan manajemen antrian.
                    SAFFMedic telah dilengkapi fitur antrian yang
                    terintegrasi dari pendaftaran, Poli, hingga Farmasi</p>
            </div>
        </div>
    </section>
    {{-- End Section1 --}}

    {{-- Section2 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="flex flex-col md:flex-row items-center justify-center gap-x-40 gap-y-10 bg-gray-200 p-5">
            <div class="md:w-[370px] text-darkgreen font-medium order-2 md:order-1">
                <div class="flex items-start mb-5 gap-x-5">
                    <img src="img/p-antrian-flex.png" width="50" alt="Flexiblelitas">
                    <div>
                        <h1 class="text-xl font-bold mb-2">Flexiblelitas</h1>
                        <p>Antrian yang tedapat pada SAFFMedic dapat di atur sesuai pola Antrian seperti perbedaan nomor
                            urut pada setiap Poli ataupun penomoran berkesinambungan</p>
                    </div>
                </div>
                <div class="flex items-start mb-5 gap-x-5">
                    <img src="img/p-antrian-int.png" width="50" alt="Integrasi">
                    <div>
                        <h1 class="text-xl font-bold mb-2">Integrasi</h1>
                        <p>Dapat terhubung dengan JKN Mobile, sehingga calon pasien yang menggunakan BPJS dapat mengambil
                            nomor antrian pada JKN Mobile.</p>
                    </div>
                </div>
                <div class="flex items-start mb-5 gap-x-5">
                    <img src="img/p-antrian-sim.png" width="50" alt="Simple">
                    <div>
                        <h1 class="text-xl font-bold mb-2">Simple</h1>
                        <p>Dalam satu dashboard panel SAFFMedic sehingga tidak perlu aplikasi tambahan.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-[40%] order-1 md:order-2">
                <img src="img/p-antrian.png" alt="">
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section2 --}}

    {{-- Section3 --}}
    <section class="container mx-auto my-20 p-5" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-2/5 mx-auto text-center text-darkgreen mb-14">
            <h1 class="text-3xl font-semibold mb-3">Antrian SAFFMedic dapat melalui
                beberapa pintu layanan</h1>
            <p class="md:w-4/5 mx-auto">Antrian SAFFMedic terintegrasi dari beberapa pintu layanan, seingga dalam proses
                penanganan Pasien akan lebih
                mudah, tertib dan teratur</p>
        </div>

        <div>
            <div class="md:w-1/5 mx-auto text-center text-xl text-darkgreen font-bold mb-16">
                <h1>Apa keunggulan antrian
                    dalam SAFFMedic?</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 gap-x-20 text-deepturqoise">
                <div class="w-[300px] place-self-center md:place-self-end">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-darkteal">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Menggunakan metode multphase, satu nomor antrian dapat digunakan pada beberapa layanan</p>
                </div>
                <div class="w-[300px] place-self-center md:place-self-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-darkteal">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Dapat digunakan pada display console anjungan mandiri untuk pengambilan nomor</p>
                </div>
                <div class="w-[300px] place-self-center md:place-self-end">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-darkteal">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Display console anjungan mandiri dapat menggunakan device yang bebas seperti tablet ataupun komputer
                    </p>
                </div>
                <div class="w-[300px] place-self-center md:place-self-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-darkteal">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Teringegrasi pada semua layanan sehingga mudah memantau jumlah Pasian yang sedang dalam antrian</p>
                </div>
                <div class="w-[300px] place-self-center md:place-self-end">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-darkteal">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Dapat menggunakan display monitor untuk memudahkan Pasien melihat nomor antrian dan daftar tunggu</p>
                </div>
                <div class="w-[300px] place-self-center md:place-self-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-darkteal">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Faskes bebas menggunakan media monitor, tablet, dan komputer apa saja selama terdapat browsher </p>
                </div>
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section3 --}}

    {{-- Section4 --}}
    <section class="my-28 p-5" data-aos="zoom-in-up" data-aos-duration="1100">
        <div class="w-fit mx-auto text-center text-darkgreen mb-5 text-2xl">
            <h1 class="font-bold mb-10">Mempercepat, Mempermudah, dan <br> menjadikan aktifitas lebih <br> menyenangkan</h1>
            <img src="img/p-fitur-antrian-element3.png" class="w-[25%] mb-3 mx-auto" alt="">
            <p class="text-base">Kami menyedikan sistem Informasi Klinik dan Rumah <br> Sakit yang ter-integrasi dalam satu
                dashboard.</p>
        </div>
        <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-5 mb-20">
            <a role="button">
                <div
                    class="flex justify-center items-center p-3 bg-darkgreen md:w-[220px] text-white font-semibold rounded-md mb-5">
                    <img class="mr-3" src="img/demo.png" width="25" alt="Demo">
                    <a href="{{ route('form-request-demo') }}">Atur Jadwal Demo</a>
                </div>
            </a>
            <a role="button">
                <div
                    class="flex justify-center items-center p-3 bg-turqoise md:w-[220px] text-white font-semibold rounded-md mb-5">
                    <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                    <a href="https://api.whatsapp.com/send?phone=6282333202020">Hubungi Kami</a>
                </div>
            </a>
        </div>
    </section>
    {{-- End Section4 --}}
@endsection
