<?php

namespace App\Http\Livewire\Images;

use Livewire\Component;

use App\Models\Team;

class Index extends Component
{
	public $images;
    public $team;
	public $limit;

    public function render()
    {
        return view('livewire.images.index');
    }

    public function mount(Team $team, $limit = 5)
    {
    	$this->images = $team->images()->limit($limit)->get();
        $this->team = $team;
    }
}
