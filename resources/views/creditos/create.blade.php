@extends('layouts.app')

@section('title', 'Agregar Crédito')

@section('content')
<div class="container">
    <h1>Agregar Crédito</h1>
    <form action="{{ route('creditos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select class="form-select" name="cliente_id" required>
                @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="monto" class="form-label">Monto</label>
            <input type="number" class="form-control" name="monto" required>
        </div>
        <div class="mb-3">
            <label for="interes" class="form-label">Interés</label>
            <input type="number" class="form-control" name="interes" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('creditos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
