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
        // Primeiro Passo Segundo o GPT
        if ($request->senha_primaria !== $request->SENHA){
            return back()
                ->withInput()
                ->withErrors(['SENHA' => 'As senhas não se coincidem']);
        }

        // Segundo passo pra validação segundo  GPT
        Usuario::create([
            'LOGIN' => $request->LOGIN,
            'EMAIL' => $request->EMAIL,
            'SENHA' => bcrypt($request->SENHA),
        ]);

        // Codigo do Yt
        //Usuario::create($request->all());
        //return redirect()->route('login-login');
        //dd($request->all());
    }
}
    