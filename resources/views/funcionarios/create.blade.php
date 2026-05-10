@extends('layouts.app')

@section('title', 'Cadastrar Funcionário')

@section('content')
    <section class="page-container">

        <h1>Cadastrar Funcionário</h1>

        <form action="/funcionarios" method="POST" class="form-container">

            @csrf


            <input type="text" name="nome" placeholder="Nome do funcionário" required>

            <input type="text" name="telefone" placeholder="Telefone" required>

            <input type="text" name="cargo" placeholder="Cargo" required>

            <input type="text" name="usuario" placeholder="Usuário" required>

            <input type="password" name="senha" placeholder="Senha" required>

            <button type="submit" class="cadastrar-btn">
                Salvar Funcionário
            </button>

        </form>

    </section>
@endsection