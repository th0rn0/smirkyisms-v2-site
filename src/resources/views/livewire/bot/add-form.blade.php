<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
	<div class="md:flex">
		<div class="md:flex-shrink-0">
			@if ($icon)
				<img class="h-48 w-full object-cover md:w-48" src="{{ $iconUrl }}" alt="{{ $name }}">
			@endif
		</div>
		<div class="p-8">
			<div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
				<form wire:submit.prevent="submit">
					{{ $name }}
	    			<button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Add Bot</button>
		    	</form>
		    </div>
		</div>
	</div>
</div>