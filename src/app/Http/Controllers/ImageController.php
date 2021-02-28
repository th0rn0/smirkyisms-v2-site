<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use App\Models\Team;


class ImageController extends Controller
{
    public function index(Team $team)
    {
        return view('images.index')->withTeam($team);
    }

    public function show(Team $team, Image $image)
    {
        return view('images.show')->withTeam($team)->withImage($image);
    }
}