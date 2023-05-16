@extends('layouts.app')
@section('teams_api')
    <div class="find">
        <h1>Find football teams</h1>
        <div class="find-elements">
            <input type="text" name="input-teams" placeholder="Input football teams">
            <button type="submit">Submit</button>
        </div>
    </div>
    <div class="teams">
        <h1>Teams football</h1>
        <div class="teams-container">
            @foreach(array_slice($teams_api['teams'], 0, 24) as $team)
                <div class="teams-card">
                    <img src="{{$team['image_path']}}">
                    <p>Name: {{$team['name']}}</p>
                    <p>National team: {{$team['national_team']}}</p>
                    <p>Code: {{$team['code']}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
