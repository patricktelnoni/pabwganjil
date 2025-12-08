<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MataKuliahApiController;
use App\Http\Controllers\Api\FakultasApiController;
use App\Http\Controllers\Api\CustomerApiController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;

Route::post('/register', [RegisterController::class, '_invoke']); 
Route::post('/login', [LoginController::class, '_invoke']);

Route::apiResource('/customers', CustomerApiController::class)->middleware('auth:sanctum'); 
Route::apiResource('/fakultas', FakultasApiController::class);
Route::apiResource('/mata-kuliah', MataKuliahApiController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
