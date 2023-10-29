@extends('layouts.app')

@section('titulo', 'Crear Categoría')
@section('cabecera', 'Crear Categoría')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full max-w-md mx-auto">
            <div class="card bg-white rounded-lg shadow-lg">
                <div class="card-body">
                    <h1 class="text-2xl font-semibold mb-4">Crear Nueva Categoría de Productos</h1>

                    @if ($errors->any())
                        <div class="bg-red-100 text-red-700 border border-red-400 px-4 py-3 rounded mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('categorias.store') }}" class="w-full max-w-lg space-y-4">
                        @csrf

                        <div class="mb-4">
                            <label for="nombre" class="block font-medium mb-2">Nombre</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded" id="nombre"
                                name="nombre" value="{{ old('nombre') }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="descripcion" class="block font-medium mb-2">Descripción</label>
                            <textarea class="w-full p-2 border border-gray-300 rounded" id="descripcion" name="descripcion" rows="4">{{ old('descripcion') }}</textarea>
                        </div>

                        <div class="flex">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mr-2">Crear
                                Categoría</button>
                            <a href="{{ route('categorias.index') }}"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold py-2 px-4 rounded">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

