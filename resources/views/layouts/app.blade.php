<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 ">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"/>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- jQuery (Wajib, sebelum DataTables) -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- DataTables CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
        <!-- Tambahkan Bootstrap & Date Range Picker -->
        <!-- jQuery harus dipanggil dulu -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.js"></script>

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script
            src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

        <!-- Select2 CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css"
            rel="stylesheet"/>
        <script
            src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
            defer="defer"></script>

            {{-- flowbite --}}
            <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

        {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> --}}
        {{-- @livewireStyles --}}
    </head>

    <body
        class="font-sans antialiased"
        x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
        x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">

        {{-- @include('layouts.preloader') --}}

        <div class="flex h-screen overflow-hidden">
            @include('layouts.side')

            <!-- Page Content -->
            <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
                {{-- @include('layouts.overlay') --}}
                @include('layouts.header')
                <main class="">
                    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
                        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                            <h2
                              class="text-xl font-semibold text-gray-800 dark:text-white/90"
                              x-text="pageName"
                            ></h2>
                          
                            <nav>
                              <ol class="flex items-center gap-1.5">
                                <li>
                                  <a
                                    class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                                    href="{{ route('dashboard') }}"
                                  >
                                    Dashboard
                                    <svg
                                      class="stroke-current"
                                      width="17"
                                      height="16"
                                      viewBox="0 0 17 16"
                                      fill="none"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366"
                                        stroke=""
                                        stroke-width="1.2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                      />
                                    </svg>
                                  </a>
                                </li>
                                @if(View::hasSection('main_folder'))
                                <li
                                    class="text-sm text-gray-800 dark:text-white/90"
                                >@yield('main_folder')</li>
                                @endif
                              </ol>
                            </nav>
                          </div>                          
                            @yield('content')
                    </div>
                </main>
            </div>
        </div>

    {{-- <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "responsive": true, // Aktifkan fitur responsif
                "autoWidth": false, // Hindari lebar otomatis agar lebih fleksibel
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json"
                },
                "paging": true,
                "searching": true,
                "info": true,
                "lengthMenu": [
                    5, 10, 25, 50, 100
                ],
                "pageLength": 5,
                "ordering": false
            });
        });
    </script>

   


    {{-- @livewireScripts --}}
    
</body>

</html>
