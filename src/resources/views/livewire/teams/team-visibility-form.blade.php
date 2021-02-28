<x-jet-section-border />
<x-jet-form-section submit="updateTeamVisiblity">
    <x-slot name="title">
        {{ __('Community Visiblity') }}
    </x-slot>

    <x-slot name="description">
        {{ __('The Community\'s default visiblity to the public. This can be changed on per uploaded item.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Team Name -->
        <div class="col-span-6 sm:col-span-4">
            <div class="relative z-0 mt-1 border border-gray-200 rounded-lg cursor-pointer">
            	<!-- FULLY VISIBLE -->
                <button type="button" class="relative px-4 py-3 inline-flex w-full rounded-lg focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue"
                                wire:click="$set('addTeamMemberForm.role', '')">
                    <div class="">
                        <!-- Role Name -->
                        <div class="flex items-center">
                            <div class="text-sm text-gray-600 ">
                                Full
                            </div>

                        </div>
                        <!-- Role Description -->
                        <div class="mt-2 text-xs text-gray-600">
                            Accessible to anyone
                        </div>
                    </div>
                </button>
                <!-- PASSWORDED -->
                <button type="button" class="relative px-4 py-3 inline-flex w-full rounded-lg focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue border-t border-gray-200 rounded-t-none"
                                wire:click="">
                    <div class="">
                        <!-- Role Name -->
                        <div class="flex items-center">
                            <div class="text-sm text-gray-600 ">
                                Passworded
                            </div>

                        </div>
                        <!-- Role Description -->
                        <div class="mt-2 text-xs text-gray-600">
                            Accessible to anyone with the password
                        </div>
                    </div>
                </button>
             	<!-- LINK ONLY -->
                <button type="button" class="relative px-4 py-3 inline-flex w-full rounded-lg focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue border-t border-gray-200 rounded-t-none"
                                wire:click="$set('addTeamMemberForm.role', '')">
                    <div class="">
                        <!-- Role Name -->
                        <div class="flex items-center">
                            <div class="text-sm text-gray-600 ">
                                Private with Links
                            </div>

                        </div>
                        <!-- Role Description -->
                        <div class="mt-2 text-xs text-gray-600">
                            Accessible to anyone with the direct link
                        </div>
                    </div>
                </button>
                <!-- FULLY PRIVATE -->
                <button type="button" class="relative px-4 py-3 inline-flex w-full rounded-lg focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue border-t border-gray-200 rounded-t-none"
                                wire:click="$set('addTeamMemberForm.role', '')">
                    <div class="">
                        <!-- Role Name -->
                        <div class="flex items-center">
                            <div class="text-sm text-gray-600 ">
                                Private
                            </div>

                        </div>
                        <!-- Role Description -->
                        <div class="mt-2 text-xs text-gray-600">
                            Not Accessible to anyone
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </x-slot>

    @if (Gate::check('update', $team))
        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    @endif
</x-jet-form-section>
