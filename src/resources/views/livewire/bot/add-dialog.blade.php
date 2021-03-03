<div>
  	<div class="text-lg text-indigo-300">
  		Bot Setup
  	</div>
  	<div class="mb-4 text-base text-gray-300">
        You dont seem to have a Bot setup, please set one up now...
    </div>
    <div class="grid grid-cols-3 sm:grid-cols-5 gap-4">
	    @foreach($servers as $server)
    		@livewire('bot.add-form', ['server' => $server])
		@endforeach
	</div>
</div>