<div>
    @if(!Auth::user()->currentTeam->bot)
    	@livewire('bot.add');
    @else
    	@livewire('quotes.index', [Auth::user()->currentTeam])
    	@livewire('images.index', [Auth::user()->currentTeam])
    @endif
</div>
