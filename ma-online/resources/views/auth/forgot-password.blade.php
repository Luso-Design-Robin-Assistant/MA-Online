<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="ls-forms w-full	 h-full items-center ">
                <span class="text-3xl md:text-5xl uppercase font-semibold" style="color: #EC008C">Wachtwoord vergeten</span>
                <div class="block">
                    <x-jet-input id="email" placeholder="Email:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white;"  class="mt-16 block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="flex items-center mt-4">
                    <x-jet-button class="mt-16 text-center">
                         {{ __('Verstuur') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
