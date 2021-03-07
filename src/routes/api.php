<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\BotController;
use App\Http\Controllers\Api\QuoteController;
use App\Http\Controllers\Api\ImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('bot.token')->group(function() {
	Route::post('/bot/ack', [BotController::class, 'acknowledge']);
	Route::post('/bot/con', [BotController::class, 'confirm']);
	Route::post('/bot/lev', [BotController::class, 'leave']);

	Route::post('/quote', [BotController::class, 'addQuote']);
	Route::post('/image', [BotController::class, 'addImage']);

	Route::get('/quote/random', [QuoteController::class, 'getRandom']);

	Route::get('/image/random', [ImageController::class, 'getRandom']);
	Route::get('/image/{image}/file', [ImageController::class, 'getFile']);
});
