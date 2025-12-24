@extends('layout.app')

@section('content')
    <section class="container my-10 mx-auto p-5">
        <div class="md:w-4/5 mx-auto">
            <div class="text-center mb-10">
                <h1 class="md:text-4xl text-2xl font-bold text-darkteal mb-4">Hubungi Kami</h1>
                <p class="text-darkgreen md:w-3/4 mx-auto">
                    Kami siap membantu Anda dalam proses sertifikasi halal. Jangan ragu untuk menghubungi kami
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-10">
                <div class="bg-gray-100 rounded-xl p-8">
                    <h2 class="text-2xl font-bold text-darkteal mb-6">Informasi Kontak</h2>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-darkteal p-3 rounded-full text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-darkgreen mb-1">Alamat</h3>
                                <p class="text-deepturqoise">
                                    Jl. Raya Sukabumi No. 123<br>
                                    Sukabumi, Jawa Barat 43111<br>
                                    Indonesia
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-darkteal p-3 rounded-full text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-darkgreen mb-1">Telepon</h3>
                                <p class="text-deepturqoise">
                                    (0266) 123-4567<br>
                                    +62 812-3456-7890
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-darkteal p-3 rounded-full text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-darkgreen mb-1">Email</h3>
                                <p class="text-deepturqoise">
                                    info@lphdoabangsa.com<br>
                                    sertifikasi@lphdoabangsa.com
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-darkteal p-3 rounded-full text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-darkgreen mb-1">Jam Operasional</h3>
                                <p class="text-deepturqoise">
                                    Senin - Jumat: 08:00 - 16:00<br>
                                    Sabtu: 08:00 - 12:00<br>
                                    Minggu & Libur: Tutup
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-darkteal rounded-xl p-8 text-white">
                    <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>

                    <form class="space-y-4">
                        <div>
                            <label class="block mb-2 font-semibold">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-2 rounded-md text-gray-900" placeholder="Nama Anda">
                        </div>

                        <div>
                            <label class="block mb-2 font-semibold">Email</label>
                            <input type="email" class="w-full px-4 py-2 rounded-md text-gray-900" placeholder="email@example.com">
                        </div>

                        <div>
                            <label class="block mb-2 font-semibold">No. Telepon</label>
                            <input type="tel" class="w-full px-4 py-2 rounded-md text-gray-900" placeholder="08xx-xxxx-xxxx">
                        </div>

                        <div>
                            <label class="block mb-2 font-semibold">Pesan</label>
                            <textarea rows="4" class="w-full px-4 py-2 rounded-md text-gray-900" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-white text-darkteal py-3 rounded-md font-bold hover:bg-opacity-90 transition">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <div class="bg-gray-100 rounded-xl p-8">
                <h2 class="text-2xl font-bold text-darkteal mb-4 text-center">Lokasi Kami</h2>
                <div class="bg-white rounded-lg overflow-hidden" style="height: 400px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.60648784048!2d106.92395!3d-6.927397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68531d83fa0b1d%3A0x30c99bb4e899b679!2sSukabumi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1234567890" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
