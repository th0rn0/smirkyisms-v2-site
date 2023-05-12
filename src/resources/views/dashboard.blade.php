<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-400 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         
            @if(Auth::user() && count(Auth::user()->allTeams()) <= 0)

                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-gray-500 border-b border-gray-600">
                            <div class="mt-8 text-2xl text-indigo-300">
                                Welcome to {{ config('app.name') }}!
                            </div>
                            <div class=" text-lg text-gray-300">
                                You dont seem to have a Community setup, please set one up to get started!
                            </div>
                            <x-jet-section-border />
                            @livewire('teams.create-team-form')
                        </div>
                    </div>
                </div>

            @else 

                <div class="text-xl font-bold leading-normal mt-0 mb-4 text-indigo-300">
                    {{ Auth::user()->currentTeam->name }}
                </div>

                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-gray-500 border-b border-gray-600">

                        @if (Auth::user()->currentTeam->privacy->value == 'full' || Auth::user()->currentTeam->privacy->value == "pass")
                            <br>
                            <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-blue-500">
                                <span class="inline-block align-middle mr-8">
                                    Your Scrapbook URL is 
                                    <a class="hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="{{ route('scrapbooks.show', ['team' => Auth::user()->currentTeam->slug]) }}">{{ route('scrapbooks.show', ['team' => Auth::user()->currentTeam->slug]) }}</a>
                                </span>
                            </div>
                        @endif
                        
                        <div class="flex grid grid-flow-col grid-cols-3 gap-4 mt-2 text-center">
                            <div class="relative flex flex-col min-w-0 break-words mb-6 xl:mb-0">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-gray-300 uppercase font-bold text-base">Bot Status</h5>

                                            @if(Auth::user()->currentTeam->bot)
                                                <span class="font-bold text-lg text-green-400">ONLINE</span>
                                            @else 
                                                <span class="font-bold text-lg text-red-400">OFFLINE</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0 break-words mb-6 xl:mb-0">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-gray-300 uppercase font-bold text-base">Images</h5>
                                            <span class="font-semibold text-lg text-gray-800">{{ Auth::user()->currentTeam->images->count() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0 break-words mb-6 xl:mb-0">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-gray-300 uppercase font-bold text-base">Quotes</h5>
                                            <span class="font-semibold text-lg text-gray-800">{{ Auth::user()->currentTeam->quotes->count() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if(!Auth::user()->currentTeam->bot)
                    <div class="overflow-hidden shadow-xl sm:rounded-lg mt-8">
                        <div class="p-6 sm:px-20 bg-gray-500 border-b border-gray-600">
                            @livewire('bot.add-dialog')
                        </div>
                    </div>
                @endif

                @if(Auth::user()->currentTeam)
                    <div>
                        <x-jet-section-border />
                        <div class="text-xl font-bold leading-normal mt-0 mb-4 text-indigo-300">
                            Latest Quotes
                        </div>
                        @livewire('quotes.index', [Auth::user()->currentTeam, 6])
                        <x-jet-section-border />
                        <div class="text-xl font-bold leading-normal mt-0 mb-4 text-indigo-300">
                            Latest Images
                        </div>
                        @livewire('images.index', [Auth::user()->currentTeam, 6])
                    </div>
                @endif

            @endif
        </div>
    </div> 
</x-app-layout>
