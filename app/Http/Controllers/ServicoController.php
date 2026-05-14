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
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        Servico::create([
            'funcionario_id' => $request->funcionario_id,
            'carga_id' => $request->carga_id,
            'quantidade' => $request->quantidade,
            'valor_total' => $request->valor_total,
            'status' => $request->status,
        ]);

        return redirect('/servicos');
    }

    public function edit($id)
    {
        $servico = Servico::findOrFail($id);

        return view('servicos.edit', compact('servico'));
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