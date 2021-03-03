<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Illuminate\Support\Facades\Storage;

use App\Models\Image as Item;

class Image extends Component
{

    public Item $image;
    public $url;
    public $base64;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Item $image)
    {
        $this->image = $image;

        $this->url = Storage::disk('teams')->url($image->path);
        $this->image = $image;
        $this->base64 = base64_encode(Storage::get($image->path));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.image');
    }
}
