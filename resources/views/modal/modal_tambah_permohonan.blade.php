<!-- Modal tambah permohonan -->
<form action="{{ route('permohonan.store') }}" method="POST" enctype="multipart/form-data" x-data="currencyFormatter">
    @csrf
    <div id="modal-addPermohonan"
        class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-md shadow-lg sm:w-[672px] max-h-[90vh] custom-scrollbar overflow-y-auto">
            <div class="flex justify-between items-center border-b-[1.5px] border-gray-500">
                <h2 class="text-sm font-semibold text-gray-800 uppercase">Tambah Permohonan</h2>
                <button id="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4 text-gray-500 hover:text-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Form -->
            <div class="mt-5">
                <div x-data="permohonanData()">
                    <div class="grid gap-4 mb-4 mt-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Jenis Permohonan</label>
                            <select name="permohonan_jenis" x-model="jenis" @change="updateNomorPermohonan"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                                <option value="">Pilih jenis permohonan</option>
                                <option value="BAZNAS">BAZNAS</option>
                                <option value="UPZ">UPZ</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-bold text-black">Nomor Permohonan</label>
                            <input name="permohonan_nomor" type="text" x-model="permohonan_nomor"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                readonly>
                        </div>
                    </div>
                
                    <!-- Form untuk BAZNAS -->
                    <div x-show="jenis === 'BAZNAS'">
                        <div class="grid gap-4 mb-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">Nama Pemohon</label>
                                <input name="permohonan_nama_pemohon" type="text"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                    placeholder="Masukan nama pemohon">
                            </div>
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">No HP Pemohon</label>
                                <input name="permohonan_nohp_pemohon" type="number"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                    placeholder="Masukan no hp pemohon">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-black">Alamat Pemohon</label>
                            <input name="permohonan_alamat_pemohon" type="text"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                placeholder="Masukan alamat pemohon">
                        </div>
                    </div>
                
                    <!-- Form untuk UPZ -->
                    <div x-show="jenis === 'UPZ'">
                        <div class="grid gap-4 mb-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">Nama UPZ</label>
                                <input name="upz" type="text"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                    placeholder="Masukan nama UPZ">
                            </div>
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">No HP UPZ</label>
                                <input name="nohp" type="number"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                    placeholder="Masukan no hp UPZ">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-black">Alamat UPZ</label>
                            <input name="alamat" type="text"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                placeholder="Masukan alamat UPZ">
                        </div>
                        <div class="grid gap-4 mb-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">Nama PJ Permohonan</label>
                                <input name="pj_nama" type="text"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                    placeholder="Masukan nama PJ permohonan">
                            </div>
                            <div>
                                <label class="block mb-1 text-sm font-bold text-black">Jabatan</label>
                                <input name="pj_jabatan" type="text"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                                    placeholder="Masukan jabatan PJ">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-4">
                    <hr class="border-gray-500 rounded-lg border-[1.5px]">
                </div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Judul Surat</label>
                        <input name="surat_judul" type="text"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                            placeholder="Masukan judul surat">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Nomor Surat</label>
                        <input name="surat_nomor" type="text"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                            placeholder="Masukan nomor surat">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Tanggal Surat</label>
                        <input name="surat_tgl" type="date"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                            placeholder="Tanggal surat">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">File Scan Surat</label>
                        <input name="surat_url" type="file" id="name"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 "
                         />
                    </div>
                </div>
                <div class="mb-4">
                    <hr class="border-gray-500 rounded-lg border-[1.5px]">
                </div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
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
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Program</label>
                        <select name="program_id" id="program-select"
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
                    <select name="sub_program_id" id="sub-program-select"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                        <option value="">Pilih program terlebih dahulu</option>
                    </select>
                </div>
                <div class="grid gap-4 mb-4 md:grid-cols-2">
                    <div x-data="currencyFormatter()">
                        <label class="block mb-1 text-sm font-bold text-black">Nominal Diajukan</label>
                        <input type="text" id="nominal-permohonan"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                            placeholder="Masukkan nominal" x-model="formattedValue" @input="formatInput" @blur="cleanValue()">
                        <input type="hidden" x-model="rawValue" name="permohonan_nominal">
                    </div> 
                    <div>
                        <label class="block mb-1 text-sm font-bold text-black">Bentuk Bantuan</label>
                        <select name="permohonan_bentuk_bantuan" id="countries"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
                            <option value="">Pilih bentuk bantuan</option>
                            <option value="Uang Tunai">Uang Tunai</option>
                            <option value="Barang">Barang</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Keterangan / Catatan
                        Tambahan</label>
                    <textarea name="permohonan_catatan_input" id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Masukan keterangan"></textarea>
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


    <!-- JavaScript untuk Modal -->
    <script>
        document.getElementById("openModal-addPermohonan").addEventListener("click", function() {
            document.getElementById("modal-addPermohonan").classList.remove("hidden");
        });

        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("modal-addPermohonan").classList.add("hidden");
        });

        document.getElementById("closeModall").addEventListener("click", function() {
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
        $(document).ready(function() {
            $('#program-select').change(function() {
                var program_id = $(this).val();
                $('#sub-program-select').html('<option value="">Loading...</option>'); // Loading text

                if (program_id) {
                    $.ajax({
                        url: "{{ route('get.sub_programs') }}",
                        type: "GET",
                        data: {
                            program_id: program_id
                        },
                        success: function(response) {
                            $('#sub-program-select').html(
                                '<option value="">Pilih Sub Program</option>'
                            ); // Reset dropdown
                            $.each(response, function(key, value) {
                                $('#sub-program-select').append('<option value="' +
                                    value.sub_program_id + '">' + value
                                    .sub_program + '</option>');
                            });
                        }
                    });
                } else {
                    $('#sub-program-select').html(
                        '<option value="">Pilih program terlebih dahulu</option>'
                    ); // Reset jika tidak dipilih
                }
            });
        });
    </script>

<script>
    function permohonanData() {
        return {
            jenis: "{{ old('permohonan_jenis', '') }}",
            permohonan_nomor: "",

            updateNomorPermohonan() {
                if (!this.jenis) return;

                fetch(`/get-permohonan-nomor?jenis=${this.jenis}`)
                    .then(response => response.json())
                    .then(data => {
                        this.permohonan_nomor = data.nomor_permohonan;
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }
        };
    }
</script>

<script>
    function formatRupiah(angka) {
        let numberString = angka.replace(/\D/g, ""); // Hanya angka
        let split = numberString.split(",");
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            let separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        return rupiah;
    }

    function currencyFormatter() {
        return {
            rawValue: "", // Menyimpan nilai asli dalam angka tanpa format
            formattedValue: "", // Menyimpan nilai dalam format rupiah
            
            formatInput(event) {
                let rawValue = event.target.value;
                this.formattedValue = formatRupiah(rawValue);
                this.rawValue = rawValue.replace(/\D/g, ""); // Hanya menyimpan angka
            },

            cleanValue() {
                this.rawValue = this.rawValue.replace(/\D/g, ""); // Pastikan nilai tetap angka
            }
        };
    }
</script>
    
</form>
