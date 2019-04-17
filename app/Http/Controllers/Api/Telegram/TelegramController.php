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

    public function handleRequest(Request $request)
    {
        $updates = Telegram::getWebhookUpdates();
        dump($updates);
        $this->chat_id = $request['message']['chat']['id'];
        $this->username = $request['message']['from']['username'];
        $this->text = $request['message']['text'];

        switch ($this->text) {
            case '/start':
            case '/menu':
                $this->showMenu();
                break;
            default:
                $this->showMenu();
        }
    }

    public function showMenu($info = null)
    {
        $message = '';
        if ($info) {
            $message .= $info . chr(10);
        }
        $message .= '/menu' . chr(10);
        $message .= '/getGlobal' . chr(10);
        $message .= '/getTicker' . chr(10);
        $message .= '/getCurrencyTicker' . chr(10);

        $this->sendMessage($message);
    }
}
