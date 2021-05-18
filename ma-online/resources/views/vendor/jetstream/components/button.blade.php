<button {{ $attributes->merge(['type' => 'submit', 'class' => 'uppercase h-full font-bold text-lg sm:text-xl bg-transparent hover:bg-green-100 text-center text-green-100 hover:text-white my-3 border-green-100 border-solid border-8 transition-colors rounded-full py-4 px-16']) }}>
    {{ $slot }}
</button>
