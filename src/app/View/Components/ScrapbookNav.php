<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Team;

class ScrapbookNav extends Component
{
    public Team $team;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.scrapbook-nav');
    }
}
