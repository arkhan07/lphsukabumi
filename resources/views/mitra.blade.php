@extends('layout.app') @section('content')
{{-- Section1 --}}
<section
    class="container mx-auto md:p-0"
    data-aos="fade-right"
    data-aos-duration="1000"
>
    <div class="w-full mx-auto bg-darkteal">
        <div
            class="md:w-3/5 mx-auto flex flex-col md:flex-row items-center gap-10"
        >
            <div class="p-4 md:p-0 order-2 md:order-1">
                <h1 class="font-bold md:py-0 text-3xl text-white">
                    Bisnis dan kerjasama
                </h1>
                <p class="text-white mt-4">
                    Kami berkomitmen untuk terus tumbuh dan berkembang serta
                    menghadirkan produk berkualitas guna memberikan kenyamanan
                    dan kepuasan kepada konsumen. Kami dengan tulus membuka diri
                    untuk menjalin kerjasama.
                </p>
            </div>
            <img
                src="{{ 'img/mitra.png' }}"
                alt="Header Image"
                class="order-1 md:order-2 w-[80%] md:w-[50%] pt-20 md:py-20"
            />
        </div>
    </div>
</section>
{{-- End Section1 --}}

{{-- Section2 --}}
<section
    class="container mx-auto py-20"
    data-aos="fade-down"
    data-aos-duration="1000"
>
    <div class="w-full mx-auto p-5">
        <hr class="mb-10" />
        <div class="flex flex-col justify-center md:flex-row gap-16">
            <div class="md:w-[30%]">
                <img src="img/optimis_bisnis.png" alt="" />
            </div>

            <div class="md:w-3/5 md:text-justify text-deepturqoise">
                <p class="">
                    Sebagai aplikasi SIMKLINIK dan SIMRS yang berpotensi besar
                    di bidang bisnis, SAFFMedic hadir untuk mendukung
                    pertumbuhan yang pesat dalam sektor layanan kesehatan,
                    seperti praktek dokter, klinik, dan rumah sakit. Dengan
                    adanya kebijakan dan regulasi pemerintah yang mendorong
                    Fasilitas Kesehatan (FASKES) untuk menerapkan Rekam Medis
                    Elektronik (RME), SAFFMedic menawarkan solusi lengkap untuk
                    mengelola operasional klinik dan rumah sakit secara efisien.
                </p>
                <br />
                <h1 class="font-bold">Peluang dan Potensi Bisnis SAFFMedic:</h1>
                <br />
                <p>
                    Software as a Service (SaaS) adalah model bisnis yang
                    berkembang pesat, terutama dalam era digital. SAFFMedic
                    sebagai solusi SaaS dalam manajemen rekam medis, pembukuan,
                    dan keuangan, memberikan peluang bisnis yang sangat
                    menjanjikan.
                </p>
                <br />
                <p>
                    Dengan basis cloud, SAFFMedic menawarkan kemudahan akses dan
                    penggunaan tanpa perlu instalasi perangkat lunak tambahan.
                    Seluruh data dan proses disimpan secara aman di cloud,
                    memungkinkan pengguna untuk mengelola rekam medis, laporan
                    keuangan, faktur, serta transaksi secara real-time dari mana
                    saja dan kapan saja.
                </p>
                <br />
                <h1 class="font-bold">Keuntungan Menggunakan SAFFMedic:</h1>
                <br />
                <ol class="list-decimal">
                    <li>
                        <h1 class="font-bold">Efisiensi Waktu dan Biaya:</h1>
                        Dengan SAFFMedic, pengelolaan laporan keuangan,
                        pembuatan faktur, pelacakan pembayaran, serta pencatatan
                        transaksi menjadi lebih cepat dan mudah. Ini membantu
                        klinik dan rumah sakit mengurangi biaya operasional
                        sekaligus meningkatkan efisiensi kerja.
                    </li>
                    <li>
                        <h1 class="font-bold">Akses Real-Time:</h1>
                        Pengguna dapat memantau dan mengakses data rekam medis
                        maupun keuangan kapan pun dan di mana pun, selama
                        terhubung dengan internet, memberikan fleksibilitas yang
                        lebih besar dalam pengelolaan fasilitas kesehatan.
                    </li>
                    <li>
                        <h1 class="font-bold">
                            Kompatibilitas untuk Berbagai Skala Bisnis:
                        </h1>
                        SAFFMedic dirancang untuk dapat digunakan oleh klinik
                        kecil hingga rumah sakit besar, dengan fitur-fitur yang
                        dapat disesuaikan dengan kebutuhan setiap fasilitas
                        kesehatan.
                    </li>
                </ol>
                <br />
                <h1 class="font-bold">Prospek Bisnis SAFFMedic:</h1>
                <br />
                <p>
                    Dengan pertumbuhan industri kesehatan yang pesat dan
                    meningkatnya adopsi teknologi digital, permintaan akan
                    solusi manajemen klinik yang efisien seperti SAFFMedic akan
                    terus meningkat. Model bisnis berbasis langganan (bulanan
                    atau tahunan) yang diusung SAFFMedic juga memberikan
                    stabilitas pendapatan jangka panjang serta potensi
                    pertumbuhan yang berkelanjutan.
                </p>
                <br />
                <p>
                    Untuk mencapai keberhasilan yang lebih besar, SAFFMedic akan
                    terus berinovasi dan memperbarui fitur-fiturnya sesuai
                    dengan tren industri dan regulasi kesehatan terbaru. Dengan
                    demikian, SAFFMedic berkomitmen untuk selalu memberikan
                    solusi terbaik bagi pelanggannya.
                </p>
                <br />
                <p>
                    Secara keseluruhan, SAFFMedic adalah pilihan tepat untuk
                    fasilitas kesehatan yang ingin mengadopsi solusi modern
                    berbasis SaaS, dengan potensi pertumbuhan bisnis yang cerah
                    di masa depan.
                </p>
            </div>
        </div>
        <hr class="mt-10" />
    </div>
