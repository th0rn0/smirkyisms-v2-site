<?php

namespace App\Http\Livewire\Quotes;

use Livewire\Component;

use App\Models\Quote;

class Show extends Component
{
	public $quote;

    public function render()
    {
        return view('livewire.quotes.show');
    }

    public function mount(Quote $quote)
    {
    	$this->quote = $quote;
    }
}
