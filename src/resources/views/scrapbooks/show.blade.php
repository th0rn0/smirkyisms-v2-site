<x-app-layout>
    <x-scrapbook-nav :team="$team"/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		 	@if ($random instanceof \App\Models\Image)
				<x-image :image="$random"/>
			@elseif ($random instanceof \App\Models\Quote)
				<x-quote :quote="$random"/>
    		@else
	    		<div class="text-indigo-300 text-lg text-center">
	    			Nothing to see here...
	    		</div>
			@endif
		</div>
	</div>
</x-app-layout>
