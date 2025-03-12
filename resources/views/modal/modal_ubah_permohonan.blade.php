<!-- Modal tambah permohonan -->
<form wire:submit.prevent="ubah_permohonan">
    <div wire:ignore.self id="modal-ubahPermohonan"
        class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-md shadow-lg sm:w-[672px] max-h-[90vh] custom-scrollbar overflow-y-auto">
            <div class="flex justify-between items-center border-b-[1.5px] border-gray-500">
                <h2 class="text-sm font-semibold text-gray-800 uppercase">Tambah Permohonan e-DisDay</h2>
                <button id="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4 text-gray-500 hover:text-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Form -->
            <div>
                <div class="grid gap-4 mb-4 mt-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Jenis Permohonan</label>
                        <select wire:model.defer="permohonan_jenis_edit" id="countries"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                            <option value="">Pilih jenis permohonan</option>
                            <option value="Individu" {{ trim($permohonan_jenis_edit) == 'Individu' ? 'selected' : '' }}>
                                Individu</option>
                            <option value="UPZ" {{ trim($permohonan_jenis_edit) == 'UPZ' ? 'selected' : '' }}>UPZ
                            </option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-1  text-sm font-bold text-black">Nomor Permohonan</label>
                        <input wire:model.live="permohonan_nomor_edit" wire:key="permohonan-nomor-{{ now() }}"
                            type="text"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                            readonly>
                    </div>
                </div>
                @if ($this->permohonan_jenis_edit == 'Individu')
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nama Pemohon</label>
                            <input wire:model.live="permohonan_nama_pemohon_edit" type="text" id="name"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan nama pemohon" required />
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">No HP Pemohon</label>
                            <input wire:model.live="permohonan_nohp_pemohon_edit" type="number"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan no hp pemohon" required />
                        </div>
                    </div>
                @endif
                @if ($this->permohonan_jenis_edit == 'Individu')
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-black">Alamat Pemohon</label>
                        <input wire:model.live="permohonan_alamat_pemohon_edit" type="text" id="address"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                            placeholder="Masukan alamat pemohon" required />
                    </div>
                @endif
                @if ($this->permohonan_jenis_edit == 'UPZ')
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nama UPZ</label>
                            <input wire:model.live="upz_edit" type="text" id="name"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan nama UPZ" required />
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">No HP UPZ</label>
                            <input wire:model.live="nohp_edit" type="number"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan no hp UPZ" required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-black">Alamat UPZ</label>
                        <input wire:model.live="alamat_edit" type="text" id="address"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                            placeholder="Masukan alamat UPZ" required />
                    </div>
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nama PJ Permohonan</label>
                            <input wire:model.live="pj_nama_edit" type="text"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan nama PJ permohonan" required>
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Jabatan</label>
                            <input wire:model.live="pj_jabatan_edit" type="text" id="name"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan jabatan PJ" required />
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">No HP</label>
                            <input wire:model.live="pj_nohp_edit" type="number"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan no hp PJ" required />
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Keterangan</label>
                            <input wire:model.live="keterangan_edit" type="number"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan keterangan" required />
                        </div>
                    </div>
                @endif

                <div class="mb-4">
                    <hr class="border-gray-500 rounded-lg border-[1.5px]">
                </div>
                @if ($this->permohonan_jenis_edit)
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Judul Surat</label>
                            <input wire:model.live="surat_judul_edit" type="text" required
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan judul surat" required>
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nomor Surat</label>
                            <input wire:model.live="surat_nomor_edit" type="text" required
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan nomor surat" required>
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Tanggal Surat</label>
                            <input wire:model.live="surat_tgl_edit" type="date" required
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Tanggal surat" required>
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">File Scan Surat</label>
                            <input wire:model.live="surat_url_edit" type="file" id="name"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <hr class="border-gray-500 rounded-lg border-[1.5px]">
                    </div>
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Asnaf</label>
                            <select wire:model.live="asnaf_id_edit" id="countries"
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
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Program</label>
                            <select wire:model.live="program_id_edit" id="countries"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                                <option value="">Pilih Program</option>
                                @php
                                    $daftar_program = DB::table('program')->get();
                                @endphp
                                @foreach ($daftar_program as $a)
                                    <option value="{{ $a->program_id }}">{{ $a->program }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-1 text-sm font-bold text-black">Sub Program</label>
                        {{-- <div wire:ignore> --}}
                            @dump($this->sub_program_id_edit)
                        <select wire:model.live="sub_program_id_edit"
                            wire:key="sub-program-select-{{ $this->program_id_edit }}-{{ $this->sub_program_id_edit }}"
                            id="sub-program-select"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                            @php
                                $daftar_subprogram_edit = App\Models\SubProgram::where(
                                    'program_id',
                                    $this->program_id_edit,
                                )
                                    ->whereRaw('LENGTH(no_urut) = 3')
                                    ->orderBy('no_urut', 'ASC')
                                    ->get();

                                $daftar_subprogram2_edit = App\Models\SubProgram::where(
                                    'program_id',
                                    $this->program_id_edit,
                                )
                                    ->whereRaw('LENGTH(no_urut) = 4')
                                    ->orderBy('no_urut', 'ASC')
                                    ->get();
                                    
                            @endphp
                            @if ($this->program_id_edit == '')
                                <option value="" disabled>Pilih Program Terlebih Dahulu</option>
                            @else
                            @foreach ($daftar_subprogram_edit as $aa)
                            <option value="{{ $aa->sub_program_id }}" {{ $this->sub_program_id_edit == $aa->sub_program_id ? 'selected' : '' }}>
                                {{ $aa->no_urut }} {{ $aa->sub_program }} {{ $aa->sub_program_id }}
                            </option>
                        @endforeach
                        
                        @foreach ($daftar_subprogram2_edit as $bb)
                        <option value="{{ $bb->sub_program_id }}" {{ $this->sub_program_id_edit == $bb->sub_program_id ? 'selected' : '' }}>
                                {{ $bb->no_urut }} {{ $bb->sub_program }} {{ $bb->sub_program_id }}
                            </option>
                        @endforeach
                        

                            @endif
                        </select>
                        {{-- </div> --}}
                    </div>
                    <div class="grid gap-4 mb-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nominal Diajukan</label>
                            <input wire:model.live="permohonan_nominal_edit" type="text" id="nominal-permohonan"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                                placeholder="Masukan nominal" required>
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Bentuk Bantuan</label>
                            <select wire:model.live="permohonan_bentuk_bantuan_edit" id="countries"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                                <option value="">Pilih bentuk bantuan</option>
                                <option value="Uang Tunai">Uang Tunai</option>
                                <option value="Barang">Barang</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Keterangan /
                            Catatan
                            Tambahan</label>
                        <textarea wire:model.live="permohonan_catatan_input_edit" id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Masukan keterangan"></textarea>
                    </div>
                @endif

                <div class="flex justify-end gap-2 mt-4">
                    {{-- <button id="closeModal" class="px-4 py-2 text-sm bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button> --}}
                    @if ($permohonan_jenis_edit == '' or $permohonan_nominal_edit == '' or $permohonan_bentuk_bantuan_edit == '')
                        <button type="submit" disabled wire:loading.attr="disabled"
                            class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>
                    @else
                        <button type="submit" wire:loading.attr="disabled"
                            class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>
                    @endif
                </div>
            </div>


        </div>
    </div>
</form>





<script>
    $(document).ready(function() {
        $('#sub-program-select').on('change', function() {
            var value = $(this).val();
            Livewire.emit('updateSubProgram', value);
        });
    });
</script>

<script>
    $(document).ready(function() {
        window.loadContactDeviceSelect2 = () => {
            $('#nominal-permohonan').on('input', function(e) {
                $('#nominal-permohonan').val(formatRupiah($('#nominal-permohonan').val(),
                    'Rp. '));
            });
        }
        loadContactDeviceSelect2();
        window.livewire.on('loadContactDeviceSelect2', () => {
            loadContactDeviceSelect2();
        });
    });
</script>
