@extends('layouts.app')

@section('title', 'Pagos')

@section('content')
<div class="container">
    <h1>Detalles de Pagos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Monto</th>
                <th>Fecha de Pago</th>
                <th>Crédito</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
            <tr>
                <td>{{ $pago->id_pago }}</td>
                <td>{{ $pago->monto_pago }}</td>
                <td>{{ $pago->fecha_pago }}</td>
                <td>{{ $pago->credito->id_credito }}</td>
                <td>
                    <a href="{{ route('pagos.edit', $pago->id_pago) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('pagos.destroy', $pago->id_pago) }}" method="POST" style="display:inline;">
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