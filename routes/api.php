<?php


use App\Http\Controllers\Api\MotoControllerAPI;
use Illuminate\Support\Facades\Route;

Route::apiResource('motos', MotoControllerAPI::class);
