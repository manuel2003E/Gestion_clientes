@extends('layout.app')

@section('title', 'Créditos')

@section('content')
<div class="container">
    <h1>Detalles de Créditos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Monto</th>
                <th>Interés</th>
                <th>Cliente</th>
                <th>Fecha de Crédito</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($creditos as $credito)
            <tr>
                <td>{{ $credito->id_credito }}</td>
                <td>{{ $credito->monto }}</td>
                <td>{{ $credito->interes }}</td>
                <td>{{ $credito->cliente->nombre }}</td>
                <td>{{ $credito->fecha_credito }}</td>
                <td>
                    <a href="{{ route('creditos.edit', $credito->id_credito) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('creditos.destroy', $credito->id_credito) }}" method="POST" style="display:inline;">
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