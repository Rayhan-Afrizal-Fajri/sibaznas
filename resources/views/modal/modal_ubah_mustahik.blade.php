<!-- Modal tambah permohonan -->
@if ($daftar_mustahik->isNotEmpty())
    <form action="{{ route('permohonan.update-mustahik', $daftar_mustahik->mustahik_id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div id="modal-ubahMustahik-{{ $daftar_mustahik->mustahik_id }}"
            class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
            <div class="bg-white p-4 rounded-md shadow-lg sm:w-[672px] max-h-[90vh] custom-scrollbar overflow-y-auto">
                <div class="flex justify-between items-center border-b-[1.5px] border-gray-500">
                    <h2 class="text-sm font-semibold text-gray-800 uppercase">Ubah Mustahik</h2>
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
                            <input name="nama_edit" type="text"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                value="{{ old('nama_edit', $daftar_mustahik->nama) }}">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Tanggal Input</label>
                            <input type="date"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">NO NIK</label>
                            <input name="nik_edit" type="number"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                value="{{ old('nik_edit', $daftar_mustahik->nik) }}">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">NO KK</label>
                            <input name="kk_edit" type="number"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                value="{{ old('kk_edit', $daftar_mustahik->kk) }}">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Tempat Lahir</label>
                            <input name="tempat_lahir_edit" type="text"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                value="{{ old('tempat_lahir_edit', $daftar_mustahik->tempat_lahir) }}">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Tanggal Lahir</label>
                            <input name="tgl_lahir_edit" type="date"
                                value="{{ old('tgl_lahir_edit', $daftar_mustahik->tgl_lahir) }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-black">Alamat</label>
                    <input name="alamat_edit" type="text"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                        value="{{ old('alamat_edit', $daftar_mustahik->alamat) }}">
                </div>

                <div>
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">NO HP</label>
                            <input name="nohp_edit" type="number"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                value="{{ old('nohp_edit', $daftar_mustahik->nohp) }}>
                    </div>
                    <div>
                        <label class="block
                                mb-1 text-sm font-bold text-black">Email</label>
                            <input name="email_edit" type="email"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                value="{{ old('email_edit', $daftar_mustahik->email) }}>
                    </div>
                </div>
            </div>

            <div class="grid
                                gap-4 mb-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">Jenis Kelamin</label>
                                <select name="jenis_kelamin_edit" id="countries"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                                    <option value="">Pilih jenis kelamin</option>
                                    <option value="Laki-laki"
                                        {{ old('jenis_kelamin_edit', $daftar_mustahik->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="Perempuan"
                                        {{ old('jenis_kelamin_edit', $daftar_mustahik->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">Asnaf</label>
                                <select name="asnaf_id_edit" id="countries"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                                    <option value="">Pilih Asnaf</option>
                                    @php
                                        $asnaf_get = DB::table('asnaf')->get();
                                    @endphp
                                    @foreach ($asnaf_get as $as)
                                        <option value="{{ $as->asnaf_id }}"
                                            {{ old('asnaf_id_edit', $detail_permohonan->asnaf_id) == $as->asnaf_id ? 'selected' : '' }}>
                                            {{ $as->asnaf }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="grid gap-4 md:grid-cols-2">
                            <div class="grid gap-4 mb-4 md:grid-cols-2">
                                <div>
                                    <label class="block mb-1 text-sm font-bold text-black">RT</label>
                                    <input name="rt_edit" type="number"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8"
                                        value="{{ old('rt_edit', $daftar_mustahik->rt) }}">
                                </div>
                                <div>
                                    <label class="block mb-1 text-sm font-bold text-black">RW</label>
                                    <input name="rw_edit" type="number"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8"
                                        value="{{ old('rw_edit', $daftar_mustahik->rw) }}">
                                </div>
                            </div>
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">File Foto</label>
                                <input name="foto_url_edit" type="file" id="name"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8 " />
                            </div>
                        </div>

                        <div class="grid gap-4 mb-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">File KTP</label>
                                <input name="ktp_url_edit" type="file" id="name"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8" />
                            </div>
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">File KK</label>
                                <input name="kk_url_edit" type="file" id="name"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 h-8" />
                            </div>
                        </div>

                        <div class="flex justify-end gap-2 mt-4">
                            <button type="button" id="closeModall"
                                class="bg-gray-300 px-3 py-2 rounded-md text-gray-700">
                                Batal
                            </button>
                            <button type="submit"
                                class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>

                        </div>


                    </div>
                </div>
    </form>
@endif
