@extends('layout.app')

@section('content')
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
                    Bisnis dan Kerjasama
                </h1>
                <p class="text-white mt-4">
                    Sebagai Lembaga Pemeriksa Halal yang terpercaya dan profesional, kami membuka peluang kemitraan untuk bersama-sama mengembangkan ekosistem produk halal di Indonesia. Kami berkomitmen untuk menjalin kerjasama yang saling menguntungkan dengan berbagai pihak dalam mendukung sertifikasi halal yang berkualitas.
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
                    Sebagai Lembaga Pemeriksa Halal yang terakreditasi, kami hadir untuk mendukung pertumbuhan industri halal di Indonesia yang semakin pesat. Dengan adanya Undang-Undang No. 33 Tahun 2014 tentang Jaminan Produk Halal, permintaan akan sertifikasi halal meningkat signifikan di berbagai sektor industri.
                </p>
                <br />
                <h1 class="font-bold">Peluang dan Potensi Bisnis Halal:</h1>
                <br />
                <p>
                    Pasar produk halal global terus berkembang dengan pesat. Indonesia sebagai negara dengan populasi muslim terbesar di dunia memiliki potensi yang sangat besar dalam pengembangan industri halal. Sertifikasi halal bukan hanya kebutuhan keagamaan, tetapi juga menjadi nilai tambah dan keunggulan kompetitif dalam pasar global.
                </p>
                <br />
                <p>
                    Dengan berkembangnya kesadaran konsumen akan pentingnya produk halal, industri makanan, minuman, obat-obatan, kosmetika, dan produk turunan lainnya membutuhkan sertifikasi halal sebagai standar mutu dan keamanan. Ini menciptakan peluang bisnis yang sangat menjanjikan dalam penyediaan jasa sertifikasi halal.
                </p>
                <br />
                <h1 class="font-bold">Keuntungan Bermitra dengan Kami:</h1>
                <br />
                <ol class="list-decimal">
                    <li>
                        <h1 class="font-bold">Kredibilitas dan Pengakuan:</h1>
                        Sebagai Lembaga Pemeriksa Halal yang terakreditasi, kami memiliki kredibilitas tinggi dan diakui oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Mitra kami akan mendapatkan kepercayaan dari pelanggan dan industri.
                    </li>
                    <li>
                        <h1 class="font-bold">Jaringan Luas dan Ekspansi Pasar:</h1>
                        Dengan bergabung bersama kami, mitra dapat mengakses jaringan pelaku usaha halal yang luas, mulai dari UKM hingga perusahaan multinasional, serta peluang ekspansi pasar domestik dan internasional.
                    </li>
                    <li>
                        <h1 class="font-bold">
                            Dukungan Teknis dan Pelatihan:
                        </h1>
                        Kami menyediakan dukungan teknis lengkap, pelatihan auditor halal, konsultasi sistem jaminan halal, dan pembinaan berkelanjutan untuk memastikan keberhasilan mitra dalam mengembangkan bisnis sertifikasi halal.
                    </li>
                    <li>
                        <h1 class="font-bold">
                            Model Bisnis Berkelanjutan:
                        </h1>
                        Dengan model bisnis berbasis sertifikasi berulang dan surveilan tahunan, mitra dapat menikmati pendapatan yang berkelanjutan dan stabil dari bisnis sertifikasi halal.
                    </li>
                </ol>
                <br />
                <h1 class="font-bold">Prospek Bisnis Sertifikasi Halal:</h1>
                <br />
                <p>
                    Dengan pertumbuhan industri halal yang mencapai 10-15% per tahun secara global, prospek bisnis sertifikasi halal sangat cerah. Regulasi yang semakin ketat dan kesadaran konsumen yang meningkat menjadikan sertifikasi halal sebagai kebutuhan wajib bagi pelaku usaha.
                </p>
                <br />
                <p>
                    Kami terus berinovasi dan mengembangkan layanan sertifikasi halal yang komprehensif, mulai dari sertifikasi produk, sistem jaminan halal, pelatihan auditor internal, hingga konsultasi pengembangan produk halal. Dengan teknologi dan metodologi terkini, kami memastikan proses sertifikasi yang efisien, akurat, dan terpercaya.
                </p>
                <br />
                <p>
                    Bergabunglah dengan kami sebagai mitra dalam mengembangkan ekosistem halal yang berkualitas dan terpercaya di Indonesia. Bersama-sama kita dapat berkontribusi dalam membangun industri halal nasional yang kompetitif di pasar global.
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
            Peluang kemitraan dalam pengembangan bisnis sertifikasi halal
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
                    onclick="toggleContent('tbcontent1', 'buttoncont1')"
                >
                    <div
                        class="flex items-center buttoncont border-b-2 w-full h-14 bg-transparent hover:border-darkteal"
                    >
                        <img
                            src="img/mitrakeagenan.png"
                            width="40"
                            class="mr-5"
                        />
                        <h1>Mitra dan Keagenan</h1>
                    </div>
                </a>
                <a
                    role="button"
                    id="buttoncont2"
                    onclick="toggleContent('tbcontent2', 'buttoncont2')"
                >
                    <div
                        class="flex items-center buttoncont mt-3 border-b-2 w-full h-14 bg-transparent hover:border-darkteal"
                    >
                        <img src="img/afiliasi.png" width="40" class="mr-5" />
                        <h1>Afiliasi Sertifikasi</h1>
                    </div>
                </a>
                <a
                    role="button"
                    id="buttoncont3"
                    onclick="toggleContent('tbcontent3', 'buttoncont3')"
                >
                    <div
                        class="flex items-center buttoncont mt-3 border-b-2 w-full h-14 bg-transparent hover:border-darkteal"
                    >
                        <img
                            src="img/kerjasamaumum.png"
                            width="40"
                            class="mr-5"
                        />
                        <h1>Kerjasama Institusi</h1>
                    </div>
                </a>
                <a
                    role="button"
                    id="buttoncont4"
                    onclick="toggleContent('tbcontent4', 'buttoncont4')"
                >
                    <div
                        class="flex items-center buttoncont mt-3 border-b-2 w-full h-14 bg-transparent hover:border-darkteal"
                    >
                        <img src="img/btob.png" width="40" class="mr-5" />
                        <h1>Business Partner</h1>
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
                                Mitra dan Keagenan Sertifikasi Halal
                            </h1>
                            <p class="font-normal md:text-justify">
                                Kami membuka peluang kemitraan sebagai Agen atau Perwakilan Resmi Lembaga Pemeriksa Halal di berbagai wilayah di Indonesia. Program ini dirancang untuk individu atau perusahaan yang ingin mengembangkan bisnis dalam bidang sertifikasi halal dengan dukungan penuh dari lembaga yang telah terakreditasi.
                                <br /><br />
                                <strong>Keuntungan Menjadi Mitra:</strong>
                                <ul class="list-disc ml-6 mt-3">
                                    <li>Hak eksklusif sebagai perwakilan resmi di wilayah tertentu</li>
                                    <li>Komisi yang kompetitif untuk setiap klien yang disertifikasi</li>
                                    <li>Pendapatan berkelanjutan dari surveilan tahunan</li>
                                    <li>Pelatihan dan sertifikasi auditor halal gratis</li>
                                    <li>Dukungan pemasaran dan materi promosi</li>
                                    <li>Akses ke database pelaku usaha potensial</li>
                                </ul>
                                <br />
                                <strong>Syarat Menjadi Mitra:</strong>
                                <ul class="list-disc ml-6 mt-3">
                                    <li>Memiliki latar belakang bisnis atau pemasaran</li>
                                    <li>Memiliki jaringan dengan pelaku usaha (terutama UKM)</li>
                                    <li>Komitmen untuk mengembangkan bisnis sertifikasi halal</li>
                                    <li>Memenuhi target penjualan yang disepakati</li>
                                </ul>
                                <br />
                                Program kemitraan ini sangat cocok untuk konsultan bisnis, lembaga pelatihan, atau pengusaha yang ingin mengembangkan portofolio bisnis di industri halal.
                            </p>
                        </div>
                    </div>

                    <div id="tbcontent2" class="tbcontent">
                        <div class="text-deepturqoise mb-10">
                            <h1 class="font-bold mb-5 text-xl">Program Afiliasi Sertifikasi</h1>
                            <p class="font-normal md:text-justify">
                                Program Afiliasi dirancang untuk individu atau organisasi yang ingin mendapatkan penghasilan tambahan dengan mereferensikan klien potensial untuk melakukan sertifikasi halal. Program ini sangat fleksibel dan dapat diikuti oleh siapapun tanpa investasi awal.
                                <br /><br />
                                <strong>Cara Kerja Program Afiliasi:</strong>
                                <ul class="list-disc ml-6 mt-3">
                                    <li>Daftar sebagai afiliasi melalui website kami</li>
                                    <li>Dapatkan link referral unik</li>
                                    <li>Promosikan layanan sertifikasi halal kami</li>
                                    <li>Dapatkan komisi untuk setiap klien yang teregistrasi</li>
                                    <li>Komisi tambahan untuk klien yang melakukan sertifikasi</li>
                                </ul>
                                <br />
                                <strong>Tingkat Komisi:</strong>
                                <ul class="list-disc ml-6 mt-3">
                                    <li>Komisi registrasi: 10% dari biaya pendaftaran</li>
                                    <li>Komisi sertifikasi: 15% dari total biaya sertifikasi</li>
                                    <li>Komisi berulang: 5% dari biaya surveilan tahunan</li>
                                </ul>
                                <br />
                                Program afiliasi ini ideal untuk influencer, content creator, akademisi, atau profesional yang memiliki jaringan luas di industri makanan, farmasi, atau kosmetika.
                            </p>
                        </div>
                    </div>

                    <div id="tbcontent3" class="tbcontent">
                        <div class="text-deepturqoise">
                            <div class="flex items-center gap-4 mb-5">
                                <img
                                    src="img/investasi.png"
                                    width="50"
                                    alt=""
                                />
                                <h1 class="font-bold text-2xl">Kerjasama Institusi</h1>
                            </div>
                            <p class="font-normal md:text-justify">
                                Kami membuka kerjasama dengan berbagai institusi pendidikan, organisasi kemasyarakatan, dan lembaga pemerintah dalam pengembangan ekosistem halal di Indonesia.
                                <br /><br />
                                <strong>Bentuk Kerjasama Institusi:</strong>
                                <ul class="list-disc ml-6 mt-3">
                                    <li><strong>Universitas dan Politeknik:</strong> Kerjasama penelitian, pengembangan kurikulum halal, dan pelatihan mahasiswa</li>
                                    <li><strong>Asosiasi Industri:</strong> Program sertifikasi kolektif untuk anggota, workshop, dan seminar halal</li>
                                    <li><strong>Pemerintah Daerah:</strong> Program pendampingan sertifikasi halal untuk UKM lokal</li>
                                    <li><strong>Organisasi Keagamaan:</strong> Sosialisasi dan edukasi tentang pentingnya sertifikasi halal</li>
                                    <li><strong>Lembaga Pelatihan:</strong> Pengembangan program sertifikasi auditor halal</li>
                                </ul>
                                <br />
                                <strong>Manfaat Kerjasama:</strong>
                                <ul class="list-disc ml-6 mt-3">
                                    <li>Pengembangan kapasitas sumber daya manusia halal</li>
                                    <li>Penelitian dan pengembangan standar halal</li>
                                    <li>Peningkatan jumlah produk bersertifikat halal</li>
                                    <li>Penguatan ekosistem halal nasional</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div id="tbcontent4" class="tbcontent">
                        <div class="text-darkgreen">
                            <h1 class="font-bold mb-5 text-xl">Business Partnership</h1>
                            <p class="font-normal text-justify">
                                Kami membuka peluang kerjasama B2B (Business to Business) dengan berbagai perusahaan yang ingin mengintegrasikan layanan sertifikasi halal dalam model bisnis mereka.
                            </p>

                            <div class="my-10">
                                <h1 class="font-bold mb-3">Kerjasama dengan Penyedia Teknologi:</h1>
                                <ul class="list-disc list-inside">
                                    <li><strong>Laboratorium Analisis:</strong> Kerjasama dalam pengujian sampel produk</li>
                                    <li><strong>Perusahaan IT:</strong> Pengembangan sistem manajemen halal berbasis digital</li>
                                    <li><strong>Penyedia Cloud:</strong> Infrastruktur untuk database sertifikasi halal</li>
                                    <li><strong>Startup HalalTech:</strong> Pengembangan aplikasi dan platform halal</li>
                                </ul>
                            </div>

                            <div class="my-10">
                                <h1 class="font-bold mb-3">Kerjasama dengan Penyedia Jasa:</h1>
                                <ul class="list-disc list-inside">
                                    <li><strong>Konsultan Hukum dan Bisnis:</strong> Paket layanan lengkap untuk klien</li>
                                    <li><strong>Perusahaan Logistik:</strong> Sistem traceability produk halal</li>
                                    <li><strong>Lembaga Sertifikasi Internasional:</strong> Mutual recognition agreement</li>
                                    <li><strong>Perusahaan Asuransi:</strong> Produk asuransi khusus industri halal</li>
                                </ul>
                            </div>

                            <div>
                                <h1 class="font-bold mb-3">Kerjasama Pemasaran dan Media:</h1>
                                <ul class="list-disc list-inside">
                                    <li><strong>Digital Agency:</strong> Kampanye pemasaran produk halal</li>
                                    <li><strong>Media Partner:</strong> Konten edukasi dan promosi sertifikasi halal</li>
                                    <li><strong>Event Organizer:</strong> Seminar, workshop, dan pameran halal</li>
                                    <li><strong>Influencer Halal:</strong> Brand ambassador produk halal</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function toggleContent(tbContentId, activeButtonContId) {
                const tbContentElements = document.querySelectorAll(".tbcontent");
                const buttonContElements = document.querySelectorAll(".buttoncont");

                tbContentElements.forEach((tbContent) => {
                    tbContent.style.display = "none";
                });

                buttonContElements.forEach((buttonCont) => {
                    buttonCont.classList.remove("border-darkteal");
                    buttonCont.classList.add("bg-transparent");
                });

                const activeTbContent = document.getElementById(tbContentId);
                const activeButtonCont = document.getElementById(activeButtonContId);

                activeTbContent.style.display = "block";
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
        <h1 class="text-2xl font-bold text-center mt-5">Visi dan Misi Kami</h1>
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
                        Menjadi Lembaga Pemeriksa Halal terdepan dan terpercaya yang berkontribusi dalam pengembangan ekosistem halal Indonesia yang berdaya saing global.
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
                        Mendorong terwujudnya industri halal Indonesia yang berkualitas, transparan, dan diakui secara internasional melalui sertifikasi halal yang kredibel.
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
                        Menjadi mitra strategis bagi pelaku usaha dalam meningkatkan nilai tambah produk melalui sertifikasi halal yang profesional dan akuntabel.
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
                        Berkontribusi aktif dalam pengembangan standar halal nasional dan internasional yang sesuai dengan prinsip syariah dan kebutuhan industri.
                    </p>
                </div>
            </div>
        </div>

        <div class="md:w-3/5 mx-auto mb-16">
            <h1 class="text-2xl font-bold mb-3">Misi Kami</h1>
            <div class="text-deepturqoise">
                <div class="flex items-center mb-3">
                    <img
                        class="mr-4 pb-2"
                        src="img/badge.png"
                        width="30"
                        alt="badge"
                    />
                    <p>
                        Menyediakan layanan sertifikasi halal yang profesional, transparan, dan sesuai dengan standar nasional dan internasional.
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
                        Mengembangkan sistem pemeriksaan halal yang akurat, efisien, dan berbasis teknologi terkini.
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
                        Membangun jaringan kemitraan yang luas dengan berbagai stakeholder untuk pengembangan industri halal.
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
                        Melakukan edukasi dan sosialisasi tentang pentingnya sertifikasi halal kepada masyarakat dan pelaku usaha.
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
                        Meningkatkan kompetensi sumber daya manusia dalam bidang pemeriksaan dan sertifikasi halal.
                    </p>
                </div>
            </div>
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
            Siap Berkembang Bersama?
            <b>Tertarik Bermitra?</b>
        </h1>
    </div>

    <div class="flex flex-row gap-x-16 justify-center mt-8">
        <img src="img/message.png" width="70" alt="Konsultasi" />
        <img src="img/meeting.png" width="70" alt="Meeting" />
        <img src="img/coffe.png" width="70" alt="Diskusi" />
    </div>

    <div class="w-fit mt-12 mx-auto">
        <div
            class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-5"
        >
            <a href="{{ route('form-request-demo') }}" role="button">
                <div
                    class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white font-semibold rounded-md mb-5 hover:bg-darkgreen transition duration-300"
                >
                    <img
                        class="mr-3"
                        src="img/demo.png"
                        width="25"
                        alt="Konsultasi"
                    />
                    Konsultasi Gratis
                </div>
            </a>
            <a href="/whatsapp" role="button">
                <div
                    class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white font-semibold rounded-md mb-5 hover:bg-darkgreen transition duration-300"
                >
                    <img
                        class="mr-3"
                        src="img/whatsappicon.png"
                        width="25"
                        alt="Whatsapp"
                    />
                    Hubungi Kami
                </div>
            </a>
            <a href="mailto:mitra@lembagapemeriksahalal.co.id" role="button">
                <div
                    class="flex justify-center p-2 bg-darkteal md:w-[200px] text-white font-semibold rounded-md mb-5 hover:bg-darkgreen transition duration-300"
                >
                    <img
                        class="mr-3"
                        src="img/email_gray.png"
                        width="30"
                        alt="Email"
                    />
                    Email Kami
                </div>
            </a>
        </div>
        <p class="text-center text-gray-600 mt-4 text-sm">
            Untuk informasi lebih detail tentang program kemitraan, silakan hubungi kami melalui salah satu channel di atas
        </p>
    </div>
</section>
{{-- End Section5 --}}
@endsection
