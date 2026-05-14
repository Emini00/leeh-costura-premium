<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Cliente;

class DashboardController extends Controller
{
    public function index()
    {
        $totalFuncionarios = Funcionario::count();

        $totalClientes = Cliente::count();

        return view('dashboard.index', compact(
            'totalFuncionarios',
            'totalClientes'
        ));
    }
}