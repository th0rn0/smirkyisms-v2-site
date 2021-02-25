<div>
	Please Select a Server you with to add the bot too
    @foreach($servers as $server) 
    	<div>
    		{{ $server->id }}
    		{{ $server->name }}
    		{{ $server->icon }}
    		<button>Add Bot</button>
    	</div>
    @endforeach
    @foreach($servers as $server)
    	@livewire('bot.add.form', ['server' => $server])
	@endforeach
</div>