<x-jet-action-section>
    <x-slot name="title">
        {{ __('Delete Community') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete this community.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-300">
            {{ __('Once a community is deleted, all of its resources and data will be permanently deleted. Before deleting this community, please download any data or information regarding this community that you wish to retain.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Delete Community') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                {{ __('Delete Community') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete this community? Once a community is deleted, all of its resources and data will be permanently deleted.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    {{ __('Nevermind') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Delete Community') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
