@extends('layouts.app')

@section('title', 'Cadastrar Funcionário')

@section('content')
    <section class="page-container">

        <h1>Cadastrar Funcionário</h1>

        <form action="/funcionarios" method="POST" class="form-container">

            @csrf

            <input type="text" name="nome" placeholder="Nome do funcionário">
            <input type="text" name="telefone" placeholder="Telefone">
            <input type="text" name="cargo" placeholder="Cargo">
            <input type="text" name="usuario" placeholder="Usuário">
            <input type="password" name="senha" placeholder="Senha">

            <button type="submit">
                Salvar Funcionário
            </button>

        </form>

    </section>
@endsection