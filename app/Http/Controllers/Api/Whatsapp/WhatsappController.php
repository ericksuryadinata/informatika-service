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
        $body = $request->input('body');
        $pick = rand(1,5);
        if (!in_array($body, [1,2,3,4,5])) {
            $twiml->message("Hiya! I'm thinking of a number between 1 and 5 - try to guess it!");
            return $this->xmlResponse($twiml);
        } elseif ($body == $pick) {
            $twiml->message("Yes! You guessed it!");
            return $this->xmlResponse($twiml);
        } else {
            $twiml->message("Nope, it was actually $pick - Pick a new number to play again!");
            return $this->xmlResponse($twiml);
        }
    }

    private function xmlResponse($twiml)
    {
        return response($twiml, 200)->header('Content-Type', 'application/xml');
    }
}
