<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $filable = [
        'name',
        'cpf',
        'contact'
    ];

    //variavel criada para ocultar itens sensiveis ('password')
    protected $hidden = [];
}
