@props(['submit'])

<div {{ $attributes->merge(['class' => 'flex flex-col']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2 text-gray-800 border-green-100 border-solid border-10">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="px-4 py-5 bg-white sm:p-6 shadow">
                <div class="">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 bg-white text-right sm:px-6">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
