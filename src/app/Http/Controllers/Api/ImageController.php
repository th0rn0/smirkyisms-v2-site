<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Api\BaseController as BaseController;

use Validator;

use App\Models\BotServer;
use App\Models\Image;

class ImageController extends BaseController
{

	public function getFile(Image $image)
	{
		return base64_encode(Storage::get($image->path));
	}
	public function getRandom()
	{
		return Image::inRandomOrder()->first();
	}
}
