<button {{ $attributes->merge(['type' => 'button', 'class' => 'uppercase h-auto font-bold text-lg bg-transparent hover:bg-yellow text-center text-yellow hover:text-white my-3 border-yellow border-solid border-6 transition-colors rounded-full py-3 px-10']) }}>
    {{ $slot }}
</button>
