<nav class="bg-white border-gray-200 sticky top-0 z-10 shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="md:w-1/5 w-2/5 flex items-center">
            <span class="text-2xl font-bold text-darkteal">LPH Doa Bangsa</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-darkgreen rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col text-xl font-semibold p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:gap-5 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded"
                        aria-current="page">Beranda</a>
                </li>
                <li class="">
                    <button id="dropdownNavbarLink1" data-dropdown-toggle="dropdownNavbar1"
                        class="flex items-center justify-between w-full py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded">Layanan
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown Layanan -->
                    <div id="dropdownNavbar1"
                        class="z-10 hidden font-normal bg-white border border-gray-200 rounded-lg shadow-lg w-56">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownNavbarLink1">
                            <li>
                                <a href="{{ route('sertifikasi-halal') }}" class="block px-4 py-2 hover:bg-gray-100 hover:text-darkteal">
                                    Sertifikasi Halal
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('audit-halal') }}" class="block px-4 py-2 hover:bg-gray-100 hover:text-darkteal">
                                    Audit Halal
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('konsultasi-halal') }}" class="block px-4 py-2 hover:bg-gray-100 hover:text-darkteal">
                                    Konsultasi Halal
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pelatihan-halal') }}" class="block px-4 py-2 hover:bg-gray-100 hover:text-darkteal">
                                    Pelatihan Halal
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('fitur') }}"
                        class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded">Tentang</a>
                </li>
                <li>
                    <a href="{{ route('harga') }}"
                        class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded">Biaya</a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}"
                        class="block py-2 px-2 text-darkteal hover:bg-darkteal hover:text-white rounded">Kontak</a>
                </li>
                @auth
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                        Dashboard</a>
                </li>
                @else
                <li>
                    <a href="{{ route('login') }}"
                        class="bg-darkteal py-2 px-7 font-medium text-white text-center transform hover:scale-110 duration-150 rounded-md">
                        Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<script>
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('[data-collapse-toggle="navbar-dropdown"]');
    const menu = document.getElementById('navbar-dropdown');

    if (button && menu) {
        button.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    }

    // Dropdown toggle
    const dropdownButton = document.getElementById('dropdownNavbarLink1');
    const dropdownMenu = document.getElementById('dropdownNavbar1');

    if (dropdownButton && dropdownMenu) {
        dropdownButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    }
});
</script>
