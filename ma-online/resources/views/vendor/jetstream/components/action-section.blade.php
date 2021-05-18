<div class="flex flex-col" {{ $attributes }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2 text-gray-800 border-yellow border-solid border-10">
        <div class="px-4 py-5 sm:p-6 bg-white">
            {{ $content }}
        </div>
    </div>
</div>
