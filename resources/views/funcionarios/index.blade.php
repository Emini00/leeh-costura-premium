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
               <div class="employee-item">

    <div class="employee-top">
        <strong>larissa</strong>

        <span class="employee-status">
            Ativa
        </span>
    </div>

    <span>Costureira</span>

    <small>Telefone: (67) 99999-9999</small>

    <a href="#" class="edit-link">
        Editar
    </a>

</div>

               <div class="employee-item">

    <div class="employee-top">
        <strong>Daniel</strong>

        <span class="employee-status">
            Ativa
        </span>
    </div>

    <span>Costureiro</span>

    <small>Telefone: (67) 99999-9999</small>

    <a href="#" class="edit-link">
        Editar
    </a>

</div>
            </div>
        </div>

    </section>
@endsection