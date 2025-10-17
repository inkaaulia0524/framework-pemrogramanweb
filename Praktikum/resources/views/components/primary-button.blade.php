<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 
                bg-blue-900 text-white 
                border border-transparent rounded-md 
                font-semibold text-xs uppercase tracking-widest 
                hover:bg-blue-800 focus:bg-blue-800 active:bg-blue-950 
                focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2 
                transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>
