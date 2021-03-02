<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __($team->name) }}
        </h2>
    </x-slot>
    <div>
		<div>
	    	@livewire( 'images.show', [$image] )
		</div>
	</div>
</x-app-layout>
