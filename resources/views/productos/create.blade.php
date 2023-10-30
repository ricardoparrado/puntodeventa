@extends('layouts.app')

@section('titulo', 'Crear Producto')
@section('cabecera', 'Crear Producto')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full sm:w-96 p-6 rounded-lg shadow-lg bg-white">
        <div class="text-2xl font-semibold text-gray-700 mb-4">Crear Producto</div>

        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            {{-- Categoría --}}
            <div class="space-y-2">
                <label for="categoria_id" class="block font-medium text-gray-700">Categoría</label>
                <select name="categoria_id" class="select select-bordered w-full">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Nombre --}}
            <div class="space-y-2">
                <label for="nombre" class="block font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre del producto" maxlength="100"
                    class="w-full px-4 py-2 border rounded-lg" value="{{ old('nombre') }}" required />
            </div>

            {{-- Imagen --}}
            <div class="space-y-2">
                <label for="imagen" class="block font-medium text-gray-700">Imagen</label>
                <input type="file" name="imagen"
                    class="file-input file-input-bordered file-input-success file-input-sm w-full max-w-xs"
                    accept=".jpg" required />
            </div>

            {{-- Descripción --}}
            <div class="space-y-2">
                <label for="descripcion" class="block font-medium text-gray-700">Descripción</label>
                <input type="text" name="descripcion" placeholder="Escriba la descripción" maxlength="255"
                    class="w-full px-4 py-2 border rounded-lg" value="{{ old('descripcion') }}" />
            </div>

            {{-- Precio --}}
            <div class="space-y-2">
                <label for="precio" class="block font-medium text-gray-700">Precio</label>
                <input type="number" name="precio" placeholder="Escriba el precio"
                    class="w-full px-4 py-2 border rounded-lg" value="{{ old('precio') }}" required />
            </div>

            {{-- Stock --}}
            <div class="space-y-2">
                <label for="existencias" class="block font-medium text-gray-700">Existencias</label>
                <input type="number" name="existencias" placeholder="Escriba la Existencia"
                    class="w-full px-4 py-2 border rounded-lg" value="{{ old('existencias') }}" required />
            </div>

            <div class="flex justify-between">
                <button type="submit"
                    class="w-1/2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Crear Producto
                </button>
                <a href="{{ route('productos.index') }}"
                    class="w-1/2 px-4 py-2 bg-gray-300 text-gray-600 rounded-lg hover:bg-gray-400">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
