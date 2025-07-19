<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;

Route::resource('motos', MotoController::class);

Route::get('/welcome', function () {
    return view('welcome');
});
