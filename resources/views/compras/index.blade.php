@extends('layouts.app')

@section('titulo', 'Compras')
@section('cabecera', 'Compras')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">Lista de Compras</h1>
            <a href="{{ route('compras.create') }}"
                class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Nueva Compra</a>
        </div>

        @if (session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
        @endif


        @if (count($compras) > 0)
            <div class="card w-full shadow-lg bg-white p-4 rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left">ID</th>
                            <th class="px-4 py-2 text-left">Proveedor</th>
                            <th class="px-4 py-2 text-left">Producto</th>
                            <th class="px-4 py-2 text-left">Cantidad</th>
                            <th class="px-4 py-2 text-left">Total</th>
                            <th class="px-4 py-2 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($compras as $compra)
                            <tr>
                                <td class="px-4 py-2">{{ $compra->id }}</td>
                                <td class="px-4 py-2">{{ $compra->proveedor->nombre }}</td>
                                <td class="px-4 py-2">{{ $compra->producto->nombre }}</td>
                                <td class="px-4 py-2">{{ $compra->cantidad }}</td>
                                <td class="px-4 py-2">{{ $compra->total }}</td>
                                <td class="px-4 py-2 text-center">
                                    <a href="{{ route('compras.show', $compra->id) }}"
                                        class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Ver</a>
                                    <a href="{{ route('compras.edit', $compra->id) }}"
                                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Editar</a>
                                    <form action="{{ route('compras.destroy', $compra->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                                            onclick="return confirm('¿Estás seguro de eliminar esta compra?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No hay compras disponibles.</p>
        @endif
    </div>
@endsection
