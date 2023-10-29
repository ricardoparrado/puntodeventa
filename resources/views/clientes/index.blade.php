@extends('layouts.app')

@section('titulo', 'Clientes')
@section('cabecera', 'Clientes')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold">Listado de Clientes</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-2">Agregar Cliente</a>
        </div>

        <div class="card w-full shadow-lg bg-white p-4 rounded-lg">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Teléfono</th>
                        <th class="px-4 py-2 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td class="px-4 py-2">{{ $cliente->id }}</td>
                            <td class="px-4 py-2">{{ $cliente->nombre }}</td>
                            <td class="px-4 py-2">{{ $cliente->email }}</td>
                            <td class="px-4 py-2">{{ $cliente->telefono }}</td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{ route('clientes.show', $cliente->id) }}"
                                    class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Ver</a>
                                <a href="{{ route('clientes.edit', $cliente->id) }}"
                                    class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                                        onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
