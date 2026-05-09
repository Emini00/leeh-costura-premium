@extends('layouts.app')

@section('title', 'Cadastrar Funcionário')

@section('content')
    <section class="page-container">

        <h1>Cadastrar Funcionário</h1>

        <form class="form-container">

            <input type="text" placeholder="Nome do funcionário">

            <input type="text" placeholder="Telefone">

            <input type="text" placeholder="Cargo">

            <button type="submit">
                Salvar Funcionário
            </button>

        </form>

    </section>
@endsection