<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="ls-forms w-full	 h-full items-center ">
            <span class="text-3xl md:text-5xl uppercase font-semibold" style="color: #EC008C">Inloggen</span>
            <div>
                <x-jet-input id="email" placeholder="Email:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white; " class="mt-16 block mt-3 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-input id="password" placeholder="Wachtwoord:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white; " class="mt-12 block mt-3 w-full " type="password" name="password" required autocomplete="current-password" />
            </div>
            <x-jet-button class="mt-12 text-center">
                    {{ __('Inloggen') }}
            </x-jet-button>
            <div class="flex flex-col mt-4">
                @if (Route::has('password.request'))
                    <a class=" text-xl text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Wachtwoord vergeten?') }}
                    </a>
                @endif
            </div>
            <div class="block mt-4 text-2xl font-bold">
                <a href="/register">Nog geen account?</a>
            </div>
        </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
