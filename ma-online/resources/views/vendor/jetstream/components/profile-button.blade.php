<button {{ $attributes->merge(['type' => 'button', 'class' => 'uppercase h-auto font-bold text-md bg-transparent hover:bg-green-100 text-center text-green-100 hover:text-white my-3 border-green-100 border-solid border-6 transition-colors rounded-full py-3 px-10']) }}>
    {{ $slot }}
</button>
