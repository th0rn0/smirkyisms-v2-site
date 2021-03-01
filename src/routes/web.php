<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SocialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ImageController;


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

Route::get('/how-it-works', function () {
	// TODO
	dd('TBC');
})->name('howitworks');

Route::get('/about', function () {
	// TODO
	dd('TBC');
})->name('about');


Route::middleware(['auth:sanctum', 'verified', 'sessionHasDiscordToken'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/pass', function () {
	// TODO
	dd('TBC');
})->name('team.password');

Route::middleware(['auth:sanctum', 'verified', 'sessionHasDiscordToken'])->get('/c/create', [TeamController::class, 'create'])->name('teams.create');
Route::middleware(['auth:sanctum', 'verified', 'sessionHasDiscordToken'])->get('/c/{team}/settings', [TeamController::class, 'settings'])->name('teams.settings');


Route::middleware(['team.visibility'])->get('/c/{team}/', [TeamController::class, 'show'])->name('teams.show');




Route::middleware(['team.visibility'])->get('/c/{team}/quotes', [QuoteController::class, 'index'])->name('quotes.index');

Route::middleware(['team.visibility'])->get('/c/{team}/images', [ImageController::class, 'index'])->name('images.index');

Route::middleware(['team.visibility'])->get('/c/{team}/quotes/{quote}', [QuoteController::class, 'show'])->name('quotes.show');

Route::middleware(['team.visibility'])->get('/c/{team}/images/{image}', [ImageController::class, 'show'])->name('images.show');




Route::get('/auth/redirect', [SocialController::class, 'discordRedirect'])->name('auth.redirect');

Route::middleware(['sessionHasDiscordToken'])->get('/auth/callback', [SocialController::class, 'loginWithDiscord']);