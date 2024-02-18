<?php

use App\Http\Controllers\JogosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::prefix('usuario')->group(function(){
//     Route::get('/', [UserController::class, 'index'])->name('usuarios-index');
//     Route::get('/create', [UserController::class, 'create'])->name('usuarios-create');
//     Route::post('/', [UserController::class, 'store'])->name('usuarios-store');
//     Route::get('/{id}/edit', [UserController::class, 'edit'])->where('id','[0-9]+')->name('usuarios-edit');
//     Route::put('/{id}', [UserController::class, 'update'])->where('id','[0-9]+')->name('usuarios-update');
//     Route::delete('/{id}', [UserController::class, 'destroy'])->where('id','[0-9]+')->name('usuarios-destroy');

// });

// Route::fallback(function(){
//     return "Erro !";
// });
