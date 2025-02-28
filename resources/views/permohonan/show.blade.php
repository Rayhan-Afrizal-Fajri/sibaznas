<x-app-layout>
    @section('main_folder', 'Permohonan') @section('main_folder-link',
    route('permohonan.index')) @section('sub_folder', 'Detail Permohonan')
    @section('content')

    @livewire('detail-permohonan', ['permohonan_id' => $permohonan_id])
    {{-- </div> --}}

    @endsection
</x-app-layout>