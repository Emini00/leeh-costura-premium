<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carga;

class CargaController extends Controller
{
    public function index()
    {
        $cargas = Carga::all();

        return view('cargas.index', compact('cargas'));
    }

    public function create()
    {
        $fabricas = \App\Models\Fabrica::all();

        return view('cargas.create', compact('fabricas'));
    }

    public function store(Request $request)
    {
        Carga::create([
            'fabrica_id' => $request->fabrica_id,
            'modelo' => $request->modelo,
            'quantidade' => $request->quantidade,
            'valor_unitario' => $request->valor_unitario,
            'status' => $request->status,
        ]);

        return redirect('/cargas');
    }

    public function edit($id)
{
    $carga = Carga::findOrFail($id);

    $fabricas = \App\Models\Fabrica::all();

    return view('cargas.edit', compact('carga', 'fabricas'));
}
    public function update(Request $request, $id)
    {
        $carga = Carga::findOrFail($id);

        $carga->update([
            'fabrica_id' => $request->fabrica_id,
            'modelo' => $request->modelo,
            'quantidade' => $request->quantidade,
            'valor_unitario' => $request->valor_unitario,
            'status' => $request->status,
        ]);

        return redirect('/cargas');
    }

    public function destroy($id)
    {
        $carga = Carga::findOrFail($id);

        $carga->delete();

        return redirect('/cargas');
    }
}