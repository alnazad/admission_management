<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('admin')->group(function(){
  Route::resource('users',UserController::class)->names('users');
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout'])->middleware('auth:sanctum');
