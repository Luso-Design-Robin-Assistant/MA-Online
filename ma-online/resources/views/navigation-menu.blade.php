<nav x-data="{ open: false }" class="bg-gray-800 text-white">
    <!-- Primary Navigation Menu -->
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
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="" :active="request()->routeIs('units')">
                    {{ __('Units') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('user/profile') }}" :active="request()->routeIs('user/profile')">
                    {{ __('Profile') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="/create" :active="request()->routeIs('create')">
                    {{ __('Create') }}
                </x-jet-nav-link>
            </div>
        </div>
    </div>
</nav>
