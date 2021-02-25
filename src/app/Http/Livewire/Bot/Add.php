<?php

namespace App\Http\Livewire\Bot;

use Livewire\Component;

use LaravelRestcord\Discord;
use LaravelRestcord\Discord\ApiClient;
use Illuminate\Http\Request;


class Add extends Component
{
    public function render(Request $request)
    {
        $api = new ApiClient($request->session()->get('did'));
        $discord = new Discord( $api );
        // dd($discord->guilds());
        $servers = collect($discord->guilds());
        $filteredServers = $servers->filter(function ($value, $key) {
        	return $value->owner;
        });
        return view('livewire.bot.add')->withServers($filteredServers->all());
    }
}
		