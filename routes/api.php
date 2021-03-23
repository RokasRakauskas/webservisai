<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CharacterController;

Route::get('/games',[GameController::class, 'index']);
Route::get('/games/{id}',[GameController::class, 'show']);
Route::post('/games',[GameController::class, 'store']);
Route::put('/games/{id}',[GameController::class, 'update']);
Route::delete('/games/{id}',[GameController::class, 'delete']);

Route::get('/characters',[CharacterController::class, 'index']);
Route::get('/characters/{id}',[CharacterController::class, 'show']);
Route::post('/characters',[CharacterController::class, 'store']);
Route::put('/characters/{id}',[CharacterController::class, 'update']);
Route::delete('/characters/{id}',[CharacterController::class, 'delete']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
