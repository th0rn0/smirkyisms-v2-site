<?php

namespace App\Http\Livewire\Quotes;

use Livewire\Component;

use App\Models\Team;

class Index extends Component
{
	public $quotes;
	public $team;

    public function render()
    {
        return view('livewire.quotes.index');
    }

    public function mount(Team $team, $limit = 0)
    {
        if ($limit >= 0) {
            $this->quotes = $team->quotes()->inRandomOrder()->orderBy('created_at', 'ASC')->get();
        } else {
            $this->quotes = $team->quotes()->inRandomOrder()->orderBy('created_at', 'ASC')->limit($limit)->get();
        }
    	$this->team = $team;
    }
}
