<div>
	@if ($quotes->isEmpty())
		Nothing to see here...
	@endif
	<div class="flex grid grid-flow-col grid-cols-3 gap-4">
	    @foreach( $quotes as $quote )
	    	@livewire( 'quotes.show', [$quote] )
		@endforeach
	</div>
</div>
