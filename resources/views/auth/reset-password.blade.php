<x-guest-layout>
    <div class="font-bold">
        Reset password
    </div>

    <div class="font-regular text-[#00593b] mt-2">
        Masukkan password baru untuk akun anda
    </div>
    <form method="GET" action="{{ route('login') }}">
        @csrf

        <!-- Password Reset Token -->
        {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}


        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password Baru')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="w-full mt-4">Simpan</x-button>
        </div>
    </form>
    <p class="text-center text-sm text-gray-600 mt-4">
        Butuh bantuan? <a href="https://wa.me/6285842716803" target="_blank" class="text-[#00593b] hover:underline">Hubungi bantuan teknis</a>
    </p>
</x-guest-layout>