</section>
{{-- End Section2 --}}

{{-- Section3 --}}
<section
    class="container mx-auto mb-28"
    data-aos="fade-right"
    data-aos-duration="1000"
>
    <div class="w-2/5 mx-auto text-center text-darkgreen text-2xl font-bold">
        <h1 class="mb-3">Bentuk Kerjasama</h1>
        <h2 class="text-darkteal font-medium">
            Beberapa bentuk kerjasama yang dapat dilakukan dengan SAFFMedic
        </h2>
    </div>

    <div class="w-fit mx-auto md:pt-32 pt-12">
        <div class="flex flex-col md:flex-row gap-10 justify-center">
            <div
                class="md:w-[400px] mx-auto p-4 font-semibold text-lg text-darkteal"
            >
                <a
                    role="button"
                    id="buttoncont1"
                    onclick="toggleContent('tbcontent1', 'buttoncont1',)"
                >
                    <div
                        class="flex items-center buttoncont border-b-2 w-full h-14 bg-transparent hover:border-darkteal"
                    >
                        <img
                            src="img/mitrakeagenan.png"
                            width="40"
                            class="mr-5"
                        />
                        <h1>Mitra dan keagenan</h1>
                    </div>
                </a>
                <a
                    role="button"
                    id="buttoncont2"
                    onclick="toggleContent('tbcontent2', 'buttoncont2',)"
                >
                    <div
                        class="flex items-center buttoncont mt-3 border-b-2 w-full h-14 bg-transparent hover:border-darkteal"
                    >
                        <img src="img/afiliasi.png" width="40" class="mr-5" />
                        <h1>Afiliasi</h1>
                    </div>
                </a>
                <a
                    role="button"
                    id="buttoncont3"
                    onclick="toggleContent('tbcontent3', 'buttoncont3',)"
                >
                    <div
                        class="flex items-center buttoncont mt-3 border-b-2 w-full h-14 bg-transparent hover:border-darkteal"
                    >
                        <img
                            src="img/kerjasamaumum.png"
                            width="40"
                            class="mr-5"
                        />
                        <h1>Kerjasama Umum</h1>
                    </div>
                </a>
                <a
                    role="button"
                    id="buttoncont4"
                    onclick="toggleContent('tbcontent4', 'buttoncont4',)"
                >
                    <div
                        class="flex items-center buttoncont mt-3 border-b-2 w-full h-14 bg-transparent hover:border-darkteal"
                    >
                        <img src="img/btob.png" width="40" class="mr-5" />
                        <h1>B to B</h1>
                    </div>
                </a>
            </div>
            <div
                class="md:w-3/5 border shadow-lg rounded-xl flex items-center justify-center p-7 mx-auto bg-[#166F6120]"
            >
                <div class="bg-white rounded-xl p-5">
                    <div id="tbcontent1" class="tbcontent">
                        <div class="text-deepturqoise font-medium">
                            <h1 class="font-bold mb-5 text-xl">
                                Mitra dan keagenan
                            </h1>
                            <p class="font-normal md:text-justify">
                                SAFFMedic adalah perusahaan yang membuka peluang
                                bagi individu yang ingin menjadi Mitra atau Agen
                                di setiap wilayah. Kami memiliki visi untuk
                                menjadikan Anda sebagai Bisnis Partner yang
                                memiliki hak istimewa dalam memasarkan Produk
                                SAFFMedic. Bagi Anda yang memiliki usaha seperti
                                Konsultan Keuangan atau Toko Komputer, menjadi
                                Mitra keagenan Aplikasi Pembukuan SAFFMedic
                                adalah pilihan yang tepat.
                                <br /><br />
                                Salah satu keuntungan besar menjadi Mitra atau
                                Agen SAFFMedic adalah Anda berpeluang
                                mendapatkan komisi rutin berkesinambungan.
                                Setiap pelanggan yang membeli aplikasi SAFFMedic
                                dan memperpanjang penggunaannya akan memberikan
                                Anda komisi yang terus mengalir. Ini berarti
                                pendapatan Anda akan terus berkembang seiring
                                dengan jumlah pelanggan yang terus bertambah.
                                <br /><br />
                                Kami yakin bahwa menjadi Mitra atau Agen
                                SAFFMedic akan memberikan Anda kesempatan untuk
                                menjadi bagian dari perusahaan yang sedang
                                berkembang dengan cepat. Kami menyediakan
                                dukungan dan bantuan penuh untuk membantu Anda
                                dalam mengembangkan usaha Anda. Bergabunglah
                                dengan kami sekarang dan jadilah bagian dari
                                kesuksesan bersama SAFFMedic.
                            </p>
                        </div>
                    </div>

                    <div id="tbcontent2" class="tbcontent">
                        <div class="text-deepturqoise mb-10">
                            <h1 class="font-bold mb-5 text-xl">Afiliasi</h1>
                            <p class="font-normal md:text-justify">
                                Anda ingin menghasilkan pendapatan tambahan
                                secara perorangan, Anda dapat bergabung dengan
                                Program Afiliasi SAFFMedic. Untuk informasi
                                lebih lanjut, silakan klik link berikut ini.
                            </p>
                        </div>
                    </div>

                    <div id="tbcontent3" class="tbcontent">
                        <div class="text-deepturqoise">
                            <div class="flex items-center gap-4">
                                <img
                                    src="img/investasi.png"
                                    width="50"
                                    alt=""
                                    class="pb-5"
                                />
                                <h1 class="font-bold text-2xl">Investor</h1>
                            </div>
                            <p class="font-normal">
                                Kami terbuka dan memberikan kesempatan kerjasama
                                kepada siapa pun yang ingin melakukan
                                pengembangan bisnis bersama kami. SAFFMedic
                                merupakan bisnis yang sedang berkembang dengan
                                tekad dan semangat yang kuat untuk menyediakan
                                solusi pembukuan Digital bagi usaha kecil dan
                                menengah.
                            </p>
                        </div>
                    </div>

                    <div id="tbcontent4" class="tbcontent">
                        <div class="text-darkgreen">
                            <h1 class="font-bold mb-5 text-xl">B to B</h1>
                            <p class="font-normal text-justify">
                                Membuka kerjasama yang saling menguntungkan
                                antara penyedia teknologi dan penyedia
                                informasi.
                            </p>

                            <div class="my-10">
                                <h1>Contoh bidang teknologi</h1>
                                <ul class="list-image-check list-inside">
                                    <li>Penyedia server</li>
                                    <li>Penyedia cloud</li>
                                    <li>Penyedia data senter</li>
                                </ul>
                            </div>

                            <div>
                                <h1>Contoh bidang media</h1>
                                <ul class="list-image-check list-inside">
                                    <li>Influenser</li>
                                    <li>Youtuber</li>
                                    <li>Digital Marketing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function toggleContent(tbContentId, activeButtonContId) {
                const tbContentElements =
                    document.querySelectorAll(".tbcontent");
                const buttonContElements =
                    document.querySelectorAll(".buttoncont");

                tbContentElements.forEach((tbContent) => {
                    tbContent.style.display = "none"; // Hide all tbcontent initially
                });

                buttonContElements.forEach((buttonCont) => {
                    buttonCont.classList.remove("border-darkteal");
                    buttonCont.classList.add("bg-transparent");
                });

                const activeTbContent = document.getElementById(tbContentId);
                const activeButtonCont =
                    document.getElementById(activeButtonContId);

                activeTbContent.style.display = "block"; // Display the selected tbcontent
                activeButtonCont.classList.add("border-darkteal");
                activeButtonCont.classList.remove("bg-transparent");
            }

            // Initialize the active state on load
            toggleContent("tbcontent1", "buttoncont1");
        </script>
    </div>
