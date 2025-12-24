@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto my-10" data-aos="fade-down" data-aos-duration="1000">
        <div class="flex flex-col md:flex-row justify-center md:gap-16 gap-5 p-5">
            <div class="md:w-[25%] w-[40%] mx-auto md:mx-0">
                <img src="img/p-penunjang.png" alt="Fitur Penunjang">
            </div>

            <div class="md:w-[450px] text-darkteal md:mt-14 md:text-4xl text-2xl">
                <h1 class="font-bold">Lengkap dan Integrasi</h1>
                <h2 class="my-3">Penunjang Pemeriksaan
                    dalam sebuah apliksai</h2>
                <p class="text-base text-deepturqoise">Fasilitas penunjang SAFFMedic mempercepat proses dan menyederhanakan
                    birokrasi.
                    <br><br>
                    Penunjang yaang Kami sedikan sangat lengkap, serta input data dan laporan bisa di custome sesuai
                    kebutuhan
                </p>
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section1 --}}

    {{-- Section2 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="md:w-1/4 mx-auto text-darkteal text-center mb-16">
            <h1 class="text-3xl"><b>Penunjang</b></h1>
            <h1 class="text-3xl my-3">Hasil lebih tepat, input dapat jadi lebih Mudah</h1>
            <span>Hasil lebih tepat, input dapat jadi lebih Mudah</span>
        </div>

        <div class="md:w-4/5 flex flex-col md:flex-row items-center md:justify-between gap-10 mx-auto rounded-lg"
            style="background-color: #E6E6E6;">
            <div class="md:w-[430px] text-2xl md:text-3xl text-darkteal px-10">
                <h1 class="font-medium mb-4">Satu dashboard
                    Untuk Semua Penunjang</h1>
                <h1 class="font-bold">Apa yang kamu cari? Semua ada di SAFFMedic</h1>
            </div>
            <div class="md:w-2/3 w-full grid grid-cols-2 text-white font-semibold text-xl bg-darkteal rounded-lg p-5">
                <div class="flex flex-col items-center">
                    <img src="img/laboratorium-white-image.png" width="120" alt="Laboratorium">
                    <h2>Laboratorium</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/radio-logi-white-image.png" width="120" alt="Radiologi">
                    <h2>Radiologi</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/spirometry-white-image.png" width="120" alt="Spirometry">
                    <h2>Spirometry</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/optometry-white-image.png" width="120" alt="Optometry">
                    <h2>Optometry</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/cardiologi-white-image.png" width="120" alt="Cardiologi">
                    <h2>Cardiologi</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/audiometri-white-image.png" width="120" alt="Audiometri">
                    <h2>Audiometri</h2>
                </div>
            </div>
        </div>
        <div class="md:w-4/5 mx-auto border rounded-3xl shadow-xl px-10 pt-10 pb-12 mt-20">
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
    {{-- End Section2 --}}

    {{-- Section3 --}}
    <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-5/6 mx-auto p-4 sm:px-0">
            <div class="md:w-5/6 md:mx-auto">
                <div role="tablist" aria-label="tabs"
                    class="relative md:w-5/6 mx-auto h-12 grid grid-cols-2 items-center px-[10px] md:px-[80px] rounded-full bg-darkteal overflow-hidden shadow-2xl shadow-900/20 transition">
                    <div class="absolute indicator h-10 my-auto top-0 bottom-0 left-0 rounded-full shadow-md bg-goldenrod">
                    </div>
                    <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
                        class="relative block h-10 px-6 tab rounded-full">
                        <span class="text-lg md:text-2xl font-semibold text-white">Mudah</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
                        class="relative block h-10 px-6 tab rounded-full">
                        <span class="text-lg md:text-2xl font-semibold text-white">Integrasi</span>
                    </button>
                </div>
                <div class="mt-10 relative rounded-3xl text-darkteal font-medium">
                    <div role="tabpanel" id="panel-1" class="tab-panel p-6 transition duration-300">
                        <div class="flex flex-col md:flex-row justify-center gap-x-20 gap-y-5">
                            <div class="md:w-[500px] mt-2 order-2 md:order-1">
                                <p>Penggunaan peralatan pendukung yang memadai sangat esensial dalam menjalankan beragam
                                    jenis pemeriksaan di Fasilitas Kesehatan (Faskes), termasuk pemeriksaan laboratorium,
                                    audio metri, spiro metri, dan sejenisnya. Salah satu Sistem Informasi Manajemen Rumah
                                    Sakit (SIMRS) terkemuka, yaitu SAFFMedik, telah dilengkapi dengan fitur penunjang yang
                                    terintegrasi dengan seluruh unit layanan di Faskes.
                                    <br><br>
                                    Data hasil pemeriksaan tersebut dapat dengan mudah disimpan dan terhubung dengan rekam
                                    medis pasien yang dikelola oleh petugas laboratorium. Selain itu, dokter dan tim medis
                                    juga dapat mengakses hasil tersebut dalam bentuk tampilan digital yang praktis untuk
                                    dipreview.
                            </div>
                            <div class="md:w-[45%] order-1 md:order-2">
                                <img src="img/p-mudah.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" id="panel-2"
                        class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <div class="flex flex-col md:flex-row justify-center gap-x-20 gap-y-5">
                            <div class="md:w-[45%]">
                                <img src="img/p-int.png" alt="">
                            </div>
                            <div class="md:w-[500px] mt-2 order-2">
                                <p>SAFFMedic memiliki kemampuan untuk terintegrasi dengan aplikasi lain selama aplikasi yang
                                    ingin diintegrasikan menyediakan antarmuka pemrograman aplikasi (API). Integrasi ini
                                    bisa menjadi solusi bagi Fasilitas Kesehatan yang sebelumnya menggunakan Sistem
                                    Informasi Manajemen Rumah Sakit (SIMRS) tetapi merasa bahwa sistem tersebut tidak
                                    lengkap.
                                    <br><br>
                                    Contoh konkret dari integrasi yang bisa dilakukan adalah dengan Sistem Informasi
                                    Laboratorium (LIS). Integrasi dengan LIS ini memberikan bantuan yang signifikan bagi
                                    petugas laboratorium dalam menyalurkan hasil pemeriksaan ke pusat data medis.
                                    <br><br>
                                    Kami juga bekerja sama dengan mitra penyedia peralatan laboratorium untuk membangun
                                    kerjasama dalam pembangunan LIS.
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
    {{-- End Section3 --}}

    {{-- Section4 --}}
    <section class="container mx-auto my-20" data-aos="fade-right" data-aos-duration="1000">
        <div class="text-darkgreen rounded-2xl" style="background-color: #E6E6E6;">
            <div class="md:w-4/5 mx-auto py-10 px-5">
                <h1 class="text-2xl md:w-1/3 mb-10">Penunjang dapat digunakan
                    untuk beberapa jenis layanan.</h1>
                <div>
                    <div class="flex text-2xl font-semibold gap-5">
                        <div class="md:w-[10%] w-[140px]">
                            <img src="img/p-for-umum.png" width="" alt="Umum">
                        </div>
                        <div>
                            <h1>Umum</h1>
                            <p class="md:w-2/3 text-deepturqoise text-base font-normal">Dapat digunakan pada Faskes dengan
                                layanan Umum
                                seperti Klinik, Puskesmas, dan Rumah Sakit</p>
                        </div>
                    </div>
                    <div class="flex text-2xl font-semibold my-5 gap-5">
                        <div class="md:w-[10%] w-[100px]">
                            <img src="img/p-for-mcu.png" alt="MCU">
                        </div>
                        <div>
                            <h1>MCU</h1>
                            <p class="md:w-2/3 text-deepturqoise text-base font-normal">Dapat digunakan Faskes yang hanya
                                menyediakan pemeriksaan MCU</p>
                        </div>
                    </div>
                    <div class="flex text-2xl font-semibold gap-5">
                        <div class="md:w-[11%] w-[220px]">
                            <img src="img/p-for-lab.png" alt="Laboratorium">
                        </div>
                        <div>
                            <h1>Laboratorium</h1>
                            <p class="md:w-1/2 text-deepturqoise text-base font-normal">Jika Anda hanya menyediakan layanan
                                laboratorium, Anda dapat menggunakan Penunjang pada SAFFMedic
                                untuk merekam hasil pemeriksaan lab.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section4 --}}

    {{-- Section5 --}}
    <section class="container mx-auto my-20 p-5" data-aos="fade-up-right" data-aos-duration="1000">
        <div class="flex flex-col md:flex-row justify-center gap-10">
            <div class="md:w-[35%]">
                <img src="img/p-penunjang-end.png" alt="">
            </div>
            <div class="md:w-[520px] text-darkgreen mt-4">
                <h1 class="font-semibold text-2xl mb-2">Semua yang Anda butuhkan telah tersedia dalam satu sistem.</h1>
                <p>SAFFMedic menawarkan fitur penunjang yang lengkap dan terus memperbarui sistem dan fiturnya. Tentu saja,
                    ini akan sejalan dengan perkembangan teknologi dalam industri medis.</p>
                <ul class="mt-8 text-darkgreen text-2xl list-image-check list-inside">
                    <li>Mempermudah proses data</li>
                    <li class="my-3">Mengurangi kesalahan</li>
                    <li>Mempercepat Aktifitas</li>
                </ul>
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section5 --}}

    {{-- Section6 --}}
    <section class="my-28 p-5" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="md:w-2/5 mx-auto text-center text-darkgreen mb-20 text-2xl">
            <h1 class="font-semibold mb-5">SAFFMedic mampu meningkatkan efisiensi layanan operasional.</h1>
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
                    <a href="/whatsapp">Hubungi Kami</a>
                </div>
            </a>
        </div>
    </section>
    {{-- End Section6 --}}
@endsection
