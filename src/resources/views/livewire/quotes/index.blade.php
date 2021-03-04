<div>
	@if ($quotes->isEmpty())
		<div class="text-indigo-300 text-lg text-center">
			Nothing to see here...
		</div>
	@endif
	<div class="flex grid grid-flow-col grid-cols-3 gap-4">
	    @foreach( $quotes as $quote )
	    	<x-quote :quote="$quote" />
		@endforeach
	</div>
</div>
