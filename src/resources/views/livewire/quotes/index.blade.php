<div>
    @foreach( $quotes as $quote )
    	@livewire( 'quotes.show', [$quote] )
	@endforeach
</div>
