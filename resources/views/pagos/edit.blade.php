@extends('layout.update')

@section('title', 'Editar Pago')

@php
    $formAction = route('pagos.update', $pago->id);
    $routeIndex = 'pagos.index';
@endphp

@section('form-content')
    <div class="mb-3">
        <label for="cliente_id" class="form-label">Cliente</label>
        <select class="form-select" name="cliente_id" required>
            @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ $cliente->id == $pago->cliente_id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="credito_id" class="form-label">Crédito</label>
        <select class="form-select" name="credito_id" required>
            @foreach ($creditos as $credito)
            <option value="{{ $credito->id }}" {{ $credito->id == $pago->credito_id ? 'selected' : '' }}>{{ $credito->monto }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="monto_pagado" class="form-label">Monto Pagado</label>
        <input type="number" class="form-control" name="monto_pagado" value="{{ $pago->monto_pagado }}" required>
    </div>
    <div class="mb-3">
        <label for="fecha_pago" class="form-label">Fecha de Pago</label>
        <input type="date" class="form-control" name="fecha_pago" value="{{ $pago->fecha_pago }}" required>
    </div>
@endsection
