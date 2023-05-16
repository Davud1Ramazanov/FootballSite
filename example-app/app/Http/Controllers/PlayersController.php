<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class PlayersController extends Controller{
    public function findPlayer(){
        $client = new Client();
        $res = $client->request('GET', 'https://cricket.sportmonks.com/api/v2.0/players', [
            'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
        ]);
        $players = json_decode($res->getBody(), true)['data'];
        $arr_api = array('players' => $players);
        return view('players')->with('arr_api', $arr_api);

    }
}
