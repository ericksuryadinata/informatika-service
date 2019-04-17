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

    public function sendMessage($message, $parse_html = false)
    {
        $data = [
            'chat_id' => $this->chat_id,
            'text' => $message,
        ];

        if ($parse_html) $data['parse_mode'] = 'HTML';

        Telegram::sendMessage($data);
    }

    public function handleRequest()
    {
        $updates = Telegram::getWebhookUpdates();
        // $updates = json_encode($hooks);
        dump($updates);
        $this->chat_id = $updates['message']['chat']['id'];
        $this->username = $updates['message']['from']['username'];
        $this->text = $updates['message']['text'];
        if($this->text == 'hi'){
            $this->sendMessage('hello');
        }else{
            $this->sendMessage('good afternoon');
        }
    }
}
