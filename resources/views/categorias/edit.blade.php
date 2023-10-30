@extends('layouts.app')

@section('titulo', 'Editar Categoría de Productos')
@section('cabecera', 'Editar Categoría de Productos')


@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full max-w-md mx-auto">
            <div class="card bg-white rounded-lg shadow-lg">
                <div class="card-body">
                    <div class="text-2xl font-semibold mb-4">Editar Categoría de Productos</div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('categorias.update', $categoria->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="card w-full shadow-lg bg-white p-4 rounded-lg">
                            <div class="form-control">
                                <label for="nombre" class="block font-medium mb-2">Nombre</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="nombre"
                                    name="nombre" value="{{ old('nombre', $categoria->nombre) }}" required>
                            </div>

                            <div class="form-control">
                                <label for="descripcion" class="block font-medium mb-2">Descripción</label>
                                <textarea class="w-full p-2 border border-gray-300 rounded" id="descripcion" name="descripcion" rows="4">{{ old('descripcion', $categoria->descripcion) }}</textarea>
                            </div>

                            <div class="flex justify-center mt-4">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <a href="{{ route('categorias.index') }}" class="btn btn-secondary ml-2">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>        
@endsection
