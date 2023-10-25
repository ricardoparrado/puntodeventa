@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Venta</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cliente: {{ $venta->cliente->nombre }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Producto: {{ $venta->producto->nombre }}</h6>
            <p class="card-text">Cantidad: {{ $venta->cantidad }}</p>
            <p class="card-text">Total: {{ $venta->total }}</p>
            <a href="{{ route('ventas.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
@endsection
