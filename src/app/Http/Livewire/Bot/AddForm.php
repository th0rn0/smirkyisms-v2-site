<?php

namespace App\Http\Livewire\Bot;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Models\BotServer;

use Auth;

class AddForm extends Component
{
	public $icon;
	public $iconUrl;
	public $name;
	public $guildId;
    public $confirmed = false;

    public function render()
    {
        return view('livewire.bot.add-form');
    }

    public function mount($server)
    {
        $this->icon = $server->icon;
        $this->iconUrl = '/images/discord.png';
        if ($server->icon != '') {
        	$this->iconUrl = $server->iconUrl();
        }
        $this->name = $server->name;
        $this->guildId = $server->id;
        if (BotServer::where('guild_id', $server->id)->first()) {
            $this->confirmed = true;
        }
    }

    public function submit(Request $request)
    {
        if ($this->confirmed) {
            $this->emit('alreadyConfirmed');
        }
        // $botServer->team_id = $request->name;
        if (!$request->user()->currentTeam->addBot($this->guildId)) {
        	return false;
        }
    	return $this->redirect(
    		config('services.discord.bot_redirect') . '&guild_id=' . $this->guildId
    	);
    }
}
