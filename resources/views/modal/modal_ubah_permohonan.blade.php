<!-- Modal tambah permohonan -->
<form action="{{ route('permohonan.update', $detail_permohonan->permohonan_id) }}" method="POST">
    @csrf
    @method('PUT')
    <div id="modal-ubahPermohonan-{{ $detail_permohonan->permohonan_id }}"
        class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-md shadow-lg sm:w-[672px] max-h-[90vh] custom-scrollbar overflow-y-auto">
            <div class="flex justify-between items-center border-b-[1.5px] border-gray-500">
                <h2 class="text-sm font-semibold text-gray-800 uppercase">Ubah Permohonan</h2>
                <button id="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4 text-gray-500 hover:text-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Form -->
            <div class="mt-5">
                <div class="grid gap-4 mb-4 mt-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Jenis Permohonan</label>
                        <select name="permohonan_jenis_edit" id="jenis_permohonan"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                            <option value="">Pilih jenis permohonan</option>
                            <option value="Individu"
                                {{ old('permohonan_jenis_edit', $detail_permohonan->permohonan_jenis) == 'Individu' ? 'selected' : '' }}>
                                Individu</option>
                            <option value="UPZ"
                                {{ old('permohonan_jenis_edit', $detail_permohonan->jenipermohonan_jenis) == 'UPZ' ? 'selected' : '' }}>
                                UPZ
                            </option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Nomor Permohonan</label>
                        <input name="permohonan_nomor_edit" type="text"
                            value="{{ old('permohonan_nomor_edit', $detail_permohonan->permohonan_nomor) }}"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            readonly>
                    </div>
                </div>

                <div id="individuFields" style="display: none;">
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nama Pemohon</label>
                            <input name="permohonan_nama_pemohon_edit" type="text"
                                value="{{ old('permohonan_nama_pemohon_edit', $detail_permohonan->permohonan_nama_pemohon) }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                placeholder="Masukan nama pemohon">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">No HP Pemohon</label>
                            <input name="permohonan_nohp_pemohon_edit" type="number"
                                value="{{ old('permohonan_nohp_pemohon_edit', $detail_permohonan->permohonan_nohp_pemohon) }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                placeholder="Masukan no hp pemohon">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-black">Alamat Pemohon</label>
                        <input name="permohonan_alamat_pemohon_edit" type="text"
                            value="{{ old('permohonan_alamat_pemohon_edit', $detail_permohonan->permohonan_alamat_pemohon) }}"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan alamat pemohon">
                    </div>
                </div>

                <div id="upzFields" style="display: none;">
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nama UPZ</label>
                            <input name="upz_edit" type="text" value="{{ old('upz_edit', $detail_permohonan->upz) }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                placeholder="Masukan nama UPZ">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">No HP UPZ</label>
                            <input name="nohp_edit" type="number"
                                value="{{ old('nohp_edit', $detail_permohonan->nohp) }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                placeholder="Masukan no hp UPZ">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-black">Alamat UPZ</label>
                        <input name="alamat_edit" type="text"
                            value="{{ old('alamat_edit', $detail_permohonan->alamat) }}"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan alamat UPZ">
                    </div>
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nama PJ Permohonan</label>
                            <input name="pj_nama_edit" type="text"
                                value="{{ old('pj_nama_edit', $detail_permohonan->pj_nama) }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                placeholder="Masukan nama PJ permohonan">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Jabatan</label>
                            <input name="pj_jabatan_edit" type="text"
                                value="{{ old('pj_jabatan_edit', $detail_permohonan->pj_jabatan) }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                placeholder="Masukan jabatan PJ">
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <hr class="border-gray-500 rounded-lg border-[1.5px]">
                </div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Judul Surat</label>
                        <input name="surat_judul_edit" type="text"
                            value="{{ old('surat_judul_edit', $detail_permohonan->surat_judul) }}" required
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan judul surat">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Nomor Surat</label>
                        <input name="surat_nomor_edit" type="text"
                            value="{{ old('surat_nomor_edit', $detail_permohonan->surat_nomor) }}" required
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukan nomor surat">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Tanggal Surat</label>
                        <input name="surat_tgl_edit" type="date"
                            value="{{ old('surat_tgl_edit', $detail_permohonan->surat_tgl) }}" required
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">File Scan Surat</label>
                        <input name="surat_url_edit" type="file"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            accept=".pdf,.jpg,.jpeg,.png">
                    </div>
                </div>
                <div class="mb-4">
                    <hr class="border-gray-500 rounded-lg border-[1.5px]">
                </div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Asnaf</label>
                        <select name="asnaf_id_edit"
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
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Program</label>
                        <select name="program_id_edit" id="program-select"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                            <option value="">Pilih Program</option>
                            @php
                                $daftar_program = DB::table('program')->get();
                            @endphp
                            @foreach ($daftar_program as $a)
                                <option value="{{ $a->program_id }}"
                                    {{ old('program_id_edit', $detail_permohonan->program_id) == $a->program_id ? 'selected' : '' }}>
                                    {{ $a->program }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-sm font-bold text-black">Sub Program</label>
                    <select name="sub_program_id_edit" id="subprogram-select"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                        <option value="">Pilih Sub Program</option>
                    </select>
                </div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Nominal Diajukan</label>
                        <input name="permohonan_nominal_edit" type="text"
                            value="{{ old('permohonan_nominal_edit', $detail_permohonan->permohonan_nominal) }}"
                            id="nominal-permohonan"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                            placeholder="Masukan nominal" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Bentuk Bantuan</label>
                        <select name="permohonan_bentuk_bantuan_edit" id="countries"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                            <option value="">Pilih bentuk bantuan</option>
                            <option value="Uang Tunai"
                                {{ old('permohonan_bentuk_bantuan_edit', $detail_permohonan->permohonan_bentuk_bantuan) == 'Uang Tunai' ? 'selected' : '' }}>
                                Uang Tunai</option>
                            <option value="Barang"
                                {{ old('permohonan_bentuk_bantuan_edit', $detail_permohonan->permohonan_bentuk_bantuan) == 'Barang' ? 'selected' : '' }}>
                                Barang</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Keterangan /
                        Catatan
                        Tambahan</label>
                    <textarea name="permohonan_catatan_input_edit" id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Masukan keterangan">{{ old('permohonan_catatan_input_edit', $detail_permohonan->permohonan_catatan_input) }}</textarea>
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





<script>
    document.addEventListener("DOMContentLoaded", function() {
        let selectJenis = document.getElementById("jenis_permohonan");
        let individuFields = document.getElementById("individuFields");
        let upzFields = document.getElementById("upzFields");

        function toggleFields() {
            let value = selectJenis.value;
            individuFields.style.display = value === "Individu" ? "block" : "none";
            upzFields.style.display = value === "UPZ" ? "block" : "none";
        }

        selectJenis.addEventListener("change", toggleFields);
        toggleFields();
    });
</script>

<script>
    $(document).ready(function() {
        function loadSubPrograms(programId, selectedSubProgram) {
            $("#subprogram-select").html('<option value="">Memuat...</option>');

            $.ajax({
                url: '/get-subprograms',
                type: 'GET',
                data: {
                    program_id: programId
                },
                success: function(response) {
                    let options = '<option value="">Pilih Sub Program</option>';
                    response.forEach(function(subProgram) {
                        let selected = (selectedSubProgram == subProgram.sub_program_id) ?
                            'selected' : '';
                        options +=
                            `<option value="${subProgram.sub_program_id}" ${selected}>${subProgram.sub_program}</option>`;
                    });
                    $("#subprogram-select").html(options);
                }
            });
        }

        // Saat halaman dimuat, ambil sub program berdasarkan program yang sudah dipilih sebelumnya
        let selectedProgram = $("#program-select").val();
        let selectedSubProgram = "{{ old('sub_program_id_edit', $detail_permohonan->sub_program_id) }}";
        if (selectedProgram) {
            loadSubPrograms(selectedProgram, selectedSubProgram);
        }

        // Saat program berubah, perbarui sub program
        $("#program-select").change(function() {
            let programId = $(this).val();
            loadSubPrograms(programId, null);
        });
    });
</script>
