@extends('layout.app')

@section('title', 'Generar Reporte')

@section('content')
<div class="container">
    <h1>Generar Reporte</h1>
    <form action="{{ route('reportes.store') }}" method="POST">
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
            <label for="credito_id" class="form-label">Crédito</label>
            <select class="form-select" name="credito_id" required>
                @foreach ($creditos as $credito)
                <option value="{{ $credito->id }}">{{ $credito->monto }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="total_pagado" class="form-label">Total Pagado</label>
            <input type="number" class="form-control" name="total_pagado" required>
        </div>
        <div class="mb-3">
            <label for="saldo_pendiente" class="form-label">Saldo Pendiente</label>
            <input type="number" class="form-control" name="saldo_pendiente" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('reportes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
