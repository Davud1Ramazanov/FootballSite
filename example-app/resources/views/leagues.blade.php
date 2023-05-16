@extends('layouts.app')
@section('leagues_api')
    <div class="find">
        <h1>Find football leagues</h1>
        <div class="find-elements">
            <input type="text" name="input-teams" placeholder="Input football teams">
            <button type="submit">Submit</button>
        </div>
    </div>
    <div class="leagues">
        <h1>Leagues football</h1>
        <div class="leagues-container">
            @foreach(array_slice($leagues_api['leagues'], 0, 14) as $league)
                <div class="leagues-card">
                    <img src="{{$league['image_path']}}">
                    <p>Name: {{$league['name']}}</p>
                    <p>Code: {{$league['code']}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
