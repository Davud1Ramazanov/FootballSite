<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class SportmenuController extends Controller
{
    public function findOur(){
        $client = new Client();
        $res = $client->request('GET', 'https://cricket.sportmonks.com/api/v2.0/fixtures', [
            'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
        ]);
        $fixtures = json_decode($res->getBody(), true)['data'];
        $res = $client->request('GET', 'https://cricket.sportmonks.com/api/v2.0/venues', [
            'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
        ]);
        $venues = json_decode($res->getBody(), true)['data'];
        $api_arr = array('fixtures' => $fixtures, 'venues' => $venues);
        return view('sportmenu', compact('api_arr'));

    }
}
