<?php

use App\Http\Controllers\Api\MotoControllerAPI;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;

Route::resource('motos', MotoController::class);
Route::apiResource('api-motos', MotoControllerAPI::class);

Route::get('/welcome', function () {
    return view('motos.welcome');


});
