<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Team;

use Auth;


class ScrapbookController extends Controller
{
    public function show(Team $team)
    {
        return view('scrapbooks.show')->withTeam($team)->withRandom($team->getRandomItem());
    }
}