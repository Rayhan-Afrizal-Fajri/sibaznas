<x-app-layout>
    @section('main_folder', 'Pengurus')
    @section('content')
    
    <div class="flex flex-col space-y-4">
        <div class="text-[#00593b]">
            Data Pengurus
        </div>
        <div
            class="bg-white rounded-lg shadow border w-full flex justify-between items-center p-6">
            <div class="flex gap-1 items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="size-4">
                    <path
                        fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd"/>
                </svg>
                <span class="text-sm">Menampilkan data pengurus Baznas Cilacap</span>
            </div>
            <button id="addPengurusButton"
                class="bg-transparent border border-[#00593b] px-2 py-1 text-[#00593b] rounded-md hover:text-white hover:bg-[#00593b] hover:border-transparent">
                <div class="flex justify-between items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>                      
                      
                    <span class="text-sm">Tambah</span>
                </div>
            </button>
        </div>
        @if(session('success'))
        <div
            id="alert-success"
            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg
                class="shrink-0 w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-medium">{{ session('success') }}</div>
            <button
                type="button"
                onclick="document.getElementById('alert-success').style.display='none';"
                class="ms-auto bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700">
                <span class="sr-only">Close</span>
                <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14">
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif @if(session('error'))
        <div
            id="alert-error"
            class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg
                class="shrink-0 w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Error</span>
            <div class="ms-3 text-sm font-medium">{{ session('error') }}</div>
            <button
                type="button"
                onclick="document.getElementById('alert-error').style.display='none';"
                class="ms-auto bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700">
                <span class="sr-only">Close</span>
                <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14">
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table
                    {{-- id="myTable" --}}
                        class="w-100 sm:min-w-full text-[9px] text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                        <thead class="text-[9px] sm:text-xs text-gray-700 bg-white">
                            <tr>
                                <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                                <th class="px-2 text-center py-3 border">Nama</th>
                                <th class="px-2 text-center py-3 border">Wilayah</th>
                                <th class="px-2 text-center py-3 border">NIK</th>
                                <th class="px-2 text-center py-3 border">Alamat</th>
                                <th class="px-2 text-center py-3 border">Divisi</th>
                                <th class="px-2 text-center py-3 border">Nomor SK</th>
                                <th class="px-2 text-center py-3 border">Tanggal Mulai</th>
                                <th class="px-2 text-center py-3 border">Tanggal Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengurus as $data)
                                <tr>
                                    <td class="px-2 text-center py-4 border">{{ $loop->iteration }}</td>
                                    <td class="px-2 text-center py-4 border">{{ $data->pengguna->nama ?? '' }}</td>
                                    <td class="px-2 text-center py-4 border">{{ $data->pengguna->wilayah->wilayah }}</td>
                                    <td class="px-2 text-center py-4 border">{{ $data->pengguna->nik }}</td> 
                                    <td class="px-2 text-center py-4 border">{{ $data->pengguna->alamat }}, RT {{ $data->pengguna->rt }} RW {{ $data->pengguna->rw }}</td> 
                                    <td class="px-2 text-center py-4 border">
                                        {{ $data->jabatan->divisi->divisi }} <br>
                                        {{ $data->jabatan->jabatan }}
                                    </td>
                                    <td class="px-2 text-center py-4 border">
                                        <a href="{{ $data->sk_url }}" target="_blank" class="cursor-pointer text-blue-500 hover:text-blue-400">
                                            {{ $data->sk_nomor }}
                                        </a>
                                    </td>
                                    <td class="px-2 text-center py-4 border"> {{ $data->tgl_mulai }} </td>
                                    <td class="px-2 text-center py-4 border"> {{ $data->tgl_selesai }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('modal.pengurus.create')

    <script>
        $(document).ready(function() {
            $('#addPengurusButton').click(function() {
                $('#modal-addPengurus').removeClass('hidden');
            });
        });

        // Fungsi untuk menutup modal berdasarkan ID modal yang dikirim
    function closeModal(modalId) {
                $("#" + modalId).addClass("hidden");
        }
    </script>
    
    @endsection
</x-app-layout>