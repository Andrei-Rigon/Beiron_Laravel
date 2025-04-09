<?php

use App\Http\Controllers\Cadastrar\CadastrarController;
use App\Http\Controllers\Login\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Rota que busca o Login
Route::get('login/', [LoginController::class,'index']);

// Rota que busca o cadastrar
Route::get('Cadastrar/', [CadastrarController::class, 'index'])->name('cadastrar-index');


