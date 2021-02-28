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
                    @if(count(Auth::user()->allTeams()) <= 0)
                        <div class="mt-8 text-2xl">
                            Welcome!
                        </div>
                        <hr>
                        <div class="mt-8 text-2xl">
                            You dont seem to have a Community setup, please set one up now.
                        </div>
                        <hr>
                        @livewire('teams.create-team-form')
                    @else
                        <div class="mt-8 text-2xl">
                            {{ Auth::user()->currentTeam->name }} Dashboard
                        </div>
                        <hr>
                        @if (Auth::user()->currentTeam->visibility->value == 'full' || Auth::user()->currentTeam->visibility->value == "pass")
                            Your Scrapbook URL is <a href="{{ route('teams.show', ['team' => Auth::user()->currentTeam->slug]) }}">{{ route('teams.show', ['team' => Auth::user()->currentTeam->slug]) }}</a>
                            <hr>
                        @endif
                        @if(!Auth::user()->currentTeam->bot)
                            <div class="mt-8 text-2xl">
                                You dont seem to have a Bot setup, please set one up now.
                            </div>
                            @livewire('bot.add');
                        @else
                            <div>
                                <h2>Quotes</h2>
                                @livewire('quotes.index', [Auth::user()->currentTeam])
                                <hr>
                                <h2>Images</h2>
                                @livewire('images.index', [Auth::user()->currentTeam])
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
