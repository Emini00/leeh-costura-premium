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

                    <a href="/funcionarios/{{ $funcionario->id }}/edit" class="primary-button">
                        Editar
                    </a>
                    <form action="/funcionarios/{{ $funcionario->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="primary-button"
                            onclick="return confirm('Tem certeza que deseja excluir este funcionário?')">
                            Excluir
                        </button>
                    </form>

                </div>

            @endforeach

        </div>