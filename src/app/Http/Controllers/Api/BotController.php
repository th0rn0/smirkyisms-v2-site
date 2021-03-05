<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Api\BaseController as BaseController;

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
	    if (!$botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first()) {
            return $this->sendError('Validation Error', ['Invalid Server Token or Guild ID'], 422);
	    }
	    return $this->sendResponse($botServer, 'Server Acknowledged');
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
            return $this->sendError('Validation Error', ['Server Already Acquired by another Bot'], 422);       
	    }
    	$botServer->setToken($request->token);
	    return $this->sendResponse($botServer, 'Server Confirmed');
    }

    public function leave(Request $request)
    {
		$request->validate([
	        'guild_id' => 'required|exists:bot_servers',
	        'token' => 'required|exists:bot_servers'
	    ]);
	    if (!$botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first()) {
            return $this->sendError('Validation Error', ['Invalid Server Token or Guild ID'], 422);
	    }
	    if (!$botServer->delete()) {
            return $this->sendError('Cannot Delete Server', [], 422);       
	    }
	    return $this->sendResponse('Success', 'Server Removed');
    }

    public function addQuote(Request $request)
    {
	  	$validator = Validator::make($request->all(), [
	        'text' => 'required|string',
	        'quote_by' => 'required',
	        'quote_by_id' => 'required',
			'submitted_by' => 'required',
			'submitted_by_id' => 'required',
			'channel_name' => 'required',
			'channel_name_id' => 'required',
	        'token' => 'required|exists:bot_servers',
	        'guild_id' => 'required|exists:bot_servers',
	        'guild_name' => 'required',
	    ]);
	    if($validator->fails()){
            return $this->sendError('Validation Error', $validator->errors(), 422);       
        }
	    if (!$botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first()) {
            return $this->sendError('Validation Error', ['Invalid Server Token or Guild ID'], 422);
	    }
        $quote = Quote::create([
	        'text' => $request->text,
	        'quote_by' => $request->quote_by,
	        'submitted_by' => $request->submitted_by,
	        'channel_name' => $request->channel_name,
	        'team_id' => $botServer->team_id,
        ]);
        return $this->sendResponse($quote, 'Quote Successfully Added');
    }

    public function addImage(Request $request)
    {
	  	$validator = Validator::make($request->all(), [
	        'image' => 'required|image',
	        'image_by' => 'required',
	        'image_by_id' => 'required',
			'submitted_by' => 'required',
			'submitted_by_id' => 'required',
			'channel_name' => 'required',
			'channel_name_id' => 'required',
	        'token' => 'required|exists:bot_servers',
	        'guild_id' => 'required|exists:bot_servers',
	        'guild_name' => 'required',
	    ]);
	    if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(), 422);       
        }
	    if (!$botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first()) {
            return $this->sendError('Validation Error', ['Invalid Server Token or Guild ID'], 422);
	    }
        if (!$path = Storage::putFile('teams/' . $botServer->team->slug, $request->file('image'))) {
            return $this->sendError('Upload Error', [], 422);       
        }
        $image = Image::create([
	        'path' => $path,
	        'image_by' => $request->image_by,
	        'submitted_by' => $request->submitted_by,
	        'channel_name' => $request->channel_name,
	        'team_id' => $botServer->team_id,
        ]);
        return $this->sendResponse($image, 'Image Successfully Uploaded');
    }
}
		