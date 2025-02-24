<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex lg:min-h-screen">

        <div class="w-[70%] bg-[#00593b] flex flex-col justify-center text-white p-36 border-yellow-500 hidden sm:block" style="border-left-width: 16px">
            <div class="flex items-center">
                <img src="{{ asset('build/images/Logo-Baznas-Cilacap-tmb 1.png') }}" alt="BAZNAS Cilacap" class="w-24 mr-4 bg-white p-2 rounded-2xl">
                <div>
                    <h1 class="text-2xl font-bold">e-DisDay</h1>
                    <p class="text-xl">Pendistribusian & Pemberdayaan</p>
                </div>
            </div>           
            <p class="text-left mt-6 text-2xl font-regular">
                Efektif, Akuntabel, dan Transparan <br> 
                e-DisDay untuk Manajemen yang Lebih Baik
            </p>
    
            <div class="flex items-center mt-6">
                <div class="flex gap-3 mr-4">
                    <img src="{{ asset('build/icons/ig.png') }}" alt="Instagram" class="w-8 h-8">
                    <img src="{{ asset('build/icons/tw.png') }}" alt="TikTok" class="w-8 h-8">
                    <img src="{{ asset('build/icons/fb.png') }}" alt="Facebook" class="w-8 h-8">
                    <img src="{{ asset('build/icons/wa.png') }}" alt="WhatsApp" class="w-8 h-8">
                </div>
        
                <p class="text-xl font-medium">BAZNAS CILACAP</p>
            </div>
        </div>
        <div class="flex justify-center items-center bg-white px-4 sm:px-4 py-4 sm:py-6">
            <div class="max-w-md mx-8">
                <div class="text-center mb-6">
                    <img src="{{ asset('build/images/Logo-Baznas-Cilacap-tmb 1.png') }}" alt="BAZNAS Cilacap" class="w-24 mx-auto">
                    <h2 class="text-2xl font-bold text-[#00593b]">Selamat datang di e-DisDay</h2>
                    <p class="text-md text-[#00593b]">Pendistribusian & Pemberdayaan</p>
                    <hr class="border-yellow-500 my-2 mx-28">
                </div>
            {{ $slot }}
            </div>
        </div>
    </body>
</html>
