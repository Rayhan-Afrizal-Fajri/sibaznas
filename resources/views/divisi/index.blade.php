<x-app-layout>
    @section('main_folder', 'Divisi')
    @section('content')
    
    <div class="flex flex-col space-y-4">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table
                    {{-- id="myTable" --}}
                        class="w-100 sm:min-w-full text-[9px] text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                        <thead class="text-[9px] sm:text-xs text-gray-700 bg-white">
                            <tr>
                                <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                                <th class="px-2 text-center py-3 border w-[20%]">Kode Divisi</th>
                                <th class="px-2 text-center py-3 border w-[20%]">Divisi</th>
                                <th class="px-2 text-center py-3 border w-[20%]">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisi as $data)
                                <tr>
                                    <td class="px-2 text-center py-4 border">{{ $loop->iteration }}</td>
                                    <td class="px-2 text-center py-4 border">{{ $data->kode_divisi }}</td>
                                    <td class="px-2 text-center py-4 border">{{ $data->divisi }}</td>
                                    <td class="px-2 text-center py-4 border">

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
</x-app-layout>