<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS e outros links -->
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/financeiro') }}">Financeiro</a>
            <a href="{{ url('/usuarios') }}">Usuários</a>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <p>&copy; Minha Aplicação 2024</p>
    </footer>
</body>
</html>
