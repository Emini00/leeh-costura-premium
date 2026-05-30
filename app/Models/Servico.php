<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'funcionario_id',
        'carga_id',
        'quantidade',
        'status',
        'nome_sofa',
        'modelo',
        'cor',
        'tecido',
        'valor_unitario',
        'valor_total',
        'desconto',
        'motivo_desconto',
        'acrescimo',
        'motivo_acrescimo',
        'valor_final',
        'observacoes',
        'data_entrega',

    ];
}
