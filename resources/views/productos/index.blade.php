@extends('layouts.app')

@section('titulo', 'Productos')
@section('cabecera', 'Productos')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="text-2xl font-semibold mb-4">Lista de Productos</div>
        
        <div class="flex justify-end">
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-4">Crear Producto</a>
        </div>
        
        @if (count($productos) > 0)
            <div class="overflow-x-auto">
                <div class="card w-full shadow-lg bg-white p-4 rounded-lg">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">Nombre</th>
                                <th class="px-4 py-2 text-left">Precio</th>
                                <th class="px-4 py-2 text-left">Existencias</th>
                                <th class="px-4 py-2 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="px-4 py-2">{{ $producto->nombre }}</td>
                                    <td class="px-4 py-2">${{ $producto->precio }}</td>
                                    <td class="px-4 py-2">{{ $producto->existencias }}</td>
                                    <td class="px-4 py-2 text-center">
                                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info">Detalles</a>
                                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <p>No hay productos disponibles.</p>
        @endif
    </div>
@endsection
