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
}

