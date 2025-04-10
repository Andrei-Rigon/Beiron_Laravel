<?php

namespace App\Models\Login;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'USUARIO',
        'LOGIN',
        'EMAIL',
        'SENHA',
        'DATAHORACADASTRO',
        'ATIVO',
    ];
}

