<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white bg-orange-900 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg']) }}>
    {{ $slot }}
</button>
