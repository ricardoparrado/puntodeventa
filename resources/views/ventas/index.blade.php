@extends('layouts.app')

@section('titulo', 'Lista de Ventas')
@section('cabecera', 'Lista de Ventas')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">Lista de Ventas</h1>

        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end">
            <a href="{{ route('ventas.create') }}" class="btn btn-primary">Nueva Venta</a>
        </div>

        <div class="card w-full shadow-lg bg-white p-4 rounded-lg">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Cliente</th>
                        <th class="px-4 py-2">Producto</th>
                        <th class="px-4 py-2">Cantidad</th>
                        <th class="px-4 py-2">Total</th>
                        <th class="px-4 py-2 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                        <tr>
                            <td class="px-4 py-2">{{ $venta->id }}</td>
                            <td class="px-4 py-2">{{ $venta->cliente->nombre }}</td>
                            <td class="px-4 py-2">{{ $venta->producto->nombre }}</td>
                            <td class="px-4 py-2">{{ $venta->cantidad }}</td>
                            <td class="px-4 py-2">${{ $venta->total }}</td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{ route('ventas.show', $venta->id) }}"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mx-1">Ver</a>
                                <a href="{{ route('ventas.edit', $venta->id) }}"
                                    class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mx-1">Editar</a>
                                <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded mx-1"
                                        onclick="return confirm('¿Estás seguro de eliminar esta venta?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
