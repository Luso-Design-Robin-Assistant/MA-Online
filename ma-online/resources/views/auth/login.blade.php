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
        <div class="ls-forms w-full	 h-full items-center">
            <span class="text-5xl uppercase font-semibold">Inloggen</span>
            <div>
                <x-jet-input id="email" class="block mt-3 w-full border-b-1	border-none" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-input id="password"  class="block mt-3 w-full border-none  border-b-1	" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex flex-col mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="mt-4 text-center">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
