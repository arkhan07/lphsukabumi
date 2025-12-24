<footer class="py-20 bg-[#0E524210]">
    <div class="w-5/6 mx-auto">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 justify-center font-semibold text-darkgreen md:gap-0 gap-y-10 gap-x-5">
            <a href="{{ route('beranda') }}" class="w-[200px] mx-auto">
                <img src="../img/saffmedicbiglogo.webp" width="100%" alt="Saffmedic">
            </a>

            <div class="w-[180px] mx-auto md:me-0">
                <h1 class="text-4xl">Fitur</h1>
                <ul class="flex flex-col gap-2 font-normal mt-5">
                    <li><a href="{{ route('beranda') }}" class="hover:underline">Admisi</a></li>
                    <li><a href="{{ route('keuangan') }}" class="hover:underline">Keuangan</a></li>
                    <li><a href="{{ route('laboratorium') }}" class="hover:underline">Integrasi</a></li>
                    <li><a href="{{ route('antrian') }}" class="hover:underline">Antrian</a></li>
                    <li><a href="{{ route('penunjang') }}" class="hover:underline">Penunjang</a></li>
                    <li><a href="{{ route('farmasi') }}" class="hover:underline">Farmasi</a></li>
                    <li><a href="{{ route('fitur') }}" class="hover:underline">B to B</a></li>
                </ul>
            </div>

            <div class="w-[180px] mx-auto">
                <h1 class="text-4xl">Solusi</h1>
                <ul class="flex flex-col gap-2 font-normal mt-5">
                    <li><a href="{{ route('praktek-dokter') }}" class="hover:underline">Praktek Dokter</a></li>
                    <li><a href="{{ route('klinik') }}" class="hover:underline">Klinik Kesehatan</a></li>
                    <li><a href="{{ route('rumah-sakit') }}" class="hover:underline">Rumah Sakit</a></li>
                    <li><a href="{{ route('laboratorium') }}" class="hover:underline">Laboratorium</a></li>
                    <li><a href="{{ route('apotek') }}" class="hover:underline">Apotek</a></li>
                </ul>
            </div>

            <div class="w-[180px] mx-auto md:mx-0">
                <h1 class="text-4xl">Informasi</h1>
                <ul class="flex flex-col gap-2 font-normal mt-5">
                    <li><a href="{{ route('kontak') }}" class="hover:underline">Alamat</a></li>
                    <li><a href="{{ route('ketentuan') }}" class="hover:underline">Syarat & Ketentuan</a></li>
                    <li><a href="{{ route('artikel') }}" class="hover:underline">Artikel</a></li>
                    <li><a href="#" class="hover:underline">Blog</a></li>
                    <li><a href="{{ route('mitra') }}" class="hover:underline">Bisnis</a></li>
                    <li><a href="https://my.saffix.id/index.php?rp=/announcements/page/1" class="hover:underline">Update</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<footer class="py-20 bg-darkgreen">
    <div class="w-5/6 mx-auto">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 justify-center font-semibold text-white md:gap-0 gap-y-10 gap-x-5">
            <div class="w-[200px] mx-auto hidden md:block">
                <img src="../img/none.png" width="100%" alt="Saffmedic">
            </div>

            <div class="w-[180px] mx-auto md:me-0 order-1 md:order-none">
                <h1 class="text-2xl">Sosial Media</h1>
                <ul class="font-normal mt-5">
                    <li class="mb-5">
                        <a href="https://www.instagram.com/saffmedic/" class="flex items-center gap-2 hover:underline">
                            <img src="../img/instagram-icon.webp" width="35" alt="">
                            <span>SAFFMedic</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/saffmedic" class="flex items-center gap-2 hover:underline">
                            <img src="../img/facebook-icon.webp" width="35" alt="">
                            <span>SAFFMedic</span>
                        </a>
                    </li>
                </ul>

                <div class="text-2xl text-center my-10">
                    <h1 class="mb-5">Terdaftar</h1>
                    <ul>
                        <li>
                            <img src="../img/qr.webp" width="200" alt="">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-[180px] mx-auto">
                <h1 class="text-2xl">Quick Link</h1>
                <ul class="flex flex-col gap-2 font-normal mt-5">
                    <li><a href="https://saffix.id/" class="hover:underline">SAFFix.id</a></li>
                    <li><a href="https://payou.asia/" class="hover:underline">PaYou.asia</a></li>
                    <li><a href="https://payouhr.com/" class="hover:underline">PaYouhr.com</a></li>
                </ul>
            </div>

            <div class="md:w-[250px] w-[180px] mx-auto md:mx-0">
                <h1 class="text-2xl">Company Member</h1>
                <ul class="font-normal mt-5">
                    <li>
                        <a href="https://saffix.id/">
                            <img src="../img/saka-access-fix-icon.webp" width="100" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
