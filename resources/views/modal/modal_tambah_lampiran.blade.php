<!-- Modal tambah permohonan -->
<form action="{{ route('permohonan.tambah-lampiran') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="modal-tambahLampiran-{{ $detail_permohonan->permohonan_id }}"
        class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-md shadow-lg sm:w-[672px] max-h-[90vh] custom-scrollbar overflow-y-auto">
            <div class="flex justify-between items-center border-b-[1.5px] border-gray-500">
                <h2 class="text-sm font-semibold text-gray-800 uppercase">Tambah Lampiran</h2>
                <button id="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4 text-gray-500 hover:text-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-5">
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Keterangan</label>
                        <input name="keterangan" type="text"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan keterangan">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">File Lampiran</label>
                        <input name="url" type="file" id="name"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8 " />
                    </div>
                </div>

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" id="closeModall" class="bg-gray-300 px-3 py-2 rounded-md text-gray-700">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>
                </div>
            </div>


        </div>
    </div>
</form>
