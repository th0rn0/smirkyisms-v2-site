<x-jet-section-border />
<div class="mt-10 sm:mt-0">
    <x-jet-form-section submit="updateTeamPrivacy">
        <x-slot name="title">
            {{ __('Community Privacy') }}
        </x-slot>

        <x-slot name="description">
            {{ __('The Privacy for the community\'s Scrapbook on Smirkyisms. This does not affect the bot!') }}
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <div class="relative z-0 mt-1 border border-gray-200 rounded-lg cursor-pointer">
                	@foreach ($privacyPermissions as $index => $privacyPermission)
    	                <button type="button" class="relative px-4 py-3 inline-flex w-full rounded-lg focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue {{ $index > 0 ? 'border-t border-gray-200 rounded-t-none' : '' }} {{ ! $loop->last ? 'rounded-b-none' : '' }}"
    	                                wire:click="$set('addTeamMemberForm.role', '')">
    	                    <div class="{{ $privacyPermission->id != $team->team_visibility_permissions_id ? 'opacity-50' : '' }}">
    	                        <!-- Role Name -->
    	                        <div class="flex items-center">
    	                            <div class="text-sm text-gray-300 ">
    	                                {{ $privacyPermission->name }}
    	                            </div>
                                    @if ($team->team_visibility_permissions_id == $privacyPermission->id)
                                        <svg class="ml-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    @endif
    	                        </div>
    	                        <!-- Role Description -->
    	                        <div class="mt-2 text-xs text-gray-300">
    	                            {{ $privacyPermission->description }}
    	                        </div>
    	                    </div>
    	                </button>
                    @endforeach
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
</div>
