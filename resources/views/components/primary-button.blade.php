<button {{ $attributes->merge(['type' => 'submit', 'class' => '
    px-4 
    py-2 bg-gray-800
    rounded-md font-semibold text-xs text-white
    text-gray-100 uppercase tracking-widest 
    hover:bg-gray-700
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
