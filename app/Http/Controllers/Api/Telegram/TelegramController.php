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

    public function greeting()
    {
        $time = time();
        $hour = date('G', $time);
        $greeting = "Hallo";
        if ($hour>=0 && $hour<=11) {
            $greeting = "Selamat Pagi :) ";
        } elseif ($hour >=12 && $hour<=14) {
            $greeting = "Selamat Siang :) ";
        } elseif ($hour >=15 && $hour<=17) {
            $greeting = "Selamat Sore :) ";
        } elseif ($hour >=17 && $hour<=18) {
            $greeting = "Selamat Petang :) ";
        } elseif ($hour >=19 && $hour<=23) {
            $greeting = "Selamat Malam :) ";
        }

        return $greeting;
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

        switch ($text) {
            case '/start':
                $this->sendMessage($this->startMessage());
                break;
            case 'hi':
                $this->sendMessage($this->greeting().$this->firstname.' '.$this->lastname);
                break;
            default:
                $this->sendMessage('sayang sekali '.$this->username.' perintah tersebut masih belum saya pahami :(,'.PHP_EOL.'update selanjutnya menerapkan NLP disini', true);
                break;
        }
    }

    public function extract(){
         // Send a GET request to: http://www.foo.com/bar
        $response = Curl::to(getenv('ENDPOINT_NLP').'data/extraction')
                        ->withData(array('sentence' => 'lokasi pak aher'))
                        ->post();
        return response()->json(json_decode($response), 200);
    }
}
