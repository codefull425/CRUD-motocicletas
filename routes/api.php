<?php


use App\Http\Controllers\Api\MotoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('motos', MotoController::class);
