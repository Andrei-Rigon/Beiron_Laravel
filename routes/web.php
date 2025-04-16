<?php

use App\Http\Controllers\Cadastrar\CadastrarController;
use App\Http\Controllers\Login\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Rota que busca o Login
Route::prefix('login')->group(function(){
    Route::get('/', [LoginController::class,'index'])->name('login-index');
    Route::post('/', [LoginController::class, 'store'])->name('login-store');
});
   
// Rota que busca e trata o Cadastrar-se
Route::prefix('cadastrar')->group(function(){
    Route::get('/', [CadastrarController::class, 'index'])->name('cadastrar-index');
    Route::post('/', [CadastrarController::class, 'store'])->name('cadastrar-store');
});