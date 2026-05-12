<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class LoginController extends Controller
{
    public function index()
    {
       return view('auth.login');
    }

    public function login(Request $request)
    {
        $funcionario = Funcionario::where('usuario', $request->usuario)
            ->where('senha', $request->senha)
            ->first();

        if ($funcionario) {
            session(['funcionario_id' => $funcionario->id]);
            session(['funcionario_nome' => $funcionario->nome]);

            return redirect('/dashboard');
        }

        return redirect('/login');
    }

   public function logout()
{
    session()->flush();

    return redirect('/login');
}
}