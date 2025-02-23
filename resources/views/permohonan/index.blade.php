<x-app-layout>
    @section('main_folder', 'Permohonan')

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
        </style>

        <div class="mb-2 text-[#00593b]">
            Data Permohonan
        </div>
        <div class="w-full bg-white shadow px-2 pt-4 pb-3 border border-gray-200 rounded-lg mb-8">
            <div class="flex flex-col sm:flex-row gap-2 mb-2">
                <label class="w-full">
                    <input type="text" id="daterange"
                        class="border border-gray-300 rounded-lg px-4 py-2 w-full text-gray-700 text-xs font-medium text-center ">
                </label>
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        Status FO
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="kategori" onchange="this.form.submit()">
                        <option value="all" @if (request('kategori') == 'all') selected @endif>
                            Semua
                        </option>
                    </select>
                </label>
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        Acc Atasan
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="kategori" onchange="this.form.submit()">
                        <option value="all" @if (request('kategori') == 'all') selected @endif>
                            Semua
                        </option>
                    </select>
                </label>
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        Survey
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="kategori" onchange="this.form.submit()">
                        <option value="all" @if (request('kategori') == 'all') selected @endif>
                            Semua
                        </option>
                    </select>
                </label>
            </div>
            <div class="flex flex-col sm:flex-row gap-2">
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        Acc Keu
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="kategori" onchange="this.form.submit()">
                        <option value="all" @if (request('kategori') == 'all') selected @endif>
                            Semua
                        </option>
                    </select>
                </label>
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        LPJ
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="kategori" onchange="this.form.submit()">
                        <option value="all" @if (request('kategori') == 'all') selected @endif>
                            Semua
                        </option>
                    </select>
                </label>
                <label class="w-full">
                    <div class="w-full bg-gray-300 px-3 py-2 rounded-lg flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="size-4 text-gray-700">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke="currentColor"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <span class="text-xs font-light text-gray-700">Refresh Filter</span>
                    </div>
                </label>
                <div class="w-full">
                    <div class="w-full flex items-center gap-2">
                        <button id="openModal-addPermohonan"
                            class="w-full bg-[#00593b] px-3 py-2 text-xs font-semibold text-white rounded-lg flex justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 text-white">
                                <path fill-rule="evenodd"
                                    d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Tambah
                        </button>
                        <button
                            class="w-full bg-white border border-[#00593b] px-3 py-2 text-xs text-[#00593b] font-semibold rounded-lg flex justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 text-[#00593b]">
                                <path
                                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                <path
                                    d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>
                            Ekspor
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-4 ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-4 text-gray-700">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd" />
                </svg>
                <p class="text-[10px] text-gray-700">Menampikan data permohonan pada filter terpilih</p>
            </div>
        </div>

        <div class="flex flex-col space-y-4">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table id="myTable" class="min-w-full border border-gray dark:border-gray table-fixed">
                            <thead>
                                <tr class="border border-gray dark:border-gray">
                                    <th scope="col"
                                        class="w-10 px-6 py-3 text-start text-xs font-medium text-black dark:text-black uppercase border border-gray dark:border-gray">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="w-60 px-6 py-3 text-start text-xs font-medium text-black dark:text-black uppercase border border-gray dark:border-gray">
                                        Nomor & Nominal Pengajuan
                                    </th>
                                    <th scope="col"
                                        class="w-40 px-6 py-3 text-start text-xs font-medium text-black dark:text-black uppercase border border-gray dark:border-gray">
                                        Program & Sub Program
                                    </th>
                                    <th scope="col"
                                        class="w-40 px-6 py-3 text-start text-xs font-medium text-black dark:text-black uppercase border border-gray dark:border-gray">
                                        Survey
                                    </th>
                                    <th scope="col"
                                        class="w-40 px-6 py-3 text-start text-xs font-medium text-black dark:text-black uppercase border border-gray dark:border-gray">
                                        Pencairan
                                    </th>
                                    <th scope="col"
                                        class="w-52 px-6 py-3 text-end text-xs font-medium text-black dark:text-black uppercase border border-gray dark:border-gray">
                                        LPJ
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border border-gray dark:border-gray">
                                    <td
                                        class="px-6 py-4 text-sm font-medium text-black dark:text-black border border-gray dark:border-gray">
                                        1
                                    </td>
                                    <td
                                        class="px-6 py-4 text-sm text-black dark:text-black border border-gray dark:border-gray overflow-hidden break-words">
                                        <div
                                            class="bg-green-700 text-white text-xs font-semibold px-3 py-1 rounded-lg inline-block">
                                            Pengajuan Selesai Diinput FO
                                        </div>
                                        <div class="text-sm mt-1">13/E-DISDAY/INDIVIDU/II/2025</div>
                                        <div class="mt-2">
                                            <div class="flex justify-between">
                                                <span>Nominal Diajukan</span>
                                                <span class="font-semibold">Rp. 500.000</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Tgl Permohonan</span>
                                                <span class="font-semibold">14 Februari 2025</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Tgl Selesai Diinput</span>
                                                <span class="font-semibold">14 Februari 2025</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span>Pemohon</span>
                                                <div class="flex items-center gap-2">
                                                    <span
                                                        class="bg-green-700 text-white text-xs font-semibold px-2 py-0.5 rounded-lg">
                                                        Individu
                                                    </span>
                                                    <span class="font-semibold">Faiz Abdul Ghoni </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm text-black dark:text-black border border-gray dark:border-gray overflow-hidden break-words">
                                        <div
                                            class="bg-green-700 text-white text-xs font-semibold px-3 py-1 rounded-lg inline-block">
                                            Disetujui Atasan
                                        </div>
                                        <div class="mt-2 font-semibold">
                                            Cilacap Cerdas <span class="font-normal">(Pendidikan)</span>
                                        </div>
                                        <div class="text-sm mt-1">
                                            1.1 Bantuan biaya pendidikan siswa miskin SMP & SMA
                                        </div>
                                        <div class="mt-2 font-semibold">
                                            Catatan tambahan :
                                        </div>
                                        <div class="text-sm">
                                            Bantuan biaya pendidikan pembayaran SPP bulan Januari - Maret
                                        </div>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm text-black dark:text-black border border-gray dark:border-gray overflow-hidden break-words">
                                        <div
                                            class="bg-green-700 text-white text-xs font-semibold px-3 py-1 rounded-lg inline-block">
                                            Sudah Disurvey
                                        </div>
                                        <div class="mt-2 font-semibold">
                                            Disetujui
                                        </div>
                                        <div class="text-sm">
                                            Kamis, 15 Maret 2025
                                        </div>
                                        <div class="text-sm text-blue-600 mt-1">
                                            <a href="#" class="underline">Form survey.pdf</a>
                                        </div>
                                        <div class="mt-2 font-semibold">
                                            Catatan tambahan :
                                        </div>
                                        <div class="text-sm">
                                            Bantuan biaya pendidikan pembayaran SPP bulan Januari - Maret
                                        </div>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm text-black dark:text-black border border-gray dark:border-gray overflow-hidden break-words">
                                        <div
                                            class="bg-green-700 text-white text-xs font-semibold px-3 py-1 rounded-lg inline-block">
                                            Sudah Dicairkan
                                        </div>
                                        <div class="mt-2 font-semibold">
                                            Sumber : <span class="font-bold">DANA ZAKAT</span>
                                        </div>
                                        <div class="text-sm">
                                            Kamis, 15 Maret 2025
                                        </div>
                                        <div class="flex justify-between items-center mt-1">
                                            <span>Nominal Dicairkan</span>
                                            <span class="font-bold">Rp. 500.000</span>
                                        </div>
                                        <div class="mt-2 font-semibold">
                                            Catatan tambahan :
                                        </div>
                                        <div class="text-sm">
                                            Bantuan biaya pendidikan pembayaran SPP bulan Januari - Maret
                                        </div>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm text-black dark:text-black border border-gray dark:border-gray overflow-hidden break-words">
                                        <div
                                            class="bg-green-700 text-white text-xs font-semibold px-3 py-1 rounded-lg inline-block">
                                            Selesai LPJ
                                        </div>
                                        <div class="mt-2 font-semibold">
                                            Sudah Disalurkan
                                        </div>
                                        <div class="text-sm">
                                            Kamis, 15 Maret 2025
                                        </div>
                                        <div class="flex justify-between items-center mt-1">
                                            <span>Bentuk Penyaluran</span>
                                            <span class="font-bold">Uang Tunai</span>
                                        </div>
                                        <div class="mt-2 font-semibold">
                                            Catatan tambahan :
                                        </div>
                                        <div class="text-sm">
                                            Penyaluran uang tunai bantuan biaya pendidikan
                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>



        <!-- Modal tambah permohonan -->
        <div id="modal-addPermohonan"
            class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-lg font-semibold text-gray-800">Tambah Permohonan</h2>
                <p class="text-sm text-gray-600">Isi form berikut untuk menambahkan permohonan.</p>

                <!-- Form -->
                <form action="#" method="POST" class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:ring-[#00593b] focus:border-[#00593b]">

                    <label class="block text-sm font-medium text-gray-700 mt-3">Email</label>
                    <input type="email"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:ring-[#00593b] focus:border-[#00593b]">

                    <div class="flex justify-end gap-2 mt-4">
                        <button type="button" id="closeModal"
                            class="px-4 py-2 text-sm bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button>
                        <button type="submit"
                            class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- JavaScript untuk Modal -->
        <script>
            document.getElementById("openModal-addPermohonan").addEventListener("click", function() {
                document.getElementById("modal-addPermohonan").classList.remove("hidden");
            });

            document.getElementById("closeModal").addEventListener("click", function() {
                document.getElementById("modal-addPermohonan").classList.add("hidden");
            });

            // Tutup modal jika klik di luar modal
            document.getElementById("modal-addPermohonan").addEventListener("click", function(event) {
                if (event.target === this) {
                    this.classList.add("hidden");
                }
            });


            $('#daterange').daterangepicker({
                locale: {
                    format: 'D MMMM YYYY'
                },
                ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 Hari Terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 Hari Terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan Lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')],
                    'Tahun Ini': [moment().startOf('year'), moment().endOf('year')],
                    'Semua': [moment().subtract(10, 'years'), moment()]
                }
            });
        </script>
    @endsection
</x-app-layout>
