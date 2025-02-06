<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MissionController;

Route::get('/missions', [MissionController::class, 'index']);