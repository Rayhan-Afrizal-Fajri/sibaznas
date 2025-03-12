<div class="flex flex-col gap-4">
    <div class="w-full flex flex-col gap-4">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between w-1/2">
            <p class="text-xs font-bold">A. Detail Permohonan</p>
            <div class="flex items-center gap-1 mt-1z sm:mt-0">
                <div class=" hs-dropdown [--trigger:hover] relative inline-flex">
                    <button
                        id="hs-dropdown-hover-event"
                        type="button"
                        class="hs-dropdown-toggle text-[9px] sm:text-xs p-[2px] rounded-md inline-flex items-center gap-x-1 font-regular border-[1px] border-[#00593b] text-[#00593b] hover:bg-[#00593b] hover:border-transparent hover:text-white shadow-sm disabled:opacity-50 disabled:pointer-events-none"
                        aria-haspopup="menu"
                        aria-expanded="false"
                        aria-label="Dropdown">
                        Respon
                        <svg
                            class="hs-dropdown-open:rotate-180 size-4"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>

                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="hs-dropdown-hover-event">
                        <div class="p-1 space-y-0.5">
                            <a
                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                href="#">
                                Acc
                            </a>
                            <a
                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                href="#">
                                Tolak
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="flex flex-col sm:flex-row justify-between gap-2"> --}}
            <div class="w-full sm:w-1/2">
                <table class="w-100 sm:min-w-full text-[9px] border border-gray-300 rounded-lg">
                    <tbody class="text-[9px] sm:text-xs text-gray-700 bg-white text-left">
                        <tr>
                            <td class="px-2 py-3 border font-bold w-[150px]">Direspon Oleh</td>
                            <td class="px-2 py-3 border font-medium">
                                Akhmad Kholil, SH. <br>
                                Wakil Ketua II
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-3 border font-bold">Status & Tgl Disetujui</td>
                            <td class="px-2 py-3 border font-medium">
                                <div>
                                    <span class="text-white px-1 py-[1px] bg-[#00593b] rounded-[3px]">Disetujui</span>
                                    <p class="font-bold mt-1">Kamis, 15 Februari 2025 (13:53:11)</p>
                                    <p class="font-medium mt-1 font-bold">Catatan Atasan : </p>
                                    <p class="font-medium mt-1">Ini Keterangan Program Penguatan Kelembagaan
                                        Pilar Kelembagaan</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-3 border font-bold">Survey</td>
                            <td class="px-2 py-3 border font-medium">
                                <div>
                                    <span class="text-white px-1 py-[1px] bg-[#00593b] rounded-[3px]">Perlu Survey</span>
                                    <p class="font-bold mt-1">Petugas Survey: </p>
                                    <p class="font-medium mt-1 font-bold">M. Abdul Azis</p>
                                    <p class="font-medium mt-1">Staf Pendistribusian dan Pemberdayaan</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        {{-- </div> --}}
        <div class="flex sm:items-center justify-between">
            <p class="text-xs font-bold">B. Lampiran</p>
            <button
                class="flex items-center gap-1 text-[9px] sm:text-xs font-regular border-[1px] border-[#00593b] text-[#00593b] hover:bg-[#00593b] hover:border-transparent hover:text-white p-[2px] rounded-[4px] sm:rounded-md">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="size-3">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>
                Tambah
            </button>
        </div>
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="w-100 sm:min-w-full text-[9px] text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                        <thead class="text-[9px] sm:text-xs text-gray-700 bg-white">
                            <tr>
                                <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                                <th class="px-2 text-center py-3 border">Judul</th>
                                <th class="px-2 text-center py-3 border">File</th>
                                <th class="px-2 text-center py-3 border">Waktu Upload</th>
                                <th class="px-2 text-center py-3 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b text-xs">
                                <td class="px-2 text-left py-4 border">1</td>
                                <td class="px-2 text-left border">SKTM</td>
                                <td class="px-2 text-left border">
                                    <a href="#" target="_blank" class="text-blue-700 hover:text-blue-600">SKTM.pdf</a>
                                </td>
                                <td class="px-2 text-left border">Kamis, 15 Februari 2025 <i>(13:53:11)</i></td>
                                <td class="px-2 text-center border">
                                    <div class="hs-dropdown relative inline-flex">
                                        <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle py-[3px] px-[6px] inline-flex items-center gap-x-1 text-[9px] font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                          Aksi
                                          <svg class="hs-dropdown-open:rotate-180 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                        </button>
                                      
                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-default">
                                            <div class="p-1 space-y-0.5">
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="#">
                                                Edit
                                                </a>
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="#">
                                                Hapus
                                                </a>
                                            </div>
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
</div>
