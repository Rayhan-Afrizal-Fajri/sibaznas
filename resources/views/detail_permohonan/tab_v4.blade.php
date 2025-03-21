<div class="flex flex-col gap-4">

    <div class="w-full flex flex-col gap-4" x-data="{ showAcc: false, showTolak: false }">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between w-1/2">
            <p class="text-xs font-bold">A. Detail Pencairan</p>
            <div class="flex items-center gap-1 mt-1z sm:mt-0">
                <div class="hs-dropdown [--trigger:hover] relative inline-flex">
                    <button id="hs-dropdown-hover-event" type="button"
                        class="hs-dropdown-toggle text-[9px] sm:text-xs p-[2px] rounded-md inline-flex items-center gap-x-1 font-regular border-[1px] border-[#00593b] text-[#00593b] hover:bg-[#00593b] hover:border-transparent hover:text-white shadow-sm disabled:opacity-50 disabled:pointer-events-none"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Respon
                        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                        role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
                        <div class="p-1 space-y-0.5">
                            <a href="#" @click.prevent="showAcc = true"
                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                Acc
                            </a>
                            <a href="#" @click.prevent="showTolak = true"
                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                Tolak
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-3 rounded-md shadow-md w-full sm:w-1/2 relative" x-show="showAcc" x-transition x-cloak>
            <h2 class="text-xs font-semibold text-green-600 uppercase">ACC PENCAIRAN</h2>
            <button @click="showAcc = false" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-xs">
                &times;
            </button>

            <div class="mt-3 space-y-2 mb-3">
                <input type="text" class="w-full p-1 border border-gray-300 rounded bg-gray-100 text-xs"
                    value="{{ Auth::user()->nama }} - {{ Auth::user()->pengurus->jabatan->jabatan }}" disabled>

                <form id="accForm" method="POST" action="{{ route('permohonan.pencairan') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex space-x-2 text-[12px] mb-3">
                        <label class="w-1/3 text-gray-700">Tgl Disetujui</label>
                        <input type="hidden" name="permohonan_id" value="{{ $detail_permohonan->permohonan_id }}">
                        <input name="pencairan_timestamp" type="date"
                            class="w-2/3 p-0.5 border border-gray-300 rounded text-[12px]">
                        <input type="hidden" name="tab" id="currentTab" value="pencairan-keuangan">
                    </div>

                    <div class="flex space-x-2 text-[12px] mb-3">
                        <label class="w-1/3 text-gray-700">Nominal Pencairan</label>
                        <input name="pencairan_nominal" type="number"
                            class="w-2/3 p-0.5 border border-gray-300 rounded text-[12px]"
                            placeholder="Masukan Nominal">
                    </div>

                    <div class="flex space-x-2 text-[12px] mb-3">
                        <label class="w-1/3 text-gray-700">Catatan Tambahan</label>
                        <input name="pencairan_catatan" type="text"
                            class="w-2/3 p-0.5 border border-gray-300 rounded text-[12px]"
                            placeholder="Masukan Catatan">
                    </div>

                    <div class="bg-gray-100 p-2 rounded-md text-[12px] mb-3">
                        <p class="font-bold">INFORMASI!</p>
                        <p class="text-[12px]">Dengan klik tombol ACC, maka Pencairan telah selesai dilakukan.</p>
                    </div>

                    <button type="submit"
                        class="w-full bg-green-600 text-white py-1 rounded-md flex items-center justify-center text-[12px]">
                        ACC
                    </button>
                </form>
            </div>
        </div>

            <div class="bg-white p-3 rounded-md shadow-md w-full sm:w-1/2 relative" x-show="showTolak" x-transition
                x-cloak>
                <h2 class="text-xs font-semibold text-green-600 uppercase">TOLAK PENCAIRAN</h2>
                <button @click="showTolak = false"
                    class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-xs">
                    &times;
                </button>

                <div class="mt-3 space-y-2 mb-3">
                    <input type="text" class="w-full p-1 border border-gray-300 rounded bg-gray-100 text-xs"
                        value="{{ Auth::user()->nama }} - {{ Auth::user()->pengurus->jabatan->jabatan }}" disabled>

                    <form id="accForm" method="POST" action="{{ route('permohonan.tolak-pencairan') }}">
                        @csrf
                        <div class="flex space-x-2 text-[12px] mb-3">
                            <label class="w-1/3 text-gray-700">Tgl Ditolak</label>
                            <input type="hidden" name="permohonan_id"
                                value="{{ $detail_permohonan->permohonan_id }}">
                            <input name="pencairan_timestamp" type="date"
                                class="w-2/3 p-0.5 border border-gray-300 rounded text-[12px]">
                            <input type="hidden" name="tab" id="currentTab" value="pencairan-keuangan">
                        </div>


                        <div class="flex space-x-2 text-[12px] mb-3">
                            <label class="w-1/3 text-gray-700">Alasan Penolakan</label>
                            <input name="pencairan_catatan" type="text"
                                class="w-2/3 p-0.5 border border-gray-300 rounded text-[12px]"
                                placeholder="Masukan alasan">
                        </div>

                        <div class="bg-gray-100 p-2 rounded-md text-[12px] mb-3">
                            <p class="font-bold">INFORMASI!</p>
                            <p class="text-[12px]">Dengan klik tombol Tolak, maka memberikan penolakan untuk pengajuan ini.</p>
                        </div>

                        <button type="submit"
                            class="w-full bg-green-600 text-white py-1 rounded-md flex items-center justify-center text-[12px]">
                            Tolak
                        </button>
                    </form>
                </div>

            </div>

            @php
            $petugas = \App\Models\Pengguna::pengguna($detail_permohonan->pencairan_petugas_keuangan);
            $jabatan = \App\Models\Pengguna::jabatan($detail_permohonan->pencairan_petugas_keuangan);

            if ($detail_permohonan->pencairan_status == 'Berhasil Dicairkan') {
                    $bg_pencairan = 'bg-[#00593b]';
                    $ket_pencairan = 'Sudah Dicairkan';
                } elseif ($detail_permohonan->pencairan_status == 'Ditolak') {
            $bg_pencairan = 'bg-[#dc2626]';
            $ket_pencairan = 'Ditolak';
        }
                else {
                    $bg_pencairan = 'bg-yellow-400';
                    $ket_pencairan = 'Blm Dicairkan';
                }
        @endphp

        </div>
        {{-- <div class="flex flex-col sm:flex-row justify-between gap-2"> --}}
            <div class="w-full sm:w-1/2">
                <table class="w-100 sm:min-w-full text-[9px] border border-gray-300 rounded-lg">
                    <tbody class="text-[9px] sm:text-xs text-gray-700 bg-white text-left">
                        <tr>
                            <td class="px-2 py-3 border font-bold w-[150px]">@if($detail_permohonan->pencairan_status != 'Ditolak') Dicairkan @else Ditolak @endif oleh</td>
                            <td class="px-2 py-3 border font-medium">
                                {{ $petugas }} <br>
                                {{ $jabatan }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-3 border font-bold">Hasil Pencairan</td>
                            <td class="px-2 py-3 border font-medium">
                                <div>
                                    <span class="text-white px-1 py-[1px] {{ $bg_pencairan }} rounded-[3px]">{{ $ket_pencairan }}</span>
                                    <p class="font-bold mt-1">{{ Carbon\Carbon::parse($detail_permohonan->pencairan_timestamp)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</p>
                                    <p class="font-medium mt-1 font-bold">Catatan @if($detail_permohonan->pencairan_status != 'Ditolak') Tambahan @else Penolakan @endif : </p>
                                    <p class="font-medium mt-1">{{ $detail_permohonan->pencairan_catatan ?? '-' }}</p>
                                </div>
                            </td>
                        </tr>
                        @if($detail_permohonan->pencairan_status != 'Ditolak')
                        <tr>
                            <td class="px-2 py-3 border font-bold">Nominal</td>
                            <td class="px-2 py-3 border font-medium">
                                <p class="font-bold">Rp. {{ number_format($detail_permohonan->pencairan_nominal), 0, '.', '.' }}</p>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        {{-- </div> --}}
        <div class="flex sm:items-center justify-between">
            <p class="text-xs font-bold">B. Lampiran</p>
            <button id="openModal-tambahLampiranPencairan-{{ $detail_permohonan->permohonan_id }}"
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
                        @php
                            $file = asset('lampiran_pencairan/' . $detail_permohonan->url);
                        @endphp
                        <tbody>
                            @forelse ($lampiran_pencairan as $a)
                                <tr class="bg-white border-b text-xs">
                                    <td class="px-2 text-left py-4 border">{{ $loop->iteration }}</td>
                                    <td class="px-2 text-left border">{{ $a->keterangan }}</td>
                                    <td class="px-2 text-left border">
                                        <a href="{{ $file }}" target="_blank"
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
                                                    <button id="openModal-ubahLampiranPencairan-{{ $a->lampiran_id }}"
                                                        class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                                        Ubah
                                                    </button>
                                                    <button onclick="hapusLampiranPencairan('{{ $a->lampiran_id }}')"
                                                        class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @include('modal.modal_ubah_lampiran_pencairan')
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
</div>
@include('modal.modal_tambah_lampiran_pencairan')

<script>
    function hapusLampiranSurvey(id) {
        if (!confirm("Yakin ingin menghapus data ini?")) return;

        fetch(`/lampiran-pencairan/${id}`, {
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
    document.querySelectorAll("[id^='openModal-tambahLampiranPencairan-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("openModal-tambahLampiranPencairan-", "");
            document.getElementById("modal-tambahLampiranPencairan-" + permohonanId).classList.remove(
                "hidden");
        });
    });

    document.querySelectorAll("[id^='closeModal-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("closeModal-", "");
            document.getElementById("modal-tambahLampiranPencairan-" + permohonanId).classList.add(
                "hidden");
        });
    });

    // Tutup modal jika klik di luar modal
    document.querySelectorAll("[id^='modal-tambahLampiranPencairan-']").forEach(modal => {
        modal.addEventListener("click", function(event) {
            if (event.target === this) {
                this.classList.add("hidden");
            }
        });
    });
</script>

<script>
    document.querySelectorAll("[id^='openModal-ubahLampiranPencairan-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("openModal-ubahLampiranPencairan-", "");
            document.getElementById("modal-ubahLampiranPencairan-" + permohonanId).classList.remove(
                "hidden");
        });
    });

    document.querySelectorAll("[id^='closeModal-']").forEach(button => {
        button.addEventListener("click", function() {
            let permohonanId = this.id.replace("closeModal-", "");
            document.getElementById("modal-ubahLampiranPencairan-" + permohonanId).classList.add("hidden");
        });
    });

    // Tutup modal jika klik di luar modal
    document.querySelectorAll("[id^='modal-ubahLampiranPencairan-']").forEach(modal => {
        modal.addEventListener("click", function(event) {
            if (event.target === this) {
                this.classList.add("hidden");
            }
        });
    });
</script>