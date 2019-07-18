<?php

namespace App\Http\Controllers\Api\Whatsapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Twiml;
use Twilio\Rest\Client;
use Ixudra\Curl\Facades\Curl;
use App\Models\Dosen;
use App\Models\LokasiDosen;

class WhatsappController extends Controller
{

    public function webhook(Request $request)
    {
        $twiml = new Twiml;
        $body = $request->Body;
        $from = $request->To;
        $to = $request->From;
        $message = $this->extract($body);
        $this->sendToWa($from, $message, $to);
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

    private function sendToWa($from, $message, $to)
    {
        $accountSid = getenv('TWILIO_ACCOUNT_SID');
        $authToken = getenv('TWILIO_AUTH_TOKEN');

        $client = new Client($accountSid, $authToken);
        $client->messages->create(
            $to,
            [
                "body" => $message,
                "from" => $from
            ]
        );
    }

    private function xmlResponse($twiml)
    {
        return response($twiml, 200)->header('Content-Type', 'application/xml');
    }
}
