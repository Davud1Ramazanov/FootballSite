@extends('layouts.app')
@section('arr_api')
    <div class="find">
        <h1>Find football players</h1>
        <div class="find-elements">
            <input type="text" name="input-players" placeholder="Input football players">
            <button type="submit">Submit</button>
        </div>
    </div>
    <div class="players">
        <h1>Football players</h1>
        <div class="players-container">
            @foreach(array_slice($arr_api['players'], 0, 10) as $player)
                <div class="players-card">
                    <img src="{{$player['image_path']}}">
                    <p>First Name: {{$player['firstname']}}</p>
                    <p>Last Name: {{$player['lastname']}}</p>
                    <p>Date of birth: {{$player['dateofbirth']}}</p>
                    <p>Gender: {{$player['gender']}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

