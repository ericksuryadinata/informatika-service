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
        $twiml->message($body);
        return $this->xmlResponse($twiml);
    }

    private function xmlResponse($twiml)
    {
        return response($twiml, 200)->header('Content-Type', 'application/xml');
    }
}
