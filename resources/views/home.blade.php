<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio</title>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{--Definimos el titulo--}}
    @section('title', 'Inicio')

    {{--Definimos el contenido--}}
    @section('content')

<hr>
<h1><i>Proyecto</i></h1>
<h2><i>Registro de clientes,crédito y pago </i></h2>
@endsection
</div>


</body>
</html>