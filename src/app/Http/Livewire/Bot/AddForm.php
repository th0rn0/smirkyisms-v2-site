<?php

namespace App\Http\Livewire\Bot;

use Livewire\Component;
use Illuminate\Http\Request;

use Auth;

class AddForm extends Component
{
	public $icon;
	public $iconUrl;
	public $name;
	public $guildId;

    protected $rules = [
        'guildId' => 'required',
    ];

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
    }

    public function submit(Request $request)
    {
    	$this->validate();
        // $botServer->team_id = $request->name;
        if (!$request->user()->currentTeam->addBot($this->guildId)) {
        	return false;
        }
    	return $this->redirect(
    		'https://discord.com/api/oauth2/authorize?client_id=812732795980873739&permissions=388160&redirect_uri=http%3A%2F%2Flocalhost%3A8000%2Fbot%2Fadded&scope=bot&guild_id=' . $this->guildId
    	);
    }
}
