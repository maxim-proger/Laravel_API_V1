<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;

Route::post('/registration', [UserController::class, 'store']);
Route::get('/profile/{id}', [UserController::class, 'show']);
Route::get('/prices/{currency?}', [ProductController::class, 'index']);
