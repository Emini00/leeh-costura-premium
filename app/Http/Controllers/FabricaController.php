<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabrica;

class FabricaController extends Controller
{
    public function index()
    {
        $fabricas = Fabrica::all();

        return view('fabricas.index', compact('fabricas'));
    }

    public function create()
    {
        return view('fabricas.create');
    }

    public function store(Request $request)
    {
        Fabrica::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'cidade' => $request->cidade,
        
        ]);

        return redirect('/fabricas');
    }

    public function edit($id)
    {
        $fabrica = Fabrica::findOrFail($id);

        return view('fabricas.edit', compact('fabrica'));
    }

    public function update(Request $request, $id)
    {
        $fabrica = Fabrica::findOrFail($id);

        $fabrica->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'cidade' => $request->cidade,
            
        ]);

        return redirect('/fabricas');
    }

    public function destroy($id)
    {
        $fabrica = Fabrica::findOrFail($id);

        $fabrica->delete();

        return redirect('/fabricas');
    }
}