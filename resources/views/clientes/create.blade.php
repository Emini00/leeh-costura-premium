@extends('layouts.app')

@section('title', 'Cadastrar Cliente')

@section('content')

    <section class="page-container">

        <h1>Cadastrar Aluno</h1>
        <a href="/clientes" class="back-button">
            ←
        </a>

        <form action="/clientes" method="POST" class="form-container">

            @csrf
            <label>Nome do Aluno</label>
            <input type="text" name="nome" placeholder="Nome do cliente" required>
            <label>Telefone</label>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <label>email</label>
            <input type="email" name="email" placeholder="E-mail">
            <label>cidade</label>
            <input type="text" name="cidade" placeholder="Cidade">

            <button type="submit" class="cadastrar-btn">
                Salvar Aluno
            </button>

        </form>

    </section>

@endsection