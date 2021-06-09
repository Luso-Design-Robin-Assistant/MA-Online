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
            <span class="text-3xl md:text-5xl font-helvetica-bld tracking-wider uppercase  text-pink" >Inloggen</span>
            <div>
                <x-jet-input id="email" placeholder="Email:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white; " class="mt-16 block w-full font-helvetica-med-it" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-input id="password" placeholder="Wachtwoord:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white; " class="mt-12 block w-full font-helvetica-med-it" type="password" name="password" required autocomplete="current-password" />
            </div>
            <x-jet-button class="mt-12 text-center font-helvetica-bld">
                    {{ __('Inloggen') }}
            </x-jet-button>
            <div class="flex flex-col mt-4">
                @if (Route::has('password.request'))
                    <a class=" text-xl text-gray-600 font-helvetica-rom hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Wachtwoord vergeten?') }}
                    </a>
                @endif
            </div>
            <div class="block mt-4 text-2xl font-helvetica-bld">
                <a href="/register">Nog geen account?</a>
            </div>
        </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
