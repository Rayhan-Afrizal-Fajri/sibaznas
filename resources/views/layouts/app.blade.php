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
        <div class="flex flex-col">
            @include('layouts.navigation') @include('layouts.sidebar')
            <!-- Page Content -->
            <main class="p-2 sm:ml-64">
                <div class="p-4 mt-12">
                    <div class="flex flex-wrap justify-between gap-y-2 sm:flex-row flex-col">
                        <!-- Breadcrumb -->
                        <nav class="w-full sm:w-auto" aria-label="Breadcrumb">
                            <ol
                                class="flex flex-wrap items-center gap-2 md:gap-3 text-xs sm:text-sm md:text-md">
                                <li class="flex items-center">
                                    <a
                                        href="{{ route('dashboard') }}"
                                        class="font-regular text-gray-700 hover:text-blue-600">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="text-gray-400">/</li>
                                @if (View::hasSection('main_folder'))
                                <li class="flex items-center">
                                    <a
                                        href="#"
                                        class="font-regular text-gray-700 hover:text-blue-600">
                                        @yield('main_folder')
                                    </a>
                                </li>
                                @endif @if (View::hasSection('sub_folder'))
                                <li class="text-gray-400">/</li>
                                <li aria-current="page">
                                    <span class="font-regular text-gray-500">@yield('sub_folder')</span>
                                </li>
                                @endif
                            </ol>
                        </nav>

                        <!-- Tanggal -->
                        <div
                            class="w-full sm:w-auto text-xs sm:text-sm md:text-md text-gray-700">
                            <p class="text-left">
                                {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
                            </p>
                        </div>
                    </div>
                    <!-- Container Hijau di Belakang -->
                    <div class="mt-4">
                        <!-- Container Putih di Depan -->
                        <div class="bg-white shadow-lg rounded-lg  min-h-screen border-t-4 p-4 border-[#00593b]">
                            @yield('content')
                        </div>                        
                    </div>

                </div>
            </main>
        </div>
    </body>
</html>