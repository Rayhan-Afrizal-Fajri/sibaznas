<div wire:ignore.self id="modal-hapusPermohonan" class="fixed inset-0 z-50 flex items-start justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
        <div class="px-6 py-4 border-b">
            <h5 class="text-lg font-bold">Konfirmasi Hapus</h5>
        </div>
        <div class="p-6">
            <p>Yakin ingin menghapus data?</p>
        </div>
        <div class="flex justify-end px-6 py-4 border-t gap-2">
            <button type="button" class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">
                <i class="fas fa-ban"></i> Batal
            </button>
            <button type="button" wire:click.prevent="hapus_permohonan()" class="px-4 py-2 text-sm bg-[#00593b] text-white rounded-lg hover:bg-[#004027]">
                <i class="fas fa-trash"></i> Iya, Hapus
            </button>
        </div>
    </div>
</div>
