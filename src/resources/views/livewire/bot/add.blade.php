<div>
	Please Select a Server you with to add the bot too
    @foreach($servers as $server)
    	@livewire('bot.add-form', ['server' => $server])
	@endforeach
</div>