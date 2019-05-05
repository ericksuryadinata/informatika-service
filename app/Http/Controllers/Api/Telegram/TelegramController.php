<?php

namespace App\Http\Controllers\Api\Telegram;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        if ($parse_html) $data['parse_mode'] = 'HTML';

        $response = Telegram::sendMessage($data);
        $messageId = $response->getMessageId();
        return 'ok';
    }

    public function startMessage(){
        $response = 'Selamat Datang di Universitas 17 Agustus 1945 BOT, silahkan ketik apapun pesan yang anda minta';
        return $response;
    }

    public function handleRequest()
    {
        $updates = Telegram::getWebhookUpdates();
        // $updates = json_encode($hooks);
        $this->chat_id =  $updates->getMessage()->getChat()->getId();
        $this->username = $updates->getMessage()->getFrom()->getUsername();
        $this->firstname = $updates->getMessage()->getFrom()->getFirstName();
        $this->lastname = $updates->getMessage()->getFrom()->getLastName();
        $this->text = $updates->getMessage()->getText();

        if($this->text == '/start'){
            $this->sendMessage($this->startMessage());
        }
        
        if($this->text == 'hi'){
            $time = time();
            $hour = date('G',$time);
            $greeting = "Hallo";
            if ($hour>=0 && $hour<=11)
            {
                $greeting = "Selamat Pagi :)";
            }
            elseif ($hour >=12 && $hour<=14)
            {
                $greeting = "Selamat Siang :) ";
            }
            elseif ($hour >=15 && $hour<=17)
            {
                $greeting = "Selamat Sore :) ";
            }
            elseif ($hour >=17 && $hour<=18)
            {
                $greeting = "Selamat Petang :) ";
            }
            elseif ($hour >=19 && $hour<=23)
            {
                $greeting = "Selamat Malam :) ";
            }
            $random = rand(0,1);
            if($random == 0){
                $this->sendMessage('hello '.$this->username);
            }else{
                $this->sendMessage($greeting.$this->firstname.' '.$this->lastname);
            }
        }else{
            $this->sendMessage('sayang sekali '.$this->username.' perintah tersebut masih belum saya pahami :(, update selanjutnya menerapkan NLP disini');
        }
    }
}
