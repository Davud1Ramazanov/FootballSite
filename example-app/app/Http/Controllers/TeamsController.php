<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class TeamsController extends Controller{
    public function findTeams(){
        $client = new Client();
        $res = $client->request('GET', 'https://cricket.sportmonks.com/api/v2.0/teams', [
            'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
        ]);
        $teams = json_decode($res->getBody(), true)['data'];
        $teams_api = array('teams' => $teams);
        return view('teams')->with('teams_api', $teams_api);

    }
}
