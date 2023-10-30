@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full max-w-md mx-auto">
            <div class="card bg-white rounded-lg shadow-lg">
                <div class="card-body">
                    <h1 class="text-2xl font-semibold">Detalles de la Venta</h1>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cliente: {{ $venta->cliente->nombre }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Producto: {{ $venta->producto->nombre }}</h6>
                            <p class="card-text">Cantidad: {{ $venta->cantidad }}</p>
                            <p class="card-text">Total: {{ $venta->total }}</p>
                        </div>

                        <div class="flex justify-center">
                            <a href="{{ route('ventas.index') }}" class="btn btn-primary">Volver</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
