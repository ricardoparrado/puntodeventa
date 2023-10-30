@extends('layouts.app')

@section('titulo', 'Detalles de la Compra')
@section('cabecera', 'Detalles de la Compra')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full max-w-md mx-auto">
            <div class="card bg-white rounded-lg shadow-lg">
                <div class="card-body">
                    <h1 class="text-2xl font-semibold">Detalles de la Compra</h1>
                    
                    <div class="mb-4">
                        <p><strong>ID:</strong> {{ $compra->id }}</p>
                        <p><strong>Proveedor:</strong> {{ $compra->proveedor->nombre }}</p>
                        <p><strong>Producto:</strong> {{ $compra->producto->nombre }}</p>
                        <p><strong>Cantidad:</strong> {{ $compra->cantidad }}</p>
                        <p><strong>Total:</strong> {{ $compra->total }}</p>
                    </div>

                    <div class="flex justify-center">
                    <a href="{{ route('compras.index') }}" class="btn btn-primary mt-3">Volver a la Lista</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
