@extends('layout.app')

@section('title', 'Reportes')

@section('content')
<div class="container">
    <h1>Lista de Reportes</h1>
    <a href="{{ route('reportes.create') }}" class="btn btn-primary mb-3">Generar Reporte</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Crédito</th>
                <th>Total Pagado</th>
                <th>Saldo Pendiente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportes as $reporte)
            <tr>
                <td>{{ $reporte->id }}</td>
                <td>{{ $reporte->cliente->nombre }}</td>
                <td>{{ $reporte->credito->monto }}</td>
                <td>{{ $reporte->total_pagado }}</td>
                <td>{{ $reporte->saldo_pendiente }}</td>
                <td>
                    <a href="{{ route('reportes.edit', $reporte->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('reportes.destroy', $reporte->id) }}" method="POST" style="display:inline;">
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
