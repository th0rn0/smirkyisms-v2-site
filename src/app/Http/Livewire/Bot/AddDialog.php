<?php

namespace App\Http\Livewire\Bot;

use Livewire\Component;

use LaravelRestcord\Discord;
use LaravelRestcord\Discord\ApiClient;
use Illuminate\Http\Request;


class AddDialog extends Component
{
    public $servers;

    public function render()
    {
        return view('livewire.bot.add-dialog');
    }

    public function mount(Request $request)
    {
        $api = new ApiClient($request->session()->get('did'));
        $discord = new Discord( $api );
        $servers = collect($discord->guilds());
        $filteredServers = $servers->filter(function ($value, $key) {
            return $value->owner;
        });
        $this->servers = $filteredServers;
    }
}
		