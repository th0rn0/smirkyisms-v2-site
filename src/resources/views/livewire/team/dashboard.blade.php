<div>
    {{ Auth::user()->currentTeam->bot }}
    @if(!Auth::user()->currentTeam->bot)
    	@livewire('bot.add');
    @endif
</div>
