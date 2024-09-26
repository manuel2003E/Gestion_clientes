@extends('layouts.update')

@section('title', 'Editar Usuario')

@php
    $formAction = route('usuarios.update', $usuario->id_usuario);
    $routeIndex = 'usuarios.index';
@endphp

@section('form-content')
    <div class="mb-3">
        <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="nombre_usuario" value="{{ $usuario->nombre_usuario }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $usuario->email }}" required>
    </div>
    <div class="mb-3">
        <label for="rol" class="form-label">Rol</label>
        <select class="form-control" name="rol">
            <option value="admin" {{ $usuario->rol == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ $usuario->rol == 'user' ? 'selected' : '' }}>Usuario</option>
        </select>
    </div>
@endsection
