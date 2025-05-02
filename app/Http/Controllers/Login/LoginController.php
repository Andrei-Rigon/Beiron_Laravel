<?php

namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use App\Models\Login\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('Login/login');        
    }

    public function store(Request $request) {
        // Recebe os dados para validação de usuario
        $Login = $request->input('LOGIN');
        $Password = $request->input('SENHA');

        // Verifica se o Login existe
        $Usuario = Usuario::where('LOGIN',$Login)->first();        

        // Verifica se a senha bate com o user
        if($Usuario && Hash::check($Password, $Usuario->SENHA)) {
            echo("Bombou");
        } else if (!$Usuario){
            return redirect()
                ->back()
                ->withInput()->with('loginError','Esse Ususario não existe');  
        } else {
            return redirect()
                ->back()
                ->withInput()->with('loginError','Senha Incorreta ai o Comedia');  
        }
    }
}
 