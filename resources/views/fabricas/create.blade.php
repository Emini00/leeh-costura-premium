@extends('layouts.app')

@section('title', 'Nova Fábrica')

@section('content')

    <section class="page-container">

        <h1>Cadastrar Fábrica</h1>
       
        <form action="/fabricas" method="POST" class="form-container">

            @csrf
             <label>Nome da Fabrica</label>
            <input type="text" name="nome" placeholder="Nome da fábrica" required>
             <label>Telefone</label>
            <input type="text" name="telefone" placeholder="Telefone">
             <label>Cidade</label>
            <input type="text" name="cidade" placeholder="Cidade">


            <button type="submit" class="cadastrar-btn">

                Salvar Fábrica

            </button>

        </form>

    </section>

@endsection
