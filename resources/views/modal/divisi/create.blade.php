<div x-data="{ open: false }" class="">
    <div
        id="modal-addDivisi"
        class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center bg-black z-50">
        <div class="bg-white p-5 rounded-lg shadow-lg w-96">
            <!-- Header -->
            <div class="flex justify-between items-center border-b pb-2">
                <h2 class="text-lg font-semibold">Tambah Divisi</h2>
                <button onclick="closeModal('modal-addDivisi')" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>

            <!-- Form -->
            <form action="{{ route('divisi.store') }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="divisi" class="block text-sm font-medium text-gray-700">Nama Divisi</label>
                    <input
                        type="text"
                        id="divisi"
                        name="divisi"
                        required="required"
                        class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300">
                </div>
                <div class="mb-4">
                    <label for="divisi" class="block text-sm font-medium text-gray-700">Kode Divisi</label>
                    <input
                        type="text"
                        id="kode_divisi"
                        name="kode_divisi"
                        required="required"
                        class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300">
                </div>

                    <div class="flex justify-end gap-2">
                        <button
                            type="button"
                            onclick="closeModal('modal-addDivisi')"
                            class="bg-gray-300 px-3 py-2 rounded-md text-gray-700">
                            Batal
                        </button>
                        <button type="submit" class="bg-[#00593b] px-3 py-2 text-white rounded-md">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
</div>