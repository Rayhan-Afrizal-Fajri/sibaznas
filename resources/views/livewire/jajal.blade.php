<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}


    {{-- <input type="text" wire:model.live="name"> --}}


    <select wire:model.live="name" id="countries"
        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 ">
        <option value="">Pilih jenis permohonan</option>
        <option value="Individu">Individu</option>
        <option value="UPZ">UPZ</option>
    </select>
    {{ $this->name }}
    @dump($name)


    <button wire:click='upjajal'>klik</button>

    {{ $this->name }}
    @dump($name)


</div>
