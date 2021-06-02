<x-app-layout>
    @foreach($videos as $video)
        <x-slot name="header">
            <div class="md:flex-row items-center md:items-baseline flex flex-col-reverse justify-between">
                <h2 class="font-semibold uppercase text-4xl py-5 md:py-0 text-pink leading-tight">
                    {{$video->title}}
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
            </div>
        </x-slot>

    <div class="container mx-auto">
        <video width="800" height="auto" controls>
            <source src="/storage/{{$video->video}}" type="video/mp4">
        </video>
        <h2 class="font-semibold uppercase text-2xl py-8 text-white leading-tight">
            {{ __('vergelijkbare videos') }}
        </h2>
        <div class="ls-relatable flex flex-row">
            <video width="250" height="auto" >
                <source src="/storage/{{$video->video}}" type="video/mp4">
            </video>
            <video width="250" class="mx-7" height="auto" >
                <source src="/storage/{{$video->video}}" type="video/mp4">
            </video>
            <video width="250" height="auto" >
                <source src="/storage/{{$video->video}}" type="video/mp4">
            </video>
        </div>
    </div>

@endforeach
        @foreach($profilePicture as $pfp)
            <p>{{ $pfp->name }}</p>
        @endforeach
</x-app-layout>
