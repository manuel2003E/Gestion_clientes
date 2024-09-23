@extends('layout.update')

@section('title', 'Editar Cliente')

@php
    $formAction = route('clientes.update', $cliente->id);
    $routeIndex = 'clientes.index';
@endphp

@section('form-content')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ $cliente->nombre }}" required>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo" value="{{ $cliente->correo }}" required>
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" name="telefono" value="{{ $cliente->telefono }}" required>
    </div>
@endsection
