<div class="flex flex-col">
	<div class="overflow-hidden rounded-lg shadow-lg flex flex-col flex-1">
		<div class="flex-1">
			<img class="block h-auto w-full" src="{{ $iconUrl }}" alt="{{ $name }}">
		    <div class="items-center justify-between leading-tight p-2 md:p-4">
	            <div class="flex-1 text-lg text-gray-300 text-center">
	                <p class='text-center'>
	                	{{ $name }}
	                </p>
	            </div>
		    </div>
		</div>
	    <div class="text-center pb-4">
    		<form wire:submit.prevent="submit">
	            <x-jet-button>
	                {{ __('Add Bot') }}
	            </x-jet-button>
	        </form>
        </div>
	</div>
</div>

