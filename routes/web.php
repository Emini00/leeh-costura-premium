<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicoController;
Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/funcionarios', [FuncionarioController::class, 'index']);

Route::get('/funcionarios/create', [FuncionarioController::class, 'create']);

Route::post('/funcionarios', [FuncionarioController::class, 'store']);

Route::get('/funcionarios/{id}/edit', [FuncionarioController::class, 'edit']);

Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update']);

Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy']);



Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/create', [ClienteController::class, 'create']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit']);
Route::put('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

Route::get('/servicos', [ServicoController::class, 'index']);
Route::get('/servicos/create', [ServicoController::class, 'create']);
Route::post('/servicos', [ServicoController::class, 'store']);
Route::get('/servicos/{id}/edit', [ServicoController::class, 'edit']);
Route::put('/servicos/{id}', [ServicoController::class, 'update']);
Route::delete('/servicos/{id}', [ServicoController::class, 'destroy']);