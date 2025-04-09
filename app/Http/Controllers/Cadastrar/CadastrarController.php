<?php

namespace App\Http\Controllers\Cadastrar;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    public function index() {
        return view('Cadastrar/Cadastrar');
    }
    
    public function create()
    {
        return view('Cadastrar/create');
    }

    public function store(Request $request) 
    {
        dd($request);
    }
}
