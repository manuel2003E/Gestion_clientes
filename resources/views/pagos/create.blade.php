@extends('layouts.app')

@section('title', 'Agregar Pago')

@section('content')
<div class="container">
    <h1>Agregar Pago</h1>

    {{-- Mostrar errores de validación --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pagos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select class="form-select" name="cliente_id" required>
                <option value="">Seleccione un cliente</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="credito_id" class="form-label">Crédito</label>
            <select class="form-select" name="credito_id" required>
                <option value="">Seleccione un crédito</option>
                @foreach ($creditos as $credito)
                    <option value="{{ $credito->id }}">{{ $credito->monto }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="monto_pagado" class="form-label">Monto Pagado</label>
            <input type="number" class="form-control" name="monto_pagado" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="fecha_pago" class="form-label">Fecha de Pago</label>
            <input type="date" class="form-control" name="fecha_pago" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('pagos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection