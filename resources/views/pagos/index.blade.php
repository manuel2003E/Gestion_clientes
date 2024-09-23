@extends('layout.app')

@section('title', 'Pagos')

@section('content')
<div class="container">
    <h1>Lista de Pagos</h1>
    <a href="{{ route('pagos.create') }}" class="btn btn-primary mb-3">Agregar Pago</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Crédito</th>
                <th>Monto Pagado</th>
                <th>Fecha de Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
            <tr>
                <td>{{ $pago->id }}</td>
                <td>{{ $pago->cliente->nombre }}</td>
                <td>{{ $pago->credito->monto }}</td>
                <td>{{ $pago->monto_pagado }}</td>
                <td>{{ $pago->fecha_pago }}</td>
                <td>
                    <a href="{{ route('pagos.edit', $pago->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display:inline;">
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
