<?php

namespace App\Http\Controllers\Api\Whatsapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Twiml;

class WhatsappController extends Controller
{
    public function webhook(Request $request)
    {
        $twiml = new Twiml;
        $body = $request->input('body');
        $pick = rand(1,5);
        if (!in_array($body, [1,2,3,4,5])) {
            $response->message("Hiya! I'm thinking of a number between 1 and 5 - try to guess it!");
        } elseif ($body == $pick) {
            $response->message("Yes! You guessed it!");
        } else {
            $response->message("Nope, it was actually $pick - Pick a new number to play again!");
        }

        print $response;
    }

    private function xmlResponse($twiml)
    {
        return response($twiml, 200)->header('Content-Type', 'application/xml');
    }
}
