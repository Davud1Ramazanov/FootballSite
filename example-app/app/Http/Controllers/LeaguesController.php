<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class LeaguesController extends Controller{
    public function findLeagues(){
        $client = new Client();
        $res = $client->request('GET', 'https://cricket.sportmonks.com/api/v2.0/leagues', [
            'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
        ]);
        $leagues = json_decode($res->getBody(), true)['data'];
        $leagues_api = array('leagues' => $leagues);
        return view('leagues')->with('leagues_api', $leagues_api);
    }
}
