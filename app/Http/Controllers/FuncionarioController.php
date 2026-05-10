<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();

        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }
    public function store(Request $request)
    {
        Funcionario::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'cargo' => $request->cargo,
            'usuario' => $request->usuario,
            'senha' => $request->senha,

        ]);

        return redirect('/funcionarios');
    }
    public function edit($id)
{
    $funcionario = Funcionario::findOrFail($id);

    return view('funcionarios.edit', compact('funcionario'));
}
public function update(Request $request, $id)
{
    $funcionario = Funcionario::findOrFail($id);

    $dados = [
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'cargo' => $request->cargo,
        'usuario' => $request->usuario,
    ];

    if ($request->filled('senha')) {
        $dados['senha'] = $request->senha;
    }

    $funcionario->update($dados);

    return redirect('/funcionarios');
}  

public function destroy($id)
{
    $funcionario = Funcionario::findOrFail($id);

    $funcionario->delete();

    return redirect('/funcionarios');
}


}

