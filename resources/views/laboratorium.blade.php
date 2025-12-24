@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto mt-10 mb-20">
        <div class="w-full mx-auto">
            <div class="flex flex-wrap justify-center gap-10 p-5">
                <div class="md:w-[45%]">
                    <img src="img/laboratorium-bg-element1.png" alt="Laboratorium">
                </div>
                <div class="md:w-1/3 md:mt-10">
                    <h1 class="text-darkgreen text-3xl font-bold mb-5">Mempermudah Proses Mempercepat Aktifitas</h1>
                    <div class="text-deepturqoise mb-16">
                        <h2 class="font-bold mb-2">Solusi untuk FASKES yang memiliki <br> Laboratorium baik integrasi ataupun
                            Mandiri.</h2>
                        <p>Mulai dari registrasi hingga hasil <br>
                            Begitu mudah dilakukan</p>
                    </div>

                    <a role="button">
                        <div
                            class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md">
                            <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                            <a href="/whatsapp">Hubungi Kami</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section1 --}}

    {{-- Section2 --}}
    <section class="container mx-auto my-20 p-5" data-aos="fade-right" data-aos-duration="1000">
        <div class="md:w-2/5 mx-auto text-deepturqoise text-center mb-20">
            <h1 class="text-2xl text-darkteal font-bold mb-2">Focus pada Pemeriksaan Pasien Anda</h1>
            <p>SAFFMedic membantu dalam merekam hasil dan menyimpan sebagai data, dan mempermudah pencetakan untuk kebutuhan
                Pasien</p>
        </div>

        <div class="flex flex-wrap justify-center gap-10 text-center text-deepturqoise">
            <div class="w-[280px] p-10 border shadow-2xl rounded-xl bg-[#F4F4F4]">
                <img src="img/meningkatkan-layanan.png" class="w-[25%] mx-auto mb-5" alt="Layanan">
                <h5 class="font-semibold mb-2">Meningkatkan Layanan</h5>
                <p>Efisiensi Proses membuat pelayanan terhadap Pasien meningkat</p>
            </div>
            <div class="w-[280px] p-10 border shadow-2xl rounded-xl bg-[#F4F4F4]">
                <img src="img/percepat-proses.png" class="w-[25%] mx-auto mb-5" alt="Proses">
                <h5 class="font-semibold mb-2">Percepat Proses</h5>
                <p>Proses lebih cepat karna terintegrasi dari semua poli dan layanan</p>
            </div>
            <div class="w-[280px] p-10 border shadow-2xl rounded-xl bg-[#F4F4F4]">
                <img src="img/data-terpusat.png" class="w-[25%] mx-auto mb-5" alt="Data">
                <h5 class="font-semibold mb-2">Data terpusat</h5>
                <p>Data Pasien dan hasil terpusat dalam satu database sehingga mempermudah dalam pengarsipan</p>
            </div>
        </div>
    </section>
    <hr class="w-3/5 mx-auto">
    {{-- End Section2 --}}

    {{-- Section3 --}}
    <section class="container mx-auto my-20" data-aos="fade-down" data-aos-duration="1000">
        <div class="md:w-4/5 flex flex-col md:flex-row items-center md:justify-between gap-10 mx-auto rounded-lg"
            style="background-color: #E6E6E6;">
            <div class="md:w-[450px] p-10">
                <h1 class="text-2xl font-bold text-darkteal mb-4">Fitur Lengkap <br> dapat dikembangkan</h1>
                <p class="text-deepturqoise">Pada bagian Laboratorium adalah salah satu sentra layanan yang penting untuk
                    menghasilkan pemeriksaan
                    yang
                    akurat dan tepat, SAFFMedic berkomitmen menghadirkan fitur yang memberikan kemudahan dan melengkapi
                    kebutuhan</p>
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
    </section>
    {{-- End Section3 --}}

    {{-- Section4 --}}
    <section class="container mx-auto my-20 p-5" id="lab">
        <div class="md:w-1/2 mx-auto my-20 bg-lightsage rounded-lg" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col md:items-center justify-center md:gap-20 p-10 md:flex-row">
                <img src="img/lis-icon2.png" width="60%" class="md:w-[30%]" alt="LIS">
                <div class="text-darkgreen">
                    <h1 class="text-2xl font-bold text-darkteal">INTEGRASI</h1>
                    <h2 class="font-bold my-2">Kerja lebih mudah, hasil lebih cepat</h2>
                    <p class="mb-2">Mempermudah dengan Integrasi,
                        menghubungkan data antar sistem
                    </p>
                    <p>
                        SAFFMedic dapat dihubungkan dengan
                        berbagai penyedia LIS selama penyedia
                        menyediakan open API
                    </p>
                </div>
            </div>
            <div class="w-full border-[10px] border-darkteal rounded-full"></div>
        </div>

        <div class="md:w-4/5 mx-auto text-deepturqoise md:text-justify" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="text-lg font-bold text-darkgreen mb-2">Power Full Integrasi LIS dengan SAFFMedic</h1>
            <p>Fitur Laboratorium Information Sistem (LIS) yang terdapat pada SIMRS SAFFMedic adalah salah satu fitur
                penting yang memungkinkan pengelolaan data dan informasi laboratorium secara efisien.
                <br><br>
                Dengan adanya fitur LIS, pengguna SIMRS dapat melakukan beberapa hal penting, antara lain:
            </p>
            <ol class="flex flex-col gap-5 my-10">
                <li>
                    <b>1)</b> Pengelolaan hasil tes laboratorium: Fitur LIS memungkinkan pengguna untuk mencatat hasil tes
                    laboratorium
                    dengan mudah dan akurat. Data hasil tes laboratorium dapat diinput ke dalam sistem dan disimpan secara
                    terpusat, sehingga memudahkan akses dan pemantauan oleh pihak terkait.
                </li>
                <li>
                    <b>2)</b> Integrasi dengan instrumen laboratorium: LIS dapat terhubung dengan alat-alat laboratorium
                    yang
                    digunakan,
                    seperti mesin analisis darah dan urine. Hasil tes dari alat-alat tersebut dapat langsung diintegrasikan
                    ke
                    dalam sistem, sehingga mengurangi risiko kesalahan manusia dalam penginputan data, kemudain hasilnya
                    akan
                    masuk pada SIMRS SAFFMedic secara otomatis.
                </li>

                <li>
                    <b>3)</b> Pencatatan riwayat pasien: Fitur LIS juga memungkinkan pengguna untuk mencatat riwayat tes
                    laboratorium
                    dari
                    setiap pasien. Data ini mencakup hasil tes sebelumnya, perubahan nilai, dan informasi penting lainnya
                    yang
                    berhubungan dengan hasil tes.
                </li>

                <li>
                    <b>4)</b> LIS plus SIMRS SAFFMedic dilengkapi dengan alat bantu analisis yang membantu pengguna dalam
                    memeriksa
                    dan
                    menganalisis hasil tes laboratorium. Dengan adanya alat bantu ini, pengguna dapat lebih mudah membaca
                    hasil
                    tes dan membuat diagnosis yang akurat.
                </li>
                <li>
                    <b>5)</b> Laporan laboratorium Melalui SAFFMedic: Fitur LIS memungkinkan pengguna untuk menghasilkan
                    laporan-laporan
                    laboratorium secara otomatis. Laporan-laporan ini dapat digunakan untuk memberikan informasi kepada
                    pasien
                    dan dokter yang merawat pasien.
                </li>
            </ol>
            <p>
                Dengan fitur LIS dan terintegrasi dengan SIMRS SAFFMedic memberikan kemudahan dan kecepatan dalam
                pengelolaan data laboratorium. Hal ini memungkinkan tenaga medis untuk fokus pada pelayanan medis yang lebih
                baik dan memastikan pasien mendapatkan hasil tes laboratorium dengan cepat dan akurat.
            </p>
        </div>
    </section>
    {{-- End Section4 --}}
@endsection
