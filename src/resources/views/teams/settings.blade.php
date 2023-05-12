<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-400 leading-tight">
            {{ __('Community Settings') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('teams.update-team-name-form', ['team' => $team])

            @livewire('teams.team-privacy-form', ['team' => $team])

            {{-- @livewire('teams.team-member-manager', ['team' => $team]) --}}

            @if ($team->bot)
                <x-jet-section-border />

                @livewire('teams.delete-bot-form', ['team' => $team])
            @endif

            @if (Gate::check('delete', $team) && ! $team->personal_team)
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('teams.delete-team-form', ['team' => $team])
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
