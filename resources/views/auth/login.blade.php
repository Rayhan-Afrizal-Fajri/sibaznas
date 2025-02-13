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

        <!-- Email Address -->
        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> --}}
    {{-- </form> --}}
</x-guest-layout>
