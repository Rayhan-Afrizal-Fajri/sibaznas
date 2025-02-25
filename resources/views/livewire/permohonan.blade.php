<div>

    <div class="w-full bg-white shadow px-2 pt-4 pb-3 border border-gray-200 rounded-lg mb-8">
        <form action="/permohonan_post" method="post" id="filterPermohonan" class="mt-4 text-sm">
            @csrf
            <div class="flex flex-col sm:flex-row gap-2 mb-2">
                <label class="w-full">
                    <input type="text" id="daterange"
                        class="border border-gray-300 rounded-lg px-4 py-2 w-full text-gray-700 text-xs font-medium text-center cursor-pointer"
                        readonly name="filter_daterange">
                </label>
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        Status FO
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="fo_lv" onchange="submitPermohonan();" wire:model="filters_fo"
                        wire:loading.attr="disabled">
                        <option value="">Semua</option>
                        <option value="Selesai Input">Selesai Input</option>
                        <option value="Belum Selesai Input">Belum Selesai Input</option>
                    </select>
                </label>
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        Acc Atasan
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="atasan_lv" onchange="submitPermohonan();" wire:model="filters_atasan"
                        wire:loading.attr="disabled">
                        <option value="">Semua</option>
                        <option value="Belum Dicek">Belum Dicek</option>
                        <option value="Diterima">Diterima</option>
                    </select>
                </label>
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        Survey
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="survey_lv" onchange="submitPermohonan();" wire:model="filters_survey"
                        wire:loading.attr="disabled">
                        <option value="Semua">Semua</option>
                        <option value="Tidak Perlu">Tidak Perlu</option>
                        <option value="Perlu">Perlu</option>
                    </select>
                </label>
            </div>
            <div class="flex flex-col sm:flex-row gap-2">
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        Acc Keu
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="pencairan_lv" onchange="submitPermohonan();" wire:model="filters_pencairan"
                        wire:loading.attr="disabled">
                        <option value="">Semua</option>
                        <option value="Belum Dicairkan">Belum Dicairkan</option>
                        <option value="Berhasil Dicairkan">Berhasil Dicairkan</option>
                    </select>
                </label>
                <label class="flex items-center w-full">
                    <span
                        class="bg-white border border-gray-300 border-r-0 text-gray-700 px-3 py-2 text-xs font-medium rounded-l-lg whitespace-nowrap">
                        LPJ
                    </span>
                    <select
                        class="border border-gray-300 px-3 py-2 text-xs w-full rounded-r-lg focus:ring-2 focus:ring-blue-400 focus:outline-none flex-grow flex-1"
                        name="lpj_lv" onchange="submitPermohonan();" wire:model="filters_lpj"
                        wire:loading.attr="disabled">
                        <option value="">Semua</option>
                        <option value="Belum LPJ">Belum LPJ</option>
                        <option value="Sudah LPJ">Sudah LPJ</option>
                    </select>
                </label>
                <div class="w-full">
                    <button form="none"
                        class="w-full bg-gray-300 px-3 py-2 rounded-lg flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="size-4 text-gray-700">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke="currentColor"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <span class="text-xs font-light text-gray-700">Refresh Filter</span>
                    </button>
                </div>
                <div class="w-full">
                    <div class="w-full flex items-center gap-2">
                        <button id="openModal-addPermohonan" form="none"
                            class="w-full bg-[#00593b] px-3 py-2 text-xs font-semibold text-white rounded-lg flex justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 text-white">
                                <path fill-rule="evenodd"
                                    d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Tambah
                        </button>
                        <button form="none"
                            class="w-full bg-white border border-[#00593b] px-3 py-2 text-xs text-[#00593b] font-semibold rounded-lg flex justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 text-[#00593b]">
                                <path
                                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                <path
                                    d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>
                            Ekspor
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="flex items-center gap-1 mt-4 ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="size-4 text-gray-700">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                    clip-rule="evenodd" />
            </svg>
            <p class="text-[10px] text-gray-700">Menampikan data permohonan pada filter terpilih</p>
        </div>
    </div>

    <div class="flex flex-col space-y-4">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table id="myTable"
                        class="w-100 sm:min-w-full text-[9px] text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                        <thead class="text-[9px] sm:text-xs text-gray-700 bg-white">
                            <tr>
                                <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                                <th class="px-2 text-center py-3 border w-[20%]">Nomor & Nominal Pengajuan</th>
                                <th class="px-2 text-center py-3 border w-[20%]">Program & Sub Program</th>
                                <th class="px-2 text-center py-3 border w-[20%]">Survey</th>
                                <th class="px-2 text-center py-3 border w-[20%]">Pencairan</th>
                                <th class="px-2 text-center py-3 border w-[20%]">LPJ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $a)
                                @php
                                    if ($a->pencairan_status_input == 'Selesai Input') {
                                        $bg_fo = 'bg-[#00593b]';
                                        $ket = 'Pengajuan Selesai diinput FO';
                                    } else {
                                        $bg_fo = 'bg-[#f59e0b]';
                                        $ket = 'Pengajuan Blm Selesai diinput FO';
                                    }

                                    if ($a->permohonan_status_atasan == 'Diterima') {
                                        $bg_atasan = 'bg-[#00593b]';
                                        $ket_atasan = 'Disetujui Atasan';
                                    } else {
                                        $bg_atasan = 'bg-[#f59e0b]';
                                        $ket_atasan = 'Blm Direspon Atasan';
                                    }

                                    if ($a->survey_status == 'Selesai') {
                                        $bg_survey = 'bg-[#00593b]';
                                        $ket_survey = 'Sudah Survey';
                                    } else {
                                        $bg_survey = 'bg-[#f59e0b]';
                                        $ket_survey = 'Blm Survey';
                                    }

                                    if ($a->pencairan_status == 'Berhasil Dicairkan') {
                                        $bg_pencairan = 'bg-[#00593b]';
                                        $ket_pencairan = 'Sudah Dicairkan';
                                    } else {
                                        $bg_pencairan = 'bg-[#f59e0b]';
                                        $ket_pencairan = 'Blm Dicairkan';
                                    }

                                @endphp
                                <tr class="bg-white border-b" onclick="openInNewTab('/detail_permohonan/{{ $a->permohonan_id }}');"
                                    style="cursor: pointer;">
                                    <td class="px-2 text-center py-4 border">1</td>
                                    <td class="px-2 py-2 border w-[20%]">
                                        <div class="flex flex-col text-black">
                                            <p
                                                class="{{ $bg_fo }} text-white px-1 py-0.5 mb-1 rounded-sm w-fit">
                                                {{ $ket }}</p>
                                            <p class="text-[5px] sm:text-[9px]">{{ $a->permohonan_nomor }}</p>
                                            <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0 mb-1">
                                                <p>Nominal Diajukan</p>
                                                <p class="font-bold">
                                                    Rp{{ number_format($a->permohonan_nominal), 0, '.', '.' }}</p>
                                            </div>
                                            <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                                <p>Tgl Permohonan</p>
                                                <p class="font-bold">
                                                    {{ Carbon\Carbon::parse($a->permohonan_tgl)->isoFormat('D MMM YYYY') }}
                                                </p>
                                            </div>
                                            <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                                <p>Tgl Selesai Diinput</p>
                                                <p class="font-bold">
                                                    {{ Carbon\Carbon::parse($a->permohonan_timestamp_input)->isoFormat('D MMM YYYY') }}
                                                </p>
                                            </div>
                                            <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                                <div class="flex flex-row gap-1">
                                                    <p>Pemohon</p>
                                                    <p class="{{ $bg }} px-0.5 text-white rounded-sm">
                                                        {{ $a->permohonan_jenis }}</p>
                                                </div>
                                                <p class="font-bold">{{ $nama }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-2 py-2 border w-[20%]">
                                        <div class="flex flex-col text-black">
                                            <p
                                                class="{{ $bg_atasan }} text-white px-1 py-0.5 mb-1 rounded-sm w-fit">
                                                {{ $ket_atasan }}</p>
                                            <div class="flex flex-col">
                                                <p class="font-bold">
                                                    {{ App\Models\Program::where('program_id', $a->program_id)->value('program') ?? '-' }}
                                                </p>
                                                <p class="font-regular">
                                                    {{ App\Models\SubProgram::where('sub_program_id', $a->sub_program_id)->value('sub_program') ?? '-' }}
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <p class="font-bold">Catatan Tambahan</p>
                                                <p class="font-regular">{{ $a->permohonan_catatan_atasan }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-2 py-2 border w-[20%]">
                                        <div class="flex flex-col text-black">
                                            <p
                                                class="{{ $bg_survey }} text-white px-1 py-0.5 mb-1 rounded-sm w-fit">
                                                {{ $ket_survey }}</p>
                                            <div class="flex flex-col">
                                                <p class="font-bold">Disetujui</p>
                                                <p>{{ Carbon\Carbon::parse($a->survey_tgl)->isoFormat('D MMM YYYY') }}
                                                </p>
                                            </div>
                                            <a href="#" class="text-blue-700 hover:text-blue-500"
                                                target="_blank">Form survey.pdf</a>
                                            <div class="flex flex-col">
                                                <p class="font-bold">Catatan Tambahan</p>
                                                <p>Bantuan biaya pendidikan pembayaran SPP bulan januari - maret</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-2 py-2 border w-[20%]">
                                        <div class="flex flex-col text-black">
                                            <p
                                                class="{{ $bg_pencairan }} text-white px-1 py-0.5 mb-1 rounded-sm w-fit">
                                                {{ $ket_pencairan }}</p>
                                            <div class="flex flex-col">
                                                <p class="font-bold">Sumber: {{ $a->pencairan_sumberdana }}</p>
                                                <p>{{ Carbon\Carbon::parse($a->pencairan_timestamp)->isoFormat('D MMM YYYY') }}
                                                </p>
                                            </div>
                                            <div class="flex flex-row justify-between">
                                                <p>Nominal dicairkan</p>
                                                <p class="font-bold">
                                                    Rp{{ number_format($a->pencairan_nominal), 0, '.', '.' }}</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <p class="font-bold">Catatan Tambahan</p>
                                                <p>{{ $a->pencairan_catatan }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-2 py-2 border w-[20%]">
                                        <div class="flex flex-col text-black">
                                            <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">
                                                Selesai
                                                LPJ</p>
                                            <div class="flex flex-col">
                                                <p class="font-bold">Sudah disalurkan</p>
                                                <p>Kamis, 15 Mare 2025</p>
                                            </div>
                                            <div class="flex flex-row justify-between">
                                                <p>Bentuk Penyaluran</p>
                                                <p class="font-bold">{{ $a->permohonan_bentuk_bantuan }}</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <p class="font-bold">Catatan Tambahan</p>
                                                <p>Penyaluran uang tunai bantuan biaya pendidikan</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="bg-white border-b" class="bg-white border-b" onclick="openInNewTab('/detail_permohonan/1');"
                                style="cursor: pointer;">

                                <td class="px-2 text-center py-4 border">1</td>
                                <td class="px-2 py-2 border w-[20%]">
                                    <div class="flex flex-col text-black">
                                        <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Pengajuan
                                            Selesai diinput FO</p>
                                        <p class="text-[5px] sm:text-[9px]">13/E-DISDAY/INDIVIDU/II/2025</p>
                                        <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0 mb-1">
                                            <p>Nominal Diajukan</p>
                                            <p class="font-bold">Rp. 500.000</p>
                                        </div>
                                        <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                            <p>Tgl Permohonan</p>
                                            <p class="font-bold">14 Februari 2025</p>
                                        </div>
                                        <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                            <p>Tgl Selesai Diinput</p>
                                            <p class="font-bold">14 Februari 2025</p>
                                        </div>
                                        <div class="flex flex-col sm:flex-row justify-between mb-1 sm:mb-0">
                                            <div class="flex flex-row gap-1">
                                                <p>Pemohon</p>
                                                <p class="bg-[#00593b] px-0.5 text-white rounded-sm">Individu</p>
                                            </div>
                                            <p class="font-bold">Faiz Abdul Ghoni</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2 py-2 border w-[20%]">
                                    <div class="flex flex-col text-black">
                                        <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Disetujui
                                            Atasan</p>
                                        <div class="flex flex-col">
                                            <p class="font-bold">Cilacap Cerdas (Pendidikan)</p>
                                            <p class="font-regular">1.1 Bantuan biaya pendidikan siswa miskin SMP & SMA
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <p class="font-bold">Cacatan Tambahan</p>
                                            <p class="font-regular">Bantuan biaya pendidikan pembayaran SPP bulan
                                                januari - maret</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2 py-2 border w-[20%]">
                                    <div class="flex flex-col text-black">
                                        <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Sudah
                                            Survey</p>
                                        <div class="flex flex-col">
                                            <p class="font-bold">Disetujui</p>
                                            <p>Kamis, 15 Maret 2025</p>
                                        </div>
                                        <a href="#" class="text-blue-700 hover:text-blue-500"
                                            target="_blank">Form survey.pdf</a>
                                        <div class="flex flex-col">
                                            <p class="font-bold">Catatan Tambahan</p>
                                            <p>Bantuan biaya pendidikan pembayaran SPP bulan januari - maret</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2 py-2 border w-[20%]">
                                    <div class="flex flex-col text-black">
                                        <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Sudah
                                            Dicairkan</p>
                                        <div class="flex flex-col">
                                            <p class="font-bold">Sumber: DANA ZAKAT</p>
                                            <p>Kamis, 15 Mare 2025</p>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <p>Nominal dicairkan</p>
                                            <p class="font-bold">Rp. 500.000</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <p class="font-bold">Catatan Tambahan</p>
                                            <p>Bantuan biaya pendidikan pembayaran SPP bulan januari - maret</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2 py-2 border w-[20%]">
                                    <div class="flex flex-col text-black">
                                        <p class="bg-[#00593b] text-white px-1 py-0.5 mb-1 rounded-sm w-fit">Selesai
                                            LPJ</p>
                                        <div class="flex flex-col">
                                            <p class="font-bold">Sudah disalurkan</p>
                                            <p>Kamis, 15 Mare 2025</p>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <p>Bentuk Penyaluran</p>
                                            <p class="font-bold">Uang Tunai</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <p class="font-bold">Catatan Tambahan</p>
                                            <p>Penyaluran uang tunai bantuan biaya pendidikan</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah permohonan -->
    <div id="modal-addPermohonan"
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
            @include('modal.tambah-permohonan')
        </div>
    </div>

    <!-- JavaScript untuk Modal -->
    <script>
        document.getElementById("openModal-addPermohonan").addEventListener("click", function() {
            document.getElementById("modal-addPermohonan").classList.remove("hidden");
        });

        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("modal-addPermohonan").classList.add("hidden");
        });

        // Tutup modal jika klik di luar modal
        document.getElementById("modal-addPermohonan").addEventListener("click", function(event) {
            if (event.target === this) {
                this.classList.add("hidden");
            }
        });
    </script>

    <script>
        function openInNewTab(url) {
            window.open(url, '_blank');
        }
    </script>

    @php
        $data_first = App\Models\Permohonan::orderBy('created_at', 'asc')->first();
        $data_last = App\Models\Permohonan::orderBy('created_at', 'desc')->first();

        if ($data_first) {
            $data_first = $data_first->created_at->format('Y-m-d');
        } else {
            $data_first = null;
        }

        if ($data_last) {
            $data_last = $data_last->created_at->format('Y-m-d');
        } else {
            $data_last = null;
        }
    @endphp

    <script>
        // daterange
        $(function() {

            var start_date = '{{ $start_date }}';
            var end_date = '{{ $end_date }}';

            var start = moment(start_date);
            var end = moment(end_date);

            function cb(start, end) {
                $('#daterange').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'));
            }
            // moment.locale('id');
            $('#daterange').daterangepicker({
                startDate: start,
                endDate: end,
                locale: {
                    format: 'D MMMM YYYY',
                    separator: ' - ',
                    applyLabel: 'Pilih',
                    cancelLabel: 'Batal',
                    fromLabel: 'Dari',
                    toLabel: 'Hingga',
                    customRangeLabel: 'Pilih Tanggal',
                    weekLabel: 'Mg',
                    daysOfWeek: ['Mg', 'Sn', 'Sl', 'Rb', 'Km', 'Jm', 'Sb'],
                    monthNames: [
                        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
                        'Agustus', 'September', 'Oktober', 'November', 'Desember'
                    ],
                    firstDay: 1
                },
                ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 Hari Terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 Hari Terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan Lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')],
                    'Tahun Ini': [moment().startOf('year'), moment().endOf('year')],
                    'Semua': [moment('{{ $data_first }}'), moment('{{ $data_last }}')]

                }
            }, function(start, end) {
                $('#daterange').val(start.format('Y-MM-DD') + ' - ' + end.format('Y-MM-DD'));
                $('#filterPermohonan').submit(); // Mengirimkan formulir saat terjadi perubahan
            });

            // moment.locale('id');
            cb(start, end);
            window.start = start;
            window.end = end;

        });

        function submitPermohonan() {
            $('#daterange').val(window.start.format('Y-MM-DD') + ' - ' + window.end.format('Y-MM-DD'));
            $('#filterPermohonan').submit();
        }
    </script>
</div>
