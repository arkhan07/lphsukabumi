@extends('layout.app')

@section('content')

    <div class="contents">
        <section id="solution" data-aos-duration="2000" data-aos="fade-up">
            <div class="col-12 col-md-12 row justify-content-center mx-auto py-5">
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <img src="img/dashboard-clinic.png" alt="Dashboard" width="100%">
                </div>

                <div class="col-12 col-md-6 mt-5">
                    <h1 class="fw-bolder text-success">
                        Solusi Yang Dapat <br>
                        <span class="border-bottom border-5 border-success pb-1">Kami Bant</span>u Untuk Anda
                    </h1>

                    <h5 class="text-secondary mt-4 fw-normal">
                        Dengan kemapanan sistem yang kami miliki, <br>
                        kami dapat menentukan kebutuhan di <br>
                        perusahaan yang anda miliki.
                    </h5>

                    <div class="col-12 col-md-12 mt-3">
                        <div class="card-group">
                            <div class="card-solutions col-12 col-md-4 h-100 mb-3">
                                <div class="card border-0 shadow rounded-3 h-100 me-3">
                                    <img class="mt-2 ms-2" src="img/hospital.png" alt="Rumah Sakit"
                                        width="70px !important">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1 fw-bolder"><span
                                                class="border-bottom border-3 border-success pb-1">Ruma</span>h Sakit</h6>
                                        <p class="card-text pt-3 text-secondary">SAFF-Medic sangat cocok diterapkan pada
                                            Rumah Sakit untuk menunjang kebutuhan operasional yang ter-integrasi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-solutions col-12 col-md-4 mb-3">
                                <div class="card border-0 shadow rounded-3 h-100 me-3">
                                    <img class="mt-2 ms-2" src="img/clinic.png" alt="Klinik" width="70px !important">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1 fw-bolder"><span
                                                class="border-bottom border-3 border-success pb-1">Klinik</span></h6>
                                        <p class="card-text pt-3 text-secondary">Cocok untuk berbagai type klinik dalam
                                            membantu aktifitas pelayanan pasien serta administrasi yang terpusat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-solutions col-12 col-md-4 mb-3">
                                <div class="card border-0 shadow rounded-3 h-100 me-3">
                                    <img class="mt-2 ms-2" src="img/public-health-center.png" alt="Puskesmas"
                                        width="70px !important">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1 fw-bolder"><span
                                                class="border-bottom border-3 border-success pb-1">Puskes</span>mas</h6>
                                        <p class="card-text pt-3 text-secondary">Pelayanan kesehatan pada masyarakat sangat
                                            terbantu oleh aplikasi apabila menggunakan SAFF-Medic</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-solutions col-12 col-md-4">
                                <div class="card border-0 shadow rounded-3 h-100 me-3 ">
                                    <img class="mt-2 ms-2" src="img/doctor-practice.png" alt="Praktek Dokter"
                                        width="70px !important">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1 fw-bolder"><span
                                                class="border-bottom border-3 border-success pb-1">Prakte</span>k Dokter
                                        </h6>
                                        <p class="card-text pt-3 text-secondary">Praktek mandiri yang dilakukan oleh Dokter
                                            akan terbantu dalam hal pencatatan administrasi pasien.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-solutions col-12 col-md-4">
                                <div class="card border-0 shadow rounded-3 h-100 me-3">
                                    <img class="mt-2 ms-2" src="img/laboratory.png" alt="Laboratorium"
                                        width="70px !important">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1 fw-bolder"><span
                                                class="border-bottom border-3 border-success pb-1">Labor</span>atorium</h6>
                                        <p class="card-text pt-3 text-secondary">Dapat diterapkan secara otonom maupun
                                            bersama dalam penerapan seperti Rumah sakit dan klinik yang memiliki fasilitas
                                            laboraturim.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-solutions col-12 col-md-4">
                                <div class="card border-0 shadow rounded-3 h-100 me-3">
                                    <img class="mt-2 ms-2" src="img/drugstore.png" alt="Apotek"
                                        width="70px !important">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1 fw-bolder"><span
                                                class="border-bottom border-3 border-success pb-1">Apote</span>k</h6>
                                        <p class="card-text pt-3 text-secondary">Apotek dalam SAFF-Medic dapat diterapkan
                                            secara mandiri dan juga terhubung dengan berbagai sentra layanan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" data-aos-duration="2000" data-aos="fade-up">
            <div class="col-12 col-md-11 row justify-content-center mx-auto py-5">
                <div class="col-12 col-md-12">
                    <h1 class="text-success fw-bolder display-4"><span
                            class="border-bottom border-5 border-success">Fitur</span></h1>
                    <h4 class="text-secondary pt-3">Jawaban untuk segala kebutuhan usaha Anda</h4>
                </div>

                <div class="scroll-features col-12 col-md-4 mt-5 pt-5">
                    <ul class="list-unstyled mt-5">
                        <li class="media">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseAdmission" role="button" aria-expanded="false"
                                    aria-controls="collapseAdmission"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/patient.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-1 fw-bolder">Admisi</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/admission.png" alt="Admisi">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseAdmission">
                                    Inilah Basic fitur yang wajib dimiliki oleh pengguna SAFF-Medic. Admisi mempermudah
                                    proses regisrasi dan merekam data pasien yang dimulai proses pendaftaran hingga
                                    pelayanan berakhir dalam bentuk digital terkoneksi, serta memudahkan Anda dalam
                                    mengelola data Pasien.
                                </div>
                            </div>
                        </li>
                        <li class="media my-5">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseBill" role="button" aria-expanded="false"
                                    aria-controls="collapseBill"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/bill-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Tagihan</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/bill.png" alt="Tagihan">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseBill">
                                    Pada fitur ini anda akan dengan mudah menemukan invoice atau riwayat tagihan
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseIgd" role="button" aria-expanded="false"
                                    aria-controls="collapseIgd"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/igd-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">IGD</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/igd.png" alt="IGD" width="45px" height="45px">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseIgd">
                                    Tindakan dan pelayanan pada Gawat Darurat akan terinput dengan Baik dan mememudahkan
                                    Petugas dalam berkoorinasi.
                                </div>
                            </div>
                        </li>
                        <li class="media my-5">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseOutpatient" role="button" aria-expanded="false"
                                    aria-controls="collapseOutpatient"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/outpatient-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Rawat Jalan
                                    </h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/outpatient.png" alt="Rawat Jalan">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseOutpatient">
                                    Pada umumnya Klinik/ Rumah sakit memiliki layanan praktek dokter yang dikelola dalam
                                    kegiatan rawat jalan. Fitur ini memudahkan Anda mengelola kegiatan Rawat Jalan Mulai
                                    dari Pendaftaran, Pendistribusian pada Poli, dan mengotrol data pasien yang terpusat.
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseInpatient" role="button" aria-expanded="false"
                                    aria-controls="collapseInpatient"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/inpatient-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Rawat Inap</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/inpatient.png" alt="Rawat Inap">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseInpatient">
                                    Bagi Klinik yang memiliki fasilitas Rawat Inap kini akan lebih mudah dan nyaman dalam
                                    menjalankannya. Pada fitur ini pengelola dengan mudah mengatur dan mengontrol data
                                    pasien yang berada pada kamar atau ruangan perwatan dan fitur ini tersentralisasi dengan
                                    baik pada semua unit layanan.
                                </div>
                            </div>
                        </li>
                        <li class="media my-5">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseMcu" role="button" aria-expanded="false"
                                    aria-controls="collapseMcu"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/mcu-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">MCU</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/mcu.png" alt="MCU">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseMcu">
                                    Fitur ini sangat membantu bagi Klinik atau Rumah Sakit yang melayani Medical Check Up.
                                    MCU yang terdapat dalam SAFF-Medic dapat memudahkan kerjasama antara Klinik atau Rumah
                                    Sakit dengan Organisasi lain untuk keperluan MCU.
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseSupport" role="button" aria-expanded="false"
                                    aria-controls="collapseSupport"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/support-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Penunjang</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/support.png" alt="Penunjang">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseSupport">
                                    SAFF-Medic memiliki basic penunjang yakni laboratorium. Anda akan dengan mudah
                                    menentukan fitur penunjang sesuai dengan kebutuhan Anda seperti berikut ini :
                                    <ul class="support-component">
                                        <li>Laboratorium</li>
                                        <li>Radiologi</li>
                                        <li>Kardiologi</li>
                                        <li>Audiometri</li>
                                        <li>Spirometri</li>
                                        <li>Optometri</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="media my-5">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapsePharcmacy" role="button" aria-expanded="false"
                                    aria-controls="collapsePharcmacy"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/pharmacy-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Farmasi</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/pharmacy.png" alt="Farmasi" width="45px" height="40px">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapsePharcmacy">
                                    Resep yang diberikan oleh Dokter akan terhubung dengan layanan Farmasi. Apotik yang Anda
                                    kelola Akan terpantau dengan Baik Penjualan Obat, Pembelian Obat, Racik, Utang Piutang,
                                    dll.
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseAccounting" role="button" aria-expanded="false"
                                    aria-controls="collapseAccounting"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/accounting-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Akuntansi</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/accounting.png" alt="Akuntansi">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseAccounting">
                                    Resep yang diberikan oleh Dokter akan terhubung dengan layanan Farmasi. Apotik yang Anda
                                    kelola Akan terpantau dengan Baik Penjualan Obat, Pembelian Obat, Racik, Utang Piutang,
                                    dll.
                                </div>
                            </div>
                        </li>
                        <li class="media my-5">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseQueue" role="button" aria-expanded="false"
                                    aria-controls="collapseQueue"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/queue-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Antrian</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/queue.png" alt="Antrian">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseQueue">
                                    Memberikan pelayanan yang optimal terhadap pasien adalah hal yang tidak mudah.
                                    SAFF-Medic dapat mengintegrasikan pendaftaran mulai dari Poli hingga Apotek dengan
                                    sistem antrian yang terpadu.
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseCostume" role="button" aria-expanded="false"
                                    aria-controls="collapseCostume"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/costume-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Fitur Costume
                                    </h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/costume-feature.png" alt="Fitur Costume" width="45px" height="45px">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseCostume">
                                    Kami berupaya memahami dan memenuhi kebutuhan operasional Anda dengan menghadirkan fitur
                                    custome agar menjawab semua keperluan anda. Flexibelitas ini kami berikan agar
                                    terpenuhinya seluruh kebutuhan.
                                </div>
                            </div>
                        </li>
                        <li class="media my-5">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseB2b" role="button" aria-expanded="false"
                                    aria-controls="collapseB2b"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/b2b-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">B to B</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/b2b.png" alt="B to B">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseB2b">
                                    Dengan adanya fitur ini, Klinik/Rumah Sakit dapat menjalankan program kerjasama dengan
                                    beberapa perusahaan / organisasi dalam melakukan pemeriksaan ataupun MCU.
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseIntegration" role="button" aria-expanded="false"
                                    aria-controls="collapseIntegration"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/integration-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Integrasi</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/integration.png" alt="Integrasi">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseIntegration">
                                    Menjebatani Anda dengan fasilitas penunjang seperti penerapan Metode Pembayaran ataupun
                                    Bridging dengan BPJS.
                                </div>
                            </div>
                        </li>
                        <li class="media mt-5 mb-3">
                            <div class="media-body me-3">
                                <a data-bs-toggle="collapse" href="#collapseSupporting" role="button" aria-expanded="false"
                                    aria-controls="collapseSupporting"
                                    class="list-features d-flex justify-content-end align-items-center text-end text-dark text-decoration-none"
                                    onclick="document.getElementById('changeImage').src='img/support2-img.png'">
                                    <h4 class="features-title border-features mt-0 mb-0 me-5 pb-2 fw-bolder">Dukungan</h4>
                                    <div class="features-icon bg-white rounded-circle shadow p-3">
                                        <img src="img/support-2.png" alt="Dukungan">
                                    </div>
                                </a>
                                <div class="mt-3 collapse text-end" id="collapseSupporting">
                                    Kami menyediakan tim support dan dukungan untuk operasional Anda yang senantiasa
                                    mendampingi melalui virtual remote untuk memberikan bimbingan, ataupun mengatasi masalah
                                    dalam penggunaan. Dukungan ini kami berikan secara suma cuma selama Anda menggunakan
                                    SAFF-Medic.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-8 mt-5">
                    <img src="img/patient.png" alt="Pasien" width="100%" id="changeImage">
                </div>
            </div>
        </section>

        <section id="implementation" data-aos-duration="2000" data-aos="fade-up">
            <div class="col-12 col-md-11 row justify-content-center mx-auto py-5">
                <div class="col-12 col-md-12">
                    <h1 class="text-success fw-bolder display-4"><span
                            class="border-bottom border-5 border-success">Implementas</span>i</h1>
                    <h4 class="text-secondary pt-3">
                        Jangan khawatir… Bila Anda adalah pemula dalam penggunaan system ataupun ingin migrasi dari layanan
                        lain, SAFF-Medic Memberikan setup dan implementasi Gratis.
                    </h4>
                </div>

                <div class="col-12 col-md-12 d-flex justify-content-center mt-5">
                    <div class="bg-shadow col-12 col-md-3 p-3">
                        <img src="img/contract-arrow.png" alt="Contract Arrow" class="arrow contract-arrow">
                        <div class="bg-success p-3 rounded-circle mx-auto" style="width: 75px;">
                            <img src="img/contract.png" alt="Kontrak">
                        </div>
                        <h5 class="fw-bolder text-success text-center mt-3">Memb<span
                                class="border-bottom border-3 border-success pb-1">uat K</span>ontrak</h5>
                        <h6 class="fw-bolder text-secondary text-center mt-3">
                            Berlaku hanya untuk penerapan server lokal dengan pilihan paket Hybrid.
                        </h6>
                    </div>

                    <div class="bg-shadow col-12 col-md-3 p-3">
                        <img src="img/bill-arrow.png" alt="Bill Arrow" class="arrow bill-arrow">
                        <div class="bg-success p-3 rounded-circle mx-auto" style="width: 75px;">
                            <img src="img/pay.png" alt="Pembayaran">
                        </div>
                        <h5 class="fw-bolder text-success text-center mt-3">Pem<span
                                class="border-bottom border-3 border-success pb-1">baya</span>ran</h5>
                        <h6 class="fw-bolder text-secondary text-center mt-3">
                            Pembayaran akan diberi batas waktu selambat - lambatnya 14 hari setelah terbit invoice.
                        </h6>
                    </div>
                </div>

                <div class="col-12 col-md-12 d-flex justify-content-center">
                    <div class="col-12 col-md-3 p-3">
                        <div class="row list-features d-flex justify-content-end">
                            <div class="bg-shadow col-12 col-md-9 p-3">
                                <img src="img/admin-arrow.png" alt="Admin Arrow" class="arrow admin-arrow">
                                <div class="bg-success p-3 rounded-circle mx-auto" style="width: 75px;">
                                    <img src="img/register.png" alt="Registrasi">
                                </div>
                                <h5 class="fw-bolder text-success text-center mt-3">Regis<span
                                        class="border-bottom border-3 border-success pb-1">trasi </span>Admin</h5>
                                <h6 class="fw-bolder text-secondary text-center mt-3">
                                    Untuk registrasi hubungi Tim Saffmedic pada nomor 082333202020
                                </h6>
                            </div>
                            <div class="bg-shadow col-12 col-md-12 mt-5 p-3">
                                <img src="img/packet-arrow.png" alt="Packet Arrow" class="arrow packet-arrow">
                                <div class="bg-success p-3 rounded-circle mx-auto" style="width: 75px;">
                                    <img src="img/packet.png" alt="Paket" class="m-auto d-block">
                                </div>
                                <h5 class="fw-bolder text-success text-center mt-3">Menen<span
                                        class="border-bottom border-3 border-success pb-1">tukan</span> Paket</h5>
                                <h6 class="fw-bolder text-secondary text-center mt-3">
                                    Sesuaikan kebutuhan pilihan paket anda sesuai dengan kebutuhan usaha anda
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                        <img id="changePictures" src="img/implementation.png" alt="Implementasi" width="80%"
                            class="fade-in">
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="row">
                            <div class="bg-shadow col-12 col-md-9 p-3">
                                <img src="img/database-arrow.png" alt="Database Arrow" class="arrow database-arrow">
                                <div class="bg-success p-3 rounded-circle mx-auto" style="width: 70px;">
                                    <img src="img/database.png" alt="Paket" class="m-auto d-block">
                                </div>
                                <h5 class="fw-bolder text-success text-center mt-3">Setup<span
                                        class="border-bottom border-3 border-success pb-1"> Data</span>base</h5>
                                <h6 class="fw-bolder text-secondary text-center mt-3">
                                    Tim kami akan membuat setup database sesuai dengan paket yang dipilih.
                                </h6>
                            </div>
                            <div class="bg-shadow col-12 col-md-12 mt-5 p-3"
                                onmouseover="document.getElementById('changePictures').src='img/congratulation.png'"
                                onmouseout="document.getElementById('changePictures').src='img/implementation.png'">
                                <img src="img/training-arrow.png" alt="Training Arrow" class="arrow training-arrow">
                                <div class="bg-success p-3 rounded-circle mx-auto" style="width: 70px;">
                                    <img src="img/training.png" alt="Paket" class="m-auto d-block">
                                </div>
                                <h5 class="fw-bolder text-success text-center mt-3">Implemen<span
                                        class="border-bottom border-3 border-success pb-1">tasi </span>& Training </h5>
                                <h6 class="fw-bolder text-secondary text-center mt-3">
                                    Mengimplementasi sistem Saff-Medic kekomputer usaha anda dan melakukakn training untuk
                                    pengoperasian sistem Saff-Medic
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="banner" class="banner-saffmedic" data-aos-duration="2000" data-aos="fade-up">
            <div class="col-12 col-md-12 row justify-content-center pe-0 ps-5 mx-auto py-5">
                <div class="col-12 col-md-12 ps-0">
                    <h1 class="text-white fw-bolder display-4"><span class="border-bottom border-5 border-white">Sistem
                        </span>Kesehatan Terbaik</h1>
                </div>

                <div class="col-12 col-md-8 d-flex px-0">
                    <div class="col-12 col-md-4">
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex mb-3">
                                <img class="me-4" src="img/cloud.png" alt="Cloud System">
                                <div class="align-self-center">
                                    <h5 class="mb-0 fw-bolder text-white">
                                        CLOUD <br>
                                        SYSTEM
                                    </h5>
                                </div>
                            </li>
                            <span class="border-top border-5 border-white" style="padding-left: 140px;"></span>
                            <li class="d-flex mt-5 mb-3">
                                <img class="me-4" src="img/support-team.png" alt="Support">
                                <div class="align-self-center">
                                    <h5 class="mb-0 fw-bolder text-white">
                                        TIM SUPORT <br>
                                        SELALU SIAP
                                    </h5>
                                </div>
                            </li>
                            <span class="border-top border-5 border-white" style="padding-left: 140px;"></span>
                        </ul>
                    </div>

                    <div class="col-12 col-md-4">
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex mb-3">
                                <img class="me-4" src="img/free-costume.png" alt="Free Costume">
                                <div class="align-self-center">
                                    <h5 class="mb-0 fw-bolder text-white">
                                        BEBAS <br>
                                        COSTUME
                                    </h5>
                                </div>
                            </li>
                            <span class="border-top border-5 border-white" style="padding-left: 140px;"></span>
                            <li class="d-flex mt-5 mb-3">
                                <img class="me-4" src="img/fast-implementation.png" alt="Fast Implementation">
                                <div class="align-self-center">
                                    <h5 class="mb-0 fw-bolder text-white">
                                        IMPLEMENTASI <br>
                                        CEPAT
                                    </h5>
                                </div>
                            </li>
                            <span class="border-top border-5 border-white" style="padding-left: 140px;"></span>
                        </ul>
                    </div>

                    <div class="col-12 col-md-4">
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex mb-3">
                                <img class="me-4" src="img/data.png" alt="Secure Data">
                                <div class="align-self-center">
                                    <h5 class="mb-0 fw-bolder text-white">
                                        DATA <br>
                                        AMAN
                                    </h5>
                                </div>
                            </li>
                            <span class="border-top border-5 border-white" style="padding-left: 140px;"></span>
                            <li class="d-flex mt-5 mb-3">
                                <img class="me-4" src="img/free-update.png" alt="Free Update">
                                <div class="align-self-center">
                                    <h5 class="mb-0 fw-bolder text-white">
                                        FREE <br>
                                        UPDATE
                                    </h5>
                                </div>
                            </li>
                            <span class="border-top border-5 border-white" style="padding-left: 140px;"></span>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 pe-0 align-self-end">
                    <img src="img/banner-saffmedic.png" alt="Banner" width="100%" style="z-index: 9999;">
                </div>
            </div>
        </section>

        <section id="service-packet" class="bg-white" data-aos-duration="2000" data-aos="fade-up">
            <div class="col-12 col-md-12 row justify-content-center mx-auto py-5">
                <!-- Price Packet -->
                <div class="col-12 col-md-11 text-center my-5 pt-5">
                    <h1 class="text-success display-4 fw-bolder">Pak<span
                            class="border-bottom border-5 border-success pb-1">et Laya</span>nan</h1>
                    <h4 class="text-secondary pt-3">Pilih daftar paket sesuai dengan kebutuhan anda</h4>
                </div>

                <div id="non-detail" class="row col-12 col-md-11">
                    <div class="packet card-group">
                        <div onclick="basic()" id="basic" class="col-12 col-md-4">
                            <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                <div class="bg-success rounded-circle mx-auto p-3">
                                    <img src="img/basic.png" alt="Basic" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title text-success mb-0 fw-bolder">B<span
                                            class="border-bottom border-3 border-success">ASI</span>C</h3>
                                    <h5 class="card-text fw-bolder text-success pt-3">
                                        Max Cloud 2 GB pertahun
                                    </h5>
                                    <h1 class="text-success fw-bolder mt-5">IDR. 2.000K</h1>
                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                </div>
                            </div>
                        </div>
                        <div onclick="mediumI()" id="mediumI" class="col-12 col-md-4">
                            <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                <div class="bg-success rounded-circle mx-auto p-3">
                                    <img src="img/medium1.png" alt="Medium I" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title text-success mb-0 fw-bolder">ME<span
                                            class="border-bottom border-3 border-success">DIU</span>M I</h3>
                                    <h5 class="card-text fw-bolder text-success pt-3">
                                        Max Cloud 4 GB pertahun
                                    </h5>
                                    <h1 class="text-success fw-bolder mt-5">IDR. 3.500K</h1>
                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                </div>
                            </div>
                        </div>
                        <div onclick="mediumII()" id="mediumII" class="col-12 col-md-4">
                            <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                <div class="bg-success rounded-circle mx-auto p-3">
                                    <img src="img/medium2.png" alt="Medium II" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title text-success mb-0 fw-bolder">ME<span
                                            class="border-bottom border-3 border-success">DIU</span>M II</h3>
                                    <h5 class="card-text fw-bolder text-success pt-3">
                                        Max Cloud 7 GB pertahun
                                    </h5>
                                    <h1 class="text-success fw-bolder mt-5">IDR. 5.000K</h1>
                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                </div>
                            </div>
                        </div>
                        <div onclick="pro()" id="pro" class="col-12 col-md-4 mt-5">
                            <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                <div class="bg-success rounded-circle mx-auto p-3">
                                    <img src="img/pro.png" alt="Pro" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title text-success mb-0 fw-bolder"><span
                                            class="border-bottom border-3 border-success">PRO</span></h3>
                                    <h5 class="card-text fw-bolder text-success pt-3">
                                        Max Cloud 20 GB pertahun
                                    </h5>
                                    <h1 class="text-success fw-bolder mt-5">IDR. 8.000K</h1>
                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                </div>
                            </div>
                        </div>
                        <div onclick="enterprise()" id="enterprise" class="col-12 col-md-4 mt-5">
                            <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                <div class="bg-success rounded-circle mx-auto p-3">
                                    <img src="img/enterprise.png" alt="Enterprise" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title text-success mb-0 fw-bolder">ENT<span
                                            class="border-bottom border-3 border-success">ERPR</span>ISE</h3>
                                    <h5 class="card-text fw-bolder text-success pt-3">
                                        Max Cloud ( Call Us )
                                    </h5>
                                    <h1 class="text-success fw-bolder mt-5">IDR. 25.000K</h1>
                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                </div>
                            </div>
                        </div>
                        <div onclick="hybrid()" id="hybrid" class="col-12 col-md-4 mt-5">
                            <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                <div class="bg-success rounded-circle mx-auto p-3">
                                    <img src="img/hybrid.png" alt="Basic" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title text-success mb-0 fw-bolder">PAKE<span
                                            class="border-bottom border-3 border-success">T HY</span>BRID</h3>
                                    <h5 class="card-text fw-bolder text-success pt-3">
                                        Ini merupakan paket yang mengizinkan pengguna menerapkan SAFF-Medic pada server
                                        mandiri dengan tetap melakukan langganan lisensi.
                                    </h5>
                                    <h1 class="text-success fw-bolder mt-5">CALL US</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="detail" class="row col-12 col-md-11 mt-5 d-none">
                    <div class="packet card-group">
                        <div class="row col-12 col-md-8">
                            <div onclick="basic()" id="basic_detail" class="col-12 col-md-6 mb-5 d-none">
                                <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                    <div class="bg-success rounded-circle mx-auto p-3">
                                        <img src="img/basic.png" alt="Basic" width="60px" height="60px">
                                    </div>
                                    <div class="card-body text-center mt-4">
                                        <h3 class="card-title text-success mb-0 fw-bolder">B<span
                                                class="border-bottom border-3 border-success">ASI</span>C</h3>
                                        <h5 class="card-text fw-bolder text-success pt-3">
                                            Max Cloud 2 GB pertahun
                                        </h5>
                                        <h1 class="text-success fw-bolder mt-5">IDR. 2.000K</h1>
                                        <h4 class="text-success fw-bolder">Per Tahun</h4>
                                    </div>
                                </div>
                            </div>
                            <div onclick="mediumI()" id="mediumI_detail" class="col-12 col-md-6 mb-5 d-none">
                                <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                    <div class="bg-success rounded-circle mx-auto p-3">
                                        <img src="img/medium1.png" alt="Medium I" width="60px" height="60px">
                                    </div>
                                    <div class="card-body text-center mt-4">
                                        <h3 class="card-title text-success mb-0 fw-bolder">ME<span
                                                class="border-bottom border-3 border-success">DIU</span>M I</h3>
                                        <h5 class="card-text fw-bolder text-success pt-3">
                                            Max Cloud 4 GB pertahun
                                        </h5>
                                        <h1 class="text-success fw-bolder mt-5">IDR. 3.500K</h1>
                                        <h4 class="text-success fw-bolder">Per Tahun</h4>
                                    </div>
                                </div>
                            </div>
                            <div onclick="mediumII()" id="mediumII_detail" class="col-12 col-md-6 mb-5 d-none">
                                <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                    <div class="bg-success rounded-circle mx-auto p-3">
                                        <img src="img/medium2.png" alt="Medium II" width="60px" height="60px">
                                    </div>
                                    <div class="card-body text-center mt-4">
                                        <h3 class="card-title text-success mb-0 fw-bolder">ME<span
                                                class="border-bottom border-3 border-success">DIU</span>M II</h3>
                                        <h5 class="card-text fw-bolder text-success pt-3">
                                            Max Cloud 7 GB pertahun
                                        </h5>
                                        <h1 class="text-success fw-bolder mt-5">IDR. 5.000K</h1>
                                        <h4 class="text-success fw-bolder">Per Tahun</h4>
                                    </div>
                                </div>
                            </div>
                            <div onclick="pro()" id="pro_detail" class="col-12 col-md-6 mb-5 d-none">
                                <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                    <div class="bg-success rounded-circle mx-auto p-3">
                                        <img src="img/pro.png" alt="Pro" width="60px" height="60px">
                                    </div>
                                    <div class="card-body text-center mt-4">
                                        <h3 class="card-title text-success mb-0 fw-bolder"><span
                                                class="border-bottom border-3 border-success">PRO</span></h3>
                                        <h5 class="card-text fw-bolder text-success pt-3">
                                            Max Cloud 20 GB pertahun
                                        </h5>
                                        <h1 class="text-success fw-bolder mt-5">IDR. 8.000K</h1>
                                        <h4 class="text-success fw-bolder">Per Tahun</h4>
                                    </div>
                                </div>
                            </div>
                            <div onclick="enterprise()" id="enterprise_detail" class="col-12 col-md-6 mb-5 d-none">
                                <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                    <div class="bg-success rounded-circle mx-auto p-3">
                                        <img src="img/enterprise.png" alt="Enterprise" width="60px" height="60px">
                                    </div>
                                    <div class="card-body text-center mt-4">
                                        <h3 class="card-title text-success mb-0 fw-bolder">ENT<span
                                                class="border-bottom border-3 border-success">ERPR</span>ISE</h3>
                                        <h5 class="card-text fw-bolder text-success pt-3">
                                            Max Cloud ( Call Us )
                                        </h5>
                                        <h1 class="text-success fw-bolder mt-5">IDR. 25.000K</h1>
                                        <h4 class="text-success fw-bolder">Per Tahun</h4>
                                    </div>
                                </div>
                            </div>
                            <div onclick="basic()" id="col_basic" class="col-12 col-md-12 d-none">
                                <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                    <div class="row align-items-center mx-auto col-12 col-md-12">
                                        <div class="col-12 col-md-3 ps-3">
                                            <div class="bg-success rounded-circle p-3 mx-auto"
                                                style="width: 100px;height: 100px;">
                                                <img class="d-block mx-auto" src="img/basic.png" alt="Basic" width="60px"
                                                    height="60px">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="row align-items-center card-body text-center">
                                                <div class="col-12 col-md-6">
                                                    <h3 class="card-title text-success mb-0 fw-bolder">B<span
                                                            class="border-bottom border-3 border-success">ASI</span>C</h3>
                                                    <h5 class="card-text fw-bolder text-success pt-3">
                                                        Max Cloud 2 GB pertahun
                                                    </h5>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <h1 class="text-success fw-bolder">IDR. 2.000K</h1>
                                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div onclick="hybrid()" id="col_hybrid" class="col-12 col-md-12 d-none">
                                <div class="card-hover card shadow h-100 rounded py-5 mx-4">
                                    <div class="row align-items-center mx-auto col-12 col-md-12">
                                        <div class="col-12 col-md-3 ps-3">
                                            <div class="bg-success rounded-circle p-3 mx-auto"
                                                style="width: 100px;height: 100px;">
                                                <img class="d-block mx-auto" src="img/hybrid.png" alt="Basic" width="60px"
                                                    height="60px">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="row align-items-center card-body text-center">
                                                <div class="col-12 col-md-6">
                                                    <h3 class="card-title text-success mb-0 fw-bolder">PAKE<span
                                                            class="border-bottom border-3 border-success">T HY</span>BRID
                                                    </h3>
                                                    <h5 class="card-text fw-bolder text-success pt-3">
                                                        Ini merupakan paket yang mengizinkan pengguna menerapkan SAFF-Medic
                                                        pada server mandiri dengan tetap melakukan langganan lisensi.
                                                    </h5>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <h1 class="text-success fw-bolder">CALL US</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="col_6_basic" class="row align-items-center col-12 col-md-4 d-none">
                            <div class="bg-green card shadow rounded py-5 mx-4">
                                <div class="bg-white rounded-circle mx-auto p-3">
                                    <img src="img/basic.png" alt="Basic" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h1 class="card-title text-white mb-0 fw-bolder pb-1">B<span
                                            class="border-bottom border-3 border-white">ASI</span>C</h1>
                                    <h5 class="fw-bolder text-white pt-3">
                                        Max Cloud 2 GB pertahun
                                    </h5>
                                    <h1 class="text-white fw-bolder pt-2">IDR. 2.000K</h1>
                                    <h4 class="text-white fw-bolder">Per Tahun</h4>
                                    <div class="row col-12 col-md-12 mx-auto">
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 text-white fw-bolder align-self-center">Admisi
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Keuangan
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Rawat
                                                    Jalan</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Labolatorium</h6>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Antrian
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 2
                                                    User / Dokter</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 1
                                                    Poli</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('whatsapp') }}">
                                        <button type="button" class="btn shadow text-white button mt-5 p-3">Pelajari
                                            Sekarang <i class="ms-2 fa fa-arrow-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="col_6_mediumI" class="row align-items-center col-12 col-md-4 d-none">
                            <div class="bg-green card shadow rounded py-5 mx-4">
                                <div class="bg-white rounded-circle mx-auto p-3">
                                    <img src="img/medium1.png" alt="Medium I" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h1 class="card-title text-white mb-0 fw-bolder pb-1">ME<span
                                            class="border-bottom border-3 border-white">DIU</span>M I</h1>
                                    <h5 class="fw-bolder text-white pt-3">
                                        Max Cloud 4 GB pertahun
                                    </h5>
                                    <h1 class="text-white fw-bolder pt-2">IDR. 3.500K</h1>
                                    <h4 class="text-white fw-bolder">Per Tahun</h4>
                                    <div class="row col-12 col-md-12 mx-auto">
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 text-white fw-bolder align-self-center">Admisi
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Keuangan
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Rawat
                                                    Jalan</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Labolatorium</h6>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Radiologi</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Antrian
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 5
                                                    User / Dokter</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 2
                                                    Poli</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('whatsapp') }}">
                                        <button type="button" class="btn shadow text-white button mt-5 p-3">Pelajari
                                            Sekarang <i class="ms-2 fa fa-arrow-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="col_6_mediumII" class="row align-items-center col-12 col-md-4 d-none">
                            <div class="bg-green card shadow rounded py-5 mx-4">
                                <div class="bg-white rounded-circle mx-auto p-3">
                                    <img src="img/medium2.png" alt="Medium II" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h1 class="card-title text-white mb-0 fw-bolder pb-1">ME<span
                                            class="border-bottom border-3 border-white">DIU</span>M II</h1>
                                    <h5 class="fw-bolder text-white pt-3">
                                        Max Cloud 7 GB pertahun
                                    </h5>
                                    <h1 class="text-white fw-bolder pt-2">IDR. 5.000K</h1>
                                    <h4 class="text-white fw-bolder">Per Tahun</h4>
                                    <div class="row col-12 col-md-12 mx-auto">
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 text-white fw-bolder align-self-center">Admisi
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Keuangan
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Rawat
                                                    Jalan</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Labolatorium</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Radiologi</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Cardiologi</h6>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Farmasi
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Akuntansi
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Antrian
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Fitur B
                                                    to B</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 7
                                                    User / Dokter</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 3
                                                    Poli</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('whatsapp') }}">
                                        <button type="button" class="btn shadow text-white button mt-5 p-3">Pelajari
                                            Sekarang <i class="ms-2 fa fa-arrow-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="col_6_pro" class="row align-items-center col-12 col-md-4 d-none">
                            <div class="bg-green card shadow rounded py-5 mx-4">
                                <div class="bg-white rounded-circle mx-auto p-3">
                                    <img src="img/pro.png" alt="Pro" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h1 class="card-title text-white mb-0 fw-bolder pb-1"><span
                                            class="border-bottom border-3 border-white">PRO</span></h1>
                                    <h5 class="fw-bolder text-white pt-3">
                                        Max Cloud 20 GB pertahun
                                    </h5>
                                    <h1 class="text-white fw-bolder pt-2">IDR. 8.000K</h1>
                                    <h4 class="text-white fw-bolder">Per Tahun</h4>
                                    <div class="row col-12 col-md-12 mx-auto">
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 text-white fw-bolder align-self-center">Admisi
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Keuangan
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Rawat
                                                    Jalan</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Rawat
                                                    Inap</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">IGD</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Labolatorium</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Radiologi</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Cardiologi</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Audiometri</h6>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Spirometri</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Optometri</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Farmasi
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Akuntansi
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Antrian
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Fitur B
                                                    to B</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 10
                                                    User / Dokter</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 5
                                                    Poli</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('whatsapp') }}">
                                        <button type="button" class="btn shadow text-white button mt-5 p-3">Pelajari
                                            Sekarang <i class="ms-2 fa fa-arrow-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="col_6_enterprise" class="row align-items-center col-12 col-md-4 d-none">
                            <div class="bg-green card shadow rounded py-5 mx-4">
                                <div class="bg-white rounded-circle mx-auto p-3">
                                    <img src="img/enterprise.png" alt="Enterprise" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h1 class="card-title text-white mb-0 fw-bolder pb-1">ENT<span
                                            class="border-bottom border-3 border-white">ERPR</span>ISE</h1>
                                    <h5 class="fw-bolder text-white pt-3">
                                        Max Cloud ( Call Us )
                                    </h5>
                                    <h1 class="text-white fw-bolder pt-2">IDR. 25.000K</h1>
                                    <h4 class="text-white fw-bolder">Per Tahun</h4>
                                    <div class="row col-12 col-md-12 mx-auto">
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 text-white fw-bolder align-self-center">Admisi
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Keuangan
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Rawat
                                                    Jalan</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Rawat
                                                    Inap</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">IGD</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">MCU</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Labolatorium</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Radiologi</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Cardiologi</h6>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled col-md-6 text-start mt-5">
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Audiometri</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Spirometri</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Penunjang
                                                    Optometri</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Farmasi
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Akuntansi
                                                </h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Antrian
                                                </h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Fitur B
                                                    to B</h6>
                                            </li>
                                            <li class="d-flex my-4">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 15
                                                    User / Dokter</h6>
                                            </li>
                                            <li class="d-flex">
                                                <div class="bg-white rounded-circle px-1 me-3">
                                                    <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                                </div>
                                                <h6 class="card-text mb-0 align-self-center text-white fw-bolder">Max 7
                                                    Poli</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('whatsapp') }}">
                                        <button type="button" class="btn shadow text-white button mt-5 p-3">Pelajari
                                            Sekarang <i class="ms-2 fa fa-arrow-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="col_6_hybrid" class="row align-items-center col-12 col-md-4 d-none">
                            <div class="bg-green card shadow rounded py-5 mx-4">
                                <div class="bg-white rounded-circle mx-auto p-3">
                                    <img src="img/hybrid.png" alt="Basic" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title text-white mb-0 fw-bolder pb-5">PAKE<span
                                            class="border-bottom border-3 border-white">T HY</span>BRID</h3>
                                    <h5 class="text-white fw-bolder">
                                        Ini merupakan paket yang mengizinkan pengguna menerapkan SAFF-Medic pada server
                                        mandiri dengan tetap melakukan langganan lisensi.
                                    </h5>
                                    <h1 class=" display-3 text-white fw-bolder my-5">CALL US</h1>
                                    <a href="{{ route('whatsapp') }}">
                                        <button type="button" class="btn shadow text-white button mt-5 p-3">Pelajari
                                            Sekarang <i class="ms-2 fa fa-arrow-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Doctor -->
                <div class="col-12 col-md-11 text-center my-5 pt-5">
                    <h1 class="text-success fw-bolder mb-5">Tamba<span class="border-bottom border-5 border-success">han
                            Dokte</span>r & Poli</h1>
                </div>

                <div class="col-12 col-md-11">
                    <div class="card-group">
                        <div class="col-12 col-md-3">
                            <div class="card-hover card shadow h-100 rounded mx-3">
                                <div class="bg-success rounded-circle mx-auto mt-5 p-3">
                                    <img src="img/basic.png" alt="Paket I" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-5">
                                    <h3 class="card-title text-success mb-0 fw-bolder">P<span
                                            class="border-bottom border-3 border-success">AKET</span> I</h3>
                                    <h2 class="text-success fw-bolder mt-5">IDR. 600K</h2>
                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                    <ul class="list-unstyled text-start mt-5">
                                        <li class="d-flex">
                                            <div class="bg-success rounded-circle px-1 me-3">
                                                <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                            </div>
                                            <div>
                                                <h6 class="mt-0 mb-1 text-success fw-bolder">2 POLI</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex my-4">
                                            <div class="bg-success rounded-circle px-1 me-3">
                                                <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                            </div>
                                            <div>
                                                <h6 class="mt-0 mb-1 text-success fw-bolder">3 USER / DOKTER</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card-hover card shadow h-100 rounded mx-3">
                                <div class="bg-success rounded-circle mx-auto mt-5 p-3">
                                    <img src="img/medium1.png" alt="Paket II" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-5">
                                    <h3 class="card-title text-success mb-0 fw-bolder">P<span
                                            class="border-bottom border-3 border-success">AKET</span> II</h3>
                                    <h2 class="text-success fw-bolder mt-5">IDR. 1.200K</h2>
                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                    <ul class="list-unstyled text-start mt-5">
                                        <li class="d-flex">
                                            <div class="bg-success rounded-circle px-1 me-3">
                                                <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                            </div>
                                            <div>
                                                <h6 class="mt-0 mb-1 text-success fw-bolder">3 POLI</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex my-4">
                                            <div class="bg-success rounded-circle px-1 me-3">
                                                <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                            </div>
                                            <div>
                                                <h6 class="mt-0 mb-1 text-success fw-bolder">5 USER / DOKTER</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card-hover card shadow h-100 rounded mx-3">
                                <div class="bg-success rounded-circle mx-auto mt-5 p-3">
                                    <img src="img/pro.png" alt="Paket III" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-5">
                                    <h3 class="card-title text-success mb-0 fw-bolder">P<span
                                            class="border-bottom border-3 border-success">AKET </span>III</h3>
                                    <h2 class="text-success fw-bolder mt-5">IDR. 2.000K</h2>
                                    <h4 class="text-success fw-bolder">Per Tahun</h4>
                                    <ul class="list-unstyled text-start mt-5">
                                        <li class="d-flex">
                                            <div class="bg-success rounded-circle px-1 me-3">
                                                <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                            </div>
                                            <div>
                                                <h6 class="mt-0 mb-1 text-success fw-bolder">5 POLI</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex my-4">
                                            <div class="bg-success rounded-circle px-1 me-3">
                                                <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                            </div>
                                            <div>
                                                <h6 class="mt-0 mb-1 text-success fw-bolder">10 USER / DOKTER</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card-hover card shadow h-100 rounded mx-3">
                                <div class="bg-success rounded-circle mx-auto mt-5 p-3">
                                    <img src="img/hybrid.png" alt="Paket Pro" width="60px" height="60px">
                                </div>
                                <div class="card-body text-center mt-5">
                                    <h3 class="card-title text-success mb-0 fw-bolder">PA<span
                                            class="border-bottom border-3 border-success">KET P</span>RO</h3>
                                    <h1 class="text-success fw-bolder mt-5">CALL US</h1>
                                    <ul class="list-unstyled text-start mt-5 pt-4">
                                        <li class="d-flex">
                                            <div class="bg-success rounded-circle px-1 me-3">
                                                <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                            </div>
                                            <div>
                                                <h6 class="mt-0 mb-1 text-success fw-bolder">UP 5 POLI</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex my-4">
                                            <div class="bg-success rounded-circle px-1 me-3">
                                                <img src="img/checklist.png" alt="Checklist" class="mb-1">
                                            </div>
                                            <div>
                                                <h6 class="mt-0 mb-1 text-success fw-bolder">UP 10 USER / DOKTER</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Unit -->
                <div class="col-12 col-md-11 text-center my-5 pt-5">
                    <h1 class="text-success fw-bolder mb-0">Tamb<span class="border-bottom border-5 border-success">ahan
                            Sa</span>tuan</h1>
                </div>

                <div class="col-12 col-md-11 d-flex justify-content-center">
                    <table class="table table-bordered bg-white w-75">
                        <thead>
                            <tr class="bg-success text-white text-center">
                                <th class="border-top-left"></th>
                                <th class="h2 fw-bolder" scope="col">1 USER / POLI</th>
                                <th class="h2 fw-bolder" scope="col">2 USER / POLI</th>
                                <th class="h2 fw-bolder border-top-right" scope="col">3 USER / POLI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-end text-blue h6 fw-bolder">USER / DOKTER</td>
                                <td class="text-center text-success h5 fw-bolder">IDR 250K / Tahun</td>
                                <td class="text-center text-success h5 fw-bolder">IDR 480K / Tahun</td>
                                <td class="text-center text-success h5 fw-bolder">IDR 690K / Tahun</td>
                            </tr>
                            <tr>
                                <td class="text-end text-blue h6 fw-bolder">POLI</td>
                                <td class="text-center text-success h5 fw-bolder">IDR 150K / Tahun</td>
                                <td class="text-center text-success h5 fw-bolder">IDR 220K / Tahun</td>
                                <td class="text-center text-success h5 fw-bolder">IDR 410K / Tahun</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Additional Packet -->
                <div class="col-12 col-md-11 text-center my-5 pt-5">
                    <h1 class="text-success fw-bolder mb-0">Pake<span class="border-bottom border-5 border-success">t
                            Tamb</span>ahan</h1>
                </div>

                <div class="col-12 col-md-11">
                    <table class="table table-bordered bg-white">
                        <thead>
                            <tr class="bg-success text-white text-center">
                                <th width="17.5%" class="border-top-left"></th>
                                <th width="16.5%" class="h2 fw-bolder" scope="col">BASIC</th>
                                <th width="16.5%" class="h2 fw-bolder" scope="col">MEDIUM I</th>
                                <th width="16.5%" class="h2 fw-bolder" scope="col">MEDIUM II</th>
                                <th width="16.5%" class="h2 fw-bolder" scope="col">PRO</th>
                                <th width="16.5%" class="h2 fw-bolder border-top-right">ENTERPRISE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-end text-blue h6 fw-bolder">Pelatihan Online</td>
                                <td class="text-center text-success h5 fw-bolder">4 Jam</td>
                                <td class="text-center text-success h5 fw-bolder">10 Jam</td>
                                <td class="text-center text-success h5 fw-bolder">20 Jam</td>
                                <td class="text-center text-success h5 fw-bolder">30 Jam</td>
                                <td class="text-center text-success h5 fw-bolder">40 Jam</td>
                            </tr>
                            <tr>
                                <td class="text-end text-blue h6 fw-bolder">Pelatihan On-Site</td>
                                <td class="text-center text-success h5 fw-bolder">-</td>
                                <td class="text-center text-success h5 fw-bolder">-</td>
                                <td class="text-center text-success h5 fw-bolder">3 Jam</td>
                                <td class="text-center text-success h5 fw-bolder">6 Jam</td>
                                <td class="text-center text-success h5 fw-bolder">10 Jam</td>
                            </tr>
                            <tr>
                                <td class="text-end text-blue h6 fw-bolder">Migrasi Data Awal</td>
                                <td class="text-center text-success h5 fw-bolder">Unlimited</td>
                                <td class="text-center text-success h5 fw-bolder">Unlimited</td>
                                <td class="text-center text-success h5 fw-bolder">Unlimited</td>
                                <td class="text-center text-success h5 fw-bolder">Unlimited</td>
                                <td class="text-center text-success h5 fw-bolder">Unlimited</td>
                            </tr>
                            <tr>
                                <td class="text-end text-blue h6 fw-bolder">After Sale Service</td>
                                <td class="text-center"><img class="bg-blue rounded p-2" src="img/check.png"
                                        alt="Checklist"></td>
                                <td class="text-center"><img class="bg-blue rounded p-2" src="img/check.png"
                                        alt="Checklist"></td>
                                <td class="text-center"><img class="bg-blue rounded p-2" src="img/check.png"
                                        alt="Checklist"></td>
                                <td class="text-center"><img class="bg-blue rounded p-2" src="img/check.png"
                                        alt="Checklist"></td>
                                <td class="text-center"><img class="bg-blue rounded p-2" src="img/check.png"
                                        alt="Checklist"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Additional Modul -->
                <div class="col-12 col-md-11 text-center my-5 pt-5">
                    <h1 class="text-success fw-bolder mb-0">Tam<span class="border-bottom border-5 border-success">bahan
                            M</span>odul</h1>
                    <h4 class="text-secondary pt-3">Berikut adalah daftar dan harga untuk penambahan modul dari Saff-Medic
                    </h4>
                    <h1 class="fw-bolder text-dark mt-3">IDR 5.000K / MODUL / TAHUN</h1>
                </div>

                <div class="col-12 col-md-12">
                    <div class="row justify-content-center mb-4">
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 63 62"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M61.849 14.3459H45.0796C44.8016 14.3459 44.535 14.4563 44.3384 14.6528C44.1419 14.8494 44.0315 15.116 44.0315 15.394V30.0672C44.0315 30.3452 44.1419 30.6118 44.3384 30.8083C44.535 31.0049 44.8016 31.1153 45.0796 31.1153H52.4162V34.7312L44.9936 39.4299C43.3549 37.82 41.2422 36.7794 38.9671 36.4613C39.8548 35.7104 40.5765 34.7829 41.0863 33.7379C41.5961 32.6929 41.8829 31.5533 41.9284 30.3914C41.9739 29.2296 41.7772 28.071 41.3507 26.9893C40.9241 25.9077 40.2772 24.9266 39.451 24.1085C38.6248 23.2904 37.6373 22.6532 36.5515 22.2373C35.4657 21.8215 34.3052 21.6362 33.1439 21.6932C31.9825 21.7502 30.8458 22.0482 29.8059 22.5683C28.766 23.0885 27.8457 23.8193 27.1035 24.7143L14.685 18.9188V17.4901H22.0216C22.2996 17.4901 22.5661 17.3797 22.7627 17.1832C22.9593 16.9866 23.0697 16.72 23.0697 16.442V1.76879C23.0697 1.49082 22.9593 1.22424 22.7627 1.02768C22.5661 0.831127 22.2996 0.720703 22.0216 0.720703H5.25216C4.97419 0.720703 4.70761 0.831127 4.51105 1.02768C4.3145 1.22424 4.20408 1.49082 4.20408 1.76879V16.442C4.20408 16.72 4.3145 16.9866 4.51105 17.1832C4.70761 17.3797 4.97419 17.4901 5.25216 17.4901H12.5888V19.5863C12.5888 19.7858 12.6457 19.9811 12.7529 20.1493C12.86 20.3175 13.0129 20.4517 13.1937 20.536L25.9662 26.497C25.1794 28.1646 24.9654 30.0455 25.3575 31.8472C25.7497 33.649 26.726 35.2708 28.1347 36.4605C25.5693 36.8218 23.2204 38.0968 21.5198 40.0511C19.8191 42.0055 18.8808 44.5079 18.8773 47.0986V51.1238L10.4926 48.1892V44.7404H17.8292C18.1072 44.7404 18.3738 44.63 18.5703 44.4335C18.7669 44.2369 18.8773 43.9703 18.8773 43.6924V27.971C18.8773 27.6931 18.7669 27.4265 18.5703 27.2299C18.3738 27.0334 18.1072 26.9229 17.8292 26.9229H1.05981C0.781837 26.9229 0.515252 27.0334 0.318697 27.2299C0.122142 27.4265 0.0117188 27.6931 0.0117188 27.971V43.6924C0.0117188 43.9703 0.122142 44.2369 0.318697 44.4335C0.515252 44.63 0.781837 44.7404 1.05981 44.7404H8.39643V48.9328C8.39643 49.1501 8.46397 49.362 8.5897 49.5393C8.71544 49.7165 8.89316 49.8503 9.09826 49.9221L18.8773 53.3447V60.4618C18.8773 60.7398 18.9877 61.0063 19.1843 61.2029C19.3809 61.3995 19.6474 61.5099 19.9254 61.5099H47.1757C47.4537 61.5099 47.7203 61.3995 47.9168 61.2029C48.1134 61.0063 48.2238 60.7398 48.2238 60.4618V47.0986C48.2261 44.9396 47.5739 42.8305 46.3534 41.0496L54.0249 36.1933C54.1742 36.0987 54.2972 35.968 54.3824 35.8131C54.4677 35.6583 54.5124 35.4844 54.5124 35.3076V31.1153H61.849C62.1269 31.1153 62.3935 31.0049 62.5901 30.8083C62.7866 30.6118 62.8971 30.3452 62.8971 30.0672V15.394C62.8971 15.116 62.7866 14.8494 62.5901 14.6528C62.3935 14.4563 62.1269 14.3459 61.849 14.3459ZM6.30025 2.81688H20.9735V15.394H6.30025V2.81688ZM9.76327 29.0191V31.1153C9.76328 31.3099 9.81748 31.5007 9.9198 31.6663C10.0221 31.8318 10.1685 31.9656 10.3426 32.0527L10.9826 32.373C11.3219 32.5415 11.6244 32.7757 11.8726 33.0619C12.1207 33.3482 12.3096 33.6808 12.4283 34.0406L12.4465 34.0947C12.5673 34.4537 12.6157 34.8331 12.5888 35.2109C12.5619 35.5887 12.4604 35.9574 12.2901 36.2957L12.0083 36.8591C11.7703 37.3389 11.4027 37.7425 10.947 38.024C10.4914 38.3055 9.96597 38.4538 9.43037 38.4519H2.1079V37.4038H4.16386C5.0982 37.4049 6.00916 37.1117 6.76743 36.5658C7.52571 36.0198 8.09278 35.249 8.38818 34.3625L8.3925 34.3494C8.60637 33.7082 8.71534 33.0367 8.71518 32.3608V29.0191H9.76327ZM6.619 29.0191V32.3611C6.61919 32.8101 6.54709 33.2562 6.40546 33.6823C6.40546 33.6838 6.40153 33.6937 6.40113 33.6954C6.24495 34.1652 5.94473 34.5738 5.54311 34.8632C5.14149 35.1526 4.65889 35.3081 4.16386 35.3076H2.1079V29.0191H6.619ZM2.1079 40.5481H9.43037C10.3556 40.5513 11.2632 40.2951 12.0502 39.8087C12.8373 39.3222 13.4722 38.625 13.8832 37.7961L14.165 37.2327C14.4591 36.6483 14.6344 36.0114 14.6807 35.3588C14.727 34.7063 14.6434 34.051 14.4347 33.4309L14.4167 33.3768C14.2116 32.7557 13.8855 32.1815 13.457 31.6873C13.0286 31.1931 12.5064 30.7888 11.9206 30.4978L11.86 30.4676V29.0191H16.7811V42.6443H2.1079V40.5481ZM27.262 30.0672C27.261 29.1387 27.4669 28.2217 27.8647 27.3828L28.9145 27.8726C29.0392 27.9308 29.1742 27.9639 29.3117 27.9699C29.4492 27.976 29.5866 27.9549 29.7159 27.9078C29.8453 27.8608 29.9641 27.7887 30.0656 27.6958C30.1671 27.6028 30.2493 27.4907 30.3075 27.366C30.3657 27.2413 30.3988 27.1063 30.4048 26.9688C30.4109 26.8313 30.3898 26.6939 30.3427 26.5646C30.2957 26.4352 30.2236 26.3164 30.1306 26.2149C30.0377 26.1134 29.9256 26.0312 29.8009 25.973L29.0882 25.6403C30.1137 24.608 31.4656 23.9635 32.9133 23.8168C34.361 23.67 35.8147 24.0301 37.0265 24.8356C38.2383 25.6412 39.1331 26.8422 39.5582 28.2338C39.9832 29.6255 39.9122 31.1215 39.3573 32.4666C38.8024 33.8118 37.798 34.9227 36.5154 35.6099C35.2328 36.2971 33.7515 36.518 32.3242 36.2348C30.8969 35.9517 29.612 35.1821 28.6889 34.0573C27.7657 32.9325 27.2614 31.5223 27.262 30.0672ZM20.9735 54.0784L25.1659 55.5457V59.4137H20.9735V54.0784ZM29.3582 57.3175V59.4137H27.262V56.2794L29.3701 57.0172C29.3631 57.1165 29.3582 57.2165 29.3582 57.3175ZM31.4544 59.4137V57.3175C31.4544 56.7616 31.6752 56.2284 32.0683 55.8353C32.4615 55.4422 32.9946 55.2213 33.5506 55.2213C34.1065 55.2213 34.6397 55.4422 35.0328 55.8353C35.4259 56.2284 35.6468 56.7616 35.6468 57.3175V59.4137H31.4544ZM46.1276 47.0986V59.4137H41.9353V47.8847C41.9353 47.6067 41.8249 47.3402 41.6283 47.1436C41.4318 46.947 41.1652 46.8366 40.8872 46.8366C40.6092 46.8366 40.3426 46.947 40.1461 47.1436C39.9495 47.3402 39.8391 47.6067 39.8391 47.8847V59.4137H37.7429V57.3175C37.7433 56.4139 37.4516 55.5344 36.9114 54.8101C36.3711 54.0858 35.6112 53.5555 34.7449 53.2984C33.8787 53.0412 32.9525 53.0709 32.1045 53.3831C31.2566 53.6952 30.5322 54.2731 30.0395 55.0306L27.262 54.0585V47.8847C27.262 47.6067 27.1516 47.3402 26.9551 47.1436C26.7585 46.947 26.4919 46.8366 26.2139 46.8366C25.936 46.8366 25.6694 46.947 25.4728 47.1436C25.2763 47.3402 25.1659 47.6067 25.1659 47.8847V53.3248L20.9735 51.8575V47.0986C20.9761 44.8062 21.8879 42.6083 23.5089 40.9873C25.1299 39.3663 27.3278 38.4545 29.6202 38.4519H37.4809C39.5713 38.4507 41.5908 39.2102 43.1623 40.5887L37.6318 44.0897C37.0625 43.6427 36.3601 43.399 35.6363 43.3973C34.9125 43.3956 34.209 43.636 33.6376 44.0803C33.2794 43.8017 32.8667 43.6014 32.4262 43.4924C31.9858 43.3833 31.5273 43.3679 31.0805 43.4472C30.6337 43.5264 30.2086 43.6986 29.8325 43.9525C29.4564 44.2064 29.1378 44.5365 28.8973 44.9212C28.5325 45.4978 28.3993 46.1909 28.5243 46.8616C28.6494 47.5323 29.0235 48.1308 29.5715 48.5372L33.0087 51.1149C33.1901 51.251 33.4108 51.3245 33.6376 51.3245C33.8643 51.3245 34.085 51.251 34.2664 51.1149L37.7036 48.5366C38.1113 48.2343 38.4255 47.8232 38.6102 47.3505C38.795 46.8778 38.8428 46.3626 38.7482 45.864L44.5808 42.1717C45.5892 43.6167 46.1292 45.3366 46.1276 47.0986ZM36.4459 46.8596L33.6376 48.9658L30.8292 46.8596C30.7038 46.7666 30.6183 46.6296 30.5896 46.4762C30.561 46.3227 30.5915 46.1641 30.6749 46.0322C30.7629 45.8914 30.8804 45.7715 31.0193 45.6806C31.1582 45.5897 31.3152 45.53 31.4795 45.5058C31.6437 45.4815 31.8112 45.4932 31.9705 45.5401C32.1297 45.5869 32.2769 45.6678 32.4019 45.7771L32.9474 46.2545C33.1385 46.4217 33.3837 46.5139 33.6376 46.5139C33.8914 46.5139 34.1367 46.4217 34.3277 46.2545L34.8734 45.7771C34.9983 45.6678 35.1455 45.5869 35.3047 45.5401C35.464 45.4932 35.6315 45.4815 35.7957 45.5058C35.9599 45.53 36.1169 45.5897 36.2558 45.6806C36.3947 45.7715 36.5122 45.8914 36.6001 46.0322C36.6836 46.1641 36.7141 46.3227 36.6855 46.4762C36.6569 46.6296 36.5713 46.7666 36.4459 46.8596ZM46.1276 16.442H60.8009V22.7306H56.6085C56.4709 22.7306 56.3346 22.7577 56.2074 22.8103C56.0803 22.863 55.9647 22.9402 55.8674 23.0375L54.7994 24.1055L52.3055 19.1175C52.2184 18.9435 52.0846 18.7971 51.919 18.6948C51.7535 18.5925 51.5627 18.5383 51.3681 18.5383C51.1735 18.5383 50.9827 18.5925 50.8171 18.6948C50.6516 18.7971 50.5178 18.9435 50.4307 19.1175L48.6242 22.7306H46.1276V16.442ZM46.1276 29.0191V24.8268H49.2719C49.4665 24.8267 49.6573 24.7725 49.8229 24.6702C49.9884 24.5679 50.1222 24.4215 50.2093 24.2474L51.3681 21.93L53.575 26.3436C53.6493 26.4921 53.7578 26.6209 53.8916 26.7192C54.0254 26.8176 54.1806 26.8827 54.3445 26.9093C54.4 26.9184 54.4561 26.9229 54.5124 26.9229C54.65 26.9229 54.7863 26.8958 54.9134 26.8432C55.0406 26.7905 55.1562 26.7133 55.2535 26.616L57.0426 24.8268H60.8009V29.0191H46.1276Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M14.685 13.2968C15.7969 13.2968 16.8632 12.8551 17.6495 12.0689C18.4357 11.2827 18.8774 10.2163 18.8774 9.10447C18.8774 7.99258 18.4357 6.92624 17.6495 6.14002C16.8632 5.3538 15.7969 4.91211 14.685 4.91211H12.5888C11.477 4.91211 10.4106 5.3538 9.6244 6.14002C8.83818 6.92624 8.39648 7.99258 8.39648 9.10447C8.39648 10.2163 8.83818 11.2827 9.6244 12.0689C10.4106 12.8551 11.477 13.2968 12.5888 13.2968H14.685ZM16.7812 9.10447C16.7805 9.66021 16.5595 10.193 16.1665 10.586C15.7735 10.9789 15.2408 11.2 14.685 11.2006V7.00829C15.2408 7.00895 15.7735 7.23001 16.1665 7.62297C16.5595 8.01594 16.7805 8.54873 16.7812 9.10447ZM10.4927 9.10447C10.4933 8.54873 10.7144 8.01594 11.1073 7.62297C11.5003 7.23001 12.0331 7.00895 12.5888 7.00829V11.2006C12.0331 11.2 11.5003 10.9789 11.1073 10.586C10.7144 10.193 10.4933 9.66021 10.4927 9.10447Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M57.6569 42.6436H53.4646C53.1866 42.6436 52.92 42.754 52.7235 42.9505C52.5269 43.1471 52.4165 43.4137 52.4165 43.6916V44.7397H51.3684C51.0904 44.7397 50.8238 44.8502 50.6273 45.0467C50.4307 45.2433 50.3203 45.5099 50.3203 45.7878V49.9802C50.3203 50.2582 50.4307 50.5247 50.6273 50.7213C50.8238 50.9178 51.0904 51.0283 51.3684 51.0283H52.4165V52.0764C52.4165 52.3543 52.5269 52.6209 52.7235 52.8175C52.92 53.014 53.1866 53.1244 53.4646 53.1244H57.6569C57.9349 53.1244 58.2015 53.014 58.398 52.8175C58.5946 52.6209 58.705 52.3543 58.705 52.0764V51.0283H59.7531C60.0311 51.0283 60.2977 50.9178 60.4942 50.7213C60.6908 50.5247 60.8012 50.2582 60.8012 49.9802V45.7878C60.8012 45.5099 60.6908 45.2433 60.4942 45.0467C60.2977 44.8502 60.0311 44.7397 59.7531 44.7397H58.705V43.6916C58.705 43.4137 58.5946 43.1471 58.398 42.9505C58.2015 42.754 57.9349 42.6436 57.6569 42.6436ZM58.705 48.9321H57.6569C57.379 48.9321 57.1124 49.0425 56.9158 49.2391C56.7193 49.4356 56.6088 49.7022 56.6088 49.9802V51.0283H54.5127V49.9802C54.5127 49.7022 54.4022 49.4356 54.2057 49.2391C54.0091 49.0425 53.7426 48.9321 53.4646 48.9321H52.4165V46.8359H53.4646C53.7426 46.8359 54.0091 46.7255 54.2057 46.5289C54.4022 46.3324 54.5127 46.0658 54.5127 45.7878V44.7397H56.6088V45.7878C56.6088 46.0658 56.7193 46.3324 56.9158 46.5289C57.1124 46.7255 57.379 46.8359 57.6569 46.8359H58.705V48.9321Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M54.5134 55.2217H52.4172C52.1393 55.2217 51.8727 55.3321 51.6761 55.5287C51.4796 55.7252 51.3691 55.9918 51.3691 56.2698C51.3691 56.5477 51.4796 56.8143 51.6761 57.0109C51.8727 57.2074 52.1393 57.3179 52.4172 57.3179H54.5134C54.7914 57.3179 55.058 57.2074 55.2545 57.0109C55.4511 56.8143 55.5615 56.5477 55.5615 56.2698C55.5615 55.9918 55.4511 55.7252 55.2545 55.5287C55.058 55.3321 54.7914 55.2217 54.5134 55.2217Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M61.8486 55.2217H58.7043C58.4264 55.2217 58.1598 55.3321 57.9632 55.5287C57.7667 55.7252 57.6562 55.9918 57.6562 56.2698C57.6562 56.5477 57.7667 56.8143 57.9632 57.0109C58.1598 57.2074 58.4264 57.3179 58.7043 57.3179H61.8486C62.1266 57.3179 62.3932 57.2074 62.5897 57.0109C62.7863 56.8143 62.8967 56.5477 62.8967 56.2698C62.8967 55.9918 62.7863 55.7252 62.5897 55.5287C62.3932 55.3321 62.1266 55.2217 61.8486 55.2217Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M51.3691 60.4612C51.3691 60.7391 51.4796 61.0057 51.6761 61.2023C51.8727 61.3988 52.1393 61.5093 52.4172 61.5093H58.7058C58.9837 61.5093 59.2503 61.3988 59.4469 61.2023C59.6434 61.0057 59.7539 60.7391 59.7539 60.4612C59.7539 60.1832 59.6434 59.9166 59.4469 59.7201C59.2503 59.5235 58.9837 59.4131 58.7058 59.4131H52.4172C52.1393 59.4131 51.8727 59.5235 51.6761 59.7201C51.4796 59.9166 51.3691 60.1832 51.3691 60.4612Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Medical Check Up</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 62 61"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M54.4152 19.0752H23.2448C21.7219 19.0752 19.1797 19.6524 19.1797 23.5702V29.5636H58.4804V23.5702C58.4804 19.6647 55.9381 19.0752 54.4152 19.0752Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M10.7077 30.8653H4.77577V9.91309H0.845703V50.5279H4.77577V40.0395H57.1808V50.5156H61.1108V30.8653H10.7077Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M11.3199 29.8087C14.3518 29.8087 16.8097 27.3509 16.8097 24.3189C16.8097 21.287 14.3518 18.8291 11.3199 18.8291C8.28795 18.8291 5.83008 21.287 5.83008 24.3189C5.83008 27.3509 8.28795 29.8087 11.3199 29.8087Z"
                                                fill="#129E4A" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="60.2651" height="60.2651" fill="white"
                                                    transform="translate(0.845703 0.0878906)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Rawat Inap</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 57 57"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M35.0269 3.13867H28.4986V7.2188H32.9868V14.903C32.9868 21.6523 27.4955 27.1435 20.7463 27.1435C13.997 27.1435 8.50591 21.6524 8.50591 14.9031V7.2188H12.8581V3.13867H6.46584C5.33904 3.13867 4.42578 4.05193 4.42578 5.17873V14.9031C4.42578 23.9026 11.7469 31.2237 20.7464 31.2237C29.7459 31.2237 37.067 23.9026 37.067 14.9031V5.17873C37.067 4.05193 36.1537 3.13867 35.0269 3.13867Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M42.9849 32.9221V42.5785C42.9849 48.2031 38.409 52.7789 32.7844 52.7789C27.1599 52.7789 22.584 48.2031 22.584 42.5785V29.25H18.5039V42.5785C18.5039 50.4525 24.9097 56.8591 32.7844 56.8591C40.6584 56.8591 47.065 50.4525 47.065 42.5785V32.9221H42.9849Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M45.0255 19.7305C40.8624 19.7305 37.4766 23.1163 37.4766 27.2788C37.4766 31.4406 40.8624 34.8271 45.0249 34.8271C49.1873 34.8271 52.5732 31.4406 52.5739 27.2788C52.5737 23.1163 49.1873 19.7305 45.0255 19.7305ZM45.0249 30.747C43.112 30.747 41.556 29.1911 41.556 27.2789C41.556 25.3667 43.1119 23.8108 45.0249 23.8108C46.9371 23.8108 48.493 25.3667 48.493 27.2789C48.493 29.1911 46.9371 30.747 45.0249 30.747Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M12.7901 0.961914C11.6633 0.961914 10.75 1.87517 10.75 3.00198V7.35417C10.75 8.48097 11.6633 9.39423 12.7901 9.39423C13.9169 9.39423 14.8301 8.48097 14.8301 7.35417V3.00198C14.8301 1.87517 13.9169 0.961914 12.7901 0.961914Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M28.5674 0.961914C27.4406 0.961914 26.5273 1.87517 26.5273 3.00198V7.35417C26.5273 8.48097 27.4406 9.39423 28.5674 9.39423C29.6942 9.39423 30.6074 8.48097 30.6074 7.35417V3.00198C30.6074 1.87517 29.6942 0.961914 28.5674 0.961914Z"
                                                fill="#129E4A" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="55.8981" height="55.8981" fill="white"
                                                    transform="translate(0.550781 0.961914)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Rawat Jalan</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 68 52"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M41.6949 36.5362H46.2861C48.2913 36.5362 49.9227 34.9475 49.9227 32.9948V29.828H53.1491C55.1543 29.828 56.7857 28.2393 56.7857 26.2866V21.7975C56.7857 19.8448 55.1543 18.2561 53.1491 18.2561H49.9227V15.0893C49.9227 13.1366 48.2913 11.5479 46.2861 11.5479H41.6949C39.6897 11.5479 38.0583 13.1366 38.0583 15.0893V18.2561H34.8319C32.8267 18.2561 31.1953 19.8448 31.1953 21.7975V26.2866C31.1953 28.2393 32.8267 29.828 34.8319 29.828H38.0583V32.9948C38.0583 34.9475 39.6897 36.5362 41.6949 36.5362ZM34.8319 27.2844C34.2753 27.2844 33.8224 26.8367 33.8224 26.2866V21.7975C33.8224 21.2472 34.2751 20.7997 34.8319 20.7997H39.372C40.0973 20.7997 40.6855 20.2303 40.6855 19.5279V15.0893C40.6855 14.5391 41.1383 14.0914 41.6951 14.0914H46.2862C46.8429 14.0914 47.2958 14.539 47.2958 15.0893V19.5279C47.2958 20.2303 47.884 20.7997 48.6093 20.7997H53.1492C53.7059 20.7997 54.1588 21.2473 54.1588 21.7975V26.2866C54.1588 26.8369 53.7061 27.2844 53.1492 27.2844H48.6093C47.884 27.2844 47.2958 27.8538 47.2958 28.5562V32.9948C47.2958 33.545 46.843 33.9926 46.2862 33.9926H41.6951C41.1384 33.9926 40.6855 33.545 40.6855 32.9948V28.5562C40.6855 27.8538 40.0973 27.2844 39.372 27.2844H34.8319Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M61.089 0.961914H26.8953C23.3482 0.961914 20.4624 3.75834 20.4624 7.19575V7.28948H18.9957C16.3315 7.28948 14.164 9.3882 14.164 11.9678V13.7698C12.0727 14.0448 10.2945 15.4436 9.60893 17.423L6.0414 27.725H4.14048C3.66038 27.725 3.21839 27.9787 2.98813 28.3866L0.4307 32.9142C0.324962 33.1012 0.269531 33.3111 0.269531 33.5244V45.8523C0.269531 46.5547 0.857594 47.1241 1.58305 47.1241H5.63802C6.24145 49.8184 8.72112 51.8427 11.6796 51.8427C14.638 51.8427 17.1175 49.8184 17.721 47.1241H46.7784C47.3818 49.8184 49.8615 51.8427 52.8199 51.8427C55.7784 51.8427 58.2579 49.8184 58.8614 47.1241H61.0891C64.6361 47.1241 67.5219 44.3276 67.5219 40.8902V31.3707C67.5219 30.6683 66.9337 30.0989 66.2084 30.0989C65.4831 30.0989 64.8949 30.6683 64.8949 31.3707V40.8902C64.8949 42.925 63.1877 44.5805 61.0891 44.5805H58.8614C58.2579 41.8862 55.7784 39.8619 52.8199 39.8619C49.8615 39.8619 47.3818 41.8862 46.7784 44.5805H23.0895V7.19575C23.0895 5.16088 24.7966 3.50551 26.8953 3.50551H61.089C63.1876 3.50551 64.8947 5.16088 64.8947 7.19575V19.8721C64.8947 20.5745 65.4829 21.1439 66.2083 21.1439C66.9336 21.1439 67.5218 20.5745 67.5218 19.8721V7.19575C67.5218 3.75847 64.636 0.961914 61.089 0.961914ZM52.8198 42.4054C54.7799 42.4054 56.3743 43.9517 56.3743 45.8523C56.3743 47.7528 54.7797 49.2991 52.8198 49.2991C50.8598 49.2991 49.265 47.7528 49.265 45.8523C49.2652 43.9517 50.8598 42.4054 52.8198 42.4054ZM16.791 11.9678C16.791 10.7907 17.7801 9.83308 18.9957 9.83308H20.4624V13.7202H16.791V11.9678ZM12.0998 18.2316C12.5073 17.0546 13.6414 16.2638 14.9217 16.2638H20.4624V27.725H8.81228L12.0998 18.2316ZM2.89657 38.6964H5.34195C6.06741 38.6964 6.65547 38.127 6.65547 37.4246C6.65547 36.7222 6.06741 36.1528 5.34195 36.1528H2.89657V33.8494L4.91926 30.2686H20.4624V44.5805H17.721C17.1175 41.8862 14.6379 39.8619 11.6796 39.8619C8.72112 39.8619 6.24145 41.8862 5.63802 44.5805H2.89657V38.6964ZM11.6796 49.2991C9.71952 49.2991 8.12491 47.7528 8.12491 45.8523C8.12491 43.9517 9.71952 42.4054 11.6796 42.4054C13.6396 42.4054 15.2342 43.9517 15.2342 45.8523C15.2342 47.7528 13.6396 49.2991 11.6796 49.2991Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M67.2992 24.9385C66.9915 24.4826 66.3855 24.2733 65.8475 24.4228C65.3258 24.5678 64.9456 25.0173 64.8992 25.5407C64.8521 26.069 65.168 26.5854 65.6662 26.803C66.1579 27.0178 66.7542 26.9151 67.1363 26.5448C67.5739 26.1205 67.6424 25.4366 67.2992 24.9385Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">IGD </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 53 61"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M51.8195 38.1267C49.4091 33.6203 44.0797 32.078 39.9042 34.6804L35.4752 37.4406V27.2196C35.4752 25.956 35.0881 24.7021 34.3849 23.6887L28.9332 15.8423V12.5011C30.2022 12.0152 31.1139 10.7071 31.1139 9.17255V3.75846C31.1137 1.8115 29.6464 0.227539 27.8427 0.227539H8.21647C6.41284 0.227539 4.94537 1.8115 4.94537 3.75846V9.17266C4.94537 10.707 5.85706 12.0154 7.12607 12.5012V15.8424L1.67395 23.6892C0.971077 24.7022 0.583984 25.956 0.583984 27.2196V50.0144C0.583984 53.2594 3.02965 55.8993 6.03567 55.8993H23.5586C26.0034 60.323 31.2751 61.8035 35.4074 59.2279L48.627 50.9888C52.7656 48.409 54.2419 42.6578 51.8195 38.1267ZM7.12607 3.75846C7.12607 3.10943 7.61522 2.58141 8.21636 2.58141H27.8426C28.4439 2.58141 28.933 3.10943 28.933 3.75846V9.17266C28.933 9.82169 28.4439 10.3496 27.8426 10.3496H8.21647C7.61522 10.3496 7.12618 9.82157 7.12618 9.17266V3.75846H7.12607ZM3.41903 25.1009L9.08868 16.9409C9.23022 16.7372 9.30676 16.4893 9.30676 16.2346V12.7037H26.7523V15.0577H16.9392C16.3371 15.0577 15.8488 15.5848 15.8488 16.2347C15.8488 16.8847 16.3371 17.4118 16.9392 17.4118H27.2975L32.6397 25.1005C32.9889 25.6037 33.2058 26.2058 33.2713 26.8277H2.7879C2.85333 26.2057 3.07021 25.6036 3.41903 25.1009ZM6.03577 53.5453C4.23214 53.5453 2.76479 51.9613 2.76479 50.0144V48.8257H22.5747C22.2289 50.3517 22.2312 51.9817 22.6271 53.5454H6.03577V53.5453ZM23.4299 46.4833H2.76468V29.1815H33.2944V38.7995L26.6845 42.9195C25.3063 43.7788 24.1924 45.0021 23.4299 46.4833ZM34.3172 57.1892C31.1881 59.1397 27.1896 57.9862 25.3815 54.606C23.5647 51.1933 24.6657 46.8966 27.7751 44.9579L33.6935 41.2692L40.2356 53.5006L34.3172 57.1892ZM47.5366 48.9503L42.1241 52.3236L35.582 40.0921L40.9945 36.7191C44.1257 34.7678 48.1228 35.9233 49.9309 39.3035C51.7469 42.7008 50.6426 47.0142 47.5366 48.9503Z"
                                            fill="#129E4A" />
                                    </svg>

                                    <h5 class="card-title text-success text-center fw-bolder">Farmasi</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 66 63"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M50.1929 9.86031C50.2214 9.86238 50.2499 9.86446 50.2789 9.86446C50.3282 9.86446 50.3774 9.86031 50.4256 9.85357C51.7154 9.88 52.7477 10.932 52.7492 12.2218C52.7492 12.8079 53.2244 13.2831 53.8105 13.2831C54.3966 13.2831 54.8718 12.8079 54.8718 12.2218C54.8692 10.1122 53.4006 8.28703 51.3402 7.83308V6.81324C51.3402 6.22715 50.865 5.75195 50.2789 5.75195C49.6928 5.75195 49.2177 6.22715 49.2177 6.81324V7.88127C47.0391 8.46374 45.6296 10.5713 45.9234 12.8074C46.2172 15.0434 48.1232 16.7152 50.3784 16.7152C51.688 16.7152 52.7492 17.777 52.7492 19.0865C52.7492 20.3955 51.688 21.4573 50.3784 21.4573C49.0689 21.4573 48.0076 20.3955 48.0076 19.0865C48.0076 18.5004 47.5324 18.0252 46.9463 18.0252C46.3603 18.0252 45.8851 18.5004 45.8851 19.0865C45.8876 21.1199 47.2536 22.899 49.2177 23.427V24.5899C49.2177 25.176 49.6928 25.6512 50.2789 25.6512C50.865 25.6512 51.3402 25.176 51.3402 24.5899V23.4757C53.5815 22.985 55.0931 20.8842 54.8459 18.603C54.5992 16.3219 52.6731 14.5931 50.3784 14.5936C49.1052 14.5941 48.0589 13.5888 48.0087 12.3166C47.9589 11.0444 48.9233 9.95981 50.1929 9.86083V9.86031Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M50.4388 0.563477C43.9099 0.563477 38.3381 4.82367 36.2508 10.5281H9.90971C9.3262 10.5281 8.85256 11.0541 8.84842 11.6371L8.5976 48.8673H1.08928C0.503181 48.8673 0 49.2917 0 49.8788V54.6033C0.0134734 59.0511 3.51657 62.705 7.95969 62.9061V62.9294H40.7271V62.8983C40.9924 62.9081 41.1017 62.9294 41.2696 62.9294H41.2924C45.891 62.9221 49.6154 59.1921 49.6154 54.5935V30.7061C49.8807 30.7206 50.1616 30.7284 50.4362 30.7284C58.7447 30.7284 65.5057 23.9544 65.5057 15.6454C65.5057 7.33698 58.7478 0.563477 50.4388 0.563477ZM8.36337 60.8068H8.35664C4.9235 60.8021 2.13813 58.0261 2.12258 54.5924V50.9899H32.9V54.5774C32.9016 56.7922 33.7862 58.9153 35.3574 60.4767C35.4688 60.5881 35.6072 60.6741 35.7238 60.8068H8.36337ZM47.4928 54.5924C47.4933 58.0199 44.7183 60.8001 41.2914 60.8068H41.2712C37.8303 60.8006 35.0397 58.0188 35.0226 54.5785V49.8788C35.0314 49.6073 34.9278 49.3445 34.7355 49.1528C34.5433 48.9611 34.2806 48.8579 34.0095 48.8673H10.7202L10.9637 12.6507H35.6616C35.4735 13.6223 35.376 14.609 35.3709 15.5983C35.3688 17.6903 35.8051 19.759 36.6519 21.6717H26.6276C26.041 21.6717 25.5664 22.1469 25.5664 22.733C25.5664 23.3191 26.041 23.7943 26.6276 23.7943H37.8033C39.9928 27.2372 43.4927 29.6376 47.4928 30.4408V54.5924ZM50.4388 28.6063C43.2896 28.6063 37.4934 22.8107 37.494 15.661C37.494 8.51125 43.2896 2.7156 50.4393 2.7156C57.5885 2.7156 63.3842 8.51176 63.3842 15.661C63.3764 22.8071 57.5854 28.5986 50.4388 28.6063Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M19.8148 28.7344C17.9415 28.7344 16.418 30.2097 16.418 32.0234C16.418 33.8372 17.9415 35.3125 19.8148 35.3125C21.6882 35.3125 23.2122 33.8372 23.2122 32.0234C23.2122 30.2097 21.6882 28.7344 19.8148 28.7344ZM19.8148 33.1899C19.1116 33.1899 18.5406 32.6665 18.5406 32.0234C18.5406 31.3798 19.1121 30.857 19.8148 30.857C20.5175 30.857 21.0896 31.3804 21.0896 32.0234C21.0896 32.6665 20.5175 33.1899 19.8148 33.1899Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M25.5664 32.0183C25.5664 32.6044 26.0411 33.0796 26.6277 33.0796H40.7769C41.363 33.0796 41.8382 32.6044 41.8382 32.0183C41.8382 31.4322 41.363 30.957 40.7769 30.957H26.6277C26.0411 30.957 25.5664 31.4322 25.5664 32.0183Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M19.8148 19.5088C17.9415 19.5088 16.418 20.9846 16.418 22.7984C16.418 24.6121 17.9415 26.0875 19.8148 26.0875C21.6882 26.0875 23.2122 24.6121 23.2122 22.7984C23.2122 20.9846 21.6882 19.5088 19.8148 19.5088ZM19.8148 23.9649C19.1116 23.9649 18.5406 23.4415 18.5406 22.7984C18.5406 22.1553 19.1121 21.6314 19.8148 21.6314C20.5175 21.6314 21.0896 22.1548 21.0896 22.7984C21.0896 23.4415 20.5175 23.9654 19.8148 23.9654V23.9649Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M19.8148 37.959C17.9415 37.959 16.418 39.4343 16.418 41.2481C16.418 43.0618 17.9415 44.5371 19.8148 44.5371C21.6882 44.5371 23.2122 43.0618 23.2122 41.2481C23.2122 39.4343 21.6882 37.959 19.8148 37.959ZM19.8148 42.4145C19.1116 42.4145 18.5406 41.8917 18.5406 41.2481C18.5406 40.605 19.1121 40.0816 19.8148 40.0816C20.5175 40.0816 21.0896 40.605 21.0896 41.2481C21.0896 41.8912 20.5175 42.4145 19.8148 42.4145Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M40.7769 40.2432H26.6277C26.0411 40.2432 25.5664 40.7184 25.5664 41.3045C25.5664 41.8905 26.0411 42.3657 26.6277 42.3657H40.7769C41.363 42.3657 41.8382 41.8905 41.8382 41.3045C41.8382 40.7184 41.363 40.2432 40.7769 40.2432Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Akuntansi</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 69 52"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M65.6344 51.8839H57.1839C56.6387 51.8839 56.1967 51.442 56.1967 50.8967V25.1734C56.1967 22.4382 58.4219 20.2134 61.1568 20.2134H61.6612C64.3965 20.2134 66.6213 22.4385 66.6213 25.1734V50.8967C66.6216 51.442 66.1797 51.8839 65.6344 51.8839ZM58.1711 49.9095H64.6472V25.1734C64.6472 23.5271 63.3079 22.1878 61.6616 22.1878H61.1571C59.5108 22.1878 58.1715 23.5271 58.1715 25.1734V49.9095H58.1711ZM47.4037 51.8839H38.9532C38.4079 51.8839 37.966 51.442 37.966 50.8967V20.6241C37.966 17.8888 40.1911 15.664 42.926 15.664H43.4305C46.1657 15.664 48.3905 17.8892 48.3905 20.6241V50.8967C48.3909 51.442 47.9486 51.8839 47.4037 51.8839ZM39.9404 49.9095H46.4165V20.6241C46.4165 18.9777 45.0772 17.6384 43.4308 17.6384H42.9264C41.28 17.6384 39.9407 18.9777 39.9407 20.6241V49.9095H39.9404ZM29.1726 51.8839H20.7221C20.1769 51.8839 19.7349 51.442 19.7349 50.8967V27.9731C19.7349 25.2379 21.9601 23.0131 24.695 23.0131H25.1994C27.9347 23.0131 30.1595 25.2383 30.1595 27.9731V50.8967C30.1598 51.442 29.7179 51.8839 29.1726 51.8839ZM21.7097 49.9095H28.1857V27.9731C28.1857 26.3268 26.8464 24.9875 25.2001 24.9875H24.6956C23.0493 24.9875 21.71 26.3268 21.71 27.9731V49.9095H21.7097ZM10.9419 51.8839H2.49138C1.94611 51.8839 1.50417 51.442 1.50417 50.8967V25.1734C1.50417 22.4382 3.72934 20.2134 6.46423 20.2134H6.96869C9.70391 20.2134 11.9287 22.4385 11.9287 25.1734V50.8967C11.9291 51.442 11.4871 51.8839 10.9419 51.8839ZM3.47859 49.9095H9.95466V25.1734C9.95466 23.5271 8.61535 22.1878 6.96902 22.1878H6.46456C4.81823 22.1878 3.47891 23.5271 3.47891 25.1734V49.9095H3.47859ZM24.9477 21.5435C21.5162 21.5435 18.7247 18.752 18.7247 15.3204C18.7247 11.8889 21.5162 9.09743 24.9477 9.09743C28.3792 9.09743 31.1707 11.8889 31.1707 15.3204C31.1707 18.752 28.3789 21.5435 24.9477 21.5435ZM24.9477 11.0718C22.6051 11.0718 20.6991 12.9778 20.6991 15.3204C20.6991 17.6631 22.6051 19.5691 24.9477 19.5691C27.2903 19.5691 29.1963 17.6631 29.1963 15.3204C29.1963 12.9778 27.2903 11.0718 24.9477 11.0718ZM61.4092 18.2251C57.7055 18.2251 54.6925 15.2119 54.6925 11.5082C54.6925 7.80452 57.7055 4.79156 61.4092 4.79156C65.1128 4.79156 68.1258 7.80452 68.1258 11.5082C68.1258 15.2119 65.1128 18.2251 61.4092 18.2251ZM61.4092 6.76598C58.7944 6.76598 56.667 8.89341 56.667 11.5082C56.667 14.1233 58.7944 16.2507 61.4092 16.2507C64.024 16.2507 66.1514 14.1233 66.1514 11.5082C66.1514 8.89308 64.0243 6.76598 61.4092 6.76598ZM6.71662 18.2251C3.01295 18.2251 0 15.2119 0 11.5082C0 7.80452 3.01295 4.79156 6.71662 4.79156C10.4203 4.79156 13.4332 7.80452 13.4332 11.5082C13.4332 15.2119 10.4203 18.2251 6.71662 18.2251ZM6.71662 6.76598C4.10184 6.76598 1.97441 8.89308 1.97441 11.5082C1.97441 14.1233 4.10184 16.2507 6.71662 16.2507C9.3314 16.2507 11.4588 14.1233 11.4588 11.5082C11.4588 8.89308 9.3314 6.76598 6.71662 6.76598ZM43.1784 13.6754C39.4748 13.6754 36.4618 10.6625 36.4618 6.95881C36.4618 3.25514 39.4748 0.242188 43.1784 0.242188C46.8821 0.242188 49.8951 3.25514 49.8951 6.95881C49.8951 10.6625 46.8821 13.6754 43.1784 13.6754ZM43.1784 2.21627C40.5637 2.21627 38.4362 4.3437 38.4362 6.95848C38.4362 9.57326 40.5637 11.7007 43.1784 11.7007C45.7932 11.7007 47.9206 9.57326 47.9206 6.95848C47.9206 4.3437 45.7932 2.21627 43.1784 2.21627Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Antrian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 58 58"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M48.8302 49.5132L36.8251 20.2512C36.1594 18.6278 35.8216 16.9152 35.8216 15.1606V7.42575C35.8216 6.59284 36.146 5.80974 36.735 5.22068C37.4532 4.50254 37.849 3.54749 37.849 2.53179V1.43597C37.849 0.823518 37.3522 0.327148 36.7402 0.327148H21.2588C20.6463 0.327148 20.15 0.823518 20.15 1.43597V2.53179C20.15 3.54749 20.5454 4.50254 21.2635 5.22068C21.8526 5.80974 22.177 6.59284 22.177 7.42618V15.1606C22.177 16.9152 21.8396 18.6278 21.1735 20.2512L17.8747 28.2919C17.8734 28.2949 17.8721 28.298 17.8708 28.301L9.16834 49.5132C8.47143 51.2124 8.6659 53.1376 9.68896 54.6627C10.712 56.1882 12.419 57.0986 14.2555 57.0986H43.7431C45.5796 57.0986 47.287 56.1882 48.31 54.6627C49.3327 53.1372 49.5271 51.2124 48.8302 49.5132ZM23.2252 21.0928C24.0014 19.2013 24.3947 17.2054 24.3947 15.1606V7.42575C24.3947 6.00075 23.8398 4.66064 22.8319 3.65274C22.5357 3.35647 22.3711 2.96319 22.3676 2.54479H35.6314C35.6279 2.96319 35.4634 3.35604 35.1667 3.65274C34.1592 4.66064 33.6039 6.00031 33.6039 7.42575V15.1602C33.6039 17.205 33.9976 19.2009 34.7734 21.0924L37.4506 27.6179H20.548L23.2252 21.0928ZM46.4679 53.4274C45.8486 54.3513 44.8554 54.881 43.7431 54.881H14.2555C13.1436 54.881 12.1505 54.3513 11.5306 53.4274C11.0633 52.7305 10.8848 51.9223 11.0061 51.1253H12.8331C13.4451 51.1253 13.9419 50.6285 13.9419 50.0165C13.9419 49.4041 13.4451 48.9077 12.8331 48.9077H11.8143L13.0877 45.803H14.958C15.5705 45.803 16.0668 45.3062 16.0668 44.6942C16.0668 44.0817 15.5705 43.5854 14.958 43.5854H13.9978L15.2712 40.4807H17.1943C17.8067 40.4807 18.3031 39.9839 18.3031 39.3718C18.3031 38.7594 17.8067 38.263 17.1943 38.263H16.1812L17.455 35.1583H19.4301C20.0426 35.1583 20.5389 34.6615 20.5389 34.0495C20.5389 33.4371 20.0426 32.9407 19.4301 32.9407H18.3646L19.6384 29.836H38.3601L46.7785 50.3552C47.2004 51.3839 47.0873 52.504 46.4679 53.4274Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M43.3541 49.5828C43.122 49.0158 42.4749 48.7446 41.9079 48.9764C41.3414 49.2085 41.0698 49.8556 41.3015 50.4226L41.3076 50.4365C41.4834 50.8657 41.8971 51.1256 42.3341 51.1256C42.474 51.1256 42.6161 51.0992 42.7538 51.0428C43.3203 50.8107 43.5919 50.1632 43.3598 49.5966L43.3541 49.5828Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M41.7875 45.7617L37.8165 36.0829C37.5844 35.5164 36.9368 35.2453 36.3699 35.4778C35.8033 35.71 35.5326 36.358 35.7648 36.9245L39.7357 46.6033C39.9116 47.0325 40.3252 47.2915 40.7622 47.2915C40.9022 47.2915 41.0447 47.2651 41.1824 47.2084C41.7489 46.9762 42.0201 46.3282 41.7875 45.7617Z"
                                                fill="#129E4A" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="56.7715" height="56.7715" fill="white"
                                                    transform="translate(0.550781 0.327148)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Penunjang Laboratorium</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 75 61"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M66.282 5.83734H61.0047C60.411 5.83734 59.93 6.31838 59.93 6.91204C59.93 7.5057 60.411 7.98674 61.0047 7.98674H66.282C69.5006 7.98674 72.1192 10.6053 72.1192 13.8239V45.4966C72.1192 48.4603 69.8937 50.9594 66.9308 51.2981C58.8714 52.2193 50.7043 52.7663 42.6385 52.9256V49.444H44.415C45.0087 49.444 45.4897 48.963 45.4897 48.3693V45.7474C51.7946 42.7157 55.8302 36.3366 55.8302 29.3005C55.8302 19.2403 47.6456 11.0556 37.5854 11.0556C27.5252 11.0556 19.3406 19.2403 19.3406 29.3005C19.3406 31.1919 19.6302 33.059 20.2014 34.8499C20.3819 35.4153 20.9865 35.7274 21.5519 35.5472C22.1173 35.3668 22.4296 34.7621 22.2492 34.1966C21.7453 32.6174 21.49 30.97 21.49 29.3005C21.49 20.4253 28.7104 13.205 37.5854 13.205C46.4604 13.205 53.6808 20.4254 53.6808 29.3005C53.6808 35.1538 50.515 40.4919 45.4897 43.3244V38.5569H46.2258C47.5497 38.5569 48.627 37.4798 48.627 36.1557V33.1608C48.627 31.8369 47.5497 30.7596 46.2258 30.7596H42.6385V29.3436C42.6385 28.1455 41.6638 27.1708 40.4657 27.1708H34.7053C33.5073 27.1708 32.5326 28.1455 32.5326 29.3436V30.7596H28.9452C27.6212 30.7596 26.5439 31.8369 26.5439 33.1608V36.1557C26.5439 37.4798 27.6212 38.5569 28.9452 38.5569H29.6813V43.3241C27.4248 42.0523 25.5086 40.2556 24.081 38.0594C23.7575 37.5617 23.0917 37.4207 22.5942 37.7441C22.0965 38.0677 21.9554 38.7333 22.279 39.231C24.1147 42.055 26.6639 44.2961 29.6813 45.7471V48.3693C29.6813 48.963 30.1624 49.444 30.756 49.444H32.5326V52.9258C24.4656 52.7664 16.2982 52.2195 8.24024 51.2982C5.26992 50.9586 3.05174 48.4533 3.05174 45.4966V13.8239C3.05174 10.6053 5.67028 7.98674 8.88893 7.98674H22.1842C24.7486 7.98674 27.1238 6.82678 28.7008 4.80463C29.8676 3.30836 31.625 2.45018 33.5223 2.45018H41.6485C43.5458 2.45018 45.3032 3.30836 46.47 4.80477C48.0471 6.82692 50.4222 7.98674 52.9865 7.98674H56.7076C57.3012 7.98674 57.7823 7.5057 57.7823 6.91204C57.7823 6.31838 57.3012 5.83734 56.7076 5.83734H52.9865C51.0892 5.83734 49.3318 4.97916 48.165 3.48275C46.5879 1.4606 44.2128 0.300781 41.6485 0.300781H33.5223C30.9579 0.300781 28.5826 1.46074 27.0058 3.48289C25.8388 4.97916 24.0816 5.83734 22.1842 5.83734H8.88893C4.4851 5.83734 0.902344 9.4201 0.902344 13.8239V45.4966C0.902344 48.5952 2.67646 51.3153 5.31262 52.6369V56.7004C5.31262 58.6588 6.9059 60.2519 8.86428 60.2519H13.9439C14.5375 60.2519 15.0186 59.7709 15.0186 59.1772C15.0186 58.5836 14.5375 58.1025 13.9439 58.1025H8.86428C8.09107 58.1025 7.46202 57.4735 7.46202 56.7004V53.3545C7.63798 53.3866 7.81595 53.4131 7.99607 53.4336C16.1347 54.3642 24.3845 54.916 32.5324 55.0756V58.1025H18.241C17.6473 58.1025 17.1663 58.5836 17.1663 59.1772C17.1663 59.7709 17.6473 60.2519 18.241 60.2519H66.3066C68.265 60.2519 69.8582 58.6588 69.8582 56.7004V52.637C72.4945 51.3154 74.2686 48.5953 74.2686 45.4967V13.8239C74.2686 9.4201 70.6858 5.83734 66.282 5.83734ZM34.6818 29.3437C34.6818 29.3308 34.6923 29.3204 34.7052 29.3204H40.4656C40.4785 29.3204 40.4889 29.3308 40.4889 29.3437V30.7598H34.6818V29.3437ZM28.6932 36.1559V33.1608C28.6932 33.0219 28.8061 32.909 28.9451 32.909H46.2258C46.3647 32.909 46.4776 33.0219 46.4776 33.1608V36.1557C46.4776 36.2946 46.3647 36.4075 46.2258 36.4075H28.9451C28.8061 36.4076 28.6932 36.2946 28.6932 36.1559ZM31.8306 38.557H43.3403V47.2948H31.8306C31.8306 45.1481 31.8306 40.7292 31.8306 38.557ZM34.6818 58.1025V49.444H40.4889V58.1025H34.6818ZM67.7088 56.7004C67.7088 57.4736 67.0797 58.1025 66.3066 58.1025H42.6385V55.0755C50.7853 54.916 59.0349 54.3642 67.1749 53.4336C67.3548 53.413 67.5328 53.3865 67.7088 53.3545V56.7004Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M12.0496 32.2377C11.4631 32.3294 11.062 32.8792 11.1537 33.4654C12.0974 39.5016 15.1319 45.0884 19.698 49.1966C19.9035 49.3814 20.1604 49.4724 20.4166 49.4724C20.7106 49.4724 21.0037 49.3523 21.2158 49.1166C21.6128 48.6754 21.577 47.9959 21.1357 47.5989C16.9356 43.8201 14.1449 38.6829 13.2773 33.1335C13.1857 32.5472 12.6371 32.146 12.0496 32.2377Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M61.8978 33.1335C61.03 38.6831 58.2394 43.8202 54.0394 47.5989C53.5982 47.9959 53.5624 48.6754 53.9593 49.1166C54.1714 49.3525 54.4643 49.4724 54.7585 49.4724C55.0146 49.4724 55.2716 49.3814 55.4771 49.1966C60.043 45.0885 63.0775 39.5018 64.0214 33.4654C64.1131 32.879 63.7121 32.3292 63.1256 32.2377C62.5396 32.146 61.9897 32.5472 61.8978 33.1335Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M33.7134 5.25391C33.1197 5.25391 32.6387 5.73494 32.6387 6.32861C32.6387 6.92227 33.1197 7.40331 33.7134 7.40331H41.4579C42.0516 7.40331 42.5326 6.92227 42.5326 6.32861C42.5326 5.73494 42.0516 5.25391 41.4579 5.25391H33.7134Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M8.56882 13.2394C7.40972 14.3986 6.67119 15.8548 6.48935 17.3394C6.29533 18.9227 6.7467 20.3525 7.75979 21.3655C8.61926 22.225 9.7785 22.6803 11.0767 22.6803C11.309 22.6803 11.5456 22.6656 11.7859 22.6361C13.2706 22.4543 14.7267 21.7158 15.886 20.5567C18.3492 18.0933 18.7123 14.4479 16.6948 12.4303C14.6776 10.4129 11.0323 10.7763 8.56882 13.2394ZM14.3662 19.0367C13.5448 19.8582 12.5356 20.379 11.5248 20.5026C10.612 20.6144 9.81504 20.381 9.2797 19.8456C8.7445 19.3104 8.51107 18.513 8.62284 17.6006C8.7465 16.5899 9.26723 15.5806 10.0887 14.7593C11.0696 13.7784 12.289 13.2574 13.3614 13.2574C14.0661 13.2574 14.7075 13.4827 15.1751 13.9502C16.3545 15.1296 15.9916 17.4115 14.3662 19.0367Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M67.4135 21.3658C69.4308 19.3484 69.068 15.703 66.6045 13.2395C64.141 10.7763 60.4957 10.4128 58.4782 12.4306C56.461 14.448 56.8238 18.0934 59.2872 20.5568C60.4464 21.7159 61.9026 22.4544 63.3872 22.6363C63.6275 22.6658 63.8641 22.6804 64.0964 22.6804C65.3948 22.6804 66.5542 22.2251 67.4135 21.3658ZM63.6486 20.5028C62.6378 20.3791 61.6286 19.8584 60.8072 19.0369C59.1819 17.4116 58.8189 15.1297 59.9982 13.9505C60.4661 13.4827 61.1069 13.2576 61.8119 13.2576C62.884 13.2576 64.104 13.7789 65.0846 14.7594C66.7101 16.3848 67.0729 18.6666 65.8936 19.8459C65.3582 20.3814 64.56 20.6145 63.6486 20.5028Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M35.8911 44.5273H39.2794C39.8731 44.5273 40.3541 44.0463 40.3541 43.4526C40.3541 42.859 39.8731 42.3779 39.2794 42.3779H35.8911C35.2974 42.3779 34.8164 42.859 34.8164 43.4526C34.8164 44.0463 35.2974 44.5273 35.8911 44.5273Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Penunjang Radiologi</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 69 46"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.13543 45.7717H23.844C24.4711 45.7717 24.9795 45.2633 24.9795 44.6363V35.5528H22.7086V43.5008H18.1669V37.8237C18.1669 37.1966 17.6585 36.6882 17.0315 36.6882H7.94801C7.32097 36.6882 6.81258 37.1966 6.81258 37.8237V43.5008H2.27086V7.16707H22.7086V17.3859H24.9795V6.03164C24.9795 5.4046 24.4711 4.89621 23.844 4.89621H22.7086V1.48992C22.7086 0.862885 22.2002 0.354492 21.5732 0.354492H3.40629C2.77925 0.354492 2.27086 0.862885 2.27086 1.48992V4.89621H1.13543C0.508393 4.89621 0 5.4046 0 6.03164V44.6363C0 45.2633 0.508393 45.7717 1.13543 45.7717ZM15.896 43.5008H13.6252V38.9591H15.896V43.5008ZM9.08344 38.9591H11.3543V43.5008H9.08344V38.9591ZM4.54172 2.62535H20.4377V4.89621H4.54172V2.62535Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M10.2162 27.6045H5.67449C5.04746 27.6045 4.53906 28.1129 4.53906 28.7399V33.2816C4.53906 33.9087 5.04746 34.4171 5.67449 34.4171H10.2162C10.8432 34.4171 11.3516 33.9087 11.3516 33.2816V28.7399C11.3516 28.1129 10.8432 27.6045 10.2162 27.6045ZM9.08078 32.1462H6.80992V29.8753H9.08078V32.1462Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M13.625 33.2826C13.625 33.9096 14.1334 34.418 14.7604 34.418H19.3021C19.9292 34.418 20.4376 33.9096 20.4376 33.2826V29.8763H18.1667V32.1472H15.8959V29.8763H18.1667V27.6055H14.7604C14.1334 27.6055 13.625 28.1139 13.625 28.7409V33.2826Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M11.3516 19.6579C11.3516 19.0309 10.8432 18.5225 10.2162 18.5225H5.67449C5.04746 18.5225 4.53906 19.0309 4.53906 19.6579V24.1996C4.53906 24.8266 5.04746 25.335 5.67449 25.335H10.2162C10.8432 25.335 11.3516 24.8266 11.3516 24.1996V19.6579ZM9.08078 23.0642H6.80992V20.7933H9.08078V23.0642Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M13.625 24.1986C13.625 24.8257 14.1334 25.3341 14.7604 25.3341H18.1667V23.0632H15.8959V20.7923H18.1667V23.0632H20.4376V19.6569C20.4376 19.0299 19.9292 18.5215 19.3021 18.5215H14.7604C14.1334 18.5215 13.625 19.0299 13.625 19.6569V24.1986Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M11.3516 10.5739C11.3516 9.94687 10.8432 9.43848 10.2162 9.43848H5.67449C5.04746 9.43848 4.53906 9.94687 4.53906 10.5739V15.1156C4.53906 15.7427 5.04746 16.2511 5.67449 16.2511H10.2162C10.8432 16.2511 11.3516 15.7427 11.3516 15.1156V10.5739ZM9.08078 13.9802H6.80992V11.7093H9.08078V13.9802Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M14.7604 16.2511H19.3021C19.9292 16.2511 20.4376 15.7427 20.4376 15.1156V10.5739C20.4376 9.94687 19.9292 9.43848 19.3021 9.43848H14.7604C14.1334 9.43848 13.625 9.94687 13.625 10.5739V15.1156C13.625 15.7427 14.1334 16.2511 14.7604 16.2511ZM15.8959 11.7093H18.1667V13.9802H15.8959V11.7093Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M66.9866 4.89523H65.8512V1.48895C65.8512 0.861909 65.3428 0.353516 64.7158 0.353516H46.5489C45.9218 0.353516 45.4134 0.861909 45.4134 1.48895V4.89523H44.278C43.651 4.89523 43.1426 5.40363 43.1426 6.03066V17.385H45.4134V7.16609H65.8512V43.4998H61.3095V37.8227C61.3095 37.1957 60.8011 36.6873 60.174 36.6873H51.0906C50.4636 36.6873 49.9552 37.1957 49.9552 37.8227V43.4998H45.4134V35.5518H43.1426V44.6353C43.1426 45.2623 43.651 45.7707 44.278 45.7707H66.9866C67.6137 45.7707 68.122 45.2623 68.122 44.6353V6.03066C68.122 5.40363 67.6137 4.89523 66.9866 4.89523ZM52.226 38.9581H54.4969V43.4998H52.226V38.9581ZM56.7677 43.4998V38.9581H59.0386V43.4998H56.7677ZM47.6843 4.89523V2.62437H63.5803V4.89523H47.6843Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M53.3647 27.6055H49.9584V29.8763H52.2292V32.1472H49.9584V29.8763H47.6875V33.2826C47.6875 33.9096 48.1959 34.418 48.8229 34.418H53.3647C53.9917 34.418 54.5001 33.9096 54.5001 33.2826V28.7409C54.5001 28.1139 53.9917 27.6055 53.3647 27.6055Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M56.7734 33.2816C56.7734 33.9087 57.2818 34.4171 57.9089 34.4171H62.4506C63.0776 34.4171 63.586 33.9087 63.586 33.2816V28.7399C63.586 28.1129 63.0776 27.6045 62.4506 27.6045H57.9089C57.2818 27.6045 56.7734 28.1129 56.7734 28.7399V33.2816ZM59.0443 29.8753H61.3152V32.1462H59.0443V29.8753Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M47.6875 23.0632H49.9584V20.7923H52.2292V23.0632H49.9584V25.3341H53.3647C53.9917 25.3341 54.5001 24.8257 54.5001 24.1986V19.6569C54.5001 19.0299 53.9917 18.5215 53.3647 18.5215H48.8229C48.1959 18.5215 47.6875 19.0299 47.6875 19.6569V23.0632Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M56.7734 24.1996C56.7734 24.8266 57.2818 25.335 57.9089 25.335H62.4506C63.0776 25.335 63.586 24.8266 63.586 24.1996V19.6579C63.586 19.0309 63.0776 18.5225 62.4506 18.5225H57.9089C57.2818 18.5225 56.7734 19.0309 56.7734 19.6579V24.1996ZM59.0443 20.7933H61.3152V23.0642H59.0443V20.7933Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M48.8229 16.2511H53.3647C53.9917 16.2511 54.5001 15.7427 54.5001 15.1156V10.5739C54.5001 9.94687 53.9917 9.43848 53.3647 9.43848H48.8229C48.1959 9.43848 47.6875 9.94687 47.6875 10.5739V15.1156C47.6875 15.7427 48.1959 16.2511 48.8229 16.2511ZM49.9584 11.7093H52.2292V13.9802H49.9584V11.7093Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M57.9089 16.2511H62.4506C63.0776 16.2511 63.586 15.7427 63.586 15.1156V10.5739C63.586 9.94687 63.0776 9.43848 62.4506 9.43848H57.9089C57.2818 9.43848 56.7734 9.94687 56.7734 10.5739V15.1156C56.7734 15.7427 57.2818 16.2511 57.9089 16.2511ZM59.0443 11.7093H61.3152V13.9802H59.0443V11.7093Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M19.6369 28.9044L27.5849 38.1649C27.9098 38.5428 28.3982 38.6565 28.8224 38.4517C29.2465 38.247 29.5231 37.7644 29.5231 37.2296V33.2608H38.6066V37.2296C38.6066 37.7644 38.8832 38.247 39.3074 38.4517C39.7315 38.6565 40.2199 38.5428 40.5448 38.1649L48.4928 28.9044C48.9358 28.3876 48.9358 27.5505 48.4928 27.0337L40.5448 17.7732C40.2199 17.3953 39.7315 17.2816 39.3074 17.4864C38.8832 17.6911 38.6066 18.1737 38.6066 18.7085V22.6773H29.5231V18.7085C29.5231 18.1737 29.2465 17.6911 28.8224 17.4864C28.3982 17.2816 27.9098 17.3953 27.5849 17.7732L19.6369 27.0337C19.1939 27.5505 19.1939 28.3876 19.6369 28.9044ZM27.2523 21.9022V24.0003C27.2523 24.7308 27.7607 25.3232 28.3877 25.3232H39.742C40.369 25.3232 40.8774 24.7308 40.8774 24.0003V21.9022L46.0845 27.9691L40.8774 34.0359V31.9379C40.8774 31.2073 40.369 30.6149 39.742 30.6149H28.3877C27.7607 30.6149 27.2523 31.2073 27.2523 31.9379V34.0359L22.0453 27.9691L27.2523 21.9022Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Fitur B to B</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" viewBox="0 0 78 78" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M65.6871 57.1377C65.4116 57.1377 65.1474 57.0283 64.9527 56.8335C64.7579 56.6387 64.6484 56.3745 64.6484 56.0991V21.4654C64.6484 21.1899 64.7579 20.9258 64.9527 20.731C65.1474 20.5362 65.4116 20.4268 65.6871 20.4268C65.9626 20.4268 66.2267 20.5362 66.4215 20.731C66.6163 20.9258 66.7257 21.1899 66.7257 21.4654V56.0991C66.7257 56.3745 66.6163 56.6387 66.4215 56.8335C66.2267 57.0283 65.9626 57.1377 65.6871 57.1377Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M39.2008 57.1377C38.9253 57.1377 38.6611 57.0283 38.4663 56.8335C38.2715 56.6387 38.1621 56.3745 38.1621 56.0991V21.4654C38.1621 21.1899 38.2715 20.9258 38.4663 20.731C38.6611 20.5362 38.9253 20.4268 39.2008 20.4268C39.4762 20.4268 39.7404 20.5362 39.9352 20.731C40.13 20.9258 40.2394 21.1899 40.2394 21.4654V56.0991C40.2394 56.3745 40.13 56.6387 39.9352 56.8335C39.7404 57.0283 39.4762 57.1377 39.2008 57.1377Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M56.859 61.5512C56.5835 61.5512 56.3193 61.4418 56.1245 61.247C55.9297 61.0522 55.8203 60.788 55.8203 60.5125V17.0504C55.8203 16.7749 55.9297 16.5107 56.1245 16.3159C56.3193 16.1211 56.5835 16.0117 56.859 16.0117C57.1344 16.0117 57.3986 16.1211 57.5934 16.3159C57.7882 16.5107 57.8976 16.7749 57.8976 17.0504V60.5125C57.8976 60.788 57.7882 61.0522 57.5934 61.247C57.3986 61.4418 57.1344 61.5512 56.859 61.5512Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M48.0308 68.9083C47.7554 68.9083 47.4912 68.7988 47.2964 68.6041C47.1016 68.4093 46.9922 68.1451 46.9922 67.8696V9.69294C46.9922 9.41748 47.1016 9.15329 47.2964 8.95851C47.4912 8.76373 47.7554 8.6543 48.0308 8.6543C48.3063 8.6543 48.5705 8.76373 48.7653 8.95851C48.9601 9.15329 49.0695 9.41748 49.0695 9.69294V67.8696C49.0695 68.1451 48.9601 68.4093 48.7653 68.6041C48.5705 68.7988 48.3063 68.9083 48.0308 68.9083Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M12.7164 57.1377C12.4409 57.1377 12.1767 57.0283 11.9819 56.8335C11.7872 56.6387 11.6777 56.3745 11.6777 56.0991V21.4654C11.6777 21.1899 11.7872 20.9258 11.9819 20.731C12.1767 20.5362 12.4409 20.4268 12.7164 20.4268C12.9918 20.4268 13.256 20.5362 13.4508 20.731C13.6456 20.9258 13.755 21.1899 13.755 21.4654V56.0991C13.755 56.3745 13.6456 56.6387 13.4508 56.8335C13.256 57.0283 12.9918 57.1377 12.7164 57.1377Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M21.5445 51.2515C21.269 51.2515 21.0049 51.1421 20.8101 50.9473C20.6153 50.7525 20.5059 50.4883 20.5059 50.2129V27.3502C20.5059 27.0747 20.6153 26.8105 20.8101 26.6157C21.0049 26.421 21.269 26.3115 21.5445 26.3115C21.82 26.3115 22.0842 26.421 22.2789 26.6157C22.4737 26.8105 22.5832 27.0747 22.5832 27.3502V50.2129C22.5832 50.4883 22.4737 50.7525 22.2789 50.9473C22.0842 51.1421 21.82 51.2515 21.5445 51.2515Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M30.3726 68.9083C30.0972 68.9083 29.833 68.7988 29.6382 68.6041C29.4434 68.4093 29.334 68.1451 29.334 67.8696V9.69294C29.334 9.41748 29.4434 9.15329 29.6382 8.95851C29.833 8.76373 30.0972 8.6543 30.3726 8.6543C30.6481 8.6543 30.9123 8.76373 31.1071 8.95851C31.3018 9.15329 31.4113 9.41748 31.4113 9.69294V67.8696C31.4113 68.1451 31.3018 68.4093 31.1071 68.6041C30.9123 68.7988 30.6481 68.9083 30.3726 68.9083Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M74.5152 51.7418C74.2397 51.7418 73.9756 51.6324 73.7808 51.4376C73.586 51.2428 73.4766 50.9787 73.4766 50.7032V26.859C73.4766 26.5835 73.586 26.3193 73.7808 26.1245C73.9756 25.9297 74.2397 25.8203 74.5152 25.8203C74.7907 25.8203 75.0549 25.9297 75.2496 26.1245C75.4444 26.3193 75.5539 26.5835 75.5539 26.859V50.7032C75.5539 50.9787 75.4444 51.2428 75.2496 51.4376C75.0549 51.6324 74.7907 51.7418 74.5152 51.7418Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M3.88826 45.312C3.61279 45.312 3.34861 45.2025 3.15382 45.0077C2.95904 44.813 2.84961 44.5488 2.84961 44.2733V33.2896C2.84961 33.0142 2.95904 32.75 3.15382 32.5552C3.34861 32.3604 3.61279 32.251 3.88826 32.251C4.16372 32.251 4.42791 32.3604 4.62269 32.5552C4.81747 32.75 4.9269 33.0142 4.9269 33.2896V44.2733C4.9269 44.5488 4.81747 44.813 4.62269 45.0077C4.42791 45.2025 4.16372 45.312 3.88826 45.312Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Penunjang Audiometri</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" viewBox="0 0 65 65" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M64.7295 0.591797H15.9142V51.275C15.9142 52.305 15.0762 53.143 14.0462 53.143C13.0163 53.143 12.1783 52.305 12.1783 51.275V0.591797H0.970703V51.275C0.970703 58.4849 6.83638 64.3506 14.0462 64.3506C21.1032 64.3506 26.8713 58.7308 27.1129 51.7317H64.7295V0.591797ZM60.9936 4.32766V40.5241H57.2577V8.06353H23.3859V40.5241H19.65V4.32766H60.9936ZM53.5219 23.7747C52.5758 23.2853 51.5038 23.007 50.3672 23.007C49.2306 23.007 48.1584 23.2853 47.2124 23.7747V11.7994H53.5219V23.7747ZM53.5219 29.8975C53.5219 31.6371 52.1067 33.0522 50.3672 33.0522C48.6276 33.0522 47.2124 31.637 47.2124 29.8975C47.2124 28.1581 48.6276 26.7428 50.3672 26.7428C52.1067 26.7428 53.5219 28.1581 53.5219 29.8975ZM43.4765 16.303C42.5305 15.8136 41.4584 15.5353 40.3218 15.5353C39.1852 15.5353 38.1132 15.8136 37.1671 16.303V11.7994H43.4765V16.303ZM43.4765 22.4258C43.4765 24.1654 42.0614 25.5805 40.3218 25.5805C38.5823 25.5805 37.1671 24.1652 37.1671 22.4258C37.1671 20.6864 38.5823 19.2711 40.3218 19.2711C42.0614 19.2711 43.4765 20.6864 43.4765 22.4258ZM33.4313 23.7747C32.4852 23.2853 31.413 23.007 30.2764 23.007C29.1399 23.007 28.0678 23.2853 27.1218 23.7747V11.7994H33.4313V23.7747ZM33.4313 29.8975C33.4313 31.6371 32.016 33.0522 30.2764 33.0522C28.5369 33.0522 27.1218 31.6371 27.1218 29.8975C27.1218 28.158 28.5369 26.7428 30.2764 26.7428C32.016 26.7428 33.4313 28.1581 33.4313 29.8975ZM27.1218 36.0205C28.0678 36.5099 29.1399 36.7882 30.2764 36.7882C31.413 36.7882 32.4852 36.5099 33.4313 36.0205V40.5241H27.1218V36.0205ZM37.1671 28.5488C38.1132 29.0382 39.1852 29.3165 40.3218 29.3165C41.4584 29.3165 42.5305 29.0382 43.4765 28.5488V40.5241H37.1671V28.5488ZM47.2124 36.0205C48.1584 36.5099 49.2306 36.7882 50.3672 36.7882C51.5038 36.7882 52.5758 36.5099 53.5219 36.0205V40.5241H47.2124V36.0205ZM8.44243 4.32766V11.7994H4.70657V4.32766H8.44243ZM14.0462 60.6147C8.89634 60.6147 4.70657 56.4249 4.70657 51.275V15.5353H8.44243V51.275C8.44243 54.365 10.9563 56.8788 14.0462 56.8788C16.9824 56.8788 19.3965 54.6087 19.6299 51.7317H23.3743C23.1353 56.6702 19.0431 60.6147 14.0462 60.6147ZM19.65 47.9958V44.2599H60.9936V47.9958H19.65Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Penunjang Spirometri</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M72.1839 21.0291C72.1839 30.823 65.21 39.0329 59.9645 44.3566C59.4169 44.9123 58.694 45.1904 57.9711 45.1904C57.2619 45.1904 56.5532 44.9226 56.0079 44.3855C54.9074 43.3009 54.8943 41.5294 55.9789 40.4295C63.2172 33.0835 66.5886 26.9189 66.5886 21.0291C66.5886 12.3586 60.9513 6.30328 52.8802 6.30328C47.6319 6.30328 43.7568 8.27747 41.3618 12.1718C39.4614 15.2628 39.1652 18.4801 39.1625 18.5123C39.0505 19.9696 37.8353 21.0887 36.3736 21.0887C34.912 21.0887 33.6967 19.957 33.5847 18.4998C33.5831 18.4801 33.2869 15.2628 31.386 12.1718C28.9916 8.27747 25.1164 6.30328 19.8681 6.30328C11.7971 6.30328 6.15972 12.3586 6.15972 21.0291C6.15972 24.9392 7.64323 28.9597 10.6895 33.3004H17.33L21.9713 23.8174C22.4488 22.8421 23.4515 22.2274 24.5339 22.2503C25.6202 22.2695 26.5967 22.9159 27.0393 23.9076L32.7553 36.7199L36.3955 29.5204C36.8681 28.586 37.8227 27.9937 38.8696 27.9849H38.8926C39.9308 27.9849 40.8837 28.5598 41.3678 29.4799L43.3786 33.3004H49.6629C51.2082 33.3004 52.4606 34.5528 52.4606 36.0981C52.4606 37.6433 51.2082 38.8957 49.6629 38.8957H41.6897C40.6509 38.8957 39.698 38.3203 39.2139 37.4013L38.9418 36.8838L35.0939 44.4943C34.6175 45.4374 33.6508 46.0297 32.5979 46.0297C32.575 46.0297 32.5526 46.0291 32.5296 46.0286C31.4504 46.0029 30.4827 45.3576 30.0423 44.3719L24.3667 31.6508L21.5882 37.3281C21.1189 38.2876 20.1435 38.8957 19.0753 38.8957H3.36209C1.81683 38.8957 0.564453 37.6433 0.564453 36.0981C0.564453 34.5528 1.81683 33.3004 3.36209 33.3004H4.07133C1.71738 29.1368 0.564453 25.0911 0.564453 21.0291C0.564453 15.0874 2.51515 9.97135 6.20617 6.23388C9.72452 2.67018 14.5767 0.708008 19.8681 0.708008C29.1194 0.708008 33.9027 5.46836 36.2862 9.46154C36.3157 9.51072 36.3452 9.56044 36.3742 9.61017C36.4031 9.56044 36.4326 9.51072 36.4621 9.46154C38.8456 5.46836 43.6289 0.708008 52.8802 0.708008C58.1717 0.708008 63.0238 2.67018 66.5422 6.23388C70.2332 9.97135 72.1839 15.0874 72.1839 21.0291ZM46.1391 49.489L46.0752 49.5453C42.5191 52.6648 39.1199 55.6498 36.3742 58.5737C33.6284 55.6493 30.2287 52.6648 26.6726 49.5448C24.7787 47.8837 22.8204 46.1657 20.9222 44.4205C19.7845 43.3747 18.0147 43.449 16.9694 44.5866C15.9236 45.7237 15.9979 47.4935 17.1355 48.5394C19.0818 50.3289 21.0648 52.0686 22.9827 53.751C27.3649 57.5956 31.5045 61.2271 34.1951 64.5695C34.1978 64.5733 34.2011 64.5766 34.2038 64.5804C34.2164 64.5957 34.2295 64.6105 34.2426 64.6252C34.2929 64.6848 34.3448 64.7421 34.3994 64.7968C34.4027 64.8001 34.4054 64.8033 34.4082 64.8061C34.4743 64.8716 34.5431 64.9323 34.6142 64.9897C34.6164 64.9913 34.618 64.9929 34.6202 64.9946C34.6213 64.9962 34.6229 64.9968 34.624 64.9979C34.6858 65.0476 34.7491 65.094 34.8147 65.1377C34.8185 65.1405 34.8229 65.1432 34.8267 65.1459C34.8885 65.1869 34.9519 65.2257 35.0163 65.2612C35.0207 65.264 35.0251 65.2667 35.03 65.2689C35.0923 65.3033 35.1557 65.3344 35.2207 65.364C35.2365 65.3711 35.2529 65.3776 35.2688 65.3847C35.3212 65.4071 35.3742 65.4284 35.4278 65.4476C35.442 65.4525 35.4562 65.4585 35.4699 65.4634C35.53 65.4836 35.5906 65.5011 35.6518 65.5175C35.6759 65.524 35.6993 65.5295 35.7234 65.5355C35.7731 65.5475 35.8234 65.5579 35.8742 65.5672C35.8939 65.5705 35.9135 65.5743 35.9332 65.5776C35.9922 65.5869 36.0518 65.594 36.1108 65.6C36.1321 65.6016 36.1529 65.6033 36.1742 65.6049C36.2381 65.6098 36.302 65.6126 36.366 65.6126C36.3682 65.6126 36.3709 65.6131 36.3731 65.6131H36.3747H36.3764C36.3785 65.6131 36.3807 65.6126 36.3829 65.6126C36.4474 65.6126 36.5108 65.6093 36.5747 65.6049C36.596 65.6033 36.6173 65.6016 36.6381 65.6C36.6976 65.594 36.7561 65.5874 36.8151 65.5776C36.8353 65.5749 36.8556 65.5705 36.8763 65.5672C36.926 65.5579 36.9758 65.5475 37.0255 65.5355C37.0495 65.5301 37.0736 65.524 37.0976 65.5175C37.1583 65.5011 37.2189 65.4836 37.2785 65.4634C37.2932 65.4585 37.308 65.4525 37.3227 65.447C37.3752 65.4284 37.4277 65.4077 37.479 65.3853C37.496 65.3782 37.5129 65.3711 37.5293 65.3634C37.5932 65.3344 37.6566 65.3033 37.7183 65.2694C37.7238 65.2667 37.7293 65.2634 37.7347 65.2601C37.7981 65.2252 37.8599 65.1869 37.9211 65.1465C37.926 65.1437 37.9309 65.1405 37.9353 65.1372C38.0003 65.094 38.0631 65.0476 38.1249 64.9979C38.126 64.9968 38.1276 64.9962 38.1292 64.9946C38.1314 64.9929 38.1331 64.9913 38.1353 64.9891C38.2057 64.9317 38.2746 64.8711 38.3407 64.8061C38.344 64.8033 38.3467 64.7995 38.35 64.7962C38.4041 64.7421 38.4565 64.6848 38.5068 64.6252C38.5194 64.6105 38.5325 64.5957 38.5451 64.5804C38.5478 64.5766 38.5511 64.5733 38.5544 64.5695C41.2443 61.2271 45.3834 57.5956 49.7657 53.7516L49.8301 53.6948C50.9913 52.6762 51.1071 50.9086 50.088 49.7469C49.0684 48.5858 47.3008 48.47 46.1391 49.489Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Penunjang Cardiologi</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" viewBox="0 0 77 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.286 18.9279C75.6 18.1626 59.0984 0.164062 38.43 0.164062C17.7616 0.164062 1.26016 18.1626 0.573972 18.9279C-0.191324 19.7833 -0.191324 21.0764 0.573972 21.9318C1.26016 22.6971 17.7619 40.6956 38.43 40.6956C59.0981 40.6956 75.5999 22.6971 76.286 21.9318C77.0512 21.0764 77.0512 19.7833 76.286 18.9279ZM38.43 36.1921C29.7396 36.1921 22.6677 29.1203 22.6677 20.4298C22.6677 11.7394 29.7396 4.66757 38.43 4.66757C47.1204 4.66757 54.1923 11.7394 54.1923 20.4298C54.1923 29.1203 47.1204 36.1921 38.43 36.1921Z"
                                            fill="#129E4A" />
                                        <path
                                            d="M40.6824 15.9262C40.6824 13.6609 41.8069 11.6681 43.5177 10.4424C41.9826 9.65653 40.2703 9.1709 38.4306 9.1709C32.2229 9.1709 27.1719 14.2219 27.1719 20.4297C27.1719 26.6375 32.2229 31.6884 38.4306 31.6884C43.9886 31.6884 48.5888 27.6302 49.4976 22.3274C44.9631 23.7873 40.6824 20.3579 40.6824 15.9262Z"
                                            fill="#129E4A" />
                                    </svg>
                                    <h5 class="card-title text-success text-center fw-bolder">Penunjang Optometri</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="card-rounded card-hover card shadow h-100">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <svg class="mx-auto d-block mb-4" width="80" height="80" viewBox="0 0 54 54"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M4.02256 7.79568H5.79849V9.57161H4.02256C3.04158 9.57161 2.24663 10.3666 2.24663 11.3475V46.8661C2.24663 47.8471 3.04158 48.642 4.02256 48.642H43.093C44.074 48.642 44.8689 47.8471 44.8689 46.8661V45.0902H46.6449V46.8661C46.6449 48.8276 45.0545 50.418 43.093 50.418H4.02256C2.06105 50.418 0.470703 48.8276 0.470703 46.8661V11.3475C0.470703 9.38602 2.06105 7.79568 4.02256 7.79568Z"
                                                fill="#129E4A" />
                                            <path d="M4.02148 46.8662H5.79742V45.0903H4.02148V46.8662Z" fill="#129E4A" />
                                            <path d="M7.57227 46.8662H9.34821V45.0903H7.57227V46.8662Z" fill="#129E4A" />
                                            <path d="M11.125 46.8662H12.9009V45.0903H11.125V46.8662Z" fill="#129E4A" />
                                            <path
                                                d="M7.57227 4.24402C7.57227 2.28251 9.16261 0.692165 11.1241 0.692165H50.1946C52.1561 0.692165 53.7464 2.28251 53.7464 4.24402V39.7626C53.7464 41.7241 52.1561 43.3145 50.1946 43.3145H11.1241C9.16261 43.3145 7.57227 41.7241 7.57227 39.7626V4.24402ZM9.34819 39.7626C9.34819 40.7436 10.1431 41.5385 11.1241 41.5385H50.1946C51.1755 41.5385 51.9705 40.7436 51.9705 39.7626V4.24402C51.9705 3.26304 51.1755 2.46809 50.1946 2.46809H11.1241C10.1431 2.46809 9.34819 3.26304 9.34819 4.24402V39.7626Z"
                                                fill="#129E4A" />
                                            <path d="M11.125 39.7627H12.9009V37.9868H11.125V39.7627Z" fill="#129E4A" />
                                            <path d="M14.6777 39.7627H16.4537V37.9868H14.6777V39.7627Z" fill="#129E4A" />
                                            <path d="M18.2305 39.7627H20.0064V37.9868H18.2305V39.7627Z" fill="#129E4A" />
                                            <path d="M11.125 36.2109H50.1954V34.435H11.125V36.2109Z" fill="#129E4A" />
                                            <path d="M11.125 31.7715H18.2287V29.9956H11.125V31.7715Z" fill="#129E4A" />
                                            <path d="M11.125 28.2197H16.4528V26.4438H11.125V28.2197Z" fill="#129E4A" />
                                            <path
                                                d="M30.6591 24.667C27.226 24.667 24.4434 21.8843 24.4434 18.4512C24.4434 15.0181 27.226 12.2355 30.6591 12.2355C34.0922 12.2355 36.8748 15.0181 36.8748 18.4512C36.8708 21.8823 34.0902 24.663 30.6591 24.667ZM30.6591 14.0114C28.2072 14.0114 26.2193 15.9993 26.2193 18.4512C26.2193 20.9031 28.2072 22.8911 30.6591 22.8911C33.111 22.8911 35.0989 20.9031 35.0989 18.4512C35.0958 16.0005 33.1099 14.0145 30.6591 14.0114Z"
                                                fill="#129E4A" />
                                            <path
                                                d="M44.868 21.1156C44.868 21.6062 44.4706 22.0036 43.98 22.0036H41.6331C41.4451 22.587 41.2107 23.1546 40.9308 23.6996L42.5904 25.3581C42.9367 25.7051 42.9367 26.2669 42.5904 26.6139L38.8227 30.3816C38.4758 30.7279 37.9139 30.7279 37.5669 30.3816L35.9084 28.7228C35.3626 29.0017 34.7954 29.2361 34.2124 29.4243V31.7712C34.2124 32.2618 33.8151 32.6592 33.3245 32.6592H27.9967C27.5061 32.6592 27.1087 32.2618 27.1087 31.7712V29.4243C26.5258 29.2361 25.9586 29.0017 25.4127 28.7228L23.7542 30.3816C23.4072 30.7279 22.8454 30.7279 22.4984 30.3816L18.7308 26.6139C18.3844 26.2669 18.3844 25.7051 18.7308 25.3581L20.3895 23.6996C20.3153 23.5542 20.2438 23.4084 20.1764 23.261C19.989 22.8516 19.8261 22.432 19.688 22.0036H17.3411C16.8505 22.0036 16.4531 21.6062 16.4531 21.1156V15.7879C16.4531 15.2973 16.8505 14.8999 17.3411 14.8999H19.688C19.876 14.3165 20.1104 13.7489 20.3904 13.2039L18.7308 11.5454C18.3844 11.1984 18.3844 10.6366 18.7308 10.2896L22.4984 6.52195C22.8454 6.17564 23.4072 6.17564 23.7542 6.52195L25.4127 8.18066C25.9586 7.90184 26.5258 7.66742 27.1087 7.47917V5.13228C27.1087 4.64168 27.5061 4.24432 27.9967 4.24432H33.3245C33.8151 4.24432 34.2124 4.64168 34.2124 5.13228V7.47917C34.7954 7.66742 35.3626 7.90184 35.9084 8.18066L37.5669 6.52195C37.9139 6.17564 38.4758 6.17564 38.8227 6.52195L42.5904 10.2896C42.9367 10.6366 42.9367 11.1984 42.5904 11.5454L40.9308 13.2039C41.2107 13.7489 41.4451 14.3165 41.6331 14.8999H43.98C44.4706 14.8999 44.868 15.2973 44.868 15.7879V21.1156ZM43.0921 16.6758H40.9663C40.5614 16.6758 40.208 16.4017 40.1067 16.0098C39.8799 15.1285 39.5302 14.2828 39.0678 13.4987C38.862 13.1502 38.9186 12.7062 39.2046 12.4198L40.7059 10.9176L38.1947 8.40532L36.6925 9.90775C36.4059 10.1941 35.9619 10.2505 35.6132 10.0445C34.8291 9.58209 33.9838 9.23223 33.1025 9.00558C32.7106 8.90435 32.4365 8.55095 32.4365 8.14603V6.02025H28.8846V8.14603C28.8846 8.55095 28.6105 8.90435 28.2187 9.00558C27.3374 9.23223 26.492 9.58209 25.7079 10.0445C25.3592 10.2505 24.9152 10.1941 24.6286 9.90775L23.1264 8.40532L20.6152 10.9176L22.1166 12.4198C22.4025 12.7062 22.4591 13.1502 22.2533 13.4987C21.7909 14.2828 21.4413 15.1285 21.2144 16.0098C21.1132 16.4017 20.7598 16.6758 20.3548 16.6758H18.2291V20.2277H20.3548C20.7598 20.2277 21.1132 20.5018 21.2144 20.8937C21.3578 21.4526 21.5512 21.9969 21.7918 22.5211C21.9305 22.825 22.0846 23.1213 22.2533 23.409C22.4584 23.7578 22.4023 24.2011 22.1166 24.4872L20.6152 25.9895L23.1264 28.5017L24.6286 26.9989C24.9152 26.7125 25.3592 26.6565 25.7079 26.8628C26.492 27.3247 27.3374 27.675 28.2187 27.9017C28.6105 28.0027 28.8846 28.3565 28.8846 28.7608V30.8833H32.4365V28.7575C32.4365 28.3526 32.7106 27.9991 33.1025 27.8979C33.9838 27.6713 34.8291 27.3214 35.6132 26.859C35.9619 26.653 36.4059 26.7094 36.6925 26.9957L38.1947 28.4982L40.7059 25.9859L39.2046 24.4837C38.9186 24.1973 38.862 23.7533 39.0678 23.4048C39.5302 22.6207 39.8799 21.775 40.1067 20.8937C40.208 20.5018 40.5614 20.2277 40.9663 20.2277H43.0921V16.6758Z"
                                                fill="#129E4A" />
                                            <path d="M44.8691 6.02051H50.1969V4.24459H44.8691V6.02051Z" fill="#129E4A" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="53.2779" height="53.2779" fill="white"
                                                    transform="matrix(1 0 0 -1 0.46875 53.9707)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <h5 class="card-title text-success text-center fw-bolder">Costume Fitur</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="bg-white" data-aos-duration="2000" data-aos="fade-up">
            <div class="col-12 col-md-11 row justify-content-center mx-auto py-5 mb-5">
                <div class="col-12 col-md-12 text-end my-5 pb-5">
                    <h1 class="text-success display-4 fw-bolder">
                        Frequently <br>
                        Asked <br>
                        <span class="border-bottom border-5 border-success">Questions</span>
                    </h1>
                </div>

                <div class="row col-12 col-md-12">
                    <div class="col-12 col-md-6">
                        <h5>
                            <a class="text-success text-decoration-none fw-bolder" data-bs-toggle="collapse"
                                href="#collapseQuestionF" aria-expanded="false" aria-controls="collapseQuestionF">
                                Kalau saya pake untuk Praktek Dokter bisa ?
                            </a>
                        </h5>
                        <div class="collapse" id="collapseQuestionF">
                            <div class="border-start border-success" style="border-width: 5px !important;">
                                <h5 class="ms-3 text-secondary">
                                    Ya, SAFF-Medic dapat diterapkan pada operasional praktek Dokter hingga Rumah Sakit.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5>
                            <a class="text-success text-decoration-none fw-bolder" data-bs-toggle="collapse"
                                href="#collapseQuestionSecond" aria-expanded="false" aria-controls="collapseQuestionSecond">
                                Perlu spesifikasi komputer seperti apa untuk menjalankan SAFF-Medic ?
                            </a>
                        </h5>
                        <div class="collapse" id="collapseQuestionSecond">
                            <div class="border-start border-success" style="border-width: 5px !important;">
                                <h5 class="ms-3 text-secondary">
                                    Pada penggunaan Saff-Medic tidak memiliki persyaratan khusus dalam menentukan spek
                                    komputer atau laptop. cukup menggunakan web browser dan koneksi internet Anda sudah
                                    dapat menggunakannya.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <h5>
                            <a class="text-success text-decoration-none fw-bolder" data-bs-toggle="collapse"
                                href="#collapseQuestionThird" aria-expanded="false" aria-controls="collapseQuestionThird">
                                Selain Cloud apakah bisa di terapkan pada server sendiri ?
                            </a>
                        </h5>
                        <div class="collapse" id="collapseQuestionThird">
                            <div class="border-start border-success" style="border-width: 5px !important;">
                                <h5 class="ms-3 text-secondary">
                                    Kami membuka diri untuk penerapan pada server sendiri dengan kontrak lisensi
                                    berlangganan yang kami namakan Hybrid.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <h5>
                            <a class="text-success text-decoration-none fw-bolder" data-bs-toggle="collapse"
                                href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                Kalau aplikasinya tidak sesuai bagaimana ?
                            </a>
                        </h5>
                        <div class="collapse" id="collapseFourth">
                            <div class="border-start border-success" style="border-width: 5px !important;">
                                <h5 class="ms-3 text-secondary">
                                    Secara fitur sudah kami sediakan, namun kami membuka diri untuk melakukan custome sesuai
                                    dengan kebutuhan Anda. Jadi kalaupun tidak sesuai maka kami bisa menyesuaikan.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div style="margin-bottom:60px; margin-right:22px;" id="whatsapp" class="d-flex justify-content-center p-1 rounded-3">
        <a class="d-flex align-items-center text-decoration-none text-white" target="_blank"
            href="{{ route('whatsapp') }}">
            <i class="fab fa-whatsapp fa-2x p-1"></i><span class="contact-us"> Hubungi Kami</span>
        </a>
    </div>

@endsection
