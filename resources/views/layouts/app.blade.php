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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- jQuery (Wajib, sebelum DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <!-- Tambahkan Bootstrap & Date Range Picker -->
    <!-- jQuery harus dipanggil dulu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery & Select2 JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

</head>

<body class="font-sans antialiased">

    <div class="flex flex-col">
        <!-- Page Content -->
        @include('layouts.navigation')
        @include('layouts.sidebar')
        <main class="p-2 sm:ml-40">
            <div class="p-4 mt-12">
                <div class="flex flex-wrap justify-between gap-y-2 sm:flex-row flex-col">
                    <!-- Breadcrumb -->
                    <nav class="w-full sm:w-auto" aria-label="Breadcrumb">
                        <ol class="flex flex-wrap items-center gap-2 md:gap-3 text-xs sm:text-sm md:text-md">
                            <li class="flex items-center">
                                <a href="{{ route('dashboard') }}"
                                    class="font-regular text-gray-700 hover:text-blue-600">
                                    Dashboard
                                </a>
                            </li>
                            <li class="text-gray-400">/</li>
                            @if (View::hasSection('main_folder'))
                                <li class="flex items-center">
                                    <a href="#" class="font-regular text-gray-700 hover:text-blue-600">
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
                    <div class="w-full sm:w-auto text-[10px] sm:text-[12px] text-gray-700">
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

    <script>
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
        }
    </script>
</body>

</html>
