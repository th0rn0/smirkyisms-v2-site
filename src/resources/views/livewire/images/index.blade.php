<div>
	@if ($images->isEmpty())
		<div class="text-gray-300">
			Nothing to see here...
		</div>
	@endif
	<div class="flex grid grid-flow-col grid-cols-3 gap-4">
	    @foreach( $images as $image )
	    	<x-image :image="$image" />
		@endforeach
	</div>
</div>
