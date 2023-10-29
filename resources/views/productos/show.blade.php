@extends('layouts.app')

@section('titulo', 'Detalles del Producto')
@section('cabecera', 'Detalles del Producto')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white w-full sm:w-96 p-6 rounded-lg shadow-lg">
        <div class="text-2xl font-semibold text-gray-700 mb-4">Detalles del Producto</div>

        <div class="space-y-2">
            <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
            <p><strong>Precio:</strong> {{ $producto->precio }}</p>
            <p><strong>Existencias:</strong> {{ $producto->existencias }}</p>
            <!-- Otros campos y detalles específicos del producto -->
        </div>

        <div class="flex justify-end mt-4">
            <a href="{{ route('productos.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                Volver a la Lista
            </a>
        </div>
    </div>
</div>
@endsection
