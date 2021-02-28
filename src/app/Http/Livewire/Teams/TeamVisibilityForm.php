<?php

namespace App\Http\Livewire\Teams;

use Livewire\Component;

use App\Models\Team;

class TeamVisibilityForm extends Component
{
	public Team $team;

    public function render()
    {
        return view('livewire.teams.team-visibility-form');
    }

    public function mount(Team $team)
    {
    	$this->team = $team;
    }
}
