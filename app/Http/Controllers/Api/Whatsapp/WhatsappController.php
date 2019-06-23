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
            $response->message("Hiya! I'm thinking of a number between 1 and 5 - try to guess it!");
        } elseif ($body == $pick) {
            $response->message("Yes! You guessed it!");
        } else {
            $response->message("Nope, it was actually $pick - Pick a new number to play again!");
        }

        print $response;

        // Find your Account Sid and Auth Token at twilio.com/console
        // DANGER! This is insecure. See http://twil.io/secure
        // $sid    = getenv('TWILIO_ACCOUNT_SID');
        // $token  = getenv('TWILIO_AUTH_TOKEN');
        // $twilio = new Client($sid, $token);

        // $message = $twilio->messages
        //                 ->create("whatsapp:+6282257906642", // to
        //                         array(
        //                             "from" => "whatsapp:+14155238886",
        //                             "body" => "Hello there!"
        //                         )
        //                 );

        // print($message->sid);
    }

    private function xmlResponse($twiml)
    {
        return response($twiml, 200)->header('Content-Type', 'application/xml');
    }
}
