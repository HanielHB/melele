<?php

use App\Http\Controllers\API\DoctorController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return response()->json(['success' => true]);
});

//Route::post('auth', 'AuthController@makeAppLogin');
Route::post('auth', [AuthController::class, 'makeAppLogin']);

//Route::middleware('auth:api')->group(function () {
Route::middleware("auth:api")->group(function () {
    //Route::apiResource('doctors', 'API\DoctorController');
    Route::apiResource("doctors", DoctorController::class);
});
