<?php

namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use App\Models\Login\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('Login/login');        
    }
}
