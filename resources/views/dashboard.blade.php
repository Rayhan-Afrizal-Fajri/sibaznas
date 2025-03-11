<x-app-layout>
    @section('content')

    <div x-data="{ message: 'Hello, Alpine!' }">
        <p x-text="message"></p>
    </div>
    

    @endsection
</x-app-layout>