</section>
{{-- End Section3 --}}

{{-- Section4 --}}
<section
    class="container mb-20 mx-auto"
    data-aos="fade-down"
    data-aos-duration="1000"
>
    <div
        class="sm:w-3/4 text-darkgreen mx-auto border-2 shadow-lg rounded-xl p-5"
    >
        <h1 class="text-2xl font-bold text-center mt-5">Spirit Kami</h1>
        <div class="flex flex-col md:w-3/5 mt-24 mb-16 mx-auto">
            <h1 class="text-2xl font-bold">Visi Kami</h1>
            <div class="p-5 text-sm md:text-base text-deepturqoise">
                <div class="flex items-center mb-3">
                    <img
                        class="mr-4 pb-2"
                        src="img/badge.png"
                        width="30"
                        alt="badge"
                    />
                    <p>
                        Kami bertujuan untuk menjadi perusahaan yang menyediakan
                        sistem informasi untuk membantu pihak Layanan Kesehatan
                        dalam menerapkan SIMRS secara optimal.
                    </p>
                </div>
                <div class="flex items-center mb-3">
                    <img
                        class="mr-4 pb-2"
                        src="img/badge.png"
                        width="30"
                        alt="badge"
                    />
                    <p>
                        Berperan aktif dalam meningkatkan kualitas Sistem
                        Informasi Manajemen Rumah Sakit (SIMRS). Tujuannya
                        adalah agar SIMRS memiliki daya guna yang tinggi serta
                        dapat membantu kelancaran operasional Fasilitas
                        Kesehatan.
                    </p>
                </div>
                <div class="flex items-center mb-3">
                    <img
                        class="mr-4 pb-2"
                        src="img/badge.png"
                        width="30"
                        alt="badge"
                    />
                    <p>
                        Meyakini potensi pertumbuhan FASKES serta dampaknya
                        terhadap peningkatan pelayanan yang optimal.
                    </p>
                </div>
                <div class="flex items-center mb-3">
                    <img
                        class="mr-4 pb-2"
                        src="img/badge.png"
                        width="30"
                        alt="badge"
                    />
                    <p>
                        Percaya pada kekuatan Sumber Daya Manusia yang memiliki
                        talenta berkompetensi tinggi guna menerapkan teknologi
                        yang canggih.
                    </p>
                </div>
            </div>
        </div>

        <div class="md:w-3/5 mx-auto mb-16">
            <h1 class="text-2xl font-bold mb-3">Misi Kami</h1>
            <p class="text-deepturqoise">
                Menjadi perusahaan penyedia solusi dengan menawarkan alternatif
                teknologi informasi yang terjangkau dan dikembangkan dengan
                baik. Memberi solusi, menawarkan alternatif dalam pemanfaataan
                teknologi informasi yang terjangkau dan terlayani
            </p>
        </div>
    </div>
