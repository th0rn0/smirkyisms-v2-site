<?php

namespace App\Http\Livewire\Teams;

use Livewire\Component;

use App\Models\Team;
use App\Models\TeamPrivacyPermission;

class TeamPrivacyForm extends Component
{
	public Team $team;

    public $password;

    public $password_confirmation;

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
        $this->updateTeamPrivacyForm['id'] = $team->privacy_permissions_id;
    	$this->team = $team;
    	$this->privacyPermissions = TeamPrivacyPermission::all();
    }

    public function updatePrivacy()
    {
        $this->team->setPrivacy($this->updateTeamPrivacyForm['id']);
        $this->emit('saved');
    }

    public function updatePrivacyPassword()
    {
        $validatedData = $this->validate(
            [
            'password'         => 'required',
            'password_confirmation' => 'required|same:password'
            ]
        );
        $this->team->setPrivacy($this->updateTeamPrivacyForm['id']);
        $this->team->setPrivacyPassword($this->password);
        $this->emit('saved');
        $this->emit('savedPassword');
    }

}
