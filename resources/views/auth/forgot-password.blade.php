<x-guest-layout>
    <div class="my-2 font-bold"> Lupa Password? </div>
    <div class="mb-4 text-sm text-[#00593b]">
        {{ __('Kami akan mengirimkan notifikasi WA berisi link untuk melakukan reset passoword') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="GET" action="{{ route('dumb-forgot-password') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="no_hp" :value="__('No HP')" />
            <x-text-input id="no_hp" class="block mt-1 w-full" type="number" name="no_hp" {{-- :value="old('no_hp')" --}} />
            <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
        </div>

        <div class="flex item-center justify-center mt-4">
            <x-button class="w-full">
                {{ __('Lupa Password') }}
            </x-button>
        </div>
    </form>
    <div class="flex items-center justify-center mt-4">
        <button onclick="window.history.back()" class="bg-[#F5F5F5] text-[#00593b] px-4 py-2 rounded-md hover:bg-white w-full">
            {{ __('Kembali') }}
        </button>
    </div>
</x-guest-layout>
