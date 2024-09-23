@extends('layout.app')

@section('title', 'Actualizar Registro')

@section('content')
<div class="container">
    <h1>Actualizar Registro</h1>
    <form action="{{ $formAction }}" method="POST">
        @csrf
        @method('PUT')
        @yield('form-content')
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route($routeIndex) }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
