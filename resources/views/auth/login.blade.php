<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    

        <form method="POST" action="{{ route('login') }}">
            <div class="font-bold">
                Masuk ke akun anda
            </div>
            @csrf
            <x-input label="No HP" name="nohp" type="text" required />
            <x-input-error :messages="$errors->get('nohp')" class="mt-2" />
            <x-input label="Password" name="password" type="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <div class="flex justify-between items-center mt-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="mr-2"> Ingat Saya
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-[#00593b] hover:underline">Lupa Password?</a>
            </div>
            <x-button class="w-full mt-4">Masuk</x-button>
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
            Butuh bantuan? <a href="https://wa.me/6285842716803" target="_blank" class="text-[#00593b] hover:underline">Hubungi bantuan teknis</a>
        </p>
</x-guest-layout>
