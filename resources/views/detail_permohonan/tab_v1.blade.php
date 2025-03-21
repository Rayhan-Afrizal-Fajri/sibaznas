@if (session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-md shadow-lg flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-5 right-5 bg-red-500 text-white px-4 py-2 rounded-md shadow-lg flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        {{ session('error') }}
    </div>
@endif


<div class="flex flex-col gap-4">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between">
        <p class="text-xs font-bold">A. Detail Permohonan</p>
        <div class="flex items-center gap-1 mt-1z sm:mt-0">
            <button onclick="hapusPermohonan('{{ $detail_permohonan->permohonan_id }}')"
                class="flex items-center gap-1 text-[9px] sm:text-xs p-[2px] rounded-md font-regular border-[1px] border-[#00593b] text-[#00593b] hover:bg-[#00593b] hover:border-transparent hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
                Hapus
            </button>
            <button id="openModal-ubahPermohonan-{{ $detail_permohonan->permohonan_id }}"
                class="flex items-center gap-1 text-[9px] sm:text-xs p-[2px] rounded-md font-regular border-[1px] border-[#00593b] text-[#00593b] hover:bg-[#00593b] hover:border-transparent hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                Ubah
            </button>
            <div class=" hs-dropdown [--trigger:hover] relative inline-flex">
                <button id="hs-dropdown-hover-event" type="button"
                    class="hs-dropdown-toggle text-[9px] sm:text-xs p-[2px] rounded-md inline-flex items-center gap-x-1 font-regular border-[1px] border-[#00593b] text-[#00593b] hover:bg-[#00593b] hover:border-transparent hover:text-white shadow-sm disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    Selesai Input
                    <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                    role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
                    <div class="p-1 space-y-0.5">
                        <form action="{{ route('permohonan.selesai', $detail_permohonan->permohonan_id) }}"
                            method="POST" style="display:inline;">
                            @csrf
                            <button type="submit"
                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                Selesai
                            </button>
                        </form>

                        <form action="{{ route('permohonan.batal', $detail_permohonan->permohonan_id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            <button type="submit"
                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                Belum Selesai
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row justify-between gap-2">
        <div class="w-full sm:w-1/2">
            <table class="w-100 sm:min-w-full text-[9px] border border-gray-300 rounded-lg">
                <tbody class="text-[9px] sm:text-xs text-gray-700 bg-white text-left">
                    <tr>
                        <td class="px-2 py-3 border font-bold w-[150px]">Nomor Permohonan</td>
                        <td class="px-2 py-3 border font-medium">{{ $detail_permohonan->permohonan_nomor }}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-3 border font-bold">Tanggal Permohonan</td>
                        <td class="px-2 py-3 border font-medium">
                            {{ Carbon\Carbon::parse($detail_permohonan->permohonan_tgl)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                        </td>
                    </tr>
                    @php
                        if ($detail_permohonan->permohonan_jenis == 'Individu') {
                            $bg_jenis = 'bg-[#00593b]';
                            $nama = $detail_permohonan->permohonan_nama_pemohon;
                            $nohp = $detail_permohonan->permohonan_nohp_pemohon;
                            $alamat = $detail_permohonan->permohonan_alamat_pemohon;
                        } else {
                            $bg_jenis = 'bg-[#3B82F6]';
                            $nama = \App\Models\Permohonan::getNamaUPZ($detail_permohonan->permohonan_upz_id);
                            $nohp = \App\Models\Permohonan::getNoHP($detail_permohonan->permohonan_upz_id);
                            $alamat = \App\Models\Permohonan::getAlamat($detail_permohonan->permohonan_upz_id);
                        }
                    @endphp
                    <tr>
                        <td class="px-2 py-3 border font-bold">Data Pemohon</td>
                        <td class="px-2 py-3 border font-medium">
                            <div>
                                <span
                                    class="text-white px-1 py-[1px] {{ $bg_jenis }} rounded-[3px]">{{ $detail_permohonan->permohonan_jenis }}</span>
                                <p class="font-bold mt-1">{{ $nama }}</p>
                                <p class="font-medium mt-1">{{ $nohp }}</p>
                                <p class="font-medium mt-1">{{ $alamat }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-2 py-3 border font-bold">Nominal</td>
                        <td class="px-2 py-3 border font-medium">
                            Rp{{ number_format((float) $detail_permohonan->permohonan_nominal, 0, '.', '.') }}</td>
                    </tr>
                    @php
                        if ($detail_permohonan->permohonan_bentuk_bantuan == 'Uang Tunai') {
                            $bg_bentuk = 'bg-[#00593b]';
                        } else {
                            $bg_bentuk = 'bg-[#3B82F6]';
                        }
                    @endphp

                    <tr>
                        <td class="px-2 py-3 border font-bold">Bentuk</td>
                        <td class="px-2 py-3 border font-medium">
                            <span
                                class="text-white px-1 py-[1px] {{ $bg_bentuk }} rounded-[3px]">{{ $detail_permohonan->permohonan_bentuk_bantuan }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-2 py-3 border font-bold">Asnaf</td>
                        <td class="px-2 py-3 border font-medium">
                            {{ \App\Models\Permohonan::getAsnaf($detail_permohonan->asnaf_id) }}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-3 border font-bold">Program & Sub Program</td>
                        <td class="px-2 py-3 border font-medium">
                            <p class="font-bold">
                                {{ \App\Models\Permohonan::getProgram($detail_permohonan->program_id) }}</p>
                            <p class="font-medium">
                                {{ \App\Models\Permohonan::getSubProgram($detail_permohonan->program_id) }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-2 py-3 border font-bold">Keterangan</td>
                        <td class="px-2 py-3 border font-medium">{{ $detail_permohonan->permohonan_catatan_input }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full sm:w-1/2">
            <table class="w-100 sm:min-w-full text-[9px] border border-gray-300 rounded-lg">
                <tbody class="text-[9px] sm:text-xs text-gray-700 bg-white text-left">
                    <tr>
                        <td class="px-2 py-3 border font-bold">Surat Permohonan</td>
                        <td class="px-2 py-3 border font-medium">
                            <a href="#" target="_blank" class="text-blue hover:text-blue-500">Permohonan
                                Bantuan.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-2 py-3 border font-bold">Nomor Surat</td>
                        <td class="px-2 py-3 border font-medium">{{ $detail_permohonan->surat_nomor }}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-3 border font-bold">Tanggal Surat</td>
                        <td class="px-2 py-3 border font-medium">
                            {{ Carbon\Carbon::parse($detail_permohonan->surat_tgl)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="px-2 py-3 border font-bold">Tanggal Input</td>
                        <td class="px-2 py-3 border font-medium">
                            {{ Carbon\Carbon::parse($detail_permohonan->permohonan_timestamp_input)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex sm:items-center justify-between">
        <p class="text-xs font-bold">B. Daftar Mustahik</p>
        <button id="openModal-tambahMustahik-{{ $detail_permohonan->permohonan_id }}"
            class="flex items-center gap-1 text-[9px] sm:text-xs font-regular border-[1px] border-[#00593b] text-[#00593b] hover:bg-[#00593b] hover:border-transparent hover:text-white p-[2px] rounded-[4px] sm:rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Tambah
        </button>
    </div>
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table
                    class="w-100 sm:min-w-full text-[9px] text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                    <thead class="text-[9px] sm:text-xs text-gray-700 bg-white">
                        <tr>
                            <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                            <th class="px-2 text-center py-3 border">Nama</th>
                            <th class="px-2 text-center py-3 border">Nomor Identitas</th>
                            <th class="px-2 text-center py-3 border">Tempat, Tgl, Lahir</th>
                            <th class="px-2 text-center py-3 border">Alamat</th>
                            <th class="px-2 text-center py-3 border">Kontak</th>
                            <th class="px-2 text-center py-3 border">Asnaf</th>
                            <th class="px-2 text-center py-3 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($daftar_mustahik as $a)
                            <tr class="bg-white border-b text-xs">
                                <td class="px-2 text-left py-4 border">{{ $loop->iteration }}</td>
                                <td class="px-2 text-left border">{{ $a->nama }}</td>
                                <td class="px-2 text-left border">
                                    NIK : {{ $a->nik }} <br>
                                    KK : {{ $a->kk }}
                                </td>
                                <td class="px-2 text-left border">{{ $a->tempat_lahir }},
                                    {{ Carbon\Carbon::parse($a->tgl_lahir)->isoFormat('D MMMM YYYY') }}</td>
                                <td class="px-2 text-left border">{{ $a->alamat }}</td>
                                <td class="px-2 text-left border">
                                    No hp : {{ $a->nohp }} <br>
                                    E-mail : {{ $a->email }}
                                </td>
                                <td class="px-2 text-left border">
                                    {{ \App\Models\Permohonan::getAsnaf($a->asnaf_id) }}
                                </td>
                                <td class="px-2 text-center border">
                                    <div class="hs-dropdown relative inline-flex">
                                        <button id="hs-dropdown-default" type="button"
                                            class="hs-dropdown-toggle py-[3px] px-[6px] inline-flex items-center gap-x-1 text-[9px] font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                            Aksi
                                            <svg class="hs-dropdown-open:rotate-180 size-3"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                                            role="menu" aria-orientation="vertical"
                                            aria-labelledby="hs-dropdown-default">
                                            <div class="p-1 space-y-0.5">
                                                <button id="openModal-ubahMustahik-{{ $a->mustahik_id }}"
                                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                                    Ubah
                                                </button>
                                                <button onclick="hapusMustahik('{{ $a->mustahik_id }}')"
                                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-gray-500 py-4">
                                    Data tidak ditemukan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="flex sm:items-center justify-between">
        <p class="text-xs font-bold">C. Lampiran</p>
        <button id="openModal-tambahLampiran{{ $detail_permohonan->permohonan_id }}"
            class="flex items-center gap-1 text-[9px] sm:text-xs font-regular border-[1px] border-[#00593b] text-[#00593b] hover:bg-[#00593b] hover:border-transparent hover:text-white p-[2px] rounded-[4px] sm:rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Tambah
        </button>
    </div>
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table
                    class="w-100 sm:min-w-full text-[9px] text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                    <thead class="text-[9px] sm:text-xs text-gray-700 bg-white">
                        <tr>
                            <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                            <th class="px-2 text-center py-3 border">Judul</th>
                            <th class="px-2 text-center py-3 border">File</th>
                            <th class="px-2 text-center py-3 border">Waktu Upload</th>
                            <th class="px-2 text-center py-3 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($lampiran as $a)
                            <tr class="bg-white border-b text-xs">
                                <td class="px-2 text-left py-4 border">{{ $loop->iteration }}</td>
                                <td class="px-2 text-left border">{{ $a->keterangan }}</td>
                                <td class="px-2 text-left border">
                                    <a href="{{ $a->url }}" target="_blank"
                                        class="text-blue-700 hover:text-blue-600">{{ $a->url }}</a>
                                </td>
                                <td class="px-2 text-left border">
                                    {{ Carbon\Carbon::parse($a->created_at)->isoFormat('D MMMM YYYY') }}
                                </td>
                                <td class="px-2 text-center border">
                                    <div class="hs-dropdown relative inline-flex">
                                        <button id="hs-dropdown-default" type="button"
                                            class="hs-dropdown-toggle py-[3px] px-[6px] inline-flex items-center gap-x-1 text-[9px] font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                            Aksi
                                            <svg class="hs-dropdown-open:rotate-180 size-3"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                                            role="menu" aria-orientation="vertical"
                                            aria-labelledby="hs-dropdown-default">
                                            <div class="p-1 space-y-0.5">
                                                <button id="openModal-ubahLampiran-{{ $a->lampiran_id }}"
                                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                                    Ubah
                                                </button>
                                                <button onclick="hapusLampiran('{{ $a->lampiran_id }}')"
                                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-gray-500 py-4">
                                    Data tidak ditemukan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@include('modal.modal_ubah_permohonan')
@include('modal.modal_hapus_permohonan')
@include('modal.modal_tambah_mustahik')
@include('modal.modal_ubah_mustahik')
@include('modal.modal_tambah_lampiran')
@include('modal.modal_ubah_lampiran')

<script>
    document.querySelectorAll("[id^='openModal-ubahPermohonan-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("openModal-ubahPermohonan-", "");
            document.getElementById("modal-ubahPermohonan-" + permohonanId).classList.remove("hidden");
        });
    });

    document.querySelectorAll("[id^='closeModal-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("closeModal-", "");
            document.getElementById("modal-ubahPermohonan-" + permohonanId).classList.add("hidden");
        });
    });

    // Tutup modal jika klik di luar modal
    document.querySelectorAll("[id^='modal-ubahPermohonan-']").forEach(modal => {
        modal.addEventListener("click", function(event) {
            if (event.target === this) {
                this.classList.add("hidden");
            }
        });
    });
</script>

<script>
    document.querySelectorAll("[id^='openModal-ubahMustahik-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("openModal-ubahMustahik-", "");
            document.getElementById("modal-ubahMustahik-" + permohonanId).classList.remove("hidden");
        });
    });

    document.querySelectorAll("[id^='closeModal-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("closeModal-", "");
            document.getElementById("modal-ubahMustahik-" + permohonanId).classList.add("hidden");
        });
    });

    // Tutup modal jika klik di luar modal
    document.querySelectorAll("[id^='modal-ubahMustahik-']").forEach(modal => {
        modal.addEventListener("click", function(event) {
            if (event.target === this) {
                this.classList.add("hidden");
            }
        });
    });
