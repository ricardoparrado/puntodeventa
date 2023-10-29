@extends('layouts.app')

@section('titulo', 'Categorías de Productos')
@section('cabecera', 'Categorías de Productos')


@section('content')
    <div class="container mx-auto mt-8">
        <div class="text-2xl font-semibold mb-4">Listado de Categorías de Productos</div>

        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end">
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">Crear Nueva Categoría</a>
        </div>

        <div class="card w-full shadow-lg bg-white p-4 rounded-lg">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Descripción</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td class="px-4 py-2">{{ $categoria->id }}</td>
                            <td class="px-4 py-2">{{ $categoria->nombre }}</td>
                            <td class="px-4 py-2">{{ $categoria->descripcion }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
