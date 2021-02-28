<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($team->name) }}
        </h2>
    </x-slot>
    <div>
		<h2>Quotes</h2>
		@livewire('quotes.index', [$team])
	</div>
</x-app-layout>
