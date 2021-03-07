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

	public function getFile(Request $request, Image $image)
	{
		if (!$request->header('server-token') || !$botServer = BotServer::where('token', $request->header('server-token'))->first()) {
            return $this->sendError('Validation Error', ['Invalid server-token'], 401);
		}
		return base64_encode(Storage::get($image->path));
	}
	public function getRandom(Request $request)
	{
		if (!$request->header('server-token') || !$botServer = BotServer::where('token', $request->header('server-token'))->first()) {
            return $this->sendError('Validation Error', ['Invalid server-token'], 401);
		}
		return $botServer->team->images()->inRandomOrder()->first();
	}
}
