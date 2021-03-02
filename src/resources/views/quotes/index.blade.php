<x-app-layout>
    <x-scrapbook-nav :team="$team"/>
	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-2xl font-bold leading-normal mb-4 text-indigo-400">
                Quotes
            </div>
			@livewire('quotes.index', [$team])
		</div>
	</div>
</x-app-layout>
