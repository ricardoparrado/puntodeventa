@extends('layouts.app')

@section('titulo', 'Detalles del Proveedor')
@section('cabecera', 'Detalles del Proveedor')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white p-4 rounded-lg shadow">
            <h1 class="text-2xl font-semibold">Detalles del Proveedor</h1>

            <div class="mb-4">
                <p class="font-medium">Nombre:</p>
                <p>{{ $proveedor->nombre }}</p>
            </div>

            <div class="mb-4">
                <p class="font-medium">Dirección:</p>
                <p>{{ $proveedor->direccion }}</p>
            </div>

            <div class="mb-4">
                <p class="font-medium">Teléfono:</p>
                <p>{{ $proveedor->telefono }}</p>
            </div>

            <div class="mt-4">
                <a href="{{ route('proveedores.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Regresar</a>
            </div>
        </div>
    </div>
@endsection
