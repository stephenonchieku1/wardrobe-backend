<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothingItemController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;



Route::post('/signin', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/clothing-items', [ClothingItemController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout']);
Route::apiResource('clothing-items', ClothingItemController::class);
Route::apiResource('items', CItemController::class);
