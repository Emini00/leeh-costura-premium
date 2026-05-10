<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'cargo',
        'usuario',
        'senha',
        'valor_por_sofa',
    ];
}