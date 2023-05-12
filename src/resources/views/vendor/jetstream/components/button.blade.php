<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900 bg-indigo-400 hover:text-gray-700 hover:bg-indigo-500  focus:outline-none transition ease-in-out duration-150 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
