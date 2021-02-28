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
	public function getRandom()
	{
		return Quote::inRandomOrder()->first();
	}
}
