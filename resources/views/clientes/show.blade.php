@extends('layouts.app')

@section('titulo', 'Detalles del Cliente')
@section('cabecera', 'Detalles del Cliente')

@section('content')
<div class="container mx-auto mt-8">
    <div class="w-full max-w-sm mx-auto">
        <div class="card bg-white rounded-lg shadow-lg">
            <div class="card-body space-y-4">
                <h1 class="text-2xl font-semibold">Detalles del Cliente</h1>

                <div class="flex space-x-2">
                    <strong class="font-semibold">Nombre:</strong>
                    <p>{{ $cliente->nombre }}</p>
                </div>

                <div class="flex space-x-2">
                    <strong class="font-semibold">Correo Electrónico:</strong>
                    <p>{{ $cliente->email }}</p>
                </div>

                <div class="flex space-x-2">
                    <strong class="font-semibold">Teléfono:</strong>
                    <p>{{ $cliente->telefono }}</p>
                </div>

                <div class="flex justify-center">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Volver al Listado</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
