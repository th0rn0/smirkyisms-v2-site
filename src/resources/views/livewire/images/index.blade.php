<div>
    @foreach( $images as $image )
    	@livewire( 'images.show', [$image] )
	@endforeach
</div>
