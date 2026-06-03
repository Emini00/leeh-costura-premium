<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Leeh Costura Premium')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @if(session('funcionario_id'))

        <header class="main-header">

            <div class="logo">
                <img src="{{ asset('images/logo-4.png') }}" alt="Leeh Costura Premium">
            </div>

            <input type="checkbox" id="menu-toggle">

            <label for="menu-toggle" class="menu-button">
                ☰
            </label>

            <nav class="main-nav">

                <a href="/dashboard">
                    Início
                </a>

                <div class="nav-dropdown">

                    <button class="dropdown-button">
                        Funcionários
                    </button>

                    <div class="dropdown-content">

                        <a href="/funcionarios">
                            Lista de Funcionários
                        </a>

                        <a href="/funcionarios/create">
                            Cadastrar Funcionário
                        </a>

                    </div>

                </div>

                <div class="nav-dropdown">

                    <button class="dropdown-button">
                        Alunos
                    </button>

                    <div class="dropdown-content">

                        <a href="/clientes">
                            Lista de alunos
                        </a>

                        <a href="/clientes/create">
                            Cadastrar Aluno
                        </a>

                    </div>

                </div>

                <div class="nav-dropdown">

                    <button class="dropdown-button">
                        Serviços
                    </button>

                    <div class="dropdown-content">

                        <a href="/servicos">
                            Lista de Serviços
                        </a>

                        <a href="/servicos/create">
                            Cadastrar Serviço
                        </a>
                        <a href="/fabricas">
                            Fábricas
                        </a>

                        <a href="/fabricas/create">
                            Cadastrar Fábrica
                        </a>

                        <a href="/cargas">
                           Lista de Cargas
                        </a>

                        <a href="/cargas/create">
                            Cadastrar Carga
                        </a>

                    </div>

                </div>

                <a href="#">
                    Pagamentos
                </a>

                <span class="nav-user">
                    Olá, {{ session('funcionario_nome') }}
                </span>

                <form action="/logout" method="POST" class="logout-form">

                    @csrf

                    <button type="submit" class="logout-button">
                        Sair
                    </button>

                </form>

            </nav>

        </header>

    @endif

    <main>
        @yield('content')
    </main>

    @if(session('funcionario_id'))

        <footer class="main-footer">
            <p>
                © 2026 Leeh Costura Premium. Todos os direitos reservados.
            </p>
        </footer>

    @endif


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/servicos.js') }}"></script>

</body>

</html>