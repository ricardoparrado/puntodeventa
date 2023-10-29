@extends('layouts.app')

@section('titulo', 'Detalles de la Compra')
@section('cabecera', 'Detalles de la Compra')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white p-4 rounded-lg shadow">
        <h1 class="text-2xl font-semibold">Detalles de la Compra</h1>
        <div class="mb-4">
            <a href="{{ route('compras.index') }}" class="text-blue-500 hover:underline">Volver a la Lista</a>
        </div>

        <div class="mb-4">
            <p><strong>ID:</strong> {{ $compra->id }}</p>
            <p><strong>Proveedor:</strong> {{ $compra->proveedor->nombre }}</p>
            <p><strong>Producto:</strong> {{ $compra->producto->nombre }}</p>
            <p><strong>Cantidad:</strong> {{ $compra->cantidad }}</p>
            <p><strong>Total:</strong> {{ $compra->total }}</p>
        </div>
    </div>
</div>
@endsection
