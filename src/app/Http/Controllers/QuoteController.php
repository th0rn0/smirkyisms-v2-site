<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quote;
use App\Models\Team;


class QuoteController extends Controller
{
    public function index(Team $team)
    {
        return view('quotes.index')->withTeam($team);
    }

    public function show(Team $team, Quote $quote)
    {
        return view('quotes.show')->withTeam($team)->withQuote($quote);
    }
}