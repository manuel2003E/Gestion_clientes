@extends('layout.app')

@section('title', 'Créditos')

@section('content')
<div class="container">
    <h1>Lista de Créditos</h1>
    <a href="{{ route('creditos.create') }}" class="btn btn-primary mb-3">Agregar Crédito</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Monto</th>
                <th>Interés</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($creditos as $credito)
            <tr>
                <td>{{ $credito->id }}</td>
                <td>{{ $credito->cliente->nombre }}</td>
                <td>{{ $credito->monto }}</td>
                <td>{{ $credito->interes }}</td>
                <td>
                    <a href="{{ route('creditos.edit', $credito->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('creditos.destroy', $credito->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
