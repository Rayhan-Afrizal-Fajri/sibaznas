<!-- Modal tambah permohonan -->
<form action="{{ route('permohonan.tambah-mustahik') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="modal-tambahMustahik-{{ $detail_permohonan->permohonan_id }}"
        class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-md shadow-lg sm:w-[672px] max-h-[90vh] custom-scrollbar overflow-y-auto">
            <div class="flex justify-between items-center border-b-[1.5px] border-gray-500">
                <h2 class="text-sm font-semibold text-gray-800 uppercase">Tambah Mustahik</h2>
                <button id="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4 text-gray-500 hover:text-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Form -->
            <div class="mt-5">
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Nama</label>
                        <input name="nama" type="text"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan nama">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Tanggal Input</label>
                        <input type="date"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                    </div>
                </div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">NO NIK</label>
                        <input name="nik" type="number"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan nik">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">NO KK</label>
                        <input name="kk" type="number"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan kk">
                    </div>
                </div>
            </div>

            <div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan tempat lahir">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Tanggal Lahir</label>
                        <input name="tgl_lahir" type="date"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-black">Alamat</label>
                <input name="alamat" type="text"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                    placeholder="Masukan alamat ">
            </div>

            <div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">NO HP</label>
                        <input name="nohp" type="number"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan no hp">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Email</label>
                        <input name="email" type="email"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan email">
                    </div>
                </div>
            </div>

            <div class="grid gap-4 mb-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-bold text-black">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="countries"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                        <option value="">Pilih jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 text-sm font-bold text-black">Asnaf</label>
                    <select name="asnaf_id" id="countries"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                        <option value="">Pilih Asnaf</option>
                        @php
                            $asnaf_get = DB::table('asnaf')->get();
                        @endphp
                        @foreach ($asnaf_get as $as)
                            <option value="{{ $as->asnaf_id }}">{{ $as->asnaf }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">RT</label>
                        <input name="rt" type="number"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8"
                            placeholder="Masukan rt">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">RW</label>
                        <input name="rw" type="number"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8"
                            placeholder="Masukan rw">
                    </div>
                </div>
                <div>
                    <label class="block mb-1 text-sm font-bold text-black">File Foto</label>
                    <input name="foto_url" type="file" id="name"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8 " />
                </div>
            </div>

            <div class="grid gap-4 mb-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-bold text-black">File KTP</label>
                    <input name="ktp_url" type="file" id="name"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8" />
                </div>
                <div>
                    <label class="block mb-1 text-sm font-bold text-black">File KK</label>
                    <input name="kk_url" type="file" id="name"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8" />
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
