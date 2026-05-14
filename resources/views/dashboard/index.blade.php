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

            <div class="dashboard-card">

                <h3>Funcionários</h3>

                <p class="dashboard-number">
                    {{ $totalFuncionarios }}
                </p>

                <span>
                    cadastrados
                </span>

                <a href="/funcionarios" class="primary-button">
                    Gerenciar
                </a>

            </div>

            <div class="dashboard-card">

                <h3>Clientes</h3>

                <p class="dashboard-number">
                    {{ $totalClientes }}
                </p>

                <span>
                    cadastrados
                </span>

                <a href="/clientes" class="primary-button">
                    Gerenciar
                </a>

            </div>
            <div class="dashboard-card">
                <h3>Serviços</h3>
                <p>Produção e pedidos em andamento</p>

                <a href="#" class="primary-button">
                    Em breve
                </a>
            </div>

            <div class="dashboard-card">
                <h3>Pagamentos</h3>
                <p>Controle financeiro da empresa</p>

                <a href="#" class="primary-button">
                    Em breve
                </a>
            </div>

        </div>
    </section>
@endsection