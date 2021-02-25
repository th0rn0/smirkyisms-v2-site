<?php

namespace App\Http\Livewire\Images;

use Livewire\Component;

use App\Models\Team;

class Index extends Component
{
	public $images;

    public function render()
    {
        return view('livewire.images.index');
    }

    public function mount(Team $team)
    {
    	$this->images = $team->images;
    }
}
