<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SocialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ScrapbookController;


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

Route::middleware(['auth:sanctum', 'verified', 'sessionHasDiscordToken', 'terms.accepted'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::middleware(['auth:sanctum', 'verified', 'sessionHasDiscordToken', 'terms.accepted'])->get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::middleware(['auth:sanctum', 'verified', 'sessionHasDiscordToken', 'terms.accepted'])->get('/teams/{team}/settings', [TeamController::class, 'settings'])->name('teams.settings');



Route::get('/sb/{team}/access', [ScrapbookController::class, 'showAccess'])->name('scrapbooks.password');
Route::post('/sb/{team}/access', [ScrapbookController::class, 'postAccess'])->name('scrapbooks.password.post');

Route::get('/sb/{team}/denied', [ScrapbookController::class, 'showDenied'])->name('scrapbooks.denied');


Route::middleware(['team.privacy'])->get('/sb/{team}/', [ScrapbookController::class, 'show'])->name('scrapbooks.show');

Route::middleware(['team.privacy'])->get('/sb/{team}/quotes', [QuoteController::class, 'index'])->name('quotes.index');

Route::middleware(['team.privacy'])->get('/sb/{team}/images', [ImageController::class, 'index'])->name('images.index');

Route::middleware(['team.privacy'])->get('/sb/{team}/quotes/{quote}', [QuoteController::class, 'show'])->name('quotes.show');

Route::middleware(['team.privacy'])->get('/sb/{team}/images/{image}', [ImageController::class, 'show'])->name('images.show');




Route::get('/login', [SocialController::class, 'discordRedirect'])->name('login');

Route::middleware([])->get('/login/confirm', [SocialController::class, 'loginConfirm'])->name('login.confirm');

Route::middleware([])->post('/login/confirm', [SocialController::class, 'loginConfirmPost'])->name('login.confirm');

Route::middleware(['sessionHasDiscordToken'])->get('/login/discord/callback', [SocialController::class, 'loginWithDiscord']);