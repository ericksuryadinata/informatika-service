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

    public function sendMessage($message, $parse_html = false)
    {
        $data = [
            'chat_id' => $this->chat_id,
            'text' => $message,
        ];

        if ($parse_html) $data['parse_mode'] = 'HTML';

        $response = Telegram::sendMessage($data);
        $messageId = $response->getMessageId();
        return 'ok';
    }

    public function handleRequest()
    {
        $updates = Telegram::getWebhookUpdates();
        // $updates = json_encode($hooks);
        $this->chat_id =  $updates->getMessage()->getChat()->getId();
        $this->text = $updates->getMessage()->getText();
        if($this->text == 'hi'){
            $this->sendMessage('hello');
        }else{
            $this->sendMessage('good afternoon');
        }
    }
}
