<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PhilosopherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', MovieController::class);
Route::resource('philosophers', PhilosopherController::class);
