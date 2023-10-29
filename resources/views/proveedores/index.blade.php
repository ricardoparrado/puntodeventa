@extends('layouts.app')

@section('titulo', 'Proveedores')
@section('cabecera', 'Proveedores')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">Lista de Proveedores</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 border border-green-400 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end">
        <a href="{{ route('proveedores.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg mb-4">Nuevo Proveedor</a>
        </div>

        <div class="card w-full shadow-lg bg-white p-4 rounded-lg">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Dirección</th>
                        <th class="px-4 py-2 text-left">Teléfono</th>
                        <th class="px-4 py-2 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proveedores as $proveedor)
                        <tr>
                            <td class="px-4 py-2">{{ $proveedor->id }}</td>
                            <td class="px-4 py-2">{{ $proveedor->nombre }}</td>
                            <td class="px-4 py-2">{{ $proveedor->direccion }}</td>
                            <td class="px-4 py-2">{{ $proveedor->telefono }}</td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{ route('proveedores.show', $proveedor->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Ver</a>
                                <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Editar</a>
                                <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
