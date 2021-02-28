<?php

namespace App\Http\Livewire\Teams;

use Livewire\Component;

use App\Models\Team;
use App\Models\TeamVisibilityPermission;

class TeamVisibilityForm extends Component
{
	public Team $team;

	public $visiblityPermissions;

    public function render()
    {
        return view('livewire.teams.team-visibility-form');
    }

    public function mount(Team $team)
    {
    	$this->team = $team;
    	$this->visiblityPermissions = TeamVisibilityPermission::all();
    }
}
