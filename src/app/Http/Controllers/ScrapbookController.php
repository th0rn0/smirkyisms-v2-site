<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Team;

use Auth;
use Hash;
use Validator;

class ScrapbookController extends Controller
{
    public function show(Team $team)
    {
        return view('scrapbooks.show')->withTeam($team)->withRandom($team->getRandomItem());
    }

    public function showAccess(Team $team)
    {
        return view('scrapbooks.access')->withTeam($team);
    }

    public function postAccess(Team $team, Request $request)
    {
	    $validator = Validator::make($request->all(), [
	        'password' => 'required',
	    ]);

    	if ($validator->fails() || !Hash::check($request->password, $team->privacy_password)) {
		    $request->session()->flash('status', 'Access Denied!');
		    return redirect()->back();
		}
		$request->session()->put($team->slug . "_scrapbook", 1);
		return redirect()->route('scrapbooks.show', ['team' => $team]);
    }

    public function showDenied(Team $team)
    {
    	return view('scrapbooks.denied')->withTeam($team);
    }
}