<?php

namespace App\Http\Controllers\Api\Telegram;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InformasiSeminarTa;
use Ixudra\Curl\Facades\Curl;
use Telegram;

class TelegramController extends Controller
{
    protected $chat_id;
    protected $username;
    protected $firstname;
    protected $lastname;
    protected $text;

    public function sendMessage($message, $parse_html = false)
    {
        $data = [
            'chat_id' => $this->chat_id,
            'text' => $message,
        ];

        if ($parse_html) {
            $data['parse_mode'] = 'HTML';
        }

        $response = Telegram::sendMessage($data);
        return 'ok';
    }

    public function startMessage()
    {
        $response = 'Selamat Datang di Universitas 17 Agustus 1945 BOT, silahkan ketik apapun pesan yang anda minta';
        return $response;
    }

    public function webhook()
    {
        $updates = Telegram::getWebhookUpdates();
        // $updates = json_encode($hooks);
        $this->chat_id =  $updates->getMessage()->getChat()->getId();
        $this->username = $updates->getMessage()->getFrom()->getUsername();
        $this->firstname = $updates->getMessage()->getFrom()->getFirstName();
        $this->lastname = $updates->getMessage()->getFrom()->getLastName();
        $this->text = $updates->getMessage()->getText();
        $text = strtolower($this->text);
        if ($text === '/start') {
            $this->sendMessage($this->startMessage());
        } else {
            $message = $this->extract($text);
            $this->sendMessage($message, true);
        }
    }

    public function extract($body)
    {
        $response = Curl::to('http://127.0.0.1:3333/api/v1/data/extraction')
            ->withData(array('sentence' => $body))
            ->post();
        $response = json_decode($response);
        $reply = $response->result;
        return $reply;
    }
}
