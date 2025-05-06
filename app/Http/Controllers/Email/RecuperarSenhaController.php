<?php

namespace App\Http\Controllers\Email;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecuperarSenhaController extends Controller
{
    public function index() {  
        return view('Email.RecuperarSenha');
    }
         
    public function store(Request $request) {
        
    }
}
