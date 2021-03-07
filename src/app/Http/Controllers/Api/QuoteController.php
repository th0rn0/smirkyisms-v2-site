<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Api\BaseController as BaseController;

use Validator;

use App\Models\BotServer;
use App\Models\Quote;

class QuoteController extends BaseController
{
	public function getRandom(Request $request)
	{
		if (!$request->header('server-token') || !$botServer = BotServer::where('token', $request->header('server-token'))->first()) {
            return $this->sendError('Validation Error', ['Invalid server-token'], 401);
		}
		return $botServer->team->quotes()->inRandomOrder()->first();
	}
}
