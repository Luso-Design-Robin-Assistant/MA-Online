<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="ls-forms w-full	 h-full items-center ">
                <span class="text-3xl md:text-5xl uppercase font-helvetica-bld tracking-wider" style="color: #EC008C">Aanmelden</span>
                <div>
                    <x-jet-input id="name" placeholder="Naam achternaam:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white; " class="mt-8 md:mt-16 block w-full font-helvetica-med-it" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-input id="email" placeholder="Email:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white; " class="mt-12 block w-full font-helvetica-med-it" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-input id="password" placeholder="Wachtwoord:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white; " class="mt-12 block w-full font-helvetica-med-it" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-input id="password_confirmation" placeholder="Wachtwoord herhalen:" style="background:transparent; color: white; border:none; border-bottom: 2px solid white; " class="mt-12 block w-full font-helvetica-med-it" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
                <x-jet-button class="mt-16 text-center font-helvetica-bld">
                    {{ __('Aanmelden') }}
                </x-jet-button>
            <div class="flex flex-col mt-4" >
                <div class="block text-2xl font-helvetica-bld">
                    <a href="/login">Al een account?</a>
                </div>
            </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
