<?php

use Illuminate\Http\Request;

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

Route::namespace('Telegram')->group(function(){
    Route::get('get-me', 'TelegramController@getMe');
    Route::get('set-hook', 'TelegramController@setWebHook');
    Route::post(env('TELEGRAM_BOT_TOKEN') . '/webhook','TelegramController@handleRequest');
});
