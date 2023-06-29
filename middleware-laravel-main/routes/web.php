<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChamadoController;


Route::get('/', function(){
    return view('welcome');
});

// Route for auth 

Route::get('/login', [UserController::class, 'index']);
Route::post('/login/auth', [UserController::class, 'auth'])->name('usuario.auth');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function () {
    Route::get('/teste', [UserController::class, 'teste'])->middleware('client');
});