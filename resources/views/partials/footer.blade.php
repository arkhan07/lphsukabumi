<footer class="py-20 bg-[#0E524210]">
    <div class="w-5/6 mx-auto">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 justify-center font-semibold text-darkgreen md:gap-0 gap-y-10 gap-x-5">
            <div class="w-[200px] mx-auto">
                <h1 class="text-3xl font-bold text-darkteal mb-3">LPH Doa Bangsa</h1>
                <p class="font-normal text-sm">Lembaga Pemeriksa Halal terpercaya di Sukabumi</p>
            </div>

            <div class="w-[180px] mx-auto md:me-0">
                <h1 class="text-2xl">Layanan</h1>
                <ul class="flex flex-col gap-2 font-normal mt-5">
                    <li><a href="{{ route('sertifikasi-halal') }}" class="hover:underline">Sertifikasi Halal</a></li>
                    <li><a href="{{ route('audit-halal') }}" class="hover:underline">Audit Halal</a></li>
                    <li><a href="{{ route('konsultasi-halal') }}" class="hover:underline">Konsultasi Halal</a></li>
                    <li><a href="{{ route('pelatihan-halal') }}" class="hover:underline">Pelatihan Halal</a></li>
                </ul>
            </div>

            <div class="w-[180px] mx-auto">
                <h1 class="text-2xl">Perusahaan</h1>
                <ul class="flex flex-col gap-2 font-normal mt-5">
                    <li><a href="{{ route('fitur') }}" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="{{ route('mitra') }}" class="hover:underline">Mitra</a></li>
                    <li><a href="{{ route('artikel') }}" class="hover:underline">Artikel</a></li>
                    <li><a href="{{ route('ketentuan') }}" class="hover:underline">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <div class="w-[180px] mx-auto md:mx-0">
                <h1 class="text-2xl">Kontak</h1>
                <ul class="flex flex-col gap-2 font-normal mt-5">
                    <li><a href="{{ route('kontak') }}" class="hover:underline">Alamat Kantor</a></li>
                    <li><a href="{{ route('whatsapp') }}" class="hover:underline">WhatsApp</a></li>
                    <li>Email: info@lphdoabangsa.com</li>
                    <li>Telp: (0266) 123-4567</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<footer class="py-10 bg-darkgreen">
    <div class="w-5/6 mx-auto">
        <div class="text-center text-white">
            <p class="text-sm">&copy; 2024 LPH Doa Bangsa Sukabumi. All rights reserved.</p>
            <p class="text-xs mt-2">Lembaga Pemeriksa Halal yang terdaftar dan diawasi oleh BPJPH</p>
        </div>
    </div>
</footer>
