<?php

namespace App\Http\Controllers\Api\Telegram;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Telegram;

class TelegramController extends Controller
{
    protected $chat_id;
    protected $username;
    protected $text;

    public function getMe()
    {
        $response = Telegram::getMe();
        return $response;
    }

    public function setWebHook()
    {
        $url = 'https://bot.labtif-untagsby.com/' . env('TELEGRAM_BOT_TOKEN') . '/webhook';
        $response = Telegram::setWebhook(['url' => $url]);

        return $response == true ? redirect()->back() : dd($response);
    }

    public function sendMessage()
    {
        $response = Telegram::sendMessage([
            'chat_id' => $this->chat_id,
            'text' => 'Hello '.$this->username,
        ]);
    }

    public function handleRequest(Request $request)
    {
        $updates = Telegram::getWebhookUpdates();
        dd($request);
        $this->chat_id = $request['message']['chat']['id'];
        $this->username = $request['message']['from']['username'];
        $this->text = $request['message']['text'];
        $this->sendMessage();
    }
}
