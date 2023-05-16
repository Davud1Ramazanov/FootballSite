<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportmenuController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\LeaguesController;

Route::get('/sportmenu', [SportmenuController::class, 'findOur'], function (){
    return view('sportmenu');
});

Route::get('/players', [PlayersController::class, 'findPlayer'], function (){
    return view('players');
});

Route::get('/teams', [TeamsController::class, 'findTeams'], function (){
    return view('teams');
});

Route::get('/leagues', [LeaguesController::class, 'findLeagues'], function (){
    return view('leagues');
});
