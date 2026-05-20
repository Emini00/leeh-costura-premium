<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();

        return view('servicos.index', compact('servicos'));
    }

    public function create()
    {
        $funcionarios = \App\Models\Funcionario::all();

        $cargas = \App\Models\Carga::all();

        return view('servicos.create', compact(
            'funcionarios',
            'cargas'
        ));
    }

    public function store(Request $request)
{
    $valorFinal =
        ($request->quantidade * $request->valor_unitario)
        - ($request->desconto ?? 0)
        + ($request->acrescimo ?? 0);

    Servico::create([
        'funcionario_id' => $request->funcionario_id,
        'carga_id' => $request->carga_id,
        'nome_sofa' => $request->nome_sofa,
        'modelo' => $request->modelo,
        'cor' => $request->cor,
        'tecido' => $request->tecido,
        'quantidade' => $request->quantidade,
        'valor_unitario' => $request->valor_unitario,
        'valor_total' => $request->valor_total,
        'desconto' => $request->desconto ?? 0,
        'motivo_desconto' => $request->motivo_desconto,
        'acrescimo' => $request->acrescimo ?? 0,
        'motivo_acrescimo' => $request->motivo_acrescimo,
        'valor_final' => $valorFinal,
        'observacoes' => $request->observacoes,
        'data_entrega' => $request->data_entrega,
        'status' => $request->status,
    ]);

    return redirect('/servicos');
}
    public function edit($id)
    {
        $servico = Servico::findOrFail($id);

        $funcionarios = \App\Models\Funcionario::all();

        return view('servicos.edit', compact(
            'servico',
            'funcionarios'
        ));
    }
    public function update(Request $request, $id)
    {
        $servico = Servico::findOrFail($id);

        $servico->update([
            'funcionario_id' => $request->funcionario_id,
            'carga_id' => $request->carga_id,
            'quantidade' => $request->quantidade,
            'valor_total' => $request->valor_total,
            'status' => $request->status,
            'nome_sofa' => $request->nome_sofa,
            'modelo' => $request->modelo,
            'cor' => $request->cor,
            'tecido' => $request->tecido,

            'valor_unitario' => $request->valor_unitario,
            'observacoes' => $request->observacoes,
            'data_entrega' => $request->data_entrega,
        ]);

        return redirect('/servicos');
    }

    public function destroy($id)
    {
        $servico = Servico::findOrFail($id);

        $servico->delete();

        return redirect('/servicos');
    }
}