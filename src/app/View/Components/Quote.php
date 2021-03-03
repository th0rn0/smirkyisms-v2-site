<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Quote as Item;

class Quote extends Component
{
    public Item $quote;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Item $quote)
    {
        $this->quote = $quote;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.quote');
    }
}
