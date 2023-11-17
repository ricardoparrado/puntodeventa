@extends('layouts.app')

@section('titulo', 'Editar Producto')
@section('cabecera', 'Editar Producto')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white w-full sm:w-96 p-6 rounded-lg shadow-lg">
        <div class="text-2xl font-semibold text-gray-700 mb-4">Editar Producto</div>

        <form method="POST" action="{{ route('productos.update', $producto->id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="space-y-2">
                <label for="nombre" class="block font-medium text-gray-700">Nombre</label>
                <input id="nombre" type="text" class="w-full px-4 py-2 border rounded-lg" name="nombre" value="{{ $producto->nombre }}" required>
            </div>

            <div class="space-y-2">
                <label for="descripcion" class="block font-medium text-gray-700">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="3" class="w-full px-4 py-2 border rounded-lg" required>{{ $producto->descripcion }}</textarea>
            </div>

            <div class="space-y-2">
                <label for="precio" class="block font-medium text-gray-700">Precio</label>
                <input id="precio" type="number" class="w-full px-4 py-2 border rounded-lg" name="precio" value="{{ $producto->precio }}" required>
            </div>

            <div class="space-y-2">
                <label for="existencias" class="block font-medium text-gray-700">Existencias</label>
                <input id="existencias" type="number" class="w-full px-4 py-2 border rounded-lg" name="existencias" value="{{ $producto->existencias }}" required>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="w-1/2 px-2 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Actualizar Producto
                </button>
                <a href="{{ route('productos.index') }}" class="w-1/2 px-4 py-2 bg-gray-300 text-gray-600 rounded-lg hover:bg-gray-400">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
