
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold uppercase text-4xl text-pink leading-tight">
                {{ __('Dashboard') }}
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach($posts as $post)
                <div class="flex-col border w-max mx-3.5">
                    <div class="ls-bar py-3 flex-row justify-between flex ">
                        <p class="px-4 py-2 items-center flex">{{ $post->title }}</p>
                        <p class="px-4 py-2 items-center flex">{{ $post->description }}</p>
                        <button wire:click="edit({{ $post->id }})" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 rounded"><svg xmlns="http://www.w3.org/2000/svg" width="40.544" height="40.555" viewBox="0 0 40.544 40.555">
                                <path id="Icon_ionic-ios-settings" data-name="Icon ionic-ios-settings" d="M41.7,24.772A5.217,5.217,0,0,1,45.044,19.9a20.68,20.68,0,0,0-2.5-6.029,5.287,5.287,0,0,1-2.122.454A5.206,5.206,0,0,1,35.658,7,20.618,20.618,0,0,0,29.64,4.5a5.213,5.213,0,0,1-9.735,0A20.68,20.68,0,0,0,13.876,7,5.206,5.206,0,0,1,9.114,14.33a5.115,5.115,0,0,1-2.122-.454A21.137,21.137,0,0,0,4.5,19.915a5.216,5.216,0,0,1,.011,9.735,20.68,20.68,0,0,0,2.5,6.029,5.208,5.208,0,0,1,6.874,6.874,20.8,20.8,0,0,0,6.029,2.5,5.2,5.2,0,0,1,9.714,0,20.68,20.68,0,0,0,6.029-2.5,5.213,5.213,0,0,1,6.874-6.874,20.8,20.8,0,0,0,2.5-6.029A5.242,5.242,0,0,1,41.7,24.772Zm-16.83,8.436a8.447,8.447,0,1,1,8.447-8.447A8.444,8.444,0,0,1,24.867,33.208Z" transform="translate(-4.5 -4.5)" fill="#707070"/>
                            </svg>
                        </button>
                    </div>
                    <svg height="230" viewBox="0 0 351.926 230" width="351.926" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><pattern id="a" height="100%" preserveAspectRatio="xMidYMid slice" viewBox="0 0 283 230" width="100%"><image height="230" width="283" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAADmBAMAAAAXeDxhAAAAG1BMVEXMzMyWlpa+vr6qqqqcnJyjo6O3t7fFxcWxsbE+xwCqAAAACXBIWXMAAA7EAAAOxAGVKw4bAAADi0lEQVR4nO2YT0/bQBDFnTi2c2Sw03CMhVB7xIgPUKtF7REj1PYY04peY1TBNa4q9Wt3/ngdN0TqAe+h0vsdYG2ePM+zsztrggAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4H9jepl90kHyi75sdHRaZr8Pa6aX9NE08e1i7cNOQUQfZFDz4FgGcx7Q+qCm5cEr9V4RLTbjuwkldsYPnsqAVp0vC7qvick5ncng7fh2co1w3gWQCIkO6JCm0cFRYGmik/HtVPQzaWkpObl5+iZJmdPi9UM1nK1e07LmTDQJZd8fSxp9thJ7OL9nkfJluQiCSPIQ0fUBTSWaaiGWl5Kr7dh2Yi2AliOUHCDIsyCYyEsng8LYacRE0GQys1vxdH3giS8i1DeUCFoSDdlFd7mnMY8T0Zjlo+cPfBmRriWJ0NvJU7OTUKp31r1mKtOo4nwhmup4fDtSjjPqJqvmzDzeBTZZrfytyHaa5F58SfZaXVTt6Esr0gU94QgFv3BSpv39LRs4Z1vHA41SSd1rXur0+QPHQF4414XepZ8X+oZLeMl1cz3QMMmZ1LNNk03Z+BQnXWvolm5luzIv+7zfWwqdmch25WqpDv3YiXUB17vWUJmvnFZV+pdG7Igtr3ZaWTHTUhrTytlJNfaNmXAayw4PSl3ifTmNSkjyltaYls6OpIdbgdt4TWN2Trza4bR85l8lXTydUhfgoVBjhbvuNExySlxOHier1WqItW5q3fEkvt5sXDG1g+6dc8b82QntABNqbdhPNSChZt3khcPjmLQqfwu9sGmwTjDttxkNVVM61Bii8bYNzrtpmOkGI73hVo+huuuVdjx0mui90/hqEtIi9+xUWi+NnmquNFtOE+nvhO/ZNJWjt1DtQBZqFXQToXckYEN3WstOYycN0XQHjOWBB76IxBWLFfGcA9aZs8ldlRv6TmPnMOmukafjV+yWjC30hnOkUzPnZirdXC56jZ5SedGvvB1OQ7pXbBt8I9teROmKO/pbPS+H/H2101R0wR0983d0j8h9xujXlby+fUxxCriD6ol9XyMF7OnDZtaHCt3HlH5z6nfDQuNu9jXbwNtn36QPpS50X4ssZqxp+EHnA03lcuLro3hHcknvVjr6uv8vg5548C+Dq7VPNwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMC/+QObBpS0c4cBewAAAABJRU5ErkJggg=="/></pattern><g fill="url(#a)" stroke="#707070"><path d="m0 0h351.926v230h-351.926z" stroke="none"/><path d="m.5.5h350.926v229h-350.926z" fill="none"/></g></svg>
                </div>
            @endforeach
        </div>
    </div>


