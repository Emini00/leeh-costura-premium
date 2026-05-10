<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/funcionarios', [FuncionarioController::class, 'index']);

Route::get('/funcionarios/create', [FuncionarioController::class, 'create']);

Route::post('/funcionarios', [FuncionarioController::class, 'store']);

Route::get('/funcionarios/{id}/edit', [FuncionarioController::class, 'edit']);

Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update']);

Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy']);