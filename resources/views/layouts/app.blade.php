<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col">
            @include('layouts.navigation')
    
            <!-- Page Content -->
            <main class="flex-grow px-6 sm:px-20">
                {{ $slot }}
            </main>
    
            <!-- Footer -->
            <footer class="bg-[#00593b] text-white text-center py-6 mt-8 border-b-4 border-yellow-500">
                <div class="container mx-auto">
                    <a href="https://baznas-cilacap.or.id/" target="_blank" class="text-sm">&copy; {{ date('Y') }} BAZNAS CILACAP</a>
                </div>
            </footer>
        </div>
    </body>    
</html>
