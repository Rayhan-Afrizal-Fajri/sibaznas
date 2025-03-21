<div
    id="modal-addPengurus"
    class=" hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 p-4 ">
    <div
        class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg max-h-[80vh] overflow-y-auto">
        <!-- Header -->
        <div class="flex justify-between items-center border-b pb-3">
            <h2 class="text-lg font-semibold">Tambah Pengurus</h2>
            <button
                onclick="closeModal('modal-addPengurus')"
                class="text-gray-500 hover:text-gray-700 text-xl">&times;</button>
        </div>

        <!-- Form -->
        <form
            action="{{ route('pengurus.store') }}"
            method="POST"
            class="mt-4"
            enctype="multipart/form-data">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    required="required"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
            </div>
                <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    required="required"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
            </div>

                    <!-- NIK -->
            <div class="mb-4">
                <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                <input
                    type="text"
                    id="nik"
                    name="nik"
                    required="required"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
            </div>

            <!-- Tempat tanggal lahir -->
            <div class="mb-4">
                <label
                    for="tempat_tanggal_lahir"
                    class="block text-sm font-medium text-gray-700">Tempat, Tanggal Lahir</label>
                <div class="flex justify-between mt-1 gap-2">
                <!-- Tempat Lahir -->
                <input
                    type="text"
                    id="tempat_lahir"
                    name="tempat_lahir"
                    placeholder="Tempat Lahir"
                    required="required"
                    class="w-full text-sm p-2 border rounded-md focus:ring focus:ring-green-300">

                <!-- Tanggal Lahir -->
                <div class="relative w-full">
                    <div
                        class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg
                            class="w-4 h-4 text-gray-500"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input
                        id="tgl_lahir"
                        name="tgl_lahir"
                        datepicker="datepicker"
                        datepicker-autohide="datepicker-autohide"
                        type="text"
                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                        placeholder="Tanggal lahir"></div>
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <div class="flex gap-4 mt-2">
                <label class="flex items-center">
                <input
                    type="radio"
                    value="1"
                    name="jenis_kelamin"
                    class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                    <span class="ml-2 text-gray-900 text-sm">Laki-laki</span>
                </label>
                <label class="flex items-center">
                    <input
                        type="radio"
                        value="2"
                        name="jenis_kelamin"
                        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-gray-900 text-sm">Perempuan</span>
                    </label>
                </div>
            </div>

            <!-- Nomor HP -->
            <div class="mb-4">
                <label for="nohp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                <input
                    type="text"
                    id="nohp"
                    name="nohp"
                    required="required"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm"></div>

                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea
                        id="alamat"
                        name="alamat"
                        rows="2"
                        class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm"
                        placeholder="Isi alamat"></textarea>
            </div>

            <!-- RT & RW -->
            <div class="mb-4 flex gap-2">
                <div class="w-1/2">
                    <label for="rt" class="block text-sm font-medium text-gray-700">RT</label>
                    <input
                        type="text"
                        id="rt"
                        name="rt"
                        required="required"
                        class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
                </div>
                <div class="w-1/2">
                    <label for="rw" class="block text-sm font-medium text-gray-700">RW</label>
                    <input
                        type="text"
                        id="rw"
                        name="rw"
                        required="required"
                        class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
                </div>
            </div>

            <!-- Wilayah -->
            <div class="mb-4">
                <label for="wilayah" class="block text-sm font-medium text-gray-700">Wilayah</label>
                <select
                    id="wilayah"
                    name="wilayah_id"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
                    <option selected="selected">Pilih Wilayah</option>
                    @foreach ($wilayah as $data)
                    <option value="{{ $data->wilayah_id }}">{{ $data->wilayah }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Upload Foto -->
            <div class="mb-4">
                <label for="foto_url" class="block text-sm font-medium text-gray-700">Upload Foto</label>
                <input
                    type="file"
                    id="foto_url"
                    name="foto_url"
                    required="required"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
            </div>

            <!-- Upload Tanda Tangan -->
            <div class="mb-4">
                <label for="ttd_url" class="block text-sm font-medium text-gray-700">Upload Tanda Tangan</label>
                <input
                    type="file"
                    id="ttd_url"
                    name="ttd_url"
                    required="required"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
            </div>

            <!-- Jabatan -->
            <div class="mb-4">
                <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                <select
                    id="jabatan"
                    name="jabatan_id"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm">
                    <option selected="selected">Pilih Jabatan</option>
                    @foreach ($jabatan as $data)
                    <option value="{{ $data->jabatan_id }}">{{ $data->jabatan }}
                        -
                        {{ $data->divisi->divisi }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tanggal Mulai & Selesai -->
            <div class="mb-4">
                <div
                    id="date-range-picker"
                    date-rangepicker="date-rangepicker"
                    class="flex items-center">
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg
                                class="w-4 h-4 text-gray-500"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input
                            readonly="readonly"
                            id="datepicker-range-start"
                            name="tgl_mulai"
                            type="text"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                            placeholder="Pilih tanggal mulai">
                    </div>
                    <span class="mx-4 text-gray-500">sd</span>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg
                                class="w-4 h-4 text-gray-500"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input
                            readonly="readonly"
                            id="datepicker-range-end"
                            name="tgl_selesai"
                            type="text"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                            placeholder="Pilih tanggal selesai">
                    </div>
                </div>
            </div>

            <!-- Nomor SK -->
            <div class="mb-4">
                <label for="sk_nomor" class="block text-sm font-medium text-gray-700">Nomor SK</label>
                <input
                    type="text"
                    id="sk_nomor"
                    name="sk_nomor"
                    required="required"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm"></div>

            <!-- Upload SK -->
            <div class="mb-4">
                <label for="sk_url" class="block text-sm font-medium text-gray-700">Upload SK</label>
                <input
                    type="file"
                    id="sk_url"
                    name="sk_url"
                    required="required"
                    class="mt-1 w-full p-2 border rounded-md focus:ring focus:ring-green-300 text-sm"></div>

                <!-- Action Buttons -->
                <div class="flex justify-end gap-2">
                    <button
                        type="button"
                        onclick="closeModal('modal-addPengurus')"
                        class="bg-gray-300 px-4 py-2 rounded-md text-gray-700">Batal</button>
                    <button type="submit" class="bg-green-700 px-4 py-2 text-white rounded-md">Simpan</button>
                </div>
        </form>
    </div>
</div>