<div x-data="{ open: false }" class="">


    <div
        id="modal-addSubProgram"
        class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50">
        <div class="bg-white p-5 rounded-lg shadow-lg w-96">
            <!-- Header -->
            <div class="flex justify-between items-center border-b pb-2">
                <h2 class="text-lg font-semibold">Tambah Sub Program</h2>
                <button
                    onclick="closeModal('modal-addSubProgram')"
                    class="text-gray-500 hover:text-gray-700 text-xl">&times;</button>
            </div>

            <!-- Form -->
            <form action="{{ route('sub_program.store') }}" method="POST" class="mt-4">
                @csrf
                <input type="hidden" id="sub_program-programIdEdit" name="program_id">

                    <!-- Nama Program -->
                    <div class="mb-4">
                        <label
                            for="sub_program-programNameEdit"
                            class="block text-sm font-medium text-gray-700">
                            Nama Program
                        </label>
                        <input
                            type="text"
                            id="sub_program-programNameEdit"
                            name="program"
                            required="required"
                            readonly="readonly"
                            class="mt-1 w-full p-2 border rounded-md bg-gray-200 focus:ring focus:ring-green-300"></div>

                        <!-- Nama Sub Program -->
                        <div class="mb-4">
                            <label for="sub_program" class="block text-sm font-medium text-gray-700">
                                Nama Sub Program
                            </label>
                            <input
                                type="text"
                                id="sub_program"
                                name="sub_program"
                                required="required"
                                class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300"></div>

                            <!-- Tombol Aksi -->
                            <div class="flex justify-end gap-2">
                                <button
                                    type="button"
                                    onclick="closeModal('modal-addSubProgram')"
                                    class="bg-gray-300 px-3 py-2 rounded-md text-gray-700">
                                    Batal
                                </button>
                                <button type="submit" class="bg-[#00593b] px-3 py-2 text-white rounded-md">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>