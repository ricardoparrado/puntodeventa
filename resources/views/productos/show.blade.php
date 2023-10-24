@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="text-2xl font-semibold">Detalles del Producto</h1>
        <a href="{{ route('productos.index') }}" class="text-blue-500 hover:underline">Volver a la Lista</a>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
        <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
        <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
        <p><strong>Precio:</strong> {{ $producto->precio }}</p>
        <p><strong>Existencias:</strong> {{ $producto->existencias }}</p>
        <!-- Otros campos y detalles específicos del producto -->
    </div>
@endsection
