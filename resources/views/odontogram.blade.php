@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="md:w-4/5 bg-[url('/img/odontogram.png')] rounded-lg bg-cover bg-center bg-no-repeat container mx-auto md:py-40 pt-40 p-5 mt-20">
            <div class="flex md:justify-end justify-center items-start">
                <h1 class="md:text-4xl md:text-deepturqoise text-darkteal font-bold text-xl"><span class="type" style="--n:53">
                        Kelola Pemeriksaan Gigi <br> dengan Mudah dan Akurat
                    </span>
                </h1>
            </div>
    </section>

    <style>
        .type {
            color: #0000;
            background:
                linear-gradient(-90deg, #0F3D3E 5px, #0000 0) 10px 0,
                linear-gradient(#0F3D3E 0 0) 0 0;
            background-size: calc(var(--n)*1ch) 200%;
            -webkit-background-clip: padding-box, text;
            background-clip: padding-box, text;
            background-repeat: no-repeat;
            animation:
                b .7s infinite steps(1),
                t calc(var(--n)*.1s) steps(var(--n)) forwards;
        }

        @keyframes t {
            from {
                background-size: 0 200%
            }
        }

        @keyframes b {
            50% {
                background-position: 0 -100%, 0 0
            }
        }
    </style>
    {{-- End Section1 --}}

    {{-- Section2 --}}
    <section class="container mx-auto my-40 p-5">
        <div class="flex flex-col md:flex-row justify-center">
            <img src="img/fiturodontogram.svg" class="md:rounded-l-md" alt="">
            <div class="md:w-1/2 text-white bg-darkteal px-5 py-2 md:rounded-md rounded-b-md">
                <h1 class="text-4xl font-semibold mb-5">Fitur Odontogram di SIMKLINIK & SIMRS SAFFMedic</h1>
                <p>Dalam dunia klinik gigi, pencatatan kondisi gigi pasien sangat penting untuk diagnosis dan perencanaan
                    perawatan. SAFFMedic hadir dengan solusi canggih melalui fitur Odontogram yang terintegrasi di sistem
                    SIMKLINIK dan SIMRS kami. Fitur ini dirancang untuk mempermudah dokter gigi dalam mendokumentasikan
                    kondisi dan riwayat kesehatan gigi pasien secara detail dan akurat.</p>
            </div>
        </div>
    </section>
    {{-- End Section2 --}}

    {{-- Section3 --}}
    <section class="bg-[url('/img/odontogrambg.svg')] bg-cover bg-center bg-no-repeat container mx-auto md:py-24 p-5 py-10 my-20">
        <div class="flex flex-col md:flex-row justify-center gap-5 ">
            <div class="md:w-1/3 text-white">
                <h1 class="text-3xl mb-5 font-semibold">Apa Itu Odontogram?</h1>
                <p>Odontogram adalah representasi visual dari kondisi gigi pasien yang digunakan oleh dokter gigi untuk
                    mencatat informasi klinis</p>
            </div>

            <main
                class="relative md:flex flex-row items-center gap-5 justify-center overflow-hidden bg-white rounded-xl p-3 hidden">
                <img src="img/icongigi.svg" alt="">
                <div class="">
                    <!-- Sliding Text animation -->
                    <div class="font-extrabold md:text-4xl">
                        <span
                            class="text-darkteal inline-flex flex-col h-[calc(theme(fontSize.3xl)*theme(lineHeight.tight))] md:h-[calc(theme(fontSize.4xl)*theme(lineHeight.tight))] overflow-hidden">
                            <ul class="block md:animate-text-slide-4 text-left leading-tight [&_li]:block">
                                <li>Gigi yang memerlukan perawatan</li>
                                <li>Gigi yang hilang</li>
                                <li>Kondisi seperti karies, tambalan </li>
                                <li aria-hidden="true">atau perawatan lainnya</li>
                            </ul>
                        </span>
                    </div>
                    <!-- End: Sliding Text animation -->
                </div>
            </main>

            <div class="flex flex-col justify-center gap-5 text-darkteal md:hidden">
                <div class="flex flex-row justify-start items-center bg-white rounded-xl gap-5 p-3">
                    <img src="img/icongigi1.svg" alt="">
                    <p>Gigi yang hilang</p>
                </div>

                <div class="flex flex-row justify-start items-center bg-white rounded-xl gap-5 p-3">
                    <img src="img/icongigi2.svg" alt="">
                    <p>Gigi yang memerlukan perawatan</p>
                </div>

                <div class="flex flex-row justify-start items-center bg-white rounded-xl gap-5 p-3">
                    <img src="img/icongigi.svg" alt="">
                    <p>Kondisi seperti karies, tambalan, atau perawatan lainnya</p>
                </div>

            </div>
        </div>
    </section>
    {{-- End Section3 --}}

    {{-- Section4 --}}
    <section class="p-5 my-40">
        <h1 class="md:text-4xl text-xl text-darkteal text-center mb-14">Keunggulan Fitur Odontogram di SAFFMedic</h1>

        <div class="flex flex-col justify-center items-center gap-16 text-white">
            <div class="flex flex-col md:flex-row gap-10">
                <div
                    class="md:w-[550px] flex md:flex-row flex-col gap-5 items-center p-4 rounded shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/visualisasi.svg" alt="">
                    <div class="bg-darkteal p-3 rounded-lg">
                        <h1 class="font-semibold md:text-2xl text-xl mb-5">Visualisasi Interaktif</h1>
                        <p>Fitur ini memungkinkan dokter gigi untuk dengan mudah menginput hasil pemeriksaan langsung ke
                            dalam sistem dengan bantuan visualisasi interaktif. Kondisi setiap gigi dapat dicatat secara
                            spesifik, memberikan gambaran yang jelas dan detail.</p>
                    </div>
                </div>
                <div
                    class="md:w-[550px] flex md:flex-row flex-col gap-5 items-center rounded p-4 shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/pencatatandigital.svg" alt="">
                    <div class="bg-darkteal p-3 rounded-lg">
                        <h1 class="font-semibold md:text-2xl text-xl mb-4">Pencatatan Digital yang Terstandarisasi</h1>
                        <p>Seluruh data pemeriksaan gigi tersimpan secara digital sesuai dengan standar industri kesehatan.
                            Ini membantu klinik gigi untuk mematuhi prosedur akreditasi dan meningkatkan akurasi pencatatan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-10">
                <div
                    class="md:w-[550px] flex md:flex-row flex-col gap-5 items-center rounded p-4 shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/riwayatpasien.svg" alt="">
                    <div class="bg-darkteal p-3 rounded-lg">
                        <h1 class="font-semibold md:text-2xl text-xl mb-10">Riwayat Pasien Terintegrasi</h1>
                        <p>Semua catatan gigi pasien tersimpan dalam satu sistem yang terintegrasi dengan rekam medis
                            lainnya, memudahkan akses oleh dokter, staf klinik, maupun rumah sakit.</p>
                    </div>
                </div>
                <div
                    class="md:w-[550px] flex md:flex-row flex-col gap-5 items-center rounded p-4 shadow-lg hover:shadow-md hover:shadow-darkteal transition-all duration-700 hover:scale-110">
                    <img src="img/akseskapan.svg" alt="">
                    <div class="bg-darkteal p-3 rounded-lg">
                        <h1 class="font-semibold md:text-2xl text-xl mb-3">Akses Kapan Saja, Di Mana Saja</h1>
                        <p>Dengan sistem berbasis cloud, dokter gigi dapat mengakses dan memperbarui data pasien kapan saja,
                            di mana saja, sehingga mendukung efektivitas dan efisiensi pelayanan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section4 --}}

    {{-- Section5 --}}
    <section class="my-40 p-5">
        <div class="text-center text-darkteal md:w-1/2 mx-auto mb-40">
            <h1 class="md:text-3xl text-xl font-semibold mb-5">Mengapa Pilih SAFFMedic?</h1>
            <p>Dengan fitur Odontogram kami, pencatatan hasil pemeriksaan gigi menjadi lebih mudah, cepat, dan akurat.
                Dukungan penuh untuk meningkatkan kualitas pelayanan kesehatan gigi Anda dengan teknologi modern.</p>
        </div>

        <div class=" text-darkteal md:w-1/4 text-center mx-auto">
            <h1 class="text-lg font-bold">Mau Fitur Odontogram?</h1>
            <p>Hubungi SAFFMedic , Rasakan kemudahan dan pelayanan
                Cocok untuk Praktek Dokter Gigi, Klinik Gigi, Klinik Umum dan Rumah Sakit</p>
        </div>

        <div class="flex flex-row gap-x-16 justify-center mt-8">
            <img src="img/message.png" width="70">
            <img src="img/meeting.png" width="70">
            <img src="img/coffe.png" width="70">
        </div>

        <div class="w-fit mt-12 mx-auto">
            <div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-5">
                <a role="button">
                    <div class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white  font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/demo.png" width="25" alt="virtual">
                        <a href="{{ route('form-request-demo') }}">Jadwalkan Demo</a>
                    </div>
                </a>
                <a role="button">
                    <div class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white  font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                        <a href="/whatsapp">Hubungi Kami</a>
                    </div>
                </a>
                <a role="button">
                    <div class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white  font-semibold rounded-md mb-5">
                        <img class="mr-3" src="img/email_gray.png" width="30" alt="Demo">
                        <a href="{{ route('form-request-demo') }}">e-Mail</a>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- End Section5 --}}

    {{-- Section6 --}}

    {{-- End Section6 --}}
@endsection