</script>

<script>
    document.querySelectorAll("[id^='openModal-tambahMustahik-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("openModal-tambahMustahik-", "");
            document.getElementById("modal-tambahMustahik-" + permohonanId).classList.remove("hidden");
        });
    });

    document.querySelectorAll("[id^='closeModal-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("closeModal-", "");
            document.getElementById("modal-tambahMustahik-" + permohonanId).classList.add("hidden");
        });
    });

    // Tutup modal jika klik di luar modal
    document.querySelectorAll("[id^='modal-tambahMustahik-']").forEach(modal => {
        modal.addEventListener("click", function(event) {
            if (event.target === this) {
                this.classList.add("hidden");
            }
        });
    });
</script>

<script>
    document.querySelectorAll("[id^='openModal-tambahLampiran-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("openModal-tambahLampiran-", "");
            document.getElementById("modal-tambahLampiran-" + permohonanId).classList.remove("hidden");
        });
    });

    document.querySelectorAll("[id^='closeModal-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("closeModal-", "");
            document.getElementById("modal-tambahLampiran-" + permohonanId).classList.add("hidden");
        });
    });

    // Tutup modal jika klik di luar modal
    document.querySelectorAll("[id^='modal-tambahLampiran-']").forEach(modal => {
        modal.addEventListener("click", function(event) {
            if (event.target === this) {
                this.classList.add("hidden");
            }
        });
    });
