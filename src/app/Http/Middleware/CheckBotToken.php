<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckBotToken
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
        if (!$request->header('bot-token') || $request->header('bot-token') != config('services.discord.bot_api_token')) {
            $response = [
                'success' => false,
                'message' => 'Invalid Token',
            ];

            return response()->json($response, 401);
        }

        return $next($request);
    }
}
