<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Jetstream\Jetstream;

use App\Models\User;
use App\Models\Team;

use Carbon\Carbon;
use Validator;
use Socialite;
use Exception;
use Auth;


class TeamController extends Controller
{
    public function show(Team $team)
    {
        return view('teams.show')->withTeam($team);
    }

    /**
     * Show the team settings screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Team  $team
     * @return \Illuminate\View\View
     */
    public function settings(Request $request, Team $team)
    {
        if (Gate::denies('view', $team)) {
            abort(403);
        }

        return view('teams.settings', [
            'user' => $request->user(),
            'team' => $team,
        ]);
    }
    
    /**
     * Show the team creation screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        Gate::authorize('create', Jetstream::newTeamModel());

        return view('teams.create', [
            'user' => $request->user(),
        ]);
    }
}