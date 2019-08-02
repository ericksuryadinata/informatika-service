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

Route::namespace('Telegram')->prefix('telegram')->name('telegram.')->group(function(){
//env('TELEGRAM_BOT_TOKEN')
    Route::post(env('TELEGRAM_BOT_TOKEN') . '/webhook','TelegramController@webhook')->name('webhook');
    Route::post('extract','TelegramController@extract')->name('extract');
    Route::prefix('settings')->group(function(){
        Route::get('get-me','SettingsController@getMe')->name('get-me');
        Route::get('set-web-hook','SettingsController@setWebHook')->name('set-webhook');
    });

});

Route::namespace('Whatsapp')->prefix('whatsapp')->name('whatsapp.')->group(function(){
//env('TWILIO_ACCOUNT_SID')
    Route::post(env('TWILIO_ACCOUNT_SID'). '/webhook','WhatsappController@webhook')->name('webhook');
    Route::get('extract/{body}','WhatsappController@extract')->name('extract');
});

Route::namespace('UnitTesting')->prefix('unit-testing')->name('unit-testing.')->group(function(){
    Route::get('/', 'UnitTestingController@index')->name('index');
    Route::get('/generate', 'UnitTestingController@generate')->name('generate');
});

