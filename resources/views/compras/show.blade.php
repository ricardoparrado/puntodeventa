@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Compra</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID de Compra: {{ $compra->id }}</h5>
            <p class="card-text">Proveedor: {{ $compra->proveedor->nombre }}</p>
            <p class="card-text">Producto: {{ $compra->producto->nombre }}</p>
            <p class="card-text">Cantidad: {{ $compra->cantidad }}</p>
            <p class="card-text">Total: {{ $compra->total }}</p>
        </div>
    </div>

    <a href="{{ route('compras.index') }}" class="btn btn-primary mt-3">Volver a la Lista de Compras</a>
</div>
@endsection
