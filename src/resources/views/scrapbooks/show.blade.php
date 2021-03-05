<x-app-layout>
    <x-scrapbook-nav :team="$team"/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		 	@if ($random instanceof \App\Models\Image)
	    		<a href="{{ route('images.show', ['team' => $team, 'image' => $random]) }}">
					<x-image :image="$random"/>
				</a>
			@elseif ($random instanceof \App\Models\Quote)
	    		<a href="{{ route('quotes.show', ['team' => $team, 'quote' => $random]) }}">
					<x-quote :quote="$random"/>
				</a>
    		@else
	    		<div class="text-indigo-300 text-lg text-center">
	    			Nothing to see here...
	    		</div>
			@endif
		</div>
	</div>
</x-app-layout>
