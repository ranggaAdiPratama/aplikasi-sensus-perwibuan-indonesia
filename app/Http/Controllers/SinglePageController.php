<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    // NOTE GET /
    /* -------------------------------------------------------------------------- */
    /*                               LAMAN DASHBOARD                              */
    /* -------------------------------------------------------------------------- */
    public function dashboard()
    {
        $url = "https://api.myanimelist.net/v2/anime/season/" . date('Y') . "/" . getSeason() . "?limit=20";

        $client = new Client();

        $response = $client->request('GET', $url, [
            'headers'   => [
                'X-MAL-CLIENT-ID' => env('MAL_ID')
            ]
        ]);

        $data   = json_decode($response->getBody(), true);

        $animes = $data['data'];

        $data = [
            'animes'    => $animes,
            'title'     => 'Dashboard'
        ];

        return view('admin.dashboard', $data);
    }
}
