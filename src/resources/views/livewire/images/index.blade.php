<div>
	@if ($images->isEmpty())
		Nothing to see here...
	@endif
	<div class="flex grid grid-flow-col grid-cols-3 gap-4">
	    @foreach( $images as $image )
	    	@livewire( 'images.show', [$image] )
		@endforeach
	</div>
</div>