</section>
{{-- End Section4 --}}

{{-- Section5 --}}
<section
    class="container mb-20 mx-auto"
    data-aos="fade-right"
    data-aos-duration="1000"
>
    <div class="text-darkteal md:w-1/5 w-1/2 text-center mx-auto">
        <h1 class="text-lg">
            Maju, Tumbuh, dan berkembang
            <b>Tertarik Program ini?</b>
        </h1>
    </div>

    <div class="flex flex-row gap-x-16 justify-center mt-8">
        <img src="img/message.png" width="70" />
        <img src="img/meeting.png" width="70" />
        <img src="img/coffe.png" width="70" />
    </div>

    <div class="w-fit mt-12 mx-auto">
        <div
            class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-5"
        >
            <a role="button">
                <div
                    class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white font-semibold rounded-md mb-5"
                >
                    <img
                        class="mr-3"
                        src="img/demo.png"
                        width="25"
                        alt="virtual"
                    />
                    <a href="{{ route('form-request-demo') }}"
                        >Jadwalkan Demo</a
                    >
                </div>
            </a>
            <a role="button">
                <div
                    class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white font-semibold rounded-md mb-5"
                >
                    <img
                        class="mr-3"
                        src="img/whatsappicon.png"
                        width="25"
                        alt="Whatsapp"
                    />
                    <a href="/whatsapp">Hubungi Kami</a>
                </div>
            </a>
            <a role="button">
                <div
                    class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white font-semibold rounded-md mb-5"
                >
                    <img
                        class="mr-3"
                        src="img/email_gray.png"
                        width="30"
                        alt="Demo"
                    />
                    <a href="{{ route('form-request-demo') }}">e-Mail</a>
                </div>
            </a>
        </div>
    </div>
</section>
{{-- End Section5 --}}
@endsection
