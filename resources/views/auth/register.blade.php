<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <br><p align=center><img src="./storage/ebk/LOG IN.png" alt height="60%" width="75%">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="ic" :value="__('Kad Pengenalan')" />

                <x-input id="ic" class="block mt-1 w-full" type="text" name="ic"  required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('E-mel')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Kata Laluan')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Sah Kata Laluan')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mt-4">
                <x-label for="jawatan" :value="__('Jawatan')" />

                <x-input id="jawatan" class="block mt-1 w-full" type="text" name="jawatan"  required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="gred" :value="__('Gred Jawatan')" />

                <x-input id="gred" class="block mt-1 w-full" type="text" name="gred"  required autofocus />
            </div>

            <!-- Select Option Rol type -->
            <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Daftar sebagai:') }}" />
                            <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="admin">Admin</option>
                                <!--<option value="pp">Penolong Pengarah</option>
                                <option value="kpp">Ketua Penolong Pengarah</option>
                                <option value="kppk">Ketua Penolong Pengarah Kanan</option>
                                <option value="pengarah">Pengarah</option>-->
                                <option value="pyd">Pegawai Yang Dinilai</option>
                            </select>
            </div>

            <div class="mt-4">
                            <x-label for="sektor" value="{{ __('Sektor:') }}" />
                            <select name="sektor" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="Sektor Pengurusan Maklumat">Sektor Perancangan dan Pengurusan PPD</option>
                                <option value="Sektor Pengurusan">Sektor Pembelajaran</option>
                                <option value="Sektor Perancangan Dan Pengurusan PPD">Sektor Pengurusan Sekolah</option>
                                <option value="Sektor Sumber Manusia">Sektor Pembangunan Murid</option>
                                <option value="Sektor Integriti">Sektor Pendidikan Islam</option>
                                <option value="Sektor Integriti">Sektor Pendidikan Khas</option>
                                <option value="Sektor Integriti">Sektor Sumber Teknologi Pendidikan</option>
                                <option value="Sektor Integriti">Sektor Pentaksiran Dan Peperiksaan</option>
                                <option value="Sektor Integriti">Sektor Pengurusan Maklumat</option>
                                <option value="Sektor Integriti">Sektor Sumber Manusia</option>
                                <option value="Sektor Integriti">Sektor Infrastuktur Dan Perolehan</option>
                                <option value="Sektor Integriti">Sektor Pengurusan</option>
                                <option value="Sektor Integriti">Sektor Psikologi Dan Kaunseling</option>
                                <option value="Sektor Integriti">Sektor Integriti</option>
                            </select>

            </div>

            <div class="mt-4">
                            <x-label for="unit" value="{{ __('Unit:') }}" />
                            <select name="unit" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="">--</option>
                                <option value="Unit Rendah">Unit Bahasa</option>
                                <option value="Unit Menengah">Unit Sains Dan Matematik</option>
                                <option value="Unit Swasta">Unit Sains Sosial</option>
                                <option value="Unit Khas">Unit Teknik Dan Vokasional</option>
                                <option value="Unit Khas">Unit Teknologi Maklumat Dan Komunikasi </option>
                                <option value="Unit Khas">Unit Prasekolah Dan Rendah</option>
                                <option value="Unit Khas">Unit Menengah Dan Tingkatan 6</option>
                                <option value="Unit Khas">Unit Pendidikan Swasta</option>
                                <option value="Unit Khas">Unit Sekolah Jenis Khas</option>
                                <option value="Unit Khas">Unit Hal Ehwal Murid</option>
                                <option value="Unit Khas">Unit Pembangunan Bakat Murid</option>
                                <option value="Unit Khas">Unit Pusat Koku</option>
                                <option value="Unit Khas">Unit Perancangan Dan Pembangunan Pendidikan Islam</option>
                                <option value="Unit Khas">Unit Perjawatan Dan Perkhidmatan</option>
                                <option value="Unit Khas">Unit Pengurusan Bakat</option>
                                <option value="Unit Khas">Unit Pembangunan Dan Pengurusan Infrastuktur</option>
                                <option value="Unit Khas">Unit Kewangan</option>
                                <option value="Unit Khas">Unit Akaun</option>
                                <option value="Unit Khas">Unit Pentadbiran</option>

                            </select>

            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah daftar?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Daftar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
