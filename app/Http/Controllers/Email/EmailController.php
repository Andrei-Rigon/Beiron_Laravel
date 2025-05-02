<?php

namespace App\Http\Controllers\Email;
use App\Models\Login\Usuario;
use App\Http\Controllers\Controller;
use App\Services\Email\sendService;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(){
        return view('Email.email');
    }

    public function store(Request $request){
        $LOGIN = $request->input('usuario');
        $EMAIL = $request->input('email');

        $ValidaLogin = Usuario::where('LOGIN', $LOGIN)->exists();
        $ValidaEmail = Usuario::where('EMAIL', $EMAIL)->exists();

        if(!$ValidaLogin) {
            return redirect()->
                back()->
                withInput()->with('loginError','Login incorreto');
        } else if (!$ValidaEmail) {
            return redirect()->
                back()->
                withInput()->with('loginError','Email invalido, favor inserir novamente');
        } else {
            $sendService = new sendService;
            $sendService->EnviarEmail($LOGIN, $EMAIL); 
        }
    }

    public function Recuperar(){
        return view('Email.RecuperarSenha');
    }
}
