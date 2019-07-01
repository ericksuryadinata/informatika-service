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

Route::get('/',function(){
    return 'Hello from api';
});

Route::namespace('Telegram')->prefix('telegram')->group(function(){

    Route::post(env('TELEGRAM_BOT_TOKEN') . '/webhook','TelegramController@webhook');

    Route::prefix('settings')->group(function(){
        Route::get('get-me','SettingsController@getMe');
        Route::get('set-web-hook','SettingsController@setWebHook');
    });

});

Route::namespace('Whatsapp')->prefix('whatsapp')->group(function(){
    Route::post(env('TWILIO_ACCOUNT_SID') . '/webhook','WhatsappController@webhook');
});

Route::namespace('Data')->prefix('data')->group(function(){
    Route::namespace('Dosen')->prefix('dosen')->group(function(){
        Route::post('android', 'DosenController@androidUpdate');
        Route::post('rfid', 'DosenController@rfidUpdate');
        Route::get('random','DosenController@getRandomData');
    });
});
