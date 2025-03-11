<x-app-layout>
    @section('main_folder', 'Permohonan')
    {{-- @section('main_folder-link', '#') --}}

    @section('content')

        <style>
            /* Beri margin pada search box dan dropdown show entries */
            .dataTables_wrapper .dataTables_filter,
            .dataTables_wrapper .dataTables_length {
                margin-bottom: 15px;
            }

            /* Beri jarak antara tabel dan pagination */
            .dataTables_wrapper .dataTables_paginate {
                margin-top: 5px;
            }

            .dataTables_length select {
                width: 50px;
                /* Ubah ukuran select dropdown */
                margin-right: 10px;
                /* Tambahkan jarak ke kanan */
            }

            .dataTables_filter input {
                width: 150px;
                /* Ubah ukuran kotak pencarian */
            }

            /* Gunakan flexbox agar info dan pagination sejajar */
            .dataTables_wrapper .row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                /* Supaya sejajar vertikal */
                flex-wrap: nowrap;
                width: 100%;
            }

            /* Pastikan info dan pagination berada dalam satu baris */
            .dataTables_info {
                flex: 1;
                display: flex;
                align-items: center;
            }

            /* Atur pagination agar sejajar */
            .dataTables_paginate {
                display: flex;
                justify-content: flex-end;
                flex: 1;
                align-items: center;
            }

            /* Perkecil ukuran tombol pagination */
            .dataTables_paginate .paginate_button {
                padding: 3px 7px;
                font-size: 12px;
                min-width: 28px;
                height: 28px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 4px;
            }

            /* Styling tombol aktif */
            .dataTables_paginate .paginate_button.current {
                background-color: #007bff;
                color: white;
                font-weight: bold;
                border-radius: 4px;
            }

            td {
                vertical-align: top;
            }

            .custom-scrollbar::-webkit-scrollbar {
                width: 8px;
                /* Lebar scrollbar diperkecil */
            }

            .custom-scrollbar::-webkit-scrollbar-track {
                background: #f1f1f1;
                /* Warna background track scrollbar */
                border-radius: 10px;
                /* Membuat sudut track scrollbar lebih rounded */
            }

            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #888;
                /* Warna scrollbar */
                border-radius: 10px;
                /* Membuat sudut scrollbar lebih rounded */
            }

            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #555;
                /* Warna scrollbar saat hover */
            }

            /* Mengatur font seluruh DataTables */
            .dataTables_wrapper {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-size: 12px;
            }

            /* Mengatur ukuran font untuk tabel */
            .dataTable {
                font-family: inherit;
                font-size: inherit;
            }

            /* Mengatur ukuran font untuk elemen Search dan Show Entries */
            .dataTables_length label,
            .dataTables_filter label {
                font-size: 12px;
            }

            /* Mengatur ukuran font untuk pagination */
            .dataTables_info,
            .dataTables_paginate {
                font-size: 12px;
            }

            /* Mengatur ukuran font untuk tombol pagination */
            .dataTables_paginate .paginate_button {
                font-size: 12px;
            }

            /* Mengatur ukuran dropdown "Show Entries" */
            .dataTables_length select {
                width: 50px !important;
                /* Lebar dropdown */
                height: 28px !important;
                /* Tinggi dropdown */
                font-size: 12px !important;
                /* Ukuran teks */
                padding: 2px 5px !important;
                /* Padding dalam dropdown */
            }

            /* Mengatur ukuran input "Search" */
            .dataTables_filter input {
                width: 120px !important;
                /* Lebar input */
                height: 28px !important;
                /* Tinggi input */
                font-size: 12px !important;
                /* Ukuran teks */
                padding: 2px 5px !important;
                /* Padding dalam input */
            }

            #sub-program-select {
                width: 100% !important;
            }

            .select2-container {
                width: 100% !important;
            }

            /* Mengatur ukuran dropdown Select2 */
            .select2-container--default .select2-selection--single {
                height: 30px !important;
                /* Sesuaikan tinggi */
                font-size: 12px !important;
                /* Sesuaikan ukuran font */
            }

            /* Mengatur tinggi dropdown */
            .select2-dropdown {
                font-size: 12px !important;
                /* Sesuaikan ukuran font */
            }

            /* Mengatur tinggi hasil pencarian */
            .select2-results__option {
                font-size: 12px !important;
                /* Sesuaikan ukuran font */
                padding: 5px 10px !important;
                /* Sesuaikan padding */
            }

            /* Mengatur tinggi input pencarian */
            .select2-search__field {
                font-size: 12px !important;
                /* Sesuaikan ukuran font */
                height: 25px !important;
                /* Sesuaikan tinggi */
            }
        </style>


        <div class="mb-2 text-[#00593b]">
            Data Permohonan
        </div>


        @if ($filter_permohonan == 'on')
            <livewire:permohonan :c_filter_daterange="$c_filter_daterange" :c_filters_fo="$c_filters_fo" :c_filters_atasan="$c_filters_atasan" :c_filters_survey="$c_filters_survey" :c_filters_pencairan="$c_filters_pencairan"
                :c_filters_lpj="$c_filters_lpj" :filter_permohonan="$filter_permohonan">
            @else
                <livewire:permohonan :filter_permohonan="$filter_permohonan">
        @endif

    @endsection
</x-app-layout>
