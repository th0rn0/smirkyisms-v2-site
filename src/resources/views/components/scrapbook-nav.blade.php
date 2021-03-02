<div class="bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

	    <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __($team->name) }} Scrap Book
        	<div class="flex grid grid-flow-col grid-cols-3 gap-4 mt-0 text-center mb-4">
        		<div class="text-xl font-bold leading-normal mb-4 text-indigo-400">
	                <a href="{{ route('scrapbooks.show', ['team' => Auth::user()->currentTeam->slug]) }}">Random</a>
	            </div>
	    	 	<div class="text-xl font-bold leading-normal mb-4 text-indigo-400">
	                <a href="{{ route('quotes.index', ['team' => Auth::user()->currentTeam->slug]) }}">Quotes</a>
	            </div>
	            <div class="text-xl font-bold leading-normal mb-4 text-indigo-400">
	                <a href="{{ route('images.index', ['team' => Auth::user()->currentTeam->slug]) }}">Images</a>
	            </div>
	        </div>
        </h2>
	</div>
</div>