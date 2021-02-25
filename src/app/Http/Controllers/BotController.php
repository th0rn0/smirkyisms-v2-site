<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\BaseController as BaseController;

use Validator;

use App\Models\BotServer;
use App\Models\Quote;
use App\Models\Image;

class BotController extends BaseController
{
    public function acknowledge(Request $request)
    {
	    $validator = Validator::make($request->all(), [
	        'guild_id' => 'required|exists:bot_servers',
	        'token' => 'required|exists:bot_servers'
	    ]);
	    if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
	    \Log::debug('asdasd');

	    $botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first();
	    if (!$botServer) {
            return $this->sendError('Validation Error.', 'No Server Token');       
	    }
	    return $this->sendResponse(true, 'Server Acknowledged');
    }

    public function confirm(Request $request)
    {
	 	$request->validate([
	        'guild_id' => 'required|exists:bot_servers',
	        'token' => 'required'
	    ]);
	    $botServer = BotServer::where('guild_id', $request->guild_id)->first();
      	if ($botServer->token) {
      		// Bot already Acquired
	    	return false;
	    }
    	$botServer->setToken($request->token);
	    return true;
    }

    public function leave(Request $request)
    {
		$request->validate([
	        'guild_id' => 'required|exists:bot_servers',
	        'token' => 'required|exists:bot_servers'
	    ]);
	    $botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first();
	    if (!$botServer->delete()) {
	    	return false;
	    }
	    return true;
    }

    public function addQuote(Request $request)
    {
    	\Log::debug($request);
	  	$validator = Validator::make($request->all(), [
	        'text' => 'required|string',
	        'quote_by' => 'required',
			'submitted_by' => 'required',
			'channel_name' => 'required',
	        'token' => 'required|exists:bot_servers'
	    ]);
	    if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $botServer = BotServer::where('token', $request->token)->first();
        $quote = Quote::create([
	        'text' => $request->text,
	        'quote_by' => $request->quote_by,
	        'submitted_by' => $request->submitted_by,
	        'channel_name' => $request->channel_name,
	        'team_id' => $botServer->team_id,
        ]);
        return $this->sendResponse($quote, 'success');
    }

    public function addImage(Request $request)
    {
    	\Log::debug($request);
	  	$validator = Validator::make($request->all(), [
	        'image' => 'required|image',
	        'image_by' => 'required',
			'submitted_by' => 'required',
			'channel_name' => 'required',
	        'token' => 'required|exists:bot_servers'
	    ]);
	    if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $botServer = BotServer::where('token', $request->token)->first();
        if (!$path = Storage::putFile('teams', $request->file('image'))) {
            return $this->sendError('Upload Error.', '');       
        }
        $image = Image::create([
	        'path' => $path,
	        'image_by' => $request->image_by,
	        'submitted_by' => $request->submitted_by,
	        'channel_name' => $request->channel_name,
	        'team_id' => $botServer->team_id,
        ]);
        return $this->sendResponse($image, 'success');
    }
}
		