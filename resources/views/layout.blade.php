<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <strong>ETEC ZONA LESTE</strong>

    <nav>
        <a href="/">Início</a>
        <a href="/sobre">Sobre</a>
        <a href="/cursos">Cursos</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>

@vite('resources/css/app.css')