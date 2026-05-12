<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Leeh Costura Premium')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header class="main-header">
    <div class="logo">
        LEEH COSTURA
    </div>

    <input type="checkbox" id="menu-toggle">

    <label for="menu-toggle" class="menu-button">
        ☰
    </label>

    <nav class="main-nav">
        <a href="/dashboard">Dashboard</a>
        <a href="/funcionarios">Funcionários</a>
        <a href="/clientes">Clientes</a>
        <a href="#">Serviços</a>
        <a href="#">Pagamentos</a>
    </nav>
</header>

    <main>
        @yield('content')
    </main>

    <footer class="main-footer">
        <p>© 2026 Leeh Costura Premium. Todos os direitos reservados.</p>
    </footer>

</body>

</html>