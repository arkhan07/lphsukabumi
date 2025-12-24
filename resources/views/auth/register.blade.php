<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Role Selection -->
            <div class="mt-4">
                <x-label for="role" :value="__('Daftar Sebagai')" />

                <select id="role" name="role" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="pelaku_usaha" {{ old('role') == 'pelaku_usaha' ? 'selected' : '' }}>Pelaku Usaha</option>
                    <option value="penyedia_halal" {{ old('role') == 'penyedia_halal' ? 'selected' : '' }}>Penyedia Halal</option>
                    <option value="admin_lph" {{ old('role') == 'admin_lph' ? 'selected' : '' }}>Admin LPH</option>
                    <option value="manajer_teknis" {{ old('role') == 'manajer_teknis' ? 'selected' : '' }}>Manajer Teknis</option>
                    <option value="auditor_halal" {{ old('role') == 'auditor_halal' ? 'selected' : '' }}>Auditor Halal</option>
                </select>

                <p class="mt-2 text-sm text-gray-600">
                    <strong>Pelaku Usaha:</strong> Untuk mengajukan sertifikasi halal<br>
                    <strong>Penyedia Halal:</strong> Untuk verifikasi internal<br>
                    <strong>Admin LPH:</strong> Untuk admin operasional<br>
                    <strong>Manajer Teknis:</strong> Untuk penugasan auditor<br>
                    <strong>Auditor Halal:</strong> Untuk melakukan audit eksternal
                </p>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
