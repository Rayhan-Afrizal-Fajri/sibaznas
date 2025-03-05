<x-app-layout>
    @section('folder', 'Program') @section('content')
    <div class="flex flex-col gap-2">
        <div class="text-[#00593b]">
            Data Program
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
                <span class="text-sm">Menampilkan data program dan subprogram Baznas Cilacap</span>
            </div>
            <button
                class="bg-transparent border border-[#00593b] px-2 py-1 text-[#00593b] rounded-md hover:text-white hover:bg-[#00593b] hover:border-transparent">
                <div class="flex gap-1 justify-between items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="size-4">
                        <path
                            fill-rule="evenodd"
                            d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875Zm5.845 17.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V12a.75.75 0 0 0-1.5 0v4.19l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z"
                            clip-rule="evenodd"/>
                        <path
                            d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z"/>
                    </svg>
                    <span class="text-sm">Ekspor</span>
                </div>
            </button>
        </div>
        <div class="flex justify-between items-start gap-4">
            <div
                class="w-1/3 bg-white border shadow p-4 rounded-lg flex flex-col items-center justify-center gap-2">
                <span class="w-full text-center font-bold">Daftar Progam</span>
                <table
                    id="myTable"
                    class="w-100 sm:min-w-full text-sm text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                    <thead class="text-[12px] sm:text-sm text-gray-700 bg-white">
                        <tr>
                            <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                            <th class="px-2 text-center py-3 border">Nama Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-2 text-center py-4 border">1</td>
                            <td class="px-2 text-center py-4 border">Program 1</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-2 text-center py-4 border">2</td>
                            <td class="px-2 text-center py-4 border">Program 2</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div
                class="w-2/3 bg-white border shadow p-4 rounded-lg flex flex-col items-center justify-center gap-2">
                <span class="w-full text-center font-bold">Daftar Sub Program</span>
                <table
                    id="myTable"
                    class="w-100 sm:min-w-full text-sm text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                    <thead class="text-[12px] sm:text-sm text-gray-700 bg-white">
                        <tr>
                            <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                            <th class="px-2 text-center py-3 border">Nama Sub Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-2 text-center py-4 border">1</td>
                            <td class="px-2 text-center py-4 border">Sub Program 1</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-2 text-center py-4 border">2</td>
                            <td class="px-2 text-center py-4 border">Sub Program 2</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-2 text-center py-4 border">3</td>
                            <td class="px-2 text-center py-4 border">Sub Program 2</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-2 text-center py-4 border">4</td>
                            <td class="px-2 text-center py-4 border">Sub Program 2</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-2 text-center py-4 border">5</td>
                            <td class="px-2 text-center py-4 border">Sub Program 2</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-2 text-center py-4 border">6</td>
                            <td class="px-2 text-center py-4 border">Sub Program 2</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>