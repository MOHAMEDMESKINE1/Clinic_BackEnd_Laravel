<a href="{{$url}}" {{ $attributes->merge(['type' => 'button', 'class' => '
   px-4 
   text-center
   my-2
    py-2 bg-gray-300 
    rounded-md font-semibold text-xs text-white
    dark:text-gray-800 uppercase tracking-widest 
    hover:bg-gray-200
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>