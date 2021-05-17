
<form class="bg-gray-800 max-w-80 flex flex-row justify-around items-center" style="height: 90.4vh">

        <div class="ls-left flex w-3/12	flex-col">
            <div class="mb-10">
                <input type="file" class="min-h-full h-96 w-full bg-white border-green-200 border-6 shadow appearance-none rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1">
                @error('body') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
                <input type="text" class="border-yellow border-6 shadow appearance-none rounded text-black w-full py-4 px-3 placeholder-black::placeholder leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="VIDEO URL: Hier komt de link vanaf een ander platform" wire:model="">
                @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="ls-center w-3/12 flex flex-col" style="justify-content: inherit">
            <div class="mb-4">
                <input type="text" class="border-green-200 border-6	shadow appearance-none rounded text-black w-full py-4 px-3 placeholder-black::placeholder leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="TITEL" wire:model="title">
                @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
                <textarea class="border-yellow border-6 h-56 shadow appearance-none rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="body" placeholder="BESCHRIJVING"></textarea>
                @error('body') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
                <div class="relative inline-flex w-full">
                    <select class="border-green-200 border-6 shadow appearance-none rounded text-black w-full py-4 px-3 placeholder-black::placeholder leading-tight focus:outline-none focus:shadow-outline">
                        <option>TAGS</option>
                        <option>tag 1</option>
                        <option>tag 2</option>
                        <option>tag 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="ls-righ tw-3/12	flex flex-col h-full" style="justify-content: inherit">
            <div class="mb-4">
                <input type="file" class="border-green-200 bg-white border-6	shadow appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1">
                @error('body') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="flex mb-4 self-end">
                <button wire:click.prevent="store()" type="button" class="inline-flex bg-green-200 justify-center rounded-full font-bold px-12 py-4 text-base text-xl uppercase text-white">
                    Uploaden
                </button>
            </div>
        </div>
</form>


