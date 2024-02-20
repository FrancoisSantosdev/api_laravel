<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show'])->where('id','[0-9]+');
Route::post('/users/create', [UserController::class, 'store']);
Route::post('/users/{id}', [UserController::class, 'update'])->where('id','[0-9]+');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->where('id','[0-9]+');
