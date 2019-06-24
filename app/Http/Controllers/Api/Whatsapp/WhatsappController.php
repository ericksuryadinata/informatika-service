<?php

namespace App\Http\Controllers\Api\Whatsapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Twiml;
use Twilio\Rest\Client;

class WhatsappController extends Controller
{

    public function webhook(Request $request)
    {
        $twiml = new Twiml;
        $twiml->message($request->Body);
        return $this->xmlResponse($twiml);
        // $this->sendToWa($from,$message,$to);
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
