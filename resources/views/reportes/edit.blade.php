@extends('layouts.update')

@section('title', 'Editar Reporte')

@php
    $formAction = route('reportes.update', $reporte->id);
    $routeIndex = 'reportes.index';
@endphp

@section('form-content')
    <div class="mb-3">
        <label for="cliente_id" class="form-label">Cliente</label>
        <select class="form-select" name="cliente_id" required>
            @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ $cliente->id == $reporte->cliente_id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="credito_id" class="form-label">Crédito</label>
        <select class="form-select" name="credito_id" required>
            @foreach ($creditos as $credito)
            <option value="{{ $credito->id }}" {{ $credito->id == $reporte->credito_id ? 'selected' : '' }}>{{ $credito->monto }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="total_pagado" class="form-label">Total Pagado</label>
        <input type="number" class="form-control" name="total_pagado" value="{{ $reporte->total_pagado }}" required>
    </div>
    <div class="mb-3">
        <label for="saldo_pendiente" class="form-label">Saldo Pendiente</label>
        <input type="number" class="form-control" name="saldo_pendiente" value="{{ $reporte->saldo_pendiente }}" required>
    </div>
@endsection
