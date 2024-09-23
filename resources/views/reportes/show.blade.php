@extends('layout.app')

@section('title', 'Reportes')

@section('content')
<div class="container">
    <h1>Detalles de Reportes</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Reporte</th>
                <th>Fecha de Generación</th>
                <th>Cliente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportes as $reporte)
            <tr>
                <td>{{ $reporte->id_reporte }}</td>
                <td>{{ $reporte->tipo_reporte }}</td>
                <td>{{ $reporte->fecha_generacion }}</td>
                <td>{{ $reporte->cliente->nombre }}</td>
                <td>
                    <a href="{{ route('reportes.edit', $reporte->id_reporte) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('reportes.destroy', $reporte->id_reporte) }}" method="POST" style="display:inline;">
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