</script>

<script>
    document.querySelectorAll("[id^='openModal-ubahLampiran-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("openModal-ubahLampiran-", "");
            document.getElementById("modal-ubahLampiran-" + permohonanId).classList.remove("hidden");
        });
    });

    document.querySelectorAll("[id^='closeModal-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("closeModal-", "");
            document.getElementById("modal-ubahLampiran-" + permohonanId).classList.add("hidden");
        });
    });

    // Tutup modal jika klik di luar modal
    document.querySelectorAll("[id^='modal-ubahLampiran-']").forEach(modal => {
        modal.addEventListener("click", function(event) {
            if (event.target === this) {
                this.classList.add("hidden");
            }
        });
    });
</script>

<script>
    function hapusPermohonan(id) {
        if (!confirm("Yakin ingin menghapus permohonan ini?")) return;

        fetch(`/permohonan/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    "Content-Type": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                location.reload();
            })
            .catch(error => console.error("Error:", error));
    }
</script>

<script>
    function hapusMustahik(id) {
        if (!confirm("Yakin ingin menghapus data ini?")) return;

        fetch(`/mustahik/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    "Content-Type": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                location.reload();
            })
            .catch(error => console.error("Error:", error));
    }
</script>

<script>
    function hapusLampiran(id) {
        if (!confirm("Yakin ingin menghapus data ini?")) return;

        fetch(`/lampiran/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    "Content-Type": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                location.reload();
            })
            .catch(error => console.error("Error:", error));
    }
</script>
