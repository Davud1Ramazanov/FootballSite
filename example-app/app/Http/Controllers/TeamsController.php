<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function findTeams(Request $request)
    {
        $client = new Client();
        $res = $client->request('GET', 'https://cricket.sportmonks.com/api/v2.0/teams', [
            'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
        ]);
        $teams = json_decode($res->getBody(), true)['data'];

        $teamId = $request->input('input-teams');
        if (!is_null($teamId)) {
            $res = $client->request('GET', 'https://soccer.sportmonks.com/api/v2.0/teams/' . $teamId, [
                'query' => ['api_token' => 'LxysmVlEVZ7HOxnzYZHVE8aQqWe3xu8vbMIvIslJukDcUKMB2ygFFDqOLa1I']
            ]);
            $teamsById = json_decode($res->getBody(), true)['data'];

            $teams_api = ['teams' => $teams, 'teamsById' => [$teamsById]];
            return view('teams')->with('teams_api', $teams_api);
        }

        $teams_api = ['teams' => $teams, 'teamsById' => []];
        return view('teams')->with('teams_api', $teams_api);
    }
}
