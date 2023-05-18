<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function findPlayer(Request $request)
    {
        $client = new Client();
        $res = $client->request('GET', 'https://cricket.sportmonks.com/api/v2.0/players', [
            'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
        ]);
        $players = json_decode($res->getBody(), true)['data'];

        $name = $request->input('input-players');
        if (!is_null($name)) {
            $res = $client->request('GET', 'https://soccer.sportmonks.com/api/v2.0/players/search/' . $name, [
                'query' => [
                    'api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
            ]);

            $players_name = json_decode($res->getBody(), true)['data'];
            $arr_api = ['players' => $players, 'players_name' => $players_name];
            return view('players')->with('arr_api', $arr_api);
        }

        $arr_api = ['players' => $players, 'players_name' => []];
        return view('players')->with('arr_api', $arr_api);
    }
}
