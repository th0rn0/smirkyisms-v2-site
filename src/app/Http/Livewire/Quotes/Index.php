<?php

namespace App\Http\Livewire\Quotes;

use Livewire\Component;

use App\Models\Team;

class Index extends Component
{
	public $quotes;

    public function render()
    {
        return view('livewire.quotes.index');
    }

    public function mount(Team $team)
    {
    	$this->quotes = $team->quotes;
    }
}
