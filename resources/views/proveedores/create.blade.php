@extends('layouts.app')

@section('titulo', 'Nuevo Proveedor')
@section('cabecera', 'Nuevo Proveedor')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full max-w-md mx-auto">
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="card-body">
                    <h1 class="text-2xl font-semibold">Nuevo Proveedor</h1>

                    <form method="POST" action="{{ route('proveedores.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="nombre" class="block font-medium mb-2">Nombre</label>
                            <input type="text" name="nombre" id="nombre"
                                class="w-full p-2 border border-gray-300 rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="direccion" class="block font-medium mb-2">Dirección</label>
                            <textarea name="direccion" id="direccion" class="w-full p-2 border border-gray-300 rounded" rows="4"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="telefono" class="block font-medium mb-2">Teléfono</label>
                            <input type="text" name="telefono" id="telefono"
                                class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Guardar
                            Proveedor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
