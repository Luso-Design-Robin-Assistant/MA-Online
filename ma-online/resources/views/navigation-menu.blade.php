<nav x-data="{ open: false }" class="bg-gray-800 text-white">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-14">
        <div class="flex justify-between h-24">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img class="ls-logo w-20" src="{{ url('/images/logo.png') }}" alt="logo-placeholder">
                    </a>
                </div>
                <!-- Navigation Links -->
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="" :active="request()->routeIs('Units')">
                    {{ __('Units') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('Upload')">
                    {{ __('Profile') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="/create" :active="request()->routeIs('Upload')">
                    {{ __('Create') }}
                </x-jet-nav-link>
            </div>
        </div>
        <div class="ls-header py-5 flex ritems-center flex justify-between">
            <div class="ls-header">
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-white leading-tight">header</h2>
                </x-slot>
            </div>
            <div class="relative text-gray-600">
                <div class="ls-searchbar">
                    <input class="border-1 text-white border-green-200 border-3 border-gray-300 bg-gray-800 py-3 items-center px-5 pr-16 rounded-full text-sm focus:outline-none "
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
    </div>
</nav>
