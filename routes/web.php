<?php

use App\Http\Controllers\Cadastrar\CadastrarController;
use App\Http\Controllers\Email\EmailController;
use App\Http\Controllers\Login\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.login');
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

// Rota que busta e trata o Email
Route::prefix('email')->group(function(){
    Route::get('/', [EmailController::class, 'index'])->name('email-index');
    Route::post('/', [EmailController::class, 'store'])->name('email-store');
    Route::get('/RecuperarSenha', [EmailController::class, 'Recuperar'])->name('email-recuperar');
});