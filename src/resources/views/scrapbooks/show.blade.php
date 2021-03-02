<x-app-layout>
    <x-scrapbook-nav :team="$team"/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		 	@if ($random instanceof \App\Models\Image)
				@livewire('images.show', [$random])
			@elseif ($random instanceof \App\Models\Quote)
				@livewire('quotes.show', [$random])
    		@endif
		</div>
	</div>
</x-app-layout>
