<?php

namespace App\Tool;

use Symfony\Component\HttpClient\HttpClient;

class Http
{
    public static function client()
    {
        $client = HttpClient::create([
            'headers' => [
                "Content-Type: application/json",
            ],
        ]);

        return $client;
    }
}
