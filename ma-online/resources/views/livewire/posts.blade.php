
    <div class="mx-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 min-h-screen h-full">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3 flex-wrap" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if($isOpen)
                @include('livewire.create')
            @endif
                <div class="flex-row mx-auto justify-center	 flex bg-opacity-60m">
                @foreach($posts as $post)
                   <div class="flex-col border w-max mx-3.5">
                       <div class="ls-bar py-3 flex-row justify-between flex ">
                           <p class="px-4 py-2 items-center	flex">{{ $post->title }}</p>
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
    </div>


