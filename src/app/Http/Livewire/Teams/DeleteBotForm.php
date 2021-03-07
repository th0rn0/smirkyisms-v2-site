<?php

namespace App\Http\Livewire\Teams;

use Livewire\Component;

use App\Models\Team;

class DeleteBotForm extends Component
{
	public Team $team;

    public $confirmingBotDeletion = false;

    public $deleteBot = '';

    public function render()
    {
        return view('livewire.teams.delete-bot-form');
    }

    public function mount(Team $team)
    {
    	$this->team = $team;
    }

    public function delete()
    {
        $this->team->bot->delete();
        $this->emit('deleted');
        return redirect()->route('dashboard');
    }

}
