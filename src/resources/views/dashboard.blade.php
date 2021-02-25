<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
asd
                    {{ Auth::user()->allTeams() }}
                    @if(count(Auth::user()->allTeams()) <= 0)
                        <div class="mt-8 text-2xl">
                            Welcome to your Smirkyisms Dashboard
                        </div>
                        <div class="mt-2 text-sm text-gray-500">
                            You dont seem to have a Discord Server added, please add one now.
                        </div>
                        <hr>
                        @livewire('teams.create-team-form')
                    @else
                        @livewire('team.dashboard')
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
