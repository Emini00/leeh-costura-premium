<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    protected $fillable = [
        'fabrica_id',
        'identificacao',
        'modelo',
        'modulo',
        'quantidade',
        'valor_unitario',
        'status',
    ];
}
