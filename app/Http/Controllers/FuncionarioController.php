<?php

namespace App\Http\Controllers;

class FuncionarioController extends Controller
{
    public function index()
    {
        return view('funcionarios.index');
    }
}