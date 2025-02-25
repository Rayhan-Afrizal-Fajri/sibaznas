<form action="#" method="POST" class="mt-4 text-sm">
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Jenis Permohonan</label>
            <select id="countries"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="Individu">Individu</option>
                <option value="opsi 2">opsi 2</option>
            </select>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Nomor Permohonan</label>
            <input type="text" readonly
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="13/E-DISDAY/INDIVIDU/II/2025" required>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Nama Pemohon</label>
            <input type="text" id="name"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Ferriyan Ilyasa" required />
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">No HP Pemohon</label>
            <input type="number"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="081578447350" required />
        </div>
    </div>
    <div class="mb-4">
        <label class="block mb-2 text-sm font-bold text-black dark:text-white">Alamat Pemohon</label>
        <input type="text" id="address"
            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="john.doe@company.com" required />
    </div>
    <div class="mb-4">
        <hr class="border-gray-500 rounded-lg border-[1.5px]">
    </div>
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Nomor Surat</label>
            <input type="text" required
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="001/SuratPermohonanBantuan" required>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Tanggal Surat</label>
            <input type="date" required
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="02/23/2025" required>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">File Scan Surat</label>
            <input type="file" id="name"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Tanggal Input</label>
            <input type="number" readonly
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }} (Today)"
                value="{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }}" required />
        </div>
    </div>
    <div class="mb-4">
        <hr class="border-gray-500 rounded-lg border-[1.5px]">
    </div>
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Asnaf</label>
            <select id="countries"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="miskin">Miskin</option>
                <option value="opsi 2">opsi 2</option>
            </select>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Program</label>
            <select id="countries"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="CILACAP CERDAS (Pendidikan)">CILACAP CERDAS (Pendidikan)</option>
                <option value="opsi 2">opsi 2</option>
            </select>
        </div>
    </div>
    <div class="mb-4">
        <label class="block mb-1 text-sm font-bold text-black dark:text-white">Sub Program</label>
        <select id="countries"
            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected value="1.1 Bantuan Biaya Pendidikan">1.1 Bantuan Biaya Pendidikan</option>
            <option value="opsi 2">opsi 2</option>
        </select>
    </div>
    <div class="grid gap-4 mb-4 md:grid-cols-2">
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Nominal Diajukan</label>
            <input type="text"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Rp 500.000" required>
        </div>
        <div>
            <label class="block mb-1 text-sm font-bold text-black dark:text-white">Bentuk Bantuan</label>
            <select id="countries"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="Uang Tunai">Uang Tunai</option>
                <option value="opsi 2">opsi 2</option>
            </select>
        </div>
    </div>
    <div class="mb-4">
        <label for="message"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan / Catatan
            Tambahan</label>
        <textarea id="message" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Bantuan biaya pendidikan pembayaran SPP"></textarea>
    </div>

    <div class="flex justify-end gap-2 mt-4">
        {{-- <button id="closeModal" class="px-4 py-2 text-sm bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button> --}}
        <button type="submit"
            class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">Simpan</button>
    </div>
</form>