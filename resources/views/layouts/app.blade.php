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
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
        <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    </head>
    <body class="font-sans antialiased">

        {{-- Styling untuk dataTable --}}
        <style>
            /* Styling untuk search input */
            .dataTables_filter input {
                border: 1px solid #D1D5DB; /* border-gray-300 */
                border-radius: 0.375rem; /* rounded-md */
                padding: 0.25rem 0.75rem; /* px-3 py-1 */
                font-size: 0.875rem; /* text-sm */
            }

            /* Styling untuk dropdown entries */
            .dataTables_length select {
                border: 1px solid #D1D5DB; /* border-gray-300 */
                border-radius: 0.375rem; /* rounded-md */
                padding: 0.25rem 0.5rem; /* px-2 py-1 */
                font-size: 0.875rem; /* text-sm */
            }

            /* Styling untuk pagination */
            .dataTables_paginate .paginate_button {
                border: 1px solid #D1D5DB; /* border-gray-300 */
                border-radius: 0.375rem; /* rounded-md */
                padding: 0.25rem 0.75rem; /* px-3 py-1 */
                font-size: 0.875rem; /* text-sm */
                margin: 0 0.25rem; /* mx-1 */
                background-color: white; /* bg-white */
                color: #374151; /* text-gray-700 */
            }

            .dataTables_paginate .paginate_button:hover {
                background-color: #F3F4F6; /* hover:bg-gray-100 */
            }

            /* Styling untuk tombol aktif di pagination */
            .dataTables_paginate .paginate_button.current {
                background-color: #3B82F6; /* bg-blue-500 */
                color: white;
                border-color: #3B82F6;
            }

            /* Styling untuk info */
            .dataTables_info {
                color: #4B5563; /* text-gray-600 */
                font-size: 0.875rem; /* text-sm */
                margin-top: 0.5rem; /* mt-2 */
            }

        </style>
        
        <div class="flex flex-col">
            <!-- Page Content -->
            @include('layouts.navigation')

            @include('layouts.sidebar')
            <main class="p-2 sm:ml-44">
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
                        <div class="bg-white shadow-lg rounded-lg border-t-4 p-4 border-[#00593b]">
                            @yield('content')
                        </div>                        
                    </div>
                </div>
            </main>
        </div>

        {{-- <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script> --}}
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable({
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json"
                    },
                    "paging": true,    // Aktifkan pagination
                    "searching": true, // Aktifkan search box
                    "info": true,      // Aktifkan informasi tampilan data
                    "lengthMenu": [5, 10, 25, 50, 100], // Pilihan jumlah baris per halaman
                    "pageLength": 5, // Jumlah baris awal yang ditampilkan
                    "ordering": false
                });
            });
        </script>
    </body>
</html>