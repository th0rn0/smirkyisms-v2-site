<div>
	@if ($quotes->isEmpty())
		Nothing to see here...
	@endif
    @foreach( $quotes as $quote )
    	@livewire( 'quotes.show', [$quote] )
	@endforeach
</div>
