@extends('layouts.app')
@section('teams_api')
    <div class="find">
        <h1>Find football teams</h1>
        <div class="find-elements">
            <form action="/teams" method="GET">
                <input type="text" name="input-teams" placeholder="Input football teams">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    @if(count($teams_api['teamsById']) > 0)
        <div class="teams">
            <h1>Conclusion</h1>
            <div class="teams-container">
                @foreach($teams_api['teamsById'] as $teams_id)
                    <div class="teams-card">
                        <img src="{{ $teams_id['logo_path'] }}">
                        <p>Name: {{ $teams_id['name'] }}</p>
                        <p>National team: {{ $teams_id['national_team'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="teams">
        <h1>Teams football</h1>
        <div class="teams-container">
            @foreach($teams_api['teams'] as $team)
                <div class="teams-card">
                    <img src="{{ $team['image_path'] }}">
                    <p>Name: {{ $team['name'] }}</p>
                    <p>National team: {{ $team['national_team'] }}</p>
                    <p>Code: {{ $team['code'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
