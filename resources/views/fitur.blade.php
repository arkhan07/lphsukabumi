@extends('layout.app')

@section('content')
    <section class="container my-10 mx-auto p-5">
        <div class="md:w-4/5 mx-auto">
            <div class="text-center mb-10">
                <h1 class="md:text-4xl text-2xl font-bold text-darkteal mb-4">Tentang LPH Doa Bangsa</h1>
                <p class="text-darkgreen md:w-3/4 mx-auto">
                    Lembaga Pemeriksa Halal yang terpercaya dan profesional dalam memberikan layanan sertifikasi halal
                </p>
            </div>

            <div class="bg-gray-100 rounded-xl p-8 mb-8">
                <h2 class="text-2xl font-bold text-darkteal mb-4">Profil Lembaga</h2>
                <p class="text-deepturqoise mb-4">
                    LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang telah terdaftar dan diakui oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH). Kami berkomitmen untuk membantu pelaku usaha di Indonesia mendapatkan sertifikasi halal yang sah dan terpercaya.
                </p>
                <p class="text-deepturqoise mb-4">
                    Dengan tim auditor yang berpengalaman dan profesional, kami menjamin proses sertifikasi yang transparan, akurat, dan sesuai dengan standar kehalalan yang ditetapkan oleh pemerintah.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white border-2 border-darkteal rounded-lg p-6">
                    <h3 class="text-xl font-bold text-darkteal mb-3">Visi</h3>
                    <p class="text-deepturqoise">
                        Menjadi Lembaga Pemeriksa Halal terdepan di Sukabumi yang memberikan layanan berkualitas dan terpercaya dalam menjamin kehalalan produk untuk kesejahteraan umat.
                    </p>
                </div>

                <div class="bg-white border-2 border-darkteal rounded-lg p-6">
                    <h3 class="text-xl font-bold text-darkteal mb-3">Misi</h3>
                    <ul class="text-deepturqoise list-disc list-inside space-y-2">
                        <li>Memberikan layanan sertifikasi halal yang profesional</li>
                        <li>Mendampingi pelaku usaha dalam proses sertifikasi</li>
                        <li>Meningkatkan kesadaran masyarakat tentang produk halal</li>
                    </ul>
                </div>
            </div>

            <div class="bg-darkteal text-white rounded-xl p-8 mb-8">
                <h2 class="text-2xl font-bold mb-4">Nilai-Nilai Kami</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <h4 class="font-bold mb-2">Amanah</h4>
                        <p class="text-sm">Menjaga kepercayaan yang diberikan dengan integritas tinggi</p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">Profesional</h4>
                        <p class="text-sm">Bekerja dengan standar tinggi dan kompetensi terbaik</p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">Transparan</h4>
                        <p class="text-sm">Keterbukaan dalam setiap proses pemeriksaan</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-100 rounded-xl p-8">
                <h2 class="text-2xl font-bold text-darkteal mb-4">Tim Auditor</h2>
                <p class="text-deepturqoise mb-4">
                    Tim auditor LPH Doa Bangsa terdiri dari para profesional yang telah tersertifikasi dan memiliki pengalaman luas dalam berbagai bidang industri. Mereka memahami standar kehalalan dan berkomitmen memberikan penilaian yang objektif dan akurat.
                </p>
                <p class="text-deepturqoise">
                    Setiap auditor kami telah melalui pelatihan khusus dan memiliki kompetensi yang diakui oleh BPJPH dalam melakukan pemeriksaan dan audit halal.
                </p>
            </div>
        </div>
    </section>
@endsection
