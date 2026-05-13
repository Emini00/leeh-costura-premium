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

                <a href="/dashboard">Início</a>

                <a href="/funcionarios">Funcionários</a>

                <a href="/clientes">Clientes</a>

                <a href="#">Serviços</a>

                <a href="#">Pagamentos</a>

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

</body>

</html>