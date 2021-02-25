<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;


use LaravelRestcord\Discord;
use LaravelRestcord\Discord\ApiClient;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified', 'sessionHasDiscordToken'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['sessionHasDiscordToken'])->get('/aa/dashboards', function(Request $request) {
        // $user = Socialite::driver('discord')->user();
		// dd($request->session()->get('did'));
        // $api = new ApiClient($request->session()->get('did'));
        // $discord = new Discord($api);
        // dd($discord->guilds());

})->name('teams.dashboard');

Route::get('/auth/redirect', [SocialController::class, 'discordRedirect']);

Route::middleware(['sessionHasDiscordToken'])->get('/auth/callback', [SocialController::class, 'loginWithDiscord']);