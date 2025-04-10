<?php

use App\Http\Controllers\Cadastrar\CadastrarController;
use App\Http\Controllers\Login\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Rota que busca o Login
Route::get('login/', [LoginController::class,'index'])->name('login-login');

Route::prefix('cadastrar')->group(function(){
    Route::get('/', [CadastrarController::class, 'index'])->name('cadastrar-index');
    Route::get('/create',[CadastrarController::class, 'create'])->name('cadastrar-create');
    Route::post('/', [CadastrarController::class, 'store'])->name('cadastrar-store');
});