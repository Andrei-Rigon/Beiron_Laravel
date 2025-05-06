<?php

namespace App\Models\Email;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'LOGIN',
        'EMAIL',
        'TOKENCONSULTATION',
        'DATEREQUEST',
        'EXPIRADO',
    ];
}
