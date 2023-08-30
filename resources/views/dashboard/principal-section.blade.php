<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('This section is a example') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit mollitia eum repudiandae repellat aliquam sapiente. Id cum voluptatibus culpa sapiente accusamus quo. Totam incidunt unde consequatur libero numquam, porro exercitationem!') }}
        </p>
        
    </header>


    <x-success-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'open-modal')"
    >{{ __("Open Modal") }}
    </x-success-button>

    <x-modal name="open-modal" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-success-button x-on:click="$dispatch('close')">
                    {{ __('Close') }}
                </x-success-button>

                <x-danger-button class="ml-3">
                    {{ __('Add') }}
                </x-danger-button>
            </div>
        </div>
    </x-modal>
</section>