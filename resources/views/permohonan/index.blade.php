<x-app-layout>
    @section('main_folder', 'Permohonan')

    @section('content')

    <div class="mb-2 text-[#00593b]">
        Data Permohonan
    </div>
    <div class="w-full bg-white shadow px-2 pt-4 pb-3 border border-gray-200 rounded-lg mb-8">
        <div class="flex flex-col sm:flex-row gap-2 mb-2">
            <label class="w-full">
                <div class="w-full bg-white border border-gray-300 px-3 py-2 rounded-lg flex items-center justify-center gap-2">
                    <span class="text-xs font-light text-gray-700">1 Januari 2024 - 31 Januari 2025</span>                     
                </div>
            </label> 
            <label class="flex items-center w-full">
                <span class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                    Status FO
                </span>
                <select class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1" 
                    name="kategori" 
                    onchange="this.form.submit()">
                    <option value="all" @if (request('kategori') == 'all') selected @endif>
                        Semua
                    </option>
                </select>
            </label>
            <label class="flex items-center w-full">
                <span class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                    Acc Atasan
                </span>
                <select class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1" 
                    name="kategori" 
                    onchange="this.form.submit()">
                    <option value="all" @if (request('kategori') == 'all') selected @endif>
                        Semua
                    </option>
                </select>
            </label>
            <label class="flex items-center w-full">
                <span class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                    Survey
                </span>
                <select class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1" 
                    name="kategori" 
                    onchange="this.form.submit()">
                    <option value="all" @if (request('kategori') == 'all') selected @endif>
                        Semua
                    </option>
                </select>
            </label>
        </div>
        <div class="flex flex-col sm:flex-row gap-2">
            <label class="flex items-center w-full">
                <span class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                    Acc Keu
                </span>
                <select class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1" 
                    name="kategori" 
                    onchange="this.form.submit()">
                    <option value="all" @if (request('kategori') == 'all') selected @endif>
                        Semua
                    </option>
                </select>
            </label>
            <label class="flex items-center w-full">
                <span class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                    LPJ
                </span>
                <select class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1" 
                    name="kategori" 
                    onchange="this.form.submit()">
                    <option value="all" @if (request('kategori') == 'all') selected @endif>
                        Semua
                    </option>
                </select>
            </label>
            <label class="w-full">
                <div class="w-full bg-gray-300 px-3 py-2 rounded-lg flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-4 text-gray-700">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke="currentColor" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg> 
                    <span class="text-xs font-light text-gray-700">Refresh Filter</span>                     
                </div>
            </label>            
            <div class="w-full">
                <div class="w-full flex items-center gap-2">
                    <button id="openModal-addPermohonan" class="w-full bg-[#00593b] px-3 py-2 text-xs font-semibold text-white rounded-lg flex justify-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-white">
                            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                          </svg>                          
                        Tambah
                    </button>
                    <button class="w-full bg-white border border-[#00593b] px-3 py-2 text-xs text-[#00593b] font-semibold rounded-lg flex justify-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-[#00593b]">
                            <path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                            <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                          </svg>                                                    
                        Ekspor
                    </button>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-1 mt-4 ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-gray-700">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
              </svg>
              <p class="text-[10px] text-gray-700">Menampikan data permohonan  pada filter terpilih</p>              
        </div>
    </div>
    
    <div class="">
        <table id="myTable" class="table-fixed w-full text-[10px] text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
            <thead class="text-xs text-gray-700 uppercase bg-white">
                <tr>
                    <th class="px-6 py-3 border w-[40px]">NO</th>
                    <th class="px-6 py-3 border w-[20%]">Nomor & Nominal Pengajuan</th>
                    <th class="px-6 py-3 border w-[20%]">Program & Sub Program</th>
                    <th class="px-6 py-3 border w-[20%]">Survey</th>
                    <th class="px-6 py-3 border w-[20%]">Pencairan</th>
                    <th class="px-6 py-3 border w-[20%]">LPJ</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">1</td>
                    <td class="px-6 py-4 border w-[20%]">
                        <div class="flex flex-col">
                            <p class="bg-[#00593b] text-white p-1 rounded-md w-fit">Pengajuan Selesai diinput FO</p>
                            <p>13/E-DISDAY/INDIVIDU/II/2025</p>
                            <div class="flex flex-row justify-between">
                                <p>tes</p>
                                <p>tes</p>
                            </div>
                            <div class="flex flex-row justify-between">
                                <p>tes</p>
                                <p>tes</p>
                            </div>
                            <div class="flex flex-row justify-between">
                                <p>tes</p>
                                <p>tes</p>
                            </div>
                            <div class="flex flex-row justify-between">
                                <p>tes</p>
                                <p>tes</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 border">Admin</td>
                    <td class="px-6 py-4 border">Admin</td>
                    <td class="px-6 py-4 border">Admin</td>
                    <td class="px-6 py-4 border">Admin</td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">2</td>
                    <td class="px-6 py-4 border">john@example.com</td>
                    <td class="px-6 py-4 border">Admin</td>
                    <td class="px-6 py-4 border">Admin</td>
                    <td class="px-6 py-4 border">Admin</td>
                    <td class="px-6 py-4 border">Admin</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Modal tambah permohonan -->
    <div id="modal-addPermohonan" class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-lg font-semibold text-gray-800">Tambah Permohonan</h2>
            <p class="text-sm text-gray-600">Isi form berikut untuk menambahkan permohonan.</p>

            <!-- Form -->
            <form action="#" method="POST" class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:ring-[#00593b] focus:border-[#00593b]">

                <label class="block text-sm font-medium text-gray-700 mt-3">Email</label>
                <input type="email" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:ring-[#00593b] focus:border-[#00593b]">

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" id="closeModal" class="px-4 py-2 text-sm bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button>
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
    </script>    
    @endsection
</x-app-layout>