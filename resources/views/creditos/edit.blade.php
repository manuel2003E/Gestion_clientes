@extends('layout.update')

@section('title', 'Editar Crédito')

@php
    $formAction = route('creditos.update', $credito->id);
    $routeIndex = 'creditos.index';
@endphp

@section('form-content')
    <div class="mb-3">
        <label for="cliente_id" class="form-label">Cliente</label>
        <select class="form-select" name="cliente_id" required>
            @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ $cliente->id == $credito->cliente_id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="monto" class="form-label">Monto</label>
        <input type="number" class="form-control" name="monto" value="{{ $credito->monto }}" required>
    </div>
    <div class="mb-3">
        <label for="interes" class="form-label">Interés</label>
        <input type="number" class="form-control" name="interes" value="{{ $credito->interes }}" required>
    </div>
@endsection
