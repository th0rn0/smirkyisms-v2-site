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
    // Confirm Bot has join a server and look up token
    public function confirm(Request $request)
    {
	 	$validator = Validator::make($request->all(), [
	        'guild_id' => 'required|exists:bot_servers'
	    ]);
      	if($validator->fails()){
            return $this->sendError('Validation Error', $validator->errors(), 422);       
        }
	    $botServer = BotServer::where('guild_id', $request->guild_id)->first();
      	if ($botServer->confirmed) {
      		// Bot already Acquired
            return $this->sendError('Validation Error', ['Server Already Acquired by another Bot'], 422);       
	    }
	    $botServer->setConfirmed();
	    return $this->sendResponse($botServer, 'Server Confirmed');
    }

    public function leave(Request $request)
    {
		$validator = Validator::make($request->all(), [
	        'guild_id' => 'required',
	        'token' => 'required'
	    ]);
	    if($validator->fails()){
            return $this->sendError('Validation Error', $validator->errors(), 422);       
        }
	    if (!$botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first()) {
            return $this->sendError('Validation Error', ['Invalid Server Token or Guild ID'], 401);
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
			'channel_id' => 'required',
	        'token' => 'required',
	        'guild_id' => 'required',
	        'guild_name' => 'required',
	    ]);
	    if($validator->fails()){
            return $this->sendError('Validation Error', $validator->errors(), 422);       
        }
	    if (!$botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first()) {
            return $this->sendError('Validation Error', ['Invalid Server Token or Guild ID'], 401);
	    }
        $quote = Quote::create([
	        'text' => $request->text,
	        'quote_by' => $request->quote_by,
	        'quote_by_id' => $request->quote_by_id,
	        'submitted_by' => $request->submitted_by,
	        'submitted_by_id' => $request->submitted_by_id,
	        'channel_name' => $request->channel_name,
	        'channel_id' => $request->channel_id,
	        'team_id' => $botServer->team_id,
	        'guild_name' => $request->guild_name,
	        'guild_id' => $request->guild_id,
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
			'channel_id' => 'required',
	        'token' => 'required',
	        'guild_id' => 'required',
	        'guild_name' => 'required',
	    ]);
	    if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(), 422);       
        }
	    if (!$botServer = BotServer::where('guild_id', $request->guild_id)->where('token', $request->token)->first()) {
            return $this->sendError('Validation Error', ['Invalid Server Token or Guild ID'], 401);
	    }
        if (!$path = Storage::putFile('teams/' . $botServer->team->slug, $request->file('image'))) {
            return $this->sendError('Upload Error', [], 422);       
        }
        $image = Image::create([
	        'path' => $path,
	        'image_by' => $request->image_by,
	        'image_by_id' => $request->image_by_id,
	        'submitted_by' => $request->submitted_by,
	        'submitted_by_id' => $request->submitted_by_id,
	        'channel_name' => $request->channel_name,
	        'channel_id' => $request->channel_id,
	        'team_id' => $botServer->team_id,
	        'guild_name' => $request->guild_name,
	        'guild_id' => $request->guild_id,
        ]);
        return $this->sendResponse($image, 'Image Successfully Uploaded');
    }
}
		