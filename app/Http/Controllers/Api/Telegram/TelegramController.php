<?php

namespace App\Http\Controllers\Api\Telegram;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InformasiSeminarTa;
use Telegram;

class TelegramController extends Controller
{
    protected $chat_id;
    protected $username;
    protected $firstname;
    protected $lastname;
    protected $text;

    public function getMe()
    {
        $response = Telegram::getMe();
        return $response;
    }

    public function sendMessage($message, $parse_html = false)
    {
        $data = [
            'chat_id' => $this->chat_id,
            'text' => $message,
        ];

        if ($parse_html) $data['parse_mode'] = 'html';

        $response = Telegram::sendMessage($data);
        // $messageId = $response->getMessageId();
        return 'ok';
    }

    public function startMessage(){
        $response = 'Selamat Datang di Universitas 17 Agustus 1945 BOT, silahkan ketik apapun pesan yang anda minta';
        return $response;
    }

    public function greeting(){
        $time = time();
        $hour = date('G',$time);
        $greeting = "Hallo";
        if ($hour>=0 && $hour<=11)
        {
            $greeting = "Selamat Pagi :) ";
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

        return $greeting;
    }

    public function findSeminar($key){
        $data = '';
        if(is_numeric($key)){
            if(strlen($key) > 4){
                $seminar = InformasiSeminarTa::whereNbi($key)->first();
            }else{
                $seminar = InformasiSeminarTa::where('nbi','like','%'.$key)->first();
            }
        }else{
            $seminar = InformasiSeminarTa::where('nama','like','%'.$key.'%')->first();
        }

        if($seminar){
            $data = 'Data Peserta Seminar'.PHP_EOL;
            $data .= 'Nama : '.$seminar->nama.PHP_EOL;
            $data .= 'NBI : '.$seminar->nbi.PHP_EOL;
            $data .= 'Dengan judul seminar <b>'.$seminar->judul.'</b>'.PHP_EOL;
            $data .= 'Seminar dilaksanakan di ruang : '.$seminar->ruang.' pada tanggal '.$seminar->tanggal.' dimulai pukul 09.00 WIB';
            $data .= 'Dengan dosen penguji sebagai berikut : '.PHP_EOL;
            $data .= 'Ketua Penguji : '.$seminar->ketua_penguji.PHP_EOL;
            $data .= 'Anggota Penguji 1 : '.$seminar->ketua_penguji.PHP_EOL;
            $data .= 'Anggota Penguji 2 : '.$seminar->ketua_penguji.PHP_EOL.PHP_EOL;
            $data .= '<b>Diharapkan Datang Tepat Waktu</b>';
        }else{
            $data = 'Pencarian seminar TA untuk '.$key.' Tidak ditemukan';
        }

        return $data;
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
        $text = strtolower($this->text);
        preg_match('/(jadwal seminar) (.+)/', $text, $output);
        if(count($output) > 0){
            $text = $output[1]; // command
            $key = $output[2]; // nbi or maybe name
        }
        if($text != 'jadwal seminar'){
            preg_match('/(seminar ta) (.+)/', $text, $output);
            if(count($output) > 0){
                $text = $output[1]; // command
                $key = $output[2]; // nbi or maybe name
            }
        }
        switch ($text) {
            case '/start':
                $this->sendMessage($this->startMessage());
                break;
            case 'hi':
                $this->sendMessage($this->greeting().$this->firstname.' '.$this->lastname);
                break;
            case 'jadwal seminar':
                $seminar = $this->findSeminar($key);
                $this->sendMessage($seminar,true);
                break;
            case 'seminar ta':
                $seminar = $this->findSeminar($key);
                $this->sendMessage($seminar,true);
                break;
            default:
                $this->sendMessage('sayang sekali '.$this->username.' perintah tersebut masih belum saya pahami :( , <br> update selanjutnya menerapkan NLP disini',true);
                break;
        }
    }
}
