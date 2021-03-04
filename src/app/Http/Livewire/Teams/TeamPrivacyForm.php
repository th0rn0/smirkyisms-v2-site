<?php

namespace App\Http\Livewire\Teams;

use Livewire\Component;

use App\Models\Team;
use App\Models\TeamPrivacyPermission;

class TeamPrivacyForm extends Component
{
	public Team $team;

	public $privacyPermissions;

    public $updateTeamPrivacyForm = [
        'id' => '',
    ];

    public function render()
    {
        return view('livewire.teams.team-privacy-form');
    }

    public function mount(Team $team)
    {
        $this->updateTeamPrivacyForm['id'] = $team->team_privacy_permissions_id;
    	$this->team = $team;
    	$this->privacyPermissions = TeamPrivacyPermission::all();
    }
}
