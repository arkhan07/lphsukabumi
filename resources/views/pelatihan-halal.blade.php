@extends('layout.app')

@section('content')
    {{-- Section1 --}}
    <section class="container mx-auto mt-10 mb-20">
        <div class="w-full mx-auto">
            <div class="flex flex-wrap justify-center gap-10 p-5">
                <div class="md:w-[45%]">
                    <img src="img/laboratorium-bg-element1.png" alt="Pelatihan Halal">
                </div>
                <div class="md:w-1/3 md:mt-10">
                    <h1 class="text-darkgreen text-3xl font-bold mb-5">Mempermudah Implementasi, Mempercepat Sertifikasi</h1>
                    <div class="text-deepturqoise mb-16">
                        <h2 class="font-bold mb-2">Solusi untuk Perusahaan yang membutuhkan <br> Pelatihan Halal baik secara internal ataupun eksternal.</h2>
                        <p>Mulai dari pemahaman dasar hingga implementasi <br>
                            Dilaksanakan dengan metode yang mudah dipahami</p>
                    </div>

                    <a role="button">
                        <div
                            class="flex justify-center items-center p-3 bg-darkteal md:w-[220px] text-white font-semibold rounded-md">
                            <img class="mr-3" src="img/whatsappicon.png" width="25" alt="Whatsapp">
                            <a href="/whatsapp">Hubungi Trainer Kami</a>
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
            <h1 class="text-2xl text-darkteal font-bold mb-2">Focus pada Pengembangan Kompetensi Tim Anda</h1>
            <p>LPH Doa Bangsa Sukabumi membantu dalam meningkatkan pemahaman dan keterampilan tim tentang sistem jaminan halal, serta mempermudah implementasi untuk kebutuhan sertifikasi</p>
        </div>

        <div class="flex flex-wrap justify-center gap-10 text-center text-deepturqoise">
            <div class="w-[280px] p-10 border shadow-2xl rounded-xl bg-[#F4F4F4]">
                <img src="img/meningkatkan-layanan.png" class="w-[25%] mx-auto mb-5" alt="Kompetensi">
                <h5 class="font-semibold mb-2">Meningkatkan Kompetensi</h5>
                <p>Pelatihan yang efektif membuat kemampuan tim dalam mengelola sistem halal meningkat signifikan</p>
            </div>
            <div class="w-[280px] p-10 border shadow-2xl rounded-xl bg-[#F4F4F4]">
                <img src="img/percepat-proses.png" class="w-[25%] mx-auto mb-5" alt="Sertifikasi">
                <h5 class="font-semibold mb-2">Percepat Proses Sertifikasi</h5>
                <p>Implementasi yang benar mempercepat proses sertifikasi halal perusahaan</p>
            </div>
            <div class="w-[280px] p-10 border shadow-2xl rounded-xl bg-[#F4F4F4]">
                <img src="img/data-terpusat.png" class="w-[25%] mx-auto mb-5" alt="Sistem">
                <h5 class="font-semibold mb-2">Sistem yang Terstandar</h5>
                <p>Pelatihan memastikan penerapan sistem jaminan halal sesuai dengan standar BPJPH yang berlaku</p>
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
                <h1 class="text-2xl font-bold text-darkteal mb-4">Materi Lengkap <br> Dapat Disesuaikan</h1>
                <p class="text-deepturqoise">Pelatihan Halal adalah salah satu elemen penting untuk memastikan implementasi sistem jaminan halal yang akurat dan tepat. LPH Doa Bangsa Sukabumi berkomitmen menghadirkan materi pelatihan yang memberikan pemahaman komprehensif dan melengkapi kebutuhan spesifik perusahaan</p>
            </div>
            <div class="md:w-2/3 w-full grid grid-cols-2 text-white font-semibold text-xl bg-darkteal rounded-lg p-5">
                <div class="flex flex-col items-center">
                    <img src="img/laboratorium-white-image.png" width="120" alt="Regulasi Halal">
                    <h2 class="text-center">Regulasi Halal</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/radio-logi-white-image.png" width="120" alt="Sistem Jaminan">
                    <h2 class="text-center">Sistem Jaminan Halal</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/spirometry-white-image.png" width="120" alt="Dokumentasi">
                    <h2 class="text-center">Dokumentasi</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/optometry-white-image.png" width="120" alt="Internal Audit">
                    <h2 class="text-center">Internal Audit</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/cardiologi-white-image.png" width="120" alt="Sertifikasi">
                    <h2 class="text-center">Proses Sertifikasi</h2>
                </div>
                <div class="flex flex-col items-center">
                    <img src="img/audiometri-white-image.png" width="120" alt="Implementasi">
                    <h2 class="text-center">Implementasi Praktis</h2>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section3 --}}

    {{-- Section4 --}}
    <section class="container mx-auto my-20 p-5" id="pelatihan">
        <div class="md:w-1/2 mx-auto my-20 bg-lightsage rounded-lg" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col md:items-center justify-center md:gap-20 p-10 md:flex-row">
                <img src="img/lis-icon2.png" width="60%" class="md:w-[30%]" alt="Metode Pelatihan">
                <div class="text-darkgreen">
                    <h1 class="text-2xl font-bold text-darkteal">METODE FLEKSIBEL</h1>
                    <h2 class="font-bold my-2">Belajar lebih mudah, hasil lebih optimal</h2>
                    <p class="mb-2">Mempermudah dengan berbagai metode,
                        menyesuaikan dengan kebutuhan perusahaan
                    </p>
                    <p>
                        LPH Doa Bangsa Sukabumi dapat menyelenggarakan
                        pelatihan secara online, offline, atau hybrid
                        sesuai dengan kebutuhan perusahaan
                    </p>
                </div>
            </div>
            <div class="w-full border-[10px] border-darkteal rounded-full"></div>
        </div>

        <div class="md:w-4/5 mx-auto text-deepturqoise md:text-justify" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="text-lg font-bold text-darkgreen mb-2">Program Pelatihan Halal yang Komprehensif dari LPH Doa Bangsa Sukabumi</h1>
            <p>Program Pelatihan Halal yang terdapat pada layanan LPH Doa Bangsa Sukabumi adalah salah satu layanan penting yang memungkinkan pengembangan kompetensi tim dalam mengelola sistem jaminan halal secara efektif.
                <br><br>
                Dengan adanya program pelatihan ini, perusahaan dapat mencapai beberapa tujuan penting, antara lain:
            </p>
            <ol class="flex flex-col gap-5 my-10">
                <li>
                    <b>1)</b> <strong>Pemahaman Regulasi Halal:</strong> Program pelatihan memungkinkan peserta untuk memahami regulasi dan persyaratan sertifikasi halal yang berlaku di Indonesia. Materi mencakup UU Jaminan Produk Halal, Peraturan BPJPH, dan standar-standar terkait lainnya.
                </li>
                <li>
                    <b>2)</b> <strong>Pengembangan Sistem Jaminan Halal:</strong> Pelatihan memberikan panduan praktis dalam mengembangkan dan menerapkan sistem jaminan halal di perusahaan. Peserta akan belajar tentang prosedur, dokumentasi, dan kontrol yang diperlukan untuk memastikan kehalalan produk.
                </li>
                <li>
                    <b>3)</b> <strong>Peningkatan Kapasitas Internal Auditor:</strong> Program pelatihan juga mencakup pengembangan kemampuan internal audit halal. Peserta akan dibekali dengan teknik audit, penyusunan checklist, dan pelaporan temuan audit yang efektif.
                </li>
                <li>
                    <b>4)</b> <strong>Manajemen Rantai Pasok Halal:</strong> Pelatihan memberikan pemahaman tentang pengelolaan rantai pasok dari hulu ke hilir untuk memastikan kehalalan bahan baku dan produk akhir. Materi mencakup verifikasi supplier, kontrol penerimaan, dan traceability.
                </li>
                <li>
                    <b>5)</b> <strong>Penyusunan Dokumen Sertifikasi:</strong> Peserta akan dibimbing dalam menyusun dokumen-dokumen yang diperlukan untuk sertifikasi halal, termasuk manual SJH, prosedur, instruksi kerja, dan formulir-formulir pendukung.
                </li>
                <li>
                    <b>6)</b> <strong>Persiapan Audit Sertifikasi:</strong> Program pelatihan mencakup persiapan menghadapi audit sertifikasi halal oleh LPH. Peserta akan belajar tentang langkah-langkah persiapan, komunikasi dengan auditor, dan follow-up temuan audit.
                </li>
            </ol>
            <p>
                Dengan program Pelatihan Halal yang komprehensif dari LPH Doa Bangsa Sukabumi, perusahaan dapat membangun kapasitas internal yang kuat dalam mengelola sistem jaminan halal. Hal ini memungkinkan perusahaan untuk tidak hanya memenuhi persyaratan sertifikasi, tetapi juga membangun budaya halal yang berkelanjutan dalam organisasi.
                <br><br>
                Pelatihan kami dirancang dengan pendekatan praktis dan aplikatif, memastikan bahwa peserta tidak hanya memahami teori tetapi juga dapat menerapkan pengetahuan tersebut dalam konteks kerja sehari-hari. Dengan trainer yang berpengalaman dan materi yang terus diperbarui sesuai perkembangan regulasi, perusahaan dapat yakin bahwa investasi dalam pelatihan ini akan memberikan return yang signifikan dalam bentuk peningkatan kualitas sistem jaminan halal dan efisiensi proses sertifikasi.
            </p>
        </div>
    </section>
    {{-- End Section4 --}}
@endsection
