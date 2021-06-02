<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <div class="flex flex-col relative">
                <h2 class="font-rock-salt uppercase text-2xl sm:text-4xl py-5 md:py-0 text-white leading-tight z-10">
                    {{ __('Profiel Aanpassen') }}
                </h2>
                <h2 class="font-rock-salt uppercase text-2xl sm:text-4xl py-5 md:py-0 text-pink leading-tight absolute top-0.5 left-0.5">
                    {{ __('Profiel Aanpassen') }}
                </h2>
            </div>
            <div class="relative text-gray-600">
                <div class="ls-searchbar">
                    <input class="border-1 text-white border-green-200 border-3 bg-gray-800 py-3 items-center px-5 pr-5 sm:pr-16 rounded-full text-sm focus:outline-none "
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

    <div>
        <div class="container mx-auto py-10 px-4 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
