<x-guest-layout>
    <div class="my-2 font-bold"> Lupa Password? </div>
    <div class="mb-4 text-sm text-[#00593b]">
        {{ __('Kami akan mengirimkan notifikasi WA berisi link untuk melakukan reset passoword') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Nomor hp -->
        <div>
            <x-input-label for="nohp" :value="__('No HP')" />
            <x-text-input id="nohp" class="block mt-1 w-full" type="number" name="nohp" {{-- :value="old('nohp')" --}} />
            <x-input-error :messages="$errors->get('nohp')" class="mt-2" />
        </div>

        <div class="flex item-center justify-center mt-4">
            <x-button class="w-full">
                {{ __('Lupa Password') }}
            </x-button>
        </div>
    </form>
    <div class="flex items-center justify-center mt-4">
        <a href="{{ route('login') }}" class="bg-[#F5F5F5] text-[#00593b] px-4 py-2 rounded-md hover:bg-white w-full flex justify-center">
            {{ __('Kembali') }}
        </a>
    </div>
</x-guest-layout>
