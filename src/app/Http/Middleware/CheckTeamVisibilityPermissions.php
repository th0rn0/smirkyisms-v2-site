<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckTeamVisibilityPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->team->visibility->value == 'priv') {
            return redirect('/');
        }
        if ($request->team->visibility->value == 'link') {
            // TODO
            dd('TBC');
        }
        if ($request->team->visibility->value == 'pass') {
            return redirect()->route('team.password');
        }
        return $next($request);
    }
}
