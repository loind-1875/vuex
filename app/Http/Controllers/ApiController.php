<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getMessage($text)
    {
        $client = new Client();
        $res = $client->request('GET', "https://simsumi.herokuapp.com/api?text=$text&lang=vi");
        $data = json_decode($res->getBody()->getContents());
        $message = $data->success;

        $b = json_encode([
            'messages' => [
                [
                    'text' => $message
                ]
            ]
        ]);

\Log::debug($b);

        return $b;
    }
}
