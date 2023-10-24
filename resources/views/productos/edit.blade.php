@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="text-2xl font-semibold">Editar Producto</h1>
        <a href="{{ route('productos.index') }}" class="text-blue-500 hover:underline">Volver a la Lista</a>
    </div>

    <form method="POST" action="{{ route('productos.update', $producto->id) }}">
        @csrf
        @method('PUT')

        <div class="bg-white p-4 rounded-lg shadow">
            <div class="mb-4">
                <label for="nombre" class="block font-semibold">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block font-semibold">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="w-full p-2 border rounded">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="mb-4">
                <label for="precio" class="block font-semibold">Precio:</label>
                <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="existencias" class="block font-semibold">Existencias:</label>
                <input type="number" name="existencias" id="existencias" value="{{ $producto->existencias }}" class="w-full p-2 border rounded">
            </div>

            <!-- Otros campos para la edición del producto -->

            <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Actualizar Producto</button>
        </div>
    </form>
@endsection
