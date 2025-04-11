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
        $USUARIO = 'Teste';
        $LOGIN = $request->input('LOGIN');
        $EMAIL = $request->input('EMAIL');
        $SENHA = $request->input('SENHA');

        $request->validate(
            [
                'LOGIN' => 'required',
                'SENHA' => 'required',        
            ]
            );
        
        



        // Codigo do Yt
        //Usuario::create($request->all());
        //return redirect()->route('login-login');
        //dd($request->all());
    }
}
    