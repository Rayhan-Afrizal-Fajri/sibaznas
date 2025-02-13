@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#00593b] text-sm font-medium leading-5 text-[#00593b] focus:outline-none focus:border-green-600 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-[#00593b] hover:text-green-600 hover:border-green-600 focus:outline-none focus:text-green-600 focus:border-green-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
