<x-jet-form-section submit="updateProfileInformation"> 
    
    <x-slot name="title">
        {{ __('Profiel Informatie') }}
    </x-slot>

    <x-slot name="form">
        <div class="w-full h-full flex flex-row">
            <!-- Profile Photo -->
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div x-data="{photoName: null, photoPreview: null}" class="flex-1">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                                wire:model="photo"
                                x-ref="photo"
                                x-on:change="
                                        photoName = $refs.photo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.photo.files[0]);
                                " />

                    <x-jet-label for="photo" value="{{ __('Foto') }}" />

                    <!-- Current Profile Photo -->
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full w-52 h-52 object-cover mx-auto">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview">
                        <span class="block rounded-full w-52 h-52"
                            x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-jet-profile-button class="mt-6 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Nieuwe foto kiezen') }}
                    </x-jet-profile-button>

                    @if ($this->user->profile_photo_path)
                        <x-jet-profile-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                            {{ __('Verwijder foto') }}
                        </x-jet-profile-button>
                    @endif

                    <x-jet-input-error for="photo" class="mt-2" />
                </div>
            @endif
            
            <div class="flex flex-col flex-1">
                <!-- Name -->
                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('Naam') }}" />
                    <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="w-full mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                    <x-jet-input-error for="email" class="mt-2" />
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Opgeslagen.') }}
        </x-jet-action-message>

        <x-jet-secondary-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Opslaan') }}
        </x-jet-secondary-button>
    </x-slot>
</x-jet-form-section>
