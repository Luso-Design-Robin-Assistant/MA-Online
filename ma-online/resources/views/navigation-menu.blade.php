<nav x-data="{ open: false }" class="bg-gray-800 text-white">
    <!-- Primary Navigation Menu -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
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
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 md:flex">
                <x-jet-nav-link href="/" :active="request()->routeIs('/')">
                    {{ __('Informatie Pagina') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="" :active="request()->routeIs('units')">
                    {{ __('Units') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('profile', auth()->user()->name) }}" :active="request()->routeIs('profile')">
                    {{ __('Profile') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="/create" :active="request()->routeIs('create')">
                    {{ __('Create') }}
                </x-jet-nav-link>
            </div>
            <div class="flex items-center md:hidden">
                <input id="toggle1" class="hidden mx-8" type="checkbox" />
                <label class="ld-hamburger1" for="toggle1">
                    <div class="ld-top ld-hamburger2 bg-white relative mt-ham"></div>
                    <div class="ld-meat w-10/12	bg-white relative mt-ham"></div>
                    <div class="ld-bottom ld-hamburger2 bg-white relative mt-ham"></div>
                </label>
                <nav class="ld-menu1 w-auto flex flex-col text-white text-2xl text-center absolute top-28 right-0 z-50 overflow-hidden py-24 px-20">
                    <div class="w-full bold h-full bg-white bg-opacity-10 backdrop-filter backdrop-blur-2xl absolute top-0 left-0 z-0"></div>
                    <a href="/" class="ld-link1 py-8 z-10">
                        {{ __('Informatie Pagina') }}
                    </a>
                    <a href="/dashboard" class="ld-link1 py-8 z-10">
                        {{ __('Dashboard') }}
                    </a>
                    <a href="/dashboard" class="ld-link1 py-8 z-10">
                        {{ __('Units') }}
                    </a>
                    <a href="{{ route('profile', auth()->user()->name) }}" class="ld-link1 py-8 z-10">
                        {{ __('Profile') }}
                    </a>
                    <a href="/create" class="ld-link1 py-8 z-10">
                        {{ __('Create') }}
                    </a>
                </nav>
            </div>
        </div>
    </div>
</nav>
