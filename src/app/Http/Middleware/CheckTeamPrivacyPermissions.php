<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckTeamPrivacyPermissions
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
        if ($request->team->privacy->value == 'priv') {
            return redirect('/');
        }
        if ($request->team->privacy->value == 'link') {
            // TODO
            dd('TBC');
        }
        if (
            !$request->session()->has($request->team->slug . "_scrapbook") &&
            $request->team->privacy->value == 'pass') {
            return redirect()->route('scrapbook.password', ['team' => $request->team]);
        }
        if (
            $request->session()->has($request->team->slug . "_scrapbook") &&
            $request->session()->get($request->team->slug . "_scrapbook") != 1
        ) {
            return redirect()->route('scrapbook.password', ['team' => $request->team]);
        }
        return $next($request);
    }
}
