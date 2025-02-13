<button {{ $attributes->merge(['type' => 'submit','class' => 'bg-[#00593b] text-white px-4 py-2 rounded-md hover:bg-green-700']) }}>
    {{ $slot }}
</button>