<?php

namespace App\Http\Controllers\Cadastrar;
use App\Http\Controllers\Controller;
use App\Models\Login\Usuario;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    public function index() {
        return view('Cadastrar.Cadastrar');
    }
    
    public function create()
    {
        return view('Cadastrar.create');
    }

    public function store(Request $request) 
    {
        // Recebe os dados para validação do IF
        $LOGIN = $request->input('LOGIN');
        $EMAIL = $request->input('EMAIL');
        $SENHA = $request->input('SENHA');
        $ConfirmarSenha = $request->input('ConfirmarSenha');
        
        // Prepara o Insert e Criptografa a senha
        $data = $request->all();
        $data['SENHA'] = bcrypt($request->input('SENHA'));
        
        // Verifica se o Usuario e o Login existem
        $Verificar_Usuario_Login = Usuario::where('LOGIN',$LOGIN)->exists();
        $Verificar_Usuario_Email = Usuario::where('EMAIL',$EMAIL)->exists();
         
        // Faz a validação para o Insert
        if ($Verificar_Usuario_Email) {
            return redirect()
                ->back()
                ->withInput()->with('loginError',"<script> alert('Esse Login já está sendo usado') </script>");
        } else if ($Verificar_Usuario_Login) {
            return redirect()
            ->back()
            ->withInput()->with('loginError',"<script> alert('Esse Login já está sendo usado') </script>");
        } else if ($SENHA != $ConfirmarSenha){ 
            return redirect()
            ->back()
            ->withInput()->with('loginError','As senhas não coincidem');
        } 
        else {
            Usuario::create($data);
            return redirect()->route('login-login');
        }

    }
}
