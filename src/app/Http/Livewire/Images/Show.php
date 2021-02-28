<?php

namespace App\Http\Livewire\Images;

use Livewire\Component;

use Illuminate\Support\Facades\Storage;

use App\Models\Image;

class Show extends Component
{
	public $image;
	public $url;
	public $base64;

    public function render()
    {
        return view('livewire.images.show');
    }

    public function mount(Image $image)
    {
    	$this->url = Storage::disk('teams')->url($image->path);
    	$this->image = $image;
    	$this->base64 = base64_encode(Storage::get($image->path));
    }
}
