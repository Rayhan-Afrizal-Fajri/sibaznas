<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col">
            {{-- navigation --}}
            <nav x-data="{ open: false }" class="bg-white">
                <!-- Primary Navigation Menu -->
                <div class="flex flex-col max-w-7xl mx-auto pt-6 px-6 sm:px-20">
                    <div class="flex flex-col sm:flex-row items-center justify-between h-28">
                        <div class="flex items-center justify-center gap-2 sm:gap-6">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('home') }}">
                                    <img
                                        src="{{ asset('build/images/Logo-Baznas-Cilacap-tmb 1.png') }}"
                                        alt="Baznas Cilacap"
                                        class="w-16 sm:w-20">
                                </a>
                            </div>
                            <div>
                                <h1 class="text-md sm:text-2xl font-bold text-[#00593b]">SIBAZNAS CILACAP</h1>
                                <p class="text-sm sm:text:xl text-[#00593b]">SISTEM INFORMASI BAZNAS CILACAP</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 sm:gap-0">
                            <!-- Navigation Links -->
                            <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <x-nav-link
                                    :href="route('home')"
                                    :active="request()->routeIs('home')">
                                    {{ __('Home') }}
                                </x-nav-link>
                            </div>

                            <div
                                class="text-sm  text-[#00593b] space-x-8 sm:-my-px  sm:ms-10 sm:flex border-b-2 border-transparent hover:border-[#00593b]">
                                <a href="https://wa.me/6285842716803" target="_blank" rel="noopener noreferrer">Bantuan Teknis</a>
                            </div>
                        </div>
                    </div>
                    <hr class="border-yellow-500 my-2">
                    <div class="flex items-center ml-auto">
                        <!-- Settings Dropdown -->
                        <div class="sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <!-- Gambar Profil atau Inisial -->
                                        @if(Auth::user()->profile_photo)
                                        <img
                                            src="{{ Auth::user()->profile_photo }}"
                                            alt="Avatar"
                                            class="w-10 h-10 rounded-full object-cover">
                                        @else
                                        <div
                                            class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 font-semibold">
                                            {{ strtoupper(substr(Auth::user()->nama, 0, 2)) }}
                                        </div>
                                        @endif

                                        <!-- Nama & Email -->
                                        <div class="flex flex-col ms-3 text-left">
                                            <span class="text-gray-700 font-semibold">{{ Auth::user()->nama }}</span>
                                            <span class="text-gray-500 text-xs">{{ Auth::user()->pengurus->jabatan->jabatan }}</span>
                                        </div>

                                        <!-- Icon Dropdown -->
                                        <div class="ms-2">
                                            <svg
                                                class="fill-current h-4 w-4"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewbox="0 0 20 20">
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </button>

                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link
                                            :href="route('logout')"
                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>

                        <!-- Hamburger -->
                        {{-- <div class="-me-2 flex items-center sm:hidden">
                                        <button
                                            @click="open = ! open"
                                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <path
                                                    :class="{'hidden': open, 'inline-flex': ! open }"
                                                    class="inline-flex"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4 6h16M4 12h16M4 18h16"/>
                                                <path
                                                    :class="{'hidden': ! open, 'inline-flex': open }"
                                                    class="hidden"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                        </button>
                                    </div> --}}
                    </div>
                </div>
            </nav>
            <!-- Page Content -->
            <main class="flex-grow px-6 sm:px-20">
                <div class="py-4">
                    <div class="max-w-7xl mx-auto">
                        <div class="flex flex-col sm:flex-row justify-between">
                            <div class=" w-full sm:w-1/2">
                                <p class="text-left mt-4 sm:mt-6 text-sm sm:text-md font-regular text-[#00593b]">
                                    {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
                                </p>
                                <p class="text-left mt-2 sm:mt-6 text-xl smtext-2xl font-bold text-[#00593b]">
                                    Efektif, Akuntabel, dan Transparan <br>
                                    SIBAZNAS untuk Manajemen yang Lebih Baik
                                </p>
                                <div class="flex items-center mt-2 sm:mt-6">
                                <div class="flex gap-0 sm:gap-1 mr-2 sm:mr-4">
                                        <a
                                            href="https://www.instagram.com/baznascilacap?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                            target="_blank">
                                            <img src="{{ asset('build/icons/ig.png') }}" alt="Instagram" class="w-6 sm:w-8 h-6 sm:h-8"></a>
                                        <a href="https://www.tiktok.com/@baznaskab.cilacap_?is_from_webapp=1&sender_device=pc" target="_blank">
                                            <img src="{{ asset('build/icons/tw.png') }}" alt="TikTok" class="w-6 sm:w-8 h-6 sm:h-8"></a>
                                        <a href="https://www.facebook.com/BaznasKabCilacap/" target="_blank">
                                            <img src="{{ asset('build/icons/fb.png') }}" alt="Facebook" class="w-6 sm:w-8 h-6 sm:h-8"></a>
                                        <a href="https://wa.me/6285842716803" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('build/icons/wa.png') }}" alt="WhatsApp" class="w-6 sm:w-8 h-6 sm:h-8"></a>
                                    </div>
            
                                    <a href="https://baznas-cilacap.or.id/" target="_blank" class="text-md sm:text-xl text-[#00593b] font-medium">BAZNAS CILACAP</a>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-2 mt-6 w-full sm:w-1/2">
                                @php
                                    $isDisabled = auth()->user()->driver_id ? 'pointer-events-none opacity-50' : '';
                                @endphp
                                <a href="{{ route('dashboard') }}" class="w-full px-4 py-4 bg-[#00593b] text-white rounded-lg shadow-md hover:bg-green-800 transition flex flex-col justify-center {{ $isDisabled }}">
                                        <h3 class="text-2xl font-bold">E-DISDAY</h3>
                                        <p class="text-md font-medium mt-2">Data Permohonan / Disday</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6 mt-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                </a>
            
                                <a href="#" class="w-full px-6 py-4 bg-[#00593b] text-white rounded-lg shadow-md hover:bg-green-800 transition flex flex-col justify-center">
                                    <button>
                                        <h3 class="text-2xl font-bold">E-AMBULANCE</h3>
                                        <p class="text-md font-medium mt-2">Data Layanan Ambulance</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6 mt-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>                              
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Footer -->
            <footer
                class="bg-[#00593b] text-white text-center py-6 mt-8 border-b-4 border-yellow-500">
                <div class="container mx-auto">
                    <a href="https://baznas-cilacap.or.id/" target="_blank" class="text-sm">&copy;
                        {{ date('Y') }}
                        BAZNAS CILACAP</a>
                </div>
            </footer>
        </div>
    </body>
</html>