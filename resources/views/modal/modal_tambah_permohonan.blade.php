<form action="#" method="POST" class="mt-4 text-sm">
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div>
            <label class="block mb-1 text-sm font-bold text-black">Jenis Permohonan</label>
            <select wire:model="permohonan_jenis" id="countries"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                <option selected value="">Pilih jenis permohonan</option>
                <option selected value="Individu">Individu</option>
                <option value="UPZ">UPZ</option>
            </select>
        </div>
        <div wire:if="$permohonan_jenis === 'Individu'">
            <label class="block mb-1 text-sm font-bold text-black">Nomor Permohonan</label>
            <input wire:model="permohonan_nomor" type="text" readonly
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                required>
        </div>
        <div wire:if="$permohonan_jenis === 'Individu'">
            <label class="block mb-1 text-sm font-bold text-black">Nama Pemohon</label>
            <input wire:model="permohonan_nama_pemohon" type="text" id="name"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan nama pemohon" required />
        </div>
        <div wire:if="$permohonan_jenis === 'Individu'">
            <label class="block mb-1 text-sm font-bold text-black">No HP Pemohon</label>
            <input wire:model="permohonan_nohp_pemohon" type="number"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan no hp pemohon" required />
        </div>
    </div>
    <div class="mb-4" wire:if="$permohonan_jenis === 'Individu'">
        <label class="block mb-2 text-sm font-bold text-black">Alamat Pemohon</label>
        <input wire:model="permohonan_alamat_pemohon" type="text" id="address"
            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
            placeholder="Masukan alamat pemohon" required />
    </div>
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div wire:if="$permohonan_jenis === 'UPZ'">
            <label class="block mb-1 text-sm font-bold text-black">Nama UPZ</label>
            <input wire:model="upz" type="text" id="name"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan nama UPZ" required />
        </div>
        <div wire:if="$permohonan_jenis === 'UPZ'">
            <label class="block mb-1 text-sm font-bold text-black">No HP UPZ</label>
            <input wire:model="nohp" type="number"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan no hp UPZ" required />
        </div>
    </div>
    <div class="mb-4" wire:if="$permohonan_jenis === 'UPZ'">
        <label class="block mb-2 text-sm font-bold text-black">Alamat UPZ</label>
        <input wire:model="alamat" type="text" id="address"
            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
            placeholder="Masukan alamat UPZ" required />
    </div>
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div wire:if="$permohonan_jenis === 'UPZ'">
            <label class="block mb-1 text-sm font-bold text-black">Nama PJ Permohonan</label>
            <input wire:model="pj_nama" type="text" readonly
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan nama PJ permohonan" required>
        </div>
        <div wire:if="$permohonan_jenis === 'UPZ'">
            <label class="block mb-1 text-sm font-bold text-black">Jabatan</label>
            <input wire:model="pj_jabatan" type="text" id="name"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan jabatan PJ" required />
        </div>
        <div wire:if="$permohonan_jenis === 'UPZ'">
            <label class="block mb-1 text-sm font-bold text-black">No HP</label>
            <input wire:model="pj_nohp" type="number"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan no hp PJ" required />
        </div>
        <div wire:if="$permohonan_jenis === 'UPZ'">
            <label class="block mb-1 text-sm font-bold text-black">Keterangan</label>
            <input wire:model="keterangan" type="number"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan keterangan" required />
        </div>
    </div>
    <div class="mb-4">
        <hr class="border-gray-500 rounded-lg border-[1.5px]">
    </div>
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div>
            <label class="block mb-1 text-sm font-bold text-black">Judul Surat</label>
            <input wire:model="surat_judul" type="text" required
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan judul surat" required>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black">Nomor Surat</label>
            <input wire:model="surat_nomor" type="text" required
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan nomor surat" required>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black">Tanggal Surat</label>
            <input wire:model="surat_tgl" type="date" required
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Tanggal surat" required>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black">File Scan Surat</label>
            <input wire:model="surat_url" type="file" id="name"
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
            <select wire:model="asnaf_id" id="countries"
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
            <select wire:model="program_id" id="countries"
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
        <select wire:model="sub_program_id" id="sub-program-select"
            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
            <option selected value="">Pilih program terlebih dahulu</option>
            @foreach ($sub_program_id as $sub)
                <option value="{{ $sub->sub_program_id }}">{{ $sub->sub_program }}</option>
            @endforeach
        </select>
    </div>
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div>
            <label class="block mb-1 text-sm font-bold text-black">Nominal Diajukan</label>
            <input wire:model="permohonan_nominal" type="text" id="nominal-permohonan"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                placeholder="Masukan nominal" required>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black">Bentuk Bantuan</label>
            <select wire:model="permohonan_bentuk_bantuan" id="countries"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                <option selected value="">Pilih bentuk bantuan</option>
                <option value="Uang Tunai">Uang Tunai</option>
                <option value="Barang">Barang</option>
            </select>
        </div>
    </div>
    <div class="mb-4">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Keterangan / Catatan
            Tambahan</label>
        <textarea wire:model="permohonan_catatan_input" id="message" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
            placeholder="Masukan keterangan"></textarea>
    </div>

    <div class="flex justify-end gap-2 mt-4">
        {{-- <button id="closeModal" class="px-4 py-2 text-sm bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button> --}}
        @if ($permohonan_jenis == '' or $permohonan_nominal == '' or $permohonan_bentuk_bantuan == '')
            <button type="submit" disabled wire:loading.attr="disabled"
                class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>
        @else
            <button type="submit" wire:loading.attr="disabled"
                class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>
        @endif
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#sub-program-select').select2();
    });
</script>

<script>
    $(document).ready(function() {
        window.loadContactDeviceSelect2 = () => {
            $('#nominal-permohonan').on('input', function(e) {
                $('#nominal-permohonan').val(formatRupiah($('#nominal-permohonan').val(),
                    'Rp. '));
            });

            // $(".pilar").on('change',function () {
            //     console.log('LOF');
            //     $('.select2dulu').select2();
            // });
            $('#sub-program-select').on('change', function() {
                console.log($("#sub-program-select").val());
                @this.set('sub_program_id', $("#sub-program-select").val(););
            });
        }
        loadContactDeviceSelect2();
        window.livewire.on('loadContactDeviceSelect2', () => {
            loadContactDeviceSelect2();
        });
    });
</script>
