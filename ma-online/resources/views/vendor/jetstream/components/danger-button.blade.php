<button {{ $attributes->merge(['type' => 'button', 'class' => 'uppercase h-auto font-bold text-lg bg-transparent hover:bg-red text-center text-red hover:text-white my-3 border-red border-solid border-6 transition-colors rounded-full py-3 px-10']) }}>
    {{ $slot }}
</button>
