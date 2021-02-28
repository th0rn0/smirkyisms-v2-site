<div>
	@if ($images->isEmpty())
		Nothing to see here...
	@endif
    @foreach( $images as $image )
    	@livewire( 'images.show', [$image] )
	@endforeach
</div>
