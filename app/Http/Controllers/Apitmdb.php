<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Apitmdb extends Controller
{
    public function authenticate()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/trending/all/day?language=en-US', [
            'headers' => [
                'Authorization' => '87527d65d1168b7826726f7d3f76a232',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return response()->json($data);
    }
}
