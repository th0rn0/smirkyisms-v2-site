<x-jet-action-section>
    <x-slot name="title">
        {{ __('Remove Bot') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Remove Bot From Smirkyisms.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-300">
            {{ __('Once a bot is deleted, you will still need to remove the bot on your Server. All Uploaded Items will be preserved.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="$toggle('confirmingBotDeletion')" wire:loading.attr="disabled">
                {{ __('Remove Bot') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingBotDeletion">
            <x-slot name="title">
                {{ __('Remove Bot') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to remove the bot? Once a bot is remove, all of uploaded items will be retained. You can add the bot again at any time.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingBotDeletion')" wire:loading.attr="disabled">
                    {{ __('Nevermind') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                    {{ __('Remove Bot') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
