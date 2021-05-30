
<x-slot name="header">
    <div class="flex flex-row justify-between">
        <h2 class="font-semibold uppercase text-4xl text-pink leading-tight">
            {{ __('Uploaden') }}
        </h2>

        <div class="relative text-gray-600">
            <div class="ls-searchbar">
                <input class="border-1 text-white border-green-200 border-3 bg-gray-800 py-3 items-center px-5 pr-16 rounded-full text-sm focus:outline-none "
                    type="search" name="search">
                <button type="submit" class="absolute right-0 top-0 mt-4 mr-4">
                    <svg class="fill-green-200 text-green-200 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
        </div>
    {{--            <div class="-mr-2 flex items-center sm:hidden">--}}
    {{--                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">--}}
    {{--                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
    {{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
    {{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
    {{--                    </svg>--}}
    {{--                </button>--}}
    {{--            </div>--}}
    </div>
</x-slot>

<form class="bg-gray-800 container h-screen mx-auto py-16 sm:px-6 lg:px-8 flex flex-row justify-around" style="height: calc(100vh - 189px)" action="{{ route('store') }}">
    @csrf
    <div class="ld-left w-5/12 mr-8 flex flex-col justify-between">
        <div class="mb-10">
            <input type="file" class="w-full bg-white border-green-200 border-6 shadow cursor-pointer appearance-none py-3 px-3 leading-tight focus:outline-none focus:shadow-outline" style="height: 55vh" id="exampleFormControlInput1" wire:model="video">
            @error('body') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div>
            <input type="text" name="url" class="border-yellow border-6 shadow appearance-none text-black w-full py-4 px-3 placeholder-black::placeholder leading-tight focus:outline-none focus:shadow-outline" id="url" placeholder="VIDEO URL: Hier komt de link vanaf een ander platform" wire:model="url">
            @error('url') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="ld-center w-4/12 mr-8 flex flex-col">
        <div class="mb-10">
            <input type="text" class="border-green-200 border-6	shadow appearance-none text-black w-full py-4 px-3 placeholder-black::placeholder leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="TITEL" wire:model="title">
            @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="mb-10">
            <textarea class="border-yellow border-6 w-full h-56 shadow appearance-none text-black py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="body" placeholder="BESCHRIJVING"></textarea>
            @error('body') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div>
            <div class="relative inline-flex w-full">
                <select class="border-green-200 border-6 shadow appearance-none cursor-pointer text-black w-full py-4 px-3 placeholder-black::placeholder leading-tight focus:outline-none focus:shadow-outline">
                    <option>TAGS</option>
                    <option>tag 1</option>
                    <option>tag 2</option>
                    <option>tag 3</option>
                </select>
            </div>
        </div>
    </div>
    <div class="ld-right w-3/12 h-full flex flex-col justify-between">
        <div class="mb-10">
            <input type="file" class="border-green-200 bg-white border-6 shadow cursor-pointer appearance-none w-full py-3 px-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1">
            @error('body') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="flex self-end">
            <button wire:click.prevent="store()" type="button" class="inline-flex bg-green-200 justify-center rounded-full font-bold px-12 py-4 text-xl uppercase text-white">
                Uploaden
            </button>
        </div>
    </div>
</form>
