<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <style>
        body {
            margin: 0;
            height: 100vh;
            overflow: hidden;
            background: #000; /* Color de fondo para el espacio de la página */
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .background div {
            position: absolute;
            border-radius: 50%;
            opacity: 0.5;
            animation: move 20s linear infinite;
        }

        @keyframes move {
            0% { transform: translate(0, 0); }
            100% { transform: translate(100vw, 100vh); }
        }

        /* Estilos para crear varios círculos de fondo animados */
        .circle1 {
            width: 300px;
            height: 300px;
            background: rgba(255, 0, 0, 0.5); /* Color y opacidad */
            top: 20%;
            left: 10%;
            animation-duration: 25s;
        }

        .circle2 {
            width: 200px;
            height: 200px;
            background: rgba(0, 0, 255, 0.5);
            top: 50%;
            left: 40%;
            animation-duration: 30s;
        }

        .circle3 {
            width: 400px;
            height: 400px;
            background: rgba(0, 255, 0, 0.5);
            top: 80%;
            left: 70%;
            animation-duration: 20s;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            {{-- Menú para usuarios autenticados --}}
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/home">Inicio</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Clientes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/clientes/create">Crear cliente</a></li>
              <li><a class="dropdown-item" href="/clientes/update">Actualizar Cliente</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/clientes/show">Mostrar</a></li>
            </ul>
          </li>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Creditos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/creditos/create">Crear creditos</a></li>
              <li><a class="dropdown-item" href="/creditos/update">Actualizar Creditos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/creditos/show">Mostrar</a></li>
            </ul>
          </li>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pagos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pagos/create">Crear pagos</a></li>
              <li><a class="dropdown-item" href="/pagos/update">Actualizar Pagos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/pagos/show">Mostrar</a></li>
            </ul>
          </li>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reportes</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/reportes/create">Crear reportes</a></li>
              <li><a class="dropdown-item" href="/reportes/update">Actualizar reportes</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/reportes/show">Mostrar</a></li>
            </ul>
          </li>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuarios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/usuarios/create">Crear usuarios</a></li>
              <li><a class="dropdown-item" href="/usuarios/update">Actualizar Usuarios</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/usuarios/show">Mostrar</a></li>
            </ul>
          </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Contenido principal --}}
        <main class="py-4 container-fluid">
            @yield('content')
        </main>
    </div>

    {{-- Scripts de Bootstrap y Popper.js para menús desplegables --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    {{-- Otros scripts --}}
    @yield('scripts')
</body>
</html>