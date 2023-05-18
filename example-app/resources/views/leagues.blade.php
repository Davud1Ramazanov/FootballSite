@extends('layouts.app')
@section('leagues_api')
    <div class="find">
        <h1>Find football leagues</h1>
        <div class="find-elements">
            <form action="/leagues" method="GET">
                @csrf
                <input type="text" name="input-leagues" placeholder="Input football leagues">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    @if(count($leagues_api['leaguesByName']) > 0)
        <div class="leagues">
            <h1>Leagues football</h1>
            <div class="leagues-container">
                @foreach($leagues_api['leaguesByName'] as $league_name)
                    <div class="leagues-card">
                        <img src="{{ $league_name['logo_path'] }}">
                        <p>Name: {{ $league_name['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="leagues">
        <h1>All Leagues</h1>
        <div class="leagues-container">
            @foreach(array_slice($leagues_api['leagues'], 0, 14) as $league)
                <div class="leagues-card">
                    <img src="{{ $league['image_path'] }}">
                    <p>Name: {{ $league['name'] }}</p>
                    <p>Code: {{ $league['code'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
