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

    public function mount(Team $team, $limit = 0)
    {
        if ($limit <= 0) {
            $this->images = $team->images()->inRandomOrder()->orderBy('created_at', 'ASC')->get();
        } else {
            $this->images = $team->images()->inRandomOrder()->orderBy('created_at', 'ASC')->limit($limit)->get();
        }
        $this->team = $team;
    }
}
