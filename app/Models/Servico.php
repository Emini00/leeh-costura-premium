<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'funcionario_id',
        'carga_id',
        'quantidade',
        'valor_total',
        'status',
        'nome_sofa',
        'modelo',
        'cor',
        'tecido',
        'valor_unitario',
        'observacoes',
        'data_entrega',
    ];
}
