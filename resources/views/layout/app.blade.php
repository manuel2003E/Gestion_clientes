<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('creditos.index') }}">Créditos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('reportes.index') }}">Reportes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pagos.index') }}">Pagos</a>
    </li>
</ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
</html>
