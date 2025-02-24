<x-app-layout>
    @section('main_folder', 'Permohonan')
    @section('main_folder-link', '#')

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
                width: 8px; /* Lebar scrollbar diperkecil */
            }

            .custom-scrollbar::-webkit-scrollbar-track {
                background: #f1f1f1; /* Warna background track scrollbar */
                border-radius: 10px; /* Membuat sudut track scrollbar lebih rounded */
            }

            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #00593b; /* Warna scrollbar */
                border-radius: 10px; /* Membuat sudut scrollbar lebih rounded */
            }

            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #048359; /* Warna scrollbar saat hover */
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
        </div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="w-100 sm:min-w-full text-[9px] text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                <thead class="text-[9px] sm:text-xs text-gray-700 bg-white">
                    <tr>
                        <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                        <th class="px-2 text-center py-3 border w-[20%]">Nomor & Nominal Pengajuan</th>
                        <th class="px-2 text-center py-3 border w-[20%]">Program & Sub Program</th>
                        <th class="px-2 text-center py-3 border w-[20%]">Survey</th>
                        <th class="px-2 text-center py-3 border w-[20%]">Pencairan</th>
                        <th class="px-2 text-center py-3 border w-[20%]">LPJ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b cursor-pointer" onclick="window.location.href='{{ route('permohonan.show', 1) }}'">
                        <td class="px-2 text-center py-4 border">1</td>
                   
                        <td class="px-2 py-2 border w-[20%]">
                            <div class="flex flex-col text-black">
                                <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Pengajuan Selesai diinput FO</p>
                                <p class="text-[5px] sm:text-[9px]">13/E-DISDAY/INDIVIDU/II/2025</p>
                                <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0 mb-1">
                                    <p>Nominal Diajukan</p>
                                    <p class="font-bold">Rp. 500.000</p>
                                </div>
                                <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                    <p>Tgl Permohonan</p>
                                    <p class="font-bold">14 Februari 2025</p>
                                </div>
                                <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                    <p>Tgl Selesai Diinput</p>
                                    <p class="font-bold">14 Februari 2025</p>
                                </div>
                                <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                    <div class="flex flex-row gap-1">
                                        <p>Pemohon</p>
                                        <p class="bg-[#00593b] px-0.5 text-white rounded-sm">Individu</p>
                                    </div>
                                    <p class="font-bold">Faiz Abdul Ghoni</p>
                                </div>
                            </div>
                        </td>
                        
                        <td class="px-2 py-2 border w-[20%]">
                            <div class="flex flex-col text-black">
                                <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Disetujui Atasan</p>
                                <div class="flex flex-col">
                                    <p class="font-bold">Cilacap Cerdas (Pendidikan)</p>
                                    <p class="font-regular">1.1 Bantuan biaya pendidikan siswa miskin SMP & SMA</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="font-bold">Cacatan Tambahan</p>
                                    <p class="font-regular">Bantuan biaya pendidikan pembayaran SPP bulan januari - maret</p>
                                </div>
                            </div>
                        </td>
                       
                        <td class="px-2 py-2 border w-[20%]">
                            <div class="flex flex-col text-black">
                                <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Sudah Survey</p>
                                <div class="flex flex-col">
                                    <p class="font-bold">Disetujui</p>
                                    <p>Kamis, 15 Maret 2025</p>
                                </div>
                                <a href="#" class="text-blue-700 hover:text-blue-500" target="_blank">Form survey.pdf</a>
                                <div class="flex flex-col">
                                    <p class="font-bold">Catatan Tambahan</p>
                                    <p>Bantuan biaya pendidikan pembayaran SPP bulan januari - maret</p>
                                </div>
                            </div>
                        </td>
                    
                        <td class="px-2 py-2 border w-[20%]">
                            <div class="flex flex-col text-black">
                                <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Sudah Dicairkan</p>
                                <div class="flex flex-col">
                                    <p class="font-bold">Sumber: DANA ZAKAT</p>
                                    <p>Kamis, 15 Mare 2025</p>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <p>Nominal dicairkan</p>
                                    <p class="font-bold">Rp. 500.000</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="font-bold">Catatan Tambahan</p>
                                    <p>Bantuan biaya pendidikan pembayaran SPP bulan januari - maret</p>
                                </div>
                            </div>
                        </td>
                      
                        <td class="px-2 py-2 border w-[20%]">
                            <div class="flex flex-col text-black">
                                <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Selesai LPJ</p>
                                <div class="flex flex-col">
                                    <p class="font-bold">Sudah disalurkan</p>
                                    <p>Kamis, 15 Mare 2025</p>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <p>Bentuk Penyaluran</p>
                                    <p class="font-bold">Uang Tunai</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="font-bold">Catatan Tambahan</p>
                                    <p>Penyaluran uang tunai bantuan biaya pendidikan</p>
                                </div>
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
    <div id="modal-addPermohonan" class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-md shadow-lg sm:w-[672px] max-h-[90vh] custom-scrollbar overflow-y-auto">
            <div class="flex justify-between items-center border-b-[1.5px] border-gray-500">
                <h2 class="text-sm font-semibold text-gray-800 uppercase">Tambah Permohonan e-DisDay</h2>
                <button id="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 text-gray-500 hover:text-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                      </svg>    
                </button>                  
            </div>

            <!-- Form -->
            <form action="#" method="POST" class="mt-4 text-sm">
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Jenis Permohonan</label>
                        <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="Individu">Individu</option>
                            <option value="opsi 2">opsi 2</option>
                          </select>
                    </div>
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Nomor Permohonan</label>
                        <input type="text" readonly class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="13/E-DISDAY/INDIVIDU/II/2025" required>
                    </div>
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Nama Pemohon</label>
                        <input type="text" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ferriyan Ilyasa" required />
                    </div>
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">No HP Pemohon</label>
                        <input type="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="081578447350" required />
                    </div>
                </div>
                <div class="mb-4">
                    <label  class="block mb-2 text-sm font-bold text-black dark:text-white">Alamat Pemohon</label>
                    <input type="text" id="address" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                </div>
                <div class="mb-4">
                    <hr class="border-gray-500 rounded-lg border-[1.5px]">    
                </div> 
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Nomor Surat</label>
                        <input type="text" required class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="001/SuratPermohonanBantuan" required>
                    </div>
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Tanggal Surat</label>
                        <input type="date" required class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="02/23/2025" required>
                    </div>
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">File Scan Surat</label>
                        <input type="file" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Tanggal Input</label>
                        <input type="number" readonly class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }} (Today)" value="{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }}" required />
                    </div>
                </div>
                <div class="mb-4">
                    <hr class="border-gray-500 rounded-lg border-[1.5px]">    
                </div> 
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Asnaf</label>
                        <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="miskin">Miskin</option>
                            <option value="opsi 2">opsi 2</option>
                          </select>
                    </div>
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Program</label>
                        <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="CILACAP CERDAS (Pendidikan)">CILACAP CERDAS (Pendidikan)</option>
                            <option value="opsi 2">opsi 2</option>
                          </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Sub Program</label>
                    <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="1.1 Bantuan Biaya Pendidikan">1.1 Bantuan Biaya Pendidikan</option>
                        <option value="opsi 2">opsi 2</option>
                    </select>
                </div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Nominal Diajukan</label>
                        <input type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rp 500.000" required>
                    </div>
                    <div>
                        <label  class="block mb-1 text-sm font-bold text-black dark:text-white">Bentuk Bantuan</label>
                        <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="Uang Tunai">Uang Tunai</option>
                            <option value="opsi 2">opsi 2</option>
                          </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan / Catatan Tambahan</label>
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bantuan biaya pendidikan pembayaran SPP"></textarea>
                </div>

                <div class="flex justify-end gap-2 mt-4">
                    {{-- <button id="closeModal" class="px-4 py-2 text-sm bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button> --}}
                    <button type="submit" class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>
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
