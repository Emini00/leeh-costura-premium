@extends('layouts.app')

@section('title', 'Dashboard | Leeh Costura Premium')

@section('content')
    <section class="dashboard-page">

        <div class="dashboard-header">
            <div>
                <p class="welcome">Bem-vinda ao sistema</p>
                <h1>Leeh Costura Premium</h1>
            </div>
        </div>

        <div class="dashboard-cards">
            <a href="/funcionarios" class="dashboard-card">

                <h3>Funcionários</h3>

                <p>Controle da equipe</p>

            </a>

            <div class="dashboard-card">
                <h3>Clientes</h3>
                <p>Cadastro de clientes</p>
            </div>

            <div class="dashboard-card">
                <h3>Serviços</h3>
                <p>Produção e pedidos</p>
            </div>

            <div class="dashboard-card">
                <h3>Pagamentos</h3>
                <p>Controle financeiro</p>
            </div>
        </div>

    </section>
@endsection