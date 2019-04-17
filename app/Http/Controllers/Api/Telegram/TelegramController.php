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

        return $response;
    }

    public function sendMessage()
    {
        if($this->text == 'hi'){
            $response = Telegram::sendMessage([
                'chat_id' => $this->chat_id,
                'text' => 'Hello '.$this->username,
            ]);

            $messageId = $response->getMessageId();
        }
    }

    public function handleRequest(Request $request)
    {
        $this->chat_id = $request['message']['chat']['id'];
        $this->username = $request['message']['from']['username'];
        $this->text = $request['message']['text'];
    }
}
