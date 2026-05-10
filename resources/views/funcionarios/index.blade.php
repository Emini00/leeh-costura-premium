@extends('layouts.app')

@section('title', 'Funcionários | Leeh Costura Premium')

@section('content')
    <section class="page-container">

        <div class="page-header">
            <div>
                <h1>Funcionários</h1>
                <p>Gerencie a equipe da facção de costura.</p>
            </div>

            <a href="/funcionarios/create" class="primary-button">
                + Cadastrar
            </a>
        </div>

        <div class="table-card">
            <h2>Lista de Funcionários</h2>

          <div class="employee-list">

    @foreach($funcionarios as $funcionario)

        <div class="employee-item">

            <div class="employee-top">
                <strong>{{ $funcionario->nome }}</strong>

                <span class="employee-status">
                    Ativa
                </span>
            </div>

            <span>{{ $funcionario->cargo }}</span>

            <small>
                Telefone: {{ $funcionario->telefone }}
            </small>

            <a href="#" class="edit-link">
                Editar
            </a>

        </div>

    @endforeach

</div>

