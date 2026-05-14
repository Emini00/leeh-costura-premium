@extends('layouts.app')

@section('title', 'Cadastrar Cliente')

@section('content')

<section class="page-container">

    <h1>Cadastrar Cliente</h1>

    <form action="/clientes" method="POST" class="form-container">

        @csrf

        <input type="text"
            name="nome"
            placeholder="Nome do cliente"
            required>

        <input type="text"
            name="telefone"
            placeholder="Telefone"
            required>

        <input type="email"
            name="email"
            placeholder="E-mail">

        <input type="text"
            name="cidade"
            placeholder="Cidade">

        <button type="submit" class="cadastrar-btn">
            Salvar Cliente
        </button>

    </form>

</section>

@endsection