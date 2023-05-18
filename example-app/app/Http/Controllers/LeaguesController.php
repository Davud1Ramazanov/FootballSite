<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class LeaguesController extends Controller
{
    public function findLeagues(Request $request)
    {
        $client = new Client();
        $res = $client->request('GET', 'https://cricket.sportmonks.com/api/v2.0/leagues', [
            'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
        ]);
        $leagues = json_decode($res->getBody(), true)['data'];

        $leagues_name = $request->input('input-leagues');

        if (!is_null($leagues_name)) {
            $res = $client->request('GET', 'https://soccer.sportmonks.com/api/v2.0/leagues/search/' . $leagues_name, [
                'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
            ]);
            $leaguesByName = json_decode($res->getBody(), true)['data'];

            $leagues_api = ['leagues' => $leagues, 'leaguesByName' => $leaguesByName];
            return view('leagues')->with('leagues_api', $leagues_api);
        }

        $leagues_api = ['leagues' => $leagues, 'leaguesByName' => []];
        return view('leagues')->with('leagues_api', $leagues_api);
    }
}
