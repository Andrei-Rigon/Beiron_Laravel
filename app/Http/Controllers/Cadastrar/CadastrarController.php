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
    
    public function store(Request $request) 
    {
        // Recebe os dados para validação do IF
        $LOGIN = $request->input('LOGIN');
        $EMAIL = $request->input('EMAIL');
        $SENHA = $request->input('SENHA');
        $ConfirmarSenha = $request->input('ConfirmarSenha');
        
        // Prepara o Insert e Criptografa a senha
        $request->validate( 
            ['SENHA' => 'required|min:1|max:25'],
            // Valida o campo de cima
            ['SENHA.max' => 'A senha deve ter no máximo :max caracteres',
             'SENHA.min' => 'A senha deve ter no minimo :min caracteres'],

        );
        
        $data = $request->all();
        $data['SENHA'] = bcrypt($request->input('SENHA'));
        
        // Verifica se o Usuario e o Login existem
        $Verificar_Usuario_Login = Usuario::where('LOGIN',$LOGIN)->exists();
        $Verificar_Usuario_Email = Usuario::where('EMAIL',$EMAIL)->exists();
         
        // Faz a validação para o Insert
        if ($Verificar_Usuario_Email) {
            return redirect()
                ->back() // Se o Usuario existir ele informa na View com @if session(loginError) que existe.
                ->withInput()->with('loginError','Esse Login já está sendo usado');
        } else if ($Verificar_Usuario_Login) {
            return redirect()
                ->back() // Se o Usuario existir ele informa na View com @if session(loginError) que existe.
                ->withInput()->with('loginError','Esse Login já está sendo usado');
        } else if ($SENHA != $ConfirmarSenha){ 
            return redirect()
            ->back() // // Se as Senhas estiverem incorretas ele valida a senha (Validação ocorre pelo front também).
            ->withInput()->with('loginError','As senhas não coincidem');
        } 
        else {
            // Faz o Insert e vai pro Login/login.blade
            Usuario::create($data);
            return redirect()->route('login-index');
        }

    }
}
 