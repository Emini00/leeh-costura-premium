<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/funcionarios', function () {
    return view('funcionarios.index');
});


Route::get('/funcionarios/create', function () {
    return view('funcionarios.create');
});  

