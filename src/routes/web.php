<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SocialController;
use App\Http\Controllers\TeamController;



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

Route::get('/c/create', [TeamController::class, 'create'])->name('teams.create');
Route::get('/c/{team}/settings', [TeamController::class, 'settings'])->name('teams.settings');


Route::get('/c/{team}/', [TeamController::class, 'show'])->name('teams.show');




// Route::get('/c/{team}/quotes', [TeamController::class, 'create'])->name('teams.settings');

// Route::get('/c/{team}/images', [TeamController::class, 'create'])->name('teams.settings');

// Route::get('/c/{team}/quotes/{quote}', [TeamController::class, 'create'])->name('teams.settings');

// Route::get('/c/{team}/images/{image}', [TeamController::class, 'create'])->name('teams.settings');




Route::get('/auth/redirect', [SocialController::class, 'discordRedirect']);

Route::middleware(['sessionHasDiscordToken'])->get('/auth/callback', [SocialController::class, 'loginWithDiscord']);