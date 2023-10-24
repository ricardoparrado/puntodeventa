@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="text-2xl font-semibold">Lista de Productos</h1>
        <a href="{{ route('productos.create') }}" class="text-blue-500 hover:underline">Agregar Producto</a>
    </div>

    @if (count($productos) > 0)
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Precio</th>
                    <th class="px-4 py-2">Existencias</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td class="px-4 py-2">{{ $producto->nombre }}</td>
                        <td class="px-4 py-2">{{ $producto->precio }}</td>
                        <td class="px-4 py-2">{{ $producto->existencias }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('productos.show', $producto->id) }}" class="text-blue-500 hover:underline">Ver</a>
                            <a href="{{ route('productos.edit', $producto->id) }}" class="text-green-500 hover:underline ml-2">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay productos disponibles.</p>
    @endif
@endsection
