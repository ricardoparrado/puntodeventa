@extends('layouts.app')

@section('titulo', 'Editar Proveedor')
@section('cabecera', 'Editar Proveedor')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white p-4 rounded-lg shadow">
            <h1 class="text-2xl font-semibold">Editar Proveedor</h1>

            <form method="POST" action="{{ route('proveedores.update', $proveedor->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nombre" class="block font-medium mb-2">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="w-full p-2 border border-gray-300 rounded" value="{{ $proveedor->nombre }}">
                </div>

                <div class="mb-4">
                    <label for="direccion" class="block font-medium mb-2">Dirección</label>
                    <textarea name="direccion" id="direccion" class="w-full p-2 border border-gray-300 rounded" rows="4">{{ $proveedor->direccion }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="telefono" class="block font-medium mb-2">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="w-full p-2 border border-gray-300 rounded" value="{{ $proveedor->telefono }}">
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Guardar Cambios</button>
                <a href="{{ route('proveedores.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded ml-2">Regresar</a>
            </form>
        </div>
    </div>
@endsection
